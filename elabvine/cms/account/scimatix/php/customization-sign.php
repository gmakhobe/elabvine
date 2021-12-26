<?php

 if($sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `company_template` WHERE company_id = '$our_companyid';")){
     
     $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
     $text1 = $row['sign_text1'];
     $text2 = $row['sign_text2'];
     $text3 = $row['sign_text3'];
     $text4 = $row['sign_text4'];
     $image_section_1 = $row['sign_image1'];
     if($image_section_1 != "img/sigup.jpg"){
         $image_section_1 = "http://"."$image_section_1";
     }
     $image_section_2 = $row['sign_image2'];
     if($image_section_2 != "img/signin.jpg"){
         $image_section_2 = "http://"."$image_section_2";
     }
     if($text1 == ""){
         $text1 = "This is a text";
     }
     if($text2 == ""){
         $text2 = "This is a text";
     }
     if($text3 == ""){
         $text3 = "This is a text";
     }
     if($text4 == ""){
         $text4 = "This is a text";
     }
     $sign_banner1 = $row['sign_banner1'];
     if($sign_banner1 != "img/top-banner.jpg"){
         $sign_banner1 = "http://"."$sign_banner1";;
     }
     $sign_banner2 = $row['sign_banner2'];
     if($sign_banner2 != "img/top-banner.jpg"){
         $sign_banner2 = "http://"."$sign_banner2";;
     }
     $sign_banner3 = $row['index_banner3'];
     if($sign_banner3 == ""){
         $sign_banner3 = "#5eb1bf";
     }
     
 }else{
     
     $text1 = "";
     $text2 = "";
     $image_section_1 = "";
      $image_section_2 = "";
     
 }

?>
