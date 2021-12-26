<?php
include("../php/session.php");
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Tasker - Tasks - Dashboard</title>

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
            <h1><kbd>Tasker - Tasks</kbd></h1>
        </div>
        <!-- End Jumbotron -->
        <!-- Content -->
        <!-- About Section -->
        <div class="container">
            <div class="alert alert-info text-center">
                Logged as <?php echo $name . " " . $surname; ?>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="well text-center">
                        <h4> Active Tasks</h4>
                        <p><i class="glyphicon glyphicon-bookmark"></i> <?php echo $number_users; ?></p>
                    </div>

                </div>
                <div class="col-sm-6">
                    <div class="well text-center">
                        <h4> Completed Tasks</h4>
                        <p><i class="glyphicon glyphicon-check"></i> <?php echo $number_app_users; ?></p>
                    </div>
                </div>
            </div>

            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">New Task</a></li>
                <li><a data-toggle="tab" href="#menu1">Active Tasks</a></li>
                <li><a data-toggle="tab" href="#menu2">Completed Tasks</a></li>
            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <h3>HOME</h3>
                    <p>Some content.</p>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <h3>Menu 1</h3>
                    <p>Some content in menu 1.</p>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <h3>Menu 2</h3>
                    <p>Some content in menu 1.</p>
                </div>
            </div>

        </div>
        <!-- End About Section -->
        <br>
        <!-- Footer -->
        <?php include("../includes/footer-user.php"); ?>
        <!-- End Footer -->

    </body>

</html>