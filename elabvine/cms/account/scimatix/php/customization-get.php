<?php

 if($sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `company_template` WHERE company_id = '$our_companyid';")){
     
     $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
     $text1 = $row['get_text1'];
     $text2 = $row['get_text2'];
     $text3 = $row['get_text3'];
     $text4 = $row['get_text4'];
     $text5 = $row['get_text5'];
     $text6 = $row['get_text6'];
     $text7 = $row['get_text7'];
     $text8 = $row['get_text8'];
     $text9 = $row['get_text9'];
     $text10 = $row['get_text10'];
     $text11 = $row['get_text11'];
     $text12 = $row['get_text12'];
     $text13 = $row['get_text13'];
     $text14 = $row['get_text14'];
     $text15 = $row['get_text15'];
     $text16 = $row['get_text16'];
     $text17 = $row['get_text17'];
     $text18 = $row['get_text18'];
     
     
 }else{
     
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
     
 }

?>
