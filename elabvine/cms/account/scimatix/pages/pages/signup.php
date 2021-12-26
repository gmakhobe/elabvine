<?php include("../php/customization-sign.php"); ?>
<div class="alert alert-info alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Alert!</strong> Click any text with <small><span class="fa fa-code"></span></small> to edit, Updates are automatically saved, click image you want to replace. | 
  <strong>Important!</strong> You can not edit breadcrumb.
</div>
<div style="height: 600px !important;overflow-y: auto;">
     <style>
        .about-banner{background:url(<?php echo $sign_banner2;?>) right no-repeat;background-size:cover}
    </style>
    <!-- start banner Area -->
    <section class="banner-area relative about-banner" id="home">	
        <div class="overlay overlay-bg"></div>
        <div class="container">				
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Sign Up				
                    </h1>	
                    <p class="text-white link-nav"><a href="#">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#"> Sign Up</a></p>
                </div>	
            </div>
        </div>
    </section>
    <!-- End banner Area -->	
    
    <!-- Start info Area -->
    <section class="info-area pb-120 whole-wrap">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 no-padding info-area-left">
                    <img class="img-fluid" src="<?php echo $image_section_1;?>" alt="" data-toggle="modal" data-target="#uploadImage" onclick="imageUpload(sessionStorage.setItem('image', 1))">
                    <div class="alert alert-info"><a href="#" class="alert-link">Info</a> Recommended dimension 945&times;650</div>
                </div>
                <div class="col-lg-6 info-area-right">
                    <h1><span class="edit-text" id="text1" onkeyup="saveContent(this.value, 'text1')"><?php echo $text1; ?></span>
                        <small><span class="fa fa-code"></span></small></h1>
                    <p>
                        <span class="edit-text" id="text2" onkeyup="saveContent(this.value, 'text2')"><?php echo $text2; ?></span>
                        <small><span class="fa fa-code"></span></small>
                    </p>
                    <label>Name and Surname</label>
                    <input id="reg-namesurname" type="text" placeholder="Your name and surname..." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your name and surname...'" required="" class="single-input">
                    <label>Email Address</label>
                    <input id="reg-emailaddress" type="email" placeholder="Your email address..." onfocus="this.placeholder = 'Your email address...'" onblur="this.placeholder = 'Your email address...'" required="" class="single-input">
                    <label>Password</label>
                    <input id="reg-password" type="password" placeholder="Your password..." onfocus="this.placeholder = 'Your password...'" onblur="this.placeholder = 'Your password...'" required="" class="single-input">
                    <label>Confirm Password</label>
                    <input id="reg-confirmpassword" type="password" name="first_name" placeholder="Retype your password..." onfocus="this.placeholder = 'Retype your password...'" onblur="this.placeholder = 'Retype your password...'" required="" class="single-input">
                    <br>
                    <button class="primary-btn" style="background: <?php echo $sign_banner3;?>;" id="text3" onkeyup="saveContent(this.value, 'text3')" onclick="userRegistration()">Submit</button>
                </div>
            </div>
        </div>	
    </section>
    <!-- End info Area -->	
</div>