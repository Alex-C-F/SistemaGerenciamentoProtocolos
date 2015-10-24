<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>editar protocolo</title>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'/>
<link rel="stylesheet" type="text/css" href="CSS/style2.css"/>
</head>

<body bgcolor="#E0FFFF">
<?php
	$login = @$_COOKIE['login'];
	
	if (isset($login)){?>
		<div id="login" class="bradius"/>
    <div class="message"> </div>
    <div class="logo"></div>
    <div class="acomodar"/>
<?php
	include("conect_db.php");
	$editar = $_GET['editar'];
	
	
	$busca = mysql_query("Select * from protocolo where idprotocolo = '$editar' ") or die ("<center><BR><BR><BR><BR><b><h2> erro ao realistar busca de contatos cadastrados</h2></b></center>");
	
	while($reg = mysql_fetch_assoc($busca)){
	
?>
	<form name="form1" method="post" action="editar_protocolo2.php?editar= <?php echo $reg['idprotocolo'];?>">
       <label for="email"> Protocolo de número</label><input id="senha"type="text" class="txt bradius" name="numprotocolo" readonly="readonly" value=<?php echo $reg['numprotocolo'];?> />
     
     <label for="senha"> Nome do aluno </label> <input id="senha" type="text" class="txt bradius" value="<?php echo $reg['nomealuno'];?>" name="nome_aluno"/>
     
     <label for="senha"> Contrato</label> <input id="senha" type="text" class="txt bradius" value="<?php echo $reg['contrato'];?>" name="contrato"/>
     
     <label for="senha"> Telefone</label> <input id="senha" type="text" class="txt bradius" value="<?php echo $reg['telefone'];?>" name="telefone"/>
     
     <label for="senha"> Descrição</label> <input id="senha" type="text" class="txt bradius" value="<?php echo $reg['descricao'];?>" name="descricao"/>
     
    
    <?php
	}
	?>
    
        <br/>
        <br/>
        	 <input type="submit" class="sb bradius" value="Salvar Alterações"/> </center>
    </form>
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