<?php
	class FornecedorDAO
	{
		function __construct(){}

		public function auth($username, $UserPassword)
		{
			require_once("./connectionClasses/Connection.php");
			include("./classes/Fornecedor.php");
			$r = null;
			$sql = "SELECT * FROM users WHERE email = '$username' AND password = '$UserPassword'";

			$result = $conn->query($sql);
			if ($result->num_rows > 0)
			{
			    while($row = $result->fetch_assoc())
			    {
			    	$r = new Fornecedor();
			    	$r->create($row["email"], "S", $row["password"]);
			    	break;
			    }
			} else {
			    return null;
			}
			
			return $r;
		}
	}

?>