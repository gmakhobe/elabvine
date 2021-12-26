<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Solver - LearnX</title>
        <meta name="description" content="High School Mathematics and Physical Sciences Problem Solver!">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="../img/favicon.png">
        <link rel="shortcut icon" href="../img/favicon.png">
        <link rel="stylesheet" href="assets/katex/katex.css">
        <link rel="stylesheet" href="assets/css/reveal.css">
        <link rel="stylesheet" href="assets/css/theme/white.css">
        <link rel="stylesheet" href="assets/css/alertify.min.css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
        
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/alertify.min.js"></script> 
        <script type="text/javascript">
            //override defaults
            alertify.defaults.transition = "slide";
            alertify.defaults.theme.ok = "btn btn-primary";
            alertify.defaults.theme.cancel = "btn btn-danger";
            alertify.defaults.theme.input = "form-control";
        </script>
        <script src="assets/katex/katex.js"></script>
        
    </head>
    <body>
        <div class="reveal">
            <div class="slides">
                <section><br>Hi, see step-by-step solution.</section>
                <section id="display"></section>
                <section>LearnX <br> elabvine company</section>
            </div>
        </div>
        <script src="assets/js/reveal.js"></script>
        <script>
            Reveal.initialize();
        </script>
        <script>
            $(function () {
                var $display = localStorage.getItem("answer");
                $("#display").html($display);
            });
        </script>
    </body>
</html>
