<?php

session_start();

if(isset($_POST['signup'])){
  include "../utils/db.php";

  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $address = $_POST["address"];


  if(empty($username) || empty($email) || empty($password) || empty($address)){
      echo "<span style='color:red'>All fields are required....</span>";
  }

  $insertQuery = "INSERT INTO users VALUES(NULL,'$username','$email','$password','$address')";
  $users = $conn->prepare($insertQuery);
  $registerUser = $users->execute();

  if($registerUser){
    header("location:/stackOverFlowClone");
    $_SESSION["user"] = ["username"=>$username,"email"=>$email];
  }else{
    echo "there is an error to inserting the data";
  }

}

?>