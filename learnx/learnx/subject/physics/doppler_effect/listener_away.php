<?php
include('../../../php/session.php');
//App name
$app_name = "Physics Lab";
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Doppler Effect | Physics Lab</title>
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

            <h2>Doppler Effect</h2>
            <div class="row">
                <div class="col-sm-2 col-xs-12 hidden-xs"></div>
                <div class="col-sm-8 col-xs-12">
                    <img src="../images/away.png" style="width:100%;height:350px;">
                </div>
                <div class="col-sm-2 col-xs-12 hidden-xs"></div>
            </div>
            <div id="Carouse-1-of-1" class="carousel slide text-center" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <h4>Find value of frequency of a listener</h4>
                        <button data-toggle="modal" data-target="#Modal-1-of-1-prompt" class="btn btn-primary">Work</button>
                    </div>
                    <div class="item">
                        <h4>Find value of frequency of a source</h4>
                        <button data-toggle="modal" data-target="#Modal-2-of-1-prompt" class="btn btn-primary">Work</button>
                    </div>
                    <div class="item">
                        <h4>Find value of velocity<sub>listener</sub></h4>
                        <button data-toggle="modal" data-target="#Modal-3-of-1-prompt" class="btn btn-primary">Work</button>
                    </div>
                    <div class="item">
                        <h4>Find value of velocity<sub>source</sub></h4>
                        <button data-toggle="modal" data-target="#Modal-4-of-1-prompt" class="btn btn-primary">Work</button>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#Carouse-1-of-1" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#Carouse-1-of-1" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
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
                                    <label for="text1">Frequency<sub>Source</sub></label>
                                    <input class="form-control" id="text1" type="text">
                                    <label for="text2">Speed of Sound<sub>v</sub></label>
                                    <input class="form-control" id="text2" type="text">
                                    <label for="text3">Velocity of Listener</label>
                                    <input class="form-control" id="text3" type="text">
                                    <label for="text4">Velocity of Source</label>
                                    <input class="form-control" id="text4" type="text">
                                </div>
                            </form>
                            <button onclick="dopplerBfirst()" class="btn btn-primary" data-dismiss="modal">Solve</button>
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
            <div style="height:100%;" id="Modal-2-of-1-prompt" class="modal fade" role="dialog">
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
                                    <label for="text11">Frequency<sub>Listener</sub></label>
                                    <input class="form-control" id="text11" type="text">
                                    <label for="text22">Speed of Sound<sub>v</sub></label>
                                    <input class="form-control" id="text22" type="text">
                                    <label for="text33">Velocity of Listener</label>
                                    <input class="form-control" id="text33" type="text">
                                    <label for="text44">Velocity of Source</label>
                                    <input class="form-control" id="text44" type="text">
                                </div>
                            </form>
                            <button data-dismiss="modal" onclick="dopplerBsecond()" class="btn btn-primary btn-default pull-left">Solve </button>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-default" data-dismiss="modal">
                                 Cancel
                            </button>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tab-3-of-1 Prompt-->
            <div style="height:100%;" id="Modal-3-of-1-prompt" class="modal fade" role="dialog">
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
                                    <label for="text111">Frequency<sub>Listener</sub></label>
                                    <input class="form-control" id="text111" type="text">
                                    <label for="text222">Frequency<sub>Source</sub></label>
                                    <input class="form-control" id="text222" type="text">
                                    <label for="text333">Speed of Sound<sub>v</sub></label>
                                    <input class="form-control" id="text333" type="text">
                                    <label for="text444">Velocity of Source</label>
                                    <input class="form-control" id="text444" type="text">
                                </div>
                            </form>
                            <button data-dismiss="modal" onclick="dopplerBthird()" class="btn btn-primary btn-default pull-left">Solve </button>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-default" data-dismiss="modal">
                                 Cancel
                            </button>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tab-4-of-1 Prompt-->
            <div style="height:100%;" id="Modal-4-of-1-prompt" class="modal fade" role="dialog">
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
                                    <label for="text111">Frequency<sub>Listener</sub></label>
                                    <input class="form-control" id="text1111" type="text">
                                    <label for="text222">Frequency<sub>Source</sub></label>
                                    <input class="form-control" id="text2222" type="text">
                                    <label for="text333">Speed of Sound<sub>v</sub></label>
                                    <input class="form-control" id="text3333" type="text">
                                    <label for="text444">Velocity of Listener</label>
                                    <input class="form-control" id="text4444" type="text">>
                                </div>
                            </form>
                            <button data-dismiss="modal" onclick="dopplerBforth()" class="btn btn-primary btn-default pull-left">Solve </button>
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