<?php 
	#incluindo as configurações
	include_once 'config.php';

	#testando se existe alguem logado
	session_start();
	if (!isset($_SESSION['admin'])){
		header("location index.php?error=access_denied");
	}

	#Recuperando os dados do usuário
	if (isset($_SESSION['admin'])) {
		$user = $_SESSION['admin'];
	}elseif ($_SESSION['func']) {
		$user = $_SESSION['func'];
	}

	#Recebendo os ddos do formulário
	$manager = $_POST;

	#Transformando o array em string
	$manager = implode(" - ", $manager);

	#dando permissão pra escrever arquivo
	echo `chmod -R 777 /var/www/html/projec2`;

	#Abrindo o arquivo
	$archive = fopen("manager.txt", "a+");

	#Escrevendo o arquivo
	fwrite($archive, $manager);
	fwrite($archive, "\n");

	#Fechando o arquivo
	fclose($archive);

	#redirecionando
	header("location: $project_index/" .$user['type_user'].".php?option=list_manager&success=insert_ok");
 ?>