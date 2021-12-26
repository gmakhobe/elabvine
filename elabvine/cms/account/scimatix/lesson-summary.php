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

        <title>Lesson Summary</title>
        <meta name="description" content="Lesson Summary - Members Area">
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
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Lesson Summary</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li>Dashboard</li>
                                <li class="active">Lesson Summary</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content mt-3">

                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title mb-3">Lesson Summary</strong>
                        </div>
                        <div class="card-body">
                            <table class="table table-dark table-hover">
                                <thead>
                                    <tr>
                                        <th>Lesson Id</th>
                                        <th>Lesson Length</th>
                                        <th>Lesson Date</th>
                                        <th>Tutor Name</th>
                                        <th>Tutor Contacts</th>
                                    </tr>
                                </thead>
                                <tbody>
<?php echo $display; ?>
                                </tbody>
                            </table>
                        </div></div>
                </div> 

            </div><!-- /#right-panel -->

        </div>


        <!-- Right Panel -->

<?php include("modals.php"); ?>

        <!--Footer-->
        <?php include("footer.php"); ?>
        <!--End Footer-->

        <script>
            function submitBankDetails() {

                var bankname = document.getElementById('bankname');
                bankname = bankname.options[bankname.selectedIndex].text;
                var branchname = document.getElementById('branchname').value;
                var branchcode = document.getElementById('branchcode').value;
                var accountholder = document.getElementById('accountholder').value;
                var accountnumber = document.getElementById('accountnumber').value;

                if (bankname == "" || branchcode == "" || bankname == "" || accountholder == "" || accountnumber == "") {

                    alertify.alert('Finance', "Please make sure all the fileds are filled.", function () {
                        alertify.error('Fatal Error!');
                    }).bringToFront();

                } else {

                    var xmlhttp = new XMLHttpRequest();
                    var fd = new FormData();
                    fd.append("a11", 1);
                    fd.append("bankname", bankname);
                    fd.append("branchname", branchname);
                    fd.append("branchcode", branchcode);
                    fd.append("accountholder", accountholder);
                    fd.append("accountnumber", accountnumber);

                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {

                            if (this.responseText == "success") {

                                alertify.alert('Finance', "Success...", function () {
                                    alertify.success('Success!');
                                }).bringToFront();

                                setTimeout(function () {
                                    window.location.href = "finance.php"
                                }, 2500);

                            } else {

                                alertify.alert('Finance', "An error occured please try again!", function () {
                                    alertify.error('Error!');
                                }).bringToFront();

                            }

                        }
                    };
                    xmlhttp.open("POST", "../php/post.php", true);
                    xmlhttp.send(fd);

                }



            }

            function showBalance() {

                var xmlhttp = new XMLHttpRequest();
                var fd = new FormData();
                fd.append("a8", 1);

                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {

                        data = JSON.parse(this.responseText);
                        document.getElementById("totalbalance").innerHTML = data.totalbalance;
                        document.getElementById("balance").innerHTML = data.balance;


                    }
                };
                xmlhttp.open("POST", "../php/get.php", true);
                xmlhttp.send(fd);

            }
            showBalance()

            function submitPayout() {

                var xmlhttp = new XMLHttpRequest();
                var fd = new FormData();
                fd.append("a13", 1);

                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {

                        if (this.responseText == "success") {

                            alertify.alert('Finance', "Success...", function () {
                                alertify.success('Success!');
                            }).bringToFront();

                            setTimeout(function () {
                                window.location.href = "finance.php"
                            }, 2500);

                        } else {

                            alertify.alert('Finance', "An error occured please try again!", function () {
                                alertify.error('Error!');
                            }).bringToFront();

                        }

                    }
                };
                xmlhttp.open("POST", "../php/post.php", true);
                xmlhttp.send(fd);

            }


        </script>





    </body>
</html>
