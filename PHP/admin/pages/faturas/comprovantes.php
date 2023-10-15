<?php

$GLOBALS["mwsocuwuyj"] = "ano";
$GLOBALS["fieucwhkhz"] = "botao";
$GLOBALS["uquuddbmq"] = "dia";
$GLOBALS["trimsqw"] = "partes";
$GLOBALS["cixduyidttm"] = "datacriado";
$GLOBALS["tpzchqmhj"] = "dataconvcriado";
$GLOBALS["bgikeysijka"] = "tipo";
$GLOBALS["goplrna"] = "row";
$GLOBALS["wdlhxjurg"] = "SQLUPUser";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/comprovantes.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
$qfxatigsyq = "SQLUPUser";
protegePagina("donoadmin");
echo "<script type=\"text/javascript\" src=\"../../app-assets/plugins/sort-table.js\"></script>\n<script>\n    \$(document).ready(function() {\n        \$(\"#myInput\").on(\"keyup\", function() {\n            var value = \$(this).val().toLowerCase();\n            \$(\"#myTable tr\").filter(function() {\n                \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)\n            });\n        });\n    });\n</script>\n<div class=\"row\" id=\"table-hover-row\">\n    <div class=\"col-12\">\n        <div class=\"card\">\n            <div class=\"card-header\">\n                <h1 class=\"card-title font-medium-2\"><i class=\"fad fa-file-invoice text-success font-large-1\"></i> Comprovantes</h1>\n            </div>\n            <div class=\"card-content\">\n                <div class=\"card-body\">\n                    <p>Seus comprovantes de pagamento</p>\n                    <div class=\"col-12\"><br>\n                        <div class=\"form-responsive\">\n                            <input type=\"text\" id=\"myInput\" placeholder=\"Pesquisar...\" class=\"form-control\">\n                        </div>\n                    </div>\n                </div>\n                <div class=\"table-responsive\">\n                    <table class=\"table table-hover mb-0 js-sort-table\" id=\"MeuServidor\" data-search=\"minhaPesquisa-lista\">\n                        <thead>\n                        <tr>\n                            <th>FATURA</th>\n                            <th>CLIENTE</th>\n                            <th>STATUS</th>\n                            <th>DATA</th>\n                            <th>FORMA</th>\n                            <th>NOTA</th>\n                            <th>IMG</th>\n                            <th>INFORMACOES</th>\n                        </tr>\n                        </thead>\n                        <tbody id=\"myTable\">\n                        ";
${$GLOBALS["wdlhxjurg"]} = "SELECT * FROM  fatura_comprovantes where status='aberto' ORDER BY id desc ";
${$qfxatigsyq} = $conn->prepare(${$GLOBALS["wdlhxjurg"]});
$SQLUPUser->execute();
if ($SQLUPUser->rowCount() > 0) {
    $ybnzveusiua = "row";
    while (${$ybnzveusiua} = $SQLUPUser->fetch()) {
        $nolybmdbxsbf = "Susuario";
        $GLOBALS["bjmrqrkqxh"] = "botao";
        $uxvdlkmc = "botao";
        $qqhiuanob = "ano";
        $GLOBALS["ddsclwbdni"] = "partes";
        switch (${$GLOBALS["goplrna"]}["formapagamento"]) {
            case "boleto":
                ${$GLOBALS["bgikeysijka"]} = "Boleto";
                break;
            case "deptra":
                ${$GLOBALS["bgikeysijka"]} = "CEF-DEP";
                break;
            default:
                ${$GLOBALS["bgikeysijka"]} = "Outros";
                break;
        }
        $GLOBALS["vcqqvv"] = "Susuario";
        $GLOBALS["buqojjy"] = "partes";
        $GLOBALS["vqehqrl"] = "partes";
        $GLOBALS["pmsllyfq"] = "datacriado";
        $GLOBALS["phrxsukex"] = "dataconvcriado";
        $datacriado = ${$GLOBALS["goplrna"]}["data"];
        $GLOBALS["fqkoyymeqd"] = "mes";
        ${$GLOBALS["tpzchqmhj"]} = substr(${$GLOBALS["cixduyidttm"]}, 0, 10);
        ${$GLOBALS["trimsqw"]} = explode("-", ${$GLOBALS["phrxsukex"]});
        $GLOBALS["gndbbymvvqv"] = "usuario";
        $GLOBALS["cgpfjqqkelj"] = "botao";
        ${$qqhiuanob} = ${$GLOBALS["buqojjy"]}[0];
        $GLOBALS["dndaithn"] = "usuario";
        $piugvsule = "Susuario";
        ${$GLOBALS["fqkoyymeqd"]} = ${$GLOBALS["ddsclwbdni"]}[1];
        $GLOBALS["tdkuckvyxwfw"] = "tipo";
        ${$GLOBALS["uquuddbmq"]} = ${$GLOBALS["vqehqrl"]}[2];
        switch (${$GLOBALS["goplrna"]}["status"]) {
            case "aberto":
                ${$GLOBALS["bjmrqrkqxh"]} = "<span class=\"label label-warning\">Aberto</span>";
                break;
            case "cancelado":
                ${$GLOBALS["fieucwhkhz"]} = "<span class=\"label label-danger\">Cancelado</span>";
                break;
            case "pago":
                ${$uxvdlkmc} = "<span class=\"label label-success\">Pago</span>";
                break;
            default:
                ${$GLOBALS["cgpfjqqkelj"]} = "Outros";
                break;
        }
        ${$nolybmdbxsbf} = "SELECT * FROM usuario where id_usuario='" . ${$GLOBALS["goplrna"]}["usuario_id"] . "'";
        ${$piugvsule} = $conn->prepare(${$GLOBALS["vcqqvv"]});
        $Susuario->execute();
        $GLOBALS["tbsuptdnf"] = "mes";
        ${$GLOBALS["gndbbymvvqv"]} = $Susuario->fetch();
        echo "\n                                <tr >\n                                    <td >#";
        echo ${$GLOBALS["goplrna"]}["fatura_id"];
        echo "</td>\n                                    <td>";
        $gorduim = "dia";
        $wpgwhurel = "row";
        echo ${$GLOBALS["dndaithn"]}["nome"];
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["fieucwhkhz"]};
        echo "</td>\n                                    <td>";
        echo $dia;
        echo "/";
        echo ${$GLOBALS["tbsuptdnf"]};
        echo " - ";
        echo ${$GLOBALS["mwsocuwuyj"]};
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["tdkuckvyxwfw"]};
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["goplrna"]}["nota"];
        echo "</td>\n                                    <td><a href=\"../../../admin/pages/faturas/comprovantes/";
        echo $row["imagem"];
        echo "\" target=\"_blank\" class=\"btn btn-block btn-success\">Ver</a></td>\n\n\n                                    <td>\n\n                                        <a href=\"home.php?page=faturas/verfatura&id=";
        echo ${$GLOBALS["goplrna"]}["fatura_id"];
        echo "\" class=\"btn btn-block btn-success\">Visualizar</a>\n\n\n\n                                    </td>\n                                </tr>\n\n                            ";
    }
}
echo "\n\n                        </tbody>\n                    </table>\n                </div>\n            </div>\n        </div>\n    </div>\n</div>\n";
