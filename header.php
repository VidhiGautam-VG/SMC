<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/jpg" href=".\assets\logo.jpg"/>

	<link rel="stylesheet" type="text/css" href="./css/header&footer.css">
</head>
<body>
	<!--Header Section-->
<header>
<nav>
<div class="wrapper">
		<div class="logo"><a href="#"><h1>SMC</h1></a></div>
		<input type="radio" name="slider" id="menu-btn">
		<input type="radio" name="slider" id="cancel-btn">
		<ul class="nav-links">
			<label for="cancel-btn" class="btn cancel-btn"><i class="fa fa-times"></i></label>
			<div id="digiClock" style="color: blue;"></div>

			<li><a href="index.php">Home</a></li>
			<li><a href="aboutus.php">About Us</a></li>	
			<li>
				<a href="#" class="Desktop-item">Product</a>
					<input type="checkbox" id="Showdrop">
						<label for="Showdrop" class="Mobile-item">Product</label>
						<ul class="product">
							<li><a href="mobiles.php">Mobiles</a></li>
							<li><a href="accessories.php">Accessories</a></li>
							<li><a href="other.php">Others</a></li>
						</ul>
			</li>
			<li><a href="services.php">Service</a>
				
			<li><a href="#" class="Desktop-item">Help center</a>
					<input type="checkbox" id="ShowDrop">
				<label for="ShowDrop" class="Mobile-item">Help Center</label>
				<ul class="help-center">
					<li><a href="contactus.php">Contact Us</a></li>
					<li><a href="#">Your Order</a></li>
					<li><a href="feedback.php">Feedback</a></li>
					<li><a href="visitus.php">Visit Us</a></li>
				</ul>
			</li>
				<li><a href="gallery.php" class="photo">Gallery</a></li>
			<li><a href="searchbar.php"><i class="fa fa-search"></i>&nbsp Search</a></li>
			<li><a href="login(register).php"><i class="fa fa-sign-in">&nbsp Login/Register</i></a></li>
			<li><a href="#cart"><i class="fa fa-shopping-cart">&nbsp Cart</i></a></li>
		</ul>
		<label for="menu-btn" class="btn menu-btn"><i class="fa fa-bars"></i></label>
	</div> 
</nav>
</header>
<br/>
<br/>

</body>
</html>