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
            <ul class="nav nav-pills nav-justified">
                <li class="active"><a data-toggle="pill" href="#tab-1">(m<sub>1</sub>v<sub>1</sub> + m<sub>2</sub>v<sub>2</sub>)<sub>Before</sub> = (m<sub>1</sub>v<sub>1</sub> + m<sub>2</sub>v<sub>2</sub>)<sub>After</sub></a>
                </li>
                <li><a href="#tab-2" data-toggle="pill">(m<sub>1</sub>v<sub>1</sub> + m<sub>2</sub>v<sub>2</sub>)<sub>Before</sub> = (m<sub>1</sub> + m<sub>2</sub>)v<sub>After</sub></a></li>
                <li><a href="#tab-3" data-toggle="pill">(m<sub>1</sub> + m<sub>2</sub>)v<sub>Before</sub> = (m<sub>1</sub>v<sub>1</sub> + m<sub>2</sub>v<sub>2</sub>)<sub>After</sub></a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active fade in" id="tab-1">
                    <div class="row">
                        <div class="col-sm-2 col-xs-12 hidden-xs"></div>
                        <div class="col-sm-8 col-xs-12">
                            <img src="../images/changeinmomentumview.png" style="width:100%;height:350px;">
                        </div>
                        <div class="col-sm-2 col-xs-12 hidden-xs"></div>
                    </div>
                    <div id="Carouse-1-of-1" class="carousel slide text-center" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <h4>Find value of velocity<sub>initial 1</sub></h4>
                                <button data-toggle="modal" data-target="#Modal-1-of-1-prompt" class="btn btn-primary">Work</button>
                            </div>
                            <div class="item">
                                <h4>Find value of velocity<sub>initial 2</sub></h4>
                                <button data-toggle="modal" data-target="#Modal-2-of-1-prompt" class="btn btn-primary">Work</button>
                            </div>
                            <div class="item">
                                <h4>Find value of velocity<sub>final 1</sub></h4>
                                <button data-toggle="modal" data-target="#Modal-3-of-1-prompt" class="btn btn-primary">Work</button>
                            </div>
                            <div class="item">
                                <h4>Find value of velocity<sub>final 2</sub></h4>
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
                            <img src="../images/kinetictwo.png" style="width:100%;height:350px;">
                        </div>
                        <div class="col-sm-2 col-xs-12 hidden-xs"></div>
                    </div>
                    <div id="Carousel-1-of-2" class="carousel slide text-center" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <h4>Find value of velocity<sub>initial 1</sub></h4>
                                <button data-toggle="modal" data-target="#Modal-1-of-2-prompt" class="btn btn-primary">Work</button>
                            </div>
                            <div class="item">
                                <h4>Find value of velocity<sub>initial 2</sub></h4>
                                <button data-toggle="modal" data-target="#Modal-2-of-2-prompt" class="btn btn-primary">Work</button>
                            </div>
                            <div class="item">
                                <h4>Find value of velocity<sub>final</sub></h4>
                                <button data-toggle="modal" data-target="#Modal-3-of-2-prompt" class="btn btn-primary">Work</button>
                            </div>
                        </div>
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#Carousel-1-of-2" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#Carousel-1-of-2" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-3">
                    <div class="row">
                        <div class="col-sm-2 col-xs-12 hidden-xs"></div>
                        <div class="col-sm-8 col-xs-12">
                            <img src="../images/kineticthree.png" style="width:100%;height:350px;">
                        </div>
                        <div class="col-sm-2 col-xs-12 hidden-xs"></div>
                    </div>
                    <div id="Carousel-1-of-3" class="carousel slide text-center" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <h4>Find value of velocity<sub>initial</sub></h4>
                                <button data-toggle="modal" data-target="#Modal-1-of-3-prompt" class="btn btn-primary">Work</button>
                            </div>
                            <div class="item">
                                <h4>Find value of velocity<sub>final 1</sub></h4>
                                <button data-toggle="modal" data-target="#Modal-2-of-3-prompt" class="btn btn-primary">Work</button>
                            </div>
                            <div class="item">
                                <h4>Find value of velocity<sub>final 2</sub></h4>
                                <button data-toggle="modal" data-target="#Modal-3-of-3-prompt" class="btn btn-primary">Work</button>
                            </div>
                        </div>
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#Carousel-1-of-3" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#Carousel-1-of-3" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
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
        <!-- Tab-1 Prompt-->
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
                                <label for="text1">First Mass</label>
                                <input class="form-control" id="text1" type="text">
                                <label for="text2">Second Mass</label>
                                <input class="form-control" id="text2" type="text">
                                <label for="text3">Velocity<sub>Initial 2</sub></label>
                                <input class="form-control" id="text3" type="text">
                                <label for="text4">Velocity<sub>Final 1</sub></label>
                                <input class="form-control" id="text4" type="text">
                                <label for="text5">Velocity<sub>Final 2</sub></label>
                                <input class="form-control" id="text5" type="text">
                            </div>
                        </form>
                        <button onclick="kineticFirstTabFirst()" class="btn btn-primary" data-dismiss="modal">Solve</button>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default" data-dismiss="modal">
                             Cancel
                        </button>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="Modal-2-of-1-prompt" role="dialog">
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
                                <label for="textb1">First Mass</label>
                                <input class="form-control" id="textb1" type="text">
                                <label for="textb2">Second Mass</label>
                                <input class="form-control" id="textb2" type="text">
                                <label for="textb3">Velocity<sub>Initial 1</sub></label>
                                <input class="form-control" id="textb3" type="text">
                                <label for="textb4">Velocity<sub>Final 1</sub></label>
                                <input class="form-control" id="textb4" type="text">
                                <label for="textb5">Velocity<sub>Final 2</sub></label>
                                <input class="form-control" id="textb5" type="text">
                            </div>
                        </form>
                        <button onclick="kineticSecondTabFirst()" class="btn btn-primary" data-dismiss="modal">Solve</button>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default" data-dismiss="modal">
                             Cancel
                        </button>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="Modal-3-of-1-prompt" role="dialog">
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
                                <label for="textc1">First Mass</label>
                                <input class="form-control" id="textc1" type="text">
                                <label for="textc2">Second Mass</label>
                                <input class="form-control" id="textc2" type="text">
                                <label for="textc3">Velocity<sub>Initial 1</sub></label>
                                <input class="form-control" id="textc3" type="text">
                                <label for="textc4">Velocity<sub>Initial 2</sub></label>
                                <input class="form-control" id="textc4" type="text">
                                <label for="textc5">Velocity<sub>Final 2</sub></label>
                                <input class="form-control" id="textc5" type="text">
                            </div>
                        </form>
                        <button onclick="kineticThirdTabFirst()" class="btn btn-primary" data-dismiss="modal">Solve</button>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default" data-dismiss="modal">
                             Cancel
                        </button>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="Modal-4-of-1-prompt" role="dialog">
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
                                <label for="textd1">First Mass</label>
                                <input class="form-control" id="textd1" type="text">
                                <label for="textd2">Second Mass</label>
                                <input class="form-control" id="textd2" type="text">
                                <label for="textd3">Velocity<sub>Initial 1</sub></label>
                                <input class="form-control" id="textd3" type="text">
                                <label for="textd4">Velocity<sub>Initial 2</sub></label>
                                <input class="form-control" id="textd4" type="text">
                                <label for="textd5">Velocity<sub>Final 1</sub></label>
                                <input class="form-control" id="textd5" type="text">
                            </div>
                        </form>
                        <button onclick="kineticForthTabFirst()" class="btn btn-primary" data-dismiss="modal">Solve</button>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default" data-dismiss="modal">
                             Cancel
                        </button>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Tab-2 Prompt-->
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
                                <label for="text11">First Mass</label>
                                <input class="form-control" id="text11" type="text">
                                <label for="text22">Second Mass</label>
                                <input class="form-control" id="text22" type="text">
                                <label for="text23">Velocity<sub>Initial 2</sub></label>
                                <input class="form-control" id="text33" type="text">
                                <label for="text44">Velocity<sub>Final</sub></label>
                                <input class="form-control" id="text44" type="text">
                            </div>
                        </form>
                        <button data-dismiss="modal" onclick="kineticFirstTabSecond()" class="btn btn-primary btn-default pull-left">Solve </button>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default" data-dismiss="modal">
                             Cancel
                        </button>
                        
                    </div>
                </div>
            </div>
        </div>
        <div style="height:100%;" id="Modal-2-of-2-prompt" class="modal fade" role="dialog">
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
                                <label for="textb11">First Mass</label>
                                <input class="form-control" id="textb11" type="text">
                                <label for="textb22">Second Mass</label>
                                <input class="form-control" id="textb22" type="text">
                                <label for="textb33">Velocity<sub>Initial 1</sub></label>
                                <input class="form-control" id="textb33" type="text">
                                <label for="textb44">Velocity<sub>Final</sub></label>
                                <input class="form-control" id="textb44" type="text">
                            </div>
                        </form>
                        <button data-dismiss="modal" onclick="kineticSecondTabSecond()" class="btn btn-primary btn-default pull-left">Solve </button>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default" data-dismiss="modal">
                             Cancel
                        </button>
                        
                    </div>
                </div>
            </div>
        </div>
        <div style="height:100%;" id="Modal-3-of-2-prompt" class="modal fade" role="dialog">
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
                                <label for="textc11">First Mass</label>
                                <input class="form-control" id="textc11" type="text">
                                <label for="textc22">Second Mass</label>
                                <input class="form-control" id="textc22" type="text">
                                <label for="textc33">Velocity<sub>Initial 1</sub></label>
                                <input class="form-control" id="textc33" type="text">
                                <label for="textc44">Velocity<sub>Initial 2</sub></label>
                                <input class="form-control" id="textc44" type="text">
                            </div>
                        </form>
                        <button data-dismiss="modal" onclick="kineticThirdTabSecond()" class="btn btn-primary btn-default pull-left">Solve </button>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default" data-dismiss="modal">
                             Cancel
                        </button>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Tab-3 Prompt-->
        <div style="height:100%;" id="Modal-1-of-3-prompt" class="modal fade" role="dialog">
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
                                <label for="text11">First Mass</label>
                                <input class="form-control" id="text111" type="text">
                                <label for="text22">Second Mass</label>
                                <input class="form-control" id="text222" type="text">
                                <label for="text23">Velocity<sub>Final 1</sub></label>
                                <input class="form-control" id="text333" type="text">
                                <label for="text44">Velocity<sub>Final 2</sub></label>
                                <input class="form-control" id="text444" type="text">
                            </div>
                        </form>
                        <button data-dismiss="modal" onclick="kineticFirstTabThird()" class="btn btn-primary btn-default pull-left">Solve </button>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default" data-dismiss="modal">
                             Cancel
                        </button>
                        
                    </div>
                </div>
            </div>
        </div>
        <div style="height:100%;" id="Modal-2-of-3-prompt" class="modal fade" role="dialog">
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
                                <label for="textb111">First Mass</label>
                                <input class="form-control" id="textb111" type="text">
                                <label for="textb222">Second Mass</label>
                                <input class="form-control" id="textb222" type="text">
                                <label for="textb333">Velocity<sub>Initial</sub></label>
                                <input class="form-control" id="textb333" type="text">
                                <label for="textb444">Velocity<sub>Final 2</sub></label>
                                <input class="form-control" id="textb444" type="text">
                            </div>
                        </form>
                        <button data-dismiss="modal" onclick="kineticSecondTabThird()" class="btn btn-primary btn-default pull-left">Solve </button>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default" data-dismiss="modal">
                             Cancel
                        </button>
                        
                    </div>
                </div>
            </div>
        </div>
        <div style="height:100%;" id="Modal-3-of-3-prompt" class="modal fade" role="dialog">
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
                                <label for="textc111">First Mass</label>
                                <input class="form-control" id="textc111" type="text">
                                <label for="textc222">Second Mass</label>
                                <input class="form-control" id="textc222" type="text">
                                <label for="textc333">Velocity<sub>Initial</sub></label>
                                <input class="form-control" id="textc333" type="text">
                                <label for="textc444">Velocity<sub>Final 1</sub></label>
                                <input class="form-control" id="textc444" type="text">
                            </div>
                        </form>
                        <button data-dismiss="modal" onclick="kineticThirdTabThird()" class="btn btn-primary btn-default pull-left">Solve </button>
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