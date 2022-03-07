<?php 
session_start();

$connetion = mysqli_connect("localhost","root","","adminpanel");

if(isset($_POST['usersbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];

    if($password === $cpassword)
    {    
        $query = "INSERT INTO users(username,email,password) VALUES ('$username','$email','$password')";
        $query_run = mysqli_query($connetion, $query);

        if($query_run){
        $_SESSION['success']="User Profile Added";
        header('Location: users.php');
        }

        else{
        $_SESSION['status']="User Profile Not Added";
        header('Location: users.php');
        }

    }
    else
    {
        $_SESSION['status']="Password and Confirm Password Does Not Match";
        header('Location: users.php');
    }
    
}














$connetion = mysqli_connect("localhost","root","","lost_user");

if(isset($_POST['deletebtn']))
{
    $id = $_POST['delete_id'];
    $query = "DELETE FROM users WHERE id='$id' ";
    $query_run= mysqli_query($connetion,$query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is DELETED";
        header('Location: users.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";
        header('Location: users.php');
    }


}





?>