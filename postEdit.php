<?php
include_once "./sysgem/postGenerated.php";
if(isset($_GET['pid'])){
    $pid=$_GET['pid'];
    $result=getSinglePost($pid);
    $posts=[];
    foreach($result as $item){
        $posts["name"]=$item["name"];
        $posts["price"]=$item["price"];
        $posts["img"]=$item["img"];
        echo $item["img"];

    }
  
}

if(isset($_POST['submit'])){
    $file=$_FILES["file"];
    $imgname="";
    if($_FILES["file"]["name"]!= null){
        $imgname=mt_rand(time(),time())."_".$_FILES["file"]["name"];
        move_uploaded_file($_FILES["file"]["tmp_name"],"image/".$imgname);
    }else{
        $imgname=$_POST["oldimg"];
    }
    $name=$_POST["name"];
    $price=$_POST["price"];
    $imglink=$imgname;
    $type=$_POST["type"];
    $pid=$_GET["pid"];
    editPost($name,$price,$imglink,$type,$pid);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Admin Page</title>
</head>
<body style="height:60em">
    <nav class="navbar" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="adminPage.php">HOME</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
              <ul class="navbar-nav me-auto  mb-lg-0">
                <li class="nav-item border-white border-bottom">
                  <a class="nav-link active" aria-current="page" href="#">Post Created</a>
                </li>
                <li class="nav-item border-white border-bottom">
                   <a class="nav-link active" aria-current="page" href="#">Post Deleted</a>
                </li>
              </ul>
            </div>
          </div>
    </nav>
    <div style="background: url('./images/abstract-dynamic-blue-orange-background_67845-1390.jpg'); height:300px;background-size:cover;background-repeat:no-repeat;" class="d-flex justify-content-center align-items-center text-white">
        <h1>Creation Products</h1>
    </div>
    <div class="container">
        <form method ="post" action ="postEdit.php?pid=<?php echo $_GET["pid"]; ?>" enctype="multipart/form-data" class="mt-5">
            <div class="form-group mb-3">
                <label for="productName" style="font-family: cambria;">Product Name</label>
                <input class="form-control mt-2"name="name" type="text" placeholder="Product Name" value="<?php  echo $posts["name"]; ?>">
            </div>
            <div class="form-group mb-3">
                <label for="productPrice" style="font-family: cambria;"> Product Price</label>
                <input class="form-control mt-2" type="text" name="price" placeholder="Product Price" value="<?php  echo $posts["price"]; ?>">
            </div>
            <div class="form-group mb-5">
                <label for="formFileMultiple" class="form-label">Product Images</label>
                <input class="form-control" type="file" name="file" id="formFileMultiple" multiple value="<?php  echo $posts["img"]; ?>">
            </div>
            <div class="form-group mb-5">
                <label for="posttype" style="font-family: cambria;">Type</label>
                <select class="form-control mt-2" id="posttype" name="type">
                    <option value="1">Shirt</option>
                </select>
            </div>
            <div class="row no-gutters justify-content-end">
                <input type="submit" name="submit" class="btn btn-outline-info mb-3" value="Edit">
                <input type="submit" class="btn btn-outline-info mb-3" value="Cancel">
            </div>
        </form>
    </div>
</body>
</html>