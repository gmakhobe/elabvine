<?php

if ($sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `company_template` WHERE company_id = '$our_companyid';")) {

    $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
    $text1 = $row['post_text1'];
    $text2 = $row['post_text2'];
    $text3 = $row['post_text3'];
    $text4 = $row['post_text4'];
    $text5 = $row['post_text5'];
    $text6 = $row['post_text6'];
    $text7 = $row['post_text7'];
    $text8 = $row['post_text8'];
    $text9 = $row['post_text9'];
    $text10 = $row['post_text10'];
    $text11 = $row['post_text11'];
    $text12 = $row['post_text12'];
    $text13 = $row['post_text13'];
    $text14 = $row['post_text14'];
    $text15 = $row['post_text15'];
    $text16 = $row['post_text16'];
    $text17 = $row['post_text17'];
    $text18 = $row['post_text18'];
    $text19 = $row['post_text19'];
    $text20 = $row['post_text20'];
    $text21 = $row['post_text21'];
    $text22 = $row['post_text22'];
    $text23 = $row['post_text23'];
    $text24 = $row['post_text24'];
    $text25 = $row['post_text25'];
    $text_3 = $row['get_text8'];
    $dashboard_banner2 = $row['dashboard_banner2'];
    if ($dashboard_banner2 == "") {
        $dashboard_banner2 = "#5eb1bf";
    }

    if ($text_3 == "") {
        $text_3 = "<option>select</option>";
    } else {
        $skills = explode(", ", $text_3);

        $text_3 = "<option>Select</option>";

        foreach ($skills as $arrays) {

            if ($arrays == "") {
                
            } else {
                $text_3 .= " <option value='$arrays'>" . $arrays . "</option>";
            }
        }
    }
    $text_8 = $row['get_text3'];

    if ($text_8 == "") {
        $text_8 = "<option>select</option>";
    } else {
        $skills = explode(", ", $text_8);

        $text_8 = "<option>Select</option>";

        foreach ($skills as $arrays) {

            if ($arrays == "") {
                
            } else {
                $text_8 .= " <option value='$arrays'>" . $arrays . "</option>";
            }
        }
    }
} else {

    $text1 = '';
    $text2 = '';
    $text3 = '';
    $text4 = '';
    $text5 = '';
    $text6 = '';
    $text7 = '';
    $text8 = '';
    $text9 = '';
    $text10 = '';
    $text11 = '';
    $text12 = '';
    $text13 = '';
    $text14 = '';
    $text15 = '';
    $text16 = '';
    $text17 = '';
    $text18 = '';
    $text19 = '';
    $text20 = '';
    $text21 = '';
    $text22 = '';
    $text23 = '';
    $text24 = '';
    $text25 = '';
}
?>
