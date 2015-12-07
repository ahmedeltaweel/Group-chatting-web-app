<?php
require 'database.php';

//check for submit 
if(	isset($_POST['submit']) ){
	//getting input data
	$user = mysqli_real_escape_string( $con,$_POST['user']);
	$message = mysqli_real_escape_string($con,$_POST['message']);

	//getting time
	date_default_timezone_set('Africa/Cairo');
	$time = date('h:m:s' , time());
	
	//validating input data and redirect
	if(!isset($user) || $user == '' || !isset($message) || $message ==''){
		$error = 'Please enter user name and message';
		header('location: index.php?error='.urlencode($error));
		exit();
	}else{
		if(!$con->query("INSERT INTO shouts (user , message , time) VALUES ('$user' , '$message' , '$time');")){
			die('error ' . mysqli_error($con));
		}else{
			header('location: index.php');
			exit();
		}
	}
}