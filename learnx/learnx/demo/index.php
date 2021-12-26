<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>LearnX - Maths and Sciences Problem Solver</title>
        <meta name="description" content="Solve mathematics and physical sciences problems, problem solver with steps-by-step answers in real time teacher inyour pocket.">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="../img/favicon.png">
        <link rel="shortcut icon" href="../img/favicon.png">

        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/flag-icon.min.css">
        <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
        <link rel="stylesheet" href="assets/scss/style.css">
        <link rel="stylesheet" href="assets/katex/katex.min.css">
        <link rel="stylesheet" href="assets/css/remodal.css">
        <link rel="stylesheet" href="assets/css/remodal-default-theme.css">
        <link rel="stylesheet" href="assets/css/alertify.min.css">

        <style>
            .textbox {
                -moz-appearance: textfield;
                -webkit-appearance: textfield;
                background-color: white;
                background-color: -moz-field;
                border: 1px solid black;
                box-shadow: 1px 1px 1px 0 lightgray inset;  
                font: -moz-field;
                font: -webkit-small-control;
                margin-top: 5px;
                padding: 8px 12px;
                width: 100%;    
            }

        </style>


        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="assets/js/remodal.min.js"></script> 
        <script src="assets/js/alertify.min.js"></script> 
        <script type="text/javascript">
            //override defaults
            alertify.defaults.transition = "slide";
            alertify.defaults.theme.ok = "btn btn-primary";
            alertify.defaults.theme.cancel = "btn btn-danger";
            alertify.defaults.theme.input = "form-control";
        </script>
        <script src="assets/katex/katex.min.js"></script>
        <script src="assets/js/algebra-0.2.6.min.js"></script>
        <script src="assets/js/hide.js"></script>
        <script src="assets/js/calculate-12.js"></script>
        <script src="assets/js/demo.js"></script>

        <!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

    </head>
    <body>


        
        <!-- Left Panel -->

        <!-- Right Panel -->

        <div id="right-panel" class="right-panel">

            <!-- Header-->
            <?php include("header.php"); ?>
            <!-- /header -->
            <!-- Breadcrumb-->
            <div class="breadcrumbs">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1 id="subjects-and-chapters-subtitle-demo">Subject</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="../unlock-code.php"><i class="fa fa-key"></i> Unlock App</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Breadcrumb-->
            <div class="content mt-3">

                <div id="layoutBoard">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <div class="login-logo">
                            <a href="./">
                                <img class="align-content" style="height: 70px;" src="../img/logo.png" alt="">
                            </a>
                        </div>
                        <div class="card border shadow bg-white" id="mainProblemInput">
                            <div class="card-body">
                                <label>How can i help you?</label>
                                <?php include 'account/resources/snippets-physics.php'; ?>
                                <?php include 'account/resources/snippets-maths.php'; ?>

                                <button class="btn btn-outline-dark btn-block calculateButton">Solve</button>
                                <center>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <button class="btn btn-link" data-remodal-target="demoChapters"><span class="fa fa-ellipsis-v"></span>
                                                Choose Topic
                                            </button>
                                        </div>
                                        <div class="col-sm-4">
                                            <button id="callFullKeyboard" class="btn btn-link"><i class="fa fa-keyboard-o"></i></button><br>
                                        </div>
                                        <div class="col-sm-4">
                                            <a href="../unlock-code.php"> 
                                                <button class="btn">
                                                    <span class="fa fa-key"></span> Unlock App</button>
                                            </a>
                                            
                                        </div>
                                    </div>
                                    
                                </center>
                                 
                            </div>
                        </div>
                        <?php include("account/resources/keyboard.php"); ?>
                    </div>
                    <div class="col-sm-3"></div>
                </div>  

            </div> <!-- .content -->
        </div><!-- /#right-panel -->

        <!-- Right Panel -->
        <?php include("account/resources/res.php"); ?>
        
    </body>
</html>
