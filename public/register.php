<?php
//=======================================================
//TEAM A
//Project Title:          Senior Project
//Project Date:           1/16/18
//Programmer:             Carlos Henderson
//File name:              register.php
//Description:            Inputs data in to database 
//Last Update:            1/31/18
//=========================================================




//============================================
//INCOMING DATA
//============================================
//CREATE VARS AND LOAD THE INCOMING POSTED DATA 
$name = $_POST['name'];

$email = $_POST['email'];

$username = $_POST['username'];

$address = $_POST['address'];

$city = $_POST['city'];

$state = $_POST['state'];

$zip = $_POST['zip'];

$pwd = Password_hash($_POST['pwd']);



//=============================================
//MAIN
//=============================================
$result = mysqli_query($con,"INSERT INTO `users` (name,email,username,address,city,state,zip,password)VALUES('$name','$email','$username','$address','$city','$state','$zip','$pwd')");
if($result){
		$msg = "<p><strong>New User successfully inserted</strong>";
		
		
	}else{
		$error_message = mysqli_error($con);
		$msg = "There is an error:$error_msg";
	}
?>