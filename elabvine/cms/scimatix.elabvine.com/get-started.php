<!DOCTYPE html>
<html lang="zxx" class="no-js">
    <head>
        <!-- Site Title -->
        <title>Get Started</title>
        <!-- Meta Description -->
        <meta name="description" content="Get started today by signing up for a new account and start requesting for tutoring lessons or apply to rewrite your matric with us.">      
        <!-- Header -->
        <?php include("headers.php"); ?>
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
                            Get Started				
                        </h1>	
                        <p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="get-started.php"> Get Started</a></p>
                    </div>	
                </div>
            </div>
        </section>
        <!-- End banner Area -->	
        <!-- Start contact-page Area -->
        <section class="contact-page-area section-gap">
            <div class="container">
                <div class="menu-content col-lg-12">
                    <div class="title text-center">
                        <h3>Get started by registering for a new<br> Scimatix account today.</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 d-flex flex-column address-wrap">

                    </div>
                    <div class="col-lg-8">
                        <div class="form-area contact-form text-right pt-30">
                            <input id="name" placeholder="Enter your name and surname" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name and surname'" class="common-input mb-20 form-control" required="" type="text">
                            <input id="phone" placeholder="Enter your phone number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your phone number'" class="common-input mb-20 form-control" required="" type="tel">

                            <input id="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

                            <input id="password" placeholder="Enter your password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your password'" class="common-input mb-20 form-control" required="" type="password">
                            
                            <div class="alert-msg" style="text-align: left;"></div>
                            <button id='get-started' class="genric-btn primary" style="float: left;">Create account</button>					
                        </div>
                    </div>	
                </div>
                <div class="col-lg-2 d-flex flex-column address-wrap">

                </div>
            </div>
        </div>	
    </section>
    <!-- End contact-page Area -->
    <!-- Footer -->
    <?php include("footer.php"); ?>
</body>
</html>