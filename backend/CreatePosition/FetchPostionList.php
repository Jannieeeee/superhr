<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'superhr';

// create database connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);
$sql = "SELECT * FROM CreatePosition";
$result = $conn->query($sql);


?>