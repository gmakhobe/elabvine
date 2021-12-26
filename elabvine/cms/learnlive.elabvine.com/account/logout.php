<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: ../login.php");
      $cookie_name = "remember_me_learnlive";
      setcookie($cookie_name, null, -1, '/');
   }
?>