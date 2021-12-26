<?php include("../../php/session.php"); ?>
<?php include("php/dashboard.php"); ?>
<?php include("php/account.php"); ?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>

        <title>Account</title>
        <meta name="description" content="Account - Members Area">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--Headers-->
        <?php include("headers.php"); ?>
        <!--End Headers-->
        <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>

        <script src="assets/js/lib/data-table/datatables.min.js"></script>
        <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
        <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
        <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
        <script src="assets/js/lib/data-table/jszip.min.js"></script>
        <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
        <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
        <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
        <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
        <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
        <script src="assets/js/lib/data-table/datatables-init.js"></script>

    </head>
    <body>

        <?php include("header-left.php"); ?>

        <!-- Right Panel -->

        <div id="right-panel" class="right-panel">

            <?php include("header-top.php"); ?>

            <div class="breadcrumbs">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Account</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li>Dashboard</li>
                                <li class="active">Account</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content mt-3">


                <div class="custom-tab">

                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active show" id="custom-nav-home-tab" data-toggle="tab" href="#custom-nav-home" role="tab" aria-controls="custom-nav-home" aria-selected="true">Profile</a>
                           
                            <!--<a class="nav-item nav-link" id="custom-nav-contact-tab" data-toggle="tab" href="#custom-nav-contact" role="tab" aria-controls="custom-nav-contact" aria-selected="false">Contact</a>-->
                        </div>
                    </nav>
                    <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="custom-nav-home" role="tabpanel" aria-labelledby="custom-nav-home-tab">

                            <div class="col-lg-5 col-md-5">

                                <h3>Profile</h3>
                                <p>Your profile contains information about you (your “account”) as well as some personal options related to using elabvine.</p>

                            </div>

                            <div class="col-lg-7 col-md-7">

                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Name</strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="emailaddress" class="form-control-label">Email Address</label></div>
                                            <div class="col-12 col-md-9"><input id="emailaddress" placeholder="Email Address" class="form-control" type="text" value="<?php echo $email; ?>" disabled="">
                                                <span class="help-block">Email Address can not be changed.</span>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="aname" class="form-control-label">Name and Surname</label></div>
                                            <div class="col-12 col-md-9"><input id="aname" placeholder="Name and Surname" class="form-control" type="text" value="<?php echo $name; ?>"></div>
                                        </div>
                                    </div>

                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Contact Info</strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="secondary-emailaddress" class="form-control-label">Secondary Email Address</label></div>
                                            <div class="col-12 col-md-9"><input id="secondary-emailaddress" placeholder="Secondary Email Address" class="form-control" type="email" value="<?php echo $seccondary_email; ?>">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="cnumber" class="form-control-label">Cell Number</label></div>
                                            <div class="col-12 col-md-9"><input type='tel' id="cnumber" placeholder="Cell Number" class="form-control" value="<?php echo $phone; ?>"></div>
                                        </div>
                                    </div>

                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">About Yourself</strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="short-bio" class="form-control-label">Bio</label></div>
                                            <div class="col-12 col-md-9"><textarea id="short-bio" id="textarea-input" rows="3" placeholder="Biographical Info" class="form-control"><?php echo $bio; ?></textarea>
                                            </div>
                                        </div>
                                        
                                    </div>

                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Account Management</strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="passcode" class="form-control-label">Password</label></div>
                                            <div class="col-12 col-md-9"><input type='text' id="passcode" placeholder="password" class="form-control" value="<?php echo $password; ?>">
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <button onclick="saveAccount()" class="btn btn-success">Update Profile</button>
                                <br>
                                <small>Your email address cannot be changed, but you can use secondary email as second option which you can change anytime.</small>
                            </div><!-- /#right-panel -->

                        </div>
                        <div class="tab-pane fade" id="custom-nav-profile" role="tabpanel" aria-labelledby="custom-nav-profile-tab">

                           


                        </div>
                        <!--<div class="tab-pane fade" id="custom-nav-contact" role="tabpanel" aria-labelledby="custom-nav-contact-tab">
                            <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, irure terry richardson ex sd. Alip placeat salvia cillum iphone. Seitan alip s cardigan american apparel, butcher voluptate nisi .</p>
                        </div>-->
                    </div>

                </div>


            </div>
            <br>
        </div>
        <!-- Right Panel -->


        <?php include("modals.php"); ?>

        <!--Footer-->
        <?php include("footer.php"); ?>
        <!--End Footer-->


        <script>

            
            function saveAccount() {
                var an = document.getElementById("aname").value;
                var se = document.getElementById("secondary-emailaddress").value;
                var cn = document.getElementById("cnumber").value;
                var sb = document.getElementById("short-bio").value;
                var pc = document.getElementById("passcode").value;

                if (an == "" || se == "" || cn == "" || sb == "" || pc == "") {

                    alertify.alert("Alert", "Make sure all fileds are filled.");

                } else {
                    
                    var fd = new FormData();
                    fd.append("a6", 1);
                    fd.append("an", an);
                    fd.append("se", se);
                    fd.append("cn", cn);
                    fd.append("sb", sb);
                    fd.append("pc", pc);
                    fd.append("id", <?php echo $user_id;?>);

                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {

                            if (this.responseText == "success") {

                                alertify.alert('Account', "Profile Updated...", function () {
                                    alertify.success('Success!');
                                }).bringToFront();

                                setTimeout(function () {
                                    window.location.href = "account.php"
                                }, 2500);

                            } else {

                                alertify.alert('Account', "Something went wrong please try again.", function () {
                                    alertify.error('Error!');
                                }).bringToFront();

                            }

                        }
                    };
                    xmlhttp.open("POST", "../php/post.php", true);
                    xmlhttp.send(fd);



                }
            }


        </script>

        <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>


        <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
        <script src="assets/js/dashboard.js"></script>
        <script src="assets/js/widgets.js"></script>
        <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
        <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
        <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
        <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>

    </body>
</html>
