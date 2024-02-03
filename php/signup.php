<?php
session_start();
include_once("config.php");

$fname = mysqli_real_escape_string($conn, $_POST["fname"]);
$lname = mysqli_real_escape_string($conn, $_POST["lname"]);
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$password = mysqli_real_escape_string($conn, $_POST["password"]);

if (!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {
  // let's check user email is valid or not
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // if email is valid
    //let's check if that email already exists in database

    $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
    if (mysqli_num_rows($sql) > 0) { //if already exists
      echo ("$email - this email already exist!!");
    } else {
      // let's check if user upload a image
      if (isset($_FILES["image"])) {
        // print_r($_FILES["image"]);

        $img_name = $_FILES["image"]["name"]; //getting image name
        $img_type = $_FILES["image"]["type"]; //getting image type
        $tmp_name = $_FILES["image"]["tmp_name"]; //this is temporary name, is used to save/move file in our folder

        //let's explode the image to get the extension
        $img_explode = explode(".", $img_name);
        $img_ext = end($img_explode); // here We get the extension of the image 

        $extension = ["jpeg", "jpg", "png", "JPEG", "JPG", "PNG"]; // The only valid extension
        if (in_array($img_ext, $extension) === true) {
          $time = time(); //this will create us current time

          $new_img_name = $time . $img_name;

          if (move_uploaded_file($tmp_name, "imgUser/" . $new_img_name)) {
            $status = "active now";
            $random_id = rand($time, 10000000);

            $sql2 = mysqli_query($conn, "INSERT INTO users (uniqui_id, fname,	lname, email, password, img, status) VALUES ({$random_id}, '{$fname}', '{$lname}', '{$email}', '{$password}', '{$new_img_name}', '{$status}')");

            if ($sql2) {
              $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");

              if (mysqli_num_rows($sql3) > 0) {
                $row = mysqli_fetch_assoc($sql3);
                $_SESSION['unique_id'] = $row['uniqui_id'];
                echo ("Sucess");
              }
            } else {
              echo ("Something went wrong");
            }
          }
        } else {
          echo ("Select a image jpeg, jpg or png");
        }
      } else {
        echo ("please select a image file");
      }
    }
  } else {
    echo ("$email - This is not valid email!");
  }
} else {
  echo ("All the input field are requered");
}
