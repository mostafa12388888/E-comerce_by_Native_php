<?php 
if(isset($_POST['submit'])){
	include 'connection.php';
	$username = $_POST['username'];
	$id = $_POST['id'];
	$file = $_FILES['image']['name'];
	$file_temp = $_FILES['image']['tmp_name'];
	move_uploaded_file($file_temp, "../images/$file");

	if(!empty($file)){
		$update_img = "UPDATE admin SET image = '$file' , name = '$username' WHERE id = $id";
		$connection->query($update_img);

	}else
	{
		 $update_admin = "UPDATE admin SET name = '$username' WHERE id = $id";
	     $connection->query($update_admin);
	}



	
	header("location:../index.php");



}