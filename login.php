<?php
// Database connection parameters
$hostname = 'localhost:3306';
$username = 'root';
$password = '';
$database = 'portfolio';

// Create connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Start the session
session_start();
// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

// SQL query to retrieve user with the provided username and password
$sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User found, login successful
    // Store user information in the session
    $_SESSION['username'] = $username;

     // Set a cookie for additional persistence
     $cookie_name = "user";
     $cookie_value = $username;
     $cookie_expire = time() + (86400 * 30); // 30 days
     setcookie($cookie_name, $cookie_value, $cookie_expire, "/");

    // Redirect to admin.html
    header("Location: a.html");
    exit; // Make sure to exit after the redirect to prevent further execution
} else {
    // No user found with the provided credentials
    echo "Invalid username or password.";
}


$conn->close();
?>
