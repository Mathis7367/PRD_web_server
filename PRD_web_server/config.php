<?php
$server = "127.0.0.1";
$username1 = "root";
$password1 = "";
$database1 = "users";

$link = mysqli_connect ($server,  $username1,  $password1,  $database1);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>


