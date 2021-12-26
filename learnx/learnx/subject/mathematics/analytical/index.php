<?php
include('../../../php/session.php');
//App name
$app_name = "Maths Lab";
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <title>Analytical Geometry | Maths Lab</title>
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
                <div id="straight-lines" class="tab-pane active fade in">
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <h2 class="text-center">Analytical Geometry</h2>
                            <h3>Gradient of a line</h3>
                            <div class="well sm-well">
                                <div id="linear-graph" width="100%" height="200px"></div>
                                <h4 class="text-center">Solution to find gradient of the graph</h4>
                                <p class="text-left"><span class="badge">Step 1</span><br><b>Find any to point on the graph</b><br>A(-3; -3) and B(3; 3)</p>
                                <p class="text-right"><span class="badge">Step 2</span><br><b>Substitute from m = <sup>Y<sub>2</sub> - Y<sub>1</sub></sup> &frasl; <sub>X<sub>2</sub> - X<sub>1</sub></sub></b><br>m = <sup>3 - (-3)</sup> &frasl; <sub>3 - (-3)</sub></p>
                                <p class="text-left"><span class="badge">Step 3</span><br><b>Calculate</b><br>m = <sup>6</sup> &frasl; <sub>6</sub><br>m = 1</p>
                                <p class="text-left text-info">When lines are parallel to each other gradients are [AB<sub>m</sub> = CD<sub>m</sub>] equal</p>
                                <p class="text-right text-info">When lines are perpendicular to each other gradients are [AB<sub>m</sub> &times; CD<sub>m</sub> = -1] equals to -1 when multiplied</p>
                            </div>
                            <h3>Distance formula</h3>
                            <div class="well sm-well">
                                <p class="text-left">Distance formula is used to find length between two points on the graph.</p>
                                <p class="text-center">Length of AB = <b>&radic;</b><span style="border-top:solid black 1px;">(X<sub>2</sub> - X<sub>1</sub>)<sup>2</sup> &#43; (Y<sub>2</sub> - Y<sub>1</sub>)<sup>2</sup></span></p>    
                            </div>
                            <h3>Midpoint formula</h3>
                            <div class="well sm-well">
                                <div id="linear-graph-1" width="100%" height="200px"></div>
                                <p class="text-left">If you know the coordinates of the two endpoints of a line, you can find the point that is halfway between them using mid point formula.</p>
                                <p class="text-center">Midpoint of AB = (<sup>x<sub>1</sub> + x<sub>2</sub></sup> &frasl; <sub>2</sub> ; <sup>y<sub>1</sub> + y<sub>2</sub></sup> &frasl; <sub>2</sub>) </p>    
                            </div>
                            <h3>Equation of a straight line</h3>
                            <div class="well sm-well">
                                <p class="text-left">You can find the equation of a straight line using <span style="border-bottom:solid black 1px;">y = m x + c</span>, if you know the gradient m and the y-intercept c.</p>
                            </div>
                            <h3>Inclination line</h3>
                            <div class="well sm-well">
                                <p class="text-left">To find the inclination of a line, or the angle it makes with the x-axis, we use tan &Theta;.</p>
                                <p class="text-center">tan &Theta; = <sup>AB</sup> &frasl; <sub>CD</sub></p>
                            </div>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <h3 class="text-center">Solver Section</h3>
            <p class="text-center">Choose below to solve.<br><span class="text-info">And remember to use solver have scenario data to be solved!</span></p>
            <h3 class="text-center">Analytical Geometry</h3>
            <div class="row text-center">
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <p><b>Gradient</b></p>
                        <p>m = <sup>Y<sub>2</sub> - Y<sub>1</sub></sup> &frasl; <sub>X<sub>2</sub> - X<sub>1</sub></sub></p>
                        <a href="gradient.php">
                            <button class="btn" data-toggle="modal" data-target="#myModal">Go</button>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <p><b>Midpoint</b></p>
                        <p>Midpoint of AB = (<sup>x<sub>1</sub> + x<sub>2</sub></sup> &frasl; <sub>2</sub> ; <sup>y<sub>1</sub> + y<sub>2</sub></sup> &frasl; <sub>2</sub>)</p>
                        <a href="midpoint.php">
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
                        <p><b>Distance</b></p>
                        <p>Length of AB = <b>&radic;</b><span style="border-top:solid black 1px;">(X<sub>2</sub> - X<sub>1</sub>)<sup>2</sup> &#43; (Y<sub>2</sub> - Y<sub>1</sub>)<sup>2</sup></span></p>
                        <a href="distance.php">
                            <button class="btn" data-toggle="modal" data-target="#myModal">Go</button>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4">
                </div>
            </div>
            <div class="row text-center">
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <p><b>Straight line equation</b></p>
                        <p>y = m x + c</p>
                        <a href="straight-line-equation.php">
                            <button class="btn" data-toggle="modal" data-target="#myModal">Go</button>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <p><b>Inclination</b></p>
                        <p>tan &Theta; = <sup>AB</sup> &frasl; <sub>CD</sub></p>
                        <a href="inclination.php">
                            <button class="btn" data-toggle="modal" data-target="#myModal">Go</button>
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
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/plotly-latest.min.js"></script>
        <script>
            //LinearFunction graph
            var Linear_Function = document.getElementById('linear-graph');

            Plotly.plot(Linear_Function, [{
                    x: [-5, -3, -1, 0, 1, 3, 5],
                    y: [-5, -3, -1, 0, 1, 3, 5]
                }], {
                margin: {
                    t: 0
                }
            });

            var Linear_Function_1 = document.getElementById('linear-graph-1');

            Plotly.plot(Linear_Function_1, [{
                    x: [-5, 0, 5],
                    y: [-5, 0, 5]
                }], {
                margin: {
                    t: 0
                }
            });
        </script>
    </body>

</html>