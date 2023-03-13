<?php
include_once "./sysgem/postGenerated.php";
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
<body style="height:100em">
    <nav class="navbar" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="adminPage.php">HOME</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
              <ul class="navbar-nav me-auto  mb-lg-0">
                <li class="nav-item border-white border-bottom">
                  <a class="nav-link active" aria-current="page" href="postCreated.php">Post Created</a>
                </li>
             
              </ul>
            </div>
          </div>
    </nav>
    <div style="background: url('./images/abstract-dynamic-blue-orange-background_67845-1390.jpg'); height:300px;background-size:cover;background-repeat:no-repeat;" class="d-flex justify-content-center align-items-center text-white">
        <h1>Wellcome Admin</h1>
    </div>
    <div class="row">
    <?php
    $result=getPost(1);
      foreach($result as $post){
        $pid=$post["id"];
        echo '    <div class="card mt-3" style="width: 18rem;margin-left: 30px;height:fit-content">
        <img class="card-img-top mt-2" src="./image/'.$post["img"].'" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">'.$post["name"].'</h5>
          <h5 class="card-text">'.$post["price"].'</h5>
          <a href="postEdit.php?pid='.$pid.'" class="btn btn-info">Edit</a>
          <a href="./sysgem/delete.php?pid='.$pid.'" class="btn btn-info" style="float:right">Delete</a>
        </div>
      </div>';
      
      }
?>
    </div>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>