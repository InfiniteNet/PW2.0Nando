<?php

$GLOBALS["nybmjgehlb"] = "ano";
$GLOBALS["vsckpkhwsjjc"] = "data2";
$GLOBALS["vosyyswjis"] = "mes";
$GLOBALS["poeizndo"] = "dia";
$GLOBALS["egrmewjvd"] = "data1";
$GLOBALS["wcmdtlcf"] = "row";
$GLOBALS["szjaknrsffdw"] = "tipo";
$GLOBALS["joqfpnkbi"] = "user2";
$GLOBALS["biqvdoxnalw"] = "SQLUsuario2";
$GLOBALS["tgeyihnjge"] = "SQLUsuario";
$GLOBALS["hcenytmu"] = "usuario";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/respondidos.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
$GLOBALS["lkolqglp"] = "SQLUsuario";
protegePagina("user");
if (${$GLOBALS["hcenytmu"]}["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
echo "<style>\n    .card-datatable {\n        padding-left: 5px;\n        padding-right: 5px;\n    }\n</style>\n<section id=\"complex-header-datatable\">\n    <div class=\"row\">\n        <div class=\"col-12\">\n            <div class=\"card\">\n                <div class=\"card-header border-bottom\">\n                    <h4 class=\"card-title\">Tickets Respondidos</h4>\n                </div>\n                <div class=\"card-datatable\">\n                    <table id=\"example\" class=\"table\">\n                        <thead>\n                            <tr>\n                                <th>N\xc2\xb0 DE CHAMADO</th>\n                                <th>STATUS</th>\n                                <th>ABERTO POR</th>\n                                <th>TIPO</th>\n                                <th>MOTIVO</th>\n                                <th>ULTIMA ATUALIZACAO</th>\n                                <th>INFORMACOES</th>\n                            </tr>\n                        </thead>\n                        <tbody id=\"myTable\">\n                            ";
${$GLOBALS["tgeyihnjge"]} = "SELECT * FROM chamados   where  status = 'resposta' and usuario_id='" . $_SESSION["usuarioID"] . "' ORDER BY id desc";
${$GLOBALS["lkolqglp"]} = $conn->prepare(${$GLOBALS["tgeyihnjge"]});
$SQLUsuario->execute();
if ($SQLUsuario->rowCount() > 0) {
    $buuhstgfoai = "row";
    while (${$buuhstgfoai} = $SQLUsuario->fetch()) {
        $GLOBALS["gitjyrxwnwnn"] = "data2";
        $GLOBALS["pydcyomcg"] = "row";
        $GLOBALS["sskiciuv"] = "SQLUsuario2";
        $lcjgxpnr = "row";
        $GLOBALS["whqcsyijc"] = "data2";
        $sbcjxnvesuow = "row";
        $gigrkktk = "SQLUsuario2";
        $GLOBALS["dvcksoxqrpq"] = "tipo";
        $xhcmhagwermb = "tipo";
        $phdphvi = "row";
        $sgkepnypi = "data2";
        $SQLUsuario2 = "SELECT * FROM usuario   where  id_usuario = '" . $row["usuario_id"] . "'";
        ${$GLOBALS["biqvdoxnalw"]} = $conn->prepare($SQLUsuario2);
        $SQLUsuario2->execute();
        $tublvhunqr = "data1";
        $GLOBALS["dfjzjzxblmr"] = "tipo";
        ${$GLOBALS["joqfpnkbi"]} = $SQLUsuario2->fetch();
        switch (${$sbcjxnvesuow}["tipo"]) {
            case "contassh":
                ${$GLOBALS["dfjzjzxblmr"]} = "SSH";
                break;
            case "revendassh":
                ${$GLOBALS["szjaknrsffdw"]} = "REVENDA SSH";
                break;
            case "usuariossh":
                ${$GLOBALS["dvcksoxqrpq"]} = "USU\xc3\x81RIO SSH";
                break;
            case "servidor":
                ${$GLOBALS["szjaknrsffdw"]} = "SERVIDOR";
                break;
            case "outros":
                ${$xhcmhagwermb} = "OUTROS";
                break;
            default:
                ${$GLOBALS["szjaknrsffdw"]} = "Erro";
                break;
        }
        $jdxmgjmweedu = "row";
        ${$tublvhunqr} = explode(" ", ${$GLOBALS["wcmdtlcf"]}["data"]);
        ${$GLOBALS["gitjyrxwnwnn"]} = explode("-", ${$GLOBALS["egrmewjvd"]}[0]);
        ${$GLOBALS["poeizndo"]} = ${$sgkepnypi}[2];
        ${$GLOBALS["vosyyswjis"]} = ${$GLOBALS["vsckpkhwsjjc"]}[1];
        $leihevetg = "dia";
        ${$GLOBALS["nybmjgehlb"]} = ${$GLOBALS["whqcsyijc"]}[0];
        echo "\n\n                                    <div class=\"modal fade\" id=\"squarespaceModal2";
        echo ${$GLOBALS["wcmdtlcf"]}["id"];
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalLabel\" aria-hidden=\"true\">\n                                        <div class=\"modal-dialog\">\n                                            <div class=\"modal-content\">\n                                                <div class=\"modal-header\">\n                                                    <h3 class=\"modal-title\" id=\"lineModalLabel\">Encerrar</h3>\n                                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>\n                                                </div>\n                                                <div class=\"modal-body\">\n\n                                                    <!-- content goes here -->\n                                                    <form name=\"editaserver\" action=\"pages/chamados/encerrando_chamado.php\" method=\"post\">\n                                                        <input name=\"chamado\" type=\"hidden\" value=\"";
        $GLOBALS["agkojpghnm"] = "tipo";
        echo ${$jdxmgjmweedu}["id"];
        echo "\">\n                                                        <input name=\"diretorio\" type=\"hidden\" value=\"../../home.php?page=chamados/respondidos\">\n                                                        <div class=\"form-group\">\n                                                            <p>Tem certeza que deseja encerrar?</p>\n                                                        </div>\n\n                                                </div>\n                                                <div class=\"modal-footer\">\n                                                    <div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"group button\">\n                                                        <div class=\"btn-group\" role=\"group\">\n                                                            <button class=\"btn btn-danger\">Encerrar</button>\n                                                            </form>\n                                                        </div>\n                                                    </div>\n                                                </div>\n                                            </div>\n                                        </div>\n                                    </div>\n\n                                    <div class=\"modal fade\" id=\"squarespaceModal";
        echo ${$phdphvi}["id"];
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalLabel\" aria-hidden=\"true\">\n                                        <div class=\"modal-dialog\">\n                                            <div class=\"modal-content\">\n                                                <div class=\"modal-header\">\n                                                    <h3 class=\"modal-title\" id=\"lineModalLabel\">Informa\xc3\xa7\xc3\xb5es do ticket</h3>\n                                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>\n                                                </div>\n                                                <div class=\"modal-body\">\n                                                    <!-- content goes here -->\n                                                    <form action=\"pages/chamados/responder_chamado.php\" method=\"post\">\n                                                        <input name=\"chamado\" type=\"hidden\" value=\"";
        $hbarfdbbnut = "row";
        echo ${$lcjgxpnr}["id"];
        echo "\">\n                                                        <input name=\"diretorio\" type=\"hidden\" value=\"../../home.php?page=chamados/respondidos\">\n                                                        <div class=\"form-group mb-1\">\n                                                            <label for=\"exampleInputEmail1\">Resposta do Suporte</label>\n                                                            <textarea class=\"form-control\" rows=5 cols=20 wrap=\"off\" disabled>";
        $GLOBALS["iwtshvolctk"] = "row";
        echo ${$GLOBALS["wcmdtlcf"]}["resposta"];
        echo "</textarea>\n                                                        </div>\n                                                        <div class=\"form-group mb-1\">\n                                                            <label for=\"exampleInputEmail1\">Tipo</label>\n                                                            <select size=\"1\" class=\"form-select\" disabled>\n                                                                <option selected=selectes>";
        echo $tipo;
        echo "</option>\n                                                            </select>\n                                                        </div>\n                                                        <div class=\"form-group mb-1\">\n                                                            <label for=\"exampleInputPassword1\">Responder Novamente?</label>\n                                                            <textarea class=\"form-control\" name=\"msg\" rows=5 cols=20 wrap=\"off\" placeholder=\"Deixe uma resposta para ele visualizar\" required>";
        echo $row["mensagem"];
        echo "</textarea>\n                                                        </div>\n                                                </div>\n                                                <div class=\"modal-footer\">\n                                                    <div class=\"btn-group btn-group-justified\" role=\"group\" aria-label=\"group button\">\n                                                        <div class=\"btn-group\" role=\"group\">\n                                                            <button class=\"btn btn-success\">Responder</button>\n                                                            </form>\n                                                        </div>\n                                                    </div>\n                                                </div>\n                                            </div>\n                                        </div>\n                                    </div>\n\n                                    <tr>\n                                        <td>#";
        echo ${$GLOBALS["wcmdtlcf"]}["id"];
        echo "</td>\n                                        <td><small class=\"label label-warning\">";
        echo ucfirst(${$GLOBALS["wcmdtlcf"]}["status"]);
        echo "</small></td>\n                                        <td>";
        echo ${$GLOBALS["joqfpnkbi"]}["nome"];
        echo "</td>\n                                        <td>";
        echo ${$GLOBALS["szjaknrsffdw"]};
        echo "</td>\n                                        \n                                        <td>";
        echo ${$GLOBALS["wcmdtlcf"]}["motivo"];
        echo "</td>\n                                        <td>";
        echo ${$leihevetg};
        echo "/";
        echo ${$GLOBALS["vosyyswjis"]};
        echo " - ";
        echo ${$GLOBALS["nybmjgehlb"]};
        echo "</td>\n\n                                        <td>\n                                            <a data-bs-toggle=\"modal\" data-bs-target=\"#squarespaceModal";
        echo ${$GLOBALS["wcmdtlcf"]}["id"];
        echo "\" class=\"btn-sm btn-primary\"><i data-feather='eye'></i></a>&nbsp;&nbsp;&nbsp;\n                                            <a data-bs-toggle=\"modal\" data-bs-target=\"#squarespaceModal2";
        echo $row["id"];
        echo "\" class=\"btn-sm btn-danger\"><i data-feather='trash'></i></a>\n                                        </td>\n                                    </tr>\n\n                            ";
    }
}
echo "                        </tbody>\n                    </table>\n                </div>\n            </div>\n        </div>\n    </div>\n</section>\n";
