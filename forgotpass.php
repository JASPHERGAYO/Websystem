
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password | ViolationQR</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
<?php 
include "header.php"
?>
  <nav>
     
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
</head>
<body>

<main>
  <div class="container my-5 vh-100 p-5 justify-content-center align-content-center w-50 " >
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-5">
        <div class="card shadow p-4">
          <div>
          <h4 class="text-center mb-4 text-primary">Forgot Password</h4>
          <form action="process_forgotpass.php" method="POST">
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter your registered email" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Send link via email</button>
          </form>
          <a href="login.php" >Go back to Login</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php include 'footer.php'; ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
