<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Painel de controle</title>

</head>
<?php
	$login = @$_COOKIE['login'];
	
	if (isset($login)){?>
			
            <frameset rows="*" cols="164,*" frameborder="no" border="0" framespacing="0">
  <frame src="lateral.html" name="leftFrame" scrolling="No" noresize="noresize" id="leftFrame" title="leftFrame" />
  <frameset rows="80,*" frameborder="no" border="0" framespacing="0">
    <frame src="cabecario.html" name="topFrame" scrolling="No" noresize="noresize" id="topFrame" title="topFrame" />
    <frame src="principal.html" name="mainFrame" id="mainFrame" title="mainFrame" />
  </frameset>
</frameset>

	 <?php } 
	 else{
				?>
               
						<script type="text/javascript">
   window.setTimeout("location.href='index.html';", 0);
</script><?php


	}
?>
><body>
</body>
</noframes></html>
