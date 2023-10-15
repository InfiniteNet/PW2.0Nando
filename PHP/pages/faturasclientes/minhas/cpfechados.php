<?php

$GLOBALS["ujdscydogln"] = "ano";
$GLOBALS["kpywosaad"] = "dia";
$GLOBALS["dhewlhzj"] = "botao";
$GLOBALS["dbvlabcp"] = "Susuario";
$GLOBALS["kyugfq"] = "mes";
$GLOBALS["gdetqoes"] = "dataconvcriado";
$GLOBALS["xyarcbbiqrr"] = "partes";
$GLOBALS["sqyhzjvr"] = "tipo";
$GLOBALS["xfovbbbk"] = "row";
$GLOBALS["xchelsgx"] = "SQLUPUser";
$qjgepet = "usuario";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/cpfechados.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
protegePagina("user");
if (${$qjgepet}["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
$GLOBALS["lnmylcxddi"] = "SQLUPUser";
echo "<div class=\"row\" id=\"table-hover-row\">\n    <div class=\"col-12\">\n        <div class=\"card\">\n            <div class=\"card-header\">\n                <h1 class=\"card-title font-medium-2\"><i class=\"fad fa-globe-americas text-success font-large-1\"></i> Confirma\xc3\xa7\xc3\xb5es</h1>\n            </div>\n            <div class=\"card-content\">\n                <div class=\"card-body\">\n                    <p>Verifique os comprovantes dos clientes</p>\n                </div>\n                <div class=\"table-responsive\">\n                    <table class=\"table table-hover mb-0\" id=\"MeuServidor\" data-search=\"minhaPesquisa-lista\">\n                        <thead>\n                        <tr>\n                            <th>Fatura</th>\n                            <th>Cliente</th>\n                            <th>Status</th>\n                            <th>Data</th>\n                            <th>Forma</th>\n                            <th>Nota</th>\n                            <th>Img</th>\n                            <th>Informa\xc3\xa7\xc3\xb5es</th>\n                        </tr>\n                        </thead>\n                        <tbody>\n                        ";
$SQLUPUser = "SELECT * FROM  fatura_comprovantes where status='fechado' ORDER BY id desc ";
${$GLOBALS["xchelsgx"]} = $conn->prepare(${$GLOBALS["xchelsgx"]});
$SQLUPUser->execute();
if ($SQLUPUser->rowCount() > 0) {
    $jhytrg = "row";
    while (${$jhytrg} = $SQLUPUser->fetch()) {
        $GLOBALS["vncgbcsftb"] = "dataconvcriado";
        $GLOBALS["vsqzgaeblhp"] = "botao";
        $GLOBALS["nicwkscv"] = "botao";
        $GLOBALS["borqxxwhpna"] = "datacriado";
        $GLOBALS["jtjsxsvr"] = "partes";
        $GLOBALS["jcufljh"] = "ano";
        $GLOBALS["okeeyuhur"] = "Susuario";
        $rjnmuplb = "usuario";
        $oyvsrofiflm = "usuario";
        $uleabpdemqw = "datacriado";
        switch (${$GLOBALS["xfovbbbk"]}["formapagamento"]) {
            case "boleto":
                ${$GLOBALS["sqyhzjvr"]} = "Boleto";
                break;
            case "deptra":
                ${$GLOBALS["sqyhzjvr"]} = "CEF-DEP";
                break;
            default:
                ${$GLOBALS["sqyhzjvr"]} = "Outros";
                break;
        }
        $GLOBALS["qyhmbsmuvtpf"] = "Susuario";
        $ndhnelwjrcv = "botao";
        $GLOBALS["mghxqjidxki"] = "tipo";
        ${$uleabpdemqw} = ${$GLOBALS["xfovbbbk"]}["data"];
        $noccgyg = "botao";
        ${$GLOBALS["vncgbcsftb"]} = substr(${$GLOBALS["borqxxwhpna"]}, 0, 10);
        $GLOBALS["dumjhyyik"] = "row";
        ${$GLOBALS["xyarcbbiqrr"]} = explode("-", ${$GLOBALS["gdetqoes"]});
        ${$GLOBALS["jcufljh"]} = ${$GLOBALS["xyarcbbiqrr"]}[0];
        $fdsgmxodgs = "dia";
        ${$GLOBALS["kyugfq"]} = ${$GLOBALS["xyarcbbiqrr"]}[1];
        ${$fdsgmxodgs} = ${$GLOBALS["jtjsxsvr"]}[2];
        switch (${$GLOBALS["xfovbbbk"]}["status"]) {
            case "aberto":
                ${$noccgyg} = "<span class=\"label label-warning\">Aberto</span>";
                break;
            case "cancelado":
                ${$GLOBALS["nicwkscv"]} = "<span class=\"label label-danger\">Cancelado</span>";
                break;
            case "pago":
                ${$ndhnelwjrcv} = "<span class=\"label label-success\">Pago</span>";
                break;
            default:
                ${$GLOBALS["vsqzgaeblhp"]} = "Outros";
                break;
        }
        ${$GLOBALS["dbvlabcp"]} = "SELECT * FROM usuario where id_usuario='" . ${$GLOBALS["dumjhyyik"]}["usuario_id"] . "'";
        ${$GLOBALS["qyhmbsmuvtpf"]} = $conn->prepare(${$GLOBALS["okeeyuhur"]});
        $Susuario->execute();
        ${$oyvsrofiflm} = $Susuario->fetch();
        echo "\n                                <tr >\n                                    <td >#";
        echo ${$GLOBALS["xfovbbbk"]}["id"];
        echo "</td>\n                                    <td>";
        echo ${$rjnmuplb}["nome"];
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["dhewlhzj"]};
        $GLOBALS["kppqzbtlvd"] = "row";
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["kpywosaad"]};
        echo "/";
        echo ${$GLOBALS["kyugfq"]};
        echo " - ";
        $GLOBALS["cuxndvo"] = "row";
        echo ${$GLOBALS["ujdscydogln"]};
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["mghxqjidxki"]};
        echo "</td>\n                                    <td>";
        echo $row["nota"];
        echo "</td>\n                                    <td><a href=\"../../../painelssh/admin/pages/faturas/comprovantes/";
        echo ${$GLOBALS["xfovbbbk"]}["imagem"];
        echo "\" target=\"_blank\" class=\"btn btn-block btn-success\">Ver</a></td>\n\n\n                                    <td>\n\n                                        <a href=\"home.php?page=faturas/verfatura&id=";
        echo $row["id"];
        echo "\" class=\"btn btn-block btn-success\">Visualizar</a>\n\n\n\n                                    </td>\n                                </tr>\n                            ";
    }
}
echo "\n                        </tbody>\n                    </table>\n                </div>\n            </div>\n        </div>\n    </div>\n</div>\n";
