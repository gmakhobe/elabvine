<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: http://scimatix.co.za");
      $cookie_name = "remember_me_scimatix";
      setcookie($cookie_name, null, -1, '/');
   }
?>