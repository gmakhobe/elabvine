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
                <li class="active"><a data-toggle="pill" href="#tab-1">F<small><sub>net</sub></small> = m &times; a</a>
                </li>
                <li><a href="#tab-2" data-toggle="pill">F<small><sub>applied</sub></small> &minus; F<small><sub>friction <i>a &amp; b</i> </sub></small> = m<small><sub>a &amp; b</sub></small> &times; a</a></li>
                <li><a href="#tab-3" data-toggle="pill">Atwood&apos;s machine</a></li>
                <li><a href="#tab-4" data-toggle="pill">Masses between pulley</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active fade in" id="tab-1">
                    <div class="row">
                        <div class="col-sm-2 col-xs-12 hidden-xs"></div>
                        <div class="col-sm-8 col-xs-12">
                            <img src="../images/fnet-ma.png" style="width:100%;height:350px;">
                            <div class="alert alert-warning alert-dismissable">
                                <div class="close" data-dismiss="alert">&times;</div>
                                <p class="text-center"><strong>Tip!</strong> When you are given coefficient of friction solve it first</p>
                            </div>
                        </div>
                        <div class="col-sm-2 col-xs-12 hidden-xs"></div>
                    </div>
                    <div id="Carouse-1-of-1" class="carousel slide text-center" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <h4>Find the value of applied force of an object</h4>
                                <button data-toggle="modal" data-target="#Modal-1-of-1-prompt" class="btn btn-primary">Work</button>
                            </div>
                            <div class="item">
                                <h4>Find the value of frictional force of an object</h4>
                                <button data-toggle="modal" data-target="#Modal-2-of-1-prompt" class="btn btn-primary">Work</button>
                            </div>
                            <div class="item">
                                <h4>Find the value of mass of an object</h4>
                                <button data-toggle="modal" data-target="#Modal-3-of-1-prompt" class="btn btn-primary">Work</button>
                            </div>
                            <div class="item">
                                <h4>Find the value of acceleration of an object</h4>
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
                </div>
                <div class="tab-pane fade" id="tab-2">
                    <div class="row">
                        <div class="col-sm-2 col-xs-12 hidden-xs"></div>
                        <div class="col-sm-8 col-xs-12">
                            <img src="../images/fnet-2-ma.png" style="width:100%;height:350px;">
                            <div class="alert alert-warning alert-dismissable">
                                <div class="close" data-dismiss="alert">&times;</div>
                                <p class="text-center"><strong>Tip!</strong> When you are given coefficient of friction solve it first</p>
                            </div>
                        </div>
                        <div class="col-sm-2 col-xs-12 hidden-xs"></div>
                    </div>
                    <div id="Carousel-l-of-2" class="carousel slide text-center" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <h4>Find the value of acceleration and tension of the system</h4>
                                <button data-toggle="modal" data-target="#Modal-1-of-2-prompt" class="btn btn-primary">Work</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-3">
                    <div class="row">
                        <div class="col-sm-2 col-xs-12 hidden-xs"></div>
                        <div class="col-sm-8 col-xs-12">
                            <img src="../images/fnet-3-ma.png" style="width:auto;height:350px;">
                            <div class="alert alert-warning alert-dismissable">
                                <div class="close" data-dismiss="alert">&times;</div>
                                <p class="text-center"><strong>Tip!</strong> When you are given coefficient of friction solve it first</p>
                            </div>
                        </div>
                        <div class="col-sm-2 col-xs-12 hidden-xs"></div>
                    </div>
                    <div id="Carousel-l-of-3" class="carousel slide text-center" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <h4>Find the value of acceleration and tension of the system</h4>
                                <button data-toggle="modal" data-target="#Modal-1-of-3-prompt" class="btn btn-primary">Work</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-4">
                    <div class="row">
                        <div class="col-sm-2 col-xs-12 hidden-xs"></div>
                        <div class="col-sm-8 col-xs-12">
                            <img src="../images/fnet-4-ma.png" style="width:auto;height:350px;">
                            <div class="alert alert-warning alert-dismissable">
                                <div class="close" data-dismiss="alert">&times;</div>
                                <p class="text-center"><strong>Tip!</strong> When you are given coefficient of friction solve it first</p>
                            </div>
                        </div>
                        <div class="col-sm-2 col-xs-12 hidden-xs"></div>
                    </div>
                    <div id="Carousel-l-of-4" class="carousel slide text-center" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <h4>Find the value of acceleration and tension of the system</h4>
                                <button data-toggle="modal" data-target="#Modal-1-of-4-prompt" class="btn btn-primary">Work</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                <label for="text1">F<sub>Friction</sub></label>
                                <input class="form-control" id="text1" type="text">
                                <label for="text2">Mass</label>
                                <input class="form-control" id="text2" type="text">
                                <label for="text3">Accelaration</label>
                                <input class="form-control" id="text3" type="text">
                            </div>
                        </form>
                        <a href="#display"><button onclick="fnetTabFirst()" class="btn btn-primary" data-dismiss="modal">Solve</button></a>
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
                                <label for="text1">F<sub>Applied</sub></label>
                                <input class="form-control" id="text11" type="text">
                                <label for="text2">Mass</label>
                                <input class="form-control" id="text22" type="text">
                                <label for="text3">Accelaration</label>
                                <input class="form-control" id="text33" type="text">
                            </div>
                        </form>
                        <button data-dismiss="modal" onclick="fnetTabFirst2()" class="btn btn-primary btn-default pull-left">Solve </button>
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
                                <label for="text1">F<sub>applied</sub></label>
                                <input class="form-control" id="text111" type="text">
                                <label for="text2">F<sub>friction</sub></label>
                                <input class="form-control" id="text222" type="text">
                                <label for="text3">Acceleration</label>
                                <input class="form-control" id="text333" type="text">
                            </div>
                        </form>
                        <button data-dismiss="modal" onclick="fnetTabFirst3()" class="btn btn-primary btn-default pull-left">Solve </button>
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
                                <label for="text1">F<sub>applied</sub></label>
                                <input class="form-control" id="text1111" type="text">
                                <label for="text2">F<sub>friction</sub></label>
                                <input class="form-control" id="text2222" type="text">
                                <label for="text3">Mass</label>
                                <input class="form-control" id="text3333" type="text">
                            </div>
                        </form>
                        <button data-dismiss="modal" onclick="fnetTabFirst4()" class="btn btn-primary btn-default pull-left">Solve </button>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default" data-dismiss="modal">
                            Cancel
                        </button>

                    </div>
                </div>
            </div>
        </div>
        <!-- Tab-1-of-2 Prompt-->
        <div class="modal fade" id="Modal-1-of-2-prompt" role="dialog">
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
                                <label for="text1">F<sub>applied</sub></label>
                                <input class="form-control" id="textb1" type="text">
                                <label for="text2">F<sub>friction Pulled</sub></label>
                                <input class="form-control" id="textb2" type="text">
                                <label for="text3">F<sub>friction B</sub></label>
                                <input class="form-control" id="textb3" type="text">
                                <label for="text3">mass Pulled</label>
                                <input class="form-control" id="textb4" type="text">
                                <label for="text3">mass B</label>
                                <input class="form-control" id="textb5" type="text">
                            </div>
                        </form>
                        <button onclick="fnetTabSecond()" class="btn btn-primary" data-dismiss="modal">Solve</button>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default" data-dismiss="modal">
                            Cancel
                        </button>

                    </div>
                </div>
            </div>
        </div>
        <!-- Tab-1-of-3 Prompt-->
        <div class="modal fade" id="Modal-1-of-3-prompt" role="dialog">
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
                                <input class="form-control" id="textc1" type="text">
                                <label for="text2">Mass</label>
                                <input class="form-control" id="textc2" type="text">
                            </div>
                        </form>
                        <button onclick="fnetTabThird()" class="btn btn-primary" data-dismiss="modal">Solve</button>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default" data-dismiss="modal">
                            Cancel
                        </button>

                    </div>
                </div>
            </div>
        </div>
        <!-- Tab-1-of-3 Prompt-->
        <div class="modal fade" id="Modal-1-of-4-prompt" role="dialog">
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
                                <label for="textd1">F<sub>friction</sub></label>
                                <input class="form-control" id="textd1" type="text">
                                <label for="textd2">Mass of block on table</label>
                                <input class="form-control" id="textd2" type="text">
                                <label for="textd3">Mass of hanging block</label>
                                <input class="form-control" id="textd3" type="text">
                            </div>
                        </form>
                        <button onclick="fnetTabForth()" class="btn btn-primary" data-dismiss="modal">Solve</button>
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
        <div class="row">
            <div class="col-sm-2 hidden-xs"></div>
            <div class="col-sm-8 col-xs-12">
                <div id="display"></div>
            </div>
            <div class="col-sm-2 hidden-xs"></div>
        </div>

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