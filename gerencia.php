<!DOCTYPE html>
<html>
<head>
	<title> Gerencia.php </title>
	<meta charset="UTF-8">
</head>	
<body>
<?php
	$operacao = $_POST["operacao"];
	if (strcmp($operacao, "inclusao") == 0 ) {
		// realiza a inclusão do produto
		echo "Produto incluído com sucesso.";
	}
	
	if (strcmp($operacao, "exclusao") == 0 ) {
		// realiza a exclusão do produto
		echo "Produto excluído com sucesso.";
	}
        
        if (strcmp($operacao, "atualizar") == 0 ) {
		// realiza a atualização do produto
		echo "Produto atualizado com sucesso.";
        }
?>
</body>
</html>