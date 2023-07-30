<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'superhr';

$userid = $_POST['userid']; // get userid from AJAX post

// create database connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

$sql = "SELECT * FROM candidate_detail WHERE user_id = ? AND  status != 'cancel';";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $userid); 
$stmt->execute();
$result = $stmt->get_result();

$data = array();

while($row = $result->fetch_assoc()) {
    $data[] = $row; // add the row to the data array
}

echo json_encode($data); // echo the JSON encoded data array
?>
