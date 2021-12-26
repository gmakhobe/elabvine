<?php
include('../../../php/session.php');
//App name
$app_name = "Physics Lab";
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Momentum and Impulse | Physics Lab</title>
        <!-- Headers -->
        <?php include("../../../includes/header-chapter.php"); ?>
        <!-- End Headers -->

        <!-- Script -->
        <script src="../../../js/jquery.min.js"></script>
        <script src="../js/script.js"></script>
        <!-- End Script -->
    </head>

    <body id="myPage">

        <!--Navbar-->
        <?php include("../../../includes/navigation-solver.php"); ?>
        <!--Navbar end-->

        <!-- Container (Chapters Section) -->
        <div id="content" class="container text-center">

            <h2>Momentum and Impulse</h2>
            <h2>Work, Energy and Power</h2>
            <div class="row">
                <div class="col-sm-2 col-xs-12 hidden-xs"></div>
                <div class="col-sm-8 col-xs-12">
                    <img src="../images/non-conse.gif" style="width:100%;height:350px;">
                </div>
                <div class="col-sm-2 col-xs-12 hidden-xs"></div>
            </div>
            <div id="Carouse-1-of-1" class="carousel slide text-center" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <h4>Find value of net work done by non-conservative force</h4>
                        <button data-toggle="modal" data-target="#Modal-1-of-1-prompt" class="btn btn-primary">Work</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2 hidden-xs"></div>
                <div class="col-sm-8 col-xs-12">
                    <div id="display"></div>
                </div>
                <div class="col-sm-2 hidden-xs"></div>
            </div>
        </div>

        <!--Modal List-->
        <div class="text-left">
            <div class="modal fade" id="Modal-1-of-1-prompt" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4> Scenario Solver</h4>
                        </div>
                        <div class="modal-body" style="height:50%;">
                            <h4>Enter values given to solver</h4>
                            <form>
                                <div class="form-group">
                                    <label for="text1">Mass</label>
                                    <input class="form-control" id="text1" type="text">
                                    <label for="text2">Height<sub>Before</sub></label>
                                    <input class="form-control" id="text2" type="text">
                                    <label for="text3">Height<sub>After</sub></label>
                                    <input class="form-control" id="text3" type="text">
                                    <label for="text4">Acceleration due to Gravity</label>
                                    <input class="form-control" id="text4" type="text">
                                    <label for="text5">Velocity<sub>Before</sub></label>
                                    <input class="form-control" id="text5" type="text">
                                    <label for="text6">Velocity<sub>After</sub></label>
                                    <input class="form-control" id="text6" type="text">
                                </div>
                            </form>
                            <button onclick="wNC()" class="btn btn-primary" data-dismiss="modal">Solve</button>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-default" data-dismiss="modal">
                                 Cancel
                            </button>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Modal list end-->

        <footer class="container text-center">
            <p>E-LabVine &copy; 2016-
                <?php echo date("Y"); ?> all rights reserved</p>
        </footer>

        <script>
            $(document).ready(function () {
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
                        }, 1000, function () {

                            // Add hash (#) to URL when done scrolling (default click behavior)
                            window.location.hash = hash;
                        });
                    } // End if
                });

                $(window).scroll(function () {
                    $(".slideanim").each(function () {
                        var pos = $(this).offset().top;

                        var winTop = $(window).scrollTop();
                        if (pos < winTop + 2500) {
                            $(this).addClass("slide");
                        }
                    });
                });
            })
        </script>

    </body>

</html>