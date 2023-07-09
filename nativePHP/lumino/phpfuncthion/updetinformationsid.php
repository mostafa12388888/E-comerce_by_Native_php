<?php
if(isset($_POST['sub'])){
    include "../seeachone_acces.php";
    $adress=$_POST['adress'];   
    $Edit="UPDATE `sidinformation` SET `adress`='$adress';";
    $conection->query($Edit);
    header("location:../SidInformation.php");

};
    
?>