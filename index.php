<!DOCTYPE html>
<html lang="en">
<head>
 
  <title>Stack OverFlow</title>
  <?php include "./client/commonFiles.php"?>
</head>
<body>
    <?php

    session_start();
    include "./client/header.php";

    if(isset($_GET["login"]) && !isset($_SESSION['user']['username'])){
    include "./client/login.php";
    }
    else if(isset($_GET["signup"]) && !isset($_SESSION['user']['username'])){
      include "./client/signup.php";
    }

    else if(isset($_GET['askQuestion'])){
      include "./client/askQuestions.php";
    }
    
    ?>
  
</body>
</html>