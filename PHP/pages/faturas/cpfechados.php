<?php

$GLOBALS["qvvnuyokvwvw"] = "usuario";
$GLOBALS["tyakpuwa"] = "Susuario";
$GLOBALS["bxctmmhm"] = "botao";
$GLOBALS["vzgsstdmb"] = "dia";
$GLOBALS["iaspmchyclp"] = "mes";
$GLOBALS["fiqitn"] = "partes";
$GLOBALS["ctrjcv"] = "dataconvcriado";
$GLOBALS["fmoekqitei"] = "tipo";
$GLOBALS["oxufqgqbk"] = "row";
$GLOBALS["qgpnchz"] = "SQLUPUser";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/cpfechados.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
protegePagina("user");
$GLOBALS["vntzpsmcr"] = "usuario";
if ($usuario["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
echo "<script type=\"text/javascript\" src=\"../../app-assets/plugins/sort-table.js\"></script>\n<script>\n    \$(document).ready(function() {\n        \$(\"#myInput\").on(\"keyup\", function() {\n            var value = \$(this).val().toLowerCase();\n            \$(\"#myTable tr\").filter(function() {\n                \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)\n            });\n        });\n    });\n</script>\n<div class=\"row\" id=\"table-hover-row\">\n    <div class=\"col-12\">\n        <div class=\"card\">\n            <div class=\"card-header\">\n                <h1 class=\"card-title font-medium-2\"><i class=\"fad fa-globe-americas text-success font-large-1\"></i> Verifique os comprovantes dos clientes</h1>\n            </div>\n            <div class=\"card-content\">\n                <div class=\"card-body\">\n                    <p> Comprovantes de pagamento do seus clientes listado abaixo.</p>\n                    <div class=\"col-12\"><br>\n                        <div class=\"form-responsive\">\n                            <input type=\"text\" id=\"myInput\" placeholder=\"Pesquisar...\" class=\"form-control\">\n                        </div>\n                    </div>\n                </div>\n                <div class=\"table-responsive\">\n                    <table class=\"table table-hover mb-0 js-sort-table\" id=\"MeuServidor\" data-search=\"minhaPesquisa-lista\">\n                        <thead>\n                        <tr>\n                            <th>Fatura</th>\n                            <th>Cliente</th>\n                            <th>Status</th>\n                            <th>Data</th>\n                            <th>Forma</th>\n                            <th>Nota</th>\n                            <th>Img</th>\n                            <th>Informa\xc3\xa7\xc3\xb5es</th>\n                        </tr>\n                        </thead>\n                        <tbody>\n                        ";
${$GLOBALS["qgpnchz"]} = "SELECT * FROM  fatura_comprovantes where status='fechado' ORDER BY id desc ";
${$GLOBALS["qgpnchz"]} = $conn->prepare(${$GLOBALS["qgpnchz"]});
$SQLUPUser->execute();
if ($SQLUPUser->rowCount() > 0) {
    while (${$GLOBALS["oxufqgqbk"]} = $SQLUPUser->fetch()) {
        $uqljgyw = "botao";
        $GLOBALS["cgetuqew"] = "partes";
        $GLOBALS["jrnrffrhum"] = "botao";
        $GLOBALS["qwqlxwrdah"] = "tipo";
        $GLOBALS["ijdxjhhzrv"] = "datacriado";
        $sqszbdv = "ano";
        $GLOBALS["zdvktgzkmdj"] = "Susuario";
        $qsmtxqvk = "dataconvcriado";
        $GLOBALS["efpmkfpsf"] = "row";
        $GLOBALS["lheytadxj"] = "ano";
        switch (${$GLOBALS["oxufqgqbk"]}["formapagamento"]) {
            case "boleto":
                ${$GLOBALS["fmoekqitei"]} = "Boleto";
                break;
            case "deptra":
                ${$GLOBALS["qwqlxwrdah"]} = "CEF-DEP";
                break;
            default:
                ${$GLOBALS["fmoekqitei"]} = "Outros";
                break;
        }
        ${$GLOBALS["ijdxjhhzrv"]} = ${$GLOBALS["efpmkfpsf"]}["data"];
        $GLOBALS["pwwmlnuwx"] = "row";
        $lxvbqj = "row";
        $rpgxelgmjo = "datacriado";
        ${$GLOBALS["ctrjcv"]} = substr($datacriado, 0, 10);
        ${$GLOBALS["fiqitn"]} = explode("-", ${$qsmtxqvk});
        ${$sqszbdv} = ${$GLOBALS["fiqitn"]}[0];
        $kggmwfmf = "mes";
        $wcddaxxbinit = "row";
        $kitstptnywq = "partes";
        ${$GLOBALS["iaspmchyclp"]} = ${$GLOBALS["cgetuqew"]}[1];
        ${$GLOBALS["vzgsstdmb"]} = ${$kitstptnywq}[2];
        switch (${$GLOBALS["oxufqgqbk"]}["status"]) {
            case "aberto":
                ${$GLOBALS["bxctmmhm"]} = "<span class=\"label label-warning\">Aberto</span>";
                break;
            case "cancelado":
                ${$GLOBALS["bxctmmhm"]} = "<span class=\"label label-danger\">Cancelado</span>";
                break;
            case "pago":
                ${$uqljgyw} = "<span class=\"label label-success\">Pago</span>";
                break;
            default:
                ${$GLOBALS["bxctmmhm"]} = "Outros";
                break;
        }
        ${$GLOBALS["tyakpuwa"]} = "SELECT * FROM usuario where id_usuario='" . ${$lxvbqj}["usuario_id"] . "'";
        ${$GLOBALS["zdvktgzkmdj"]} = $conn->prepare(${$GLOBALS["tyakpuwa"]});
        $Susuario->execute();
        ${$GLOBALS["qvvnuyokvwvw"]} = $Susuario->fetch();
        echo "\n                                <tr >\n                                    <td >#";
        echo ${$wcddaxxbinit}["id"];
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["qvvnuyokvwvw"]}["nome"];
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["jrnrffrhum"]};
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["vzgsstdmb"]};
        echo "/";
        echo ${$kggmwfmf};
        echo " - ";
        echo ${$GLOBALS["lheytadxj"]};
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["fmoekqitei"]};
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["pwwmlnuwx"]}["nota"];
        echo "</td>\n                                    <td><a href=\"../../../painelssh/admin/pages/faturas/comprovantes/";
        echo ${$GLOBALS["oxufqgqbk"]}["imagem"];
        echo "\" target=\"_blank\" class=\"btn btn-block btn-success\">Ver</a></td>\n\n\n                                    <td>\n\n                                        <a href=\"home.php?page=faturas/verfatura&id=";
        echo ${$GLOBALS["oxufqgqbk"]}["id"];
        echo "\" class=\"btn btn-block btn-success\">Visualizar</a>\n\n\n\n                                    </td>\n                                </tr>\n\n                            ";
    }
}
echo "\n\n                        </tbody>\n                    </table>\n                </div>\n            </div>\n        </div>\n    </div>\n</div>\n";
