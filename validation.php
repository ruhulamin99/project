<?php

session_start();


$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'lost_user');

$user = $_POST['user'];
$email =  $_POST['email'];
$password = $_POST['password'];

$s= "SELECT * FROM users WHERE user='$user' && password='$password'  ";

$result = mysqli_query($con , $s);
$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['user'] = $user;
   header('location:index.php');
}
else{
    header('location:login.php');
}

?>