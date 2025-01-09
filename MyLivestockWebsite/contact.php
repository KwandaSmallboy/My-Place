<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="chat.css">
</head>
<body>
  <header class="navbar">
    <img src="images/cow.jpg" alt="Logo" class="logo">
    <h1 class="business-name">Farm Fresh Livestock</h1>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="livestock.php">Livestock</a></li>
        <li><a href="policy.php">Policy</a></li>
        <!-- PHP to toggle links based on session -->
        <?php if (isset($_SESSION['user_id'])): ?>
          <li><a href="dashboard.php">Dashboard</a></li>
        <?php endif; ?>
      </ul>
    </nav>
  </header>

  <main>
    <section class="contact">
      <h1>Contact Us</h1>
      <h2>Our Contact Details</h2>
      <p><strong>Email:</strong> support@farmfreshlivestock.com</p>
      <p><strong>Phone:</strong> +27 31 002 9930</p>
      <p><strong>Address:</strong> Durban, KwaZulu-Natal, South Africa</p>
      <p><strong>Facebook:</strong> <a href="facebook.com">Farm Fresh Livestock</a></p>
      <p><strong>Instagram:</strong> <a href="instagram.com">farm_fresh_livestock</a></p>
    </section>


      <div id="chat-widget">
      <div id="chat-header">👋 Hi there! Need help?</div>
      <div id="chat-messages"></div>
      <form id="chat-form">
        <input type="text" id="chat-input" placeholder="Type your message..." autocomplete="off" />
        <button type="submit">Send</button>
      </form>
      </div>
  </main>

  <footer>
    <p>&copy; 2024 Farm Fresh Livestock. All Rights Reserved.</p>
  </footer>
  <script src="chat.js"></script>
</body>
</html>