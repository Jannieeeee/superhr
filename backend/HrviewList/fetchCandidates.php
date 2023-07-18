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
$fullNameTh = $_POST['full_name_th'] ?? null;
$fullNameEn = $_POST['full_name_en'] ?? null;
$status = $_POST['status'] ?? null;

$sql = "SELECT * FROM users 
    INNER JOIN positions ON users.id = positions.user_id 
    INNER JOIN candidate_followup ON users.id = candidate_followup.user_id
    WHERE 1=1";
$params = [];
$types = '';
$debugParams = [];

if (!empty($positions)) {
    $placeholders = implode(',', array_fill(0, count($positions), '?'));
    $sql .= " AND (positions.position_1 IN ($placeholders) OR positions.position_2 IN ($placeholders))";
    $params = array_merge($params, $positions, $positions);
    $types .= str_repeat('s', count($positions)*2);  // 's' is for string parameters
    $debugParams = array_merge($debugParams, $positions, $positions);
}

if ($fullNameTh !== null) {
    $sql .= " AND users.full_name_th LIKE ?";
    $params[] = '%' . $fullNameTh . '%';
    $types .= 's';
    $debugParams[] = '%' . $fullNameTh . '%';
}

if ($fullNameEn !== null) {
    $sql .= " OR users.full_name_eng LIKE ?";
    $params[] = '%' . $fullNameEn . '%';
    $types .= 's';
    $debugParams[] = '%' . $fullNameEn . '%';
}

if ($status !== null) {
    $sql .= " AND candidate_followup.status LIKE ?";
    $params[] = '%' . $status . '%';
    $types .= 's';
    $debugParams[] = '%' . $status . '%';
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

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '
        <div class="userlist " data-id="' . $row['user_id'] . '" style="cursor: pointer;">
            <div class="mb-2 shadow-lg" >
                    <div class="p-1 px-2 text-white text-end fw-bold " style=" background: #CB0021; border-radius: 10px 10px 0 0;">'
                        . $row['status'] .
                    '</div>
                    <div class="row mt-1">
                        <div class="col-4 d-flex justify-content-center">
                            <div class="">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" width="50" height="50" class="rounded-circle">
                            </div>
                        </div>
                        <div class="col-8">
                            <p class="">' . $row['full_name_eng'] . '</p>
                            <p class="">' . $row['position_1'] . '</p>
                        </div>
                    </div>
            </div>
        </div>
            ';
    }
} else {
    echo "0 results";
}
