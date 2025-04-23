<?php
session_start();

// Check if the user is logged in (session variable 'username' should be set)
if (!isset($_SESSION["username"])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit;
}

// Database connection
$servername = "localhost";
$usernameConn = "root";
$passwordConn = "new_password";
$dbname = "hotel_booking";

// Create connection to MySQL database
$conn = new mysqli($servername, $usernameConn, $passwordConn, $dbname);

// Check if successfully connected to the database
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch the user details from the database
$user = $_SESSION["username"];
$profileSQL = "SELECT * FROM `users` WHERE Username='$user'";
$profileQuery = $conn->query($profileSQL);

// Check if the user exists in the database
if ($profileQuery->num_rows > 0) {
    $row = $profileQuery->fetch_assoc();
} else {
    echo "No user found!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard | Tourism Management</title>

    <link href="css/main.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-select.css" rel="stylesheet">
    <link href="css/bootstrap-datetimepicker.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400|Raleway:100,300,400,500|Roboto:100,400,500,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/userDashboard.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/moment-with-locales.js"></script>
    <script src="js/bootstrap-datetimepicker.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
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
  
        
        <!-- home content -->

    <div class="container-fluid">
        <div class="col-sm-12 userDashboard text-center">
         

            <div class="col-sm-12">
                <div class="heading text-center">
                    My Dashboard
                </div>
            </div>

            <div class="col-sm-1"></div>

            <div class="col-sm-3 containerBoxLeft">
                <div class="col-sm-12 menuContainer bottomBorder active">
                    <span class="fa fa-user-o"></span> My Profile
                </div>

                <a href="userDashboardBookings.php">
                    <div class="col-sm-12 menuContainer bottomBorder">
                        <span class="fa fa-copy"></span> My Bookings
                    </div>
                </a>

                <a href="userDashboardETickets.php">
                    <div class="col-sm-12 menuContainer bottomBorder">
                        <span class="fa fa-clone"></span> My E-Tickets
                    </div>
                </a>

                <a href="userDashboardCancelTicket.php">
                    <div class="col-sm-12 menuContainer bottomBorder">
                        <span class="fa fa-close"></span> Cancel Ticket
                    </div>
                </a>

                <a href="userDashboardAccountSettings.php">
                    <div class="col-sm-12 menuContainer">
                        <span class="fa fa-bar-chart"></span> Account Stats
                    </div>
                </a>
            </div>

            <div class="col-sm-7 containerBoxRight text-left">
                <div class="col-sm-12 profile">
                    <div class="col-sm-12 profileWrapper">
                        <span class="tag">Username: </span><span class="content"><?php echo htmlspecialchars($row["Username"]); ?> </span>
                    </div>
                    <div class="col-sm-12 profileWrapper">
                        <span class="tag">Full Name: </span><span class="content"><?php echo htmlspecialchars($row["FullName"]); ?> </span>
                    </div>
                    <div class="col-sm-6 profileWrapper">
                        <span class="tag">E-Mail: </span><span class="content"><?php echo htmlspecialchars($row["EMail"]); ?> </span>
                    </div>
                    <div class="col-sm-6 profileWrapper">
                        <span class="tag">Phone: </span><span class="content"><?php echo htmlspecialchars($row["Phone"]); ?> </span>
                    </div>
                    <div class="col-sm-12 profileWrapper">
                        <span class="tag">Address: </span><span class="content"><?php echo htmlspecialchars($row["AddressLine1"] . ", " . $row["AddressLine2"] . ", " . $row["City"] . ", " . $row["State"]); ?> </span>
                    </div>
                    <div class="col-sm-12 profileWrapper">
                        <span class="tag">Account Created: </span><span class="content"><?php echo htmlspecialchars($row["Date"]); ?> </span>
                    </div>
                </div>
            </div>

            <div class="col-sm-1"></div>

            <div class="col-sm-12 spacer">a</div>
            <div class="col-sm-12 spacer">a</div>
v

        </div>
    </div> <!-- container-fluid -->

    
</body>
<?php include 'footer.php'; ?>
</html>
