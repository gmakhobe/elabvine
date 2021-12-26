<?php
   include('../../session.php');
   include('../../counter.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Physics Lab | Videos</title>
    <link rel="icon" href="../img/favicon.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../../../css/bootstrap.css" rel="stylesheet">
    <link href="../../../css/mystyle.css" rel="stylesheet">
    <script src="../../../js/jquery.min.js"></script>
    <script src="../../../js/bootstrap.min.js"></script>
    <script src="../../../js/w3.js"></script>
    <style>
    #animated_divv3 {
            background-color: #76D7EA;
            border-radius: 20px;
            width: 100%;
            height: 180px;
        }
        
        #animated_divv {
            background-color: #034f84;
            border-radius: 20px;
            width: 100%;
            height: 350px;
        }
        
        .modal-header,
        .modal-footer {
            background-color: #034f84 !important;
        }
        video{
            border:5px solid black;
            width:100%;
            height:200px;
        }
    </style>


</head>

<body id="myPage">

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a href="#myPage" class="navbar-brand active">Physics Lab</a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../">Home</a></li>
                    <li><a href="../../../logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron text-center">
        <h1>Digital Solution Platform</h1>
        <p>Place where you will never fail again</p>
        <h2>Physics Is Easy With E-LabVine</h2>
    </div>

    <!-- Container (Chapters Section) -->
    <div id="content" class="container text-center">
            <div class="alert alert-warning">
                <div class="row text-center">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <p class="text-warning">
                            Video gallery for any chapter of choice use buttons bellow the gallery (previous | next).
                        </p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
        <div class="slideanim">
            <h2>Video Tutorials</h2>
        </div>

        <div class="row">
            <div class="col-sm-4">
                
            </div>
            <div class="col-sm-4">
                <div class="slide">
                <h4>Physical Constants</h4>
                <video controls preload>
                    <source src="../videos/physicalconstant.mp4" type="video/mp4">
                </video>
            </div>
            <div class="slide">
                <h4>Mechanics</h4>
                <video controls preload>
                    <source src="../videos/revision-mechanics.mp4" type="video/mp4">
                </video>
            </div>
            <div class="slide">
                <h4>Momentum and Impulse</h4>
                <video controls preload>
                    <source src="../videos/momentumandimpulses.mp4" type="video/mp4">
                </video>
            </div>
            <div class="slide">
                <h4>Vertical Projectile</h4>
                <video controls preload>
                    <source src="../videos/verticalprojectile.mp4" type="video/mp4">
                </video>
            </div>
            <div class="slide">
                <h4>Work, Energy and Power</h4>
                <video controls preload>
                    <source src="../videos/workenergyandpower.mp4" type="video/mp4">
                </video>
            </div>
            <div class="slide">
                <h4>Doppler Effect</h4>
                <video controls preload>
                    <source src="../videos/dopplereffect.mp4" type="video/mp4">
                </video>
            </div>
            <div class="slide">
                <h4>Electostatics</h4>
                <video controls preload>
                    <source src="../videos/electrostatics.mp4" type="video/mp4">
                </video>
            </div>
            <div class="slide">
                <h4>Electric Circuit</h4>
                <video controls preload>
                    <source src="../videos/electriccircuit.mp4" type="video/mp4">
                </video>
            </div>
            <div class="slide">
                <h4>Electrodynamics</h4>
                <video controls preload>
                    <source src="../videos/electrodynamics.mp4" type="video/mp4">
                </video>
            </div>
            </div>
            <div class="col-sm-4">
                
            </div>
        </div>

        <ul class="pager">
            <li onclick="mySlide.previous()"><a>Previous</a></li>
            <li onclick="mySlide.next()"><a>Next</a></li>
        </ul>
            
    </div>

    <footer class="container text-center">
        <p>E-LabVine &copy; 2016-<?php echo date("Y");?> all rights reserved</p>
    </footer>

    <script>
        mySlide = w3.slideshow(".slide", 0);

        $(document).ready(function() {
            // Add smooth scrolling to all links in navbar + footer link
            $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
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
                    }, 1000, function() {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });

            $(window).scroll(function() {
                $(".slideanim").each(function() {
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