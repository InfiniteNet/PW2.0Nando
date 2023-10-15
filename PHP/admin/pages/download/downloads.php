<?php

$GLOBALS["owxwxte"] = "mes";
$GLOBALS["lxcacg"] = "dataconv";
$GLOBALS["ahktnyvvzi"] = "partes";
$GLOBALS["ecwlotpttpi"] = "row";
$GLOBALS["edtluoc"] = "dataatual";
$GLOBALS["nhcfggbczg"] = "SQLSubSSH";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/downloads.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
protegePagina("donoadmin");
echo "<script type=\"text/javascript\" src=\"../../plugins/datatables/sort-table.js\"></script>\n<style type=\"text/css\">\n\n  table { \n    width: 100%; \n    border-collapse: collapse; \n  }\n  /* Zebra striping */\n  tr:nth-of-type(odd) { \n    background: #f3f4f8; \n  }\n  th { \n    background: white; \n    color: black; \n    font-weight: bold; \n  }\n  td, th { \n    padding: 6px; \n    border: 1px solid #d7dfe2; \n    text-align: left; \n  }\n\n</style>\n\n<script>\n  \$(document).ready(function(){\n    \$(\"#myInput\").on(\"keyup\", function() {\n      var value = \$(this).val().toLowerCase();\n      \$(\"#myTable tr\").filter(function() {\n        \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)\n      });\n    });\n  });\n</script>\n<script type=\"text/javascript\">\nfunction deletatudo(){\n    window.location.href='pages/download/excluir_todos.php?id=1';\n}\n</script>\n<script>\n    \$(document).ready(function() {\n        \$(\"#myInput\").on(\"keyup\", function() {\n            var value = \$(this).val().toLowerCase();\n            \$(\"#myTable tr\").filter(function() {\n                \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)\n            });\n        });\n    });\n</script>\n<!-- Input with Icons start -->\n<section id=\"multiple-column-form\">\n    <div class=\"row\">\n        <div class=\"col-12\">\n            <div class=\"card\">\n                <div class=\"card-header\">\n                    <h4 class=\"card-title\">Hospedar Arquivos</h4>\n\t\t\t\t\t<a class=\"text-bold-800 grey darken-2\" href=\"../apps\" target=\"_self\">CLICK AQUI PARA IR PARA A LOJA DE ARQUIVOS</a></span>\n                </div>\n                <div class=\"card-body\">\n                    <form action=\"pages/download/enviandoarquivo.php\" enctype=\"multipart/form-data\" method=\"POST\" role=\"form\">\n                            <div class=\"row\">\n                                <div class=\"col-sm-6 col-12\">\n                                <div class=\"mb-1\">\n                                    <div class=\"mb-0\">\n                                        Nome do Arquivo\n                                    </div>\n                                    <fieldset class=\"form-group position-relative\">\n                                        <input type=\"text\" name=\"nome\" id=\"nome\" class=\"form-control\" minlength=\"4\"  placeholder=\"Digite o Nome do Arquivo...\" required>\n                                    </fieldset>\n                                </div>\n                                </div>\n                                <input type=\"hidden\" class=\"form-control\" name=\"operadora\" value=\"1\">\n                                <div class=\"col-sm-6 col-12\">\n                                <div class=\"mb-1\">\n                                    <div class=\"mb-0\">\n                                        Status\n                                    </div>\n                                    <fieldset class=\"form-group position-relative\">\n                                        <select class=\"form-select\" name=\"status\">\n                                            <option value='1' selected=selected>Funcionando</option>\n                                            <option value='2'>Em Testes</option>\n                                        </select>\n                                    </fieldset>\n                                </div>\n                                </div>\n                                <div class=\"col-sm-6 col-12\">\n                                <div class=\"mb-1\">\n                                    <div class=\"mb-0\">\n                                        Tipo do arquivo\n                                    </div>\n                                    <fieldset class=\"form-group position-relative\">\n                                        <select class=\"form-select\" name=\"tipo\">\n                                            <option value='1' selected=selected>Ehi</option>\n                                            <option value='2'>Apk</option>\n                                            <option value='3'>Outros</option>\n                                        </select>\n                                    </fieldset>\n                                </div>\n                                </div>\n                                <input type=\"hidden\" class=\"form-control\" name=\"tipocliente\" value=\"1\">\n                                <div class=\"col-sm-6 col-12\">\n                                <div class=\"mb-1\">\n                                    <div class=\"mb-0\">\n                                        Descri\xc3\xa7\xc3\xa3o\n                                    </div>\n                                    <fieldset class=\"form-group position-relative\">\n                                        <input type=\"text\" name=\"msg\" id=\"msg\" class=\"form-control\" placeholder=\"Digite uma descri\xc3\xa7\xc3\xa3o...\" required></div>\n                                </fieldset>\n                                </div>\n                            </div>\n                            \n                            <div class=\"col-12 text-center\">\n                            <div class=\"mb-0\">\n                                <div class=\"mb-0\">\n                                    Arquivo\n                                </div>\n                                <fieldset class=\"form-group position-relative input-divider-right\">\n                                    <input type=\"file\" class=\"form-control\" name=\"arquivo\">\n                                    <div class=\"form-control-position\">\n                                        <i class=\"feather icon-file\"></i>\n                                    </div>\n                                </fieldset>\n                            </div>\n                            </div>\n                            <div class=\"col-sm-12 col-12 text-center\">\n                                <button type=\"submit\" name=\"enviandoarquivos\" class=\"btn btn-success\"><i data-feather='upload'></i> Enviar</button>\n                                <button type=\"reset\" class=\"btn btn-danger\"><i data-feather='rotate-ccw'></i> Limpar</button>\n                                <button type=\"submit\" class=\"btn btn-warning\" onclick=\"deletatudo();\"><i data-feather='trash'></i> Apagar Todos</button>\n                            </div>\n                        </div>\n                </form>\n                </div>\n            </div>\n        </div>\n    </div>\n</section>\n<style>\n    .card-datatable {\n        padding-left: 5px;\n        padding-right: 5px;\n    }\n</style>\n<section id=\"complex-header-datatable\">\n    <div class=\"row\">\n        <div class=\"col-12\">\n            <div class=\"card\">\n                <div class=\"card-header border-bottom\">\n                    <h4 class=\"card-title\">Arquivos Hospedados</h4>\n                </div>\n                <div class=\"card-datatable\">\n                    <table id=\"example\" class=\"table table-striped\">\n                        <thead>\n                        <tr>\n                            <th>ID</th>\n                            <th>TIPO</th>\n                            <th>DATA POSTADO</th>\n                            <th>NOME</th>\n                            <th>DETALHES</th>\n                            <th>APAGAR</th>\n                        </tr>\n                        </thead>\n                        <tbody>\n                        ";
${$GLOBALS["nhcfggbczg"]} = "SELECT * FROM arquivo_download ORDER BY id desc";
${$GLOBALS["nhcfggbczg"]} = $conn->prepare(${$GLOBALS["nhcfggbczg"]});
$SQLSubSSH->execute();
if ($SQLSubSSH->rowCount() > 0) {
    $GLOBALS["gcsgraeep"] = "row";
    while (${$GLOBALS["gcsgraeep"]} = $SQLSubSSH->fetch()) {
        $GLOBALS["rccfdkrls"] = "dataconv";
        $GLOBALS["rrdbpkqh"] = "row";
        $bkbubrx = "partes";
        $GLOBALS["qfjyeed"] = "partes";
        $GLOBALS["knnyctrecwr"] = "row";
        $GLOBALS["yjerovx"] = "dia";
        $GLOBALS["roitlxigavno"] = "ano";
        ${$GLOBALS["edtluoc"]} = ${$GLOBALS["ecwlotpttpi"]}["data"];
        $cmkieinyu = "ano";
        ${$GLOBALS["rccfdkrls"]} = substr(${$GLOBALS["edtluoc"]}, 0, 10);
        $efoidfixf = "partes";
        $GLOBALS["lkxiqzau"] = "row";
        ${$GLOBALS["ahktnyvvzi"]} = explode("-", ${$GLOBALS["lxcacg"]});
        $dbggysrtv = "mes";
        ${$cmkieinyu} = ${$efoidfixf}[0];
        ${$GLOBALS["owxwxte"]} = ${$bkbubrx}[1];
        ${$GLOBALS["yjerovx"]} = ${$GLOBALS["qfjyeed"]}[2];
        echo "                                <tr>\n                                    <td>";
        echo ${$GLOBALS["lkxiqzau"]}["id"];
        echo "</td>\n                                    <td>";
        echo ucfirst(${$GLOBALS["knnyctrecwr"]}["tipo"]);
        echo "</td>\n                                    <td>";
        $GLOBALS["ocfruhmobmr"] = "dia";
        echo $dia;
        echo "/";
        echo ${$dbggysrtv};
        echo " - ";
        echo ${$GLOBALS["roitlxigavno"]};
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["rrdbpkqh"]}["nome_arquivo"];
        $GLOBALS["cjjcxyjps"] = "row";
        echo "</td>\n                                    <td>";
        echo $row["detalhes"];
        echo "</td>\n                                    <td><a href=\"pages/download/excluir.php?id=";
        echo ${$GLOBALS["ecwlotpttpi"]}["id"];
        echo "\" class=\"btn btn-danger btn-sm\"><i data-feather='trash'></i></a></td>\n                                </tr>\n                                ";
    }
}
echo "                       </tbody>\n                    </table>\n                </div>\n            </div>\n        </div>\n    </div>\n</section>\n";
