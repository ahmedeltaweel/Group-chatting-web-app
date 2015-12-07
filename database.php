<?php 

//database credintials
$host = '';
$username = '';
$password = '';
$DBname = '';

//connecting to DB
$con = new mysqli( $host , $username , $password , $DBname);

if($con->connect_errno){
	die('failed to connect ' . $con->connect_errno);
}