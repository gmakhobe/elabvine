<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: index.php");
      $cookie_name = "remember_me_learnx";
      setcookie($cookie_name, null, -1, '/');
   }
?>