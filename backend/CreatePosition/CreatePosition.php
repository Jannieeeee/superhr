<?php
    // Create a database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "superhr";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get the POST data
    $postData = json_decode($_POST['data'], true);

    // Insert data into the CreatePosition table
    $stmt = $conn->prepare("INSERT INTO CreatePosition (PositionName, WorkType, Location, Station, Enable, TestRequire, TestPeriod, TestQuestion, StartDate, EndDate) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssiiisss", $postData['position']['PositionName'], $postData['position']['WorkType'], $postData['position']['Location'], $postData['position']['Station'], $postData['position']['Enable'], $postData['position']['TestRequire'], $postData['position']['TestPeriod'], $postData['position']['TestQuestion'], $postData['position']['StartDate'], $postData['position']['EndDate']);
    $stmt->execute();
    $positionID = $stmt->insert_id; // Get the ID of the newly inserted row

    // Insert data into the NearTransport table
    foreach ($postData['nearTransport'] as $transport) {
        $stmt = $conn->prepare("INSERT INTO NearTransport (PositionID, TransportType, Checked) VALUES (?, ?, ?)");
        $stmt->bind_param("isi", $positionID, $transport['TransportType'], $transport['checked']);
        $stmt->execute();
    }

    // Insert data into the TestAssessmentCriteria table
    foreach ($postData['testAssessmentCriteria'] as $criteria) {
        $stmt = $conn->prepare("INSERT INTO TestAssessmentCriteria (PositionID, Criteria) VALUES (?, ?)");
        $stmt->bind_param("is", $positionID, $criteria['Criteria']);
        $stmt->execute();
    }

    // Insert data into the InterviewAssessmentCriteria table
    foreach ($postData['interviewAssessmentCriteria'] as $criteria) {
        $stmt = $conn->prepare("INSERT INTO InterviewAssessmentCriteria (PositionID, Criteria) VALUES (?, ?)");
        $stmt->bind_param("is", $positionID, $criteria['Criteria']);
        $stmt->execute();
    }

    $stmt->close();
    $conn->close();

    // Send success status
    header('Content-Type: application/json');
    echo json_encode(array('status' => true));
?>
