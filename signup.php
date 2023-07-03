<?php
$connection = mysqli_connect("localhost","root","Welcome@123","reactnative") or die("Database Error");

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

$query="INSERT INTO user (name, email,password) VALUES ('$name','$email','$password')";

$response = mysqli_query($connection,$query);
// mysqli_query($connection,"INSERT INTO user (name, email,password) VALUES ('$name','$email','$password')") or die("Insert Error");

// $data = mysqli_fetch_assoc($response);

// echo json_encode(array('msg'=>'user is created','status'=>'success','data' => $data)); 


echo json_encode(array('msg'=>'user created successfully','status'=>'success'));


?>
