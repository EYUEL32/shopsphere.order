<?php
// Include the database connection
include('db_connect.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $hotelName = $_POST['hotelName'];
    $date = $_POST['date'];
    $username = $_POST['username'];
    $cancelled = $_POST['cancelled'];

    // SQL query to insert data
    $sql = "INSERT INTO hotelbookings (hotelName, date, username, cancelled) 
            VALUES ('$hotelName', '$date', '$username', '$cancelled')";

    // Execute the query and check if it was successful
    if ($conn->query($sql) === TRUE) {
        echo "New booking added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!-- HTML Form to Add Booking -->
<form method="post" action="add_booking.php">
    <label for="hotelName">Hotel Name:</label>
    <input type="text" id="hotelName" name="hotelName"><br><br>
    
    <label for="date">Date:</label>
    <input type="date" id="date" name="date"><br><br>
    
    <label for="username">Username:</label>
    <input type="text" id="username" name="username"><br><br>
    
    <label for="cancelled">Cancelled:</label>
    <select id="cancelled" name="cancelled">
        <option value="0">No</option>
        <option value="1">Yes</option>
    </select><br><br>

    <input type="submit" value="Submit">
</form>
