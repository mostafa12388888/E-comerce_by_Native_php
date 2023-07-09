<?php
 include "../seeachone_acces.php"; 
 $ID=$_GET['id'];
 $DELETE="DELETE FROM `category` WHERE `id`='$ID';";
 $conection->query($DELETE);
 header("location:../charts.php");
?>