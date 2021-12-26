<?php

//Configaration
include("config.php");
//Start Session
session_start();
//Session or cookie
if (isset($_SESSION['session_scimatix']) || isset($_COOKIE['remember_me_scimatix'])) {

    if (isset($_SESSION['session_scimatix'])) {
        $email_address = $_SESSION['session_scimatix'];
    } else if (isset($_COOKIE['remember_me_scimatix'])) {
        $_SESSION['session_scimatix'] = $_COOKIE['remember_me_scimatix'];
        $email_address = $_SESSION['session_scimatix'];
    } else {
        header("Location: http://scimatix.co.za");
    }
    //Get Current User Details
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM " . $companyuri . "_members_information where Email_Address = '$email_address';");
    if (mysqli_num_rows($sql) > 0) {
        //Table scimatix_...
        $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
        $user_id = $row['Id'];
        $name = $row['Name'];
        $surname = $row['Surname'];
        $email = $row['Email_Address'];
        $cell = $row['Phone'];
        $account_type = $row['Account_Type'];
        $account_status = $row['Account_Status'];
        //End Table scimatix_...
        //Table members_...
        //Get Info
        $sql_2 = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `members_personal_information` where Member_Id = '$user_id';");
        $row_2 = mysqli_fetch_array($sql_2, MYSQLI_ASSOC);
        $profile_picture = $row_2['Profile_Picture'];
        $Hours = $row_2['Hours'];
        $wallet = $row_2['Wallet'];
        $address_street = $row_2['Address_Street'];
        $address_suburb = $row_2['Address_Suburb'];
        $address_city = $row_2['Address_City'];
        $address_zip = $row_2['Address_Zip'];
        //End Table members_...
        //query cookie
        $cookie_name = "query_cookie";
        $cookie_value = $user_id;
        setcookie($cookie_name, $cookie_value, time() + (86400 * 24), "/");
        //End query cookie
    } else {
        
    }
} else {
    header("Location: http://scimatix.co.za");
}
?>