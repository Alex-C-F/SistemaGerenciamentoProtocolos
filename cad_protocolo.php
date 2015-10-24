<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'/>
<link rel="stylesheet" type="text/css" href="CSS/style2.css"/>
</head>

<body>
<?php
	$login = @$_COOKIE['login'];
	
	if (isset($login)){?>
    <?php 
 	include "conect_db.php";
	
	$cod = mt_rand(10000000,99999999);
	 $verifica = mysql_query("select * from protocolo where numprotocolo = '$cod'") or die("erro ao selecionar");
	 $saida = mysql_num_rows($verifica);
	 
	 if($saida > 0){
		 while($saida > 0){
			 $cod = mt_rand(10000000,99999999);
		 }
	}
 ?>
	<div id="login" class="bradius"/>
    <div class="message"> </div>
    <div class="logo"></div>
    <div class="acomodar">
     <form action="salvar_dados.php" method="post">
     <label for="email"> Protocolo de número</label><input id="senha"type="text" class="txt bradius" name="num_protocolo" readonly="readonly"  value=<?php echo $cod; ?> />
     
     <label for="senha"> Nome do aluno </label> <input id="senha" type="text" class="txt bradius" value="" name="nome_aluno"/>
     
     <label for="senha"> Contrato</label> <input id="senha" type="text" class="txt bradius" value="" name="contrato"/>
     
     <label for="senha"> Telefone</label> <input id="senha" type="text" class="txt bradius" value="" name="telefone"/>
     
     <label for="senha"> Descrição</label> <input id="descricao" type="text" class="txt bradius" value="" name="descricao"/>
     
     <input type="submit" class="sb bradius" value="Cadastrar"/>
     </form>
     </div>
    
    <!-- Acomodar-->

 <?php } 
	 else{
				?>
               
						<script type="text/javascript">
   window.setTimeout("location.href='index.html';", 0);
</script><?php


	}
?>
 
</body>
</html>