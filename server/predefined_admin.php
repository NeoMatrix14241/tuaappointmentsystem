<?php
    include "server.php";

    $reset = $db->prepare("DELETE FROM useraccounts");
    $reset->execute();
    $reset->close();

    $firstname0 = "ADMIN";
    $lastname0 = "PRIVILEGE";
    $username0 = "admin";
    $password0 = md5("admin123");
    $is_reset0 = "notapplicable";
    $is_admin0 = "true";

    $firstname1 = "STUDENT";
    $lastname1 = "PRIVILEGE";
    $username1 = "student";
    $password1 = md5("student123");
    $is_reset1 = "false";
    $is_admin1 = "false";

    $firstname2 = "SAMPLE 1";
    $lastname2 = "SAMPLE 1";
    $username2 = "sample";
    $password2 = md5("sample123");
    $is_reset2 = "true";
    $is_admin2 = "false";

    $users_reset1 = $db->prepare("INSERT INTO useraccounts (firstname, lastname, username, password, is_reset, is_admin) VALUES (?, ?, ?, ?, ?, ?)");
    $users_reset1->bind_param("ssssss", $firstname0, $lastname0, $username0, $password0, $is_reset0, $is_admin0);
    $users_reset1->execute();
    $users_reset1->close();

    $users_reset1 = $db->prepare("INSERT INTO useraccounts (firstname, lastname, username, password, is_reset, is_admin) VALUES (?, ?, ?, ?, ?, ?)");
    $users_reset1->bind_param("ssssss", $firstname1, $lastname1, $username1, $password1, $is_reset1, $is_admin1);
    $users_reset1->execute();
    $users_reset1->close();

    $users_reset1 = $db->prepare("INSERT INTO useraccounts (firstname, lastname, username, password, is_reset, is_admin) VALUES (?, ?, ?, ?, ?, ?)");
    $users_reset1->bind_param("ssssss", $firstname2, $lastname2, $username2, $password2, $is_reset2, $is_admin2);
    $users_reset1->execute();
    $users_reset1->close();
    
    header("location: ../index.php");
    session_destroy();
    ob_end_flush();
    exit();
?>