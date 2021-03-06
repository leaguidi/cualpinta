<!doctype html>

<?php 
	require_once '../config/config.php';
	
	$error = '';
	if (Cookie::exists('empresaID') and Cookie::exists('usuario') and Cookie::exists('pass')) {
		header('location: home.php');
	}
	if (isset($_POST['username_str']) and isset($_POST['password_str'])) {
		
		if ($_POST['username_str'] != "" and $_POST['password_str'] != "") {
			$usuario = $_POST['username_str'];
			$pass = $_POST['password_str'];
			$empresa = new Empresa();
			$empresas = $empresa->validarIngreso($usuario, $pass);
			if ($empresas->count() >= 1) {
				//CREA LA SESSION
				$empresaslistado = $empresas->results();

				Session::flash('empresaID', $empresaslistado[0]->empresaID);
				Session::flash('usuario', $usuario);
				Session::flash('pass', $pass);	
				
				echo Session::get('empresaID'),' ',Session::get('usuario'),' ',Session::get('pass');
				
				//CREO LA COOKIE				
				if (isset($_POST['rememberme_chk'])  and $_POST['rememberme_chk'] == '1') {
					Cookie::put('empresaID', $empresaslistado[0]->empresaID, 10);
					Cookie::put('usuario', $usuario, 10);
					Cookie::put('pass', $pass, 10);
				}
				
				header('location: home.php');
			}
			else {
				Session::delete('empresaID');
				Session::delete('usuario');
				Session::delete('pass');
				Cookie::delete('empresaID');
				Cookie::delete('usuario');
				Cookie::delete('pass');
				
				$error = "<p>el usuario o password son incorrectos</p>";
			}
		}		
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
					<input type="checkbox" id="rememberme" name="rememberme_chk" value="1">Remember me! 
				</div>
				<div class="send">
					<button id="submit" type="submit" name="submit_frm">LOGIN</button>	
				</div>
				<div class="errors"><?php echo $error; ?></div>
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
