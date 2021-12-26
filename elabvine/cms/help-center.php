<!DOCTYPE html>
<html lang="zxx" class="no-js">
    <head>
        <!-- Site Title -->
        <title>Help Center</title>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Meta Description -->
        <meta name="description" content="elabvine Help Center - Let us help you.">
        <?php include("headers.php"); ?>
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
    </head>
    <body>
        <?php include("navigation.php"); ?>
        <!-- #header -->

        <!-- start banner Area -->
        <section class="relative about-banner">	
            <div class="overlay overlay-bg"></div>
            <div class="container">				
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="about-content col-lg-12">
                        <h1 class="text-white">
                            Help Center				
                        </h1>	
                        <p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="help-center.php"> Help Center</a></p>
                    </div>	
                </div>
            </div>
        </section>
        <!-- End banner Area -->

        <!-- Start get-started-page Area -->
        <section class="contact-page-area section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb-20">
                        <h4>What are you looking for?</h4>
                        <h4 class="pt-30">
                            Ask us any questions about our products and services we will help you right away. The questions can include setting up your platform, creating a new account, migrating from another account, domains, custom designed platform and any other question you might have.    
                        </h4>	
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="menu-content col-lg-7">
                        <div class="title text-center">
                            <h3 class="mb-10">Typical response time is less than<br> 1 hour or you can just call.</h3>
                        </div>
                    </div>
                </div>	
                <br>
                <div class="row">
                    <div class="col-lg-4 d-flex flex-column address-wrap">
                        <div class="single-contact-address d-flex flex-row">
                            <div class="icon">
                                <span class="lnr lnr-home"></span>
                            </div>
                            <div class="contact-details">
                                <h5>South Africa, Gauteng</h5>
                                <p>
                                    1474 Block H, Soshanguve 0152, Pretoria
                                </p>
                            </div>
                        </div>
                        <div class="single-contact-address d-flex flex-row">
                            <div class="icon">
                                <span class="lnr lnr-phone-handset"></span>
                            </div>
                            <div class="contact-details">
                                <h5>(+27) 76 340 1996</h5>
                                <p>Sun to Sat 8:30am to 6:30pm</p>
                            </div>
                        </div>
                        <div class="single-contact-address d-flex flex-row">
                            <div class="icon">
                                <span class="lnr lnr-envelope"></span>
                            </div>
                            <div class="contact-details">
                                <h5>givenmakhobela@elabvine.com</h5>
                                <p>Send your query anytime!</p>
                            </div>
                        </div>									
                    </div>
                    <div class="col-lg-8">
                        <div class="form-area contact-form text-right" id="myForm">
                            <div class="row">	
                                <div class="col-lg-6 form-group">
                                    <input id="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">

                                    <input id="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

                                    <input id="subject" placeholder="Enter subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control" required="" type="text">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <textarea class="common-textarea form-control" id="message" placeholder="Enter Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Messege'" required=""></textarea>				
                                </div>
                                <div class="col-lg-12">
                                    <div class="alert-msg" style="text-align: left;"></div>
                                    <button id="button-custom-platform-send-message" class="genric-btn primary" style="float: right;">Send Message</button>
                                </div>
                            </div>
                        </div>	
                    </div>
                </div>
            </div>	
        </section>
        <!-- End get-started-page Area -->


        <?php include("footer.php"); ?>	
    </body>
</html>