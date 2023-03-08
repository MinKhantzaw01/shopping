<?php
include_once "./sysgem/member.php";
include_once "./sysgem/session.php";
  
if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];
    $ret =registerUser($username,$email,$password,$phone);
    $message="";
    switch($ret){
        case "Register Success!":
            $message = "Register Success!";
            setSession("username",$username);
            setSession("email",$email);
            if ($username==="minkhantzaw" && $email==="mink12392@gmail.com"){
                header("Location: login.php");
            }else{
                header("Location: index.php");
            }
          
            break;
        case "Email is already in use!":
            $message = "Email is already in use!";
            break;
        case "Register Fail!":
            $message = "Register Fail!";
            break;
        case "FALSE" :
            $message = "Authentication FALSE";
            break;
        default : $message = "default value";
            break;
    } 
    echo '<div class="alert alert-warning alert-dismissible fade show mt-4" role="alert">
    <strong>'.$message.'</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  
}
include_once "./inc/html_head.php";
include_once "./inc/header.php";
?>
    <!-- Body main wrapper start-->
    <div class="wrapper my-account">
        <!--breadcumb area start -->
         <div class="breadcumb-area overlay pos-rltv">
            <div class="bread-main">
                <div class="bred-hading text-center">
                    <h5>Register</h5>
                </div>
                <ol class="breadcrumb">
                    <li class="home"><a title="Go to Home Page" href="index.php">Home</a></li>
                    <li class="active">Account</li>
                </ol>
            </div>
        </div>
        
        <!--breadcumb area end -->
        <!--service idea area are start -->
            <!-- <div class="idea-area  ptb-80">
                <div class="container">
                    <div class="row">                 
                        <div class="col-lg-9 col-md-8">
                            <div class="idea-tab-content">
                                <!-- Tab panes -->
                                <!-- <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade show active" id="creativity">
                                        <div class="row">
                                            <div class="col-md-6">
                                            <form method="post" action="index.php">
                                                    <div class="input-box mb-20">
                                                        <label>UserName <em>*</em></label>
                                                        <input type="text" name="username" id ="username" class="info" placeholder="UserName">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-box mb-20">
                                                        <label>Email Address<em>*</em></label>
                                                        <input type="email" name="email" id="email" class="info" placeholder="Your Email">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-box mb-20">
                                                        <label>Password<em>*</em></label>
                                                        <input type="password" name="password" id="password" class="info" placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-box mb-20">
                                                        <label>Phone Number<em>*</em></label>
                                                        <input type="text" name="phone" id="phone" class="info" placeholder="Phone Number">
                                                    </div>
                                                </div>
                                            
                                                <div class="col-lg-6 col-md-4">
                                                    <a class="btn-def btn2" name="submit" href="#">Register</a>
                                                </div>
                                            </form>  
                                            </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --> 
            <div class ="container my-3">
    <div class="col-md-8 offset-md-2 table-bordered p-5">
        <h1 class="text-success english text-center mb-3">Register To Be A Member</h1>
        <form action="register.php" class="form" method="post">
        <div class="form-group">
                <label for="username" class="english">Username</label><br>
                <input type="text" class="form-contorl english rounded-0" name="username" id="username">
            </div>
            <div class="form-group">
                <label for="email" class="english">Email</label><br>
                <input type="email" class="form-contorl english rounded-0" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="password" class="english">Password</label><br>
                <input type="password" class="form-contorl english rounded-0" name="password" value="" id="password">
            </div>
            <div class="form-group">
                <label for="phone" class="english">Phone_Number</label><br>
                <input type="text" class="form-contorl english rounded-0" name="phone" value="" id="phone">
            </div>
            <div class="d-grid gap-2 mt-4">
                <button class="btn btn-dark btn-lg" type="submit" name="submit">Register</button>
            </div>
        </form>
    </div>
</div>
        
        <!--service idea area are end -->

        <!-- footer area start-->
        <div class="footer-area ptb-50 ">
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