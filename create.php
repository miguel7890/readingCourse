<?php 
	ob_start();
	require_once 'asistencia.php';
	$content = ob_get_clean();

	require 'vendor/autoload.php';

	use Spipu\Html2Pdf\Html2Pdf;

	$convert = new Html2Pdf('P','LETTER','es','true','UTF-8');
	$convert -> writehtml($content);
	$convert -> output('listado.pdf');
?>