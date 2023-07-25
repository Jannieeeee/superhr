<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'superhr';

// Create database connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get posted data
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);

// Get PositionID and data from the request
$positionID = $request->pid;
$data = $request->data;

// Begin transaction
$conn->begin_transaction();

// Delete existing criteria for the position
$query = "DELETE FROM TestAssessmentCriteria WHERE PositionID = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param('i', $positionID);
$stmt->execute();

// Insert new criteria
$query = "INSERT INTO TestAssessmentCriteria (PositionID, Criteria) VALUES (?, ?)";
$stmt = $conn->prepare($query);
$stmt->bind_param('is', $positionID, $criteria);

foreach($data as $criteria) {
    if (!$stmt->execute()) {
        // If an error occurs, roll back the transaction
        $conn->rollback();
        echo "Error: " . $stmt->error;
        exit();
    }
}

// Commit transaction
$conn->commit();

echo "TestAssessmentCriteria updated successfully";

?>
