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
          <p style="font-size:16px; color:red" align="center"> </p>
          <a href="#">Forgot Password?</a>
          <input type="submit" class="btn" value="Log In" name="login" />
          <input type="submit" class="btn-signUp" value="Sign Up" onclick="window.location.href='./view/Account/signup.php'" />

        </form>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="js/main.js"></script>
</body>
<script>
document.querySelector('.login-content form').addEventListener('submit', function(e) {
    e.preventDefault();

    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;

    fetch('./backend/createAccount/Signin.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: new URLSearchParams({
          'login': true,
          'username': username,
          'password': password,
        }),
      })
      .then(response => response.text())
      .then(data => {
        let result = JSON.parse(data);
        if (result) {
          alert('Login success');
          localStorage.setItem('user', JSON.stringify(result));
          window.location.href = './view/Profile/myProfile.php'; 
        } else {
          alert('Invalid username or password');
        }
      });
  });

</script>

</html>