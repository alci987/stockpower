<?php 

	$products = file("products.txt");

	unset($products[$_GET['filter']]);

	unlink("products.txt");


	#transformando o array em string
	$products = implode("", $products);

	#recriando o arquivo
	$archive = fopen("products.txt", "a+");
	fwrite($archive, $products);
	fclose($archive);

	header("location: admin.php?option=list_products");
 ?>