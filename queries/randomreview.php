<?php
function getRandomReview() {

   require(__DIR__ . '/../inc/config.php');


    $conn = new mysqli($host, $user, $pass, $db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT fname, lname, review, rating FROM reviews ORDER BY RAND() LIMIT 1";
    $result = $conn->query($sql);

    $randomReview = null;
    if ($result && $result->num_rows > 0) {
        $randomReview = $result->fetch_assoc();
    }

    $conn->close();
    return $randomReview; 
}
?>
