<?php

#Get total users
$sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM scimatix_members_information;");
$users_total_users = mysqli_num_rows($sql);
//Get total students
$sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM scimatix_members_information WHERE Account_Type = 'Student';");
$users_total_students = mysqli_num_rows($sql);
//Get total tutors
$sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM scimatix_members_information WHERE Account_Type = 'Tutor';");
$users_total_tutors = mysqli_num_rows($sql);
//Get total wallet balance
$sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `members_personal_information`;");
if (mysqli_num_rows($sql) > 0) {
    $users_total_wallet = 0;
    while ($row = mysqli_fetch_array($sql)) {
        $users_total_wallet += $row['Wallet'];
    }
} else {
    $users_total_wallet = 0;
}
$sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `scimatix_members_lessons` WHERE Lesson_Status = 'Waiting' OR Lesson_Status = 'Accepted' OR Lesson_Status = 'Finished' OR Lesson_Status = 'Rejected' OR Lesson_Status = 'Blocked';");
$users_total_lessons = mysqli_num_rows($sql);
?>




