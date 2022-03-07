<?php

session_start();

$con=mysqli_connect('localhost','root');
if($con){
   
}
else{
    echo "no connection";
}


$db = mysqli_select_db($con,'adminpanel');

if(isset($_POST['submit'])){
    $username = $_POST['username'];   //last user will be taken from form
    $password = $_POST['password'];

    $sql="select * from register where username='$username' and password='$password'";

    $query = mysqli_query($con,$sql);
    
    $row = mysqli_num_rows($query);
        if($row==1){
            echo "login successful";
            $_SESSION['username'] = $username;
            header('location:index.php');
        }else{
            echo "login failed";
            header('location:login.php');
        }
    }
    


?>