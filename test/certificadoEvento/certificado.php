<?php
require_once __DIR__ . '/../../vendor/autoload.php';

$data['nome'] = 'Masaki Kawabata Neto';
$data['nome_curso'] = 'LARAVEL BÁSICO';
$data['ministrante'] = 'Armando Sales de Oliveira';

$pdf = new Uspdev\Pdfgen\Pdfgen();
$pdf->setTemplate("certificado.tpl");

// no modo portrait troca o x pelo y
$pdf->putImg('assinatura_armando.jpg','63','165','40');
$pdf->putImg('assinatura_luiz.png','192','167','40');

$pdf->setData($data);

/*echo $pdf->getHTML();
exit;*/

$pdf->parse();
$pdf = $pdf->pdfBuild('I',['pdf_page_orientation'=>'L']); // o parametro é o mesmo do TCPDF