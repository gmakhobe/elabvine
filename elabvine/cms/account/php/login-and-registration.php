<?php

include("../../php/config.php");

if (isset($_REQUEST['a1'])) {

    $myemailaddress = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['ema']);
    $mypassword = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['pas']);
    $rememberme = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['rem']);

    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM company WHERE email_address = '$myemailaddress' and password = '$mypassword'");

    if (mysqli_num_rows($sql) > 0) {

        session_start();
        $_SESSION['elabvine_api_session'] = $myemailaddress;

        if ($rememberme != "") {

            $cookie_name = "elavine_api_remember_user_session";
            $cookie_value = $_SESSION['elabvine_api_session'];
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
        } else {
            
        }

        echo "success";
    } else {
        echo "error";
    }
} else if (isset($_REQUEST['a2'])) {

    $namesurname = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['namsur']);
    $emailaddress = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['ema']);
    $password = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['pas']);

    $namesurname = ucwords($namesurname);

    $sql = "INSERT INTO company (admin_name, email_address, password, account_status, subscription_plan) VALUES('$namesurname', '$emailaddress', '$password', 'not verified', 'Start-Up');";

    if (mysqli_query($DATABASE_CONNECTION, $sql)) {


        if ($sql2 = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM company where email_address = '$emailaddress';")) {

            $row2 = mysqli_fetch_array($sql2, MYSQLI_ASSOC);
            $own_adminname = $row2['admin_name'];
            $own_emailaddress = $row2['email_address'];
            $own_password = $row2['password'];

            $to = $own_emailaddress;
            $now = date("Ymd");
            $subject = 'Elabvine New Account Registration';
            $message = '<html><body>';
            $message .= "<img src='img/main-logo.jpg' alt='Elabvine Logo' width='100px' height='78px'/>";
            $message .= "<hr><p>Hi $own_adminname, Thanks for signing up, below are your login details to your account. Click the the verification link to activate your account.</p><hr>";
            $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
            $message .= "<tr style='background: #eee;'><td><strong>Name and Surname:</strong> </td><td>$own_adminname</td></tr>";
            $message .= "<tr><td><strong>Email Address:</strong> </td><td>$to</td></tr>";
            $message .= "<tr><td><strong>Password:</strong> </td><td>$own_password</td></tr>";
            $message .= "<tr><td><strong>Verification Link:</strong> </td><td><a href='http://elabvine.com/php/verify-account.php?emailaddress=" . $to . "&passphrase=" . $now . "'>Varify Account</a></td></tr>";
            $message .= "<tr><td><strong>Urgency:</strong> </td><td>Priority</td></tr>";
            $message .= "<tr><td><strong>From:</strong> </td><td>no-reply@elabvine.com please do not reply to this email.</td></tr>";
            $message .= "</table>";
            $message .= "</body></html>";
            $headers = "From: no-reply@elabvine.com\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

            mail($to, $subject, $message, $headers);

            session_start();
            $_SESSION['elabvine_api_session'] = $emailaddress;
            
            $cookie_name = "elavine_api_remember_user_session";
            $cookie_value = $_SESSION['elabvine_api_session'];
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

            echo "success";
        } else {
            echo "error";
        }
    } else {
        echo "error";
    }
} else if (isset($_REQUEST['a3'])) {


    $dateofbirth = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST['datbir']);
    $gender = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST['gen']);
    $cellnumber = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST['cel']);
    $accounttype = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST['acctyp']);
    $cou = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST['cou']);
    $shortbio = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST['shobio']);
    $my_memberid = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST['mem']);

    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT Member_Id FROM all_members WHERE Member_Id = '$my_memberid';");

    if (mysqli_num_rows($sql) > 0) {

        $sql2 = "UPDATE all_members SET Date_Of_Birth = '" . $dateofbirth . "', Gender = '" . $gender . "', Cell_Number = '" . $cellnumber . "', Account_Type = '" . $accounttype . "', Country = '" . $cou . "', Short_Bio = '" . $shortbio . "', Account_Status = 'Finished' WHERE Member_Id = '" . $my_memberid . "';";

        if (mysqli_query($DATABASE_CONNECTION, $sql2)) {
            echo "success";
        } else {
            echo "error";
        }
    } else {
        echo "fatal error";
    }
} else if (isset($_REQUEST['a4'])) {
    //Include
    include("../../php/functions.php");

    $name = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['name']);
    $phone = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['phone']);
    $email = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['email']);
    $password = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['password']);
    $now = date("Y-m-d H:i:s");

       $sql = "INSERT INTO scimatix_members_information(Name, Phone, Email_Address, Password, Registration_Date, Account_Status) VALUES('$name', '$phone', '$email', '$password', '$now', 'Step 1');";

        if (mysqli_query($DATABASE_CONNECTION, $sql)) {

                
                $message = "<hr><p>Hi $email, Thanks for signing up, below are your login details to: scimatix.co.za</p><hr>Name and Surname:</strong> : $name<br><strong>Email Address:</strong> $email<br><strong>Password:</strong> $password<br><strong>Urgency:</strong> Priority";
                
                echo sendMailMessageToUser($email, "info@scimatix.co.za", "New Account Registration", $message);

        } else {
            echo "error";
        }
}
mysqli_close($DATABASE_CONNECTION);
?>