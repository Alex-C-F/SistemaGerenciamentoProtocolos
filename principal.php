<?

    include("conect_db.php");

    $busca=mysql_query ("Select pagina From paginas where codpagina='1'")
          or die("<h1>Não foi possível realizar as busca: </h1>".mysql_error());
    
	while ($reg=mysql_fetch_assoc($busca))
        {$pagina= $reg["pagina"];}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-color: #E0FFFF;
}
-->
</style></head>

<body>
<div align="center">
  <p><img src="imagens/001.gif" width="277" height="214" /></p>
  <p align="left"><? echo $pagina ?>&nbsp;  </p>
  <p>
  </p>
</div>
</body>
</html>
