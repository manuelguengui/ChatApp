<?php
session_start();

if($_SESSION["unique_id"]){
  session_destroy();
  header("location: ../login.php");
}




?>