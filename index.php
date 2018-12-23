<html>
	<?php 
		session_start();
		if (isset($_SESSION['admin'])) {
			header("location: admin.php");
		}elseif(isset($_SESSION['func'])){
			header("location: func.php");

		}
	 ?>

	<head>
		<title>Bootstrap</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<link rel="stylesheet" href="css/style.css">

		
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

	</head>
	<body>

    	<div class="container">
			<div class="row "style="margin-top:50px">
				<div class="col-md-6 offset-3 jumbotron">
		<form role="form" method="post" action="login.php">
			<fieldset>
				<h2>Por favor, se loge</h2>
				<hr class="colorgraph">
				<div class="form-group">
                    <input type="email" name="email" required id="email" class="form-control input-lg" placeholder="Email">
				</div>
				<div class="form-group">
                    <input type="password" name="password" required id="password" class="form-control input-lg" placeholder="Senha">
				</div>
				<span class="button-checkbox">
					<button type="button" class="btn" data-color="info">Lembrar</button>
                    <input type="checkbox" name="remember_me" id="remember_me" checked="checked" class="hidden">
					<a href="" class="btn btn-link pull-right">Esqueceu a senha?</a>
				</span>
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
                        <input type="submit" class="btn btn-lg btn-success btn-block" value="Logar">
					</div>
					
				</div>
			</fieldset>
		</form>
	</div>
</div>

</div>
<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>