<?php 
session_start();

$connetion = mysqli_connect("localhost","root","","adminpanel");

if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];

    if($password === $cpassword)
    {    
        $query = "INSERT INTO register(username,email,password) VALUES ('$username','$email','$password')";
        $query_run = mysqli_query($connetion, $query);

        if($query_run){
        $_SESSION['success']="Admin Profile Added";
        header('Location: register.php');
        }

        else{
        $_SESSION['status']="Admin Profile Not Added";
        header('Location: register.php');
        }

    }
    else
    {
        $_SESSION['status']="Password and Confirm Password Does Not Match";
        header('Location: register.php');
    }
    
}







if(isset($_POST['updatebtn']))
{   
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];
    
    $query = "UPDATE register SET username = '$username' , email = '$email' , password='$password' WHERE id='$id' ";
    $query_run= mysqli_query($connetion,$query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is Updated";
        header('Location: register.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        header('Location: register.php');
    }

}








if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];
    $query = "DELETE FROM register WHERE id='$id' ";
    $query_run= mysqli_query($connetion,$query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is DELETED";
        header('Location: register.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";
        header('Location: register.php');
    }


}





?>