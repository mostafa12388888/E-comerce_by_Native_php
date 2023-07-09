<?php
if(isset($_POST['sub'])){
    include "../seeachone_acces.php";
    $name=$_POST['name'];
    $price=$_POST['price'];
    $descount=$_POST['descount'];
    $description=$_POST['description'];
    $namephoto=$_FILES['image']['name'];
    $locationPhoto=$_FILES['image']['tmp_name'];
    move_uploaded_file($locationPhoto,"../pictuers/$namephoto");
    $stock=$_POST['stock'];
    $option=$_POST['option'];
    $Insert="INSERT INTO `proudect`( `p_name`, `descrption`, `price`,`img`, `discount`, `stock`, `id_catgoury`) VALUES ('$name','$description','$price','$namephoto',' $descount','$stock','$option');";
    $conection->query($Insert);
    header("location:../elements.php");
    die;
}

?>