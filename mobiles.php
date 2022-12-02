<?php
require 'config.php';
?>
<?php include("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>All Mobiles</title>
	<!---title logo--->
	<link rel="shortcut icon" type="image/jpg" href=".\assets\logo.jpg"/>
	<!------end----->
	<meta charset="utf-8">
	<meta name="author" content="Ajay Gupta">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" type="text/css" href="./css/header&footer.css">
</head>
<body>
	
<h3 class="text-center text-light bg-info p-2 mt-5">ALL MOBILE </h3>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-3">
			<h5>Filter Product</h5>
			<hr>
			<h6 class="text-info">Select Brand</h6>
			<ul class="list-group">
				<?php
				$sql="SELECT DISTINCT mob_brand FROM mobiles ORDER BY mob_brand";
				$result=$conn->query($sql);
				while($row=$result->fetch_assoc()){

				?>
				<li class="list-group-item">
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input Product_check" value="<?= $row['mob_brand']; ?>" id="brand" ><?= $row['mob_brand'];?>
						</label>
					</div>
				</li>
			<?php }?>
			</ul>

			<h6 class="text-info">Select Ram</h6>
			<ul class="list-group">
				<?php
				$sql="SELECT DISTINCT mob_ram FROM mobiles ORDER BY mob_ram";
				$result=$conn->query($sql);
				while($row=$result->fetch_assoc()){

				?>
				<li class="list-group-item">
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input Product_check" value="<?= $row['mob_ram']; ?>" id="ram" ><?= $row['mob_ram'];?>GB
						</label>
					</div>
				</li>
			<?php }?>
			</ul>

			<h6 class="text-info">Select Storage</h6>
			<ul class="list-group">
				<?php
				$sql="SELECT DISTINCT mob_storage FROM mobiles ORDER BY mob_storage";
				$result=$conn->query($sql);
				while($row=$result->fetch_assoc()){

				?>
				<li class="list-group-item">
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input Product_check" value="<?= $row['mob_storage']; ?>" id="storage" ><?= $row['mob_storage'];?> GB
						</label>
					</div>
				</li>
			<?php }?>
			</ul>

		</div>
		<div class="col-lg-9">
			<h5 class="text-center" id="textChange" >ALL COMPANY MOBILES</h5>
			<hr>
			<!--<div class="text-center">
				<img src=".\assets\loader.jpg" id="loader" width="200" style="display: none;">
			</div>-->
			<div class="row" id="result">
				<?php
				$sql= "SELECT * FROM mobiles";
				$result=$conn->query($sql);
				while ($row=$result->fetch_assoc()) { 
				?>
				<div class="col-md-5 mb-2">
					<div class="card-deck">
						<form action="manage_cart.php" method="POST">
						<div class="card border-secondary">
							<img src="<?= $row['mob_image']; ?>" class="card-img-top">
							<div class="card-img-overlay">
								<h6 style="margin-top:175px;" class="text-light bg-info text-center rounded p-1"><?=$row['mob_name'];?></h6>
							</div>
							<div class="card-body">
								<h4 class="card-title text-danger">Price : <?= number_format($row['mob_price']); ?>/-</h4>
								<p style="font-weight: bold;">
									DISPLAY : <?=$row['mob_display']; ?> <br>
									RAM : <?=$row['mob_ram']; ?>GB <br>
									STORAGE : <?=$row['mob_storage']; ?>GB <br>
									FRONT CAMERA : <?=$row['mob_front_camera']; ?> <br>
									REAR CAMERA : <?=$row['mob_rear_camera']; ?> <br>
									BATTERY : <?=$row['mob_battery']; ?> <br>
									PROCESSOR TYPE : <?=$row['mob_processor']; ?> <br>
									OS : <?=$row['mob_os']; ?> <br>
								</p>
								<button type="submit" name="Add_to_cart" class="btn btn-info btn-block">Add to Cart</button>
								<input type="hidden" name="brand" value="brand"/>
								<input type="hidden" name="price" value="price"/>
							</div>
						</form>
						</div>
					</div>
				</div>
				<?php }?>
			</div>
		</div>
		<div class="col-md-9">
			<br/>
			<div class="row filter_data">
			</div>
		</div>
	</div>
</div>
<?php include("footer.php");
?>
<script type="text/javascript">
	$(document).ready(function(){

		$(".Product_check").click(function(){
			//$("#loader").show();

			var action ='data';
			var brand = get_filter_text('brand');
			var ram = get_filter_text('ram');
			var storage = get_filter_text('storage');

			$.ajax({
				url:'action.php',
				method:'POST',
				data:{action:action,brand:brand,ram:ram,storage:storage},
				success:function(response){
					$("#result").html(response);
					//$("#loader").hide();
					$("textChange").text("FILTERED MOBILES");
				}
			});
		});
		function get_filter_text(text_id){
			var filterData =[];
			$('#'+text_id+':checked').each(function(){
				filterData.push($(this).val());
			});
			return filterData;
		}
	});
</script>
</body>
</html>