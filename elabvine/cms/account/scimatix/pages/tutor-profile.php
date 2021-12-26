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
        <title>Tutor Profile | Design</title>

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
        <script src="js/w3.js"></script>

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

                <?php include("pages/tutor-profile.php"); ?>

            </div>
        </div>

        <?php include("../modals.php"); ?>

        <script>
            function showList1() {
                var fd = new FormData();
                fd.append("a9", 1);

                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {

                        if (this.responseText != "error") {
                            document.getElementById("requirement").innerHTML = this.responseText;
                        }

                    }
                };
                xmlhttp.open("POST", "../../php/addoptions.php", true);
                xmlhttp.send(fd);

            }
            showList1();
            
            function addOptions(str, val) {

                var content = document.getElementById(val).value;
                var fd = new FormData();
                
                if (content != "") {
                    fd.append("a1", 1);
                }
                
                switch (str) {
                    case 'option1':
                        if (content != "") {
                            fd.append("colname", 'post_text5');
                            fd.append("coldetail", content);
                            document.getElementById(val).value = "";
                        } else {
                            alertify.alert('Alert', "Nothing added.", function () {
                                alertify.error('Fatal Error!');
                            }).bringToFront();
                        }
                        break;
                    case 'option2':
                        if (content != "") {
                            fd.append("colname", 'get_text8');
                            fd.append("coldetail", content);
                            document.getElementById(val).value = "";
                        } else {
                            alertify.alert('Alert', "Nothing added.", function () {
                                alertify.error('Fatal Error!');
                            }).bringToFront();
                        }
                        break;
                    case 'option3':
                        if (content != "") {
                            fd.append("colname", 'get_text14');
                            fd.append("coldetail", content);
                            document.getElementById(val).value = "";
                        } else {
                            alertify.alert('Alert', "Nothing added.", function () {
                                alertify.error('Fatal Error!');
                            }).bringToFront();
                        }
                        break;
                        break;
                    default:
                        console.log("Default");
                }
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {

                        showList1();

                    }
                };
                xmlhttp.open("POST", "../../php/addoptions.php", true);
                xmlhttp.send(fd);



            }
            
            function removeOptions(str, colname) {
                var fd = new FormData();
                fd.append("a3", 1);
                fd.append("coldetail", str);
                fd.append("colname", colname);

                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {

                        showList1();

                    }
                };
                xmlhttp.open("POST", "../../php/addoptions.php", true);
                xmlhttp.send(fd);
            }

            var questionSlide = w3.slideshow(".questions", 0);

            function load() {
                var y = document.getElementsByClassName("edit-text");

                for (i = 0; i < y.length; i++) {
                    y[i].contentEditable = true;
                }
            }
            load();

            function saveContent(str, val) {

                var content = document.getElementById(val).innerHTML;
                var fd = new FormData();
                fd.append("a1", 1);
                switch (val) {
                    case 'text1':
                        fd.append("colname", 'post_text1');
                        fd.append("coldetail", content);
                        break;
                    case 'text2':
                        fd.append("colname", 'post_text2');
                        fd.append("coldetail", content);
                        break;
                    case 'text3':
                        fd.append("colname", 'post_text3');
                        fd.append("coldetail", content);
                        break;
                    case 'text4':
                        fd.append("colname", 'post_text4');
                        fd.append("coldetail", content);
                        break;
                    case 'text5':
                        fd.append("colname", 'post_text5');
                        fd.append("coldetail", content);
                        break;
                    case 'text6':
                        fd.append("colname", 'post_text6');
                        fd.append("coldetail", content);
                        break;
                    case 'text7':
                        fd.append("colname", 'post_text7');
                        fd.append("coldetail", content);
                        break;
                    case 'text8':
                        fd.append("colname", 'post_text8');
                        fd.append("coldetail", content);
                        break;
                    case 'text9':
                        fd.append("colname", 'post_text9');
                        fd.append("coldetail", content);
                        break;
                    case 'text10':
                        fd.append("colname", 'post_text10');
                        fd.append("coldetail", content);
                        break;
                    case 'text11':
                        fd.append("colname", 'post_text11');
                        fd.append("coldetail", content);
                        break;
                    case 'text12':
                        fd.append("colname", 'post_text12');
                        fd.append("coldetail", content);
                        break;
                    case 'text13':
                        fd.append("colname", 'post_text13');
                        fd.append("coldetail", content);
                        break;
                    case 'text14':
                        fd.append("colname", 'post_text14');
                        fd.append("coldetail", content);
                        break;
                    case 'text15':
                        fd.append("colname", 'post_text15');
                        fd.append("coldetail", content);
                        break;
                    case 'text16':
                        fd.append("colname", 'post_text16');
                        fd.append("coldetail", content);
                        break;
                    case 'text17':
                        fd.append("colname", 'post_text17');
                        fd.append("coldetail", content);
                        break;
                    case 'text18':
                        fd.append("colname", 'post_text18');
                        fd.append("coldetail", content);
                        break;
                    case 'text19':
                        fd.append("colname", 'post_text19');
                        fd.append("coldetail", content);
                        break;
                    case 'text20':
                        fd.append("colname", 'post_text20');
                        fd.append("coldetail", content);
                        break;
                    case 'text21':
                        fd.append("colname", 'post_text21');
                        fd.append("coldetail", content);
                        break;
                    case 'text22':
                        fd.append("colname", 'post_text22');
                        fd.append("coldetail", content);
                        break;
                    case 'text23':
                        fd.append("colname", 'post_text23');
                        fd.append("coldetail", content);
                        break;
                    case 'text24':
                        fd.append("colname", 'post_text24');
                        fd.append("coldetail", content);
                        break;
                    case 'text25':
                        fd.append("colname", 'post_text25');
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