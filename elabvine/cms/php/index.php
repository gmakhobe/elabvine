<?php

//DB Config
include("config.php");
//request id
switch ($_REQUEST['reqId']) {
    case "newSubscriber":
        /**
         * newSubscriber
         */
        #user name
        $name = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST['name']);
        #user email
        $emailAddress = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST['email']);
        #date now
        $currentDateTime = date("Y-m-d h:i:s");
        #sql
        $sql = "INSERT INTO subscribers(name, email, source, date) VALUES('$name', '$emailAddress', 'elabvine', '$currentDateTime');";
        #execute
        if (mysqli_query($DATABASE_CONNECTION, $sql)) {
            $results = "success";
        } else {
            $results = "error";
        }
        #print
        echo $results;
        /**
         * End newSubscriber
         */
        break;
    case "linkAvailability":
        /**
         * linkAvailability
         */
        $url = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST['link']);
        $sql = mysqli_query($DATABASE_CONNECTION, "SELECT company_uri FROM company WHERE company_uri = '$url';");
        if (mysqli_num_rows($sql) >= 1) {
            $results = "error";
        } else {
            $results = "success";
        }
        echo $results;
        /**
         * End linkAvailability
         */
        break;
    case "getStartedRegistration":
        /**
         * getStartedRegistration
         */
        //Include functions file
        include("functions.php");
        //
        $emailAddress = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST['email']);
        $password = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST['password']);
        $storeName = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST['storename']);
        $adminName = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST['name']);
        $adminCell = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST['cell']);
        $platformType = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST['platformtype']);
        $date = date("Y-m-d H:i:s");
        #sql
        $sql = "INSERT INTO company(Name, Phone, Email_Address, Password, Company_Name, Platform_Type, Registration_Date, Account_Type, Account_Status) VALUES('$adminName', '$adminCell', '$emailAddress', '$password', '$storeName', '$platformType', '$date', 'Trial','Not Varified');";
        #insert into company
        if (mysqli_query($DATABASE_CONNECTION, $sql)) {

            session_start();
            $_SESSION['session_company_elabvine'] = $emailAddress;
            
            $message = "A new user just registered.<br>Name: $adminName<br>Cell: $adminCell<br>Company Name: $storeName<br>Login to see more information.";
            
            $results = sendMailMessageOnly($emailAddress, "New Account Registration | Elabvine.com", $message);
            
        } else {
            $results = "error";
        }
        echo $results;
        /**
         * End getStartedRegistration
         */
        break;
    case "loginSubmit":
        /**
         * loginSubmit
         */
        $email = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['email']);
        $password = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['password']);
        $remember = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['remember']);

        $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM company WHERE Email_Address = '$email' and Password = '$password'");

        if (mysqli_num_rows($sql) > 0) {

            session_start();
            $_SESSION['session_company_elabvine'] = $email;

            if ($remember == "yes") {
                $cookie_name = "remember_me_company_elabvine";
                $cookie_value = $_SESSION['session_company_elabvine'];
                setcookie($cookie_name, $cookie_value, time() + (86400 * 365), "/");
            }

            $results = "success";
        } else {
            $results = "error";
        }
        echo $results;
        /**
         * End loginSubmit
         */
        break;
}

