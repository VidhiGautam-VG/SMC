<?php
$servername = "localhost";
$username = "root";
$password ="";
$database = "smc";


//create connection
$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn) {

//echo "Connection Success!";
	?>
	<!--<script>
		alert('connection Success ');
	</script>-->
	<?php
}else{
	die ("no connect".mysqli_connect_error());
}



?>