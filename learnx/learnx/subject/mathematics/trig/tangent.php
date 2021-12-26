<?php
   include('../../session.php');
   include('../../counter.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="../img/favicon.png">
    <title>Maths Lab|Trig Functions</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../../../css/bootstrap.css" rel="stylesheet">
    <link href="../../../css/mystyle.css" rel="stylesheet">
     <link rel="stylesheet" href="../dist/katex.min.css">
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
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
                    <li><a href="index.php">Menu</a></li>
                    <li><a href="../../../logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron text-center">
        <h1>Digital Solution Platform</h1>
        <p>Place where you will never fail again.</p>
        <h2>Mathematics Is Easy With E-LabVine</h2>
    </div>

    <div id="Selectors" class="container">
        <h2 class="text-center">Tangen Function</h2>
        <h4 class="text-center">Draw Tangent Function Graph and Find Exceptional</h4>
        <div class="tab-content">
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <form id="myForm">
                            <div class="form-inline">
                                <label for="TextBox-1-of-1">Enter Tangent Functions Equation:</label>
                                <input type="text" class="form-control" id="TextBox-1-of-1" placeholder="in a form atanb (x + p) + q" required>
                            </div>
                            <br>
                            <div id="display-1">
                                <div class="alert alert-info">
                                    <p class="text-center">solution will display here...</p>
                                </div>
                            </div>
                            <center><button type="button" class="btn btn-primary" onclick="alert('We still working on general solution please try again later');">Solve</button>| |<button onclick="Reset_Form_One()" type="button" class="btn btn-primary">Reset</button></center>
                        </form>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="container text-center">
            <p>E-LabVine &copy; 2016-<?php echo date("Y");?> all rights reserved</p>
         </footer>
    <script src="../../../js/jquery.min.js"></script>
    <script src="../../../js/bootstrap.min.js"></script>
    <script src="../js/canvasjs.min.js"></script>
    <script src="../js/algebra-0.2.6.min.js"></script>
    <script src="../js/math.min.js"></script>
    <script src="../js/twistedalgo01.js"></script>
    <script src="../dist/katex.min.js"></script>
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