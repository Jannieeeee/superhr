<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'superhr';

// create database connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Get the PositionID from the query parameters
$positionID = intval($_GET['PositionID']);

// Fetch data from CreatePosition
$sql = "SELECT * FROM CreatePosition WHERE PositionID = $positionID";
$result = $conn->query($sql);

$data = [];
if ($result->num_rows > 0) {
    $data['position'] = $result->fetch_assoc();
}

// Fetch data from NearTransport
$sql = "SELECT * FROM NearTransport WHERE PositionID = $positionID";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data['nearTransport'][] = [
            'TransportType' => $row['TransportType'],
            'checked' => $row['Checked']
        ];
    }
}

// Fetch data from TestAssessmentCriteria
$sql = "SELECT * FROM TestAssessmentCriteria WHERE PositionID = $positionID";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data['testAssessmentCriteria'][] = [
            'CriteriaID' => $row['CriteriaID'],
            'PositionID' => $row['PositionID'],
            'Criteria' => $row['Criteria']
        ];
    }
}

// Fetch data from InterviewAssessmentCriteria
$sql = "SELECT * FROM InterviewAssessmentCriteria WHERE PositionID = $positionID";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data['interviewAssessmentCriteria'][] = [
            'CriteriaID' => $row['CriteriaID'],
            'PositionID' => $row['PositionID'],
            'Criteria' => $row['Criteria']
        ];
    }
}

// Return data as JSON
header('Content-Type: application/json');
echo json_encode($data);
?>
