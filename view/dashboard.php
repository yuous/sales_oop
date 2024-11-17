<?php session_start();
include '../classes/User.php';
include '../classes/Product.php';
//Create an object 
$user = new User;
//call the method
$all_users = $user->getAllUsers();


$product = new Product();
$all_products = $product->getAllproducts();




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
        <h3><i class="fa-solid fa-house"></i></h3>
      </a>
      <div class="navbar-nav text-center">
        <span class="navbar-text"> <?= "Welcome  " . $_SESSION['full_name'] ?></span>

      </div>

      <form action="../actions/logout.php" method="post" class="d-flex ms-2">
        <button type="submit" class="text-danger bg-transparent border-0"><i
            class="fa-solid fa-user-xmark"></i></button>
      </form>
    </div>
  </nav>
  <main class="row justify-content-center gx-0">
    <div class="col-6">
      <div class="row">
        <div class="col-auto">
          <h2 class="text-start">Product list</h2>
        </div>
        <div class="col-1 ms-auto">
          <button type="button" class="btn btn-outline-info border-0 btn-lg" data-bs-toggle="modal"
            data-bs-target="#exampleModal"><i class="fa-solid fa-plus"></i></button>
        </div>
      </div>
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body">
              <h1 class="display-4 fw-bold text-info text-center"><i class="fa-solid fa-shop me-2 "></i>Add Product</h1>
            </div>
            <div>
              <form action="../actions/product.php" method="post" class="w-75 mx-auto">
                <div class="mb-3">
                  <label for="proname">Product Name</label>
                  <input type="text" name="product_name" id="proname" class="form-control" reqiuired autofucs>
                </div>
                <div class="row">
                  <div class="col-6 mb-3">
                    <label for="price">Price</label>
                    <div class="input-group">
                      <span class="input-group-text">$</span>
                      <input type="number" name="price" id="price" class="form-control" required>
                    </div>
                  </div>
                  <div class="col-6 mb-3">
                    <label for="quantity">Quantity</label>
                    <input type="number" name="quantity" id="quantity" class="form-control" required>
                  </div>
                </div>
                <div class="my-3">
                  <button type="submit" class="btn btn-info w-100" name="btn_add">Add</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <table class="table-hover table align-middle">
        <thead class="bg-dark text-white">
          <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php
          while ($product = $all_products->fetch_assoc()) {
            //print_r($product);
            ?>
            <tr>
              <td><?= $product['id'] ?></td>
              <td><?= $product['product_name'] ?></td>
              <td><?= $product['price'] ?></td>
              <td><?= $product['quantity'] ?></td>

              <td><!-- Edit -->
                <a href="edit-product.php" class="btn btn-outline-warning">
                  <i class="fa-regular fa-pen-to-square"></i>
                </a>
              </td>
              <td> <!-- Delete -->
                <a href="delete-product.php" class="btn btn-outline-danger">
                  <i class="fa-regular fa-trash-can"></i>
                </a>
              </td>
            </tr>
            <?php

          }
          ?>
        </tbody>
      </table>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>