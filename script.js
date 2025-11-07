// ===================
// About Us Carousel
// ===================
let profiles = document.querySelectorAll(".profile");
let currentIndex = 0;
const nextBtn = document.querySelector(".next");
const prevBtn = document.querySelector(".prev");

if (nextBtn && prevBtn) {
  nextBtn.addEventListener("click", () => {
    profiles[currentIndex].classList.remove("active");
    currentIndex = (currentIndex + 1) % profiles.length;
    profiles[currentIndex].classList.add("active");
  });

  prevBtn.addEventListener("click", () => {
    profiles[currentIndex].classList.remove("active");
    currentIndex = (currentIndex - 1 + profiles.length) % profiles.length;
    profiles[currentIndex].classList.add("active");
  });
}

// ===================
// QR Code Scanner
// ===================
function startScanner() {
  const video = document.getElementById("preview");
  const resultElement = document.getElementById("scan-result");

  // Use ZXing library for scanning
  const codeReader = new ZXing.BrowserQRCodeReader();

  codeReader.decodeFromVideoDevice(null, video, (result, err) => {
    if (result) {
      resultElement.innerText = "Scan Result: " + result.text;
      codeReader.reset();
    }
  });
}
// ===================
// Homepage Slider
// ===================
let slideIndex = 0;
const slides = document.querySelectorAll(".hero-slider .slides");
const nextSlide = document.querySelector(".hero-slider .next");
const prevSlide = document.querySelector(".hero-slider .prev");

function showSlide(index) {
  slides.forEach((slide, i) => {
    slide.classList.remove("active");
    if (i === index) {
      slide.classList.add("active");
    }
  });
}

function next() {
  slideIndex = (slideIndex + 1) % slides.length;
  showSlide(slideIndex);
}

function prev() {
  slideIndex = (slideIndex - 1 + slides.length) % slides.length;
  showSlide(slideIndex);
}

if (nextSlide && prevSlide) {
  nextSlide.addEventListener("click", next);
  prevSlide.addEventListener("click", prev);
}

// Auto Slide every 5s
setInterval(next, 5000);
