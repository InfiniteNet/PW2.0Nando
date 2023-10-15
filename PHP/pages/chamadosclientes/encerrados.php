<?php

$GLOBALS["bnovenqctu"] = "ano";
$GLOBALS["vmboxirne"] = "user2";
$GLOBALS["qbgxgmfmleib"] = "mes";
$GLOBALS["idxcvoftp"] = "data2";
$GLOBALS["nehykfuaxgg"] = "data1";
$GLOBALS["gsiiatl"] = "tipo";
$GLOBALS["ridqocf"] = "SQLUsuario2";
$GLOBALS["kuglcwypdl"] = "row";
$GLOBALS["gfqyqjy"] = "SQLUsuario";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/encerrados.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
$fiuktbfi = "SQLUsuario";
$GLOBALS["muggraxun"] = "usuario";
protegePagina("user");
if ($usuario["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
echo "<style>\n    .card-datatable {\n        padding-left: 5px;\n        padding-right: 5px;\n    }\n</style>\n<section id=\"complex-header-datatable\">\n    <div class=\"row\">\n        <div class=\"col-12\">\n            <div class=\"card\">\n                <div class=\"card-header border-bottom\">\n                    <h4 class=\"card-title\">Tickets Encerrados</h4>\n                </div>\n                <div class=\"card-datatable\">\n                    <table id=\"example\" class=\"table\">\n                        <thead>\n                        <tr>\n                            <th>N\xc2\xb0 DE CHAMADO</th>\n                            <th>STATUS</th>\n                            <th>ABERTO POR</th>\n                            <th>TIPO</th>\n                            <th>MOTIVO</th>\n                            <th>ULTIMA ATUALIZACAO</th>\n                            <th>INFORMACOES</th>\n                        </tr>\n                        </thead>\n                        <tbody id=\"myTable\">\n                        ";
${$fiuktbfi} = "SELECT * FROM chamados   where  status = 'encerrado' and id_mestre='" . $_SESSION["usuarioID"] . "' ORDER BY id desc";
${$GLOBALS["gfqyqjy"]} = $conn->prepare(${$GLOBALS["gfqyqjy"]});
$SQLUsuario->execute();
if ($SQLUsuario->rowCount() > 0) {
    while (${$GLOBALS["kuglcwypdl"]} = $SQLUsuario->fetch()) {
        $cervxmro = "row";
        $GLOBALS["youvawmdkin"] = "dia";
        $GLOBALS["zxxbzxjatmo"] = "SQLUsuario2";
        $husvhnydvlj = "dia";
        $GLOBALS["wcbxpbq"] = "ano";
        $GLOBALS["jgbtudgv"] = "tipo";
        $vndtdbih = "tipo";
        $GLOBALS["bmhxegcgcm"] = "tipo";
        $GLOBALS["uyomjtlmd"] = "data2";
        $tsekmg = "data2";
        $eofruxv = "user2";
        $SQLUsuario2 = "SELECT * FROM usuario   where  id_usuario = '" . ${$GLOBALS["kuglcwypdl"]}["usuario_id"] . "'";
        $nozrfvm = "row";
        ${$GLOBALS["ridqocf"]} = $conn->prepare(${$GLOBALS["ridqocf"]});
        $abdqrtp = "row";
        $SQLUsuario2->execute();
        $lqmnvriwizm = "tipo";
        ${$eofruxv} = $SQLUsuario2->fetch();
        switch (${$GLOBALS["kuglcwypdl"]}["tipo"]) {
            case "contassh":
                ${$lqmnvriwizm} = "SSH";
                break;
            case "revendassh":
                ${$GLOBALS["bmhxegcgcm"]} = "REVENDA SSH";
                break;
            case "usuariossh":
                ${$GLOBALS["jgbtudgv"]} = "USU\xc3\x81RIO SSH";
                break;
            case "servidor":
                ${$GLOBALS["gsiiatl"]} = "SERVIDOR";
                break;
            case "outros":
                ${$GLOBALS["gsiiatl"]} = "OUTROS";
                break;
            default:
                ${$vndtdbih} = "Erro";
                break;
        }
        ${$GLOBALS["nehykfuaxgg"]} = explode(" ", ${$cervxmro}["data"]);
        ${$GLOBALS["idxcvoftp"]} = explode("-", ${$GLOBALS["nehykfuaxgg"]}[0]);
        ${$husvhnydvlj} = ${$tsekmg}[2];
        ${$GLOBALS["qbgxgmfmleib"]} = ${$GLOBALS["uyomjtlmd"]}[1];
        ${$GLOBALS["wcbxpbq"]} = ${$GLOBALS["idxcvoftp"]}[0];
        echo "\n\n                                <div class=\"modal fade\" id=\"squarespaceModal";
        echo ${$GLOBALS["kuglcwypdl"]}["id"];
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalLabel\" aria-hidden=\"true\">\n                                    <div class=\"modal-dialog\">\n                                        <div class=\"modal-content\">\n                                            <div class=\"modal-header\">\n                                                <h3 class=\"modal-title\" id=\"lineModalLabel\"><i class=\"fa fa-info\"></i> Informa\xc3\xa7\xc3\xb5es do Chamado</h3>\n                                            </div>\n                                            <div class=\"modal-body\">\n\n                                                <!-- content goes here -->\n                                                <form action=\"pages/chamadosclientes/deletar_chamado.php\" method=\"post\">\n                                                    <input name=\"chamado\" type=\"hidden\" value=\"";
        echo ${$nozrfvm}["id"];
        echo "\">\n                                                    <input name=\"diretorio\" type=\"hidden\" value=\"../../home.php?page=chamadosclientes/encerrados\">\n                                                    <div class=\"form-group mb-1\">\n                                                        <label for=\"exampleInputEmail1\">Motivo</label>\n                                                        <input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" value=\"";
        echo ${$GLOBALS["kuglcwypdl"]}["motivo"];
        $GLOBALS["mwxcjlx"] = "row";
        echo "\" disabled>\n                                                    </div>\n                                                    <div class=\"form-group mb-1\">\n                                                        <label for=\"exampleInputEmail1\">Mensagem</label>\n                                                        <textarea class=\"form-control\" rows=5 cols=20 wrap=\"off\" disabled>";
        echo ${$GLOBALS["kuglcwypdl"]}["mensagem"];
        echo "</textarea>\n                                                    </div>\n\n                                                    <div class=\"form-group mb-1\">\n                                                        <label for=\"exampleInputEmail1\">Tipo</label>\n                                                        <select size=\"1\" class=\"form-select\" disabled>\n                                                            <option  selected=selectes>";
        echo ${$GLOBALS["gsiiatl"]};
        echo "</option>\n                                                        </select>\n                                                    </div>\n                                                    <div class=\"form-group mb-1\">\n                                                        <label for=\"exampleInputPassword1\">Resposta</label>\n                                                        <textarea class=\"form-control\" rows=5 cols=20 wrap=\"off\" placeholder=\"Deixe uma resposta para ele visualizar\" required disabled>";
        echo ${$abdqrtp}["resposta"];
        echo "</textarea>\n                                                    </div>\n\n                                            </div>\n                                            <div class=\"modal-footer\">\n                                                <div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"group button\">\n                                                    <div class=\"btn-group\" role=\"group\">\n                                                        <button class=\"btn btn-danger\">Deletar</button>\n                                                        </form>\n                                                    </div>\n                                                </div>\n                                            </div>\n                                        </div>\n                                    </div>\n                                </div>\n\n                                <tr>\n                                    <td>#";
        echo ${$GLOBALS["kuglcwypdl"]}["id"];
        echo "</td>\n                                    <td><small class=\"label label-success\">";
        echo ucfirst($row["status"]);
        echo "</small></td>\n                                    <td><a href=\"home.php?page=usuario/perfil&id_usuario=";
        echo ${$GLOBALS["vmboxirne"]}["id_usuario"];
        echo "\">";
        echo ${$GLOBALS["vmboxirne"]}["nome"];
        echo "</a></td>\n                                    <td>";
        echo ${$GLOBALS["gsiiatl"]};
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["kuglcwypdl"]}["motivo"];
        echo "</td>\n                                    <td>";
        echo ${$GLOBALS["youvawmdkin"]};
        echo "/";
        echo ${$GLOBALS["qbgxgmfmleib"]};
        echo " - ";
        echo ${$GLOBALS["bnovenqctu"]};
        echo "</td>\n                                    <td>\n                                        <a data-bs-toggle=\"modal\"  data-bs-target=\"#squarespaceModal";
        echo ${$GLOBALS["kuglcwypdl"]}["id"];
        echo "\" class=\"btn-sm btn-primary\"><i data-feather='eye'></i></a>\n                                    </td>\n                                </tr>\n\n                            ";
    }
}
echo "                        </tbody>\n                        </table>\n                </div>\n            </div>\n        </div>\n    </div>\n</section>\n";
