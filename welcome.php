<?php
	require_once("./middleware/auth.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Agroport - Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./resources/css/welcome.css">
	<link rel="stylesheet" type="text/css" href="./resources/css/open-iconic-master/font/css/open-iconic-bootstrap.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">Infotech</a>
	  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    	<span class="navbar-toggler-icon"></span>
	  	</button>

	  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
	    	<ul class="navbar-nav mr-auto">
	      		<li class="nav-item active">
	        		<a class="nav-link" href="">
	        			Home
	        			<span class="oi oi-home"></span>
	        			<span class="sr-only">(current)</span></a>
	      		</li>
	    	</ul>
	    	<form class="form-inline my-2 my-lg-0" action="" method="post">
	    		<input type="hidden" name="logout" id="logout" value="true">
	    		<div class="input-group-prepend">
		    		<button class="input-group-text btn btn-outline-secondary" disabled>
		    			<span class="oi oi-person" style="margin-right: 5px;"></span>
		    			<?= $username ?>
		    		</button>
		    	</div>
	      		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">
	      			Sair
	      			<span class="oi oi-account-login"></span>
	      		</button>
	    	</form>
	  	</div>
	</nav>
	<div class="container-fluid">
		<div class="row window">
			<nav class="col-sm-3 menu-left">
				<nav class="row small-card">
					Consultar Caminhões
				</nav>
				<nav class="row small-card">
					Action
				</nav>
				<nav class="row small-card">
					Action
				</nav>
				<nav class="row small-card">
					Action
				</nav>
				<nav class="row small-card">
					Action
				</nav>
				<nav class="row small-card">
					Action
				</nav>
				<nav class="row small-card">
					Action
				</nav>
			</nav>
			<div class="col-sm-9 form">
				<h4>Consultar caminhões</h4>
				<div class="row">
					<div class="col-sm-3">
					  <div class="form-group">
					    <label for="placa">Placa do veículo</label>
					    <input type="text" name="placa" id="placa" class="form-control" placeholder=" Placa" required>
					  </div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label for="nPedido">Nº Pedido</label>
							<input type="text" name="nPedido" id="nPedido" class="form-control" placeholder=" Nº Pedido" required>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="form-group">
							<label for="cliente">Cliente</label>
							<input type="text" id="cliente" name="cliente" class="form-control" placeholder=" Nome do cliente" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3">
					  <div class="form-group">
					    <label for="placa">Produto</label>
					    <input type="text" name="produto" id="produto" class="form-control" placeholder=" Nome do produto" required>
					  </div>
					</div>
					<div class="col-sm-4" style="margin-top: 7px;">
						<div class="form-group">
							<label for="ordem">Ordenar por</label>
							<div class="w-100"></div>
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="ordem" id="ordem1" value="0">
							  <label class="form-check-label" for="ordem1">Ordem de lanç.</label>
							</div>
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="ordem" id="ordem2" value="1">
							  <label class="form-check-label" for="ordem2">Nº Da NF</label>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label for="nPedido">Itinerário</label>
							<input type="text" name="nPedido" id="nPedido" class="form-control" placeholder=" Itinerário..." required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2">
					  <div class="form-group">
					    <label for="nNf">Nº NF</label>
					    <input type="email" name="nNf" id="nNf" class="form-control" placeholder=" Nº da NF" required>
					  </div>
					</div>
					<div class="col-sm-2">
						<div class="form-group">
							<label for="nPedido">Nº Ticket</label>
							<input type="email" name="nPedido" id="nPedido" class="form-control" placeholder=" Nº do ticket" required>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>