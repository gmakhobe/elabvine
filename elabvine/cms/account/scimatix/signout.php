<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: ../index.php");
      $cookie_name = "elavine_api_remember_user_session";
      setcookie($cookie_name, null, -1, '/');
   }
?>