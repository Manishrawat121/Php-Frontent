<?php
include 'connection.php';

if(isset($_POST['submit'])){

$name        = $_POST['name'];
$number      = $_POST['number'];
$email       = $_POST['email'];
$dob         = $_POST['dob'];
$gender      = $_POST['gender'];
$city        = $_POST['city'];
$photo       = $_FILES['photo']['name'];
$tmp_name    = $_FILES['photo']['tmp_name'];
move_uploaded_file($tmp_name,"../img/$photo");
$password    = $_POST['password'];
$cpassword   = $_POST['cpassword'];


if($password===$cpassword){

    $sql = "INSERT INTO `registration` (`name`, `phone_no`, `email_id`, `d_o_b`, `gender`, `city`,`photo`, `pass` )
            VALUES ('$name', '$number', '$email', '$dob', '$gender', '$city',  '$photo' ,'$password')";

$runquery = mysqli_query($connect,$sql);


if($runquery){


            ?>
            <script>
                alert("Registration Successfully");
                window.location.href = "log_in.php";
            </script>
            <?php
        }else{
            ?>
            <script>
                alert("Data Not Inserted");
            </script>
            <?php
        }
        }else{
            ?>
            <script>
                alert("Password Not Match");
                window.location.href = "Registration.php";
            </script>
            <?php
    }
}

?>
