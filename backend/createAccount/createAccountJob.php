<?php
// Create a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "superhr";
$sta = "new";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();

// Get the username and password from the session
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$role = 'Job seeker';

// Insert data into users table
$stmt = $conn->prepare("INSERT INTO users (username, password, full_name_th, full_name_eng, id_passport, gender, nationality, date_of_birth, religion, email, phone_number, role, area, areafrom, areato) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("sssssssssssssss",
    $username,
    $password,
    $_POST["fullnameTH"],
    $_POST["fullnameENG"],
    $_POST["id"],
    $_POST["gender"],
    $_POST["nationality"],
    $_POST["birthday"],
    $_POST["religion"],
    $_POST["email"],
    $_POST["phone"],
    $role,
    $_POST["area"],
    $_POST["areafrom"],
    $_POST["areato"]
);

$stmt->execute();
$last_id = $conn->insert_id; // Get last insert ID for foreign key relations

// Insert data into addresses table
$stmt = $conn->prepare("INSERT INTO addresses (user_id, house_registration_address, current_address) VALUES (?,?,?)");
$stmt->bind_param("iss", $last_id, $_POST["house"], $_POST["add"]);
$stmt->execute();

// Insert data into positions table
$stmt = $conn->prepare("INSERT INTO positions (user_id, position_1, position_2, from_date, to_date, reason) VALUES (?,?,?,?,?,?)");
$stmt->bind_param("isssss", $last_id, $_POST["pos1"], $_POST["pos2"], $_POST["from"], $_POST["to"], $_POST["reason"]);
$stmt->execute();

// Insert data into contacts table
$stmt = $conn->prepare("INSERT INTO contacts (user_id, contact_person, contact_phone_number) VALUES (?,?,?)");
$stmt->bind_param("iss", $last_id, $_POST["cont"], $_POST["phonecont"]);
$stmt->execute();

// Insert data into education table
$stmt = $conn->prepare("INSERT INTO education (user_id, education_level, university, faculty, year, gpa) VALUES (?,?,?,?,?,?)");
$stmt->bind_param("isssis", $last_id, $_POST["elevel"], $_POST["inputuni"], $_POST["inputfuc"], $_POST["year"], $_POST["inputgpa"]);
$stmt->execute();

// Insert data into documents table
$stmt = $conn->prepare("INSERT INTO documents (user_id, resume_data, certi_data, hr_data, idcard_data, photo_data) VALUES (?,?,?,?,?,?)");
$stmt->bind_param("isssss", $last_id, $_POST["resumeData"], $_POST["certiData"], $_POST["hrData"], $_POST["idcardData"], $_POST["photoData"]);
$stmt->execute();

// Insert data into salaries table
$stmt = $conn->prepare("INSERT INTO salaries (user_id, salary) VALUES (?,?)");
$stmt->bind_param("is", $last_id, $_POST["salary"]);
$stmt->execute();

// Insert data into candidate_followup table
$stmt = $conn->prepare("INSERT INTO candidate_followup (user_id, status, followup_date, notes) VALUES (?, ?, ?, ?)");
$stmt->bind_param("isss", $last_id, $sta, $_POST["followupDate"], $_POST["notes"]);
$stmt->execute();

// Close the statement and the database connection
$stmt->close();
$conn->close();
?>
