<!DOCTYPE html>
    <html>
        <head>
            <title> Produto </title>
            <meta charset="UTF-8">
        </head>	
            <body>
                <form method="POST" action="cadastro.php" >
                  
                    <h3> Confira seus dados e finalize o processo de cadastramento </h3>
                        
                    <?php $username = $_POST['username']; if(strlen($username)<6 OR empty($username))
                    {echo "Verifique o preenchimento do campo Username (deve possuir, no mínimo, 6 caracteres).<br/>";}?>
                    
                    <?php $senha = $_POST['senha']; if (strlen($senha)<5 OR empty($senha)) 
                    {echo "Verifique o preenchimento do campo Senha (deve possuir, no mínimo, 5 dígitos).<br/>";}?>
                    
                        <?php
                             echo "<br>";
                             echo "Verifique seu cadastro:";
                             echo "<br>";
                             echo "Nome: ".$_POST['nome']."<br/>";
                             echo "Email: ".$_POST['email']."<br/>";
                             echo "Data de nascimento: ".$_POST ['datanascimento']." (aaaa/mm/dd) <br/>";
                             echo "Sexo: ".$_POST['sexo']."<br/>";
                             echo "Profissão: ".$_POST['profissao']."<br/>";
                             echo "Telefone: ".$_POST['telefone']."<br/>";
                             echo "Endereço: ".$_POST['endereco']."<br/>";
                             echo "Cidade: ".$_POST['cidade']."<br/>"; 
                             echo "Estado: ".$_POST['estado']."<br/>";
                             echo "CEP: ".$_POST['cep']."<br/>";
                             echo "Username: ".$_POST['username']."<br/>";
                             echo "<br>";
                             echo "<br>";
                             echo "Caso encontre algum erro, pode recomeçar clicando <a href=http://localhost:8081/cadastro/form.html>aqui</a>.";
                        ?>
                    <br/>
                    <?php include 'cadastro.php'; ?>
                </form>
            </body>
    </html>