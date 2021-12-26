<div class="col-md-12">
    <div class="single-carusel row align-items-center">
        <div class="col-12 col-md-6 thumb">
            <img class="img-fluid" src="../img/lesson.png" alt="">
        </div>
        <div class="detials col-12 col-md-6">
            <p>Status: <?php echo $status; ?></p>
            <a href="#"><h4><?php echo $type; ?></h4></a>
            <a href="#"><h5><?php echo $subject; ?></h5></a>
            <p>
                Grade/Level: <?php echo $grade; ?><br>
                Description: <?php echo $description; ?><br>
                <?php echo $attach; ?>
                Date Booked: <?php echo $date; ?><br>
                Length: <?php echo $lesson_hours; ?><br>
                <br>

            </p>
            <?php echo $addressSection;?>
        </div>
    </div>
</div>

<hr>
<div class="col-sm-2"></div>
<div class="col-sm-2"></div>
<div class="col-sm-8">
    <div class="comment-list">
        <div class="single-comment justify-content-between d-flex">
            <div class="user justify-content-between d-flex">
                <div class="thumb">
                    <img style="width: 60px !important;" src="<?php echo $tutor_profile; ?>" alt="">
                </div>
                <div class="desc">
                    <h5><a href="#"><?php echo $tutor_name . " " . $tutor_surname; ?></a></h5>
                    <p class="date">Approved Tutor</p>
                    <p class="comment">
                        Send your tutor a message!
                    </p>
                </div>
            </div>
            <div class="reply-btn">
                <a href="" class="btn-reply text-uppercase">Message</a> 
            </div>
        </div>
    </div>
    <hr>
    <a href="rate.php?reqId=completeLessonStudent&lessonId=<?php echo $lessonId; ?>" class="genric-btn success">Complete Lesson</a> <a href="lesson.php?reqId=reportStudent&lessonId=<?php echo $lessonId; ?>" class="genric-btn danger">Report Lesson</a>
</div>
<div class="col-sm-2"></div>