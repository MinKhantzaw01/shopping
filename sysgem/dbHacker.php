<?php

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "project");

function dbConnect(){
    $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    if (mysqli_connect_errno()){
        echo "Database Connection Fail!";
    }else{
        return $db;
    }
}

function insertUser($name,$email,$password,$phone){
    $password=encodePass($password);
    $curTime=getTimeNow();
    $db = dbConnect();
    $qry = "SELECT * FROM member WHERE email='$email'";
    $result=mysqli_query($db,$qry);
    if(mysqli_num_rows($result)){
        return "Email is already in use!";
    }else{
          $qry = "INSERT INTO member(name,email,password,phone_number,created_at,updated_at)
         VALUES ('$name','$email','$password','$phone','$curTime','$curTime')";
    $result = mysqli_query($db,$qry);
    if($result==1){
        return "Register Success!";
    }else{
        return "Register Fail!";
    }
    }
  
}

function insertOrderUser($name,$email,$pass,$phone,$address,$node){
    $pass=encodePass($pass);
    $curtime=getTimeNow();
    $db=dbConnect();
    $qry = "INSERT INTO cart(name,email,password,phone,address,note,created_at)
         VALUES ('$name','$email','$pass','$phone','$address','$node','$curtime')";
    $result = mysqli_query($db,$qry);
    if($result==1){
        return "Order Success!";
    }else{
        return "Order Fail!";
    }

}
function userLogin($email,$password){
    $password=encodePass($password);
    $db=dbConnect();
    $qry="SELECT name FROM member WHERE email='$email' AND password='$password'";
    $result=mysqli_query($db,$qry);
    if($result){
        $username="";
        foreach($result as $str){
            $username = $str["name"];
        }
        setSession('username',$username);
        setSession('email',$email);
        return "Login Success";
    }else{
        return "Login Fail";
    }
}
function insertadmin($name,$email,$password,){
    $password=encodePass($password);
    $curTime=getTimeNow();
    $db = dbConnect();
    $qry = "SELECT * FROM member WHERE email='$email'";
    $result=mysqli_query($db,$qry);
    if(mysqli_num_rows($result)){
        return "Email is already in use!";
    }else{
          $qry = "INSERT INTO providers(name,email,password,created_at,updated_at)
         VALUES ('$name','$email','$password','$curTime','$curTime')";
    $result = mysqli_query($db,$qry);
    if($result==1){
        return "Register Success!";
    }else{
        return "Register Fail!";
    }
    }
  
}

function adminLogin($email,$password){
    $password=encodePass($password);
    $db=dbConnect();
    $qry="SELECT name FROM member WHERE email='$email' AND password='$password'";
    $result=mysqli_query($db,$qry);
    if($result){
        $name="";
        foreach($result as $str){
            $name = $str["name"];
        }
        setSession('name',$name);
        setSession('email',$email);
        return "Login Success";
    }else{
        return "Login Fail";
    }
}




function getTimeNow(){
    return date("Y-m-d",time());
}
function encodePass($pass){
    $pass = md5($pass);
    $pass = sha1($pass);
    $pass = crypt($pass,$pass);

    return $pass;
}

?>