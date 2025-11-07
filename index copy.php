<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QR Violation Recorder</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      background: url('kld.jpg') no-repeat center center fixed;
      background-size: cover;
      color: black;
    }

    header {
      background-color: rgba(0, 100, 0, 0.9);
      color: white;
      padding: 15px 0;
      text-align: center;
    }
    /* herereeee */

    #company-profile {
  text-align: center;
  padding: 60px 20px;
}

#company-profile img {
  width: 150px;
  margin: 20px 0;
}

.section-title {
  font-size: 2rem;
  font-weight: bold;
  color: #333;
  margin-bottom: 20px;
}

.description {
  font-size: 1.1rem;
  color: black;
  max-width: 700px;
  margin: 0 auto;
  line-height: 1.6;
}
.social-icon {
  width: 40px !important;   /* force smaller size */
  height: 40px !important;
  border-radius: 50%;
  object-fit: cover;         /* make sure it fits cleanly */
  display: inline-block;
  transition: transform 0.3s ease;
  vertical-align: middle;
}

.social-icon:hover {
  transform: scale(1.1);
}


.social-icon:hover {
  transform: scale(1.1);
}




    header h1 {
      font-size: 2em;
    }

    nav {
      background-color: #1b5e20;
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
    }

    nav a {
      color: white;
      padding: 12px 20px;
      text-decoration: none;
      transition: background 0.3s;
    }

    nav a:hover {
      background-color: #66bb6a;
    }

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
      box-shadow: 0 0 25px #1ed844ff;
    }

    /* Company Profile */
    #company-profile img {
      width: 160px;
      height: auto;
      border-radius: 10px;
      margin-bottom: 15px;
    }

    /* About Us Carousel */
    .carousel-container {
      position: relative;
      max-width: 700px;
      margin: auto;
      overflow: hidden;
      border-radius: 15px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
      background: rgba(255, 255, 255, 0.85);
    }

    .carousel-slide {
      display: flex;
      transition: transform 0.5s ease-in-out;
    }

    .carousel-item {
      min-width: 100%;
      text-align: center;
      padding: 20px;
      color: black;
    }

    .carousel-item img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      margin-bottom: 10px;
      object-fit: cover;
    }

    .carousel-btn {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background-color: rgba(0, 100, 0, 0.8);
      color: white;
      border: none;
      padding: 10px;
      cursor: pointer;
      border-radius: 50%;
    }

    .prev { left: 10px; }
    .next { right: 10px; }

    .carousel-btn:hover {
      background-color: #388e3c;
    }
    .social-links1{
  margin-top: 10px;
  display: flex;
  justify-content: center;
  gap: 15px;
  
    }


    .profile-pic {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      border: 3px solid #1b5e20;
      object-fit: cover;
      transition: 0.3s;
    }

    .profile-pic:hover {
      transform: scale(1.1);
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }

    footer {
      background-color: #1b5e20;
      color: white;
      text-align: center;
      padding: 15px 0;
      margin-top: 30px;
    }

    @media (max-width: 768px) {
      header h1 {
        font-size: 1.5em;
      }
      .carousel-item img, .profile-pic {
        width: 100px;
        height: 100px;
      }
    }
    .logout-btn {
  background-color: #dc3545;
  color: #fff;
  border: none;
  padding: 8px 16px;
  border-radius: 5px;
  font-weight: 600;
  cursor: pointer;
  margin-left: 20px;
  transition: background 0.3s ease;
}

.logout-btn:hover {
  background-color: #b02a37;
}
  </style>
</head>
<body>
  
  <header>
    <h1>QR Violation Recorder</h1>
  </header>

  <nav>
    <a href="#home">Home</a>
    <a href="#about">About Us</a>
    <a href="faqs.php">Data Privacy & FAQs</a>
    <a href="violation.php">Profile/Status</a>
    <button type="button" onclick="window.location.href='login.php'" class="logout-btn">Logout</button>
    
  </nav>
  
  <section id="home">
    <div data-aos="flip-left">
    <h2 class="section-title">Welcome to QR Violation Recorder</h2>
    </div>
        <div data-aos="flip-left">
    <p class="description2">
      The QR Violation Recorder is an innovative system designed to record, monitor, and manage rule violations efficiently using QR code technology. 
      It provides a faster, paperless, and more accurate way to store and retrieve violation data for better accountability and discipline.
    </p>
    </div>
  </section>

  <section id="company-profile">
    <div data-aos="flip-left">
    <h2 class="section-title">Company Profile</h2>
    </div>
    <img src="logo.png" alt="Company Logo">
    <div data-aos="flip-left">
    <p class="description2">
      Our company is dedicated to developing smart solutions for schools and organizations. 
      The QR Violation Recorder system was created to promote transparency and efficiency in record management through technology.
    </p>
    </div>
  </section>

  <section id="about">
    <div data-aos="flip-left">
    <h2 class="section-title">About Us</h2>
    </div>
    <div class="carousel-container">
      <div class="carousel-slide">

<div class="carousel-item">
  <img src="fau.jpeg" alt="Faustino, Angelo Brian R.">
  <div class="profile-info">
    <h3>Full Stack Developer</h3>
    <p><b>Name:</b> Faustino, Angelo Brian R.</p>
    <p><b>Email:</b> abfaustino@kld.edu.ph</p>
    <p><b>Contact No:</b> 09363587545</p>

<div class="social-links1">
  <a href="https://www.facebook.com/share/1F1hqGzZVE/" target="_blank">
    <img src="bb.jpeg" alt="Facebook" class="social-icon">
  </a>
</div>

  </div>
</div>


        <div class="carousel-item">
          <img src="ate.jpeg" alt="galusong">
          <h3>UI/UX Designer</h3>
          <p><b>Name:</b> Aira S. Galusong</p>
          <p><b>Email:</b> agalusong@kld.edu.ph</p>
          <p><b>Contact No:</b> 09916941542</p>

          <div class="social-links1">
  <a href="https://www.facebook.com/Officialairaneyneria" target="_blank">
    <img src="bb.jpeg" alt="Facebook" class="social-icon">
  </a>
</div>
        </div>
        <div class="carousel-item">
          <img src="jello.jpeg" alt="jello">
          <h3>Front End Developer</h3>
          <p><b>Name:</b> John Jello P. Garcia</p>
          <p><b>Email:</b> jjgarcia@kld.edu.ph</p>
          <p><b>Contact No:</b> 09675718822</p>

          <div class="social-links1">
  <a href="https://www.facebook.com/share/15v3fxyQS8/?mibextid=wwXIfr" target="_blank">
    <img src="bb.jpeg" alt="Facebook" class="social-icon">
  </a>
</div>
        </div>
        <div class="carousel-item">
          <img src="gay.jpeg" alt="gayo">
          <h3>Database Specialist/Back-end Developer</h3>
          <p><b>Name:</b> Jaspher Gayo</p>
          <p><b>Email:</b> jgayo@kld.edu.ph</p>
          <p><b>Contact No:</b> 09107151583</p>

          <div class="social-links1">
  <a href="https://www.facebook.com/jasphergayo" target="_blank">
    <img src="bb.jpeg" alt="Facebook" class="social-icon">
  </a>
</div>
        </div>
        <div class="carousel-item">
          <img src="ash.jpg" alt="Ash">
          <h3>System Analyst</h3>
          <p><b>Name:</b> Ashley Jhoreen B. Gregorio</p>
          <p><b>Email:</b> ajgregorio@kld.edu.ph</p>
          <p><b>Contact No:</b> 09614553320</p>

          <div class="social-links1">
  <a href="https://www.facebook.com/share/194a6hiDPU/" target="_blank">
    <img src="bb.jpeg" alt="Facebook" class="social-icon">
  </a>
</div>
        </div>
      </div>
      <button class="carousel-btn prev">&#10094;</button>
      <button class="carousel-btn next">&#10095;</button>
    </div>
  </section>


  <script>
    const slide = document.querySelector('.carousel-slide');
    const slides = document.querySelectorAll('.carousel-item');
    const next = document.querySelector('.next');
    const prev = document.querySelector('.prev');

    let index = 0;

    function showSlide(i) {
      if (i >= slides.length) index = 0;
      if (i < 0) index = slides.length - 1;
      slide.style.transform = `translateX(${-index * 100}%)`;
    }

    next.addEventListener('click', () => {
      index++;
      showSlide(index);
    });

    prev.addEventListener('click', () => {
      index--;
      showSlide(index);
    });
  </script>
  <!-- AOS CSS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

<!-- AOS JS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</body>
</html>
