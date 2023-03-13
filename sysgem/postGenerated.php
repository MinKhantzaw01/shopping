<?php
include_once "dbHacker.php";
function insertPost($name,$price,$imglink,$type){
    $db=dbConnect();
    $created_at=getTimeNow();
    $qry="INSERT INTO post(name,price,img,type,created_at)
    VALUES('$name','$price','$imglink','$type','$created_at')";
    $result=mysqli_query($db,$qry);
    return $result;
}
function getPost($type){
    $db=dbConnect();
    $qry="";
    if($type==1){
        $qry="SELECT * FROM post WHERE type=$type";
    }else{
        $qry="SELECT * FROM post";
    }
    $result = mysqli_query($db,$qry);
    return $result;
}
function indexPost(){
    $db=dbConnect();
    $qry="SELECT * FROM post";
    $result=mysqli_query($db,$qry);
    return $result;
}
function editPost($name,$price,$imglink,$id,$type){
    $db=dbConnect();
    $qry="UPDATE post SET name='$name',type=$type,price='$price',img='$imglink' WHERE id=$id ";
    $result=mysqli_query($db,$qry);
    if($result){
        header("Location:./adminPage.php");
        }else{
        echo "<script>alert('Edit Fail!')</script>";
    }
    
}

function getSinglePost($pid){
    $db=dbConnect();
    $qry="SELECT * FROM post WHERE id=$pid";
    $result=mysqli_query($db,$qry);
    return $result;
}

?>