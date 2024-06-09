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
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phoneNr = $_POST['phoneNr'];

// Prepare and bind the SQL statement
$stmt = $conn->prepare("INSERT INTO user (firstName, lastName, email, phoneNr) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $firstName, $lastName, $email, $phoneNr);

// Execute the statement
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>

