<?php 
session_start();
if(isset($_SESSION['email'])){
if(isset($_POST['id'])){
   
    include '../../lumino/seeachone_acces.php';
   
    $email=$_SESSION['email'];
    $ID=$_POST['id'];
 
    $select1="SELECT `id` FROM `users` WHERE`email`='$email';";
    $val1=$conection->query($select1);
    $value1=$val1->fetch_assoc();
    $IDuser=$value1['id'];
    $select="SELECT * FROM `proudect` WHERE `id`=$ID";
    $val=$conection->query($select);
    $value=$val->fetch_assoc();
    $select_cart="SELECT * FROM `shop_cart` WHERE `id_product`=$ID AND `id_user`='$IDuser';";
    $val_cart=$conection->query($select_cart);
    $value_cart=$val_cart->fetch_assoc();
    
    if(empty($value_cart['id'])){
     $name=$value['p_name'];
     $img=$value['img'];
    $price=$value['price'];
     $discount=$value['discount'];
     
     $insert="INSERT INTO`shop_cart`(`name`,`img`,`price`,`discount`,`number`,`id_user`,`id_product`)VALUES ('$name','$img','$price','$discount',1,'$IDuser','$ID');";
     $conection->query($insert); 
    }else{
        $value_number=$value_cart['number'];
        $value_number++;
        $update_cart="UPDATE`shop_cart` SET `number`='$value_number' WHERE `id_product`=$ID AND `id_user`='$IDuser';";
        $conection->query($update_cart);
     }};
     $select_c="SELECT * FROM `shop_cart` WHERE `id_product`=$ID AND `id_user`='$IDuser';";
     $val_c=$conection->query($select_cart);
     $value_shop=$val_c->fetch_assoc();
        $name1=$value_shop['name'];
        $img1=$value_shop['img'];
        $price1=$value_shop['price'];
        $discount1=$value_shop['discount'];
        $number1=$value_shop['number'];
        if(empty($discount)){
            $array=["name"=> $name1,"img"=>$img1,"price"=>$price1,"number"=>$number1];
           }else{
               $array=["name"=> $name1,"img"=>$img1,"price"=>$discount1,"number"=>$number1];
           }
         echo json_encode($array) ;

    }else{
    echo "";
};
?>