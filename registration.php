<?php

session_start();
header ('location:login.php');

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'lost_user');

$user = $_POST['user'];
$email =  $_POST['email'];
$password = $_POST['password'];

$s= "SELECT * FROM users WHERE user='$user' ";

$result = mysqli_query($con , $s);
$num = mysqli_num_rows($result);
if($num == 1){
    echo "username already exist";
}
else{
    $reg = "INSERT INTO users(user , email , password) VALUES ('$user','$email','$password') ";
    mysqli_query($con,$reg);
    header ('location:login.php');
}

?>