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

            <h2 class="text-center">Linear Function</h2>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <ul class="nav nav-tabs nav-justified">
                        <li class="active"><a href="#tab-1" data-toggle="tab">Draw Linear Function Graph</a></li>
                        <li><a href="#tab-2" data-toggle="tab">Find The Equation of Linear Function Graph</a></li>
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
                                    <label for="TextBox-1-of-1">Enter Linear Functions Equation:</label>
                                    <input type="text" class="form-control" id="TextBox-1-of-1" placeholder="in a form ax + q" required>
                                </div>
                                <br>
                                <div id="display-1">
                                    <div class="alert alert-info">
                                        <p class="text-center">solution will display here...</p>
                                    </div>
                                </div>
                                <center><button type="button" class="btn btn-primary" onclick="Algorithm_Linear_Function_Graph_Sketch();">Solve</button>| |<button onclick="Reset_Form_One()" type="button" class="btn btn-primary">Reset</button></center>
                            </form>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-2">
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <form id="myForm2">
                                <p class="text-info"><b>y and x intercept values</b></p>
                                <div class="form-group">
                                    <label for="TextBox-1-of-2">Value of x:</label>
                                    <input type="number" class="form-control" id="TextBox-1-of-2" required>
                                    <label for="TextBox-2-of-2">Value of y:</label>
                                    <input type="number" class="form-control" id="TextBox-2-of-2" required>
                                </div>
                                <p class="text-info"><b>Given x and y values</b></p>
                                <div class="form-group">
                                    <label for="TextBox-3-of-2">Value of x:</label>
                                    <input type="number" class="form-control" id="TextBox-3-of-2" required>
                                    <label for="TextBox-4-of-2">Value of y:</label>
                                    <input type="number" class="form-control" id="TextBox-4-of-2" required>
                                </div>
                                <div id="display-2">
                                    <div class="alert alert-info">
                                        <p class="text-center">solution will display here...</p>
                                    </div>
                                </div>
                                <center><button type="button" class="btn btn-primary" onclick="Algorithm_Linear_Function_Find_Equation()">Solve</button>| |<button onclick="Reset_Form_Two()" type="button" class="btn btn-primary">Reset</button></center>
                            </form>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                </div>
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

</html>