<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "superhr";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id']; 
$sql = "SELECT * from TestAssessmentCriteria WHERE 1 = $id;";

$result = $conn->query($sql);

$data = array();
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $data[] = $row;
  }
}

header('Content-Type: application/json');
echo json_encode($data); 
$conn->close();
?>
