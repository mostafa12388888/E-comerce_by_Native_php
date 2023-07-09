<?php
if(isset($_POST['sub'])){
    include "../seeachone_acces.php";
    $likedin=$_POST['likedin'];
    $Edit="UPDATE `sidinformation` SET `linked`='$likedin';";
    $conection->query($Edit);
    header("location:../SidInformation.php");

};
?>