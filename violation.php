<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ViolationQR | Profile & Status</title>
  <link rel="stylesheet" href="css/violation.css">
  <script>
    // Remove placeholder option when user changes selection
    function removePlaceholder(selectElement) {
      const firstOption = selectElement.options[0];
      if (firstOption && firstOption.value === "") {
        firstOption.remove();
      }
    }
  </script>
</head>
<body>


<header>
  <div class="logo">
    <img src="images/logo.png" alt="School Logo">
    <span><b>Kolehiyo ng Lungsod ng Dasmariñas</b></span>
  </div>
  <div class="menu-toggle">&#9776;</div>
  <nav>
    <a href="index.php">Home</a>
    <a href="index.php#about">About Us</a>
    <a href="faqs.php">Data Privacy & FAQs</a>
    <a href="qr.php" class="active">Profile/Status</a>
    <button type="button" id="authButton" class="logout-btn"></button>
  </nav>
</header>

<?php include 'header.php'; ?>

<main>


  <section class="facilitator-section">
    <h2>Facilitator Dashboard</h2>
    <p>Search for a student violation record below:</p>
    <div class="search-box">
      <input type="text" placeholder="Enter Student Number or Name">
      <button type="button" class="search-btn">Search</button>
    </div>
    <div class="search-results">
      <p>Testing</p>
    </div>
  </section>

  <section class="profile-section">
    <h2>Student Violation Profile</h2>

    <div class="status-bar">
      <label>Number of Violations:</label>
      <div class="status-count">0</div>
    </div>

    <form class="violation-form">

      <div class="form-group">
        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" placeholder="Enter first name">
      </div>

      <div class="form-group">
        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" placeholder="Enter last name">
      </div>

      <div class="form-group">
        <label for="middleInitial">Middle Initial:</label>
        <input type="text" id="middleInitial" placeholder="e.g. A.">
      </div>

      <div class="form-group">
        <label for="studentNumber">Student Number:</label>
        <input type="text" id="studentNumber" placeholder="e.g. 2024-2-300">
      </div>

      <div class="form-group">
        <label for="yearLevel">Year Level:</label>
        <select id="yearLevel" onchange="removePlaceholder(this)">
          <option value="">Select Year</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
        </select>
      </div>

      <div class="form-group">
        <label for="course">Course:</label>
        <select id="course" onchange="removePlaceholder(this)">
          <option value="">Select Course</option>
          <option>BSIS</option>
          <option>BSN</option>
          <option>BSEn</option>
          <option>BSP</option>
          <option>BSCS</option>
        </select>
      </div>

      <div class="form-group">
        <label for="section">Section:</label>
        <input type="text" id="section" placeholder="e.g. BS1IS-1">
      </div>

      <div class="form-group">
        <label for="gender">Gender:</label>
        <select id="gender" onchange="removePlaceholder(this)">
          <option value="">Select Gender</option>
          <option>Male</option>
          <option>Female</option>
          <option>Prefer not to say</option>
        </select>
      </div>

      <div class="form-group">
        <label for="violationType">Type of Violation:</label>
        <select id="violationType" onchange="removePlaceholder(this)">
          <option value="">Select Violation</option>
          <option>Bringing snacks</option>
          <option>Improper attire</option>
          <option>Bad behavior</option>
        </select>
      </div>

      <button type="button" class="submit-btn">Submit</button>
    </form>
  </section>

</main>

<footer id="contact">
  <?php include 'footer.php'; ?>
</footer>

<script>
  const authButton = document.getElementById('authButton');
  const isLoggedIn = localStorage.getItem('isLoggedIn') === 'true';

  if (isLoggedIn) {
    authButton.textContent = 'Logout';
    authButton.onclick = () => {
      localStorage.removeItem('isLoggedIn');
      window.location.href = 'logout.php';
    };
  } else {
    authButton.textContent = 'Login/Signup';
    authButton.onclick = () => {
      window.location.href = 'login.php';
    };
  }
</script>

</body>
</html>
