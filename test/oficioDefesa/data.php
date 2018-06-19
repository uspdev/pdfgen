<?php
$doc = new StdClass();
$doc->nro = '010';
$doc->dia = '12';
$doc->mes = 'julho';
$doc->ano = '2018';
$doc->local = 'São Carlos';
$doc->sigla = 'SET.PG';
$doc->unidade = 'EESC';
$doc->nome = 'Prof Doutor Marcelo Seido Nagano';
$doc->instituicao = 'UNESP';
$doc->cidade = 'Botucatu';
$doc->sexo = 'M';

$ppg = new stdClass();
$ppg->assina = 'Prof Associado' . ' ' . 'Aldo Roberto Ometto';
$ppg->assina2 = 'Coordenador do Programa de Pós-Graduação';
$ppg->programa = 'Engenharia de Produção';
$ppg->email = 'posgraduacao.producao@eesc.usp.br';
$ppg->url = 'http://www.prod.eesc.usp.br/pg/';
$ppg->tel = '16 3373-8126';

$aluno = new stdClass();
$aluno->sexo = 'M';
$aluno->tipo = 'M'; //mestrado ou doutorado
$aluno->nome = 'Masaki Kawabata Neto';
$aluno->titulo = 'DGPS usando comunicação via rádio';
$aluno->dia = '15';
$aluno->mes = 'agosto';
$aluno->ano = '2018';
$aluno->hora = '8:00';
$aluno->local = 'Auditório do SET';
$aluno->localg = 'M';

$titulares = [];
$titulares[0] = new stdClass();
$titulares[0]->titulo = 'Prof. Dr.';
$titulares[0]->nome = 'Marcelo Bertolete Carneiro';
$titulares[0]->codpes = '6900763';
$titulares[0]->instituicao = 'Orientador';

$titulares[1] = new stdClass();
$titulares[1]->titulo = 'Prof. Dr.';
$titulares[1]->nome = 'Marcelo Seido Nagano';
$titulares[1]->codpes = '66630';
$titulares[1]->instituicao = 'FEA-RP';

$titulares[2] = new stdClass();
$titulares[2]->titulo = 'Prof. Dr.';
$titulares[2]->nome = 'José Francisco Ferreira Ribeiro';
$titulares[2]->codpes = '89816';
$titulares[2]->instituicao = 'UFSCar';

$suplentes = [];
$suplentes[0] = new stdClass();
$suplentes[0]->titulo = 'Prof. Dr.';
$suplentes[0]->nome = 'Marcelo Bertolete Carneiro';
$suplentes[0]->codpes = '6900763';
$suplentes[0]->instituicao = 'SEP-EESC/USP';

$suplentes[1] = new stdClass();
$suplentes[1]->titulo = 'Prof. Dr.';
$suplentes[1]->nome = 'Marcio Mattos Borges de Oliveira';
$suplentes[1]->codpes = '66630';
$suplentes[1]->instituicao = 'FEA-RP';

$suplentes[2] = new stdClass();
$suplentes[2]->titulo = 'Prof. Dr.';
$suplentes[2]->nome = 'José Francisco Ferreira Ribeiro';
$suplentes[2]->codpes = '89816';
$suplentes[2]->instituicao = 'UFSCar';


$data['doc'] = $doc;
$data['ppg'] = $ppg;
$data['aluno'] = $aluno;
$data['bloco_titular'] = $titulares;
$data['bloco_suplente'] = $suplentes;
$data['bloco_DOC_NRO'] = [];

$footer = 'tel.: ' . $ppg->tel . '<br/>' . $ppg->email . ' - ' . $ppg->url;
