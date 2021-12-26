<?php

if (isset($_REQUEST['mail'])) {

    $email = $_REQUEST['email'];
    $to = 'billing@elabvine.com';
    $name = $_REQUEST["name"];
    $cell = $_REQUEST["cell"];
    $company = $_REQUEST["company"];
    $plan = $_REQUEST["plan"];
    $message = $_REQUEST["message"];

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message = '<table style="width:100%">
        <tr>
            <td>Request Quote</td>
        </tr>
        <tr><td>Name: ' . $name . '</td></tr>
        <tr><td>Cell: ' . $cell . '</td></tr>
        <tr><td>Email: ' . $email . '</td></tr>
        <tr><td>Company: ' . $company . '</td></tr>
        <tr><td>Plan: ' . $plan . '</td></tr>
        <tr><td>Message: ' . $message . '</td></tr>
    </table>';

    if (mail($to, $email, $message, $headers)) {
        echo 'success';
    } else {
        echo 'error';
    }
}
?>
