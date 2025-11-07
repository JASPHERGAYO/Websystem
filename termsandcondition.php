<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QR Violation Recorder | Data Privacy & FAQs</title>
  <link rel="stylesheet" href="css/terms.css">
</head>
<body>


  <header>
    <div class="logo">
      <img src="images/logo.png" alt="School Logo" style="height: 40px;">
      <span><b>Kolehiyo ng Lungsod ng Dasmariñas</b></span>
    </div>
     <div class="menu-toggle">&#9776;</div> 
    <nav>
      
  
      <button type="button" onclick="window.location.href='login.php'" class="logout-btn">Login</button>
    </nav>
  </header>
  
  <?php include 'header.php'; ?>
  <main class="page-container">
 



    <section class="faqs">
  <h2>Terms and Conditions</h2>
  <p><strong>Effective Date:</strong> October 21, 2025</p>
  <p>
    Welcome to <strong>QrViolationRecorder</strong>, a student project created solely for educational purposes within 
    <strong>Kolehiyo ng Lungsod ng Dasmariñas / ISASEC</strong>. By using this website, you agree to comply with and be bound by 
    the following Terms and Conditions. Please read them carefully.
  </p>

  <div class="faq-item">
    <button class="faq-question">1. Purpose of the Website</button>
    <div class="faq-answer">
      QrViolationRecorder is a student-developed system designed to record and monitor student rule violations using QR codes.
      The system is managed by authorized school personnel, such as guards, and is reviewed by ISASEC (Internal Security and Student Affairs Executive Committee)
      during scheduled violation checking days.<br><br>
      This platform is a <em>student project</em> and not an official disciplinary or legal system. 
      It is used for <em>academic demonstration purposes only</em>.
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question">2. Who Can Use This Website</button>
    <div class="faq-answer">
      Only authorized users (e.g., guards, ISASEC members, and assigned staff) may log in and record or review violation data. 
      Students may be referenced in the system but do not have direct access unless specified by a school administrator.
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question">3. How It Works</button>
    <div class="faq-answer">
      • <strong>QR Code Use:</strong> Each student is assigned a unique QR code.<br>
      • <strong>Violation Recording:</strong> School guards scan QR codes and log any observed violations (e.g., tardiness, dress code, misconduct).<br>
      • <strong>Review by ISASEC:</strong> On designated violation checking days, ISASEC reviews the data to identify repeat offenses or serious concerns.<br><br>
      All entries are stored securely and are intended only for internal academic review.
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question">4. Data Privacy and Confidentiality</button>
    <div class="faq-answer">
      • <strong>Student Information:</strong> Any student data collected (such as names, IDs, or violation history) is handled responsibly 
      and stored within the school’s secure system.<br>
      • <strong>Access:</strong> Only authorized personnel (guards, ISASEC members, or supervising teachers) may access student violation records.<br>
      • <strong>Confidential Use:</strong> Data is not shared outside the school or used for any commercial or external purposes.<br><br>
      <em>Note:</em> This website does not collect sensitive personal data such as addresses, contact numbers, or health records.
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question">5. Limitations and Disclaimer</button>
    <div class="faq-answer">
      • QrViolationRecorder is <em>not</em> a replacement for official disciplinary systems.<br>
      • It is a prototype or working model created for academic demonstration only.<br>
      • The website <em>does not impose</em> actual disciplinary actions; it only <em>records potential violations</em> as input by designated personnel.<br>
      • All data may be reset, deleted, or modified by the developers as part of ongoing project development.
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question">6. User Responsibilities</button>
    <div class="faq-answer">
      If you are a guard, faculty member, or ISASEC officer using this site, you agree to:<br>
      • Use the system ethically and fairly.<br>
      • Record violations honestly.<br>
      • Not misuse access privileges or falsify student data.<br><br>
      Misuse of this platform may result in restricted access or disciplinary measures within the project context.
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question">7. Project Ownership and Development</button>
    <div class="faq-answer">
      QrViolationRecorder is developed by students of <strong>[School/Department Name]</strong> as part of an academic requirement.
      All content, code, and structure of the site are property of the development team and supervised by 
      <strong>Mark Christopher Borja</strong>.<br><br>
      This site is not published or maintained for public or commercial use.
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question">8. Changes to These Terms</button>
    <div class="faq-answer">
      These Terms and Conditions may be updated as the project evolves. All updates will be posted on this page with an updated effective date.
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question">9. Contact and Questions</button>
    <div class="faq-answer">
      For questions, feedback, or concerns regarding QrViolationRecorder, please contact the project team or the supervising instructor at:
      <strong>[Insert Contact Info – e.g., school email or teacher’s contact]</strong>.
    </div>
  </div>
</section>


  </main>

  <script>
    document.querySelectorAll('.faq-question').forEach(button => {
      button.addEventListener('click', () => {
        const faqItem = button.parentElement;
        faqItem.classList.toggle('active');
      });
    });
  </script>
  <script>
  const menuToggle = document.querySelector('.menu-toggle');
  const nav = document.querySelector('header nav');

  menuToggle.addEventListener('click', () => {
    nav.classList.toggle('show');
  });
</script>
<footer id="contact">
<?php include 'footer.php'; ?>
</footer>
</body>

</html>