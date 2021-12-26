<?php
include("../php/session.php");
include("../includes/summary.php");
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Dashboard</title>

        <!-- Headers -->
        <?php include("../includes/header-user.php"); ?>
        <!-- End Headers -->

        <!-- Script -->
        <script src="../js/jquery.min.js"></script>
        <!-- End Script -->

    </head>

    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

        <!--Navbar-->
        <?php include("../includes/navigation-user.php"); ?>
        <!--Navbar end-->

        <!-- End Jumbtron -->
        <div class="jumbotron text-center" id="home">
            <h1><kbd>Admin Dashboard</kbd></h1>
        </div>
        <!-- End Jumbotron -->
        <!-- Content -->
        <!-- About Section -->
        <div class="container">
            <div class="alert alert-info text-center">
                Logged as <?php echo $name . " " . $surname; ?>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="well text-center">
                        <h4> Number Of Users</h4>
                        <p><i class="glyphicon glyphicon-user"></i> <?php echo $number_users; ?></p>
                    </div>

                </div>
                <div class="col-sm-4">
                    <div class="well text-center">
                        <h4>Number Of App Users</h4>
                        <p><i class="glyphicon glyphicon-hdd"></i> <?php echo $number_app_users; ?></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="well text-center">
                        <h4>Number Of Active Codes</h4>
                        <p><i class="glyphicon glyphicon-barcode"></i> <?php echo $number_active_codes; ?></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="well text-center">
                        <h4>Number Of Redeemed Codes</h4>
                        <p><i class="glyphicon glyphicon-ban-circle"></i> <?php echo $number_redeemed_codes; ?></p>
                    </div>
                </div>
                

            </div>
            <br>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8"></div>
                <div class="col-sm-2"></div>
            </div>
            <div class="list-group">
                <a href="#" class="list-group-item active"><b>Main Options</b></a>
                <a href="users.php" class="list-group-item">Users</a>
                <a href="unlock-codes.php" class="list-group-item">Unlock Codes</a>
            </div> 
        </div>
        <!-- End About Section -->
        <br>
        <!-- Footer -->
        <?php include("../includes/footer-user.php"); ?>
        <!-- End Footer -->

    </body>

</html>