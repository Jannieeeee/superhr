<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'superhr';

// create database connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Get data from POST
$pid = $_POST['pid'];
$id = $_POST['id'];
$value = $_POST['value'];
$column = $_POST['column'];


$id = $conn->real_escape_string($id);
$value = $conn->real_escape_string($value);

$sql = "UPDATE CreatePosition SET $column='$value' WHERE PositionID = $pid";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
