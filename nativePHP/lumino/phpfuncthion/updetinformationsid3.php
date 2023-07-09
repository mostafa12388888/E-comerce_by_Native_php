<?php
if(isset($_POST['sub'])){
    include "../seeachone_acces.php";
    $phone= $_POST['phone'];
    $Edit="UPDATE `sidinformation` SET `phone`='$phone';";
    $conection->query($Edit);
    header("location:../SidInformation.php");

};  
?>