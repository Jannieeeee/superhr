<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "superhr";
$conn = new mysqli($servername, $username, $password, $dbname);

$searchTerm = $_POST['term'];
$type = $_POST['type'];

$enable = $type === 'Opening' ? 1 : 0;

$sql = "SELECT * FROM CreatePosition WHERE PositionName LIKE '%$searchTerm%' AND Enable = $enable ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo '<div class="list-group w-100">';
  while ($row = $result->fetch_assoc()) {
    $bg = $row['Enable'] ? 'bg-success' : 'bg-danger';
    echo '<a id="posid' . $row['PositionID'] . '" class="list-group-item list-group-item-action cs-p" onclick="selectJob(' . $row['PositionID'] . ')" >';
    echo '<div class="card">';
    echo '<div class="card-body">';
    echo '<h5 class="card-title">' . $row['PositionName'] . '</h5>';
    echo '<h6 class="card-subtitle mb-2 text-muted">loremd 1 person</h6>';
    echo '</div>';
    echo '<div class="card-footer text-end">';
    echo '<i class="bi bi-arrow-right"></i>';
    echo '</div>';
    echo '</div>';


    echo '</a>';
  }
  echo '</div>';
} else {
  echo "No positions found";
}
$conn->close();
