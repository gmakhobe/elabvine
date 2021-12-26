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

            <h2 class="text-center">Simple Interest</h2>
            <div class="well">
                <h4 class="text-center">Find the value of A (final amount)</h4>
            </div>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <form id="myForm">
                        <div class="form-group">
                            <label for="text-1-of-1">P (principal):</label>
                            <input type="number" class="form-control" id="text-1-of-1" required>
                            <label for="text-2-of-1">i (interest):</label>
                            <input type="number" class="form-control" id="text-2-of-1" placeholder="in percentage" required>
                            <label for="text-3-of-1">n (period):</label>
                            <input type="number" class="form-control" id="text-3-of-1" required>
                        </div>
                        <br>
                        <div id="display-1">
                            <div class="alert alert-info">
                                <p class="text-center">solution will display here...</p>
                            </div>
                        </div>
                        <center><button type="button" class="btn btn-primary" onclick="Algorithm_Finance_Simple_Interest_final();">Solve</button>| |<button onclick="Reset_Form_One()" type="button" class="btn btn-primary">Reset</button></center>
                    </form>
                </div>
                <div class="col-sm-2"></div>
            </div>
            <div class="well">
                <h4 class="text-center">Find the value of P (principal)</h4>
            </div>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <form id="myForm2">
                        <div class="form-group">
                            <label for="text-1-of-2">A (final amount):</label>
                            <input type="number" class="form-control" id="text-1-of-2" required>
                            <label for="text-2-of-2">i (interest):</label>
                            <input type="number" class="form-control" id="text-2-of-2" placeholder="in percentage" required>
                            <label for="text-3-of-2">n (period):</label>
                            <input type="number" class="form-control" id="text-3-of-2" required>
                        </div>
                        <br>
                        <div id="display-2">
                            <div class="alert alert-info">
                                <p class="text-center">solution will display here...</p>
                            </div>
                        </div>
                        <center><button type="button" class="btn btn-primary" onclick="Algorithm_Finance_Simple_Interest_principal();">Solve</button>| |<button onclick="Reset_Form_Two()" type="button" class="btn btn-primary">Reset</button></center>
                    </form>
                </div>
                <div class="col-sm-2"></div>
            </div>
            <div class="well">
                <h4 class="text-center">Find the value of i (interest)</h4>
            </div>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <form id="myForm3">
                        <div class="form-group">
                            <label for="text-1-of-3">A (final amount):</label>
                            <input type="number" class="form-control" id="text-1-of-3" required>
                            <label for="text-2-of-3">P (principal):</label>
                            <input type="number" class="form-control" id="text-2-of-3" required>
                            <label for="text-3-of-3">n (period):</label>
                            <input type="number" class="form-control" id="text-3-of-3" required>
                        </div>
                        <br>
                        <div id="display-3">
                            <div class="alert alert-info">
                                <p class="text-center">solution will display here...</p>
                            </div>
                        </div>
                        <center><button type="button" class="btn btn-primary" onclick="Algorithm_Finance_Simple_Interest_interest();">Solve</button>| |<button onclick="Reset_Form_Three()" type="button" class="btn btn-primary">Reset</button></center>
                    </form>
                </div>
                <div class="col-sm-2"></div>
            </div>
            <div class="well">
                <h4 class="text-center">Find the value of n (period)</h4>
            </div>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <form id="myForm4">
                        <div class="form-group">
                            <label for="text-1-of-4">A (final amount):</label>
                            <input type="number" class="form-control" id="text-1-of-4" required>
                            <label for="text-2-of-4">P (principal):</label>
                            <input type="number" class="form-control" id="text-2-of-4" required>
                            <label for="text-3-of-4">i (interest):</label>
                            <input type="number" class="form-control" id="text-3-of-4" required>
                        </div>
                        <br>
                        <div id="display-4">
                            <div class="alert alert-info">
                                <p class="text-center">solution will display here...</p>
                            </div>
                        </div>
                        <center><button type="button" class="btn btn-primary" onclick="Algorithm_Finance_Simple_Interest_period();">Solve</button>| |<button onclick="Reset_Form_Four()" type="button" class="btn btn-primary">Reset</button></center>
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