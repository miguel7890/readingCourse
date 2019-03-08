<?php 

	require 'conexion.php';

	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$nacimiento = $_POST['nacimiento'];
	$sexo = $_POST['sexo'];
	$grado = $_POST['grado'];
	$responsable = $_POST['responsable'];
	$contacto = $_POST['contacto'];
	$cuidados = $_POST['cuidados'];
	$curso = $_POST['curso'];
	$inscripcion = $_POST['inscripcion'];

	$conexion -> query("INSERT INTO estudiantes(nombre,apellido,nacimiento,sexo,grado,encargado,contacto,cuidados,curso,inscripcion,estado) VALUES('$nombre','$apellidos','$nacimiento','$sexo','$grado','$responsable','$contacto','$cuidados','$curso','$inscripcion',1)");

	header('location:../');

?>