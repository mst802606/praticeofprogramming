<?php

	$dbServername = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "orbital";

	$con = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

	if (!$con) {

		echo "Database is not Connected";

	}

?>