<?php
// hotel_booking_process.php

// Assuming you have a working connection to the database
$conn = new mysqli('localhost', 'root', '', 'hotel_booking_db');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $city = $_POST['city'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];
    $rooms = $_POST['rooms'];
    $guests = $_POST['guests'];

    // Validate the data (e.g., check if dates are valid)
    if (empty($city) || empty($check_in) || empty($check_out) || $rooms <= 0) {
        die('Please fill out all fields correctly.');
    }

    // Fetch available hotels based on search criteria
    $sql = "SELECT * FROM hotels WHERE city = '$city'"; // Add more filters if necessary
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Display available hotels
        while ($row = $result->fetch_assoc()) {
            echo "<div class='hotel'>";
            echo "<h3>" . $row['name'] . "</h3>";
            echo "<p>Price per night: birr" . $row['price'] . "</p>";
            echo "<a href='hotel_details.php?id=" . $row['id'] . "'>View Details</a>";
            echo "</div>";
        }
    } else {
        echo "No hotels found for your selection.";
    }
} else {
    echo "Invalid request.";
}

$conn->close();
?>
