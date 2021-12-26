<!DOCTYPE html>
<html lang="zxx" class="no-js">
    <head>
        <!-- Site Title -->
        <title>Blog</title>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Meta Description -->
        <meta name="description" content="Learn about our products and services to improve your entrepreneurship skills and your business.">
        <?php include("headers.php"); ?>
    </head>
    <body>
        <?php include("navigation.php"); ?>
        <!-- #header -->

        <!-- start banner Area -->
        <section class="banner-area relative blog-home-banner" style="background: url(img/blog.png) bottom;" id="home">	
            <div class="overlay overlay-bg"></div>
            <div class="container">				
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="about-content blog-header-content col-lg-12">
                        <h1 class="text-white">
                            Free entrepreneurship lessons				
                        </h1>	
                        <p class="text-white">
                            Get the knowledge and enthusiasm you need to build a scalable business.
                        </p>
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
                                <img src="img/blog/user-info.png" alt="">
                                <a href="#"><h4>Given Makhobela</h4></a>
                                <p>
                                    Blog writer
                                </p>
                                <ul class="social-links">
                                    <li><a href="https://www.facebook.com/elabvine"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://www.twitter.com/elabvine"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.youtube.com/channel/UCtvERP0ExTbmI7QPoSvgXPw"><i class="fa fa-youtube"></i></a></li>
                                    <li><a href="https://www.instagram.com/elabvine"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                                <p>
                                    A person earning the a minimum wage of R20 isn't going out to eat at restaurants. They're not taking piano lessons. They're not going to the gym or the yoga studio. They're not sending mom flowers on Mother's day. What good is this person in the economy? If you raise it to R95 an hour, they're doing all of those things. - Nick Hanauer
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
                                            <input type="text" class="form-control" id="blog-subscribers-email" placeholder="Enter email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'" >
                                        </div>
                                    </div>
                                    <a href="#" id="button-blog-subscribe" class="bbtns">Subcribe</a>
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