<?php include("../php/session.php"); ?>
<html lang="zxx" class="no-js">
    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Subscription Plan Payment</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="../img/fav.png">
        <link rel="shortcut icon" href="../img/fav.png">

        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="../template/css/linearicons.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
        <link rel="stylesheet" href="../template/css/bootstrap.css">
        <link rel="stylesheet" href="../template/css/magnific-popup.css">
        <link rel="stylesheet" href="../template/css/nice-select.css">							
        <link rel="stylesheet" href="../template/css/animate.min.css">
        <link rel="stylesheet" href="../template/css/owl.carousel.css">			
        <link rel="stylesheet" href="../template/css/jquery-ui.css">			
        <link rel="stylesheet" href="../template/css/main.css">
        <script src="../template/js/alertify.min.js"></script>
        <script type="text/javascript">
            //override defaults
            alertify.defaults.transition = "slide";
            alertify.defaults.theme.ok = "btn btn-primary";
            alertify.defaults.theme.cancel = "btn btn-danger";
            alertify.defaults.theme.input = "form-control";
        </script>
        <link rel="stylesheet" href="../template/css/alertify.css">

        <script src="../template/js/vendor/jquery-2.2.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="../template/js/vendor/bootstrap.min.js"></script>			
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
        <script src="../template/js/easing.min.js"></script>			
        <script src="../template/js/hoverIntent.js"></script>
        <script src="../template/js/superfish.min.js"></script>	
        <script src="../template/js/jquery.ajaxchimp.min.js"></script>
        <script src="../template/js/jquery.magnific-popup.min.js"></script>	
        <script src="../template/js/jquery.tabs.min.js"></script>						
        <script src="../template/js/jquery.nice-select.min.js"></script>	
        <script src="../template/js/owl.carousel.min.js"></script>									
        <script src="../template/js/mail-script.js"></script>	
        <script src="../template/js/w3.js"></script>

    </head>
    <body>

        <!-- Start post-content Area -->
        <section class="post-content-area single-post-area">
            <div class="container">

                <center>
                    <a href="subscription-plan.php"><button type="button" class="btn btn-dark"><i class="fa fa-chevron-left"></i> Subscription Plan</button></a><br><br>
                </center>
                <div class="row">
                    <div class="col-lg-2">

                    </div>
                    <div class="col-lg-8 posts-list ">

                        <div class="single-post row">
                            <div class="col-lg-12 p-slide">
                                <div class="quotes" ><!--id="plans">-->
                                    <div class="alert alert-warning">This method of payment is currently inactive as soon as is activated you will be notified. Alternatively make a bank transfer/deposit by going to <a href="subscription-plan.php">Plan</a> > Request A Quote and select your plan then select monthly or yearly payment from then include your email address so that you can receive a quote and banking details to enable you to make a proper bank transfer.</div>
                                </div>
                                <button class="btn btn-info btn-block" onclick="//myShow.next()">Next</button>
                            </div>
                            <div class="col-lg-12 p-slide">
                                <article class="card">
                                    <div class="card-body p-5">

                                        <ul class="nav bg-light nav-pills rounded nav-fill mb-3" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="pill" href="#nav-tab-card">
                                                    <i class="fa fa-credit-card"></i> EFT (PayFast)</a></li>

                                        </ul>

                                        <p class="alert alert-warning">You have 30 minutes to finish your order.</p>
                                        <div class="table-responsive">
                                            <h2>Checkout</h2>

                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Quantity</th>
                                                        <th>Unit Price</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Subscription Service Fee</td>
                                                        <td>1</td>
                                                        <td><span id="row1"></span></td>
                                                        <td><span id="row1total"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td>Subtotal:</td>
                                                        <td><span id="row2total"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td>VAT(15%):</td>
                                                        <td><span id="row3total"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td>Total:</td>
                                                        <td><span id="row4total"></span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <form role="form" action="https://www.payfast.co.za/eng/process" method="POST">
                                            <div>

                                                <input type="hidden" id="payfast1" name="merchant_id" value="12756446">
                                                <input type="hidden" id="payfast2" name="merchant_key" value="z7fum1m1stad6">
                                                <input type="hidden" id="payfast3" name="return_url" value="https://www.elabvine.com/success">
                                                <input type="hidden" id="payfast4" name="cancel_url" value="https://www.elabvine.com/cancel">
                                                <input type="hidden" id="payfast5" name="notify_url" value="https://www.elabvine.com/notify">

                                            </div>

                                            <input type="hidden" id="payfast6" name="name_first" value="<?php echo $our_companyuri; ?>">
                                            <input type="hidden" id="payfast7" name="email_address" value="<?php echo $our_emailaddress; ?>">
                                            <input type="hidden" name="amount" id="amountCheckOut" value="100">
                                            <input type="hidden" id="payfast9" name="item_name" value="Subscription Service Fee">
                                            <input type="hidden" id="payfast10" name="payment_method" value="cc">

                                            <input type="hidden" id="payfast11" name="signature" value="6ae5b98d588d676ca22934abe254038b">


                                            <button type="submit" class="subscribe btn btn-success btn-block" type="button"> Confirm  </button>
                                        </form>
                                    </div> <!-- tab-pane.// -->
                                    <!-- card-body.// -->
                                </article> 

                            </div>
                        </div>

                    </div>

                </div>
            </div>	
        </section>
        <script src="assets/js/md5.js"></script>
        <!-- End post-content Area -->
        <script  type="text/javascript">

            var myShow = w3.slideshow(".p-slide", 0);

            var plan = localStorage.getItem("plan");

            if (plan == "Start-Up") {

            } else if (plan == "Growing Business") {

                document.getElementById("plans").innerHTML = '<form><select id="package" class="form-control" onchange="selectPackage()">' +
                        '<option value="349">R349 every 30 days</option>' +
                        '<option value="3600">R3600 every year | Save R398</option>' +
                        '</select></form>';

            } else if (plan == "Premium") {

                document.getElementById("plans").innerHTML = '<form><select id="package" class="form-control" onchange="selectPackage()">' +
                        '<option value="999">R999 every 30 days</option>' +
                        '<option value="10899">R10899 every year | Save R1000</option>' +
                        '</select></form>';

            }

            function selectPackage() {

                var str = document.forms[0].package.value;
                var str2 = document.getElementById("package");
                str2 = str2.options[str2.selectedIndex].text;
                var total = ((parseFloat(str) * 0.15) + parseFloat(str))
                document.getElementById("amountCheckOut").value = total;
                document.getElementById("row1").innerHTML = "R" + parseFloat(str);
                document.getElementById("row1total").innerHTML = "R" + parseFloat(str);
                document.getElementById("row2total").innerHTML = "R" + parseFloat(str);
                document.getElementById("row3total").innerHTML = "R" + parseFloat(str) * 0.15;
                document.getElementById("row4total").innerHTML = "R" + total;

                var companyuri = "<?php echo $our_companyuri; ?>";
                var emailaddress = "<?php echo $our_emailaddress; ?>";

                uri = "merchant_id=12756446&merchant_key=z7fum1m1stad6&return_url=https://www.elabvine.com/success&cancel_url=https://www.elabvine.com/cancel&notify_url=https://www.elabvine.com/notify&name_first=" + companyuri + "&email_address=" + emailaddress + "&amount=" + total + "&item_name=Subscription Service Fee&payment_method=cc";

                uri = uri.replace(/:\/\//g, '%3A%2F%2F');
                uri = uri.replace(/\//g, '%2F');
                uri = uri.replace(/@/g, '%40');
                uri = uri.replace(/ /g, '+');
                //var res = encodeURIComponent(uri);

                document.getElementById("payfast11").value = MD5(uri);

                var fd = new FormData();
                    fd.append("a14", 1);
                    fd.append("av", str);
                    fd.append("cn", companyuri);
                    fd.append("em", emailaddress);

                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {

                            
                        }
                    };
                    xmlhttp.open("POST", "../php/post.php", true);
                    xmlhttp.send(fd);

            }
            selectPackage();


        </script>


    </body>
</html>