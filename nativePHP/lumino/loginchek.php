<?php
if(isset($_POST["sub"])){
   $email =$_POST['email'];
   $pass =$_POST['password'];
    include "seeachone_acces.php";
    $sName="SELECT * FROM `admin` WHERE `admin`.`email`= '$email' AND `passord`='$pass';";
     $arry=$conection->query($sName);
     $result=$arry->num_rows;
     
     if($result > 0){
      session_start();
        $_SESSION["email"]=$email;
       
        header("location:index.php");
      }
      else
     header("location:login.php");
  
};
?>
