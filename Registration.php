

<?php
include 'connection.php';
$nameer= ''; 
$emailer= '';
$mobileer= '';
$cityer= '';
$genderer = '';
if(isset($_POST['submit'])){

$name        = $_POST['name'];
$number      = $_POST['number'];
$email       = $_POST['email'];
$dob         = $_POST['dob'];

if(isset($_POST['gender'])){
  $gender      = $_POST['gender'];
}

$city        = $_POST['city'];
$photo       = $_FILES['photo']['name'];
$tmp_name    = $_FILES['photo']['tmp_name'];
move_uploaded_file($tmp_name,"../img/$photo");
$password    = $_POST['password'];
$cpassword   = $_POST['cpassword'];



if($name == "" && $email == "" && $number == ""  && $city == "" && $password == "" && $cpassword == ""){

$nameer = "*Enter Name";
$emailer = "*Enter Email";
$mobileer = "*Enter Phone no"; 
$cityer  = "*Enter City";
} 
//Number Validation  
    elseif(strlen($number)!=10) {  
            $mobileer = "Mobile no is should be 10";  
    } 


else {  
          $sql = "INSERT INTO `registration` (`name`, `phone_no`, `email_id`, `d_o_b`, `gender`, `city`,`photo`, `pass` )
            VALUES ('$name', '$number', '$email', '$dob', '$gender', '$city',  '$photo' ,'$password')";

$runquery = mysqli_query($connect,$sql); 
if($runquery) {
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
}
     } 

?>


<?php include "header.php";?>

  <!-- Form -->
  <div class="container ">
    <div class="row col-md-12">
      <div class="row col-md-2"></div>
      <div class="row col-md-8">
        <div class="panel">
          <div class="panel-heading text-center working text-white">
            <h1>Registration Form </h1>
          </div>

          <div class="panel-body">
                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="name"> Name </label>
                      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
                      <span style="color:red"><?php echo  $nameer; ?> </span> 
                    </div><br>

                    <div class="form-group">
                      <label for="number"> Phone no</label>
                      <input type="number" class="form-control" id="number" placeholder="Enter Number" name="number" >
                      <span style="color:red"><?php echo $mobileer; ?> </span>
                    </div><br>

                    <div class="form-group">
                      <label for="email">Email Id</label>
                      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" >
                      <span style="color:red"><?php echo  $emailer; ?> </span>
                    </div><br>

                    <div class="form-group">
                      <label for="dob">Date of Birth</label>
                      <input type="date" class="form-control" id="dob" placeholder="Enter Dob" name="dob">

                    </div><br>

                    <div class="form-group">
                      <label for=""> Gender </label>
                      <div>
                        <label for="male" class="radio-inline">
                          <input type="radio" name="gender" id="male" value="male">Male
                        </label>
                        <label for="female" class="radio-inline">
                          <input type="radio" name="gender" id="female" value="female">Female
                        </label>
                        <label for="other" class="radio-inline">
                          <input type="radio" name="gender" id="other" value="other">Other
                        </label>
                        <span style="color:red"> <?php echo $genderer; ?> </span>
                      </div>
                      
                    </div><br>

                    <div class="form-group">
                      <label for="city"> City </label>
                      <input type="text" class="form-control" id="city" placeholder="Enter city" name="city" >
                      <span style="color:red"> <?php echo $cityer; ?> </span>
                    </div><br>

                    <div class="form-group">
                      <label for="photo"> Photo </label>
                      <input type="file" class="form-control" id="photo" name="photo">
                    </div><br>

                    <div class="form-group">
                      <label for="pass"> Password </label>
                      <input type="password" class="form-control" id="pass" placeholder="Enter password" name="password" minlength="8" >
                    </div><br>

                    <div class="form-group">
                      <label for="cpass"> Confirm Password </label>
                      <input type="password" class="form-control" id="cpass" placeholder="Enter password" name="cpassword" minlength="8" >
                    </div><br>

                    <input type="submit" class="btn working text-white" name="submit">
              </form>
        </div>
      </div>
    </div>
  </div>
</div>

  <?php include "footer.php";?>