<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-color:#E0FFFF;	
	
}
.style1 {
	font-size: 16px;
	font-weight: bold;
	font-style: italic;
}
a:link {
	color: #000000;
}
a:visited {
	color: #000000;
}
a:hover {
	color: #000000;
}
a:active {
	color: #000000;
}
.style5 {
	font-size: 24px;
	color: #000099;
}
.style6 {font-size: 18px}
-->
</style></head>

<body>
<?php
	$login = $COOKIE['login'];
	if (isset($login)){
		echo "<h2>Essa área é restrita, como você está logado com o usuário".$login."você pode ver esse conteúdo";
	}
	else{
				echo"Você não está logado, portanto não pode ter acesso a área restrita, será redirecionado em poucos segundos";
						?><script type="text/javascript">
   window.setTimeout("location.href='index.html';", 0);
</script><?php


	}
?>
<p align="right" class="style1">&nbsp;</p>
<p align="center" class="style1">________________<br />
  <span class="style5">Protocolos de alunos da Prepara</span><br /><br /><br /><br />
  <a href="cad_protocolo.php" target="mainFrame"><span class="style6">Cadastro de Protocolo</span><br /><br />
</a><span class="style6"><a href="busca_p.php" target="mainFrame">Buscar Protocolo</a></span><br /><br />
</a><span class="style6"><a href="adm_protocolos.php" target="mainFrame">Administrar Protocolos</a></span><br />
  <br />
  <a href="ver_protocolos.php" target="mainFrame"><span class="style6">Ver protocolos </a><br /><br />
   
  <a href="indx.html" target="mainFrame"><span class="style6">Sair  </a><br />  
  ________________  <br />
 
</p>
</body>
</html>
