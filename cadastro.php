<!DOCTYPE html>
    <html>
        <head>
            <title> C </title>
            <meta charset="UTF-8">
        </head>	
            <body>
                <?php
                    $id = $_POST['nome']; // Suponha que id foi gerado aleatoriamente. Poderia ser um número.
                    echo "Voce está cadastrado. Chame os seus amigos e ganhe pontos!";
                    echo "<br>";
                    echo "Para isso, é só passar http://localhost:8081/cadastro/index.php?id=: ". $id ."!";
                   ?>
            </body>
    </html>
