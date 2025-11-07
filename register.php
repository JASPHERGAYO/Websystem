

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register</title>

  <!-- Bootstrap 5 & Font Awesome -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    body {
      background: linear-gradient(to bottom right, #f7faff, #eaf4ff);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }
    main {
      flex: 1; /* ensures footer stays at bottom */
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 50px 0;
    }
    .card {
      border: none;
      border-radius: 1rem;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }
     header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 30px;
      background: white;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    header .logo {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .logo img {
      height: 60px;
      margin-right: 10px;
    }

    header nav a {
      margin-left: 20px;
      text-decoration: none;
      color: black;
      font-weight: 600;
      transition: color 0.3s, border-bottom 0.3s;
    }

    header nav a:hover {
      color: #007bff;
    }

    header nav a.active {
      color: #f5c400;             
      border-bottom: 2px solid #f5c400; 
    }


    .menu-toggle {
      display: none;
      font-size: 24px;
      cursor: pointer;
    }

    /* Main Content Sections */
    section {
      padding: 40px 20px;
      text-align: center;
      color: black;
    }

    .section-title {
      font-size: 1.8em;
      margin-bottom: 20px;
      color: black;
    }

    .description2 {
      max-width: 700px;
      margin: 0 auto 30px auto;
      font-size: 1.1em;
      color: black;
      background-color: #c0c9b380;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 25px #1ed844ff;
    }
  </style>
</head>
   <header>
    <div class="logo">
      <img src="images/logo.png" alt="School Logo" style="height: 40px;">
      <span><b>Kolehiyo ng Lungsod ng Dasmariñas</b></span>
    </div>
    <div class="menu-toggle">&#9776;</div> 
    <nav>
      <a href="index.php" id="home-link">Home</a>
      <a href="#about" id="about-link">About Us</a>
  
   
    </nav>
  </header>
</head>
<?php include "header.php"; ?>

<body>
  <main>
    <div class="card p-4 shadow-lg rounded-4" style="width: 100%; max-width: 420px; ">
      <h2 class="text-center mb-4 fw-bold text-primary">Register</h2>

      <form id="registerForm" novalidate>
        <!-- Username -->


        <!-- Email -->
        <div class="mb-3">
          <label for="email" class="form-label fw-semibold">Email</label>
          <input type="email" id="email" class="form-control" placeholder="Enter email" required>
        </div>

        <!-- Password -->
        <div class="mb-3 position-relative">
          <label for="reg-pass" class="form-label fw-semibold">Password</label>
          <input id="reg-pass" type="password" class="form-control pe-5" placeholder="Enter password" required>
          <i class="fa-solid fa-eye position-absolute mt-3 top-50 end-0 translate-middle-y me-3 text-secondary"
             style="cursor: pointer;" onclick="togglePassword('reg-pass', this)"></i>
        </div>

        <!-- Role -->
       

        <!-- Admin Validation -->
        <div id="adminValidation" class="mb-3 d-none">
          <label for="validationId" class="form-label fw-semibold">Admin Validation ID</label>
          <input type="text" id="validationId" class="form-control" placeholder="Enter Validation ID">
        </div>

        <!-- Submit -->
        <div class="d-grid mb-3">
          <button type="submit" class="btn btn-primary fw-semibold">Submit</button>
        </div>

        <!-- Redirect -->
        <p class="text-center">
          Already have an account?
          <a href="login.php" class="text-decoration-none">Login</a>
        </p>
      </form>
    </div>
  </main>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    function togglePassword(inputId, icon) {
      const input = document.getElementById(inputId);
      if (input.type === "password") {
        input.type = "text";
        icon.classList.replace("fa-eye", "fa-eye-slash");
      } else {
        input.type = "password";
        icon.classList.replace("fa-eye-slash", "fa-eye");
      }
    }

    const roleSelect = document.getElementById("roleSelect");
    const adminValidation = document.getElementById("adminValidation");

    roleSelect.addEventListener("change", () => {
      if (roleSelect.value === "admin") {
        adminValidation.classList.remove("d-none");
        document.getElementById("validationId").required = true;
      } else {
        adminValidation.classList.add("d-none");
        document.getElementById("validationId").required = false;
      }
    });

    document.getElementById("registerForm").addEventListener("submit", (event) => {
      event.preventDefault();
      if (event.target.checkValidity()) {
        window.location.href = "login.php";
      } else {
        event.target.reportValidity();
      }
    });
  </script>

<?php
include "footer.php";
?>
</body>
</html>
