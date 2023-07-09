<?php
include 'project_des/header.php';
include 'project_des/nav.php';
$ID=$_GET['id'];
$SELECT="SELECT * FROM `blog` WHERE id='$ID';";
$SELECT2="SELECT * FROM `comentofblog` WHERE `row`='$ID' ORDER BY id DESC LIMIT 3;";
$val=$conection->query($SELECT);

$values=$val->fetch_assoc();
// $values2=$val2->fetch_assoc();
?>
  <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-details-inner">
                        <div class="blog-detail-title">
                            <h2>  <?php echo $values['title'];?></h2>
                            <p> <span>-   <?php echo $values['dete'];?></span></p>
                        </div>
                        <div class="blog-large-pic">
                            <img src="../lumino/pictuers/<?php echo $values['photo'];?>" alt="">
                        </div>
                        <div class="blog-detail-desc">
                            <p>
                                <?php echo $values['Explain'];?>
                            </p>
                        </div>
                        <div class="blog-quote">
                            <p>“ Technology is nothing. What's important is that you have a faith in people, that
                                they're basically good and smart, and if you give them tools, they'll do wonderful
                                things with them.” <span>- Steven Jobs</span></p>
                        </div>
                      
                        <div class="tag-share">
                            <div class="details-tag">
                                <ul>
                                    <li><i class="fa fa-tags"></i></li>
                                    <li>Travel</li>
                                    <li>Beauty</li>
                                    <li>Fashion</li>
                                </ul>
                            </div>
                            <div class="blog-share">
                                <span>Share:</span>
                                <div class="social-links">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-post">
                            <div class="row">
                                <div class="col-lg-5 col-md-6">
                                    <a href="#" class="prev-blog">
                                        <div class="pb-pic">
                                            <i class="ti-arrow-left"></i>
                                            <img src="img/blog/prev-blog.png" alt="">
                                        </div>
                                        <div class="pb-text">
                                            <span>Previous Post:</span>
                                            <h5>The Personality Trait That Makes People Happier</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-5 offset-lg-2 col-md-6">
                                    <a href="#" class="next-blog">
                                        <div class="nb-pic">
                                            <img src="img/blog/next-blog.png" alt="">
                                            <i class="ti-arrow-right"></i>
                                        </div>
                                        <div class="nb-text">
                                            <span>Next Post:</span>
                                            <h5>The Personality Trait That Makes People Happier</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php foreach($val2=$conection->query($SELECT2) as $values2):?>
                        <div class="posted-by">
                            <div class="pb-pic">
                                <img src="img/blog/post-by.png" alt="">
                            </div>
                            <div class="pb-text">
                                <a href="#">
                                    <h5><?php echo $values2['name']; ?></h5>
                                </a>
                                <p><?php echo $values2['Coment']; ?></p>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <div class="leave-comment">
                            <h4>Leave A Comment</h4>
                            <form action="project_function/comentbyuser.php" method="post" class="comment-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Name" name="name">
                                        <input type="hidden" name="id" value="<?php echo $ID?>">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Email" name="email">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea placeholder="Messages" name="coment"></textarea>
                                        <button type="submit" name="submit" class="site-btn">Send message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->

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
    <?php include 'project_des/footer.php'; ?>