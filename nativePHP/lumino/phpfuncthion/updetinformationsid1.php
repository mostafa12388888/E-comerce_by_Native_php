<?php
if(isset($_POST['sub'])){
    include "../seeachone_acces.php";
    $facebook=$_POST['facebook'];
    $Edit="UPDATE `sidinformation` SET `facebook`='$facebook';";
    $conection->query($Edit);
    header("location:../SidInformation.php");

};
?>