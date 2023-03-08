<?php
require_once "dbHacker.php";  

function registerUser($username,$email,$password,$phone){
    if(usernameCheck($username) && emailCheck($email) && passwordCheck($password)){
        return insertUser($username,$email,$password,$phone);
    }else{
        echo "FALSE";
    }
}

function loginUser($email,$password){
    if(emailCheck($email) && passwordcheck($password)){
        return userLogin($email,$password);
    }else{
        return "Auth Fail!";
    }
}

function OrderUser($name,$email,$pass,$phone,$address,$node){
    if(usernameCheck($name) && emailCheck($email) && passwordCheck($pass)&&phoneCheck($phone)){
        return insertOrderUser($name,$email,$pass,$phone,$address,$node);
    }else{
        echo "FALSE";
    }
}


function usernameCheck($username){
    if(strlen($username) >= 6){
        $bol = preg_match("/^[\w]+$/",$username);
        return $bol;
    }else{
        return false;
    }
};


function emailCheck($email){
    if(strlen($email)>=15){
        $bol = preg_match("/^[a-zA-Z0-9]+@[a-z]+\.[a-z]{2,4}+$/",$email);
        return $bol;
    }else{
        return false;
    }
}
function passwordCheck($password){
    if(strlen($password)>=6){
        $bol = preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*(_|[^\w]))(?=.*\d).+$/",$password);
        return $bol;
    }else{
        return false;
    }

}
function phonecheck($phone){
    if(strlen($phone)>=6){
        $bol=preg_match("/^[\d]+$/",$phone);
        return $bol;
    }else{
        return false;
    }
}

?>
