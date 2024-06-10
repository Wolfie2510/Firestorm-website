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
$productName = $_POST['productName'];
$productDescription = $_POST['productDescription'];
$productPrice = $_POST['productPrice'];

// Prepare and bind the SQL statement
$stmt = $conn->prepare("INSERT INTO product (productName, productDescription, productPrice) VALUES (?, ?, ?)");
$stmt->bind_param("ssd", $productName, $productDescription, $productPrice);

// Execute the statement
if ($stmt->execute()) {
    echo "New record created successfully in the product table";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>