<?php 
if(isset($_POST['submit'])){
$name=$_POST['name'];
$ID=$_POST['id'];
$email=$_POST['email'];
$coment=$_POST['coment'];
include '../../lumino/seeachone_acces.php';
$insert="INSERT INTO `comentofblog`(`name`,`email`,`coment`,`row`) VALUES ('$name','$email','$coment','$ID');";
$conection->query($insert);
header("location:../blog-details.php?id=$ID");
die;
}

?>