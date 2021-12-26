<?php

    include('../../php/config.php');

    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM learnx_users;");
    $number_users = mysqli_num_rows($sql);
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM learnx_users_app;");
    $number_app_users = mysqli_num_rows($sql);
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `learnx_unlock_codes` WHERE Status = 'Active';");
    $number_active_codes = mysqli_num_rows($sql);
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `learnx_unlock_codes` WHERE Status = 'Not Active';");
    $number_redeemed_codes = mysqli_num_rows($sql);
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `learnx_unlock_codes` WHERE Status = 'Not Active';");
    $number_redeemed_codes = mysqli_num_rows($sql);
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `learnx_tasker` WHERE Status = 'Complete';");
    $number_completed_tasks = mysqli_num_rows($sql);
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `learnx_tasker` WHERE Status = 'Active';");
    $number_active_tasks = mysqli_num_rows($sql);

?>