<?php
if(isset($_POST['sub'])){
include '../../lumino/seeachone_acces.php';
$name=$_POST['name'];
$email=$_POST['email'];
$details=$_POST['details'];
$insertTOTable="INSERT INTO`mesagesent`(`user_name`,`user_email`,`mesage_details`,`row`) VALUES ('$name','$email','$details',0);";
$conection->query($insertTOTable);
header("location:../contact.php");
}
?>