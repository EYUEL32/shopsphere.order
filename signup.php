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

        <!DOCTYPE html>
		<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourist Sign-Up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* General Styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    margin: 0;
    padding: 0;
}

.form-container {
    max-width: 600px;
    margin: 50px auto;
    background: #fff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    font-size: 1rem;
}

/* Heading Style */
.form-container h3 {
    margin-bottom: 40px;
    font-weight: bold;
    text-align: center;
    color: #333;
}

/* Form Input Styles */
.form-container .form-control {
    width: 100%;  
    max-width: 100%;  /* Make inputs responsive */
    margin: 0 auto 15px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 1rem;
}

/* Optional: Add hover effect on inputs */
.form-container .form-control:hover {
    border-color: #007bff;
}

/* Buttons */
.btn-primary, .form-container .btn {
    width: 100%;
    padding: 12px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 1.2rem;
    cursor: pointer;
}

/* Button Hover */
.btn-primary:hover, .form-container .btn:hover {
    background-color: #0056b3;
}

/* Error Message */
#usernameExists {
    font-size: 1.2em;
    color: red;
    font-weight: 400;
    margin-top: -1.75em;
    text-align: center;
    background: rgba(0,0,0,0.4);
    display: none;
}

/* Form Layout Styles */
.form-container form {
    display: flex;
    flex-direction: column;
}

.form-container label {
    margin-bottom: 5px;
    font-weight: bold;
}

/* Container Width Adjustments */
.form-container {
    width: 100%;
    max-width: 500px; /* Adjust maximum width */
    padding: 30px;
}

/* Responsive Design */
@media (max-width: 767px) {
    .form-container {
        width: 90%; /* Allow the form to take up more space on smaller screens */
    }
}

/* Additional Margin for Sign-up Button */
#signupButton {
    margin-top: 20px;
}

/* Login Prompt Styles */
.loginPrompt {
    margin-top: 20px;
    font-size: 1rem;
}

.dots {
    color: #007bff;
    text-decoration: underline;
}

.dots:hover {
    cursor: pointer;
}

    </style>
</head>
	<!-- BODY TAG STARTS -->
	
	<body>
	
		<div class="col-sm-6 col-sm-offset-3">
		
		<div class="signup">
				
			<div class="col-sm-12">
					
				<div class="heading text-center">
					Sign Up
				</div>
						
			</div>
			
			<div class="rm-container">
				
				<div class="form-container">
				
				<form action="signupAction.php" method="POST">
				
					<label for="name">Full Name:</label>
					<input type="text" class="input" name="name" placeholder="Enter your full name here" id="fullname" required>
					
					<label for="email">E-mail:</label>
					<input type="email" class="input" name="email" placeholder="Enter your email here" required>
					
					<label for="phone">Phone:</label>
					<input type="text" class="input" name="phone" placeholder="Enter your phone no. here" id="phone" required>
					
					<label for="username">Username:</label>
					<input type="text" class="input" name="username" placeholder="Enter a username here" id="username" required>
					
					<p id="usernameExists" style="font-size: 1.2em; color: red; font-weight: 400; margin-top: -1.75em; text-align: center; background: rgba(0,0,0,0.4); display: none;">This username already exists. Please choose a different one.</p>
					
					<label for="password">Password:</label>
					<input type="password" class="input" name="password" placeholder="Enter a password here" id="password" required>
					
					<label for="repeatPassword">Repeat Password:</label>
					<input type="password" class="input" name="repeatPassword" placeholder="Enter the same password again" id="repeatPassword" required>
					
					<label for="addressLine1">Address Line 1:</label>
					<input type="text" class="input" name="addressLine1" placeholder="Enter your House No./ Flat No. or Apartment No." required>
					
					<label for="addressLine2">Address Line 2:</label>
					<input type="text" class="input" name="addressLine2" placeholder="Enter the name of your Lane, Locality" required>
					
					<label for="city">City:</label>
					<input type="text" class="input" name="city" placeholder="Enter the name of your city here" id="city" required>
					
					<label for="addressLine2">State:</label>
					<input type="text" class="input" name="state" placeholder="Enter the name of your state here" id="state" required>
					
					<div class="col-sm-12 text-center">
					<input type="submit" class="button" name="signup" value="Sign Up" id="signupButton">
					</div>
					
				</form>
				
					<div class="col-sm-12 text-center">
						<div class="loginPrompt">
							Already have an account? <a href="login.php"><span class="dots">Login</span></a> instead.
						</div>
					</div>
				
				</div>
				
			</div>
			
		</div>
		
		</div> <!-- container-fluid -->
		
	</body>
	<?php include 'footer.php'; ?>

	<!-- BODY TAG ENDS -->
	
</html>
	