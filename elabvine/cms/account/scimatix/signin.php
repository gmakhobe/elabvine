<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>elabvine - Sign In</title>
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
                                <label>Email address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="emailaddress">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Password" id="passcode">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <label><input name="remember" type="radio"> Remember me</label>
                                    <label class="d-none"><input name="remember" type="radio" checked>Do not remember me</label>
                                </label>
                                <label class="pull-right">
                                    <a href="forgot-password.php">Forgotten Password?</a>
                                </label>

                            </div>
                            <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" onclick="userLogin()">Sign in</button>
                            <div class="register-link m-t-15 text-center">
                                <p>Don't have account ? <a href="signup.php"> Sign Up Here</a></p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script>
            
            function userLogin() {
                var emailaddress = document.getElementById("emailaddress").value;
                var passcode = document.getElementById("passcode").value;
                var remember = document.querySelector('input[name=remember]:checked').value;

                if (remember == "") {
                    remember = "";
                }


                if (emailaddress == "" || passcode == "") {
                    alertify.alert('Login Error', "Please fill in all the fields.", function () {
                        alertify.error('Error!');
                    }).bringToFront();
                } else {

                    var fd = new FormData();
                    fd.append("a1", 1);
                    fd.append("ema", emailaddress);
                    fd.append("pas", passcode);
                    fd.append("rem", remember);

                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {

                            if (this.responseText == "success") {

                                alertify.alert('Login Success', "Please wait...", function () {
                                    alertify.success('Success!');
                                }).bringToFront();

                                setTimeout(function () {
                                    window.location.href = "index.php"
                                }, 2500);

                            } else {

                                alertify.alert('Login Error', "Your Email Address or Password was incorrect please try again.", function () {
                                    alertify.error('Fatal Error!');
                                }).bringToFront();

                            }

                        }
                    };
                    xmlhttp.open("POST", "../php/login-and-registration.php", true);
                    xmlhttp.send(fd);

                }
            }
            
        </script>


        <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>


    </body>
</html>
