<?php
require_once __DIR__ . '/../../vendor/autoload.php';

// dados
require_once 'data.php';

$pdf = new Uspdev\Pdfgen\Pdfgen();
$pdf->setTemplate("pos_oficio_membro_banca.tpl");

$pdf->setHeaderImg('logo_eesc_horizontal_com_assinatura.png', 50);
$pdf->setFooter($footer);
$pdf->setFooterImg('logo_usp_rodape.png', 25);

$pdf->setData($data);

/*echo $pdf->getHTML();
exit;*/

$pdf->parse();
$pdf = $pdf->pdfBuild('I'); // o parametro é o mesmo do TCPDF
