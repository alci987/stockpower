<?php 

	#incluindo os arquivos necesários
	include_once 'config.php';
	include_once 'database.php';

	#Recebendo os dados do formulário
	$email = $_POST['email'];
	$password = $_POST['password'];


	#Testando os dados do form com o 'banco'
	foreach ($users as $user) {
		#verificando se o usuario realmente esta na base
		if ($email == $user['email'] && $password == $user['password']) {
			
			#iniciar os dados de sessão
			session_start();
			if ($user['type_user'] == 'admin') {
				$_SESSION['admin'] = $user;
			}elseif ($user['type_user'] == 'func') {
				$_SESSION['func'] = $user;
			}
			header("location: index.php");

			$login = true; 

		#verificando se o usuario errou a senha	
		}elseif ($email == $user['email'] && $password != $user['password']) {
			
			$error = "password_incorrcet";
			break;
		}
	}

	if (@$error ==  "password_incorrcet") {
		header("location: index.php?error=password_incorrcet");

	}elseif (!$login) {
		header("location: index.php?error=user_not_found");
	}

 ?>