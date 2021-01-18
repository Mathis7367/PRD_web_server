<?php
// Initialize the session
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true ){
	
    header("location: ../login.php");
    exit;
}
if ('admin' != $_SESSION['username']){
    header("location: ../logout.php");
    exit;
}
require('phpMQTT.php');

$server = '192.168.43.181';     // change if necessary
$port = 1883;                     // change if necessary
$username = 'PRD';                   // set your username
$password = 'ECAM';                   // set your password
$client_id = 'phpMQTT-publisher'; // make sure this is unique for connecting to sever - you could use uniqid()

$mqtt = new Bluerhinos\phpMQTT($server, $port, $client_id);
$y = $_POST['btn'];
echo "$y";
//header("Location: climatisation_manuelle.php?btnval=$y");

if ($mqtt->connect(true, NULL, $username, $password)) {
	$mqtt->publish('python/test', $y);
	$mqtt->close();
	header("Location: climatisation_manuelle.php?btnval=$y");
} else {
	header("Location: climatisation_manuelle.php?btnval=$y");
    echo "Time out!\n";
}

?>

0479357087 m sete