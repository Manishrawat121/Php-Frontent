<?php
require 'connection.php';

$username = $_POST['username'];
$Password = $_POST['password'];

$data="select *  from registration where registration.email_id='$username' and registration.pass='$Password' ";

$run_qery = mysqli_query($connect,$data);
$view	  = mysqli_fetch_array($run_qery);

if (mysqli_num_rows($run_qery)) {			
	session_start();

	$_SESSION['username'] = $username;
	$_SESSION['id']		  =$view['id'];
		//echo $_SESSION['id'];
		//echo" login success";
	header('location:index2.php');
	// code...
}else{ 
		echo "login fail";
	}
?>