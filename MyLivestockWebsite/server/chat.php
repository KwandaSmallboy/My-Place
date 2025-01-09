<?php
session_start();
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message = $_POST['message'];
    $response = [
        "response" => "Thank you for your message! Our team will get back to you soon.",
        "timestamp" => date('Y-m-d H:i:s'),
    ];
    echo json_encode($response);
    exit;
}
?>
