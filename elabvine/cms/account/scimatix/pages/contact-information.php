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
        <title>Contact Information | Design</title>

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
        <script>
            function contacts() {
                var fd = new FormData();
                fd.append("a13", 1);

                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {

                        if (this.responseText != "error") {
                            document.getElementById("t-body").innerHTML = this.responseText;

                            var y = document.getElementsByClassName("edit-text");

                            for (i = 0; i < y.length; i++) {
                                y[i].contentEditable = true;
                            }
                        }

                    }
                };
                xmlhttp.open("POST", "../../php/get.php", true);
                xmlhttp.send(fd);

            }
            contacts();
        </script>
    </head>
    <body>	

        <div class="row parent-box">
            <div class="col-lg-3 col-md-3 accordion-left">
                <?php include("index-header-left.php"); ?>
            </div>
            <div class="col-lg-9 col-md-9">

                <?php include("pages/contact-information.php"); ?>

            </div>
        </div>

        <?php include("../modals.php"); ?>

        <script>



            function load() {
                var y = document.getElementsByClassName("edit-text");

                for (i = 0; i < y.length; i++) {
                    y[i].contentEditable = true;
                }
            }
            load();

            function saveContent(str, val) {

                var content = document.getElementById(val).innerHTML;
                
                if(content == "[empty]"){
                    content = "";
                }else if(content == ""){
                    content = "";
                }
                
                content = content.replace("<br>", "");
                
                var fd = new FormData();
                fd.append("a1", 1);
                switch (val) {
                    case 'text1':
                        fd.append("colname", 'facebook');
                        fd.append("coldetail", content);
                        break;
                    case 'text2':
                        fd.append("colname", 'twitter');
                        fd.append("coldetail", content);
                        break;
                    case 'text3':
                        fd.append("colname", 'tell');
                        fd.append("coldetail", content);
                        break;
                    case 'text4':
                        fd.append("colname", 'email');
                        fd.append("coldetail", content);
                        break;
                    
                    default:
                        alertify.alert('Design', "An error occured and it can be fixed by reloading the current page.", function () {
                                alertify.error('Fatal Error!');
                            }).bringToFront();
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