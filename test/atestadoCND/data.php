<?php


$data['numero'] = '10';
$data['ano'] = '2018';
$data['processo'] = '18.1.12345.678';
$data['modalidade'] = 'Dispensa de Licitação';
$data['lei'] = 'INCISO II, ART. 24, LEI 8666/93';
$data['cnpj'] = '11.111.111/0001-11';
$data['cidade'] = 'São Carlos';
$data['dia'] = '18';
$data['mes'] = 'junho';
$data['autor'] = 'Masaki Kawabata Neto';

$certidoes = [];
$certidoes[0] = new stdClass();
$certidoes[0]->certidao = 'CND';
$certidoes[0]->msg = 'Válida até 28/08/2018';
$certidoes[1] = new stdClass();
$certidoes[1]->certidao = 'FGTS';
$certidoes[1]->msg = 'Validade de 30/05/2018 a 28/06/2018';
$certidoes[2] = new stdClass();
$certidoes[2]->certidao = 'CADIN';
$certidoes[2]->msg = 'NADA CONSTA';
$certidoes[3] = new stdClass();
$certidoes[3]->certidao = 'SANÇÕES SP';
$certidoes[3]->msg = 'NADA CONSTA';

$data['bloco_certidoes'] = $certidoes;

