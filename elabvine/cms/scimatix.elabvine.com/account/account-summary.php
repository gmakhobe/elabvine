<?php
include("../php/session.php");
include("includes/configs.php");

?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
    <head>
        <!-- Site Title -->
        <title>Book A Lesson</title>
        <!-- Meta Description -->
        <meta name="description" content="<?php echo $companyuri; ?> Book A Lesson">      
        <!-- Header -->
        <?php include("headers.php"); ?>
        <script src="../js/w3.js"></script>
    </head>
    <body>	

        <!-- Navigation -->
        <?php include("$nav_1"); ?>
        <!-- start banner Area -->
        <section class="banner-area relative about-banner" id="home">	
            <div class="overlay overlay-bg"></div>
            <div class="container">				
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="about-content col-lg-12">
                        <h1 class="text-white">
                           Account Summary		
                        </h1>	
                        <p class="text-white link-nav"><a href="index.php">Dashboard </a>  <span class="lnr lnr-arrow-right"></span>  <a href="account-summary.php"> Account Summary</a></p>
                    </div>		
                </div>
            </div>
        </section>
        <!-- End banner Area -->
        <!-- Main Content Area -->
        <!-- End top-category-widget Area -->
        <section class="post-content-area section-gap">
            <!-- notifications Area -->
            <div class="container" id="notifications-section"></div>
            <!-- End notifications Area -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10" id="menu-1">
                       
                    </div>
                    <div class="col-lg-1"></div>
                </div>
            </div>
        </section>
        <!-- End Main Content Area -->

        <!-- Footer -->
        <?php include("footer.php"); ?>
        <script>
            $(function(){
                function accountSummary() {
                    $.post("../php/index.php",
                            {
                                reqId: "loadAccountSummaryTutor"
                            },
                            function (data, status) {
                                $("#menu-1").html(data);
                            }
                    );
                }
                //load
                accountSummary();
            });
        </script>
        
    </body>
</html>