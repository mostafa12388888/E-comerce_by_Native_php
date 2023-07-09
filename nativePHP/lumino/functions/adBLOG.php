<?php 
if(isset($_POST['sub'])){
    include "../seeachone_acces.php";
    $title=$_POST['title'];
    $date=$_POST['data'];
    $EXPlain=$_POST['description'];
    $namephoto=$_FILES['image']['name'];
    $locationPhoto=$_FILES['image']['tmp_name'];
    move_uploaded_file($locationPhoto,"../pictuers/$namephoto");
    echo $title.$date.$EXPlain;
    $insert="INSERT INTO `blog`(`title`,`dete`,`photo`,`Explain`) VALUES ('$title','$date','$namephoto','$EXPlain');";
    $conection->query($insert);
    header("location:../BLOG.PHP");
    die;
};
?>