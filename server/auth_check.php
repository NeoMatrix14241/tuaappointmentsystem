<?php
session_start();

if (empty($_SESSION['username'])) {
    header('location: ../index.php');
    exit() or die();
}
?>