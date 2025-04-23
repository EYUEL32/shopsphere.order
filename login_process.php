<?php
// Database connection
$servername = "localhost";
$usernameConn = "root";
$passwordConn = "new_password";
$dbname = "hotel_booking";

// Create connection
$conn = new mysqli($servername, $usernameConn, $passwordConn, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect user input from the login form
$username = $_POST['username'];
$password = $_POST['password']; // Plain text password

// Retrieve the user record from the database
$getUserDataSQL = "SELECT * FROM users WHERE Username = '$username'";
$getUserDataQuery = $conn->query($getUserDataSQL);
$getResult = $getUserDataQuery->fetch_assoc();

if ($getResult) {
    // Check if the password matches the one stored in the database
    if ($password == $getResult['Password']) {
        // Password is correct
        session_start();
        $_SESSION['valid'] = true;
        $_SESSION['username'] = $username;
        echo "Login successful. Welcome, " . $username . "!";
        // Redirect to dashboard (optional)
        header("Location: dashboard.php");
        exit;
    } else {
        echo "Incorrect password. Please try again.";
    }
} else {
    echo "Username not found.";
}

$conn->close();
?>
