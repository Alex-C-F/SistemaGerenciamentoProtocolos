<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Clientes cadastrados</title>
</head>

<body bgcolor="#E0FFFF">
<center><h3><font face="Arial" color="#000000" ><b> Protocolos correspondentes a pesquisa</font></h3></center>

<?php
	include("conect_db.php");
	$opcao = $_POST['opcao'];
	$pesq = $_POST['pesquisa'];
	
	if($opcao == "num"){
		$sql = "select * from protocolo where numprotocolo like ('%$pesq%') order by idprotocolo";
	}else if ($opcao == "desc"){ 
		$sql = "select * from protocolo where descricao like ('%$pesq%') order by idprotocolo";
	}else{
		$sql = "select * from protocolo where nomealuno like ('%$pesq%') order by idprotocolo";
	}
	
	$busca = mysql_query($sql)
		or die ("<center><BR><BR><BR><BR><b><h2>Erro ao realizar busca de protocolos cadastrados</h2></b></center>");
	
	$lista = "";
	while($reg = mysql_fetch_assoc($busca)){

	echo "<br/>";
		echo "<BR>Nome do protocolo: ".$reg["numprotocolo"];
		echo "<BR>Nome do aluno: ".$reg["nomealuno"];
		echo "<BR>Contrato: ".$reg["contrato"];
		echo "<BR>Telefone: ".$reg["telefone"];
		echo "<BR>Descrição: ".$reg["descricao"]."<hr/>";
		
		$lista = $lista. "<BR><BR>"."<BR>Nome do aluno: ".$reg["nomealuno"]."<BR>Telefone: ".$reg["telefone"]."<BR>Descrição: ".$reg["descricao"]."<hr/>";
		
	}
	$saida = mysql_num_rows($busca); 
	if($saida<=0){
		echo "<center><BR><BR><BR><BR><b><h2>Sem protocolos cadastrados!</h2></b></center>";
	}else{?>


<form method="post" action="impressao_protocolos.php?busca= <?php echo $lista; ?> " target="_blank">
	<center><input type="submit" value="Modo de Impressão" /></center>
</form>
<?php }
	
	mysql_close($link);
	?>
</body>
</html>