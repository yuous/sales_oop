<?php
require_once "Database.php";
class Product extends Database{

public function addProduct($request){

  $product_name = $request["product_name"];
  $price = $request["price"];
  $quantity = $request["quantity"];
  $sql = "INSERT INTO products(product_name, price, quantity) VALUES ('$product_name','$price','$quantity')";

  if ($this->conn->query($sql)) {
    header("Location:../view/dashboard.php");
  } else {
    die("Error inserting data: " . $this->conn->error);
  }

}
public function getAllproducts(){
  $sql = "SELECT * FROM products";
  if($result = $this->conn->query($sql)){
    return $result;
  } else {
    die('Error retrieving all products: ' . $this->conn->error);
  }
}
public function update($request)
{
  session_start();

}
public function getProduct()
{
  $id = $_SESSION['id'];
  $sql = "SELECT product_name, price, quantity FROM products WHERE id = $id";

  if ($result = $this->conn->query($sql)) {
    return $result->fetch_assoc();
  } else {
    die('Error retrieving the user: ' . $this->conn->error);
  }
}


}



?>
