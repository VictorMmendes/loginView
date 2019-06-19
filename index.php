<?php
	

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./resources/css/app.css">
	<link rel="stylesheet" type="text/css" href="./resources/css/open-iconic-master/font/css/open-iconic-bootstrap.css">
</head>
<body>
	<form action="./API/login_action.php" method="post">
		<div class="container-fluid">
			<div class="row">
				<div class=" col-md-4 offset-md-4">
					<div class="row card">
						<div class="col-sm-12">
							<h4>Sign in</h4>
						</div>
						<div class="input-group col-sm-12">
							<div class="input-group-prepend correct-margin">
								<span class="input-group-text oi oi-envelope-closed correct-margin" aria-hidden="true"></span>
							</div>
							<input class="form-control" type="email" name="username" id="username" placeholder=" E-mail ou username">
						</div>	
						<div class="input-group col-sm-12">
							<div class="input-group-prepend correct-margin">
								<span class="input-group-text oi oi-lock-locked correct-margin" aria-hidden="true"></span>
							</div>
							<input class="form-control" type="password" name="password" id="password" placeholder=" Senha">
							<div class="input-group-append">
								<button type="submit" class="btn btn-outline-success">Login</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>