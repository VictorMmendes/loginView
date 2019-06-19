<?php
	header('Content-Type: application/json');

	if(isset($_POST["username"]) && isset($_POST["password"]))
	{
		$response = null;
		require_once("../DAO/FornecedorDAO.php");
		$username = $_POST["username"];
		$password = $_POST["password"];

		$authUser = new FornecedorDAO();
		$response = $authUser->auth($username, $password);
	}

	echo json_encode($response->getNome());
?>