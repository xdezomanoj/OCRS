<?php 
require('../../connection/config.php');
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $query = "DELETE FROM admin WHERE id=$id";
    $result = mysqli_query($conn,$query);
    if($result)
    {
        echo header('Location: ../manage_admin.php?msg=dsuccess');
    }
    else 
    {
        echo header("Location: ../manage_manage_admin.php?msg=derror");
    }
}
?>