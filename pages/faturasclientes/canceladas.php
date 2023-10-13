<?php

$GLOBALS["xqtyow"] = "valor";
$GLOBALS["dtgskdas"] = "mesv";
$GLOBALS["bdvbajtupcs"] = "ano";
$GLOBALS["nwxzimk"] = "dia";
$GLOBALS["heqompkz"] = "usuario";
$GLOBALS["ctjhqnmi"] = "Susuario";
$GLOBALS["hjmazuflo"] = "botao";
$GLOBALS["lrfabgdxlnmb"] = "diav";
$GLOBALS["pbqtgqe"] = "partesven";
$GLOBALS["xqbwhoibvjh"] = "datavn";
$GLOBALS["rkltfxlylaa"] = "vencimento";
$GLOBALS["fmtbbp"] = "dataconvcriado";
$GLOBALS["ivboxiu"] = "partes";
$GLOBALS["zqnigxbq"] = "tipo";
$GLOBALS["huytmcpskn"] = "row";
$GLOBALS["xrujdeq"] = "SQLUPUser";
$crguif = "SQLUPUser";
$GLOBALS["cmgggwqulbos"] = "usuario";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/canceladas.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
protegePagina("user");
if (${$GLOBALS["cmgggwqulbos"]}["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
$iasflpj = "SQLUPUser";
echo "<script type=\"text/javascript\" src=\"../../app-assets/plugins/sort-table.js\"></script>\n<script>\n    \$(document).ready(function() {\n        \$(\"#myInput\").on(\"keyup\", function() {\n            var value = \$(this).val().toLowerCase();\n            \$(\"#myTable tr\").filter(function() {\n                \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)\n            });\n        });\n    });\n</script>\n<div class=\"row\" id=\"table-hover-row\">\n    <div class=\"col-12\">\n        <div class=\"card\">\n            <div class=\"card-header\">\n                <h1 class=\"card-title font-medium-2\"><i class=\"fad fa-file-excel text-success font-large-1\"></i> Faturas Canceladas</h1>\n            </div>\n            <div class=\"card-content\">\n                <div class=\"card-body\">\n                    <p>Todas suas faturas canceladas est\xc3\xa3o abaixo.</p>\n                    <div class=\"col-12\"><br>\n                        <div class=\"form-responsive\">\n                            <input type=\"text\" id=\"myInput\" placeholder=\"Pesquisar...\" class=\"form-control\">\n                        </div>\n                    </div>\n                </div>\n                <div class=\"table-responsive\">\n                    <table class=\"table table-hover mb-0 js-sort-table\" id=\"MeuServidor\" data-search=\"minhaPesquisa-lista\">\n                        <thead>\n                        <tr>\n                            <th>ID</th>\n                            <th>TIPO</th>\n                            <th>STATUS</th>\n                            <th>CLIETES</th>\n                            <th>DATA</th>\n                            <th>VENCIMENTO</th>\n                            <th>VALOR</th>\n                            <th>INFORMACOES</th>\n                        </tr>\n                        </thead>\n                        <tbody\n                        >\n                        ";
$SQLUPUser = "SELECT * FROM fatura_clientes where status='cancelado' and id_mestre='" . $_SESSION["usuarioID"] . "' ORDER BY id desc ";
${$GLOBALS["xrujdeq"]} = $conn->prepare(${$crguif});
$SQLUPUser->execute();
if ($SQLUPUser->rowCount() > 0) {
    while (${$GLOBALS["huytmcpskn"]} = $SQLUPUser->fetch()) {
        $GLOBALS["fmabeof"] = "tipo";
        $kuynmm = "row";
        $drdbxfyjzrqg = "mesv";
        $mposjcjrupuj = "partesven";
        $GLOBALS["nowhgpq"] = "tipo";
        $GLOBALS["psdyekkpw"] = "mes";
        $pobrugsbqvxm = "mes";
        $yjiqbnskz = "datacriado";
        $GLOBALS["bluripgyyvq"] = "botao";
        $qviisbgn = "anov";
        $zxlqtchulh = "botao";
        $GLOBALS["dqvibsaytmbx"] = "row";
        switch ($row["tipo"]) {
            case "vpn":
                ${$GLOBALS["nowhgpq"]} = "Acesso VPN";
                break;
            case "revenda":
                ${$GLOBALS["zqnigxbq"]} = "Revenda";
                break;
            default:
                ${$GLOBALS["fmabeof"]} = "Outros";
                break;
        }
        $GLOBALS["bkumlxmww"] = "datacriado";
        $GLOBALS["bpdopkj"] = "dataconvcriado";
        $datacriado = ${$GLOBALS["huytmcpskn"]}["data"];
        $dataconvcriado = substr(${$yjiqbnskz}, 0, 10);
        $GLOBALS["hgtotxhuccy"] = "botao";
        $kwbdbivu = "ano";
        $oqexgqi = "Susuario";
        $karrpkaaht = "anov";
        $GLOBALS["lphmlx"] = "partes";
        ${$GLOBALS["ivboxiu"]} = explode("-", ${$GLOBALS["fmtbbp"]});
        ${$kwbdbivu} = ${$GLOBALS["lphmlx"]}[0];
        $lphtkwfet = "dia";
        $ustybqpmy = "row";
        ${$pobrugsbqvxm} = ${$GLOBALS["ivboxiu"]}[1];
        $qlgkxy = "valor";
        ${$lphtkwfet} = ${$GLOBALS["ivboxiu"]}[2];
        ${$GLOBALS["rkltfxlylaa"]} = ${$GLOBALS["huytmcpskn"]}["datavencimento"];
        ${$GLOBALS["xqbwhoibvjh"]} = substr(${$GLOBALS["rkltfxlylaa"]}, 0, 10);
        ${$mposjcjrupuj} = explode("-", ${$GLOBALS["xqbwhoibvjh"]});
        ${$karrpkaaht} = ${$GLOBALS["pbqtgqe"]}[0];
        ${$drdbxfyjzrqg} = ${$GLOBALS["pbqtgqe"]}[1];
        ${$GLOBALS["lrfabgdxlnmb"]} = ${$GLOBALS["pbqtgqe"]}[2];
        ${$qlgkxy} = number_format(${$GLOBALS["dqvibsaytmbx"]}["valor"] * ${$GLOBALS["huytmcpskn"]}["qtd"], 2);
        switch (${$ustybqpmy}["status"]) {
            case "pendente":
                ${$zxlqtchulh} = "<span class=\"label label-warning\">Pendente</span>";
                break;
            case "cancelado":
                ${$GLOBALS["hjmazuflo"]} = "<span class=\"label label-danger\">Cancelado</span>";
                break;
            case "pago":
                ${$GLOBALS["hgtotxhuccy"]} = "<span class=\"label label-success\">Pago</span>";
                break;
            default:
                ${$GLOBALS["hjmazuflo"]} = "Outros";
                break;
        }
        ${$GLOBALS["ctjhqnmi"]} = "SELECT * FROM usuario where id_usuario='" . ${$GLOBALS["huytmcpskn"]}["usuario_id"] . "'";
        ${$GLOBALS["ctjhqnmi"]} = $conn->prepare(${$oqexgqi});
        $Susuario->execute();
        ${$GLOBALS["heqompkz"]} = $Susuario->fetch();
        echo "\n                                <tr >\n                                    <td >#";
        echo ${$GLOBALS["huytmcpskn"]}["id"];
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["zqnigxbq"]};
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["bluripgyyvq"]};
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["heqompkz"]}["nome"];
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["nwxzimk"]};
        echo "/";
        echo ${$GLOBALS["psdyekkpw"]};
        echo " - ";
        echo ${$GLOBALS["bdvbajtupcs"]};
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["lrfabgdxlnmb"]};
        echo "/";
        echo ${$GLOBALS["dtgskdas"]};
        echo " - ";
        echo ${$qviisbgn};
        echo "</td>\n                                    <td>R\$";
        echo number_format(${$GLOBALS["xqtyow"]}, 2, ",", ".");
        echo "</td>\n                                    <td>\n                                        <a href=\"home.php?page=faturasclientes/verfatura&id=";
        echo ${$GLOBALS["huytmcpskn"]}["id"];
        echo "\" class=\"btn btn-block btn-success\">Visualizar</a>\n                                    </td>\n                                </tr>\n                            ";
    }
}
echo "\n                        </tbody>\n                    </table>\n                </div>\n            </div>\n        </div>\n    </div>\n</div>\n";
