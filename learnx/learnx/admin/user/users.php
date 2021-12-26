<?php
include("../php/session.php");
include("../includes/all-users.php");
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Users - Dashboard</title>

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
            <h1><kbd>All Users</kbd></h1>
        </div>
        <!-- End Jumbotron -->
        <!-- Content -->
        <!-- About Section -->
        <div class="container">
            <div class="alert alert-info text-center">
                Logged as <?php echo $name . " " . $surname; ?>
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <div class="well text-center">
                        <h4> All Users Users</h4>
                        <p><i class="glyphicon glyphicon-user"></i> <?php echo $number_users; ?></p>
                    </div>

                </div>
                <div class="col-sm-3">
                    <div class="well text-center">
                        <h4>Unpaid Users</h4>
                        <p><i class="glyphicon glyphicon-eye-close"></i> <?php echo $number_unpaid_users; ?></p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="well text-center">
                        <h4>Paid Users</h4>
                        <p><i class="glyphicon glyphicon-eye-open"></i> <?php echo $number_paid_users; ?></p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="well text-center">
                        <h4>App Users</h4>
                        <p><i class="glyphicon glyphicon-hdd"></i> <?php echo $number_app_users; ?></p>
                    </div>
                </div>
            </div>

            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#menu1">All Users</a></li>
                <li><a data-toggle="tab" href="#menu2">Unpaid Users</a></li>
                <li><a data-toggle="tab" href="#menu3">Paid Users</a></li>
                <li><a data-toggle="tab" href="#menu4">App Users</a></li>
                <li><a data-toggle="tab" href="#menu5">Search Users</a></li>
            </ul>

            <div class="tab-content">
                <div id="menu1" class="tab-pane fade in active">
                    <h3>All Users</h3>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Reg Date</th>
                                    <th>Name & Surname</th>
                                    <th>School</th>
                                    <th>Grade</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody id="rowsAllUsers">

                            </tbody>
                        </table>
                    </div> 
                </div>
                <div id="menu2" class="tab-pane fade">
                    <h3>Unpaid Users</h3>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Reg Date</th>
                                    <th>Name & Surname</th>
                                    <th>School</th>
                                    <th>Grade</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody id="rowsUnpaidUsers">

                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="menu3" class="tab-pane fade">
                    <h3>Paid Users</h3>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Reg Date</th>
                                    <th>Name & Surname</th>
                                    <th>School</th>
                                    <th>Grade</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody id="rowsPaidUsers">

                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="menu4" class="tab-pane fade">
                    <h3>App Users</h3>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Reg Date</th>
                                    <th>Name & Surname</th>
                                    <th>School</th>
                                    <th>Grade</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Device Id</th>
                                    <th>Logged Date</th>
                                </tr>
                            </thead>
                            <tbody id="rowsAppUsers">

                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="menu5" class="tab-pane fade">
                    <h3>Search Users</h3>
                    <div class="input-group">
                        <input id="search-user-input" type="text" class="form-control" placeholder="Search">
                        <div class="input-group-btn">
                            <button id="search-user" class="btn btn-default">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </div>
                    </div>
                    <br>
                    <div id="search-results">
                        <div class="alert alert-info text-center">
                            Type user email address or phone number
                        </div> 
                    </div>
                </div>
            </div>

        </div>
        <!-- End About Section -->
        <br>
        <!-- Footer -->
        <?php include("../includes/footer-user.php"); ?>
        <script src="../js/user-section.js"></script>
        <!-- End Footer -->

    </body>

</html>