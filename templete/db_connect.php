<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "urbanease";

$conn = mysqli_connect('localhost','root','','urbanease');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
?>