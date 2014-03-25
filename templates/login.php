<!doctype html>

<?php 
	require_once '../config/config.php';
	
	if ($_POST['username_str'] != "" and $_POST['password_str'] != "") {
		$usuario = $_POST['username_str'];
		$pass = $_POST['password_str'];
		$empresa = new Empresa();
		$empresas = $empresa->validarIngreso($usuario, $pass);
		if (count($empresas) >= 1) {
			//CREA LA SESSION
			session_start();
			$_SESSION["empresaID"] = $empresas["empresaID"];
			$_SESSION["usuario"] = $usuario;
			$_SESSION["pass"] = $pass;
			echo "Me loguee";
		}
		else {
			session_destroy();
			echo "No encuentra el usuario";
		}
	}
	else {
		//CHEQUEA LA SESSION EXISTENTE
		echo "Chequeo si hay una sesion abierta";
		
	}

 ?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login | CualPinta.com.ar</title>
	<link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../css/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<section id="login">
		<div id="logo"><img src="../imagenes/logo.png" alt=""></div>
		<div class="loginform">
			<form class="formbody" method="post">
				<div class="inputs">
					<label for="username">username:</label>
					<input type="text" id="username" name="username_str" required>
					<div class="error-username"></div>
				</div>
				<div class="inputs">
					<label for="password">password:</label>
					<input type="password" id="password" name="password_str" autocomplete="off" required>
					<div class="error-password"></div>
				</div>
				<div class="rememberme">
					<input type="checkbox" id="rememberme" name="rememberme_chk">Remember me! 
				</div>
				<div class="send">
					<button id="submit" type="submit" name="submit_frm">LOGIN</button>	
				</div>
				<div class="errors"></div>
				<div class="forgot">
					<a href="#">Forgot your password?</a>
				</div>			
			</form>
		</div>		
		<button class="sociallogin facebook">login with Facebook</button>
		<button class="sociallogin twitter">login with Twitter</button>
	</section>
</body>
</html>
