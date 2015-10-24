<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Protocolos cadastrados</title>
</head>

<body bgcolor="#E0FFFF">
<?php
	$login = @$_COOKIE['login'];
	
	if (isset($login)){?>
		<center><h2><font face="Arial" color="#000000" ><b> Lista de todos os protocolos</font></h2></center>

<?php
	include("conect_db.php");
	
	$lista = $_GET['busca'];
	
	echo $lista;


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