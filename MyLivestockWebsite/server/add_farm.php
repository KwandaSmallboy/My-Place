<?php
include 'dbconnection.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $lat = $_POST['lat'];
    $lng = $_POST['lng'];
    $livestock = $_POST['livestock'];
    $description = $_POST['description'];

    // Validate inputs
    if (!empty($name) && !empty($lat) && !empty($lng)) {
        $stmt = $conn->prepare("INSERT INTO farms (name, lat, lng, livestock, description) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $name, $lat, $lng, $livestock, $description);

        if ($stmt->execute()) {
            header("Location: ../farm_map.php"); // Redirect to the farm map page
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Please provide all the required fields.";
    }
    
    $conn->close();
}
?>
