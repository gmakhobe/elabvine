<?php

//Configaration
include("config.php");
//Start Session
session_start();
//Session or cookie
//Session or cookie
if (isset($_SESSION['session_company_elabvine']) || isset($_COOKIE['remember_me_company_elabvine'])) {
    //Find session set or remember me
    if (isset($_SESSION['session_company_elabvine'])) {
        $email_address = $_SESSION['session_company_elabvine'];
    } else if (isset($_COOKIE['remember_me_company_elabvine'])) {
        $_SESSION['session_company_elabvine'] = $_COOKIE['remember_me_company_elabvine'];
        $email_address = $_SESSION['remember_me_company_elabvine'];
    } else {
        header("Location: http://scimatix.co.za");
    }

    //Get Current User Details
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `company` where Email_Address = '$email_address';");
    if (mysqli_num_rows($sql) > 0) {
        //Table scimatix_...
        $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
        $user_id = $row["Id"];
        $name = $row["Name"];
        $phone = $row["Phone"];
        $email = $row["Email_Address"];
        $company_name = $row["Company_Name"];
        $platform_type = $row["Platform_Type"];
        $registration_date = $row["Registration_Date"];
        $account_type = $row["Account_Type"];
        $account_status = $row["Account_Status"];
        $expiratiion_date = $row["Expiration_Date"];
        $seccondary_email = $row["Secondary_Email"];
        $bio = $row["Biography"];
        $password = $row["Password"];
        //query cookie
        $cookie_name = "query_company_cookie";
        $cookie_value = $user_id;
        setcookie($cookie_name, $cookie_value, time() + (86400 * 24), "/");
        //End query cookie
    } else {
        
    }

    //Start Functions
    function standardDate($date) {
        $d = strtotime($date);
        return date("d M, Y", $d);
    }

    //End Functions
} else {
    header("Location: ../");
}
?>