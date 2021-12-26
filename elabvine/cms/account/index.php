<?php

    include("../php/session.php");
    //comapany name
    $company_name = preg_replace('/[^A-Za-z0-9\-]/', '', $company_name);
    $company_name = strtolower($company_name);
    //Redirect
    header("Location: $company_name");

?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
    <head>
        <!-- Site Title -->
        <title>Main Dashboard</title>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Meta Description -->
        <meta name="description" content="Main Dashboard.">
        <link rel="shortcut icon" href="../img/favicon-img.png">
    </head>
    <body>
        
    </body>
</html>