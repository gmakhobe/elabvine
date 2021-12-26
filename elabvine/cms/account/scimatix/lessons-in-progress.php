<?php include("../../php/session.php"); ?>
<?php include("php/dashboard.php"); ?>
<?php include("php/account.php"); ?>
<?php
if (isset($_REQUEST["reqId"])) {

    if ($_REQUEST["reqId"] == "lessonDetails") {
        $display = "includes/lesson-in-progress-details.php";
    } else if ($_REQUEST["reqId"] == "lessonAcceptedDetails") {
        $display = "includes/lesson-in-progress-accepted-details.php";
    } else if ($_REQUEST["reqId"] == "profileTutor") {
        //Not sure if is working
        $display = "includes/tutor-application-profile.php";
    }
} else {
    $display = "includes/lessons-in-progress.php";
}
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>

        <title>Lessons In Progress</title>
        <meta name="description" content="Lessons In Progress - Members Area">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--Headers-->
        <?php include("headers.php"); ?>
        <!--End Headers-->
        <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>

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
                $.post("../php/get.php",
                        {
                            a18: 1
                        },
                        function (data, status) {
                            $("#table-unassigned").html(data);
                        });


            });
            $(document).ready(function () {
                $.post("../php/get.php",
                        {
                            a20: 1
                        },
                        function (data, status) {
                            $("#table-assigned").html(data);
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
                            <h1>Lessons In Progress</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li>Dashboard</li>
                                <li>Lessons</li>
                                <li class="active">In Progress</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content mt-3">

                <?php include("$display"); ?>

            </div><!-- /#right-panel -->

        </div>


        <!-- Right Panel -->

        <?php include("modals.php"); ?>

        <!--Footer-->
        <?php include("footer.php"); ?>
        <!--End Footer-->

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




        </script>





    </body>
</html>
