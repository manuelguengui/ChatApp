<?php
session_start();
include_once("config.php");
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$password = mysqli_real_escape_string($conn, $_POST["password"]);

if(!empty($email) && !empty($password)){

  $sql = mysqli_query($conn, "SELECT * FROM users WHERE EMAIL = '{$email}' AND password = '{$password}'");

  if(mysqli_num_rows($sql) > 0){

    $row = mysqli_fetch_assoc($sql);
    $status = "Active now";
    $sql2 = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE uniqui_id = {$row['uniqui_id']}");

    if($sql2){
      $_SESSION["unique_id"] = $row["uniqui_id"];
      echo("Sucess");

    }

  }else {
    echo("email or password incorrect");
    
  }
}else {
  echo("All input field are required");
/* By: Manuel Francisco Chimdemba Guengui copywrite Coding Napel*/
}
?>