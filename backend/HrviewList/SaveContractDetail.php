<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'superhr';

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Receive data from AJAX POST
$ContractPeriod = $_POST['ContractPeriod'];
$WorkType = $_POST['WorkType'];
$ContractType = $_POST['ContractType'];
$WorkPlace = $_POST['WorkPlace'];
$TransferAccount = $_POST['TransferAccount'];
$Salary = $_POST['Salary'];
$StartDate = $_POST['StartDate'];
$EndDate = $_POST['EndDate'];
$followup_id = $_POST['followup_id'];

$sql = "INSERT INTO contracts (ContractPeriod, WorkType, ContractType, WorkPlace, TransferAccount, Salary, StartDate, EndDate, followup_id)
VALUES ('$ContractPeriod', '$WorkType', '$ContractType', '$WorkPlace', '$TransferAccount', '$Salary', '$StartDate', '$EndDate', '$followup_id')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
