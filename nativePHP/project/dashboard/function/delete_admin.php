<?php
include 'connection.php'; 
$id = $_GET['id'];

$delete_admin = "DELETE FROM admin WHERE id = $id";
$connection->query($delete_admin);
header("location:../index.php");
?>