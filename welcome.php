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
	<div class="container-fluid" style="height: 100%;">
		<div class="row">
			<nav class="col-sm-3 menu-left" style="height: 100%;">
				<nav class="row main-card">
					Infotech Sistemas de gestão
				</nav>
				<nav class="row small-card">
					Consultar Caminhões
				</nav>
				<nav class="row small-card">
					Gerar Relatórios
				</nav>
				<nav class="row small-card">
					Logout
				</nav>
			</nav>
			<div class="col-sm-9 form">
				<h5>Consulta caminhões</h5>
				<div class="row">
					<div class="col-sm-3">
					  <div class="form-group">
					    <label for="placa">Placa do veículo</label>
					    <input type="email" name="placa" id="placa" class="form-control" placeholder=" Placa" required>
					  </div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label for="nPedido">Nº Pedido</label>
							<input type="email" name="nPedido" id="nPedido" class="form-control" placeholder=" Placa" required>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="form-group">
							<label for="cliente">Cliente</label>
							<input type="email" id="cliente" name="cliente" class="form-control" placeholder=" Placa" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3">
					  <div class="form-group">
					    <label for="placa">Produto</label>
					    <input type="email" name="produto" id="produto" class="form-control" placeholder=" Placa" required>
					  </div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label for="nPedido">Itinerário</label>
							<input type="email" name="nPedido" id="nPedido" class="form-control" placeholder=" Placa" required>
						</div>
					</div>
					<div class="col-sm-4" style="margin-top: 7px;">
						<div class="form-group">
							<label for="ordem">Ordenar por</label>
							<div class="w-100"></div>
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="ordem" id="inlineRadio1" value="option1">
							  <label class="form-check-label" for="inlineRadio1">Ordem de lanç.</label>
							</div>
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="ordem" id="inlineRadio3" value="option3">
							  <label class="form-check-label" for="inlineRadio3">Nº Da NF</label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>