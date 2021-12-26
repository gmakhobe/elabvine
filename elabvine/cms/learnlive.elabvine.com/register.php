<!DOCTYPE HTML>
<html>
    <head>
        <title>Learn Live | Register</title>
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
                        <h2> Register</h2>
                        <div class="page_link">
                            <a href="#">Home</a>
                            <a href="register.php"> Register</a>
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
                            <label>Name and Surname:</label>
                            <input id="name" placeholder="Name and Surname" onfocus="this.placeholder = 'Name and Surname'" onblur="this.placeholder = 'Name and Surname'" class="common-input mb-20 form-control" required="" type="text">   
                            <label>Phone Number:</label>
                            <input id="phone" placeholder="Phone Number" onfocus="this.placeholder = 'Phone Number'" onblur="this.placeholder = 'Phone Number'" class="common-input mb-20 form-control" required="" type="tel">

                            <label>Email Address:</label>
                            <input id="email" placeholder="Email Address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = 'Email Address'" onblur="this.placeholder = 'Email Address'" class="common-input mb-20 form-control" required="" type="email">

                            <label>Password:</label>
                            <input id="password" placeholder="Password" onfocus="this.placeholder = 'Password'" onblur="this.placeholder = 'Password'" class="common-input mb-20 form-control" required="" type="password">

                            <button id='get-started' class="genric-btn success" style="float: left;">Create account</button>					
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