<?php

include('config.php');
include('timeago.php');
include('recycling.php');

if (!isset($_COOKIE['our_company_id'])) {
    $our_companyid = "";
} else {
    $our_companyid = mysqli_real_escape_string($DATABASE_CONNECTION, $_COOKIE['our_company_id']);
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM company WHERE company_id = '$our_companyid';");
    $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
}

if (isset($_REQUEST['a1'])) {

    if (!isset($_FILES['coldetail']['name'])) {

        $header = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST['colname']);
        $detail = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST['coldetail']);


        if (mysqli_query($DATABASE_CONNECTION, "UPDATE `company_template` SET $header = '$detail' WHERE company_id = '$our_companyid'")) {

            echo "success";
        } else {
            echo "error";
        }
    } else {


        $directory = "../cdn/media/images/";
        $unique = rand(1000000, 100000000);
        $attach = $directory . basename($_FILES['coldetail']['name']);
        $attachsize = $_FILES["coldetail"]["size"];
        $attachtmpname = $_FILES["coldetail"]["tmp_name"];

        $extension = pathinfo($attach, PATHINFO_EXTENSION);
        $new = md5($attach) . '.' . $extension;
        $fulldir = $directory . $new;
        $fullname = "cdn.elabvine.com/media/images/" . $new;

        if ($attachsize > 5000000) {
            echo "File Error";
        } else {

            $header = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST['colname']);

            if (mysqli_query($DATABASE_CONNECTION, "UPDATE `company_template` SET $header = '$fullname' WHERE company_id = '$our_companyid'")) {

                //ID Generator
                $word = array_merge(range('a', 'z'), range('A', 'Z'), range(0, 9));
                shuffle($word);
                $id = substr(implode($word), 0, 10);

                if (move_uploaded_file($attachtmpname, $directory . $new)) {
                    echo "success";
                } else {
                    echo "error Upload";
                }
            } else {

                echo "error UPDATE";
            }
        }
    }
}
?>