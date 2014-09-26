<!DOCTYPE html>
<html>
<head>
	<title> Cadastro.php </title>
	<meta charset="UTF-8">
</head>	
<body>
            <?php
                $nome = $_POST["nome"];
                $email = $_POST["email"];
	
                $id = $nome; // Suponha que id foi gerado aleatoriamente. Poderia ser um número.
	
                echo "Você está cadastrado. Chame os seus amigos e ganhe pontos. ";
                echo "<br>";
                echo "Para isso, é só passar <a href=http://localhost:8081/cadastro/cadastro/index.php>este</a> link a ele. Obrigado,". $id ."!";
            ?>
</body>
</html>