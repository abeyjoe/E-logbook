<?php

	session_start();
	ob_start();
	
	include('includes/db.php');

	$branch = $_GET['branch'];


	$query = "UPDATE phonedetails SET status=1 WHERE branch='$branch' and DATE(dateandtime) = DATE(NOW())";
	$result = mysqli_query($connection, $query);
	if ($result) {
		header("Refresh:0; url='phone.php'");
		echo "<script>alert('Details Updated!')</script>";
	}else{
		header("Refresh:0; url='phone.php'");
		echo "<script>alert('Error in updating details!')</script>";
	}

?>