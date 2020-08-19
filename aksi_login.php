<?php

session_start();

$username=$_POST["username"];
$password=$_POST["password"];

if($username=="admin" AND $password=="admin")
{
	$_SESSION["username"]=$username;
	header("location:pelanggan.php");
}else{
	header("location:login.php?login_error");
}
?>