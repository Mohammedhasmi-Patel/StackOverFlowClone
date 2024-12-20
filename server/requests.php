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
  $user_id;

  foreach ($result as  $row) {
    print_r($row);
        $username = $row['username'];
        $user_id = $row['id'];
  }


  if($result->num_rows==1){
    $_SESSION["user"] = ["username"=>$username,"email"=>$email,"user_id"=>$user_id];
    header("location:/stackOverFlowClone");
  }else{
    echo "there is an error for login";
  }
}
else if(isset($_GET['logout'])){
    session_unset();
    header("location:/stackOverFlowClone");

}
else if(isset($_POST['askQuestion'])){
  print_r($_POST);
  //askQuestion

  $title = $_POST['title'];
  $description = $_POST['description'];
  $category_id = $_POST['category_id'];
  $user_id = $_SESSION['user']['user_id'];

  if(empty(trim($title)) || empty(trim($description)) || empty($category_id) || empty($user_id)){
    echo "<div style='color:red'>All fields are required!!!</div>";
  }

  $insertQuery = "INSERT INTO questions VALUES(NULL,'$title','$description','$category_id','$user_id')";
  $result = $conn->prepare($insertQuery);

  $is_inserted = $result->execute();

  if($is_inserted){
    header("location:/stackOverFlowClone");
  }else{
    echo "there is an error to insert the question";
  }
}



?>