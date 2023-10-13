<?php

$GLOBALS["ujzffpfws"] = "user2";
$GLOBALS["ohtgydyvj"] = "mes";
$GLOBALS["joblgdwebd"] = "data1";
$GLOBALS["wwwhgx"] = "tipo";
$GLOBALS["jqahrcfc"] = "row";
$GLOBALS["uixrgbd"] = "SQLUsuario2";
$GLOBALS["gdsevxrssfj"] = "SQLUsuario";
$GLOBALS["pcsisbfvjcs"] = "usuario";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/respondidos.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
protegePagina("user");
if (${$GLOBALS["pcsisbfvjcs"]}["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
$gvxrsf = "SQLUsuario";
echo "<style>\n    .card-datatable {\n        padding-left: 5px;\n        padding-right: 5px;\n    }\n</style>\n<section id=\"complex-header-datatable\">\n    <div class=\"row\">\n        <div class=\"col-12\">\n            <div class=\"card\">\n                <div class=\"card-header border-bottom\">\n                    <h4 class=\"card-title\">Tickets Respondidos</h4>\n                </div>\n                <div class=\"card-datatable\">\n                    <table id=\"example\" class=\"table\">\n                        <thead>\n                        <tr>\n                            <th>N\xc2\xb0 DE CHAMADO</th>\n                            <th>STATUS</th>\n                            <th>ABERTO POR</th>\n                            <th>TIPO DE CHAMADO</th>\n                            <th>MOTIVO</th>\n                            <th>ULTIMA ATUALIZACAO</th>\n                            <th>INFORMACOES</th>\n                        </tr>\n                        </thead>\n                        <tbody id=\"myTable\">\n                            ";
${$GLOBALS["gdsevxrssfj"]} = "SELECT * FROM chamados   where  status = 'resposta' and id_mestre='" . $_SESSION["usuarioID"] . "' ORDER BY id desc";
${$gvxrsf} = $conn->prepare(${$GLOBALS["gdsevxrssfj"]});
$SQLUsuario->execute();
if ($SQLUsuario->rowCount() > 0) {
    $mxnfdj = "row";
    while (${$mxnfdj} = $SQLUsuario->fetch()) {
        $GLOBALS["yttjwgoedey"] = "row";
        $wevghy = "tipo";
        $pjsgeatr = "row";
        $rdlovvitko = "row";
        $rghymdryvpq = "tipo";
        $GLOBALS["ywpkfhcocbi"] = "data2";
        $yzftsbm = "tipo";
        $GLOBALS["kimpcsg"] = "data2";
        $dsjpgqliaw = "data2";
        $GLOBALS["qgbjqllvne"] = "data1";
        $ytuzybpsrvv = "row";
        $GLOBALS["uohknofpu"] = "tipo";
        $GLOBALS["duqisfrub"] = "row";
        $vndphplsf = "SQLUsuario2";
        $jluhqygguwq = "user2";
        $SQLUsuario2 = "SELECT * FROM usuario   where  id_usuario = '" . $row["usuario_id"] . "'";
        $GLOBALS["ycygruvbt"] = "tipo";
        ${$GLOBALS["uixrgbd"]} = $conn->prepare(${$GLOBALS["uixrgbd"]});
        $SQLUsuario2->execute();
        $GLOBALS["tdoveouh"] = "row";
        $GLOBALS["hvrxbff"] = "data2";
        ${$jluhqygguwq} = $SQLUsuario2->fetch();
        switch (${$GLOBALS["jqahrcfc"]}["tipo"]) {
            case "contassh":
                ${$rghymdryvpq} = "SSH";
                break;
            case "revendassh":
                ${$wevghy} = "REVENDA SSH";
                break;
            case "usuariossh":
                ${$GLOBALS["wwwhgx"]} = "USU\xc3\x81RIO SSH";
                break;
            case "servidor":
                ${$GLOBALS["uohknofpu"]} = "SERVIDOR";
                break;
            case "outros":
                ${$GLOBALS["ycygruvbt"]} = "OUTROS";
                break;
            default:
                ${$GLOBALS["wwwhgx"]} = "Erro";
                break;
        }
        $piypovsui = "dia";
        ${$GLOBALS["joblgdwebd"]} = explode(" ", ${$ytuzybpsrvv}["data"]);
        $nxknsdbxb = "ano";
        ${$dsjpgqliaw} = explode("-", ${$GLOBALS["qgbjqllvne"]}[0]);
        ${$piypovsui} = ${$GLOBALS["ywpkfhcocbi"]}[2];
        ${$GLOBALS["ohtgydyvj"]} = ${$GLOBALS["hvrxbff"]}[1];
        ${$nxknsdbxb} = ${$GLOBALS["kimpcsg"]}[0];
        echo "\n\n                                    <div class=\"modal fade\" id=\"squarespaceModal2";
        echo ${$GLOBALS["jqahrcfc"]}["id"];
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalLabel\" aria-hidden=\"true\">\n                                        <div class=\"modal-dialog\">\n                                            <div class=\"modal-content\">\n                                                <div class=\"modal-header\">\n                                                    <h3 class=\"modal-title\" id=\"lineModalLabel\"><i class=\"fa fa-info\"></i> Encerramento de Ticket</h3>\n                                                </div>\n                                                <div class=\"modal-body\">\n\n                                                    <!-- content goes here -->\n                                                    <form name=\"editaserver\" action=\"pages/chamadosclientes/encerrar_chamado.php\" method=\"post\">\n                                                        <input name=\"chamado\" type=\"hidden\" value=\"";
        echo ${$GLOBALS["jqahrcfc"]}["id"];
        echo "\">\n                                                        <input name=\"diretorio\" type=\"hidden\" value=\"../../home.php?page=chamadosclientes/respondidos\">\n                                                        <div class=\"form-group\">\n                                                            <label for=\"exampleInputPassword1\">Deseja deixar uma Resposta?</label>\n                                                            <textarea class=\"form-control\" name=\"msg\" rows=5 cols=20 wrap=\"off\" placeholder=\"Resposta final opcional\"></textarea>\n                                                        </div>\n\n                                                </div>\n                                                <div class=\"modal-footer\">\n                                                    <div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"group button\">\n                                                        <div class=\"btn-group\" role=\"group\">\n                                                            <button class=\"btn btn-danger\">Encerrar</button>\n                                                            </form>\n                                                        </div>\n                                                    </div>\n                                                </div>\n                                            </div>\n                                        </div>\n                                    </div>\n\n                                    <div class=\"modal fade\" id=\"squarespaceModal";
        echo ${$GLOBALS["jqahrcfc"]}["id"];
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalLabel\" aria-hidden=\"true\">\n                                        <div class=\"modal-dialog\">\n                                            <div class=\"modal-content\">\n                                                <div class=\"modal-header\">\n                                                    <h3 class=\"modal-title\" id=\"lineModalLabel\">Informa\xc3\xa7\xc3\xb5es do Ticket</h3>\n                                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>\n                                                </div>\n                                                <div class=\"modal-body\">\n\n                                                    <!-- content goes here -->\n                                                    <form action=\"pages/chamadosclientes/responder_chamado.php\" method=\"post\">\n                                                        <input name=\"chamado\" type=\"hidden\" value=\"";
        echo ${$GLOBALS["yttjwgoedey"]}["id"];
        echo "\">\n                                                        <input name=\"diretorio\" type=\"hidden\" value=\"../../home.php?page=chamadosclientes/respondidos\">\n                                                        <div class=\"form-group mb-1\">\n                                                            <label for=\"exampleInputEmail1\">Motivo</label>\n                                                            <input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" value=\"";
        echo ${$GLOBALS["jqahrcfc"]}["motivo"];
        echo "\" disabled>\n                                                        </div>\n                                                        <div class=\"form-group mb-1\">\n                                                            <label for=\"exampleInputEmail1\">Mensagem</label>\n                                                            <textarea class=\"form-control\" rows=5 cols=20 wrap=\"off\" disabled>";
        echo ${$pjsgeatr}["mensagem"];
        echo "</textarea>\n                                                        </div>\n\n                                                        <div class=\"form-group mb-1\">\n                                                            <label for=\"exampleInputEmail1\">Tipo</label>\n                                                            <select size=\"1\" class=\"form-select\" disabled>\n                                                                <option selected=selectes>";
        $GLOBALS["uwpypueqisht"] = "dia";
        echo ${$GLOBALS["wwwhgx"]};
        $GLOBALS["kpbctiiglp"] = "ano";
        echo "</option>\n                                                            </select>\n                                                        </div>\n                                                        <div class=\"form-group mb-1\">\n                                                            <label for=\"exampleInputPassword1\">Resposta</label>\n                                                            <textarea class=\"form-control\" name=\"msg\" rows=5 cols=20 wrap=\"off\" placeholder=\"Deixe uma resposta para ele visualizar\" required>";
        echo ${$GLOBALS["duqisfrub"]}["resposta"];
        echo "</textarea>\n                                                        </div>\n\n                                                </div>\n                                                <div class=\"modal-footer\">\n                                                    <div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"group button\">\n\n                                                        <div class=\"btn-group\" role=\"group\">\n                                                            <button class=\"btn btn-success\">Responder</button>\n                                                            </form>\n                                                        </div>\n                                                    </div>\n                                                </div>\n                                            </div>\n                                        </div>\n                                    </div>\n\n                                    <tr>\n                                        <td>#";
        echo ${$GLOBALS["jqahrcfc"]}["id"];
        echo "</td>\n                                        <td><small class=\"label label-warning\">";
        echo ucfirst(${$GLOBALS["jqahrcfc"]}["status"]);
        echo "</small></td>\n                                        <td><a href=\"home.php?page=usuario/perfil&id_usuario=";
        echo ${$GLOBALS["ujzffpfws"]}["id_usuario"];
        echo "\">";
        echo ${$GLOBALS["ujzffpfws"]}["nome"];
        echo "</a></td>\n                                        <td>";
        echo ${$yzftsbm};
        echo "</td>\n                                        <td>";
        echo ${$GLOBALS["jqahrcfc"]}["motivo"];
        echo "</td>\n\n                                        <td>";
        echo $dia;
        echo "/";
        echo ${$GLOBALS["ohtgydyvj"]};
        echo " - ";
        echo $ano;
        echo "</td>\n                                        <td>\n                                            <a data-bs-toggle=\"modal\" data-bs-target=\"#squarespaceModal";
        echo ${$GLOBALS["jqahrcfc"]}["id"];
        echo "\" class=\"btn-sm btn-primary\"><i data-feather='eye'></i></a>&nbsp;&nbsp;&nbsp;\n                                            <a data-bs-toggle=\"modal\" data-bs-target=\"#squarespaceModal2";
        echo ${$GLOBALS["tdoveouh"]}["id"];
        echo "\" class=\"btn-sm btn-danger\"><i data-feather='trash'></i></a>\n                                        </td>\n                                    </tr>\n\n\n\n\n                            ";
    }
}
echo "                         </tbody>\n                    </table>\n                </div>\n            </div>\n        </div>\n    </div>\n</section>\n";
