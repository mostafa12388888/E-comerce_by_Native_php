<?php
if(isset($_POST["sub"])){
include "seeachone_acces.php";
$B=$_POST['email'];
$C=$_POST['phone'];
$A=$_POST['name'];
$namephoto=$_FILES['image']['name'];
$locationPhoto=$_FILES['image']['tmp_name'];
$CHOSE=$_POST['admin'];
move_uploaded_file($locationPhoto,"pictuers/$namephoto");
$E=$_POST['password'];
$in_values="INSERT INTO `admin`(`name`,`email`,`phone`,`img`,`passord`,`row`) VALUES('$A','$B','$C','$namephoto','$E','$CHOSE');";
$conection->query($in_values);
header("location:index.php");
};

?>