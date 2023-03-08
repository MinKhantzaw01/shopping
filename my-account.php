<?php
include_once "./inc/html_head.php";
include_once "./inc/header.php";
?>
    <!-- Body main wrapper start -->
    <div class="wrapper my-account">



        <!--breadcumb area start -->
        <div class="breadcumb-area overlay pos-rltv">
            <div class="bread-main">
                <div class="bred-hading text-center">
                    <h5>My Account</h5>
                </div>
                <ol class="breadcrumb">
                    <li class="home"><a title="Go to Home Page" href="index.php">Home</a></li>
                    <li class="active">Account</li>
                </ol>
            </div>
        </div>
        <!--breadcumb area end -->

        <!--service idea area are start -->
        <div class="idea-area  ptb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="idea-tab-menu">
                            <ul class="nav idea-tab" role="tablist">
                                <li role="presentation"><a class="active" href="#creativity" aria-controls="creativity"
                                        role="tab" data-bs-toggle="tab">Personal Info</a></li>
                                <li role="presentation"><a href="#ideas" aria-controls="ideas" role="tab"
                                        data-bs-toggle="tab">Shipping Address</a></li>
                                <li role="presentation"><a href="#design" aria-controls="design" role="tab"
                                        data-bs-toggle="tab">Billing Details</a></li>
                                <li role="presentation"><a href="#devlopment" aria-controls="devlopment" role="tab"
                                        data-bs-toggle="tab">My Order</a></li>
                                <li role="presentation"><a href="#markenting" aria-controls="markenting" role="tab"
                                        data-bs-toggle="tab">Payment Method</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <div class="idea-tab-content">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="creativity">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>First Name <em>*</em></label>
                                                <input type="text" name="namm" class="info" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Last Name<em>*</em></label>
                                                <input type="text" name="namm" class="info" placeholder="Last Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Email Address<em>*</em></label>
                                                <input type="email" name="email" class="info" placeholder="Your Email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Phone Number<em>*</em></label>
                                                <input type="text" name="phone" class="info" placeholder="Phone Number">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Password<em>*</em></label>
                                                <input type="password" name="email" class="info" placeholder="Your Email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Confirm Password<em>*</em></label>
                                                <input type="password" name="phone" class="info" placeholder="Phone Number">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Country <em>*</em></label>
                                                <select class="selectpicker select-custom" data-live-search="true">
                                                    <option data-tokens="Bangladesh">Bangladesh</option>
                                                    <option data-tokens="India">India</option>
                                                    <option data-tokens="Pakistan">Pakistan</option>
                                                    <option data-tokens="Pakistan">Pakistan</option>
                                                    <option data-tokens="Srilanka">Srilanka</option>
                                                    <option data-tokens="Nepal">Nepal</option>
                                                    <option data-tokens="Butan">Butan</option>
                                                    <option data-tokens="USA">USA</option>
                                                    <option data-tokens="England">England</option>
                                                    <option data-tokens="Brazil">Brazil</option>
                                                    <option data-tokens="Canada">Canada</option>
                                                    <option data-tokens="China">China</option>
                                                    <option data-tokens="Koeria">Koeria</option>
                                                    <option data-tokens="Soudi">Soudi Arabia</option>
                                                    <option data-tokens="Spain">Spain</option>
                                                    <option data-tokens="France">France</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Town/City <em>*</em></label>
                                                <input type="text" name="add1" class="info" placeholder="Town/City">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>State/Divison <em>*</em></label>
                                                <select class="selectpicker select-custom" data-live-search="true">
                                                    <option data-tokens="Barisal">Barisal</option>
                                                    <option data-tokens="Dhaka">Dhaka</option>
                                                    <option data-tokens="Kulna">Kulna</option>
                                                    <option data-tokens="Rajshahi">Rajshahi</option>
                                                    <option data-tokens="Sylet">Sylet</option>
                                                    <option data-tokens="Chittagong">Chittagong</option>
                                                    <option data-tokens="Rangpur">Rangpur</option>
                                                    <option data-tokens="Maymanshing">Maymanshing</option>
                                                    <option data-tokens="Cox">Cox's Bazar</option>
                                                    <option data-tokens="Saint">Saint Martin</option>
                                                    <option data-tokens="Kuakata">Kuakata</option>
                                                    <option data-tokens="Sajeq">Sajeq</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Post Code/Zip Code<em>*</em></label>
                                                <input type="text" name="zipcode" class="info" placeholder="Zip Code">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="input-box mb-20">
                                                <label>Address <em>*</em></label>
                                                <input type="text" name="add1" class="info mb-10"
                                                    placeholder="Street Address">
                                                <input type="text" name="add2" class="info mt10"
                                                    placeholder="Apartment, suite, unit etc. (optional)">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-8">
                                            <div class="checkbox checkbox-2">
                                                <label> <small>
                                                        <input name="signup" type="checkbox">I wish to subscribe to the The
                                                        clothing newsletter.
                                                    </small> </label>
                                                <br>
                                                <label> <small>
                                                        <input name="signup" type="checkbox">I have read and agree to the <a
                                                            href="#">Privacy Policy</a>
                                                    </small> </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-4 text-end">
                                            <a class="btn-def btn2" href="#">Save</a>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade in" id="ideas">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>First Name <em>*</em></label>
                                                <input type="text" name="namm" class="info" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Last Name<em>*</em></label>
                                                <input type="text" name="namm" class="info" placeholder="Last Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Email Address<em>*</em></label>
                                                <input type="email" name="email" class="info" placeholder="Your Email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Phone Number<em>*</em></label>
                                                <input type="text" name="phone" class="info" placeholder="Phone Number">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Country <em>*</em></label>
                                                <select class="selectpicker select-custom" data-live-search="true">
                                                    <option data-tokens="Bangladesh">Bangladesh</option>
                                                    <option data-tokens="India">India</option>
                                                    <option data-tokens="Pakistan">Pakistan</option>
                                                    <option data-tokens="Pakistan">Pakistan</option>
                                                    <option data-tokens="Srilanka">Srilanka</option>
                                                    <option data-tokens="Nepal">Nepal</option>
                                                    <option data-tokens="Butan">Butan</option>
                                                    <option data-tokens="USA">USA</option>
                                                    <option data-tokens="England">England</option>
                                                    <option data-tokens="Brazil">Brazil</option>
                                                    <option data-tokens="Canada">Canada</option>
                                                    <option data-tokens="China">China</option>
                                                    <option data-tokens="Koeria">Koeria</option>
                                                    <option data-tokens="Soudi">Soudi Arabia</option>
                                                    <option data-tokens="Spain">Spain</option>
                                                    <option data-tokens="France">France</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Town/City <em>*</em></label>
                                                <input type="text" name="add1" class="info" placeholder="Town/City">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>State/Divison <em>*</em></label>
                                                <select class="selectpicker select-custom" data-live-search="true">
                                                    <option data-tokens="Barisal">Barisal</option>
                                                    <option data-tokens="Dhaka">Dhaka</option>
                                                    <option data-tokens="Kulna">Kulna</option>
                                                    <option data-tokens="Rajshahi">Rajshahi</option>
                                                    <option data-tokens="Sylet">Sylet</option>
                                                    <option data-tokens="Chittagong">Chittagong</option>
                                                    <option data-tokens="Rangpur">Rangpur</option>
                                                    <option data-tokens="Maymanshing">Maymanshing</option>
                                                    <option data-tokens="Cox">Cox's Bazar</option>
                                                    <option data-tokens="Saint">Saint Martin</option>
                                                    <option data-tokens="Kuakata">Kuakata</option>
                                                    <option data-tokens="Sajeq">Sajeq</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Post Code/Zip Code<em>*</em></label>
                                                <input type="text" name="zipcode" class="info" placeholder="Zip Code">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="input-box mb-20">
                                                <label>Address <em>*</em></label>
                                                <input type="text" name="add1" class="info mb-10"
                                                    placeholder="Street Address">
                                                <input type="text" name="add2" class="info mt10"
                                                    placeholder="Apartment, suite, unit etc. (optional)">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 text-end">
                                            <a class="btn-def btn2" href="#">Save</a>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade in" id="design">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>First Name <em>*</em></label>
                                                <input type="text" name="namm" class="info" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Last Name<em>*</em></label>
                                                <input type="text" name="namm" class="info" placeholder="Last Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Email Address<em>*</em></label>
                                                <input type="email" name="email" class="info" placeholder="Your Email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Phone Number<em>*</em></label>
                                                <input type="text" name="phone" class="info" placeholder="Phone Number">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Country <em>*</em></label>
                                                <select class="selectpicker select-custom" data-live-search="true">
                                                    <option data-tokens="Bangladesh">Bangladesh</option>
                                                    <option data-tokens="India">India</option>
                                                    <option data-tokens="Pakistan">Pakistan</option>
                                                    <option data-tokens="Pakistan">Pakistan</option>
                                                    <option data-tokens="Srilanka">Srilanka</option>
                                                    <option data-tokens="Nepal">Nepal</option>
                                                    <option data-tokens="Butan">Butan</option>
                                                    <option data-tokens="USA">USA</option>
                                                    <option data-tokens="England">England</option>
                                                    <option data-tokens="Brazil">Brazil</option>
                                                    <option data-tokens="Canada">Canada</option>
                                                    <option data-tokens="China">China</option>
                                                    <option data-tokens="Koeria">Koeria</option>
                                                    <option data-tokens="Soudi">Soudi Arabia</option>
                                                    <option data-tokens="Spain">Spain</option>
                                                    <option data-tokens="France">France</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Town/City <em>*</em></label>
                                                <input type="text" name="add1" class="info" placeholder="Town/City">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>State/Divison <em>*</em></label>
                                                <select class="selectpicker select-custom" data-live-search="true">
                                                    <option data-tokens="Barisal">Barisal</option>
                                                    <option data-tokens="Dhaka">Dhaka</option>
                                                    <option data-tokens="Kulna">Kulna</option>
                                                    <option data-tokens="Rajshahi">Rajshahi</option>
                                                    <option data-tokens="Sylet">Sylet</option>
                                                    <option data-tokens="Chittagong">Chittagong</option>
                                                    <option data-tokens="Rangpur">Rangpur</option>
                                                    <option data-tokens="Maymanshing">Maymanshing</option>
                                                    <option data-tokens="Cox">Cox's Bazar</option>
                                                    <option data-tokens="Saint">Saint Martin</option>
                                                    <option data-tokens="Kuakata">Kuakata</option>
                                                    <option data-tokens="Sajeq">Sajeq</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Post Code/Zip Code<em>*</em></label>
                                                <input type="text" name="zipcode" class="info" placeholder="Zip Code">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="input-box mb-20">
                                                <label>Address <em>*</em></label>
                                                <input type="text" name="add1" class="info mb-10"
                                                    placeholder="Street Address">
                                                <input type="text" name="add2" class="info mt10"
                                                    placeholder="Apartment, suite, unit etc. (optional)">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 text-end">
                                            <a class="btn-def btn2" href="#">Save</a>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade in" id="devlopment">
                                    <form action="#" method="post">
                                        <div class="table-responsive">
                                            <table class="checkout-area table text-center">
                                                <thead>
                                                    <tr class="cart_item check-heading">
                                                        <td class="ctg-type"> Product</td>
                                                        <td class="cgt-des"> Total</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="cart_item check-item prd-name">
                                                        <td class="ctg-type"> Aenean sagittis × <span>1</span></td>
                                                        <td class="cgt-des"> $1,026.00</td>
                                                    </tr>
                                                    <tr class="cart_item">
                                                        <td class="ctg-type"> Subtotal</td>
                                                        <td class="cgt-des">$1,026.00</td>
                                                    </tr>
                                                    <tr class="cart_item">
                                                        <td class="ctg-type">Shipping</td>
                                                        <td class="cgt-des ship-opt">
                                                            <div class="shipp">
                                                                <input type="radio" id="pay-toggle" name="ship">
                                                                <label for="pay-toggle">Flat Rate:
                                                                    <span>$03</span></label>
                                                            </div>
                                                            <div class="shipp">
                                                                <input type="radio" id="pay-toggle2" name="ship">
                                                                <label for="pay-toggle2">Free Shipping</label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="cart_item">
                                                        <td class="ctg-type crt-total"> Total</td>
                                                        <td class="cgt-des prc-total"> $ 1.029.00 </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="text-end">
                                            <a class="btn-def btn2" href="#">Save</a>
                                        </div>
                                    </form>
                                </div>
                                <div role="tabpanel" class="tab-pane fade in" id="markenting">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="input-box mb-20">
                                                <label>Card Type <em>*</em></label>
                                                <select class="selectpicker select-custom" data-live-search="true">
                                                    <option data-tokens="paypal">Paypal</option>
                                                    <option data-tokens="visa">visa</option>
                                                    <option data-tokens="master-card">master-card</option>
                                                    <option data-tokens="discover">discover</option>
                                                    <option data-tokens="payneor">payneor</option>
                                                    <option data-tokens="skrill">skrill</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Card Number<em>*</em></label>
                                                <input type="text" name="email" class="info" placeholder="Card Number">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Security Code<em>*</em></label>
                                                <input type="text" name="phone" class="info" placeholder="Security Code">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Month <em>*</em></label>
                                                <select class="selectpicker select-custom" data-live-search="true">
                                                    <option data-tokens="Januray">Januray</option>
                                                    <option data-tokens="February">February</option>
                                                    <option data-tokens="March">March</option>
                                                    <option data-tokens="April">April</option>
                                                    <option data-tokens="May">May</option>
                                                    <option data-tokens="June">June</option>
                                                    <option data-tokens="July">July</option>
                                                    <option data-tokens="August">August</option>
                                                    <option data-tokens="September">September</option>
                                                    <option data-tokens="Ocotober">Ocotober</option>
                                                    <option data-tokens="November">November</option>
                                                    <option data-tokens="December">December</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box mb-20">
                                                <label>Year<em>*</em></label>
                                                <select class="selectpicker select-custom" data-live-search="true">
                                                    <option data-tokens="2022">2022</option>
                                                    <option data-tokens="2017">2017</option>
                                                    <option data-tokens="2022">2022</option>
                                                    <option data-tokens="2022">2022</option>
                                                    <option data-tokens="2020">2020</option>
                                                    <option data-tokens="2022">2022</option>
                                                    <option data-tokens="2022">2022</option>
                                                    <option data-tokens="2023">2023</option>
                                                    <option data-tokens="2024">2024</option>
                                                    <option data-tokens="2025">2025</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="payment-btn-area mt-20 row">
                                                <div class="col-md-4 text-start">
                                                    <a class="btn-def btn2" href="#">Pay Now</a>
                                                </div>
                                                <div class="col-md-4 text-center">
                                                    <a class="btn-def btn2" href="#">Cancel Order</a>
                                                </div>
                                                <div class="col-md-4 text-end">
                                                    <a class="btn-def btn2" href="#">Continue</a>
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
        <!--service idea area are end -->

        <!-- footer area start-->
        <div class="footer-area ptb-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <div class="single-footer contact-us">
                            <div class="footer-title uppercase">
                                <h5>Contact US</h5>
                            </div>
                            <ul>
                                <li>
                                    <div class="contact-icon"> <i class="zmdi zmdi-pin-drop"></i> </div>
                                    <div class="contact-text">
                                        <p>Address: Your address goes here</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-icon"> <i class="zmdi zmdi-email-open"></i> </div>
                                    <div class="contact-text">
                                        <p><span><a href="mailto://demo@example.com">demo@example.com</a></span>
                                            <span><a href="mailto://info@example.com">info@example.com</a></span></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-icon"> <i class="zmdi zmdi-phone-paused"></i> </div>
                                    <div class="contact-text">
                                        <p><a href="tel://01234567890">01234567890</a> <a
                                                href="tel://01234567890">01234567890</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4">
                        <div class="single-footer informaton-area">
                            <div class="footer-title uppercase">
                                <h5>Information</h5>
                            </div>
                            <div class="informatoin">
                                <ul>
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Order History</a></li>
                                    <li><a href="#">Wishlist</a></li>
                                    <li><a href="#">Returnes</a></li>
                                    <li><a href="#">Private Policy</a></li>
                                    <li><a href="#">Site Map</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 d-md-none d-block d-lg-block">
                        <div class="single-footer instagrm-area">
                            <div class="footer-title uppercase">
                                <h5>InstaGram</h5>
                            </div>
                            <div class="instagrm">
                                <ul>
                                    <li><a href="#"><img src="images/gallery/01.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="images/gallery/02.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="images/gallery/03.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="images/gallery/04.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="images/gallery/05.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="images/gallery/06.jpg" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 offset-xl-1">
                        <div class="single-footer newslatter-area">
                            <div class="footer-title uppercase">
                                <h5>Get Newsletters</h5>
                            </div>
                            <div class="newslatter">
                                <form action="#" method="post">
                                    <div class="input-box pos-rltv">
                                        <input placeholder="Type Your Email hear" type="text">
                                        <a href="#">
                                            <i class="zmdi zmdi-arrow-right"></i>
                                        </a>
                                    </div>
                                </form>
                                <div class="social-icon socile-icon-style-3 mt-40">
                                    <div class="footer-title uppercase">
                                        <h5>Social Network</h5>
                                    </div>
                                    <ul>
                                        <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-linkedin"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-pinterest"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-google"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer area start-->

        <!--footer bottom area start-->
        <div class="footer-bottom global-table">
            <div class="global-row">
                <div class="global-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                 <p class="copyrigth text-center">
                    © 2022 <span class="text-capitalize">clothing</span>. Made
                    with <i style="color: #f53400;" class="fa fa-heart"></i>
 by
                    <a  href="https://themeforest.net/user/codecarnival/portfolio">CodeCarnival</a>
                  </p>
                            </div>
                            <div class="col-md-6">
                                <ul class="payment-support text-end">
                                    <li>
                                        <a href="#"><img src="images/icons/pay1.png" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/icons/pay2.png" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/icons/pay3.png" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/icons/pay4.png" alt="" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="images/icons/pay5.png" alt="" /></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer bottom area end-->

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

</body>


<!-- Mirrored from template.hasthemes.com/clothing/clothing/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Feb 2023 11:05:13 GMT -->
</html>