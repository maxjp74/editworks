<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];

    // Hardcoded sample credentials (pwede palitan ng database)
    if ($email === "example1@gmail.com" && $password === "123student") {
        $_SESSION["logged_in"] = true;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Invalid email or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EduGrants - Login</title>
  <link rel="stylesheet" href="logout.css" />
</head>

<body class="logout-body">
  <div class="logout-left">
    <h1>WELCOME!</h1>
  </div>

  <div class="logout-right">
    <div class="logout-box">
      <h2>Login</h2>

      <?php if(isset($error)) echo "<p style='color:red'>$error</p>"; ?>

      <form method="POST">
        <input name="email" type="text" placeholder="Username or Email Address" required />
        <input name="password" type="password" placeholder="Password" required />

        <button class="logout-btn">Log In</button>
      </form>
    </div>

    <div class="logout-bottom">
      <p>Don’t have an account yet?</p>
      <button class="logout-register-btn" onclick="window.location.href='register.php'">
        Register
      </button>
    </div>
  </div>

</body>
</html>
