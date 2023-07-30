<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'superhr';

$userid = $_POST['userid']; // get userid from AJAX post
$status = $_POST['status']; // get new status from AJAX post
$cancel_reason = $_POST['cancel_reason']; // get cancel reason from AJAX post

// create database connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

$sql = "UPDATE candidate_followup SET status = ?, cancel_reason = ? WHERE id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssi", $status, $cancel_reason, $userid); // bind parameters to the query
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "Successfully updated the status and reason for cancellation";
} else {
    echo "Error updating record: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
