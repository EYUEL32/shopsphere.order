<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel</title>
    <link rel="shortcut icon" type="image" href="./image/logo2.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
</head>
<body>

    <!-- top navbar -->
    <div class="top-navbar">
        <div class="top-icons">
            <i class="fa-brands fa-square-whatsapp"></i>
            <i class="fa-brands fa-telegram"></i>
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-instagram"></i>
        </div>
        <div class="other-links">
        <button id="btn-logout"><a href="logout.php">Logout</a></button>
            <i class="fa-solid fa-user"></i>
        </div>
    </div>
    <!-- top navbar -->

    <div class="home-section">
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg" id="navbar">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="fa-solid fa-bars" style="color: white;"></i></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="gallery.php">Gallery</a>
                  </li>
                  
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="hotelbooking.php">Hotel Reservation</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="carrent.php">Car rental</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="attraction.php">Attraction place ticketl</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                  </li>
             
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit" id="search-btn">Search</button>
                </form>
              </div>
            </div>
          </nav>
        <!-- navbar -->       <?php
// hotelSearch.php

// Connect to the database
$servername = "localhost"; // Your MySQL server
$username = "root";        // Your MySQL username
$password = "new_password";            // Your MySQL password
$dbname = "hotel_booking"; // Your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the city from the query parameter
$city = isset($_GET['city']) ? $_GET['city'] : '';

// Prepare the SQL query to search for hotels in the specified city
$sql = "SELECT * FROM hotels WHERE city LIKE ?";  // Using prepared statements to avoid SQL injection
$stmt = $conn->prepare($sql);
$searchCity = "%" . $city . "%";  // Search pattern with wildcard
$stmt->bind_param("s", $searchCity);  // Bind the city parameter

// Execute the query
$stmt->execute();
$result = $stmt->get_result();

// Check if any hotels are found
if ($result->num_rows > 0) {
    // Output the results
    while ($row = $result->fetch_assoc()) {
        // Assuming your images are stored in a folder named 'images'
        $imagePath = "images/" . $row['mainImage'];  // The 'mainImage' column stores image filename
        
        echo "<div class='hotel'>";
        echo "<h2>" . $row['hotelName'] . "</h2>";
        echo "<p>City: " . $row['city'] . "</p>";
        echo "<p>Price: birr" . $row['price'] . "</p>";
        echo "<p>Description: " . $row['hotelDesc'] . "</p>";
        
        // Display the hotel image
        echo "<div class='hotel-image'>";
        echo "<img src='" . $imagePath . "' alt='" . $row['hotelName'] . "' style='width:200px; height:auto;'>";
        echo "</div>";
        
        // Add the 'View Hotel Details' button
        echo "<div class='col-sm-12 view'>";
        echo "<a href='hotelDetails.php?hotelId=" . $row['hotelID'] . "'><input type='button' class='viewDetails' name='viewDetails' value='View Hotel Details'/></a>";
        echo "</div>";

        echo "</div><br>";
    }
} else {
    echo "No hotels found in " . htmlspecialchars($city);
}

// Close the connection
$stmt->close();
$conn->close();
?>
 <?php include 'footer.php'; ?>