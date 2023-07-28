<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "superhr";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$locationLink = $_POST['locationLink'];
$interdate = $_POST['interdate'];
$intersttime = $_POST['intersttime'];
$interentime = $_POST['interentime'];
$UserID = $_POST['cid'];
 

$stmt = $conn->prepare("CALL InsertScheduleInterview(?, ?, ?, ?, ?)");
$stmt->bind_param("ssssi", $LocationLink, $InterviewDate, $StartTime, $EndTime, $UserID);

if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();

?>