<?php 
if(isset($_POST['submit'])){
	include 'connection.php';
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$file = $_FILES['image']['name'];
	$file_temp = $_FILES['image']['tmp_name'];
	move_uploaded_file($file_temp, "../images/$file");

	$insert_admin = "INSERT INTO admin (name , password , image) VALUES('$username' , '$password' , '$file')";
	$connection->query($insert_admin);
	header("location:../index.php");



}

?>