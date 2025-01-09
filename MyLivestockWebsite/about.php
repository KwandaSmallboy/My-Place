<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header class="navbar">
    <img src="images/cow.jpg" alt="Logo" class="logo">
    <h1 class="business-name">Farm Fresh Livestock</h1>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="livestock.php">Livestock</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="policy.php">Policy</a></li>
        <!-- PHP to toggle links based on session -->
        <?php if (isset($_SESSION['user_id'])): ?>
          <li><a href="dashboard.php">Dashboard</a></li>
        <?php endif; ?>
      </ul>
    </nav>
  </header>

  <main class="about-page">
   <h2>About Us</h2>
    <section>
      <p>
      At Farm Fresh Livestock, we specialize in raising top-quality Angus Cows, Boer Goats, and Merino Sheep. Our livestock is bred and cared for with the utmost dedication, ensuring optimal health, genetics, and performance.
      </p>
    </section>

    <section>
      <p>
      We take pride in our ethical farming practices, providing a natural and nurturing environment for our animals. This approach not only enhances the well-being of our livestock but also ensures superior quality for our customers.
      </p>
    </section>

    <section>
      <p>
      With a focus on excellence and customer satisfaction, Farm Fresh Livestock is your trusted partner for premium livestock. Choose us for reliable service, expert care, and livestock that meets the highest standards.
      </p>
    </section>
  </main>

  <footer>
    <p>&copy; 2024 Farm Fresh Livestock. All Rights Reserved.</p>
  </footer>
</body>
</html>