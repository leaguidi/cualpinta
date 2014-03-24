<!doctype html>
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
			<form class="formbody" action="post">
				<div class="inputs">
					<label for="username">username:</label>
					<input type="text" id="username" name="username_str" autocomplete="off" required>
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