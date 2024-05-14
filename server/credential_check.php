<?php
session_start();

if (!empty($_SESSION['username'])) {
    if ($_SESSION['is_admin'] === "true") {
        header('location: ../HN-Appointment.php');
        exit() or die();
    } else {
        header('location: ../PT-AppointMedical.php');
        exit() or die();
    }
}