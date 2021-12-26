<?php include("../../php/session.php"); ?>
<?php include("php/dashboard.php"); ?>
<?php include("php/account.php"); ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>

        <title>Admin Dashboard</title>
        <meta name="description" content="Admin Dashboard - Members Area">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--Headers-->
        <?php include("headers.php"); ?>
        <!--End Headers-->

    </head>
    <body>

        <?php include("header-left.php"); ?>

        <!-- Right Panel -->

        <div id="right-panel" class="right-panel">

            <?php include("header-top.php"); ?>

            <div class="breadcrumbs">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Dashboard</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li class="active"><a href="https://www.scimatix.co.za" target="_blank">scimatix.co.za</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content mt-3">

                <div class="">

                    <div class="col-lg-12 col-md-12 d-none d-lg-block">
                        <div class="card ">
                            <div class="card-header">
                                <strong class="card-title">Welcome to elabvine Dashboard!</strong>
                            </div>
                            <div class="card-body">

                                <div class="col-lg-3 col-md-6">
                                    <h4 class="font-weight-bold">Subscription Plan</h4><br>
                                    <a href="subscription-plan.php"><button type="button" class="btn btn-warning"><?php echo $account_type; ?> Plan</button></a><br>
                                    <a href="subscription-plan.php">Ends <?php echo standardDate($expiratiion_date); ?></a>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <h4 class="font-weight-bold">Get Started</h4><br>
                                    <a href="#" onclick="alertify.alert('Alert', 'Design is current disabled');" class="btn btn-primary ">Customize your site</a>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <h4 class="font-weight-bold">Next Steps</h4><br>
                                    <p>
                                        <a href="account.php">Account</a><br>
                                        <a href="notes.php">Notes</a><br>
                                    </p>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <h4 class="font-weight-bold">More Steps</h4><br>
                                    <p>
                                        <a href="http://scimatix.co.za" target="_blank">Your Platform</a><br>
                                    </p>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="col-lg-12 col-md-12 d-none d-sm-block">

                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="stat-widget-four">
                                        <div class="stat-icon dib">
                                            <i class="ti-server text-muted"></i>
                                        </div>
                                        <div class="stat-content">
                                            <div class="text-left dib">
                                                <div class="stat-heading">Database</div>
                                                <div class="stat-text">Total: <?php echo $users_total_users; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="stat-widget-four">
                                        <div class="stat-icon dib">
                                            <i class="ti-user text-muted"></i>
                                        </div>
                                        <div class="stat-content">
                                            <div class="text-left dib">
                                                <div class="stat-heading">Users</div>
                                                <div class="stat-text">Total: <?php echo $users_total_students; ?>/<?php echo $users_total_tutors; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="stat-widget-four">
                                        <div class="stat-icon dib">
                                            <i class="ti-stats-up text-muted"></i>
                                        </div>
                                        <div class="stat-content">
                                            <div class="text-left dib">
                                                <div class="stat-heading">Wallet Balance</div>
                                                <div class="stat-text">Total: ZAR <?php echo $users_total_wallet; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="stat-widget-four">
                                        <div class="stat-icon dib">
                                            <i class="ti-bag text-muted"></i>
                                        </div>
                                        <div class="stat-content">
                                            <div class="text-left dib">
                                                <div class="stat-heading">Active Projects</div>
                                                <div class="stat-text">Total: <?php echo $users_total_lessons; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--<div class="card">
                            <div class="card-body">
                                <img class="img-fluid dashboard-slide" style="width:100%;" src="images/dashboard-slide.png"/>
                                <img class="img-fluid dashboard-slide" style="width:100%;" src="images/dashboard-slide2.png"/>
                                <script>
            w3.slideshow(".dashboard-slide", 5000);
                                </script>
                            </div>
                        </div>-->
                    </div>

                    <div class="col-lg-12 d-none d-sm-block">
                        <div class="card">
                            <div class="card-body"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px none; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe>
                                <h4 class="mb-3">Analytics</h4>
                                <canvas id="singelBarChart" height="236" style="display: block; width: 473px; height: 236px;" width="473"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 d-sm-none">
                        <section class="card">
                            <div class="card-header user-header alt bg-dark">
                                <div class="media">
                                    <a href="#">
                                        <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="images/profile.png">
                                    </a>
                                    <div class="media-body">
                                        <h2 class="text-light display-6"><?php echo $name; ?></h2>
                                        <p><?php echo $company_name; ?></p>
                                    </div>
                                </div>
                            </div>


                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <a href="users-one.php"> <i class="ti-server text-muted"></i> Total # Users: <span class="badge badge-primary pull-right"><?php echo $users_total_users; ?></span></a>
                                </li>
                                <li class="list-group-item">
                                    <a href="users-two.php"> <i class="ti-user text-muted"></i> Students/Tutors <span class="badge badge-danger pull-right"><?php echo $users_total_students; ?>/<?php echo $users_total_tutors; ?></span></a>
                                </li>
                                <li class="list-group-item">
                                    <a href="finance.php"> <i class="ti-stats-up text-muted"></i> Wallet Balance <span class="badge badge-success pull-right">ZAR <?php echo $users_total_wallet; ?></span></a>
                                </li>
                                <li class="list-group-item">
                                    <a href="active-projects.php"> <i class="ti-bag text-muted"></i> Lessons <span class="badge badge-warning pull-right r-activity"><?php echo $users_total_lessons; ?></span></a>
                                </li>
                            </ul>

                        </section>


                        <div class="card" onclick="window.location.assign('subscription-plan.php');">
                            <div class="p-0 clearfix">
                                <i class="fa fa-calendar-check-o bg-primary p-4 font-2xl mr-3 float-left text-light"></i>
                                <div class="h5 text-primary mb-0 pt-3"><?php echo $account_type; ?> Plan</div>
                                <div class="text-muted text-uppercase font-weight-bold font-xs small">Ends <?php echo standardDate($expiratiion_date); ?></div>
                            </div>
                        </div>


                        <div class="card" onclick="window.location.assign('https://www.scimatix.co.za');">
                            <div class="p-0 clearfix">
                                <i class="fa fa-link bg-primary p-4 font-2xl mr-3 float-left text-light"></i>
                                <div class="h5 text-primary mb-0 pt-3">Preview</div>
                                <div class="text-muted text-uppercase font-weight-bold font-xs small">View Your Website</div>
                            </div>
                        </div>

                        <div class="card" onclick="window.location.assign('pages/index.php');">
                            <div class="p-0 clearfix">
                                <i class="fa fa-puzzle-piece bg-primary p-4 font-2xl mr-3 float-left text-light"></i>
                                <div class="h5 text-primary mb-0 pt-3">Customize</div>
                                <div class="text-muted text-uppercase font-weight-bold font-xs small">WYSIWYG Web Builder</div>
                            </div>
                        </div>

                    </div>

                </div> <!-- .content -->
            </div><!-- /#right-panel -->
        </div>
        <!-- Right Panel -->

        <!--Footer-->
        <?php include("footer.php"); ?>
        <!--End Footer-->
        <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>

        <script>

                            function submitNote() {
                                var nt = document.getElementById("note-title").value;
                                var nc = document.getElementById("note-content").value;

                                if (nt == "" || nc == "") {

                                    alertify.alert('Notes', "Please fill in missing fields.", function () {
                                        alertify.error('Error!');
                                    }).bringToFront();

                                } else {

                                    var fd = new FormData();
                                    fd.append("a3", 1);
                                    fd.append("nt", nt);
                                    fd.append("nc", nc);

                                    var xmlhttp = new XMLHttpRequest();
                                    xmlhttp.onreadystatechange = function () {
                                        if (this.readyState == 4 && this.status == 200) {

                                            if (this.responseText == "success") {

                                                document.getElementById('note-title').value = '';
                                                document.getElementById('note-content').value = '';

                                                alertify.alert('Notes', "Noted...<br>Visit notes to view full list.", function () {
                                                    alertify.success('Success!');
                                                }).bringToFront();

                                            } else {

                                                alertify.alert('Notes', "Something went wrong please try again.", function () {
                                                    alertify.error('Error!');
                                                }).bringToFront();

                                            }

                                        }
                                    };
                                    xmlhttp.open("POST", "../php/post.php", true);
                                    xmlhttp.send(fd);

                                }
                            }

        </script>
        <script>
            $(function () {

                // single bar chart
                var ctx = document.getElementById("singelBarChart");
                ctx.height = 150;
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ["Database (Total Users)", "Students #", "Tutors #", "Wallet Balance (ZAR)", "Lessons #"],
                        datasets: [
                            {
                                label: "Current Dataset",
                                data: [<?php echo $users_total_users; ?>, <?php echo $users_total_students; ?>, <?php echo $users_total_tutors; ?>, <?php echo $users_total_wallet; ?>, <?php echo $users_total_lessons; ?>],
                                borderColor: "rgba(0, 123, 255, 0.9)",
                                borderWidth: "0",
                                backgroundColor: "rgba(0, 123, 255, 0.5)"
                            }
                        ]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                        }
                    }
                });


            });
        </script>

    </body>
</html>
