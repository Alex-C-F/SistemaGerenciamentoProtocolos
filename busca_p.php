<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'/>
<link rel="stylesheet" type="text/css" href="CSS/style_busca.css"/>
</head>

<body>
<?php
	$login = @$_COOKIE['login'];
	
	if (isset($login)){?>
		<div id="login" class="bradius"/>
    <div class="message"> </div>
    <div class="logo"></div>
    <div class="acomodar">
     <form action="busca_protocolo.php?select = " method="post">
     <select name="opcao" >
  		<option  value="nome">Nome do aluno</option>
  		<option value="num">Número do protocolo</option>
        <option value="desc">Descrição do protocolo</option>
	</select > 
     <BR/><BR/>
     <input id="email" type="text" class="txt bradius" value="" name="pesquisa"/>
     
      
     <input type="submit" class="sb bradius" value="Pesquisar"/>
     </form>
     </div>
    
    <!-- Acomodar-->
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