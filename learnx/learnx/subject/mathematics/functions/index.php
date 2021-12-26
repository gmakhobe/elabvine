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
        <script src="../dist/katex.js"></script>
        <script src="../dist/katex.min.js"></script>
        <script src="../js/algebra-0.2.6.min.js"></script>
        <!-- End Script -->

    </head>

    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

        <!--Navbar-->
        <?php include("../../../includes/navigation-chapter.php"); ?>
        <!--Navbar end-->

        <div class="container">

            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <h3 class="text-center">Functions</h3>
                    <ul class="nav nav-tabs nav-justified">
                        <li class="active"><a data-toggle="tab" href="#tab-1">Linear Function</a></li>
                        <li><a data-toggle="tab" href="#tab-2">Quadratic Function</a></li>
                        <li><a data-toggle="tab" href="#tab-3">Hyperbolic Function</a></li>
                        <li><a data-toggle="tab" href="#tab-4">Exponential Function</a></li>
                        <li><a data-toggle="tab" href="#tab-5">Inverse Functions</a></li>
                        <li><a data-toggle="tab" href="#tab-6">logarithmic Functions</a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade in active">
                            <h3>Linear Function</h3>
                            <div class="well">
                                <p class="text-left">Linear functions have the form f(x) = ax + q where a represents the gradient of a straight-line graph and q represents the y-intercept when x = 0.
                                </p>
                                <img src="../img/functions/linear-graph.png" class="img-thumbnail" width="100%" height="200px">
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade">
                            <h3>Quadratic Function</h3>
                            <div class="well">
                                <p class="text-left">A quadratic function is a parabola and can be represented with a general formula y = ax<sup>2</sup> + bx + c or y = a(x + p)<sup>2</sup> + q
                                </p>
                                <img src="../img/functions/quadratic-graph.png" class="img-thumbnail" width="100%" height="200px">
                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane fade">
                            <h3>Hyperbolic Function</h3>
                            <div class="well">
                                <p class="text-left">Hyperbola of the form <span id="hyperbolicText1" class="katex"></span> 
                                </p>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <img src="../img/functions/hyperbolic-graph.png" class="img-thumbnail" width="100%" height="200px">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-4" class="tab-pane fade">
                            <h3>Exponential Function</h3>
                            <div class="well">
                                <p class="text-left">An exponential function can be represented with a general formula y = ab<sup>x+p</sup> + q.
                                </p>
                                <h4 class="text-center">a &sub; 0</h4>
                                <img src="../img/functions/exponencial-graph.png" class="img-thumbnail" width="100%" height="200px">
                            </div>
                        </div>
                        <div id="tab-5" class="tab-pane fade">
                            <h3>Inverse Functions</h3>
                            <div class="well">
                                <p class="text-left">The inverse of a function takes the y-values of the function to the corresponding x-values and vice versa therefore the x and y values are interchanged.
                                </p>
                                <p class="text-left text-info">
                                    Given y = 2x + 6 determining the inverse function<br>
                                </p>
                                <p class="text-right text-info"><span class="badge">Step 1</span><br><b>Swap the x and y</b><br>y = 2x + 6<br>&therefore; x = 2y + 6</p>
                                <p class="text-left text-info"><span class="badge">Step 2</span><br><b>Make y subject of the formula</b><br>x - 6 = 2y
                                    <br><span class="katex" id="InverseText1"></span>
                                    <br>&therefore; <span class="katex" id="InverseText2"></span>
                                </p>
                            </div>
                        </div>
                        <div id="tab-6" class="tab-pane fade">
                            <h3>Logarithmic Functions</h3>
                            <div class="well">
                                <p class="text-left">The logarithmic function is only defined if a > 0, a ≠ 1 and x > 0.
                                    <br><span class="text-info">Logarithmic functions are more of the same thing with Inverse Functions</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>

        <div class="container">
            <h3 class="text-center">Solver Section</h3>
            <p class="text-center">Choose below to solve.<br><span class="text-info">And remember to use solver have scenario data to be solved!</span></p>
            <h3 class="text-center">Functions</h3>
            <div class="row text-center">
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <p><b>Linear Function</b></p>
                        <p>f(x) = ax + q</p>
                        <a href="linear-function.php">
                            <button class="btn" data-toggle="modal" data-target="#myModal">Go</button>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <p><b>Quadratic Function</b></p>
                        <p>y = ax<sup>2</sup> + bx + c</p>
                        <a href="quadratic-function.php">
                            <button class="btn" data-toggle="modal" data-target="#myModal">Go</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-sm-4">

                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <p><b>Hyperbolic Function</b></p>
                        <p><span id="hyperbolicText2" class="katex"></span></p>
                        <a href="hyperbolic-function.php">
                            <button class="btn">Go</button>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4">

                </div>
            </div>
            <div class="row text-center">
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <p><b>Exponential Function</b></p>
                        <p>y = ab<sup>x+p</sup> + q</p>
                        <a href="exponential-function.php">
                            <button class="btn">Go</button>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <p><b>Inverse Functions</b></p>
                        <p>f&apos;(x)</p>
                        <a href="inverse-function.php">
                            <button class="btn">Go</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <!-- Footer -->
        <?php include("../../../includes/footer-chapter.php"); ?>
        <!-- End Footer -->

        <script>

            katex.render("y = \\frac{a}{x} + q", hyperbolicText1);
            katex.render("y = \\frac{a}{x} + q", hyperbolicText2);
            katex.render("\\frac{1}{2}x - \\frac{6}{2} = y", InverseText1);
            katex.render("y = \\frac{1}{2}x - 3", InverseText2);

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