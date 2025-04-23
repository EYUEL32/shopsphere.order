<!DOCTYPE html>

<html lang="en">
	
	<!-- HEAD TAG STARTS -->

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
	<style>
        /* Adjusting form input field size */
        .form-container .form-control {
            width: 100%;  /* Full width of the container */
            max-width: 400px;  /* Limit width to 400px */
            margin: 0 auto 15px auto;  /* Center the input and give some margin */
        }
        /* Optional: Adjust the overall form container width */
        .form-container {
            max-width: 500px;
            margin: 50px auto;
            text-align: center;
        }
        .form-container h3 {
            margin-bottom: 30px;
         
        }
        /* Optional: Adjust button width */
        .form-container .btn {
            width: 100%;
            max-width: 400px;
        }
        
    </style>
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
	<!-- HEAD TAG ENDS -->
	
	<!-- BODY TAG STARTS -->
	
	<body>
	
		<div class="container-fluid">
		
		<div class="login">
				
			<div class="col-sm-12">
					
				<div class="heading text-center">
					Login
				</div>
						
			</div>
			
			
			<div class="col-sm-6 col-sm-offset-3">
			<div class="form-container">
				
				<form action="loginAction.php" method="POST">
				<div class="mb-3">
                 <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Enter username here" required>
                </div>
                <!-- Password Field -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <!-- Submit Button -->
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
					
					<a href="forgotPassword.php"><p class="col-xs-12 dots" style="color: white; font-size: 1.1em; margin-top: 1em; text-align: center;">Forgot Password?</p></a>
					
				</form>
				
					<div class="col-sm-12 text-center">
						<div class="signupPrompt">
							New user? <a href="signup.php"><span class="dots">Sign Up</span></a> instead.
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
	