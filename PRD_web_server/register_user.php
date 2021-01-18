<?php



session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true ){
	
    header("location: ../login.php");
    exit;
}
if ('admin' != $_SESSION['username']){
    header("location: ../login.php");
    exit;
}
require_once "config.php";
$username = $_POST['login'];
$pwd = $_POST['pwd'];

$sql = "INSERT INTO users (username , password) VALUES (?,?)";
if($stmt1 = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt1, "ss", $username, $pwd);
            
            // Set parameters
            //$param_username = $username;
            //$param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt1)){
				header("location: ./admin/users_admin.php");
	
			}else{
				header("location: ./admin/users_admin.php");
			}
		}

