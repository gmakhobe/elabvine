<?php
include('../../../php/session.php');
//App name
$app_name = "Physics Lab";
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Work, Energy and Power | Physics Lab</title>
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
        <div id="content" class="container">

            <div class="slideanim">
                <h2 class="text-center">Work, Energy and Power</h2>
                <div class="row">
                    <div class="col-sm-2 hidden-xs"></div>
                    <div class="col-sm-8 col-xs-12">
                        <h4>Work</h4>
                        <p>
                            is defined as the product of the force parallel to the movement of an object and the displacement of the object.
                        </p>
                        <center><img src="../images/work-sup1-pic.gif" style="width:100%;height:250px;"></center>
                        <br>
                        <h4>Energy</h4>
                        <p>
                            The ability to do work.
                        </p>
                        <h4>Conservative Force</h4>
                        <p>
                            is defined as a force for which the work done in moving an object between two points is independent of the path taken. Examples are gravitational force, the elastic force in a spring and electrostatic forces (coulomb forces).
                        </p>
                        <center><img src="../images/work-sup2-pic.gif" style="width:100%;height:250px;"></center>
                        <h4>Non-Conservative Force</h4>
                        <p>
                            is defined as a force for which the work done in moving an object between two points depends on the path taken. Examples are frictional force, air resistance, tension in a cable, etc.
                        </p>
                        <h4>Power</h4>
                        <p>
                            Power is the rate at which work is done or energy is transferred (or converted).
                        </p>
                        <h4>Principle of conservation of mechanical energy</h4>
                        <p>
                            states that the total mechanical energy (sum of gravitational potential energy and kinetic energy) in an isolated system remains constant. (A system is isolated when the resultant/net external force acting on the system is zero.)
                        </p>
                    </div>
                    <div class="col-sm-2 hidden-xs"></div>
                </div>
            </div>

            <h3 class="text-center">Solver Section</h3>
            <p class="text-center">Choose below to solve.<br><span class="text-info">And remember to use solver have scenario data to be solved!</span></p>
            <h3 class="text-center">Work, Energy and Power</h3>
            <div class="row text-center">
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <p>W<sub>force</sub> = F<sub>type</sub> &times; &Delta;x/y &times; cos&Theta;</p>
                        <a href="work_done.php">
                            <button class="btn">Go</button>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <p>W<sub>net</sub> = F<sub>type</sub> &times; &Delta;x/y &times; cos&Theta; &#43; F<sub>type</sub> &times; &Delta;x/y &times; cos&Theta;</p>
                        <a href="net_work_done.php">
                            <button class="btn">Go</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <p>&Delta;k = F<sub>g</sub> &times; &Delta;y &times; cos&Theta; &#43; F<sub>T</sub> &times; &Delta;x/y &times; cos&Theta; &#43; F<sub>f</sub> &times; &Delta;x/y &times; cos&Theta;</p>
                        <a href="change_in_kinetic_energy.php">
                            <button class="btn">Go</button>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <p>W<sub>nc</sub> = &Delta;E<sub>p</sub> &#43; &Delta;E<sub>k</sub></p>
                        <a href="none_consecutive_force.php">
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