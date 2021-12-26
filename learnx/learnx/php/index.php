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
    include("config.php");

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
        //Session
        session_start();
        $_SESSION['session_learnx'] = $email;
        //Auto Login
        $cookie_name = "remember_me_learnx";
        $cookie_value = $_SESSION['session_learnx'];
        setcookie($cookie_name, $cookie_value, time() + (86400 * 365), "/");

        $res = "success";
    } else {
        $res = "error";
    }

    echo $res;
} else if (isset($_REQUEST["req_log"])) {
    #include config
    include("config.php");

    #data
    $email = clean_input($_POST["email"]);
    $password = clean_input($_POST["password"]);

    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM learnx_users WHERE Email = '$email' AND Password = '$password';");
    if (mysqli_num_rows($sql) > 0) {
        //Session
        session_start();
        $_SESSION['session_learnx'] = $email;
        //Auto Login
        $cookie_name = "remember_me_learnx";
        $cookie_value = $_SESSION['session_learnx'];
        setcookie($cookie_name, $cookie_value, time() + (86400 * 365), "/");

        $res = "success";
    } else {
        $res = "error";
    }

    echo $res;
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
    include("config.php");
    //Email Cookie
    $email_cookie = $_COOKIE['remember_me_learnx'];
    #data
    $code = clean_input($_REQUEST["code"]);
    $now = date("Y-m-d H:i:s");
    //Get Id
    $sql_id = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM learnx_users WHERE Email = '$email_cookie';");
    $row = mysqli_fetch_array($sql_id, MYSQLI_ASSOC);
    $user_id = $row['Id'];
    //End Get Id
    //See if code is active or exists
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM learnx_unlock_codes WHERE Code = '$code' AND Status = 'Active';");

    if (mysqli_num_rows($sql) > 0) {

        $sql_update = "UPDATE learnx_unlock_codes SET User_Id = '$user_id', Redeemed_Date = '$now', Status = 'Not Active' WHERE Code = '$code';";
        if (mysqli_query($DATABASE_CONNECTION, $sql_update)) {

            $sql_update_2 = "UPDATE learnx_users SET Account_Status = 'Step 3' WHERE Email = '$email_cookie';";
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
}
?>
