<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QR Violation Recorder</title>
<link rel="stylesheet" href="bootstrap-5.3.8-dist/bootstrap-5.3.8-dist/css/bootstrap.min.css">
<script src="bootstrap-5.3.8-dist/bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="css/index.css">
  
</head>
<body>
  /* Navigation Bar */
  kita mo to? try
  angelo
  asdadsa
  <header>
    <div class="logo">
      <img src="images/logo.png" alt="School Logo" style="height: 40px;">
      <span><b>Kolehiyo ng Lungsod ng Dasmariñas</b></span>
    </div>
    <div class="menu-toggle">&#9776;</div> 
    <nav>
      <a href="index.php" id="home-link">Home</a>
      <a href="#about" id="about-link">About Us</a>
      <a href="faqs.php" id="faqs-link">Data Privacy & FAQs</a>
      <a href="violation.php" id="profile-link">Profile/Status</a>
      <button type="button" id="authButton" class="logout-btn"></button>
    </nav>
  </header>
  <?php include 'header.php'; ?>
  <section id="home">
    <div data-aos="flip-left">
      <h2 class="section-title"><b>Welcome to QR Violation Recorder</b></h2>
    </div>
    <div data-aos="flip-left">
      <p class="description2 bg-light">
        The QR Violation Recorder is an innovative system designed to record, monitor, and manage rule violations efficiently using QR code technology. 
        It provides a faster, paperless, and more accurate way to store and retrieve violation data for better accountability and discipline.
      </p>
    </div>
  </section>

  <section id="company-profile">
    <div data-aos="flip-left">
      <h2 class="section-title"><b>Company Profile</b></h2>
    </div>
    <img src="images/logo.png" alt="Company Logo">
    <div data-aos="flip-left">
      <p class="description2 bg-light">
        Our company is dedicated to developing smart solutions for schools and organizations. 
        The QR Violation Recorder system was created to promote transparency and efficiency in record management through technology.
      </p>
    </div>
  </section>

  
  <section id="about">
    <div data-aos="flip-left">
      <h2 class="section-title"><b>About Us</b></h2>
    </div>
    <div class="carousel-container">
      <div class="carousel-slide">
        <div class="team-item">
          <img src="images/fau.jpeg" alt="Faustino, Angelo Brian R.">
          <div class="profile-info">
            <h3>Back End Developer</h3>
            <p><b>Name:</b> Faustino, Angelo Brian R.</p>
            <p><b>Email:</b> abfaustino@kld.edu.ph</p>
            <p><b>Contact No:</b> 09363587545</p>
            <div class="social-links1">
              <a href="#" class="social-link" onclick="showProfile('Faustino, Angelo Brian R.')">
                View Profile
              </a>
            </div>
          </div>
        </div>

        <div class="team-item">
          <img src="images/ate.jpeg" alt="galusong">
          <h3>Admin</h3>
          <p><b>Name:</b> Aira S. Galusong</p>
          <p><b>Email:</b> agalusong@kld.edu.ph</p>
          <p><b>Contact No:</b> 09916941542</p>
          <div class="social-links1">
            <a href="#" class="social-link" onclick="showProfile('Aira S. Galusong')">
              View Profile
            </a>
          </div>
        </div>
        
        <div class="team-item">
          <img src="images/jello.jpeg" alt="jello">
          <h3>Front End Developer</h3>
          <p><b>Name:</b> John Jello P. Garcia</p>
          <p><b>Email:</b> jjgarcia@kld.edu.ph</p>
          <p><b>Contact No:</b> 09675718822</p>
          <div class="social-links1">
            <a href="#" class="social-link" onclick="showProfile('John Jello P. Garcia')">
              View Profile
            </a>
          </div>
        </div>
        
        <div class="team-item">
          <img src="images/gay.jpeg" alt="gayo">
          <h3>BPM</h3>
          <p><b>Name:</b> Jaspher Gayo</p>
          <p><b>Email:</b> jgayo@kld.edu.ph</p>
          <p><b>Contact No:</b> 09107151583</p>
          <div class="social-links1">
            <a href="#" class="social-link" onclick="showProfile('Jaspher Gayo')">
              View Profile
            </a>
          </div>
        </div>
        
        <div class="team-item">
          <img src="images/ash1.jpg" alt="Ash">
          <h3>System Analyst</h3>
          <p><b>Name:</b> Ashley Jhoreen B. Gregorio</p>
          <p><b>Email:</b> ajgregorio@kld.edu.ph</p>
          <p><b>Contact No:</b> 09614553320</p>
          <div class="social-links1">
            <a href="#" class="social-link" onclick="showProfile('Ashley Jhoreen B. Gregorio')">
              View Profile
            </a>
          </div>
        </div>
      </div>
      <button class="carousel-btn prev">&#10094;</button>
      <button class="carousel-btn next">&#10095;</button>
    </div>
  </section>

  <section id="howItWorks">
  <h2>How It Works</h2>
  <p>
    Follow these simple steps to record and manage violations easily using our QR Violation Recorder.
  </p>

  <div class="steps" id="stepsContainer">
    <!-- Steps will be inserted by JavaScript -->
  </div>

  <script>
    const stepsData = [
      { title: 'Scan QR Code', description: 'Scan the QR code to open the violation form instantly.' },
      { title: 'Fill Out Form', description: 'Provide complete details about the violation and submit.' },
      { title: 'Record Saved', description: 'The system securely stores the violation for review.' },
      { title: 'Admin Review', description: 'Admins can review, approve, and take necessary action.' }
    ];

    const stepsContainer = document.getElementById('stepsContainer');

    stepsData.forEach((step, index) => {
      const card = document.createElement('div');
      card.className = 'step-card';
      card.innerHTML = `
        <div class="step-number">${index + 1}</div>
        <h3>${step.title}</h3>
        <p>${step.description}</p>
      `;
      stepsContainer.appendChild(card);
    });
  </script>
</section>
  
  <div id="profileModal" class="modal" style="display: none; position: fixed; z-index: 1000; left: 0; top: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.5);">
    <div style="background-color: white; margin: 10% auto; padding: 20px; border-radius: 10px; width: 80%; max-width: 500px; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
      <h2 id="modalTitle" style="color: #1b5e20; margin-bottom: 15px;">Profile Details</h2>
      <p id="modalContent">Profile information will appear here.</p>
      <button onclick="closeModal()" style="background-color: #dc3545; color: white; border: none; padding: 8px 16px; border-radius: 5px; cursor: pointer; margin-top: 15px;">Close</button>
    </div>
  </div>
  <section class="feature-section">
  <div class="container px-4 py-5 feature-content">
    <h2 class="pb-2 border-bottom text-white">Amazing Features to Record and Manage Violations</h2>

    <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">

      <!-- Left Side Title -->
      <div class="col d-flex flex-column align-items-start gap-2">
        <h2 class="fw-bold text-white">
          Easily Record, Track, and Manage Violations with QR Codes
        </h2>
        <p class="text-light">
        Easily Record, Track, and Manage Violations with QR Codes
        With our system, reporting violations becomes faster and more efficient. Scan a QR code, fill in details, and let the system do the rest. 
        Simplify documentation and improve accountability in just a few steps.
        </p>
        <a href="violation.php" class="btn btn-primary btn-lg">Get Started</a>
      </div>

      <!-- Right Side Features -->
      <div class="col">
        <div class="row row-cols-1 row-cols-sm-2 g-4">

          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
              <i class="bi bi-collection"></i>
            </div>
            <h4 class="fw-semibold mb-0 text-white">Quick QR Scanning</h4>
            <p class="text-light">Instantly scan unique QR codes to identify violations and record details on the spot.</p>
          </div>

          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
              <i class="bi bi-gear-fill"></i>
            </div>
            <h4 class="fw-semibold mb-0 text-white">Automated Record Storage</h4>
            <p class="text-light">All submitted reports are securely stored and organized in the database for easy tracking and retrieval..</p>
          </div>

          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
              <i class="bi bi-speedometer"></i>
            </div>
            <h4 class="fw-semibold mb-0 text-white">Real-Time Monitoring</h4>
            <p class="text-light">Admins can view, manage, and update violation records in real time through a centralized dashboard.</p>
          </div>

          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
              <i class="bi bi-table"></i>
            </div>
            <h4 class="fw-semibold mb-0 text-white">Detailed Reports</h4>
            <p class="text-light">Generate clear and organized reports for analysis, audits, or administrative action with just a few clicks.</p>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>
  <?php include 'footer.php'; ?>
  <script>

    const slide = document.querySelector('.carousel-slide');
    const slides = document.querySelectorAll('.team-item');
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

   
    const menuToggle = document.querySelector('.menu-toggle');
    const nav = document.querySelector('header nav');

    if (menuToggle && nav) {
      menuToggle.addEventListener('click', () => {
        nav.classList.toggle('show');
      });
    }


    showSlide(index);


    function setActiveNavLink() {

      const currentHash = window.location.hash;
      const currentPath = window.location.pathname;
      

      document.querySelectorAll('nav a').forEach(link => {
        link.classList.remove('active');
      });
      
   
      if (currentHash === '#about') {
        document.getElementById('about-link').classList.add('active');
      } else if (currentPath.includes('faqs.php')) {
        document.getElementById('faqs-link').classList.add('active');
      } else if (currentPath.includes('violation.php')) {
        document.getElementById('profile-link').classList.add('active');
      } else {
       
        document.getElementById('home-link').classList.add('active');
      }
    }

    
    document.addEventListener('DOMContentLoaded', setActiveNavLink);
    
    
    window.addEventListener('hashchange', setActiveNavLink);

   
    function showProfile(name) {
      const modal = document.getElementById('profileModal');
      const modalTitle = document.getElementById('modalTitle');
      const modalContent = document.getElementById('modalContent');
      

      modalTitle.textContent = `${name} - Profile`;
      modalContent.innerHTML = `
        <p><strong>Role:</strong> ${getRole(name)}</p>
        <p><strong>Email:</strong> ${getEmail(name)}</p>
        <p><strong>Contact:</strong> ${getContact(name)}</p>
        <p><strong>Bio:</strong> ${getBio(name)}</p>
      `;
      
      modal.style.display = 'block';
    }

    function closeModal() {
      document.getElementById('profileModal').style.display = 'none';
    }

   
    function getRole(name) {
      const roles = {
        'Faustino, Angelo Brian R.': 'Back End Developer',
        'Aira S. Galusong': 'Admin',
        'John Jello P. Garcia': 'Front End Developer',
        'Jaspher Gayo': 'BPM (Business Process Manager) ',
        'Ashley Jhoreen B. Gregorio': 'System Analyst'
      };
      return roles[name] || 'Team Member';
    }

    function getEmail(name) {
      const emails = {
        'Faustino, Angelo Brian R.': 'abfaustino@kld.edu.ph',
        'Aira S. Galusong': 'agalusong@kld.edu.ph',
        'John Jello P. Garcia': 'jjgarcia@kld.edu.ph',
        'Jaspher Gayo': 'jgayo@kld.edu.ph',
        'Ashley Jhoreen B. Gregorio': 'ajgregorio@kld.edu.ph'
      };
      return emails[name] || 'email@kld.edu.ph';
    }

    function getContact(name) {
      const contacts = {
        'Faustino, Angelo Brian R.': '09363587545',
        'Aira S. Galusong': '09916941542',
        'John Jello P. Garcia': '09675718822',
        'Jaspher Gayo': '09107151583',
        'Ashley Jhoreen B. Gregorio': '09614553320'
      };
      return contacts[name] || 'Contact information';
    }

    function getBio(name) {
      const bios = {
        'Faustino, Angelo Brian R.': 'Angelo works on the server side, managing databases, system logic, and ensuring everything runs securely and efficiently.',
        'Aira S. Galusong': 'Aira oversees system management, user access, and maintains the smooth and secure operation of the platform.',
        'John Jello P. Garcia': 'Jello analyzes business needs and creates system plans that help improve processes and solve technical challenges. ',
        'Jaspher Gayo': 'Jaspher focuses on optimizing business workflows, making operations more efficient and well-organized.',
        'Ashley Jhoreen B. Gregorio': 'Ashley analyzes business needs and creates system plans that help improve processes and solve technical challenges. '
      };
      return bios[name] || 'Team member contributing to the QR Violation Recorder project.';
    }

  
    window.addEventListener('click', function(event) {
      const modal = document.getElementById('profileModal');
      if (event.target === modal) {
        closeModal();
      }
    });
  </script>
  

  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">


  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init();


    
  </script>



<script>
  const authButton = document.getElementById('authButton');
  const isLoggedIn = localStorage.getItem('isLoggedIn') === 'true';
  const email = localStorage.getItem('email');

  if (isLoggedIn && email) {
    authButton.textContent = email;
    authButton.onclick = () => {
      const confirmLogout = confirm(`Are you sure you want to log out, ${email}?`);
      if (confirmLogout) {
        localStorage.removeItem('isLoggedIn');
        localStorage.removeItem('email');
        window.location.href = 'logout.php';
      }
    };
  } else {
    authButton.textContent = 'Login';
    authButton.onclick = () => {
      window.location.href = 'login.php';
    };
  }
</script>




</body>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="collection" viewBox="0 0 16 16">
    <path d="M2 2h12v12H2z"/>
  </symbol>
  <symbol id="gear-fill" viewBox="0 0 16 16">
    <path d="M8 1l2 4h4l-3 3 1 4-4-2-4 2 1-4-3-3h4z"/>
  </symbol>
  <symbol id="speedometer" viewBox="0 0 16 16">
    <path d="M8 3a5 5 0 1 1 0 10A5 5 0 0 1 8 3z"/>
  </symbol>
  <symbol id="table" viewBox="0 0 16 16">
    <path d="M1 2h14v12H1z"/>
  </symbol>
</svg>

</html>