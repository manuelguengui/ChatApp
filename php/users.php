<?php
session_start();
include_once("config.php");
$outgoing_id = $_SESSION["unique_id"];
$sql = mysqli_query($conn, "SELECT * FROM users WHERE NOT uniqui_id = {$outgoing_id}");
$output = '';

if (mysqli_num_rows($sql) == 0) {
  $output .= "No users available to chat";

} elseif (mysqli_num_rows($sql) > 0) {
  include("data.php");
}
echo($output);
/* By: Manuel Francisco Chimdemba Guengui copywrite Coding Napel*/

?>
