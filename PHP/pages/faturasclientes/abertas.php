<?php

$GLOBALS["ogtkvyxb"] = "ano";
$GLOBALS["mvtwpxiccyhl"] = "Susuario";
$GLOBALS["koyeoxeltx"] = "botao";
$GLOBALS["gcbjmfwjm"] = "valor";
$GLOBALS["gkvdnpoyirg"] = "diav";
$GLOBALS["njnxhcri"] = "mesv";
$GLOBALS["bovbpsjp"] = "anov";
$GLOBALS["dbtpbe"] = "datavn";
$GLOBALS["gndndnd"] = "vencimento";
$GLOBALS["jsglesxqmfi"] = "dia";
$GLOBALS["cgsdkebpny"] = "mes";
$GLOBALS["esttopggrbes"] = "dataconvcriado";
$GLOBALS["oxxnnwojkh"] = "partes";
$GLOBALS["ceslsjw"] = "tipo";
$GLOBALS["oetmqi"] = "row";
$GLOBALS["ijhwtrvy"] = "SQLUPUser";
$GLOBALS["qgraksp"] = "usuario";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/abertas.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
$GLOBALS["cdvrbbqbmau"] = "SQLUPUser";
protegePagina("user");
if (${$GLOBALS["qgraksp"]}["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
$tvgbkjhns = "SQLUPUser";
echo "<script type=\"text/javascript\" src=\"../../app-assets/plugins/sort-table.js\"></script>\n<script>\n    \$(document).ready(function() {\n        \$(\"#myInput\").on(\"keyup\", function() {\n            var value = \$(this).val().toLowerCase();\n            \$(\"#myTable tr\").filter(function() {\n                \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)\n            });\n        });\n    });\n</script>\n<div class=\"row\" id=\"table-hover-row\">\n    <div class=\"col-12\">\n        <div class=\"card\">\n            <div class=\"card-header\">\n                <h1 class=\"card-title font-medium-2\"><i class=\"fad fa-file-invoice-dollar text-success font-large-1\"></i> Faturas Abertas</h1>\n            </div>\n            <div class=\"card-content\">\n                <div class=\"card-body\">\n                    <p>Suas faturas ser\xc3\xa3o listada abaixo</p>\n                    <div class=\"col-12\"><br>\n                        <div class=\"form-responsive\">\n                            <input type=\"text\" id=\"myInput\" placeholder=\"Pesquisar...\" class=\"form-control\">\n                        </div>\n                    </div>\n                </div>\n                <div class=\"table-responsive\">\n                    <table class=\"table table-hover mb-0 js-sort-table\" id=\"MeuServidor\" data-search=\"minhaPesquisa-lista\">\n                        <thead>\n                        <tr>\n                            <th>ID</th>\n                            <th>TIPO</th>\n                            <th>STATUS</th>\n                            <th>CLIENTE</th>\n                            <th>DATA</th>\n                            <th>VENCIMENTO</th>\n                            <th>VALOR</th>\n                            <th>INFORMACOES</th>\n                        </tr>\n                        </thead>\n                        <tbody id=\"MeuServidor\">\n                        ";
$SQLUPUser = "SELECT * FROM fatura_clientes where status='pendente' and id_mestre='" . $_SESSION["usuarioID"] . "' ORDER BY id desc";
${$GLOBALS["cdvrbbqbmau"]} = $conn->prepare(${$GLOBALS["ijhwtrvy"]});
$SQLUPUser->execute();
if ($SQLUPUser->rowCount() > 0) {
    $fnvrmeyxlrn = "row";
    while (${$fnvrmeyxlrn} = $SQLUPUser->fetch()) {
        $elluqoxvvokp = "ano";
        $wymzspw = "datavn";
        $GLOBALS["gshutuwc"] = "usuario";
        $GLOBALS["mmoinwno"] = "row";
        $jfenwsytqzwr = "row";
        $GLOBALS["bqyikneml"] = "row";
        $vxtwcxcdswh = "row";
        $GLOBALS["acuqgn"] = "partesven";
        $waqqhqm = "row";
        $GLOBALS["pixjvmknc"] = "partes";
        $dhjvhcn = "tipo";
        $GLOBALS["dwqvaxfrm"] = "datacriado";
        $GLOBALS["vhgwuvf"] = "datacriado";
        $GLOBALS["sycqfyg"] = "Susuario";
        $GLOBALS["bpvuitlqut"] = "dataconvcriado";
        $einmujupg = "tipo";
        switch (${$GLOBALS["oetmqi"]}["tipo"]) {
            case "vpn":
                ${$einmujupg} = "Acesso VPN";
                break;
            case "revenda":
                ${$dhjvhcn} = "Revenda";
                break;
            default:
                ${$GLOBALS["ceslsjw"]} = "Outros";
                break;
        }
        ${$GLOBALS["vhgwuvf"]} = ${$waqqhqm}["data"];
        $jpskiec = "mes";
        ${$GLOBALS["bpvuitlqut"]} = substr(${$GLOBALS["dwqvaxfrm"]}, 0, 10);
        ${$GLOBALS["oxxnnwojkh"]} = explode("-", ${$GLOBALS["esttopggrbes"]});
        $GLOBALS["yticehknyb"] = "partesven";
        ${$elluqoxvvokp} = ${$GLOBALS["oxxnnwojkh"]}[0];
        ${$GLOBALS["cgsdkebpny"]} = ${$GLOBALS["pixjvmknc"]}[1];
        ${$GLOBALS["jsglesxqmfi"]} = ${$GLOBALS["oxxnnwojkh"]}[2];
        $csopmev = "Susuario";
        $GLOBALS["bvrkggunxe"] = "partesven";
        $djiakuarhwi = "diav";
        ${$GLOBALS["gndndnd"]} = ${$GLOBALS["mmoinwno"]}["datavencimento"];
        ${$GLOBALS["dbtpbe"]} = substr(${$GLOBALS["gndndnd"]}, 0, 10);
        $vrtpojxkgz = "row";
        $gqlbsqr = "partesven";
        ${$GLOBALS["bvrkggunxe"]} = explode("-", ${$wymzspw});
        $GLOBALS["nqrusr"] = "tipo";
        ${$GLOBALS["bovbpsjp"]} = ${$gqlbsqr}[0];
        ${$GLOBALS["njnxhcri"]} = ${$GLOBALS["acuqgn"]}[1];
        ${$GLOBALS["gkvdnpoyirg"]} = ${$GLOBALS["yticehknyb"]}[2];
        $santgk = "botao";
        ${$GLOBALS["gcbjmfwjm"]} = number_format(${$jfenwsytqzwr}["valor"] * ${$GLOBALS["oetmqi"]}["qtd"], 2);
        switch (${$GLOBALS["oetmqi"]}["status"]) {
            case "pendente":
                ${$GLOBALS["koyeoxeltx"]} = "<span class=\"label label-warning\">Pendente</span>";
                break;
            case "cancelado":
                ${$santgk} = "<span class=\"label label-danger\">Cancelado</span>";
                break;
            case "pago":
                ${$GLOBALS["koyeoxeltx"]} = "<span class=\"label label-success\">Pago</span>";
                break;
            default:
                ${$GLOBALS["koyeoxeltx"]} = "Outros";
                break;
        }
        ${$GLOBALS["mvtwpxiccyhl"]} = "SELECT * FROM usuario where id_usuario='" . ${$vrtpojxkgz}["usuario_id"] . "'";
        ${$GLOBALS["sycqfyg"]} = $conn->prepare(${$csopmev});
        $Susuario->execute();
        ${$GLOBALS["qgraksp"]} = $Susuario->fetch();
        echo "\n                                <tr >\n                                    <td >#";
        echo ${$vxtwcxcdswh}["id"];
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["nqrusr"]};
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["koyeoxeltx"]};
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["gshutuwc"]}["nome"];
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["jsglesxqmfi"]};
        echo "/";
        echo ${$jpskiec};
        echo " - ";
        echo ${$GLOBALS["ogtkvyxb"]};
        $GLOBALS["ooofmbljys"] = "anov";
        echo "</td>\n                                    <td>";
        echo ${$djiakuarhwi};
        echo "/";
        echo ${$GLOBALS["njnxhcri"]};
        echo " - ";
        echo $anov;
        echo "</td>\n                                    <td>R\$";
        echo number_format(${$GLOBALS["gcbjmfwjm"]}, 2, ",", ".");
        echo "</td>\n                                    <td>\n                                        <a href=\"home.php?page=faturasclientes/verfatura&id=";
        echo ${$GLOBALS["bqyikneml"]}["id"];
        echo "\" class=\"btn btn-block btn-success btn-sm\">Visualizar</a>\n                                    </td>\n                                </tr>\n                            ";
    }
}
echo "\n                        </tbody>\n                    </table>\n                </div>\n            </div>\n        </div>\n    </div>\n</div>\n";
