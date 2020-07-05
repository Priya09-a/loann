<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: admin_login.php');
}
session_destroy();
header('location: admin_login.php');
?>