<?php

$GLOBALS["xzjxjvnicl"] = "stsd";
$GLOBALS["bxeuwjpok"] = "dias_acesso";
$GLOBALS["ugymtqmck"] = "diferenca";
$GLOBALS["itwyhvpgr"] = "data_atual";
$GLOBALS["wccpzhfl"] = "revendedor";
$GLOBALS["xwtqthson"] = "SQLRevendedor";
$GLOBALS["kwqhuuhqfl"] = "color";
$GLOBALS["icgovqt"] = "sts";
$GLOBALS["fcngcnm"] = "owner";
$GLOBALS["mivhdrv"] = "status";
$GLOBALS["qyqimqddb"] = "info";
$GLOBALS["mbwpwwc"] = "row";
$GLOBALS["lmopktyvcu"] = "SQLSSH";
$GLOBALS["sbehgxgbajq"] = "accessKEY";
$GLOBALS["ocqkexg"] = "conta_ssh";
$GLOBALS["seoehehrd"] = "SQLUsuarioSSH";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"../../../app-assets/css/plugins/extensions/ext-component-sweet-alerts.css\">\n<script src=\"../../../app-assets/js/scripts/extensions/ext-component-sweet-alerts.js\"></script>\n<script src=\"../../../app-assets/vendors/js/extensions/sweetalert2.all.min.js\"></script>\n";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/suspenso.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
$lggfjfxmzws = "conta_ssh";
$iumpbpjigiqb = "SQLUsuarioSSH";
protegePagina("donoadmin");
$SQLUsuarioSSH = "SELECT * FROM conta_ssh where data_validade < NOW() - INTERVAL 1 DAY and data_suspensao < NOW() - INTERVAL 5 DAY and status >= '2'";
$fqbwwy = "SQLUsuarioSSH";
$SQLUsuarioSSH = $conn->prepare(${$GLOBALS["seoehehrd"]});
$SQLUsuarioSSH->execute();
$conta_ssh = $SQLUsuarioSSH->fetch();
echo "<script type=\"text/javascript\" src=\"../../app-assets/plugins/sort-table.js\"></script>\n<script>\n\$(document).ready(function() {\n\$(\"#myInput\").on(\"keyup\", function() {\nvar value = \$(this).val().toLowerCase();\n\$(\"#myTable tr\").filter(function() {\n\$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)\n});\n});\n});\n</script>\n<style>\n.card-datatable {\npadding-left: 5px;\npadding-right: 5px;\n}\n</style>\n<div class=\"active\"><a class=\"d-flex align-items-center\" href=\"home.php\"><i data-feather=\"home\"></i><span class=\"menu-title text-truncate\" data-i18n=\"Dashboards\">DASHBOARD</span></a>\n</div>\n<section id=\"complex-header-datatable\">\n<div class=\"row\">\n<div class=\"col-12\">\n<div class=\"card\">\n<div class=\"card-header border-bottom\">\n<h4 class=\"card-title\">Contas SSH suspensas</h4>\n</div>\n<div class=\"card-content\">\n<div class=\"card-body\">\n<div class=\"col-12\"><br>\n<div class=\"form-responsive\">\n<form role=\"form2\" action=\"../pages/system/funcoes.conta.ssh.php\" method=\"post\" class=\"form-horizontal\">\n<div class=\"box-footer\">\n<input type=\"hidden\" id=\"diretorio\" name=\"diretorio\" value=\"../../admin/home.php?page=ssh/suspenso\">\n<input type=\"hidden\" id=\"id_usuario_ssh\" name=\"id_usuario_ssh\" value=\"";
$GLOBALS["ltnwqjcktwu"] = "SQLSSH";
echo ${$GLOBALS["ocqkexg"]}["id_usuario_ssh"];
echo "\">\n<input type=\"hidden\" id=\"owner\" name=\"owner\" value=\"";
echo ${$GLOBALS["sbehgxgbajq"]};
echo "\">\n<br><ul class=\"list-group\">\n<li class=\"list-group mb-1\">\n<center><button type=\"submit\" class=\"btn btn-danger\" id=\"op\" name=\"op\" value=\"deletarsusp\"><i data-feather='trash'></i>Deletar Contas Suspensas</button></center>\n</li>\n</ul>\n</div>\n</form>\n</div>\n</div>\n</div>\n</div>\n<div class=\"card-datatable\">\n<table id=\"example\" class=\"table\">\n<thead>\n<tr>\n<th>SERVIDOR</th>\n<th>DONO</th>\n<th>LOGIN</th>\n<th>VALIDADE</th>\n<th>STATUS</th>\n<th>DATA SUSPENSS\xc3\x83O</th>\n<th>OP\xc3\x87\xc3\x95ES</th>\n</tr>\n</thead>\n<tbody id=\"myTable\">\n";
$SQLSSH = "SELECT * FROM conta_ssh , servidor  where conta_ssh.id_servidor = servidor.id_servidor and  conta_ssh.status >= '2' ORDER BY data_suspensao ASC";
${$GLOBALS["lmopktyvcu"]} = $conn->prepare(${$GLOBALS["lmopktyvcu"]});
$SQLSSH->execute();
if ($SQLSSH->rowCount() > 0) {
    while (${$GLOBALS["mbwpwwc"]} = $SQLSSH->fetch()) {
        $oagrcc = "class";
        $GLOBALS["zofxhlbk"] = "row";
        $class = "class='btn-sm btn-primary waves-effect waves-float waves-light'";
        ${$GLOBALS["qyqimqddb"]} = "info";
        ${$GLOBALS["mivhdrv"]} = "";
        ${$GLOBALS["fcngcnm"]} = "";
        $GLOBALS["ivvjnguvi"] = "color";
        $color = "";
        $GLOBALS["uvtxbuoilxd"] = "info";
        if (${$GLOBALS["mbwpwwc"]}["status"] == 1) {
            $GLOBALS["lwgcllc"] = "status";
            $status = "Ativo";
            ${$GLOBALS["icgovqt"]} = "success";
        } else {
            if (${$GLOBALS["mbwpwwc"]}["status"] == 2) {
                $GLOBALS["rolmhhqvixs"] = "sts";
                $gsqgflcp = "color";
                ${$GLOBALS["mivhdrv"]} = "Suspenso";
                ${$GLOBALS["rolmhhqvixs"]} = "danger";
                ${$gsqgflcp} = "bgcolor=''";
            }
        }
        if (${$GLOBALS["zofxhlbk"]}["status"] == 3) {
            ${$GLOBALS["mivhdrv"]} = "Excluindo";
            ${$GLOBALS["icgovqt"]} = "danger";
            ${$GLOBALS["kwqhuuhqfl"]} = "bgcolor=''";
        }
        $GLOBALS["lemreugkycm"] = "data_validade";
        $GLOBALS["netblmov"] = "data_validade";
        $kbexalnd = "data_atual";
        $qvenhgnsg = "dias_acesso";
        $GLOBALS["ghvxgipcpz"] = "row";
        if (${$GLOBALS["mbwpwwc"]}["id_usuario"] == 0) {
            $GLOBALS["rttbnby"] = "owner";
            $owner = "Sistema";
        } else {
            $GLOBALS["wyoqhsq"] = "owner";
            ${$GLOBALS["xwtqthson"]} = "select * from usuario WHERE id_usuario = '" . ${$GLOBALS["mbwpwwc"]}["id_usuario"] . "'";
            $nkkydiiai = "revendedor";
            ${$GLOBALS["xwtqthson"]} = $conn->prepare(${$GLOBALS["xwtqthson"]});
            $SQLRevendedor->execute();
            ${$GLOBALS["wccpzhfl"]} = $SQLRevendedor->fetch();
            ${$GLOBALS["wyoqhsq"]} = ${$nkkydiiai}["login"];
        }
        ${$kbexalnd} = date("Y-m-d ");
        ${$GLOBALS["netblmov"]} = ${$GLOBALS["mbwpwwc"]}["data_validade"];
        if (${$GLOBALS["lemreugkycm"]} > ${$GLOBALS["itwyhvpgr"]}) {
            $GLOBALS["idujrumann"] = "data_validade";
            $sjpxsdnucmmu = "data_atual";
            ${$GLOBALS["ugymtqmck"]} = strtotime($data_validade) - strtotime($data_atual);
            ${$GLOBALS["bxeuwjpok"]} = floor(${$GLOBALS["ugymtqmck"]} / 86400);
        } else {
            $GLOBALS["cjgpliijmu"] = "dias_acesso";
            $dias_acesso = 0;
        }
        if (${$qvenhgnsg} > 10) {
            ${$GLOBALS["xzjxjvnicl"]} = "info";
        } elseif (${$GLOBALS["bxeuwjpok"]} == 0) {
            ${$GLOBALS["xzjxjvnicl"]} = "danger";
        } else {
            ${$GLOBALS["xzjxjvnicl"]} = "warning";
        }
        echo "<tr>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\"><span class=\"badge badge-light-";
        echo ${$GLOBALS["qyqimqddb"]};
        $GLOBALS["hacdsrfgmnu"] = "class";
        echo "\">";
        $ulgjsdrehue = "row";
        echo $row["nome"];
        echo "</span></span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\"><span class=\"badge badge-light-warning\">";
        echo ${$GLOBALS["fcngcnm"]};
        echo "</span></span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\"><span class=\"badge badge-light-";
        echo ${$GLOBALS["uvtxbuoilxd"]};
        echo "\">";
        echo ${$GLOBALS["ghvxgipcpz"]}["login"];
        echo "</span></span>\n</td>\n<td>\n";
        if (${$GLOBALS["bxeuwjpok"]} > 1) {
            echo "<span class=\"badge badge-light-";
            echo ${$GLOBALS["xzjxjvnicl"]};
            echo "\">";
            echo ${$GLOBALS["bxeuwjpok"]};
            echo "<b> dias</b></span>\n";
        } else {
            $zttnvlyrndb = "stsd";
            echo "<span class=\"badge badge-light-";
            echo $stsd;
            echo "\">";
            echo ${$GLOBALS["bxeuwjpok"]};
            echo "<b> dia</b></span>\n";
        }
        echo "</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\"><span class=\"badge badge-glow bg-";
        echo ${$GLOBALS["icgovqt"]};
        echo "\">";
        echo ${$GLOBALS["mivhdrv"]};
        echo "</span></span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\"><span class=\"badge badge-glow bg-";
        echo ${$GLOBALS["icgovqt"]};
        echo "\">";
        echo date("d/m/Y H:i:s", strtotime(${$GLOBALS["mbwpwwc"]}["data_suspensao"]));
        echo "</span></span>\n</td>\n<td>\n<div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\"><a href=\"home.php?page=ssh/editar&id_ssh=";
        echo ${$GLOBALS["mbwpwwc"]}["id_usuario_ssh"];
        echo "\"";
        echo ${$GLOBALS["hacdsrfgmnu"]};
        echo "><i data-feather='edit'></i></a></div>\n</td>\n</tr>\n";
    }
}
echo "</tbody>\n</table>\n</div>\n</div>\n</div>\n</div>\n</div>\n";
