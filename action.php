<?php
require 'config.php';

if(isset($_POST['action'])){
	$sql ="SELECT * FROM mobiles WHERE mob_brand !=''";
 

	if(isset($_POST['brand'])){
		$brand =implode("','",$_POST['brand']);
		$sql .="AND mob_brand IN('".$brand."')";
	}
	if(isset($_POST['ram'])){
		$ram =implode("','",$_POST['ram']);
		$sql .="AND mob_ram IN('".$ram."')";
	}
	if(isset($_POST['storage'])){
		$storage =implode("','",$_POST['storage']);
		$sql .="AND mob_storage IN('".$storage."')";
	}
		$result =$conn->query($sql);
		$output='';

if($result->num_rows>0){
	while ($row=$result->fetch_assoc()) {
		$output .='<div class="col-md-3 mb-2">
					<div class="card-deck">
						<div class="card border-secondary">
							<img src="'.$row['mob_image'].'" class="card-img-top">
							<div class="card-img-overlay">
								<h6 style="margin-top:175px;" class="text-light bg-info text-center rounded p-1">'.$row['mob_name'].'</h6>
							</div>
							<div class="card-body">
								<h4 class="card-title text-danger">Price : '. number_format($row['mob_price']).'/-</h4>
								<p>
									RAM : '.$row['mob_ram'].' <br>
									STORAGE : '.$row['mob_storage'].'<br>
									OS : '.$row['mob_os'].'<br>
								</p>
								<a href="#" class="btn btn-success btn-block">Add to Cart</a>
							</div>
						</div>
					</div>
				</div>';
	}
  }	
  else{
  	$output ="<h3> No Mobiles Found!</h3>";
  }
  echo $output;
}
?>