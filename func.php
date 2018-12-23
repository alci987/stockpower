<?php //Arquvo usado para inserir a página do funcionário

	#incluindo os arquivos
	include_once 'config.php';
	include_once 'validate.php';

	#testando a sessão

	session_start();

	if (!isset($_SESSION['func'])) {
		header("location: index.php?error=access_denied");

	}
	#Recuperando os dados da sessão
	$user = $_SESSION['func'];

	#Título da página
	$page_title = "Funcionário " . $user['name'];

	#Função de gerenciamento de conteúdo
	function page_content(){
		validate_option();
	}

	#incluindo o Layout
	include_once 'template.html';

 ?>