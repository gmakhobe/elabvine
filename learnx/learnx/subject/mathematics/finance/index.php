<?php
include('../../../php/session.php');
//App name
$app_name = "Maths Lab";
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <title>Finance, Growth and Decay | Maths Lab</title>
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
                        <h2 class="text-center">Finance, Growth and Decay</h2>
                        <div class="well well-sm">
                            <h4>Simple interest</h4>
                            <p class="text-left">Is the interest on an initial sum of money, each year you receive or you are charged the same amount of interest.</p>
                            <p class="text-center">A = P(1 + n &times; <i>i</i>)</p>
                            <h4>Compound interest</h4>
                            <p class="text-left">is interest on a principal amount, for each year, the previous year&apos;s final amount becomes the new principal amount so the interest is calculated on the principal amount and the interest from the previous year.</p>
                            <p class="text-center">A = P(1 + <i>i</i>)<sup>n</sup></p>
                            <p class="text-left">Where : A is the final amount,<br>P is the principal amount (original sum of money invested or borrowed),<br><i>i</i> is the interest rate and <br>n is the number of years.</p>
                        </div>
                        <h4>Simple and compound decay</h4>
                        <div class="well well-sm">
                            <h4>Decay or depreciation</h4>
                            <p class="text-left">Is when a quantity decreases by a percentage of the amount present eg your assets and machinery lose value through age and use.</p>
                            <p class="text-center">Simple decay or depreciation : A = P(1 – n &times; <i>i</i>)<br>
                                Compound decay or depreciation: A = P(1 – <i>i</i>)<sup>n</sup>
                            </p>
                        </div>
                        <h4>Nominal and effective interest rates</h4>
                        <div class="well well-sm">
                            <p class="text-left">A nominal interest rate is the quoted interest rate and an effective interest rate is the actual interest rate received.</p>
                            <p class="text-center">1 + <i>i</i><sup>effective</sup> = (1 + <sup><i>i</i><sup>effective</sup></sup> &frasl; <sub>k</sub>)<sup>k</sup></p>
                        </div>
                        <h4>Annuities</h4>
                        <div class="well well-sm">
                            <p class="text-left">Annuities are number of equal payments made at regular intervals and subject to a rate of interest.</p>
                            <p class="text-center">Future Value formula : F = <sup>x[(1 + <i>i</i>)<sup>n</sup> - 1]</sup> &frasl; <sub><i>i</i></sub><br>
                                Present Value formula : P = <sup>x[1 - (1 + <i>i</i>)<sup>-n</sup>]</sup> &frasl; <sub><i>i</i></sub>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
        </div>

        <div class="container">
            <h3 class="text-center">Solver Section</h3>
            <p class="text-center">Choose below to solve.<br><span class="text-info">And remember to use solver have scenario data to be solved!</span></p>
            <h3 class="text-center">Finance, Growth and Decay</h3>
            <div class="row text-center">
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <p><b>Simple Interest</b></p>
                        <p>A = P(1 + <i>i</i> &times; n)</p>
                        <a href="simple-interest.php">
                            <button class="btn" data-toggle="modal" data-target="#myModal">Go</button>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <p><b>Compound Interest</b></p>
                        <p>A = P(1 + <i>i</i>)<sup>n</sup></p>
                        <a href="compound-interest.php">
                            <button class="btn" data-toggle="modal" data-target="#myModal">Go</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-sm-3">

                </div>
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <p><b>Depreciation</b></p>
                        <p>A = P(1 – n &times; <i>i</i>)<br>
                            A = P(1 – <i>i</i>)<sup>n</sup></p>
                        <a href="depreciation.php">
                            <button class="btn" data-toggle="modal" data-target="#myModal">Go</button>
                        </a>
                    </div>
                </div>
                <div class="col-sm-3">

                </div>
            </div>
            <div class="row text-center">
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <p><b>Nominal and effective interest rates</b></p>
                        <p>1 + <i>i</i><sup>effective</sup> = (1 + <sup><i>i</i><sup>effective</sup></sup> &frasl; <sub>k</sub>)<sup>k</sup></p>
                        <a href="interests.php">
                            <button class="btn" data-toggle="modal" data-target="#myModal">Go</button>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <p><b>Annuities</b></p>
                        <p>F = <sup>x[(1 + <i>i</i>)<sup>n</sup> - 1]</sup> &frasl; <sub><i>i</i></sub> | 
                            P = <sup>x[1 - (1 + <i>i</i>)<sup>-n</sup>]</sup> &frasl; <sub><i>i</i></sub></p>
                        <a href="annuities.php">
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

    </body>

</html>