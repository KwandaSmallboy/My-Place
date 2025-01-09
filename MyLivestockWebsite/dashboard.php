<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header class="navbar">
  <img src="images/cow.jpg" alt="Logo" class="logo">
    <h1 class="business-name">Farm Fresh Livestock</h1>
    <nav>
  <ul>
      <li><a href="about.php">About Us</a></li>
      <li><a href="livestock.php">Livestock</a></li>
      <li><a href="farm_map.php">Farm Locations</a></li> <!-- Link to farm map page -->
      <li><a href="contact.php">Contact Us</a></li>
      <li><a href="policy.php">Policy</a></li>
      <a href="server/logout.php">Logout</a>
</ul>
</nav>
  </header>

  <main class="dashboard-container">
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    <section class="background-slideshow">
      <div class="overlay">
      <h1>Welcome to Farm Fresh Livestock</h1>
      <p1>Find premium-quality livestock: cows, goats, and sheep!</p1>
      <a href="livestock.php" class="cta-button">Livestock Availability</a>
    </div>
    </section>

    <section class="slideshow-container">
    <div class="slide fade">
      <img src="images/cow.jpg" alt="Cow">
      <div class="caption">Cow</div>
    </div>
  
    <div class="slide fade">
      <img src="images/goat.jpg" alt="Goat">
      <div class="caption">Goat</div>
    </div>
  
    <div class="slide fade">
      <img src="images/sheep.jpg" alt="Sheep">
      <div class="caption">Sheep</div>
    </div>
  
    <div class="slide fade">
      <img src="images/cow2.jpg" alt="Cow2">
      <div class="caption">Cow</div>
    </div>
  
    <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
    <a class="next" onclick="changeSlide(1)">&#10095;</a>
  </section>

<script src="chat.js"></script>

  <script>


function changeSlide(n) {
  const slides = document.querySelectorAll('.slide');
  slides[slideIndex - 1].style.display = 'none';
  slideIndex += n;
  if (slideIndex > slides.length) {
    slideIndex = 1;
  }
  if (slideIndex < 1) {
    slideIndex = slides.length;
  }
  slides[slideIndex - 1].style.display = 'block';
}

const slideshowContainer = document.querySelector('.background-slideshow');

// Array of background images
const images = [
  'images/cow.jpg',
  'images/goat.jpg',
  'images/sheep.jpg',
  'images/cow2.jpg',
];

// Current index of the image
let currentIndex = 0;

// Function to change the background image
function changeBackground() {
  slideshowContainer.style.backgroundImage = `url('${images[currentIndex]}')`;
  currentIndex = (currentIndex + 1) % images.length; // Loop through images
}

// Start the slideshow
changeBackground(); // Set the first image
setInterval(changeBackground, 3000); // Change image every 3 seconds

  </script>

    <a href="server/logout.php">Logout</a>
  </main>
  <footer>
    <p>&copy; 2024 Farm Fresh Livestock. All Rights Reserved.</p>
  </footer>
</body>
</html>

