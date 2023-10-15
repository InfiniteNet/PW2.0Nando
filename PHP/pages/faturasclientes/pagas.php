<?php

$GLOBALS["xhrdmdy"] = "mesv";
$GLOBALS["ibflhpz"] = "dia";
$GLOBALS["tgoznx"] = "Susuario";
$GLOBALS["ldftskkqlx"] = "botao";
$GLOBALS["wdhtdbbz"] = "valor";
$GLOBALS["seesrtwkf"] = "partesven";
$GLOBALS["shnqtxirtg"] = "anov";
$GLOBALS["nesdrppw"] = "vencimento";
$GLOBALS["ihlheptbop"] = "datavn";
$GLOBALS["sanpbkgtcmen"] = "ano";
$GLOBALS["gajdvwurqcw"] = "dataconvcriado";
$GLOBALS["bddhkuglm"] = "partes";
$GLOBALS["unultxkxmvc"] = "datacriado";
$GLOBALS["gvvolftue"] = "tipo";
$GLOBALS["seoeptbhvgx"] = "row";
$GLOBALS["gmlurxwc"] = "SQLUPUser";
$lugonruxgnx = "SQLUPUser";
$GLOBALS["rvvtvaorbt"] = "usuario";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/pagas.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
protegePagina("user");
if (${$GLOBALS["rvvtvaorbt"]}["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
echo "<script type=\"text/javascript\" src=\"../../app-assets/plugins/sort-table.js\"></script>\n<script>\n    \$(document).ready(function() {\n        \$(\"#myInput\").on(\"keyup\", function() {\n            var value = \$(this).val().toLowerCase();\n            \$(\"#myTable tr\").filter(function() {\n                \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)\n            });\n        });\n    });\n</script>\n<div class=\"row\" id=\"table-hover-row\">\n    <div class=\"col-12\">\n        <div class=\"card\">\n            <div class=\"card-header\">\n                <h1 class=\"card-title font-medium-2\"><i class=\"fad fa-file-powerpoint text-success font-large-1\"></i> Faturas Pagas</h1>\n            </div>\n            <div class=\"card-content\">\n                <div class=\"card-body\">\n                    <p>Faturas pagas sela listada abaixo.</p>\n                    <div class=\"col-12\"><br>\n                        <div class=\"form-responsive\">\n                            <input type=\"text\" id=\"myInput\" placeholder=\"Pesquisar...\" class=\"form-control\">\n                        </div>\n                    </div>\n                </div>\n                <div class=\"table-responsive\">\n                    <table class=\"table table-hover mb-0 js-sort-table\" id=\"MeuServidor\" data-search=\"minhaPesquisa-lista\">\n                        <thead>\n                        <tr>\n                            <th>ID</th>\n                            <th>TIPO</th>\n                            <th>STATUS</th>\n                            <th>CLIENTE</th>\n                            <th>DATA</th>\n                            <th>VENCIMENTO</th>\n                            <th>VALOR</th>\n                            <th>INFORMACOES</th>\n                        </tr>\n                        </thead>\n                        <tbody id=\"myTable\">\n                        ";
${$GLOBALS["gmlurxwc"]} = "SELECT * FROM fatura_clientes where status='pago' and id_mestre='" . $_SESSION["usuarioID"] . "' ORDER BY id desc ";
$GLOBALS["wphehuq"] = "SQLUPUser";
${$lugonruxgnx} = $conn->prepare($SQLUPUser);
$SQLUPUser->execute();
if ($SQLUPUser->rowCount() > 0) {
    while (${$GLOBALS["seoeptbhvgx"]} = $SQLUPUser->fetch()) {
        $GLOBALS["pisnulqscj"] = "botao";
        $GLOBALS["qittbkdbn"] = "mesv";
        $GLOBALS["lddrnlo"] = "botao";
        $GLOBALS["bxhbqluppwl"] = "tipo";
        $GLOBALS["tlfuhgbc"] = "mes";
        $qmgzikgwi = "partesven";
        $xyygmskd = "tipo";
        $GLOBALS["spxwwukp"] = "datacriado";
        $GLOBALS["rdhfpjy"] = "row";
        $GLOBALS["vbphyfwc"] = "diav";
        $drgxvgdgsi = "vencimento";
        $GLOBALS["vmirvvkvuo"] = "dia";
        $nfxjpgwdpxl = "botao";
        $GLOBALS["hfeyfijhulr"] = "Susuario";
        $wmeufdcsoeli = "row";
        $vskcwyssxbf = "Susuario";
        $dqxhgigc = "tipo";
        $GLOBALS["qtrpjdlx"] = "dataconvcriado";
        switch ($row["tipo"]) {
            case "vpn":
                ${$xyygmskd} = "Acesso VPN";
                break;
            case "revenda":
                ${$GLOBALS["bxhbqluppwl"]} = "Revenda";
                break;
            default:
                ${$GLOBALS["gvvolftue"]} = "Outros";
                break;
        }
        $GLOBALS["nkioyntkm"] = "row";
        ${$GLOBALS["unultxkxmvc"]} = $row["data"];
        ${$GLOBALS["qtrpjdlx"]} = substr(${$GLOBALS["spxwwukp"]}, 0, 10);
        $omsflobc = "datavn";
        ${$GLOBALS["bddhkuglm"]} = explode("-", ${$GLOBALS["gajdvwurqcw"]});
        $dmxlfhvg = "mes";
        ${$GLOBALS["sanpbkgtcmen"]} = ${$GLOBALS["bddhkuglm"]}[0];
        $ndkfrod = "partesven";
        $ikxpfwogks = "partesven";
        ${$GLOBALS["tlfuhgbc"]} = ${$GLOBALS["bddhkuglm"]}[1];
        ${$GLOBALS["vmirvvkvuo"]} = ${$GLOBALS["bddhkuglm"]}[2];
        ${$drgxvgdgsi} = ${$GLOBALS["seoeptbhvgx"]}["datavencimento"];
        ${$GLOBALS["ihlheptbop"]} = substr(${$GLOBALS["nesdrppw"]}, 0, 10);
        ${$ikxpfwogks} = explode("-", ${$omsflobc});
        $plyvswl = "row";
        $cwdjgceivgk = "row";
        $GLOBALS["txigmrbtwr"] = "botao";
        ${$GLOBALS["shnqtxirtg"]} = ${$ndkfrod}[0];
        ${$GLOBALS["qittbkdbn"]} = ${$qmgzikgwi}[1];
        ${$GLOBALS["vbphyfwc"]} = ${$GLOBALS["seesrtwkf"]}[2];
        ${$GLOBALS["wdhtdbbz"]} = number_format(${$GLOBALS["seoeptbhvgx"]}["valor"] * ${$wmeufdcsoeli}["qtd"], 2);
        switch (${$plyvswl}["status"]) {
            case "pendente":
                ${$GLOBALS["lddrnlo"]} = "<span class=\"label label-warning\">Pendente</span>";
                break;
            case "cancelado":
                ${$GLOBALS["pisnulqscj"]} = "<span class=\"label label-danger\">Cancelado</span>";
                break;
            case "pago":
                ${$GLOBALS["txigmrbtwr"]} = "<span class=\"label label-success\">Pago</span>";
                break;
            default:
                ${$GLOBALS["ldftskkqlx"]} = "Outros";
                break;
        }
        ${$GLOBALS["tgoznx"]} = "SELECT * FROM usuario where id_usuario='" . ${$cwdjgceivgk}["usuario_id"] . "'";
        ${$GLOBALS["hfeyfijhulr"]} = $conn->prepare(${$vskcwyssxbf});
        $GLOBALS["ichbeooqiilf"] = "usuario";
        $Susuario->execute();
        $usuario = $Susuario->fetch();
        echo "\n                                <tr >\n                                    <td >#";
        echo ${$GLOBALS["seoeptbhvgx"]}["id"];
        echo "</td>\n                                    <td>";
        echo ${$dqxhgigc};
        echo "</td>\n                                    <td>";
        echo ${$nfxjpgwdpxl};
        $guavlfmdvn = "valor";
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["rvvtvaorbt"]}["nome"];
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["ibflhpz"]};
        $gdcgzim = "diav";
        echo "/";
        echo ${$dmxlfhvg};
        echo " - ";
        echo ${$GLOBALS["sanpbkgtcmen"]};
        echo "</td>\n                                    <td>";
        echo $diav;
        echo "/";
        echo ${$GLOBALS["xhrdmdy"]};
        echo " - ";
        echo ${$GLOBALS["shnqtxirtg"]};
        echo "</td>\n                                    <td>R\$";
        echo number_format($valor, 2, ",", ".");
        echo "</td>\n\n\n                                    <td>\n\n                                        <a href=\"home.php?page=faturasclientes/verfatura&id=";
        echo ${$GLOBALS["seoeptbhvgx"]}["id"];
        echo "\" class=\"btn btn-block btn-success\">Visualizar</a>\n\n\n\n                                    </td>\n                                </tr>\n                            ";
    }
}
echo "\n                        </tbody>\n                    </table>\n                </div>\n            </div>\n        </div>\n    </div>\n</div>\n";
