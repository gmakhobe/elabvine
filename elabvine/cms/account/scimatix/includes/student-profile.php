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
    $dateBirth = $row["Date_Birth"];
    $gender = $row["Gender"];
    $grade = $row["Grade"];
    $school = $row["School"];
    $profile = $row["Profile_Picture"];
    if ($profile == "") {
        $profile = "images/profile.png";
    } else {
        $profile = "http://scimatix.elabvine.com/" . $profile;
    }
    $guardianName = $row["Guardian_Name"];
    $guardianPhone = $row["Guardian_Phone"];
    $guardianEmail = $row["Guardian_Email"];
    $lessonObject = "Hours Available: " . $row["Hours"] . " Hours | Wallet Ballance: ZAR " . $row["Wallet"];
}
?>
<a href="users-two.php" class="btn btn-outline-primary btn-lg btn-block">Back To Student Main View</a>

<hr>

<div class="col-lg-12 col-md-12">
    <div class="btn-group btn-block">
        <button onclick="addWallet(<?php echo  $userId;?>)" class="btn btn-success">Increase Money (Wallet)</button>
        <button onclick="addHours(<?php echo  $userId;?>)" class="btn btn-primary">Add Hours (Lessons)</button>
        <button onclick="deleteUser(<?php echo  $userId;?>)" class="btn btn-danger">Permanently Delete User</button>
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
                <div class="location text-sm-center"><i class="fa fa-map-marker"></i> <?php echo $address; ?></div>
            </div>
            <hr>
            <div class="card-text text-sm-center">
                <a href="#"><?php echo $contacts; ?></a>
            </div>
            <hr>
            <div class="card-text text-sm-center">
                <a href="#"><?php echo $lessonObject; ?></a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <h3>Secondary Information</h3>
        <br>
        <table class="table table-dark table-hover">
            <tbody>
                <tr>
                    <td>Date Of Birth</td>
                    <td><?php echo $dateBirth; ?></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td><?php echo $gender; ?></td>
                </tr>
                <tr>
                    <td>Grade</td>
                    <td><?php echo $grade; ?></td>
                </tr>
                <tr>
                    <td>School</td>
                    <td><?php echo $school; ?></td>
                </tr>
            </tbody>
        </table>
        <h3>Guardian Information</h3><br>
        <table class="table table-dark table-hover">
            <tbody>
                <tr>
                    <td>Guardian Name</td>
                    <td><?php echo $guardianName; ?></td>
                </tr>
                <tr>
                    <td>Guardian Phone Number</td>
                    <td><?php echo $guardianPhone; ?></td>
                </tr>
                <tr>
                    <td>Guardian Email Address</td>
                    <td><?php echo $guardianEmail; ?></td>
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