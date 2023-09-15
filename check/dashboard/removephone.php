<?php
	session_start();
	ob_start();
	
	include('includes/db.php');


	$id = $_GET['id'];

	$query = "DELETE FROM phonedetails WHERE `phonedetails`.`id`='$id'";
	$result = mysqli_query($connection, $query);
	if ($result) {
		header("Refresh:0; url='phone.php'");
		echo "<script>alert('Details Removed!')</script>";
	}else{
		echo "<script>alert('Error, Please Try Again Later!')</script>";
	}
?>