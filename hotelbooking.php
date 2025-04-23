
<?php session_start();
if(!isset($_SESSION["username"]))
{
    	header("Location:blocked.php");
   		$_SESSION['url'] = $_SERVER['REQUEST_URI']; 
}
?>
<!DOCTYPE html>

<html lang="en">
	
	<!-- HEAD TAG STARTS -->

	<head>
	
  		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
		<title>Hotels | tourism_management</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    	<link href="css/main.css" rel="stylesheet">
    	<link href="css/bootstrap.min.css" rel="stylesheet">
    	<link href="css/bootstrap-select.css" rel="stylesheet">
		<link href="css/bootstrap-datetimepicker.css" rel="stylesheet">
    	<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400|Raleway:100,300,400,500|Roboto:100,400,500,700" rel="stylesheet">
    	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    	<script src="js/jquery-3.2.1.min.js"></script>
    	<script src="js/main.js"></script>
    	<script src="js/bootstrap.min.js"></script>
    	<script src="js/bootstrap-select.js"></script>
    	<script src="js/bootstrap-dropdown.js"></script>
    	<script src="js/jquery-2.1.1.min.js"></script>
    	<script src="js/moment-with-locales.js"></script>
    	
		<script type="text/javascript">
		
			$(function () {
       				$('#datetimepicker5').datetimepicker({
		   			format: 'L',
		   			locale: 'en-gb',
					useCurrent: false,
					minDate: moment()
	   				});
				
        			$('#datetimepicker6').datetimepicker({
            		useCurrent: false,
					format: 'L',
					locale: 'en-gb'
					});
				
					$("#datetimepicker5").on("dp.change", function (e) {
            		$('#datetimepicker6').data("DateTimePicker").minDate(e.date);
        			});
				
        			$("#datetimepicker2").on("dp.change", function (e) {
            		$('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
        			});
    		});
			
		</script>
		
    	
	</head>
	
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
	
	<!-- HEAD TAG ENDS -->
	
	<!-- BODY TAG STARTS -->
	
	<body>
	
		<div class="container-fluid">
		
			<div class="hotels col-sm-12">\
			

        <!-- navbar -->       
				
				<form action="hotelSearch.php" method="GET">
    <div class="col-sm-3">
        <div class="form-group">
            <label for="city">City:</label>
            <select id="city" name="city" class="selectpicker form-control" required>
               
                <option value="Gonder">Gonder</option>
                <option value="Birdare Laialbla">Birdare Laialbla</option>
				<option value="Debark">Debark</option>
                <!-- Add other cities here -->
            </select>
			
			<div class="form-group">
     								<label for="datetime5">Check-in:<p> </p></label>
            						<div class="input-group date" id="datetimepicker5">
                						<input id="datetime5" type="text" class="inputDate form-control" placeholder="Select Check-in Date" name="checkIn" required/>
                						<span class="input-group-addon">
                   						<span class="fa fa-calendar"></span>
                						</span>
            						</div>
        					
    						</div>
    						
    						<div class="">
        						<div class="form-group">
     								<label for="datetime6">Check-out:<p> </p></label>
            						<div class="input-group date" id="datetimepicker6">
                						<input id="datetime6" type="text" class="inputDate form-control" placeholder="Select Check-out Date" name="checkOut" required/>
                						<span class="input-group-addon">
                   						<span class="fa fa-calendar"></span>
                						</span>
            						</div>
        						</div>
    						</div>
    						
						
							<label for="rooms">No. of rooms:<p> </p></label>
    							<div class="form-group">
    								<select id= "rooms" class="selectpicker form-control" data-size="5" title="Select no. of rooms" name="rooms" required>
  										<option value="1">1</option>
  										<option value="2">2</option>
  										<option value="3">3</option>
  										<option value="4">4</option>
									</select>
								
							
          					
        </div>
    </div>
    <!-- Other form fields like Check-in, Check-out, No. of rooms, etc. -->
    <div class="col-sm-12 text-center">
        <input type="submit" name="searchHotels" value="Search Hotels" id="searchHotelButton">
    </div>

            			
    					</div> <!-- content -->
    					
					</div> <!-- search -->
					
				</div>
			
			<!-- TRAIN SEARCH SECTION ENDS -->
				
			</div> <!-- trains -->	
			
			
			
			<!-- POPULAR BUS SECTION STARTS -->
			
				<!-- <div class="col-sm-12"> -->
					
					<div class="popularHotels col-sm-12">
					
						<div class="heading">
						
								Popular Cities
						
						</div>
						
						<div class="bg">
						
							
							<div  class="col-sm-4">
						
								<div class="listItem">
								
									<div class="imageContainer text-center">
										
										<img src="images/g1.png" alt="New Delhi Hotels">
										
									</div>
									
									<div class="headings">
										
										lalibla
										
									</div>
									
									<div class="info">
										
										3-star hotels averaging birr 2000
										
									</div>
									
									<div class="info">
										
										5-star hotels averaging birr 6500
										
									</div>
								
									
								</div> <!-- listItem 1 -->
							
							</div> <!-- col-sm-4 -->
							
							<div  class="col-sm-4">
						
								<div class="listItem">
								
									<div class="imageContainer text-center">
										
										<img src="images/g6.png" alt="Mumbai Hotels">
										
									</div>
									
									<div class="headings">
										
										gonder
										
									</div>
									
									<div class="info">
										
										3-star hotels averaging birr 3900
										
									</div>
									
									<div class="info">
										
										5-star hotels averaging birr 9700
										
									</div>
								
									
								</div> <!-- listItem 2 -->
							
							</div> <!-- col-sm-4 -->
							
							<div  class="col-sm-4">
						
								<div class="listItem">
								
									<div class="imageContainer text-center">
										
										<img src="images/bahir-dar-city-ethiopia_1563429591-7508e.jpg" alt="kolkata Hotels">
										
									</div>
									
									<div class="headings">
										
										bahir dar
										
									</div>
									
									<div class="info">
										
										3-star hotels averaging birr 3000
										
									</div>
									
									<div class="info">
										
										5-star hotels averaging birr 7750
										
									</div>
								
									
								</div> <!-- listItem 3 -->
							
							</div> <!-- col-sm-4 -->
							
							
						</div> <!-- bg -->
						
					</div> <!-- popularBus -->
					
				<!-- </div> -->
				
			<!-- POPULAR BUS SECTION ENDS -->
			
			
			<?php include 'footer.php'; ?>
	<!-- BODY TAG ENDS -->
	
</html>