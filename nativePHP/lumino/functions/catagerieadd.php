<?php

if(isset($_POST['sub'])){
    include "../seeachone_acces.php";
    $name=$_POST['cat-name'];
$insertCat="INSERT INTO `category`(`cat-name`) VALUE ('$name');";
$conection->query($insertCat);
header("location:../charts.php");
}
?>