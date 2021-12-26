<?php
include("../php/session.php");
include("includes/configs.php");
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Dashboard | Learn Live</title>
        <?php include("headers.php"); ?>
    </head>
    <body>
        <!-- Navigation -->
        <?php include("$nav_1"); ?>
        <!-- End Navigation -->
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
                <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
                <div class="container">
                    <div class="banner_content text-center">
                        <h2>Dashboard</h2>
                        <div class="page_link">
                            <a href="#">Dashboard</a>
                            <a href="#"><?php echo $account_type;?> Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        <?php include("footer.php"); ?>
    </body>
</html>