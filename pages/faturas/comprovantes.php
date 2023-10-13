<?php

$GLOBALS["plipsqbi"] = "usuario";
$GLOBALS["xmqmpfym"] = "row";
$GLOBALS["rqvgzlr"] = "Susuario";
$GLOBALS["mosdnvk"] = "botao";
$GLOBALS["jqusgcwzt"] = "dia";
$GLOBALS["vbrcjgpvjwf"] = "partes";
$GLOBALS["bdptyyrvfsc"] = "tipo";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/comprovantes.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
$xafdnmvibqb = "SQLUPUser";
$iqdbufyc = "SQLUPUser";
$xpylwltpxp = "SQLUPUser";
$bsbspbaoei = "usuario";
protegePagina("user");
if ($usuario["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
echo "<script type=\"text/javascript\" src=\"../../app-assets/plugins/sort-table.js\"></script>\n<script>\n    \$(document).ready(function() {\n        \$(\"#myInput\").on(\"keyup\", function() {\n            var value = \$(this).val().toLowerCase();\n            \$(\"#myTable tr\").filter(function() {\n                \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)\n            });\n        });\n    });\n</script>\n<div class=\"row\" id=\"table-hover-row\">\n    <div class=\"col-12\">\n        <div class=\"card\">\n            <div class=\"card-header\">\n                <h1 class=\"card-title font-medium-2\"><i class=\"fad fa-globe-americas text-success font-large-1\"></i> Comprovantes de Clientes</h1>\n            </div>\n            <div class=\"card-content\">\n                <div class=\"card-body\">\n                    <p>Comprovantes de pagamento</p>\n                    <div class=\"col-12\"><br>\n                        <div class=\"form-responsive\">\n                            <input type=\"text\" id=\"myInput\" placeholder=\"Pesquisar...\" class=\"form-control\">\n                        </div>\n                    </div>\n                </div>\n                <div class=\"table-responsive\">\n                    <table class=\"table table-hover mb-0 js-sort-table\" id=\"MeuServidor\" data-search=\"minhaPesquisa-lista\">\n                        <thead>\n                        <tr>\n                            <th>ID Fatura</th>\n                            <th>Tipo</th>\n                            <th>Status</th>\n                            <th>Data</th>\n                            <th>Vencimento</th>\n                            <th>Valor</th>\n                            <th>Informa\xc3\xa7\xc3\xb5es</th>\n                        </tr>\n                        </thead>\n                        <tbody>\n                        ";
${$xpylwltpxp} = "SELECT * FROM  fatura_comprovantes where status='aberto' ORDER BY id desc ";
${$iqdbufyc} = $conn->prepare(${$xafdnmvibqb});
$SQLUPUser->execute();
if ($SQLUPUser->rowCount() > 0) {
    $GLOBALS["oyjtrjtqvq"] = "row";
    while (${$GLOBALS["oyjtrjtqvq"]} = $SQLUPUser->fetch()) {
        $GLOBALS["hcosrnjj"] = "row";
        $GLOBALS["nhovtpu"] = "row";
        $GLOBALS["ilskqbyhpr"] = "botao";
        $GLOBALS["minhyurhffl"] = "row";
        $GLOBALS["fnbwnbunyrk"] = "usuario";
        $GLOBALS["jnowmgq"] = "mes";
        $yfldudfp = "ano";
        $GLOBALS["gbivsirbsk"] = "tipo";
        $ddzyhdgijn = "row";
        $GLOBALS["rhemywyebau"] = "botao";
        $GLOBALS["kneyganb"] = "mes";
        $cclscuy = "tipo";
        $ucdnmouqnnll = "dataconvcriado";
        $kgvbtfjj = "datacriado";
        $GLOBALS["fgwbocafiot"] = "partes";
        switch ($row["formapagamento"]) {
            case "boleto":
                ${$GLOBALS["bdptyyrvfsc"]} = "Boleto";
                break;
            case "deptra":
                ${$cclscuy} = "CEF-DEP";
                break;
            default:
                ${$GLOBALS["bdptyyrvfsc"]} = "Outros";
                break;
        }
        $uboxeojwt = "dataconvcriado";
        ${$kgvbtfjj} = ${$ddzyhdgijn}["data"];
        $hmpsmdkqvg = "datacriado";
        $GLOBALS["vtfbswhchvv"] = "partes";
        $cmqgwma = "partes";
        ${$uboxeojwt} = substr($datacriado, 0, 10);
        ${$GLOBALS["fgwbocafiot"]} = explode("-", ${$ucdnmouqnnll});
        ${$yfldudfp} = ${$GLOBALS["vtfbswhchvv"]}[0];
        $GLOBALS["irysvlieidxq"] = "ano";
        ${$GLOBALS["kneyganb"]} = ${$GLOBALS["vbrcjgpvjwf"]}[1];
        ${$GLOBALS["jqusgcwzt"]} = ${$cmqgwma}[2];
        switch (${$GLOBALS["hcosrnjj"]}["status"]) {
            case "aberto":
                ${$GLOBALS["rhemywyebau"]} = "<span class=\"label label-warning\">Aberto</span>";
                break;
            case "cancelado":
                ${$GLOBALS["ilskqbyhpr"]} = "<span class=\"label label-danger\">Cancelado</span>";
                break;
            case "pago":
                ${$GLOBALS["mosdnvk"]} = "<span class=\"label label-success\">Pago</span>";
                break;
            default:
                ${$GLOBALS["mosdnvk"]} = "Outros";
                break;
        }
        ${$GLOBALS["rqvgzlr"]} = "SELECT * FROM usuario where id_usuario='" . ${$GLOBALS["xmqmpfym"]}["usuario_id"] . "'";
        ${$GLOBALS["rqvgzlr"]} = $conn->prepare(${$GLOBALS["rqvgzlr"]});
        $Susuario->execute();
        ${$GLOBALS["plipsqbi"]} = $Susuario->fetch();
        echo "\n                                <tr >\n                                    <td >#";
        echo ${$GLOBALS["xmqmpfym"]}["fatura_id"];
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["fnbwnbunyrk"]}["nome"];
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["mosdnvk"]};
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["jqusgcwzt"]};
        echo "/";
        echo ${$GLOBALS["jnowmgq"]};
        echo " - ";
        echo ${$GLOBALS["irysvlieidxq"]};
        echo "</td>\n                                    <td>";
        $GLOBALS["mejjabqdnhuq"] = "row";
        echo ${$GLOBALS["gbivsirbsk"]};
        echo "</td>\n                                    <td>";
        echo $row["nota"];
        echo "</td>\n                                    <td><a href=\"../../../admin/pages/faturas/comprovantes/";
        echo ${$GLOBALS["minhyurhffl"]}["imagem"];
        echo "\" target=\"_blank\" class=\"btn btn-block btn-success\">Ver</a></td>\n                                    <td>\n                                        <a href=\"home.php?page=faturas/verfatura&id=";
        echo ${$GLOBALS["xmqmpfym"]}["fatura_id"];
        echo "\" class=\"btn btn-block btn-success\">Visualizar</a>\n                                    </td>\n                                </tr>\n\n                            ";
    }
}
echo "                        </tbody>\n                    </table>\n                </div>\n            </div>\n        </div>\n    </div>\n</div>\n";
