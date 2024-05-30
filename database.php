<?php

$servername = "ITECA project";
$username = "root";
$password = "Project@251002";
$dbname = "tracker_db";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("". $conn->connect_error);
}

require_once 'database.php';

// Query to fetch users
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

// Display user data
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "User ID: " . $row["user_id"] . "<br>";
        echo "Username: " . $row["username"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        echo "<br>";
    }
} else {
    echo "No users found.";
}

// Close the database connection
$conn->close();