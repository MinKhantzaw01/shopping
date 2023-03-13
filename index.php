<?php 
include_once "./inc/html_head.php";  
?>
<?php
include_once "./sysgem/session.php";
include_once "./sysgem/dbHacker.php";
include_once "./sysgem/postGenerated.php";
?>


<div class="header-area header-wrapper">
            <div class="header-top-bar black-bg clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-6">
                            <div class="login-register-area">
                                <ul>
                                    <li>
                                        <a href="#" id="myDD" >
                                            <?php

                                                    if(checkSession("username")){
                                                        echo getSession("username");
                                                    }else{
                                                        echo '<a href="login.php">Login</a>';
                                                    }

                                                ?>
                                        </a>
                                    </li>
                                    <li>
                                    <a  href="#" id="myDD" >
                                            <?php
                                                    if(checkSession("username")){
                                                        echo" <a href='logout.php'>Logout</a>";
                                                    }else{
                                                        echo "<a href='register.php'>Register</a>";
                                                        
                                                    }

                                           ?></a></li>
                                                
                                    <!-- <li><a href="register.php">Register</a></li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 d-none d-md-block">
                            <div class="social-search-area text-center">
                                <div class="social-icon socile-icon-style-2">
                                    <ul>
                                        <li><a href="#" title="facebook"><i class="fa fa-facebook"></i></a> </li>
                                        <li><a href="#" title="twitter"><i class="fa fa-twitter"></i></a> </li>
                                        <li> <a href="#" title="dribble"><i class="fa fa-dribbble"></i></a></li>
                                        <li> <a href="#" title="behance"><i class="fa fa-behance"></i></a> </li>
                                        <li> <a href="#" title="rss"><i class="fa fa-rss"></i></a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-6">
                            <div class="cart-currency-area login-register-area text-end">
                                <ul>
                                    
                                    <li>
                                        <div class="header-cart">
                                            <div class="cart-icon nav"> <a href="cart.php">Cart<i
                                                        class="zmdi zmdi-shopping-cart"></i></a> <span>0</span> </div>
                                            <div class="cart-content-wraper">
                                                <div class="cart-single-wraper cartdisp">
                                                    
                                                </div>
                                                <div class="cart-check-btn">
                                                    <div class="view-cart"> <a class="btn-def" href="cart.php">View
                                                            Cart</a> </div>
                                                    <div class="check-btn"> <a class="btn-def"
                                                            href="checkout.php">Checkout</a> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="header-middle-area">
                <div class="container">
                    <div class="full-width-mega-dropdown">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="logo ptb-20"><a href="index.php">
                                        <img src="images/logo/logo.png" alt="main logo"></a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-10 d-none d-md-block">
                                <nav id="primary-menu">
                                    <ul class="main-menu">
                                        <li class="current"><a class="active" href="index.php">Home</a>
                                          
                                        </li>
                                        <li class="mega-parent pos-rltv"><a href="shop.php">Man</a>
                                            <div class="dropdown" style="width:20%;">
                                                <ul class="single-mega-item">
                                                    <li class="menu-title uppercase">Shirts</li>
                                                    <li><a href="shop.php">Shirt1</a></li>
                                                    <li><a href="shop.php">Shirt2</a></li>
                                                    <li><a href="shop.php">Shirt3</a></li>
                                                    <li><a href="shop.php">Shirt4</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="mega-parent pos-rltv"><a href="shop.php">Women</a>
                                            <div class="dropdown" style="width:20%;">
                                                <ul class="single-mega-item">
                                                    <li class="menu-title uppercase">Sharees</li>
                                                    <li><a href="shop.php">Sharee1</a></li>
                                                    <li><a href="shop.php">Sharee2</a></li>
                                                    <li><a href="shop.php">Sharee3</a></li>
                                                    <li><a href="shop.php">Sharee4</a></li>
                                                    <li><a href="shop.php">Sharee5</a></li>
                                                </ul>

                                            </div>
                                        </li>
                                        
                                        
                                       
                                        <li><a href="about-us.php">ABOUT</a></li> 
                                        <li><a href="contact-us.php">Contact-Us</a></li> 
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-lg-3 d-none d-lg-block">
                                <div class="search-box global-table">
                                    <div class="global-row">
                                        <div class="global-cell">
                                            <form action="#">
                                                <div class="input-box">
                                                    <input class="single-input" placeholder="Search anything"
                                                        type="text">
                                                    <button class="src-btn"><i class="fa fa-search"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- mobile-menu-area start -->
                            <div class="mobile-menu-area">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <nav id="dropdown">
                                                <ul>
                                                    <li><a href="index.php">Home</a>
                                                        
                                                    </li>
                                                    <li><a href="shop.php">Man</a>
                                                        <ul class="single-mega-item">
                                                            <li><a href="shop.php">Shirt1</a></li>
                                                            <li><a href="shop.php">Shirt2</a></li>
                                                            <li><a href="shop.php">Shirt3</a></li>
                                                            <li><a href="shop.php">Shirt4</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop.html">Shop</a>
                                                        <ul class="single-mega-item">
                                                            <li><a href="shop.php">Sharee1</a></li>
                                                            <li><a href="shop.php">Sharee2</a></li>
                                                            <li><a href="shop.php">Sharee3</a></li>
                                                            <li><a href="shop.php">Sharee4</a></li>
                                                            <li><a href="shop.php">Sharee5</a></li>
                                                        </ul>
                                                    </li>
                                                    
                                                    <li><a href="about-us.php">about</a></li>
                                                    <li><a href="contact-us.php">Contact-Us</a></li> 
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--mobile menu area end-->
                        </div>
                    </div>
                </div>
            </div>
</div>

<?php
include_once "./inc/menubar.php";
include_once "./inc/brand.php";
?>
 
    <!-- Body main wrapper start -->
    <div class="wrapper home-one">

        <!--new arrival area start-->
        <div class="new-arrival-area pt-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="heading-title heading-style pos-rltv mb-50 text-center">
                            <h5 class="uppercase">New Arrival</h5>
                        </div>
                        <div class="total-new-arrival new-arrival-slider-active carsoule-btn row">
                            <div class="product-item" >
                                <!-- single product start-->
                                <?php
                                                $result=indexPost();
                                                foreach($result as $post){
                                                    echo '
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <div class="product-label">
                                                            <div class="new">New</div>
                                                        </div>
                                                        <div class="single-prodcut-img  product-overlay pos-rltv">
                                                            <img alt="" src="./image/'.$post["img"].'">
                                                        </div>
                                                        <div class="product-icon socile-icon-tooltip text-center">
                                                            <ul>
                                                                <li><a nohref="#" data-tooltip="Add To Cart"
                                                                        class="add-cart" data-placement="left"><i
                                                                            class="fa fa-cart-plus"></i></a></li>
                                                                <li><a href="#" data-tooltip="Wishlist"
                                                                        class="w-list"><i class="fa fa-heart-o"></i></a>
                                                                </li>
                                                                <li><a href="#" data-tooltip="Compare" class="cpare"><i
                                                                            class="fa fa-refresh"></i></a></li>
                                                                <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target=".modal"><i
                                                                            class="fa fa-eye"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-text">
                                                        <div class="prodcut-name"> <a href="#">'.$post["name"].'</a> </div>
                                                        <div class="prodcut-ratting-price">
                                                            <div class="prodcut-price">
                                                                <div class="new-price"> '.$post["price"].' </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>';
                                                }
                                                ?>
                                <!-- single product end-->
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--new arrival area end-->

        <!--banner area start-->
        <div class="banner-area pt-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="single-banner gray-bg">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="sb-img text-center">
                                        <img src="images/banner/02.png" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="sb-content mt-60">
                                        <div class="banner-text">
                                            <h5 class="lato">New Arrival</h5>
                                            <h2 class="montserrat">Grag T- Shirt</h2>
                                            <h3 class="montserrat">$99.99</h3>
                                            <div class="banner-list">
                                                <ul>
                                                    <li>Best quality</li>
                                                    <li>Best quality</li>
                                                    <li>Best quality</li>
                                                </ul>
                                            </div>
                                            <div class="social-icon-wraper mt-25">
                                                <div class="social-icon socile-icon-style-1">
                                                    <ul>
                                                        <li><a nohref="#"><i class="zmdi zmdi-shopping-cart add-cart"></i></a></li>
                                                        <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                        </li>
                                                        <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                data-bs-toggle="modal" data-bs-target=".modal"
                                                                tabindex="0"><i class="zmdi zmdi-eye"></i></a></li>
                                                        <li><a href="#"><i class="zmdi zmdi-repeat"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-banner gray-bg">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="sb-img text-center">
                                        <img src="images/banner/01.png" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="sb-content mt-60">
                                        <div class="banner-text">
                                            <h5 class="lato">New Arrival</h5>
                                            <h2 class="montserrat">Grag T- Shirt</h2>
                                            <h3 class="montserrat">$99.99</h3>
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable content.</p>
                                            <a class="btn-def btn2" href="shop.php">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--banner area end-->

        <!--discunt-featured-onsale-area start -->
        <div class="discunt-featured-onsale-area pt-60">
            <div class="container"> 
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-area tab-cars-style">
                            <div class="title-tab-product-category">
                                <div class="col-lg-12 text-center">
                                    <ul class="nav mb-40 heading-style-2" role="tablist">
                                        <li role="presentation"><a class="active" href="#newarrival"
                                                aria-controls="newarrival" role="tab" data-bs-toggle="tab">New
                                                Arrival</a>
                                        </li>
                                        <li role="presentation"><a href="#bestsellr" aria-controls="bestsellr"
                                                role="tab" data-bs-toggle="tab">Best Seller</a></li>
                                        <li role="presentation"><a href="#specialoffer" aria-controls="specialoffer"
                                                role="tab" data-bs-toggle="tab">Special Offer</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content-tab-product-category">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="newarrival">
                                        <div class="total-new-arrival new-arrival-slider-active carsoule-btn">
                                            <div class="product-item">
                                                <!-- single product start-->
                                                <?php
                                                $result=indexPost();
                                                foreach($result as $post){
                                                    echo '
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <div class="product-label">
                                                            <div class="new">New</div>
                                                        </div>
                                                        <div class="single-prodcut-img  product-overlay pos-rltv">
                                                            <img alt="" src="./image/'.$post["img"].'">
                                                        </div>
                                                        <div class="product-icon socile-icon-tooltip text-center">
                                                            <ul>
                                                                <li><a nohref="#" data-tooltip="Add To Cart"
                                                                        class="add-cart" data-placement="left"><i
                                                                            class="fa fa-cart-plus"></i></a></li>
                                                                <li><a href="#" data-tooltip="Wishlist"
                                                                        class="w-list"><i class="fa fa-heart-o"></i></a>
                                                                </li>
                                                                <li><a href="#" data-tooltip="Compare" class="cpare"><i
                                                                            class="fa fa-refresh"></i></a></li>
                                                                <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target=".modal"><i
                                                                            class="fa fa-eye"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-text">
                                                        <div class="prodcut-name"> <a href="#">'.$post["name"].'</a> </div>
                                                        <div class="prodcut-ratting-price">
                                                            <div class="prodcut-price">
                                                                <div class="new-price"> '.$post["price"].' </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>';
                                                }
                                                ?>
                                                <div class="prodcut-ratting">
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star-o"></i></a>
                                                            </div> 
                                                <!-- single product end-->
                                            </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--discunt-featured-onsale-area end-->

       
        <!--new-arrival on-sale Top-ratted area start-->
        <div class="arrival-ratted-sale-area pt-70">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="heading-title heading-style pos-rltv mb-50 text-center">
                            <h5 class="uppercase">New Arrival</h5>
                        </div>
                        <div class="ctg-slider-active">
                            <div class="single-ctg new-arrival-ctg">
                                <div class="single-ctg-item">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sm-6">
                                            <div class="product-ctg-img pos-rltv product-overlay">
                                                <a href="single-product.html"><img src="images/product/s01.jpg"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-6">
                                            <div class="product-ctg-content">
                                                <p>Primo Court Mid Suede</p>
                                                <p class="font-bold">$236.99</p>
                                                <div class="social-icon socile-icon-style-1 mt-15">
                                                    <ul>
                                                        <li><a nohref="#"><i class="zmdi zmdi-shopping-cart add-cart"></i></a></li>
                                                        <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                data-bs-toggle="modal" data-bs-target=".modal"
                                                                tabindex="0"><i class="zmdi zmdi-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-ctg-item">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sm-6">
                                            <div class="product-ctg-img pos-rltv product-overlay">
                                                <a href="single-product.html"><img src="images/product/s02.jpg"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-6">
                                            <div class="product-ctg-content">
                                                <p>Primo Court Mid Suede</p>
                                                <p class="font-bold">$236.99</p>
                                                <div class="social-icon socile-icon-style-1 mt-15">
                                                    <ul>
                                                        <li><a nohref="#"><i class="zmdi zmdi-shopping-cart add-cart"></i></a></li>
                                                        <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                data-bs-toggle="modal" data-bs-target=".modal"
                                                                tabindex="0"><i class="zmdi zmdi-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-ctg new-arrival-ctg">
                                <div class="single-ctg-item">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sm-6">
                                            <div class="product-ctg-img pos-rltv product-overlay">
                                                <a href="single-product.html"><img src="images/product/s01.jpg"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-6">
                                            <div class="product-ctg-content">
                                                <p>Primo Court Mid Suede</p>
                                                <p class="font-bold">$236.99</p>
                                                <div class="social-icon socile-icon-style-1 mt-15">
                                                    <ul>
                                                        <li><a nohref="#"><i class="zmdi zmdi-shopping-cart add-cart"></i></a></li>
                                                        <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                data-bs-toggle="modal" data-bs-target=".modal"
                                                                tabindex="0"><i class="zmdi zmdi-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-ctg-item">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sm-6">
                                            <div class="product-ctg-img pos-rltv product-overlay">
                                                <a href="single-product.html"><img src="images/product/s02.jpg"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-6">
                                            <div class="product-ctg-content">
                                                <p>Primo Court Mid Suede</p>
                                                <p class="font-bold">$236.99</p>
                                                <div class="social-icon socile-icon-style-1 mt-15">
                                                    <ul>
                                                        <li><a nohref="#"><i class="zmdi zmdi-shopping-cart add-cart"></i></a></li>
                                                        <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                data-bs-toggle="modal" data-bs-target=".modal"
                                                                tabindex="0"><i class="zmdi zmdi-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-ctg on-sale-ctg">
                            <div class="heading-title heading-style pos-rltv mb-50 text-center">
                                <h5 class="uppercase">On Sale</h5>
                            </div>
                            <div class="ctg-slider-active">
                                <div class="single-ctg new-arrival-ctg">
                                    <div class="single-ctg-item">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12 col-sm-6">
                                                <div class="product-ctg-img pos-rltv product-overlay">
                                                    <a href="single-product.html"><img src="images/product/s01.jpg"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-6">
                                                <div class="product-ctg-content">
                                                    <p>Primo Court Mid Suede</p>
                                                    <p class="font-bold">$236.99</p>
                                                    <div class="social-icon socile-icon-style-1 mt-15">
                                                        <ul>
                                                            <li><a nohref="#"><i class="zmdi zmdi-shopping-cart add-cart"></i></a>
                                                            </li>
                                                            <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                    data-bs-toggle="modal" data-bs-target=".modal"
                                                                    tabindex="0"><i class="zmdi zmdi-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-ctg-item">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12 col-sm-6">
                                                <div class="product-ctg-img pos-rltv product-overlay">
                                                    <a href="single-product.html"><img src="images/product/s02.jpg"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-6">
                                                <div class="product-ctg-content">
                                                    <p>Primo Court Mid Suede</p>
                                                    <p class="font-bold">$236.99</p>
                                                    <div class="social-icon socile-icon-style-1 mt-15">
                                                        <ul>
                                                            <li><a nohref="#"><i class="zmdi zmdi-shopping-cart add-cart"></i></a>
                                                            </li>
                                                            <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                    data-bs-toggle="modal" data-bs-target=".modal"
                                                                    tabindex="0"><i class="zmdi zmdi-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-ctg new-arrival-ctg">
                                    <div class="single-ctg-item">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12 col-sm-6">
                                                <div class="product-ctg-img pos-rltv product-overlay">
                                                    <a href="single-product.html"><img src="images/product/s01.jpg"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-6">
                                                <div class="product-ctg-content">
                                                    <p>Primo Court Mid Suede</p>
                                                    <p class="font-bold">$236.99</p>
                                                    <div class="social-icon socile-icon-style-1 mt-15">
                                                        <ul>
                                                            <li><a nohref="#"><i class="zmdi zmdi-shopping-cart add-cart"></i></a>
                                                            </li>
                                                            <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                    data-bs-toggle="modal" data-bs-target=".modal"
                                                                    tabindex="0"><i class="zmdi zmdi-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-ctg-item">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12 col-sm-6">
                                                <div class="product-ctg-img pos-rltv product-overlay">
                                                    <a href="single-product.html"><img src="images/product/s02.jpg"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-6">
                                                <div class="product-ctg-content">
                                                    <p>Primo Court Mid Suede</p>
                                                    <p class="font-bold">$236.99</p>
                                                    <div class="social-icon socile-icon-style-1 mt-15">
                                                        <ul>
                                                            <li><a nohref="#"><i class="zmdi zmdi-shopping-cart add-cart"></i></a>
                                                            </li>
                                                            <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                    data-bs-toggle="modal" data-bs-target=".modal"
                                                                    tabindex="0"><i class="zmdi zmdi-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-ctg top-rated-ctg">
                            <div class="heading-title heading-style pos-rltv mb-50 text-center">
                                <h5 class="uppercase">Top Rated</h5>
                            </div>
                            <div class="ctg-slider-active">
                                <div class="single-ctg new-arrival-ctg">
                                    <div class="single-ctg-item">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12 col-sm-6">
                                                <div class="product-ctg-img pos-rltv product-overlay">
                                                    <a href="single-product.html"><img src="images/product/s01.jpg"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-6">
                                                <div class="product-ctg-content">
                                                    <p>Primo Court Mid Suede</p>
                                                    <p class="font-bold">$236.99</p>
                                                    <div class="social-icon socile-icon-style-1 mt-15">
                                                        <ul>
                                                            <li><a nohref="#"><i class="zmdi zmdi-shopping-cart add-cart"></i></a>
                                                            </li>
                                                            <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                    data-bs-toggle="modal" data-bs-target=".modal"
                                                                    tabindex="0"><i class="zmdi zmdi-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-ctg-item">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12 col-sm-6">
                                                <div class="product-ctg-img pos-rltv product-overlay">
                                                    <a href="single-product.html"><img src="images/product/s02.jpg"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-6">
                                                <div class="product-ctg-content">
                                                    <p>Primo Court Mid Suede</p>
                                                    <p class="font-bold">$236.99</p>
                                                    <div class="social-icon socile-icon-style-1 mt-15">
                                                        <ul>
                                                            <li><a nohref="#"><i class="zmdi zmdi-shopping-cart add-cart"></i></a>
                                                            </li>
                                                            <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                    data-bs-toggle="modal" data-bs-target=".modal"
                                                                    tabindex="0"><i class="zmdi zmdi-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-ctg new-arrival-ctg">
                                    <div class="single-ctg-item">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12 col-sm-6">
                                                <div class="product-ctg-img pos-rltv product-overlay">
                                                    <a href="single-product.html"><img src="images/product/s01.jpg"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-6">
                                                <div class="product-ctg-content">
                                                    <p>Primo Court Mid Suede</p>
                                                    <p class="font-bold">$236.99</p>
                                                    <div class="social-icon socile-icon-style-1 mt-15">
                                                        <ul>
                                                            <li><a nohref="#"><i class="zmdi zmdi-shopping-cart add-cart"></i></a>
                                                            </li>
                                                            <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                    data-bs-toggle="modal" data-bs-target=".modal"
                                                                    tabindex="0"><i class="zmdi zmdi-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-ctg-item">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12 col-sm-6">
                                                <div class="product-ctg-img pos-rltv product-overlay">
                                                    <a href="single-product.html"><img src="images/product/s02.jpg"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-6">
                                                <div class="product-ctg-content">
                                                    <p>Primo Court Mid Suede</p>
                                                    <p class="font-bold">$236.99</p>
                                                    <div class="social-icon socile-icon-style-1 mt-15">
                                                        <ul>
                                                            <li><a nohref="#"><i class="zmdi zmdi-shopping-cart add-cart"></i></a>
                                                            </li>
                                                            <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                                    data-bs-toggle="modal" data-bs-target=".modal"
                                                                    tabindex="0"><i class="zmdi zmdi-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--new-arrival on-sale Top-ratted area end-->

        

       



<?php
include_once "./inc/footer.php";
?>

        
    </div>
    <!-- Body main wrapper end -->

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="js/vendor/jquery-3.6.0.min.js"></script>
    <script src="js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Slider js -->
    <script src="js/slider/jquery.nivo.slider.pack.js"></script>
    <script src="js/slider/nivo-active.js"></script>
    <!-- counterUp-->
    <script src="js/jquery.countdown.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="js/plugins.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>
<script src="./sysgem/main1.js"></script>

    
 

</body>

</html>

<!-- Mirrored from template.hasthemes.com/clothing/clothing/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Feb 2023 11:04:58 GMT -->