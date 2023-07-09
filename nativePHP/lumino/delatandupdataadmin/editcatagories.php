<?php
if(isset($_POST['sub'])){
    include "../seeachone_acces.php"; 

    $ID=$_POST['id'];
    $name=$_POST['cat-name'];
    $UPDARTA="UPDATE `category` SET `cat-name`='$name' WHERE `id`='$ID';";
    $conection->query($UPDARTA);
    header("location:../charts.php");
};

?>