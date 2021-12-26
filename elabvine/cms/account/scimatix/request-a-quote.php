<?php include("../php/session.php"); ?>
<html lang="zxx" class="no-js">
    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Request A Quote</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="../img/fav.png">
        <link rel="shortcut icon" href="../img/fav.png">

        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="../template/css/linearicons.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
        <link rel="stylesheet" href="../template/css/bootstrap.css">
        <link rel="stylesheet" href="../template/css/magnific-popup.css">
        <link rel="stylesheet" href="../template/css/nice-select.css">							
        <link rel="stylesheet" href="../template/css/animate.min.css">
        <link rel="stylesheet" href="../template/css/owl.carousel.css">			
        <link rel="stylesheet" href="../template/css/jquery-ui.css">			
        <link rel="stylesheet" href="../template/css/main.css">
        <script src="../template/js/alertify.min.js"></script>
        <script type="text/javascript">
            //override defaults
            alertify.defaults.transition = "slide";
            alertify.defaults.theme.ok = "btn btn-primary";
            alertify.defaults.theme.cancel = "btn btn-danger";
            alertify.defaults.theme.input = "form-control";
        </script>
        <link rel="stylesheet" href="../template/css/alertify.css">

        <script src="../template/js/vendor/jquery-2.2.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="../template/js/vendor/bootstrap.min.js"></script>			
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
        <script src="../template/js/easing.min.js"></script>			
        <script src="../template/js/hoverIntent.js"></script>
        <script src="../template/js/superfish.min.js"></script>	
        <script src="../template/js/jquery.ajaxchimp.min.js"></script>
        <script src="../template/js/jquery.magnific-popup.min.js"></script>	
        <script src="../template/js/jquery.tabs.min.js"></script>						
        <script src="../template/js/jquery.nice-select.min.js"></script>	
        <script src="../template/js/owl.carousel.min.js"></script>									
        <script src="../template/js/mail-script.js"></script>	
        <script src="../template/js/w3.js"></script>

    </head>
    <body>

        <!-- Start post-content Area -->
        <section class="post-content-area single-post-area">
            <div class="container">

                <center>
                    <a href="subscription-plan.php"><button type="button" class="btn btn-dark"><i class="fa fa-chevron-left"></i> Back</button></a><br><br>
                </center>
                <div class="row">
                    <div class="col-lg-2">

                    </div>
                    <div class="col-lg-8 posts-list ">

                        <div class="single-post row">
                            <div class="col-lg-12 p-slide">
                                <div id="plans">

                                </div>
                                <input id="emailaddress-quote" type="email" class="form-control" placeholder="Email Address"/><br>
                                <button class="btn btn-info btn-block" onclick="send()">Submit</button>
                            </div>

                        </div>

                    </div>

                </div>
            </div>	
        </section>
        <script src="assets/js/md5.js"></script>
        <!-- End post-content Area -->
        <script  type="text/javascript">

            var myShow = w3.slideshow(".p-slide", 0);

            var plan = localStorage.getItem("quote");

            if (plan == "Start-Up") {

            } else if (plan == "Growing Business") {

                document.getElementById("plans").innerHTML = '<form><select id="package" class="form-control" onchange="selectPackage()">' +
                        '<option value="349">R349 every 30 days</option>' +
                        '<option value="3600">R3600 every year | Save R398</option>' +
                        '</select></form>';

            } else if (plan == "Premium") {

                document.getElementById("plans").innerHTML = '<form><select id="package" class="form-control" onchange="selectPackage()">' +
                        '<option value="999">R999 every 30 days</option>' +
                        '<option value="10899">R10899 every year | Save R1000</option>' +
                        '</select></form>';

            }

            function selectPackage() {

                var str = document.forms[0].package.value;
                var str2 = document.getElementById("package");
                str2 = str2.options[str2.selectedIndex].text;


            }
            selectPackage();

            function send() {

                var str = document.forms[0].package.value;
                var str2 = document.getElementById("package");
                str2 = str2.options[str2.selectedIndex].text;
                var emailaddress = document.getElementById("emailaddress-quote").value;

                var fd = new FormData();
                fd.append("a15", 1);
                fd.append("am", str);
                fd.append("pa", str2);
                fd.append("em", emailaddress);

                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {

                        if (this.responseText == "success") {

                            alertify.alert('Alert', "Please wait...", function () {
                                alertify.success('Success!');
                            }).bringToFront();

                            setTimeout(function () {
                                window.location.href = "index.php"
                            }, 2500);

                        } else {

                            alertify.alert('Alert', "An error occured please try again.", function () {
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