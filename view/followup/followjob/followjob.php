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
  <script>
    var userData = JSON.parse(window.localStorage.getItem("user_data"));

    console.log(userData)
  </script>
</head>

<body>
  <div>
    <?php
    require_once '../../../Component/Navbar.php';
    ?>

    <div class="container emp-profile">

      <div class="row mb-3 p-2">
        <div class="col-3">
          <div class="profile-img">
            <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" alt="" />
          </div>
        </div>
        <div class="col-6">
          <div class="">
            <h4 class="mb-4">
              <?php echo $user_data['full_name_th']; ?>
            </h4>
            <div class="d-flex gap-2">
              <div class="mb-4"><img src="C:Users\malli\Documents\internship\doc\envelope (1).png" width="24" height="24" alt=""><?php echo $user_data['email']; ?></div>
              <div class="mb-4"><img src="C:\Users\malli\Documents\internship\doc\phone-call.png" width="24" height="24" alt=""> xxxxxxxxx</div>
              <div class="mb-4"><img src="C:\Users\malli\Documents\internship\doc\document-signed.png" alt="" width="24" height="24"><a href="#" class="text-decoration-none">document</a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<style>
  h6{
    font-weight: bold;
  }
</style>


    <div class="container-data">
      <h4 class="mb-3">Personal Information</h4>
      <div class="row">
        <div class="col-6">
          <h6>Username</h6>
          <p><?php echo $user_data['username']; ?></p>
          <h6>Gender</h6>
          <p><?php echo $user_data['gender']; ?></p>
          <h6>Birthdate</h6>
          <p><?php echo $user_data['date_of_birth']; ?></p>
          <h6>Age</h6>
          <p>
            <?php
            $dob = new DateTime($user_data['date_of_birth']);
            $now = new DateTime();
            $difference = $now->diff($dob);
            $age = $difference->y;
            echo $age;
            ?>
          </p>

        </div>
        <div class="col-6">
          <h6>Citizen-ID</h6>
          <p><?php echo $user_data['id_passport']; ?></p>
          <h6>Nationality</h6>
          <p><?php echo $user_data['nationality']; ?></p>
          <h6>Religion</h6>
          <p><?php echo $user_data['religion']; ?></p>
        </div>
      </div>

    </div>

















</body>

</html>