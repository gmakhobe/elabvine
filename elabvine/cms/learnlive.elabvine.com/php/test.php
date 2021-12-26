<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');

include("config.php");

if ($_REQUEST['reqId'] == "newSubscriber") {
    /**
     * newSubscriber
     */
    #source
    $source = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST['source']);
    #query
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `subscribers` WHERE email = '$emailAddress' AND source = '$source';");
    //if available decline
    if (mysqli_num_rows($sql) > 0) {
        $results = "error";
    } else {
        #user name
        $name = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST['name']);
        #user email
        $emailAddress = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST['email']);
        #date now
        $currentDateTime = date("Y-m-d h:i:s");
        #sql
        $sql = "INSERT INTO subscribers(name, email, source, date) VALUES('$name', '$emailAddress', 'scimatix', '$currentDateTime');";
        #execute
        if (mysqli_query($DATABASE_CONNECTION, $sql))

        #sql inert data
        $to = 'info@scimatix.co.za';
        $name = $name;
        $email = $emailAddress;
        $text = "$name, just subscribed to Newsletters.";
        $subject = "Newsletter subscription";

        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= "From: " . $emailAddress . "\r\n"; // Sender's E-mail
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        $message = '<table style="width:100%">
					<tr>
						<td>' . $name . ' : ' . $subject . '</td>
					</tr>
					<tr><td>Email: ' . $emailAddress . '</td></tr>
					<tr><td>Message: ' . $text . '</td></tr>
					
				</table>';

        if (mail($to, $subject, $message, $headers)) {
            $results = 'success';
        }

        $results = "success";
    }

    #print
    echo $results;
    /**
     * End newSubscriber
     */
}
?>