<?php include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact Us</title>
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
	<!-----------CSS Links---------->
	<link rel="stylesheet" type="text/css" href="./css/contactus.css">
	<!-----end----------->
</head>
<body>
<br><br><br>
<h1 align="center">Contact with shopkeeper</h1>
	<section id="contact-section">
	<div class="box">
		<div class="content-form">
				<h2>Contact Us</h2><br>
				<p>Email us and keep upto date with our latest news </p>
				<div class="contact-form">
				
				<!--second grid-->
				<div>
					<form class="form" method="post" action="contact.php">
						<input  type="text" placeholder="Name" name="name" value="">
						<input type="Email" placeholder="Email" name="email" value="">
						<input type="text" placeholder="Subject of this message" name="subjectofmessage" value="">
						<textarea name="message" placeholder="Message" rows="5" value="" ></textarea><br><br>
						<button class="submit" name="submit"> Send Message</button>
						<br><br><br>
					</form>
				</div>	
				</div>
			</div>
		</div>
	</section>

	<?php
	include("footer.php");
	?>
</body>
</html>