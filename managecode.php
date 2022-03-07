<?php 
session_start();

$connetion = mysqli_connect("localhost","root","","adminpanel");


if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];
    $query = "DELETE FROM items WHERE id='$id' ";
    $query_run= mysqli_query($connetion,$query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is DELETED";
        header('Location: manageitem.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";
        header('Location: manageitem.php');
    }


}





?>