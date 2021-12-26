<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>elabvine - Sign Up</title>
        <meta name="description" content="Sufee Admin - HTML5 Admin Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-icon.png">
        <link rel="shortcut icon" href="../img/fav.png">

        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/flag-icon.min.css">
        <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
        <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
        <link rel="stylesheet" href="assets/scss/style.css">
        <script src="../js/alertify.min.js"></script>
        <script type="text/javascript">
            //override defaults
            alertify.defaults.transition = "slide";
            alertify.defaults.theme.ok = "btn btn-primary";
            alertify.defaults.theme.cancel = "btn btn-danger";
            alertify.defaults.theme.input = "form-control";
        </script>
        <link rel="stylesheet" href="../css/alertify.min.css">

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

    </head>
    <body class="bg-dark">


        <div class="sufee-login d-flex align-content-center flex-wrap">
            <div class="container">
                <div class="login-content">
                    <div class="login-logo">
                        <a href="../index.php">
                            <img class="align-content" src="images/logo.png" alt="">
                        </a>
                    </div>
                    <div class="login-form">
                        <div class="form-group">
                            <label>Name and Surname</label>
                            <input type="email" class="form-control" placeholder="Name and Surname" id="reg-namesurname">
                        </div>
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" placeholder="Email Address" id="reg-emailaddress">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password" id="reg-password">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" placeholder="Password" id="reg-confirmpassword">
                        </div>
                        <div>
                            <small>By click register you are agreeing to our terms and conditions</small><br>
                        </div>
                        <button type="submit" id="submit-btn" class="btn btn-primary btn-flat m-b-30 m-t-30" onclick="userRegistration()">Register</button>

                        <div class="register-link m-t-15 text-center">
                            <p>Already have account ? <a href="signin.php"> Sign in</a></p>
                        </div>
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

            function userRegistration() {
                var namesurname = document.getElementById("reg-namesurname").value;
                var emailaddress = document.getElementById("reg-emailaddress").value;
                var password = document.getElementById("reg-password").value;
                var confirmpassword = document.getElementById("reg-confirmpassword").value;


                if (namesurname == "" || emailaddress == "" || password == "" || confirmpassword == "") {

                    alertify.alert('Registration Error', "Please fill in all the fields.", function () {
                        alertify.error('Error!');
                    }).bringToFront();

                } else if (password != confirmpassword) {

                    alertify.alert('Registration Error', "Password you have entered does not match with the confirmed password.", function () {
                        alertify.error('Error!');
                    }).bringToFront();

                } else {

                    alertify.alert('Alert', "Loading... Please wait..."
                            ).bringToFront();

                    $("#submit-btn").hide();

                    var fd = new FormData();
                    fd.append("a2", 1);
                    fd.append("namsur", namesurname);
                    fd.append("ema", emailaddress);
                    fd.append("pas", password);

                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {

                            if (this.responseText == "success") {

                                alertify.alert('Registration Success', "Your login details have been sent to your email address<br>Please wait...", function () {
                                    alertify.success('Success!');
                                }).bringToFront();

                                setTimeout(function () {
                                    window.location.href = "index.php"
                                }, 2500);

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
