<?php
   include('../../../session.php');
   include('../../counter.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Maths Lab | Question Papers</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../../../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../../css/mystyle.css" rel="stylesheet">
    <script src="../../../../js/jquery.min.js"></script>
    <script src="../../../../js/bootstrap.min.js"></script>

</head>

<body id="myPage">

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a href="#myPage" class="navbar-brand active">Maths Lab</a>
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
        <h2>Mathematics Is Easy With E-LabVine</h2>
    </div>

    <!-- Container (Chapters Section) -->
    <div id="content" class="container text-center">
            <div class="alert alert-warning">
                <div class="row text-center">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <p class="text-warning">
                            Download any question paper of choice and study guide designed for matrics.
                        </p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
        <div class="slideanim">
            <h2>Study Guides</h2>
            <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <h4>Mind The Gap Study Guide<br><a href="../DBE/dbestudyguides/physics/MTG Physics Gr 12 Web_1.pdf"><button class="btn btn-primary">Download</button></a></h4>
                    </div>
                    <div class="item">
                        <h4>Siyavula Study Guide<br><a href="siyavula/physics/Physical Sciences Gr12.pdf"><button class="btn btn-primary">Download</button></a></h4>
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
             <h2>Question Papers</h2>
             <div class="row">
             <div class="col-sm-2 hidden-xs"></div>
             <div class="col-sm-8 col-xs-12">
            <table class="table table-strapped table-bordered" style="color:white;">
                            <thead>
                                <tr style="text-align:center;color:white;font-style:bold;background-color:#034f84;">
                                    <th>2016</th>
                                    <th>Link</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="color:#034f84;">
                                    <td>June paper
                                        <br> <br> Memo
                                    </td>
                                    <td><a href="../DBE/dbequestionpapers/2016 june/Physical Sciences P1 May-June 2016 Eng.pdf"><button class="btn btn-primary">Download</button></a>
                                        <br><br>
                                        <a href="../DBE/dbequestionpapers/2016 june/Physical Sciences P1 May-June 2016 Memo Afr  Eng Final.doc"><button class="btn btn-primary">Download</button></a>
                                    </td>
                                </tr>
                                <tr style="color:#034f84;">
                                    <td>February paper
                                        <br> <br> Memo
                                    </td>
                                    <td><a href="../DBE/dbequestionpapers/2016 feb/Physical Sciences P1 Feb-March 2016 Eng.pdf"><button class="btn btn-primary">Download</button></a>
                                        <br> <br>
                                        <a href="../DBE/dbequestionpapers/2016 feb/Physical Sciences P1 Feb-March 2016 Eng  Afr Memo.pdf"><button class="btn btn-primary">Download</button></a>
                                    </td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr style="text-align:center;color:white;font-style:bold;background-color:#034f84;">
                                    <th>2015</th>
                                    <th>Link</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="color:#034f84;">
                                    <td>November paper
                                        <br> <br> Memo
                                    </td>
                                    <td><a href="../DBE/dbequestionpapers/2015 nov/Physical Sciences P1 Nov 2015 Eng.pdf"><button class="btn btn-primary">Download</button></a>
                                        <br> <br>
                                        <a href="../DBE/dbequestionpapers/2015 nov/Physical Sciences P1 Nov 2015 Memo Afr  Eng.pdf"><button class="btn btn-primary">Download</button></a>
                                    </td>
                                </tr>
                                <tr style="color:#034f84;">
                                    <td>February paper
                                        <br> <br> Memo
                                    </td>
                                    <td><a href="../DBE/dbequestionpapers/2015 feb/Physical Sciences P1 Feb-March 2015 Eng.pdf"><button class="btn btn-primary">Download</button></a>
                                        <br> <br>
                                        <a href="../DBE/dbequestionpapers/2015 feb/Physical Sciences P1 Feb-March 2015 Memo Afr  Eng.pdf"><button class="btn btn-primary">Download</button></a>
                                    </td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr style="text-align:center;color:white;font-style:bold;background-color:#034f84;">
                                    <th>2014</th>
                                    <th>Link</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="color:#034f84;">
                                    <td>November paper
                                        <br> <br>Memo
                                    </td>
                                    <td><a href="../DBE/dbequestionpapers/2014 nov/Physical Sciences P1 Nov 2014 Eng.pdf"><button class="btn btn-primary">Download</button></a>
                                        <br> <br>
                                        <a href="../DBE/dbequestionpapers/2014 nov/Physical Sciences P1 Nov 2014 Memo Afr  Eng.pdf"><button class="btn btn-primary">Download</button></a>
                                    </td>
                                </tr>
                                <tr style="color:#034f84;">
                                    <td>February paper
                                        <br> <br>Memo
                                    </td>
                                    <td><a href="../DBE/dbequestionpapers/2014 feb/Physical Sciences P1 Feb-March 2014 Eng.pdf"><button class="btn btn-primary">Download</button></a>
                                        <br> <br>
                                        <a href="../DBE/dbequestionpapers/2014 feb/Physical Sciences P1 Feb-March 2014 Memo Afr  Eng.pdf"><button class="btn btn-primary">Download</button></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    
                        <table class="table table-strapped table-bordered" style="color:white;">
                            <thead>
                                <tr style="text-align:center;color:white;font-style:bold;background-color:#034f84;">
                                    <th>2013</th>
                                    <th>Link</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="color:#034f84;">
                                    <td>November paper
                                        <br> <br>Memo
                                    </td>
                                    <td><a href="../DBE/dbequestionpapers/2013 nov/Physical Sciences P1 Nov 2013 Eng.pdf "><button class="btn btn-primary">Download</button></a>
                                        <br> <br>
                                        <a href="../DBE/dbequestionpapers/2013 nov/Physical Sciences P1 Nov 2013 Memo Afr Eng.pdf "><button class="btn btn-primary">Download</button></a>
                                    </td>
                                </tr>
                                <tr style="color:#034f84;">
                                    <td>February paper
                                        <br> <br>Memo
                                    </td>
                                    <td><a href="DBE/dbequestionpapers/2013 feb/Physical Sciences P1 Feb-March 2013 Eng.pdf "><button class="btn btn-primary">Download</button></a>
                                        <br> <br>
                                        <a href="DBE/dbequestionpapers/2013 feb/Physical Sciences P1 Feb-March 2013 Memo Afr Eng.pdf "><button class="btn btn-primary">Download</button></a>
                                    </td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr style="text-align:center;color:white;font-style:bold;background-color:#034f84;">
                                    <th>2012</th>
                                    <th>Link</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="color:#034f84;">
                                    <td>November paper
                                        <br> <br>Memo
                                    </td>
                                    <td><a href="../DBE/dbequestionpapers/2012 nov/NSC 2012 Physical Sciences P1 Nov 2012 Eng.pdf "><button class="btn btn-primary">Download</button></a>
                                        <br> <br>
                                        <a href="../DBE/dbequestionpapers/2012 nov/NSC 2012 Physical Sciences P1 Nov 2012 Memo Afr Eng.pdf "><button class="btn btn-primary">Download</button></a>
                                    </td>
                                </tr>
                                <tr style="color:#034f84;">
                                    <td>March paper
                                        <br> <br>Memo
                                    </td>
                                    <td><a href="../DBE/dbequestionpapers/2012 march/Febmarch 2012 NSC Physical Sciences P1 Feb-March 2012 Eng.pdf "><button class="btn btn-primary">Download</button></a>
                                        <br> <br>
                                        <a href="../DBE/dbequestionpapers/2012 march/Febmarch 2012 NSC Physical Sciences P1 Feb-March 2012 Memo Afr Eng.pdf "><button class="btn btn-primary">Download</button></a>
                                    </td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr style="text-align:center;color:white;font-style:bold;background-color:#034f84;">
                                    <th>2011</th>
                                    <th>Link</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="color:#034f84;">
                                    <td>November paper
                                        <br> <br>Memo
                                    </td>
                                    <td><a href="../DBE/dbequestionpapers/2011 Nov/Physical Sciences P1 Nov 2011 Eng.pdf "><button class="btn btn-primary">Download</button></a>
                                        <br> <br>
                                        <a href="../DBE/dbequestionpapers/2011 Nov/Physical Sciences P1 Nov 2011 Memo Afr Eng.pdf "><button class="btn btn-primary">Download</button></a>
                                    </td>
                                </tr>
                                <tr style="color:#034f84;">
                                    <td>February paper
                                        <br> <br>Memo
                                    </td>
                                    <td><a href="../DBE/dbequestionpapers/2011 march/Physical_Sciences_P1_Feb-March_2011_Eng.doc "><button class="btn btn-primary">Download</button></a>
                                        <br> <br>
                                        <a href="../DBE/dbequestionpapers/2011 march/Physical_Sciences_P1_Feb-March_2011_Memo_Eng.pdf "><button class="btn btn-primary">Download</button></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                        <div class="col-sm-2 hidden-xs"></div>
                        </div>
        </div>
    </div>



    <footer class="container text-center">
        <p>E-LabVine &copy; 2016-<?php echo date("Y");?> all rights reserved</p>
    </footer>

    <script>
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
                    }, 900, function() {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });

            $(window).scroll(function() {
                $(".slideanim").each(function() {
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