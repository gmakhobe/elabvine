<?php
#$link = "";
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>LearnX - Business</title>

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
        <?php include("includes/navigation-non-index.php"); ?>
        <!--Navbar end-->

        <!-- End Jumbtron -->
        <div class="jumbotron text-center" id="home">
            <h2><kbd>For Business</kbd></h2>

            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <button class="btn btn-default btn-block" data-toggle="modal" data-target="#login">Login</button>
                    <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#register">Sign Up</button>
                    <button class="btn btn-warning btn-block" id="business">For Businesses</button>
                </div>
                <div class="col-sm-4"></div>
            </div>


        </div>
        <!-- End Jumbotron -->
        <!-- Content -->
        <!-- Pricing Section -->
        <div id="pricing" class="container">
            <div class="text-center">
                <h2>Licenses</h2>
                <h4>Choose License Package For Your Institution</h4>
            </div>
            <div class="row slideanim">
                <div class="col-sm-6 col-xs-12">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <h1>Business License</h1>
                        </div>
                        <div class="panel-body">
                            <p><strong>Per Less Than 150 Users</strong> </p>
                            <p><strong>One Grade Curriculum Maths and Science</strong><br> (Grade 10 or Grade 11 or Grade 12)</p>
                            <p><strong>Setup & Installation Fee R1500</strong> once off</p>
                            <p><strong>Includes Android App and Online Platform</strong></p>
                        </div>
                        <div class="panel-footer">
                            <h3>R529</h3>
                            <h4>per month</h4>
                            <a href="help-desk.php"><button class="btn btn-lg">Help Center</button></a>
                        </div>
                    </div>      
                </div>     
                <div class="col-sm-6 col-xs-12">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <h1>Organization (NPO's) License</h1>
                        </div>
                        <div class="panel-body">
                            <p><strong>Per Less Than 350 Users</strong> </p>
                            <p><strong>One Grade Curriculum Maths and Science</strong><br> (Grade 10 or Grade 11 or Grade 12)</p>
                            <p><strong>Setup & Installation Fee R2000</strong> once off</p>
                            <p><strong>Includes Android App and Online Platform</strong></p>
                        </div>
                        <div class="panel-footer">
                            <h3>R529</h3>
                            <h4>per month</h4>
                            <a href="help-desk.php"><button class="btn btn-lg">Help Center</button></a>
                        </div>
                    </div>      
                </div>    
            </div>
        </div>
        <!-- End Pricing Section -->
        <!-- End Content -->


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