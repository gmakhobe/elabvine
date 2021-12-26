<?php

if ($user_grade == "" || $user_grade == "NA" ) {
    $notification_grade = '
                <div class="alert alert-warning alert-dismissable text-center">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Grade!</strong> You need to select your current grade on your profile.
                 </div>
                ';
}else{
    $notification_grade = "";
}
if ($user_province == "" || $user_province == "NA" ) {
    $notification_province = '
                <div class="alert alert-warning alert-dismissable text-center">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Province!</strong> You need to select province you reside in.
                 </div>
                ';
}else{
    $notification_province = "";
}

echo $notification_grade.$notification_province;
?>