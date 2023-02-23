<?php
  $con = mysqli_connect("localhost" , "root" , "" , "store") or die("connection failed");

  if(!isset($_SESSION))
  {
   session_start() or die("session start failed");
  }
  $_SESSION['id'] = mysqli_insert_id($con);
?>