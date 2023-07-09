<?php
include "../seeachone_acces.php";
$ID=$_GET['id'];
echo $ID;
$delat="DELETE  FROM `admin` WHERE `id`='$ID';";
$conection->query($delat);
header("location:../index.php");
?> 