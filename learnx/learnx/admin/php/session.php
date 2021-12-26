<?php
   include('../../php/config.php');
   session_start();
   
   $user_check = $_SESSION['session_learnx_admin'];
   
   $ses_sql = mysqli_query($DATABASE_CONNECTION ,"SELECT * FROM learnx_admin WHERE Admin_Id = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $id = $row['Admin_Id'];
   $name = $row['Name'];
   $surname = $row['Surname'];
   
   if(!isset($_SESSION['session_learnx_admin'])){
      header("Location: ../index.php");
      #header("Location: http://learn.elabvine.com/admin");
   }
?>