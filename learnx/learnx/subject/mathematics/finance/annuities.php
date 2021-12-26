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

            <h2 class="text-center">Annuities</h2>
            <ul class="nav nav-tabs nav-justified">
                <li class="active"><a data-toggle="tab" href="#future">Future Value</a></li>
                <li><a data-toggle="tab" href="#present">Present Value</a></li>
            </ul>
            <br>
            <div class="tab-content">
                <div class="tab-pane active in fade" id="future">
                    <div class="well">
                        <h4 class="text-center">Find the value of F (total accumulated at the end of the time period)</h4>
                    </div>
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <form id="myForm">
                                <div class="form-group">
                                    <label for="tab-1-text-1-of-1">x (monthly installment):</label>
                                    <input type="number" class="form-control" id="tab-1-text-1" required>
                                    <label for="tab-1-text-2-of-1">i (interest):</label>
                                    <input type="number" class="form-control" id="tab-1-text-2-of-1" placeholder="in percentage" required>
                                </div>
                                <div class="form-group">
                                    <label for="tab-1-text-3-of-1">n (number of payments):</label>
                                    <input type="number" class="form-control" id="tab-1-text-3-of-1" required>
                                    <label for="tab-1-text-4-of-1">Compounded (mind if given):</label>
                                    <input type="number" class="form-control" placeholder="Default is 1 for 12 months" id="tab-1-text-4-of-1" required>
                                </div>
                                <br>
                                <div id="display-1">
                                    <div class="alert alert-info">
                                        <p class="text-center">solution will display here...</p>
                                    </div>
                                </div>
                                <center><button type="button" class="btn btn-primary" onclick="Algorithm_Anunities_F_Total_accumulated();">Solve</button>| |<button onclick="Reset_Form_One()" type="button" class="btn btn-primary">Reset</button></center>
                            </form>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                    <div class="well">
                        <h4 class="text-center">Find the value of x (monthly installment)</h4>
                    </div>
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <form id="myForm2">
                                <div class="form-group">
                                    <label for="tab-1-text-1-of-2">F (total accumulated at the end of the time period):</label>
                                    <input type="number" class="form-control" id="tab-1-text-1-of-2" required>
                                    <label for="tab-1-text-2-of-2">i (interest):</label>
                                    <input type="number" class="form-control" id="tab-1-text-2-of-2" required>
                                </div>
                                <div class="form-group">    
                                    <label for="tab-1-text-3-of-2">n (number of payments):</label>
                                    <input type="number" class="form-control" id="tab-1-text-3-of-2" required>
                                    <label for="tab-1-text-4-of-2">Compounded (mind if given):</label>
                                    <input type="number" class="form-control" placeholder="Default is 1 for 12 months" id="tab-1-text-4-of-2" required>
                                </div>
                                <br>
                                <div id="display-2">
                                    <div class="alert alert-info">
                                        <p class="text-center">solution will display here...</p>
                                    </div>
                                </div>
                                <center><button type="button" class="btn btn-primary" onclick="Algorithm_Annuities_F_Monthly_installment();">Solve</button>| |<button onclick="Reset_Form_Two()" type="button" class="btn btn-primary">Reset</button></center>
                            </form>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                    <div class="well">
                        <h4 class="text-center">Find the value of n (number of payments)</h4>
                    </div>
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <form id="myForm3">
                                <div class="form-group">
                                    <label for="tab-1-text-1-of-3">F (total accumulated at the end of the time period):</label>
                                    <input type="number" class="form-control" id="tab-1-text-1-of-3" required>
                                    <label for="tab-1-text-2-of-3">x (monthly installment):</label>
                                    <input type="number" class="form-control" id="tab-1-text-2-of-3" required>
                                    <label for="tab-1-text-3-of-3">i (interest):</label>
                                    <input type="number" class="form-control" id="tab-1-text-3-of-3" required>
                                    <label for="tab-1-text-4-of-2">Compounded (mind if given):</label>
                                    <input type="number" class="form-control" placeholder="Default is 1 for 12 months" id="tab-1-text-4-of-3" required>
                                </div>
                                <br>
                                <div id="display-3">
                                    <div class="alert alert-info">
                                        <p class="text-center">solution will display here...</p>
                                    </div>
                                </div>
                                <center><button type="button" class="btn btn-primary" onclick="Algorithm_Annuities_F_Payments();">Solve</button>| |<button onclick="Reset_Form_Three()" type="button" class="btn btn-primary">Reset</button></center>
                            </form>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                </div>
                <div class="tab-pane fade" id="present">
                    <div class="well">
                        <h4 class="text-center">Find the value of P (present amount)</h4>
                    </div>
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <form id="myForm4">
                                <div class="form-group">
                                    <label for="tab-2-text-1-of-1">x (monthly installments):</label>
                                    <input type="number" class="form-control" id="tab-2-text-1-of-1" required>
                                    <label for="tab-2-text-2-of-1">i (interest):</label>
                                    <input type="number" class="form-control" id="tab-2-text-2-of-1" required>
                                </div>
                                <div class="form-group">    
                                    <label for="tab-2-text-3-of-1">n (number of payments):</label>
                                    <input type="number" class="form-control" id="tab-2-text-3-of-1" required>
                                    <label for="tab-2-text-4-of-1">Compounded (mind if given):</label>
                                    <input type="number" class="form-control" placeholder="Default is 1 for 12 months" id="tab-2-text-4-of-1" required>
                                </div>
                                <br>
                                <div id="display-4">
                                    <div class="alert alert-info">
                                        <p class="text-center">solution will display here...</p>
                                    </div>
                                </div>
                                <center><button type="button" class="btn btn-primary" onclick="Algorithm_Annuities_P_Present_Amount();">Solve</button>| |<button onclick="Reset_Form_Four()" type="button" class="btn btn-primary">Reset</button></center>
                            </form>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                    <div class="well">
                        <h4 class="text-center">Find the value of x (monthly installments)</h4>
                    </div>
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <form id="myForm5">
                                <div class="form-group">
                                    <label for="tab-2-text-1-of-2">P (present value):</label>
                                    <input type="number" class="form-control" id="tab-2-text-1-of-2" required>
                                    <label for="tab-2-text-2-of-2">i (interest):</label>
                                    <input type="number" class="form-control" id="tab-2-text-2-of-2" required>
                                    <label for="tab-2-text-3-of-2">n (number of payments):</label>
                                    <input type="number" class="form-control" id="tab-2-text-3-of-2" required>
                                    <label for="tab-2-text-4-of-2">Compounded (mind if given):</label>
                                    <input type="number" class="form-control" placeholder="Default is 1 for 12 months" id="tab-2-text-4-of-2" required>
                                </div>
                                <br>
                                <div id="display-5">
                                    <div class="alert alert-info">
                                        <p class="text-center">solution will display here...</p>
                                    </div>
                                </div>
                                <center><button type="button" class="btn btn-primary" onclick="Algorithm_Annuities_P_Monthly_installment();">Solve</button>| |<button onclick="Reset_Form_Five()" type="button" class="btn btn-primary">Reset</button></center>
                            </form>
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                    <div class="well">
                        <h4 class="text-center">Find the value of n (number of payments)</h4>
                    </div>
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <form id="myForm6">
                                <div class="form-group">
                                    <label for="tab-2-text-1-of-3">P (present value):</label>
                                    <input type="number" class="form-control" id="tab-2-text-1-of-3" required>
                                    <label for="tab-2-text-2-of-3">x (monthly installments):</label>
                                    <input type="number" class="form-control" id="tab-2-text-2-of-3" required>
                                    <label for="tab-2-text-3-of-3">i (interest):</label>
                                    <input type="number" class="form-control" id="tab-2-text-3-of-3" required>
                                    <label for="tab-2-text-4-of-2">Compounded (mind if given):</label>
                                    <input type="number" class="form-control" placeholder="Default is 1 for 12 months" id="tab-2-text-4-of-3" required>
                                </div>
                                <br>
                                <div id="display-6">
                                    <div class="alert alert-info">
                                        <p class="text-center">solution will display here...</p>
                                    </div>
                                </div>
                                <center><button type="button" class="disabled btn btn-primary" onclick="window.alert('The button is disabled, we currently working on its functionality.');/*Algorithm_Annuities_P_Payment();*/">Solve</button>| |<button onclick="Reset_Form_Six()" type="button" class="btn btn-primary">Reset</button></center>
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