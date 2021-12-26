<?php

    include('../../php/config.php');

    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM learnx_users;");
    $number_users = mysqli_num_rows($sql);
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM learnx_users WHERE Account_Status = 'Step 1';");
    $number_unpaid_users = mysqli_num_rows($sql);
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM learnx_users WHERE Account_Status = 'Step 3';");
    $number_paid_users = mysqli_num_rows($sql);
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `learnx_unlock_codes` WHERE Status = 'Not Active';");
    $number_redeemed_codes = mysqli_num_rows($sql);
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `learnx_unlock_codes` WHERE Status = 'Not Active';");
    $number_redeemed_codes = mysqli_num_rows($sql);
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `learnx_users_app`;");
    $number_app_users = mysqli_num_rows($sql);
    
?>