<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Account</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="account.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>

<body>

  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="img/logo.png" alt="" height="40px" width="272.85711669921875px" class="d-inline-block align-text-top" onclick="window.location.href='index.php'">
      </a>
    </div>
  </nav>


  <?php
  require('../../dbconnect.php');
  // Starting a session
  session_start();

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmpassword'];
    $tableName = $_POST['role'];

    if ($password == $confirmPassword) {
      // Storing the form data in session variables
      $_SESSION['username'] = $username;
      $_SESSION['password'] = $password;
      $_SESSION['confirmPassword'] = $confirmPassword;
      $_SESSION['role'] = $tableName;

      // Redirecting based on the role
      if ($tableName == "intern") {
        header('Location: ../Intern/intern.php');
      } elseif ($tableName == "jobseeker") {
        header('Location: ../Jobseeker/jobseeker.php');
      }
    } else {
      $errorMsg = "Confirm password is not correct. Please try again.";
      // ส่งค่า $errorMsg กลับไปยังหน้าที่เกี่ยวข้อง
      header("Location: account.php?errorMsg=" . urlencode($errorMsg));
      exit();
    }
  }

  ?>



  <!-- Old in temp -->

  <form method="POST">
    <div class="container ">
      <div class="row d-flex justify-content-center align-items-center ">
        <h2>Create Account</h2>
        <div class="col-xl-9">
          <div class="row align-items-center pt-4 pb-3">
            <div class="col-auto col-md-3 ps-5">
              <label for="inputUsername" class="col-form-label">Username</label>
            </div>
            <div class="col-auto col-md-8 pe-5">
              <input type="text" id="inputUsername" name="username" class="form-control " aria-describedby="passwordHelpInline" required="true">
            </div>
          </div>
          <div class="row align-items-center py-3">
            <div class="col-auto col-md-3 ps-5">
              <label for="inputPassword" class="col-form-label">Password</label>
            </div>
            <div class="col-auto col-md-8 pe-5">
              <input type="password" id="inputPassword" name="password" class="form-control" aria-describedby="passwordHelpInline" required="true">
            </div>
          </div>

          <div class="row align-items-center py-3">
            <div class="col-auto col-md-3 ps-5">
              <label for="inputPassword2" class="col-form-label">Confirm Password</label>
            </div>
            <div class="col-auto col-md-8 pe-5">
              <input type="password" id="inputPassword2" name="confirmpassword" class="form-control" aria-describedby="passwordHelpInline" required="true">
              <?php
              if (isset($_GET['errorMsg'])) {
                $errorMsg = $_GET['errorMsg'];
                echo '<div class="error-message" style="font-size:16px; color:red">' . $errorMsg . '</div>';
              }
              ?>
            </div>
          </div>
          <div class="row align-items-center py-3">
            <div class="col-auto col-md-3 ps-5">
              <label for="inputRole" class="col-form-label">Select you role</label>
            </div>
            <div class="col-auto col-md- pe-5">
              <select id="inputRole" name="role" class="form-select">Select you role
                <option value="jobseeker">Job seeker</value=>
                </option>
                <option value="intern">Intern</value=>
                </option>
              </select>
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <button type="button" onclick="window.location.href = '../../index.php';" class="btn btn-outline-primary btn ms-2" value="cancel">Cancel</button>
            <button type="submit" class="btn btn-primary btn ms-2 st" style="background-color: #444DDA;">Next</button>
          </div>
        </div>
      </div>
    </div>
  </form>

  <script>
    function previewFile(input) {
      var file = $("input[type=file]").get(0).files[0];

      if (file) {
        var reader = new FileReader();

        reader.onload = function() {
          $("#previewImg").attr("src", reader.result);
        }

        reader.readAsDataURL(file);
      }
    }
  </script>
</body>

</html>