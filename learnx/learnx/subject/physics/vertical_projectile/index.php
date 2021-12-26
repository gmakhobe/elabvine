<?php
include('../../../php/session.php');
//App name
$app_name = "Physics Lab";
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Vertical Projectile | Physics Lab</title>
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
                <h2 class="text-center">Vertical Projectile</h2>
            </div>


            <h3 class="text-center">Solver Section</h3>
            <p class="text-center">Choose below to solve.<br><span class="text-info">And remember to use solver have scenario data to be solved!</span></p>
            <h3 class="text-center">Vertical Projectile</h3>
            <div class="row text-center">
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <p>v<sub>f</sub> = v<sub>i</sub> + a&Delta;t</p>
                        <a href="vertical_projectile_first.php">
                            <button class="btn">Go</button>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <p>v<sub>f</sub><sup>2</sup> = v<sub>i</sub><sup>2</sup> &#43; 2a&sdot;&Delta;y</p>
                        <a href="vertical_projectile_second.php">
                            <button class="btn">Go</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <p>&Delta;y = v<sub>i</sub> &Delta; t + <sup>1</sup> &frasl; <sub>2</sub> a&Delta;t<sup>2</sup></p>
                        <a href="vertical_projectile_third.php">
                            <button class="btn">Go</button>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <p>&Delta;y = <sup>(v<sub>1</sub> &#43; v<sub>2</sub>)</sup> &frasl; <sub>2</sub> &times; &Delta;t</p>
                        <a href="vertical_projectile_forth.php">
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