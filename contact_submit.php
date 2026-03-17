<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = new mysqli("localhost", "root", "", "green_nflora");

if ($conn->connect_error) {
    header("Location: contact.php?status=error");
    exit();
}

$fullname = $_POST['fullname'] ?? '';
$email    = $_POST['email'] ?? '';
$phone    = $_POST['phone'] ?? '';
$message  = $_POST['message'] ?? '';

$stmt = $conn->prepare("INSERT INTO messages (fullname, email, phone, message) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $fullname, $email, $phone, $message);

if ($stmt->execute()) {
    header("Location: contact.php?status=success");
} else {
    header("Location: contact.php?status=error");
}

$stmt->close();
$conn->close();
exit();
?>