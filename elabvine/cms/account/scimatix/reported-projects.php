<?php include("../php/session.php"); ?>
<?php include("php/dashboard.php"); ?>
<?php include("php/account.php"); ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Reported Projects</title>
        <meta name="description" content="Sufee Admin - HTML5 Admin Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="../img/fav.png">
        <link rel="shortcut icon" href="../img/fav.png">

        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/flag-icon.min.css">
        <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
        <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
        <link rel="stylesheet" href="assets/scss/style.css">
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

        <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>


        <script src="assets/js/lib/data-table/datatables.min.js"></script>
        <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
        <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
        <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
        <script src="assets/js/lib/data-table/jszip.min.js"></script>
        <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
        <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
        <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
        <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
        <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
        <script src="assets/js/lib/data-table/datatables-init.js"></script>


        <script type="text/javascript">
            /*$(document).ready(function () {
             $('#bootstrap-data-table-export').DataTable();
             });*/
            $(document).ready(function () {
                var dataTable = $('#bootstrap-data-table-export').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "ajax": {
                        url: "../php/get.php?a6=1", // json datasource
                        type: "post", // method  , by default get
                        error: function () {  // error handling
                            $(".employee-grid-error").html("");
                            $("#bootstrap-data-table-export").append('<tbody class="employee-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
                            $("#employee-grid_processing").css("display", "none");

                        }
                    },
                    "dom": 'Bfrtip',
                    "buttons": [
                        'pageLength', 'csv', 'pdf', 'print'
                    ],
                    lengthMenu: [
                        [5, 10, 25, 50],
                        ['5 rows', '10 rows', '25 rows', '50 rows']
                    ]
                });
            });
        </script>


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
                            <h1>Reported Projects</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li>Dashboard</li>
                                <li>Projects</li>
                                <li class="active">Reported Projects</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content mt-3">


                <div class="col-lg-12 col-md-12">

                    <div class="card">
                        <div class="card-body" >

                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Project Title</th>
                                        <th scope="col">Project Budget</th>
                                        <th scope="col">Project Due Date</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>

                        </div>
                    </div>

                </div>

            </div><!-- /#right-panel -->

        </div>


        <!-- Right Panel -->

        <?php include("modals.php"); ?>

        <script>
            function submitNotification(id) {
                var t = document.getElementById('title' + id).value;
                var c = document.getElementById('content' + id).value;

                if (t == "" || c == "") {

                    alertify.alert('Notify', "Please fill in all the fields.", function () {
                        alertify.error('Error!');
                    }).bringToFront();

                } else {

                    var xmlhttp = new XMLHttpRequest();
                    var fd = new FormData();
                    fd.append("a9", id);
                    fd.append("t", t);
                    fd.append("c", c);
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {

                            if (this.responseText == "success") {

                                alertify.alert('Notify', "User Notified", function () {
                                    alertify.success('Success!');
                                }).bringToFront();


                            } else {

                                alertify.alert('Notify', "An error occured please try again!", function () {
                                    alertify.error('Error!');
                                }).bringToFront();

                            }

                        }
                    };
                    xmlhttp.open("POST", "../php/post.php", true);
                    xmlhttp.send(fd);

                }
            }


            function resolveProject(id) {
                
                console.log(id);

                if (id == '') {

                    alertify.alert('Resolve', "Something went wrong...<br>Please wait...", function () {
                        alertify.error('Error!');
                    }).bringToFront();

                    setTimeout(function () {
                        window.location.href = "reported-projects.php"
                    }, 2500);

                } else {

                    var xmlhttp = new XMLHttpRequest();
                    var fd = new FormData();
                    fd.append("a10", id);
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {

                            if (this.responseText == "success") {

                                alertify.alert('Resolve', "Report resolved...", function () {
                                    alertify.success('Success!');
                                }).bringToFront();

                                setTimeout(function () {
                                    window.location.href = "reported-projects.php"
                                }, 2500);

                            } else {

                                alertify.alert('Resolve', "An error occured please try again!", function () {
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





    </body>
</html>
