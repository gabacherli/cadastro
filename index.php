<?php
	// isset : informa se a variável foi inicializada
	// http://br1.php.net/manual/pt_BR/function.isset.php
	
	if(isset($_GET['id']) )
		$id = $_GET['id'];
	

	echo "Bem-vindo!!!" ;
	echo "<br>";
	
	if(isset($id)) {
		echo "Quem te indicou foi " . $id;
	}

?>