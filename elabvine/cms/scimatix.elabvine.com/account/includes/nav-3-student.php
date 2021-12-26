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
                            <p class="user-name col-lg-12 col-md-12 col-6"><a href="#">ZAR <?php echo $wallet; ?></a> <i class="fa fa-money"></i></p>
                            <p class="view col-lg-12 col-md-12 col-6"><a href="#"><?php echo $Hours;?> Hour(s)</a> <i class="fa fa-clock-o"></i></p>
                            <p class="comments col-lg-12 col-md-12 col-6"><a href="#">Messages</a> <span class="fa fa-comments"></span></p>		
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="feature-img">
                            <img class="img-fluid" src="../img/feature.jpg" alt="">
                        </div>
                        <a class="posts-title" href="blog-single.html"><h3>Welcome!</h3></a>
                        <p class="excert">
                            Buy once off, weekly, monthly and yearly hours and book a lesson anytime, instantly.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 sidebar-widgets">
                <div class="widget-wrap">
                    <div class="single-sidebar-widget user-info-widget">
                        <a href="profile.php" >
                            <img src="<?php echo $profile_picture ?>" class="rounded-circle" style="width:120px !important;height:120px !important;" alt="">
                            <br>
                            Change Profile
                        </a>
                        <a href="#"><h4><?php echo $name . " " . $surname; ?></h4></a>
                        <p>
                            <?php echo $account_type; ?>
                        </p>
                        <a href="profile.php" class="primary-btn">Profile</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>