<?php
    // Receiving the ID here
    $id = isset($_POST['id']) ? intval($_POST['id']) : 0;

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "superhr";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * from ContractDetail WHERE followup_id = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo json_encode($row);
    } else {
        echo "0 results";
    }
?>
