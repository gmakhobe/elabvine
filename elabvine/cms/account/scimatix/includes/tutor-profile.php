<?php
if (!isset($_REQUEST["userId"]) || $_REQUEST["userId"] == 0 || $_REQUEST["userId"] == "") {
    $redirect = 1;
} else {
    //do not redirect
    $redirect = 0;
    //uSER UD
    $userId = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST["userId"]);
    //Personal 
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `scimatix_members_information` WHERE Id = '$userId';");
    $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
    $name = $row["Name"] . " " . $row["Surname"];
    $contacts = "Email Address: " . $row["Email_Address"] . " | Cell #: " . $row["Phone"];
    //User Info 
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `members_personal_information` WHERE Member_Id = '$userId';");
    $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
    $address = $row["Address_Street"] . " " . $row["Address_Suburb"] . "<br>" . $row["Address_City"] . ", " . $row["Address_Zip"];
    $idnumber = $row["Id_Number"];
    $gender = $row["Gender"];
    $occupation = $row["Occupation"];
    $profile = $row["Profile_Picture"];
    if($profile == ""){
        $profile = "images/profile.png";
    }else{
        $profile = "http://scimatix.elabvine.com/".$profile;
    }
    //User Info 
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `scimatix_tutor_profiles` WHERE Member_Id = '$userId';");
    $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
    $language1 = $row["Language_One"];
    $language2 = $row["Language_Two"];
    $studentNumber = $row["Student_Number"];
    $degree = $row["Degree"];
    $shortCourses = $row["Short_Course"];
    $employer = $row["Employer"];
    $position = $row["Position"];
    $periodEmployed = $row["Period_Employed"];
    $subjects = $row["Subjects"];
    $grades = $row["Grades"];
    $idcopy = $row["Id_Documentation"];
    $cvcopy = $row["CV_Documentation"];
}
?>
<a href="javascript:window.history.back()" class="btn btn-outline-primary btn-lg btn-block">Back To Main View</a>

<hr>

<div class="col-lg-12 col-md-12">
<div class="btn-group btn-block">
    <button onclick="UnpublishTutoringProfile(<?php echo $userId;?>)" class="btn btn-warning">Unpublish Application</button>
    <button onclick="BlockTutoringProfile(<?php echo $userId;?>)" class="btn btn-danger">Block Application</button>
</div> 
</div>

<hr>

<div class="col-lg-12 col-md-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title mb-3">Tutor Profile Card</strong>
        </div>
        <div class="card-body">
            <div class="mx-auto d-block">
                <img class="rounded-circle mx-auto d-block" style="width:197px; hight:158px;" src="<?php echo  $profile;?>" alt="Card image cap">
                <h5 class="text-sm-center mt-2 mb-1"><?php echo $name; ?></h5>
                <div class="location text-sm-center"><i class="fa fa-map-marker"></i> <?php echo $address; ?></div>
            </div>
            <hr>
            <div class="card-text text-sm-center">
                <a href="#"><?php echo $contacts; ?></a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <h3>Secondary Information</h3>
        <br>
        <table class="table table-dark table-hover">
            <tbody>
                <tr>
                    <td>Id Number</td>
                    <td><?php echo $idnumber;?></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td><?php echo $gender;?></td>
                </tr>
                <tr>
                    <td>Occupation</td>
                    <td><?php echo $occupation;?></td>
                </tr>
            </tbody>
        </table>
        <h3>Tutoring Information</h3><br>
        <table class="table table-dark table-hover">
            <tbody>
                <tr>
                    <td>Language 1</td>
                    <td><?php echo $language1;?></td>
                </tr>
                <tr>
                    <td>Language 2</td>
                    <td><?php echo $language2;?></td>
                </tr>
                <tr class="table-info">
                    <td><i>If Schooling</i></td>
                </tr>
                <tr>
                    <td>Student Number</td>
                    <td><?php echo $studentNumber;?></td>
                </tr>
                <tr>
                    <td>Degree</td>
                    <td><?php echo $degree;?></td>
                </tr>
                <tr>
                    <td>Short Courses</td>
                    <td><?php echo $shortCourses;?></td>
                </tr>
                <tr class="table-info">
                    <td><i>If Working</i></td>
                </tr>
                <tr>
                    <td>Employer</td>
                    <td><?php echo $employer;?></td>
                </tr>
                <tr>
                    <td>Position</td>
                    <td><?php echo $position;?></td>
                </tr>
                <tr>
                    <td>Period Employed</td>
                    <td><?php echo $periodEmployed;?></td>
                </tr>
                <tr class="table-info">
                    <td><i>Subjects and Grades can tutor</i></td>
                </tr>
                <tr>
                    <td>Subjects</td>
                    <td><?php echo $subjects;?></td>
                </tr>
                <tr>
                    <td>Grades</td>
                    <td><?php echo $grades;?></td>
                </tr>
                <tr class="table-info">
                    <td><i>Documents</i></td>
                </tr>
                <tr>
                    <td>Id Copy Document</td>
                    <td><a href="http://scimatix.elabvine.com/<?php echo $idcopy;?>" class="btn btn-warning"><i class="fa fa-link"></i>&nbsp; View/Download</a></td>
                </tr>
                <tr>
                    <td>Achievement Document</td>
                    <td><a href="http://scimatix.elabvine.com/<?php echo $cvcopy;?>" class="btn btn-warning"><i class="fa fa-link"></i>&nbsp; View/Download</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<script>
    //Redirect if no Id
    var $num = <?php echo $redirect; ?>;
    if ($num == 1) {
        window.location.assign("users-one.php");
    }
</script>