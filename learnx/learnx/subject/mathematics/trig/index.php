<?php
   include('../../session.php');
   include('../../counter.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="../img/favicon.png">
    <title>Maths Lab|Trig Functions</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../../../css/bootstrap.css" rel="stylesheet">
    <link href="../../../css/mystyle.css" rel="stylesheet">
    <link rel="stylesheet" href="../dist/katex.min.css">
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
                <a class="navbar-brand" href="#myPage">Maths Lab</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../index.php">Home</a></li>
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

    <div id="Chapters">
        <div class="container">
        <div class="alert alert-warning">
                <div class="row text-center">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <p class="text-warning">
                            Below are key explainations for exam purposes and E-LabVine solver under key explainations.
                        </p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
        </div>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <h2 class="text-center">Trig Functions</h2>
                    <div class="well well-sm">
                        <p class="text-left">Sine Function : y = a sinb (x + p) + q</p>
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td>X</td>
                                    <td>-360</td>
                                    <td>-270</td>
                                    <td>-180</td>
                                    <td>-90</td>
                                    <td>0</td>
                                    <td>90</td>
                                    <td>180</td>
                                    <td>270</td>
                                    <td>360</td>
                                </tr>
                                <tr>
                                    <td>Y</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>-1</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>-1</td>
                                    <td>0</td>
                                </tr>
                            </tbody>
                        </table>
                        <div id="sine-graph" style="height: 400px; width: 100%";></div>
                    </div>
                    <h4>Cosine Function</h4>
                    <div class="well well-sm">
                        <p class="text-left">Cosine Function : y = a cosb (x + p) + q</p>
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td>X</td>
                                    <td>-360</td>
                                    <td>-270</td>
                                    <td>-180</td>
                                    <td>-90</td>
                                    <td>0</td>
                                    <td>90</td>
                                    <td>180</td>
                                    <td>270</td>
                                    <td>360</td>
                                </tr>
                                <tr>
                                    <td>Y</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>-1</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>-1</td>
                                    <td>0</td>
                                    <td>1</td>
                                </tr>
                            </tbody>
                        </table>
                        <div id="cosine-graph" style="height: 400px; width: 100%;"></div>
                    </div>
                    <h4>Tangent Function</h4>
                    <div class="well well-sm">
                        <p class="text-left">Tangent Function : y = a tanb (x + p) + q</p>
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td>X</td>
                                    <td>-180</td>
                                    <td>-135</td>
                                    <td>-90</td>
                                    <td>-45</td>
                                    <td>0</td>
                                    <td>45</td>
                                    <td>90</td>
                                    <td>135</td>
                                    <td>180</td>
                                    <td>225</td>
                                    <td>270</td>
                                    <td>315</td>
                                    <td>360</td>
                                </tr>
                                <tr>
                                    <td>Y</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>NULL</td>
                                    <td>-1</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>NULL</td>
                                    <td>-1</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>NULL</td>
                                    <td>-1</td>
                                    <td>0</td>
                                </tr>
                            </tbody>
                        </table>
                        <div id="tangent-graph" style="height: 400px; width: 100%;"></div>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </div>

    <div class="container">
        <h3 class="text-center">Solver Section</h3>
        <p class="text-center">Choose below to solve.<br><span class="text-info">And remember to use solver have scenario data to be solved!</span></p>
        <h3 class="text-center">Trig Functions</h3>
        <div class="row text-center">
            <div class="col-sm-4">
                <div class="thumbnail">
                    <p><b>Sketch</b></p>
                    <p>Sine Function : y = a sinb (x + p) + q</p>
                    <a href="sine.php">
                        <button class="btn" data-toggle="modal" data-target="#myModal">Go</button>
                    </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <p><b>Sketch</b></p>
                    <p>Cosine Function : y = a cosb (x + p) + q</p>
                    <a href="cosine.php">
                        <button class="btn" data-toggle="modal" data-target="#myModal">Go</button>
                    </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <p><b>Sketch</b></p>
                    <p>Tangent Function : y = a tanb (x + p) + q</p>
                    <a href="tangent.php">
                        <button class="btn" data-toggle="modal" data-target="#myModal">Go</button>
                    </a>
                </div>
            </div>
        </div>
        
    </div>

        <footer class="container text-center">
            <p>E-LabVine &copy; 2016-<?php echo date("Y");?> all rights reserved</p>
         </footer>

    <script src="../../../js/jquery.min.js"></script>
    <script src="../../../js/bootstrap.min.js"></script>
    <script src="../js/canvasjs.min.js"></script>
    <script>
         var Sine_Function = new CanvasJS.Chart("sine-graph", {
                title: {
                    text: "The sine function Graph"
                },
                data: [{
                    type: "spline",
                    dataPoints: [
                      { x: -360, y: 0 },
                      { x: -270, y: 1 },
                      { x: -180, y: 0 },
                      { x: -90, y: -1 },
                      { x: 0, y: 0},
                      { x: 90, y: 1},
                      { x: 180, y: 0 },
                      { x: 270, y: -1 },
                      { x: 360, y: 0 }
                    ]
                }]
            });
            Sine_Function.render();

            var Cosine_Function = new CanvasJS.Chart("cosine-graph", {
                title: {
                    text: "The cosine function Graph"
                },
                data: [{
                    type: "spline",
                    dataPoints: [
                      { x: -360, y: 1 },
                      { x: -270, y: 0 },
                      { x: -180, y: -1 },
                      { x: -90, y: 0 },
                      { x: 0, y: 1},
                      { x: 90, y: 0},
                      { x: 180, y: -1 },
                      { x: 270, y: 0 },
                      { x: 360, y: 1 }
                    ]
                }]
            });
            Cosine_Function.render();

            var Tangent_Function = new CanvasJS.Chart("tangent-graph", {
                title: {
                    text: "The tangent function Graph"
                },
                data: [{
                    type: "spline",
                    dataPoints: [
                      { x: -180, y: 0 },
                      { x: -135, y: 1 },
                      { x: -90, y: undefined },
                      { x: -45, y: -1 },
                      { x: 0, y: 0},
                      { x: 45, y: 1},
                      { x: 90, y: undefined },
                      { x: 135, y: -1 },
                      { x: 180, y: 0 },
                      { x: 225, y: 1 },
                      { x: 270, y: undefined },
                      { x: 315, y: -1 },
                      { x: 360, y: 0 }
                    ]
                }]
            });
            Tangent_Function.render();

        /*var trace1 = {
            x: [-180, -135],
            y: [0, 1],
            type: 'scatter'
        };

        var trace2 = {
            x: [-45, 0, 45],
            y: [-1, 0, 1],
            type: 'scatter'
        };

        var trace3 = {
            x: [135, 180, 225],
            y: [-1, 0, 1],
            type: 'scatter'
        };

        var trace4 = {
            x: [315, 360],
            y: [-1, 0],
            type: 'scatter'
        };

        var data = [trace1, trace2, trace3, trace4];

        Plotly.newPlot('tangent-graph', data);
        */

        $(document).ready(function() {
            // Initialize Tooltip
            $('[data-toggle="tooltip"]').tooltip();

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
        })
    </script>

</body>

</html>