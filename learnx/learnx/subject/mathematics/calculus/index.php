<?php
include('../../../php/session.php');
//App name
$app_name = "Maths Lab";
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <title>Calculus | Maths Lab</title>
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

        <div id="Chapters">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <h2 class="text-center">Average Gradient</h2>
                        <h4>Average Gradient</h4>
                        <div class="well well-sm">
                            <p class="text-left">The gradient of a straight line can be calculated using</p>
                            <p class="text-center">m = <sup>y<sup>2</sup> - y<sup>1</sup></sup> &frasl; <sub>x<sup>2</sup> - x<sup>1</sup></sub></p>
                        </div>
                        <h4>Average Rate of Change</h4>
                        <div class="well well-sm">
                            <p class="text-left">The average rate of change between two points on a graph is the average gradient of the line joining the two points.</p>
                            <p class="text-center">average speed = <sup>&Delta;Distance</sup> &frasl; <sub>&Delta;Time</sub></p>
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

        <div class="container">
            <h3 class="text-center">Solver Section</h3>
            <p class="text-center">Choose below to solve.<br><span class="text-info">And remember to use solver have scenario data to be solved!</span></p>
            <h3 class="text-center">Calculus</h3>
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
                    <!--
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <p><b>Drawing the graph of a cubic polynomial</b></p>
                            <p>f&apos;(x) = <sup>lim</sup><sub>h &lArr; 0</sub> <sup>f(0 + h) - f(x)</sup> &frasl; <sub>h</sub></p>
                            <a href="derivative.php">
                                <button class="btn" data-toggle="modal" data-target="#myModal">Go</button>
                            </a>
                        </div>
                    </div>
                    -->
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