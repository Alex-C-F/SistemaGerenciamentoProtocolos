<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body bgcolor="#E0FFFF"><center>
	<?php
	
	
	include("conect_db.php");
	$codigo = $_GET['delete'];


	$busca = mysql_query("DELETE from protocolo where idprotocolo = '$codigo'") or die ("<center>><BR><BR><BR><BR><b><h2>Erro ao excluir protocolo cadastrado</b></h2></center>");
	
	echo("<center><BR><BR><BR><BR><b><h2>Protocolo excluido com sucesso</b></h2></center>");
	
	?>
    <script type="text/javascript">
   window.setTimeout("location.href='adm_protocolos.php';", 3000);
</script>

</body></center>
</html>