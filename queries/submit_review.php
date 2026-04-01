<?php
require(__DIR__ . '/../inc/config.php');

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $rating = (int)$_POST['rating'];
    $review = $_POST['review'];

    $stmt = $conn->prepare("INSERT INTO reviews (fname, lname, rating, review) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssis", $fname, $lname, $rating, $review);
    $stmt->execute();
    $stmt->close();
    $conn->close();

  
    header("Location: ../index.php");
    exit;  
}
?>