<?php

$DATABASE_ADDRESS = $DATABASE_USERNAME = $DATABASE_PASSWORD = $DATABASE_NAME = $DATABASE_CONNECTION = "";

$DATABASE_ADDRESS = 'localhost';
    $DATABASE_USERNAME = 'root';
    $DATABASE_PASSWORD = '';
    $DATABASE_NAME = 'elabvine';

$DATABASE_CONNECTION = mysqli_connect($DATABASE_ADDRESS, $DATABASE_USERNAME, $DATABASE_PASSWORD, $DATABASE_NAME);

if (!$DATABASE_CONNECTION) {
    #internal error
    $db_connection_results = "<div class='alert alert-danger'>
            <p class='text-danger'>
                Our servers are down contact us at webmaster@elabvine.co.za with subject of |reg_error| to get assistance.
            </p>
        </div>";
} else {

    if (file_exists("companyuri.txt")) {

        $myfile = fopen("companyuri.txt", "r");
        $companyuri = fread($myfile, filesize("companyuri.txt"));
        fclose($myfile);
    } else if (file_exists("php/companyuri.txt")) {

        $myfile = fopen("php/companyuri.txt", "r");
        $companyuri = fread($myfile, filesize("php/companyuri.txt"));
        fclose($myfile);
    }else if (file_exists("../php/companyuri.txt")) {

        $myfile = fopen("../php/companyuri.txt", "r");
        $companyuri = fread($myfile, filesize("../php/companyuri.txt"));
        fclose($myfile);
    }
}
?>