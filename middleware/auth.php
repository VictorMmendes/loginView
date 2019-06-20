<?php
	session_start();
	if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] == false){
		header("Location: index.php");
	}

	if (!isset($_SESSION["username"]) || !isset($_SESSION["password"]) || is_null($_SESSION["username"]) || is_null($_SESSION["password"]))
	{
		header("Location: index.php");
	}

	if (isset($_POST["logout"]) && $_POST["logout"] == true){
		session_destroy();
		header("Location: index.php");
	}

	$username = $_SESSION["username"];
?>