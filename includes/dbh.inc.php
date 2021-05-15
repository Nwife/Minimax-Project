<?php
$servername = "localhost";
$password = "minimax123";
$username = "minimax";
$dbname = "minimax";

//connect to database
$conn = mysqli_connect($servername, $username, $password, $dbname);

//check connection
if(!$conn){
    echo "Connection error: " . mysqli_connect_error();
    // or echo "Connection error" .mysqli_connect_error();
}