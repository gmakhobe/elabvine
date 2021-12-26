<?php
//config file
include("php/config.php");
//get posted info
if (isset($_REQUEST["Id"]) && isset($_REQUEST["title"])) {
    //var's
    $id = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST['Id']);
    $title = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST['title']);
    //sql
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM blog WHERE id = '$id' AND title = '$title' AND source = 'scimatix';");
    if (mysqli_num_rows($sql) > 0) {
        $row = mysqli_fetch_array($sql);
        $hits = $row["hits"] + 1;
        $sql_update = "UPDATE blog SET hits = '$hits' WHERE id = '$id' AND source = 'scimatix';";
        if (mysqli_query($DATABASE_CONNECTION, $sql_update)) {
            $new_title = $row["title"];
            $new_image_link = $row["image_link"];
            $new_summary = $row["summary"];
            $new_story = $row["story"];
            $new_author = $row["author"];
            $new_author_image_link = $row["author_image_link"];
            $new_hits = $row["hits"];
            #show time accordingly
            $datetime = strtotime($row['date']);
            $new_date = date("d M, Y", $datetime);
            //Functions
            include("php/functions.php");
            $previous = previousFunction($DATABASE_CONNECTION, $id);
            $next = nextFunction($DATABASE_CONNECTION, $id);
        } else {
            header("Location: blog.php");
        }
    } else {
        header("Location: blog.php");
    }
} else {
    header("Location: blog.php");
}
?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">
    <head>
        <!-- Site Title -->
        <title>Blog - <?php echo $new_title; ?></title>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Meta Description -->
        <meta name="description" content="<?php echo $new_summary; ?>">
        <?php include("headers.php"); ?>
    </head>
    <body>
        <?php include("navigation.php"); ?>
        <!-- #header -->

        <!-- start banner Area -->
        <section class="relative about-banner">	
            <div class="overlay overlay-bg"></div>
            <div class="container">				
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="about-content col-lg-12">
                        <h1 class="text-white">
                            Blog Content				
                        </h1>	
                        <p class="text-white link-nav"><a href="blog.php">Blog </a>  <span class="lnr lnr-arrow-right"></span>  <a href="blog-content.php"> Blog Content</a></p>
                    </div>	
                </div>
            </div>
        </section>
        <!-- End banner Area --> 

        <!-- Start post-content Area -->
        <section class="post-content-area single-post-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 posts-list">
                        <div class="single-post row">
                            <div class="col-lg-12">
                                <div class="feature-img">
                                    <img class="img-fluid" src="<?php echo $new_image_link; ?>" alt="">
                                </div>									
                            </div>
                            <div class="col-lg-3  col-md-3 meta-details">
                                <ul class="tags">
                                    <li><a href="#">Information,</a></li>
                                    <li><a href="#">Business,</a></li>
                                    <li><a href="#">Technology</a></li>
                                </ul>
                                <div class="user-details row">
                                    <p class="user-name col-lg-12 col-md-12 col-6"><a href="#"><?php echo $new_author; ?></a> <span class="lnr lnr-user"></span></p>
                                    <p class="date col-lg-12 col-md-12 col-6"><a href="#"><?php echo $new_date; ?></a> <span class="lnr lnr-calendar-full"></span></p>
                                    <p class="view col-lg-12 col-md-12 col-6"><a href="#"><?php echo $new_hits; ?> Views</a> <span class="lnr lnr-eye"></span></p>
                                    <p class="comments col-lg-12 col-md-12 col-6"><a href="#">#####</a> <span class="lnr lnr-bubble"></span></p>
                                    <ul class="social-links col-lg-12 col-md-12 col-6">
                                        <li><a href="https://www.facebook.com/scimatix"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://www.twitter.com/scimatix"><i class="fa fa-twitter"></i></a></li>
                                    </ul>																				
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9">
                                <h3 class="mt-20 mb-20"><?php echo $new_title; ?></h3>
                                <?php echo $new_story; ?>
                            </div>
                        </div>
                        <div class="navigation-area">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                    <?php echo $previous; ?>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                    	<?php echo $next; ?>									
                                </div>									
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 sidebar-widgets">
                        <div class="widget-wrap">
                            <div class="single-sidebar-widget user-info-widget">
                                <img src="<?php echo $new_author_image_link; ?>" style="width: 120px !important;" alt="">
                                <a href="#"><h4>Given Makhobela</h4></a>
                                <p>
                                    Blog writer
                                </p>
                                <ul class="social-links">
                                    <li><a href="https://www.facebook.com/scimatix"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://www.twitter.com/scimatix"><i class="fa fa-twitter"></i></a></li>
                                    
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