<?php
session_start();
if(!isset($_SESSION['user'])){
	header('location:adminlogin.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="adminmainpage.css">
	<?php include 'links.php' ?>
	<title>Admin Panel</title>
</head>
<body style="background-color: lightblue;">
<nav>
<div class="wrapper">
		<div class="logo"><a href="#"><h1>SMC</h1></a></div>
		<input type="radio" name="slider" id="menu-btn">
		<input type="radio" name="slider" id="cancel-btn">
		<ul class="nav-links">
			<label for="cancel-btn" class="btn cancel-btn"><i class="fa fa-times"></i></label>
			<li><a href="adminmainpage.php">Home</a></li>	
			<li><a href="#" class="Desktop-item">Product</a>
					<input type="checkbox" id="Showdrop">
				<label for="Showdrop" class="Mobile-item">Product</label>
				<ul class="product">
					<li><a href="#">Mobiles</a></li>
					<li><a href="#">Accessories</a></li>
					<li><a href="#">Others</a></li>
				</ul>
			</li>
			<li><a href="#" class="Desktop-item">Help center</a>
					<input type="checkbox" id="ShowDrop">
				<label for="ShowDrop" class="Mobile-item">Help Center</label>
				<ul class="help-center">
					<li><a href="#">Contact Us</a></li>
					<li><a href="#">Feedback</a></li>
					<li><a href="#"><i class="fa fa-shopping-cart">&nbsp Cart</i></a></li>
				</ul>
			</li>
			<li><a href="#"><i class="fa fa-search"></i>&nbsp Search</a></li>
			<li><a href="logout.php"><i class="fa fa-sign-out"> Logout</a></li>
		</ul>
		<label for="menu-btn" class="btn menu-btn"><i class="fa fa-bars"></i></label>
	</div> 
</nav>
</header>
<br/>
<br/>
<br><br>
<section class="admin">
	<div class="container-center">
		<div class="heading">WELCOME <?php echo $_SESSION['user'] ?> SHIVANI MOBILE CENTER</div>
	</div>
	

	<?php echo "hello";
		?>
</section>
	<br><br><br>
<a href="#" class="gototop"><i class="fa fa-arrow-up"></i></a>
<!-----go to top--->
<script>
	var btn =$('gototop');
	$(window).scroll(function(){
		if($(window).scrollTop()>300){
			btn.addClass('show');
		}
	})
</script>
<!---end-->
</body>
</html>