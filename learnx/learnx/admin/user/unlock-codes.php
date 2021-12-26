<?php
include("../php/session.php");
include("../includes/unlock-codes.php");
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Unlock Codes - Dashboard</title>

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
            <h1><kbd>Unlock Codes</kbd></h1>
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
                        <h4> All Codes</h4>
                        <p><i class="glyphicon glyphicon-barcode"></i> <?php echo $number_all_codes; ?></p>
                    </div>

                </div>
                <div class="col-sm-4">
                    <div class="well text-center">
                        <h4> Redeemed Codes</h4>
                        <p><i class="glyphicon glyphicon-ban-circle"></i> <?php echo $number_redeemed_codes; ?></p>
                    </div>

                </div>
                <div class="col-sm-4">
                    <div class="well text-center">
                        <h4> Active Codes</h4>
                        <p><i class="glyphicon glyphicon-certificate"></i> <?php echo $number_active_codes; ?></p>
                    </div>
                </div>
            </div>

            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home1">Redeemed Codes</a></li>
                <li><a data-toggle="tab" href="#menu2">Active Codes</a></li>
            </ul>

            <div class="tab-content">
                <div id="home1" class="tab-pane fade in active">
                    <h3>Redeemed Codes</h3>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Code</th>
                                    <th>Redeemed Date</th>
                                    <th>Name & Surname</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                </tr>
                            </thead>
                            <tbody id="rowsRedeemedCodes">

                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <h3>Active Codes</h3>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Code</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody id="rowsActiveCodes">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- End About Section -->
        <br>
        <!-- Footer -->
        <?php include("../includes/footer-user.php"); ?>
        <script src="../js/unlock-codes-section.js"></script>
        <!-- End Footer -->
        
    </body>

</html>