<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listado de estudiantes</title>
</head>
<body>
	
	<?php
		$conexion = new sqlite3('db/students.db');

		$sql = $conexion -> query("SELECT * FROM estudiantes WHERE estado=1");

		while($row = $sql -> FetchArray()){
			echo $row['nombre']." ".$row['apellido'].'<span>,</span>';
		};
	?>

</body>
</html>