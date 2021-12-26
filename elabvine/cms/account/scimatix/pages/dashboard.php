<?php include("../../php/session.php"); ?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon-->
        <link rel="apple-touch-icon" href="../../img/fav.png">
        <link rel="shortcut icon" href="../../img/fav.png">
        <!-- Author Meta -->
        <!-- Meta Description -->
        <meta name="description" content="">
        <!-- Meta Keyword -->
        <meta name="keywords" content="">
        <!-- meta character set -->
        <meta charset="UTF-8">
        <!-- Site Title -->
        <title>Dashboard | Design</title>

        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="css/linearicons.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/nice-select.css">							
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">			
        <link rel="stylesheet" href="css/jquery-ui.css">			
        <link rel="stylesheet" href="css/main.css">

        <script src="js/alertify.min.js"></script>
        <script type="text/javascript">
            //override defaults
            alertify.defaults.transition = "slide";
            alertify.defaults.theme.ok = "btn btn-primary";
            alertify.defaults.theme.cancel = "btn btn-danger";
            alertify.defaults.theme.input = "form-control";
        </script>
        <link rel="stylesheet" href="css/alertify.css">
        <style>
            body{
                height: 100%;
            }
            .parent-box{
                display: flex;
                flex-direction: row;
                height: 100%;
            }
            .child-box{
                height: 516px;
                overflow-y: auto;
            }
        </style>
    </head>
    <body>	

        <div class="row parent-box">
            <div class="col-lg-3 col-md-3 accordion-left">
                <?php include("index-header-left.php"); ?>
            </div>
            <div class="col-lg-9 col-md-9">

                <?php include("pages/dashboard.php"); ?>

            </div>
        </div>

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
                            fd.append("colname", 'dashboard_image1');
                            fd.append("coldetail", content);
                            break;
                        case "2":
                            fd.append("colname", 'dashboard_image2');
                            fd.append("coldetail", content);
                            break;
                        case "3":
                            fd.append("colname", 'dashboard_image3');
                            fd.append("coldetail", content);
                            break;
                        case "4":
                            fd.append("colname", 'dashboard_image4');
                            fd.append("coldetail", content);
                            break;
                        case "5":
                            fd.append("colname", 'dashboard_image5');
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
                                    window.location.href = "dashboard.php";
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

            function load() {
                var y = document.getElementsByClassName("edit-text");

                for (i = 0; i < y.length; i++) {
                    y[i].contentEditable = true;
                }
            }
            load();

            function saveContent(strval, val) {

                var content = document.getElementById(val).innerHTML;
                var fd = new FormData();
                fd.append("a1", 1);
                switch (strval) {
                    case '1':
                        fd.append("colname", 'dashboard_text1');
                        fd.append("coldetail", content);
                        break;
                    case '2':
                        fd.append("colname", 'dashboard_text2');
                        fd.append("coldetail", content);
                        break;
                    default:
                        console.log("Default");
                }

                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {

                        if (this.responseText == "error") {
                            alertify.alert('Design', "An error occured and it can be fixed by reloading the current page.", function () {
                                alertify.error('Fatal Error!');
                            }).bringToFront();
                        }else if(this.responseText == "success"){
								alertify.success('Success');
						}

                    }
                };
                xmlhttp.open("POST", "../../php/customizations.php", true);
                xmlhttp.send(fd);

            }

        </script>

        <script src="js/vendor/jquery-2.2.4.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="js/vendor/bootstrap.min.js"></script>			
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
        <script src="js/easing.min.js"></script>			
        <script src="js/hoverIntent.js"></script>
        <script src="js/superfish.min.js"></script>	
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>	
        <script src="js/jquery.tabs.min.js"></script>						
        <script src="js/jquery.nice-select.min.js"></script>	
        <script src="js/owl.carousel.min.js"></script>									
        <script src="js/mail-script.js"></script>	
        <script src="js/main.js"></script>

    </body>
</html>