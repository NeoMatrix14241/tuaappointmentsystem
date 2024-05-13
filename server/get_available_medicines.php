<?php

require_once "db.php";

// Fetch only the medicine names from the database
$sql = "SELECT item_name FROM medicine_records";
$result = $db->query($sql);

// Check if there are rows returned
if ($result->num_rows > 0) {
    $medicines = array();
    // Fetch associative array of the result rows
    while ($row = $result->fetch_assoc()) {
        $medicines[] = $row['item_name'];
    }
    // Output the data as JSON
    echo json_encode($medicines);
}

// Close the database connection
$db->close() or die();


?>
