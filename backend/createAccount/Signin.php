<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "superhr";

$msg = '';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['login'])){
    $uname = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    if ($uname != "" && $password != ""){
        $sql_query = "select * from users where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        if($row){
            $_SESSION['uname'] = $uname;
            echo json_encode($row);
        }else{
            echo 0;
        }
    }
}
?>
