<?php
include('../../../php/session.php');
//App name
$app_name = "Physics Lab";
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Physical Constant | Physics Lab</title>
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
                <h2>Physical Constants</h2>
                <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <h4>Acceleration due to gravity<br>g<br><span>9.8 m&sdot;s<small><sup>-2</sup></small></span></h4>
                        </div>
                        <div class="item">
                            <h4>Universal gravitational constant<br>G<br><span>6.67 &times; 10<small><sup>&minus;11</sup></small> N&sdot;m<small><sup>2</sup></small>&sdot;kg<small><sup>&minus;2</sup></small></span></h4>
                        </div>
                        <div class="item">
                            <h4>Radius of the Earth<br>R<small><sub>E</sub></small><br><span>6.38 &times; 10<small><sup>6</sup></small> m </span></h4>
                        </div>
                        <div class="item">
                            <h4>Mass of the Earth<br>M<small><sub>E</sub></small><br><span>5.98 &times; 10<small><sup>24</sup></small> kg</span></h4>
                        </div>
                        <div class="item">
                            <h4>Speed of light in a vacuum<br>c<br><span>3.0 &times; 10<small><sup>8</sup></small> m&sdot;s<small><sup>&minus;1</sup></small></h4>
                        </div>
                        <div class="item">
                            <h4>Planck&apos;s constant<br>h<br><span>6.63 &times; 10<small><sup>&minus;34</sup></small> J&sdot;s</h4>
                        </div>
                        <div class="item">
                            <h4>Coulomb&apos;s constant<br>k<br><span>9.0 &times; 10<small><sup>9</sup></small> N&sdot;m<small><sup>2</sup></small>&sdot;C<small><sup>&minus;2</sup></small> </span></h4>
                        </div>
                        <div class="item">
                            <h4>Charge on electron<br>e<br><span>&minus;1.6 &times; 10<small><sup>&minus;19</sup></small> C </span></h4>
                        </div>
                        <div class="item">
                            <h4>Electron mass<br>m<small><sub>e</sub></small><br><span>9.11 &times; 10<small><sup>&minus;31</sup></small> kg</span></h4>
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr style="text-align:center;color:white;font-style:bold;background-color:#034f84;">
                                <th style="color: white;">Name</th>
                                <th style="color: white;">Symbol</th>
                                <th style="color: white;">Value</th>
                            </tr>
                            <tr>
                                <td>Acceleration due to gravity</td>
                                <td>g</td>
                                <td>9.8 m&sdot;s<small><sup>-2</sup></small></td>
                            </tr>
                            <tr>
                                <td>Universal gravitational constant</td>
                                <td>G</td>
                                <td>6.67 &times; 10<small><sup>&minus;11</sup></small> N&sdot;m<small><sup>2</sup></small>&sdot;kg<small><sup>&minus;2</sup></small> </td>
                            </tr>
                            <tr>
                                <td>Radius of the Earth</td>
                                <td>R<small><sub>E</sub></small></td>
                                <td>6.38 &times; 10<small><sup>6</sup></small> m </td>
                            </tr>
                            <tr>
                                <td>Mass of the Earth</td>
                                <td>M<small><sub>E</sub></small></td>
                                <td>5.98 &times; 10<small><sup>24</sup></small> kg</td>
                            </tr>
                            <tr>
                                <td>Speed of light in a vacuum</td>
                                <td>c</td>
                                <td>3.0 &times; 10<small><sup>8</sup></small> m&sdot;s<small><sup>&minus;1</sup></small></td>
                            </tr>
                            <tr>
                                <td>Planck&apos;s constant</td>
                                <td>h</td>
                                <td>6.63 &times; 10<small><sup>&minus;34</sup></small> J&sdot;s</td>
                            </tr>
                            <tr>
                                <td>Coulomb&apos;s constant</td>
                                <td>k</td>
                                <td>9.0 &times; 10<small><sup>9</sup></small> N&sdot;m<small><sup>2</sup></small>&sdot;C<small><sup>&minus;2</sup></small> </td>
                            </tr>
                            <tr>
                                <td>Charge on electron </td>
                                <td>e</td>
                                <td>&minus;1.6 &times; 10<small><sup>&minus;19</sup></small> C </td>
                            </tr>
                            <tr>
                                <td>Electron mass</td>
                                <td>m<small><sub>e</sub></small></td>
                                <td>9.11 &times; 10<small><sup>&minus;31</sup></small> kg </td>
                            </tr>
                        </tbody>
                    </table>
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
                        }, 900, function () {

                            // Add hash (#) to URL when done scrolling (default click behavior)
                            window.location.hash = hash;
                        });
                    } // End if
                });

                $(window).scroll(function () {
                    $(".slideanim").each(function () {
                        var pos = $(this).offset().top;

                        var winTop = $(window).scrollTop();
                        if (pos < winTop + 600) {
                            $(this).addClass("slide");
                        }
                    });
                });
            })
        </script>

    </body>

</html>