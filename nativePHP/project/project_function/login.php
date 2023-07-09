<?php
 if(isset($_POST['sub'])){
    include '../../lumino/seeachone_acces.php';
    $email=$_POST['email'];
    $password=$_POST['password'];
    $select="SELECT * FROM `users`WHERE `email`='$email';";
   $val=$conection->query($select);
    $value=$val->fetch_assoc();
    
    if($value['passord'] == $password){
        session_start();
        $_SESSION['email']=$email;
        header("location:../index.php");
    }else{
        header("location:../login.php");
    }

 }

?>