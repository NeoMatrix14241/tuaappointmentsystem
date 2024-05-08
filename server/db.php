<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "medrecord";
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    try {
        $db = new mysqli($server, $username, $password, $database);
        $db->set_charset("utf8mb4");
    } catch (Exception $e) {
        error_log($e->getMessage());
        exit("Database is currently offline.");
    }
?>