<?php include("../../php/session.php"); ?>
<?php include("php/dashboard.php"); ?>
<?php include("php/account.php"); ?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>

        <title>Completed Lessons</title>
        <meta name="description" content="Completed Lessons - Members Area">
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
                            <h1>Business Settings</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li>Dashboard</li>
                                <li class="active">Staff Account</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content mt-3">


                <div class="col-lg-5 col-md-5">

                    <h3>Notice!</h3>
                    <p>This feature currently not active yet but you can view admin details such as admin name and company/organization/business details.</p>

                </div>

                <div class="col-lg-7 col-md-7">

                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Details</strong>
                        </div>
                        <div class="card-body">
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="aname" class="form-control-label">Name and Surname</label></div>
                                <div class="col-12 col-md-9"><input id="aname" placeholder="Name and Surname" class="form-control" type="text" value="<?php echo $our_adminname; ?>"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="cname" class="form-control-label">Company Name</label></div>
                                <div class="col-12 col-md-9"><input id="cname" placeholder="Company Name" class="form-control" type="text" value="<?php echo $our_companyname ?>"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="businesstype" class="form-control-label">Business Type</label></div>
                                <div class="col-12 col-md-9">
                                    <select id="businesstype" class="form-control disabled disable" disabled="">
                                        <option value="0"><?php echo $our_businesstype; ?></option>
                                        <option value="1">Tutoring</option>
                                        <option value="2">Freelancing</option>
                                    </select>
                                </div>
                                <button onclick="saveAdminAccount()" class="btn btn-success">Save</button>
                            </div>
                        </div>

                    </div>

                </div><!-- /#right-panel -->
            </div>
        </div>
        <!-- Right Panel -->

        <?php include("modals.php"); ?>

        <script>

            function saveAdminAccount() {
                var an = document.getElementById("aname").value;
                var cn = document.getElementById("cname").value;
                //var bt = document.getElementById("businesstype").value;

                if (an == "" || cn == "") {

                    alertify.alert('Notes', "Please fill in missing fields.", function () {
                        alertify.error('Error!');
                    }).bringToFront();

                } else {

                    var fd = new FormData();
                    fd.append("a5", 1);
                    fd.append("an", an);
                    fd.append("cn", cn);
                    //fd.append("bt", bt);

                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {

                            if (this.responseText == "success") {

                                alertify.alert('Staff Account', "Saved...", function () {
                                    alertify.success('Success!');
                                }).bringToFront();

                                setTimeout(function () {
                                    window.location.href = "staff-account.php"
                                }, 2500);

                            } else {

                                alertify.alert('Staff Account', "Something went wrong please try again.", function () {
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

        <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>



    </body>
</html>
