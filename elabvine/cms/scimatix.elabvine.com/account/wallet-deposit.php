<?php
include("../php/session.php");
include("includes/configs.php");
//Tutoring Request
if (isset($_REQUEST['reqId']) && isset($_REQUEST['amount'])) {
    $amount = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST["amount"]);
} else {
    header("Location: wallet.php");
}
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
    <head>
        <!-- Site Title -->
        <title>Wallet Deposit</title>
        <!-- Meta Description -->
        <meta name="description" content="<?php echo $companyuri; ?> Wallet Deposit">      
        <!-- Header -->
        <?php include("headers.php"); ?>
        <script src="../js/w3.js"></script>
    </head>
    <body>	

        <!-- Start post-content Area -->
        <section class="post-content-area single-post-area">
            <div class="container">

                <center>
                    <a href="wallet.php"><button type="button" class="btn btn-dark"><i class="fa fa-long-arrow-left"></i> Back</button></a><br><br>
                </center>
                <div class="row">
                    <div class="col-lg-2">

                    </div>
                    <div class="col-lg-8 posts-list ">

                        <div class="single-post row">

                            <div class="col-lg-12">

                                <article class="card">
                                    <div class="card-body">

                                        <ul class="nav bg-light nav-pills rounded nav-fill mb-3" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="pill" href="#nav-tab-card">
                                                    <i class="fa fa-credit-card"></i> EFT (PayFast)</a></li>

                                        </ul>

                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="nav-tab-card">

                                                <form action="https://sandbox.payfast.co.za/eng/process" method="POST">

                                                    <input type="hidden" name="merchant_id" value="10010379">
                                                    <input type="hidden" name="merchant_key" value="bfmm4g8zaz2up">
                                                    <input type="hidden" name="return_url" value="https://www.elabvine.com/success">
                                                    <input type="hidden" name="cancel_url" value="https://www.elabvine.com/cancel">
                                                    <div class="form-group">
                                                        <label for="name_first">Your First Name</label>
                                                        <input value="<?php echo $name; ?>" type="text" class="form-control" name="name_first" placeholder="" required="">
                                                        <label for="name_last">Your Last Name</label>
                                                        <input value="<?php echo $surname; ?>" type="text" class="form-control" name="name_last" placeholder="" required="">
                                                        <label for="email_address">Email Address</label>
                                                        <input value="<?php echo "sbtu01@payfast.co.za"; ?>" type="text" class="form-control" name="email_address" placeholder="" required="">
                                                        <label for="amount">Amount in Rands</label>
                                                        <input value="<?php echo $amount; ?>" type="text" class="form-control disabled disable" name="amount" placeholder="" >

                                                        <input type="hidden" name="item_name" value="Transfer">

                                                        <input type="hidden" name="payment_method" value="eft">
                                                        <input type="hidden" name="signature">                                                            
                                                    </div>

                                                    <button id="btn-submit" class="subscribe btn btn-success btn-block" type="submit"> Submit  </button>    

                                                </form>
                                           

                                            </div> <!-- tab-pane.// -->


                                        </div> <!-- tab-content .// -->

                                    </div> <!-- card-body.// -->
                                </article> 


                            </div>
                        </div>

                    </div>

                    <div class="col-lg-2">

                    </div>
                </div>
            </div>	
        </section>
        <!-- End post-content Area -->
        <?php include("footer.php"); ?>
        <script src="../js/md5.min.js"></script>
        <script>

            $(function () {
                $("#btn-submit").hide();
                
                function confirmFunction() {

                    var $id = $("input[name=merchant_id]").val();
                    var $key = $("input[name=merchant_key]").val();
                    var $success = $("input[name=return_url]").val();
                    var $error = $("input[name=cancel_url]").val();
                    var $name = $("input[name=name_first]").val();
                    var $lastname = $("input[name=name_last]").val();
                    var $email = $("input[name=email_address]").val();
                    var $amount = $("input[name=amount]").val();
                    var $itemname = $("input[name=item_name]").val();
                    var $paymentmethod = $("input[name=payment_method]").val();

                    var $md5StringKey = "merchant_id=" + $id + "&merchant_key=" + $key + "&return_url=" + $success + "&cancel_url=" + $error + "&name_first=" + $name + "&name_last=" + $lastname + "&email_address=" + $email + "&amount=" + $amount + "&item_name=" + $itemname + "&payment_method=" + $paymentmethod;

                    $md5StringKey = $md5StringKey.replace(/:\/\//g, '%3A%2F%2F');
                    $md5StringKey = $md5StringKey.replace(/\//g, '%2F');
                    $md5StringKey = $md5StringKey.replace(/@/g, '%40');
                    $md5StringKey = $md5StringKey.replace(/ /g, '+');

                    $md5String = md5($md5StringKey);

                    $("input[name=signature]").val($md5String);
                    if ($md5String != "") {

                        console.log($md5StringKey + "\n" + $md5String);

                        $.post("../php/index.php",
                                {
                                    reqId: "paymentReq",
                                    amount: $amount
                                },
                                function (data, status) {
                                    var $data = data.replace(/ /g, "");
                                    if ($data == "success") {
                                        $("#btn-submit").show();
                                        
                                    } else {
                                        alertify.alert("Alert", "An error occurred please try again or reload the page.");
                                    }
                                }
                        );

                    } else {
                        alertify.alert("Alert", "An error occurred please try again or reload the page.");
                    }

                }
                confirmFunction();
            });

        </script>



    </body>
</html>