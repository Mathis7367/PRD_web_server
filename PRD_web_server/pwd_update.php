<?php
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true ){
	
    header("location: login.php");
    exit;
}
require_once "config.php";
 
// Define variables and initialize with empty values
$new_password = $confirm_password = $_POST['pwd'];
$usrname = $_SESSION["username"];
$old_pwd = $_POST['apwd'];
        
    // Check input errors before updating the database
    //if(empty($new_password_err) && empty($confirm_password_err)){
        // Prepare an update statement
		
	if($old_pwd == $_SESSION["password"]){		
			
		$sql = "UPDATE users SET password = ? WHERE username = ?";
		echo "$sql";
		if($stmt = mysqli_prepare($link, $sql)){
			// Bind variables to the prepared statement as parameters
			mysqli_stmt_bind_param($stmt, "ss", $new_password, $usrname);          
			// Set parameters
			echo "$param_password";
			echo "$param_id";
			echo "$sql";
			
					// Attempt to execute the prepared statement
			if(mysqli_stmt_execute($stmt)){
				//Password updated successfully. Destroy the session, and redirect to login page
				session_destroy();
				header("location: logout.php");
				exit();
			} else{
				echo "Oops! Something went wrong. Please try again later.";
			}

			// Close statement
			mysqli_stmt_close($stmt);
	
    
    
	// Close connection
			mysqli_close($link);
		}
	}else{
		print_r($_SESSION);
		$test =$_SESSION["password"];
		echo $_SESSION["username"];
		echo $_SESSION["id"];
		echo $_SESSION["password"];
		echo "Wrong password";
					
	}
					?>