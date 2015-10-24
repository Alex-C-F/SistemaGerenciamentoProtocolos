<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Salvar dadost</title>
</head>

<body>

<?php
	
	$num_protocolo = $_POST['num_protocolo'];
	$descricao_protocolo = $_POST['descricao'];
	$nome_aluno =  $_POST['nome_aluno'];
	$contrato  = $_POST['contrato'];
	$telefone = $_POST['telefone'];
	
	
	include"conect_db.php";
	
	if($descricao_protocolo != "" && $num_protocolo != "" && $nome_aluno != "" && $contrato != "" && $telefone != "" ){
			   
					$sql = "INSERT INTO protocolo (numprotocolo, nomealuno,descricao, contrato, telefone) values ('$num_protocolo','$nome_aluno','$descricao_protocolo','$contrato','$telefone')";
					$busca = mysql_query($sql) or die ("Erro na inserção de dados protocolo");
					
					echo("<script>window.alert('Cadastro realizado com sucesso!')</script>");
					echo("<script language= JavaScript>setTimeout(document.location = 'cad_protocolo.php',5000)</script>");
										    die();
				
		}else{
			echo("<script>window.alert('Falta(m) preencher algun(s) campo(s)!')</script>");
			echo("<script language= JavaScript>setTimeout(document.location = 'cad_protocolo.php',5000)</script>");
		}
		
		mysql_free_result($busca);
		mysql_close($link);
	
	
	
?>
</body>
</html>