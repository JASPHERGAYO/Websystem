<footer>
  <style>
    footer {
      background-color: #012405ff;
      color: #ddd;
      font-family: "Poppins", sans-serif;
      padding: 20px 0 10px;
        margin-top: -5px; 
    }

    .footer-container {
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      gap: 15px;
      padding: 0 20px;
    }

    .footer-section {
      flex: 1;
      min-width: 220px;
    }

    .footer-section h4 {
      color: #fff;
      margin-bottom: 15px;
      font-size: 16px;
      font-weight: 600;
    }

    .footer-section ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .footer-section ul li {
      margin: 8px 0;
    }

    .footer-section ul li a {
      color: #bbb;
      text-decoration: none;
      transition: color 0.3s ease;
      font-size: 14px;
    }

    .footer-section ul li a:hover {
      color: #f9b233;
    }

    .footer-section p {
      font-size: 14px;
      color: #bbb;
      line-height: 1.6;
      margin-bottom: 8px;
    }

    .footer-section .highlight-btn {
      background-color: #f9b233;
      color: #002912ff;
      border: none;
      padding: 8px 16px;
      border-radius: 4px;
      text-decoration: none;
      font-size: 14px;
      font-weight: 600;
      display: inline-block;
      margin-top: 5px;
      transition: background 0.3s ease;
    }

    .footer-section .highlight-btn:hover {
      background-color: #ffcb4c;
    }

    .footer-bottom {
      text-align: center;
      margin-top: 30px;
      border-top: 1px solid #333;
      padding-top: 15px;
      font-size: 13px;
      color: #aaa;
    }

    @media (max-width: 768px) {
      .footer-container {
        flex-direction: column;
        text-align: center;
      }

      .footer-section {
        min-width: 100%;
      }
    }
  </style>

  <div class="footer-container">
    <div class="footer-section">
      <h4>Quick Links</h4>
      <ul>
        <li><a href="index.php">Home Page</a></li>
        <li><a href="faqs.php">Data Privacy & Faqs</a></li>
        <li><a href="violation.php">Profile/Status</a></li>
        <li><a href="https://www.facebook.com/profile.php?id=61582462404426">Facebook</a></li>
      </ul>
    </div>

    <div class="footer-section">
      <h4>Updates</h4>
      <ul>
        <li><a href="index.php#howItWorks">How it works</a></li>
         <li><a href="index.php#feature-section">Features</a></li>
         <div class="footer-map">
      
        <div class="footer-location">
          <a href="https://maps.app.goo.gl/1sx8ytgSfhN5nrXNA" target="_blank">Kolehiyo ng Lungsod ng Dasmariñas</a>
        </div>

        <button class="back-to-top" onclick="scrollToTop()">↑ Back to Top</button>
      </ul>
    </div>

    <div class="footer-section">
      <h4>Quick Contact</h4>
      <p>09363587545 / 09458331060</p>
      <p>qrviolationrecorder@gmail.com</p>
      
   
    </div>

    
  </div>

  <div class="footer-bottom">
    <p>Proudly powered by KLD Research and Innovation Department and Center for Knowledge Management.</p>
    <p>© <?php echo date("Y"); ?> Kolehiyo ng Lungsod ng Dasmariñas. All Rights Reserved.</p>
  </div>

  <script>
function scrollToTop() {
  window.scrollTo({
    top: 0,
    behavior: "smooth" // makes it scroll smoothly
  });
}
</script>
</footer>
