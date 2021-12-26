<?php
include("../php/session.php");
if ( $account_type == "Student") {

    $content = "includes/profile-student.php";
    
} else{
    
    $content = "includes/profile-tutor.php";
    
}
include("includes/configs.php");
include("includes/profile-config.php");


//Tutoring Request
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
    <head>
        <!-- Site Title -->
        <title>Profile</title>
        <!-- Meta Description -->
        <meta name="description" content="<?php echo $companyuri; ?> Profile">      
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
                            Profile				
                        </h1>	
                        <p class="text-white link-nav"><a href="index.php">Dashboard </a>  <span class="lnr lnr-arrow-right"></span>  <a href="profile.php"> Profile</a></p>
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
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                        <?php include("$content");?>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
            </div>
        </section>
        <!-- End Main Content Area -->

        <!-- Footer -->

        <?php include("footer.php"); ?>
        <script>
            $(function () {
                $("#button-save-profile-tutor").click(function () {
                    //Personal
                    var $name = $("#name").val();
                    var $surname = $("#surname").val();
                    var $occupation = $("#occupation").val();
                    //Address
                    var $address1 = $("#address-1").val();
                    var $address2 = $("#address-2").val();
                    var $address3 = $("#address-3").val();
                    var $address4 = $("#address-4").val();
                    //Other
                    var $password = $("#password").val();
                    //see if empty
                    if ($name == "" || $surname == "" || $occupation == "" || $address1 == "" || $address2 == "" || $address3 == "" || $address4 == "" || $password == "") {
                        alertify.alert("Alert", "All fields are required!");
                    } else {
                        $.post("../php/index.php",
                                {
                                    reqId: "saveProfileTutor",
                                    name: $name,
                                    surname: $surname,
                                    occupation: $occupation,
                                    address1: $address1,
                                    address2: $address2,
                                    address3: $address3,
                                    address4: $address4,
                                    password: $password

                                },
                                function (data, status) {
                                    var $data = data.replace(/ /g, "");
                                    if (data == "success") {
                                        alertify.alert("Alert", "Saved!");
                                    } else {
                                        alertify.alert("Alert", "An error occured please try again.");
                                    }
                                });
                    }

                });
                $("#button-save-profile").click(function () {
                    //Personal
                    var $name = $("#name").val();
                    var $surname = $("#surname").val();
                    var $grade = $("#grade").val();
                    var $school = $("#school").val();
                    //Address
                    var $address1 = $("#address-1").val();
                    var $address2 = $("#address-2").val();
                    var $address3 = $("#address-3").val();
                    var $address4 = $("#address-4").val();
                    //Guardian
                    var $gname = $("#g-name").val();
                    var $gphone = $("#g-phone").val();
                    var $gemail = $("#g-email").val();
                    //Other
                    var $password = $("#password").val();
                    //see if empty
                    if ($name == "" || $surname == "" || $grade == "" || $school == "" || $address1 == "" || $address2 == "" || $address3 == "" || $address4 == "" || $gname == "" || $gphone == "" || $gemail == "" || $password == "") {
                        alertify.alert("Alert", "All fields are required!");
                    } else {
                        $.post("../php/index.php",
                                {
                                    reqId: "saveProfile",
                                    name: $name,
                                    surname: $surname,
                                    grade: $grade,
                                    school: $school,
                                    address1: $address1,
                                    address2: $address2,
                                    address3: $address3,
                                    address4: $address4,
                                    gname: $gname,
                                    gphone: $gphone,
                                    gemail: $gemail,
                                    password: $password

                                },
                                function (data, status) {
                                    var $data = data.replace(/ /g, "");
                                    if (data == "success") {
                                        alertify.alert("Alert", "Saved!");
                                    } else {
                                        alertify.alert("Alert", "An error occured please try again.");
                                    }
                                });
                    }

                });
            });
        </script>

    </body>
</html>