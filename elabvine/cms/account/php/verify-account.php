<?php

include('../php/config.php');

if (!isset($_COOKIE['our_company_id'])) {
    $our_companyid = "";
} else {
    $our_companyid = mysqli_real_escape_string($DATABASE_CONNECTION, $_COOKIE['our_company_id']);
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM company WHERE company_id = '$our_companyid';");
    $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
    #$own_emailaddress = $row['email_address'];
}

if (isset($_REQUEST['resend'])) {
    
    $own_emailaddress = $_REQUEST['emailaddress'];
    
    $now = date("Ymd");
            $to = $own_emailaddress;
            $subject = 'Verification Link - elabvine';
            $message = '<html><body>';
            $message .= "<img src='elabvine.com/img/logo.png' alt='Elabvine Logo' width='147px' height='30px'/>";
            $message .= "<hr><p>Below is your verification link for your elabvine account</p><hr>";
            $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
            $message .= "<tr><td><strong>Verification Link:</strong> </td><td><a href='elabvine.com/php/verify-account.php?emailaddress=$own_emailaddress&passphrase=$now'>Varify Account</a></td></tr>";
            $message .= "<tr><td><strong>Urgency:</strong> </td><td>Priority</td></tr>";
            $message .= "<tr><td><strong>From:</strong> </td><td>no-reply@elabvine.com please do not reply to this email.</td></tr>";
            $message .= "</table>";
            $message .= "</body></html>";
            $headers = "From: no-reply@elabvine.com\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

            if(mail($to, $subject, $message, $headers)){
                echo "success";
               
            }else{
                echo "error";
                
            }
    
}if (isset($_REQUEST['passphrase'])) {
    $now = date("Ymd");
    if($now == $_REQUEST['passphrase']){
        
        $own_emailaddress = $_REQUEST['emailaddress'];
        
        $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM company WHERE email_address = '$own_emailaddress';");
        
        if(mysqli_num_rows($sql) > 0){
            
            if(mysqli_query($DATABASE_CONNECTION, "UPDATE company SET account_status = 'verified' WHERE email_address = '$own_emailaddress';")){
                
                header("location: ../account/index.php");
                
            }else{
                header("location: ../account/index.php");
            }
            
        }else{
            header("location: ../account/index.php");
        }
        
        
    }else{
        header("location: ../account/index.php");
    }
    
    
}

?>