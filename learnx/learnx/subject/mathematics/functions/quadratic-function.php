<?php
include('../../../php/session.php');
//App name
$app_name = "Maths Lab";
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Functions | Maths Lab</title>
        <!-- Headers -->
        <?php include("../../../includes/header-chapter.php"); ?>
        <!-- End Headers -->

        <!-- Style -->
        <link rel="stylesheet" href="../dist/katex.min.css">
        <!-- End Style -->

        <!-- Script -->
        <script src="../../../js/jquery.min.js"></script>
        <script src="../js/algebra-0.2.6.min.js"></script>
        <script src="../js/twistedalgo01.js"></script>
        <script src="../dist/katex.min.js"></script>
        
        <script src="../js/canvasjs.min.js"></script>
        <script src="../js/math.min.js"></script>
        <script src="../js/d3.min.js"></script>
        <script src="../js/function-plot@1.14.0"></script>
        <!-- End Script -->
    </head>

    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

        <!--Navbar-->
        <?php include("../../../includes/navigation-solver.php"); ?>
        <!--Navbar end-->

        <div id="Selectors" class="container">

            <h2 class="text-center">Quadratic Function</h2>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <ul class="nav nav-tabs nav-justified" nav-justified>
                        <li class="active"><a href="#tab-1" data-toggle="tab">Draw Quadratic Function Graph</a></li>
                        <li><a href="#tab-2" data-toggle="tab">Find The Equation of Quadratic Function Graph Given the turning point and one point</a></li>
                    </ul>
                </div>
                <div class="col-sm-2"></div>
            </div>
            <div class="tab-content">
                <div class="tab-pane active fade in" id="tab-1">
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <form id="myForm">
                                <div class="form-group">
                                    <label for="TextBox-1-of-1">Value of a:</label>
                                    <input type="number" class="form-control" id="TextBox-1-of-1" required>
                                    <label for="TextBox-1-of-2">Value of b:</label>
                                    <input type="number" class="form-control" id="TextBox-2-of-1" required>
                                    <label for="TextBox-1-of-3">Value of c:</label>
                                    <input type="number" class="form-control" id="TextBox-3-of-1" required>
                                </div>
                                <br>
                                <div id="display-1">
                                    <div class="alert alert-info">
                                        <p class="text-center">solution will display here...</p>
                                    </div>
                                </div>
                                <center><button type="button" class="btn btn-primary" onclick="Algorithm_Quadratic_Function_Graph_Sketch()">Solve</button>| |<button onclick="Reset_Form_One()" type="button" class="btn btn-primary">Reset</button></center>
                            </form>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-2">
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8"><!--
                            <ul class="nav nav-tabs nav-justified">
                                <li class="active"><a href="#tab-1-of-2" data-toggle="tab">Given the x-intercept and one point</a></li>
                                <li><a href="#tab-2-of-2" data-toggle="tab">Given the turning point and one point</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active fade in" id="tab-1-of-2">
                                    <form id="myForm2">
                                        <p class="text-info"><b>x intercept values</b></p>
                                        <div class="form-inline">
                                            <label for="TextBox-1-of-2">First Value of x:</label>
                                            <input type="number" class="form-control" id="TextBox-1-of-2" required>
                                            <label for="TextBox-1-of-2">Second Value of x:</label>
                                            <input type="number" class="form-control" id="TextBox-2-of-2" required>
                                            <label for="TextBox-2-of-2">Value of y:</label>
                                            <input type="number" class="form-control" id="TextBox-3-of-2" required>
                                        </div>
                                        <p class="text-info"><b>Given point values</b></p>
                                        <div class="form-inline">
                                            <label for="TextBox-3-of-2">Value of x:</label>
                                            <input type="number" class="form-control" id="TextBox-4-of-2" required>
                                            <label for="TextBox-4-of-2">Value of y:</label>
                                            <input type="number" class="form-control" id="TextBox-5-of-2" required>
                                        </div>
                                        <br>
                                        <div id="display-2">
                                            <div class="alert alert-info">
                                                <p class="text-center">solution will display here...</p>
                                            </div>
                                        </div>
                                        <center><button type="button" class="btn btn-primary" onclick="Algorithm_Quadratic_Function_Find_Equation_First_Tab();">Solve</button>| |<button onclick="Reset_Form_Two()" type="button" class="btn btn-primary">Reset</button></center>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="tab-2-of-2">-->
                            <form id="myForm3">
                                <p class="text-info"><b>Turning point values</b></p>
                                <div class="form-group">
                                    <label for="TextBox-1-of-3">Value of x:</label>
                                    <input type="number" class="form-control" id="TextBox-1-of-3" required>
                                    <label for="TextBox-2-of-3">Value of y:</label>
                                    <input type="number" class="form-control" id="TextBox-2-of-3" required>
                                </div>
                                <p class="text-info"><b>Given point values</b></p>
                                <div class="form-group">
                                    <label for="TextBox-3-of-3">Value of x:</label>
                                    <input type="number" class="form-control" id="TextBox-3-of-3" required>
                                    <label for="TextBox-4-of-3">Value of y:</label>
                                    <input type="number" class="form-control" id="TextBox-4-of-3" required>
                                </div>
                                <br>
                                <div id="display-3">
                                    <div class="alert alert-info">
                                        <p class="text-center">solution will display here...</p>
                                    </div>
                                </div>
                                <center><button type="button" class="btn btn-primary" onclick="Algorithm_Quadratic_Function_Find_Equation_Second_Tab();">Solve</button>| |<button onclick="Reset_Form_Three()" type="button" class="btn btn-primary">Reset</button></center>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>


        <br>
        <!-- Footer -->
        <?php include("../../../includes/footer-chapter.php"); ?>
        <!-- End Footer -->


        <script>
            $(document).ready(function () {
                // Initialize Tooltip
                $('[data-toggle="tooltip"]').tooltip();

                // Add smooth scrolling to all links in navbar + footer link
                $(".navbar a, footer a[href='#myPage']").on('click', function (event) {

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
                        }, 900, function () {

                            // Add hash (#) to URL when done scrolling (default click behavior)
                            window.location.hash = hash;
                        });
                    } // End if
                });
            })
        </script>

    </body>

    <!-- Mirrored from www.w3schools.com/bootstrap/tryit.asp?filename=trybs_theme_band_complete&stacked=h by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 06 Apr 2017 01:06:45 GMT -->

</html>