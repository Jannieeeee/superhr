<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'superhr';

// Create connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
  die(json_encode(['error' => 'Connection failed: ' . $conn->connect_error]));
}

// Receive id from AJAX GET
$id = $_GET['id'];

// Fetch data from the table
$sql = "SELECT * FROM ScheduleInterview WHERE followup_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Output data of each row
    $rows = [];
    while($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
    echo json_encode($rows);
} else {
    echo json_encode(['error' => 'No results']);
}
$conn->close();
?>
