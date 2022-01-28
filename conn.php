<?php
$hostname="localhost";
$username="root";
$password="";
$db="comp_lab";
$con=mysqli_connect($hostname,$username,$password,$db);

//check connection//
if($con === false)
{
	die("connection failed because".mysqli_connect_error());
}
?>