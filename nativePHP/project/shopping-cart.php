<?php
include 'project_des/header.php';
include 'project_des/nav.php'; 


?>
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="./home.html"><i class="fa fa-home"></i> Home</a>
                        <a href="./shop.html">Shop</a>
                        <span>Shopping Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart">
        <div class="container product-data">
            <div class="row">
                <div class="col-2 col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th class="p-name">Product Name</th>
                                    <th>Price</th>
                                    <th>discount</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th><i class="ti-close"></i></th>
                                </tr>
                            </thead>
                                                <tbody>
                                                                    <?php
                                                                    
                                                    if(isset($_SESSION['email'])):
                                                                            $email=$_SESSION['email'];
                                                                            
                                                            $select1="SELECT * FROM `users` WHERE`email`='$email';";
                                                            $val1=$conection->query($select1);
                                                            $value1=$val1->fetch_assoc();
                                                            $IDuserKk=$value1['id'];
                                                        $selectED="SELECT * FROM `shop_cart` WHERE`id_user`='$IDuserKk';"; 
                                                        $xe=$conection->query($selectED);
                                                       $ValueTOTALUE=0;
                                                        foreach ($xe as $valueinthecart):?>
                                                                        <tr>
                                                                            <td class="cart-pic first-row"><img src="../lumino/pictuers/<?php echo$valueinthecart['img'];?>" alt=""></td>
                                                                            <td class="cart-title first-row">
                                                                                <h5> <?php echo $valueinthecart['name'];?></h5>
                                                                            </td>
                                                                            <td class="p-price first-row"><?php echo $valueinthecart['price']."$";?></td>
                                                                            <td class="p-price first-row"><?php echo $valueinthecart['discount']."$";?></td>
                                                                            <td class="qua-col first-row">
                                                                                
                                                                                    
                                                                            <div class="input-group mb-3">
                                                                                <button class="input-group-text decrement-btn updateQty">-</button>
                                                                                <input type="text" value="<?php echo $valueinthecart['number']; ?>" class="form-control bg-white input-qty"  disabled aria-label="Amount (to the nearest dollar)">
                                                                                <button class="input-group-text increment-btn updateQty">+</button>
                                                                            </div>
                                                                                
                                                                            
                                                                            </td>
                                                                            <td class="total-price first-row"><?php 
                                                                            $valueTotal=0;
                                                                            if(empty($valueinthecart['discount'])){

                                                                                $valueTotal+=$valueinthecart['number']*$valueinthecart['price'];}else{ $valueTotal+=$valueinthecart['number']*$valueinthecart['discount'];}; $ValueTOTALUE+=$valueTotal; echo $valueTotal."$"; ?></td>
                                                                            <td class="close-td first-row">
                                                                                
                                                                            <a href="project_function/deletcarts.php?id=<?php echo $valueinthecart['id']; ?>" class="btn btn-dangers"><i class="ti-close"></i></a></td>
                                                                        </tr>
                                                        <?php 
                                                        endforeach;
                                                        endif; ?> 
                                                    
                                                                    
                                                </tbody>
                        </table>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="cart-buttons">
                                <a href="#" class="primary-btn continue-shop">Continue shopping</a>
                                <a href="#" class="primary-btn up-cart">Update cart</a>
                            </div>
                            <div class="discount-coupon">
                                <h6>Discount Codes</h6>
                                <form action="#" class="coupon-form">
                                    <input type="text"  placeholder="Enter your codes">
                                    <button type="submit" class="site-btn coupon-btn">Apply</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 offset-lg-4">
                            <div class="proceed-checkout">
                                <?php  if(isset($_SESSION['email'])): ?>
                                <ul>
                                    <li class="subtotal">Subtotal <span><?php echo $ValueTOTALUE."$";?></span></li>
                                    <li class="cart-total">Total <span><?php echo $ValueTOTALUE."$";?></span></li>
                                </ul>
                                <?php endif; ?>
                                <a href="#" class="proceed-btn">PROCEED TO CHECK OUT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

    <!-- Partner Logo Section Begin -->
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-1.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-2.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-3.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-4.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Logo Section End -->

    <!-- Footer Section Begin -->
 <?php include 'project_des/footer.php'; ?>