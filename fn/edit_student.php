<?php 

	require 'conexion.php';

	$id = $_POST['id'];

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

	$conexion -> query("UPDATE estudiantes SET nombre='$nombre',apellido='$apellidos',nacimiento='$nacimiento',sexo='$sexo',grado='$grado',encargado='$responsable',contacto='$contacto',cuidados='$cuidados',curso='$curso',inscripcion='$inscripcion' WHERE id_student='$id'");

	header('location:../');

?>