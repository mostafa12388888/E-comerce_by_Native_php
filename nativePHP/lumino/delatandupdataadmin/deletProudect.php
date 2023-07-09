<?php
 include "../seeachone_acces.php"; 
 $ID=$_GET['id'];
 $DELETE="DELETE FROM `proudect` WHERE `id`='$ID';";
 $conection->query($DELETE);
 header("location:../elements.php");
?>