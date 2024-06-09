<?php
$host = "localhost";
$username = "id22275543_projectwolf";
$password = "Project@2510";
$dbname = "id22275543_database";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$userId = $_POST['userId'];
$score = $_POST['score'];
$timestamp = $_POST['timestamp'];

// Prepare and bind the SQL statement
$stmt = $conn->prepare("INSERT INTO leaderboard (userId, score, timestamp) VALUES (?, ?, ?)");
$stmt->bind_param("iss", $userId, $score, $timestamp);

// Execute the statement
if ($stmt->execute()) {
    echo "New record created successfully in the leaderboard table";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>