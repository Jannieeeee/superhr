<?php
require('dbconnect.php');

$idCardNumber = $_REQUEST['idCardNumber'];
$prefix =  $_REQUEST['prefix'];
$fullnameTH = $_REQUEST['fullnameTH'];
$fullnameENG = $_REQUEST['fullnameENG'];
$gender = $_REQUEST['gender'];
$DOB = $_REQUEST['DOB'];


$sql1 = "INSERT INTO jobseeker SET prefix = '$prefix', fullnameTH = '$fullnameTH',fullnameENG = '$fullnameENG', 
idCardNumber = '$idCardNumber', DOB = '$DOB', gender = '$gender'";

$objQuery1 = mysqli_query($con, $sql1);

//$LastID = mysqli_insert_id($con);

//$sql2 = "INSERT INTO education SET EmployeeID = '$LastID', Degree = '$Degree', Academy = '$Academy', Faculty = '$Faculty',Department = '$Department'";

//$objQuery2 = mysqli_query($con, $sql2); 

//$sql3 = "INSERT INTO disease SET EmployeeID = '$LastID', DiseaseName = '$DiseaseName',NoteDisease = '$NoteDisease'";

//$objQuery3 = mysqli_query($con, $sql3); 


if ($objQuery1/*&&$objQuery2&&$objQuery3*/) {
    echo 'New record Inserted successfully';
} else {
    echo 'Error : Input';
}

mysqli_close($con);

?>

<?php
header("Location: AddEmployee.php");
?>