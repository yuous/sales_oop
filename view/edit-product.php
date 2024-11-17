<?php
session_start();

require '../classes/Product.php';
$product_obj = new Product;
$product = $product_obj->getProduct();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="css/main-style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>


  <nav class="navbar navbar-expand navbar-dar mb-5">
    <div class="container justify-content-between">
      <a href="dashboard.php" class="navbar-brand ">
        <h4><i class="fa-solid fa-house"></i></h4>
      </a>
      <!-- <div class="navbar-nav text-center">
        <span class="navbar-text"> <?= "Welcome  " . $_SESSION['full_name'] ?></span> -->

    </div>
    <form action="../actions/logout.php" method="post" class="d-flex ms-2">
      <button type="submit" class="text-danger bg-transparent border-0 fs-5"><i class="fa-solid fa-user-xmark me-3"></i></button>
    </form>
    </div>
  </nav>
  <div>
    <h1 class="display-4 fw-bold text-warning text-center"><i class="fa-solid fa-pen-to-square me-2"></i>Edit Product</h1>
    <form action="../actions/product.php" method="post" class="w-50 mx-auto">
      <div class="mb-3">
        <label for="proname">Product Name</label>
        <input type="text" name="product_name" id="proname" class="form-control"value="<?= $product['product_name'] ?>"  reqiuired autofucs>
      </div>
      <div class="row">
        <div class="col-6 mb-3">
          <label for="price">Price</label>
          <div class="input-group">
            <span class="input-group-text">$</span>
            <input type="number" name="price" id="price" class="form-control" value="<?= $product['price'] ?>" required>
          </div>
        </div>
        <div class="col-6 mb-3">
          <label for="quantity">Quantity</label>
          <input type="number" name="quantity" id="quantity" class="form-control" value="<?= $product['quantity'] ?>"required>
        </div>
      </div>
      <div class="my-3">
        <button type="submit" class="btn btn-warning w-100" name="btn_add">Edit</button>
      </div>
    </form>
  </div>
</body>

</html>