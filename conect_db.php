<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>conexão com o banco de dados</title>
</head>

<body>
<?php
	$link = @mysql_connect("localhost", "root", "")
		or die("<h1>Não foi possivel conectar!!</h1>").mysql_error();
	
	$banco = @mysql_select_db("protocolos_prepara", $link)
		or die ("<h1>Erro ao abrir o banco de dados!</h1><BR><BR>").mysql_error();

?>
</body>
</html>