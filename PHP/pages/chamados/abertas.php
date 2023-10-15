<?php

$GLOBALS["turfnzoln"] = "dia";
$GLOBALS["upphpxwst"] = "data1";
$GLOBALS["wpzywh"] = "data2";
$GLOBALS["rluqqcyjf"] = "tipo";
$GLOBALS["ubdmkpelq"] = "user2";
$GLOBALS["xbujajpcng"] = "row";
$GLOBALS["bbtrlcug"] = "SQLUsuario";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/abertas.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
protegePagina("user");
$mbumjyuewjkq = "usuario";
$dssije = "SQLUsuario";
if ($usuario["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
echo "<style>\n    .card-datatable {\n        padding-left: 5px;\n        padding-right: 5px;\n    }\n</style>\n<section id=\"complex-header-datatable\">\n    <div class=\"row\">\n        <div class=\"col-12\">\n            <div class=\"card\">\n                <div class=\"card-header border-bottom\">\n                    <h4 class=\"card-title\">Tickets Abertos</h4>\n                </div>\n                <div class=\"card-datatable\">\n                    <table id=\"example\" class=\"table\">\n                        <thead>\n                            <tr>\n                                <th>N\xc2\xb0 DE CHAMADO</th>\n                                <th>STATUS</th>\n                                <th>ABERTO POR</th>\n                                <th>TIPO</th>\n                                <th>MOTIVO</th>\n                                <th>ULTIMA ATUALIZACAO</th>\n                                <th>ACAO</th>\n                            </tr>\n                        </thead>\n                        <tbody id=\"myTable\">\n                            ";
${$dssije} = "SELECT * FROM chamados   where  status = 'aberto' and usuario_id='" . $_SESSION["usuarioID"] . "' ORDER BY id desc";
${$GLOBALS["bbtrlcug"]} = $conn->prepare(${$GLOBALS["bbtrlcug"]});
$SQLUsuario->execute();
if ($SQLUsuario->rowCount() > 0) {
    while (${$GLOBALS["xbujajpcng"]} = $SQLUsuario->fetch()) {
        $GLOBALS["hhqgpruzuf"] = "data2";
        $GLOBALS["dbrumw"] = "tipo";
        $GLOBALS["egwsrlzwr"] = "mes";
        $dlplkdym = "row";
        $ucwfkw = "data1";
        $GLOBALS["jeqbujotj"] = "SQLUsuario2";
        $hvkqcajt = "tipo";
        $rttmfpms = "row";
        $GLOBALS["bdbzaimnddk"] = "SQLUsuario2";
        $GLOBALS["cyfyqmy"] = "data2";
        $SQLUsuario2 = "SELECT * FROM usuario   where  id_usuario = '" . $row["usuario_id"] . "'";
        $GLOBALS["miystijmxtj"] = "SQLUsuario2";
        $clomdrvt = "mes";
        $GLOBALS["jupvtt"] = "row";
        $qnpexn = "row";
        $GLOBALS["kebbiwgojqo"] = "row";
        $GLOBALS["havwcuhk"] = "ano";
        $jinxrplmjwn = "tipo";
        $SQLUsuario2 = $conn->prepare($SQLUsuario2);
        $SQLUsuario2->execute();
        ${$GLOBALS["ubdmkpelq"]} = $SQLUsuario2->fetch();
        $GLOBALS["ducolprpfbk"] = "row";
        switch (${$GLOBALS["jupvtt"]}["tipo"]) {
            case "contassh":
                ${$hvkqcajt} = "SSH";
                break;
            case "revendassh":
                ${$jinxrplmjwn} = "REVENDA SSH";
                break;
            case "usuariossh":
                ${$GLOBALS["rluqqcyjf"]} = "USU\xc3\x81RIO SSH";
                break;
            case "servidor":
                ${$GLOBALS["rluqqcyjf"]} = "SERVIDOR";
                break;
            case "outros":
                ${$GLOBALS["rluqqcyjf"]} = "SUPORTE";
                break;
            default:
                ${$GLOBALS["dbrumw"]} = "Erro";
                break;
        }
        ${$ucwfkw} = explode(" ", ${$GLOBALS["xbujajpcng"]}["data"]);
        $imlevvlhhqd = "tipo";
        ${$GLOBALS["wpzywh"]} = explode("-", ${$GLOBALS["upphpxwst"]}[0]);
        $dhxvugqkpy = "data2";
        ${$GLOBALS["turfnzoln"]} = ${$GLOBALS["hhqgpruzuf"]}[2];
        ${$GLOBALS["egwsrlzwr"]} = ${$GLOBALS["cyfyqmy"]}[1];
        ${$GLOBALS["havwcuhk"]} = ${$dhxvugqkpy}[0];
        echo "\n\n                                    <div class=\"modal fade\" id=\"squarespaceModal2";
        echo ${$GLOBALS["xbujajpcng"]}["id"];
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalLabel\" aria-hidden=\"true\">\n                                        <div class=\"modal-dialog\">\n                                            <div class=\"modal-content\">\n                                                <div class=\"modal-header\">\n                                                    <h3 class=\"modal-title\" id=\"lineModalLabel\">Encerrar Ticket</h3>\n                                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>\n                                                </div>\n                                                <div class=\"modal-body\">\n\n                                                    <!-- content goes here -->\n                                                    <form name=\"editaserver\" action=\"pages/chamados/encerrando_chamado.php\" method=\"post\">\n                                                        <input name=\"chamado\" type=\"hidden\" value=\"";
        $vluqvpgosl = "ano";
        echo ${$GLOBALS["kebbiwgojqo"]}["id"];
        echo "\">\n                                                        <input name=\"diretorio\" type=\"hidden\" value=\"../../home.php?page=chamados/abertas\">\n                                                        <div class=\"form-group\">\n                                                            <p>Tem certeza que deseja encerrar o Ticket?</p>\n                                                        </div>\n                                                </div>\n                                                <div class=\"modal-footer\">\n                                                    <div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"group button\">\n                                                        <div class=\"btn-group\" role=\"group\">\n                                                            <button class=\"btn btn-danger\">Encerrar Ticket</button>\n                                                            </form>\n                                                        </div>\n                                                    </div>\n                                                </div>\n                                            </div>\n                                        </div>\n                                    </div>\n\n                                    <div class=\"modal fade\" id=\"squarespaceModal";
        echo ${$GLOBALS["ducolprpfbk"]}["id"];
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalLabel\" aria-hidden=\"true\">\n                                        <div class=\"modal-dialog\">\n                                            <div class=\"modal-content\">\n                                                <div class=\"modal-header\">\n                                                    <h3 class=\"modal-title\" id=\"lineModalLabel\">Ticket suporte</h3>\n                                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>\n                                                </div>\n                                                <div class=\"modal-body\">\n\n                                                    <!-- content goes here -->\n\n                                                    <input name=\"chamado\" type=\"hidden\" value=\"";
        $vypajcbewk = "row";
        echo $row["id"];
        echo "\">\n                                                    <input name=\"diretorio\" type=\"hidden\" value=\"../../home.php?page=chamados/abertas\">\n                                                    <div class=\"mb-1\">\n                                                        <div class=\"form-group\">\n                                                            <label for=\"exampleInputEmail1\">Motivo</label>\n                                                            <input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" value=\"";
        $fopgkvqvpufq = "row";
        echo ${$GLOBALS["xbujajpcng"]}["motivo"];
        echo "\" disabled>\n                                                        </div>\n                                                    </div>\n                                                    <div class=\"mb-1\">\n                                                        <div class=\"form-group\">\n                                                            <label for=\"exampleInputEmail1\">Mensagem</label>\n                                                            <textarea class=\"form-control\" rows=5 cols=20 wrap=\"off\" disabled>";
        echo ${$GLOBALS["xbujajpcng"]}["mensagem"];
        $GLOBALS["qntkmvblniqp"] = "row";
        echo "</textarea>\n                                                        </div>\n                                                    </div>\n                                                    <div class=\"form-group\">\n                                                        <label for=\"exampleInputEmail1\">Aguardando Resposta</label>\n                                                        <p>Voc\xc3\xaa precisa aguardar uma Resposta do Administrador para Responder</p>\n                                                    </div>\n\n                                                </div>\n                                                <div class=\"modal-footer\">\n                                                    <div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"group button\">\n                                                        <div class=\"btn-group\" role=\"group\">\n                                                            <button class=\"btn btn-success\" data-dismiss=\"modal\">Confirmar</button>\n\n                                                        </div>\n                                                    </div>\n                                                </div>\n                                            </div>\n                                        </div>\n                                    </div>\n\n                                    <tr>\n                                        <td>#";
        echo ${$qnpexn}["id"];
        echo "</td>\n                                        <td><small class=\"label label-success\">";
        echo ucfirst($row["status"]);
        echo "</small></td>\n                                        <td>";
        echo ${$GLOBALS["xbujajpcng"]}["login"];
        echo "</td>\n                                        <td>";
        echo ${$imlevvlhhqd};
        echo "</td>\n                                        <td>";
        echo ${$GLOBALS["xbujajpcng"]}["motivo"];
        echo "</td>\n                                        <td>";
        echo ${$GLOBALS["turfnzoln"]};
        echo "/";
        echo ${$clomdrvt};
        echo " - ";
        echo $ano;
        echo "</td>\n\n                                        <td>\n                                        <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"First group\">\n                                            <a data-bs-toggle=\"modal\" data-bs-target=\"#squarespaceModal";
        echo $row["id"];
        echo "\" class=\"btn-sm btn-primary\"><i data-feather='edit-2'></i></a>&nbsp;&nbsp;&nbsp;\n                                            <a data-bs-toggle=\"modal\" data-bs-target=\"#squarespaceModal2";
        echo ${$dlplkdym}["id"];
        echo "\" class=\"btn-sm btn-danger\"><i data-feather='trash'></i></a>\n                                        </div>\n                                        </td>\n                                    </tr>\n\n                            ";
    }
}
echo "\n                        </tbody>\n                    </table>\n                </div>\n            </div>\n        </div>\n    </div>\n</section>\n";
