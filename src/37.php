<?php
// Initialize the session
session_start();

// Check if user is authenticated
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    // If not authenticated, redirect to login page
    header("Location: https://example.com/login");
    exit();
}

// Define the path to your database
$dbPath = "path/to/your/database.db";

// Connect to the database
$conn = new mysqli("localhost", "username", "password", "database_name");

// Check if connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user information from the session
$user_id = $_SESSION["user_id"];

// SQL query to retrieve user information
$sql = "SELECT * FROM users WHERE user_id = :user_id";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);

$result = $stmt->execute();

if ($result) {
    // If the query is successful, fetch the user's data
    if ($stmt->num_rows > 0) {
        while ($row = $stmt->fetch_assoc()) {
            echo "User ID: " . $row["user_id"] . "\n";
            echo "Username: " . $row["username"] . "\n";
            echo "Email: " . $row["email"] . "\n";
        }
    } else {
        echo "No user found for user_id: " . $user_id . ".";
    }
} else {
    echo "Query failed.";
}

// Close the database connection
$conn->close();
