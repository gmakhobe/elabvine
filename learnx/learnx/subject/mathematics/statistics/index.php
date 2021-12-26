<?php
   include('../../session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <head>
    <title>Maths Lab|Statistics</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="../../../external.html?link=https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="../../../external.html?link=https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/custom.css">
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
                <a class="navbar-brand" href="#myPage">Maths Lab</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../../../logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron text-center">
        <h1>Digital Solution Platform</h1>
        <p>Place where you will never fail again</p>
        <h2>Mathematics Is Easy With E-LabVine</h2>
        <h3>Logged as <?php echo $user_name." ".$user_surname; ?></h3>
        <h2>Statistics</h2>
    </div>

    <div id="Chapters">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <h4>Average Gradient</h4>
                    <div class="well well-sm">
                        <p class="text-left">The gradient of a straight line can be calculated using</p>
                        <p class="text-center">m = <sup>y<sup>2</sup> - y<sup>1</sup></sup> &frasl; <sub>x<sup>2</sup> - x<sup>1</sup></sub></p>
                    </div>
                    <h4>Average Rate of Change</h4>
                    <div class="well well-sm">
                        <p class="text-left">The average rate of change between two points on a graph is the average gradient of the line joining the two points.</p>
                        <p class="text-center">average speed = <sup>&Delta;Distance</sup> &frasl; <sub>&Delta;Distance</sub></p>
                    </div>
                    <h4>The derivative from first principles</h4>
                    <div class="well well-sm">
                        <p class="text-left">To differentiate from first principles you use the formula below</p>
                        <p class="text-center">f&apos;(x) = <sup>lim</sup><sub>h &lArr; 0</sub> <sup>f(0 + h) - f(x)</sup> &frasl; <sub>h</sub></p>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <h3 class="text-center">Solver Section</h3>
        <p class="text-center">Choose below to solve.<br><span class="text-info">And remember to use solver have scenario data to be solved!</span></p>
        <h3 class="text-center">Statistics</h3>
        <div class="row text-center">
            <div class="col-sm-6">
                <div class="thumbnail">
                    <p><b>Average Gradient</b></p>
                    <p>m = <sup>y<sup>2</sup> - y<sup>1</sup></sup> &frasl; <sub>x<sup>2</sup> - x<sup>1</sup></sub></p>
                    <a href="average-gradient.php">
                        <button class="btn" data-toggle="modal" data-target="#myModal">Go</button>
                    </a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="thumbnail">
                    <p><b>The derivative from first principles</b></p>
                    <p>f&apos;(x) = <sup>lim</sup><sub>h &lArr; 0</sub> <sup>f(0 + h) - f(x)</sup> &frasl; <sub>h</sub></p>
                    <a href="derivative.php">
                        <button class="btn" data-toggle="modal" data-target="#myModal">Go</button>
                    </a>
                </div>
            </div>
        </div>
        
    </div>

        <footer class="container-fluid text-center">
            <p>E-LabVine &copy; 2016-<?php echo date("Y");?> all rights reserved</p>
         </footer>

    <script>
        $(document).ready(function() {
            // Initialize Tooltip
            $('[data-toggle="tooltip"]').tooltip();

            // Add smooth scrolling to all links in navbar + footer link
            $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {

                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 900, function() {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        })
    </script>

</body>

</html>