<?php
while ($row = mysqli_fetch_assoc($sql)) {

  $output .= '<a href="chat.php?user_id='.$row['uniqui_id'].'">
<div class="content">
    <img src="php/imgUser/' . $row['img'] . '" alt="" width="200px">
    <div class="details">
        <span>' . $row['fname'] . ' ' . $row['lname'] . '</span>
        <p>this is test massage</p>
    </div>
</div>

<div class="status-dot"><i class="fas fa-circle"></i></div>
</a>';

}
?>