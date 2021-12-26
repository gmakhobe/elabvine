<?php

 if($sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `company_template` WHERE company_id = '$our_companyid';")){
     
     $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
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
     $sign_banner1 = $row['sign_banner1'];
     if($sign_banner1 != "img/top-banner.jpg"){
         $sign_banner1 = "http://"."$sign_banner1";
     }
     $sign_banner2 = $row['sign_banner2'];
     if($sign_banner2 != "img/top-banner.jpg"){
         $sign_banner2 = "http://"."$sign_banner2";
     }
     $sign_banner3 = $row['sign_banner3'];
     if($sign_banner3 == ""){
         $sign_banner3 = "#5eb1bf";
     }
     $dashboard_banner1 = $row['dashboard_banner1'];
     if($dashboard_banner1 != "img/banner-bg.jpg"){
         $dashboard_banner1 = "http://"."$dashboard_banner1";
     }
     $dashboard_banner2 = $row['dashboard_banner2'];
     if($dashboard_banner2 == ""){
         $dashboard_banner2 = "#5eb1bf";
     }
     
     
 }else{
     
     
 }

?>
