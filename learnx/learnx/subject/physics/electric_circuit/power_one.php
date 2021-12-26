<?php
   include('../../session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <title>Physics Lab | Power</title>
  <link rel="icon" href="../img/favicon.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../../../css/bootstrap.css" rel="stylesheet">
    <link href="../../../css/mystyle.css" rel="stylesheet">
    <script src="../../../js/jquery.min.js"></script>
    <script src="../../../js/bootstrap.min.js"></script>
  <script src="../js/script.js"></script>
  <style>
    .modal-header,
    .modal-footer {
      background-color: #034f84 !important;
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
          <li><a href="index.php">Menu</a></li>
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
                            Below you can find solvers for your scenarios this chapter does not have images for guidelines.
                        </p>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
    <h2>Electric Circuit</h2>
    <div id="Carouse-1-of-1" class="carousel slide text-center" data-ride="carousel">
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <h4>Find the value of Power</h4>
          <button data-toggle="modal" data-target="#Modal-1-of-1-prompt" class="btn btn-primary">Work</button>
        </div>
        <div class="item">
          <h4>Find value of Work Done</h4>
          <button data-toggle="modal" data-target="#Modal-2-of-1-prompt" class="btn btn-primary">Work</button>
        </div>
        <div class="item">
          <h4>Find value of Time</h4>
          <button data-toggle="modal" data-target="#Modal-3-of-1-prompt" class="btn btn-primary">Work</button>
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#Carouse-1-of-1" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#Carouse-1-of-1" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="row">
      <div class="col-sm-2 hidden-xs"></div>
      <div class="col-sm-8 col-xs-12">
        <div id="display"></div>
      </div>
      <div class="col-sm-2 hidden-xs"></div>
    </div>

    <!--Modal List-->
    <div class="text-left">
      <div class="modal fade" id="Modal-1-of-1-prompt" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4> Scenario Solver</h4>
            </div>
            <div class="modal-body" style="height:50%;">
              <h4>Enter values given to solver</h4>
              <form>
                <div class="form-group">
                  <label for="text1">Work</label>
                  <input class="form-control" id="text1" type="text">
                  <label for="text2">&Delta; Time</label>
                  <input class="form-control" id="text2" type="text">
                </div>
              </form>
              <button onclick="power_one_power()" class="btn btn-primary" data-dismiss="modal">Solve</button>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-default" data-dismiss="modal">
                 Cancel
              </button>
              
            </div>
          </div>
        </div>
      </div>
      <!-- Tab-2-of-1 Prompt-->
      <div style="height:100%;" id="Modal-2-of-1-prompt" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4> Scenario Solver</h4>
            </div>
            <div class="modal-body">
              <h4>Enter values given to solver</h4>
              <form>
                <div class="form-group">
                   <label for="text11">Power</label>
                  <input class="form-control" id="text11" type="text">
                  <label for="text22">Time</label>
                  <input class="form-control" id="text22" type="text">
                </div>
              </form>
              <button data-dismiss="modal" onclick="dopplerBsecond()" class="btn btn-primary btn-default pull-left">Solve </button>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-default" data-dismiss="modal">
                 Cancel
              </button>
              
            </div>
          </div>
        </div>
      </div>
      <!-- Tab-3-of-1 Prompt-->
      <div style="height:100%;" id="Modal-3-of-1-prompt" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4> Scenario Solver</h4>
            </div>
            <div class="modal-body">
              <h4>Enter values given to solver</h4>
              <form>
                <div class="form-group">
                  <label for="text111">Power</label>
                  <input class="form-control" id="text111" type="text">
                  <label for="text222">Work</sub></label>
                  <input class="form-control" id="text222" type="text">
                </div>
              </form>
              <button data-dismiss="modal" onclick="dopplerBthird()" class="btn btn-primary btn-default pull-left">Solve </button>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-default" data-dismiss="modal">
                 Cancel
              </button>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Modal list end-->

    <footer class="container text-center">
      <p>E-LabVine &copy; 2016-
        <?php echo date("Y");?> all rights reserved</p>
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