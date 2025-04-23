<?php
// final_booking.php

$conn = new mysqli('localhost', 'root', '', 'hotel_booking_db');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $hotel_id = $_POST['hotel_id'];
    $rooms = $_POST['rooms'];
    $user_id = 1; // Assuming the user is logged in and has an ID

    // Insert booking into the database
    $sql = "INSERT INTO bookings (user_id, hotel_id, rooms) VALUES ('$user_id', '$hotel_id', '$rooms')";
    if ($conn->query($sql) === TRUE) {
        echo "Booking successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
