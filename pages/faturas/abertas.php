<?php

$GLOBALS["fpqmpijxj"] = "diav";
$GLOBALS["qrkeap"] = "ano";
$GLOBALS["jurufzuqrh"] = "botao";
$GLOBALS["rtudixltqtu"] = "row";
$GLOBALS["mimapzy"] = "partesven";
$GLOBALS["iopqfa"] = "datavn";
$GLOBALS["impouqm"] = "dia";
$GLOBALS["dwshdjmqgy"] = "partes";
$GLOBALS["xhjcjrhq"] = "dataconvcriado";
$GLOBALS["idotxbldelry"] = "datacriado";
$GLOBALS["mccyfer"] = "SQLUPUser";
$GLOBALS["cigujwskop"] = "usuario";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/abertas.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
protegePagina("user");
if (${$GLOBALS["cigujwskop"]}["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
echo "<script type=\"text/javascript\" src=\"../../app-assets/plugins/sort-table.js\"></script>\n<script>\n    \$(document).ready(function() {\n        \$(\"#myInput\").on(\"keyup\", function() {\n            var value = \$(this).val().toLowerCase();\n            \$(\"#myTable tr\").filter(function() {\n                \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)\n            });\n        });\n    });\n</script>\n<div class=\"row\" id=\"table-hover-row\">\n    <div class=\"col-12\">\n        <div class=\"card\">\n            <div class=\"card-header\">\n                <h1 class=\"card-title font-medium-2\"><i class=\"fad fa-file-invoice-dollar text-success font-large-1\"></i> Faturas Em Abertos</h1>\n            </div>\n            <div class=\"card-content\">\n                <div class=\"card-body\">\n                    <p>Todas as faturas abertas listada abaixo.</p>\n                    <div class=\"col-12\"><br>\n                        <div class=\"form-responsive\">\n                            <input type=\"text\" id=\"myInput\" placeholder=\"Pesquisar...\" class=\"form-control\">\n                        </div>\n                    </div>\n                </div>\n                <div class=\"table-responsive\">\n                    <table class=\"table table-hover mb-0 js-sort-table\" id=\"MeuServidor\" data-search=\"minhaPesquisa-lista\">\n                        <thead>\n                        <tr>\n                            <th>ID FATURA</th>\n                            <th>TIPO</th>\n                            <th>STATUS</th>\n                            <th>DATA</th>\n                            <th>VENCIMENTO</th>\n                            <th>VALOR</th>\n                            <th>INFORMACOES</th>\n                        </tr>\n                        </thead>\n                        <tbody id=\"myTable\">\n                        ";
${$GLOBALS["mccyfer"]} = "SELECT * FROM fatura where usuario_id =  '" . ${$GLOBALS["cigujwskop"]}["id_usuario"] . "' and status='pendente' ORDER BY id desc ";
${$GLOBALS["mccyfer"]} = $conn->prepare(${$GLOBALS["mccyfer"]});
$SQLUPUser->execute();
if ($SQLUPUser->rowCount() > 0) {
    $GLOBALS["nhujjmc"] = "row";
    while (${$GLOBALS["nhujjmc"]} = $SQLUPUser->fetch()) {
        $reqtcvph = "tipo";
        $GLOBALS["alvqhtu"] = "diav";
        $cekdtvd = "tipo";
        $vqrnfahqzdw = "vencimento";
        $GLOBALS["ovfddcervb"] = "partesven";
        $dghxvciero = "mesv";
        $ohvqrpv = "botao";
        $dojvxwcyjupx = "row";
        $GLOBALS["mlincmwsoueo"] = "mes";
        $GLOBALS["lsfhep"] = "ano";
        $fwtqdmje = "row";
        $GLOBALS["aoihnae"] = "partes";
        $pxylxtq = "row";
        $GLOBALS["vsfnmqq"] = "tipo";
        switch ($row["tipo"]) {
            case "vpn":
                ${$GLOBALS["vsfnmqq"]} = "Acesso VPN";
                break;
            case "revenda":
                ${$reqtcvph} = "Revenda";
                break;
            default:
                ${$cekdtvd} = "Outros";
                break;
        }
        $GLOBALS["svcebtab"] = "partesven";
        $tvxoywttes = "datacriado";
        $GLOBALS["rdvaroc"] = "dataconvcriado";
        ${$GLOBALS["idotxbldelry"]} = ${$dojvxwcyjupx}["data"];
        ${$GLOBALS["xhjcjrhq"]} = substr(${$tvxoywttes}, 0, 10);
        $GLOBALS["lgxhxuy"] = "partes";
        $GLOBALS["kmnvduxmqkp"] = "mesv";
        $GLOBALS["vqpxwbbp"] = "mes";
        $GLOBALS["frliffwn"] = "row";
        ${$GLOBALS["dwshdjmqgy"]} = explode("-", ${$GLOBALS["rdvaroc"]});
        ${$GLOBALS["lsfhep"]} = ${$GLOBALS["aoihnae"]}[0];
        $ezphlekuml = "vencimento";
        ${$GLOBALS["vqpxwbbp"]} = ${$GLOBALS["lgxhxuy"]}[1];
        ${$GLOBALS["impouqm"]} = ${$GLOBALS["dwshdjmqgy"]}[2];
        $GLOBALS["xptknwpumf"] = "anov";
        ${$vqrnfahqzdw} = ${$pxylxtq}["datavencimento"];
        $kxaaasjsxid = "valor";
        $GLOBALS["cchwgxz"] = "tipo";
        ${$GLOBALS["iopqfa"]} = substr(${$ezphlekuml}, 0, 10);
        $GLOBALS["ohqfezhnpni"] = "partesven";
        ${$GLOBALS["ovfddcervb"]} = explode("-", ${$GLOBALS["iopqfa"]});
        $onmukym = "row";
        $sbajsggr = "botao";
        ${$GLOBALS["xptknwpumf"]} = ${$GLOBALS["ohqfezhnpni"]}[0];
        ${$GLOBALS["kmnvduxmqkp"]} = ${$GLOBALS["svcebtab"]}[1];
        ${$GLOBALS["alvqhtu"]} = ${$GLOBALS["mimapzy"]}[2];
        $moykggqygwav = "row";
        ${$kxaaasjsxid} = number_format(${$onmukym}["valor"] * ${$GLOBALS["frliffwn"]}["qtd"], 2);
        switch (${$GLOBALS["rtudixltqtu"]}["status"]) {
            case "pendente":
                ${$GLOBALS["jurufzuqrh"]} = "<span class=\"label label-warning\">Pendente</span>";
                break;
            case "cancelado":
                ${$GLOBALS["jurufzuqrh"]} = "<span class=\"label label-danger\">Cancelado</span>";
                break;
            case "pago":
                ${$ohvqrpv} = "<span class=\"label label-success\">Pago</span>";
                break;
            default:
                ${$GLOBALS["jurufzuqrh"]} = "Outros";
                break;
        }
        echo "\n                                <tr >\n                                    <td >#";
        echo ${$moykggqygwav}["id"];
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["cchwgxz"]};
        echo "</td>\n                                    <td>";
        $seqobbn = "anov";
        echo ${$sbajsggr};
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["impouqm"]};
        echo "/";
        echo ${$GLOBALS["mlincmwsoueo"]};
        echo " - ";
        $GLOBALS["uhbpxmvamrqr"] = "valor";
        echo ${$GLOBALS["qrkeap"]};
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["fpqmpijxj"]};
        echo "/";
        echo ${$dghxvciero};
        echo " - ";
        echo $anov;
        echo "</td>\n                                    <td>R\$";
        echo number_format($valor, 2, ",", ".");
        echo "</td>\n\n\n                                    <td>\n                                        <a href=\"home.php?page=faturas/verfatura&id=";
        echo ${$GLOBALS["rtudixltqtu"]}["id"];
        echo "\" class=\"btn btn-block btn-success btn-sm\">Visualizar</a>\n                                    </td>\n                                </tr>\n                            ";
    }
}
echo "                        </tbody>\n                    </table>\n                </div>\n            </div>\n        </div>\n    </div>\n</div>\n";
