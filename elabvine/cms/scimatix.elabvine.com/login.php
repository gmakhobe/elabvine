<!DOCTYPE html>
<html lang="zxx" class="no-js">
    <head>
        <!-- Site Title -->
        <title>Login</title>
        <!-- Meta Description -->
        <meta name="description" content="Login to members area.">      
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
                            <i class="fa fa-lock"></i> Log In				
                        </h1>	
                        <p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="login.php"> <i class="fa fa-lock"></i> Log In</a></p>
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
                        <h3>Log In To Members Area.</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 d-flex flex-column address-wrap">

                    </div>
                    <div class="col-lg-8">
                        <div class="alert alert-warning text-center" id="LogInWarning"></div>
                        <div class="form-area contact-form text-right pt-30">
                            <input id="login-email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

                            <input id="login-password" placeholder="Enter your password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your password'" class="common-input mb-20 form-control" required="" type="password">
                            
                            <div class="alert-msg" style="text-align: left;"></div>
                            <button id='button-login-submit' class="genric-btn primary" style="float: left;">Log In</button>					
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