<?php 
require("common.php");


mysqli_query($con,"delete from loan where loan_id='".$_GET['id']."'");

header('location:display_loan.php?page=display_loan');

?>