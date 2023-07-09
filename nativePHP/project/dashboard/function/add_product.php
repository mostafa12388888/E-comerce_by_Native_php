<?php 
if(isset($_POST['submit'])){
	include 'connection.php';
	$name = $_POST['name'];
	$price = $_POST['price'];
	$discount = $_POST['discount'];
	$discription = $_POST['discription'];
	$stock = $_POST['stock'];
	$category = $_POST['category'];
	

	$file = $_FILES['image']['name'];
	$file_temp = $_FILES['image']['tmp_name'];
	move_uploaded_file($file_temp, "../images/$file");

	$insert_product = "INSERT INTO  products ( p_name ,  description ,  price ,  image ,  discount ,  stock ,  id_category ) VALUES ('$name' , '$discription' , '$price' , '$file' ,  '$discount' , $stock , $category)";
	$connection->query($insert_product);
	header("location:../products.php");



}

?>