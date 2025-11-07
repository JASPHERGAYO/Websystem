<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ViolationQR - Header</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    /* ====== KLD-Style Header ====== */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    /* Top info bar */
    .top-bar {
      background-color: #004d40; /* KLD dark green */
      color: #ffffff;
      font-size: 0.9rem;
      padding: 6px 0;
    }

    .top-bar i {
      color: #f9b233; 
      margin-right: 6px;
    }

    .top-bar span {
      margin-right: 20px;
    }

  
    .navbar {
      background-color: #ffffff;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand {
      display: flex;
      align-items: center;
      font-weight: 600;
      color: #004d40 !important;
      font-size: 1rem;
    }

    .navbar-brand img {
      height: 45px;
      margin-right: 10px;
    }

    .navbar-nav .nav-link {
      color: #212121;
      font-weight: 500;
      margin: 0 8px;
      transition: color 0.3s;
    }

    .navbar-nav .nav-link:hover,
    .navbar-nav .nav-link.active {
      color: #f9b233;
    }

    
    @media (max-width: 992px) {
      .top-bar {
        text-align: center;
      }

      .navbar-brand span {
        font-size: 0.9rem;
      }
    }
  </style>
</head>

<body>

  <div class="top-bar">
    <div class="container d-flex justify-content-between flex-wrap">
      <div class="contact-info">
        <span><i class="bi bi-geo-alt-fill"></i> Brgy. Burol, City of Dasmariñas</span>
        <span><i class="bi bi-envelope-fill"></i> admissionandtesting@kld.edu.ph</span>
        <span><i class="bi bi-clock-fill"></i> 07 AM – 5 PM, Philippines</span>
      </div>
    </div>
  </div>

  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
