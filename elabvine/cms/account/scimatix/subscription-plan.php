<?php include("../../php/session.php"); ?>
<?php include("php/dashboard.php"); ?>
<?php include("php/account.php"); ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>

        <title>Subscription Plan</title>
        <meta name="description" content="Admin Dashboard - Subscription Plan">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--Headers-->
        <?php include("headers.php"); ?>
        <!--End Headers-->

    </head>
    <body>

        <?php include("header-left.php"); ?>

        <!-- Right Panel -->

        <div id="right-panel" class="right-panel">

            <?php include("header-top.php"); ?>

            <div class="breadcrumbs">
                <div class="col-sm-12">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Subscription Plan</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content mt-3">

                <div class="">

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Subscriptions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Request A Quote</a>
                        </li>

                    </ul>
                    <div class="tab-content pl-3 p-1" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                            <div class="col-md-4">
                                <div class="card">
                                    <?php echo $our_subscription1; ?>
                                    <div class="card-body">
                                        <div class="mx-auto d-block">
                                            <h1 class="text-sm-center mt-2 mb-1">Free</h1>
                                            <h5 class="text-sm-center mt-2 mb-1">Start-Up</h5>
                                            <div class="location text-sm-center">Free Forever</div>
                                        </div>
                                        <hr>
                                        <div class="card-text text-sm-center">
                                            <a href="#">yoursite.elabvine.com</a><br>
                                            <a href="#">20% commission</a><br>

                                        </div>
                                    </div>
                                    <div class="card-footer text-center">
                                        <?php echo $plan_btn1; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card">
                                    <?php echo $our_subscription2; ?>
                                    <div class="card-body">
                                        <div class="mx-auto d-block">
                                            <h1 class="text-sm-center mt-2 mb-1">R349</h1>
                                            <h5 class="text-sm-center mt-2 mb-1">Growing Business</h5>
                                            <div class="location text-sm-center">No Restrictions</div>
                                        </div>
                                        <hr>
                                        <div class="card-text text-sm-center">
                                            <a href="#">yoursite.elabvine.com</a><br>
                                            <a href="#">0% commission</a><br>

                                        </div>
                                    </div>
                                    <div class="card-footer text-center">
                                        <?php echo $plan_btn2; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card">
                                    <?php echo $our_subscription3; ?>
                                    <div class="card-body">
                                        <div class="mx-auto d-block">
                                            <h1 class="text-sm-center mt-2 mb-1">R999</h1>
                                            <h5 class="text-sm-center mt-2 mb-1">Premium</h5>
                                            <div class="location text-sm-center">Full Potential</div>
                                        </div>
                                        <hr>
                                        <div class="card-text text-sm-center">
                                            <a href="#">yoursite.com</a><br>
                                            <a href="#">0% commission</a><br>

                                        </div>
                                    </div>
                                    <div class="card-footer text-center">
                                        <?php echo $plan_btn3; ?>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                            <div class="col-md-6">
                                <div class="card">
                                    <?php echo $our_subscription2; ?>
                                    <div class="card-body">
                                        <div class="mx-auto d-block">
                                            <h1 class="text-sm-center mt-2 mb-1">R349</h1>
                                            <h5 class="text-sm-center mt-2 mb-1">Growing Business</h5>
                                            <div class="location text-sm-center">No Restrictions</div>
                                        </div>
                                        <hr>
                                        <div class="card-text text-sm-center">
                                            <a href="#">yoursite.elabvine.com</a><br>
                                            <a href="#">0% commission</a><br>

                                        </div>
                                    </div>
                                    <div class="card-footer text-center">
                                        <a href="request-a-quote.php" onclick="localStorage.setItem('quote', 'Growing Business')" class="btn btn-primary">Growing Business Plan</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card">
                                    <?php echo $our_subscription3; ?>
                                    <div class="card-body">
                                        <div class="mx-auto d-block">
                                            <h1 class="text-sm-center mt-2 mb-1">R999</h1>
                                            <h5 class="text-sm-center mt-2 mb-1">Premium</h5>
                                            <div class="location text-sm-center">Full Potential</div>
                                        </div>
                                        <hr>
                                        <div class="card-text text-sm-center">
                                            <a href="#">yoursite.com</a><br>
                                            <a href="#">0% commission</a><br>

                                        </div>
                                    </div>
                                    <div class="card-footer text-center">
                                        <a href="request-a-quote.php" onclick="localStorage.setItem('quote', 'Premium')" class="btn btn-primary">Premium Plan</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div> <!-- .content -->
            </div><!-- /#right-panel -->
        </div>
        <!-- Right Panel -->

        <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>


        <script>

                                            function submitNote() {
                                                var nt = document.getElementById("note-title").value;
                                                var nc = document.getElementById("note-content").value;

                                                if (nt == "" || nc == "") {

                                                    alertify.alert('Notes', "Please fill in missing fields.", function () {
                                                        alertify.error('Error!');
                                                    }).bringToFront();

                                                } else {

                                                    var fd = new FormData();
                                                    fd.append("a3", 1);
                                                    fd.append("nt", nt);
                                                    fd.append("nc", nc);

                                                    var xmlhttp = new XMLHttpRequest();
                                                    xmlhttp.onreadystatechange = function () {
                                                        if (this.readyState == 4 && this.status == 200) {

                                                            if (this.responseText == "success") {

                                                                document.getElementById('note-title').value = '';
                                                                document.getElementById('note-content').value = '';

                                                                alertify.alert('Notes', "Noted...<br>Visit notes to view full list.", function () {
                                                                    alertify.success('Success!');
                                                                }).bringToFront();

                                                            } else {

                                                                alertify.alert('Notes', "Something went wrong please try again.", function () {
                                                                    alertify.error('Error!');
                                                                }).bringToFront();

                                                            }

                                                        }
                                                    };
                                                    xmlhttp.open("POST", "../php/post.php", true);
                                                    xmlhttp.send(fd);

                                                }
                                            }

                                            function startPlan(id, uri) {

                                                var fd = new FormData();
                                                fd.append("a16", 1);
                                                fd.append("id", id);
                                                fd.append("uri", uri);

                                                var xmlhttp = new XMLHttpRequest();
                                                xmlhttp.onreadystatechange = function () {
                                                    if (this.readyState == 4 && this.status == 200) {

                                                        if (this.responseText == "success") {

                                                            alertify.alert('Alert', "Your plan is successfully changed.", function () {
                                                                alertify.success('Success!');
                                                            }).bringToFront();

                                                        } else {

                                                            alertify.alert('Alert', "Your plan will be changed automatically back after 2 days of unsuccessful payment plan.", function () {
                                                                alertify.error('Error!');
                                                            }).bringToFront();

                                                        }

                                                    }
                                                };
                                                xmlhttp.open("POST", "../php/post.php", true);
                                                xmlhttp.send(fd);

                                            }

        </script>

    </body>
</html>
