<?php
include_once "dbHacker.php";
    $db=dbConnect();
    $pid=$_GET['pid'];
    $qry="DELETE FROM post WHERE id=$pid";
    mysqli_query($db,$qry);
    header("Location:../adminPage.php");
?>