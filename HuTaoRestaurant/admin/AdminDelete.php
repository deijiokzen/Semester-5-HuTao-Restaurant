<?php 

    include('../config/constants.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM admin WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if($result==true)
    {
        $_SESSION['delete'] = "<div class='success'>Admin Deleted Successfully.</div>";
        header('location:'.SITEURL.'admin/AdminManage.php');
    }
    else
    {
        $_SESSION['delete'] = "<div class='error'>Failed to Delete Admin. Try Again Later.</div>";
        header('location:'.SITEURL.'admin/AdminManage.php');
    }


?>