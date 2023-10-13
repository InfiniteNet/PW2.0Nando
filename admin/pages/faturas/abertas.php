<?php

$GLOBALS["bmgxuxzbmcd"] = "valor";
$GLOBALS["julqbjqds"] = "ano";
$GLOBALS["blbkjd"] = "usuario";
$GLOBALS["kedvqjke"] = "Susuario";
$GLOBALS["jvnbfrqkpk"] = "botao";
$GLOBALS["wbnvkbxvw"] = "diav";
$GLOBALS["ssbmtjrxnziu"] = "mesv";
$GLOBALS["enejtsvigni"] = "anov";
$GLOBALS["rkdwcqebunhu"] = "partesven";
$GLOBALS["cqeghpsmkk"] = "datavn";
$GLOBALS["fgpzxmtir"] = "vencimento";
$GLOBALS["tkekokmd"] = "dia";
$GLOBALS["xvhmft"] = "partes";
$GLOBALS["kmfdcxxhuc"] = "dataconvcriado";
$GLOBALS["vqhmrxgho"] = "datacriado";
$GLOBALS["dnstcyondp"] = "tipo";
$GLOBALS["gmnekrnofa"] = "row";
$GLOBALS["uujnrufpmgr"] = "SQLUPUser";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/abertas.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
protegePagina("donoadmin");
echo "<script type=\"text/javascript\" src=\"../../app-assets/plugins/sort-table.js\"></script>\n<script>\n    \$(document).ready(function() {\n        \$(\"#myInput\").on(\"keyup\", function() {\n            var value = \$(this).val().toLowerCase();\n            \$(\"#myTable tr\").filter(function() {\n                \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)\n            });\n        });\n    });\n</script>\n<div class=\"row\" id=\"table-hover-row\">\n    <div class=\"col-12\">\n        <div class=\"card\">\n            <div class=\"card-header\">\n                <h1 class=\"card-title font-medium-2\"><i class=\"fad fa-file-invoice-dollar text-success font-large-1\"></i> Faturas Em Aberto</h1>\n            </div>\n            <div class=\"card-content\">\n                <div class=\"card-body\">\n                    <p>Faturas n\xc3\xa3o pagas!</p>\n                    <div class=\"col-12\"><br>\n                        <div class=\"form-responsive\">\n                            <input type=\"text\" id=\"myInput\" placeholder=\"Pesquisar...\" class=\"form-control\">\n                        </div>\n                    </div>\n                </div>\n                <div class=\"table-responsive\">\n                    <table class=\"table table-hover mb-0 js-sort-table\" id=\"MeuServidor\" data-search=\"minhaPesquisa-lista\">\n                        <thead>\n                            <tr>\n                                <th>ID</th>\n                                <th>TIPO</th>\n                                <th>STATUS</th>\n                                <th>DATA</th>\n                                <th>VENCIMENTO</th>\n                                <th>VALOR</th>\n                                <th>INFORMACOES</th>\n                            </tr>\n                        </thead>\n                        <tbody id=\"myTable\">\n                            ";
${$GLOBALS["uujnrufpmgr"]} = "SELECT * FROM fatura where status='pendente' ORDER BY id desc";
${$GLOBALS["uujnrufpmgr"]} = $conn->prepare(${$GLOBALS["uujnrufpmgr"]});
$SQLUPUser->execute();
if ($SQLUPUser->rowCount() > 0) {
    while (${$GLOBALS["gmnekrnofa"]} = $SQLUPUser->fetch()) {
        $GLOBALS["pyktigbdqk"] = "row";
        $dnhirqbjvru = "tipo";
        $GLOBALS["fsgkmso"] = "dataconvcriado";
        switch (${$GLOBALS["gmnekrnofa"]}["tipo"]) {
            case "vpn":
                ${$GLOBALS["dnstcyondp"]} = "Acesso VPN";
                break;
            case "revenda":
                ${$GLOBALS["dnstcyondp"]} = "Revenda";
                break;
            default:
                ${$dnhirqbjvru} = "Outros";
                break;
        }
        ${$GLOBALS["vqhmrxgho"]} = ${$GLOBALS["gmnekrnofa"]}["data"];
        $GLOBALS["uqrweql"] = "datacriado";
        $wwequsuci = "partes";
        $GLOBALS["zcxxwbq"] = "Susuario";
        ${$GLOBALS["fsgkmso"]} = substr($datacriado, 0, 10);
        $GLOBALS["qpgcxodwhrv"] = "vencimento";
        $kktemjbegpye = "ano";
        $GLOBALS["wkspgbttpc"] = "tipo";
        ${$wwequsuci} = explode("-", ${$GLOBALS["kmfdcxxhuc"]});
        $GLOBALS["dqzowiu"] = "mes";
        $GLOBALS["deqvrdausl"] = "partes";
        $GLOBALS["tldpxtigebga"] = "mes";
        $GLOBALS["ehmpwjrqg"] = "datavn";
        ${$kktemjbegpye} = ${$GLOBALS["xvhmft"]}[0];
        ${$GLOBALS["tldpxtigebga"]} = ${$GLOBALS["deqvrdausl"]}[1];
        ${$GLOBALS["tkekokmd"]} = ${$GLOBALS["xvhmft"]}[2];
        $nbbnjkmkqpn = "usuario";
        ${$GLOBALS["fgpzxmtir"]} = ${$GLOBALS["gmnekrnofa"]}["datavencimento"];
        ${$GLOBALS["cqeghpsmkk"]} = substr(${$GLOBALS["qpgcxodwhrv"]}, 0, 10);
        $lftexuyaw = "Susuario";
        $yeupadm = "row";
        $vlhxhuzjvmjh = "valor";
        $GLOBALS["kxdfcitic"] = "row";
        ${$GLOBALS["rkdwcqebunhu"]} = explode("-", ${$GLOBALS["ehmpwjrqg"]});
        ${$GLOBALS["enejtsvigni"]} = ${$GLOBALS["rkdwcqebunhu"]}[0];
        $qwgaouehme = "partesven";
        ${$GLOBALS["ssbmtjrxnziu"]} = $partesven[1];
        $njfvjqdhg = "row";
        $GLOBALS["qtsreqodt"] = "botao";
        $ejlbgwivzu = "row";
        ${$GLOBALS["wbnvkbxvw"]} = ${$GLOBALS["rkdwcqebunhu"]}[2];
        ${$vlhxhuzjvmjh} = number_format(${$ejlbgwivzu}["valor"] * ${$GLOBALS["kxdfcitic"]}["qtd"], 2);
        switch (${$njfvjqdhg}["status"]) {
            case "pendente":
                ${$GLOBALS["jvnbfrqkpk"]} = "<span class=\"label label-warning\">Pendente</span>";
                break;
            case "cancelado":
                ${$GLOBALS["jvnbfrqkpk"]} = "<span class=\"label label-danger\">Cancelado</span>";
                break;
            case "pago":
                ${$GLOBALS["qtsreqodt"]} = "<span class=\"label label-success\">Pago</span>";
                break;
            default:
                ${$GLOBALS["jvnbfrqkpk"]} = "Outros";
                break;
        }
        ${$GLOBALS["zcxxwbq"]} = "SELECT * FROM usuario where id_usuario='" . ${$GLOBALS["gmnekrnofa"]}["usuario_id"] . "'";
        ${$lftexuyaw} = $conn->prepare(${$GLOBALS["kedvqjke"]});
        $Susuario->execute();
        ${$nbbnjkmkqpn} = $Susuario->fetch();
        echo "\n                                    <tr >\n                                        <td >#";
        echo ${$GLOBALS["pyktigbdqk"]}["id"];
        echo "</td>\n                                        <td>";
        echo ${$GLOBALS["wkspgbttpc"]};
        echo "</td>\n                                        <td>";
        echo ${$GLOBALS["jvnbfrqkpk"]};
        echo "</td>\n                                        <td>";
        echo ${$GLOBALS["blbkjd"]}["nome"];
        echo "</td>\n                                        <td>";
        echo ${$GLOBALS["tkekokmd"]};
        echo "/";
        echo ${$GLOBALS["dqzowiu"]};
        echo " - ";
        echo ${$GLOBALS["julqbjqds"]};
        echo "</td>\n                                        <td>";
        echo ${$GLOBALS["wbnvkbxvw"]};
        echo "/";
        echo ${$GLOBALS["ssbmtjrxnziu"]};
        echo " - ";
        echo ${$GLOBALS["enejtsvigni"]};
        echo "</td>\n                                        <td>R\$";
        echo number_format(${$GLOBALS["bmgxuxzbmcd"]}, 2, ",", ".");
        echo "</td>\n\n\n                                        <td>\n\n                                            <a href=\"home.php?page=faturas/verfatura&id=";
        echo ${$yeupadm}["id"];
        echo "\" class=\"btn btn-block btn-success btn-sm\">Visualizar</a>\n\n\n\n                                        </td>\n                                    </tr>\n\n                                ";
    }
}
echo "                            </tbody>\n                        </table>\n                    </div>\n                </div>\n            </div>\n        </div>\n    </div>\n";
