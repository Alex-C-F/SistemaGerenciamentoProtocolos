<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'/>
<link rel="stylesheet" type="text/css" href="CSS/styleFont.css"/>
<title>Protocolos cadastrados</title>
</head>

<body bgcolor="#E0FFFF">
<?php
	$login = @$_COOKIE['login'];
	
	if (isset($login)){?>
		<center><h2><font face="Arial" color="#000000" ><b> Listagem de todos os protocolos cadastrados</font></h2></center>

<?php
	include("conect_db.php");
	
	$busca = mysql_query("select * from protocolo")
		or die ("<center><BR><BR><BR><BR><b><h2>Erro ao realizar busca de protocolos cadastrados</h2></b></center>");
		$saida = mysql_num_rows($busca);
		if ($saida <=0){
			echo "<center><BR><BR><BR><BR><b><h2>Sem resultado na pesquisa!</h2></b></center>";
		}else {
			$busca = mysql_query("select * from protocolo order by idprotocolo")
		or die ("<center><BR><BR><BR><BR><b><h2>Erro ao realizar busca de protocolos cadastrados</h2></b></center>");
	while($reg = mysql_fetch_assoc($busca)){

		echo "<br/>";
		echo "<BR>Protocolo de número: ".$reg["numprotocolo"];
		echo "<BR>Nome do aluno: ".$reg["nomealuno"];
		echo "<BR>Contrato: ".$reg["contrato"];
		echo "<BR>Telefone: ".$reg["telefone"];
		echo "<BR>Descrição: ".$reg["descricao"]."<hr/>";
		
		
	}
		}
	
	
	
	mysql_free_result($busca);
	mysql_close($link);
	
?>
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