<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "superhr";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $userId = $_POST['userId'];
    $status = $_POST['status'];

    $sql = "UPDATE candidate_followup SET status=? WHERE id=?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $status, $userId);

    if ($stmt->execute()) {
        echo "Status updated successfully";
    } else {
        echo "Error updating status: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
?>
