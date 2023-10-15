<?php

$GLOBALS["odjeqroufwa"] = "botao";
$GLOBALS["bhmmeq"] = "valor";
$GLOBALS["nsyvpnm"] = "diav";
$GLOBALS["xiqhxjri"] = "partesven";
$GLOBALS["ycfmryrsvewc"] = "anov";
$GLOBALS["ufvbeavyr"] = "datavn";
$GLOBALS["eubtspug"] = "partes";
$GLOBALS["eupnmjouwimk"] = "dia";
$GLOBALS["xdujekr"] = "mes";
$GLOBALS["kypdbkbq"] = "ano";
$GLOBALS["nlpebjhxc"] = "tipo";
$GLOBALS["ityiorrg"] = "row";
$GLOBALS["fswfgruqr"] = "SQLUPUser";
$wrzpyy = "usuario";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/canceladas.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
$xfqoymxujbm = "usuario";
protegePagina("user");
$pmndtgp = "SQLUPUser";
if (${$wrzpyy}["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
$GLOBALS["wqequhp"] = "SQLUPUser";
echo "<script type=\"text/javascript\" src=\"../../app-assets/plugins/sort-table.js\"></script>\n<script>\n    \$(document).ready(function() {\n        \$(\"#myInput\").on(\"keyup\", function() {\n            var value = \$(this).val().toLowerCase();\n            \$(\"#myTable tr\").filter(function() {\n                \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)\n            });\n        });\n    });\n</script>\n<div class=\"row\" id=\"table-hover-row\">\n    <div class=\"col-12\">\n        <div class=\"card\">\n            <div class=\"card-header\">\n                <h1 class=\"card-title font-medium-2\"><i class=\"fad fa-file-excel text-success font-large-1\"></i> Faturas Canceladas</h1>\n            </div>\n            <div class=\"card-content\">\n                <div class=\"card-body\">\n                    <p>Todas as faturas canceladas listada abaixo.</p>\n                    <div class=\"col-12\"><br>\n                        <div class=\"form-responsive\">\n                            <input type=\"text\" id=\"myInput\" placeholder=\"Pesquisar...\" class=\"form-control\">\n                        </div>\n                    </div>\n                </div>\n                <div class=\"table-responsive\">\n                    <table class=\"table table-hover mb-0 js-sort-table\" id=\"MeuServidor\" data-search=\"minhaPesquisa-lista\">\n                        <thead>\n                        <tr>\n                            <th>ID FATURA</th>\n                            <th>TIPO</th>\n                            <th>STATUS</th>\n                            <th>DATA</th>\n                            <th>VENCIMENTO</th>\n                            <th>VALOR</th>\n                            <th>INFORMACOES</th>\n                        </tr>\n                        </thead>\n                        <tbody id=\"myTable\">\n                        ";
${$pmndtgp} = "SELECT * FROM fatura where usuario_id =  '" . ${$xfqoymxujbm}["id_usuario"] . "' and status='cancelado' ORDER BY id desc ";
${$GLOBALS["fswfgruqr"]} = $conn->prepare(${$GLOBALS["wqequhp"]});
$SQLUPUser->execute();
if ($SQLUPUser->rowCount() > 0) {
    $vbzffnubkbt = "row";
    while (${$vbzffnubkbt} = $SQLUPUser->fetch()) {
        $xiorqrrqvtfi = "tipo";
        $rfiyobk = "tipo";
        $ogslnbwnni = "dataconvcriado";
        $uxjwwfqpc = "partes";
        $pnybpulgai = "row";
        $ikysryxow = "botao";
        $GLOBALS["hvruwf"] = "partes";
        $oxgvksxpv = "dataconvcriado";
        $umrkta = "datacriado";
        $tvhusuv = "row";
        $GLOBALS["ugeevaofxs"] = "datavn";
        $GLOBALS["cwggeujwewo"] = "diav";
        $GLOBALS["ibvwsfu"] = "datacriado";
        $GLOBALS["qxqzvuibioga"] = "vencimento";
        switch (${$GLOBALS["ityiorrg"]}["tipo"]) {
            case "vpn":
                ${$rfiyobk} = "Acesso VPN";
                break;
            case "revenda":
                ${$GLOBALS["nlpebjhxc"]} = "Revenda";
                break;
            default:
                ${$xiorqrrqvtfi} = "Outros";
                break;
        }
        ${$umrkta} = ${$GLOBALS["ityiorrg"]}["data"];
        $GLOBALS["tddzcrelr"] = "partes";
        $lunkclrid = "mesv";
        ${$ogslnbwnni} = substr(${$GLOBALS["ibvwsfu"]}, 0, 10);
        ${$GLOBALS["tddzcrelr"]} = explode("-", ${$oxgvksxpv});
        $tetjajgdrshg = "partesven";
        $dkqchibu = "vencimento";
        ${$GLOBALS["kypdbkbq"]} = ${$GLOBALS["hvruwf"]}[0];
        $cuoymjir = "mes";
        $GLOBALS["smxlqiyfjkk"] = "partesven";
        $GLOBALS["wdvrydlet"] = "botao";
        $GLOBALS["kxcxynqvzlvx"] = "partesven";
        ${$GLOBALS["xdujekr"]} = ${$uxjwwfqpc}[1];
        ${$GLOBALS["eupnmjouwimk"]} = ${$GLOBALS["eubtspug"]}[2];
        ${$dkqchibu} = ${$GLOBALS["ityiorrg"]}["datavencimento"];
        ${$GLOBALS["ugeevaofxs"]} = substr(${$GLOBALS["qxqzvuibioga"]}, 0, 10);
        ${$GLOBALS["smxlqiyfjkk"]} = explode("-", ${$GLOBALS["ufvbeavyr"]});
        $gxbnaqmagh = "botao";
        ${$GLOBALS["ycfmryrsvewc"]} = ${$GLOBALS["xiqhxjri"]}[0];
        $lilrpgothqrx = "botao";
        $mrhqrbxikl = "mesv";
        ${$lunkclrid} = ${$tetjajgdrshg}[1];
        ${$GLOBALS["nsyvpnm"]} = ${$GLOBALS["kxcxynqvzlvx"]}[2];
        ${$GLOBALS["bhmmeq"]} = number_format(${$pnybpulgai}["valor"] * ${$GLOBALS["ityiorrg"]}["qtd"], 2);
        switch (${$GLOBALS["ityiorrg"]}["status"]) {
            case "pendente":
                ${$lilrpgothqrx} = "<span class=\"label label-warning\">Pendente</span>";
                break;
            case "cancelado":
                ${$GLOBALS["wdvrydlet"]} = "<span class=\"label label-danger\">Cancelado</span>";
                break;
            case "pago":
                ${$gxbnaqmagh} = "<span class=\"label label-success\">Pago</span>";
                break;
            default:
                ${$GLOBALS["odjeqroufwa"]} = "Outros";
                break;
        }
        echo "\n                                <tr >\n                                    <td >#";
        echo ${$tvhusuv}["id"];
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["nlpebjhxc"]};
        echo "</td>\n                                    <td>";
        $GLOBALS["xcnujamnbfch"] = "dia";
        echo ${$ikysryxow};
        echo "</td>\n                                    <td>";
        echo $dia;
        echo "/";
        echo ${$cuoymjir};
        echo " - ";
        echo ${$GLOBALS["kypdbkbq"]};
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["cwggeujwewo"]};
        echo "/";
        echo ${$mrhqrbxikl};
        echo " - ";
        echo ${$GLOBALS["ycfmryrsvewc"]};
        echo "</td>\n                                    <td>R\$";
        echo number_format(${$GLOBALS["bhmmeq"]}, 2, ",", ".");
        echo "</td>\n                                    <td>\n                                        <a href=\"home.php?page=faturas/verfatura&id=";
        echo ${$GLOBALS["ityiorrg"]}["id"];
        echo "\" class=\"btn btn-block btn-success\">Visualizar</a>\n                                    </td>\n                                </tr>\n\n                            ";
    }
}
echo "\n                        </tbody>\n                    </table>\n                </div>\n            </div>\n        </div>\n    </div>\n</div>\n";
