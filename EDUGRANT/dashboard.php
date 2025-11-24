<?php
session_start();

if (!isset($_SESSION["logged_in"])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EduGrants</title>

  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="dashboard.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
</head>

<body>

  <script>
    if (localStorage.getItem("loggedIn") !== "true") {
      window.location.href = "login.php";  
    }
  </script>

  <div class="sidebar">
    <div class="logo">
      <img src="images/graducation.png" width="30" height="30" />
      <h2>EduGrants</h2>
    </div>

    <div class="profile">
      <img src="https://via.placeholder.com/70" alt="Profile" />
      <h3>John Cruz Galang</h3>
      <span class="verified">Verified Account</span>
    </div>

    <div class="menu">
      <a href="dashboard.php" class="active">
        <img src="images/dashboard.png" width="35" height="35" />
        Dashboard
      </a>

      <a href="student.php">
        <img src="images/apply.png" width="35" height="35" />
        Apply Scholarship
      </a>

      <a href="renewal.php">
        <img src="images/renewal.png" width="35" height="35" />
        Renewal
      </a>

      <a href="logout.php" onclick="localStorage.removeItem('loggedIn')">
        <img src="images/logout.png" width="35" height="35" />
        Log out
      </a>
    </div>
  </div>

  <div class="main">
    <div class="header">
      <div class="header-left"></div>

      <div class="user-info">
        <img src="images/notification.png" class="notification-icon" />
        <div class="user-name">John Galang</div>
      </div>
    </div>

    <h3>DASHBOARD</h3>
  </div>

</body>
</html>
