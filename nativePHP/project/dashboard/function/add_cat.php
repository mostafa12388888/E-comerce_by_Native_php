<?php 
if(isset($_POST['submit'])){
	include 'connection.php';
	$name = $_POST['name'];
	

	$insert_category = "INSERT INTO categories (cat_name) VALUES('$name')";
	$connection->query($insert_category);
	header("location:../categories.php");



}

?>