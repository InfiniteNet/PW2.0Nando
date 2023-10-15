<?php

$GLOBALS["eewsrucyd"] = "valor";
$GLOBALS["nslvrldfw"] = "mes";
$GLOBALS["srxcibc"] = "usuario";
$GLOBALS["pnubjjsmgo"] = "Susuario";
$GLOBALS["ktrmoaro"] = "botao";
$GLOBALS["ttprxwb"] = "anov";
$GLOBALS["clkunl"] = "partesven";
$GLOBALS["vuqcewv"] = "vencimento";
$GLOBALS["jqldpfvcl"] = "datavn";
$GLOBALS["sixsqmi"] = "partes";
$GLOBALS["plqsuorljno"] = "dataconvcriado";
$GLOBALS["nuunptvnrjm"] = "datacriado";
$GLOBALS["qfbrhv"] = "row";
$GLOBALS["tkgxklumki"] = "SQLUPUser";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/pagas.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
protegePagina("donoadmin");
$onxjsviwqsxd = "SQLUPUser";
echo "<script type=\"text/javascript\" src=\"../../app-assets/plugins/sort-table.js\"></script>\n<script>\n    \$(document).ready(function() {\n        \$(\"#myInput\").on(\"keyup\", function() {\n            var value = \$(this).val().toLowerCase();\n            \$(\"#myTable tr\").filter(function() {\n                \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)\n            });\n        });\n    });\n</script>\n<div class=\"row\" id=\"table-hover-row\">\n    <div class=\"col-12\">\n        <div class=\"card\">\n            <div class=\"card-header\">\n                <h1 class=\"card-title font-medium-2\"><i class=\"fad fa-file-powerpoint text-success font-large-1\"></i> Faturas Pagas</h1>\n            </div>\n            <div class=\"card-content\">\n                <div class=\"card-body\">\n                    <p>Faturas pagas de Clientes.</p>\n                    <div class=\"col-12\"><br>\n                        <div class=\"form-responsive\">\n                            <input type=\"text\" id=\"myInput\" placeholder=\"Pesquisar...\" class=\"form-control\">\n                        </div>\n                    </div>\n                </div>\n                <div class=\"table-responsive\">\n                    <table class=\"table table-hover mb-0 js-sort-table\" id=\"MeuServidor\" data-search=\"minhaPesquisa-lista\">\n                        <thead>\n                        <tr>\n                            <th>ID</th>\n                            <th>TIPO</th>\n                            <th>STATUS</th>\n                            <th>CLIENTE</th>\n                            <th>DATA</th>\n                            <th>VENCIMENTO</th>\n                            <th>VALOR</th>\n                            <th>INFORMACOES</th>\n                        </tr>\n                        </thead>\n                        <tbody id=\"myTable\">\n                        ";
$SQLUPUser = "SELECT * FROM fatura where status='pago' ORDER BY id desc ";
${$GLOBALS["tkgxklumki"]} = $conn->prepare(${$GLOBALS["tkgxklumki"]});
$SQLUPUser->execute();
if ($SQLUPUser->rowCount() > 0) {
    $GLOBALS["xsgqwja"] = "row";
    while (${$GLOBALS["xsgqwja"]} = $SQLUPUser->fetch()) {
        $dprijdktl = "tipo";
        $GLOBALS["xzreyaedf"] = "row";
        $GLOBALS["rbdhjqgkmcn"] = "vencimento";
        $cuicvr = "mesv";
        $qwfrzs = "tipo";
        $bruyykppjpm = "mes";
        $raeyuwoex = "partes";
        $GLOBALS["nfsvzsdowsj"] = "mesv";
        $GLOBALS["nknozuew"] = "diav";
        $cxwfsiynhcsg = "botao";
        $GLOBALS["gtqhiidhbok"] = "ano";
        $mnxubxbgf = "tipo";
        $pffppzy = "partesven";
        $sadcshoxjc = "tipo";
        switch (${$GLOBALS["qfbrhv"]}["tipo"]) {
            case "vpn":
                ${$qwfrzs} = "Acesso VPN";
                break;
            case "revenda":
                ${$sadcshoxjc} = "Revenda";
                break;
            default:
                ${$dprijdktl} = "Outros";
                break;
        }
        $jgfwlniti = "dia";
        $kkspiqgsaxj = "Susuario";
        ${$GLOBALS["nuunptvnrjm"]} = ${$GLOBALS["qfbrhv"]}["data"];
        $GLOBALS["qfldoqnzpk"] = "Susuario";
        ${$GLOBALS["plqsuorljno"]} = substr(${$GLOBALS["nuunptvnrjm"]}, 0, 10);
        ${$GLOBALS["sixsqmi"]} = explode("-", ${$GLOBALS["plqsuorljno"]});
        $GLOBALS["xtnyjkek"] = "ano";
        $mossbtwolct = "botao";
        $oleronoj = "botao";
        ${$GLOBALS["gtqhiidhbok"]} = ${$GLOBALS["sixsqmi"]}[0];
        ${$bruyykppjpm} = ${$GLOBALS["sixsqmi"]}[1];
        ${$jgfwlniti} = ${$raeyuwoex}[2];
        ${$GLOBALS["rbdhjqgkmcn"]} = ${$GLOBALS["xzreyaedf"]}["datavencimento"];
        ${$GLOBALS["jqldpfvcl"]} = substr(${$GLOBALS["vuqcewv"]}, 0, 10);
        ${$GLOBALS["clkunl"]} = explode("-", ${$GLOBALS["jqldpfvcl"]});
        $GLOBALS["ewplxqflxyfh"] = "valor";
        ${$GLOBALS["ttprxwb"]} = ${$GLOBALS["clkunl"]}[0];
        ${$GLOBALS["nfsvzsdowsj"]} = ${$GLOBALS["clkunl"]}[1];
        $wqftjsqdrcy = "row";
        ${$GLOBALS["nknozuew"]} = ${$pffppzy}[2];
        ${$GLOBALS["ewplxqflxyfh"]} = number_format(${$wqftjsqdrcy}["valor"] * ${$GLOBALS["qfbrhv"]}["qtd"], 2);
        switch (${$GLOBALS["qfbrhv"]}["status"]) {
            case "pendente":
                ${$GLOBALS["ktrmoaro"]} = "<span class=\"label label-warning\">Pendente</span>";
                break;
            case "cancelado":
                ${$oleronoj} = "<span class=\"label label-danger\">Cancelado</span>";
                break;
            case "pago":
                ${$GLOBALS["ktrmoaro"]} = "<span class=\"label label-success\">Pago</span>";
                break;
            default:
                ${$mossbtwolct} = "Outros";
                break;
        }
        ${$GLOBALS["qfldoqnzpk"]} = "SELECT * FROM usuario where id_usuario='" . ${$GLOBALS["qfbrhv"]}["usuario_id"] . "'";
        ${$GLOBALS["pnubjjsmgo"]} = $conn->prepare(${$kkspiqgsaxj});
        $rffimcvpvx = "diav";
        $Susuario->execute();
        $gnclwtylakyx = "dia";
        ${$GLOBALS["srxcibc"]} = $Susuario->fetch();
        echo "\n                        <tr >\n                            <td >#";
        echo ${$GLOBALS["qfbrhv"]}["id"];
        echo "</td>\n                            <td>";
        echo ${$mnxubxbgf};
        echo "</td>\n                            <td>";
        echo ${$cxwfsiynhcsg};
        echo "</td>\n                            <td>";
        echo ${$GLOBALS["srxcibc"]}["nome"];
        echo "</td>\n                            <td>";
        echo ${$gnclwtylakyx};
        echo "/";
        echo ${$GLOBALS["nslvrldfw"]};
        echo " - ";
        echo ${$GLOBALS["xtnyjkek"]};
        echo "</td>\n                            <td>";
        echo ${$rffimcvpvx};
        echo "/";
        echo ${$cuicvr};
        echo " - ";
        echo ${$GLOBALS["ttprxwb"]};
        echo "</td>\n                            <td>R\$";
        echo number_format(${$GLOBALS["eewsrucyd"]}, 2, ",", ".");
        echo "</td>\n\n\n                            <td>\n\n                                <a href=\"home.php?page=faturas/verfatura&id=";
        echo ${$GLOBALS["qfbrhv"]}["id"];
        echo "\" class=\"btn btn-block btn-success\">Visualizar</a>\n\n\n\n                            </td>\n                            ";
    }
}
echo "\n                        </tbody>\n                    </table>\n                </div>\n            </div>\n        </div>\n    </div>\n</div>\n";
