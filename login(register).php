<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login (Register)</title>
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
  <!-- CSS only -->
		<link rel="stylesheet" type="text/css" href="./css/login(register).css">
  <!----------END------->
</head>
<body>
	
<br>
<br>
<br><br>
	<div class="form">
		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" onclick="login()">Log In</button>
				<button type="button" class="toggle-btn" onclick="register()">Register</button>
			</div>
		<form id="login" class="input-group" action="login.php" method="post">
			<input type="text" class="input-field" name="name" placeholder="&nbsp Username" value="" required>
			<input type="Password" class="input-field" name="password" placeholder="&nbsp Enter Password" value="" required>
			<button type="submit" class="submit-btn" name="submit">Log In</button>
		</form>
		<form id="register" class="input-group" action="register.php" method="post">
			<input type="text" class="input-field" placeholder="&nbsp Username" name="name" required>
			<input type="Email" class="input-field" placeholder="&nbsp Email Id" required name="email">
			<input type="Password" class="input-field" placeholder="&nbsp Enter Password" required name="password">
			<button type="submit" class="submit-btn" name="submit">Register</button>
		</form>
	</div>
	</div>
<?php
include("footer.php");
?>
	<script>
		var x=document.getElementById("login");
		var y=document.getElementById("register");
		var z=document.getElementById("btn");
		function register() {
			x.style.left="-400px";
			y.style.left="50px";
			z.style.left="110px";
		}
		function login() {
			x.style.left="50px";
			y.style.left="450px";
			z.style.left="0";
		}
	</script>
</body>
</html>