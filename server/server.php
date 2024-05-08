<?php
include "db.php";
session_start();

// LOGIN
$login_errors = array();

if (isset($_POST['login'])) {
    $username = $db->real_escape_string($_POST['username']);
    $password = $db->real_escape_string($_POST['password']);

    if (empty($username)) {
        array_push($login_errors, "ID number is required");
    }

    if (empty($password)) {
        array_push($login_errors, "Password is required");
    }

    if (count($login_errors) == 0) {
        $password = md5($password);
        // $userQuery = $db->prepare("SELECT id, email, username FROM users WHERE email = ? AND password = ? AND is_disabled = 0 AND is_deactivated = 0");
        $userQuery = $db->prepare("SELECT * FROM useraccounts WHERE username = ? AND password = ?");
        $userQuery->bind_param("ss", $username, $password);
        $userQuery->execute();
        $result = $userQuery->get_result();
        $nums = $result->num_rows;
        if ($nums == 1) {
            $userData = $result->fetch_assoc();
            if ($userData['is_admin'] == "true") {
                $_SESSION['username'] = $username;
                $_SESSION['is_admin'] = $userData['is_admin'];
                $_SESSION['userid'] = $userData["id"];
                $_SESSION['firstname'] = $userData["firstname"];
                $_SESSION['lastname'] = $userData["lastname"];
                $_SESSION['success'] = "You are now logged in.";
                $_SESSION['role'] = "Admin";
                header('location: ../HN-Appointment.php');
                ob_end_flush();
                exit();
            } else if ($userData['is_admin'] == "false" && $userData['is_reset'] == "true") {
                $_SESSION['is_admin'] = $userData['is_admin'];
                $_SESSION['is_reset'] = "true";
                $_SESSION['username'] = $username;
                $_SESSION['userid'] = $userData["id"];
                $_SESSION['firstname'] = $userData["firstname"];
                $_SESSION['lastname'] = $userData["lastname"];
                $_SESSION['success'] = "You are now logged in.";
                $_SESSION['role'] = "Student";
                header('location: ../PT-AppointMedical.php');
                ob_end_flush();
                exit();
            } else if ($userData['is_admin'] == "false" && $userData['is_reset'] == "false") {
                $_SESSION['is_admin'] = $userData['is_admin'];
                $_SESSION['is_reset'] == "false";
                $_SESSION['username'] = $username;
                $_SESSION['userid'] = $userData["id"];
                $_SESSION['firstname'] = $userData["firstname"];
                $_SESSION['lastname'] = $userData["lastname"];
                $_SESSION['success'] = "You are now logged in.";
                $_SESSION['role'] = "Student";
                header('location: ../PT-SettCP.php');
                ob_end_flush();
                exit();
            }
        } else {
            array_push($login_errors, "Username and password does not match.");
        }
        $userQuery->close();
    }
}

// LOGOUT
if (isset($_GET['logout'])) {
    session_start();
    session_destroy();
    header('location: index.php');
    ob_end_flush();
    exit();
}

// INPUT MEDICINE RECORD
if (isset($_POST['save_medicine'])) {
    $item_name = $db->real_escape_string($_POST['item_name']);
    $item_label = $db->real_escape_string($_POST['item_label']);
    $item_dosage = $db->real_escape_string($_POST['item_dosage']);
    $item_quantity = $db->real_escape_string($_POST['item_quantity']);
    $item_stock_date = $db->real_escape_string($_POST['item_stock_date']);
    $item_expiration_date = $db->real_escape_string($_POST['item_expiration_date']);

    $item_query = $db->prepare("INSERT INTO medicine_records (item_name, item_label, item_dosage, item_quantity, item_stock_date, item_expiration_date) VALUES (?, ?, ?, ?, ?, ?)");
    $item_query->bind_param("ssssss", $item_name, $item_label, $item_dosage, $item_quantity, $item_stock_date, $item_expiration_date);
    $item_query->execute();
    $item_query->close();
    header('Location: HN-MedRec.php');
}

// GET MEDICINE RECORD
$get_medicine_record = "SELECT * FROM medicine_records";
$get_medicine_record_result = mysqli_query($db, $get_medicine_record);

// GET MEDICAL LOG
$get_medical_log = "SELECT * FROM medical_logsheet";
$get_medical_log_result = mysqli_query($db, $get_medical_log);

function checkAccountRole()
{
    if (isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == "true") {
        include 'admin_sidebar.php';
    } else {
        include 'student_sidebar.php';
    }
}

function getCurrentUserUsername()
{
    if (isset($_SESSION['userid'])) {
        return $_SESSION['firstname'] . ' ' . $_SESSION['lastname'];
    }
}

function getUserRole()
{
    if (isset($_SESSION['userid'])) {
        return $_SESSION['role'];
    }
}

?>