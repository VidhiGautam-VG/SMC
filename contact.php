<?php

include'config.php';


if (isset($_POST['submit'])) {
	$name =$_POST['name'];
    $email = $_POST['email'];
    $subjectofmessage = $_POST['subjectofmessage'];
    $message= $_POST['message'];

    $res= "INSERT INTO `contactus`(`name`, `email`, `subjectofmessage`, `message`) VALUES ('$name',' $email',' $subjectofmessage','$message')";
     $result = mysqli_query($conn, $res);

         if($result){
       // echo "Inserted Successfully";
         header('Location:contactus.html');
    }
     else {
			 echo "failed";
    		echo mysqli_error($conn);
		}

}

//mysqli_close($conn);
?>