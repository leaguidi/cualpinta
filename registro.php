<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registro | CualPinta.com.ar</title>
	<link rel="stylesheet" href="css/empresa.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
		<?php include('templates/nav-registry.php'); ?>
		<section id="content" class="container">
			<div class="row clearfix">
				<article class="column twelve">
					<h3 class="title">Registro de Empresas</h3>
					<form action="#" method="post" name="empresas_frm" id="empresas">

						<div class="inputs">
							<label for="razonsocial">razonsocial</label>
							<input type="text" name="razonsocial_str" id="razonsocial">
						</div>

						<div class="inputs">
							<label for="razonfiscal">razonfiscal</label>
							<input type="text" name="razonfiscal_str" id="razonfiscal">
						</div>


						<div class="inputs">
							<label for="cuit">cuit</label>
							<input type="text" name="cuit_nbr" id="cuit">
						</div>

						<div class="inputs">
							<label for="email">Email</label>
							<input type="email" name="email_str" id="email">
						</div>

						<div class="inputs">
							<label for="direccion">direccion</label>
							<input type="text" name="direccion_str" id="direccion">
						</div>

						<div class="inputs">
							<label for="localidad">localidad</label>
							<select name="localidad_slc">
								<option value="volvo">CABA</option>
							 	<option value="saab">ABA</option>
							 	<option value="opel">CAGA</option>
							 	<option value="audi">RANGA</option>
							</select>
						</div>

						<div class="inputs">
							<label for="pais">Pais</label>
							<select name="pais_slc">
								<option value="arg">Argentina</option>
							 	<option value="par">Paraguay</option>
							 	<option value="uru">Uruguay</option>
							 	<option value="per">Peru</option>
							</select>
						</div>

						<div class="inputs">
							<label for="direccionfiscal">direccionfiscal</label>
							<input type="text" name="direccionfiscal_str" id="direccionfiscal">
						</div>

						<div class="inputs">
							<label for="localidadfiscal">localidadfiscal</label>
							<input type="text" name="localidadfiscal_str" id="localidadfiscal">
						</div>


						<div class="inputs">
							<label for="tipo">tipo</label>
							<input type="text" name="tipo_str" id="tipo">
						</div>

						<button class="button big" type="submit">Registrar</button>

					</form>
				</article>
			</div>
		</section>
		<?php include('templates/footer.php'); ?>
</body>
</html>