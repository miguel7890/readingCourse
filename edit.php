<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registro - Cursos de lectura y matemáticas</title>
	<link rel="stylesheet" href="css/flexboxgrid.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body style="margin:0;padding:0;">

	<nav class="container-fluid">
		<div class="row middle-xs nav_bar">
			<h3 class="col-xs-12 col-md-8 center-xs start-md">Fundación Forever</h3>
			<div class="col-xs-12 col-md-4 center-xs end-md">
				<a href="index.php"><button class="btn btn-natural">Añadir</button></a>
				<a href="list.php"><button class="btn btn-natural">Listado</button></a>
			</div>
		</div>
	</nav>

	<section class="container-fluid" id="wrap">
		<div class="row center-xs">
			
			<div class="col-xs-12 col-md-6 space">
				<div class="box-form">
					<h1>Formulario de edición</h1>
					<hr>
					<form action="fn/send.php">
						<h2>Datos personales</h2>
						<div class="space">
							<label for="Nombre">Nombre</label><br>
							<input type="text" name="nombre" id="Nombre">
						</div>
						<div class="space">
							<label for="Nacimiento">Fecha de nacimiento</label><br>
							<input type="date" name="nacimiento" id="Nacimiento">
						</div>
						<div class="space">
							<label for="Sexo">Sexo</label>
							<select name="sexo" id="Sexo">
								<option value="default">--</option>
								<option value="hombre">Niño</option>
								<option value="mujer">Niña</option>
							</select>
						</div>
						<div class="space">
							<label for="Contacto">Grado</label><br>
							<select name="grado" id="Grado">
								<option value="default">--</option>
								<option value="1">1º Grado</option>
								<option value="2">2º Grado</option>
								<option value="3">3º Grado</option>
								<option value="4">4º Grado</option>
							</select>
						</div>
						<div class="space">
							<label for="Responsable">Padre de familia / Encargado</label><br>
							<input type="text" name="responsable" id="Responsable">
						</div>
						<div class="space">
							<label for="Contacto">Contacto</label><br>
							<input type="text" name="contacto" id="Contacto">
						</div>
						<div class="space">
							<label for="Cuidados">Padecimientos o medicamentos</label><br>
							<input type="text" name="cuidados" id="Cuidados">
						</div>
						<h2>Datos específicos</h2>
						<div class="space">
							<label for="Curso">Curso</label><br>
							<select name="curso" id="Curso">
								<option value="default">--</option>
								<option value="Lectura">Lectura</option>
								<option value="Matemáticas">Matemáticas</option>
							</select>
						</div>
						<div class="space">
							<label for="Nacimiento">Fecha de inscripción</label><br>
							<input type="date" name="nacimiento" id="Nacimiento">
						</div>
						<br><br><hr>
						<div style="margin: 20px 0px;" class="center-xs">
							<button class="btn btn-action" id="send" name="send" style="width: 30%;">Editar</button>
							<button class="btn btn-danger" id="send" name="send" style="width: 30%;">Cancelar</button>
						</div>
					</form>
				</div>
			</div>

		</div>
	</section>
	
</body>
</html>