<!DOCTYPE html>
    <html>
        <head> 
            <title>Etapa 1</title> 
            <meta charset="UTF-8">
        </head>
            <body> 
                <p align="center"><big><big>
                    <strong>Cadastramento - Etapa 1 de 3</strong></big></big>
                </p> 
	
                <form method="POST" action="etapa2.php"> 
                    <div align="center">
                            <center> 
                                <p>Nome: <input type="text" name="nome" size="20" value="<?php echo $_POST['nome']?>"></p>
                                <?php $nome = $_POST['nome']; if(empty($nome)){echo "Verifique o preenchimento do campo Nome.<br>"; $erro=TRUE;}?>
                            </center>
                    </div>
		
                    <div align="center">
                            <center> 
                                <p>E-mail: <input type="email" name="email" size="30" value="<?php echo $_POST ['email'] ?>"></p>
                            </center>
                    </div>
		
                    <div align="center">
                            <center> 
                                <p>Data de nascimento: <input type="date" name="datanascimento" size="10"></p>
                            </center>
                    </div>
		
                    <div align="center">
                            <center> 
				<p> 
                                    Sexo: 
                                    <input type="radio" value="masculino" checked name="sexo">Masculino&nbsp;&nbsp; 
                                    <input type="radio" name="sexo" value="feminino">Feminino
				</p> 
                            </center>
                    </div>
		
                    <div align="center">
                            <center> 
				<p>
                                    Profissão: <input type="text" name="profissao" size="30">
				</p> 
                            </center>
                    </div>
		
                    <div align="center">
                            <center>
				<p>	
                                    <input type="submit" value="Prosseguir &gt;&gt;" name="prosseguir">
				</p> 
                            </center>
                    </div> 
                </form> 
            </body> 
    </html> 