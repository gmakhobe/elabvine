<?php
include('../../php/session.php');
//Subject
$subject = "Mathematics";
//App name
$app_name = "Maths Lab";
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Maths Lab</title>
        <!-- Headers -->
        <?php include("../../includes/header-subject.php"); ?>
        <!-- End Headers -->

        <!-- Script -->
        <script src="../../js/jquery.min.js"></script>
        <!-- End Script -->
        <style> 
            .mylist a:hover {
                text-decoration: none;
                color: #3b3a30;
            }
        </style>
    </head>

    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

        <!--Navbar-->
        <?php include("../../includes/navigation-subject.php"); ?>
        <!--Navbar end-->

        <!--Jumbotron-->
        <?php include("../../includes/jumbotron-subject.php"); ?>
        <!--End Jumbotron-->


        <div id="Chapters">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <ul class="list-group text-left">
                            <a class="list-group-item" href="algebra/index.php">
                                <h4>Algebra</h4>
                            </a>
                            <a class="list-group-item" href="patterns/index.php">
                                <h4>Sequences and Series</h4>
                            </a>
                            <a class="list-group-item" href="functions/index.php">
                                <h4>Functions</h4>
                            </a>
                            <a class="list-group-item" href="finance/index.php">
                                <h4>Financial Mathematics</h4>
                            </a>
                            <a class="list-group-item" href="calculus/index.php">
                                <h4>Calculus</h4>
                            </a>
                            <a class="list-group-item" href="analytical/index.php">
                                <h4>Analytical Geometry</h4>
                            </a>
                        </ul>

                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
        </div>
        <br>
        <!-- Footer -->
        <?php include("../../includes/footer-subject.php"); ?>
        <!-- End Footer -->


        <script>
            $(document).ready(function () {
                // Initialize Tooltip
                $('[data-toggle="tooltip"]').tooltip();

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
            })
        </script>

    </body>

</html>