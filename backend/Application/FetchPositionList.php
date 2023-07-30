<?php
    // Set Content-Type header to application/json
    header('Content-Type: application/json');

    // Database configuration
    $db_host = 'localhost';
    $db_user = 'root';
    $db_password = '';
    $db_name = 'superhr';

    // Create connection
    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    // Define SQL query
    $sql = "SELECT PositionID, PositionName FROM CreatePosition";

    // Execute the query
    $result = $conn->query($sql);

    $positions = array();

    // Fetch the rows
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $positions[] = $row;
        }
    }

    // Output data as JSON
    echo json_encode($positions);

    // Close connection
    $conn->close();
?>
