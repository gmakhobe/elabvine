<?php
include('../../../php/session.php');
//App name
$app_name = "Maths Lab";
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <title>Sequences and Series | Maths Lab</title>
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
                    <h2 class="text-center">Sequences and Series</h2>
                    <ul class="nav nav-tabs nav-justified">
                        <li class="active"><a data-toggle="tab" href="#sequence">Sequences</a></li>
                        <li><a data-toggle="tab" href="#series">Series</a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="sequence" class="tab-pane fade in active">
                            <h3>Arithmetic Sequence</h3>
                            <div class="well">
                                <p class="text-left">Arithmetic sequence is a sequence where the common difference (d) between consecutive terms is constant.<br> With a general formula of : T<sub>n</sub> = a + (n - 1) &times; d <br><br> a - first term value<br> n - term number.<br> d
                                    - common difference
                                </p>
                            </div>
                            <h3>Quadratic Sequence</h3>
                            <div class="well">
                                <p class="text-left">
                                    Quadratic sequence is a sequence that has first difference and second difference (c) that is constant between two consecutive points.
                                    <br>With a formula of : T<sub>n</sub> = an<sup>2</sup> + bn + c
                                </p>
                            </div>
                            <h3>Geometric Sequence</h3>
                            <div class="well">
                                <p class="text-left">Geometric sequence is a sequence where the common ratio (r) between consecutive terms is constant.<br> With a general formula of : T<sub>n</sub> = ar<sup>(n - 1)</sup><br><br> a - first term value<br> n - term number.<br> r - common
                                    ratio
                                </p>
                            </div>
                        </div>
                        <div id="series" class="tab-pane fade">
                            <h3>Arithmetic Series</h3>
                            <div class="well">
                                <p class="text-left text-justify">The formula is S<sub>n</sub> = <sup>n</sup> &frasl; <sub>2</sub> [2a + (n − 1) &times; d] <br>where S<sub>n</sub> is the sum of n terms,<br> a is the first term,<br> n is the number of terms and d is the common difference.
                                </p>
                                <p class="text-center">Alternatively</p>
                                <p class="text-left text-justify">S<sub>n</sub> = <sup>n</sup> &frasl; <sub>2</sub> [a + l]<br>Where l is last term of the sequence.</p>
                            </div>
                            <h3>Geometric Series</h3>
                            <div class="well">
                                <p class="text-left text-justify">
                                    The formula is S<sub>n</sub>  = ​ ​ <sup>a(r<sup>n</sup> − 1)</sup> &frasl; <sub>r − 1</sub> for r > 1 or S <sub>n</sub>  = ​ ​ <sup>a(1 - r<sup>n</sup>)</sup> &frasl; <sub>1 - r</sub> for r
                                    < 1 <br>where a is the first term<br>r is the common ratio<br>n is the number of terms and<br>S<sub>n</sub>is the sum of the terms.</p>
                            </div>
                        </div>
                    </div>

                    <h3 class="text-center">Solver Section</h3>
                    <p class="text-center">Choose below to solve.<br><span class="text-info">And remember to use solver have scenario data to be solved!</span></p>
                    <h3 class="text-center">Arithmetic Sequence</h3>
                    <div class="row text-center">
                        <div class="col-sm-6">
                            <div class="thumbnail">
                                <p><b>Arithmetic Sequence</b></p>
                                <p>T<sub>n</sub> = a + (n - 1) &times; d</p>
                                <a href="arithmetic-sequence.php">
                                    <button class="btn" data-toggle="modal" data-target="#myModal">Go</button>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="thumbnail">
                                <p><b>Arithmetic Series</b></p>
                                <p>S<sub>n</sub> = <sup>n</sup> &frasl; <sub>2</sub> [2a + (n − 1) &times; d]</p>
                                <a href="arithmetic-series.php">
                                    <button class="btn" data-toggle="modal" data-target="#myModal">Go</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-center">Quadratic Sequence</h3>
                    <div class="row text-center">
                        <div class="col-sm-12">
                            <div class="thumbnail">
                                <p><b>Quadratic Sequence</b></p>
                                <p>T<sub>n</sub> = an<sup>2</sup> + bn + c</p>
                                <a href="quadratic-sequence.php">
                                    <button class="btn" data-toggle="modal" data-target="#myModal">Go</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-center">Geometric Sequence</h3>
                    <div class="row text-center">
                        <div class="col-sm-6">
                            <div class="thumbnail">
                                <p><b>Geometric Sequence</b></p>
                                <p>S<sub>n</sub>  = ​ ​ar<sup>(n − 1)</sup></p>
                                <a href="geometric-sequence.php">
                                    <button class="btn" data-toggle="modal" data-target="#myModal">Go</button>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="thumbnail">
                                <p><b>Geometric Series</b></p>
                                <p>S<sub>n</sub>  = ​ ​ <sup>a(r<sup>n</sup> − 1)</sup> &frasl; <sub>r − 1</sub></p>
                                <a href="geometric-series.php">
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