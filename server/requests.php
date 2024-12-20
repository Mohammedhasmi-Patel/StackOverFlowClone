<?php

include "../utils/db.php";
session_start();

if(isset($_POST['signup'])){

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
else if(isset($_POST['login'])){
  $email = $_POST["email"];
  $password = $_POST["password"];

  $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  $result = $conn->query($query);

  foreach ($result as  $row) {
    print_r($row);
        $username = $row['username'];
  }


  if($result->num_rows==1){
    $_SESSION["user"] = ["username"=>$username,"email"=>$email];
    header("location:/stackOverFlowClone");


  }
}
else if(isset($_GET['logout'])){
    session_unset();
    header("location:/stackOverFlowClone");

}


?>