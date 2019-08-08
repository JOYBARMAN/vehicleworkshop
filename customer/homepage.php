
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bootstrap 4 landing page</title>
	 <!-- add bootstrap css file -->

      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
  <!-- navbar -->

  <nav class="navbar navbar-expand-lg fixed-top ">
	  <a class="navbar-brand" href="#">Home</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse " id="navbarSupportedContent">
	    <ul class="navbar-nav mr-4">
	      
	      <li class="nav-item">
	        <a class="nav-link" data-value="about" href="#">About</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link " data-value="portfolio" href="#">services</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link " data-value="blog" href="#">Service request</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link " data-value="team" href="#">
	        Team</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link " data-value="contact" href="http://localhost/vehicleWorkshop/customer/contact/index.php">Contact-us</a>
	      </li>
		  <li class="nav-item">
		  <a class="nav-link " data-value="login"<a href="http://localhost/vehicleWorkshop/customer/index.php">Login</a>
	      </li>
		  <li>
		  <li class="nav-item">
	        <a class="nav-link " data-value="admin"<a href="http://localhost/vehicleWorkshop/admin/login.php">Admin</a>
	      </li>
	    </ul>
	    
	  </div>
</nav>
<!-- header -->
<header class="header ">
  <div class="overlay"></div>
   <div class="container">
   	  <div class="description ">
  	<h1>
  		Hello ,Welcome To our official Website
  		<p>
  		here you can find all kind of car servises </p>
  		<button class="btn btn-outline-secondary btn-lg">See more</button>
  	</h1>
  </div>
   </div>
  
</header>

<!-- about section -->
<div class="about" id="about">
	<div class="container">
	  <h1 class="text-center">About Us</h1>
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12">
				<img src="images/BMW.jpg" class="img-fluid">
				<span class="text-justify"></span>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-12 desc">
				<p>
				   Car accident is a common affair in our country , so we give the car servises of accident car with a little price,
				   The service intervals are specified by the vehicle manufacturer in a service schedule and some modern cars display the due date for the next service electronically on the instrument panel
				</p>
			</div>
		</div>
	</div>
</div>

<!-- portfolio -->
<div class="portfolio" id="portfolio">
     <h1 class="text-center">Services</h1>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12">
				<img src="images\c1.png" class="img-fluid">
				 <div class="card-body">
					<h4 class="card-title">Car Full service</h4>

					</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<img src="images/c2.jpg" class="img-fluid">
				<div class="card-body">
					<h4 class="card-title">Car Break service</h4>
					
					</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<img src="images/c3.jpg" class="img-fluid">
				<div class="card-body">
					<h4 class="card-title">Car Engine parts service</h4>
					</div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-12">
				<img src="images/c10.jpg" class="img-fluid">
				<div class="card-body">
					<h4 class="card-title">Car Full engine service</h4>
					
					</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<img src="images/c11.jpg" class="img-fluid">
				<div class="card-body">
					<h4 class="card-title">Car parts service</h4>
					
					</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<img src="images/c6.jpg" class="img-fluid">
				<div class="card-body">
					<h4 class="card-title">Car service</h4>
					
					</div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-12">
				<img src="images/c7.png" class="img-fluid">
				<div class="card-body">
					<h4 class="card-title">Car Wheel service</h4>
					
					</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<img src="images/c8.jpg" class="img-fluid">
				<div class="card-body">
					<h4 class="card-title">Car Gearbox service</h4>
					
					</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<img src="images/c9.jpg" class="img-fluid">
				<div class="card-body">
					<h4 class="card-title">Car Gear service</h4>
					
					</div>
			</div>
		</div>
	</div>
</div>


<!-- Posts section -->
<div class="blog" id="blog">
	<div class="container">
	<h1 class="text-center">Service Request</h1>
		<div class="row">
			<div class="col-md-4 col-lg-4 col-sm-12">
				<div class="card">
					<div class="card-img">
						<img src="images/c1.png" class="img-fluid">
					</div>
					
					<div class="card-body">
					<h4 class="card-title">Full service</h4>
						<p class="card-text">
							in the below link you have to upload the car full description  and you can service your car at 
							a minimum price
							
						</p>
					</div>
					<div class="card-footer">
						<a href="http://localhost/vehicleWorkshop/customer/index.php" class="card-link">submit description</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-lg-4 col-sm-12">
				<div class="card">
					<div class="card-img">
						<img src="images/c10.jpg" class="img-fluid">
					</div>
					
					<div class="card-body">
					   <h4 class="card-title">Car Engine service</h4>
						<p class="card-text">
						in the below link you have to upload the car full description  and you can full service your car engine at 
						a minimum price
						</p>
					</div>
					<div class="card-footer">
						<a href="http://localhost/vehicleWorkshop/customer/index.php" class="card-link">submit description</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-lg-4 col-sm-12">
				<div class="card">
					<div class="card-img">
						<img src="images/c11.jpg" class="img-fluid">
					</div>
					
					<div class="card-body">
					<h4 class="card-title">Car Parts services</h4>
						<p class="card-text">
						in the below link you have to upload the description about your car parts and you can service your car parts
						a minimum price
						</p>
					</div>
					<div class="card-footer">
						<a href="http://localhost/vehicleWorkshop/customer/index.php" class="card-link">submit description</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Team section -->
<div class="team" id="team">
	<div class="container">
	   <h1 class="text-center">Our Team</h1>
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-12 item">
				<img src="images/t1.jpg" class="img-fluid" alt="team">
				<div class="des">
				 	Ron
				 </div>
				<span class="text-muted">Manager</span>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12 item">
				<img src="images/t2.jpg" class="img-fluid" alt="team">
				<div class="des">
				 	 Chris
				 </div>
				<span class="text-muted">Painting Staff</span>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12 item">
				<img src="images/t3.jpg" class="img-fluid" alt="team">
				<div class="des">
				 	Jhon 
				 </div>
				<span class="text-muted">Engine service staff</span>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12 item">
				<img src="images/t4.jpg" class="img-fluid" alt="team">
				 <div class="des">
				 	J.Jirard
				 </div>
				<span class="text-muted">Delivery staff</span>
			</div>
		</div>
	</div>
</div>

<!-- add Javasscript file from js file -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src='js/main.js'></script>

    <p></p>
</body>
</html>