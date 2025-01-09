
<?php
$host = "localhost"; // Replace with your database host
$username = "root"; // Replace with your database username
$password = "Smallmfana2*"; // Replace with your database password
$database = "livestock_auth"; // Replace with your database name

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
echo "";
}
error_log("Connection status: " . $conn->connect_error);

?>
