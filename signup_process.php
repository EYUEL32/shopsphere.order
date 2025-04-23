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

// Collect user input from the form
$fullName = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$username = $_POST['username'];
$password = $_POST['password']; // Plain text password
$addressLine1 = $_POST['addressLine1'];
$addressLine2 = $_POST['addressLine2'];
$city = $_POST['city'];
$state = $_POST['state'];

// Hash the password using password_hash (built-in function)
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Check if the username already exists
$checkUserExistSQL = "SELECT * FROM users WHERE Username = '$username'";
$checkUserExistQuery = $conn->query($checkUserExistSQL);
$getResult = $checkUserExistQuery->fetch_assoc();

if ($getResult == NULL) { // No user with the same username
    // Insert new user into the database
    $insertDataSQL = "INSERT INTO users (FullName, EMail, Phone, Username, Password, AddressLine1, AddressLine2, City, State) 
                      VALUES ('$fullName', '$email', '$phone', '$username', '$hashed_password', '$addressLine1', '$addressLine2', '$city', '$state')";
    $insertDataQuery = $conn->query($insertDataSQL);

    if ($insertDataQuery) {
        echo "Sign up successful. You can now log in.";
        // Redirect to login page (optional)
        header("Location: login.php");
        exit;
    } else {
        echo "Sorry, there was an error signing you up. Please try again later.";
    }
} else {
    echo "A user with this username already exists. Please try another username.";
}

$conn->close();
?>
