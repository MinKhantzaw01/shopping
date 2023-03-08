<?php
include_once "./sysgem/session.php";
include_once "./sysgem/dbHacker.php";
include_once "./sysgem/member.php";

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
                                            <div class="cart-icon"> <a href="cart.php">Cart<i
                                                        class="zmdi zmdi-shopping-cart"></i></a> <span>0</span> </div>
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
