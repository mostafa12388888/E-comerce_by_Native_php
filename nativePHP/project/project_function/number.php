<?php 
if(isset($_POST['number'])){
    include '../../lumino/seeachone_acces.php';
    $number=$_POST['number'];
    $update="UPDATE `shop_cart` SET `NUMBER`='$number';";
    $conection->query($update);
}
header("location:../shopping-cart.php");
?>