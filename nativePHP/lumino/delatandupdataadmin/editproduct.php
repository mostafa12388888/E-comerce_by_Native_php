<?php
if(isset($_POST['sub'])){
    include "../seeachone_acces.php";
    $name=$_POST['name'];
    $price=$_POST['price'];
    $descount=$_POST['discount'];
    $idcat=$_POST['option'];
    $description=$_POST['description'];
    $namephoto=$_FILES['image']['name'];
    $locationPhoto=$_FILES['image']['tmp_name'];
    $ID=$_POST['id'];
    move_uploaded_file($locationPhoto,"pictuers/$namephoto");
    $stock=$_POST['stock'];
    if(empty($namephoto)){
        $Insert="UPDATE `proudect` SET  `p_name`='$name', `descrption`='$description',`id_catgoury`='$idcat', `price`='$price', `discount`='$descount', `stock`='$stock' WHERE `id`='$ID';";
    }else{
        $Insert="UPDATE `proudect` SET  `p_name`='$name',`id_catgoury`='$idcat',`descrption`='$description', `price`='$price',`img`='$namephoto' ,`discount`='$descount', `stock`='$stock' WHERE `id`='$ID';";
    };
    $conection->query($Insert);
    header("location:../elements.php");
    die;
}

?>