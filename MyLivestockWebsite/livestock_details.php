<?php
// Start the session
session_start();

// Include the database connection file
include 'server/dbconnection.php';

// Check if the ID parameter is set in the URL
if (!isset($_GET['id'])) {
    echo "Livestock ID not provided.";
    exit;
}

// Get the livestock ID from the URL
$livestock_id = intval($_GET['id']);

// Fetch the details of the selected livestock from the database
$query = "SELECT name, breed, price, image, type, description, quantity FROM livestock WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $livestock_id);
$stmt->execute();
$result = $stmt->get_result();

// Check if the livestock exists
if ($result->num_rows === 0) {
    echo "Livestock not found.";
    exit;
}

// Fetch the livestock data
$livestock = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livestock Details</title>
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

    <main class="livestock-details-page">
        <section class="livestock-details">
            <h2><?= htmlspecialchars($livestock['name']) ?></h2>
            <img src="<?= htmlspecialchars($livestock['image']) ?>" alt="<?= htmlspecialchars($livestock['name']) ?>">
            <p><strong>Breed:</strong> <?= htmlspecialchars($livestock['breed']) ?></p>
            <p><strong>Price:</strong> R<?= htmlspecialchars($livestock['price']) ?></p>
            <p><strong>Quantity Available:</strong> <?= htmlspecialchars($livestock['quantity']) ?></p>
            <p><strong>Description:</strong> <?= nl2br(htmlspecialchars($livestock['description'])) ?></p>
        </section>

        <section class="action-buttons">
            <a href="livestock.php" class="button">Back to Livestock</a>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Farm Fresh Livestock. All Rights Reserved.</p>
    </footer>
</body>
</html>

<?php
// Close the database connection
$stmt->close();
$conn->close();
?>
