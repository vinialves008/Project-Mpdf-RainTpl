<?php 
	require_once 'vendor/autoload.php';
	require_once 'RelatorioTpl.php';



	$rain = new RelatorioTpl();
	$html = $rain->setConteudo(array(
		'nome' => "João das Couves"
	), "exemplo");

	$mpdf = new \Mpdf\Mpdf();
	$mpdf->WriteHTML($html);
	$mpdf->Output();
	exit;
 ?>