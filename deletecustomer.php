<?php
require("common.php");

if (!isset($_SESSION['email'])) {
    header('location: admins.php');
}
$id=$_GET['id'];
$result = mysqli_query($con,"DELETE FROM customer WHERE cust_id=$id")
or die(mysqli_error($con));
header('location:viewcustomers.php');
 
        
       
?>
