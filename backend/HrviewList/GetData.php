<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'superhr';

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$data = json_decode(file_get_contents("php://input"));

if (isset($data->sql)) {
    $result = $conn->query($data->sql);

    if ($result === TRUE) {
        http_response_code(200);
        echo json_encode(array("message" => "Data fetched successfully."));
    } else {
        http_response_code(400);
        echo json_encode(array("message" => "Error executing query."));
    }
} else {
    http_response_code(400);
    echo json_encode(array("message" => "Incomplete data."));
}
?>
