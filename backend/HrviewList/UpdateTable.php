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

if (isset($data->id) && isset($data->field) && isset($data->value) && isset($data->table)) {
    $stmt = $conn->prepare("UPDATE {$data->table} SET {$data->field}=? WHERE {$data->idname}=?");
    $stmt->bind_param("si", $data->value, $data->id);

    if ($stmt->execute() === TRUE) {
        http_response_code(200);
        echo json_encode(array("message" => "Record updated successfully."));
    } else {
        http_response_code(400);
        echo json_encode(array("message" => "Error updating record."));
    }

    $stmt->close();
} else {
    http_response_code(400);
    echo json_encode(array("message" => "Incomplete data."));
}
?>
