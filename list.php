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
		<div class="row middle-xs">
			<div class="col-xs-12 col-md-8 center-xs start-md">
				<h1>Listado</h1>
			</div>
			<div class="col-xs-12 col-md-4 center-xs end-md space">
				<a href="create.php?type=view"><button id="toPDF" class="btn btn-action">Crear informe pdf</button></a>
				<a href="create.php?type=lista"><button id="toPDF" class="btn btn-action">Lista pdf</button></a>
			</div>
			<div class="col-xs-12 col-md-4 space">
				<div class="box-student">
					<h5 class="marginNone">#1</h5>
					<h2>Antonio Alexis Lemus Valladares</h2>
					<p><b>Fecha de nacimiento:</b> 20/04/2010</p>
					<p><b>Grado:</b> 4º Grado</p>
					<p><b>Encargado:</b> José Lorenzo López De Paz</p>
					<p><b>Contacto:</b> 7033-8902</p>
					<p><b>Curso:</b> Lectura <span style="padding: 0px 10px;">|</span> <b>Inscripción:</b> 07/03/2019</p>
					<hr>
					<div class="center-xs">
						<button class="btn btn-natural" style="width: 50%;">Editar</button>
					</div>
				</div>
			</div>

		</div>
	</section>
	
</body>
</html>