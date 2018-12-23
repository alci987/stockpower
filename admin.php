<?php 

	#incluindo os arquivos
	include_once 'config.php';
	include_once 'validate.php';

	#testando a sessão

	session_start();

	if (!isset($_SESSION['admin'])) {
		header("location: index.php?error=access_denied");

	}
	#Recuperando os dados da sessão
	$user = $_SESSION['admin'];

	#Título da página
	$page_title = "Admin " . $user['name'];

	#Função de gerenciamento de conteúdo
	function page_content(){
		validate_option();
	}

	#incluindo o Layout
	include_once 'template.html';

 ?>