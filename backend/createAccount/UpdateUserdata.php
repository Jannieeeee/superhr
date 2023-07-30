<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'superhr';

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$postData = json_decode(file_get_contents('php://input'), true);

$id = $postData['id'];
$full_name_th = $postData['full_name_th'];
$full_name_eng = $postData['full_name_eng'];
$gender = $postData['gender'];
$date_of_birth = $postData['date_of_birth'];
$id_passport = $postData['id_passport'];
$nationality = $postData['nationality'];
$religion = $postData['religion'];
$address = $postData['address'];

$sql = "UPDATE users SET full_name_th='$full_name_th', full_name_eng='$full_name_eng', gender='$gender', date_of_birth='$date_of_birth', id_passport='$id_passport', nationality='$nationality', religion='$religion', address='$address' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
