<?php
	session_start();
	ob_start();


	// $branch = $_SESSION['branch'];


	include('includes/db.php');

	if (isset($_POST['phonename'])) {
		$phonename = $_POST['phonename'];
		// $quantity = $__halt_compiler()OST['quantity'];


			// $branch = $_SESSION['branch'];

		// echo $phonename.$quantity;

		// $query = "INSERT INTO phonedetails (nameandprice, branch, no, dateandtime) VALUES ('$phonename', 'taiwo', '$quantity', null)";

		$query = "INSERT INTO `phonename` (`id`, `phonename`) VALUES (NULL, '$phonename');";
		$result = mysqli_query($connection, $query);
		if ($result) {
			echo "success";
		}else{
			echo "Error";
		}
	}
?>