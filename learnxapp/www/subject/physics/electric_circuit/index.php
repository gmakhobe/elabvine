<?php
include('../../../php/session.php');
//App name
$app_name = "Physics Lab";
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Electric Circuit | Physics Lab</title>
        <!-- Headers -->
        <?php include("../../../includes/header-chapter.php"); ?>
        <!-- End Headers -->

        <!-- Script -->
        <script src="../../../js/jquery.min.js"></script>
        <!-- End Script -->
    </head>

    <body id="myPage">

        <!--Navbar-->
        <?php include("../../../includes/navigation-chapter.php"); ?>
        <!--Navbar end-->

        <!-- Container (Chapters Section) -->
        <div id="content" class="container text-center">
            <div class="slideanim">
                <h2>Electric Circuit</h2>

            </div>
        </div>
        <div id="myCarousel-second" class="carousel slide text-center" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <h4>How current flows</h4>
                    <div id="animated_divv">
                        <image src="../images/current_flow.gif" width="100%" height="350px" />
                    </div>
                    <br>
                    <p class="text-info">
                        <b>Current flows from negative terminal to positive terminal in an electric circuit.</b>
                    </p>
                </div>
                <div class="item">
                    <h4>Light</h4>
                    <div id="animated_divv">
                        <image src="../images/resistorsincircuits.png" width="100%" height="350px" />
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel-second" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel-second" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>


            <h3 class="text-center">Solver Section</h3>
            <p class="text-center">Choose below to solve.<br><span class="text-info">And remember to use solver have scenario data to be solved!</span></p>
            <h3 class="text-center">Electric Circuit</h3>
            <h4 class="text-center text-info">Work done included formula</h4>
            <div class="row text-center">
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <p>W = V &times; Q</p>
                        <a href="work_done_one.php">
                            <button class="btn">Go</button>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <p>W = V &times; I &times; &Delta;t</p>
                        <a href="work_done_two.php">
                            <button class="btn">Go</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <p>W = I<sup>2</sup> &times; R &times; &Delta;t</p>
                        <a href="work_done_three.php">
                            <button class="btn">Go</button>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <p>W = <sup>V<sup>2</sup> &times; &Delta;t</sup> &frasl; <sub>R</sub></p>
                        <a href="work_done_four.php">
                            <button class="btn">Go</button>
                        </a>
                    </div>
                </div>
            </div>

            <h4 class="text-center text-info">Power included formula</h4>
            <div class="row text-center">
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <p>P = <sup>W</sup> &frasl; <sub>&Delta;t</sub></p>
                        <a href="power_one.php">
                            <button class="btn">Go</button>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <p>P = V &times; I</p>
                        <a href="power_two.php">
                            <button class="btn">Go</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <p>P = I &times; R<sup>2</sup></p>
                        <a href="power_three.php">
                            <button class="btn">Go</button>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <p>P = <sup>V<sup>2</sup></sup> &frasl; <sub>R</sub></p>
                        <a href="power_four.php">
                            <button class="btn">Go</button>
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