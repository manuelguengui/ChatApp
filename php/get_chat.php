<?php
session_start();

if (isset($_SESSION["unique_id"])) {
  include_once("config.php");

  $outgoing_id = mysqli_real_escape_string($conn, $_POST["outgoing_id"]);
  $income_id = mysqli_real_escape_string($conn, $_POST["income_id"]);
  $output = "";

  $slq = "SELECT * FROM messages LEFT JOIN users ON users.uniqui_id = messages.outgoing_msg_id WHERE ( outgoing_msg_id = {$outgoing_id} AND income_msg_id ={$income_id}) OR ( outgoing_msg_id = {$income_id} AND income_msg_id = {$outgoing_id}) ORDER BY message_id";

  $query = mysqli_query($conn, $slq);
  if (mysqli_num_rows($query) > 0) {

    while ($row = mysqli_fetch_assoc($query)) {

      if ($row['outgoing_msg_id'] === $outgoing_id) {
        $output .= '<div class="chat outgoing">
                      <div class="details">
                        <p>'. $row["msg"].'</p>
                      </div>
                   </div>';
      } else {
        $output .= '<div class="chat incoming">
                      <img src="php/imgUser/'.$row["img"].'" alt="">
                        <div class="details">
                          <p>'. $row["msg"].'</p>
                       </div>
                    </div>';
      }
    }
    echo($output);
  }
} else {
  header("location: ../login.php");
}
