<?php

$GLOBALS["stoirtfjhw"] = "usuario";
$GLOBALS["ysxznn"] = "Susuario";
$GLOBALS["uxcjskxs"] = "botao";
$GLOBALS["iujovfxvdbc"] = "dia";
$GLOBALS["kbiplckw"] = "partes";
$GLOBALS["wuesyocl"] = "row";
$GLOBALS["kfhwmxuye"] = "datacriado";
$GLOBALS["fuycgu"] = "tipo";
$GLOBALS["uimkvttfp"] = "SQLUPUser";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/cpfechados.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
$okhljoorivm = "usuario";
protegePagina("user");
if ($usuario["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
$GLOBALS["wxtrchziy"] = "SQLUPUser";
$gewoew = "SQLUPUser";
echo " \n<script type=\"text/javascript\" src=\"../../app-assets/plugins/sort-table.js\"></script>\n<script>\n    \$(document).ready(function() {\n        \$(\"#myInput\").on(\"keyup\", function() {\n            var value = \$(this).val().toLowerCase();\n            \$(\"#myTable tr\").filter(function() {\n                \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)\n            });\n        });\n    });\n</script>\n<div class=\"row\" id=\"table-hover-row\">\n    <div class=\"col-12\">\n        <div class=\"card\">\n            <div class=\"card-header\">\n                <h1 class=\"card-title font-medium-2\"><i class=\"fad fa-file-csv text-success font-large-1\"></i> Comprovantes Fechados</h1>\n            </div>\n            <div class=\"card-content\">\n                <div class=\"card-body\">\n                    <p>Comprovantes fechados listado abaixo.</p> \n                    <div class=\"col-12\"><br>\n                        <div class=\"form-responsive\">\n                            <input type=\"text\" id=\"myInput\" placeholder=\"Pesquisar...\" class=\"form-control\">\n                        </div>\n                    </div>\n                </div>\n                <div class=\"table-responsive\">\n                    <table class=\"table table-hover mb-0 js-sort-table\" id=\"MeuServidor\" data-search=\"minhaPesquisa-lista\">\n                        <thead>\n                        <tr>\n                            <th>FATURA</th>\n                            <th>CLIENTE</th>\n                            <th>STATUS</th>\n                            <th>DATA</th>\n                            <th>FORMA</th>\n                            <th>NOTA</th>\n                            <th>IMG</th>\n                            <th>INFORMACOES</th>\n                        </tr>\n                        </thead>\n                        <tbody>\n                        ";
$SQLUPUser = "SELECT * FROM  fatura_comprovantes_clientes where status='fechado' and id_mestre='" . $_SESSION["usuarioID"] . "' ORDER BY id desc ";
$SQLUPUser = $conn->prepare(${$GLOBALS["uimkvttfp"]});
$SQLUPUser->execute();
if ($SQLUPUser->rowCount() > 0) {
    $fbhemfyj = "row";
    while (${$fbhemfyj} = $SQLUPUser->fetch()) {
        $vggdolaz = "ano";
        $dtpmdrtjq = "row";
        $GLOBALS["cccdsjyl"] = "botao";
        $GLOBALS["mlhghbmaou"] = "tipo";
        $gistzcnnh = "botao";
        $uggbqxz = "dataconvcriado";
        $GLOBALS["kwciksr"] = "tipo";
        $xhochpqx = "row";
        $rdlsbdbbi = "usuario";
        $GLOBALS["ysnbiskeu"] = "tipo";
        switch ($row["formapagamento"]) {
            case "boleto":
                ${$GLOBALS["kwciksr"]} = "Boleto";
                break;
            case "deptra":
                ${$GLOBALS["fuycgu"]} = "CEF-DEP";
                break;
            default:
                ${$GLOBALS["ysnbiskeu"]} = "Outros";
                break;
        }
        ${$GLOBALS["kfhwmxuye"]} = ${$GLOBALS["wuesyocl"]}["data"];
        $llqhdjdb = "dataconvcriado";
        $GLOBALS["uwfibe"] = "partes";
        $GLOBALS["fbkiftvpee"] = "row";
        $rkbqypmgfvws = "Susuario";
        $acldeyikb = "partes";
        $uybtilxix = "mes";
        ${$uggbqxz} = substr(${$GLOBALS["kfhwmxuye"]}, 0, 10);
        ${$GLOBALS["kbiplckw"]} = explode("-", ${$llqhdjdb});
        ${$vggdolaz} = ${$acldeyikb}[0];
        ${$uybtilxix} = ${$GLOBALS["uwfibe"]}[1];
        ${$GLOBALS["iujovfxvdbc"]} = ${$GLOBALS["kbiplckw"]}[2];
        switch (${$dtpmdrtjq}["status"]) {
            case "aberto":
                ${$GLOBALS["uxcjskxs"]} = "<span class=\"label label-warning\">Aberto</span>";
                break;
            case "cancelado":
                ${$GLOBALS["uxcjskxs"]} = "<span class=\"label label-danger\">Cancelado</span>";
                break;
            case "pago":
                ${$gistzcnnh} = "<span class=\"label label-success\">Pago</span>";
                break;
            default:
                ${$GLOBALS["cccdsjyl"]} = "Outros";
                break;
        }
        ${$rkbqypmgfvws} = "SELECT * FROM usuario where id_usuario='" . ${$GLOBALS["wuesyocl"]}["usuario_id"] . "'";
        ${$GLOBALS["ysxznn"]} = $conn->prepare(${$GLOBALS["ysxznn"]});
        $Susuario->execute();
        ${$rdlsbdbbi} = $Susuario->fetch();
        echo "\n                                <tr >\n                                    <td >#";
        echo ${$GLOBALS["wuesyocl"]}["id"];
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["stoirtfjhw"]}["nome"];
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["uxcjskxs"]};
        echo "</td>\n                                    <td>";
        $GLOBALS["fhdnewyrz"] = "mes";
        echo ${$GLOBALS["iujovfxvdbc"]};
        echo "/";
        echo $mes;
        echo " - ";
        $fvnvwzyxd = "ano";
        echo $ano;
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["mlhghbmaou"]};
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["wuesyocl"]}["nota"];
        echo "</td>\n                                    <td><a href=\"../../../painelv5/pages/faturasclientes/minhas/comprovantes/";
        echo ${$GLOBALS["wuesyocl"]}["imagem"];
        echo "\" target=\"_blank\" class=\"btn btn-block btn-success\">Ver</a></td>\n                                    <td>\n                                        <a href=\"home.php?page=faturasclientes/verfatura&id=";
        echo ${$GLOBALS["fbkiftvpee"]}["fatura_id"];
        echo "\" class=\"btn btn-block btn-success\">Visualizar</a>\n                                    </td>\n                                </tr>\n                            ";
    }
}
echo "\n                        </tbody>\n                    </table>\n                </div>\n            </div>\n        </div>\n    </div>\n</div>\n";
