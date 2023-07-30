<?php
// Connection to your database
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'superhr';

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get JSON as a string
$json_str = file_get_contents('php://input');

// Get as an object
$json_obj = json_decode($json_str, true);

// Extract data from POST request
$userId = $json_obj['userId'];
$candidateFollowupData = $json_obj['candidateFollowupData'];
$addressesData = $json_obj['addressesData'];
$positionsData = $json_obj['positionsData'];
$contactsData = $json_obj['contactsData'];
$educationData = $json_obj['educationData'];
$documentsData = $json_obj['documentsData'];
$salariesData = $json_obj['salariesData'];

// Insert into candidate_followup table
$sql = "INSERT INTO candidate_followup (user_id, typeapp) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('is', $userId, $candidateFollowupData['typeapp']);
$stmt->execute();

$followupId = $conn->insert_id;  // get the last inserted id

// Insert into addresses table
$sql = "INSERT INTO addresses (house_registration_address, current_address, followup_id) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ssi', $addressesData['house_registration_address'], $addressesData['current_address'], $followupId);
$stmt->execute();

// Insert into positions table
$sql = "INSERT INTO positions (position_1, position_2, from_date, to_date, reason, followup_id) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('sssssi', $positionsData['position_1'], $positionsData['position_2'], $positionsData['from_date'], $positionsData['to_date'], $positionsData['reason'], $followupId);
$stmt->execute();

// Insert into contacts table
$sql = "INSERT INTO contacts (contact_person, contact_phone_number, followup_id) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ssi', $contactsData['contact_person'], $contactsData['contact_phone_number'], $followupId);
$stmt->execute();

// Insert into education table
$sql = "INSERT INTO education (university, faculty, major, year, gpa, followup_id) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('sssidi', $educationData['university'], $educationData['faculty'], $educationData['major'], $educationData['year'], $educationData['gpa'], $followupId);
$stmt->execute();

// Insert into documents table
$sql = "INSERT INTO documents (transcript, resume_data, house_data, idcard_data, photo_data, certi_data, other, followup_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('sssssssi', $documentsData['transcript'], $documentsData['resume_data'], $documentsData['house_data'], $documentsData['idcard_data'], $documentsData['photo_data'], $documentsData['certi_data'], $documentsData['other'], $followupId);
$stmt->execute();

// Insert into salaries table
$sql = "INSERT INTO salaries (salary, followup_id) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('di', $salariesData['salary'], $followupId);
$stmt->execute();

if($stmt->affected_rows > 0){
    $response = array('status' => 'success', 'message' => 'Data successfully inserted');
} else {
    $response = array('status' => 'error', 'message' => 'There was an error while inserting data');
}

// Close the statement and the connection
$stmt->close();
$conn->close();

// Output the status and message as a JSON response
header('Content-Type: application/json');
echo json_encode($response);

?>