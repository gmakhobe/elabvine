<?php
include('../../../php/session.php');
//App name
$app_name = "Maths Lab";
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <title>Algebra | Maths Lab</title>
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
                    <div class="tab-content">
                        <h2 class="text-centre">Algebra</h2>
                        <h3>Linear Equation</h3>
                        <div class="well">
                            <p class="text-left">Linear equation has only one solution this solution can be either positive or negative.
                                <br>For example:
                            </p>
                            <p class="text-center text-info">
                                <span class="katex" id="linearDisplay1"></span><br>
                                <span class="katex" id="linearDisplay2"></span><br>
                                <span class="katex" id="linearDisplay3"></span><br>
                                <span class="katex" id="linearDisplay4"></span><br>
                                <span class="katex" id="linearDisplay5"></span><br>     
                            </p>
                        </div>
                        <h3>Simultaneous Equation</h3>
                        <div class="well">
                            <p class="text-left">
                                Simultaneous equation is a set of two equations whose variable all take the same value at the same time.<br>
                                The equations can be solved:<br>
                                Algebraically and Graphically.

                            </p>
                        </div>
                        <h3>Quadratic Equation</h3>
                        <div class="well">
                            <p class="text-left">Quadratic equation has two solutions or x-values.<br>
                                Below is the example using the zero factor law:
                            </p>
                            <p class="text-center text-info">
                                <span class="katex" id="quadraticDisplay1"></span><br>
                                <span class="katex" id="quadraticDisplay2"></span><br>
                            </p>
                        </div>
                    </div>

                    <h3 class="text-center">Solver Section</h3>
                    <p class="text-center">Choose below to solve.<br><span class="text-info">And remember to use solver have scenario data to be solved!</span></p>
                    <h3 class="text-center">Algebra</h3>
                    <div class="row text-center">
                        <div class="col-sm-4">
                            <div class="thumbnail">
                                <p><b>Linear Equation</b></p>
                                <p>Solver</p>
                                <a href="linear.php">
                                    <button class="btn" data-toggle="modal" data-target="#myModal">Go</button>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="thumbnail">
                                <p><b>Simultaneous equation</b></p>
                                <p>Solver</p>
                                <a href="Simultaneous.php">
                                    <button class="btn" data-toggle="modal" data-target="#myModal">Go</button>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="thumbnail">
                                <p><b>Quadratic equation</b></p>
                                <p>Solver</p>
                                <a href="quadratic.php">
                                    <button class="btn" data-toggle="modal" data-target="#myModal">Go</button>
                                </a>
                            </div>
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

            var linear_display1 = "3x + 2 = 11";
            var linear_display2 = "3x = 11 - 2";
            var linear_display3 = "3x = 9";
            var linear_display4 = "x = 9/3";
            var linear_display5 = "x = 3";

            katex.render(linear_display1, linearDisplay1);
            katex.render(linear_display2, linearDisplay2);
            katex.render(linear_display3, linearDisplay3);
            katex.render(linear_display4, linearDisplay4);
            katex.render(linear_display5, linearDisplay5);

            var quadratic_display1 = "ab = 0";
            var quadratic_display2 = "a = 0 | b = 0";

            katex.render(quadratic_display1, quadraticDisplay1);
            katex.render(quadratic_display2, quadraticDisplay2);

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