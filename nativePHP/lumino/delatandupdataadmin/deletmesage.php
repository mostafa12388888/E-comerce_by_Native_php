<?php
include '../seeachone_acces.php';
$ID=$_GET['id'];
$SELECTValue="DELETE FROM `mesagesent` WHERE `id`='$ID';";
$conection->query($SELECTValue);
header("location:../panels.php");

?>