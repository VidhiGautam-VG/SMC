<!DOCTYPE html>
<html>
<head>
	<title>admin login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<?php include 'links.php' ?>
	
</head>
<body style="background:lightgreen;">
<header>
	<div class="container-center ">
		<div class="heading">ADMIN LOGIN PAGE</div>
			<div class="container-row">
				<div class="admin-form">
					<form action="logincheck.php" method="POST">
						<div class="form-group">
							<label>USERNAME</label>
							<input type="text" name="user" value="" class="form-control" autocomplete="off">
						</div>

						<div class="form-group">
							<label>PASSWORD</label>
							<input type="password" name="pass" value="" class="form-control" autocomplete="off">
						</div>
						<input type="submit" name="submit" class="btn btn-success" >
					</form>
				</div>
			</div>
		</div>
</header>
</body>
</html>