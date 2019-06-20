<?php
	session_start();
	if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] == true){
		if(isset($_SESSION["username"]) && isset($_SESSION["password"]))
		{
			header("Location: welcome.php");
		}
	}

	$warning = "";
	if(isset($_POST["username"]) && isset($_POST["password"])){
		$response = null;
		require_once("./DAO/FornecedorDAO.php");
		$username = $_POST["username"];
		$password = $_POST["password"];

		$authUser = new FornecedorDAO();
		$response = $authUser->auth($username, $password);

		if (is_null($response)){
			$warning = "Usuário ou senha inválidos";
		} else {
			if($response->getAcessoPermitido() == "N"){
				$warning = "Você não tem permissão para acessar";
			} else {
				$_SESSION["logged_in"] = true;
				$_SESSION["username"] = $response->getUsuario();
				$_SESSION["password"] = $response->getSenha();
				header("Location: welcome.php");
			}
		}		
	}	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./resources/css/app.css">
	<link rel="stylesheet" type="text/css" href="./resources/css/open-iconic-master/font/css/open-iconic-bootstrap.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">Infotech<span class="oi oi-home" style="margin-left: 5px;"></span></a>
	  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    	<span class="navbar-toggler-icon"></span>
	  	</button>

	  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
	    	<ul class="navbar-nav mr-auto">
	    	</ul>
	    	<form action="" class="form-inline my-2 my-lg-0">
	      		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">
	      			Sign up
	      		</button>
	    	</form>
	  	</div>
	</nav>
	<form action="index.php" method="post">
		<div class="container-fluid">
			<div class="row window">
				<div class="col-md-6 offset-md-3 col-xl-4 offset-xl-4">
					<div class="row card">
						<div class="col-sm-12">
							<h4>Sign in</h4>
						</div>
						<div class="input-group col-sm-12">
							<div class="input-group-prepend correct-margin">
								<span class="input-group-text oi oi-envelope-closed correct-margin" aria-hidden="true"></span>
							</div>
							<input class="form-control" type="email" name="username" id="username" placeholder=" Username" required>
						</div>	
						<div class="input-group col-sm-12">
							<div class="input-group-prepend correct-margin">
								<span class="input-group-text oi oi-lock-locked correct-margin" aria-hidden="true"></span>
							</div>
							<input class="form-control" type="password" name="password" id="password" placeholder=" Senha" required>
							<div class="input-group-append">
								<button type="submit" class="btn btn-outline-success">Login</button>
							</div>
						</div>
						<div class="col-sm-12">
							<h6 class="danger"><?= $warning ?></h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
	<footer>
		<nav>
			<p>Infotech - Tecnologia de Sistemas</p>
			<p>
				<a target="_blank" href="https://www.facebook.com/infotechinfo/">
					<i class="fa fa-facebook" style="font-size:20px"></i>
				</a>
			</p>
			<p>2008 - <?= date("Y"); ?></p>
		</nav>
	</footer>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>