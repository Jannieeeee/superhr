<?php
ini_set('memory_limit', '256M');

$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'superhr';

$userid = $_POST['userid'];

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// check if testjob table has any data
$result = $conn->query("SELECT COUNT(*) AS cnt FROM testjob");
$row = $result->fetch_assoc();
$count = $row['cnt'];

if($count > 0) {
    // if testjob table has data, perform join
    $sql = "SELECT * FROM candidate_detail 
            LEFT JOIN followup_test_questions ft ON ft.followup_id = id 
            LEFT JOIN testjob tj ON tj.followup_id = id
            WHERE user_id = ? AND status != 'cancel';";
} else {
    // if testjob table has no data, don't perform join
    $sql = "SELECT * FROM candidate_detail 
            LEFT JOIN followup_test_questions ft ON ft.followup_id = id 
            WHERE user_id = ? AND status != 'cancel';";
}

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $userid); 
$stmt->execute();
$result = $stmt->get_result();

$data = array();
while($row = $result->fetch_assoc()) {
    $data[] = $row; 
}

$result->free(); // free up memory

echo json_encode($data);

$stmt->close(); 
$conn->close();


?>

