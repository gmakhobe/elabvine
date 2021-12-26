<?php include("../php/customization-dashboard.php"); ?>
<div class="alert alert-info alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Alert!</strong> Click any text with <small><span class="fa fa-code"></span></small> to edit, Updates are automatically saved, click image you want to replace. | 
  <strong>Important!</strong> You can not edit breadcrumb.
</div>
<style>
    .banner-area{background:url(<?php echo $dashboard_banner1;?>) right;background-size:cover}
    .post-content-area .single-post .primary-btn {background: <?php echo $dashboard_banner2;?> !important;}
    .post-content-area .single-post .primary-btn:hover {background: white !important;color:#000 !important;}
    .primary-btn {background: <?php echo $dashboard_banner2;?>;}
    .top-category-widget-area .single-cat-widget:hover .overlay-bg {background: <?php echo $dashboard_banner2;?>;}
</style>
<div style="height: 600px !important;overflow-y: auto;">
    <section class="banner-area relative" id="home">	
        <div class="overlay overlay-bg"></div>
        <div class="container">				
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Given Maks				
                    </h1>	
                    <p class="text-white link-nav"> <a href="#"> Account Type</a></p>
                </div>	
            </div>
        </div>
    </section>
    <!-- End banner Area --><section class="top-category-widget-area pt-90 pb-90 ">
        <div class="container">
            <div class="row">		
                <div class="col-lg-4">
                <div class="single-cat-widget">
                    <div class="content relative" data-toggle="modal" data-target="#uploadImage" onclick="imageUpload(sessionStorage.setItem('image', 1))">
                        <div class="overlay overlay-bg" ></div>
                        <a href="#">
                            <div class="thumb">
                                <img class="content-image img-fluid d-block mx-auto" src="<?php echo $dashboard_image1;?>" alt=""  >
                            </div>
                            <div class="content-details">
                                <h4 class="content-title mx-auto text-uppercase">Tutoring Profile</h4>
                                <span></span>								        
                                <p>Publish Your Profile</p>
                            </div>
                        </a>
                    </div>
                </div>
                    <div class="alert alert-info"><a href="#" class="alert-link">Info</a> Dimension 360&times;220</div>
            </div>
                <div class="col-lg-4">
                    <div class="single-cat-widget">
                        <div class="content relative" data-toggle="modal" data-target="#uploadImage" onclick="imageUpload(sessionStorage.setItem('image', 2))">
                            <div class="overlay overlay-bg"></div>
                            <a href="#">
                                <div class="thumb">
                                    <img class="content-image img-fluid d-block mx-auto" src="<?php echo $dashboard_image2;?>" alt="">
                                </div>
                                <div class="content-details">
                                    <h4 class="content-title mx-auto text-uppercase">Get A Tutor</h4>
                                    <span></span>								        
                                    <p>Post Your Project</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="alert alert-info"><a href="#" class="alert-link">Info</a> Dimension 360&times;220</div>
                </div>
                <div class="col-lg-4">
                    <div class="single-cat-widget">
                        <div class="content relative" data-toggle="modal" data-target="#uploadImage" onclick="imageUpload(sessionStorage.setItem('image', 3))">
                            <div class="overlay overlay-bg"></div>
                            <a href="#">
                                <div class="thumb">
                                    <img class="content-image img-fluid d-block mx-auto" src="<?php echo $dashboard_image3;?>" alt="">
                                </div>
                                <div class="content-details">
                                    <h4 class="content-title mx-auto text-uppercase">Projects</h4>
                                    <span></span>								        
                                    <p>About Projects</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="alert alert-info"><a href="#" class="alert-link">Info</a> Dimension 360&times;220</div>
                </div>
                <div class="col-lg-4">
                    <div class="single-cat-widget">
                        <div class="content relative" data-toggle="modal" data-target="#uploadImage" onclick="imageUpload(sessionStorage.setItem('image', 4))">
                            <div class="overlay overlay-bg" ></div>
                            <a href="#">
                                <div class="thumb">
                                    <img class="content-image img-fluid d-block mx-auto" src="<?php echo $dashboard_image4;?>" alt="">
                                </div>
                                <div class="content-details">
                                    <h4 class="content-title mx-auto text-uppercase">Account Summary</h4>
                                    <span></span>
                                    <p>Deposit & Withdraw</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="alert alert-info"><a href="#" class="alert-link">Info</a> Dimension 360&times;220</div>
                </div>												
            </div>
        </div>	
    </section>
    <!-- End top-category-widget Area -->        
    <section class="post-content-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-4  col-md-4 meta-details">
                            <ul class="tags">
                                <li><a href="#">Profile Summary</a></li>
                            </ul>
                            <div class="user-details row">
                                <p class="user-name col-lg-12 col-md-12 col-6"><a href="#">ZAR 65 Wallet</a> <i class="fa fa-money"></i></p>
                                <p class="date col-lg-12 col-md-12 col-6"><a href="#" onclick="seen_notifications()"><span class="label label-pill label-danger count" style="border-radius:10px;">0 Notification(s)</span> <i class="fa fa-bell"></i></a></p>
                                <p class="view col-lg-12 col-md-12 col-6"><a href="#">1 project(s)</a> <i class="fa fa-sitemap"></i></p>
                                <p class="comments col-lg-12 col-md-12 col-6"><a href="#">Messages</a> <span class="fa fa-comments"></span></p>						
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <div class="feature-img">
                                <img class="img-fluid" src="<?php echo $dashboard_image5;?>" alt="" data-toggle="modal" data-target="#uploadImage" onclick="imageUpload(sessionStorage.setItem('image', 5))">
                            </div>
                            <a class="posts-title" href="#"><h3> <span class="edit-text" id="text1" ><?php echo $dashboard_text1; ?></span>
                        <button class="btn btn-primary" onclick="saveContent('1', 'text1')"><span class="fa fa-code"></span>Save</button></h3></a>
                            <p class="excert">
                                <span class="edit-text" id="text2" ><?php echo $dashboard_text2; ?></span>
                                <button class="btn btn-primary" onclick="saveContent('2', 'text2')"><span class="fa fa-code"></span>Save</button>
                            </p>
                            <a href="#" class="primary-btn" data-toggle="modal" data-target="#how-it-works">Watch a video tutorial</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 sidebar-widgets">
                    <div class="widget-wrap">
                        <div class="single-sidebar-widget user-info-widget">
                            <a href="#" data-toggle="modal" data-target="#dashboard-tutor-proflie-picture">
                                <img src="img/profile.png" class="rounded-circle" style="width:120px !important;height:120px !important;" alt="">
                                <br>
                                Change Profile
                            </a>
                            <a href="#"><h4>Given Maks</h4></a>
                            <p>
                               Account Type                                </p>
                            <a href="#" class="primary-btn" data-toggle="modal" data-target="#dashboard-tutor-proflie-edit">Profile</a>
                            <p>
                                User Bio
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

  
    <!-- Modal -->
    <div id="how-it-works" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">
                        Watch a video tutorial
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



