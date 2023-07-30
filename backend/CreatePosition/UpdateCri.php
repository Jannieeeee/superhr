<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "superhr";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the necessary POST variables are set
if (isset($_POST['command']) && isset($_POST['criteria_id']) && isset($_POST['position_id']) && isset($_POST['criteria'])) {
    $command = $_POST['command'];
    $criteria_id = $_POST['criteria_id'];
    $position_id = $_POST['position_id'];
    $criteria = $_POST['criteria'];

    // Function to insert a new record
    function insertRecord($conn, $table, $position_id, $criteria)
    {
        $sql = "INSERT INTO $table (PositionID, Criteria) VALUES ('$position_id', '$criteria')";
        if ($conn->query($sql) === TRUE) {
            echo "Record inserted successfully!";
        } else {
            echo "Error inserting record: " . $conn->error;
        }
    }

    // Function to update an existing record
    function updateRecord($conn, $table, $criteria_id, $position_id, $criteria)
    {
        $sql = "UPDATE $table SET PositionID='$position_id', Criteria='$criteria' WHERE CriteriaID='$criteria_id'";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully!";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }

    // Function to delete a record
    function deleteRecord($conn, $table, $criteria_id)
    {
        $sql = "DELETE FROM $table WHERE CriteriaID='$criteria_id'";
        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully!";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    }

    // Check the command and perform corresponding action
    if ($command === 'insert_interview') {
        insertRecord($conn, "InterviewAssessmentCriteria", $position_id, $criteria);
    } elseif ($command === 'update_interview') {
        updateRecord($conn, "InterviewAssessmentCriteria", $criteria_id, $position_id, $criteria);
    } elseif ($command === 'delete_interview') {
        deleteRecord($conn, "InterviewAssessmentCriteria", $criteria_id);
    } elseif ($command === 'insert_test') {
        insertRecord($conn, "TestAssessmentCriteria", $position_id, $criteria);
    } elseif ($command === 'update_test') {
        updateRecord($conn, "TestAssessmentCriteria", $criteria_id, $position_id, $criteria);
    } elseif ($command === 'delete_test') {
        deleteRecord($conn, "TestAssessmentCriteria", $criteria_id);
    } else {
        echo "Invalid command!";
    }
} else {
    echo "Required parameters not received!";
}

$conn->close();
?>
