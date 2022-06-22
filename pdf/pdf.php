<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

$html = file_get_contents("catalogoforpdf.php");
$stylesheet = file_get_contents('paginaPrin.css');

$mpdf->WriteHTML($stylesheet,\Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf->WriteHTML($html,\Mpdf\HTMLParserMode::HTML_BODY);

//$mpdf->WriteHTML($a);
$mpdf->showImageErrors = true;
$mpdf->Output();
