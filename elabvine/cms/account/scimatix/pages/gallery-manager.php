<?php include("../../php/session.php"); ?>
<?php include("../php/customization-gallery-manager.php"); ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Gallery Manager</title>
        <meta name="description" content="Sufee Admin - HTML5 Admin Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="../../img/fav.png">
        <link rel="shortcut icon" href="../../img/fav.png">

        <link rel="stylesheet" href="../assets/css/normalize.css">
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/css/themify-icons.css">
        <link rel="stylesheet" href="../assets/css/flag-icon.min.css">
        <link rel="stylesheet" href="../assets/css/cs-skin-elastic.css">
        <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
        <link rel="stylesheet" href="../assets/scss/style.css">
        <link href="../assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
        <script src="../../js/alertify.min.js"></script>
        <script type="text/javascript">
            //override defaults
            alertify.defaults.transition = "slide";
            alertify.defaults.theme.ok = "btn btn-primary";
            alertify.defaults.theme.cancel = "btn btn-danger";
            alertify.defaults.theme.input = "form-control";
        </script>
        <link rel="stylesheet" href="../../css/alertify.min.css">

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

    </head>
    <body>

        <?php include("non-design-header.php"); ?>

        <!-- Right Panel -->

        <div id="right-panel" class="right-panel">

            <div class="breadcrumbs">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Gallery Manager</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li>Design</li>
                                <li class="active">Gallery Manager</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content mt-3">

                <div class="">

                    <div class="col-lg-12 col-md-12" id="headerpages">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Header</strong>
                            </div>
                            <div class="card-body">

                                <table class="table table-bordered table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Bitmap/Images</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Info</th>
                                            <th scope="col">Dimensions</th>
                                            <th scope="col">Options</th>
                                        </tr>
                                    </thead>
                                    <tbody id="header-page-table">

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12" id="footerpages">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Footer</strong>
                            </div>
                            <div class="card-body">

                                <table class="table table-bordered table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Bitmap/Images</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Info</th>
                                            <th scope="col">Dimensions</th>
                                            <th scope="col">Options</th>
                                        </tr>
                                    </thead>
                                    <tbody id="footer-page-table">

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                    <div class="col-lg-12 col-md-12" id="landingpages">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Landing Pages</strong>
                            </div>
                            <div class="card-body">

                                <table class="table table-bordered table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Bitmap/Images</th>
                                            <th scope="col">Page Title</th>
                                            <th scope="col">Info</th>
                                            <th scope="col">Dimensions</th>
                                            <th scope="col">Options</th>
                                        </tr>
                                    </thead>
                                    <tbody id="landing-page-table">

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12" id="dashboardpages">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Dashboard Pages</strong>
                            </div>
                            <div class="card-body">

                                <table class="table table-bordered table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Bitmap/Images</th>
                                            <th scope="col">Page Title</th>
                                            <th scope="col">Info</th>
                                            <th scope="col">Dimensions</th>
                                            <th scope="col">Options</th>
                                        </tr>
                                    </thead>
                                    <tbody id="dashboard-page-table">

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                </div> <!-- .content -->
            </div><!-- /#right-panel -->
        </div>
        <!-- Right Panel -->

        <?php include("../modals.php"); ?>

        <script>

            function imageUpload(image) {
                imagenumber = sessionStorage.getItem("image");
                console.log(imagenumber);
            }

            function uploadImage() {

                var image = document.getElementById('upload-image');


                if (image == "" || image == "undefined") {

                    alertify.alert('Upload Profile', "No file was selected.", function () {
                        alertify.error('Error!');
                    }).bringToFront();

                } else {

                    alertify.alert('Alert', "Please wait.");

                    var val = sessionStorage.getItem("image");

                    content = image.files[0];

                    var fd = new FormData();
                    fd.append("a1", 1);
                    switch (val) {
                        case "1":
                            fd.append("colname", 'index_banner1');
                            fd.append("coldetail", content);
                            break;
                        case "2":
                            fd.append("colname", 'index_banner2');
                            fd.append("coldetail", content);
                            break;
                        case "3":

                            var content = document.getElementById("upload-color").value;
                            fd.append("colname", 'index_banner3');
                            fd.append("coldetail", content);
                            break;
                        case "4":
                            fd.append("colname", 'sign_banner1');
                            fd.append("coldetail", content);
                            break;
                        case "5":
                            fd.append("colname", 'sign_banner2');
                            fd.append("coldetail", content);
                            break;
                        case "6":

                            var content = document.getElementById("upload-color").value;
                            fd.append("colname", 'sign_banner3');
                            fd.append("coldetail", content);
                            break;
                        case "7":
                            fd.append("colname", 'dashboard_banner1');
                            fd.append("coldetail", content);
                            break;
                        case "8":

                            var content = document.getElementById("upload-color").value;
                            fd.append("colname", 'dashboard_banner2');
                            fd.append("coldetail", content);
                            break;
                        case "9":
                            fd.append("colname", 'favicon');
                            fd.append("coldetail", content);
                            break;
                        case "10":
                            fd.append("colname", 'header_icon');
                            fd.append("coldetail", content);
                            break;
                        case "11":

                            var content = document.getElementById("upload-color").value;
                            fd.append("colname", 'footer_bg');
                            fd.append("coldetail", content);
                            break;
                        case "12":

                            var content = document.getElementById("upload-color").value;
                            fd.append("colname", 'footer_color1');
                            fd.append("coldetail", content);
                            break;
                        case "13":

                            var content = document.getElementById("upload-color").value;
                            fd.append("colname", 'footer_color2');
                            fd.append("coldetail", content);
                            break;
                        case "14":

                            var content = document.getElementById("upload-color").value;
                            fd.append("colname", 'header_bg');
                            fd.append("coldetail", content);
                            break;
                        case "15":

                            var content = document.getElementById("upload-color").value;
                            fd.append("colname", 'header_color');
                            fd.append("coldetail", content);
                            break;
                        case "16":

                            fd.append("colname", 'dashboard_banner3');
                            fd.append("coldetail", content);
                            break;
                        default:
                            console.log("Default");
                            
                    }

                    var xmlhttp = new XMLHttpRequest();

                    xmlhttp.onreadystatechange = function () {

                        if (this.readyState == 4 && this.status == 200) {

                            if (this.responseText == "Fatal error") {

                                alertify.alert('Alert', "An error occured please try again.", function () {
                                    alertify.error('Error!');
                                }).bringToFront();

                            } else if (this.responseText == "No Img") {

                                alertify.alert('Alert', "Sorry, only JPG, JPEG, PNG & GIF files are allowed.", function () {
                                    alertify.error('Error!');
                                }).bringToFront();

                            } else if (this.responseText == "success") {

                                alertify.alert('Alert', "Successful request.", function () {
                                    alertify.success('Success!');
                                }).bringToFront();

                                setTimeout(function () {
                                    window.location.href = "gallery-manager.php";
                                }, 2500);

                            } else if (this.responseText == "error") {

                                alertify.alert('Alert', "An error occured please try again.", function () {
                                    alertify.error('Error!');
                                }).bringToFront();

                            }

                        }
                    };
                    xmlhttp.open("POST", "../../php/customizations.php", true);
                    xmlhttp.send(fd);

                }

            }

            function LandingPages() {
                var fd = new FormData();
                fd.append("a9", 1);

                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {

                        if (this.responseText != "error") {
                            document.getElementById("landing-page-table").innerHTML = this.responseText;
                        }

                    }
                };
                xmlhttp.open("POST", "../../php/get.php", true);
                xmlhttp.send(fd);

            }
            LandingPages();
            function DashboardPages() {
                var fd = new FormData();
                fd.append("a10", 1);

                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {

                        if (this.responseText != "error") {
                            document.getElementById("dashboard-page-table").innerHTML = this.responseText;
                        }

                    }
                };
                xmlhttp.open("POST", "../../php/get.php", true);
                xmlhttp.send(fd);

            }
            DashboardPages();
            function HeaderPages() {
                var fd = new FormData();
                fd.append("a11", 1);

                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {

                        if (this.responseText != "error") {
                            document.getElementById("header-page-table").innerHTML = this.responseText;
                        }

                    }
                };
                xmlhttp.open("POST", "../../php/get.php", true);
                xmlhttp.send(fd);

            }
            HeaderPages();
            function FooterPages() {
                var fd = new FormData();
                fd.append("a12", 1);

                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {

                        if (this.responseText != "error") {
                            document.getElementById("footer-page-table").innerHTML = this.responseText;
                        }

                    }
                };
                xmlhttp.open("POST", "../../php/get.php", true);
                xmlhttp.send(fd);

            }
            FooterPages();


        </script>

        <script src="../assets/js/vendor/jquery-2.1.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
        <script src="../assets/js/plugins.js"></script>
        <script src="../assets/js/main.js"></script>

    </body>
</html>
