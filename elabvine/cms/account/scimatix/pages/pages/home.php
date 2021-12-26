<?php include("../php/customization-home.php"); ?>
<style>
    .banner-area{background:url(<?php echo $banner1; ?>) right;background-size:cover}
    .search-course-area{background:url(<?php echo $banner2; ?>) center;background-size:cover}
    .cta-two-area{background:<?php echo $banner3; ?>;padding:90px 0px}
    .search-course-area .details-content .single-detials .icon {color: <?php echo $banner3; ?>;font-size: 30px;}
    .btn {background: <?php echo $banner3; ?>;}
    .single-feature .title {background: <?php echo $banner3; ?> !important;}
    .single-feature .desc-wrap a:hover{color: <?php echo $banner3; ?> !important;}
    ::selection {background-color: <?php echo $banner3; ?> !important;}
</style>
<div class="alert alert-info alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Alert!</strong> Click any text with <small><span class="fa fa-code"></span></small> to edit, Updates are automatically saved.
</div>
<div style="height: 600px !important;overflow-y: auto;">
    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>	
        <div class="container">
            <div class="row fullscreen d-flex align-items-center justify-content-between">
                <div class="banner-content col-lg-9 col-md-12">
                    <h1 class="text-uppercase">
                            <span class="edit-text" id="text1"><?php echo $text1; ?></span>
                            <button class="btn btn-primary" onclick="saveContent('1', 'text1')"><span class="fa fa-code"></span>Save</button>
                    </h1>
                    
                    <p class="pt-10 pb-10">
                        <span class="edit-text" id="text2"><?php echo $text2; ?></span>
                        <button class="btn btn-primary" onclick="saveContent('2', 'text2')"><span class="fa fa-code"></span>Save</button>

                    </p>
                    <a href="signup.php" class="text-uppercase edit-text primary-btn" style="background: <?php echo $banner3; ?>;" id="text3">
                    <?php echo $text3; ?>
                    
                    </a>
                    <button class="btn btn-primary" onclick="saveContent('3', 'text3')"><span class="fa fa-code"></span>Save</button>
                </div>										
            </div>
        </div>					
    </section>
    <!-- End banner Area -->

    <!-- Start feature Area -->
    <section class="feature-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">

                </div>
                <div class="col-lg-4">
                    <div class="single-feature">
                        <div class="title">
                            <h4>
                            <span class="edit-text" id="text4"><?php echo $text4; ?></span>
                            <button class="btn btn-primary" onclick="saveContent('4', 'text4')"><span class="fa fa-code"></span>Save</button>
                            </h4>
                        </div>
                        <div class="desc-wrap">
                            <p>
                            <span class="edit-text" id="text5"><?php echo $text5; ?></span>
                            <button class="btn btn-primary" onclick="saveContent('5', 'text5')"><span class="fa fa-code"></span>Save</button>
                            </p>
                            <a href="#">
                            <span class="edit-text" id="text6"><?php echo $text6; ?></span>
                            <button class="btn btn-primary" onclick="saveContent('6', 'text6')"><span class="fa fa-code"></span>Save</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feature">
                        <div class="title">
                            <h4>
                            <span class="edit-text" id="text7"><?php echo $text7; ?></span>
                            <button class="btn btn-primary" onclick="saveContent('7', 'text7')"><span class="fa fa-code"></span>Save</button>
                            </h4>
                        </div>
                        <div class="desc-wrap">
                            <p>
                            <span class="edit-text" id="text8"><?php echo $text8; ?></span>
                            <button class="btn btn-primary" onclick="saveContent('8', 'text8')"><span class="fa fa-code"></span>Save</button>
                            </p>
                            <a href="#">
                            <span class="edit-text" id="text9"><?php echo $text9; ?></span>
                            <button class="btn btn-primary" onclick="saveContent('9', 'text9')"><span class="fa fa-code"></span>Save</button>
                            </a>									
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        </div>	
    </section>
    <!-- End feature Area -->

    <!-- Start popular-course Area -->
    <section class="popular-course-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">
                        <span class="edit-text" id="text10"><?php echo $text10; ?></span>
                            <button class="btn btn-primary" onclick="saveContent('10', 'text10')"><span class="fa fa-code"></span>Save</button>
                        </h1>
                        <p>
                        <span class="edit-text" id="text11"><?php echo $text11; ?></span>
                            <button class="btn btn-primary" onclick="saveContent('11', 'text11')"><span class="fa fa-code"></span>Save</button>
                        </p>
                        <div class="alert alert-info"><a href="#" class="alert-link">Alert!</a> Click image you want to replace.</div>
                    </div>
                </div>
            </div>						
            <div class="row">
                <div class="col-md-4 single-popular-carusel">
                    <div class="thumb-wrap relative">
                        <div class="thumb relative" data-toggle="modal" data-target="#uploadImage" onclick="imageUpload(sessionStorage.setItem('image', 1))">
                            <div class="overlay overlay-bg"></div>	
                            <img class="img-fluid" src="<?php echo $image_section2_1; ?>" alt="">
                        </div>

                    </div>
                    <div class="details">
                        <div class="alert alert-info"><a href="#" class="alert-link">Info</a> Recommended dimension 263&times;200</div>
                        <h4>
                            <span class="edit-text" id="text12"><?php echo $text12; ?></span>
                            <button class="btn btn-primary" onclick="saveContent('12', 'text12')"><span class="fa fa-code"></span>Save</button>
                        </h4>
                    </div>
                </div>	
                <div class="col-md-4 single-popular-carusel">
                    <div class="thumb-wrap relative">
                        <div class="thumb relative" data-toggle="modal" data-target="#uploadImage" onclick="imageUpload(sessionStorage.setItem('image', 2))">
                            <div class="overlay overlay-bg"></div>	
                            <img class="img-fluid" src="<?php echo $image_section2_2; ?>" alt="">
                        </div>									
                    </div>
                    <div class="details">
                        <div class="alert alert-info"><a href="#" class="alert-link">Info</a> Recommended dimension 263&times;200</div>
                        <h4>
                        <span class="edit-text" id="text14"><?php echo $text14; ?></span>
                            <button class="btn btn-primary" onclick="saveContent('14', 'text14')"><span class="fa fa-code"></span>Save</button>
                        </h4>

                    </div>
                </div>	
                <div class="col-md-4 single-popular-carusel">
                    <div class="thumb-wrap relative">
                        <div class="thumb relative" data-toggle="modal" data-target="#uploadImage" onclick="imageUpload(sessionStorage.setItem('image', 3))">
                            <div class="overlay overlay-bg"></div>	
                            <img class="img-fluid" src="<?php echo $image_section2_3; ?>" alt="">
                        </div>									
                    </div>
                    <div class="details">
                        <div class="alert alert-info"><a href="#" class="alert-link">Info</a> Recommended dimension 263&times;200</div>
                        <h4>
                             <span class="edit-text" id="text15"><?php echo $text15; ?></span>
                            <button class="btn btn-primary" onclick="saveContent('15', 'text15')"><span class="fa fa-code"></span>Save</button>
                        </h4>

                    </div>
                </div>	
                <div class="col-md-4 single-popular-carusel">
                    <div class="thumb-wrap relative">
                        <div class="thumb relative" data-toggle="modal" data-target="#uploadImage" onclick="imageUpload(sessionStorage.setItem('image', 4))">
                            <div class="overlay overlay-bg"></div>	
                            <img class="img-fluid" src="<?php echo $image_section2_4; ?>" alt="">
                        </div>									
                    </div>
                    <div class="details">
                        <div class="alert alert-info"><a href="#" class="alert-link">Info</a> Recommended dimension 263&times;200</div>
                        <h4>
                            <span class="edit-text" id="text16"><?php echo $text16; ?></span>
                            <button class="btn btn-primary" onclick="saveContent('16', 'text16')"><span class="fa fa-code"></span>Save</button>
                        </h4>

                    </div>
                </div>
                <div class="col-md-4 single-popular-carusel">
                    <div class="thumb-wrap relative">
                        <div class="thumb relative" data-toggle="modal" data-target="#uploadImage" onclick="imageUpload(sessionStorage.setItem('image', 5))">
                            <div class="overlay overlay-bg"></div>	
                            <img class="img-fluid" src="<?php echo $image_section2_5; ?>" alt="">
                        </div>									
                    </div>
                    <div class="details">
                        <div class="alert alert-info"><a href="#" class="alert-link">Info</a> Recommended dimension 263&times;200</div>
                        <h4>
                             <span class="edit-text" id="text17"><?php echo $text17; ?></span>
                            <button class="btn btn-primary" onclick="saveContent('17', 'text17')"><span class="fa fa-code"></span>Save</button>
                        </h4>

                    </div>
                </div>	

            </div>
        </div>	
    </section>
    <!-- End popular-course Area -->

    <section class="search-course-area relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 col-md-6 search-course-left">
                    <h1 class="text-white">
                        <span class="edit-text" id="text18"><?php echo $text18; ?></span>
                            <button class="btn btn-primary" onclick="saveContent('18', 'text18')"><span class="fa fa-code"></span>Save</button>
                    </h1>
                    <p>
                         <span class="edit-text" id="text19"><?php echo $text19; ?></span>
                            <button class="btn btn-primary" onclick="saveContent('19', 'text19')"><span class="fa fa-code"></span>Save</button>
                    </p>
                    <div class="row details-content">
                        <div class="col single-detials">
                            <span class="lnr lnr-graduation-hat icon"></span>
                            <a href="#"><h4>
                                     <span class="edit-text" id="text20"><?php echo $text20; ?></span>
                                <button class="btn btn-primary" onclick="saveContent('20', 'text20')"><span class="fa fa-code"></span>Save</button>
                                </h4></a>		
                            <p>
                                 <span class="edit-text" id="text21"><?php echo $text21; ?></span>
                            <button class="btn btn-primary" onclick="saveContent('21', 'text21')"><span class="fa fa-code"></span>Save</button>
                            </p>						
                        </div>
                        <div class="col single-detials">
                            <span class="lnr lnr-license icon"></span>
                            <a href="#"><h4>
                            <span class="edit-text" id="text22"><?php echo $text22; ?></span>
                            <button class="btn btn-primary" onclick="saveContent('22', 'text22')"><span class="fa fa-code"></span>Save</button>
                                </h4></a>		
                            <p>
                            <span class="edit-text" id="text23"><?php echo $text23; ?></span>
                            <button class="btn btn-primary" onclick="saveContent('23', 'text23')"><span class="fa fa-code"></span>Save</button>
                            </p>
                        </div>								
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 search-course-right section-gap">
                    <div class="form-wrap">
                        <h4 class="text-white pb-20 text-center mb-30">
                        <span class="edit-text" id="text24"><?php echo $text24; ?></span>
                            <button class="btn btn-primary" onclick="saveContent('24', 'text24')"><span class="fa fa-code"></span>Save</button>
                        </h4>		
                        <input class="form-control" id="reg-namesurname" placeholder="Name and Surname" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name and Surname'" type="text">
                        <input class="form-control" id="reg-emailaddress" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" type="email">
                        <input class="form-control" id="reg-password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" type="password">
                        <input class="form-control" id="reg-confirmpassword" placeholder="Confirm Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'" type="password">									
                        <button class="primary-btn text-uppercase" onclick="userRegistration()">Submit</button>
                    </div>
                </div>
            </div>
        </div>	
    </section>

    <!-- Start cta-two Area -->
    <section class="cta-two-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 cta-left">
                    <h1>
                    <span class="edit-text" id="text25"><?php echo $text25; ?></span>
                            <button class="btn btn-primary" onclick="saveContent('25', 'text25')"><span class="fa fa-code"></span>Save</button>
                    </h1>
                </div>
                <div class="col-lg-4 cta-right">
                    <a class="primary-btn wh edit-text" href="#" data-toggle="modal" data-target="#how-it-works" id="text26"><?php echo $text26; ?>
                    </a><small>
                    
                            <button class="btn btn-primary" onclick="saveContent('26', 'text26')"><span class="fa fa-code"></span>Save</button>
                </div>
            </div>
        </div>	
    </section>
    <!-- End cta-two Area -->

    <!-- Modal -->
    <div id="how-it-works" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">
                    <span class="edit-text" id="text27"><?php echo $text27; ?></span>
                    <button class="btn btn-primary" onclick="saveContent('27', 'text27')"><span class="fa fa-code"></span>Save</button>
                    </h4><button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <video class="thumbnail" controls style="width:100%;">
                        <source src="vid/Presentation.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="modal-footer">
                    <a href="#" class="genric-btn default radius" data-dismiss="modal">Close</a>
                </div>
            </div>

        </div>
    </div>
</div>
