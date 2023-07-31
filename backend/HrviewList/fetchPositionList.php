<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "superhr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Query for id and PositionName values from 'CreatePosition' table
$sql = "SELECT PositionID, PositionName FROM CreatePosition";

$result = $conn->query($sql);

$positions = []; 

if ($result->num_rows > 0) {
  // Output data of each row
  while($row = $result->fetch_assoc()) {
    $positions[] = array(
        "id" => $row['PositionID'], 
        "name" => $row['PositionName']
    );
  }
} 

// Set the header information for the response
header('Content-Type: application/json');

// Convert the positions array into a JSON string and echo it
echo json_encode($positions);

$conn->close();
?>
