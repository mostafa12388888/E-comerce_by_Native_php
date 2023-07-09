<?php
if(isset($_POST['sub'])){
   
    include "../seeachone_acces.php";
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $namephoto=$_FILES['image']['name'];
    $locationPhoto=$_FILES['image']['tmp_name'];
    move_uploaded_file($locationPhoto,"pictuers/$namephoto");
    if(!empty($namephoto)){
        $updt="UPDATE `admin` SET `img`='$namephoto' WHERE `id`='$ID';";
        $conection->query($updt);
    };
    // $image=$_POST['image'];
    $ID=$_POST['id'];
    $updat="UPDATE `admin` SET `name`='$name',`passord`='$password',`phone`='$phone',`email`='$email' WHERE `id`='$ID';";
    $conection->query($updat);
    header("location:../index.php");
}
?>