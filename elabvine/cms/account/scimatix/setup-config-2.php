<?php include("../php/session.php"); ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>elabvine - Setup</title>
        <meta name="description" content="Sufee Admin - HTML5 Admin Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="../img/fav.png">
        <link rel="shortcut icon" href="../img/fav.png">

        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/flag-icon.min.css">
        <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
        <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
        <link rel="stylesheet" href="assets/scss/style.css">

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>


        <script src="../js/alertify.min.js"></script>
        <script type="text/javascript">
            //override defaults
            alertify.defaults.transition = "slide";
            alertify.defaults.theme.ok = "btn btn-primary";
            alertify.defaults.theme.cancel = "btn btn-danger";
            alertify.defaults.theme.input = "form-control";
        </script>
        <link rel="stylesheet" href="../css/alertify.min.css">

        <script language="Javascript" type="text/javascript">

 

        function onlyAlphabets(e, t) {

            try {

                if (window.event) {

                    var charCode = window.event.keyCode;

                }

                else if (e) {

                    var charCode = e.which;

                }

                else { return true; }

                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))

                    return true;

                else

                    return false;

            }

            catch (err) {

                alert(err.Description);

            }

        }

 

    </script>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

    </head>
    <body class="bg-secondary">


        <div class="sufee-login d-flex align-content-center flex-wrap questions">
            <div class="container">
                <div class="login-content">
                    <div class="login-logo">
                        <a href="../index.php">
                            <img class="align-content" src="images/logo.png" alt="">
                        </a>
                    </div>
                    <div class="login-form">
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" class="form-control" placeholder="Company Name" id="companyname">
                        </div>
                        <div class="form-group">
                            <label>Site name</label>
                            <small><span id="typedText">ex. yoursite.elabvine.com</span></small>
                            <input type="text" class="form-control" placeholder="Site Name" id="companyuri" onkeypress="return onlyAlphabets(event,this);" onkeyup="typeText(this.value);">
                        </div>
                        <div class="form-group">
                            <label>Type of online business</label>
                            <select id="businesstype" class="form-control">
                                <option value="2">Freelancing</option>
                            </select>
                        </div>

                        <button type="submit" id="submitbtn" class="btn btn-success btn-flat m-b-30 m-t-30" onclick="submitAnswers()">Submit</button>

                    </div>
                </div>
            </div>
        </div>

        <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
        <script src="../template/js/vendor/jquery-2.2.4.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
        <script>
                            document.getElementById("submitbtn").style.display = "none";

                            function typeText(str) {

                                if (str == "" || str == "account" || str == "css" || str == "account"  || str == "demo"  || str == "fonts" || str == "cgi-bin" || str == "media" || str == "account" || str == "nbprojects" || str == "template" || str.length < 4) {

                                    document.getElementById("typedText").innerHTML = "yoursite.elabvine.com";
                                    document.getElementById("submitbtn").style.display = "none";


                                } else {
                                    
                                    document.getElementById("submitbtn").style.display = "block";
                                    document.getElementById("typedText").innerHTML = str + ".elabvine.com";
									
									str = str.toLowerCase();

                                    var fd = new FormData();
                                    fd.append("a2", 1);
                                    fd.append("val", str);

                                    var xmlhttp = new XMLHttpRequest();
                                    xmlhttp.onreadystatechange = function () {
                                        if (this.readyState == 4 && this.status == 200) {

                                            if (this.responseText == "available" && str != "account" && str != "demo" && str != "fonts" && str != "cgi-bin" &&  str != "media" && str != "nbprojects" && str != "template") {

                                                document.getElementById("typedText").innerHTML = str + ".elabvine.com <span class='badge badge-success'>Available</span>";
                                                document.getElementById("submitbtn").style.display = "block";

                                            } else {

                                                document.getElementById("typedText").innerHTML = str + ".elabvine.com <span class='badge badge-danger'>Taken</span>";
                                                document.getElementById("submitbtn").style.display = "none";

                                            }

                                        }
                                    };
                                    xmlhttp.open("POST", "../php/post.php", true);
                                    xmlhttp.send(fd);
                                }

                            }

                            function submitAnswers() {
                                var companyname = document.getElementById("companyname").value;
                                var companyuri = document.getElementById("companyuri").value;
								companyuri = companyuri.toLowerCase();
                                var businesstype = document.getElementById('businesstype');
                                businesstype = businesstype.options[businesstype.selectedIndex].text;

                                if (companyname == "" || companyuri == "" || businesstype == "") {
                                    alertify.alert('Set-Up Config', "Please fill in all the fields.", function () {
                                        alertify.error('Error!');
                                    }).bringToFront();
                                } else {

                                    alertify.alert('Alert', "Loading... Please wait..."
                                            ).bringToFront();

                                    document.getElementById("submitbtn").style.display = "none";
                                    
                                    $("#submitbtn").hide();

                                    var fd = new FormData();
                                    fd.append("a1", 1);
                                    fd.append("cn", companyname);
                                    fd.append("cu", companyuri);
                                    fd.append("bt", businesstype);

                                    var xmlhttp = new XMLHttpRequest();
                                    xmlhttp.onreadystatechange = function () {
                                        if (this.readyState == 4 && this.status == 200) {

                                            if (this.responseText == "success") {

                                                alertify.alert('Set-Up Config', "Please wait...", function () {
                                                    alertify.success('Success!');
                                                }).bringToFront();

                                                setTimeout(function () {
                                                    window.location.href = "index.php"
                                                }, 2500);

                                            } else {

                                                alertify.alert('Set-Up Config', "An error occured please try again.", function () {
                                                    alertify.error('Fatal Error!');
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
