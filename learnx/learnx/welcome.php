<?php
include('php/session.php');
include('includes/payment-check.php');
include('includes/subject-table.php');
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>LearnX - Dashboard</title>

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

        <!-- End Jumbtron -->
        <div class="jumbotron text-center" id="home">
            <h1><kbd>Dashboard</kbd></h1>
        </div>
        <!-- End Jumbotron -->

        <!-- Notification -->
        <?php include("includes/notification.php"); ?>
        <!-- End Notification -->

        <!--Content-->
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <p class="text-warning">
                        Solve Mathematics and Physical Sciences problems.
                    </p>
                </div>
                <div class="col-sm-2"></div>
            </div>

            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#menu1">Subjects</a></li>
                <li><a data-toggle="tab" href="#menu2">Profile</a></li>
                <li><a data-toggle="tab" href="#menu3">Help</a></li>
            </ul>

            <div class="tab-content">
                <div id="menu1" class="tab-pane fade in active">
                    <br>
                    <div class="list-group text-center">
                        <a href="#" class="list-group-item active"><i class="glyphicon glyphicon-list"></i> Active Subjects</a>
                        <a href="subject/mathematics/" class="list-group-item"><i class="glyphicon glyphicon-stats"></i> Mathematics</a>
                        <a href="subject/physics/" class="list-group-item"><i class="glyphicon glyphicon-scale"></i> Physical Sciences</a>
                    </div> 
                    <br>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <br>
                    <h3>Edit Profile</h3>
                    <div class="row">
                        <div class="col-sm-6">
                            <label>Name</label>
                            <input value="<?php echo $user_name; ?>" id="profile-name" placeholder="Name" type="text" class="form-control"/>
                        </div>
                        <div class="col-sm-6">
                            <label>Surname</label>
                            <input value="<?php echo $user_surname; ?>" id="profile-surname" placeholder="Surname" type="text" class="form-control"/>
                        </div>
                        <div class="col-sm-6">
                            <label>Phone Number</label>
                            <input value="<?php echo $user_phone; ?>" id="profile-phone" placeholder="Phone Number" type="text" class="form-control"/>
                        </div>
                        <div class="col-sm-6">
                            <label>Grade</label>
                            <select id="profile-grade" class="form-control">
                                <option value="<?php echo $user_grade; ?>"><?php echo $user_grade; ?></option>
                                <option value="Grade 9">Grade 9</option>
                                <option value="Grade 10">Grade 10</option>
                                <option value="Grade 11">Grade 11</option>
                                <option value="Grade 12">Grade 12</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label>School</label>
                            <input value="<?php echo $user_school; ?>" id="profile-school" placeholder="School" type="text" class="form-control"/>
                        </div>
                        <div class="col-sm-6">
                            <label>Province</label>
                            <select id="profile-province" class="form-control">
                                <option value="<?php echo $user_province; ?>"><?php echo $user_province; ?></option>
                                <option value="Limpopo">Limpopo</option>
                                <option value="North West">North West</option>
                                <option value="Gauteng">Gauteng</option>
                                <option value="KwaZulu-Natal">KwaZulu-Natal</option>
                                <option value="Northern Cape">Northern Cape</option>
                                <option value="Eastern Cape">Eastern Cape</option>
                                <option value="Western Cape">Western Cape</option>
                                <option value="Free State">Free State</option>
                                <option value="Mpumalanga">Mpumalanga</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label>Password</label>
                            <input id="profile-password" value="<?php echo $user_password; ?>" id="password" placeholder="Password" type="text" class="form-control"/>
                        </div>

                    </div>
                    <br>
                    <button id="user-save-profile" class="btn btn-primary btn-lg"><i class="glyphicon glyphicon-floppy-save"></i> Save</button>
                    <br><br>
                </div>
                <div id="menu3" class="tab-pane fade">

                    <!--Start of Tawk.to Script-->
                    <script type="text/javascript">
                        var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
                        (function () {
                            var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
                            s1.async = true;
                            s1.src = 'https://embed.tawk.to/5c33e317361b3372892ee60d/default';
                            s1.charset = 'UTF-8';
                            s1.setAttribute('crossorigin', '*');
                            s0.parentNode.insertBefore(s1, s0);
                        })();
                    </script>
                    <!--End of Tawk.to Script-->

                    <br>
                    <h3 class="">Help Desk</h3>
                    <p class="">If you have any problem send us a message, a typical response time is 2 hours!</p>

                    <div class="row">
                        <div class="col-sm-4">
                            <p class="text-info">Connect to us and we'll get back to you within 24 hours.</p>
                            <p><span style="color:#034f84;" class="glyphicon glyphicon-globe"></span> learnx.elabvine.com</p>
                            <p><span style="color:#034f84;" class="glyphicon glyphicon-phone"></span> +27 66 066 1480</p>
                            <p><span style="color:#034f84;" class="glyphicon glyphicon-envelope"></span> givenmakhobela@elabvine.com</p>
                        </div>
                        <div class="col-sm-8">
                            <div>
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <input class="form-control" id="subject" placeholder="Your Subject" type="text" required>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <input class="form-control" id="mail-email" placeholder="Your Email" type="email" required>
                                    </div>
                                </div>
                                <textarea class="form-control" id="message" placeholder="Your Message" rows="5"></textarea>
                                <br>
                                <div class="row">
                                    <div class="col-sm-12 form-group">
                                        <button class="btn btn-primary btn-lg pull-right" id="help-center-button">Send</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>

        </div>
        <!--End Content-->


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