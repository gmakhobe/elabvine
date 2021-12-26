<!DOCTYPE html>
<html lang="zxx" class="no-js">
    <head>
        <!-- Site Title -->
        <title>Blog</title>
        <!-- Meta Description -->
        <meta name="description" content="Get study tips, study material and information your career path.">      
        <!-- Header -->
        <?php include("headers.php"); ?>
    </head>
    <body>	

        <!-- Navigation -->
        <?php include("navigation.php"); ?>
        <!-- start banner Area -->
        <section class="banner-area relative blog-home-banner" id="home">	
            <div class="overlay overlay-bg"></div>
            <div class="container">				
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="about-content blog-header-content col-lg-12">
                        <h1 class="text-white">
                            Get study tips and information you need				
                        </h1>	
                        <p class="text-white">
                            Get study tips, study material and information about different career paths.
                        </p>
                        <a href="get-started.php" class="primary-btn">Get Started</a>
                    </div>	
                </div>
            </div>
        </section>
        <!-- End banner Area -->				
        <!-- Start post-content Area -->
        <section class="post-content-area pt-90 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 posts-list">

                        <div id="page-blog-view"></div>


                    </div>
                    <div class="col-lg-4 sidebar-widgets">
                        <div class="widget-wrap">
                            <div class="single-sidebar-widget user-info-widget">
                                <img src="img/profile.png" style="width: 120px !important;" alt="">
                                <a href="#"><h4>Anonymous</h4></a>
                                <p>
                                    Blog writer
                                </p>
                                <ul class="social-links">
                                    <li><a href="https://www.facebook.com/elabvine"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://www.twitter.com/elabvine"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                                <p>
                                    I advise my students to listen carefully the moment they decide to take no more mathematics courses. They might be able to hear the sound of closing doors." - James Caballero
                                </p>
                            </div>
                            <div class="single-sidebar-widget popular-post-widget">
                                <h4 class="popular-title">Popular Posts</h4>
                                <div class="popular-post-list" id="page-blog-popular">

                                </div>
                            </div>
                            <div class="single-sidebar-widget newsletter-widget">
                                <h4 class="newsletter-title">Newsletter</h4>
                                <p>
                                    Subscribe today and receive news, updates and special articles for only our subscribers.
                                </p>
                                <div class="form-group d-flex flex-row">
                                    <div class="col-autos">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" id="subscriber-email-blog" placeholder="Enter email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'" >
                                        </div>
                                    </div>
                                    <button id="button-subscribe-blog" class="bbtns">Subcribe</button>
                                </div>	
                                <p class="text-bottom">
                                    You can unsubscribe at any time
                                </p>								
                            </div>							
                        </div>
                    </div>
                </div>
            </div>	
        </section>
        <!-- End post-content Area -->	
        <!-- Footer -->
        <?php include("footer.php"); ?>
        <script>
            $(function () {
                //Load Page Blog
                $.post("php/blog-main.php",
                        {
                            reqId: "page-blog"
                        },
                        function (data, status) {
                            $("#page-blog-view").html(data);
                        }
                );
                //Load Page Blog
                $.post("php/blog-main.php",
                        {
                            reqId: "page-blog-popular"
                        },
                        function (data, status) {
                            $("#page-blog-popular").html(data);
                        }
                );
            });
        </script>
    </body>
</html>