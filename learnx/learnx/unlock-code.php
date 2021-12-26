<?php
include('php/session.php');
//Req Id
if(!isset($_REQUEST["req"])){
    $display = "includes/display-unlock-code.php";
}else{
    
    if($_REQUEST["req"] == "how-to-unlock-learnx-app"){
        $display = "includes/display-how-to-unlock-learnx-app.php";
    }else{
         $display = "includes/display-unlock-code.php";
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Unlock LearnX</title>

        <!-- Headers -->
        <?php include("includes/header.php"); ?>
        <!-- End Headers -->

        <!-- Script -->
        <script src="js/jquery.min.js"></script>
        <!-- End Script -->

        <style>


        </style>
    </head>

    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

        <!--Navbar-->
        <?php include("includes/dashboard-navigation.php"); ?>
        <!--Navbar end-->

        <!-- Notification -->
        <?php include("includes/space.php"); ?>
        <!-- End Notification -->

        <?php include("$display");?>

        <!--Footer-->
        <?php include("includes/footer.php"); ?>
        <!--End Footer-->
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
            })
        </script>
        <!--JS links end-->
    </body>
</html>