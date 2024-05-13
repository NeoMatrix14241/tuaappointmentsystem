<?php
require_once "db.php";
// SAVE DATA FROM HN-MedLS.php

if (isset($_POST['save_logsheet'])) {
    $log_time = $db->real_escape_string($_POST['time']);
    $log_collegeDept = $db->real_escape_string($_POST['collegeDept']);
    $log_name = $db->real_escape_string($_POST['name']);
    $log_chiefComplain = $db->real_escape_string($_POST['chiefComplain']);
    $log_medicineGiven = $db->real_escape_string($_POST['medicineGiven']);
    $log_quantity = $db->real_escape_string($_POST['quantity']);
    $log_nurseOnDuty = $db->real_escape_string($_POST['nurseOnDuty']);

    // Check if there is enough stock before inserting and updating
    $selectSql = "SELECT item_quantity FROM medicine_records WHERE item_name = ?";
    $selectStmt = $db->prepare($selectSql);
    if ($selectStmt) {
        $selectStmt->bind_param("s", $log_medicineGiven);
        $selectStmt->execute();
        $selectStmt->bind_result($currentQuantity);
        $selectStmt->fetch();
        $selectStmt->close() or die();

        // Check if there is enough stock before inserting
        if ($currentQuantity >= $log_quantity) {
            // Insert into medical_logsheet
            $stmt = $db->prepare("INSERT INTO medical_logsheet (time, college_dept, name, chief_complaint, given_meds, quantity, nurse_on_duty) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssis", $log_time, $log_collegeDept, $log_name, $log_chiefComplain, $log_medicineGiven, $log_quantity, $log_nurseOnDuty);
            $stmt->execute();
            $stmt->close() or die();

            // Update medicine_records
            $updateSql = "UPDATE medicine_records SET item_quantity = (item_quantity - $log_quantity) WHERE item_name = ?";
            $updateStmt = $db->prepare($updateSql);
            if ($updateStmt) {
                $updateStmt->bind_param("s", $log_medicineGiven);
                $updateStmt->execute();
                $updateStmt->close() or die();
            } else {
                echo "Error preparing update statement";
            }
        } else {
            // Insufficient quantity, show alert message and abort insert and update operations
            echo "<script>alert('Insufficient quantity of Medicine in inventory. Operation aborted.');</script>";
            echo "<script>setTimeout(function() { window.location.href = 'HN-MedLS.php'; }, 0);</script>";
            die();
        }
    } else {
        echo "Error preparing select statement";
    }

    header('Location: HN-MedLS.php');
}







/*
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Decode the JSON data received from the client-side JavaScript
    $data = json_decode(file_get_contents("php://input"), true);

    // Check if data is not empty
    if (!empty($data)) {
        foreach ($data as $row) {
            // Prepare your SQL statement
            $stmt = $db->prepare("INSERT INTO medical_logsheet (sheet_id, time, college_dept, name, chief_complaint, given_meds, quantity, nurse_on_duty) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

            // Check if the SQL statement is prepared successfully
            if ($stmt) {
                // Bind parameters and execute the statement
                $stmt->bind_param("ssssssss", $row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7]);
                $stmt->execute();

                // Check for errors during execution
                if ($stmt->errno) {
                    echo "Error: " . $stmt->error;
                }

                // Close the statement
                $stmt->close();
                
                // Deduct the quantity of the medicine from the medicine_records table
                $medicineName = $row[5]; // Assuming the medicine name is in the 6th column
                $quantity = $row[6]; // Assuming the quantity is in the 7th column
                $updateSql = "UPDATE medicine_records SET item_quantity = (item_quantity - $quantity) WHERE item_name = ?";
                $updateStmt = $db->prepare($updateSql);
                if ($updateStmt) {
                    $updateStmt->bind_param("s", $medicineName);
                    $updateStmt->execute();
                    $updateStmt->close();
                } else {
                    echo "Error preparing update statement";
                }
                
            } else {
                // Handle the case where the SQL statement preparation failed
                echo "Error preparing SQL statement";
            }
        }

        // Send a success response to the client-side JavaScript
        // header('location: HN-MedLS.php');
        echo "Data saved successfully";
    }
}
// Close the database connection
$db->close();
*/
?>