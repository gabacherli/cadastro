<!DOCTYPE html>
<html>
<head>
    <title>Etapa 2</title> 
    <meta charset="UTF-8">
</head>
    <body>
	<p align="center"><big><big>
                <strong> Cadastramento - Etapa 2 de 3 </strong></big></big>
        </p> 
        
            <form method="POST" action="etapa3.php"> 
                
 		<input type="hidden" name="nome" value= "<?php echo $_POST ['nome']; ?>"> 
                
 		<input type="hidden" name="email" value= "<?php echo $_POST ['email']; ?>"> 
                
 		<input type="hidden" name="datanascimento" value= "<?php echo $_POST ['datanascimento'];?>"> 
                <?php $datanascimento = $_POST['datanascimento']; if(strlen($datanascimento)<10 OR !strstr($datanascimento,'/')){echo "Verifique o preenchimento do campo Data de nascimento (dd/mm/aaaa). <br>"; $erro=TRUE;} ?>
                
 		<input type="hidden" name="sexo" value= "<?php echo $_POST ['sexo']; ?>"> 
                
 		<input type="hidden" name="profissao" value= "<?php echo $_POST['profissao']; ?>">
                <?php $profissao = $_POST['profissao']; if (empty($profissao)){echo "Verifique o preenchimento do campo Profissão.<br>"; $erro=TRUE;} ?>
 		
		<div align="center"><center> 
                        <p>Telefone: <input type="text" name="telefone" size="20" value="" ></p>   
 		</center></div>

		<div align="center"><center> 
                        <p>Endereço: <input type="text" name="endereco" size="20" value=""></p> 
 		</center></div>

		<div align="center"><center> 
                        <p>Cidade: <input type="text" name="cidade" size="30" value="" >&nbsp;&nbsp;&nbsp; 
                           Estado:<input type="text" name="estado" size="2" value=""></p> 
		</center></div>
		
		<div align="center"><center> 
                        <p>CEP: <input type="text" name="cep" size="9" value=""></p> 
 		</center></div>
		
		<div align="center"><center>
			<p><input type="submit" value="Prosseguir &gt;&gt;" name="prosseguir"></p> 
 		</center></div> 
            </form> 
    </body> 
</html> 