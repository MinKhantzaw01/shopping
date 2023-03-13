<?php
include_once "./inc/html_head.php";

if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

$ans=registerAdmin($name,$email,$password);
$message="";
    switch($ans){
      case "Register Success!":
        $message = "Register Success!";
        setSession("name",$name);
        setSession("email",$email);
        if ($name==="minkhantzaw" && $email==="mink123921@gmail.com"){
            header("Location: adminLogin.php");
        }else{
            header("Location: adminLogin.php");
        }
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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adminRegister.css">
    <title>Register Page</title>
</head>
<body>
<div class="container">
  <div class="row justify-content-center">
  <div class="col-md-5">
   <div class="card">
     <h2 class="card-title text-center">Register For Admin</h2>
      <div class="card-body py-md-4">
       <form _lpchecked="1" method="post" action="#">
          <div class="form-group">
             <input type="text" class="form-control" name="name" id="name" placeholder="Name">
        </div>
        <div class="form-group">
             <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            
                          
   <div class="form-group">
     <input type="password" class="form-control" id="password" name="password" placeholder="Password">
   </div>
   <div class="d-flex flex-row align-items-center justify-content-between ">
      <a href="adminLogin.php">Login</a>
      <input type="submit" value="Create Account" name="submit" class="col-3 btn-primary btn mb-10">
          </div>
       </form>
     </div>
  </div>
</div>
</div>
</div>
</body>
</html>