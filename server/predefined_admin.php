<?php
    include "server.php";

    $reset = $db->prepare("DELETE FROM useraccounts;");
    $reset->execute();
    $reset->close();

    $reset = $db->prepare("DELETE FROM useraccounts_healthhistory;");
    $reset->execute();
    $reset->close();

    $reset = $db->prepare("DELETE FROM useraccounts_physicalexams;");
    $reset->execute();
    $reset->close();

    $reset = $db->prepare("DELETE FROM useraccounts_profile;");
    $reset->execute();
    $reset->close();

    $reset_ai = $db->prepare("ALTER TABLE useraccounts AUTO_INCREMENT = 1");
    $reset_ai->execute();
    $reset_ai->close();

    $reset_ai = $db->prepare("ALTER TABLE useraccounts_healthhistory AUTO_INCREMENT = 1");
    $reset_ai->execute();
    $reset_ai->close();

    $reset_ai = $db->prepare("ALTER TABLE useraccounts_physicalexams AUTO_INCREMENT = 1");
    $reset_ai->execute();
    $reset_ai->close();

    $reset_ai = $db->prepare("ALTER TABLE useraccounts_profile AUTO_INCREMENT = 1");
    $reset_ai->execute();
    $reset_ai->close();

    
    $firstname0 = "ADMIN";
    $lastname0 = "PRIVILEGE";
    $username0 = "admin";
    $password0 = md5("admin123");
    $is_reset0 = "notapplicable";
    $is_admin0 = "true";

    $student_id1 = 2024300881;
    $firstname1 = "STUDENT";
    $lastname1 = "PRIVILEGE";
    $username1 = "student";
    $password1 = md5("student123");
    $is_reset1 = "false";
    $is_admin1 = "false";

    $student_id2 = 2024300882;
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

    $users_reset1 = $db->prepare("INSERT INTO useraccounts (student_id, firstname, lastname, username, password, is_reset, is_admin) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $users_reset1->bind_param("issssss", $student_id1, $firstname1, $lastname1, $username1, $password1, $is_reset1, $is_admin1);
    $users_reset1->execute();
    $users_reset1->close();

    $users_reset1 = $db->prepare("INSERT INTO useraccounts (student_id, firstname, lastname, username, password, is_reset, is_admin) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $users_reset1->bind_param("issssss", $student_id2, $firstname2, $lastname2, $username2, $password2, $is_reset2, $is_admin2);
    $users_reset1->execute();
    $users_reset1->close();
    
    header("location: ../index.php");
    session_destroy();
    ob_end_flush();
    exit();
?>