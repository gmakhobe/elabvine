<?php include("../php/session.php"); ?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon-->
        <link rel="shortcut icon" href="../img/fav.png">
        <!-- Author Meta -->
        <title>Verify Account</title>
        <meta name="description" content="Build an online business on top of already existing and proven frameworks." />
        <meta name="author" content="elabvine">
        <meta name="robots" content="index, follow">
        <meta name="revisit-after" content="15 days">
        <!-- meta character set -->
        <meta charset="UTF-8">
        <!-- Site Title -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="../css/linearicons.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/magnific-popup.css">
        <link rel="stylesheet" href="../css/jquery-ui.css">				
        <link rel="stylesheet" href="../css/nice-select.css">							
        <link rel="stylesheet" href="../css/animate.min.css">
        <link rel="stylesheet" href="../css/owl.carousel.css">				
        <link rel="stylesheet" href="../css/main.css">
        <script src="../js/alertify.min.js"></script>
        <script type="text/javascript">
            //override defaults
            alertify.defaults.transition = "slide";
            alertify.defaults.theme.ok = "btn btn-primary";
            alertify.defaults.theme.cancel = "btn btn-danger";
            alertify.defaults.theme.input = "form-control";
        </script>
        <link rel="stylesheet" href="../css/alertify.min.css">
    </head>
    <body>	

        <header id="header">
            <div class="container main-menu">
                <div class="row align-items-center justify-content-between d-flex">
                    <div id="logo">
                        <a href="../index.php"><img src="../img/logo.png" alt="" title="" /></a>
                    </div>
                    <nav id="nav-menu-container">
                        <ul class="nav-menu">
                            <li><a href="index.php">Home</a></li>
                        </ul>

                    </nav><!-- #nav-menu-container -->		    		
                </div>
            </div>
        </header><!-- #header -->

        <!-- start banner Area -->
        <section class="banner-area">
            <div class="container">
                <div class="row fullscreen align-items-center justify-content-between">
                    <div class="col-lg-6 col-md-6 banner-left">
                        <h6>Verify Your Email Address</h6>
                        <h1>Account</h1>
                        <p>
                            A verification link has been sent to your email address you need to go to your inbox and click the activation link which has been sent by no-reply@elabvine.com. If you haven't received any link yet click resend. 
                        </p>
                        <button onclick="verifyAccount('<?php echo $our_emailaddress;?>')" class="primary-btn text-uppercase">Resend Email</button>
                    </div>
                    <div class="col-lg-6 col-md-6 banner-right d-flex align-self-end">
                        <img class="img-fluid d-none d-sm-block" src="../img/verify-img.jpg" alt="">
                        <img class="img-fluid d-sm-none" style="height:308px !important;" src="../img/verify-img.jpg" alt="">
                    </div>
                </div>
            </div>					
        </section>
        <!-- End banner Area -->


        <!-- start footer Area -->
        <footer class="footer-area section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>elabvine</h4>
                            <p>
                               Create an online freelance platform, tutoring platform and crowd sourcing platform with our content management system for free.
                            </p>
                            <p class="footer-text">
                                Copyright &copy; <?php echo date("Y"); ?> All rights reserved <br> ELABVINE (PTY) LTD (2017/531848/07)
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Newsletter</h4>
                            <p>Stay updated with our latest trends</p>
                            <div class="" id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="EMAIL" placeholder="Enter Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email Address '" required="" type="email">
                                        <div class="input-group-btn">
                                            <button class="btn btn-default" type="submit">
                                                <span class="lnr lnr-arrow-right"></span>
                                            </button>    
                                        </div>
                                        <div class="info"></div>  
                                    </div>
                                </form> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                        <div class="single-footer-widget">
                            <h4>Follow Us</h4>
                            <p>Social Media</p>
                            <div class="footer-social d-flex align-items-center">
                                <a href="https://www.facebook.com/elabvine"><i class="fa fa-facebook"></i></a>
                                <a href="https://www.twitter.com/elabvine"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.linkedin.com/company/elabvine"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End footer Area -->	

        <script>
            function verifyAccount(emailaddress) {

                var xmlhttp = new XMLHttpRequest();
                
                var fd = new FormData();
                    fd.append("resend", 1);
                    fd.append("emailaddress", emailaddress);
                
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {

                        if (this.responseText == "success") {

                            alertify.alert('Verification Link', "Link was sent to your email address.", function () {
                                alertify.success('Success!');
                            }).bringToFront();

                            
                        } else {

                            alertify.alert('Verification Link', "Something went wrong please try again.", function () {
                                alertify.error('Error!');
                            }).bringToFront();

                        }

                    }
                };
                xmlhttp.open("POST", "../php/verify-account.php", true);
                xmlhttp.send(fd);

            }
        </script>

        <script src="../js/vendor/jquery-2.2.4.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/vendor/bootstrap.min.js"></script>			
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>			
        <script src="../js/easing.min.js"></script>			
        <script src="../js/hoverIntent.js"></script>
        <script src="../js/superfish.min.js"></script>	
        <script src="../js/jquery.ajaxchimp.min.js"></script>
        <script src="../js/jquery.magnific-popup.min.js"></script>	
        <script src="../js/jquery.tabs.min.js"></script>						
        <script src="../js/jquery.nice-select.min.js"></script>	
        <script src="../js/isotope.pkgd.min.js"></script>			
        <script src="../js/waypoints.min.js"></script>
        <script src="../js/jquery.counterup.min.js"></script>
        <script src="../js/simple-skillbar.js"></script>							
        <script src="../js/owl.carousel.min.js"></script>							
        <script src="../js/mail-script.js"></script>	
        <script src="../js/main.js"></script>
    </body>
</html>