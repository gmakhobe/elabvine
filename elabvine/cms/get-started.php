<!DOCTYPE html>
<html lang="zxx" class="no-js">
    <head>
        <!-- Site Title -->
        <title>Get Started</title>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Meta Description -->
        <meta name="description" content="Start with your free 15 days trial today with elabvine.">
        <?php include("headers.php"); ?>
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
                            Get Started				
                        </h1>	
                        <p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="get-started.php"> Get Started</a></p>
                    </div>	
                </div>
            </div>
        </section>
        <!-- End banner Area -->

        <!-- Start get-started-page Area -->
        <section class="contact-page-area section-gap">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content  col-lg-7">
                        <div class="title text-center">
                            <h3 class="mb-10">Start your free 2 weeks trial<br> today with elabvine.</h3>
                        </div>
                    </div>
                </div>	
                <br>
                <div class="row">
                    <div class="col-lg-2 d-flex flex-column"></div>
                    <div class="col-lg-8">
                        <div class="form-area contact-form">
                            <label>Email Address</label>
                            <input id="email" placeholder="Email Address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" class="common-input mb-20 form-control" required="" type="email">
                            <label>Password</label>
                            <input id="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" class="common-input mb-20 form-control" required="" type="password">
                            <label>Company Name</label>
                            <input id="company-name" placeholder="Company Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Company Name'" class="common-input mb-20 form-control" required="" type="text">
                            <button id="create-your-platform" class="genric-btn primary" style="float: left;">Create your platform</button>
                        </div>	
                    </div>
                    <div class="col-lg-2 d-flex flex-column"></div>
                </div>
            </div>	
        </section>
        <!-- End get-started-page Area -->


        <?php include("footer.php"); ?>	
    </body>
</html>