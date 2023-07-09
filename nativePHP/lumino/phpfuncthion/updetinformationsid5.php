<?php
if(isset($_POST['sub'])){
    include "../seeachone_acces.php";
    $email=$_POST['email'];
    $Edit="UPDATE `sidinformation` SET `email`='$email';";
    $conection->query($Edit);
    header("location:../SidInformation.php");

};  
?>