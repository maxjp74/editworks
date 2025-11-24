<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EduGrants</title>
  <link rel="stylesheet" href="style.css" />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"
  />
</head>

<body>
  <script>
    if (localStorage.getItem("loggedIn") !== "true") {
      window.location.href = "logout.php";
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

    <div class="menu">
      <a href="dashboard.php">
        <img src="images/dashboard.png" alt="Dashboard" width="35" height="35" />
        Dashboard
      </a>
      <a href="student.php" class="active">
        <img src="images/apply.png" alt="Apply Scholarship" width="35" height="35" />
        Apply Scholarship
      </a>
      <a href="renewal.php">
        <img src="images/renewal.png" alt="Renewal" width="35" height="35" />
        Renewal
      </a>
      <a href="logout.php">
        <img src="images/logout.png" alt="Log out" width="35" height="35" />
        Log out
      </a>
    </div>
  </div>

  <!-- Main Content -->
  <div class="main">
    <div class="header">
  <div class="header-left"></div>
  <div class="user-info">
    <div class="notification-wrapper">
      <img src="images/notificaiton.png" alt="Notification" class="notification-icon" onclick="toggleNotifications()" />
      
      <!-- Notification Dropdown -->
      <div class="notification-dropdown" id="notificationDropdown">
        <div class="notification-header">
          <h2>Notification</h2>
        </div>
        <div class="notification-list">
          <div class="notification-item">
            <div class="notification-icon-wrapper green">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="white">
                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/>
              </svg>
            </div>
            <div class="notification-content">
              <p class="notification-title">Barangay report updated successfully</p>
              <span class="notification-time">1 hour ago</span>
            </div>
          </div>
          
          <div class="notification-item">
            <div class="notification-icon-wrapper yellow">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="white">
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/>
              </svg>
            </div>
            <div class="notification-content">
              <p class="notification-title">New scholarship application received</p>
              <span class="notification-time">2 hour ago</span>
            </div>
          </div>
          
          <div class="notification-item">
            <div class="notification-icon-wrapper blue">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="white">
                <path d="M1 21h22L12 2 1 21zm12-3h-2v-2h2v2zm0-4h-2v-4h2v4z"/>
              </svg>
            </div>
            <div class="notification-content">
              <p class="notification-title">Reminder: Export application received</p>
              <span class="notification-time">3 hour ago</span>
            </div>
          </div>
          
          <div class="notification-item">
            <div class="notification-icon-wrapper gray">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="white">
                <path d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/>
              </svg>
            </div>
            <div class="notification-content">
              <p class="notification-title">New user registered: Jenny Dela Cruz</p>
              <span class="notification-time">2 days ago</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="user-name">John Galang</div>
  </div>
</div>
    
    <h3>DASHBOARD / APPLY SCHOLARSHIP</h3>

    <div class="content">
  <!-- Steps -->
  <div class="steps">
    <div class="step active" onclick="showSection('personal-info')">
      <div class="step-icon">
        <svg viewBox="0 0 24 24">
          <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
        </svg>
      </div>
      <div class="step-text">Personal Information</div>
    </div>

    <div class="step" onclick="showSection('residency')">
      <div class="step-icon">
        <svg viewBox="0 0 24 24">
          <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>
        </svg>
      </div>
      <div class="step-text">Residency</div>
    </div>

    <div class="step" onclick="showSection('family')">
      <div class="step-icon">
        <svg viewBox="0 0 24 24">
          <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>
        </svg>
      </div>
      <div class="step-text">Family Background</div>
    </div>

    <div class="step" onclick="showSection('fileupload')">
      <div class="step-icon">
        <svg viewBox="0 0 24 24">
          <path d="M9 16h6v-6h4l-7-7-7 7h4zm-4 2h14v2H5z"/>
        </svg>
      </div>
      <div class="step-text">File Upload</div>
    </div>

    <div class="step" onclick="showSection('appointment')">
      <div class="step-icon">
        <svg viewBox="0 0 24 24">
          <path d="M17 12h-5v5h5v-5zM16 1v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z"/>
        </svg>
      </div>
      <div class="step-text">Appointment</div>
    </div>

    <div class="step" onclick="showSection('finish')">
      <div class="step-icon">
        <svg viewBox="0 0 24 24">
          <path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/>
        </svg>
      </div>
      <div class="step-text">Finish</div>
    </div>
  </div>
  
  
      <!-- PERSONAL INFO -->
      <div id="personal-info" class="form-section">
        <h3>PERSONAL INFORMATION:</h3>

        <div class="form-group">
          <div style="flex:1;">
            <label>Lastname</label>
            <input type="text" placeholder="Enter your Lastname" />
          </div>
          <div style="flex:1;">
            <label>Firstname</label>
            <input type="text" placeholder="Enter your Firstname" />
          </div>
          <div style="flex:1;">
            <label>Middlename</label>
            <input type="text" placeholder="Enter your Middlename" />
          </div>
        </div>

        <div class="form-group">
          <div style="flex:1;">
            <label>Gender</label>
            <div class="gender-radio-group">
              <div class="gender-option">
                <input type="radio" id="male" name="gender" value="male" />
                <label for="male">Male</label>
              </div>
              <div class="gender-option">
                <input type="radio" id="female" name="gender" value="female" />
                <label for="female">Female</label>
              </div>
            </div>
          </div>

          <div style="flex:1;">
            <label>Civil Status</label>
            <select name="civil-status" id="civil-status" class="custom-select">
              <option value="" disabled selected>Please Select</option>
              <option value="single">Single</option>
              <option value="married">Married</option>
              <option value="widowed">Widowed</option>
              <option value="separated">Separated</option>
              <option value="divorced">Divorced</option>
            </select>
          </div>

          <div style="flex:1;">
            <label>Date of Birth</label>
            <input type="date" />
          </div>
        </div>

        <div class="form-group">
          <div style="flex:2;">
            <label>Course</label>
            <input type="text" />
          </div>
          <div style="flex:1;">
            <label>GPA</label>
            <input type="text" />
          </div>
        </div>

        <div class="form-group">
          <div style="flex:1;">
            <label>School Name</label>
            <input type="text" />
          </div>
        </div>

        <div class="form-group">
          <div style="flex:1;">
            <label>Skills (optional)</label>
            <input type="text" />
          </div>
          <div style="flex:1;">
            <label>Talent (optional)</label>
            <input type="text" />
          </div>
        </div>

        <button class="btn" onclick="nextSection('residency')">Next</button>
      </div>

      <!-- RESIDENCY SECTION -->
      <div id="residency" class="form-section" style="display:none;">
        <h3>RESIDENCY:</h3>

        <label>Permanent Address:</label>
        <input type="text" placeholder="Enter your permanent address" />

        <label>No. of Months/Years of Residency:</label>
        <input type="text" placeholder="Enter duration" />

        <label>Are you and your parents a Pampanga Registered Voters?</label>

<div class="voter-radio-group">
  <div class="voter-row">
    <span>Father:</span>
    <label><input type="radio" name="father_voter" value="yes"> Yes</label>
    <label><input type="radio" name="father_voter" value="no"> No</label>
  </div>

  <div class="voter-row">
    <span>Mother:</span>
    <label><input type="radio" name="mother_voter" value="yes"> Yes</label>
    <label><input type="radio" name="mother_voter" value="no"> No</label>
  </div>

  <div class="voter-row">
    <span>Applicant:</span>
    <label><input type="radio" name="applicant_voter" value="yes"> Yes</label>
    <label><input type="radio" name="applicant_voter" value="no"> No</label>
  </div>

  <div class="voter-row">
    <span>Guardian:</span>
    <label><input type="radio" name="guardian_voter" value="yes"> Yes</label>
    <label><input type="radio" name="guardian_voter" value="no"> No</label>
  </div>
</div>



        <label>Please Indicate the Name of guardian:</label>
        <input type="text" placeholder="Guardian's Name" />

        <label>RELATIONSHIP to the guardian:</label>
        <input type="text" placeholder="Relationship" />

        <label>ADDRESS of your guardian:</label>
        <input type="text" placeholder="Guardian's Address" />

        <label>CONTACT NUMBER of your guardian:</label>
        <input type="text" placeholder="Contact Number" />

        <div class="button-group">
          <button class="btn" onclick="previousSection('personal-info')">Previous</button>
          <button class="btn" onclick="nextSection('family')">Next</button>
        </div>
      </div>


          
    <!-- FAMILY BACKGROUND SECTION -->
    <div id="family" class="form-section" style="display:none;">
    <h3>FAMILY BACKGROUND:</h3>

  <!-- FATHER'S INFORMATION -->
  <div class="family-row">
    <div class="family-col">
      <label>Father's Name:</label>
      <input type="text" placeholder="Enter father's name">
    </div>
    <div class="family-col-small">
      <label>Suffix:</label>
      <input type="text" placeholder="">
    </div>
  </div>
 
  <div class="family-row">
    <div class="family-col">
      <label>Home Address:</label>
      <input type="text" placeholder="Enter home address">
    </div>
    <div class="family-col-small">
      <label>Age:</label>
      <input type="text" placeholder="">
    </div>
  </div>
 
  <div class="family-row">
    <div class="family-col">
      <label>Contact No.:</label>
      <input type="text" placeholder="">
    </div>
    <div class="family-col">
      <label>Citizenship:</label>
      <input type="text" placeholder="">
    </div>
  </div>
 
  <div class="family-row">
    <div class="family-col">
      <label>Present Occupation:</label>
      <input type="text" placeholder="">
    </div>
    <div class="family-col">
      <label>Religion:</label>
      <input type="text" placeholder="">
    </div>
  </div>
 
  <div class="family-row">
    <div class="family-col">
      <label>Date of Birth:</label>
      <input type="date">
    </div>
    <div class="family-col">
      <label>Monthly Income:</label>
      <input type="text" placeholder="">
    </div>
  </div>

 <hr style="margin:20px 0; border:1px solid #ddd;">
 
  <!-- MOTHER'S INFORMATION -->
  <div class="family-row">
    <div class="family-col-full">
      <label>Mother's Name:</label>
      <input type="text" placeholder="Enter mother's name">
    </div>
  </div>
 
  <div class="family-row">
    <div class="family-col">
      <label>Home Address:</label>
      <input type="text" placeholder="Enter home address">
    </div>
    <div class="family-col-small">
      <label>Age:</label>
      <input type="text" placeholder="">
    </div>
  </div>
 
  <div class="family-row">
    <div class="family-col">
      <label>Contact No.:</label>
      <input type="text" placeholder="">
    </div>
    <div class="family-col">
      <label>Citizenship:</label>
      <input type="text" placeholder="">
    </div>
  </div>
 
  <div class="family-row">
    <div class="family-col">
      <label>Present Occupation:</label>
      <input type="text" placeholder="">
    </div>
    <div class="family-col">
      <label>Religion:</label>
      <input type="text" placeholder="">
    </div>
  </div>
 
  <div class="family-row">
    <div class="family-col">
      <label>Date of Birth:</label>
      <input type="date">
    </div>
    <div class="family-col">
      <label>Monthly Income:</label>
      <input type="text" placeholder="">
    </div>
  </div>
 
  <div class="button-group">
    <button class="btn" onclick="previousSection('residency')">Previous</button>
    <button class="btn" onclick="nextSection('fileupload')">Next</button>
  </div>
  </div> 
    <!-- end of family background section -->
         

    <!-- file upload fields -->
   <div id="fileupload" class="form-section" style="display:none;">
  <h3>Requirements Upload:</h3>
  <div class="fileupload-divider"></div>
  
  <div class="fileupload-item">
    <div class="fileupload-header">
      <input type="checkbox" id="report-card" class="fileupload-checkbox" disabled>
      <label for="report-card" class="fileupload-label">Photo copy of report card (Form 138)</label>
    </div>
    <div class="fileupload-control">
      <input type="file" id="report-card-file" class="fileupload-input" accept="image/*,.pdf" onchange="handleFileUpload(this, 'report-card')">
      <label for="report-card-file" class="fileupload-btn">Choose File</label>
      <span class="fileupload-filename" id="report-card-filename">No file chosen</span>
      <button type="button" class="fileupload-remove" id="report-card-remove" onclick="removeFile('report-card')" style="display:none;">✕</button>
    </div>
  </div>
  
  <div class="fileupload-item">
    <div class="fileupload-header">
      <input type="checkbox" id="barangay-clearance" class="fileupload-checkbox" disabled>
      <label for="barangay-clearance" class="fileupload-label">Barangay clearance</label>
    </div>
    <div class="fileupload-control">
      <input type="file" id="barangay-clearance-file" class="fileupload-input" accept="image/*,.pdf" onchange="handleFileUpload(this, 'barangay-clearance')">
      <label for="barangay-clearance-file" class="fileupload-btn">Choose File</label>
      <span class="fileupload-filename" id="barangay-clearance-filename">No file chosen</span>
      <button type="button" class="fileupload-remove" id="barangay-clearance-remove" onclick="removeFile('barangay-clearance')" style="display:none;">✕</button>
    </div>
  </div>
  
  <div class="fileupload-item">
    <div class="fileupload-header">
      <input type="checkbox" id="valid-id" class="fileupload-checkbox" disabled>
      <label for="valid-id" class="fileupload-label">Upload any types of a valid ID</label>
    </div>
    <p class="fileupload-note">Photocopy of voter's ID, National ID</p>
    <div class="fileupload-control">
      <input type="file" id="valid-id-file" class="fileupload-input" accept="image/*,.pdf" onchange="handleFileUpload(this, 'valid-id')">
      <label for="valid-id-file" class="fileupload-btn">Choose File</label>
      <span class="fileupload-filename" id="valid-id-filename">No file chosen</span>
      <button type="button" class="fileupload-remove" id="valid-id-remove" onclick="removeFile('valid-id')" style="display:none;">✕</button>
    </div>
  </div>
  
  <div class="button-group">
    <button class="btn" onclick="previousSection('family')">Previous</button>
    <button class="btn" onclick="nextSection('appointment')">Next</button>

  </div>
</div>
        
  <!-- appointment fields -->
  <div id="appointment" class="form-section" style="display:none;">
  <h3>Set Appointment:</h3>
  
  <div class="appointment-divider"></div>
  
  <h4 class="appointment-title">Schedule of Submission of Requirements</h4>
  
  <div class="appointment-divider-thin"></div>
  
  <div class="appointment-row">
    <div class="appointment-col">
      <label class="appointment-label">Please select a date</label>
      <select id="appointment-date" class="appointment-select">
        <option value="">Available Dates</option>
        <option value="2025-11-01">November 1, 2025</option>
        <option value="2025-11-05">November 5, 2025</option>
        <option value="2025-11-10">November 10, 2025</option>
        <option value="2025-11-15">November 15, 2025</option>
        <option value="2025-11-20">November 20, 2025</option>
      </select>
    </div>
    
    <div class="appointment-col">
      <label class="appointment-label">Total Slots:</label>
      <input type="text" class="appointment-input" value="0" readonly>
    </div>
    
    <div class="appointment-col">
      <label class="appointment-label">Remaining Slots:</label>
      <input type="text" class="appointment-input" value="0" readonly>
    </div>
  </div>
  
  <div class="button-group">
    <button class="btn" onclick="previousSection('fileupload')">Previous</button>
    <button class="btn" onclick="nextSection('finish')">Finish</button>
  </div>
</div>
        
  <!-- finish message -->
  <div id="finish" class="form-section" style="display:none;">
  <div class="finish-container">
    <div class="finish-icon">
      <svg class="finish-checkmark" viewBox="0 0 52 52">
        <circle class="finish-checkmark-circle" cx="26" cy="26" r="25" fill="none"/>
        <path class="finish-checkmark-check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
      </svg>
    </div>
    
    <h2 class="finish-title">SUCCESS!</h2>
    
    <p class="finish-message">
      Wait further annoucement for your applications to be approved. Thank you!
    </p>
  </div>
</div>


  </div> <!-- end of residency section -->
</div>



<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    // === Flatpickr setup ===
    flatpickr("input[type='date']", {
      dateFormat: "d/m/Y",
      allowInput: true,
      position: "auto center",
      locale: { firstDayOfWeek: 1 },
    });

     // === NOTIFICATION SETUP (BAGONG CODE) ===
    const notificationIcon = document.querySelector('.notification-icon');
    const dropdown = document.getElementById('notificationDropdown');
    const notificationWrapper = document.querySelector('.notification-wrapper');
    
    // Check kung nakuha yung elements
    console.log('Icon:', notificationIcon);
    console.log('Dropdown:', dropdown);
    
    // Click on notification icon
    if (notificationIcon) {
      notificationIcon.addEventListener('click', function(event) {
        event.stopPropagation();
        console.log('Icon clicked!');
        dropdown.classList.toggle('active');
      });
    }
    
    // Close dropdown when clicking outside
    document.addEventListener('click', function(event) {
      if (dropdown && !notificationWrapper.contains(event.target)) {
        dropdown.classList.remove('active');
      }
    });
    // === END NOTIFICATION SETUP ===

    // === Section and Step setup ===
    const steps = document.querySelectorAll(".step");
    const sections = document.querySelectorAll(".form-section");

    // Show only first section initially
    sections.forEach((sec, index) => {
      sec.style.display = index === 0 ? "block" : "none";
    });

    // === Function to show a section by ID ===
    function showSectionById(id) {
      sections.forEach(sec => (sec.style.display = "none"));
      const target = document.getElementById(id);
      if (target) target.style.display = "block";

      updateSteps(id);
    }

    // === Map section IDs in order ===
    const sectionOrder = [
      "personal-info",
      "residency",
      "family",
      "fileupload",
      "appointment",
      "finish",
    ];

    // === Step Clicks ===
    steps.forEach((step, index) => {
      step.addEventListener("click", () => {
        const sectionId = sectionOrder[index];
        showSectionById(sectionId);
      });
    });

    // === Update orange progress line ===
    function updateSteps(currentId) {
      const currentIndex = sectionOrder.indexOf(currentId);
      steps.forEach((s, i) => {
        if (i <= currentIndex) {
          s.classList.add("active");
        } else {
          s.classList.remove("active");
        }
      });
    }

    // === Next Button ===
    window.nextSection = function () {
      const current = Array.from(sections).findIndex(
        sec => sec.style.display === "block"
      );
      const next = current + 1;
      if (next < sections.length) {
        sections[current].style.display = "none";
        sections[next].style.display = "block";
        updateSteps(sectionOrder[next]);
      }
    };

    // === Previous Button ===
    window.previousSection = function () {
      const current = Array.from(sections).findIndex(
        sec => sec.style.display === "block"
      );
      const prev = current - 1;
      if (prev >= 0) {
        sections[current].style.display = "none";
        sections[prev].style.display = "block";
        updateSteps(sectionOrder[prev]);
      } 
    };
    
    // === File Upload Handler ===
window.handleFileUpload = function(input, checkboxId) {
  console.log('File uploaded for:', checkboxId); // Debug line
  
  const checkbox = document.getElementById(checkboxId);
  const filenameSpan = document.getElementById(checkboxId + '-filename');
  const removeBtn = document.getElementById(checkboxId + '-remove');
  
  console.log('Remove button found:', removeBtn); // Debug line
  
  if (input.files && input.files[0]) {
    // May na-upload na file
    checkbox.checked = true;
    checkbox.disabled = false;
    filenameSpan.textContent = input.files[0].name;
    filenameSpan.classList.add('uploaded');
    
    if (removeBtn) {
      removeBtn.style.display = 'inline-flex'; // Try inline-flex instead
      console.log('X button should show now'); // Debug line
    }
  } else {
    // Walang file
    checkbox.checked = false;
    filenameSpan.textContent = 'No file chosen';
    filenameSpan.classList.remove('uploaded');
    
    if (removeBtn) {
      removeBtn.style.display = 'none';
    }
  }


  


  
};
});
</script>
</body>
</html>