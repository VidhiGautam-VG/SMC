<?php

include'config.php';


if (isset($_POST['submit'])) {

        $name =$_POST['name'];
        $password = $_POST['password'];

        $res ="INSERT INTO `login`(`name`, `password`) VALUES ('$name', '$password')";
         $result = mysqli_query($conn, $res);
         if($result){
        //echo "Inserted Successfully";
         	 header('Location:login(register).html');
        
    } else {

        echo "failed";
    
    echo mysqli_error($conn);
}

}
//mysqli_close($conn);
?>
