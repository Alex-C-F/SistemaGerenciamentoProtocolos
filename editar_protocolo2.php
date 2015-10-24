<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body  bgcolor="#E0FFFF"><center>
	<?php 
		$id_protocolo = $_GET['editar'];
		$num_p = $_POST['numprotocolo'];
		$nome_a = $_POST['nome_aluno'];
		$descricao = $_POST['descricao'];
		$contrato = $_POST['contrato'];
		$telefone = $_POST['telefone'];
		
		include"conect_db.php";
		
		#consultar no banco se existe o mesmo protocolo para o mesmo aluno
	
			$sql = "update protocolo set numprotocolo ='$num_p',nomealuno ='$nome_a', descricao ='$descricao',contrato = '$contrato',telefone = '$telefone' where idprotocolo = '$id_protocolo'";
			$busca = mysql_query($sql) or die ("Erro na inserção de dados protocolo");
			
			echo("<script>window.alert('Alteração realizada com sucesso!')</script>");
			echo("<script language= JavaScript>setTimeout(document.location = 'adm_protocolos.php',5000)</script>");	
	?>
</body>
</html>