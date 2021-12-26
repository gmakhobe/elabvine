<?php
include("../php/session.php");
include("includes/configs.php");
//Profiles
$sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `" . $companyuri . "_tutor_profiles` WHERE Member_Id = '$user_id';");
if (mysqli_num_rows($sql) > 0) {
    $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
    $profile_staus = $row["Status"];
    $message = $row["Message"];
    if($profile_staus == "Published"){
        $display = "includes/tutor-profile-published.php";
    }else if($profile_staus == "Not Published"){
        $display = "includes/tutor-profile-rejected.php";
    }else if($profile_staus == "Accepted"){
        $display = "includes/tutor-profile-accepted.php";
    }else if($profile_staus == "Blocked"){
        $display = "includes/tutor-profile-blocked.php";
    }
    
} else {
    $display = "includes/tutor-profile.php";
}
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
    <head>
        <!-- Site Title -->
        <title>Tutor Profile</title>
        <!-- Meta Description -->
        <meta name="description" content="<?php echo $companyuri; ?> Tutor Profile">      
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
                            Tutor Profile				
                        </h1>	
                        <p class="text-white link-nav"><a href="index.php">Dashboard </a>  <span class="lnr lnr-arrow-right"></span>  <a href="tutor-profile.php"> Tutor Profile</a></p>
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
        <script>
            //Onclick
            $("#tutor-profile").click(function () {
                alertify.confirm("Alert", "Are you sure that you have provided the right information regarding your application becuase if not your application would be in violation with our terms and conditions.",
                        function () {
                            submitTutorProfile();
                        },
                        function () {
                            alertify.error('Cancel');
                        });
            });
            //Submit Function
            function submitTutorProfile() {
                //Get values
                var $language1 = $("#language-1").val();
                var $language2 = $("#language-2").val();
                var $student_number = $("#student-number").val();
                var $degree = $("#degree").val();
                var $short_course = $("#short-course").val();
                var $employer = $("#employer").val();
                var $position = $("#position").val();
                var $period_employed = $("#period-employed").val();
                var $subjects = $("#subjects").val();
                var $grades = $("#grades").val();
                //Id Attachment
                if ($("#id-copy").get(0).files.length === 0) {
                    var $id = "";
                } else {
                    var $id = document.getElementById("id-copy");
                    $id = $id.files[0];
                }
                //CV Attachment
                if ($("#cv-copy").get(0).files.length === 0) {
                    var $cv = "";
                } else {
                    var $cv = document.getElementById("cv-copy");
                    $cv = $cv.files[0];
                }
                if ($language1 == "" || $language2 == "" || $subjects == "" || $grades == "") {
                    alertify.alert("Alert", "Please fill all fileds that are marked with * sign.");
                } else {

                    var fd = new FormData();
                    fd.append("reqId", "tutorProfile");
                    fd.append("language1", $language1);
                    fd.append("language2", $language2);
                    fd.append("studentNumber", $student_number);
                    fd.append("degree", $degree);
                    fd.append("shortCourse", $short_course);
                    fd.append("subjects", $subjects);
                    fd.append("grades", $grades);
                    fd.append("employer", $employer);
                    fd.append("position", $position);
                    fd.append("periodEmployed", $period_employed);
                    fd.append("id", $id);
                    fd.append("cv", $cv);
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {

                            var data = this.responseText;
                            var $data = data.replace(/ /g, "");
                            if ($data == "success") {
                                alertify.alert("Alert", "Success. Your tutor profile is successfully published and is awaiting for acceptance.");
                                setTimeout(function () {
                                    window.location.href = "tutor-profile.php"
                                }, 2500)
                            } else {
                                alertify.alert("Alert", "An error occured please try again.");
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