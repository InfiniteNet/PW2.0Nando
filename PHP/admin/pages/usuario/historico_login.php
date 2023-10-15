<?php

$GLOBALS["skuwclg"] = "row";
$GLOBALS["nxaiamerd"] = "info";
$GLOBALS["prfmwn"] = "owner";
$GLOBALS["nmjveoat"] = "revendedor";
$GLOBALS["tumepwpg"] = "SQLRevendedor";
$GLOBALS["cnjozrxdh"] = "class";
$GLOBALS["zvvsjvlj"] = "roww";
$GLOBALS["obblhowvavq"] = "SQLLogin";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/historico_login.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
protegePagina("donoadmin");
echo "<style>\n.card-datatable {\npadding-left: 5px;\npadding-right: 5px;\n}\n</style>\n<div class=\"active\"><a class=\"d-flex align-items-center\" href=\"home.php\"><i data-feather=\"home\"></i><span class=\"menu-title text-truncate\" data-i18n=\"Dashboards\">DASHBOARD</span></a>\n</div>\n<section id=\"complex-header-datatable\">\n<div class=\"row\">\n<div class=\"col-12\">\n<div class=\"card\">\n<div class=\"card-header border-bottom\">\n<h4 class=\"card-title\">Hist\xc3\xb3rico de login</h4>\n</div>\n<div class=\"card-datatable\">\n<table id=\"example\" class=\"table\">\n<thead>\n<tr>\n<th>DONO</th>\n<th>NOME</th>\n<th>LOGIN</th>\n<th>IP</th>\n<th>DATA|HORA</th>\n<th>NAVEGADOR|DISPOSITIVO</th>\n<th>OP\xc3\x87\xc3\x95ES</th>\n</tr>\n</thead>\n<tbody id=\"myTable\">\n";
${$GLOBALS["obblhowvavq"]} = "SELECT * FROM historico_login ORDER BY data_login desc";
${$GLOBALS["obblhowvavq"]} = $conn->prepare(${$GLOBALS["obblhowvavq"]});
$SQLLogin->execute();
if ($SQLLogin->rowCount() > 0) {
    $rhjmurq = "row";
    while (${$rhjmurq} = $SQLLogin->fetch()) {
        $GLOBALS["htxaqxv"] = "SQLUsuario";
        $jqbhkixwmpx = "row";
        $GLOBALS["ekflyj"] = "SQLUsuario";
        $lpviyiwg = "SQLUsuario";
        $SQLUsuario = "SELECT * FROM usuario where id_usuario = '" . $row["id_usuario"] . "'";
        $SQLUsuario = $conn->prepare($SQLUsuario);
        $SQLUsuario->execute();
        if ($SQLUsuario->rowCount() > 0) {
            while (${$GLOBALS["zvvsjvlj"]} = $SQLUsuario->fetch()) {
                $GLOBALS["llxicug"] = "roww";
                $utqmstblv = "roww";
                if ($roww["ativo"] == 1) {
                    $GLOBALS["ibrbxomy"] = "sts";
                    $uemulhjr = "info";
                    $info = "info";
                    ${$GLOBALS["cnjozrxdh"]} = "class='btn-sm btn-primary waves-effect waves-float waves-light'";
                    ${$GLOBALS["ibrbxomy"]} = "success";
                } else {
                    $GLOBALS["jqdhtiudgn"] = "class";
                    $qlryhbwejriy = "info";
                    $info = "danger";
                    $fisbsl = "sts";
                    $class = "class='btn-sm btn-primary waves-effect waves-float waves-light'";
                    $sts = "danger";
                }
                ${$GLOBALS["tumepwpg"]} = "SELECT * FROM usuario WHERE id_usuario = '" . ${$GLOBALS["zvvsjvlj"]}["id_mestre"] . "'";
                ${$GLOBALS["tumepwpg"]} = $conn->prepare(${$GLOBALS["tumepwpg"]});
                $SQLRevendedor->execute();
                $xktkbvc = "roww";
                ${$GLOBALS["nmjveoat"]} = $SQLRevendedor->fetch();
                $bcdkweovn = "owner";
                $rqkmirffkxj = "info";
                ${$GLOBALS["prfmwn"]} = ${$GLOBALS["nmjveoat"]}["login"];
                echo "<tr>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-light-warning\">\n";
                if (${$bcdkweovn} != "") {
                    echo ${$GLOBALS["prfmwn"]};
                } else {
                    echo "Sistema\n";
                }
                echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-light-";
                echo ${$rqkmirffkxj};
                echo "\">\n";
                echo ${$utqmstblv}["nome"];
                echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-light-";
                echo ${$GLOBALS["nxaiamerd"]};
                echo "\">\n";
                echo ${$xktkbvc}["login"];
                echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-light-danger\">\n";
                echo ${$GLOBALS["skuwclg"]}["ip_login"];
                echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-light-success\">\n";
                echo date("d/m/Y H:i:s", strtotime(${$GLOBALS["skuwclg"]}["data_login"]));
                echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-light-";
                echo ${$GLOBALS["nxaiamerd"]};
                echo "\">\n";
                echo ${$GLOBALS["skuwclg"]}["navegador"];
                echo "</span>\n</span>\n</td>\n<td>\n<div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">\n<a href=\"home.php?page=usuario/perfil&id_usuario=";
                echo ${$GLOBALS["zvvsjvlj"]}["id_usuario"];
                echo "\" ";
                echo ${$GLOBALS["cnjozrxdh"]};
                echo "><i data-feather='edit'></i></a>\n</div>\n</td>\n</tr>\n";
            }
        }
    }
}
echo "</tbody>\n</table>\n</div>\n</div>\n</div>\n</div>\n</section>\n";
