<?php
// hotel_details.php

$conn = new mysqli('localhost', 'root', '', 'hotel_booking_db');
if (isset($_GET['id'])) {
    $hotel_id = $_GET['id'];

    // Fetch hotel details
    $sql = "SELECT * FROM hotels WHERE id = $hotel_id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $hotel = $result->fetch_assoc();
        echo "<h1>" . $hotel['name'] . "</h1>";
        echo "<p>City: " . $hotel['city'] . "</p>";
        echo "<p>Details: " . $hotel['details'] . "</p>";
        echo "<p>Price per night: birr" . $hotel['price'] . "</p>";
        echo "<form action='final_booking.php' method='POST'>";
        echo "<input type='hidden' name='hotel_id' value='" . $hotel['id'] . "'>";
        echo "<label for='rooms'>Rooms: </label><input type='number' name='rooms' value='1' min='1' required>";
        echo "<button type='submit'>Confirm Booking</button>";
        echo "</form>";
    } else {
        echo "Hotel not found.";
    }
}
$conn->close();
?>
