<!DOCTYPE html>
<html>

<head>
  <title>Project Intern</title>
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body>

<header class="logo">
  <img src="assets/img/logo.png" alt="Logo description" height="40px" width="272.85711669921875px" class="d-inline-block align-text-top">
</header>


  <div class="container">
    <div class="img"></div>
    <div class="wrap-login">
      <div class="login-content">
        <?php
        session_start();

        $msg = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "superhr";

          $conn = new mysqli($servername, $username, $password, $dbname);

          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

          $username = mysqli_real_escape_string($conn, $_POST["username"]);
          $password = mysqli_real_escape_string($conn, $_POST["password"]);

          $sql = "SELECT *
  FROM users 
  LEFT JOIN addresses ON users.id = addresses.user_id
  LEFT JOIN positions ON users.id = positions.user_id
  LEFT JOIN contacts ON users.id = contacts.user_id
  LEFT JOIN education ON users.id = education.user_id
  LEFT JOIN documents ON users.id = documents.user_id
  LEFT JOIN salaries ON users.id = salaries.user_id
  LEFT JOIN candidate_followup ON users.id = candidate_followup.user_id
  WHERE users.username = '$username'";

          $result = $conn->query($sql);
          if ($result->num_rows == 1) {
            $user = $result->fetch_assoc();

            if ($password === $user['password']) {

              // Define the array of user data to be stored in localStorage
              $user_data = $user;

              $_SESSION['user_data'] = $user_data;


              echo '<script type="text/javascript">';
              echo 'window.localStorage.setItem("user_data", ' . json_encode($user_data) . ');';


              if ($user['role'] === 'Intern') {
                echo 'window.location.href = "./followup/followupintern/followintern.php";';
              } else {
                echo 'window.location.href = "./followup/followjob/followjob.php";';
              }
              echo '</script>';
            } else {
              $msg = "Username or Password is not correct.";
            }
          } else {
            $msg = "Username or Password is not correct.";
          }

          $conn->close();
        }
        ?>


        <form method="POST">
          <h2 class="title">Log In</h2>
          <div class="input-div one">
            <div class="i">
              <i class="fas fa-user"></i>
            </div>
            <div class="div">
              <input type="text" class="input" id="username" name="username" placeholder="Username" required="true" />
            </div>
          </div>
          <div class="input-div pass">
            <div class="i">
              <i class="fas fa-lock"></i>
            </div>
            <div class="div">
              <input type="password" class="input" id="password" name="password" placeholder="Password" required="true" />
            </div>
          </div>
          <p style="font-size:16px; color:red" align="center"> <?php
                                                                echo $msg;
                                                                ?> </p>
          <a href="#">Forgot Password?</a>
          <input type="submit" class="btn" value="Log In" name="login" />
          <input type="submit" class="btn-signUp" value="Sign Up" onclick="window.location.href='account.php'" />

        </form>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="js/main.js"></script>
</body>

</html>