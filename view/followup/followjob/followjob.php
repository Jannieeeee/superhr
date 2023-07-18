<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FollowUp</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="followjop.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

  <?php
  // Start session
  session_start();
  // Check if the session variable exists
  if (isset($_SESSION['user_data'])) {
    $user_data = $_SESSION['user_data'];
  } else {
    // If session data is not available, handle accordingly
    $user_data = "Default Data";
    $dateOfBirth = $user_data['date_of_birth'];
    $today = date("Y-m-d");
    $diff = date_diff(date_create($dateOfBirth), date_create($today));
    $age = $diff->format('%y');
  }
  ?>

</head>

<body>
<div>
<?php
    require_once '../../../Component/Navbar.php';
    ?>

  <div class="container emp-profile">
    <div class="row mb-5">
      <div class="col-md-2">
        <div class="profile-img">
          <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" alt="" />
        </div>
      </div>
      <div class="col-md-6">
        <div class="profile-head">
          <h4 class="mb-4">
          <?php echo $user_data['full_name_th']; ?>
          </h4>
          <h6 class="mb-4"><img src="C:Users\malli\Documents\internship\doc\envelope (1).png" width="24" height="24" alt=""><?php echo $user_data['email']; ?></h6>
          <h6 class="mb-4"><img src="C:\Users\malli\Documents\internship\doc\phone-call.png" width="24" height="24" alt=""> xxxxxxxxx</h6>
          <h6 class="mb-4"><img src="C:\Users\malli\Documents\internship\doc\document-signed.png" alt="" width="24" height="24"><a href="#" class="text-decoration-none">document</a> </h6>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="row mb-3">
          <div class="col-sm-5">
            <p class="text-muted mb-0">Process Status</p>
          </div>
          <div class="col-sm-5">
            <p class=" mb-0"><?php echo $user_data['status']; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>




  <div class="container-data">
    <h4 class="mb-3">Personal Information</h4>
    <div class="row">
      <div class="col-md-6">
        <div class="row mb-3">
          <div class="col-sm-4">
            <p class="text-muted mb-0">Cityzen ID or Passport</p>
          </div>
          <div class="col-sm-7">
            <p class=" mb-0"><?php echo $user_data['id_passport']; ?></p>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-sm-4">
            <p class="text-muted mb-0">Gender</p>
          </div>
          <div class="col-sm-7">
            <p class=" mb-0"><?php echo $user_data['gender']; ?></p>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-sm-4">
            <p class="text-muted mb-0">Age</p>
          </div>
          <div class="col-sm-7">
            <p class=" mb-0"><?php echo $user_data['date_of_birth']; ?></p>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-sm-4">
            <p class="text-muted mb-0">Religion</p>
          </div>
          <div class="col-sm-7">
            <p class=" mb-0"><?php echo $user_data['religion']; ?></p>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-sm-4">
            <p class="text-muted mb-0">Nationality</p>
          </div>
          <div class="col-sm-7">
            <p class=" mb-0"><?php echo $user_data['nationality']; ?></p>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-sm-4">
            <p class="text-muted mb-0">Position</p>
          </div>
          <div class="col-sm-7">
            <p class=" mb-0"><?php echo $user_data['position_1']; ?></p>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-sm-4">
            <p class="text-muted mb-0">Expected salary</p>
          </div>
          <div class="col-sm-7">
            <p class=" mb-0"><?php echo $user_data['salary']; ?></p>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-sm-4">
            <p class="text-muted mb-0">Comfort area</p>
          </div>
          <div class="col-sm-7">
            <p class=" mb-0"><?php echo $user_data['area']; ?></p>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-sm-4">
            <p class="text-muted mb-0">Current address</p>
          </div>
          <div class="col-sm-7">
            <p class=" mb-0"><?php echo $user_data['areafrom']; ?></p>
          </div>
        </div>
      </div>

      <!--2-->
      <div class="col-md-6">
        <div class="row mb-3">
          <div class="col-sm-4">
            <p class="text-muted mb-0">Education level</p>
          </div>
          <div class="col-sm-7">
            <p class=" mb-0"><?php echo $user_data['education_level']; ?></p>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-sm-4">
            <p class="text-muted mb-0">University</p>
          </div>
          <div class="col-sm-7">
            <p class=" mb-0"><?php echo $user_data['university']; ?></p>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-sm-4">
            <p class="text-muted mb-0">Faculty</p>
          </div>
          <div class="col-sm-7">
            <p class=" mb-0"><?php echo $user_data['faculty']; ?></p>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-sm-4">
            <p class="text-muted mb-0">Major</p>
          </div>
          <div class="col-sm-7">
            <p class=" mb-0"><?php echo $user_data['faculty']; ?></p>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-sm-4">
            <p class="text-muted mb-0">GPA</p>
          </div>
          <div class="col-sm-7">
            <p class=" mb-0"><?php echo $user_data['gpa']; ?></p>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-sm-4">
            <p class="text-muted mb-0">Test</p>
          </div>
          <div class="col-sm-7">
            <p class=" mb-0">-</p>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-sm-4">
            <p class="text-muted mb-0">Interview date</p>
          </div>
          <div class="col-sm-7">
            <p class=" mb-0">-</p>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-sm-4">
            <p class="text-muted mb-0">Result</p>
          </div>
          <div class="col-sm-7">
            <p class=" mb-0">-</p>
          </div>
        </div>
      </div>
    </div>

  </div>

















</body>

</html>