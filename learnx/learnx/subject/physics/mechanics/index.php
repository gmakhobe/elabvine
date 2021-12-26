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
        <!-- End Script -->
    </head>

    <body id="myPage">

        <!--Navbar-->
        <?php include("../../../includes/navigation-chapter.php"); ?>
        <!--Navbar end-->

        <!-- Container (Chapters Section) -->
        <div id="content" class="container text-center">
            <div class="slideanim">
                <h2>Mechanics</h2>
            </div>

            <h3 class="text-center">Solver Section</h3>
            <p class="text-center">Choose below to solve.<br><span class="text-info">And remember to use solver have scenario data to be solved!</span></p>
            <h3 class="text-center">Mechanics</h3>
            <div class="row text-center">
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <p><b>Applied Force</b></p>
                        <p>F<sub>net</sub> = m &times; a</p>
                        <a href="applied_force.php">
                            <button class="btn" data-toggle="modal" data-target="#myModal">Go</button>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <p><b>Friction</b></p>
                        <p>f<sup>max</sup> = u &times; N</p>
                        <a href="friction.php">
                            <button class="btn" data-toggle="modal" data-target="#myModal">Go</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-sm-4">

                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <p><b>Weight</b></p>
                        <p>w = m &times; g</p>
                        <a href="weight.php">
                            <button class="btn" data-toggle="modal" data-target="#myModal">Go</button>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4">

                </div>

            </div>
            <div class="row text-center">
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <p><b>Universal Gravitation</b></p>
                        <p>F = G &times; <sup>(m<sub>1</sub> &times; m<sub>2</sub>)</sup> &frasl; <sub>r<sup>2</sup></sub></p>
                        <a href="gravitational_attraction.php">
                            <button class="btn" data-toggle="modal" data-target="#myModal">Go</button>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <p><b>Acceleration Gravitational Force</b></p>
                        <p>g = G &times; <sup>M</sup> &frasl; <sub>r<sup>2</sup></sub></p>
                        <a href="gravitational_force.php">
                            <button class="btn" data-toggle="modal" data-target="#myModal">Go</button>
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