<?php 

$host = "localhost";
$username ="root";
$password = "";
$dbname = "stackoverflow";
$port = 3307;

$conn = new mysqli($host,$username,$password,$dbname,$port);

if($conn->connect_error){
  die("connection error $conn->connect_error");
}



?>