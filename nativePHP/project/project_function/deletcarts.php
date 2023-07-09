<?php
if(isset($_GET['id'])){
    include '../../lumino/seeachone_acces.php';
    $ID=$_GET['id'];
    $delete="DELETE FROM `shop_cart` WHERE `id`='$ID';";
    $conection->query($delete);
    header("location:../shopping-cart.php");
}
?>