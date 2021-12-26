<?php

//Is Config
if ($account_status == "Step 1" || $account_status == "Step 2") {
    header("Location: account-config.php");
}
//Student or Tutor
if ($account_type == "Student") {
    $nav_1 = "includes/nav-1-student.php";
    $nav_2 = "includes/nav-2-student.php";
    $nav_3 = "includes/nav-3-student.php";
} else {
    $nav_1 = "includes/nav-1-tutor.php";
    $nav_2 = "includes/nav-2-tutor.php";
    $nav_3 = "includes/nav-3-tutor.php";
}
if($profile_picture == ""){
    $profile_picture = "../img/profile.png";
}
if($Hours == 0){
    $book_lesson_url = "#";
}else{
    $book_lesson_url = "book-a-lesson.php";
}

?>