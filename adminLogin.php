<?php
include_once "./inc/html_head.php";


if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
	$ret = loginAdmin($email,$password);
    $message="";
    switch($ret){
        case "Login Success":
            $message = "Login Successed";
            setSession("email",$email);
            if(getSession("name")==="minkhantzaw" && getSession("email")==="mink123921@gmail.com"){
                header("Location: adminPage.php");
            
            }else{
                header("Location: adminPage.php");
                
            }
            break;
        case "Login Fail":
            $message = "Login Fail";
            break;
        case "Auth Fail!" :
            $message = "Auth Fail!";
            break;
        default : $message = "default value";
            break;
    } 
    echo '<div class="alert alert-warning alert-dismissible fade show mt-4" role="alert">
    <strong>'.$message.'</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
   

?>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Yinka Enoch Adedokun">
    <link rel="stylesheet" href="css/adminLogin.css">
	<title>Login Page</title>
</head>
<body>
	<!-- Main Content -->
	<div class="container-fluid">
		<div class="row main-content bg-success text-center">
			<div class="col-md-4 text-center company__info">
				<span class="company__logo"><h2><span class="fa fa-android"></span></h2></span>
				<h4 class="company_title">Online Shopping</h4>
			</div>
			<div class="col-md-8 col-xs-12 col-sm-12 login_form ">
				<div class="container-fluid">
					<div class="row mt-5 mb-2">
						<h2>Log In To Admin</h2>
					</div>
					<div class="row">
						<form control="" class="form-group" method="post">
							<div class="row">
								<input type="text" name="email" id="email" class="form__input" placeholder="Email">
							</div>
							<div class="row">
								<!-- <span class="fa fa-lock"></span> -->
								<input type="password" name="password" id="password" class="form__input" placeholder="Password">
							</div>
							
							<div class="row ml-90">
								<input type="submit" value="Submit" name="submit" class="btn">
							</div>
						</form>
					</div>
					<div class="row">
						<p>Don't have an account? <a class="text-danger" href="adminRegister.php">Register Here</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>