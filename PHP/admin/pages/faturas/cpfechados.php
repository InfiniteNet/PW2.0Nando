<?php

$GLOBALS["jnznqo"] = "mes";
$GLOBALS["jtttlmtn"] = "dia";
$GLOBALS["ihxxqrhfeb"] = "usuario";
$GLOBALS["yuvflcrpr"] = "Susuario";
$GLOBALS["wbedezfsyarl"] = "botao";
$GLOBALS["mftomc"] = "partes";
$GLOBALS["kuqqgcc"] = "dataconvcriado";
$GLOBALS["mlfweftpn"] = "tipo";
$GLOBALS["izicrkhgy"] = "row";
$GLOBALS["xzpjlqunzu"] = "SQLUPUser";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/cpfechados.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
protegePagina("donoadmin");
echo "<script type=\"text/javascript\" src=\"../../app-assets/plugins/sort-table.js\"></script>\n<script>\n    \$(document).ready(function() {\n        \$(\"#myInput\").on(\"keyup\", function() {\n            var value = \$(this).val().toLowerCase();\n            \$(\"#myTable tr\").filter(function() {\n                \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)\n            });\n        });\n    });\n</script>\n<div class=\"row\" id=\"table-hover-row\">\n    <div class=\"col-12\">\n        <div class=\"card\">\n            <div class=\"card-header\">\n                <h1 class=\"card-title font-medium-2\"><i class=\"fad fa-file-csv text-success font-large-1\"></i> Comprovantes dos clientes</h1>\n            </div>\n            <div class=\"card-content\">\n                <div class=\"card-body\">\n                    <p>Comprovantes de pagamento de clientes.</p>\n                    <div class=\"col-12\"><br>\n                        <div class=\"form-responsive\">\n                            <input type=\"text\" id=\"myInput\" placeholder=\"Pesquisar...\" class=\"form-control\">\n                        </div>\n                    </div>\n                </div>\n                <div class=\"table-responsive\">\n                    <table class=\"table table-hover mb-0 js-sort-table\" id=\"MeuServidor\" data-search=\"minhaPesquisa-lista\">\n                        <thead>\n                        <tr>\n                            <th>FATURA</th>\n                            <th>CLIENTE</th>\n                            <th>STATUS</th>\n                            <th>DONO</th>\n                            <th>FORMA</th>\n                            <th>NOTA</th>\n                            <th>IMG</th>\n                            <th>INFORMACOES</th>\n                        </tr>\n                        </thead>\n                        <tbody id=\"myTable\">\n                        ";
$qwctjgvpdro = "SQLUPUser";
${$GLOBALS["xzpjlqunzu"]} = "SELECT * FROM  fatura_comprovantes where status='fechado' ORDER BY id desc ";
$GLOBALS["jwedelknts"] = "SQLUPUser";
${$qwctjgvpdro} = $conn->prepare($SQLUPUser);
$SQLUPUser->execute();
if ($SQLUPUser->rowCount() > 0) {
    $mhbeztzyk = "row";
    while (${$mhbeztzyk} = $SQLUPUser->fetch()) {
        $GLOBALS["duuyzubcbyvj"] = "tipo";
        $bhvtntjg = "datacriado";
        $GLOBALS["lutfesxq"] = "row";
        $GLOBALS["frgttwfvcmg"] = "partes";
        $vfchkty = "botao";
        $srqcuxp = "row";
        switch (${$GLOBALS["izicrkhgy"]}["formapagamento"]) {
            case "boleto":
                ${$GLOBALS["mlfweftpn"]} = "Boleto";
                break;
            case "deptra":
                ${$GLOBALS["duuyzubcbyvj"]} = "CEF-DEP";
                break;
            default:
                ${$GLOBALS["mlfweftpn"]} = "Outros";
                break;
        }
        $uigxsmfavb = "datacriado";
        $GLOBALS["qnsjed"] = "mes";
        $txeslsncwl = "Susuario";
        $guujwcmvtxw = "partes";
        $rnyrlkj = "row";
        $GLOBALS["gjwfpkpbyvw"] = "botao";
        $cxudfemhmuko = "Susuario";
        $jetxxfqvcs = "row";
        $GLOBALS["soenxj"] = "ano";
        ${$bhvtntjg} = ${$GLOBALS["izicrkhgy"]}["data"];
        ${$GLOBALS["kuqqgcc"]} = substr(${$uigxsmfavb}, 0, 10);
        ${$guujwcmvtxw} = explode("-", ${$GLOBALS["kuqqgcc"]});
        ${$GLOBALS["soenxj"]} = ${$GLOBALS["mftomc"]}[0];
        $grohxsqma = "usuario";
        ${$GLOBALS["qnsjed"]} = ${$GLOBALS["mftomc"]}[1];
        $gctrmitmj = "dia";
        $dia = ${$GLOBALS["frgttwfvcmg"]}[2];
        switch (${$GLOBALS["izicrkhgy"]}["status"]) {
            case "aberto":
                ${$GLOBALS["wbedezfsyarl"]} = "<span class=\"label label-warning\">Aberto</span>";
                break;
            case "cancelado":
                ${$GLOBALS["gjwfpkpbyvw"]} = "<span class=\"label label-danger\">Cancelado</span>";
                break;
            case "pago":
                ${$vfchkty} = "<span class=\"label label-success\">Pago</span>";
                break;
            default:
                ${$GLOBALS["wbedezfsyarl"]} = "Outros";
                break;
        }
        ${$cxudfemhmuko} = "SELECT * FROM usuario where id_usuario='" . ${$rnyrlkj}["usuario_id"] . "'";
        ${$GLOBALS["yuvflcrpr"]} = $conn->prepare(${$txeslsncwl});
        $Susuario->execute();
        ${$grohxsqma} = $Susuario->fetch();
        $GLOBALS["kclkgkkr"] = "row";
        echo "\n                                <tr >\n                                    <td >#";
        $mtimjldf = "ano";
        echo ${$jetxxfqvcs}["id"];
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["ihxxqrhfeb"]}["nome"];
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["wbedezfsyarl"]};
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["jtttlmtn"]};
        echo "/";
        echo ${$GLOBALS["jnznqo"]};
        echo " - ";
        echo $ano;
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["mlfweftpn"]};
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["lutfesxq"]}["nota"];
        echo "</td>\n                                    <td><a href=\"../../../painelssh/admin/pages/faturas/comprovantes/";
        echo ${$srqcuxp}["imagem"];
        echo "\" target=\"_blank\" class=\"btn btn-block btn-success\">Ver</a></td>\n\n\n                                    <td>\n\n                                        <a href=\"home.php?page=faturas/verfatura&id=";
        echo $row["id"];
        echo "\" class=\"btn btn-block btn-success\">Visualizar</a>\n\n\n\n                                    </td>\n                                </tr>\n\n                            ";
    }
}
echo "\n                        </tbody>\n                    </table>\n                </div>\n            </div>\n        </div>\n    </div>\n</div>\n";
