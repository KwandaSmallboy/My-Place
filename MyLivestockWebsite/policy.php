<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Policy</title>
  <link rel="stylesheet" href="styles.css">
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
        <li><a href="contact.php">Contact Us</a></li>
        <!-- PHP to toggle links based on session -->
        <?php if (isset($_SESSION['user_id'])): ?>
          <li><a href="dashboard.php">Dashboard</a></li>
        <?php endif; ?>
      </ul>
    </nav>
  </header>

  <main class="policy-page">
    <h1>Website Policy</h1>
    <section>
      <h2>Privacy Policy</h2>
      <p>
        We value your privacy. Any personal information you provide on this website will be kept confidential and used solely for the purpose of fulfilling your orders, inquiries, and improving your experience. We do not share your data with third parties without your consent, except as required by law.
      </p>
    </section>

    <section>
      <h2>Terms of Use</h2>
      <p>
        By using this website, you agree to comply with the terms outlined here. Any misuse of the website, including fraudulent purchases, will result in immediate suspension of your account. We reserve the right to update these terms at any time.
      </p>
    </section>

    <section>
      <h2>Refund Policy</h2>
      <p>
        If you are unsatisfied with your purchase, you may request a refund within 7 days of receiving your livestock. The livestock must be returned in good health. Refunds are subject to review and approval.
      </p>
    </section>

    <section>
      <h2>Animal Welfare Policy</h2>
      <p>
        We are committed to ensuring the humane treatment of all livestock. Our animals are raised in a healthy, stress-free environment, with proper care, nutrition, and medical attention.
      </p>
    </section>

    <section>
      <h2>Disclaimer</h2>
      <p>
        While we strive to provide accurate information on this website, we cannot guarantee the accuracy or reliability of all content. Pricing and availability are subject to change without prior notice.
      </p>
    </section>
  </main>

  <footer>
    <p>&copy; 2024 Farm Fresh Livestock. All Rights Reserved.</p>
  </footer>
</body>
</html>