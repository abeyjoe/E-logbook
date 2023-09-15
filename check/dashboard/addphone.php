<?php
	session_start();
	ob_start();


	$branch = $_SESSION['branch'];



	include('includes/db.php');

	if (isset($_POST['phonename'])) {
		$phonename = $_POST['phonename'];
		$quantity = $_POST['quantity'];


			$branch = $_SESSION['branch'];

		// echo $phonename.$quantity;

		// $query = "INSERT INTO phonedetails (nameandprice, branch, no, dateandtime) VALUES ('$phonename', 'taiwo', '$quantity', null)";

		$query = "INSERT INTO `phonedetails` (`id`, `nameandprice`, `no`, `branch`, `dateandtime`, `status`) VALUES (NULL, '$phonename', '$quantity', '$branch', current_timestamp(), '0');";
		$result = mysqli_query($connection, $query);
		if ($result) {
			echo "success";
		}else{
			echo "Error";
		}
	}
?>