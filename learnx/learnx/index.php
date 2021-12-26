<?php
if (isset($_COOKIE['remember_me_learnx'])) {
    session_start();
    $_SESSION['session_learnx'] = $_COOKIE['remember_me_learnx'];
    header("Location: welcome.php");
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>LearnX - Digital Solution Platform</title>

        <!-- Headers -->
        <?php include("includes/header.php"); ?>
        <!-- End Headers -->

        <!-- Script -->
        <script src="js/jquery.min.js"></script>
        <!-- End Script -->

        <style>


        </style>

    </head>

    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

        <!--Navbar-->
        <?php include("includes/navigation.php"); ?>
        <!--Navbar end-->

        <!-- End Jumbtron -->
        <div class="jumbotron text-center" id="home">
            <h1><kbd>Welcome</kbd></h1>

            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <a href="download/learnx.apk" class="btn btn-info btn-block" id="download-app">Download App</a>
                    <button class="btn btn-default btn-block" data-toggle="modal" data-target="#login">Login</button>
                    <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#register">Sign Up</button>
                    <button class="btn btn-warning btn-block" id="business">For Businesses</button>
                </div>
                <div class="col-sm-4"></div>
            </div>


        </div>
        <!-- End Jumbotron -->
        <!-- Content -->
        <!-- About Section -->
        <div class="container" id="about">
            <h3 class="text-center">LearnX App</h3>
            <p class="text-center">How LearnX App for High School works!</p>

            <div class="row">
                <div class="col-sm-6">
                    <center><img src="img/smartphone.png" class="smartphone" id="smartphone" alt="smartphone"/></center>
                </div>
                <div class="col-sm-6">
                    <h2 class="pb-2 display-5">Solve any Mathematics and Physics Scenario!</h2>
                    <p>LearnX is powered by a combination of artificial intelligence and algorithms, so that it solves Mathematics and Physical Sciences step-by-step like a teacher would.</p>
                    <br>
                    <p>Our platform utilizes the latest technology to aid in solving your Mathematics and Physical Sciences problems.</p>
                    <br>
                    <p>Contact us today for more information.</p>
                </div>
            </div>
        </div>
        <!-- End About Section -->
        <!-- Account Section -->
        <div class="container" id="account">
            <br>
            <div class="row">
                <h2 class="text-center">Account</h2>
                <p class="text-center">LearnX user account!</p>
                <div class="col-sm-3 text-center">
                    <center><a href="download/learnx.apk" class="btn btn-info btn-block  btn-lg" id="download-app">Download App</a></center><br>
                </div>
				<div class="col-sm-3 text-center">
                    <center><button class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#login">Login</button></center><br>
                </div>
                <div class="col-sm-3 text-center">
                    <center><button class="btn btn-primary btn-block btn-lg" data-toggle="modal" data-target="#register">Register</button></center><br>
                </div>
                <div class="col-sm-3 text-center">
                    <center><a href="business.php"><button class="btn btn-warning btn-block btn-lg" >For Business</button></a></center>
					<br>
                </div>
            </div>
            <br>
        </div>
        <!-- End Account Section -->
        <!-- How it works Section -->
        <div class="container text-center" id="howitworks">
            <h2>How It Works</h2>
            <p>See a full video of how LearnX work!</p>
            <br>
            <div class="row">
                <div class="col-sm-2">

                </div>
                <div class="col-sm-8">
                    <center>
                        <video id='my-video' class='video-js' controls preload='auto' style="width: 100%;"
                               poster='img/barner.png' data-setup='{}'>
                            <source src='tutorial/how-to.mp4' type='video/mp4'>
                            <p class='vjs-no-js'>
                                To view this video please enable JavaScript, and consider upgrading to a web browser that
                                supports HTML5 video like Google Chrome or Firefox.
                            </p>
                        </video>
                    </center>
                </div>
                <div class="col-sm-2">

                </div>
            </div>
        </div>
        <!-- End How it works Section-->
        <!-- End Content -->



        <br>


        <!-- PhotoSwipe -->
        <?php include("includes/photoswipe.php"); ?>
        <!-- End PhotoSwipe -->
        <!-- Modals -->
        <?php include("includes/modal.php"); ?>
        <!-- End Modals -->
        <!-- Footer -->
        <?php include("includes/footer.php"); ?>
        <!-- End Footer -->
        <!-- PhotoSwipe -->
        <script>
            var openPhotoSwipe = function () {
                var pswpElement = document.querySelectorAll('.pswp')[0];

                // build items array
                var items = [
                    {
                        src: 'img/smartphone.png',
                        h: 400
                    }
                ];

                // define options (if needed)
                var options = {
                    // optionName: 'option value'
                    // for example:
                    index: 0 // start at first slide
                };

                // Initializes and opens PhotoSwipe
                var gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
                gallery.init();
            }

            //openPhotoSwipe();

            document.getElementById('smartphone').onclick = openPhotoSwipe;

        </script>
        <!-- End PhotoSwipe -->

    </body>

</html>