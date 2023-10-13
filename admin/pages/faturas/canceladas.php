<?php

$GLOBALS["hdturfzpjg"] = "valor";
$GLOBALS["ofbowqynhf"] = "diav";
$GLOBALS["hiumwgw"] = "tipo";
$GLOBALS["zbivyfo"] = "usuario";
$GLOBALS["blcibwhwqnm"] = "Susuario";
$GLOBALS["zavtjvqj"] = "botao";
$GLOBALS["tccnhwwxy"] = "mesv";
$GLOBALS["nczglgeeaq"] = "partesven";
$GLOBALS["ngdsikkq"] = "vencimento";
$GLOBALS["dfttrmu"] = "mes";
$GLOBALS["qsrjpcshglyh"] = "ano";
$GLOBALS["eulvumyeemmf"] = "dataconvcriado";
$GLOBALS["prdltcjzr"] = "partes";
$GLOBALS["hfkvbwufetz"] = "row";
$GLOBALS["pqyocszfi"] = "SQLUPUser";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/canceladas.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
$GLOBALS["sglhmnjux"] = "SQLUPUser";
protegePagina("donoadmin");
echo "<script type=\"text/javascript\" src=\"../../app-assets/plugins/sort-table.js\"></script>\n<script>\n    \$(document).ready(function() {\n        \$(\"#myInput\").on(\"keyup\", function() {\n            var value = \$(this).val().toLowerCase();\n            \$(\"#myTable tr\").filter(function() {\n                \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)\n            });\n        });\n    });\n</script>\n<div class=\"row\" id=\"table-hover-row\">\n    <div class=\"col-12\">\n        <div class=\"card\">\n            <div class=\"card-header\">\n                <h1 class=\"card-title font-medium-2\"><i class=\"fad fa-file-excel text-success font-large-1\"></i> Faturas Canceladas</h1>\n            </div>\n            <div class=\"card-content\">\n                <div class=\"card-body\">\n                    <p>Paragrafo</p>\n                    <div class=\"col-12\"><br>\n                        <div class=\"form-responsive\">\n                            <input type=\"text\" id=\"myInput\" placeholder=\"Pesquisar...\" class=\"form-control\">\n                        </div>\n                    </div>\n                </div>\n                <div class=\"table-responsive\">\n                    <table class=\"table table-hover mb-0 js-sort-table\" id=\"MeuServidor\" data-search=\"minhaPesquisa-lista\">\n                        <thead>\n                        <tr>\n                            <th>ID FATURA</th>\n                            <th>TIPO</th>\n                            <th>STATUS</th>\n                            <th>CLIENTE</th>\n                            <th>DATA</th>\n                            <th>VENCIMENTO</th>\n                            <th>VALOR</th>\n                            <th>INFORMACOES</th>\n                        </tr>\n                        </thead>\n                        <tbody id=\"myTable\">\n                        ";
$GLOBALS["fyshlbfqbk"] = "SQLUPUser";
${$GLOBALS["pqyocszfi"]} = "SELECT * FROM fatura where status='cancelado' ORDER BY id desc ";
${$GLOBALS["fyshlbfqbk"]} = $conn->prepare(${$GLOBALS["sglhmnjux"]});
$SQLUPUser->execute();
if ($SQLUPUser->rowCount() > 0) {
    while (${$GLOBALS["hfkvbwufetz"]} = $SQLUPUser->fetch()) {
        $xevxodxk = "row";
        $GLOBALS["cprehevpn"] = "datacriado";
        $pwjeqgrumhvv = "datavn";
        $GLOBALS["hjlgqgpgzfco"] = "row";
        $GLOBALS["hgaxgoexfm"] = "diav";
        $GLOBALS["ywtcolddoko"] = "tipo";
        $hyoiakzlkr = "botao";
        $tftrajbwezi = "usuario";
        $yiaqsnlwy = "tipo";
        $rcllycbovru = "partes";
        $GLOBALS["ncexoobhy"] = "tipo";
        $tolhxsby = "row";
        $GLOBALS["jxplqwcg"] = "dia";
        $GLOBALS["rendzhpy"] = "datacriado";
        $lijoisvl = "partes";
        switch ($row["tipo"]) {
            case "vpn":
                ${$GLOBALS["ywtcolddoko"]} = "Acesso VPN";
                break;
            case "revenda":
                ${$yiaqsnlwy} = "Revenda";
                break;
            default:
                ${$GLOBALS["ncexoobhy"]} = "Outros";
                break;
        }
        $bpxnsjphzui = "dataconvcriado";
        $GLOBALS["whhyhyffe"] = "datavn";
        $GLOBALS["tpbxbpml"] = "row";
        ${$GLOBALS["rendzhpy"]} = ${$GLOBALS["hjlgqgpgzfco"]}["data"];
        $GLOBALS["bwblvkjggq"] = "row";
        ${$bpxnsjphzui} = substr(${$GLOBALS["cprehevpn"]}, 0, 10);
        $llyfclgjjmp = "dia";
        ${$GLOBALS["prdltcjzr"]} = explode("-", ${$GLOBALS["eulvumyeemmf"]});
        $GLOBALS["kqrlasidm"] = "valor";
        $GLOBALS["borpglfvinu"] = "Susuario";
        $GLOBALS["cukbnjagylv"] = "row";
        ${$GLOBALS["qsrjpcshglyh"]} = ${$lijoisvl}[0];
        $GLOBALS["pfeinsub"] = "botao";
        ${$GLOBALS["dfttrmu"]} = ${$rcllycbovru}[1];
        ${$llyfclgjjmp} = ${$GLOBALS["prdltcjzr"]}[2];
        $GLOBALS["fvyikhjftlc"] = "vencimento";
        ${$GLOBALS["ngdsikkq"]} = ${$GLOBALS["hfkvbwufetz"]}["datavencimento"];
        ${$pwjeqgrumhvv} = substr(${$GLOBALS["fvyikhjftlc"]}, 0, 10);
        $GLOBALS["zeatimasoco"] = "partesven";
        $GLOBALS["voxrsodq"] = "partesven";
        ${$GLOBALS["nczglgeeaq"]} = explode("-", ${$GLOBALS["whhyhyffe"]});
        $GLOBALS["pjvjmhp"] = "anov";
        $anov = ${$GLOBALS["nczglgeeaq"]}[0];
        ${$GLOBALS["tccnhwwxy"]} = ${$GLOBALS["voxrsodq"]}[1];
        ${$GLOBALS["hgaxgoexfm"]} = ${$GLOBALS["zeatimasoco"]}[2];
        ${$GLOBALS["kqrlasidm"]} = number_format(${$GLOBALS["cukbnjagylv"]}["valor"] * ${$xevxodxk}["qtd"], 2);
        switch (${$GLOBALS["hfkvbwufetz"]}["status"]) {
            case "pendente":
                ${$GLOBALS["zavtjvqj"]} = "<span class=\"label label-warning\">Pendente</span>";
                break;
            case "cancelado":
                ${$GLOBALS["zavtjvqj"]} = "<span class=\"label label-danger\">Cancelado</span>";
                break;
            case "pago":
                ${$GLOBALS["pfeinsub"]} = "<span class=\"label label-success\">Pago</span>";
                break;
            default:
                ${$GLOBALS["zavtjvqj"]} = "Outros";
                break;
        }
        ${$GLOBALS["borpglfvinu"]} = "SELECT * FROM usuario where id_usuario='" . ${$GLOBALS["tpbxbpml"]}["usuario_id"] . "'";
        ${$GLOBALS["blcibwhwqnm"]} = $conn->prepare(${$GLOBALS["blcibwhwqnm"]});
        $Susuario->execute();
        ${$GLOBALS["zbivyfo"]} = $Susuario->fetch();
        echo "\n                                <tr >\n                                    <td >#";
        echo ${$GLOBALS["hfkvbwufetz"]}["id"];
        $GLOBALS["iaqlcts"] = "anov";
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["hiumwgw"]};
        echo "</td>\n                                    <td>";
        echo ${$hyoiakzlkr};
        echo "</td>\n                                    <td>";
        echo ${$tftrajbwezi}["nome"];
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["jxplqwcg"]};
        echo "/";
        echo ${$GLOBALS["dfttrmu"]};
        echo " - ";
        echo ${$GLOBALS["qsrjpcshglyh"]};
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["ofbowqynhf"]};
        echo "/";
        echo ${$GLOBALS["tccnhwwxy"]};
        echo " - ";
        echo $anov;
        echo "</td>\n                                    <td>R\$";
        echo number_format(${$GLOBALS["hdturfzpjg"]}, 2, ",", ".");
        echo "</td>\n                                    <td>\n                                        <a href=\"home.php?page=faturas/verfatura&id=";
        echo ${$GLOBALS["bwblvkjggq"]}["id"];
        echo "\" class=\"btn btn-block btn-success\">Visualizar</a>\n                                    </td>\n                                </tr>\n\n                            ";
    }
}
echo "                        </tbody>\n                    </table>\n                </div>\n            </div>\n        </div>\n    </div>\n</div>\n";
