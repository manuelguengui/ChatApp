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
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE uniqui_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_assoc($sql);
            }
            ?>

                <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                <img src="img.jpg" alt="" width="200px">
                <div class="details">
                    <span>Coding Napel</span>
                    <p>this is test massage</p>
                </div>
            </header>
            <div class="chat-box">
                <div class="chat outgoing">
                    <div class="details">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    </div>
                </div>

                <div class="chat incoming">
                    <img src="img.jpg" alt="">
                    <div class="details">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    </div>
                </div>

                <div class="chat outgoing">
                    <div class="details">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    </div>
                </div>

                <div class="chat incoming">
                    <img src="img.jpg" alt="">
                    <div class="details">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    </div>
                </div>

                <div class="chat outgoing">
                    <div class="details">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    </div>
                </div>

                <div class="chat incoming">
                    <img src="img.jpg" alt="">
                    <div class="details">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    </div>
                </div>

                <div class="chat outgoing">
                    <div class="details">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    </div>
                </div>

                <div class="chat incoming">
                    <img src="img.jpg" alt="">
                    <div class="details">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <form action="#" class="typing-area">
                <input type="text" name="" id="" placeholder="Type a message here...">
                <button><i class="fab fa-telegram-plane"></i></button>
            </form>
        </section>
    </div>
</body>

</html>