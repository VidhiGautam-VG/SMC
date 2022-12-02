<?php
$con = new PDO("mysql:host=localhost;dbname=smc",'root','');
if (isset($_POST['submit'])){
		$str = $_POST["search"];
		$sth = $con->prepare("SELECT * FROM `searchbar` WHERE name ='$str'");

		$sth->setFetchMode(PDO:: FETCH_OBJ);
		$sth->execute();

		if($row = $sth->fetch())
		{
			?>
			<br><br><br>
			<table class="tab-data">
				<tr>
					<th>Name</th>
					<th>Description</th>
				</tr>
				<tr>
					<td><?php echo $row->name; ?></td>
					<td><?php echo $row->description; ?></td>
				</tr>
			</table>
<?php
		}
 
		else{
		echo  "Name Does Not Exist";
	}
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Searchbar</title>
	<!---title logo--->
	<link rel="shortcut icon" type="image/jpg" href=".\assets\logo.jpg"/>
	<!------end----->
	<meta charset="utf-8">
	<meta name="author" content="Ajay Gupta">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!----bootstrap cdn----->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--------end-------->
	<!-----jquery----------->
  	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  	<!---------end----->
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			background:linear-gradient(to right,pink, skyblue);
		}
		.search-box{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			background: #2f3640;
			height: 40px;
			border-radius: 40px;
			padding: 10px;
		}
		.search-box:hover > .search-txt{
			width: 240px;
			padding: 0 6px;
		}
			.search-box:hover> .search-btn {
			background: #fff;
		}
		.submit-box{
			position: absolute;
			top:50%;
			left: 65%;
			transform: translate(-50%, -50%);
			background: #e84118;
			height: 40px;
			border-radius: 5px;
			padding: 10px;
			font-size: 16px;
			font-weight: bold;
		}
		.tab_data{
			position: relative;
			top: 90%;
			left: 90%;
			box-sizing: border-box;
		}
		.search-btn{
			color: #e84118;
			float: right;
			width: 40px;
			height: 40px;
			border-radius: 50%;
			background: #2f3640;
			text-decoration: none;
			justify-content: center;
			display: flex;
			align-items: center;
			transition: 0.4s;
		}
		.search-txt{
			border:none;
			background:none;
			outline: none;
			float: left;
			padding: 0;
			color: white;
			font-size: 16px;
			transition: 0.4s;
			line-height: 40px;
			width: 0px;
		}

		.cancel-btn{
			color: #fff;
			float: right;
			width: 40px;
			height: 40px;
			text-decoration: none;
			justify-content: center;
			display: flex;
			padding-right: 15px;
			padding-top: 15px;
			align-items: center;
			transition: 0.4s;
			font-size: 30px;
		}
		@media screen and (max-width: 600px)

		{
		.search-box:hover > .search-txt{
			width: 150px;
			padding: 0 6px;
		}
		.submit-box{
			top: 70%;
			left: 65%;
		}	
	}
	</style>
</head>
<body>
	
	<form method="post">
	<div class="search-box">
		<input class="search-txt" type="text" name="search" placeholder="Type to search">
		<a  class="search-btn" href="#">
			<i  class="fa fa-search"></i>
		</a>
	</div>
	<input class="submit-box" type="submit" name="submit">
	
	<div>

	<label for="cancel-btn" class="btn cancel-btn"><a href="index.php"><i class="fa fa-times"></i></a></label>
</div>
</form>
</body>
</html>