<?php

$GLOBALS["rhhlelaqord"] = "revendedor";
$GLOBALS["vopzcmn"] = "SQLRevendedor";
$GLOBALS["keryryu"] = "subrev";
$GLOBALS["nfchpyoqymc"] = "SQLAcessoSSH";
$GLOBALS["gethtyloek"] = "total_acesso_ssh";
$GLOBALS["qeujlrxotr"] = "SQLServidores";
$GLOBALS["gcogrsqvy"] = "SQLContasSSH";
$GLOBALS["sjdnsgmn"] = "info";
$GLOBALS["bhladj"] = "servidores";
$GLOBALS["wmkzhraud"] = "contas";
$GLOBALS["qjurbruudc"] = "status";
$GLOBALS["fuffbhxk"] = "stsd";
$GLOBALS["fyeyvuduhka"] = "dias_acesso";
$GLOBALS["wbisusimf"] = "row";
$GLOBALS["nidzfvqu"] = "data_atual";
$GLOBALS["eoffnc"] = "usuario";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/revendedores.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
$olyhesec = "SQLUsuario";
protegePagina("user");
$GLOBALS["kovbridol"] = "usuario";
if ($usuario["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
$GLOBALS["yshojlkuqm"] = "SQLUsuario";
echo "<style>\n.card-datatable {\npadding-left: 5px;\npadding-right: 5px;\n}\n</style>\n<section id=\"complex-header-datatable\">\n<div class=\"row\">\n<div class=\"col-12\">\n<div class=\"card\">\n<div class=\"card-header border-bottom\">\n<h4 class=\"card-title\">Revendedores</h4>\n</div>\n<div class=\"card-datatable\">\n<table id=\"example\" class=\"table\">\n<thead>\n<tr>\n<th>STATUS</th>\n<th>DONO</th>\n<th>NOME</th>\n<th>LOGIN</th>\n<th>SENHA</th>\n<th>SUB.REVENDA</th>\n<th>SSH</th>\n<th>USADO</th>\n<th>VALIDADE</th>\n<th>SERVIDORES</th>\n<th>OP\xc3\x87\xc3\x95ES</th>\n</tr>\n</thead>\n<tbody id=\"myTable\">\n";
${$olyhesec} = "SELECT * FROM usuario where id_mestre='" . ${$GLOBALS["eoffnc"]}["id_usuario"] . "' ORDER BY ativo ";
$jqyanzvvvu = "SQLUsuario";
$SQLUsuario = $conn->prepare(${$GLOBALS["yshojlkuqm"]});
$SQLUsuario->execute();
if ($SQLUsuario->rowCount() > 0) {
    $pvbbdnk = "row";
    while (${$pvbbdnk} = $SQLUsuario->fetch()) {
        $GLOBALS["xjywbbxhvyvo"] = "SQLContasSSH";
        $GLOBALS["glsbesruzlq"] = "data_atual";
        $GLOBALS["fdsjlnugihxk"] = "dias_acesso";
        $pvjkqnix = "dias_acesso";
        $GLOBALS["oqnzdpfyib"] = "data_validade";
        $GLOBALS["cstlnptyaod"] = "data_validade";
        ${$GLOBALS["nidzfvqu"]} = date("Y-m-d H:i:s");
        $GLOBALS["xjmxrmn"] = "dias_acesso";
        $GLOBALS["lkuksllhnfo"] = "row";
        $vwolfqf = "info";
        ${$GLOBALS["oqnzdpfyib"]} = ${$GLOBALS["wbisusimf"]}["validade"];
        $ukcxgoa = "contas";
        if (${$GLOBALS["cstlnptyaod"]} > ${$GLOBALS["glsbesruzlq"]}) {
            $GLOBALS["tntrbhl"] = "diferenca";
            $GLOBALS["cnbzmjwh"] = "diferenca";
            $bhoyvivkwje = "data_validade";
            $rlqovpsw = "dias_acesso";
            $diferenca = strtotime($data_validade) - strtotime(${$GLOBALS["nidzfvqu"]});
            $dias_acesso = floor($diferenca / 86400);
        } else {
            ${$GLOBALS["fyeyvuduhka"]} = 0;
        }
        $GLOBALS["tonjqno"] = "class";
        $kwedlunkbvb = "color";
        $cyeklubhf = "owner";
        $lkpbpiqx = "row";
        if (${$GLOBALS["fdsjlnugihxk"]} > 10) {
            ${$GLOBALS["fuffbhxk"]} = "info";
        } elseif (${$pvjkqnix} == 0) {
            $GLOBALS["tpnrvfnvb"] = "stsd";
            $stsd = "danger";
        } else {
            ${$GLOBALS["fuffbhxk"]} = "warning";
        }
        ${$GLOBALS["tonjqno"]} = "class='btn btn-danger'";
        $ewtbeme = "row";
        $GLOBALS["tmhlclch"] = "row";
        $GLOBALS["dwbeuqqono"] = "owner";
        $GLOBALS["qrrfkryewdbs"] = "row";
        $GLOBALS["vmhmcheld"] = "SQLAcessoSSH";
        ${$GLOBALS["qjurbruudc"]} = "";
        ${$kwedlunkbvb} = "";
        $ycvpxwmx = "row";
        ${$GLOBALS["wmkzhraud"]} = 0;
        ${$GLOBALS["bhladj"]} = 0;
        $GLOBALS["shubswbwt"] = "SQLAcessoSSH";
        if (${$ewtbeme}["ativo"] == 1) {
            $mtposyyokom = "status";
            $GLOBALS["ichbqwgvfp"] = "class";
            $GLOBALS["kdqrpakpg"] = "sts";
            $status = "Ativo";
            $sts = "success";
            ${$GLOBALS["sjdnsgmn"]} = "info";
            ${$GLOBALS["ichbqwgvfp"]} = "class='btn-sm btn-primary'";
        } else {
            $GLOBALS["sucpuytyso"] = "status";
            $rrqddokf = "color";
            $GLOBALS["yfmbungwj"] = "sts";
            $GLOBALS["qnoimsknct"] = "info";
            $status = "Desativado";
            $sts = "danger";
            $info = "danger";
            $color = "bgcolor='#FF6347'";
        }
        ${$GLOBALS["gcogrsqvy"]} = "select * from conta_ssh WHERE id_usuario = '" . ${$GLOBALS["qrrfkryewdbs"]}["id_usuario"] . "'";
        ${$GLOBALS["xjywbbxhvyvo"]} = $conn->prepare(${$GLOBALS["gcogrsqvy"]});
        $SQLContasSSH->execute();
        ${$ukcxgoa} += $SQLContasSSH->rowCount();
        $GLOBALS["nuvcxhppkox"] = "info";
        $GLOBALS["ebwpgjtuuj"] = "SQLAcessoSSH";
        $GLOBALS["mtriiaf"] = "SQLServidores";
        $GLOBALS["tjgdwoy"] = "row";
        ${$GLOBALS["qeujlrxotr"]} = "select * from acesso_servidor WHERE id_usuario = '" . ${$lkpbpiqx}["id_usuario"] . "' ORDER BY id_usuario desc";
        ${$GLOBALS["mtriiaf"]} = $conn->prepare(${$GLOBALS["qeujlrxotr"]});
        $SQLServidores->execute();
        ${$GLOBALS["bhladj"]} += $SQLServidores->rowCount();
        ${$GLOBALS["gethtyloek"]} = 0;
        ${$GLOBALS["nfchpyoqymc"]} = "SELECT sum(acesso) AS quantidade FROM conta_ssh where id_usuario='" . ${$GLOBALS["wbisusimf"]}["id_usuario"] . "'";
        $jpxvwhbonx = "row";
        ${$GLOBALS["vmhmcheld"]} = $conn->prepare(${$GLOBALS["nfchpyoqymc"]});
        $SQLAcessoSSH->execute();
        ${$GLOBALS["ebwpgjtuuj"]} = $SQLAcessoSSH->fetch();
        $GLOBALS["zfxkgrdksg"] = "SQLAcessoSSH";
        $GLOBALS["ghduehwyxbgj"] = "servidores";
        ${$GLOBALS["gethtyloek"]} += ${$GLOBALS["nfchpyoqymc"]}["quantidade"];
        $GLOBALS["mciqokm"] = "row";
        ${$GLOBALS["nfchpyoqymc"]} = "SELECT sum(qtd) AS limites from acesso_servidor WHERE id_mestre='" . ${$GLOBALS["wbisusimf"]}["id_usuario"] . "' ";
        ${$GLOBALS["shubswbwt"]} = $conn->prepare(${$GLOBALS["nfchpyoqymc"]});
        $SQLAcessoSSH->execute();
        $GLOBALS["vmeygnml"] = "row";
        $GLOBALS["dpyynylvb"] = "SQLRevendedor";
        ${$GLOBALS["nfchpyoqymc"]} = $SQLAcessoSSH->fetch();
        ${$GLOBALS["gethtyloek"]} += ${$GLOBALS["zfxkgrdksg"]}["limites"];
        if (${$GLOBALS["mciqokm"]}["subrevenda"] == "sim") {
            ${$GLOBALS["keryryu"]} = "Sim";
        } else {
            ${$GLOBALS["keryryu"]} = "N\xc3\xa3o";
        }
        ${$GLOBALS["dpyynylvb"]} = "select * from usuario WHERE id_usuario = '" . ${$GLOBALS["wbisusimf"]}["id_mestre"] . "'";
        ${$GLOBALS["vopzcmn"]} = $conn->prepare(${$GLOBALS["vopzcmn"]});
        $GLOBALS["iilfbtxghn"] = "info";
        $SQLRevendedor->execute();
        ${$GLOBALS["rhhlelaqord"]} = $SQLRevendedor->fetch();
        ${$GLOBALS["dwbeuqqono"]} = ${$GLOBALS["rhhlelaqord"]}["login"];
        echo "<div class=\"modal fade\" id=\"squarespaceModal";
        echo ${$jpxvwhbonx}["id_usuario"];
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalLabel\" aria-hidden=\"true\">\n<div class=\"modal-dialog\">\n<div class=\"modal-content\">\n<div class=\"modal-header\">\n<h3 class=\"modal-title\" id=\"lineModalLabel\">Notificar Usu\xc3\xa1rio</h3>\n</div>\n<div class=\"modal-body\">\n<!-- content goes here -->\n<form action=\"pages/usuario/notifica_sub.php\" method=\"post\">\n<div class=\"mb-1\">\n<input name=\"idsubrev\" type=\"hidden\" value=\"";
        $GLOBALS["wenkatenfle"] = "row";
        $vyhopqt = "sts";
        echo ${$GLOBALS["tmhlclch"]}["id_usuario"];
        echo "\">\n<div class=\"form-group\">\n<label for=\"exampleInputEmail1\">Usu\xc3\xa1rio</label>\n<input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" value=\"";
        echo ${$GLOBALS["vmeygnml"]}["nome"];
        echo "\" disabled>\n</div>\n</div>\n<div class=\"form-group\">\n<div class=\"mb-1\">\n<label for=\"exampleInputEmail1\">Tipo de Alerta</label>\n<select size=\"1\" name=\"tipo\" class=\"form-select\">\n<option value=\"1\" selected=selected>Aviso</option>\n<option value=\"2\">Outros</option>\n</select>\n</div>\n</div>\n<div class=\"form-group\">\n<label for=\"exampleInputEmail1\">Mensagem</label>\n<textarea class=\"form-control\" name=\"msg\" rows=5 cols=20 wrap=\"off\" placeholder=\"Digite...\" required></textarea>\n</div>\n</div>\n<div class=\"modal-footer\">\n<button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\" aria-label=\"Close\">Cancelar</button>\n<button class=\"btn btn-success\">Confirmar</button>\n</form>\n</div>\n</div>\n</div>\n</div>\n<div class=\"modal fade\" id=\"criarfatura";
        echo ${$GLOBALS["lkuksllhnfo"]}["id_usuario"];
        $bykpywxvclkp = "info";
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalLabel\" aria-hidden=\"true\" style=\"display: none;\">\n<div class=\"modal-dialog\">\n<div class=\"modal-content\">\n<div class=\"modal-header\">\n<h3 class=\"modal-title\" id=\"lineModalLabel\"><i class=\"fa fa-money\"></i>Cria uma Fatura</h3>\n</div>\n<div class=\"modal-body\">\n<!-- content goes here -->\n<form name=\"editaserver\" action=\"pages/subrevenda/criafatura_subrv.php\" method=\"post\">\n<input name=\"idcontausuario\" type=\"hidden\" value=\"";
        echo ${$GLOBALS["wbisusimf"]}["id_usuario"];
        echo "\">\n<div class=\"form-group\">\n<label for=\"exampleInputEmail1\">Usu\xc3\xa1rio</label>\n<input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" value=\"";
        echo $row["nome"];
        echo "\" disabled=\"\">\n</div>\n<div class=\"form-group\">\n<label for=\"exampleInputEmail1\">Tipo</label>\n<select size=\"1\" name=\"tipo\" class=\"form-select\">\n<option value=\"3\" selected=selected>Revenda</option>\n<option value=\"2\">Outros</option>\n</select>\n</div>\n<div class=\"form-group\">\n<label for=\"exampleInputEmail1\">Valor</label>\n<input type=\"number\" class=\"form-control\" name=\"valor\" value=\"1\">\n</div>\n<div class=\"form-group\">\n<label for=\"exampleInputPassword1\">Desconto</label>\n<input type=\"number\" class=\"form-control\" name=\"desconto\" value=\"0\">\n</div>\n<div class=\"form-group\">\n<label for=\"exampleInputEmail1\">Prazo</label>\n<input type=\"number\" class=\"form-control\" name=\"prazo\" value=\"1\">\n</div>\n<div class=\"form-group\">\n<label for=\"exampleInputPassword1\">Descri\xc3\xa7\xc3\xa3o</label>\n<textarea class=\"form-control\" name=\"msg\" rows=\"3\" cols=\"20\" wrap=\"off\" placeholder=\"Digite...\"></textarea>\n</div>\n</div>\n<div class=\"modal-footer\">\n<button type=\"button\" class=\"btn btn-success\">Confirmar</button>\n<button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\" aria-label=\"Close\">Cancelar</button>\n</div>\n</form>\n</div>\n</div>\n</div>\n<tr>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-glow bg-";
        echo $sts;
        echo "\">\n";
        echo ${$GLOBALS["qjurbruudc"]};
        echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-light-warning\">\n";
        if (${$cyeklubhf} != "") {
            $GLOBALS["yskrxmodccp"] = "owner";
            echo $owner;
        } else {
            echo "Sistema\n";
        }
        echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-light-";
        echo ${$GLOBALS["nuvcxhppkox"]};
        echo "\">\n";
        echo ${$GLOBALS["tjgdwoy"]}["nome"];
        echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-light-";
        echo ${$vwolfqf};
        echo "\">\n";
        echo ${$GLOBALS["wbisusimf"]}["login"];
        echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-light-";
        echo ${$GLOBALS["sjdnsgmn"]};
        echo "\">\n";
        echo ${$GLOBALS["wbisusimf"]}["senha"];
        echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n";
        if (${$GLOBALS["keryryu"]} == "Sim") {
            echo "<span class=\"badge badge-light-success\">\n";
            echo ${$GLOBALS["keryryu"]};
        } else {
            echo "<span class=\"badge badge-light-danger\">\n";
            echo ${$GLOBALS["keryryu"]};
        }
        echo "</span>\n</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-light-";
        echo ${$GLOBALS["iilfbtxghn"]};
        echo "\">\n";
        echo ${$GLOBALS["wmkzhraud"]};
        echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-light-";
        echo ${$GLOBALS["sjdnsgmn"]};
        echo "\">\n";
        echo ${$GLOBALS["gethtyloek"]};
        echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 5px;\">\n";
        if (${$GLOBALS["xjmxrmn"]} > 1) {
            $GLOBALS["zddytgigl"] = "dias_acesso";
            echo "<span class=\"badge badge-light-";
            echo ${$GLOBALS["fuffbhxk"]};
            echo "\">";
            echo $dias_acesso;
            echo "<b> dias</b></span>\n";
        } else {
            $GLOBALS["psuctwtv"] = "stsd";
            echo "<span class=\"badge badge-light-";
            echo $stsd;
            echo "\">";
            echo ${$GLOBALS["fyeyvuduhka"]};
            echo "<b> dia</b></span>\n";
        }
        echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-light-";
        echo ${$bykpywxvclkp};
        echo "\">\n";
        echo ${$GLOBALS["ghduehwyxbgj"]};
        echo "</span>\n</span>\n</td>\n<td>\n<div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">\n<a href=\"home.php?page=usuario/perfil&id_usuario=";
        echo ${$GLOBALS["wbisusimf"]}["id_usuario"];
        echo "\" class=\"btn-sm btn-primary\"><i data-feather='edit'></i></a>&nbsp;&nbsp;&nbsp;\n<a data-bs-toggle=\"modal\" data-bs-target=\"#squarespaceModal";
        echo ${$ycvpxwmx}["id_usuario"];
        echo "\" class=\"btn-sm btn-warning\"><i data-feather='message-square'></i></a>\n</div>\n</td>\n</tr>\n";
    }
}
echo "</tbody>\n</table>\n</div>\n</div>\n</div>\n</div>\n</section>\n";
