<?php
  if (session_status() == PHP_SESSION_NONE) {
  session_start();}
  $_SESSION["loginstatus_visitor"]="false";
session_unset();
session_destroy(); 

header("location:home_page_try.php");
?>
