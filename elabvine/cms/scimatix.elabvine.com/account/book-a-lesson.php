<?php
include("../php/session.php");
include("includes/configs.php");
if ($Hours == 0) {
    header("Location: ./");
}
//Tutoring Request
if (isset($_REQUEST["lessonType"])) {
    if ($_REQUEST["lessonType"] == "offCampus") {
        $display = "includes/book-a-lesson-off-campus.php";
    } else if ($_REQUEST["lessonType"] == "inCampus") {
        $display = "includes/book-a-lesson-in-campus.php";
    } else if ($_REQUEST["lessonType"] == "online") {
        $display = "includes/book-a-lesson-online.php";
    }
} else {
    $display = "includes/book-a-lesson-questions.php";
}
//Number of lessons dropdown
$x = 1;
$hoursWidget = "";
while ($x <= $Hours) {
    $hoursWidget .= '<option value="' . $x . '">' . $x . ' Hour(s) Lesson</option>';
    $x++;
}
//End Number of lessons dropdown
//Time dropdown
$x = 8;
$hoursRequired = "";
while ($x <= 19) {
    if ($x < 12) {
        $hoursRequired .= '<option value="' . $x . ' am">' . $x . ' am</option>';
    } else {
        $hoursRequired .= '<option value="' . $x . ' pm">' . $x . ' pm</option>';
    }

    $x++;
}
$x = 0;
$minutesRequired = "";
while ($x <= 59) {
    $minutesRequired .= '<option value="' . $x . '">' . $x . '</option>';
    $x++;
}
//End Time dropdown
//If there is a lesson
$sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `" . $companyuri . "_members_lessons` WHERE Member_Id = '$user_id' AND (Lesson_Status = 'Waiting' OR Lesson_Status = 'Accepted');");
if (mysqli_num_rows($sql) > 0) {
    $display = "includes/book-a-lesson-project-available.php";
}
//End If there is a lesson
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
    <head>
        <!-- Site Title -->
        <title>Book A Lesson</title>
        <!-- Meta Description -->
        <meta name="description" content="<?php echo $companyuri; ?> Book A Lesson">      
        <!-- Header -->
        <?php include("headers.php"); ?>
        <script src="../js/w3.js"></script>
    </head>
    <body>	

        <!-- Navigation -->
        <?php include("$nav_1"); ?>
        <!-- start banner Area -->
        <section class="banner-area relative about-banner" id="home">	
            <div class="overlay overlay-bg"></div>
            <div class="container">				
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="about-content col-lg-12">
                        <h1 class="text-white">
                            Book A Lesson				
                        </h1>	
                        <p class="text-white link-nav"><a href="index.php">Dashboard </a>  <span class="lnr lnr-arrow-right"></span>  <a href="book-a-lesson.php"> Book A Lesson</a></p>
                    </div>		
                </div>
            </div>
        </section>
        <!-- End banner Area -->
        <!-- Main Content Area -->
        <!-- End top-category-widget Area -->
        <section class="post-content-area section-gap">
            <!-- notifications Area -->
            <div class="container" id="notifications-section"></div>
            <!-- End notifications Area -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <?php include($display); ?> 
                    </div>
                    <div class="col-lg-2"></div>
                </div>
            </div>
        </section>
        <!-- End Main Content Area -->

        <!-- Footer -->
        <?php include("footer.php"); ?>
        <script>
            function offCampusTutoring() {
                $("#offCampusTutoring").hide();
                //Get values
                var $address1 = document.getElementById("off-campus-address-1").value;
                var $address2 = document.getElementById("off-campus-address-2").value;
                var $address3 = document.getElementById("off-campus-address-3").value;
                var $address4 = document.getElementById("off-campus-address-4").value;
                var $residence = document.getElementById("off-campus-residence").value;
                var $subject = document.getElementById("off-campus-subject").value;
                var $grade = $("#off-campus-grade").val();
                var $description = $("#off-campus-explaination").val();
                //Attachment
                if ($("#off-campus-attachment").get(0).files.length === 0) {
                    var $attachment = "No attachment";
                } else {
                    var $attachment = document.getElementById("off-campus-attachment");
                    $attachment = $attachment.files[0];
                }
                var $lesson_length = $("#off-campus-lesson-length").val();
                var $date = $("#off-campus-date").val() + " " + $("#off-campus-hours").val() + ":" + $("#off-campus-minutes").val();
                //If empty
                if ($residence == "" || $address4 == "" || $address3 == "" || $address1 == "" || $subject == "" || $grade == "" || $description == "" || $lesson_length == "" || $date == "") {
                    alertify.alert("Alert", "Make sure all fields are filled, Attachment is not compulsory.");
                    $("#offCampusTutoring").show();
                } else {

                    var fd = new FormData();
                    fd.append("reqId", "offCampusTutoring");
                    fd.append("address1", $address1);
                    fd.append("address2", $address2);
                    fd.append("address3", $address3);
                    fd.append("address4", $address4);
                    fd.append("residence", $residence);
                    fd.append("subject", $subject);
                    fd.append("grade", $grade);
                    fd.append("description", $description);
                    fd.append("attachment", $attachment);
                    fd.append("lesson", $lesson_length);
                    fd.append("date", $date);

                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {

                            if (this.responseText == "success") {

                                alertify.alert("Alert", "Success. Lesson booked.");
                                setTimeout(function () {
                                    window.location.href = "lesson.php"
                                }, 2500)

                            } else if (this.responseText == "error1") {
                                $("#offCampusTutoring").show();
                                alertify.alert("Alert", "You might have a pending lesson you must finish it first to book another lesson.");
                                setTimeout(function () {
                                    window.location.href = "book-a-lesson.php"
                                }, 2000)
                            } else if (this.responseText == "error2") {
                                $("#offCampusTutoring").show();
                                alertify.alert("Alert", "You might have a pending lesson you must finish it first to book another lesson.");
                                setTimeout(function () {
                                    window.location.href = "book-a-lesson.php"
                                }, 2000)
                            } else if (this.responseText == "error3") {
                                $("#offCampusTutoring").show();
                                alertify.alert("Alert", "An error occred while booking your lesson please try again.");
                                setTimeout(function () {
                                    window.location.href = "book-a-lesson.php"
                                }, 2000)
                            } else if (this.responseText == "error4") {
                                $("#offCampusTutoring").show();
                                alertify.alert("Alert", "Your attachment was not uploaded and your lesson was successfully booked.");
                                setTimeout(function () {
                                    window.location.href = "book-a-lesson.php"
                                }, 2000)
                            } else {
                                $("#offCampusTutoring").show();
                                alertify.alert("Alert", "An error occure please try again.");
                                setTimeout(function () {
                                    window.location.href = "book-a-lesson.php"
                                }, 2000)
                            }

                        }
                    };
                    xmlhttp.open("POST", "../php/index.php", true);
                    xmlhttp.send(fd);
                }

            }
            function inCampusTutoring() {
                $("#inCampusTutoring").hide();
                //Get values
                var $subject = document.getElementById("subject").value;
                var $grade = $("#grade").val();
                var $description = $("#explaination").val();
                //Attachment
                if ($("#attachment").get(0).files.length === 0) {
                    var $attachment = "No attachment";
                } else {
                    var $attachment = document.getElementById("attachment");
                    $attachment = $attachment.files[0];
                }
                var $lesson_length = $("#lesson-length").val();
                var $date = $("#date").val() + " " + $("#hours").val() + ":" + $("#minutes").val();
                //If empty
                if ($subject == "" || $grade == "" || $description == "" || $lesson_length == "" || $date == "") {
                    alertify.alert("Alert", "Make sure all fields are filled, Attachment is not compulsory.");
                    $("#inCampusTutoring").show();
                } else {

                    var fd = new FormData();
                    fd.append("reqId", "inCampusTutoring");
                    fd.append("subject", $subject);
                    fd.append("grade", $grade);
                    fd.append("description", $description);
                    fd.append("attachment", $attachment);
                    fd.append("lesson", $lesson_length);
                    fd.append("date", $date);

                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {

                            if (this.responseText == "success") {

                                alertify.alert("Alert", "Success. Lesson booked.");
                                setTimeout(function () {
                                    window.location.href = "lesson.php"
                                }, 2500)

                            } else if (this.responseText == "error1") {
                                $("#inCampusTutoring").show();
                                alertify.alert("Alert", "You might have a pending lesson you must finish it first to book another lesson.");
                                setTimeout(function () {
                                    window.location.href = "book-a-lesson.php"
                                }, 2000)
                            } else if (this.responseText == "error2") {
                                $("#inCampusTutoring").show();
                                alertify.alert("Alert", "You might have a pending lesson you must finish it first to book another lesson.");
                                setTimeout(function () {
                                    window.location.href = "book-a-lesson.php"
                                }, 2000)
                            } else if (this.responseText == "error3") {
                                $("#inCampusTutoring").show();
                                alertify.alert("Alert", "An error occred while booking your lesson please try again.");
                                setTimeout(function () {
                                    window.location.href = "book-a-lesson.php"
                                }, 2000)
                            } else if (this.responseText == "error4") {
                                $("#inCampusTutoring").show();
                                alertify.alert("Alert", "Your attachment was not uploaded and your lesson was successfully booked.");
                                setTimeout(function () {
                                    window.location.href = "book-a-lesson.php"
                                }, 2000)
                            } else {
                                $("#inCampusTutoring").show();
                                alertify.alert("Alert", "An error occure please try again.");
                                setTimeout(function () {
                                    window.location.href = "book-a-lesson.php"
                                }, 2000)
                            }

                        }
                    };
                    xmlhttp.open("POST", "../php/index.php", true);
                    xmlhttp.send(fd);
                }

            }
            function onlineCampusTutoring() {
                $("#onlineCampusTutoring").hide();
                //Get values
                var $subject = document.getElementById("online-subject").value;
                var $grade = $("#online-grade").val();
                var $description = $("#online-explaination").val();
                //Attachment
                if ($("#online-attachment").get(0).files.length === 0) {
                    var $attachment = "No attachment";
                } else {
                    var $attachment = document.getElementById("online-attachment");
                    $attachment = $attachment.files[0];
                }
                var $lesson_length = $("#online-lesson-length").val();
                var $date = $("#online-date").val() + " " + $("#online-hours").val() + ":" + $("#online-minutes").val();
                //If empty
                if ($subject == "" || $grade == "" || $description == "" || $lesson_length == "" || $date == "") {
                    alertify.alert("Alert", "Make sure all fields are filled, Attachment is not compulsory.");
                    $("#onlineCampusTutoring").show();
                } else {

                    var fd = new FormData();
                    fd.append("reqId", "onlineCampusTutoring");
                    fd.append("subject", $subject);
                    fd.append("grade", $grade);
                    fd.append("description", $description);
                    fd.append("attachment", $attachment);
                    fd.append("lesson", $lesson_length);
                    fd.append("date", $date);

                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {

                            if (this.responseText == "success") {

                                alertify.alert("Alert", "Success. Lesson booked.");
                                setTimeout(function () {
                                    window.location.href = "lesson.php"
                                }, 2500)

                            } else if (this.responseText == "error1") {
                                $("#onlineCampusTutoring").show();
                                alertify.alert("Alert", "You might have a pending lesson you must finish it first to book another lesson.");
                                setTimeout(function () {
                                    window.location.href = "book-a-lesson.php"
                                }, 2000)
                            } else if (this.responseText == "error2") {
                                $("#onlineCampusTutoring").show();
                                alertify.alert("Alert", "You might have a pending lesson you must finish it first to book another lesson.");
                                setTimeout(function () {
                                    window.location.href = "book-a-lesson.php"
                                }, 2000)
                            } else if (this.responseText == "error3") {
                                $("#onlineCampusTutoring").show();
                                alertify.alert("Alert", "An error occred while booking your lesson please try again.");
                                setTimeout(function () {
                                    window.location.href = "book-a-lesson.php"
                                }, 2000)
                            } else if (this.responseText == "error4") {
                                $("#onlineCampusTutoring").show();
                                alertify.alert("Alert", "Your attachment was not uploaded and your lesson was successfully booked.");
                                setTimeout(function () {
                                    window.location.href = "book-a-lesson.php"
                                }, 2000)
                            } else {
                                $("#onlineCampusTutoring").show();
                                alertify.alert("Alert", "An error occure please try again.");
                                setTimeout(function () {
                                    window.location.href = "book-a-lesson.php"
                                }, 2000)
                            }

                        }
                    };
                    xmlhttp.open("POST", "../php/index.php", true);
                    xmlhttp.send(fd);
                }

            }
        </script>
    </body>
</html>