<?php
require_once __DIR__ . '/../../vendor/autoload.php';



$data['titulo1'] = 'BIBLIOTECA';
$data['titulo2'] = 'PDFGEN';
$data['linha1'] = '#01';
$data['linha2'] = 'GERAÇÃO DE';
$data['linha3'] = 'PNG';

$pdf = new Uspdev\Pdfgen\Pdfgen();
$pdf->setTemplate("uspdev.svg");

$pdf->setData($data);

$pdf->parse();
$png = $pdf->getPNG();

file_put_contents('uspdev.png',$png);
header('Content-type: image/png');
echo $png;
//echo 'tudo ok';
