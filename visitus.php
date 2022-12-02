
<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Visit Us</title>
  <!---title logo--->
  <link rel="shortcut icon" type="image/jpg" href=".\assets\logo.jpg"/>
  <!------end----->
  <!----meta ---->
  <meta charset="utf-8">
  <meta name="author" content="Ajay Gupta">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!----bootstrap cdn----->
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
	*{
	margin: 0;
	padding:0;
	box-sizing: border-box;
	font-family: sans-serif;
}
html{
	scroll-behavior: smooth;
}		
body{
	background:linear-gradient(to right,pink,lightblue);
	font-family: sans-serif;
	
}
/*--------VISIT CSS-------*/
.para p{
	text-align: center;
	font-size: 22px;
	font-family: sans-serif;
	font-weight: bold;
}
.map{
	text-align: center;
}
iframe{
	border-radius: 20px;
	border:2px solid transparent;
	width:80%;
	height:600px;
	box-shadow: 2px 10px 12px rgba(0,0,0,0.7);
}
@media only screen(max-width: 600px)
{
	iframe{
		width: 100%;
		height: 100%;
	}
}		
</style>
</head>
<body>
	
<br>
<br>
<br><br>
<!----------------------------VISIT US-------------->
		<h1 align="center">VISIT US</h1>
		<br>
		<div class="para">
		<p>We Will Serve You The Services.</p>
		</div>
			<br><br>
			<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3562.351104158576!2d81.97832451459588!3d26.76507588319143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399a1b8c1385ba5d%3A0x997db7ce1973fee5!2sShivani%20Mobile%20Center!5e0!3m2!1sen!2sin!4v1618137419363!5m2!1sen!2sin"  allowfullscreen="none" loading="lazy"></iframe>		
			</div>
		<br><br>	
<?php
include("footer.php");
?>
</body>
</html>