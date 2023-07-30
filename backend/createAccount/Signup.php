<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'superhr';

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $json = file_get_contents('php://input');
    $postData = json_decode($json, true);

    $username = $postData['username'];
    $password = $postData['password'];
    $thfullname = $postData['thfullname'];
    $enfullname = $postData['enfullname'];
    $phonenumber = $postData['phonenumber'];
    $email = $postData['email'];
    $gender = $postData['genderSelection'];
    $dob = $postData['dob'];
    $ctID = $postData['ctID'];
    $psID = $postData['psID'];
    $nationality = $postData['nationalSelection'];
    $religion = $postData['reliSelection'];
    $photo = $postData['photoUpload'];
    $address = $postData['address'];

    $sql = "INSERT INTO users (username, password, full_name_th, full_name_eng, phone_number, email, gender, date_of_birth, id_passport, id_citizen, nationality, religion, photo, address) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    if($stmt = $conn->prepare($sql)){
        $stmt->bind_param("ssssssssdsssss", $username, $password, $thfullname, $enfullname, $phonenumber, $email, $gender, $dob, $psID, $ctID, $nationality, $religion, $photo, $address);
        if($stmt->execute()){
            echo "Records inserted successfully.";
        } else{
            echo "ERROR: Could not execute query: $sql. " . $conn->error;
        }
    } else {
        echo "ERROR: Could not prepare query: $sql. " . $conn->error;
    }
    $stmt->close();
}

$conn->close();
?>
