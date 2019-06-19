<?php
	$server = "localhost";
	$user = "root";
	$password = "";
	$bd = "mydb";

	$conn = new mysqli($server,$user,$password,$bd);

	// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>