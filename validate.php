<?php 

	function validate_option(){
		if (!isset($_GET['option'])) {
			return false;
		}

		switch ($_GET['option']) {
			case 'add_product':
				include_once $GLOBALS['project_path']."/add_product.html";
				break;
			case 'list_products':
				include_once $GLOBALS['project_path']."/list_products.html";
				break;
			
			case 'add_manager':
				include_once $GLOBALS['project_path']."/add_manager.html";
				break;
			
			case 'list_manager':
				include_once $GLOBALS['project_path']."/list_manager.html";
				break;
		}
	}
 ?>