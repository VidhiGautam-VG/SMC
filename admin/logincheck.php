<?php
session_start();

$con = mysqli_connect('localhost','root');
if($con){
	echo "connection successful";
}
else{
	echo "no connect";
}
$db = mysqli_select_db($con, 'smc');

if(isset($_POST['submit'])){
	$username = $_POST['user'];
	$password = $_POST['pass'];

	$sql = " SELECT * FROM  admin WHERE user ='$username' and pass = '$password'";

	$query = mysqli_query($con,$sql);

	$row = mysqli_num_rows($query);
		if($row == 1){
			echo "login successful";
			$_SESSION['user']  = $username;
			header('location: adminmainpage.php');
		}else{
			echo "login failed";
			header('location:adminlogin.php');
		}
		
	}


?>