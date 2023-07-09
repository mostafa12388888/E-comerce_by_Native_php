<?php
 include '../lumino/seeachone_acces.php';
 session_start();
 if(isset($_SESSION['email']))
 $email=$_SESSION['email'];
 ?>
<body>
    <!-- Page Preloder -->
    <div id="preloder">

        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
       <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        <?php
                        if(isset($_SESSION['email']))
                        echo $email;?>
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                       <?php 
                       if(isset($_SESSION['email'])){
                        $SELECTphone="SELECT* FROM `users` WHERE `email`='$email';";
                       $valuser=$conection->query($SELECTphone);
                       $valueuser=$valuser->fetch_assoc();
                       echo "+20 ".$valueuser['phone'];
                       }else{echo "+20";}
                       ?>
                    </div>
                </div>
                <div class="ht-right">
                <a href="<?php 
                    if(!isset($_SESSION['email'])){
                        echo "login.php";
                    }else{
                        echo "logout.php" ;
                    }
                    ?>" class="login-panel"><i class="fa fa-user"></i><?php 
                    if(!isset($_SESSION['email'])){
                        echo "log in";
                    }else{
                        echo "log out" ;
                    }
                    ?></a>
                    <div class="lan-selector">
                        <select class="language_drop" name="countries" id="countries" style="width:300px;">
                            <option value='yt' data-image="img/flag-1.jpg" data-imagecss="flag yt"
                                data-title="English">English</option>
                            <option value='yu' data-image="img/flag-2.jpg" data-imagecss="flag yu"
                                data-title="Bangladesh">German </option>
                        </select>
     </div>
                    <div class="top-social">
                   <?php $dSelect="SELECT * FROM `sidinformation`;";
                            $val=$conection->query($dSelect);
                            $value=$val->fetch_assoc();?>
                    <a href="<?php echo $value['facebook'];?>"><i class="fa fa-facebook"></i></a>
                            <a href="<?php echo $value['tout'];?>"><i class="fa fa-twitter"></i></a>
                            <a href="<?php echo $value['linked'];?>"><i class="ti-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="./index.php">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <button type="button" class="category-btn">All Categories</button>
                            <form action="#" class="input-group">
                                <input type="text" placeholder="What do you need?">
                                <button type="button"><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right col-md-3">
                    <?php
                     $IDuserK=0;  if(isset($_SESSION['email'])){
                        $email=$_SESSION['email'];
                        $select12="SELECT * FROM `users` WHERE`email`='$email';";
                        $val16=$conection->query($select12);
                        $value15=$val16->fetch_assoc();
                     $IDuserK=$value15['id'];       
                    } 
  ?>
                        <ul class="nav-right">
                            <li class="heart-icon">
                                <a href="#">
                                    <i class="icon_heart_alt"></i>
                                    <span><?php if(isset($_SESSION['email'])){
                                        // $valueID=$IDuserK;
                                        $SELECT="SELECT * FROM `liked` WHERE`id_user`=' $IDuserK';";
                                        $f=$conection->query($SELECT);
                                        $value33=$f->fetch_assoc();
                                        if(!empty($value33['total'])){
                                            echo $value33['total'];
                                        }else{echo "0";}
                                    }else{echo "0";}; ?></span>
                                </a>
                            </li>
                            <li class="cart-icon">
                                <a href="#">
                                    <i class="icon_bag_alt"></i>
                                    <span><?php
                                    if(isset($_SESSION['email'])){
                                        $email=$_SESSION['email'];
                                        $select12="SELECT * FROM `users` WHERE`email`='$email';";
                                        $val16=$conection->query($select12);
                                        $value15=$val16->fetch_assoc();
                                     $IDuserKk=$value15['id'];
                                    $selectshop="SELECT * FROM `shop_cart` WHERE`id_user`='$IDuserKk';"; 
                                    $valll=$conection->query($selectshop);
                                    // $valuuee=$valll->fetch_assoc();
                                     $count=0;
                                    foreach($valll as $v){
                                        $count+=$v['number'];
                                    } ;
                                    
                                    echo $count;}else{echo "0";}?> </span>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody id=tbody>
                                                <!-- this rol is very php or ajax or nativ js -->
                                                <?php $valueTotal=0;

                                                if(isset($_SESSION['email'])){
                                                    $selectshop2="SELECT * FROM `shop_cart` WHERE`id_user`='$IDuserKk';"; 
                                          $valll2=$conection->query($selectshop2);
                                                 foreach($valll2 as $valuerrr): ?>
                                                <tr>
                                                    <td class="si-pic"><img src="../lumino/pictuers/<?php echo $valuerrr['img']; ?>" style="width:110px;" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p><?php if(empty($valuerrr['discount'])){
                                                        $valueTotal+=$valuerrr['number']*$valuerrr['price']; echo $valuerrr['price']."$"."X".$valuerrr['number'];}else{ $valueTotal+=$valuerrr['number']*$valuerrr['discount'];echo $valuerrr['discount']."$"."X".$valuerrr['number'];};?></p>
                                                            <h6><?php echo $valuerrr['name']; ?></h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <a href="project_function/deletcarts.php?id=<?php echo $valuerrr['id']; ?>" class="btn-dangers"><i class="ti-close"></i></a>
                                                    </td>
                                                </tr>
                                                <?php endforeach;}else{ echo "0";}; ?>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span>total:</span>
                                        <h5>$<?php echo $valueTotal; ?></h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="shopping-cart.php" class="primary-btn view-card">VIEW CARD</a>
                                        <a href="#" class="primary-btn checkout-btn">CHECK OUT</a>
                                    </div>
                                </div>
                            </li>
                            <li class="cart-price">$<?php echo $valueTotal; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>All departments</span>
                        <ul class="depart-hover">
                            <li class="active"><a href="#">Women’s Clothing</a></li>
                            <li><a href="#">Men’s Clothing</a></li>
                            <li><a href="#">Underwear</a></li>
                            <li><a href="#">Kid's Clothing</a></li>
                            <li><a href="#">Brand Fashion</a></li>
                            <li><a href="#">Accessories/Shoes</a></li>
                            <li><a href="#">Luxury Brands</a></li>
                            <li><a href="#">Brand Outdoor Apparel</a></li>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="./home.php">Home</a></li>
                        <li><a href="./shop.php">Shop</a></li>
                        <li><a href="#">Collection</a>
                            <ul class="dropdown">
                                <li><a href="#">Men's</a></li>
                                <li><a href="#">Women's</a></li>
                                <li><a href="#">Kid's</a></li>
                            </ul>
                        </li>
                        <li><a href="./blog.php">Blog</a></li>
                        <li><a href="./contact.php">Contact</a></li>
                        <li><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="./blog-details.php">Blog Details</a></li>
                                <li><a href="./shopping-cart.php">Shopping Cart</a></li>
                                <li><a href="./check-out.php">Checkout</a></li>
                                <li><a href="./faq.php">Faq</a></li>
                                <li><a href="./register.php">Register</a></li>
                                <li><a href="./login.php">Login</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->