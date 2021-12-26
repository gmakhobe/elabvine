<?php

//Connect to db
include("config.php");
//Get requestId
switch ($_REQUEST['reqId']) {
    case "page-blog":
        /**
         * 
         * page-blog
         * 
         * * */
        //Select blogs where source is elab
        $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM blog WHERE source = 'scimatix' ORDER BY id DESC
LIMIT 0, 3;");
//If success
        if (mysqli_num_rows($sql)) {
            //Start blog row
            $display = '';
            //success
            while ($row = mysqli_fetch_array($sql)) {
                #show time accordingly
                $datetime = strtotime($row['date']);
                $showDateTime = date("d M, Y", $datetime);
                //show multiple rows
                $display .= '
                <div class="single-post row">
                    <div class="col-lg-3  col-md-3 meta-details">
                        <ul class="tags">
                            <li><a href="#">Information,</a></li>
                            <li><a href="#">Business,</a></li>
                            <li><a href="#">Technology</a></li>
                        </ul>
                        <div class="user-details row">
                            <p class="user-name col-lg-12 col-md-12 col-6"><a href="#">' . $row["author"] . '</a> <span class="lnr lnr-user"></span></p>
                            <p class="date col-lg-12 col-md-12 col-6"><a href="#">' . $showDateTime . '</a> <span class="lnr lnr-calendar-full"></span></p>
                            <p class="view col-lg-12 col-md-12 col-6"><a href="#">' . $row["hits"] . ' Views</a> <span class="lnr lnr-eye"></span></p>
                            <p class="comments col-lg-12 col-md-12 col-6"><a href="#">#####</a> <span class="lnr lnr-bubble"></span></p>						
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 ">
                        <div class="feature-img">
                            <img class="img-fluid" src="' . $row["image_link"] . '" alt="">
                        </div>
                        <a class="posts-title" href="blog-content.php?Id=' . $row["id"] . '&title=' . $row["title"] . '"><h3>' . $row["title"] . '</h3></a>
                        <p class="excert">
                            ' . $row["summary"] . '
                        </p>
                        <a href="blog-content.php?Id=' . $row["id"] . '&title=' . $row["title"] . '" class="primary-btn">View More</a>
                    </div>
                </div>

                ';
            }
            //End blog row
            $display .= '';
        } else {
            //not successful
            $display = '
            <div class="alert alert-warning text-center">No content published yet!</div>
            <div class="row gallery-item">
                <div class="single-post row col-md-12">
                    <div class="feature-img">
                            <img class="img-fluid" src="img/blog-no-published-content-yet.png" alt="">
                    </div>
                </div>
            </div>
            ';
        }

        echo $display;
        /**
         * 
         * End page-blog
         * 
         * * */
        break;
    case "page-index":
        /**
         * 
         * page-index
         * 
         * * */
        //Select blogs where source is elab
        $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM blog WHERE source = 'scimatix' ORDER BY date DESC
LIMIT 0 , 3;");
//If success
        if (mysqli_num_rows($sql)) {
            //Start blog row
            $display = '<div class="row">';
            //success
            while ($row = mysqli_fetch_array($sql)) {
                 #show time accordingly
                $datetime = strtotime($row['date']);
                $showDateTime = date("d M, Y", $datetime);
                //show multiple rows
                $display .= '
                    <div class="col-lg-4 col-md-4 single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="' . $row["image_link"] . '" alt="">								
                        </div>
                        <p class="meta">' . $showDateTime . '  |  By <a href="#">Mark Wiens</a></p>
                        <a href="blog-content.php?Id=' . $row["id"] . '&title=' . $row["title"] . '"><span>' . $row["author"] . '">
                            <h5>' . $row["title"] . '</h5>
                        </a>
                        <p>
                            ' . $row["summary"] . '
                        </p>
                        <a href="blog-content.php?Id=' . $row["id"] . '&title=' . $row["title"] . '"><span>' . $row["author"] . '" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>		
                    </div>
';
            }
            //End blog row
            $display .= '</div>';
        } else {
            //not successful
            $display = '
                <div class="col-lg-12 col-md-12 single-blog">
                    <div class="alert alert-warning text-center">No content published yet!</div>
                    <a href="img/blog-no-published-content-yet.png" class="img-gal"><div class="single-gallery-image" style="background: url(img/blog-no-published-content-yet.png);"></div></a>
                        
                </div>
            ';
        }

        echo $display;
        /**
         * 
         * End page-index
         * 
         * * */
        break;
    case "page-blog-popular":
        /**
         * 
         * page-index
         * 
         * * */
        //Select blogs where source is elab
        $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM blog WHERE source = 'scimatix' ORDER BY hits DESC
LIMIT 0 , 3;");
//If success
        if (mysqli_num_rows($sql)) {
            //Start blog row
            $display = '';
            //success
            while ($row = mysqli_fetch_array($sql)) {
                 #show time accordingly
                $datetime = strtotime($row['date']);
                $showDateTime = date("d M, Y", $datetime);
                //show multiple rows
                $display .= '
                                   <div class="single-post-list d-flex flex-row align-items-center">
                                        <div class="thumb">
                                            <img class="img-fluid" src="' . $row["image_link"] . '" alt="">
                                        </div>
                                        <div class="details">
                                            <a href="blog-content.php?Id=' . $row["id"] . '&title=' . $row["title"] . '"><h6>' . $row["title"] . '</h6></a>
                                            <p>' . $showDateTime . '</p>
                                        </div>
                                    </div>
                ';
            }
            //End blog row
            $display .= '';
        } else {
            //not successful
            $display = '
                                    <div class="single-post-list d-flex flex-row align-items-center">
                                        <div class="thumb">
                                            <img class="img-fluid" src="img/blog-no-published-content-yet.png" alt="">
                                        </div>
                                        <div class="details">
                                            <a href="href="#"><h6>Blog not available</h6></a>
                                            <p>No content published yet!</p>
                                        </div>
                                    </div>
                        ';
        }

        echo $display;
        /**
         * 
         * End page-index
         * 
         * * */
        break;
}
?>
