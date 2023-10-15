<?php

$GLOBALS["nwnydmoegly"] = "mes";
$GLOBALS["dxlksjx"] = "data2";
$GLOBALS["nenlomv"] = "tipo";
$GLOBALS["liggvu"] = "row";
$GLOBALS["xchudivbe"] = "user2";
$GLOBALS["nosemgs"] = "SQLUsuario2";
$GLOBALS["jmwwbq"] = "SQLUsuario";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/respondidos.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
protegePagina("donoadmin");
$tzojdljvfi = "SQLUsuario";
echo "<style>\n    .card-datatable {\n        padding-left: 5px;\n        padding-right: 5px;\n    }\n</style>\n<section id=\"complex-header-datatable\">\n    <div class=\"row\">\n        <div class=\"col-12\">\n            <div class=\"card\">\n                <div class=\"card-header border-bottom\">\n                    <h4 class=\"card-title\">Tickets Respondidos</h4>\n                </div>\n                <div class=\"card-datatable\">\n                    <table id=\"example\" class=\"table\">\n                        <thead>\n                        <tr>\n                            <th>N\xc2\xb0 DE CHAMADO</th>\n                            <th>STATUS</th>\n                            <th>ABERTO POR</th>\n                            <th>MOTIVO</th>\n                            <th>ULTIMA ATUALIZACAO</th>\n                            <th>ACOES</th>\n                        </tr>\n                        </thead>\n                        <tbody id=\"myTable\">\n                        ";
$GLOBALS["itqrtbce"] = "SQLUsuario";
$SQLUsuario = "SELECT * FROM chamados   where  status = 'resposta' and id_mestre=0 ORDER BY id desc";
${$GLOBALS["jmwwbq"]} = $conn->prepare($SQLUsuario);
$SQLUsuario->execute();
if ($SQLUsuario->rowCount() > 0) {
    $GLOBALS["zkkrnltc"] = "row";
    while (${$GLOBALS["zkkrnltc"]} = $SQLUsuario->fetch()) {
        $wrodvdtz = "row";
        $ygdxjxrfyqgy = "tipo";
        $GLOBALS["bpamchy"] = "data2";
        $GLOBALS["tjllbuisfs"] = "SQLUsuario2";
        $GLOBALS["yveaxh"] = "SQLUsuario2";
        $SQLUsuario2 = "SELECT * FROM usuario   where  id_usuario = '" . $row["usuario_id"] . "'";
        $GLOBALS["eqnrodinx"] = "user2";
        $GLOBALS["rnofago"] = "tipo";
        $wfnqxdfws = "data1";
        $pqsvjfwn = "row";
        $GLOBALS["mwsqtyw"] = "ano";
        $GLOBALS["ddsbnwbrsvzj"] = "tipo";
        $kqshjmrn = "tipo";
        $innhotr = "dia";
        $GLOBALS["imfkjucw"] = "row";
        ${$GLOBALS["nosemgs"]} = $conn->prepare($SQLUsuario2);
        $SQLUsuario2->execute();
        ${$GLOBALS["xchudivbe"]} = $SQLUsuario2->fetch();
        switch (${$GLOBALS["liggvu"]}["tipo"]) {
            case "contassh":
                ${$ygdxjxrfyqgy} = "SSH";
                break;
            case "revendassh":
                ${$kqshjmrn} = "REVENDA SSH";
                break;
            case "usuariossh":
                ${$GLOBALS["rnofago"]} = "USU\xc3\x81RIO SSH";
                break;
            case "servidor":
                ${$GLOBALS["nenlomv"]} = "SERVIDOR";
                break;
            case "outros":
                ${$GLOBALS["nenlomv"]} = "OUTROS";
                break;
            default:
                ${$GLOBALS["ddsbnwbrsvzj"]} = "Erro";
                break;
        }
        ${$wfnqxdfws} = explode(" ", ${$GLOBALS["liggvu"]}["data"]);
        $ervpplmvpwax = "dia";
        $GLOBALS["rtpnraqu"] = "row";
        $kumcbuhcu = "data2";
        $tiizipfent = "data1";
        ${$GLOBALS["dxlksjx"]} = explode("-", $data1[0]);
        ${$ervpplmvpwax} = ${$GLOBALS["bpamchy"]}[2];
        ${$GLOBALS["nwnydmoegly"]} = ${$GLOBALS["dxlksjx"]}[1];
        ${$GLOBALS["mwsqtyw"]} = ${$kumcbuhcu}[0];
        echo "                                <div class=\"modal fade\" id=\"squarespaceModal2";
        $GLOBALS["nskouip"] = "row";
        echo ${$GLOBALS["liggvu"]}["id"];
        $fqvqdslkxi = "row";
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalLabel\" aria-hidden=\"true\">\n                                    <div class=\"modal-dialog\">\n                                        <div class=\"modal-content\">\n                                            <div class=\"modal-header\">\n                                                <h3 class=\"modal-title\" id=\"lineModalLabel\"><i class=\"fa fa-info text-danger\"></i>Encerrar Ticket</h3>\n                                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>\n                                            </div>\n                                            <div class=\"modal-body\">\n                                                <form name=\"editaserver\" action=\"pages/chamados/encerrar_chamado.php\" method=\"post\">\n                                                    <input name=\"chamado\" type=\"hidden\" value=\"";
        $pxgjsguo = "row";
        echo ${$GLOBALS["imfkjucw"]}["id"];
        echo "\">\n                                                    <input name=\"diretorio\" type=\"hidden\" value=\"../../home.php?page=chamados/respondidos\">\n                                                    <div class=\"form-group\">\n                                                        <label for=\"exampleInputPassword1\">Deseja deixar uma Resposta?</label>\n                                                        <textarea class=\"form-control\" name=\"msg\" rows=5 cols=20 wrap=\"off\" placeholder=\"Resposta final opcional\"></textarea>\n                                                    </div>\n                                            </div>\n                                            <div class=\"modal-footer\">\n                                                <div class=\"btn-group btn-group-center\" role=\"group\" aria-label=\"group button\">\n                                                    <div class=\"btn-group\" role=\"group\">\n                                                        <button class=\"btn btn-danger\">Encerrar Ticket</button>\n                                                        </form>\n                                                    </div>\n                                                </div>\n                                            </div>\n                                        </div>\n                                    </div>\n                                </div>\n\n                                <div class=\"modal fade\" id=\"squarespaceModal";
        $GLOBALS["oilxllunssc"] = "row";
        echo ${$GLOBALS["liggvu"]}["id"];
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalLabel\" aria-hidden=\"true\">\n                                    <div class=\"modal-dialog\">\n                                        <div class=\"modal-content\">\n                                            <div class=\"modal-header\">\n                                                <h3 class=\"modal-title\" id=\"lineModalLabel\"><i class=\"fa fa-info\"></i> Informa\xc3\xa7\xc3\xb5es do Ticket</h3>\n                                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>\n                                            </div>\n                                            <div class=\"modal-body\">\n                                                <!-- content goes here -->\n                                                <form action=\"pages/chamados/responder_chamado.php\" method=\"post\">\n                                                    <input name=\"chamado\" type=\"hidden\" value=\"";
        echo ${$GLOBALS["rtpnraqu"]}["id"];
        $GLOBALS["mquydyyg"] = "row";
        echo "\">\n                                                    <input name=\"diretorio\" type=\"hidden\" value=\"../../home.php?page=chamados/respondidos\">\n                                                    <div class=\"form-group\">\n                                                        <label for=\"exampleInputEmail1\">Motivo</label>\n                                                        <input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" value=\"";
        $xebttnffivh = "row";
        $GLOBALS["nnjamjd"] = "ano";
        echo $row["motivo"];
        echo "\" disabled>\n                                                    </div>\n                                                    <div class=\"form-group\">\n                                                        <label for=\"exampleInputEmail1\">Mensagem</label>\n                                                        <textarea class=\"form-control\" rows=5 cols=20 wrap=\"off\" disabled>";
        echo $row["mensagem"];
        echo "</textarea>\n                                                    </div>\n                                                    <div class=\"form-group\">\n                                                        <label for=\"exampleInputPassword1\">Sua Resposta</label>\n                                                        <textarea class=\"form-control\" name=\"msg\" rows=5 cols=20 wrap=\"off\" placeholder=\"Deixe uma resposta para ele visualizar\" required>";
        echo $row["resposta"];
        echo "</textarea>\n                                                    </div>\n                                            </div>\n                                            <div class=\"modal-footer\">\n                                                <div class=\"col-12 text-center\">\n                                                    <button class=\"btn btn-success\">Responder</button>\n                                                    </form>\n                                                </div>\n                                            </div>\n                                            </form>\n                                        </div>\n                                    </div>\n                                </div>\n                                <tr>\n                                    <td>#";
        echo ${$pqsvjfwn}["id"];
        echo "</td>\n                                    <td><small class=\"label label-warning\">";
        echo ucfirst($row["status"]);
        echo "</small></td>\n                                    <td><a href=\"home.php?page=usuario/perfil&id_usuario=";
        echo ${$GLOBALS["eqnrodinx"]}["id_usuario"];
        echo "\">";
        echo ${$GLOBALS["xchudivbe"]}["nome"];
        echo "</a></td>\n                                    <td>";
        echo $row["motivo"];
        echo "</td>\n                                    <td>";
        echo ${$innhotr};
        echo "/";
        echo ${$GLOBALS["nwnydmoegly"]};
        echo " - ";
        echo $ano;
        echo "</td>\n                                    <td>\n                                        <a data-bs-toggle=\"modal\" data-bs-target=\"#squarespaceModal";
        echo $row["id"];
        echo "\" class=\"btn-sm btn-primary\"><i data-feather='eye'></i></a>\n                                        <a data-bs-toggle=\"modal\" data-bs-target=\"#squarespaceModal2";
        echo ${$GLOBALS["liggvu"]}["id"];
        echo "\" class=\"btn-sm btn-danger\"><i data-feather='trash'></i></a>\n                                    </td>\n                                </tr>\n                            ";
    }
}
echo "                        </tbody>\n                    </table>\n                </div>\n            </div>\n        </div>\n    </div>\n</section>\n";
