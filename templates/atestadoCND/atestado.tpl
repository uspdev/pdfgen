<style>
    body {
        font-family: DejaVu Sans;
        font-size: 10pt;
        line-height: 19px;
    }

    ul {
        list-style-type: none;
    }

    .c {
        text-align: center;
    }

    .j {
        text-align: justify;
        text-indent: 90px;
    }

    .r {
        text-align: right;
    }
</style>
<body>
<P class="c">
    ATESTADO DE CONSULTAS ÀS CERTIDÕES OBRIGATÓRIAS <br/>
    PARA CONTRATAÇÃO COM A USP
</p>
<ul>
    <li>Atestado no.: <b>{numero}/{ano}</b></li>
    <li>Processo: <b>{processo}</b></li>
    <li>Modalidade da compra: <b>{modalidade}</b></li>
    <!-- BEGIN BLOCO_LEI -->
    <li>Base legal: <b>{lei}</b></li>
    <!-- END BLOCO_LEI -->
</ul>

<p class="j">Atesto para os devidos fins legais que as certidões abaixo
    foram por mim consultadas, estando de acordo com a legislação vigente
    nesta data, bem como estão arquivadas eletronicamente em sistema
    de certidões negativas.</p>

<ul>
    <li>
        CNPJ: <b>{cnpj}</b>
    </li>
    <li>
        Certidões
        <ul>
            <!-- BEGIN bloco_certidoes -->
            <li>
                {certidoes->certidao}: {certidoes->msg}
            </li>
            <!-- END bloco_certidoes -->
        </ul>
    </li>
</ul>

<p></p>
<p class="r">{cidade}, {dia} de {mes} de {ano}.</p>
<p></p>
<p class="r">{autor}</p>

</body>
