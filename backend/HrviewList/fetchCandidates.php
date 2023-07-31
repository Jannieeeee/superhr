<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "superhr";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$positions = isset($_POST['positions']) ? $_POST['positions'] : [];
$statuses = isset($_POST['status']) ? $_POST['status'] : [];
$fullNameTh = $_POST['full_name_th'] ?? null;
$fullNameEn = $_POST['full_name_en'] ?? null;

$sql = "SELECT candidate_detail.*, users.*, candidate_detail.id as caid,
        interview_data.* 
        FROM candidate_detail 
        LEFT JOIN users ON user_id = users.id 
        LEFT JOIN (SELECT * FROM ScheduleInterview) AS interview_data ON candidate_detail.id = interview_data.followup_id 
        WHERE 1=1";

$params = [];
$types = '';
$debugParams = [];

if (!empty($positions)) {
    $placeholders = implode(',', array_fill(0, count($positions), '?'));
    $sql .= " AND (position_1 IN ($placeholders) OR position_2 IN ($placeholders))";
    $params = array_merge($params, $positions, $positions);
    $types .= str_repeat('s', count($positions)*2);  // 's' is for string parameters
    $debugParams = array_merge($debugParams, $positions, $positions);
}

if (!empty($statuses)) {
    $placeholders = implode(',', array_fill(0, count($statuses), '?'));
    $sql .= " AND status IN ($placeholders)";
    $params = array_merge($params, $statuses);
    $types .= str_repeat('s', count($statuses));
    $debugParams = array_merge($debugParams, $statuses);
}

if ($fullNameTh !== null) {
    $sql .= " AND (full_name_th LIKE ?";
    $params[] = '%' . $fullNameTh . '%';
    $types .= 's';
    $debugParams[] = '%' . $fullNameTh . '%';
}

if ($fullNameEn !== null) {
    $sql .= " OR full_name_eng LIKE ? )";
    $params[] = '%' . $fullNameEn . '%';
    $types .= 's';
    $debugParams[] = '%' . $fullNameEn . '%';
}

$debugSql = $sql;
foreach ($debugParams as $p) {
    $debugSql = preg_replace('/\?/', "'{$p}'", $debugSql, 1);
}

error_log($debugSql);  // Logs the SQL to the PHP error log

$stmt = $conn->prepare($sql);
$stmt->bind_param($types, ...$params);
$stmt->execute();
$result = $stmt->get_result();
$rows = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Check if the candidate has interview data
        $hasInterview = !empty($row['InterviewID']);

        // Remove the InterviewID field if the candidate does not have interview data
        if (!$hasInterview) {
            unset($row['InterviewID']);
        }

        // Include the candidate data in the response
        $rows[] = $row;
    }
}

// Returns the data as JSON
header('Content-Type: application/json');
echo json_encode($rows);
?>