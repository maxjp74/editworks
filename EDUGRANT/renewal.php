<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EduGrants - Renewal</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
</head>

<body>

  <script>
    if (localStorage.getItem("loggedIn") !== "true") {
      window.location.href = "logout.php"; // redirect if not logged in
    }
  </script>
  
  <!-- Sidebar -->
  <div class="sidebar">
    <div class="logo">
      <img src="images/graducation.png" alt="EduGrants Logo" width="30" height="30" />
      <h2>EduGrants</h2>
    </div>

    <div class="profile">
      <img src="https://via.placeholder.com/70" alt="Profile" />
      <h3>John Cruz Galang</h3>
      <span class="verified">Verified Account</span>
    </div>

    <!-- ✅ Updated menu with icons -->
    <div class="menu">
      <a href="dashboard.php">
        <img src="images/dashboard.png" alt="Dashboard" width="35" height="35" />
        Dashboard
      </a>
      <a href="student.php">
        <img src="images/apply.png" alt="Apply Scholarship" width="35" height="35" />
        Apply Scholarship
      </a>
      <a href="renewal.php" class="active">
        <img src="images/renewal.png" alt="Renewal" width="35" height="35" />
        Renewal
      </a>
      <a href="logout.php">
        <img src="images/logout.png" alt="Log out" width="35" height="35" />
        Log out
      </a>
    </div>
  </div>


  <!-- Main -->
  <div class="main">
    <div class="header">
  <div class="header-left">
  </div>
  <div class="user-info">
    <img 
      src="images/notificaiton.png"
      alt="Notification"
      class="notification-icon"
    />
    <div class="user-name">John Galang</div>
  </div>
</div>

    <h3>RENEWAL</h3>
    <div class="content">
      <h3>Scholarship Renewal Form</h3>

      <form class="renewal-form">
        <div class="form-group" style="display:flex; gap:20px;">
          <div style="flex:1;">
            <label>School Year / Semester</label>
            <input type="text" placeholder="e.g. 2025 - 2026 / 1st Semester" />
          </div>
          <div style="flex:1;">
            <label>School</label>
            <input type="text" placeholder="Enter your school name" />
          </div>
        </div>

        <div class="form-group" style="width:300px;">
          <label>GPA</label>
          <input type="text" placeholder="Enter GPA" />
        </div>

        
          <div class="form-container">
  <div class="checkbox-group">
    <div class="checkbox-item">
      <input type="checkbox" id="report-card" />
      <label for="report-card">Photo copy of report card (Form 138)</label>
    </div>

    <div class="checkbox-item">
      <input type="checkbox" id="latest" />
      <label for="latest">Latest</label>
    </div>

    <div class="checkbox-item">
      <input type="checkbox" id="barangay" />
      <label for="barangay">Barangay clearance</label>
    </div>

    <div class="checkbox-item">
      <input type="checkbox" id="valid-id" />
      <label for="valid-id">
        Upload any types of valid ID
        <small>Photocopy of Voter's ID, National ID</small>
      </label>
    </div>
  </div>

  <!-- Separate div JUST for button placement -->
  <div class="button-container">
    <button class="btn">Submit</button>
  </div>
</div>

      </form>
    </div>
  </div>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</body>
</html>
