<?php
include 'dbconnection.php';

// Fetch farm locations and available livestock from the database
$query = "SELECT name, lat, lng, livestock, description FROM farms";
$result = $conn->query($query);

$farms = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $farms[] = $row;
    }
}

echo json_encode($farms);
$conn->close();
?>
