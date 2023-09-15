<?php
	$server = "localhost";
	$user = "root";
	$password = "";
	$dbName = "logbook";

	$connection = mysqli_connect($server, $user, $password);
	mysqli_select_db($connection,$dbName);
?>