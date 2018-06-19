<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>PPG-EESC</title>

    <link rel="stylesheet" type="text/css" href="doc.css">
</head>
<body>


<br>
<!-- BEGIN bloco_DOC_NRO -->
<div id="divCodigoDoc" class="text-left">
    {doc->sigla}-{doc->nro}/{doc->unidade}/{doc->ano}
</div>
<!-- END bloco_DOC_NRO -->

<p class="text-right">
    {doc->local}, {doc->dia} de {doc->mes} de {doc->ano}.
</p>
<br/>
<p class="text-left">{doc->sexo|sexo:Prezado Senhor:Prezada Senhora},</p>
<br/>
<p class="text-justify">
    Consoante designação da Comissão de Pós-Graduação desta Escola, temos
    a honra de convidar V.Sª. para integrar a Comissão Julgadora da
    {aluno->tipo|tipo:Dissertação de Mestrado:Tese de Doutorado}
    {aluno->sexo|sexo:do candidato:da candidata} <strong> {aluno->nome} </strong>
    intitulada <em>"{aluno->titulo}"</em>, como parte dos requisitos para obtenção
    do título de "{aluno->tipo|tipo:Mestre:Doutor} em
    Ciências, Programa de Pós-Graduação em Engenharia de Produção".
</p>
<p class="text-justify">
    A Comissão Julgadora deverá reunir-se para a defesa pública da dissertação no
    <strong>dia {aluno->dia} de {aluno->mes} de {aluno->ano}, às {aluno->hora}h
        {aluno->localg|sexo:no:na} {aluno->local}</strong>, e estará assim constituída:
</p>
<br/>

<p><span class="negrito">Membros Titulares:</span><br/>
    <!-- BEGIN bloco_titular -->
    {titular->titulo} {titular->nome} ({titular->codpes}) - {titular->instituicao} <br/>
    <!-- END bloco_titular -->
    <br/>
    <span class="negrito">Membros Suplentes:</span><br/>
    <!-- BEGIN bloco_suplente -->
    {suplente->titulo} {suplente->nome} ({suplente->codpes}) - {suplente->instituicao} <br/>
    <!-- END bloco_suplente -->
</p>

<p class="text-left">Cordialmente,</p>
<p></p>
<p class="text-right"><strong>{ppg->assina}</strong><br>
    {ppg->assina2} em<br>
    {ppg->programa}
</p>
<p></p>

<p class="text-left">{doc->sexo|sexo:Ao Senhor:À Senhora},<br/>
    <strong>{doc->nome}</strong><br />
    {doc->instituicao}<br />
    {doc->cidade}
</p>

</body>
