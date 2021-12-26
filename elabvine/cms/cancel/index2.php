<?php include("../php/session.php"); ?>
<?php include("../account/php/dashboard.php"); ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cancel</title>
        <meta name="description" content="Sufee Admin - HTML5 Admin Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="../img/fav.png">
        <link rel="shortcut icon" href="../img/fav.png">

        <link rel="stylesheet" href="../account/assets/css/normalize.css">
        <link rel="stylesheet" href="../account/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../account/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="../account/assets/css/themify-icons.css">
        <link rel="stylesheet" href="../account/assets/css/flag-icon.min.css">
        <link rel="stylesheet" href="../account/assets/css/cs-skin-elastic.css">
        <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
        <link rel="stylesheet" href="../account/assets/scss/style.css">
        <link href="../account/assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
        <script src="../js/alertify.min.js"></script>
        <script type="text/javascript">
            //override defaults
            alertify.defaults.transition = "slide";
            alertify.defaults.theme.ok = "btn btn-primary";
            alertify.defaults.theme.cancel = "btn btn-danger";
            alertify.defaults.theme.input = "form-control";
        </script>
        <link rel="stylesheet" href="../css/alertify.min.css">

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

    </head>
    <body>

        <!-- Left Panel -->

        <aside id="left-panel" class="left-panel">
            <nav class="navbar navbar-expand-sm navbar-default">

                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="../account/"><img src="../account/images/logo.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="../account/"><img src="../img/fav.png" alt="Logo"></a>
                </div>

                <div id="main-menu" class="main-menu collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="../account/"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                        </li>
                        <h3 class="menu-title">Tools</h3><!-- /.menu-title -->
                        <li>
                            <a href="../account/subscription-plan.php"><i class="menu-icon fa fa-calendar-check-o"></i> Plan</a>
                        </li>
                        <li>
                            <a href="../account/notes.php"><i class="menu-icon fa fa-sticky-note"></i> Notes</a>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="menu-icon fa fa-users"></i> Users</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-table"></i><a href="../account/users-one.php">Tutors</a></li>
                                <li><i class="fa fa-table"></i><a href="../account/users-two.php">Students</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="menu-icon fa fa-briefcase"></i> Projects</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-table"></i><a href="../account/active-projects.php">Active Projects</a></li>
                                <li><i class="fa fa-table"></i><a href="../account/completed-projects.php">Completed Projects</a></li>
                                <li><i class="fa fa-table"></i><a href="../account/reported-projects.php">Reported Projects</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="../account/finance.php"><i class="menu-icon fa fa-money"></i> Finance</a>
                        </li>
                        <li>
                            <a href="../invoices.php"><i class="menu-icon fa fa-money"></i> Invoices</a>
                        </li>
                        <h3 class="menu-title">Your Platform</h3><!-- /.menu-title -->
                        <li class="menu-item-has-children">
                            <a href="../account/pages/index.php" class="dropdown-toggle"> <i class="menu-icon fa fa-puzzle-piece"></i> Design</a>
                        </li>
                        <h3 class="menu-title">Utilities</h3><!-- /.menu-title -->
                        <li>
                            <a href="../account/account.php"><i class="menu-icon fa fa-address-card"></i> Account</a>
                        </li>
                        <li>
                            <a href="../account/business-settings.php"><i class="menu-icon fa fa-cogs"></i> Business Settings</a>
                        </li>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </aside><!-- /#left-panel -->

        <!-- Left Panel -->


        <!-- Right Panel -->

        <div id="right-panel" class="right-panel">


            <header id="header" class="header">

                <div class="header-menu">

                    <div class="col-sm-7">
                        <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                        <div class="header-left">
                            <button class="search-trigger btn"><?php echo $our_companyname; ?></button>

                        </div>
                    </div>

                    <div class="col-sm-5">
                        <div class="user-area dropdown float-right">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="user-avatar rounded-circle" src="<?php echo "$our_display"; ?>" alt="User Avatar">
                            </a>

                            <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="../account/account.php"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="../account/business-settings.php"><i class="fa fa -cog"></i>Bisiness Settings</a>

                                <a class="nav-link" href="../account/signout.php"><i class="fa fa-power -off"></i>Logout</a>
                            </div>
                        </div>

                        <div class="language-select dropdown" id="language-select">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="language" aria-haspopup="true" aria-expanded="true">
                                <i class="fa fa-language"></i> Eng
                            </a>

                        </div>

                    </div>
                </div>

            </header>
            <!-- Header-->

            <div class="breadcrumbs">
                <div class="col-sm-12">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Cancel</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content mt-3">

                <div class="">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header text-center bg-danger">
                                <strong class="card-title pl-2">Payment Canceled</strong>
                            </div>
                            <div class="card-body">
                                <div class="mx-auto d-block">
                                    <h2 class="text-sm-center mt-2 mb-1">Your payment has been canceled.</h2>
                                    <div class="location text-sm-center">Page will be redirected after 10 seconds.</div>
                                    <div class="location text-sm-center">For enquiries contact our customer support team.</div>
                                    <div class="location text-sm-center"></div>
                                </div>
                                <hr>
                                <div class="card-text text-sm-center">
                                    <a href="#">Thanks for using our platform.</a><br>

                                </div>
                            </div>
                        </div>
                    </div>


                </div> <!-- .content -->
            </div><!-- /#right-panel -->
        </div>
        <!-- Right Panel -->

        <script src="../account/assets/js/vendor/jquery-2.1.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
        <script src="../account/assets/js/plugins.js"></script>
        <script src="../account/assets/js/main.js"></script>


        <script>

            setTimeout(function () {
                window.location.href = "../account/"
            }, 10000);

        </script>

    </body>
</html>
