<?php

$GLOBALS["txsxlxsbsl"] = "mes";
$GLOBALS["vfwhmsfo"] = "botao";
$GLOBALS["jssioalrpxxm"] = "dia";
$GLOBALS["vnnwmijxjhz"] = "ano";
$GLOBALS["scbiolnqm"] = "datacriado";
$GLOBALS["veyjqpt"] = "dataconvcriado";
$GLOBALS["vtzbyve"] = "tipo";
$GLOBALS["hhisepkvfzn"] = "row";
$GLOBALS["usggdkk"] = "SQLUPUser";
$GLOBALS["qhkxcdvq"] = "usuario";
$ssyirtlor = "SQLUPUser";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/comprovantes.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
protegePagina("user");
if (${$GLOBALS["qhkxcdvq"]}["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
echo "<div class=\"row\" id=\"table-hover-row\">\n    <div class=\"col-12\">\n        <div class=\"card\">\n            <div class=\"card-header\">\n                <h1 class=\"card-title font-medium-2\"><i class=\"fad fa-globe-americas text-success font-large-1\"></i> Comprovantes</h1>\n            </div>\n            <div class=\"card-content\">\n                <div class=\"card-body\">\n                    <p>Verifique os comprovantes dos clientes</p>\n                </div>\n                <div class=\"table-responsive\">\n                    <table class=\"table table-hover mb-0\" id=\"MeuServidor\" data-search=\"minhaPesquisa-lista\">\n                        <thead>\n                        <tr>\n                            <th>Fatura</th>\n                            <th>Cliente</th>\n                            <th>Status</th>\n                            <th>Data</th>\n                            <th>Forma</th>\n                            <th>Nota</th>\n                            <th>Img</th>\n                            <th>Informa\xc3\xa7\xc3\xb5es</th>\n                        </tr>\n                        </thead>\n                        <tbody>\n                        ";
${$ssyirtlor} = "SELECT * FROM  fatura_comprovantes where status='aberto' ORDER BY id desc ";
${$GLOBALS["usggdkk"]} = $conn->prepare(${$GLOBALS["usggdkk"]});
$SQLUPUser->execute();
if ($SQLUPUser->rowCount() > 0) {
    $xfcckxvdcdp = "row";
    while (${$xfcckxvdcdp} = $SQLUPUser->fetch()) {
        $GLOBALS["ovxcjcxl"] = "tipo";
        $cjejrnaax = "dia";
        $GLOBALS["nymwrntcvh"] = "botao";
        $GLOBALS["wywcklm"] = "tipo";
        $ebhhhugvtxd = "usuario";
        $GLOBALS["tfigxn"] = "row";
        $gfdvqrbpqtx = "Susuario";
        $GLOBALS["ruagqlivp"] = "usuario";
        $GLOBALS["fjrugmzmtyzm"] = "partes";
        $eykrgeiljv = "datacriado";
        $GLOBALS["vkchiwoxfci"] = "partes";
        $pdufgihwq = "partes";
        switch (${$GLOBALS["hhisepkvfzn"]}["formapagamento"]) {
            case "boleto":
                ${$GLOBALS["vtzbyve"]} = "Boleto";
                break;
            case "deptra":
                ${$GLOBALS["wywcklm"]} = "CEF-DEP";
                break;
            default:
                ${$GLOBALS["ovxcjcxl"]} = "Outros";
                break;
        }
        ${$eykrgeiljv} = ${$GLOBALS["hhisepkvfzn"]}["data"];
        $GLOBALS["cstkwimvlpo"] = "Susuario";
        ${$GLOBALS["veyjqpt"]} = substr(${$GLOBALS["scbiolnqm"]}, 0, 10);
        $bxmgsjb = "row";
        $GLOBALS["pyllhx"] = "Susuario";
        $pvwmhvanwntz = "partes";
        ${$GLOBALS["fjrugmzmtyzm"]} = explode("-", ${$GLOBALS["veyjqpt"]});
        $GLOBALS["tqtumnbt"] = "row";
        $nkqayupx = "mes";
        $etwkcfq = "botao";
        ${$GLOBALS["vnnwmijxjhz"]} = ${$pdufgihwq}[0];
        ${$nkqayupx} = ${$GLOBALS["vkchiwoxfci"]}[1];
        ${$GLOBALS["jssioalrpxxm"]} = ${$pvwmhvanwntz}[2];
        $GLOBALS["dynomybpkab"] = "row";
        switch (${$bxmgsjb}["status"]) {
            case "aberto":
                ${$GLOBALS["vfwhmsfo"]} = "<span class=\"label label-warning\">Aberto</span>";
                break;
            case "cancelado":
                ${$GLOBALS["vfwhmsfo"]} = "<span class=\"label label-danger\">Cancelado</span>";
                break;
            case "pago":
                ${$GLOBALS["vfwhmsfo"]} = "<span class=\"label label-success\">Pago</span>";
                break;
            default:
                ${$GLOBALS["nymwrntcvh"]} = "Outros";
                break;
        }
        ${$gfdvqrbpqtx} = "SELECT * FROM usuario where id_usuario='" . ${$GLOBALS["tfigxn"]}["usuario_id"] . "'";
        ${$GLOBALS["pyllhx"]} = $conn->prepare(${$GLOBALS["cstkwimvlpo"]});
        $Susuario->execute();
        ${$GLOBALS["ruagqlivp"]} = $Susuario->fetch();
        echo "\n                                <tr >\n                                    <td >#";
        echo ${$GLOBALS["tqtumnbt"]}["fatura_id"];
        echo "</td>\n                                    <td>";
        echo ${$ebhhhugvtxd}["nome"];
        echo "</td>\n                                    <td>";
        echo ${$etwkcfq};
        echo "</td>\n                                    <td>";
        echo ${$cjejrnaax};
        echo "/";
        echo ${$GLOBALS["txsxlxsbsl"]};
        echo " - ";
        echo ${$GLOBALS["vnnwmijxjhz"]};
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["vtzbyve"]};
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["dynomybpkab"]}["nota"];
        echo "</td>\n                                    <td><a href=\"../../../painelssh/admin/pages/faturas/comprovantes/";
        echo ${$GLOBALS["hhisepkvfzn"]}["imagem"];
        echo "\" target=\"_blank\" class=\"btn btn-block btn-success\">Ver</a></td>\n\n\n                                    <td>\n\n                                        <a href=\"home.php?page=faturas/verfatura&id=";
        echo ${$GLOBALS["hhisepkvfzn"]}["fatura_id"];
        echo "\" class=\"btn btn-block btn-success\">Visualizar</a>\n\n\n\n                                    </td>\n                                </tr>\n                            ";
    }
}
echo "\n                        </tbody>\n                    </table>\n                </div>\n            </div>\n        </div>\n    </div>\n</div>\n";
