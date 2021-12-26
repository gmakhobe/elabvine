<?php include("../../php/session.php"); ?>
<?php include("php/dashboard.php"); ?>
<?php include("php/account.php"); ?>
<?php
//Get lessons
$sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `scimatix_members_lessons` WHERE Lesson_Status = 'Finished';");
if (mysqli_num_rows($sql)) {
    $display = "";
    while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
        $tutorId = $row["Tutor_Id"];
        //Tutor Info
        $sql_get = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `scimatix_members_information` WHERE Id = '$tutorId';");
        $rows = mysqli_fetch_array($sql_get, MYSQLI_ASSOC);
        $name = $rows["Name"] . " " . $rows["Surname"];
        $contacts = "E: " . $rows["Email_Address"] . "<br>C: " . $rows["Phone"];
        //End Tutor Info

        $display .= "<tr><td>" . $row["Lesson_Id"] . "</td><td>" . $row["Lesson_Hours"] . "</td><td>" . $row["Date"] . "</td><td>" . $name . "</td><td>" . $contacts . "</td></tr>";
    }
} else {
    $display = "<td><strong>No Lesson Completed Yet</strong></td>";
}
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>

        <title>Finance</title>
        <meta name="description" content="Finance - Members Area">
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
                            a21: 1
                        },
                        function (data, status) {
                            $("#table-1").html(data);
                        });


            });
            $(document).ready(function () {
                $.post("../php/get.php",
                        {
                            a22: 1
                        },
                        function (data, status) {
                            $("#table-2").html(data);
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
                <div class="col-sm-12">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Invoices</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content mt-3">

                <div class="">

                    <h2>My Invoices</h2>

                    <div class="table-responsive">

                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Plan</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody id="invoices">

                            </tbody>
                        </table>
                    </div>


                </div> <!-- .content -->
            </div><!-- /#right-panel -->
        </div>
        <!-- Right Panel -->

        <!--Footer-->
        <?php include("footer.php"); ?>
        <!--End Footer-->


        <script>

            function load() {
                var fd = new FormData();
                fd.append("a14", 1);

                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {

                        document.getElementById('invoices').innerHTML = this.responseText;


                    }
                };
                xmlhttp.open("POST", "../php/get.php", true);
                xmlhttp.send(fd);

            }
            load();

            function invoiceView(id) {

                if (id != "") {
                    window.location.assign("invoice-view.php?id=" + id + "&title=invoices&co=elabvinecom");

                }

            }


        </script>

    </body>
</html>
