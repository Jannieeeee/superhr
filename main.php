<?php
session_start();
$username = $_SESSION['username'];
include('dbconnect.php');

//$queryBusstation = "SELECT * FROM busstation ORDER BY BusStationID asc";
//$resultBusstation = mysqli_query($con, $queryBusstation);

if(strlen($_SESSION['username']==0)){
	header('location:logout.php');
}
else {
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Add Employee</title>

  <!-- Custom fonts for this template-->
  <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">


        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Employee</h1>
          </div>
          <!-- Content Row -->
        </div>

            
        <form action="insert.php" method="post" name="employeeinfo">    

              <div class="row">
                <div class="col-4 mb-3">IDCard</div>
                  <div class="col-8 mb-3"> <input type="text" class="form-control form-control-user" id="IDCard" name="idCardNumber" aria-describedby="emailHelp" required="true" placeholder="IDCard"></div>
                    
                </div>  

              <div class="row">
                <div class="col-4 mb-3">Title</div>
                  <style>
                    .list-col input{
                      margin-right: 15px;
                    }
                  </style>
                  <div class="col-8 mb-3">
                    <input type="radio" class="list-col" name="prefix" value="Mr.">Mr. &nbsp; &nbsp; &nbsp;
        			      <input type="radio" class="list-col" name="prefix" value="Mrs.">Mrs. &nbsp; &nbsp; &nbsp;
        			      <input type="radio" class="list-col" name="prefix" value="Ms.">Ms. &nbsp; &nbsp; &nbsp;
                  </div>
              </div>

              <div class="row">
                <div class="col-4 mb-3">Fullname TH</div>
                  <div class="col-8 mb-3"> <input type="text" class="form-control form-control-user" id="Firstname" name="fullnameTH" required="true" placeholder="fullnameTH"></div>
                    </div>  

              <div class="row">
                <div class="col-4 mb-3">Fullname ENG </div>
                  <div class="col-8 mb-3"> <input type="text" class="form-control form-control-user" id="Lastname" name="fullnameENG" required="true" placeholder="fullnameENG"></div>  
              </div>
        
              <div class="row">
                <div class="col-4 mb-3">Gender</div>
                  <style>
                    .list-col input{
                      margin-right: 15px;
                    }
                  </style>
                  <div class="col-8 mb-3">
                    <input type="radio" class="list-col" name="gender" value="M">Male &nbsp; &nbsp; &nbsp;
        			      <input type="radio" class="list-col" name="gender" value="F">Female &nbsp; &nbsp; &nbsp;
        			      <input type="radio" class="list-col" name="gender" value="O">Other &nbsp; &nbsp; &nbsp;
                  </div>
              </div>

              <div class="row">
                <div class="col-4 mb-3"><Datag>Date Of Birth</Datag> </div>
                  <div class="col-8 mb-3"> 
                    <input type="date" id="DOB" name="DOB" value="2018-07-22" min="1918-01-01" max="2050-12-31"aria-describedby="emailHelp" required="true"></div>
              </div>              



              <br>
              <div class="row" style="margin-top:4%">
                  <div class="col-4"></div>
                    <div class="col-4">
                      <input type="submit" name="submit"  value="Add Employee" class="btn btn-primary btn-user btn-block" onclick="myFunction()">
                    </div>
              </div>
      
        </form>

        
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  
  <!-- Bootstrap core JavaScript-->
  <script src="../../vendor/jquery/jquery.min.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../../js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../../vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../../js/demo/chart-area-demo.js"></script>
  <script src="../../js/demo/chart-pie-demo.js"></script>

</body>

</html>

</html>

<?php
}
?>