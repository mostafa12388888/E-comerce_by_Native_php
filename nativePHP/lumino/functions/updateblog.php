<?php 
if(isSET($_POST['sub'])){
    include "../seeachone_acces.php";
    $title=$_POST['title'];
    $ID=$_POST['id'];
    $date=$_POST['data'];
    $EXPlain=$_POST['description'];
    $namephoto=$_FILES['image']['name'];
    $locationPhoto=$_FILES['image']['tmp_name'];
    move_uploaded_file($locationPhoto,"../pictuers/$namephoto");
    if(empty($namephoto)){
       $update="UPDATE `blog` SET `title`='$title',`dete`='$date',`Explain`='$EXPlain' WHERE `id`='$ID';"; 
    }else{
        $update="UPDATE `blog` SET `title`='$title',`dete`='$date',`Explain`='$EXPlain',`photo`='$namephoto' WHERE `id`='$ID' ;"; 
    };
    $conection->query($update);
    header("location:../BLOG.php");
}

?>