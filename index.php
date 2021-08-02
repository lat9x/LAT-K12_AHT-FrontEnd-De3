<?php

require_once "info-list.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet/less" href="less/style.less"> -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- JS -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <!-- <script src="js/less.js"></script> -->
    <script src="js/owl.carousel.js"></script>
    <script src="js/owl.carousel.min.js"></script>

    <title>Bonfire</title>
</head>

<body>
    <div class="wrapper">
        <!-- Header, same as banner in this case -->
        <div class="header">
            <!-- Header top, same as navbar in this case -->
            <div class="header-top">
                <div class="add-padding">
                    <div class="container-fluid">
                        <div class="header-menu">
                            <div class="head-left">
                                <img src="img/bonfire-logo-nav.png" alt="Bonfire Logo">
                            </div>
                            <div class="head-right">
                                <div class="cart"><a href="#"><i class="fas fa-shopping-cart"></i></a></div>
                                <div class="navbar">
                                    <i class="fas fa-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Header top -->

            <!-- Social -->
            <div class="social">
                <ul>
                    <li><a href="#"><span>Facebook</span></a></li>
                    <li><a href="#"><span>Twitter</span></a></li>
                    <li><a href="#"><span>Instagram</span></a></li>
                    <li><a href="#"><span>Youtube</span></a></li>
                </ul>
            </div>
            <!-- End social-->

            <!-- Content of the primary banner/header -->
            <div class="primary-banner-content">
                <div class="container">
                    <div class="primary-banner-content-caption">
                        <p>Spring 2017 </p>
                        <h2>It’s your shine time</h2>
                    </div>
                    <div class="primary-banner-button">
                        <a href="#">Discover now</a>
                    </div>
                </div>
            </div>
            <!-- End content -->
        </div>
        <!-- End header/primary banner -->

        <!-- Strength -->
        <div class="parent-container">
            <div class="container">
                <div class="strengths-wrapper">
                    <div class="row">
                        <div class="col border-right">
                            <div class="col-inner">
                                <h3>Free shipping</h3>
                                <p>All order over $300</p>
                            </div>
                        </div>
                        <div class="col border-right">
                            <div class="col-inner extra-second-strength">
                                <h3>Support customer</h3>
                                <p>Support 24/7</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="col-inner extra-third-strength">
                                <h3>Secure payments</h3>
                                <p>Support 24/7</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End strength-->

    <!-- Banner -->
    <section class="banner">
        <!-- Title -->
        <div class="title-section">
            <p>It started with a simple idea: Create quality, well-designed products that I wanted myself.</p>
        </div>
        <!-- End title -->

        <div class="add-padding">
            <div class="container-fluid">
                <!-- Banner line 1-->
                <div class="row">
                    <div class="col-sm">
                        <div class="col-sm-inner">
                            <a href="#"><img src="img/banner-1.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="col-lg-inner-2">
                            <a href="#"><img src="img/banner-2.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="col-sm-inner-3">
                            <a href="#"><img src="img/banner-3.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="col-sm-inner-4">
                            <a href="#"><img src="img/banner-4.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="col-sm-inner-5">
                            <a href="#"><img src="img/banner-5.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="col-lg-inner-6">
                            <a href="#"><img src="img/banner-6.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <!-- End banner line 1 -->
            </div>
        </div>
    </section>
    <!-- End banner -->

    <!-- Listing feature items -->
    <section class="product">
        <div class="container">
            <!-- Title -->
            <div class="product-title">
                <h3><a href="#">Featured items</a></h3>
                <a href="#" class="view-more">View more<i class="fas fa-chevron-circle-right"></i></a>
            </div>
            <!-- End title -->

            <!-- All feature items -->
            <div class="row">
                <?php foreach ($featureItems as $index => $featureItem) : ?>
                    <div class="product-col">
                        <div class="product-col-inner">
                            <div class="pro-img">
                                <img src="img/item-<?php echo $index ?>.png" alt="This is a feature item's image">
                                <div class="add-pro">
                                    <a href="#" class="add-to-cart">Add to cart</a>
                                    <ul>
                                        <li><a href="#"><i class="far fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fas fa-signal"></i></a></li>
                                        <li><a href="#"><i class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pro-info">
                                <h3 class="pro-info-name"><a href="#"><?php echo $featureItem[0] ?></a></h3>
                                <div class="price"><span><?php echo $featureItem[1] ?></span></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- End all feature items -->
        </div>
    </section>
    <!-- End listing feature items -->

    <!-- Blog -->
    <section class="blogs">
        <div class="container">

            <!-- Blog Title  -->
            <div class="blogs-title">
                <h2>Blog update</h2>
            </div>
            <!-- End blog title  -->

            <!-- All blog posts -->
            <div class="row">
                <?php foreach ($blogs as $index => $blog) : ?>
                    <div class="blogs-col">
                        <div class="blogs-col-inner">
                            <div class="blogs-col-inner-img">
                                <img src="img/blog<?php echo $index ?>.png" alt="Bonfire blog post">
                            </div>
                            <div class="blogs-col-inner-content">
                                <div class="blog-date"><a href="#"><?php echo $blog[0] ?></a></div>
                                <div class="blog-title"><a href="#"><?php echo $blog[1] ?></a></div>
                                <div class="blog-analytic">
                                    <div class="info">
                                        <i class="fas fa-eye"></i><span><?php echo $blog[2] ?></span>
                                    </div>
                                    <div class="info">
                                        <i class="fas fa-share-alt"></i><span><?php echo $blog[3] ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- End all blog posts -->

            <!-- Blog footer  -->
            <div class="go-to-blog">
                <a href="">Go to blog</a>
            </div>
            <!-- End blog footer -->
        </div>
    </section>
    <!-- End Blog -->

    <!-- Branding -->

    <div class="container">
        <div class="owl-carousel owl-theme">
            <img id="first-brand" src="img/brand-1.png" alt="">
            <img id="second-brand" src="img/brand-2.png" alt="">
            <img id="third-brand" src="img/brand-3.png" alt="">
            <img id="fourth-brand" src="img/brand-4.png" alt="">
            <img id="fifth-brand" src="img/brand-5.png" alt="">
            <img id="sixth-brand" src="img/brand-6.png" alt="">
        </div>
    </div>
    <!-- End Branding -->

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <!-- Footer top -->
            <div class="footer-top">
                <div class="row">
                    <div class="col-logo-ft">
                        <div class="col-logo-ft-inner">
                            <img src="img/bonfire-logo-footer.png" alt="">
                        </div>
                    </div>

                    <div class="col-menu-ft">
                        <div class="col-menu-ft-inner">
                            <ul>
                                <li><a href="">Home</a></li>
                                <li><a href="">About</a></li>
                                <li><a href="">Services</a></li>
                                <li><a href="">Portfolio</a></li>
                                <li><a href="">Pages</a></li>
                                <li><a href="">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-subscribe">
                        <div class="col-subscribe-inner">
                            <a href=""><span>Subscribe</span><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End footer top -->

            <!-- Footer bottom -->
            <div class="footer-bottom">
                <div class="copyright">
                    <div class="copyright-content">
                        <p>14 L.E Goulburn St, Sydney 2000NSW - <a href="#">(088) 1990 6886</a></p>
                        <p>Copyright © 2016 Bonfire </p>
                    </div>
                </div>
                <div class="text-right">
                    <div class="footer-social ">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fab fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End footer bottom -->
        </div>
    </footer>
    <!-- End footer -->
    <script src="js/client.js"></script>
    </div>
</body>

</html>