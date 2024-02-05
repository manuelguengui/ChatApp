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
    <title>Realtime chat | Users</title>
</head>

<body>
    <div class="wrapper">
        <section class="users">
            <header>

            <?php
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE uniqui_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_assoc($sql);
            }
            ?>
            
                <div class="content">
                    <img src="php/imgUser/<?php echo($row['img']);?>" alt="" width="200">
                    <div class="details">
                        <span><?php echo($row['fname']. ' '. $row['lname']); ?></span>
                        <p><?php echo($row['status']); ?></p>
                    </div>
                </div>
                <a href="php/logout.php" class="logout">logout</a>
            </header>

            <div class="search">
                <span class="text">Select an user to start chat</span>
                <input type="text" name="" id="" placeholder="Enter name to search">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="users-list">



                
            </div>
        </section>
    </div>
    <script src="js/users.js"></script>
</body>

</html>