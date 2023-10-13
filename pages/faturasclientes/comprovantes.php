<?php

$GLOBALS["ptcfanjjgjsy"] = "mes";
$GLOBALS["wsdvgoj"] = "Susuario";
$GLOBALS["yifebxhmtr"] = "botao";
$GLOBALS["inqrlhnugst"] = "dia";
$GLOBALS["snngoqfe"] = "partes";
$GLOBALS["nwywkdjeiazj"] = "datacriado";
$GLOBALS["ocmxrashe"] = "tipo";
$GLOBALS["jktttvjvnhv"] = "row";
$GLOBALS["dxlyrvfb"] = "SQLUPUser";
$GLOBALS["ebrupo"] = "usuario";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/comprovantes.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
protegePagina("user");
if (${$GLOBALS["ebrupo"]}["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
echo "<script type=\"text/javascript\" src=\"../../app-assets/plugins/sort-table.js\"></script>\n<script>\n    \$(document).ready(function() {\n        \$(\"#myInput\").on(\"keyup\", function() {\n            var value = \$(this).val().toLowerCase();\n            \$(\"#myTable tr\").filter(function() {\n                \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)\n            });\n        });\n    });\n</script>\n<div class=\"row\" id=\"table-hover-row\">\n    <div class=\"col-12\">\n        <div class=\"card\">\n            <div class=\"card-header\">\n                <h1 class=\"card-title font-medium-2\"><i class=\"fad fa-file-invoice text-success font-large-1\"></i> Comprovantes</h1>\n            </div>\n            <div class=\"card-content\">\n                <div class=\"card-body\">\n                    <p>Seus comprovantes serao listado abaixo.</p>\n                    <div class=\"col-12\"><br>\n                        <div class=\"form-responsive\">\n                            <input type=\"text\" id=\"myInput\" placeholder=\"Pesquisar...\" class=\"form-control\">\n                        </div>\n                    </div>\n                </div>\n                <div class=\"table-responsive\">\n                    <table class=\"table table-hover mb-0 js-sort-table\" id=\"MeuServidor\" data-search=\"minhaPesquisa-lista\">\n                        <thead>\n                        <tr>\n                            <th>FATURA</th>\n                            <th>CLIENTE</th>\n                            <th>STATUS</th>\n                            <th>DATA</th>\n                            <th>FORMA</th>\n                            <th>NOTA</th>\n                            <th>IMG</th>\n                            <th>INFORMACOES</th>\n                        </tr>\n                        </thead>\n                        <tbody id=\"myTable\">\n                        ";
${$GLOBALS["dxlyrvfb"]} = "SELECT * FROM  fatura_comprovantes_clientes where status='aberto' and id_mestre='" . $_SESSION["usuarioID"] . "' ORDER BY id desc ";
${$GLOBALS["dxlyrvfb"]} = $conn->prepare(${$GLOBALS["dxlyrvfb"]});
$SQLUPUser->execute();
if ($SQLUPUser->rowCount() > 0) {
    while (${$GLOBALS["jktttvjvnhv"]} = $SQLUPUser->fetch()) {
        $GLOBALS["xhhavutggf"] = "dataconvcriado";
        $GLOBALS["vudsyepd"] = "tipo";
        switch (${$GLOBALS["jktttvjvnhv"]}["formapagamento"]) {
            case "boleto":
                ${$GLOBALS["vudsyepd"]} = "Boleto";
                break;
            case "deptra":
                ${$GLOBALS["ocmxrashe"]} = "CEF-DEP";
                break;
            default:
                ${$GLOBALS["ocmxrashe"]} = "Outros";
                break;
        }
        ${$GLOBALS["nwywkdjeiazj"]} = ${$GLOBALS["jktttvjvnhv"]}["data"];
        $GLOBALS["fbrvfkesttpp"] = "botao";
        $aleroxwilbn = "ano";
        $GLOBALS["hribiswb"] = "mes";
        $hkontjls = "datacriado";
        $GLOBALS["frhnpnnoc"] = "dataconvcriado";
        $GLOBALS["lonyqjnfvr"] = "partes";
        $vrlgjwqk = "ano";
        ${$GLOBALS["xhhavutggf"]} = substr($datacriado, 0, 10);
        $pwohxr = "botao";
        ${$GLOBALS["snngoqfe"]} = explode("-", ${$GLOBALS["frhnpnnoc"]});
        ${$aleroxwilbn} = ${$GLOBALS["snngoqfe"]}[0];
        ${$GLOBALS["hribiswb"]} = ${$GLOBALS["lonyqjnfvr"]}[1];
        $GLOBALS["licvdddkim"] = "row";
        $scqpfowjwftk = "Susuario";
        ${$GLOBALS["inqrlhnugst"]} = ${$GLOBALS["snngoqfe"]}[2];
        switch (${$GLOBALS["jktttvjvnhv"]}["status"]) {
            case "aberto":
                ${$GLOBALS["yifebxhmtr"]} = "<span class=\"label label-warning\">Aberto</span>";
                break;
            case "cancelado":
                ${$GLOBALS["yifebxhmtr"]} = "<span class=\"label label-danger\">Cancelado</span>";
                break;
            case "pago":
                ${$pwohxr} = "<span class=\"label label-success\">Pago</span>";
                break;
            default:
                ${$GLOBALS["fbrvfkesttpp"]} = "Outros";
                break;
        }
        ${$GLOBALS["wsdvgoj"]} = "SELECT * FROM usuario where id_usuario='" . ${$GLOBALS["jktttvjvnhv"]}["usuario_id"] . "'";
        $GLOBALS["wixfxfhh"] = "usuario";
        ${$GLOBALS["wsdvgoj"]} = $conn->prepare(${$scqpfowjwftk});
        $Susuario->execute();
        $GLOBALS["xvodhrpxack"] = "row";
        ${$GLOBALS["wixfxfhh"]} = $Susuario->fetch();
        echo "\n                                <tr >\n                                    <td >#";
        echo ${$GLOBALS["xvodhrpxack"]}["fatura_id"];
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["ebrupo"]}["nome"];
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["yifebxhmtr"]};
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["inqrlhnugst"]};
        echo "/";
        echo ${$GLOBALS["ptcfanjjgjsy"]};
        $GLOBALS["qludenlga"] = "row";
        echo " - ";
        echo ${$vrlgjwqk};
        $GLOBALS["jvgkbsecuvp"] = "row";
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["ocmxrashe"]};
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["licvdddkim"]}["nota"];
        echo "</td>\n                                    <td><a href=\"../pages/faturasclientes/minhas/comprovantes/";
        echo $row["imagem"];
        echo "\" target=\"_blank\" class=\"btn btn-block btn-success\">Ver</a></td>\n                                    <td>\n                                        <a href=\"home.php?page=faturasclientes/verfatura&id=";
        echo $row["fatura_id"];
        echo "\" class=\"btn btn-block btn-success\">Visualizar</a>\n                                    </td>\n                                </tr>\n                            ";
    }
}
echo "\n                        </tbody>\n                    </table>\n                </div>\n            </div>\n        </div>\n    </div>\n</div>\n";
