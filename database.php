<?php 

$con = new mysqli('' , '' , '' , '');

if($con->connect_errno){
	die('failed to connect ' . $con->connect_errno);
}