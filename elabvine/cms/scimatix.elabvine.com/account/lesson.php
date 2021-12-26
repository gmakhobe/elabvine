<?php
include("../php/session.php");
include("includes/configs.php");

if (!isset($_REQUEST["reqId"])) {
    if ($account_type = "Student") {
        $display = "includes/lesson-student.php";
    }
} else if (isset($_REQUEST["reqId"])) {

    if (isset($_REQUEST["reqId"]) && $_REQUEST["reqId"] == "reportStudent") {
        $display = "includes/lesson-report.php";
    } else if (isset($_REQUEST["reqId"]) && $_REQUEST["reqId"] == "completeLessonStudent") {
        header("rate.php");
    } else {

        $display = "includes/lesson-student-manager.php";
        //Id
        $lessonId = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST["reqId"]);
        #Sql
        $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `" . $companyuri . "_members_lessons` WHERE Member_Id = '$user_id' AND Lesson_Status = 'Accepted';");
        if (mysqli_num_rows($sql) > 0) {
            //Table scimatix_...
            $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
            $status = $row["Lesson_Status"];
            $subject = $row["Subject"];
            $type = $row["Type"];
            $description = $row["Description"];
            $grade = $row["Grade"];
            $date = $row["Date"];
            $lesson_hours = $row["Lesson_Hours"];
            $attach = $row["Attachment"];
            if ($attach == "") {
                $attach = "";
            } else {
                $attach = "Attachment: <a href='../" . $row['Attachment'] . "' class='btn btn-link'> View</a><br>";
            }
            $type = $row["Type"];
            if ($type == "Off Campus Tutoring") {
                $addressSection = '<div class=" d-flex flex-column address-wrap">
                                        <div class="single-contact-address d-flex">
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
                                        </div>
                                   </div><br>';
            }else{
                $addressSection = '';
            }
            $tutor_id = $row["Tutor_Id"];
            if ($sql2 = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `" . $companyuri . "_members_information` WHERE Id = '$tutor_id';")) {
                $row2 = mysqli_fetch_array($sql2, MYSQLI_ASSOC);

                $tutor_name = $row2['Name'];
                $tutor_surname = $row2['Surname'];

                if ($sql3 = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `members_personal_information` WHERE Member_Id = '$tutor_id';")) {
                    $row3 = mysqli_fetch_array($sql3, MYSQLI_ASSOC);
                    $tutor_profile = $row3['Profile_Picture'];
                    if ($tutor_profile == "") {
                        $tutor_profile = "../img/profile.png";
                    }
                }
            }
        }
    }
} else {
    header("Location: lesson.php");
}
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
    <head>
        <!-- Site Title -->
        <title>Lesson</title>
        <!-- Meta Description -->
        <meta name="description" content="<?php echo $companyuri; ?> Lesson">      
        <!-- Header -->
        <?php include("headers.php"); ?>
        <script src="../js/w3.js"></script>
        <script src="../js/vendor/jquery-2.2.4.min.js"></script>
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
                            Lesson				
                        </h1>	
                        <p class="text-white link-nav"><a href="index.php">Dashboard </a>  <span class="lnr lnr-arrow-right"></span>  <a href="lesson.php"> Lesson</a></p>
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
                        <?php include("$display"); ?>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
            </div>
        </section>
        <!-- End Main Content Area -->

        <!-- Footer -->
        <?php include("footer.php"); ?>


    </body>
</html>