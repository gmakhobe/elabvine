<!DOCTYPE HTML>
<html>
    <head>
        <title>Learn Live | Login</title>
        <?php include("headers.php"); ?>
    </head>
    <body>
        <?php include("navigation.php"); ?>
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
                <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
                <div class="container">
                    <div class="banner_content text-center">
                        <h2> login</h2>
                        <div class="page_link">
                            <a href="#">Home</a>
                            <a href="login.php"> Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        <!-- Content -->
        <!--================Course Main Area =================-->
        <section class="event_main_area p_120">
            <div class="container">
                <div class="row event_main_inner">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <div class="form-area contact-form pt-30">
                            <div class="alert alert-warning text-center" id="LogInWarning"></div>
                            <div class="form-area contact-form pt-30">
                                <label>Email Address:</label>
                                <input id="login-email" placeholder="Email Address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" class="common-input mb-20 form-control" required="" type="email">

                                <label>Password:</label>
                                <input id="login-password" placeholder="Enter your password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" class="common-input mb-20 form-control" required="" type="password">

                                <button id='button-login-submit' class="genric-btn success" style="float: left;">Log In</button>					
                            </div>		
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
            </div>
        </section>
        <!--================End Course Main Area =================-->
        <!-- End Content -->
        <?php include("footer.php"); ?>
    </body>
</html>