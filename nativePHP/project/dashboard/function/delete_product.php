<?php
include 'connection.php'; 
$id = $_GET['id'];

$delete_product = "DELETE FROM products WHERE id = $id";
$connection->query($delete_product);
header("location:../products.php");
?>