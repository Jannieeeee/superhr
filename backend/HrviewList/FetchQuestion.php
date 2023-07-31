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
$sql = "SELECT * from testjob tj left join followup_test_questions ft on ft.followup_id = tj.followup_id WHERE tj.followup_id = $id;";

$result = $conn->query($sql);

$data = array();
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $data[] = $row;
  }
}

header('Content-Type: application/json');
echo json_encode($data); // We're encoding the $data variable instead of $positions

$conn->close();
?>
