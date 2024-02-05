<?php
session_start();
if (isset($_SESSION["unique_id"])) {
  include_once("config.php");

  $logout = mysqli_real_escape_string($conn, $_GET["logout"]);
  if (isset($logout)) {
    $status = "Offline now";
    $sql = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE uniqui_id = {$logout}");
    if ($sql) {
      session_unset();
      session_destroy();
      header("location: ../login.php");
    }

  }else {
    header("location: ../users.php");
  }
} else {
  header("../login.php");
/* By: Manuel Francisco Chimdemba Guengui copywrite Coding Napel*/
}
?>