<?php 
if(isset($_POST['submit'])){
	include 'connection.php';
	$name = $_POST['name'];
	$id = $_POST['id'];
	
	
	
		 $update_category = "UPDATE categories SET cat_name = '$name' WHERE id = $id";
	     $connection->query($update_category);




	
	header("location:../categories.php");



}