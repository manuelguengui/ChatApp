<?php
include_once("config.php");

$searchTerm = mysqli_real_escape_string($conn, $_POST["searchTerm"]);
$sql= mysqli_query($conn, "SELECT * FROM users WHERE fname LIKE '%{$searchTerm}%' OR lname LIKE '%{$searchTerm}%'");
$output = '';

if(mysqli_num_rows($sql) > 0){
  include("data.php");
}else {
  $output .= "No users found related to your search";
}
echo($output);

?>