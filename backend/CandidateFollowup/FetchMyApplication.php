<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'superhr';

$userid = $_POST['userid']; // get userid from AJAX post

// create database connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);
$sql = "SELECT * FROM users 
    JOIN positions ON users.id = positions.user_id 
    JOIN candidate_followup ON users.id = candidate_followup.user_id 
    WHERE users.id = ? AND candidate_followup.status != 'cancel';";


$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $userid); // bind userid to the query
$stmt->execute();
$result = $stmt->get_result();

$data = array();

while($row = $result->fetch_assoc()) {
    $data[] = $row; // add the row to the data array
}

echo json_encode($data); // echo the JSON encoded data array
?>
