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
        <!-- End Script -->
    </head>

    <body id="myPage">

        <!--Navbar-->
        <?php include("../../../includes/navigation-chapter.php"); ?>
        <!--Navbar end-->

        <!-- Container (Chapters Section) -->
        <div id="content" class="container text-center">
            <h2>Doppler Effect</h2>

            <div id="myCarousel-second" class="carousel slide text-center" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <h4>Waves</h4>
                        <div id="animated_divv" style="background: black;">
                            <image src="../images/waves-pic.png" width="100%" height="350px" />
                        </div>
                        <p>
                            &sdot; <strong>Wavelength</strong> is the distance between two consecutive points in the wave which are in phase and is measured in metres (m).<br>
                            &sdot; <strong>Amplitude</strong> is the maximum particles from their equilibrium (rest) position.<br>
                            &sdot; <strong>Frequency</strong> is the number of complete waves passing a specific point per second and is measured in hertz (Hz).
                        </p>
                    </div>
                    <div class="item">
                        <h4>Light</h4>
                        <div id="animated_divv">
                            <image src="../images/color-spec.png" width="100%" height="350px" />
                        </div>
                        <p>
                            &sdot; The visible spectrum of light is just a small section of a much greater series of wavelengths called the electromagnetic spectrum.<br>
                            &sdot; The speed of light (and all other electromagnetic radiation) is constant 3.0 &times; 10<small><sup>8</sup></small> m&sdot;s<small><sup>&minus;1</sup></small>.<br>
                            &sdot; The colour of light depends on its frequency.<br>
                            &sdot; In the colour spectrum, red has the longest wavelength and lowest frequency and violet has the shortest wavelength and the highest frequency.
                        </p>
                    </div>
                    <div class="item">
                        <h4>Doppler Effect</h4>
                        <p>
                            is the change in frequency or pitch of the sound or the colour of light that is detected when the wave source and the observer move relative to each other.
                        </p>
                        <div id="animated_divv">
                            <img src="../images/doppler-effect.png" width="100%" height="350px"/>
                        </div>
                        <div style="clear:both;">
                            <center>
                                <img src="../images/pointer.png" height="45px" width="45px"/>
                                <br>
                                Above is an animation which represents a car approaching a listener.
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
                <h3 class="text-center">Doppler Effect</h3>
                <div class="row text-center">
                    <div class="col-sm-6">
                        <div class="thumbnail">
                            <p>&fnof;<sub>L</sub> = &fnof;<sub>S</sub> <sup>(V &#43; V<small><sub>L</sub></small>)</sup> &frasl; <sub>(V &minus; V<small><sub>S</sub></small>)</sub></p>
                            <a href="listener_towards.php">
                                <button class="btn">Go</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="thumbnail">
                            <p>&fnof;<sub>L</sub> = &fnof;<sub>S</sub> <sup>(V &minus; V<small><sub>L</sub></small>)</sup> &frasl; <sub>(V &#43; V<small><sub>S</sub></small>)</sub></p>
                            <a href="listener_away.php">
                                <button class="btn">Go</button>
                            </a>
                        </div>
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