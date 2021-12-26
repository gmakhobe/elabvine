<?php 

if(isset($_REQUEST["subject"])){
    $message = "Hello, i would like to apply for matric rewrite for the following subject(s) ".$_REQUEST["subject"];
}else{
    $message = "Hello, i would like to apply for matric rewrite for the following subject(s) ...";
}

?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
    <head>
        <!-- Site Title -->
        <title>Matric Rewrite Application</title>
        <!-- Meta Description -->
        <meta name="description" content="Apply for the application to rewrite your matric with Scimatix.">      
        <!-- Header -->
        <?php include("headers.php"); ?>
    </head>
    <body>	

        <!-- Navigation -->
        <?php include("navigation.php"); ?>
        <!-- start banner Area -->
        <section class="banner-area relative about-banner" id="home">	
            <div class="overlay overlay-bg"></div>
            <div class="container">				
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="about-content col-lg-12">
                        <h1 class="text-white">
                            Get Started				
                        </h1>	
                        <p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="get-started.php"> Get Started</a></p>
                    </div>	
                </div>
            </div>
        </section>
        <!-- End banner Area -->	
        <!-- Start contact-page Area -->
        <section class="contact-page-area section-gap">
            <div class="container">
                <div class="menu-content col-lg-12">
                    <div class="title text-center">
                        <h3>Matric Rewrite Application.</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 d-flex flex-column address-wrap">

                    </div>
                    <div class="col-md-8">
                        <div class="quotes">
                            <strong>Fees</strong><br>
                            Registration fee: R600 (comes with a study starter pack);<br>
                            Deposit: R1000<br>
                            <ul>
                                <li>1 subject: R550</li>
                                <li>2 subjects R1000</li>
                                <li>3 subjects: R1400</li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-lg-2 d-flex flex-column address-wrap">

                    </div>
                    <div class="col-lg-8">
                        <div class="form-area contact-form text-right pt-30">
                            <div class="row">	
                                <div class="col-lg-6 form-group">
                                    <input id="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">

                                    <input id="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

                                    <input id="phone" placeholder="Enter phone number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter phone number'" class="common-input mb-20 form-control" required="" type="text">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <textarea class="common-textarea form-control" id="message" placeholder="Enter Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Messege'" required=""><?php echo $message;?></textarea>				
                                </div>
                                <div class="col-lg-12">
                                    <div class="alert-msg" style="text-align: left;"></div>
                                    <button id="button-matric-rewrite" class="genric-btn primary" style="float: right;">Send Request</button>											
                                </div>
                            </div>					
                        </div>
                    </div>	
                </div>
                <div class="col-lg-2 d-flex flex-column address-wrap">

                </div>
            </div>
        </div>	
    </section>
    <!-- End contact-page Area -->
    <!-- Footer -->
    <?php include("footer.php"); ?>

</body>
</html>