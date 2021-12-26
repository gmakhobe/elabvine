<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['session_learnx'];
   
   $ses_sql = mysqli_query($DATABASE_CONNECTION ,"SELECT * FROM learnx_users WHERE Email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['Email'];
   $user_name = $row['Name'];
   $user_surname = $row['Surname'];
   $user_phone = $row['Phone'];
   $user_grade = $row['Grade'];
   $user_school = $row['School'];
   $user_province = $row['Province'];
   //if empty
   if($user_province == ""){
       $user_province = "NA";
   }
   $user_password = $row['Password'];
   $Physics = $row['Physics'];
   $Maths = $row['Mathematics'];
   $account_status = $row['Account_Status'];
   if(!isset($_SESSION['session_learnx'])){
      header("Location: http://learn.elabvine.com");
   }
?>