<?php 
	#iniciando a sessão
	session_start();

	session_destroy();
	header("location: index.php?success=session_finish");
 ?>