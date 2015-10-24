<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
</head>
	
<body bgcolor="d0d0d0">
<?php
		ob_start();
		$login_digitado = $_POST['login'];
		$senha = $_POST['senha'];
		$bt_entrar = $_POST['entrar'];
		
		include("conect_db.php");
		if(isset($bt_entrar) && $login_digitado != "" && $senha != "" ){
			   $verifica = mysql_query("SELECT * FROM administrador WHERE login = '$login_digitado' AND senha = '$senha'") or die("erro ao selecionar");
			   if (mysql_num_rows($verifica) <=0){
				   echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='index.html';</script>";
										    die();
				}else{
					setcookie('login',$login_digitado);
					header("location:painel.php");
				}
		}else{
			echo("<script>window.alert('Os campos login e senha não podem ter valores nulos!')</script>");
			echo("<script language= JavaScript>setTimeout(document.location = 'index.html',5000)</script>");
		}
		
		
		mysql_free_result($busca);
		mysql_close($link);
		
	?>
    
</body>
</html>