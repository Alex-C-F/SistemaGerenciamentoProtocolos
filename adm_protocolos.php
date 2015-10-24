<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>//</title>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'/>
<link rel="stylesheet" type="text/css" href="CSS/styleConfirm.css"/>


</head>

<body bgcolor="#E0FFFF"><center>
<?php
	$login = @$_COOKIE['login'];
	
	if (isset($login)){?>
		<br/>
<br/>
<h3><center> Painel de Alteração</center></h3>
<hr />
	<table width="440" border="2">
    	<?php
			
			include "conect_db.php";
			
			$busca = mysql_query("Select * from protocolo") or die ("Erro ao realisar busca de protoscolos cadastrados");
			
			while($reg = mysql_fetch_assoc($busca)){
		?>
        <tr>
        	<td width="300"> <label for="senha"> <?php echo $reg['numprotocolo']."<BR>".$reg['nomealuno'];?> </label></td>
            
            <td width="70"><form method="post" id="<?php  echo $reg['idprotocolo'];?>" action="editar_protocolo.php?editar=<?php echo $reg['idprotocolo'];?>">

<div onclick="edita(<?php echo $reg['idprotocolo'];?>)"><input type="button" class="sb bradius" name="Editar" id="EXCLUIR" value="Editar" /></div>
</form></td>
            
            <td width="70"><form method="post" id="form" action="excluir_protocolo.php?delete=<?php echo $reg['idprotocolo'];?>">

<div onclick="confirma(50)"><input type="button" class="sb bradius" name="EXCLUIR" id="EXCLUIR" value="Excluir" /></div>
</form></td>
        </tr>
        	 
            
   <?php 
			}
			 
			mysql_free_result($busca);
			mysql_close($link);
	?>
       
</table></center>
<br />
<br />

 <script type="text/javascript">
function confirma(id) {
	var confirmar = confirm("Tem certeza que deseja excluir o registro??");
	if(confirmar){
		document.getElementById("form").submit()
	};
}

function edita(id) {
	var confirmar = confirm("Tem certeza que deseja editar o registro??");
	if(confirmar){
		
		document.getElementById(id).submit()
	};
}

</script>    
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