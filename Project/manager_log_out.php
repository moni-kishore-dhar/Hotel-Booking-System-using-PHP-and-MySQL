<?php
  if (session_status() == PHP_SESSION_NONE) {
  session_start();}
  $_SESSION["loginstatus_manager"]="false";
session_unset();
session_destroy();

header("location:hotel_manager.php");
?>
