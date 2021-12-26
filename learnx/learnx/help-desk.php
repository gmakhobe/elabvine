<?php
#$link = "";
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>LearnX - Help Desk</title>

        <!-- Headers -->
        <?php include("includes/header.php"); ?>
        <!-- End Headers -->

        <!-- Script -->
        <script src="js/jquery.min.js"></script>
        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
            (function () {
                var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = 'https://embed.tawk.to/5c33e317361b3372892ee60d/default';
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();
        </script>
        <!--End of Tawk.to Script-->
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
            <h2><kbd>Help Desk</kbd></h2>

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
        <!-- Help Desk Section -->
        <div class="container" id="help-desk">
            <h3 class="text-center">Contact Us</h3>
            <p class="text-center">If you have any problem send us a message, a typical response time is 2 hours!</p>

            <div class="row">
                <div class="col-sm-4">
                    <p class="text-info">Connect to us and we'll get back to you within 24 hours.</p>
                    <p><span style="color:#034f84;" class="glyphicon glyphicon-globe"></span> learnx.elabvine.com</p>
                    <p><span style="color:#034f84;" class="glyphicon glyphicon-phone"></span> +27 66 066 1480</p>
                    <p><span style="color:#034f84;" class="glyphicon glyphicon-envelope"></span> givenmakhobela@elabvine.com</p>
                </div>
                <div class="col-sm-8">
                    <div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <input class="form-control" id="subject" placeholder="Your Subject" type="text" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <input class="form-control" id="mail-email" placeholder="Your Email" type="email" required>
                            </div>
                        </div>
                        <textarea class="form-control" id="message" placeholder="Your Message" rows="5"></textarea>
                        <br>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <button class="btn btn-primary btn-lg pull-right" id="help-center-button">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Help Desk Section -->
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