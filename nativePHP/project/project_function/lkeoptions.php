<?php
 echo "m.gomaa1";
 session_start();
if(isset($_SESSION['email'])){
    echo "m.gomaa12";
    if(isset($_POST['id'])){
            include '../../lumino/seeachone_acces.php';
            $Scounter="SELECT * FROM `counter`;";
            $ZXV=$conection->query($Scounter);
            $ValueCounter=$ZXV->fetch_assoc();
            $valueCount=$ValueCounter['counter'];
            $IDproduct=$_POST['id'];
            $email=$_SESSION['email'];
            $SelectIdUser="SELECT `id` FROM `users` WHERE `email`='$email';";
            $val=$conection->query($SelectIdUser);
            $value=$val->fetch_assoc();
            $id_user=$value['id'];
           
            $Selectid1="SELECT * FROM `liked` WHERE `id_user`='$id_user';"; 
            $V=$conection->query($Selectid1);
            $value1=$V->fetch_assoc();
            
           
        if(!empty($value1['id_user'])){
            $valueCount=$ValueCounter['counter'];
            $Selectid2="SELECT * FROM `liked` WHERE `id_product`='$IDproduct';"; 
            $V2=$conection->query($Selectid2);
            $value2=$V2->fetch_assoc();
            
            if(!empty($value2['id_product'])){
                $valueNumber=$value1['total'];
                $valueNumber--;
                $valueCount--;
                $upate="UPDATE `liked` SET `total`='$valueNumber';";
                $upatecount="UPDATE `counter` SET `counter`='$valueCount';";
                $delete="DELETE FROM `liked` WHERE `id_product`='$IDproduct';";
                echo "the Number".$valueNumber;
                $conection->query($delete);
            $conection->query($upate);
            $conection->query($upatecount);
            }else{
            $valueNumber=$value1['total'];
            $valueNumber++;
             $valueCount++;
            $upate="UPDATE `liked` SET `total`='$valueNumber';";
            $upatecount="UPDATE `counter` SET `counter`=' $valueCount';";
            $conection->query($upatecount);
            $insert1="INSERT INTO `liked`(`id_user`, `id_product`, `likeNumbers`,`total`) VALUES ('$id_user','$IDproduct',1,'$valueNumber');";
            $conection->query($insert1);
            $conection->query($upate);
            
        }}else{
            $valueCount=$ValueCounter['counter'];
           
             $valueCount++;
            $upatecount="UPDATE `counter` SET `counter`=' $valueCount';";
            $conection->query($upatecount);
            $insert="INSERT INTO `liked`(`id_user`, `id_product`, `likeNumbers`,`total`) VALUES ('$id_user','$IDproduct',1,1);";
       $conection->query($insert);
        } }
}
?>