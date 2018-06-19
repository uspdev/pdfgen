<?php
require_once __DIR__ . '/../../vendor/autoload.php';

// dados
require_once 'data.php';

$pdf = new Uspdev\Pdfgen\Pdfgen();
$pdf->setTemplate("atestado.tpl");

$pdf->setHeaderImg('logo_eesc.png', 50);
$pdf->setFooter('Arquivo digital EESC <br>' . date('d/m/Y H:i:s'));
$pdf->setFooterImg('logo_usp.png', 25);

$pdf->setData($data);

/*echo $pdf->getHTML();
exit;*/

$pdf->parse();
$pdf = $pdf->pdfBuild('I'); // o parametro é o mesmo do TCPDF
