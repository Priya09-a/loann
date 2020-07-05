<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location:user_index.php');
}
session_destroy();
header('location: user_index.php');
?>
