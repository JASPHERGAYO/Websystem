

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">



  <style>

  
    body {
      background-color: #f8f9fa;
   
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }
    main {
      flex: 1;
    }
    .card {
      border: none;
      border-radius: 1rem;
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
<body class="bg-light">

  <!-- Centered Login Card -->
  <main class="d-flex justify-content-center align-items-center" style="min-height: calc(100vh - 200px);">
    <div class="card shadow-lg border-0" style="max-width: 400px; width: 100%;">
      <div class="card-body p-4">
        <h2 class="text-center fw-bold mb-4 text-primary">Login</h2>

        <form onsubmit="event.preventDefault(); 
  const email = document.getElementById('email').value.trim();
  localStorage.setItem('isLoggedIn', 'true');
  localStorage.setItem('email', email);
  window.location.href='index.php';
">
          <div class="mb-3">
            <input type="text" class="form-control form-control-lg" placeholder="email" id="email" required>
          </div>

          <div class="mb-2 position-relative">
            <input id="pass" type="password" class="form-control form-control-lg" placeholder="Password" required>
            <i class="fa-solid fa-eye position-absolute top-50 end-0 translate-middle-y me-3 text-secondary" id="togglePassword" style="cursor:pointer;"></i>
          </div>

          <div class="text-end mb-3">
            <a href="forgotpass.php" class="link-primary text-decoration-none small">Forgot password?</a>
          </div>

          <button type="submit" class="btn btn-primary btn-lg w-100">Login</button>

          <p class="text-center mt-3 mb-1">
            Don’t have an account?
            <a href="register.php" class="link-primary text-decoration-none">Register</a>
          </p>

          <p class="text-center text-muted small">
            By continuing, you agree to our
            <a href="termsandcondition.php" target="_blank" class="link-primary text-decoration-none">Terms and Conditions</a>.
          </p>
        </form>
      </div>
    </div>
  </main>

  <script>
    const togglePassword = document.querySelector("#togglePassword");
    const password = document.querySelector("#pass");
    togglePassword.addEventListener("click", () => {
      const type = password.getAttribute("type") === "password" ? "text" : "password";
      password.setAttribute("type", type);
      togglePassword.classList.toggle("fa-eye-slash");
    });
  </script>

  <?php include "footer.php"; ?>
</body>
</html>
