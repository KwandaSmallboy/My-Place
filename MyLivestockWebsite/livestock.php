<?php
// Start session
session_start();

// Include database connection
include 'server/dbconnection.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Livestock - Farm Fresh Livestock</title>
  <link rel="stylesheet" href="styles.css">
  <script defer src="script.js"></script>
</head>
<body>
  <header class="navbar">
    <img src="images/cow.jpg" alt="Logo" class="logo">
    <h1 class="business-name">Farm Fresh Livestock</h1>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="policy.php">Policy</a></li>
        <?php if (isset($_SESSION['user_id'])): ?>
          <li><a href="dashboard.php">Dashboard</a></li>
          <li><a href="server/logout.php">Logout</a></li>
        <?php else: ?>
          <li><a href="signup.html">Sign Up</a></li>
          <li><a href="login.html">Login</a></li>
        <?php endif; ?>
      </ul>
    </nav>
  </header>

  <main>
    <h1>Available Livestock</h1>
    <div class="filter-buttons">
      <button onclick="filterLivestock('all')">All</button>
      <button onclick="filterLivestock('cow')">Cows</button>
      <button onclick="filterLivestock('goat')">Goats</button>
      <button onclick="filterLivestock('sheep')">Sheep</button>
    </div>

    <?php
    // Fetch livestock data
    $query = "SELECT id, name, breed, price, image, type FROM livestock";
    $result = $conn->query($query);

    if ($result->num_rows > 0): ?>
      <div class="livestock-grid">
        <?php while ($row = $result->fetch_assoc()): ?>
          <div class="livestock-item" data-type="<?= htmlspecialchars($row['type']) ?>">
            <a href="livestock_details.php?id=<?= $row['id'] ?>">
              <img src="<?= htmlspecialchars($row['image']) ?>" alt="<?= htmlspecialchars($row['name']) ?>">
              <h3><?= htmlspecialchars($row['name']) ?></h3>
              <p>Breed: <?= htmlspecialchars($row['breed']) ?></p>
              <p>Price: R<?= htmlspecialchars($row['price']) ?></p>
            </a>
          </div>
        <?php endwhile; ?>
      </div>
    <?php else: ?>
      <p>No livestock available at the moment. Please check back later.</p>
    <?php endif; ?>
  </main>

  <footer>
    <p>&copy; 2024 Farm Fresh Livestock. All Rights Reserved.</p>
  </footer>

  <script>
    // JavaScript for filtering livestock
    function filterLivestock(type) {
      const items = document.querySelectorAll('.livestock-item');
      items.forEach(item => {
        if (type === 'all' || item.dataset.type === type) {
          item.style.display = 'block';
        } else {
          item.style.display = 'none';
        }
      });
    }
  </script>
</body>
</html>
