<?php
include("../php/session.php");
include("includes/configs.php");
?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">
    <head>
        <!-- Site Title -->
        <title>Dashboard</title>
        <!-- Meta Description -->
        <meta name="description" content="<?php echo $companyuri; ?> Dashboard">      
        <!-- Header -->
        <?php include("headers.php"); ?>
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
                            Dashboard				
                        </h1>	
                        <p class="text-white link-nav"><a href="index.php"><?php echo $account_type; ?> Account </a> </p>
                    </div>	
                </div>
            </div>
        </section>
        <!-- End banner Area -->
        <div class="container" id="notifications-section"></div>
        <!-- Nav 2 Area -->
        <?php include($nav_2); ?>
        <!-- End Nav 2 Area -->
        <!-- Main Content Area -->
        <!-- End top-category-widget Area -->
        <?php include("$nav_3");?>
        <!-- End Main Content Area -->

        <!-- Footer -->
        <?php include("footer.php"); ?>

    </body>
</html>