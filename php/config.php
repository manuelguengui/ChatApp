<?php

$conn = mysqli_connect("localhost","root", "", "chat");

if(!$conn){
    echo("Database disconnected". mysqli_connect_error());
}



