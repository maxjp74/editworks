<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EduGrants - Register</title>
  <link rel="stylesheet" href="logout.css" />
</head>

<body class="logout-body">
  <div class="logout-left">
    <h1>WELCOME!</h1>
    <p>Create your account to get started</p>
  </div>

  <div class="logout-right">
    <div class="logout-box">
      <h2>Register</h2>
      
      <form>
        <div class="form-group">
          <label>First Name</label>
          <input type="text" placeholder="Enter your first name" required />
        </div>

        <div class="form-group">
          <label>Last Name</label>
          <input type="text" placeholder="Enter your last name" required />
        </div>

        <div class="form-group">
          <label>Email Address</label>
          <input type="email" placeholder="Enter your email" required />
        </div>

        <div class="form-group">
          <label>Password</label>
          <input type="password" placeholder="Enter your password" required />
        </div>

        <div class="form-group">
          <label>Confirm Password</label>
          <input type="password" placeholder="Confirm your password" required />
        </div>

        <button type="submit" class="logout-btn">Sign Up</button>
      </form>

      <div class="logout-bottom">
        <p>Already have an account?</p>
        <button class="logout-register-btn" onclick="window.location.href='login.html'">
          Login
        </button>
      </div>
    </div>
  </div>
</body>
</html>