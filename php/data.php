<?php

while ($row = mysqli_fetch_assoc($sql)) {

  $sql2 = "SELECT * FROM messages WHERE (income_msg_id = {$row['uniqui_id']} OR outgoing_msg_id = {$row['uniqui_id']}) AND (outgoing_msg_id = {$outgoing_id} OR income_msg_id = {$outgoing_id}) ORDER BY message_id DESC LIMIT 1";

  $query2 = mysqli_query($conn, $sql2);
  $row2 =  mysqli_fetch_assoc($query2);

  if(mysqli_num_rows($query2) > 0){
    $result = $row2["msg"];

  }else {
    $result = "No message available";

  }

  // trimming massage if word are more than 28

  (strlen($result) > 18)? $msg = substr($result, 0, 28)."..." : $msg = $result;
  ($outgoing_id == $row2["outgoing_msg_id"]) ? $you = "you: ": $you= "him: ";

  $output .= '<a href="chat.php?user_id='.$row['uniqui_id'].'">
<div class="content">
    <img src="php/imgUser/' . $row['img'] . '" alt="" width="200px">
    <div class="details">
        <span>' . $row['fname'] . ' ' . $row['lname'] . '</span>
        <p>'.$you .$msg.'</p>
    </div>
</div>

<div class="status-dot"><i class="fas fa-circle"></i></div>
</a>';

}
?>