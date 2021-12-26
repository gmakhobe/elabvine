<?php

if (isset($_REQUEST["req_mail"])) {

    $to = 'givenmakhobela@elabvine.com';
    $email = $_REQUEST["email"];
    $text = $_REQUEST["message"];
    $subject = $_REQUEST["subject"];
    
    //echo "To: $to, Email: $email, Message: $text, Subject: $subject";

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message = '<table style="width:100%">
        <tr>
            <td>Subject : ' . $subject . '</td>
        </tr>
        <tr><td>Email: ' . $email . '</td></tr>
        <tr><td>Message: ' . $text . '</td></tr>
        
    </table>';
    if (mail($to, $subject, $message, $headers)) {
        $res = 'success';
    } else {
        $res = 'error';
    }
    echo $res;
} else {
    header("Location: ../index.php");
}
?>