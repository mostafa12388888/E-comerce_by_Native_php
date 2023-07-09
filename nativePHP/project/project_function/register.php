<?php
if(isset($_POST['sub'])){
   
    $name=$_POST['Fname'];
    $LastName=$_POST['LastName'];
    $password=$_POST['password'];
    $coPassword=$_POST['coPassword'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    if($password===$coPassword){
        include '../../lumino/seeachone_acces.php';
        $insert="INSERT INTO `users`(`firstName`,`LastName`,`email`,`passord`,`phone`) VALUES ('$name','$LastName','$email','$password','$phone');";
        $conection->query($insert);
        header("location:../login.php");
    }else{
        header("location:../register.php");
    }
}

?>