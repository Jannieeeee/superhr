<?php
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

// Get the raw JSON data from the request body
$request_body = file_get_contents('php://input');
$data = json_decode($request_body, true);

// Get data from JSON data
$ansfile1 = $data['ansfile1'] ?? "-";
$ansfile2 = $data['ansfile2'] ?? "-";
$link1 = $data['link1'] ?? "-";
$link2 = $data['link2'] ?? "-";
$followup_id = $data['followup_id'] ?? 0;

// Prepare the SQL statement
$stmt = $conn->prepare("INSERT INTO testjob (ansfile1, ansfile2, link1, link2, followup_id) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("ssssi", $ansfile1, $ansfile2, $link1, $link2, $followup_id);

if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
