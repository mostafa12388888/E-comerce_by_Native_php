<?php
include 'project_des/header.php';
include 'project_des/nav.php';
?>

<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="#"><i class="fa fa-home"></i> Home</a>
                    <span>Shop</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Product Shop Section Begin -->
<section class="product-shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                <div class="filter-widget">
                    <h4 class="fw-title">category</h4>
                    <ul class="filter-catagories" id="catagories">
                        <?php
                        $select_all_cat = "SELECT `cat-name` FROM category";
                        $result_all_cat = $conection->query($select_all_cat);
                        foreach ($result_all_cat as $key_all_cat) {
                        ?>
                            <li><a href="#"><?php echo $key_all_cat['cat-name']; ?></a></li>
                        <?php
                        }

                        ?>

                    </ul>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Brand</h4>
                    <div class="fw-brand-check">
                        <div class="bc-item">
                            <label for="bc-calvin">
                                Calvin Klein
                                <input type="checkbox" id="bc-calvin">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="bc-item">
                            <label for="bc-diesel">
                                Diesel
                                <input type="checkbox" id="bc-diesel">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="bc-item">
                            <label for="bc-polo">
                                Polo
                                <input type="checkbox" id="bc-polo">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="bc-item">
                            <label for="bc-tommy">
                                Tommy Hilfiger
                                <input type="checkbox" id="bc-tommy">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Price</h4>
                    <div class="filter-range-wrap">
                        <div class="range-slider">
                            <div class="price-input">
                                <input type="text" id="minamount">
                                <input type="text" id="maxamount">
                            </div>
                        </div>
                        <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="33" data-max="98">
                            <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                        </div>
                    </div>
                    <a href="#" class="filter-btn">Filter</a>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Color</h4>
                    <div class="fw-color-choose">
                        <div class="cs-item">
                            <input type="radio" id="cs-black">
                            <label class="cs-black" for="cs-black">Black</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-violet">
                            <label class="cs-violet" for="cs-violet">Violet</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-blue">
                            <label class="cs-blue" for="cs-blue">Blue</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-yellow">
                            <label class="cs-yellow" for="cs-yellow">Yellow</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-red">
                            <label class="cs-red" for="cs-red">Red</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-green">
                            <label class="cs-green" for="cs-green">Green</label>
                        </div>
                    </div>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Size</h4>
                    <div class="fw-size-choose">
                        <div class="sc-item">
                            <input type="radio" id="s-size">
                            <label for="s-size">s</label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" id="m-size">
                            <label for="m-size">m</label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" id="l-size">
                            <label for="l-size">l</label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" id="xs-size">
                            <label for="xs-size">xs</label>
                        </div>
                    </div>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Tags</h4>
                    <div class="fw-tags">
                        <a href="#">Towel</a>
                        <a href="#">Shoes</a>
                        <a href="#">Coat</a>
                        <a href="#">Dresses</a>
                        <a href="#">Trousers</a>
                        <a href="#">Men's hats</a>
                        <a href="#">Backpack</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 order-1 order-lg-2">
                <div class="product-show-option">
                    <div class="row">
                        <div class="col-lg-7 col-md-7">
                            <div class="select-option">
                                <select class="sorting">
                                    <option value="">Default Sorting</option>
                                </select>
                                <select class="p-show">
                                    <option value="">Show:</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 text-right">
                            <p>Show 01- 09 Of 36 Product</p>
                        </div>
                    </div>
                </div>
                <div class="product-list">
                    <div class="row">

                        <?php

                        $select_all_pro = "SELECT * FROM proudect";
                        $result_all_pro = $conection->query($select_all_pro);
                        foreach ($result_all_pro as $key_pro) {
                            $id_cat = $key_pro['id_catgoury'];

                            $select_cat = "SELECT `cat-name` FROM category WHERE `id` = '$id_cat';";
                            $result_cat = $conection->query($select_cat);
                            $count = 0;
                            $key_cat=$result_cat->fetch_assoc();

                        ?>


                                <div class="col-lg-4 col-sm-6 catagoriesDIV" id="catagoriesDIV">
                                    <div class="product-item">
                                        <div class="pi-pic">
                                            <img src="../lumino/pictuers/<?php echo $key_pro['img']; ?>" style="width:200;" alt="">
                                            <div class="sale pp-sale">Sale</div>
                                            <div class="icon">
                                                
                                                <i data="<?php echo $key_pro['id'];?>" class="icon_heart_alt" style="<?php
                                                 $IDproduct=$key_pro['id'];
                                                $Selectid2="SELECT * FROM `liked` WHERE `id_product`='$IDproduct';"; 
                                                $V2=$conection->query($Selectid2);
                                                $value2=$V2->fetch_assoc();
                                                if(isset($_SESSION['email'])){if(empty($value2['id_product'])){ echo "color:black;";}else{echo "color:red;";};}else{{ echo "color:black;";}}
                                               
                                                ?>"></i>
                                            </div>
                                            <ul>
                                            <?php if(isset($_SESSION['email'])){?> <li class="w-icon active"   data="<?php echo $key_pro['id'];?>"><a style="cursor:pointer;"> <i class="icon_bag_alt"></i></a></li><?php }else{?> <li class="w-icon active"   data="<?php echo $key_pro['id'];?>"><a href="login.php"> <i class="icon_bag_alt"></i></a></li><?php }; ?>
                                                <li class="quick-view"><a href="dtailsofprodect.php?id=<?php echo $key_pro['id']; ?>" style="cursor:pointer;">+ Quick View</a></li>
                                                <li class="w-icon"><a><i class="fa fa-random"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="pi-text">
                                            <div class="catagory-name"><?php echo $key_cat['cat-name']; ?></div>
                                            <a href="#">
                                                <h5><?php echo $key_pro['p_name']; ?></h5>
                                            </a>
                                            <div class="product-price">
                                                $<?php echo $key_pro['discount']; ?>
                                                <span>$<?php echo $key_pro['price']; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        <?php }; ?>

                    </div>
                </div>
                <div class="loading-more">
                    <i class="icon_loading"></i>
                    <a href="#">
                        Loading More
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Shop Section End -->

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
