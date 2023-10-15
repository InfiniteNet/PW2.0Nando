<?php

$GLOBALS["popyvl"] = "mes";
$GLOBALS["swsqqpwgvuc"] = "row";
$GLOBALS["jkclilycc"] = "data2";
$GLOBALS["xexwlsy"] = "data1";
$GLOBALS["lfbodnic"] = "tipo";
$GLOBALS["upgiilmdz"] = "user2";
$GLOBALS["fnkzpexmsv"] = "SQLUsuario2";
$GLOBALS["feklefprv"] = "SQLUsuario";
$GLOBALS["xmwqbgryfzyb"] = "usuario";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/encerrados.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
$GLOBALS["rwwqmlcl"] = "SQLUsuario";
protegePagina("user");
if (${$GLOBALS["xmwqbgryfzyb"]}["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
echo "<style>\n    .card-datatable {\n        padding-left: 5px;\n        padding-right: 5px;\n    }\n</style>\n<section id=\"complex-header-datatable\">\n    <div class=\"row\">\n        <div class=\"col-12\">\n            <div class=\"card\">\n                <div class=\"card-header border-bottom\">\n                    <h4 class=\"card-title\">Tickets Encerrados</h4>\n                </div>\n                <div class=\"card-datatable\">\n                    <table id=\"example\" class=\"table\">\n                        <thead>\n                            <tr>\n                                <th>N\xc2\xb0 DE CHAMADO</th>\n                                <th>STATUS</th>\n                                <th>ABERTO POR</th>\n                                <th>TIPO</th>\n                                <th>MOTIVO</th>\n                                <th>ULTIMA ATUALIZACAO</th>\n                                <th>INFORMACOES</th>\n                            </tr>\n                        </thead>\n                        <tbody id=\"myTable\">\n                            ";
${$GLOBALS["feklefprv"]} = "SELECT * FROM chamados   where  status = 'encerrado' and usuario_id='" . $_SESSION["usuarioID"] . "' ORDER BY id desc";
${$GLOBALS["feklefprv"]} = $conn->prepare(${$GLOBALS["rwwqmlcl"]});
$SQLUsuario->execute();
if ($SQLUsuario->rowCount() > 0) {
    $hdewavbkh = "row";
    while (${$hdewavbkh} = $SQLUsuario->fetch()) {
        $GLOBALS["gltmfw"] = "row";
        $GLOBALS["ketpsfacnhka"] = "dia";
        $wqqjmbq = "tipo";
        $yesxcvfq = "mes";
        $seohnkwh = "data2";
        $wgxjnwhqf = "row";
        $yojoeqq = "row";
        $GLOBALS["qtslplnunpkc"] = "SQLUsuario2";
        $rpurrfnk = "tipo";
        $xydlggowkhgd = "row";
        $GLOBALS["sjhipbnq"] = "SQLUsuario2";
        $crdttnmrcckk = "tipo";
        $wqjfyoxpc = "ano";
        ${$GLOBALS["fnkzpexmsv"]} = "SELECT * FROM usuario   where  id_usuario = '" . $row["usuario_id"] . "'";
        $GLOBALS["sjqsiwl"] = "tipo";
        ${$GLOBALS["qtslplnunpkc"]} = $conn->prepare(${$GLOBALS["sjhipbnq"]});
        $SQLUsuario2->execute();
        $GLOBALS["ryxrkeb"] = "data1";
        $lshkgxlythh = "tipo";
        $tciliw = "tipo";
        ${$GLOBALS["upgiilmdz"]} = $SQLUsuario2->fetch();
        switch (${$xydlggowkhgd}["tipo"]) {
            case "contassh":
                ${$lshkgxlythh} = "SSH";
                break;
            case "revendassh":
                ${$wqqjmbq} = "REVENDA SSH";
                break;
            case "usuariossh":
                ${$tciliw} = "USU\xc3\x81RIO SSH";
                break;
            case "servidor":
                ${$crdttnmrcckk} = "SERVIDOR";
                break;
            case "outros":
                ${$GLOBALS["lfbodnic"]} = "OUTROS";
                break;
            default:
                ${$GLOBALS["lfbodnic"]} = "Erro";
                break;
        }
        $nkcslsn = "dia";
        ${$GLOBALS["xexwlsy"]} = explode(" ", ${$yojoeqq}["data"]);
        ${$GLOBALS["jkclilycc"]} = explode("-", ${$GLOBALS["ryxrkeb"]}[0]);
        ${$nkcslsn} = ${$GLOBALS["jkclilycc"]}[2];
        $fjfvtpdkw = "row";
        $hrmnybqody = "row";
        ${$yesxcvfq} = ${$GLOBALS["jkclilycc"]}[1];
        ${$wqjfyoxpc} = ${$seohnkwh}[0];
        echo "\n                                    <div class=\"modal fade\" id=\"squarespaceModal";
        echo ${$GLOBALS["swsqqpwgvuc"]}["id"];
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalLabel\" aria-hidden=\"true\">\n                                        <div class=\"modal-dialog\">\n                                            <div class=\"modal-content\">\n                                                <div class=\"modal-header\">\n                                                    <h3 class=\"modal-title\" id=\"lineModalLabel\"><i class=\"fa fa-info\"></i> Informa\xc3\xa7\xc3\xb5es do Ticket</h3>\n                                                </div>\n                                                <div class=\"modal-body\">\n\n                                                    <!-- content goes here -->\n                                                    <div class=\"form-group mb-1\">\n                                                        <label for=\"exampleInputEmail1\">Motivo</label>\n                                                        <input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" value=\"";
        echo ${$wgxjnwhqf}["motivo"];
        echo "\" disabled>\n                                                    </div>\n                                                    <div class=\"form-group mb-1\">\n                                                        <label for=\"exampleInputEmail1\">Mensagem</label>\n                                                        <textarea class=\"form-control\" rows=5 cols=20 wrap=\"off\" disabled>";
        echo ${$GLOBALS["swsqqpwgvuc"]}["mensagem"];
        echo "</textarea>\n                                                    </div>\n\n                                                    <div class=\"form-group mb-1\">\n                                                        <label for=\"exampleInputEmail1\">Tipo</label>\n                                                        <select size=\"1\" class=\"form-select\" disabled>\n                                                            <option selected=selectes>";
        echo ${$GLOBALS["sjqsiwl"]};
        echo "</option>\n                                                        </select>\n                                                    </div>\n                                                    <div class=\"form-group mb-1\">\n                                                        <label for=\"exampleInputPassword1\">Resposta da Administra\xc3\xa7\xc3\xa3o</label>\n                                                        <textarea class=\"form-control\" rows=5 cols=20 wrap=\"off\" placeholder=\"Deixe uma resposta para ele visualizar\" required disabled>";
        $ehjntupeo = "row";
        echo $row["resposta"];
        echo "</textarea>\n                                                    </div>\n\n                                                </div>\n                                                <div class=\"modal-footer\">\n                                                    <div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"group button\">\n                                                        <div class=\"btn-group\" role=\"group\">\n                                                            <button class=\"btn btn-default btn-danger\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">Sair</button>\n                                                            </form>\n                                                        </div>\n                                                    </div>\n                                                </div>\n                                            </div>\n                                        </div>\n                                    </div>\n\n                                    <tr>\n                                        <td>#";
        echo ${$GLOBALS["swsqqpwgvuc"]}["id"];
        $rebisnw = "ano";
        echo "</td>\n                                        <td><small class=\"label label-success\">";
        echo ucfirst(${$fjfvtpdkw}["status"]);
        echo "</small></td>\n                                        \n                                        <td>";
        echo ${$hrmnybqody}["login"];
        echo "</td>\n                                        <td>";
        echo ${$rpurrfnk};
        echo "</td>\n                                        <td>";
        echo ${$GLOBALS["swsqqpwgvuc"]}["motivo"];
        echo "</td>\n                                        <td>";
        echo ${$GLOBALS["ketpsfacnhka"]};
        echo "/";
        echo ${$GLOBALS["popyvl"]};
        echo " - ";
        echo $ano;
        echo "</td>\n\n\n                                        <td>\n\n                                        <a data-bs-toggle=\"modal\"  data-bs-target=\"#squarespaceModal";
        echo ${$GLOBALS["swsqqpwgvuc"]}["id"];
        echo "\" class=\"btn-sm btn-primary\"><i data-feather='eye'></i></a> \n                                        </td>\n                                    </tr>\n\n                            ";
    }
}
echo "                        </tbody>\n                    </table>\n                </div>\n            </div>\n        </div>\n    </div>\n</section>\n";
