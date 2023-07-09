<?php 
include "../seeachone_acces.php"; 
$ID=$_GET['id'];
$DELETE="DELETE FROM `blog` WHERE `id`='$ID';";
$select="SELECT `photo` FROM `blog` WHERE `id`='$ID';";
$DELETE2="DELETE FROM `comentofblog` WHERE `row`='$ID';";
$conection->query($DELETE);
$conection->query($DELETE2);
$val=$conection->query($select);
$values=$val->fetch_assoc();
$v=$values['photo'];
if(file_exists("../pictuers/$v"))
unlink("../pictuers/$v");

header("location:../BLOG.php");

?>