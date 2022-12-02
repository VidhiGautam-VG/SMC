<?php

include'config.php';


if (isset($_POST['submit'])) {

        $name =$_POST['name'];
        $email =$_POST['email'];
        $password = $_POST['password'];

        $res = " INSERT INTO `register`(`name`, `email`, `password`) VALUES ('$name','$email' ,'$password')";
         $result = mysqli_query($conn, $res);
         if($result){
       // echo "Inserted Successfully";
         header('Location:login(register).html');
    } else {

        echo "failed";
    
    echo mysqli_error($conn);
}

}
//mysqli_close($conn);
?>
