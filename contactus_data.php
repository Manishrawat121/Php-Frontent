<?php
$connect = mysqli_connect('localhost','root','','shadow_technology');

     if($connect){
         echo "succesfull";
     }
     else{
         echo "connection fail";
     }


$fname     = $_POST['fname'];
$lname     = $_POST['lname'];
$email     = $_POST['email'];
$phone     = $_POST['mobile'];
$comment   = $_POST['comment'];

    $sql = "INSERT INTO `contactus_data` (`First_name`, `Last_name`, `email`, `mobile`, `comment`) 
            VALUES ('$fname', '$lname', '$email', '$phone', '$comment')";

$runquery = mysqli_query($connect,$sql);
print_r($runquery);

     if ($runquery)
     {
         echo "success";
         header('location:index.php');
     }
     else{
         echo "Error";
   }


?>