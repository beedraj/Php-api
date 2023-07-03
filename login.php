<?php
$connection = mysqli_connect("localhost","root","Welcome@123","reactnative") or die("Database Error");

$email = $_POST["email"];

$password = $_POST["password"];

$query ="select * from user where email = '$email' and password = '$password' ";

$response = mysqli_query($connection,$query);

if(mysqli_num_rows($response) > 0)
{
    $data = mysqli_fetch_assoc($response);

    echo json_encode(array('msg'=>'user is founded','status'=>'success','data' => $data)); 

}else
{
    echo json_encode(array('msg'=>'user is not ','status'=>'not founded'));
}



?>