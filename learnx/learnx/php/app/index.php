<?php

header("Access-Control-Allow-Origin: *");

function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_REQUEST["req_reg"])) {
    #include config
    include("../config.php");

    #data
    $name = clean_input($_POST["name"]);
    $surname = clean_input($_POST["surname"]);
    $school = clean_input($_POST["school"]);
    $phone = clean_input($_POST["phone"]);
    $email = clean_input($_POST["email"]);
    $password = clean_input($_POST["password"]);
    $registration_date = date("Y-m-d H:i:s");

    $sql = "INSERT INTO learnx_users (Name, Surname, Phone, School, Email, Password, Registration_Date, Physics, Mathematics, Account_Status)
    VALUES('$name', '$surname', '$phone', '$school', '$email', '$password', '$registration_date','yes', 'yes', 'Step 1');";
    if (mysqli_query($DATABASE_CONNECTION, $sql)) {
        $res = "success";
    } else {
        $res = "error";
    }

    echo $res;
} else if (isset($_REQUEST["req_log"])) {
    #include config
    include("../config.php");

    #data
    $device = clean_input($_POST["uuid"]);
    $email = clean_input($_POST["email"]);
    $password = clean_input($_POST["password"]);

    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM learnx_users WHERE Email = '$email' AND Password = '$password';");
    if (mysqli_num_rows($sql) > 0) {

        $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
        $userId = $row["Id"];
        $name = $row["Name"];
        $surname = $row["Surname"];
        $email = $row["Email"];
        $phone = $row["Phone"];
        $school = $row["School"];
        $step = $row["Account_Status"];

        //Find row on app table
        $sql_fetch_1 = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `learnx_users_app` WHERE User_Id = '$userId';");
        if (mysqli_num_rows($sql_fetch_1) > 0) {
            $row = mysqli_fetch_array($sql_fetch_1, MYSQLI_ASSOC);
            $uuid = $row["UUID"];
            if ($uuid == $device || $uuid == "") {
                $now = date("Y-m-d H:i:s");
                $sql_update = "UPDATE `learnx_users_app` SET UUID = '$device', Log_Date = '$now' WHERE User_Id = '$userId';";
                if (mysqli_query($DATABASE_CONNECTION, $sql_update)) {

                    //Return an Array
                    $res = array("Id" => "success",
                        "UserId" => $userId,
                        "Name" => $name,
                        "Surname" => $surname,
                        "Email" => $email,
                        "School" => $school,
                        "Step" => $step);
                } else {
                    //Return an Array
                    $res = array("Id" => "error",
                        "Reason" => "An error occured please try again.");
                }
            } else {
                //Return an Array
                $res = array("Id" => "error",
                    "Reason" => "Only one deviced is allowed, please logout from already logged in device. If the device is lost contact us on WhatsApp: +2766 066 1480 to enable the current device to login.");
            }
        } else {
            $now = date("Y-m-d H:i:s");
            if (mysqli_query($DATABASE_CONNECTION, "INSERT INTO `learnx_users_app` (User_Id, UUID, Log_Date)
    VALUES('$userId', '$device', '$now');")) {
                //Return an Array
                $res = array("Id" => "success",
                    "UserId" => $userId,
                    "Name" => $name,
                    "Surname" => $surname,
                    "Email" => $email,
                    "School" => $school,
                    "Step" => $step);
            } else {
                //Return an Array
                $res = array("Id" => "error",
                    "Reason" => "An error occured please try again.");
            }
        }
    } else {
        //Return an Array
        $res = array("Id" => "error",
            "Reason" => "Email or Password might be incorrect, please try again.");
    }

    // Encoding array in JSON format
    echo json_encode($res);
} else if (isset($_REQUEST["req_profile"])) {
    #include config
    include("config.php");
    //Email Cookie
    $email_cookie = $_COOKIE['remember_me_learnx'];
    #data
    $name = clean_input($_REQUEST["name"]);
    $surname = clean_input($_REQUEST["surname"]);
    $phone = clean_input($_REQUEST["phone"]);
    $grade = clean_input($_REQUEST["grade"]);
    $school = clean_input($_REQUEST["school"]);
    $province = clean_input($_REQUEST["province"]);
    $password = clean_input($_REQUEST["passcode"]);

    $sql = "UPDATE learnx_users SET Name = '$name', Surname = '$surname', Phone = '$phone', Grade = '$grade', School = '$school', Province = '$province', Password = '$password' WHERE Email = '$email_cookie';";
    if (mysqli_query($DATABASE_CONNECTION, $sql)) {

        $res = "success";
    } else {
        $res = "error";
    }

    echo $res;
} else if (isset($_REQUEST["req_unlock_code"])) {
    #include config
    include("../config.php");
    #data
	$id = clean_input($_REQUEST["id"]);
	$code = clean_input($_REQUEST["code"]);
    $now = date("Y-m-d H:i:s");
    //Get Id
    $sql_id = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM learnx_users WHERE Id = '$id';");
    //See if code is active or exists
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM learnx_unlock_codes WHERE Code = '$code' AND Status = 'Active';");

    if (mysqli_num_rows($sql) > 0) {

        $sql_update = "UPDATE learnx_unlock_codes SET User_Id = '$id', Redeemed_Date = '$now', Status = 'Not Active' WHERE Code = '$code';";
        if (mysqli_query($DATABASE_CONNECTION, $sql_update)) {

            $sql_update_2 = "UPDATE learnx_users SET Account_Status = 'Step 3' WHERE Id = '$id';";
            if (mysqli_query($DATABASE_CONNECTION, $sql_update_2)) {

                $res = "success";
            } else {
                $res = "error3";
            }
        } else {
            $res = "error2";
        }
    } else {

        $res = "error1";
    }

    echo $res;
}else if (isset($_REQUEST["req_logout"])) {
    #include config
    include("../config.php");

    #data
    $device = clean_input($_POST["uuid"]);
    $userId = clean_input($_POST["id"]);
    
    $sql = "UPDATE learnx_users_app SET UUID = '', Log_Date = '0000-00-00 00:00:00' WHERE UUID = '$device' AND User_Id = '$userId';";
    if (mysqli_query($DATABASE_CONNECTION, $sql)) {
		$res = "success";
    } else {
        $res = "error";
    }

    echo $res;
}else if (isset($_REQUEST["req_update"])) {
    #include config
    include("../config.php");

    #data
    $version = clean_input($_POST["version"]);
    //Open file
	$file = fopen("version.txt", "r");
    $realVersion = fread($file,filesize("version.txt"));
	//See if needs update
	if($version == $realVersion){
		$res = "Up to date";
	}else{
		$res = "Update";
	}

    echo $res;
}
?>
