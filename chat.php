<?php
session_start();
include_once("php/config.php");

if(!isset($_SESSION["unique_id"])){
    header("location: login.php");
}

?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Criação de um chat, prendendo com coding Napel">
    <meta name="author" content="Manuel Guengui">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Realtime chat | Chat</title>
</head>

<body>
    <div class="wrapper">
        <section class="chat-area">
            <header>

            <?php
            $user_id = mysqli_real_escape_string($conn, $_GET["user_id"]);
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE uniqui_id = {$user_id}");
            if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_assoc($sql);
            }
            ?>

                <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                <img src="php/imgUser/<?php echo($row['img']);?>" alt="" width="200px">
                <div class="details">
                    <span><?php echo($row['fname']. ' '. $row['lname']); ?></span>
                    <p><?php echo($row['status']); ?></p>
                </div>
            </header>
            <div class="chat-box">

                

                
            </div>
            <form action="#" class="typing-area">
                <input type="text" name="outgoing_id" id="" value="<?php echo($_SESSION['unique_id']); ?>" hidden>
                <input type="text" name="income_id" id="" value="<?php echo($user_id); ?>" hidden>
                <input type="text" name="message" class="input-field" id="" placeholder="Type a message here...">
                <button><i class="fab fa-telegram-plane"></i></button>
            </form>
        </section>
    </div>
    <script src="js/chat.js"></script>
</body>

</html>