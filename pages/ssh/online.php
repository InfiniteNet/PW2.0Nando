<?php

$GLOBALS["jtyiehm"] = "stsd";
$GLOBALS["scfpqlk"] = "dias_acesso";
$GLOBALS["cgymvtsv"] = "diferenca";
$GLOBALS["cbpfnmwflnz"] = "data_atual";
$GLOBALS["kvqrpe"] = "data_validade";
$GLOBALS["gmiyakwcv"] = "class";
$GLOBALS["gdmwtcv"] = "row";
$GLOBALS["rokagbupzk"] = "status";
$GLOBALS["xxoubci"] = "rowserv";
$GLOBALS["rzyltoqprrmq"] = "SQLSSH";
$GLOBALS["ijkqrkuip"] = "rowSub";
$GLOBALS["dflpsgulcot"] = "SQLSubSSH";
$GLOBALS["kavnhp"] = "SQLSub";
$GLOBALS["kslphbrd"] = "usuario";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/online.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
protegePagina("user");
if (${$GLOBALS["kslphbrd"]}["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
$fvoskpa = "SQLSub";
echo "<style>\n.card-datatable {\npadding-left: 5px;\npadding-right: 5px;\n}\n</style>\n<div class=\"active\"><a class=\"d-flex align-items-center\" href=\"home.php\"><i data-feather=\"home\"></i><span class=\"menu-title text-truncate\" data-i18n=\"Dashboards\">DASHBOARD</span></a>\n</div>\n<section id=\"complex-header-datatable\">\n<div class=\"row\">\n<div class=\"col-12\">\n<div class=\"card\">\n<div class=\"card-header border-bottom\">\n<h4 class=\"card-title\">Contas SSH Online</h4>\n</div>\n<div class=\"card-datatable\">\n<table id=\"example\" class=\"table\">\n<thead>\n<tr>\n<th>SERVIDOR</th>\n<th>DONO</th>\n<th>LOGIN</th>\n<th>VALIDADE</th>\n<th>TEMPO</th>\n<th>STATUS</th>\n<th>CONEX\xc3\x83O</th>\n<th>ACESSOS</th>\n<th>OP\xc3\x87\xc3\x95ES</th>\n<th>DERRUBAR</th>\n</tr>\n</thead>\n<tbody id=\"myTable\">\n";
${$GLOBALS["kavnhp"]} = "SELECT * FROM usuario WHERE id_usuario='" . $_SESSION["usuarioID"] . "' OR id_mestre='" . $_SESSION["usuarioID"] . "'";
${$fvoskpa} = $conn->prepare(${$GLOBALS["kavnhp"]});
$SQLSub->execute();
if ($SQLSub->rowCount() > 0) {
    $GLOBALS["hwocbyv"] = "rowSub";
    while (${$GLOBALS["hwocbyv"]} = $SQLSub->fetch()) {
        $uqdyso = "SQLSubSSH";
        ${$GLOBALS["dflpsgulcot"]} = "SELECT * FROM conta_ssh WHERE id_usuario='" . ${$GLOBALS["ijkqrkuip"]}["id_usuario"] . "' AND online>='1'";
        ${$GLOBALS["dflpsgulcot"]} = $conn->prepare(${$uqdyso});
        $SQLSubSSH->execute();
        if ($SQLSubSSH->rowCount() > 0) {
            $escryo = "row";
            while (${$escryo} = $SQLSubSSH->fetch()) {
                $GLOBALS["vdtevohn"] = "row";
                $GLOBALS["vvvapuwpz"] = "SQLSSH";
                $fmtmopmtqvt = "row";
                ${$GLOBALS["rzyltoqprrmq"]} = "SELECT * FROM servidor WHERE id_servidor='" . $row["id_servidor"] . "'";
                $kfvgbxifh = "data_atual";
                ${$GLOBALS["rzyltoqprrmq"]} = $conn->prepare(${$GLOBALS["vvvapuwpz"]});
                $SQLSSH->execute();
                $GLOBALS["pehscbpx"] = "rowserv";
                ${$GLOBALS["xxoubci"]} = $SQLSSH->fetch();
                ${$GLOBALS["rokagbupzk"]} = "";
                $ncjxdxd = "data_validade";
                $GLOBALS["rcwulplnyog"] = "rowSub";
                if (${$GLOBALS["gdmwtcv"]}["status"] == 1) {
                    $vsqxktfcpc = "status";
                    $status = "Ativo";
                    ${$GLOBALS["gmiyakwcv"]} = "class='btn-sm btn-primary waves-effect waves-float waves-light'";
                } else {
                    $GLOBALS["trjmmkpid"] = "status";
                    $status = "Suspenso";
                }
                $chyttngt = "row";
                ${$kfvgbxifh} = date("Y-m-d H:i:s");
                ${$GLOBALS["kvqrpe"]} = ${$GLOBALS["vdtevohn"]}["data_validade"];
                if (${$ncjxdxd} > ${$GLOBALS["cbpfnmwflnz"]}) {
                    $GLOBALS["bhifsj"] = "diferenca";
                    $kfjupqfulr = "data_atual";
                    $GLOBALS["dlzrrusj"] = "data_validade";
                    ${$GLOBALS["cgymvtsv"]} = strtotime($data_validade) - strtotime($data_atual);
                    ${$GLOBALS["scfpqlk"]} = floor(${$GLOBALS["bhifsj"]} / 86400);
                } else {
                    $wtyyefmejw = "dias_acesso";
                    $dias_acesso = 0;
                }
                $GLOBALS["apcrdeptroce"] = "row";
                if (${$GLOBALS["scfpqlk"]} > 10) {
                    $GLOBALS["frquwndmh"] = "stsd";
                    $stsd = "info";
                } elseif (${$GLOBALS["scfpqlk"]} == 0) {
                    $GLOBALS["bukjcgxf"] = "stsd";
                    $stsd = "danger";
                } else {
                    $blomhbr = "stsd";
                    $stsd = "warning";
                }
                echo "<tr>\n<td>\n<span class=\"badge badge-light-info\">\n";
                echo ${$GLOBALS["pehscbpx"]}["nome"];
                echo "</span>\n</td>\n<td>\n<span class=\"badge badge-light-warning\">\n";
                echo ${$GLOBALS["rcwulplnyog"]}["login"];
                echo "</span>\n</td>\n<td>\n<span class=\"badge badge-light-info\">\n";
                echo ${$chyttngt}["login"];
                echo "</span>\n</td>\n<td>\n";
                if (${$GLOBALS["scfpqlk"]} > 1) {
                    echo "<span class=\"badge badge-light-";
                    echo ${$GLOBALS["jtyiehm"]};
                    echo "\">\n";
                    echo ${$GLOBALS["scfpqlk"]};
                    echo "<b> dias</b>\n</span>\n";
                } else {
                    echo "<span class=\"badge badge-light-";
                    echo ${$GLOBALS["jtyiehm"]};
                    $cyytrkfto = "dias_acesso";
                    echo "\">\n";
                    echo $dias_acesso;
                    echo "<b> dia</b>\n</span>\n";
                }
                echo "</td>\n<td>\n<span class=\"badge badge-light-info\">\n";
                echo tempo_corrido(${$GLOBALS["gdmwtcv"]}["online_start"]);
                echo "</span>\n</td>\n<td>\n<div class=\"badge badge-glow bg-success\">Online</div>\n</td>\n<td>\n<span class=\"badge badge-light-info\">\n";
                echo ${$GLOBALS["gdmwtcv"]}["online"];
                echo "</span>\n</td>\n<td>\n<span class=\"badge badge-light-info\">\n";
                echo ${$GLOBALS["gdmwtcv"]}["acesso"];
                echo "</span>\n</td>\n<td>\n<a href=\"home.php?page=ssh/editar&id_ssh=";
                echo ${$GLOBALS["gdmwtcv"]}["id_usuario_ssh"];
                echo "\" class=\"btn-sm btn-primary\"><i data-feather='edit'></i></a>\n</td>\n<td>\n<form role=\"form2\" action=\"pages/system/funcoes.conta.ssh.php\" method=\"post\" class=\"form-horizontal\">\n<input type=\"hidden\" id=\"diretorio\" name=\"diretorio\" value=\"../../home.php?page=ssh/contas\">\n<input type=\"hidden\" id=\"id_usuario_ssh\" name=\"id_usuario_ssh\" value=\"";
                echo ${$GLOBALS["apcrdeptroce"]}["id_usuario_ssh"];
                echo "\">\n<input type=\"hidden\" id=\"owner\" name=\"owner\" value=\"";
                echo $_SESSION["usuarioID"];
                echo "\">\n<button type=\"submit\" class=\"btn-sm btn-danger\" id=\"op\" name=\"op\" value=\"kill2\"><i data-feather='user-minus'></i></button>\n</form>\n</td>\n</tr>\n";
            }
        }
    }
}
echo "</tbody>\n</table>\n</div>\n</div>\n</div>\n</div>\n</section>\n";
