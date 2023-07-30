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

$sql = "SELECT * FROM candidate_detail LEFT JOIN users ON user_id = users.id WHERE 1=1"; 
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
                            <p class="">'.$row['full_name_th'].' - ' . $row['full_name_eng'] . '</p>
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
?>
