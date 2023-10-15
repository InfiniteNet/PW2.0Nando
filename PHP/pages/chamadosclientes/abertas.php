<?php

$GLOBALS["jagqzjk"] = "mes";
$GLOBALS["feqwbxsm"] = "data2";
$GLOBALS["svoquvpmpq"] = "ano";
$GLOBALS["aqacexchhite"] = "dia";
$GLOBALS["yckutpao"] = "data1";
$GLOBALS["fgpggjop"] = "tipo";
$GLOBALS["igtrjmgfc"] = "user2";
$GLOBALS["wbisyturfv"] = "SQLUsuario2";
$GLOBALS["fyqeacad"] = "row";
$GLOBALS["iavfnwwssaj"] = "SQLUsuario";
$GLOBALS["poidrbur"] = "usuario";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/abertas.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
$GLOBALS["wkvqhcnen"] = "SQLUsuario";
protegePagina("user");
if (${$GLOBALS["poidrbur"]}["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
echo "<style>\n    .card-datatable {\n        padding-left: 5px;\n        padding-right: 5px;\n    }\n</style>\n<section id=\"complex-header-datatable\">\n    <div class=\"row\">\n        <div class=\"col-12\">\n            <div class=\"card\">\n                <div class=\"card-header border-bottom\">\n                    <h4 class=\"card-title\">Tickets Abertos</h4>\n                </div>\n                <div class=\"card-datatable\">\n                    <table id=\"example\" class=\"table\">\n                        <thead>\n                            <tr>\n                                <th>N\xc2\xb0 DE CHAMADO</th>\n                                <th>STATUS</th>\n                                <th>ABERTO POR</th>\n                                <th>TIPO</th>\n                                <th>MOTIVO</th>\n                                <th>ULTIMA ATUALIZACAO</th>\n                                <th>ACAO</th>\n                            </tr>\n                        </thead>\n                        <tbody id=\"myTable\">\n                            ";
${$GLOBALS["wkvqhcnen"]} = "SELECT * FROM chamados   where  status = 'aberto' and id_mestre='" . $_SESSION["usuarioID"] . "' ORDER BY id desc";
${$GLOBALS["iavfnwwssaj"]} = $conn->prepare(${$GLOBALS["iavfnwwssaj"]});
$SQLUsuario->execute();
if ($SQLUsuario->rowCount() > 0) {
    while (${$GLOBALS["fyqeacad"]} = $SQLUsuario->fetch()) {
        $hpfttf = "tipo";
        $hqhuiwkli = "ano";
        $xhpidvubwg = "tipo";
        $ehmmey = "row";
        $xgwkqrkgskgk = "mes";
        $GLOBALS["hyiclwohc"] = "tipo";
        $GLOBALS["pefhqexdmkyi"] = "tipo";
        ${$GLOBALS["wbisyturfv"]} = "SELECT * FROM usuario   where  id_usuario = '" . ${$GLOBALS["fyqeacad"]}["usuario_id"] . "'";
        $aacnjysiykw = "SQLUsuario2";
        $SQLUsuario2 = $conn->prepare(${$GLOBALS["wbisyturfv"]});
        $urgchxh = "data2";
        $SQLUsuario2->execute();
        $patjrctkjvl = "tipo";
        $qyruke = "row";
        $GLOBALS["xokrurp"] = "row";
        $nnvlexqqq = "tipo";
        ${$GLOBALS["igtrjmgfc"]} = $SQLUsuario2->fetch();
        $GLOBALS["raytkrrrk"] = "row";
        switch (${$GLOBALS["fyqeacad"]}["tipo"]) {
            case "contassh":
                ${$hpfttf} = "SSH";
                break;
            case "revendassh":
                ${$xhpidvubwg} = "REVENDA SSH";
                break;
            case "usuariossh":
                ${$GLOBALS["fgpggjop"]} = "USU\xc3\x81RIO SSH";
                break;
            case "servidor":
                ${$GLOBALS["pefhqexdmkyi"]} = "SERVIDOR";
                break;
            case "outros":
                ${$nnvlexqqq} = "OUTROS";
                break;
            default:
                ${$patjrctkjvl} = "Erro";
                break;
        }
        $fhgesxxm = "row";
        ${$GLOBALS["yckutpao"]} = explode(" ", ${$GLOBALS["raytkrrrk"]}["data"]);
        $GLOBALS["qshvmuin"] = "row";
        $GLOBALS["ncdrlzlbl"] = "data2";
        $thsbazqexxl = "data2";
        ${$urgchxh} = explode("-", ${$GLOBALS["yckutpao"]}[0]);
        ${$GLOBALS["aqacexchhite"]} = ${$GLOBALS["ncdrlzlbl"]}[2];
        ${$xgwkqrkgskgk} = ${$thsbazqexxl}[1];
        $GLOBALS["fnggwidvi"] = "row";
        ${$GLOBALS["svoquvpmpq"]} = ${$GLOBALS["feqwbxsm"]}[0];
        echo "\n\n                                    <div class=\"modal fade\" id=\"squarespaceModal2";
        $GLOBALS["jtspbsuy"] = "row";
        echo $row["id"];
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalLabel\" aria-hidden=\"true\">\n                                        <div class=\"modal-dialog\">\n                                            <div class=\"modal-content\">\n                                                <div class=\"modal-header\">\n                                                    <h3 class=\"modal-title\" id=\"lineModalLabel\">Encerrar Ticket</h3>\n                                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>\n                                                </div>\n                                                <div class=\"modal-body\">\n\n                                                    <!-- content goes here -->\n                                                    <form name=\"editaserver\" action=\"pages/chamadosclientes/encerrar_chamado.php\" method=\"post\">\n                                                        <input name=\"chamado\" type=\"hidden\" value=\"";
        echo ${$GLOBALS["fyqeacad"]}["id"];
        echo "\">\n                                                        <input name=\"diretorio\" type=\"hidden\" value=\"../../home.php?page=chamadosclientes/abertas\">\n                                                        <div class=\"form-group\">\n                                                            <label for=\"exampleInputPassword1\">Deseja deixar uma Resposta?</label>\n                                                            <textarea class=\"form-control\" name=\"msg\" rows=5 cols=20 wrap=\"off\" placeholder=\"Resposta final opcional\"></textarea>\n                                                        </div>\n\n                                                </div>\n                                                <div class=\"modal-footer\">\n                                                    <div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"group button\">\n                                                        <div class=\"btn-group\" role=\"group\">\n                                                        </div>\n                                                        <div class=\"btn-group\" role=\"group\">\n                                                            <button class=\"btn btn-danger\">Encerrar</button>\n                                                            </form>\n                                                        </div>\n                                                    </div>\n                                                </div>\n                                            </div>\n                                        </div>\n                                    </div>\n\n                                    <div class=\"modal fade\" id=\"squarespaceModal";
        echo ${$GLOBALS["fyqeacad"]}["id"];
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalLabel\" aria-hidden=\"true\">\n                                        <div class=\"modal-dialog\">\n                                            <div class=\"modal-content\">\n                                                <div class=\"modal-header\">\n                                                    <h3 class=\"modal-title\" id=\"lineModalLabel\"><i class=\"fa fa-info\"></i>Ticket suporte</h3>\n                                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>\n                                                </div>\n                                                <div class=\"modal-body\">\n\n                                                    <!-- content goes here -->\n                                                    <form action=\"pages/chamadosclientes/responder_chamado.php\" method=\"post\">\n                                                        <input name=\"chamado\" type=\"hidden\" value=\"";
        echo ${$qyruke}["id"];
        echo "\">\n                                                        <input name=\"diretorio\" type=\"hidden\" value=\"../../home.php?page=chamadosclientes/abertas\">\n                                                        <div class=\"mb-1\">\n                                                            <div class=\"form-group\">\n                                                                <label for=\"exampleInputEmail1\">Motivo</label>\n                                                                <input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" value=\"";
        echo ${$GLOBALS["xokrurp"]}["motivo"];
        echo "\" disabled>\n                                                            </div>\n                                                        </div>\n                                                        <div class=\"mb-1\">\n                                                            <div class=\"form-group\">\n                                                                <label for=\"exampleInputEmail1\">Mensagem</label>\n                                                                <textarea class=\"form-control\" rows=5 cols=20 wrap=\"off\" disabled>";
        echo ${$ehmmey}["mensagem"];
        echo "</textarea>\n                                                            </div>\n                                                        </div>\n                                                        <div class=\"mb-1\">\n                                                            <div class=\"form-group\">\n                                                                <label for=\"exampleInputEmail1\">Tipo</label>\n                                                                <select size=\"1\" class=\"form-select\" disabled>\n                                                                    <option selected=selectes>";
        echo ${$GLOBALS["fgpggjop"]};
        echo "</option>\n                                                                </select>\n                                                            </div>\n                                                        </div>\n                                                        <div class=\"mb-1\">\n                                                            <div class=\"form-group\">\n                                                                <label for=\"exampleInputPassword1\">Resposta</label>\n                                                                <textarea class=\"form-control\" name=\"msg\" rows=5 cols=20 wrap=\"off\" placeholder=\"Deixe uma resposta para ele visualizar\" required>";
        echo ${$fhgesxxm}["resposta"];
        echo "</textarea>\n                                                            </div>\n                                                        </div>\n                                                </div>\n                                                <div class=\"modal-footer\">\n                                                    <div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"group button\">\n                                                        <div class=\"btn-group\" role=\"group\">\n                                                            <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\" role=\"button\">Cancelar</button>\n                                                        </div>\n                                                        <div class=\"btn-group\" role=\"group\">\n                                                            <button class=\"btn btn-default btn-success\">Responder</button>\n                                                            </form>\n                                                        </div>\n                                                    </div>\n                                                </div>\n                                            </div>\n                                        </div>\n                                    </div>\n\n                                    <tr>\n                                        <td>#";
        echo ${$GLOBALS["qshvmuin"]}["id"];
        echo "</td>\n                                        <td><small class=\"label label-success\">";
        echo ucfirst(${$GLOBALS["fyqeacad"]}["status"]);
        echo "</small></td>\n                                        <td><a href=\"home.php?page=usuario/perfil&id_usuario=";
        echo ${$GLOBALS["igtrjmgfc"]}["id_usuario"];
        echo "\">";
        echo ${$GLOBALS["igtrjmgfc"]}["nome"];
        echo "</a></td>\n                                        <td>";
        echo ${$GLOBALS["hyiclwohc"]};
        echo "</td>\n\n                                        <td>";
        echo ${$GLOBALS["fyqeacad"]}["motivo"];
        echo "</td>\n                                        <td>";
        echo ${$GLOBALS["aqacexchhite"]};
        $jikofowxug = "row";
        echo "/";
        echo ${$GLOBALS["jagqzjk"]};
        echo " - ";
        echo ${$hqhuiwkli};
        echo "</td>\n                                        <td>\n                                            <a data-bs-toggle=\"modal\" data-bs-target=\"#squarespaceModal";
        echo $row["id"];
        echo "\" class=\"btn-sm btn-primary\"><i data-feather='edit-2'></i></a>&nbsp;&nbsp;&nbsp;\n                                            <a data-bs-toggle=\"modal\" data-bs-target=\"#squarespaceModal2";
        echo ${$GLOBALS["fnggwidvi"]}["id"];
        echo "\" class=\"btn-sm btn-danger\"><i data-feather='trash'></i></a>\n                                        </td>\n                                    </tr>\n\n                            ";
    }
}
echo "\n                        </tbody>\n                    </table>\n                </div>\n            </div>\n        </div>\n    </div>\n</section>\n";
