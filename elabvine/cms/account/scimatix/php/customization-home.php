<?php

 if($sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `company_template` WHERE company_id = '$our_companyid';")){
     
     $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
     $text1 = $row['index_text1'];
     $text2 = $row['index_text2'];
     $text3 = $row['index_text3'];
     $text4 = $row['index_text4'];
     $text5 = $row['index_text5'];
     $text6 = $row['index_text6'];
     $text7 = $row['index_text7'];
     $text8 = $row['index_text8'];
     $text9 = $row['index_text9'];
     $text10 = $row['index_text10'];
     $text11 = $row['index_text11'];
     $text12 = $row['index_text12'];
     $text13 = $row['index_text13'];
     $text14 = $row['index_text14'];
     $text15 = $row['index_text15'];
     $text16 = $row['index_text16'];
     $text17 = $row['index_text17'];
     $text18 = $row['index_text18'];
     $text19 = $row['index_text19'];
     $text20 = $row['index_text20'];
     $text21 = $row['index_text21'];
     $text22 = $row['index_text22'];
     $text23 = $row['index_text23'];
     $text24 = $row['index_text24'];
     $text25 = $row['index_text25'];
     $text26 = $row['index_text26'];
     $text27 = $row['index_text27'];
     $banner1 = $row['index_banner1'];
     if($banner1 != "img/banner-bg.jpg"){
         $banner1 = "http://"."$banner1";
     }
     $banner2 = $row['index_banner2'];
     if($banner2 != "img/s-bg.jpg"){
         $banner2 = "http://"."$banner2";
     }
     $banner3 = $row['index_banner3'];
     if($banner3 == ""){
         $banner3 = "#5eb1bf";
     }
     $image_section2_1 = $row['index_section_2_image1'];
     $image_section2_2 = $row['index_section_2_image2'];
     $image_section2_3 = $row['index_section_2_image3'];
     $image_section2_4 = $row['index_section_2_image4'];
     $image_section2_5 = $row['index_section_2_image5'];
     if($image_section2_1 == ""){
         $image_section2_1 = "img/subjects/s1.jpg";
     }else{
         $image_section2_1 = "http://"."$image_section2_1";
     }
     if($image_section2_2 == ""){
         $image_section2_2 = "img/subjects/s2.jpg";
     }else{
         $image_section2_2 = "http://"."$image_section2_2";
     }
     if($image_section2_3 == ""){
         $image_section2_3 = "img/subjects/s3.jpg";
     }else{
         $image_section2_3 = "http://"."$image_section2_3";
     }
     if($image_section2_4 == ""){
         $image_section2_4 = "img/subjects/s4.jpg";
     }else{
         $image_section2_4 = "http://"."$image_section2_4";
     }
     if($image_section2_5 == ""){
         $image_section2_5 = "img/subjects/s5.jpg";
     }else{
         $image_section2_5 = "http://"."$image_section2_5";
     }
     
     
     
 }else{
     
     $text1 = "";
     $text2 = "";
     $text3 = "";
     $text4 = "";
     $text5 = "";
     $text6 = "";
     $text7 = "";
     $text8 = "";
     $text9 = "";
     $text10 = "";
     $text11 = "";
     $text12 = "";
     $text13 = "";
     $text14 = "";
     $text15 = "";
     $text16 = "";
     $text17 = "";
     $text18 = "";
     $text19 = "";
     $text20 = "";
     $text21 = "";
     $text22 = "";
     $text23 = "";
     $text24 = "";
     $text25 = "";
     $text26 = "";
     $text27 = "";
     
 }

?>
