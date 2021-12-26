<?php
include("../php/session.php");
include("includes/configs.php");
//Tutoring Request
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
    <head>
        <!-- Site Title -->
        <title>Wallet</title>
        <!-- Meta Description -->
        <meta name="description" content="<?php echo $companyuri; ?> Wallet">      
        <!-- Header -->
        <?php include("headers.php"); ?>
        <script src="../js/w3.js"></script>
    </head>
    <body>	

        <!-- Navigation -->
        <?php include("$nav_1"); ?>
        <!-- start banner Area -->
        <section class="banner-area relative about-banner" id="home">	
            <div class="overlay overlay-bg"></div>
            <div class="container">				
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="about-content col-lg-12">
                        <h1 class="text-white">
                            Wallet				
                        </h1>	
                        <p class="text-white link-nav"><a href="index.php">Dashboard </a>  <span class="lnr lnr-arrow-right"></span>  <a href="wallet.php"> Wallet</a></p>
                    </div>		
                </div>
            </div>
        </section>
        <!-- End banner Area -->
        <!-- Main Content Area -->
        <!-- End top-category-widget Area -->
        <section class="post-content-area section-gap">
            <!-- notifications Area -->
            <div class="container" id="notifications-section"></div>
            <!-- End notifications Area -->
            <div class="container">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#menu1">Account Summary</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu2">Buy Lessons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu3">Load Wallet</a>
                    </li>
                </ul>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">

                        <div class="tab-content">
                            <div class="tab-pane container active" id="menu1">
                                <div class="pt-30" id="menu-1"></div>
                            </div>
                            <div class="tab-pane container fade" id="menu2">

                                <div class="lessons pt-30">

                                    <label>Choose Grade:</label>

                                    <select class="form-control" id="grade">
                                        <option value="1">Grade 1</option>
                                        <option value="2">Grade 2</option>
                                        <option value="3">Grade 3</option>
                                        <option value="4">Grade 4</option>
                                        <option value="5">Grade 5</option>
                                        <option value="6">Grade 6</option>
                                        <option value="7">Grade 7</option>
                                        <option value="8">Grade 8</option>
                                        <option value="9">Grade 9</option>
                                        <option value="10">Grade 10</option>
                                        <option value="11">Grade 11</option>
                                        <option value="12">Grade 12</option>
                                    </select>
                                    <br>
                                    <button onclick="lessonsSlide.next()" class="genric-btn info-border circle arrow">Next <span class="lnr lnr-arrow-right"></span></button>

                                </div>

                                <div class="lessons pt-30">

                                    <h4 id="grades-text"></h4>

                                    <label>Choose Package:</label>

                                    <select class="form-control" id="grade1-10">
                                        <optgroup label="Once Off Lesson">
                                            <option value="270">1 Hour Lesson | R270</option>
                                        </optgroup>
                                        <optgroup label="4 Lessons">
                                            <option value="1026">1 Hour/Week | R1026</option>
                                        </optgroup>
                                        <optgroup label="8 Lessons">
                                            <option value="2009">2 Hour/Week | R2009</option>
                                        </optgroup>
                                        <optgroup label="12 Lessons">
                                            <option value="2916">3 Hour/Week | R2916</option>
                                        </optgroup>
                                    </select>

                                    <select class="form-control" id="grade-11">
                                        <optgroup label="Once Off Lesson">
                                            <option value="270">1 Hour Lesson | R270</option>
                                        </optgroup>
                                        <optgroup label="4 Lessons">
                                            <option value="1015">1 Hour/Week | R1015</option>
                                        </optgroup>
                                        <optgroup label="8 Lessons">
                                            <option value="1987">2 Hour/Week | R1987</option>
                                        </optgroup>
                                        <optgroup label="12 Lessons">
                                            <option value="2884">3 Hour/Week | R2884</option>
                                        </optgroup>
                                    </select>

                                    <select class="form-control" id="grade-12">
                                        <optgroup label="Once Off Lesson">
                                            <option value="270">1 Hour Lesson | R270</option>
                                        </optgroup>
                                        <optgroup label="4 Lessons">
                                            <option value="1080">1 Hour/Week | R1080</option>
                                        </optgroup>
                                        <optgroup label="8 Lessons">
                                            <option value="2160">2 Hour/Week | R2160</option>
                                        </optgroup>
                                        <optgroup label="12 Lessons">
                                            <option value="3240">3 Hour/Week | R3240</option>
                                        </optgroup>
                                    </select>
                                    <br>
                                    <button onclick="lessonsSlide.previous()" class="genric-btn danger-border circle arrow"> <span class="lnr lnr-arrow-left"></span> Previous</button>  <button id="button-buy-lessons" class="genric-btn info-border circle arrow">Buy</button>
                                </div>



                            </div>
                            <div class="tab-pane container fade" id="menu3">
                                <div class="pt-30">
                                    <?php include("includes/wallet-deposit.php"); ?>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-1"></div>
                </div>
            </div>
        </section>
        <!-- End Main Content Area -->

        <!-- Footer -->
        <script>
            var lessonsSlide = w3.slideshow(".lessons", 0);
        </script>
        <?php include("footer.php"); ?>
        <script>
            $(function () {
                hideOne();
                //Load Summary
                function accountSummary() {
                    $.post("../php/index.php",
                            {
                                reqId: "loadAccountSummary"
                            },
                            function (data, status) {
                                $("#menu-1").html(data);
                            }
                    );
                }
                //load
                accountSummary();
                //Submit amout
                $("#button-amount-submit").click(function () {
                    var $amount = $("#amount").val();
                    if ($amount == "" || $amount == undefined) {
                        alertify.alert("Alert", "Enter a valid number.");
                    } else if ($amount < 25) {
                        alertify.alert("Alert", "Minimum amount is R25.");
                    } else if ($amount => 25) {
                        window.location.href = "wallet-deposit.php?reqId=deposit&amount=" + $amount;
                    }
                });
                //KeyUp
                $("#grade").change(function () {
                    var $grade = $("#grade").val();
                    if ($grade < 11) {
                        hideOne();
                    } else if ($grade == 11) {
                        hideTwo();
                    } else if ($grade == 12) {
                        hideThree();
                    }
                });
                //functions
                function hideOne() {
                    $("#grade1-10").show();
                    $("#grade-11").hide();
                    $("#grade-12").hide();
                    $("#grades-text").text("Grade 1 to Grade 10");

                }
                function hideTwo() {
                    $("#grade1-10").hide();
                    $("#grade-11").show();
                    $("#grade-12").hide();
                    $("#grades-text").text("Grade 11 only");
                }
                function hideThree() {
                    $("#grade1-10").hide();
                    $("#grade-11").hide();
                    $("#grade-12").show();
                    $("#grades-text").text("Grade 12 only");
                }
                //Buy lessons
                $("#button-buy-lessons").click(function () {
                    alertify.confirm("Are you sure you want to buy this package?",
                            function () {
                                buyLesson();
                            },
                            function () {
                                alertify.error('Cancel');
                            });
                });
                //Buy Lesson
                function buyLesson(){
                   var $grade = $("#grade").val();
                    if ($grade < 11) {
                        var $amount =  $("#grade1-10").val();
                    } else if ($grade == 11) {
                         var $amount =  $("#grade-11").val();
                    } else if ($grade == 12) {
                        var $amount =  $("#grade-11").val();
                    }
                    //post
                    $.post("../php/index.php",
                    {
                        reqId: "buyLessons",
                        amount: $amount
                    },
                    function(data, status){
                        var $data = data.replace(/ /g, "");
                        if($data == "success"){
                             alertify.alert("Alert", "Lesson(s) successfully bought.");
                                setTimeout(function () {
                                    window.location.href = "wallet.php"
                                }, 2500)
                        }else{
                            alertify.alert("Alert", "An error occured please try again.");
                        }
                    });
                    
                }
            });
        </script>

    </body>
</html>