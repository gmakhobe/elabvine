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
        <script src="../js/algebra-0.2.6.min.js"></script>
        <script src="../js/twistedalgo01.js"></script>
        <script src="../dist/katex.min.js"></script>
        <!-- End Script -->
    </head>

    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

        <!--Navbar-->
        <?php include("../../../includes/navigation-solver.php"); ?>
        <!--Navbar end-->

        <div id="Selectors" class="container">
            <h2 class="text-center">Geometric Sequence</h2>
            <div class="well">
                <h4 class="text-center">Find the formula of the n<sup>th</sup> term (term number) of the sequence</h4>
            </div>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <form id="myForm">
                        <div class="form-group">
                            <label for="numeric1">First Term (t<sub>1</sub>):</label>
                            <input type="number" class="form-control" id="numeric1" required>
                            <label for="numeric2">Second Term (t<sub>2</sub>):</label>
                            <input type="number" class="form-control" id="numeric2" required>
                            <label for="numeric3">Third Term (t<sub>3</sub>):</label>
                            <input type="number" class="form-control" id="numeric3" required>
                        </div>
                        <br>
                        <div id="display-1">
                            <div class="alert alert-info">
                                <p class="text-center">solution will display here...</p>
                            </div>
                        </div>
                        <center><button type="button" class="btn btn-primary" onclick="Algorithm_Geometric_Sequence_General_Formula();">Solve</button>| |<button onclick="Reset_Form_One()" type="button" class="btn btn-primary">Reset</button></center>
                    </form>
                </div>
                <div class="col-sm-2"></div>
            </div>
            <div class="well">
                <h4 class="text-center">Find the value of T<sub>n</sub> (term value)</h4>
            </div>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <form id="myForm2">
                        <div class="form-group">
                            <label for="numeric1">Value of a (first term):</label>
                            <input type="number" class="form-control" id="numerica1" required>
                            <label for="numeric2">Value of r (constant ratio):</label>
                            <input type="number" class="form-control" id="numerica2" required>
                            <label for="numeric3">Value of n (term number):</label>
                            <input type="number" class="form-control" id="numerica3" required>
                        </div>
                        <br>
                        <div id="display-2">
                            <div class="alert alert-info">
                                <p class="text-center">solution will display here...</p>
                            </div>
                        </div>
                        <center><button type="button" class="btn btn-primary" onclick="Algorithm_Geometric_Sequence_Find_Term_Value()">Solve</button>| |<button onclick="Reset_Form_Two()" type="button" class="btn btn-primary">Reset</button></center>
                    </form>
                </div>
                <div class="col-sm-2"></div>
            </div>
            <div class="well">
                <h4 class="text-center">Find the value of n (term number) in the sequence</h4>
            </div>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <form id="myForm3">
                        <div class="form-group">
                            <label for="numeric1">Value of a (first term):</label>
                            <input type="number" class="form-control" id="numericb1" required>
                            <label for="numeric2">Value of r (constant ratio):</label>
                            <input type="number" class="form-control" id="numericb2" required>
                            <label for="numeric3">Value of T<sub>n</sub> (term value):</label>
                            <input type="number" class="form-control" id="numericb3" required>
                        </div>
                        <br>
                        <div id="display-3">
                            <div class="alert alert-info">
                                <p class="text-center">solution will display here...</p>
                            </div>
                        </div>
                        <center><button type="button" class="btn btn-primary" onclick="Algorithm_Geometric_Sequence_Find_Term_Number()">Solve</button>| |<button onclick="Reset_Form_Three()" type="button" class="btn btn-primary">Reset</button></center>
                    </form>
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