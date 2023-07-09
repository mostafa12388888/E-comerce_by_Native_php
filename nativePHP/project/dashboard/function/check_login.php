<?php

if(isset($_POST['submit'])){
	include 'connection.php';
	$username = $_POST['username'];
	$password = $_POST['password'];

	$select_admin = "SELECT * FROM admin WHERE name = '$username' AND password = '$password'";

	$result_admin = $connection->query($select_admin);
	$count = $result_admin->num_rows;

	if($count > 0){
		session_start();
		$_SESSION['username'] = $username;


     header("Location:../index.php");
	}else
	{
		header("location:../login.php");
	}


}

?>