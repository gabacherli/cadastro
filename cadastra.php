<!DOCTYPE html>
<html>
<head>
	<title> Cadastra.php </title>
	<meta charset="UTF-8">
</head>	
<body>
    <form method="POST" action="cadastra.php"> 
        <?php
        echo "Você está cadastrado! Analise novamente suas informações.";
        echo "<br>";
        echo "Para chamar seus amigos e ganhar pontos, basta enviar <a href=http://localhost:8081/cadastro/cadastro/etapa1.php>este</a> link a eles!";
        echo $nome;
        echo $email; 
        echo $datanascimento;
        echo $sexo;
        echo $profissao;
        echo $telefone;
        echo $endereco;
        echo $cidade;
        echo $estado;
        echo $cep;
        echo $username;
        echo $senha;
        echo $confirma_senha;
?>
