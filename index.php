<?php
require './vendor/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;
if(isset($_POST['crear'])){
	ob_start();
	require_once 'tienda.html';
	$pagina = ob_get_clean();
	$mostrarPdf = new Html2Pdf('P','A4','es','true','UTF-8');
	$mostrarPdf->writeHTML($pagina);
	$mostrarPdf->output('generado.pdf');
}

?>
<form action="" method="POST">
	<input type="text" placeholder="titulo" name="titulo">
	<input type="submit" value="Generar PDF" name="crear">
</form>