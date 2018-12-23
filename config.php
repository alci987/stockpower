<?php 
	/** 
	* @author: Alciliano
	* @project: "StockPower V.1"
	* @package: project
	* @version: 1.0
	* @date: Fortaleza, 17 de Dezembro de 2018
	*
	*Arquivo responsável por guardar as configurações do sistema
	**/

	# Exibição dos erros
	ini_set("display_errors", 1);

	# Rotas
	# Nome do projeto (diretório)
	$project_name = "/utd/project2";

	# Url base do Sistema (link)
	$project_index = "http://" . $_SERVER['SERVER_NAME'].$project_name;

	#Url Básica do Sistema (path)
	$project_path = $_SERVER['DOCUMENT_ROOT']. $project_name;

	#globalizando as variáveis de rotas
	$GLOBALS['project_index'] = $project_index;
	$GLOBALS['project_path'] = $project_path;


 ?>