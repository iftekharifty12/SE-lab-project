<?php
include("db_connect.php");
$first_name = $_POST['first_name'];

$last_name = $_POST['last_name'];
 $email = $_POST['email'];
 $password = $_POST['password'];
        
$gender = $_POST['gender'];    
if(empty($_FILES['profile_picture']))
{

    $sql = "INSERT INTO `user`( `first_name`, `last_name`, `email`, `password`, `profile_picture`, `gender`) VALUES ('$first_name','$last_name','$email','$password','Proile','$gender')";
}
else{

$sql = "INSERT INTO `user`( `first_name`, `last_name`, `email`, `password`, `profile_picture`, `gender`) VALUES ('$first_name','$last_name','$email','$password','.../img/profile_picture/default/1.png','$gender')";
} 

$result = $conn->query($sql); 
header('location: ../index.php') ;







?>