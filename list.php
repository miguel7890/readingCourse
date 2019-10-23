<?php 
	$conexion = new sqlite3('db/students.db');

	$sql = $conexion -> query("SELECT * FROM estudiantes");
?>
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
				<a href="list.php"><button class="btn btn-natural">Listado x</button></a>
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
			<?php while($row = $sql -> FetchArray()){ ?>
				<div class="col-xs-12 col-md-4 space">
					<div class="box-student">
						<h5 class="marginNone"><?php echo $row['id_student']; ?></h5>
						<h2><?php echo $row['nombre']." ".$row['apellido']; ?></h2>
						<p><b>Fecha de nacimiento:</b> <?php echo $row['nacimiento']; ?></p>
						<p><b>Grado:</b> <?php echo $row['grado']; ?>º Grado</p>
						<p><b>Encargado:</b> <?php echo $row['encargado']; ?></p>
						<p><b>Contacto:</b> <?php echo $row['contacto']; ?></p>
						<p><b>Curso:</b> <?php echo $row['curso']; ?> <span style="padding: 0px 10px;">|</span> <b>Inscripción:</b> <?php echo $row['inscripcion']; ?></p>
						<hr>
						<div class="center-xs">
							<a href="edit.php?id=<?php echo $row['id_student']; ?>"><button class="btn btn-natural" style="width: 30%;">Editar</button></a>
							<a href="fn/delete.php?id=<?php echo $row['id_student']; ?>"><button class="btn btn-natural" style="width: 30%;">Eliminar</button></a>
						</div>
					</div>
				</div>
			<?php }; ?>

		</div>
	</section>
	
</body>
</html>
