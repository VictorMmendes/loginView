<?php
	class FornecedorDAO
	{
		function __construct(){}

		public function auth($username, $password)
		{
			require_once("./connectionClasses/Connection.php");
			include("./classes/Fornecedor.php");
			$r = null;
			$sql = "SELECT * FROM fornecedores WHERE USUARIO = '$username'";

			$result = $conn->query($sql);
			if ($result->num_rows > 0)
			{
			    while($row = $result->fetch_assoc())
			    {
			    	$r = new Fornecedor();
			    	$r->create($row["USUARIO"], $row["ACESSO_PERMITIDO"], $row["SENHA"]);
			    	break;
			    }
			} else {
			    return null;
			}
			
			return $r;
		}
	}

?>