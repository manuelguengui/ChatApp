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
    <title>Realtime chat | Sign up</title>
</head>

<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Realtime Chat App</header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-text">This is an erro message</div>
                <div class="name-details">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" name="fname" id="" placeholder="First name" required autofocus>
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" name="lname" id="" placeholder="Last name" required>
                    </div>
                </div>
                <div class="field input">
                    <label>Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your E-mail" required>
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" id="" placeholder="Enter new Password" required>
                    <i class="fa fa-eye"></i>
                </div>
                <div class="field image">
                    <label>Select Image</label>
                    <input type="file" name="image" required>
                </div>
                <div class="field button">
                    <input type="submit" value="Continue to Chat">
                </div>
            </form>
            <div class="link">Already signed up? <a href="login.php">Login now</a></div>
        </section>
    </div>
    <script src="js/pass_show_hide.js"></script>
    <script src="js/signup.js"></script>

</body>

</html>