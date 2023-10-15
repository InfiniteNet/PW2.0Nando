<?php

$GLOBALS["wcgxapkop"] = "valor";
$GLOBALS["nwqvclqt"] = "diav";
$GLOBALS["tcefduis"] = "ano";
$GLOBALS["jumdchjhdnu"] = "botao";
$GLOBALS["oyqsyffs"] = "partesven";
$GLOBALS["xfwnxppoo"] = "mesv";
$GLOBALS["ifjogtmttqt"] = "datavn";
$GLOBALS["rbixqv"] = "dia";
$GLOBALS["gtefwoeuuu"] = "dataconvcriado";
$GLOBALS["yqxctutgbdir"] = "partes";
$GLOBALS["mwsdpxunymy"] = "datacriado";
$GLOBALS["ycafbufeuhxo"] = "tipo";
$GLOBALS["mlsegfx"] = "row";
$GLOBALS["brfrurtp"] = "SQLUPUser";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/pagas.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
$znumozxymz = "SQLUPUser";
$GLOBALS["nvcwvfk"] = "usuario";
protegePagina("user");
$moexpu = "SQLUPUser";
$GLOBALS["vojcndsier"] = "usuario";
if ($usuario["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
echo "<script type=\"text/javascript\" src=\"../../app-assets/plugins/sort-table.js\"></script>\n<script>\n    \$(document).ready(function() {\n        \$(\"#myInput\").on(\"keyup\", function() {\n            var value = \$(this).val().toLowerCase();\n            \$(\"#myTable tr\").filter(function() {\n                \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)\n            });\n        });\n    });\n</script>\n\n<div class=\"row\" id=\"table-hover-row\">\n    <div class=\"col-12\">\n        <div class=\"card\">\n            <div class=\"card-header\">\n                <h1 class=\"card-title font-medium-2\"><i class=\"fad fa-file-powerpoint text-success font-large-1\"></i> Faturas Pagas</h1>\n            </div>\n            <div class=\"card-content\">\n                <div class=\"card-body\">\n                    <p>Todas as faturas pagas listada abaixo.</p>\n                    <div class=\"col-12\"><br>\n                        <div class=\"form-responsive\">\n                            <input type=\"text\" id=\"myInput\" placeholder=\"Pesquisar...\" class=\"form-control\">\n                        </div>\n                    </div>\n                </div>\n                <div class=\"table-responsive\">\n                    <table class=\"table table-hover mb-0 js-sort-table\" id=\"MeuServidor\" data-search=\"minhaPesquisa-lista\">\n                        <thead>\n                        <tr>\n                            <th>ID FATURA</th>\n                            <th>TIPO</th>\n                            <th>STATUS</th>\n                            <th>DATA</th>\n                            <th>VENCIMENTO</th>\n                            <th>VALOR</th>\n                            <th>INFORMACOES</th>\n                        </tr>\n                        </thead>\n                        <tbody id=\"myTable\">\n                        ";
${$moexpu} = "SELECT * FROM fatura where usuario_id =  '" . ${$GLOBALS["nvcwvfk"]}["id_usuario"] . "' and status='pago' ORDER BY id desc ";
${$GLOBALS["brfrurtp"]} = $conn->prepare(${$znumozxymz});
$SQLUPUser->execute();
if ($SQLUPUser->rowCount() > 0) {
    $GLOBALS["kgokcjd"] = "row";
    while (${$GLOBALS["kgokcjd"]} = $SQLUPUser->fetch()) {
        $GLOBALS["ntqmkutwu"] = "botao";
        $GLOBALS["dplnkiij"] = "tipo";
        $GLOBALS["yfpsnk"] = "row";
        $GLOBALS["chqenksdk"] = "tipo";
        $GLOBALS["dtkckei"] = "mesv";
        $GLOBALS["iellpmvk"] = "partesven";
        $iemfdsh = "anov";
        $qalcckymivoi = "partes";
        $cqirydxjso = "row";
        $rxqeubi = "valor";
        $lrbasrruyj = "ano";
        $turfvghanwct = "tipo";
        $GLOBALS["niybqaapix"] = "row";
        $GLOBALS["ihgjrfnkbgeg"] = "mes";
        $tpkquxwkiq = "partes";
        switch (${$GLOBALS["mlsegfx"]}["tipo"]) {
            case "vpn":
                ${$GLOBALS["ycafbufeuhxo"]} = "Acesso VPN";
                break;
            case "revenda":
                ${$GLOBALS["dplnkiij"]} = "Revenda";
                break;
            default:
                ${$GLOBALS["chqenksdk"]} = "Outros";
                break;
        }
        $GLOBALS["kgbwqbcyvcak"] = "dataconvcriado";
        ${$GLOBALS["mwsdpxunymy"]} = ${$GLOBALS["mlsegfx"]}["data"];
        $hiyzxsghzb = "datacriado";
        $gzwnmrdyw = "row";
        $ctqtomqu = "vencimento";
        $pxqjqgurjquj = "vencimento";
        ${$GLOBALS["kgbwqbcyvcak"]} = substr($datacriado, 0, 10);
        ${$GLOBALS["yqxctutgbdir"]} = explode("-", ${$GLOBALS["gtefwoeuuu"]});
        $fuefbdqfimh = "mes";
        ${$lrbasrruyj} = ${$tpkquxwkiq}[0];
        $yxneqsdhuw = "diav";
        ${$GLOBALS["ihgjrfnkbgeg"]} = ${$qalcckymivoi}[1];
        ${$GLOBALS["rbixqv"]} = ${$GLOBALS["yqxctutgbdir"]}[2];
        ${$pxqjqgurjquj} = ${$gzwnmrdyw}["datavencimento"];
        $GLOBALS["fhuhybbd"] = "partesven";
        ${$GLOBALS["ifjogtmttqt"]} = substr(${$ctqtomqu}, 0, 10);
        $GLOBALS["skznrzd"] = "botao";
        ${$GLOBALS["fhuhybbd"]} = explode("-", ${$GLOBALS["ifjogtmttqt"]});
        ${$iemfdsh} = ${$GLOBALS["iellpmvk"]}[0];
        ${$GLOBALS["xfwnxppoo"]} = ${$GLOBALS["oyqsyffs"]}[1];
        ${$yxneqsdhuw} = ${$GLOBALS["oyqsyffs"]}[2];
        ${$rxqeubi} = number_format(${$GLOBALS["mlsegfx"]}["valor"] * ${$cqirydxjso}["qtd"], 2);
        switch (${$GLOBALS["mlsegfx"]}["status"]) {
            case "pendente":
                ${$GLOBALS["jumdchjhdnu"]} = "<span class=\"label label-warning\">Pendente</span>";
                break;
            case "cancelado":
                ${$GLOBALS["jumdchjhdnu"]} = "<span class=\"label label-danger\">Cancelado</span>";
                break;
            case "pago":
                ${$GLOBALS["jumdchjhdnu"]} = "<span class=\"label label-success\">Pago</span>";
                break;
            default:
                ${$GLOBALS["skznrzd"]} = "Outros";
                break;
        }
        $GLOBALS["asridmjmo"] = "dia";
        $sstnexmtybr = "anov";
        echo "\n                                <tr >\n                                    <td >#";
        echo ${$GLOBALS["yfpsnk"]}["id"];
        echo "</td>\n                                    <td>";
        echo ${$turfvghanwct};
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["ntqmkutwu"]};
        echo "</td>\n                                    <td>";
        echo $dia;
        echo "/";
        echo ${$fuefbdqfimh};
        echo " - ";
        echo ${$GLOBALS["tcefduis"]};
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["nwqvclqt"]};
        echo "/";
        echo ${$GLOBALS["dtkckei"]};
        echo " - ";
        echo $anov;
        echo "</td>\n                                    <td>R\$";
        echo number_format(${$GLOBALS["wcgxapkop"]}, 2, ",", ".");
        echo "</td>\n\n\n                                    <td>\n\n                                        <a href=\"home.php?page=faturas/verfatura&id=";
        echo ${$GLOBALS["niybqaapix"]}["id"];
        echo "\" class=\"btn btn-block btn-success\">Visualizar</a>\n\n\n\n                                    </td>\n                                </tr>\n                            ";
    }
}
echo "\n\n                        </tbody>\n                    </table>\n                </div>\n            </div>\n        </div>\n    </div>\n</div>\n";
