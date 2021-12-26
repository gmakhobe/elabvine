<?php include("../php/timeago.php"); ?>
<?php
if (!isset($_REQUEST["lessonId"]) || $_REQUEST["lessonId"] == 0 || $_REQUEST["lessonId"] == "") {
    $redirect = 1;
} else {
    //do not redirect
    $redirect = 0;
    //Lesson iD
    $lessonId = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST["lessonId"]);
    //Lesson Info 
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `scimatix_members_lessons` WHERE Id = '$lessonId';");
    $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
    // Lesson Information
    $studentId = $row["Member_Id"];
    $tutorId = $row["Tutor_Id"];
    $subject = $row["Subject"];
    $grade = $row["Grade"];
    $description = $row["Description"];
    $attachment = $row["Attachment"];
    if ($attachment != "") {
        $attachment = "<p><strong>Attachment:</strong><br><a target='_blank' class='btn btn-link' href='http://scimatix.elabvine.com" . $attachment . "'>Attachment</a></p>";
    }
    $lessonHours = $row["Lesson_Hours"];
    $date = $row["Date"];
    $lessonCode = $row["Lesson_Id"];
    $lessonStatus = $row["Lesson_Status"];
    $bookingDate = $row["Booking_Date"];
    $lessonType = $row["Type"];
    $addressStreet = $row["Address_Street"];
    $addressSuburb = $row["Address_Suburb"];
    $addressCity = $row["Address_City"];
    $addressZip = $row["Address_Zip"];
    if ($lessonType != "On Campus Tutoring") {
        $address = '<p><strong>Address Information </strong></p>'
                . ' <p><strong>Street & Suburb:</strong><br>' . $addressStreet . ', ' . $addressSuburb . '</p>
                    <p><strong>City & Zip Code:</strong><br>' . $addressCity . ', ' . $addressZip . '</p>
                ';
    } else {
        $address = '';
    }

    // End Lesson Information
    //Personal Info 
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `scimatix_members_information` WHERE Id = '$studentId';");
    $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
    // Personal Information
    $name = $row["Name"] . " " . $row["Surname"];
    $contacts = "Email Address: " . $row["Email_Address"] . " | Cell #: " . $row["Phone"];
    // End Personal Information
    //Tutor Personal Info 
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `scimatix_members_information` WHERE Id = '$tutorId';");
    $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
    // Personal Information
    $tutorName = $row["Name"] . " " . $row["Surname"];
    $tutorContacts = "Email Address: " . $row["Email_Address"] . " | Cell #: " . $row["Phone"];
    // End Tutor Personal Information
    //Secondary Info
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `members_personal_information` WHERE Member_Id = '$studentId';");
    $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
    //Information
    $profile = $row["Profile_Picture"];
    if ($profile == "") {
        $profile = "images/profile.png";
    } else {
        $profile = "http://scimatix.elabvine.com/" . $profile;
    }
    //End Secondary Info
    //Tutor Secondary Info
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `members_personal_information` WHERE Member_Id = '$tutorId';");
    $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
    //Information
    $tutorProfile = $row["Profile_Picture"];
    if ($tutorProfile == "") {
        $tutorProfile = "images/profile.png";
    } else {
        $tutorProfile = "http://scimatix.elabvine.com/" . $tutorProfile;
    }
    //End Tutor Secondary Info
}
?>
<a href="javascript:window.history.back()" class="btn btn-outline-primary btn-lg btn-block">Back To Main View</a>

<hr>
<h4>Assigned Lesson - In Progress</h4><br>
<div class="alert alert-info fade in alert-dismissible show">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true" style="font-size:20px">×</span>
    </button>    <strong>Alert!</strong> Assign a tutor to this lesson below.
</div>
<hr>

<div class="col-lg-12 col-md-12">
    <div class="btn-group btn-block">
        <button onclick="finishLesson(<?php echo $lessonId; ?>)" class="btn btn-success">Finish Lesson</button>
        <button onclick="blockLesson(<?php echo $lessonId; ?>)" class="btn btn-danger">Block Lesson</button>
    </div> 
</div>

<hr>

<div class="col-lg-12 col-md-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title mb-3">Student Profile Card</strong>
        </div>
        <div class="card-body">
            <div class="mx-auto d-block">
                <img class="rounded-circle mx-auto d-block" style="width:197px; hight:158px;" src="<?php echo $profile; ?>" alt="Card image cap">
                <h5 class="text-sm-center mt-2 mb-1"><?php echo $name; ?></h5>
                <div class="location text-sm-center"><i class="fa fa-phone"></i> <?php echo $contacts; ?></div>
            </div>
            <hr>
            <div class="mx-auto d-block">
                <img class="rounded-circle mx-auto d-block" style="width:197px; hight:158px;" src="<?php echo $tutorProfile; ?>" alt="Card image cap">
                <h5 class="text-sm-center mt-2 mb-1"><?php echo $tutorName; ?></h5>
                <div class="location text-sm-center"><i class="fa fa-phone"></i> <?php echo $tutorContacts; ?></div>
            </div>

        </div>
        <div class="card-footer">
            <strong class="card-title mb-3">Lesson Information</strong><br>
            <div class="col-lg-6 col-md-6">
                <p><strong><?php echo $lessonType; ?> </strong></p>
                <p><strong>Subject:</strong><br><?php echo $subject; ?></p>
                <p><strong>Description:</strong><br><?php echo $description; ?></p>
                <p><strong>Grade:</strong><br><?php echo $grade; ?></p>
                <?php echo $attachment; ?>
            </div>
            <div class="col-lg-6 col-md-6">

                <p><strong>Lesson Length:</strong><br><?php echo $lessonHours; ?></p>
                <p><strong>Booked Date:</strong><br><?php echo $date; ?></p>
                <p><strong>Lesson Code:</strong><br><?php echo $lessonCode; ?></p>
                <p><strong>Posted:</strong><br><?php echo facebook_time_ago($bookingDate); ?></p>
            </div>
            <div class="col-lg-12 col-md-12">
                <?php echo $address; ?>
            </div>
        </div>
    </div>

</div>
<script>
    //Redirect if no Id
    var $num = <?php echo $redirect; ?>;
    if ($num == 1) {
        window.location.assign("lessons-in-progress.php");
    }
    //Finish lesson
    function finishLesson($Id) {
        $.post("../php/post.php",
                {
                    a29: 1,
                    id: $Id
                },
                function (data, status) {
                    var $data = data.replace(/ /g, "");
                    if ($data == "success") {
                        alertify.alert("Alert", "Lesson Finished.");
                        setTimeout(function () {
                            window.location.href = "lessons-in-progress.php"
                        }, 2000);
                    } else {
                        alertify.alert("Alert", "An error occured retry.");
                    }
                });

    }
    //Block lesson
    function blockLesson($Id) {
        $.post("../php/post.php",
                {
                    a28: 1,
                    id: $Id
                },
                function (data, status) {
                    var $data = data.replace(/ /g, "");
                    if ($data == "success") {
                        alertify.alert("Alert", "Lesson blocked.");
                        setTimeout(function () {
                            window.location.href = "lessons-in-progress.php"
                        }, 2000);
                    } else {
                        alertify.alert("Alert", "An error occured retry.");
                    }
                });

    }
    //Assign tutor tutors
    function assignTutorToLesson($Id) {
        $.post("../php/post.php",
                {
                    a27: 1,
                    id: $Id,
                    code: "<?php echo $lessonCode;?>"
                },
                function (data, status) {
                    var $data = data.replace(/ /g, "");
                    if ($data == "success") {
                        alertify.alert("Alert", "Success tutor assigned please call the tutor or send a tutor an email.");
                        setTimeout(function () {
                            window.location.href = "lessons-in-progress.php"
                        }, 3000);
                    } else {
                        alertify.alert("Alert", "An error occured retry.");
                    }
                });

    }
    //Show tutors
    function potentialTutorsAssignment() {
        $.post("../php/get.php",
                {
                    a19: 1
                },
                function (data, status) {
                    $("#list-potentialTutorsAssignment").html(data);
                });

    }
    potentialTutorsAssignment();
</script>