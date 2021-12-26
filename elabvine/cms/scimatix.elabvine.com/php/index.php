<?php

//DB Config
include("config.php");
//request id
switch ($_REQUEST['reqId']) {
    case "newSubscriber":
        /**
         * newSubscriber
         */
#source
        $source = "scimatix";
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
        break;
    case "getStartedRegistration":
        /**
         * getStartedRegistration
         */
        $name = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST['name']);
        $phone = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST['phone']);
        $email = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST['email']);
        $password = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST['password']);
        $date = date("Y-m-d H:i:s");
#sql insert data
        $sql = "INSERT INTO " . $companyuri . "_members_information(Name, Phone, Email_Address, Password, Registration_Date, Account_Status) VALUES('$name', '$phone', '$email', '$password', '$date', 'Step 1');";
#insert into company
        if (mysqli_query($DATABASE_CONNECTION, $sql)) {
//select email
            if ($sql2 = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM " . $companyuri . "_members_information where Email_Address = '$email';")) {

                session_start();
                $_SESSION['session_scimatix'] = $email;

#sql inert data
                $to = 'info@scimatix.co.za';
                $name = $name;
                $email = $email;
                $text = "$name, just registered as a new user..";
                $subject = "New user just registered.";

                $headers = 'MIME-Version: 1.0' . "\r\n";
                $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

                $message = '<table style="width:100%">
					<tr>
						<td>' . $name . ' : ' . $subject . '</td>
					</tr>
					<tr><td>Phone: ' . $phone . '</td></tr>
					<tr><td>Email: ' . $email . '</td></tr>
					<tr><td>Message: ' . $text . '</td></tr>
					
				</table>';

                if (mail($to, $subject, $message, $headers)) {
                    $results = 'success';
                }

                $results = "success";
            } else {
                $results = "error2";
            }
        } else {
            $results = "error3";
        }
        echo $results;
        /**
         * End getStartedRegistration
         */
        break;
    case "matricApplicationRewrite":
        /**
         * getStartedRegistration
         */
        $name = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST['name']);
        $phone = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST['phone']);
        $email = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST['email']);
        $message = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST['message']);
#sql inert data
        $to = 'givenmakhobela@elabvine.com';
        $name = $name;
        $email = $email;
        $text = $message;
        $subject = "Matric Rewrite Application";

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
            $results = 'success';
        } else {
            $results = 'error';
        }
        echo $results;
        /**
         * End getStartedRegistration
         */
        break;
    case "Login":
        /**
         * Login
         */
        $email = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['email']);
        $password = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['password']);
        $remember = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['remember']);

        $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM scimatix_members_information WHERE Email_Address = '$email' AND Password = '$password';");

        if (mysqli_num_rows($sql) > 0) {

            session_start();
            $_SESSION['session_scimatix'] = $email;

            if ($remember == "yes") {
                $cookie_name = "remember_me_scimatix";
                $cookie_value = $_SESSION['session_scimatix'];
                setcookie($cookie_name, $cookie_value, time() + (86400 * 365), "/");
            }

            $results = "success";
        } else {
            $results = "error";
        }
        echo $results;
        /**
         * End Login
         */
        break;
    case "accountConfig":
        /**
         * accountConfig
         */
//Get query cookie
        $query_cookie = $_COOKIE['query_cookie'];
//End Get query cookie

        $user = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['user']);
        $step = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['step']);
//User Type
        if ($user == "student") {
//step
            if ($step == 1) {
//Student First Step Info
                $name = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['name']);
                $surname = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['surname']);
                $datebirth = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['datebirth']);
                $gender = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['gender']);
                $grade = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['grade']);
                $school = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['school']);
//multi sql
                $sql = "UPDATE " . $companyuri . "_members_information SET Name = '$name', Surname = '$surname', Account_Type = 'Student', Account_Status = 'Step 2' WHERE Id = '$query_cookie';";
                $sql .= "INSERT INTO `members_personal_information`(Member_Id, Date_Birth, Gender, Grade, School) VALUES('$query_cookie', '$datebirth', '$gender', '$grade', '$school');";
//multi sql exec
                if (mysqli_multi_query($DATABASE_CONNECTION, $sql)) {
                    $results = "success";
                } else {
                    $results = "error";
                }
            } else if ($step == 2) {
//Student Address Info
                $address1 = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['address1']);
                $address2 = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['address2']);
                $address3 = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['address3']);
                $address4 = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['address4']);
//multi sql
                $sql = "UPDATE `members_personal_information` SET Address_Street = '$address1', Address_Suburb = '$address2', Address_City = '$address3', Address_Zip = '$address4' WHERE Member_Id = '$query_cookie';";
                $sql .= "UPDATE " . $companyuri . "_members_information SET Account_Status = 'Step 3' WHERE Id = '$query_cookie';";

//multi sql exec
                if (mysqli_multi_query($DATABASE_CONNECTION, $sql)) {
                    $results = "success";
                } else {
                    $results = "error";
                }
            } else if ($step == 3) {
//Student First Step Info
                $name = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['name']);
                $phone = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['phone']);
                $email = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['email']);
//multi sql
                $sql = "UPDATE `members_personal_information` SET Guardian_Name = '$name', Guardian_Phone = '$phone', Guardian_Email = '$email' WHERE Member_Id = '$query_cookie';";
                $sql .= "UPDATE " . $companyuri . "_members_information SET Account_Status = 'Step 4' WHERE Id = '$query_cookie';";

//multi sql exec
                if (mysqli_multi_query($DATABASE_CONNECTION, $sql)) {
                    $results = "success";
                } else {
                    $results = "error";
                }
            }
        } else if ($user == "tutor") {
//step
            if ($step == 1) {
//Student First Step Info
                $name = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['name']);
                $surname = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['surname']);
                $identification = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['identification']);
                $gender = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['gender']);
                $occupation = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['occupation']);
//multi sql
                $sql = "UPDATE " . $companyuri . "_members_information SET Name = '$name', Surname = '$surname', Account_Type = 'Tutor', Account_Status = 'Step 2' WHERE Id = '$query_cookie';";
                $sql .= "INSERT INTO `members_personal_information`(Member_Id, Id_Number, Gender, Occupation) VALUES('$query_cookie', '$identification', '$gender', '$occupation');";
//multi sql exec
                if (mysqli_multi_query($DATABASE_CONNECTION, $sql)) {
                    $results = "success";
                } else {
                    $results = "error";
                }
            } else if ($step == 2) {
//Tutor Address Info
                $address1 = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['address1']);
                $address2 = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['address2']);
                $address3 = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['address3']);
                $address4 = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['address4']);
//multi sql
                $sql = "UPDATE `members_personal_information` SET Address_Street = '$address1', Address_Suburb = '$address2', Address_City = '$address3', Address_Zip = '$address4' WHERE Member_Id = '$query_cookie';";

                $sql .= "UPDATE " . $companyuri . "_members_information SET Account_Status = 'Step 3' WHERE Id = '$query_cookie';";

//multi sql exec
                if (mysqli_multi_query($DATABASE_CONNECTION, $sql)) {
                    $results = "success";
                } else {
                    $results = "error";
                }
            }
        }



        echo $results;
        /**
         * End accountConfig
         */
        break;
    case "DashboardNotifications":
        /**
         * DashboardNotifications
         */
//Query Cookie
        $query_cookie = $_COOKIE['query_cookie'];
        $source = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['source']);

        if ($source == "Wallet") {
//sql
//Account Type
            $sql_acc = mysqli_query($DATABASE_CONNECTION, "SELECT Account_Type FROM " . $companyuri . "_members_information WHERE Id = '$query_cookie' AND Account_Type = 'Student';");
            if (mysqli_num_rows($sql_acc) > 0) {
                $sql = mysqli_query($DATABASE_CONNECTION, "SELECT Wallet FROM `members_personal_information` WHERE Member_Id = '$query_cookie';");
//Fetch rows
                $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
                if ($row["Wallet"] > 0) {
                    $results = "";
                } else {
                    $results = '<div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Funds!</strong> Your funds in your wallet has depleted you need to deposit funds so that you can be able to purchase tutoring lessons <a href="wallet.php">click here to see how to deposit funds into your wallet</a>.
                  </div>';
                }
            } else {
                $results = "";
            }
        } else if ($source == "Hours") {

            $sql_acc = mysqli_query($DATABASE_CONNECTION, "SELECT Account_Type FROM " . $companyuri . "_members_information WHERE Id = '$query_cookie' AND Account_Type = 'Student';");
            if (mysqli_num_rows($sql_acc) > 0) {

                //sql
                $sql = mysqli_query($DATABASE_CONNECTION, "SELECT Hours FROM `members_personal_information` WHERE Member_Id = '$query_cookie';");
//Fetch rows
                $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
                if ($row["Hours"] > 0) {
                    $results = "";
                } else {
                    $results = '<div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Tutoring Hours!</strong> You currently can\'t book tutoring lessons you need to purchase one of our packages <a href="wallet.php">click here to purchase a tutoring package.</a>.
                  </div>';
                }
            } else {
                $results = "";
            }
        } else if ($source == "AccountStatus") {

            $sql_acc = mysqli_query($DATABASE_CONNECTION, "SELECT Account_Type FROM " . $companyuri . "_members_information WHERE Id = '$query_cookie' AND Account_Type = 'Tutor';");
            if (mysqli_num_rows($sql_acc) > 0) {

                //sql
                $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `" . $companyuri . "_tutor_profiles` WHERE Member_Id = '$query_cookie';");
//Fetch rows
                $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
                $account = $row["Status"];
                if ($account == "Blocked") {
                    $results = '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Account Status!</strong> You account is currently blocked report it immediatly. <a href="help-center.php">Help Center</a></a>.
                  </div>';
                } else if ($account == "Published") {
                    $results = '<div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Account Status!</strong> Account is published but pending approval from admin. Note! You wont be assigned to lesson untili your account is approved by the admin. Have questions, go to <a href="help-center.php">Help Center</a></a>.
                  </div>';
                } else if ($account == "Not Published") {
                    $results = '<div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Account Status!</strong> Your application to be a tutor with us has been rejected, reapply <a href="tutor-profile.php">here</a> or go to <a href="help-center.php">Help Center</a><br> Message from admin: ' . $row["Message"] . '.
                  </div>';
                } else {
                    $results = '';
                }
            } else {
                $results = "";
            }
        } else if ($source == "LessonAcceptance") {

            $sql_acc = mysqli_query($DATABASE_CONNECTION, "SELECT Account_Type FROM " . $companyuri . "_members_information WHERE Id = '$query_cookie' AND Account_Type = 'Tutor';");
            if (mysqli_num_rows($sql_acc) > 0) {

                //sql
                $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `" . $companyuri . "_members_lessons` WHERE Tutor_Id = '$query_cookie' AND Tutor_Status = 'Waiting';");
                if (mysqli_num_rows($sql) > 0) {
                    //Fetch rows
                    $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
                    $subject = $row["Subject"];
                    $description = $row["Description"];
                    $lesson_length = $row["Lesson_Hours"];
                    $lesson_id = $row["Lesson_Id"];

                    $results = '<div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button><center>
                    <strong>Lesson Assigned!</strong> A lesson has been assigned to you with the following information.<br>Subject: "' . $subject . '", Description: "' . $description . '", Lesson Length: ' . $lesson_length . '.<br> <button class="genric-btn info radius" onclick="tutorAcceptLesson();">Accepted</button> <button class="genric-btn danger radius" id="tutorDeclineLesson">Decline</button></center><input value="' . $lesson_id . '" id="lessonId" hidden/> 
                  </div>';
                } else {
                    $results = '';
                }
            } else {
                $results = "";
            }
        } else if ($source == "LessonInProgress") {

            $sql_acc = mysqli_query($DATABASE_CONNECTION, "SELECT Account_Type FROM " . $companyuri . "_members_information WHERE Id = '$query_cookie' AND Account_Type = 'Student';");
            if (mysqli_num_rows($sql_acc) > 0) {

                //sql
                $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `" . $companyuri . "_members_lessons` WHERE Member_Id = '$query_cookie' AND Lesson_Status = 'Accepted' OR Lesson_Status = 'Waiting'");
                if (mysqli_num_rows($sql) > 0) {
                    //Fetch rows
                    $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
                    $subject = $row["Subject"];
                    $description = $row["Description"];
                    $lesson_length = $row["Lesson_Hours"];

                    $results = '<div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <center>Lesson in Progress...</center>
                  </div>';
                } else {
                    $results = "";
                }
            } else {
                $results = "";
            }
        } else if ($source == "LessonInProgressTutor") {

            $sql_acc = mysqli_query($DATABASE_CONNECTION, "SELECT Account_Type FROM " . $companyuri . "_members_information WHERE Id = '$query_cookie' AND Account_Type = 'Tutor';");
            if (mysqli_num_rows($sql_acc) > 0) {

                //sql
                $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `" . $companyuri . "_members_lessons` WHERE Tutor_Id = '$query_cookie' AND Lesson_Status = 'Accepted' OR Tutor_Status = 'Accepted'");
                if(mysqli_num_rows($sql) > 0){
                    //Fetch rows
                $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
                $subject = $row["Subject"];
                $description = $row["Description"];
                $lesson_length = $row["Lesson_Hours"];

                $results = '<div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <center>Lesson in Progress...</center>
                  </div>';
                }else{
                    $results = "";
                }
            } else {
                $results = "";
            }
        }

        echo $results;
        /**
         * End DashboardNotifications
         */
        break;
    case "inCampusTutoring":
        /**
         * inCampusTutoring
         */
        //Include function
        include("functions.php");
//Query Cookie
        $query_cookie = $_COOKIE['query_cookie'];
//If upload available
        if (!isset($_FILES['attachment']['name'])) {
#Get values
            $subject = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['subject']);
            $grade = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['grade']);
            $description = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['description']);
            $lesson = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['lesson']);
            $date = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['date']);
            $now = date("Y-m-d H:i:s");
#Lesson Id //ID Generator
            $lesson_word = array_merge(range('a', 'z'), range('A', 'Z'), range(0, 9));
            shuffle($lesson_word);
            $lesson_id = substr(implode($lesson_word), 0, 10);
#subtract number of lessons left
            $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `members_personal_information` WHERE Member_Id = '$query_cookie';");
            if (mysqli_num_rows($sql) > 0) {
#get hours
                $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
                $new_hours = $row["Hours"] - $lesson;
//Update hours
                if (mysqli_query($DATABASE_CONNECTION, "UPDATE `members_personal_information` SET Hours = '$new_hours' WHERE Member_Id = '$query_cookie';")) {
//Insert Into Lessons
                    if (mysqli_query($DATABASE_CONNECTION, "INSERT INTO `" . $companyuri . "_members_lessons`(Member_Id, Subject, Grade, Description, Lesson_Hours, Lesson_Raw_Hours, Date, Lesson_Status, Lesson_Id, Booking_Date, Type) VALUES('$query_cookie', '$subject', '$grade', '$description', '$lesson hour(s) lesson', '$lesson', '$date', 'Waiting', '$lesson_id', '$now', 'On Campus Tutoring');")) {
                        $message = "<strong>Lesson Details</strong><br> Lesson Type: On Campus Tutoring<br> Subject: $subject<br> Grade: $grade<br> Description: $description<br> Length: $lesson hour(s) lesson<br> Date and Time: $date";
                        $results = sendMailMessage($companyuri, $DATABASE_CONNECTION, $query_cookie, "New lesson Booking | On Campus Tutoring", $message);
                    } else {
                        $results = "error 3";
                    }
                } else {
                    $results = "error 2";
                }
            } else {
                $results = "error 1";
            }
        } else {
#Where to upload
            $directory = "media/lessons_attachment/";
            $unique = rand(1000000, 100000000);
            $attachment = $directory . basename($_FILES['attachment']['name']);
            $attachmentsize = $_FILES["attachment"]["size"];
            $attachmenttmpname = $_FILES["attachment"]["tmp_name"];
#attament naming
            $extension = pathinfo($attachment, PATHINFO_EXTENSION);
            $new_attachment_name = md5($attachment) . '.scimatix.' . $extension;
#Get Values
            $subject = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['subject']);
            $grade = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['grade']);
            $description = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['description']);
            $lesson = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['lesson']);
            $date = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['date']);
            $now = date("Y-m-d H:i:s");
#Lesson Id //ID Generator
            $lesson_word = array_merge(range('a', 'z'), range('A', 'Z'), range(0, 9));
            shuffle($lesson_word);
            $lesson_id = substr(implode($lesson_word), 0, 10);
#subtract number of lessons left
#if size too big
            if ($attachmentsize > 5000000) {
                $results = "error1";
            } else {
#see if there is project awaiting, accepted
                $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `" . $companyuri . "_members_lessons` WHERE Member_Id = '$query_cookie' AND (Lesson_Status = 'Waiting' OR Lesson_Status = 'Accepted');");
                if (mysqli_num_rows($sql) < 1) {
#subtract number of lessons left
                    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `members_personal_information` WHERE Member_Id = '$query_cookie';");
                    if (mysqli_num_rows($sql) > 0) {
#get hours
                        $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
                        $new_hours = $row["Hours"] - $lesson;
//Update hours
                        if (mysqli_query($DATABASE_CONNECTION, "UPDATE `members_personal_information` SET Hours = '$new_hours' WHERE Member_Id = '$query_cookie';")) {
//Insert Into Lessons
//No lesson booked
                            $attachment_full_length = $directory . $new_attachment_name;
                            if (mysqli_query($DATABASE_CONNECTION, "INSERT INTO `" . $companyuri . "_members_lessons`(Member_Id, Subject, Grade, Description, Lesson_Hours, Lesson_Raw_Hours, Date, Lesson_Status, Lesson_Id, Attachment, Booking_Date, Type) VALUES('$query_cookie', '$subject', '$grade', '$description', '$lesson hour(s) lesson', '$lesson', '$date', 'Waiting', '$lesson_id', '$attachment_full_length', '$now', 'On Campus Tutoring');")) {
#Upload
                                if (move_uploaded_file($attachmenttmpname, "../" . $attachment_full_length)) {
                                    $message = "<strong>Lesson Details</strong><br> Lesson Type: On Campus Tutoring<br> Subject: $subject<br> Grade: $grade<br> Description: $description<br> Length: $lesson hour(s) lesson<br> Date and Time: $date<br><strong>Attachment is available.</strong>";
                                    $results = sendMailMessage($companyuri, $DATABASE_CONNECTION, $query_cookie, "New lesson Booking | On Campus Tutoring", $message);
                                } else {
                                    $results = "error4";
                                }
                            } else {
                                $results = "error 3";
                            }
                        } else {
                            $results = "error 2";
                        }
                    } else {
                        $results = "error3";
                    }
                } else {
                    $results = "error2";
                }
            }
        }

        echo $results;
        /**
         * End inCampusTutoring
         */
        break;
    case "offCampusTutoring":
        /**
         * offCampusTutoring
         */
        //Include function
        include("functions.php");
//Query Cookie
        $query_cookie = $_COOKIE['query_cookie'];
//If upload available
        if (!isset($_FILES['attachment']['name'])) {
#Get values
            $address1 = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['address1']);
            $address2 = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['address2']);
            $address3 = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['address3']);
            $address4 = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['address4']);
            $residence = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['residence']);
            $subject = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['subject']);
            $grade = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['grade']);
            $description = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['description']);
            $lesson = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['lesson']);
            $date = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['date']);
            $now = date("Y-m-d H:i:s");
#Lesson Id //ID Generator
            $lesson_word = array_merge(range('a', 'z'), range('A', 'Z'), range(0, 9));
            shuffle($lesson_word);
            $lesson_id = substr(implode($lesson_word), 0, 10);
#subtract number of lessons left
            $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `members_personal_information` WHERE Member_Id = '$query_cookie';");
            if (mysqli_num_rows($sql) > 0) {
#get hours
                $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
                $new_hours = $row["Hours"] - $lesson;
//Update hours
                if (mysqli_query($DATABASE_CONNECTION, "UPDATE `members_personal_information` SET Hours = '$new_hours' WHERE Member_Id = '$query_cookie';")) {
//Insert Into Lessons
                    if (mysqli_query($DATABASE_CONNECTION, "INSERT INTO `" . $companyuri . "_members_lessons`(Member_Id, Subject, Grade, Description, Lesson_Hours, Lesson_Raw_Hours, Date, Lesson_Status, Lesson_Id, Booking_Date, Type, Address_Street, Address_Suburb, Address_City, Address_Zip, Residence) VALUES('$query_cookie', '$subject', '$grade', '$description', '$lesson hour(s) lesson', '$lesson', '$date', 'Waiting', '$lesson_id', '$now', 'Off Campus Tutoring', '$address1', '$address2', '$address3', '$address4', '$residence');")) {
                        $message = "<strong>Lesson Details</strong><br> Lesson Type: Off Campus Tutoring<br>Residence: $residence<br>Street Address: $address1, Suburb: $address2<br> City: $address3, Zip: $address4 <br>Subject: $subject<br> Grade: $grade<br> Description: $description<br> Length: $lesson hour(s) lesson<br> Date and Time: $date";
                        $results = sendMailMessage($companyuri, $DATABASE_CONNECTION, $query_cookie, "New lesson Booking | Off Campus Tutoring", $message);
                    } else {
                        $results = "error 3";
                    }
                } else {
                    $results = "error 2";
                }
            } else {
                $results = "error 1";
            }
        } else {
#Where to upload
            $directory = "media/lessons_attachment/";
            $unique = rand(1000000, 100000000);
            $attachment = $directory . basename($_FILES['attachment']['name']);
            $attachmentsize = $_FILES["attachment"]["size"];
            $attachmenttmpname = $_FILES["attachment"]["tmp_name"];
#attament naming
            $extension = pathinfo($attachment, PATHINFO_EXTENSION);
            $new_attachment_name = md5($attachment) . '.scimatix.' . $extension;
#Get Values
            $address1 = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['address1']);
            $address2 = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['address2']);
            $address3 = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['address3']);
            $address4 = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['address4']);
            $residence = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['residence']);
            $subject = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['subject']);
            $grade = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['grade']);
            $description = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['description']);
            $lesson = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['lesson']);
            $date = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['date']);
            $now = date("Y-m-d H:i:s");
#Lesson Id //ID Generator
            $lesson_word = array_merge(range('a', 'z'), range('A', 'Z'), range(0, 9));
            shuffle($lesson_word);
            $lesson_id = substr(implode($lesson_word), 0, 10);
#subtract number of lessons left
#if size too big
            if ($attachmentsize > 5000000) {
                $results = "error1";
            } else {
#see if there is project awaiting, accepted
                $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `" . $companyuri . "_members_lessons` WHERE Member_Id = '$query_cookie' AND (Lesson_Status = 'Waiting' OR Lesson_Status = 'Accepted');");
                if (mysqli_num_rows($sql) < 1) {
#subtract number of lessons left
                    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `members_personal_information` WHERE Member_Id = '$query_cookie';");
                    if (mysqli_num_rows($sql) > 0) {
#get hours
                        $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
                        $new_hours = $row["Hours"] - $lesson;
//Update hours
                        if (mysqli_query($DATABASE_CONNECTION, "UPDATE `members_personal_information` SET Hours = '$new_hours' WHERE Member_Id = '$query_cookie';")) {
//Insert Into Lessons
//No lesson booked
                            $attachment_full_length = $directory . $new_attachment_name;
                            if (mysqli_query($DATABASE_CONNECTION, "INSERT INTO `" . $companyuri . "_members_lessons`(Member_Id, Subject, Grade, Description, Lesson_Hours, Lesson_Raw_Hours, Date, Lesson_Status, Lesson_Id, Attachment, Booking_Date, Type, Address_Street, Address_Suburb, Address_City, Address_Zip, Residence) VALUES('$query_cookie', '$subject', '$grade', '$description', '$lesson hour(s) lesson', '$lesson', '$date', 'Waiting', '$lesson_id', '$attachment_full_length', '$now','Off Campus Tutoring', '$address1', '$address2', '$address3', '$address4', '$residence');")) {
#Upload
                                if (move_uploaded_file($attachmenttmpname, "../" . $attachment_full_length)) {

                                    $message = "<strong>Lesson Details</strong><br> Lesson Type: Off Campus Tutoring<br>Residence: $residence<br>Street Address: $address1, Suburb: $address2<br> City: $address3, Zip: $address4 <br>Subject: $subject<br> Grade: $grade<br> Description: $description<br> Length: $lesson hour(s) lesson<br> Date and Time: $date<br><strong>Attachment is available.</strong>";
                                    $results = sendMailMessage($companyuri, $DATABASE_CONNECTION, $query_cookie, "New lesson Booking | Off Campus Tutoring", $message);
                                } else {
                                    $results = "error4";
                                }
                            } else {
                                $results = "error 3";
                            }
                        } else {
                            $results = "error 2";
                        }
                    } else {
                        $results = "error3";
                    }
                } else {
                    $results = "error2";
                }
            }
        }

        echo $results;
        /**
         * End offCampusTutoring
         */
        break;
    case "onlineCampusTutoring":
        /**
         * onlineCampusTutoring
         */
        //Include function
        include("functions.php");
//Query Cookie
        $query_cookie = $_COOKIE['query_cookie'];
//If upload available
        if (!isset($_FILES['attachment']['name'])) {
#Get values
            $subject = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['subject']);
            $grade = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['grade']);
            $description = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['description']);
            $lesson = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['lesson']);
            $date = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['date']);
            $now = date("Y-m-d H:i:s");
#Lesson Id //ID Generator
            $lesson_word = array_merge(range('a', 'z'), range('A', 'Z'), range(0, 9));
            shuffle($lesson_word);
            $lesson_id = substr(implode($lesson_word), 0, 10);
#subtract number of lessons left
            $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `members_personal_information` WHERE Member_Id = '$query_cookie';");
            if (mysqli_num_rows($sql) > 0) {
#get hours
                $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
                $new_hours = $row["Hours"] - $lesson;
//Update hours
                if (mysqli_query($DATABASE_CONNECTION, "UPDATE `members_personal_information` SET Hours = '$new_hours' WHERE Member_Id = '$query_cookie';")) {
//Insert Into Lessons
                    if (mysqli_query($DATABASE_CONNECTION, "INSERT INTO `" . $companyuri . "_members_lessons`(Member_Id, Subject, Grade, Description, Lesson_Hours, Lesson_Raw_Hours, Date, Lesson_Status, Lesson_Id, Booking_Date, Type) VALUES('$query_cookie', '$subject', '$grade', '$description', '$lesson hour(s) lesson', '$lesson', '$date', 'Waiting', '$lesson_id', '$now', 'On Campus Tutoring');")) {
                        $message = "<strong>Lesson Details</strong><br> Lesson Type: Online Campus Tutoring<br> Subject: $subject<br> Grade: $grade<br> Description: $description<br> Length: $lesson hour(s) lesson<br> Date and Time: $date";
                        $results = sendMailMessage($companyuri, $DATABASE_CONNECTION, $query_cookie, "New lesson Booking | Online Campus Tutoring", $message);
                    } else {
                        $results = "error 3";
                    }
                } else {
                    $results = "error 2";
                }
            } else {
                $results = "error 1";
            }
        } else {
#Where to upload
            $directory = "media/lessons_attachment/";
            $unique = rand(1000000, 100000000);
            $attachment = $directory . basename($_FILES['attachment']['name']);
            $attachmentsize = $_FILES["attachment"]["size"];
            $attachmenttmpname = $_FILES["attachment"]["tmp_name"];
#attament naming
            $extension = pathinfo($attachment, PATHINFO_EXTENSION);
            $new_attachment_name = md5($attachment) . '.scimatix.' . $extension;
#Get Values
            $subject = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['subject']);
            $grade = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['grade']);
            $description = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['description']);
            $lesson = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['lesson']);
            $date = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['date']);
            $now = date("Y-m-d H:i:s");
#Lesson Id //ID Generator
            $lesson_word = array_merge(range('a', 'z'), range('A', 'Z'), range(0, 9));
            shuffle($lesson_word);
            $lesson_id = substr(implode($lesson_word), 0, 10);
#subtract number of lessons left
#if size too big
            if ($attachmentsize > 5000000) {
                $results = "error1";
            } else {
#see if there is project awaiting, accepted
                $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `" . $companyuri . "_members_lessons` WHERE Member_Id = '$query_cookie' AND (Lesson_Status = 'Waiting' OR Lesson_Status = 'Accepted');");
                if (mysqli_num_rows($sql) < 1) {
#subtract number of lessons left
                    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `members_personal_information` WHERE Member_Id = '$query_cookie';");
                    if (mysqli_num_rows($sql) > 0) {
#get hours
                        $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
                        $new_hours = $row["Hours"] - $lesson;
//Update hours
                        if (mysqli_query($DATABASE_CONNECTION, "UPDATE `members_personal_information` SET Hours = '$new_hours' WHERE Member_Id = '$query_cookie';")) {
//Insert Into Lessons
//No lesson booked
                            $attachment_full_length = $directory . $new_attachment_name;
                            if (mysqli_query($DATABASE_CONNECTION, "INSERT INTO `" . $companyuri . "_members_lessons`(Member_Id, Subject, Grade, Description, Lesson_Hours, Lesson_Raw_Hours, Date, Lesson_Status, Lesson_Id, Attachment, Booking_Date, Type) VALUES('$query_cookie', '$subject', '$grade', '$description', '$lesson hour(s) lesson', '$lesson', '$date', 'Waiting', '$lesson_id', '$attachment_full_length', '$now', 'On Campus Tutoring');")) {
#Upload
                                if (move_uploaded_file($attachmenttmpname, "../" . $attachment_full_length)) {
                                    $message = "<strong>Lesson Details</strong><br> Lesson Type: Online Campus Tutoring<br> Subject: $subject<br> Grade: $grade<br> Description: $description<br> Length: $lesson hour(s) lesson<br> Date and Time: $date<br><strong>Attachment is available.</strong>";
                                    $results = sendMailMessage($companyuri, $DATABASE_CONNECTION, $query_cookie, "New lesson Booking | Online Campus Tutoring", $message);
                                } else {
                                    $results = "error4";
                                }
                            } else {
                                $results = "error 3";
                            }
                        } else {
                            $results = "error 2";
                        }
                    } else {
                        $results = "error3";
                    }
                } else {
                    $results = "error2";
                }
            }
        }

        echo $results;
        /**
         * End onlineCampusTutoring
         */
        break;
    case "bookedLesson":
        /**
         * bookedLesson
         */
        include("functions.php");
        //Query Cookie
        $query_cookie = $_COOKIE['query_cookie'];
        #sql
        $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `" . $companyuri . "_members_lessons` WHERE Member_Id = '$query_cookie' AND Lesson_Status = 'Waiting' OR Lesson_Status = 'Accepted';");
        //If found
        if (mysqli_num_rows($sql) > 0) {
            //Table scimatix_lessons...
            $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
            //Attach
            $attach = $row['Attachment'];
            if ($attach == "") {
                $attach = "";
            } else {
                $attach = "Attachment: <a href='../" . $row['Attachment'] . "' class='btn btn-link'> View</a><br>";
            }
            //If accepted show manage
            if ($row['Lesson_Status'] == "Accepted") {
                $manager = '<a href="lesson.php?reqId=' . $row["Lesson_Id"] . '" class="text-uppercase primary-btn mx-auto mt-40">Manage Booked Lesson</a>';
            } else {
                $manager = "";
            }
            if ($row['Type'] == "Off Campus Tutoring") {
                $address = '<div class=" d-flex flex-column address-wrap">
                            <div class="single-contact-address d-flex flex-row">
				<div class="icon">
					<span class="lnr lnr-home" style="font-size: 30px;font-weight: 500; color: #f7631b; margin-right: 30px;"></span>
				</div>
				<div class="contact-details">
					<h5>' . $row["Address_City"] . ' | ' . $row["Residence"] . '</h5>
						<p>
						' . $row["Address_Street"] . ', ' . $row["Address_Suburb"] . ', ' . $row["Address_Zip"] . '
						</p>
					</div>
				</div>
                        </div></div><br>';
            } else {
                $address = '';
            }
            $results = '<div class="col-md-12">
			<div class="single-carusel row align-items-center">
				<div class="col-12 col-md-6 thumb">
					<img class="img-fluid" src="../img/lesson.png" alt="">
				</div>
				<div class="detials col-12 col-md-6">
					<p>Booked on: ' . standardDate($row['Booking_Date']) . '</p>
                                            <a href="#"><h4>' . $row['Type'] . '</h4></a>
                                            <a href="#"><h5>' . $row['Subject'] . '</h5></a>
					<p>
                                            Grade/Level: ' . $row['Grade'] . '<br>
                                            Description: ' . $row['Description'] . '<br>
                                            ' . $attach . '
                                            Date Booked: ' . $row['Date'] . '<br>
                                            Length: ' . $row['Lesson_Hours'] . '<br>
                                            Status: ' . $row['Lesson_Status'] . '<br>
                                            
                                    </p>
				</div>
			</div>
		</div>
                ' . $address . '
                ' . $manager . '
';
        } else {
            $results = '<div calss="alert alert-info">'
                    . '<h4 class="text-center">No booked Lesson In Progress</h4>'
                    . '<p class="text-center">Hi, no booked lesson currently in progress to book for a new lesson <a href="book-a-lesson.php">click here </a></p>'
                    . '</div>';
        }
        echo $results;
        /**
         * End bookedLesson
         */
        break;
    case "pastLessons":
        /**
         * pastLessons
         */
        include("functions.php");
        //Query Cookie
        $query_cookie = $_COOKIE['query_cookie'];
        #sql
        $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `" . $companyuri . "_members_lessons` WHERE Member_Id = '$query_cookie' AND Lesson_Status = 'Finished' OR Lesson_Status = 'Rejected' OR Lesson_Status = 'Blocked' ORDER BY Id DESC;");
        //If found
        if (mysqli_num_rows($sql) > 0) {
            $results = "";

            while ($row = mysqli_fetch_array($sql)) {

                //Table scimatix_lessons...
                //$row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
                //Attach
                $attach = $row['Attachment'];
                if ($attach == "") {
                    $attach = "";
                } else {
                    $attach = "Attachment: <a href='../" . $row['Attachment'] . "' class='btn btn-link'> View</a><br>";
                }
                $results .= '<div class="col-md-12">
			<div class="single-carusel row align-items-center">
				<div class="col-12 col-md-6 thumb">
					<img class="img-fluid" src="../img/qualify.png" alt="">
				</div>
				<div class="detials col-12 col-md-6">
					<p>Status: ' . $row['Lesson_Status'] . '</p>
                                            <a href="#"><h4>' . $row['Subject'] . '</h4></a>
                                            <a href="#"><h5>' . $row['Type'] . '</h5></a>
					<p>
                                            Grade/Level: ' . $row['Grade'] . '<br>
                                            Description: ' . $row['Description'] . '<br>
                                            ' . $attach . '
                                            Date Booked: ' . $row['Date'] . '<br>
                                            Length: ' . $row['Lesson_Hours'] . '<br>
                                            <br>
                                            
                                    </p>
				</div>
			</div>
		</div>
                <hr>
';
            }
        } else {
            $results = '<div calss="alert alert-info">'
                    . '<h4 class="text-center">No Past Lessons</h4>'
                    . '<p class="text-center">Hi, you have no past lessons all you need to do is to book a lesson and complete it, <a href="book-a-lesson.php">click here to book a lesson.</a></p>'
                    . '</div>';
        }
        echo $results;
        /**
         * End pastLessons
         */
        break;
    case "reportProblem":
        /**
         * reportProblem
         */
        $query_cookie = $_COOKIE['query_cookie'];
        //Get values
        $problem = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['problem']);
        $message = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['message']);
        $now = date("Y-m-d H:i:s");
        #Update table
        if (mysqli_query($DATABASE_CONNECTION, "UPDATE `" . $companyuri . "_members_lessons` SET Lesson_Status = 'Blocked', Report_Date = '$now', Report_Title = '$problem', Report_Message = '$message', Reporter_Id = '$query_cookie' WHERE (Member_Id = '$query_cookie' OR Tutor_Id = '$query_cookie') AND Lesson_Status = 'Accepted';")) {
            $display = "";

            //Get user information
            $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `" . $companyuri . "_members_information` WHERE Id = '$query_cookie';");
            $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
            $name = $row['Name'] . " " . $row['Surname'];
            $email = $row['Email_Address'];
            $phone = $row['Phone'];
            $account_type = $row['Account_Type'];
            //End Get user information

            $to = 'info@scimatix.co.za';
            $name = $name;
            $email = $email;
            $text = "$name, $account_type has $problem complaint on the online platform<br> Explaination as follows: $message.";
            $subject = "Lesson Complaint | " . $problem;

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
            if (mail($to, $subject, $message, $headers)) {
                $results = 'success';
            } else {
                $results = 'error';
            }
        } else {
            $results = 'error';
        }
        echo $results;
        /**
         * End reportProblem
         */
        break;
    case "rateTutor":
        /**
         * rateTutor
         */
        //Function
        include("functions.php");
        $query_cookie = $_COOKIE['query_cookie'];
        //Get values
        $stars = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['stars']);
        $title = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['title']);
        $comment = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['comment']);
        $notes = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['notes']);
        $now = date("Y-m-d H:i:s");
        #Update table
        if (mysqli_query($DATABASE_CONNECTION, "UPDATE `" . $companyuri . "_members_lessons` SET Lesson_Status = 'Finished', Rating_Stars = '$stars', Rating_Title = '$title', Rating_Comment = '$comment', Rating_Notes = '$notes', Report_Date = '$now' WHERE Member_Id = '$query_cookie' AND Lesson_Status = 'Accepted';")) {

            $message = "Lesson completed successfully with the following:<br>Ratings: $stars,<br>Rating Title: $title,<br>Comments: $comment,<br>Notes: $notes.";
            echo sendMailMessage($companyuri, $DATABASE_CONNECTION, $query_cookie, "Lesson Completed Successfully | $stars Star(s)", $message);
        } else {
            echo 'error';
        }

        /**
         * End rateTutor
         */
        break;
    case "loadAccountSummary":
        /**
         * loadAccountSummary
         */
        //Query Cookie
        $query_cookie = $_COOKIE['query_cookie'];
        //sql
        $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `members_personal_information` WHERE Member_Id = '$query_cookie';");
        if (mysqli_num_rows($sql) > 0) {
            //get rows
            $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
            $hours = $row["Hours"];
            $wallet = $row["Wallet"];
            $results = '<div class="table-responsive">
                    <h4>Balance Summary</h4>
                    <table class="table table-borderless table-sm">
                        <tbody>
                          <tr>
                            <td><strong>Balance</strong></td>
                            <td>ZAR ' . $wallet . '</td>
                          </tr>
                          <tr>
                            <td><strong>Tutoring Hours</strong></td>
                            <td>' . $hours . ' Hour(s) Remaining</td>
                          </tr>
                        </tbody>
                      </table>';
            //Get Lessons
            $sql2 = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM " . $companyuri . "_members_lessons WHERE Member_Id = '$query_cookie';");
            //see if availablr
            $results .= '
                    <h4>Lessons Summary</h4>
                    <table class="table table-borderless table-sm">
                        <tbody>';
            if (mysqli_num_rows($sql2) > 0) {
                //get lesson details
                $results .= '<tr>
                                    <td><strong>Lessons Taken</strong></td>
                                    <td>' . mysqli_num_rows($sql2) . ' Lesson(s)</td>
                                 </tr>
                                 <tr><td><strong>Lesson Details:</strong></td></tr>';
                while ($row = mysqli_fetch_array($sql2, MYSQLI_ASSOC)) {
                    $results .= '<tr>
                                    <td><strong>' . $row['Subject'] . '</strong>, ' . $row['Description'] . '</td>
                                    <td>' . $row['Type'] . '</td>
                                    <td>' . $row['Lesson_Hours'] . '</td>
                                 </tr>';
                }
                $results .= '</tbody></table>';
            } else {
                $results .= '<tr>
                                    <td><strong>Lessons Taken</strong></td>
                                    <td>0 Lesson(s)</td>
                                 </tr>
                                 </tbody></table></div>';
            }
        } else {
            $results = 'error';
        }

        echo $results;
        /**
         * End loadAccountSummary
         */
        break;
    case "paymentReq":
        /**
         * paymentReq
         */
        //Query Cookie
        $query_cookie = $_COOKIE['query_cookie'];
        //Get Values
        $amount = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['amount']);
        //sql
        $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `members_personal_information` WHERE Member_Id = '$query_cookie';");
        if (mysqli_num_rows($sql) > 0) {
            $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
            $wallet = $row["Wallet"] + $amount;
            ///Cookies
            $cookie_name = "Transfer";
            $cookie_value = $amount;
            setcookie($cookie_name, $cookie_value, time() + (86400 * 0.05), "/");

            $results = 'success';
        } else {
            $results = 'error1';
        }

        echo $results;
        /**
         * End paymentReq
         */
        break;
    case "buyLessons":
        /**
         * buyLessons
         */
        //Query Cookie
        $query_cookie = $_COOKIE['query_cookie'];
        //Get Values
        $amount = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['amount']);
        //Set Lessons
        if ($amount == 270) {
            $lesson = 1;
        } else if ($amount == 1026 || $amount == 1015 || $amount == 1080) {
            $lesson = 4;
        } else if ($amount == 2009 || $amount == 1987 || $amount == 2160) {
            $lesson = 8;
        } else if ($amount == 2916 || $amount == 2884 || $amount == 3240) {
            $lesson = 8;
        } else {
            echo "error";
            $results = "error";
            return;
        }
        //sql
        $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `members_personal_information` WHERE Member_Id = '$query_cookie';");
        if (mysqli_num_rows($sql) > 0) {
            $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
            $wallet = $row["Wallet"];
            if ($wallet < $amount) {
                echo "error";
                $results = "error";
                return;
            } else {
                $wallet = $wallet - $amount;
                //Update table
                if (mysqli_query($DATABASE_CONNECTION, "UPDATE `members_personal_information` SET Wallet = '$wallet', Hours = '$lesson' WHERE Member_Id = '$query_cookie';")) {
                    $results = "success";
                } else {
                    $results = "error";
                }
            }
        } else {
            $results = 'error1';
        }

        echo $results;
        /**
         * buyLessons
         */
        break;
    case "saveProfile":
        /**
         * saveProfile
         */
        //Query Cookie
        $query_cookie = $_COOKIE['query_cookie'];
        //Get Values
        $name = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['name']);
        $surname = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['surname']);
        $grade = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['grade']);
        $school = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['school']);
        $address1 = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['address1']);
        $address2 = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['address2']);
        $address3 = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['address3']);
        $address4 = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['address4']);
        $gname = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['gname']);
        $gphone = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['gphone']);
        $gemail = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['gemail']);
        $password = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['password']);
        //mult query
        $sql = "UPDATE `members_personal_information` SET Grade = '$grade', School = '$school', Address_Street = '$address1', Address_Suburb = '$address2', Address_City = '$address3', Address_Zip = '$address4', Guardian_Name = '$gname', Guardian_Phone = '$gphone', Guardian_Email = '$gemail' WHERE Member_Id = '$query_cookie';";
        $sql .= "UPDATE `" . $companyuri . "_members_lessons` SET Name = '$name', Surname = '$surname', Password = '$password' WHERE Id = '$query_cookie';";
        if (mysqli_multi_query($DATABASE_CONNECTION, $sql)) {
            $results = "success";
        } else {
            $results = "error";
        }

        echo $results;
        /**
         * saveProfile
         */
        break;
    case "saveProfileTutor":
        /**
         * saveProfile
         */
        //Query Cookie
        $query_cookie = $_COOKIE['query_cookie'];
        //Get Values
        $name = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['name']);
        $surname = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['surname']);
        $occupation = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['occupation']);
        $address1 = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['address1']);
        $address2 = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['address2']);
        $address3 = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['address3']);
        $address4 = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['address4']);
        $password = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['password']);
        //mult query
        $sql = "UPDATE `members_personal_information` SET Occupation = '$occupation', Address_Street = '$address1', Address_Suburb = '$address2', Address_City = '$address3', Address_Zip = '$address4' WHERE Member_Id = '$query_cookie';";
        $sql .= "UPDATE `" . $companyuri . "_members_lessons` SET Name = '$name', Surname = '$surname', Password = '$password' WHERE Id = '$query_cookie';";
        if (mysqli_multi_query($DATABASE_CONNECTION, $sql)) {
            $results = "success";
        } else {
            $results = "error";
        }

        echo $results;
        /**
         * saveProfile
         */
        break;
    case "tutorProfile":
        /**
         * saveProfile
         */
        include("functions.php");
        //Query Cookie
        $query_cookie = $_COOKIE['query_cookie'];
        //Get Values
        $language1 = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['language1']);
        $language2 = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['language2']);
        $studentNumber = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['studentNumber']);
        $degree = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['degree']);
        $shortCourse = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['shortCourse']);
        $employer = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['employer']);
        $position = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['position']);
        $periodEmployed = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['periodEmployed']);
        $subjects = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['subjects']);
        $grades = mysqli_real_escape_string($DATABASE_CONNECTION, $_POST['grades']);
        //If attachment exists
        if (!isset($_FILES['id']['name']) || !isset($_FILES['cv']['name'])) {
            $results = "error";
        } else {
            //attachmennt Information
            $directory = "media/tutor-documents/";
            $id = basename($_FILES['id']['name']);
            $cv = basename($_FILES['cv']['name']);
            $id_size = $_FILES["id"]["size"];
            $cv_size = $_FILES["cv"]["size"];
            $id_tmpname = $_FILES["id"]["tmp_name"];
            $cv_tmpname = $_FILES["cv"]["tmp_name"];
            //ext info
            $id_extension = pathinfo($id, PATHINFO_EXTENSION);
            $cv_extension = pathinfo($cv, PATHINFO_EXTENSION);
            //naming
            $new_id = $directory . md5($id) . '-scimatix.' . $id_extension;
            $new_cv = $directory . md5($cv) . '-scimatix.' . $cv_extension;
            $now = date("Y-m-d H:i:s");

            $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `" . $companyuri . "_tutor_profiles` WHERE Member_Id = '$query_cookie';");
            if (mysqli_num_rows($sql) > 0) {
                
            } else {

                $sql_insert = "INSERT INTO `" . $companyuri . "_tutor_profiles`(Member_Id, Status, Language_One, Language_Two, Student_Number, Degree, Short_Course, Employer, Position, Period_Employed , Subjects, Grades, Id_Documentation, CV_Documentation, Date_Posted) VALUES('$query_cookie', 'Published', '$language1', '$language2', '$studentNumber', '$degree', '$shortCourse', '$employer', '$position', '$periodEmployed', '$subjects', '$grades', '$new_id', '$new_cv', '$now');";

                if (move_uploaded_file($cv_tmpname, "../" . $new_cv) && move_uploaded_file($id_tmpname, "../" . $new_id) && mysqli_query($DATABASE_CONNECTION, $sql_insert)) {
                    //Get names                 
                    $sql_get = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `" . $companyuri . "_members_information` WHERE Id = '$query_cookie';");
                    $row = mysqli_fetch_array($sql_get, MYSQLI_ASSOC);
                    $name = $row["Name"] . " " . $row["Surname"];

                    $message = "<strong>Tutoring Profile</strong><br> $name, just uploaded their tutoring profile which is pending acceptance.";
                    $results = sendMailMessage($companyuri, $DATABASE_CONNECTION, $query_cookie, "Tutor Profile | New tutor.", $message);
                } else {
                    $results = "error2";
                }
            }

            $results = "success";
        }

        echo $results;
        /**
         * saveProfile
         */
        break;
    case "currentLessons":
        /**
         * currentLessons
         */
        include("functions.php");
        //Query Cookie
        $query_cookie = $_COOKIE['query_cookie'];
        #sql
        $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `" . $companyuri . "_members_lessons` WHERE Tutor_Id = '$query_cookie' AND Lesson_Status = 'Accepted' AND Tutor_Status = 'Accepted';");
        //If found
        if (mysqli_num_rows($sql) > 0) {
            //Table scimatix_lessons...
            $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
            //Attach
            $attach = $row['Attachment'];
            if ($attach == "") {
                $attach = "";
            } else {
                $attach = "Attachment: <a href='../" . $row['Attachment'] . "' class='btn btn-link'> View</a><br>";
            }
            //If accepted show manage
            if ($row['Lesson_Status'] == "Accepted") {
                $manager = '<a href="lessons.php?reqId=' . $row["Lesson_Id"] . '" class="text-uppercase primary-btn mx-auto mt-40">Manage Lesson</a>';
            } else {
                $manager = "";
            }
            if ($row['Type'] == "Off Campus Tutoring") {
                $address = '<div class=" d-flex flex-column address-wrap">
                            <div class="single-contact-address d-flex flex-row">
				<div class="icon">
					<span class="lnr lnr-home" style="font-size: 30px;font-weight: 500; color: #f7631b; margin-right: 30px;"></span>
				</div>
				<div class="contact-details">
					<h5>' . $row["Address_City"] . ' | ' . $row["Residence"] . '</h5>
						<p>
						' . $row["Address_Street"] . ', ' . $row["Address_Suburb"] . ', ' . $row["Address_Zip"] . '
						</p>
					</div>
				</div>
                        </div></div><br>';
            } else {
                $address = '';
            }
            $results = '<div class="col-md-12">
			<div class="single-carusel row align-items-center">
				<div class="col-12 col-md-6 thumb">
					<img class="img-fluid" src="../img/lesson.png" alt="">
				</div>
				<div class="detials col-12 col-md-6">
					<p>Booked on: ' . standardDate($row['Booking_Date']) . '</p>
                                            <a href="#"><h4>' . $row['Type'] . '</h4></a>
                                            <a href="#"><h5>' . $row['Subject'] . '</h5></a>
					<p>
                                            Grade/Level: ' . $row['Grade'] . '<br>
                                            Description: ' . $row['Description'] . '<br>
                                            ' . $attach . '
                                            Date Booked: ' . $row['Date'] . '<br>
                                            Length: ' . $row['Lesson_Hours'] . '<br>
                                            Status: ' . $row['Lesson_Status'] . '<br>
                                            
                                    </p>
				</div>
			</div>
		</div>
                ' . $address . '
                ' . $manager . '
';
        } else {
            $results = '<div calss="alert alert-info">'
                    . '<h4 class="text-center">No Active Lesson</h4>'
                    . '<p class="text-center">Hi, Currently No Lesson You Have Been Assigned To.</p>'
                    . '</div>';
        }
        echo $results;
        /**
         * End currentLessons
          , */
        break;
    case "pastLessonsTutor":
        /**
         * pastLessonsTutor
         */
        include("functions.php");
        //Query Cookie
        $query_cookie = $_COOKIE['query_cookie'];
        #sql
        $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `" . $companyuri . "_members_lessons` WHERE Tutor_Id = '$query_cookie' AND Lesson_Status = 'Finished' OR Lesson_Status = 'Blocked' AND Tutor_Status = 'Accepted' ORDER BY Id DESC;");
        //If found
        if (mysqli_num_rows($sql) > 0) {
            $results = "";

            while ($row = mysqli_fetch_array($sql)) {

                //Table scimatix_lessons...
                //$row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
                //Attach
                $attach = $row['Attachment'];
                if ($attach == "") {
                    $attach = "";
                } else {
                    $attach = "Attachment: <a href='../" . $row['Attachment'] . "' class='btn btn-link'> View</a><br>";
                }
                $results .= '<div class="col-md-12">
			<div class="single-carusel row align-items-center">
				<div class="col-12 col-md-6 thumb">
					<img class="img-fluid" src="../img/qualify.png" alt="">
				</div>
				<div class="detials col-12 col-md-6">
					<p>Status: ' . $row['Lesson_Status'] . '</p>
                                            <a href="#"><h4>' . $row['Subject'] . '</h4></a>
                                            <a href="#"><h5>' . $row['Type'] . '</h5></a>
					<p>
                                            Grade/Level: ' . $row['Grade'] . '<br>
                                            Description: ' . $row['Description'] . '<br>
                                            ' . $attach . '
                                            Date Booked: ' . $row['Date'] . '<br>
                                            Length: ' . $row['Lesson_Hours'] . '<br>
                                            <br>
                                            
                                    </p>
				</div>
			</div>
		</div>
                <hr>
';
            }
        } else {
            $results = '<div calss="alert alert-info">'
                    . '<h4 class="text-center">No Past Lessons</h4>'
                    . '<p class="text-center">Hi, you have\'nt tutored any student yet.</p>'
                    . '</div>';
        }
        echo $results;
        /**
         * End pastLessonsTutor
         */
        break;
    case "loadAccountSummaryTutor":
        /**
         * loadAccountSummaryTutor
         */
        include("functions.php");
        //Query Cookie
        $query_cookie = $_COOKIE['query_cookie'];
        //sql
        $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `" . $companyuri . "_members_lessons` WHERE Tutor_Id = '$query_cookie' AND Tutor_Status = 'Accepted';");
        if (mysqli_num_rows($sql) > 0) {
            //get rows
            $students = mysqli_num_rows($sql);
            $hours = 0;
            //Get number of hours
            while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
                $hours = $hours + $row["Lesson_Raw_Hours"];
            }

            $results = '<div class="table-responsive">
                    <h4>Account Summary</h4>
                    <table class="table table-borderless table-sm">
                        <tbody>
                          <tr>
                            <td><strong>Students Tutored:</strong></td>
                            <td> ' . $students . ' Student(s)</td>
                          </tr>
                          <tr>
                            <td><strong>Hours Tutored:</strong></td>
                            <td> ' . $hours . ' Hour(s)</td>
                          </tr>
                        </tbody>
                      </table>';
            //Get Lessons
            $sql2 = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM " . $companyuri . "_members_lessons WHERE Tutor_Id = '$query_cookie';");
            //see if availablr
            $results .= '
                    <h4>Lessons Summary</h4>
                    <table class="table table-borderless table-sm">
                        <tbody>';
            if (mysqli_num_rows($sql2) > 0) {
                //get lesson details
                $results .= '<tr><td><strong>Lesson Details:</strong></td></tr>';
                while ($row = mysqli_fetch_array($sql2, MYSQLI_ASSOC)) {
                    $results .= '<tr>
                                    <td><strong>' . $row['Type'] . '</td>
                                    <td>' . $row['Lesson_Hours'] . '</td>
                                    <td>' . standardDate($row['Booking_Date']) . '</td>
                                 </tr>';
                }
                $results .= '</tbody></table>';
            } else {
                $results .= '<tr>
                                    <td><strong>Lessons Details</strong></td>
                                    <td>Lesson Type</td>
                                    <td>Date</td>
                                 </tr>
                                 </tbody></table></div>';
            }
        } else {
            $results = '<div class="table-responsive">
                    <h4>Account Summary</h4>
                    <table class="table table-borderless table-sm">
                        <tbody>
                          <tr>
                            <td><strong>Students Tutored:</strong></td>
                            <td> 0 Students</td>
                          </tr>
                          <tr>
                            <td><strong>Hours Tutored:</strong></td>
                            <td> 0 Hour(s)</td>
                          </tr>
                          <tr>
                                    <td><strong>Lessons Details</strong></td>
                                    <td>Lesson Type</td>
                                    <td>Date</td>
                                 </tr>
                                 </tbody></table>
                        </tbody>
                      </table></div>';
        }

        echo $results;
        /**
         * End loadAccountSummaryTutor
         */
        break;
    case "tutorLessonAcceptenceStaus":
        /**
         * loadAccountSummaryTutor
         */
        include("functions.php");
        //Query Cookie
        $query_cookie = $_COOKIE['query_cookie'];
        //Get values
        $source = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST['status']);
        $lessonId = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST['lessonId']);
        if ($source == "Accepted") {
            $sql = "UPDATE `" . $companyuri . "_members_lessons` SET Lesson_Status = 'Accepted', Tutor_Status = 'Accepted' WHERE Lesson_Id = '$lessonId' AND Tutor_Id = '$query_cookie';";
            if (mysqli_query($DATABASE_CONNECTION, $sql)) {
                $results = 'success';
            } else {
                $results = 'error';
            }
        } else if ($source == "Declined") {
            $sql = "UPDATE `" . $companyuri . "_members_lessons` SET Lesson_Status = 'Waiting', Tutor_Status = 'Waiting', Tutor_Id = '0' WHERE Lesson_Id = '$lessonId' AND Tutor_Id = '$query_cookie';";
            if (mysqli_query($DATABASE_CONNECTION, $sql)) {
                $results = 'success';
            } else {
                $results = 'error';
            }
        }

        echo $results;
        /**
         * End loadAccountSummaryTutor
         */
        break;
}

