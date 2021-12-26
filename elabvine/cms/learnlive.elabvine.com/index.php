<!DOCTYPE HTML>
<html>
    <head>
        <title>Learn Live | Home - Ekasi Online Tutoring</title>
        <?php include("headers.php"); ?>
        <style>
            .banner_area .banner_inner {
                position: relative;
                overflow: hidden;
                width: 100%;
                min-height: 300px;
                background: transparent !important;
                z-index: 1;
            }
            .feature_area {
                background: #fff !important;
                color: #000 !important;

            }
            .feature_item {
                text-align: center;
                color: #000 !important;
            }
        </style>
    </head>
    <body>
        <?php include("navigation.php"); ?>
        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
            <div class="banner_inner d-flex align-items-center">
                <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
                <div class="container">
                    <div class="banner_content text-center">
                        <h5>Get tutoring lessons anywhere in South Africa</h5>
                        <h3>Get Better Grades, Today.</h3>
                        <p>Start today and book a free tutoring lesson.</p>
                        <a class="main_btn" href="login.php">Register</a>
                        <a class="white_btn" href="register.php">Login</a>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        <!-- Content -->
        <!--================Feature Area =================-->
        <section class="feature_area p_120">
            <div class="bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="text-center">
                    <h2>Our Key Features</h2>
                    <p>LearnLive is a South African tutoring institutions we provide online tutoring and home tutoring to township students, rural area students and town students at an affordable price, our first 30 minutes session is free.</p>
                </div>
                <div class="row feature_inner">
                    <div class="col-lg-4">
                        <div class="feature_item">
                            <i class="lnr lnr-user"></i>
                            <h4>One-On-One Lessons</h4>
                            <p>Book one-on-one lesson either online or face-to-face any where in South Africa today and start seeing results instantly.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="feature_item">
                            <i class="lnr lnr-users"></i>
                            <h4>Group Lessons</h4>
                            <p>Engage with your peers by booking for a group lesson to learn either online or face-to-face and start excelling.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="feature_item">
                            <i class="lnr lnr-book"></i>
                            <h4>Courses</h4>
                            <p>Get free and paid course materials in a form of videos and documents to help you pass your current grade or level.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Feature Area =================-->
        <!-- End Content -->
        <?php include("footer.php"); ?>
    </body>
</html>