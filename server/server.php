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
                $_SESSION['student_id'] = $userData['student_id'];
                $_SESSION['username'] = $username;
                $_SESSION['is_admin'] = $userData['is_admin'];
                $_SESSION['userid'] = $userData["id"];
                $_SESSION['firstname'] = $userData["firstname"];
                $_SESSION['lastname'] = $userData["lastname"];
                $_SESSION['success'] = "You are now logged in.";
                $_SESSION['role'] = "Admin";
                header('location: ../HN-Appointment.php');
                ob_end_flush();
                exit() or die();
            } else if ($userData['is_admin'] == "false" && $userData['is_reset'] == "true") {
                $_SESSION['is_admin'] = $userData['is_admin'];
                $_SESSION['student_id'] = $userData['student_id'];
                $_SESSION['is_reset'] = $userData['is_reset'];
                $_SESSION['username'] = $username;
                $_SESSION['userid'] = $userData["id"];
                $_SESSION['firstname'] = $userData["firstname"];
                $_SESSION['lastname'] = $userData["lastname"];
                $_SESSION['success'] = "You are now logged in.";
                $_SESSION['role'] = "Student";
                header('location: ../PT-AppointMedical.php');
                ob_end_flush();
                exit() or die();
            } else if ($userData['is_admin'] == "false" && $userData['is_reset'] == "false") {
                $_SESSION['is_admin'] = $userData['is_admin'];
                $_SESSION['student_id'] = $userData['student_id'];
                $_SESSION['is_reset'] = $userData['is_reset'];
                $_SESSION['username'] = $username;
                $_SESSION['userid'] = $userData["id"];
                $_SESSION['firstname'] = $userData["firstname"];
                $_SESSION['lastname'] = $userData["lastname"];
                $_SESSION['success'] = "You are now logged in.";
                $_SESSION['role'] = "Student";
                header('location: ../PT-SettCP.php');
                ob_end_flush();
                exit() or die();
            }
        } else {
            array_push($login_errors, "Username and password does not match.");
        }
        $userQuery->close() or die();
    }
}

// LOGOUT
if (isset($_GET['logout'])) {
    session_start();
    unset($_SESSION['is_admin']);
    unset($_SESSION['student_id']);
    unset($_SESSION['is_reset']);
    unset($_SESSION['username']);
    unset($_SESSION['userid']);
    unset($_SESSION['firstname']);
    unset($_SESSION['lastname']);
    unset($_SESSION['success']);
    unset($_SESSION['role']);
    session_destroy();
    header('location: index.php');
    ob_end_flush();
    exit() or die();
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
    $item_query->close() or die();
    header('Location: HN-MedRec.php');
    exit() or die();
}

// GET MEDICINE RECORD
$get_medicine_record = "SELECT * FROM medicine_records";
$get_medicine_record_result = mysqli_query($db, $get_medicine_record);

// GET MEDICAL LOG
$get_medical_log = "SELECT * FROM medical_logsheet";
$get_medical_log_result = mysqli_query($db, $get_medical_log);

// CHECK IF THE USER IS ADMIN OR STUDENT
function checkAccountRole()
{
    if (isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == "true") {
        include 'admin_sidebar.php';
    } else {
        include 'student_sidebar.php';
    }
}

// GET THE CURRENT USERNAME AFTER LOGIN
function getCurrentUserUsername()
{
    if (isset($_SESSION['userid'])) {
        return $_SESSION['firstname'] . ' ' . $_SESSION['lastname'];
    }
}

// GET THE USER ROLE IF HE IS ADMIN OR STUDENT
function getUserRole()
{
    if (isset($_SESSION['userid'])) {
        return $_SESSION['role'];
    }
}

// CHECK IF THE USER IS NEW AND IS NEEDED TO CHANGE PASSWORD, ELSE DO NOTHING

if (isset($_POST['change_pass_btn'])) {
    ChangePassCheck($db);
}

function ChangePassCheck($db)
{
    $student_id = $_SESSION['student_id'];
    $is_reset = $_SESSION['is_reset'];

    $query = "SELECT is_reset FROM useraccounts WHERE id = ?";

    if ($check_query = $db->prepare("$query")) {
        $check_query->bind_param("i", $student_id);
        $check_query->execute();
        $check_query->close() or die();

        if ($is_reset !== null) {
            if ($is_reset === "true") {
                changePassOld($db);
            } else {
                changePassNew($db);
            }
        }
    }
}

function changePassNew($db)
{
    $student_id = $_SESSION['student_id'];

    $password_new = $db->real_escape_string($_POST['new_password']);
    $password_confirm = $db->real_escape_string($_POST['confirm_new_password']);
    $pass_new_md5 = md5($password_new);
    $pass_conf_md5 = md5($password_confirm);
    $is_reset = "true";

    $update_pass = $db->prepare("UPDATE useraccounts SET password = ?, is_reset = ? WHERE student_id = ?");
    $update_pass->bind_param("ssi", $pass_conf_md5, $is_reset, $student_id);

    if ($pass_new_md5 !== $pass_conf_md5) {
        echo "<script>alert('Password do not match. Please Try Again.');</script>";
        header("location: PT-SettCP.php");
        exit() or die();
    } else {
        $update_pass->execute();
        $update_pass->close() or die();
        $_SESSION['is_reset'] = "true";
        header("location: PT-SettCP.php");
        exit() or die();
    }
}

function changePassOld($db)
{
    $student_id = $_SESSION['student_id'];

    $db_password = "";

    $password_old = $db->real_escape_string($_POST['old_password']);
    $password_new = $db->real_escape_string($_POST['new_password']);
    $password_confirm = $db->real_escape_string($_POST['confirm_new_password']);
    $pass_old_md5 = md5($password_old);
    $pass_new_md5 = md5($password_new);
    $pass_conf_md5 = md5($password_confirm);
    $is_reset = "true";

    $stmt = $db->prepare("SELECT password FROM useraccounts WHERE student_id = ?");
    $stmt->bind_param("i", $student_id);
    $stmt->execute();
    $stmt->bind_result($db_password);
    $stmt->fetch();
    $stmt->close();

    if ($pass_old_md5 !== $db_password) {
        echo "<script>alert('Old password is incorrect. Please try again.');</script>";
        echo "<script>window.location.href = '../PT-SettCP.php'</script>";
        return; // Stop further execution if old password is incorrect
    } else {
        if ($pass_new_md5 !== $pass_conf_md5) {
            echo "<script>alert('Password and confirm new password does not match. Please try again.');</script>";
            echo "<script>window.location.href = '../PT-SettCP.php'</script>";
            return; // Stop further execution if old password is incorrect
        } else {
            $is_reset = "true";
            $_SESSION['is_reset'] = "true";
            $update_pass = $db->prepare("UPDATE useraccounts SET password = ?, is_reset = ? WHERE student_id = ?");
            $update_pass->bind_param("ssi", $pass_conf_md5, $is_reset, $student_id);
            $update_pass->execute();
            $update_pass->close();

            echo "<script>window.location.href = '../PT-SettCP.php'</script>";
            header("location: PT-SettCP.php");
            exit() or die();
        }
    }
}
?>