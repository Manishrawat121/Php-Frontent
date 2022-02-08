<?php

require 'connection.php'; ?>
<?php
if (isset($_SESSION['$user_name'])) {
	session_destroy();
	// code...
}else{
	header('location:log_in.php');
}

?>