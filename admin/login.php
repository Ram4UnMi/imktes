<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="../assets/css/login.css" />
  <link rel="stylesheet" href="../assets/js/login.js" />
</head>

<body>
  <section class="container">
    <div class="login-container">
      <h1 class="heading1"> Laundry<span>Hub</span>
      </h1>
      <div class="circle circle-one"></div>

      <div class="form-container">
        <h1 class="opacity">LOGIN</h1>
        <form>
          <input type="text" placeholder="USERNAME" />
          <input type="password" placeholder="PASSWORD" />

          <button class="opacity">
            <a href="../after/berandaA.php">LOGIN AS ADMIN</a>
          </button>
          <button class="opacity">
            <a href="../after/berandaC.php">LOGIN AS OWNER</a>
          </button>
        </form>
        <div class="register-forget opacity">
          <a href="./register.php">REGISTER</a>
          <a href="">FORGOT PASSWORD</a>
        </div>
      </div>

      <div class="circle circle-two"></div>
    </div>
    <div class="theme-btn-container"></div>
  </section>

</body>
<script src="../js/login.js"></script>

</html>