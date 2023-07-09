<?php
include 'connection.php'; 
$id = $_GET['id'];

$delete_category = "DELETE FROM categories WHERE id = $id";
$connection->query($delete_category);
header("location:../categories.php");
?>