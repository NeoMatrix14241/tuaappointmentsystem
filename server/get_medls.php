<?php
require_once "db.php";
// GET DATA FROM HN-MedLS.php
// Fetch data from the database
$sql = "SELECT * FROM medical_logsheet";
$result = $db->query($sql);

// Check if there are rows returned
if ($result->num_rows > 0) {
    $data = array();
    // Fetch associative array of the result rows
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    // Output the data as JSON
    echo json_encode($data);
}

// Close the database connection
$db->close();

?>