<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "superhr";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_POST['id'];

$sql = "SELECT * FROM users 
LEFT JOIN addresses ON users.id = addresses.user_id
LEFT JOIN positions ON users.id = positions.user_id
LEFT JOIN contacts ON users.id = contacts.user_id
LEFT JOIN education ON users.id = education.user_id
LEFT JOIN documents ON users.id = documents.user_id
LEFT JOIN salaries ON users.id = salaries.user_id
LEFT JOIN candidate_followup ON users.id = candidate_followup.user_id
    WHERE users.id= ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo json_encode($row);
} else {
    echo "0 results";
}
