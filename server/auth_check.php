<?php
    ob_start();
    if (empty($_SESSION['username'])) {
        header('location: ../index.php');
    }
?>