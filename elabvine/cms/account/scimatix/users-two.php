<?php include("../../php/session.php"); ?>
<?php include("php/dashboard.php"); ?>
<?php include("php/account.php"); ?>
<?php
if (isset($_REQUEST["reqId"])) {

    if ($_REQUEST["reqId"] == "notify") {
        $display = "includes/notify.php";
    } else if ($_REQUEST["reqId"] == "profile") {
        $display = "includes/student-profile.php";
    } else if ($_REQUEST["reqId"] == "profileTutor") {
        $display = "includes/tutor-application-profile.php";
    }
} else {
    $display = "includes/students.php";
}
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>

        <title>Students</title>
        <meta name="description" content="Students - Members Area">
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
                            a3: 1
                        },
                        function (data, status) {
                            $("#table").html(data);
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
                            <h1>Students</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li>Dashboard</li>
                                <li>Users</li>
                                <li class="active">Students</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" data-toggle="modal" data-target="#addUser">Add A User</button>
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
            //add hours
            function addWallet($id) {


                alertify.prompt("Add Money To A User Account. To subtract type a negative amount/value.", "",
                        function (evt, value) {

                            if (typeof value != 'number' && (value == 0 || value > 250 || value < -250 || value == "")) {
                                alertify.alert("Alert", "Enter amount in ZAR that is not equals to 0, greater than 250 and less than -250.");
                            } else {

                                alertify.confirm("Are you sure that you want to add ZAR " + value + " into student wallet.",
                                        function () {
                                            alertify.success('Ok');

                                            $.post("../php/post.php",
                                                    {
                                                        a26: 1,
                                                        id: $id,
                                                        wallet: value,
                                                    },
                                                    function (data, status) {
                                                        var $data = data.replace(/ /g, "");
                                                        if ($data == "success") {
                                                            alertify.alert("Alert", "Successfully Added Amount.");
                                                            setTimeout(function () {
                                                                window.location.href = "users-two.php?reqId=profile&userId=<?php echo $userId;?>"
                                                            }, 2500);
                                                        } else {
                                                            alertify.alert("Alert", "An error occure please retry!");
                                                        }
                                                    });
                                        },
                                        function () {
                                            alertify.error('Cancel');
                                        });


                            }


                        },
                        function () {
                            alertify.error('Cancel');
                        })
                        ;

            }
            //add hours
            function addHours($id) {


                alertify.prompt("Add Hours (Lessons) To A User. To subtract type a negative value.", "",
                        function (evt, value) {

                            if (typeof value != 'number' && (value == 0 || value > 12 || value < -12 || value == "")) {
                                alertify.alert("Alert", "Enter a number that is not equals to 0, greater than 12 and less than -12.");
                            } else {

                                alertify.confirm("Are you sure that you want to add " + value + " Hours to a student.",
                                        function () {
                                            alertify.success('Ok');

                                            $.post("../php/post.php",
                                                    {
                                                        a25: 1,
                                                        id: $id,
                                                        hours: value,
                                                    },
                                                    function (data, status) {
                                                        var $data = data.replace(/ /g, "");
                                                        if ($data == "success") {
                                                            alertify.alert("Alert", "Successfully Added Hours To A User.");
                                                            setTimeout(function () {
                                                                window.location.href = "users-two.php?reqId=profile&userId=<?php echo $userId;?>"
                                                            }, 2500);
                                                        } else {
                                                            alertify.alert("Alert", "An error occure please retry!");
                                                        }
                                                    });
                                        },
                                        function () {
                                            alertify.error('Cancel');
                                        });


                            }


                        },
                        function () {
                            alertify.error('Cancel');
                        })
                        ;

            }

            // Delete User
            function deleteUser($id) {

                alertify.confirm("Are you sure you want to delete this student.",
                        function () {
                            alertify.success('Ok');
                            //Post
                            $.post("../php/post.php",
                                    {
                                        a24: 1,
                                        id: $id
                                    },
                                    function (data, status) {
                                        var $data = data.replace(/ /g, "");
                                        if ($data == "success") {
                                            alertify.alert("Alert", "Student Account Successfully deleted.");
                                            setTimeout(function () {
                                                window.location.href = "users-two.php"
                                            }, 2500);
                                        } else {
                                            alertify.alert("Alert", "An error occure please retry!");
                                        }
                                    });
                        },
                        function () {
                            alertify.error('Cancel');
                        });

            }

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
                    fd.append("a8", id);
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


            function userRegistration() {
                var name = document.getElementById("reg-namesurname").value;
                var email = document.getElementById("reg-emailaddress").value;
                var password = document.getElementById("reg-password").value;
                var phone = document.getElementById("reg-phone").value;

                if (name == "" || email == "" || password == "" || phone == "") {

                    alertify.alert('Registration Error', "Please fill in all the fields.", function () {
                        alertify.error('Error!');
                    }).bringToFront();

                } else {

                    var fd = new FormData();
                    fd.append("a4", 1);
                    fd.append("name", name);
                    fd.append("email", email);
                    fd.append("password", password);
                    fd.append("phone", phone);

                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {

                            if (this.responseText == "success") {

                                alertify.alert('Registration Success', "Registration Success, Login details have been sent to the user.", function () {
                                    alertify.success('Success!');
                                }).bringToFront();

                                setTimeout(function () {
                                    window.location.href = "users-one.php"
                                }, 2500);

                                document.getElementById("reg-namesurname").value = "";
                                document.getElementById("reg-emailaddress").value = "";
                                document.getElementById("reg-password").value = "";
                                document.getElementById("reg-confirmpassword").value = "";

                            } else {

                                alertify.alert('Registration Error', "Account already exist.", function () {
                                    alertify.error('Error!');
                                }).bringToFront();

                            }

                        }
                    };
                    xmlhttp.open("POST", "../php/login-and-registration.php", true);
                    xmlhttp.send(fd);

                }


            }

        </script>





    </body>
</html>
