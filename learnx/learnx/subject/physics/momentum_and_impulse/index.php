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
        <!-- End Script -->
    </head>


    <body id="myPage">

        <!--Navbar-->
        <?php include("../../../includes/navigation-chapter.php"); ?>
        <!--Navbar end-->

        <!-- Container (Chapters Section) -->
        <div id="content" class="container text-center">
            
            <div class="slideanim">
                <h2>Momentum and Impulse</h2>

            </div>

            <h3 class="text-center">Solver Section</h3>
            <p class="text-center">Choose below to solve.<br><span class="text-info">And remember to use solver have scenario data to be solved!</span></p>
            <h3 class="text-center">Momentum and Impulse</h3>
            <div class="row text-center">
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <p><b>Momentum</b></p>
                        <p>p = m &times; v</p>
                        <a href="momentum.php">
                            <button class="btn">Go</button>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <p><b>Change in momentum</b></p>
                        <p>&Delta;p = mv<sub>f</sub> &minus; mv<sub>i</sub></p>
                        <a href="change_in_momentum.php">
                            <button class="btn">Go</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <p><b>Impulse</b></p>
                        <p>F<sub>net</sub> = <sup>&Delta;p</sup> &frasl; <sub>&Delta;t</sub></p>
                        <a href="impulse.php">
                            <button class="btn">Go</button>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <p><b>Linear momentum</b></p>
                        <p>&Element; p<sub>i</sub> = &Element; p<sub>f</sub></p>
                        <a href="kinetic_equilibrium.php">
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