<?php

 if($sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `company_template` WHERE company_id = '$our_companyid';")){
     
     $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
     $dashboard_text1 = $row['dashboard_text1'];
     $dashboard_text2 = $row['dashboard_text2'];
     $dashboard_image1 = $row['dashboard_image1'];
     $dashboard_image2 = $row['dashboard_image2'];
     $dashboard_image3 = $row['dashboard_image3'];
     $dashboard_image4 = $row['dashboard_image4'];
     $dashboard_image5 = $row['dashboard_image5'];
     $dashboard_banner1 = $row['dashboard_banner1'];
     if($dashboard_banner1 != "img/banner-bg.jpg"){
         $dashboard_banner1 = "http://"."$dashboard_banner1";
     }
     $dashboard_banner2 = $row['dashboard_banner2'];
     if($dashboard_banner2 == ""){
         $dashboard_banner2 = "#5eb1bf";
     }
     if($dashboard_image1 != "img/blog/cat-widget1.jpg"){
         $dashboard_image1 = "http://"."$dashboard_image1";
     }
     if($dashboard_image2 != "img/blog/cat-widget1.jpg"){
         $dashboard_image2 = "http://"."$dashboard_image2";
     }
     if($dashboard_image3 != "img/blog/cat-widget2.jpg"){
         $dashboard_image3 = "http://"."$dashboard_image3";
     }
     if($dashboard_image4 != "img/blog/cat-widget3.jpg"){
         $dashboard_image4 = "http://"."$dashboard_image4";
     }
     if($dashboard_image5 != "img/blog/feature-img1.jpg"){
         $dashboard_image5 = "http://"."$dashboard_image5";
     }
     
     
 }else{
     
     $dashboard_image1 = "";
     $dashboard_image2 = "";
     $dashboard_image3 = "";
     $dashboard_image4 = "";
     $dashboard_image5 = "";
     
 }

?>
