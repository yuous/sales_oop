<?php
require_once "Database.php";

class User extends Database
{
  public function register($request)
  {
    $first_name = $request["first_name"];
    $last_name = $request["last_name"];
    $username = $request["username"];
    $password = $request["password"];
   
      $encrypted_password = password_hash($password, PASSWORD_DEFAULT);

      $sql = "INSERT INTO users(first_name, last_name, username, password) VALUES ('$first_name','$last_name','$username','$encrypted_password')";

      if ($this->conn->query($sql)) {
        header("Location:../view/");
      } else {
        die("Error inserting data: " . $this->conn->error);
      }
  }
  public function login($request)
  {
    $username = $request['username'];
    $password = $request['password'];
    $sql = "SELECT * FROM users WHERE username = '$username'";

    $result = $this->conn->query($sql);
    //check the username
    if ($result->num_rows == 1) {
      //check if the password is correct
      $user = $result->fetch_assoc();

      if (password_verify($password, $user['password'])) {

        session_start();
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['full_name'] = $user['first_name']. " " .$user['last_name'];

        header("location: ../view/dashboard.php");
      exit;
      } else {
        die("Password is incorrect");
      }
    } else {
      die("Username not found");
    }
  }

  public function getAllusers(){
    $sql = "SELECT * FROM users";
    if($result = $this->conn->query($sql)){
      return $result;
    } else {
      die('Error retrieving all users: ' . $this->conn->error);
    }
  }

}