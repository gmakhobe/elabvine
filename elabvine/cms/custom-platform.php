<!DOCTYPE html>
<html lang="zxx" class="no-js">
    <head>
        <!-- Site Title -->
        <title>Custom Platform</title>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Meta Description -->
        <meta name="description" content="Tell us what you want and we can build it for you right away.">
        <?php include("headers.php"); ?>
    </head>
    <body>
        <?php include("navigation.php"); ?>
        <!-- #header -->

        <!-- start banner Area -->
        <section class="banner-area relative blog-home-banner" style="background: url(img/custom-platform.png) bottom;" id="home">	
            <div class="overlay overlay-bg"></div>
            <div class="container">				
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="about-content blog-header-content col-lg-12">
                        <h1 class="text-white">
                            You want a custom built platform?				
                        </h1>	
                        <p class="text-white">
                            We can build an App, Website and or a Web Application (Online Platform).
                        </p>
                    </div>	
                </div>
            </div>
        </section>
        <!-- End banner Area -->				  

        <!-- Start home-about Area -->
        <section class="home-about-area section-gap">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6 col-md-6 home-about-left">
                        <img class="img-fluid" src="img/custom-platform-img.png" alt="">
                    </div>
                    <div class="col-lg-5 col-md-6 home-about-right">
                        <h6>Have an idea?</h6>
                        <h1 class="text-uppercase">Let us build your dream</h1>
                        <p>
                            Your intellectual property (IP) is important, trust elabvine we can make your dream come through by building an App, a Website and or a Web Application for you.
                        </p>
                        <p>
                            You want to know more about how long can it take, how much does it cost and the language we are going to use and all of that technical stuff? <a href="#">Click here or scroll down.</a>
                        </p>
                    </div>
                </div>	
        </section>
        <!-- End home-about Area -->	

        <!-- Start contact-page Area -->
        <section class="contact-page-area section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb-30">
                        <h3 class="text-center">
                            Typical response time is less than 1 hour or you can just call.   
                        </h3>	
                    </div>
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

                                    <input id="subject" placeholder="Enter subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control" required="" type="text" value="I need an App or Website or Web Application">
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
        <!-- End contact-page Area -->

        <?php include("footer.php"); ?>	
    </body>
</html>