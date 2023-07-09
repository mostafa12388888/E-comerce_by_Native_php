<?php
if(isset($_POST['sub'])){
    include "../seeachone_acces.php";
    $touter=$_POST['touter'];
    $Edit="UPDATE `sidinformation` SET `tout`='$touter';";
    $conection->query($Edit);
    header("location:../SidInformation.php");

};   
?>