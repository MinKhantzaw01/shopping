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
        <form method ="post" action ="admin.php" enctype="multipart/form-data" class="mt-5">
            <div class="form-group mb-3">
                <label for="productName" style="font-family: cambria;">Product Name</label>
                <input class="form-control mt-2" type="text" placeholder="Product Name">
            </div>
            <div class="form-group mb-3">
                <label for="productPrice" style="font-family: cambria;"> Product Price</label>
                <input class="form-control mt-2" type="text" placeholder="Product Price">
            </div>
            <div class="form-group mb-5">
                <label for="formFileMultiple" class="form-label">Product Images</label>
                <input class="form-control" type="file" id="formFileMultiple" multiple>
            </div>
            <div class="row no-gutters justify-content-end">
                <button type="submit" name="submit"  class="btn btn-outline-secondary mb-2">Post</button>
                <button class="btn btn-outline-warning ">Cancel</button>
            </div>
        </form>
    </div>
</body>
</html>