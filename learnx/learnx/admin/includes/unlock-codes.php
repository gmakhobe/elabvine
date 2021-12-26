<?php

    include('../../php/config.php');

    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `learnx_unlock_codes`;");
    $number_all_codes = mysqli_num_rows($sql);
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `learnx_unlock_codes` WHERE Status = 'Not Active';");
    $number_redeemed_codes = mysqli_num_rows($sql);
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `learnx_unlock_codes` WHERE Status = 'Active';");
    $number_active_codes = mysqli_num_rows($sql);
    
?>