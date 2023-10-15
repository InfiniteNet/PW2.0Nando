<?php

$GLOBALS["rxpbevs"] = "mes";
$GLOBALS["cmtgmjvoms"] = "user2";
$GLOBALS["jjyexqu"] = "ano";
$GLOBALS["erxjqfoxykww"] = "data2";
$GLOBALS["cgheeyyrbkc"] = "dia";
$GLOBALS["ohfjeip"] = "data1";
$GLOBALS["tihzay"] = "tipo";
$GLOBALS["lteyqtbju"] = "row";
$GLOBALS["izcjsyuw"] = "SQLUsuario2";
$GLOBALS["xajblip"] = "SQLUsuario";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/abertas.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
protegePagina("donoadmin");
$GLOBALS["pitxphqznl"] = "SQLUsuario";
echo "<style>\n.card-datatable {\npadding-left: 5px;\npadding-right: 5px;\n}\n</style>\n<section id=\"complex-header-datatable\">\n<div class=\"row\">\n<div class=\"col-12\">\n<div class=\"card\">\n<div class=\"card-header border-bottom\">\n<h4 class=\"card-title\">Tickets Abertos</h4>\n</div>\n<div class=\"card-datatable\">\n<table id=\"example\" class=\"table\">\n<thead>\n<tr>\n<th>N\xc2\xb0 DE CHAMADO</th>\n<th>STATUS</th>\n<th>ABERTO POR</th>\n<th>MOTIVO</th>\n<th>ULTIMA ATUALIZACAO</th>\n<th>ACOES</th>\n</tr>\n</thead>\n<tbody>\n";
$GLOBALS["wuroxoar"] = "SQLUsuario";
$SQLUsuario = "SELECT * FROM chamados   where  status = 'aberto' and id_mestre=0 ORDER BY id desc";
$SQLUsuario = $conn->prepare(${$GLOBALS["xajblip"]});
$SQLUsuario->execute();
if ($SQLUsuario->rowCount() > 0) {
    $GLOBALS["yezxtdg"] = "row";
    while (${$GLOBALS["yezxtdg"]} = $SQLUsuario->fetch()) {
        $tdnkbvq = "tipo";
        $GLOBALS["jefyowvnpdph"] = "user2";
        $GLOBALS["euycejg"] = "data2";
        $mgnbqxyl = "tipo";
        $GLOBALS["acpsbuc"] = "row";
        ${$GLOBALS["izcjsyuw"]} = "SELECT * FROM usuario   where  id_usuario = '" . ${$GLOBALS["lteyqtbju"]}["usuario_id"] . "'";
        $GLOBALS["uruqttfyoe"] = "tipo";
        $tcglqhut = "row";
        ${$GLOBALS["izcjsyuw"]} = $conn->prepare(${$GLOBALS["izcjsyuw"]});
        $GLOBALS["qodsbrbfyoy"] = "tipo";
        $GLOBALS["mzaokygqo"] = "data2";
        $SQLUsuario2->execute();
        $ptdpmqqex = "tipo";
        $GLOBALS["sbtwvv"] = "row";
        ${$GLOBALS["jefyowvnpdph"]} = $SQLUsuario2->fetch();
        $GLOBALS["ksqpilteiou"] = "mes";
        switch (${$GLOBALS["lteyqtbju"]}["tipo"]) {
            case "contassh":
                ${$GLOBALS["uruqttfyoe"]} = "SSH";
                break;
            case "revendassh":
                ${$tdnkbvq} = "REVENDA SSH";
                break;
            case "usuariossh":
                ${$GLOBALS["qodsbrbfyoy"]} = "USU\xc3\x81RIO SSH";
                break;
            case "servidor":
                ${$ptdpmqqex} = "SERVIDOR";
                break;
            case "outros":
                ${$mgnbqxyl} = "OUTROS";
                break;
            default:
                ${$GLOBALS["tihzay"]} = "Erro";
                break;
        }
        $kkpueqcbtk = "row";
        ${$GLOBALS["ohfjeip"]} = explode(" ", ${$GLOBALS["sbtwvv"]}["data"]);
        $GLOBALS["ejdgexy"] = "ano";
        ${$GLOBALS["euycejg"]} = explode("-", ${$GLOBALS["ohfjeip"]}[0]);
        ${$GLOBALS["cgheeyyrbkc"]} = ${$GLOBALS["mzaokygqo"]}[2];
        ${$GLOBALS["ksqpilteiou"]} = ${$GLOBALS["erxjqfoxykww"]}[1];
        ${$GLOBALS["jjyexqu"]} = ${$GLOBALS["erxjqfoxykww"]}[0];
        echo "<div class=\"modal fade text-start\" id=\"squarespaceModal2";
        echo ${$GLOBALS["lteyqtbju"]}["id"];
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalLabel\" aria-hidden=\"true\">\n<div class=\"modal-dialog\">\n<div class=\"modal-content\">\n<div class=\"modal-header\">\n<h3 class=\"modal-title\" id=\"lineModalLabel\"><i class=\"fa fa-info\"></i> Encerrar Ticket</h3>\n<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>\n</div>\n<div class=\"modal-body\">\n<form name=\"editaserver\" action=\"pages/chamados/encerrar_chamado.php\" method=\"post\">\n<input name=\"chamado\" type=\"hidden\" value=\"";
        echo ${$kkpueqcbtk}["id"];
        echo "\">\n<input name=\"diretorio\" type=\"hidden\" value=\"../../home.php?page=chamados/abertas\">\n<div class=\"form-group\">\n<div class=\"mb-1\">\n<label for=\"exampleInputPassword1\">Deseja deixar uma Resposta?</label>\n</div>\n<textarea class=\"form-control\" name=\"msg\" rows=5 cols=20 wrap=\"off\" placeholder=\"Resposta final opcional\"></textarea>\n</div>\n</div>\n<div class=\"modal-footer\">\n<div class=\"btn-group btn-group-center\" role=\"group\" aria-label=\"group button\">\n<div class=\"btn-group\" role=\"group\">\n<button class=\"btn btn-danger\">Encerrar Ticket</button>\n</form>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n<div class=\"modal fade text-start\" id=\"squarespaceModal";
        echo ${$GLOBALS["acpsbuc"]}["id"];
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalLabel\" aria-hidden=\"true\">\n<div class=\"modal-dialog\">\n<div class=\"modal-content\">\n<div class=\"modal-header\">\n<h3 class=\"modal-title\" id=\"lineModalLabel\"><i class=\"fa fa-info\"></i> Informa\xc3\xa7\xc3\xb5es do Ticket</h3>\n<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>\n</div>\n<div class=\"modal-body\">\n<form action=\"pages/chamados/responder_chamado.php\" method=\"post\">\n<input name=\"chamado\" type=\"hidden\" value=\"";
        echo ${$GLOBALS["lteyqtbju"]}["id"];
        echo "\">\n<input name=\"diretorio\" type=\"hidden\" value=\"../../home.php?page=chamados/abertas\">\n<div class=\"form-group\">\n<label for=\"exampleInputEmail1\">Motivo</label>\n<input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" value=\"";
        echo ${$tcglqhut}["motivo"];
        echo "\" disabled>\n</div>\n<div class=\"form-group\">\n<label for=\"exampleInputEmail1\">Mensagem</label>\n<textarea class=\"form-control\" rows=5 cols=20 wrap=\"off\" disabled>";
        $GLOBALS["vfobily"] = "row";
        $GLOBALS["tkiqjcrmxrbh"] = "dia";
        echo ${$GLOBALS["lteyqtbju"]}["mensagem"];
        echo "</textarea>\n</div>\n<div class=\"form-group\">\n<label for=\"exampleInputPassword1\">Sua Resposta</label>\n<textarea class=\"form-control\" name=\"msg\" rows=5 cols=20 wrap=\"off\" placeholder=\"Deixe uma resposta para ele visualizar\" required>";
        $helppcz = "row";
        echo ${$GLOBALS["lteyqtbju"]}["resposta"];
        echo "</textarea>\n</div>\n</div>\n<div class=\"modal-footer\">\n<div class=\"col-12 text-center\">\n<button class=\"btn btn-success\">Responder</button>\n</form>\n</div>\n</div>\n</div>\n</div>\n</div>\n<tr>\n<td>#";
        echo ${$GLOBALS["lteyqtbju"]}["id"];
        echo "</td>\n<td><small class=\"label label-success\">";
        echo ucfirst($row["status"]);
        echo "</small></td>\n<td><a href=\"home.php?page=usuario/perfil&id_usuario=";
        echo ${$GLOBALS["cmtgmjvoms"]}["id_usuario"];
        echo "\">";
        echo ${$GLOBALS["cmtgmjvoms"]}["nome"];
        echo "</a></td>\n<td>";
        echo $row["motivo"];
        echo "</td>\n<td>";
        echo $dia;
        echo "/";
        echo ${$GLOBALS["rxpbevs"]};
        echo " - ";
        echo ${$GLOBALS["ejdgexy"]};
        echo "</td>\n<td>\n<a data-bs-toggle=\"modal\" data-bs-target=\"#squarespaceModal";
        echo ${$GLOBALS["lteyqtbju"]}["id"];
        echo "\" class=\"btn-sm btn-primary\"><i data-feather='eye'></i></a>\n<a data-bs-toggle=\"modal\" data-bs-target=\"#squarespaceModal2";
        echo ${$GLOBALS["lteyqtbju"]}["id"];
        echo "\" class=\"btn-sm btn-danger\"><i data-feather='trash'></i></a>\n</td>\n</tr>\n";
    }
}
echo "</tbody>\n</table>\n</div>\n</div>\n</div>\n</div>\n</section>\n";
