<?php

//Prev
function previousFunction($DATABASE_CONNECTION, $id) {
    if ($id == 0 || $id == 1) {
        $display = "";
    } else {
        $id = $id - 1;
        $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM blog WHERE id = '$id' AND source = 'elabvine';");
        if (mysqli_num_rows($sql) > 0) {
            $row = mysqli_fetch_array($sql);
            $display = '
                    
                                        <div class="thumb">
                                            <a href="blog-content.php?Id=' . $row["id"] . '&title=' . $row["title"] . '"><img class="img-fluid" style="width: 60px !important;" src="' . $row["author_image_link"] . '" alt=""></a>
                                        </div>
                                        <div class="arrow">
                                            <a href="blog-content.php?Id=' . $row["id"] . '&title=' . $row["title"] . '"><span class="lnr text-white lnr-arrow-left"></span></a>
                                        </div>
                                        <div class="detials">
                                            <p>Prev Post</p>
                                            <a href="blog-content.php?Id=' . $row["id"] . '&title=' . $row["title"] . '"><h4>' . $row["title"] . '</h4></a>
                                        </div>
                    ';
        } else {
            $display = "";
        }
    }
    return $display;
}

//Blog Next
function nextFunction($DATABASE_CONNECTION, $id) {
    $id = $id + 1;
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM blog WHERE id = '$id' AND source = 'elabvine';");
    if (mysqli_num_rows($sql) > 0) {
        $row = mysqli_fetch_array($sql);
        $display = '
                                        <div class="detials">
                                            <p>Next Post</p>
                                            <a href="blog-content.php?Id=' . $row["id"] . '&title=' . $row["title"] . '"><h4>' . $row["title"] . '</h4></a>
                                        </div>
                                        <div class="arrow">
                                            <a href="blog-content.php?Id=' . $row["id"] . '&title=' . $row["title"] . '"><span class="lnr text-white lnr-arrow-right"></span></a>
                                        </div>
                                        <div class="thumb">
                                            <a href="blog-content.php?Id=' . $row["id"] . '&title=' . $row["title"] . '"><img class="img-fluid" style="width: 60px !important;" src="' . $row["author_image_link"] . '" alt=""></a>
                                        </div>
                                    
                    ';
    } else {
        $display = "";
    }
    return $display;
}

//Standard Date
function standardDate($date) {
    $d = strtotime($date);
    return date("d M, Y", $d);
}

//Send Email
function sendMailMessage($companyuri, $DATABASE_CONNECTION, $query_cookie, $subject, $message) {
    //Get user information
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `" . $companyuri . "_members_information` WHERE Id = '$query_cookie';");
    $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
    $name = $row['Name'] . " " . $row['Surname'];
    $email = $row['Email_Address'];
    $phone = $row['Phone'];
    $account_type = $row['Account_Type'];
    //End Get user information

    $to = 'givenmakhobela@elabvine.com';
    $name = $name;
    $email = $email;
    $text = $message;
    $subject = $subject;

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message = '<table style="width:100%">
        <tr>
            <td>' . $name . ' : ' . $subject . '</td>
        </tr>
        <tr><td>Email: ' . $email . '</td></tr>
        <tr><td>phone: ' . $phone . '</td></tr>
        <tr><td>Message: ' . $text . '</td></tr>
        
    </table>';
    if (@mail($to, $subject, $message, $headers)) {
        return 'success';
    } else {
        return 'error1';
    }
    return 'success';
}

?>