
<?php session_start();
if(!isset($_SESSION["username"]))
{
    	header("Location:blocked.php");
   		$_SESSION['url'] = $_SERVER['REQUEST_URI']; 
}
?><!DOCTYPE html>
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
            <button id="btn-login"><a href="login.php">Login</a></button>
            <button id="btn-signup"><a href="signup.php">Sign up</a></button>
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
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Service
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #1c1c50;">
                      <li><a class="dropdown-item" href="hotelbooking.php">Hotel Reservation</a></li>
                      <li><a class="dropdown-item" href="carrent.php">Car rental</a></li>
                      <li><a class="dropdown-item" href="attraction.php">Attraction place ticket</a></li>
                    </ul>
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
        <!-- navbar -->    

<!-------------attraction------->
<section class="ticketing_section">
    <form action="#" class="ticketing_form">
      <div class="input_box">
        <span><i class="fas fa-map-marker-alt"></i></span>
        <div>
          <label>Attraction</label>
          <input type="text" list="attraction-list" placeholder="Search for an attraction" required />
          <datalist id="attraction-list">
            <option value="Simien Mountains National Park"></option>
            <option value="Lalibela"></option>
            <option value="Fasil"></option>
            <option value="Blue Nile Falls"></option>
            <option value="Lake tana"></option>
          </datalist>
        </div>
      </div>
  
      <div class="input_box">
        <span><i class="fas fa-calendar"></i></span>
        <div>
          <label>Visit Date</label>
          <input type="date" required />
        </div>
      </div>
  
      <div class="input_box">
        <span><i class="fas fa-ticket-alt"></i></span>
        <div>
          <label>Tickets</label>
          <input type="number" id="tickets" value="1" min="1" required />
        </div>
      </div>
  
      <div id="visitors_container"></div> <!-- Container for visitor input fields based on number of tickets -->
  
      <div class="button_box">
        <button type="submit" class="book_ticket_button">Book Tickets</button>
      </div>
    </form>
  </section>
  

    <!---------attraction end--------->
   <!-- footer -->
   <?php include 'footer.php'; ?>