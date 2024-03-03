<?php 

include("db_connect.php");

$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT * FROM `user` WHERE email like '$email' and password like '$password'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 1) {
       header("location: ../index.php");
       $users = mysqli_fetch_assoc($result);
       
       session_start();
       $_SESSION['user'] = $users['0']; 

        }
else{
    echo "invalid";
}


?>