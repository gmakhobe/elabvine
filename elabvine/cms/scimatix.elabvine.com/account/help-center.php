<!DOCTYPE html>
<html lang="zxx" class="no-js">
    <head>
        <!-- Site Title -->
        <title>Help Center</title>
        <!-- Meta Description -->
        <meta name="description" content="Scimatix help center - Let us help you.">      
        <!-- Header -->
        <?php include("headers.php"); ?>
       <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
            (function () {
                var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = 'https://embed.tawk.to/5c4bfddcab5284048d0ea73a/default';
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();
        </script>
        <!--End of Tawk.to Script-->
    </head>
    <body>	

        <!-- Navigation -->
        <?php include("navigation.php"); ?>
        <!-- start banner Area -->
        <section class="banner-area relative about-banner" id="home">	
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
        <!-- Start contact-page Area -->
        <section class="contact-page-area section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb-20">
                        <h4>What do you need help with?</h4>
                        <h4 class="pt-30">
                            Ask us any questions about tutoring and matric rewrite we will help you right away. The questions can include how to get started, application fees, how to create a new account, how to log in and any other question you might have.    
                        </h4>	
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 d-flex flex-column address-wrap">
                        <div class="single-contact-address d-flex flex-row">
                            <div class="icon">
                                <span class="lnr lnr-home"></span>
                            </div>
                            <div class="contact-details">
                                <h5>Pretoria, Hatfield</h5>
                                <p>
                                    1025 Park Street (within the same fence as Total Ambassador fuel station), Hatfield, Pretoria, South Africa, 0002.
                                </p>
                            </div>
                        </div>
                        <div class="single-contact-address d-flex flex-row">
                            <div class="icon">
                                <span class="lnr lnr-phone-handset"></span>
                            </div>
                            <div class="contact-details">
                                <h5>+27 12 362 2105</h5>
                                <p>Mon to Sat 9am to 5 pm</p>
                            </div>
                        </div>
                        <div class="single-contact-address d-flex flex-row">
                            <div class="icon">
                                <span class="lnr lnr-envelope"></span>
                            </div>
                            <div class="contact-details">
                                <h5>info@scimatics.com</h5>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>														
                    </div>
                    <div class="col-lg-8">
                        <div class="form-area contact-form text-right pt-30">
                            <div class="row">	
                                <div class="col-lg-6 form-group">
                                    <input id="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">

                                    <input id="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

                                    <input id="phone" placeholder="Enter phone number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter phone number'" class="common-input mb-20 form-control" required="" type="text">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <textarea class="common-textarea form-control" id="message" placeholder="Enter Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Messege'" required=""></textarea>				
                                </div>
                                <div class="col-lg-12">
                                    <div class="alert-msg" style="text-align: left;"></div>
                                    <button id="button-help-center" class="genric-btn primary" style="float: right;">Send Message</button>											
                                </div>
                            </div>
                        </div>
                    </div>	
                </div>
            </div>
        </div>	
    </section>
    <!-- End contact-page Area -->
    <!-- Footer -->
    <?php include("footer.php"); ?>
</body>
</html>