<?php 

	$id = $_GET['id'];

	require 'conexion.php';

	$conexion -> query("DELETE FROM estudiantes WHERE id_student='$id'");

	header('location:../');
?>