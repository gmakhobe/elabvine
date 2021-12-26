<?php
include('../../../php/session.php');
//App name
$app_name = "Physics Lab";
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Mechanics | Physics Lab</title>
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

            <h2>Mechanics</h2>
            <ul class="nav nav-pills nav-justified">
                <li class="active"><a data-toggle="pill" href="#tab-1">w = m &times; g</a>
                </li>
                <li><a href="#tab-2" data-toggle="pill">m = <sup>w</sup> &frasl; <sub>g</sub></a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active fade in" id="tab-1">
                    <div class="row">
                        <div class="col-sm-2 col-xs-12 hidden-xs"></div>
                        <div class="col-sm-8 col-xs-12">
                            <img src="../images/weightpic.png" style="width:100%;height:350px;">
                        </div>
                        <div class="col-sm-2 col-xs-12 hidden-xs"></div>
                    </div>
                    <div id="Carouse-1-of-1" class="carousel slide text-center" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <h4>Find value of weight</h4>
                                <button data-toggle="modal" data-target="#Modal-1-of-1-prompt" class="btn btn-primary">Work</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-2">
                    <div class="row">
                        <div class="col-sm-2 col-xs-12 hidden-xs"></div>
                        <div class="col-sm-8 col-xs-12">
                            <img src="../images/masspic.png" style="width:100%;height:350px;">
                        </div>
                        <div class="col-sm-2 col-xs-12 hidden-xs"></div>
                    </div>
                    <div id="Carousel-1-of-2" class="carousel slide text-center" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <h4>Find value of mass</h4>
                                <button data-toggle="modal" data-target="#Modal-1-of-2-prompt" class="btn btn-primary">Work</button>
                            </div>
                        </div>
                    </div>
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
        <!--Modal List-->
        <!-- Tab-1-of-1 Prompt-->
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
                            </div>
                        </form>
                        <button onclick="weightTabFirst()" class="btn btn-primary" data-dismiss="modal">Solve</button>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default" data-dismiss="modal">
                             Cancel
                        </button>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Tab-2-of-1 Prompt-->
        <div style="height:100%;" id="Modal-1-of-2-prompt" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4> Scenario Solver</h4>
                    </div>
                    <div class="modal-body">
                        <h4>Enter values given to solver</h4>
                        <form>
                            <div class="form-group">
                                <label for="textb1">Weight</label>
                                <input class="form-control" id="textb1" type="text">
                            </div>
                        </form>
                        <button data-dismiss="modal" onclick="weightTabSecond()" class="btn btn-primary btn-default pull-left">Solve </button>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default" data-dismiss="modal">
                             Cancel
                        </button>
                        
                    </div>
                </div>
            </div>
        </div>

        <!--Modal list end-->

        <br>
        <!-- Footer -->
        <?php include("../../../includes/footer-chapter.php"); ?>
        <!-- End Footer -->

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