<?php 


  
  session_start();
  $log = 0;
  if(isset($_POST['logout'])){
    session_destroy();
  }

  if (isset($_SESSION["user"])) {
    $log = 1;

  }
  
  ?>
  