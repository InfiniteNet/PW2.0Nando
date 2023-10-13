<?php

$GLOBALS["yrzxrxxur"] = "accessKEY";
$GLOBALS["cdmrsriaj"] = "class";
$GLOBALS["igkozfcgcp"] = "status";
$GLOBALS["tdryorodyek"] = "own";
$GLOBALS["hhfhxbye"] = "SQLSubowner";
$GLOBALS["hbrbohf"] = "stsd";
$GLOBALS["xcmvjktj"] = "diferenca";
$GLOBALS["tbebkyc"] = "dias_acesso";
$GLOBALS["wyazywwosy"] = "data_atual";
$GLOBALS["ybbuuscbw"] = "row";
$GLOBALS["wslhvqdjgwir"] = "rowSub";
$GLOBALS["opqwwynq"] = "SQLSub";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/online.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
protegePagina("donoadmin");
echo "<script type=\"text/javascript\">\nfunction deleta(id) {\ndecisao = confirm(\"Tem certeza que deseja deletar essa Conta?!\");\nif (decisao) {\nwindow.location.href = 'home.php?page=ssh/online_free&deletar=' + id;\n}\n}\n</script>\n<style>\n.card-datatable {\npadding-left: 5px;\npadding-right: 5px;\n}\n</style>\n<div class=\"active\"><a class=\"d-flex align-items-center\" href=\"home.php\"><i data-feather=\"home\"></i><span class=\"menu-title text-truncate\" data-i18n=\"Dashboards\">DASHBOARD</span></a>\n</div>\n<section id=\"complex-header-datatable\">\n<div class=\"row\">\n<div class=\"col-12\">\n<div class=\"card\">\n<div class=\"card-header border-bottom\">\n<h4 class=\"card-title\">Contas SSH Online</h4>\n</div>\n<div class=\"card-datatable\">\n<table id=\"example\" class=\"table\">\n<thead>\n<tr>\n<th>SERVIDOR</th>\n<th>DONO</th>\n<th>LOGIN</th>\n<th>VALIDADE</th>\n<th>TEMPO</th>\n<th>STATUS</th>\n<th>CONEX\xc3\x83O</th>\n<th>ACESSOS</th>\n<th>OP\xc3\x87\xc3\x95ES</th>\n<th>DERRUBAR</th>\n</tr>\n</thead>\n<tbody>\n";
$GLOBALS["tvlzhbeewtt"] = "SQLSub";
${$GLOBALS["opqwwynq"]} = "SELECT * FROM conta_ssh";
${$GLOBALS["opqwwynq"]} = $conn->prepare(${$GLOBALS["tvlzhbeewtt"]});
$SQLSub->execute();
if ($SQLSub->rowCount() > 0) {
    $GLOBALS["dstmvl"] = "rowSub";
    while (${$GLOBALS["dstmvl"]} = $SQLSub->fetch()) {
        $GLOBALS["nrgswb"] = "SQLSSH";
        $jyidpvg = "rowSub";
        $GLOBALS["svffkyhnf"] = "data_atual";
        $GLOBALS["nvnmdfqpqey"] = "rowSub";
        $GLOBALS["eygwcozkajis"] = "SQLSSH";
        $GLOBALS["dkkqdiukmp"] = "SQLSSH";
        $xouvqzm = "data_atual";
        $SQLSSH = "SELECT * FROM servidor where tipo='premium' and id_servidor='" . ${$GLOBALS["wslhvqdjgwir"]}["id_servidor"] . "' ORDER BY id_servidor";
        $sevwlskpgss = "data_validade";
        $SQLSSH = $conn->prepare($SQLSSH);
        $SQLSSH->execute();
        $nwjqiwcx = "dias_acesso";
        $ouyodsqtupeb = "data_validade";
        $bvreiamyuuun = "rowSub";
        ${$GLOBALS["ybbuuscbw"]} = $SQLSSH->fetch();
        ${$xouvqzm} = date("Y-m-d ");
        ${$ouyodsqtupeb} = ${$GLOBALS["wslhvqdjgwir"]}["data_validade"];
        if (${$sevwlskpgss} > ${$GLOBALS["svffkyhnf"]}) {
            $GLOBALS["dvnjevvfslw"] = "data_validade";
            $hpjmolpfju = "diferenca";
            $diferenca = strtotime($data_validade) - strtotime(${$GLOBALS["wyazywwosy"]});
            ${$GLOBALS["tbebkyc"]} = floor(${$GLOBALS["xcmvjktj"]} / 86400);
        } else {
            $bwrcgcdqig = "dias_acesso";
            $dias_acesso = 0;
        }
        if (${$nwjqiwcx} > 10) {
            ${$GLOBALS["hbrbohf"]} = "info";
        } elseif (${$GLOBALS["tbebkyc"]} == 0) {
            ${$GLOBALS["hbrbohf"]} = "danger";
        } else {
            ${$GLOBALS["hbrbohf"]} = "warning";
        }
        ${$GLOBALS["hhfhxbye"]} = "SELECT * FROM usuario where id_usuario='" . ${$GLOBALS["nvnmdfqpqey"]}["id_usuario"] . "'";
        ${$GLOBALS["hhfhxbye"]} = $conn->prepare(${$GLOBALS["hhfhxbye"]});
        $SQLSubowner->execute();
        ${$GLOBALS["tdryorodyek"]} = $SQLSubowner->fetch();
        ${$GLOBALS["igkozfcgcp"]} = "";
        if (${$jyidpvg}["status"] == 1) {
            ${$GLOBALS["igkozfcgcp"]} = "Ativo";
            ${$GLOBALS["cdmrsriaj"]} = "class='btn-sm btn-primary waves-effect waves-float waves-light'";
        } else {
            ${$GLOBALS["igkozfcgcp"]} = "Desativado";
        }
        if (${$bvreiamyuuun}["online"] != 0) {
            $fqfyxdmul = "own";
            $gfokuufrb = "rowSub";
            $GLOBALS["nyoqtuokxn"] = "row";
            echo "<tr>\n<td>\n<span class=\"badge badge-light-info\">\n";
            echo $row["nome"];
            echo "</span>\n</td>\n<td>\n<span class=\"badge badge-light-warning\">\n";
            echo $own["nome"];
            echo "</span>\n</td>\n<td>\n<span class=\"badge badge-light-info\">\n";
            echo $rowSub["login"];
            $bgonbypm = "rowSub";
            echo "</span>\n</td>\n<td>\n";
            if (${$GLOBALS["tbebkyc"]} > 1) {
                echo "<span class=\"badge badge-light-";
                echo ${$GLOBALS["hbrbohf"]};
                echo "\">";
                echo ${$GLOBALS["tbebkyc"]};
                echo "<b> dias</b></span>\n";
            } else {
                $GLOBALS["pxjprxfplv"] = "stsd";
                $GLOBALS["eijqhnxcccr"] = "dias_acesso";
                echo "<span class=\"badge badge-light-";
                echo $stsd;
                echo "\">";
                echo $dias_acesso;
                echo "<b> dia</b></span>\n";
            }
            $tjwyew = "rowSub";
            echo "</td>\n<td>\n<span class=\"badge badge-light-info\">\n";
            echo tempo_corrido(${$bgonbypm}["online_start"]);
            echo "</span>\n</td>\n<td>";
            if (${$GLOBALS["wslhvqdjgwir"]}["online"] > 0) {
                echo "<div class=\"badge badge-glow bg-success\">Online</div>\n";
            } else {
                $uqlbpaajn = "rowSub";
                echo $rowSub["online"];
            }
            $GLOBALS["tfuiwkyirxko"] = "rowSub";
            echo "</td>\n<td>\n";
            if (${$GLOBALS["wslhvqdjgwir"]}["online"] > $rowSub["acesso"]) {
                $pptbfiuxk = "rowSub";
                echo "<span class=\"badge badge-light-danger\">\n";
                echo $rowSub["online"];
                echo "</span>\n";
            } else {
                $sjcfpvzlnf = "rowSub";
                echo "<span class=\"badge badge-light-info\">";
                echo $rowSub["online"];
                echo "</span>";
            }
            echo "</td>\n<td>\n<span class=\"badge badge-light-info\">\n";
            echo ${$GLOBALS["wslhvqdjgwir"]}["acesso"];
            $cnyawjgwx = "rowSub";
            echo "</td>\n</span>\n<td>\n<a class=\"btn-sm btn-primary waves-effect waves-float waves-light\" href=\"home.php?page=ssh/editar&id_ssh=";
            echo ${$tjwyew}["id_usuario_ssh"];
            $nbqtcaqiuhgb = "class";
            echo "\" ";
            echo $class;
            echo "><i data-feather='edit'></i></a>\n</td>\n<td>\n<form role=\"form2\" action=\"../pages/system/funcoes.conta.ssh.php\" method=\"post\" class=\"form-horizontal\">\n<input type=\"hidden\" id=\"diretorio\" name=\"diretorio\" value=\"../../home.php?page=ssh/contas\">\n<input type=\"hidden\" id=\"id_usuario_ssh\" name=\"id_usuario_ssh\" value=\"";
            echo $rowSub["id_usuario_ssh"];
            echo "\">\n<input type=\"hidden\" id=\"owner\" name=\"owner\" value=\"";
            echo ${$GLOBALS["yrzxrxxur"]};
            echo "\">\n<button type=\"submit\" class=\"btn-sm btn-danger\" id=\"op\" name=\"op\" value=\"kill\"><i data-feather='user-minus'></i></button>\n</form>\n</tr>\n</tr>\n";
        }
    }
}
echo "</tbody>\n</table>\n</div>\n</div>\n</div>\n</div>\n</section>\n";
