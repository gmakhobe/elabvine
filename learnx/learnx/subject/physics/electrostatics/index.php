<?php
include('../../../php/session.php');
//App name
$app_name = "Physics Lab";
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Electrostatics | Physics Lab</title>
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
                <h2>Electrostatics</h2>

            </div>
        </div>
        <div id="myCarousel-second" class="carousel slide text-center" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <h4>Electrostatics</h4>
                    <p>
                        is the study of static (rest or stationary) positive or negative charges.
                    </p>
                    <h4>Coulombs Law</h4>
                    <p>
                        Coloumb’s Law is the electrostatic force of attraction or repulsion between two charged objects is directly proportional to the product of the charges and inversely proportional to the square of the distance between their centres.
                    </p>
                </div>
                <div class="item">
                    <h4>Electrical Charge</h4>
                    <p>
                        At the atomic level, charge is associated with protons and electrons. They have the same magnitude of charge, but their charge is opposite in sign. Protons have Positive charge and Electrons have Negative charge. The symbol for a proton is p + and the
                        symbol for an electron is e.
                    </p>
                    <div id="animated_divv">
                        <img src="../images/electrostatics-1.png" width="100%" height="350px">
                    </div>
                    <div style="clear:both;">
                        <center>
                            <img src="../images/pointer.png" height="45px" width="45px">
                            <br> Above is a structure which represents a charge at an atomic level.
                            <hr>
                        </center>
                    </div>
                </div>
                <div class="item">
                    <h4>The Law of Conservation of Charge</h4>
                    <p>
                        When two charged spheres are brought into contact with each other, electrons flow from the sphere with more electrons to the with fewer electrons.
                    </p>
                    <div id="animated_divv">
                        <img src="../images/electrostatics-2.png" width="100%" height="350px" />
                    </div>
                    <div style="clear:both;">
                        <center>
                            <img src="../images/pointer.png" height="45px" width="45px" />
                            <br> Above is a structure which represents conserved charges.
                            <hr>
                        </center>
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
            <h3 class="text-center">Electrostatics</h3>
            <div class="row text-center">
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <p>F = k &times; <sup>(Q<small><sub>1</sub></small>&times;Q<small><sub>2</sub></small>)</sup> &frasl; <sub>r<small><sup>2</sup></small></sub></p>
                        <a href="electric_force.php">
                            <button class="btn">Go</button>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <p>E = K &times; <sup>Q</sup>&frasl;<sub>r<small><sup>2</sup></small></sub></p>
                        <a href="energy.php">
                            <button class="btn">Go</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <p>Q = <sup>(Q<small><sub>1</sub></small>&times;Q<small><sub>2</sub></small>)</sup> &frasl; <sub>2</sub></p>
                        <a href="charge.php">
                            <button class="btn">Go</button>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <p><small>number of electrons = <sup>total charge</sup> &frasl; <sub>charge of an electron</sub></small></p>
                        <a href="number_of_elctrons.php">
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