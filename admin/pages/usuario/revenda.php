<?php

$GLOBALS["nnxperiko"] = "subrev";
$GLOBALS["dvygraib"] = "owner";
$GLOBALS["xmnpybnwmq"] = "sts";
$GLOBALS["cvlvrebglo"] = "roww";
$GLOBALS["jdqsmmzjyh"] = "revendedor";
$GLOBALS["stqfvhxhy"] = "SQLRevendedor";
$GLOBALS["odouxmssoqdn"] = "rowS";
$GLOBALS["pwpaefisl"] = "SQLUserSub";
$GLOBALS["izdmdg"] = "total_acesso_ssh";
$GLOBALS["mghnntkqbg"] = "SQLAcessoSSH";
$GLOBALS["ipkrmywdzbw"] = "SQLServidores";
$GLOBALS["indvuidcv"] = "SQLContasSSH";
$GLOBALS["fahqdnukuoo"] = "info";
$GLOBALS["mwibjczyro"] = "status";
$GLOBALS["esroousrw"] = "row";
$GLOBALS["saojtnng"] = "servidores";
$GLOBALS["kirtdfwlec"] = "contas";
$GLOBALS["nqjsaemylv"] = "color";
$GLOBALS["ipwsaoxboqeb"] = "class";
$GLOBALS["pkkwbhccyg"] = "dias_acesso";
$GLOBALS["jgkmnolv"] = "data_validade";
$GLOBALS["vyxmktvnkr"] = "diferenca";
$GLOBALS["qggwwrdvd"] = "data_atual";
$GLOBALS["dkozwfvsw"] = "SQLUsuario";
$GLOBALS["krpdiccaws"] = "SQLUsuario";
$rkyxgmqxkczf = "SQLUsuario";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/revenda.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
protegePagina("donoadmin");
echo "<style>\n.card-datatable {\npadding-left: 5px;\npadding-right: 5px;\n}\n</style>\n<div class=\"active\"><a class=\"d-flex align-items-center\" href=\"home.php\"><i data-feather=\"home\"></i><span class=\"menu-title text-truncate\" data-i18n=\"Dashboards\">DASHBOARD</span></a>\n</div>\n<section id=\"complex-header-datatable\">\n<div class=\"row\">\n<div class=\"col-12\">\n<div class=\"card\">\n<div class=\"card-header border-bottom\">\n<h4 class=\"card-title\">Revendedores</h4>\n</div>\n<div class=\"card-datatable\">\n<table id=\"example\" class=\"table\">\n<thead>\n<tr>\n<th>STATUS</th>\n<th>DONO</th>\n<th>NOME</th>\n<th>LOGIN</th>\n<th>SENHA</th>\n<th>SUB.REVENDA</th>\n<th>SSH</th>\n<th>VALIDADE</th>\n<th>SERVIDORES</th>\n<th>OP\xc3\x87\xc3\x95ES</th>\n</tr>\n</thead>\n<tbody id=\"myTable\">\n";
${$GLOBALS["dkozwfvsw"]} = "SELECT * FROM usuario where tipo = 'revenda' ORDER BY ativo";
${$GLOBALS["krpdiccaws"]} = $conn->prepare(${$rkyxgmqxkczf});
$SQLUsuario->execute();
if ($SQLUsuario->rowCount() > 0) {
    $GLOBALS["snuseoggz"] = "row";
    while (${$GLOBALS["snuseoggz"]} = $SQLUsuario->fetch()) {
        $xacaqu = "row";
        $GLOBALS["mhjzteo"] = "data_validade";
        $GLOBALS["cncjmkro"] = "SQLContasSSH";
        $GLOBALS["gcbvalgyb"] = "row";
        $mwlholj = "info";
        $GLOBALS["ydocuzkxu"] = "status";
        ${$GLOBALS["qggwwrdvd"]} = date("Y-m-d H:i:s");
        $GLOBALS["rxnkbnoj"] = "servidores";
        $GLOBALS["dgedkwqq"] = "info";
        ${$GLOBALS["mhjzteo"]} = ${$GLOBALS["gcbvalgyb"]}["validade"];
        $GLOBALS["xlcmesfnsp"] = "data_validade";
        $ykvvgmtdhg = "dias_acesso";
        $nnveqf = "SQLUserSub";
        $opdihlmuykl = "owner";
        if ($data_validade > ${$GLOBALS["qggwwrdvd"]}) {
            $evfwspxdg = "data_atual";
            $rjhnjictj = "diferenca";
            ${$GLOBALS["vyxmktvnkr"]} = strtotime(${$GLOBALS["jgkmnolv"]}) - strtotime($data_atual);
            $GLOBALS["vqolgqbiq"] = "dias_acesso";
            $dias_acesso = floor(${$rjhnjictj} / 86400);
        } else {
            ${$GLOBALS["pkkwbhccyg"]} = 0;
        }
        $GLOBALS["ftmnvs"] = "row";
        $GLOBALS["xajwgewp"] = "row";
        if (${$GLOBALS["pkkwbhccyg"]} > 10) {
            $hriqbhc = "stsd";
            $stsd = "info";
        } elseif (${$ykvvgmtdhg} == 0) {
            $GLOBALS["rlyskmu"] = "stsd";
            $stsd = "danger";
        } else {
            $GLOBALS["xwpkqsjicp"] = "stsd";
            $stsd = "warning";
        }
        $GLOBALS["ehykjgicjq"] = "total_acesso_ssh";
        $GLOBALS["uukqtpdid"] = "SQLAcessoSSH";
        ${$GLOBALS["ipwsaoxboqeb"]} = "class='btn-sm btn-danger waves-effect waves-float waves-light'";
        $GLOBALS["ekivncy"] = "SQLContasSSH";
        ${$GLOBALS["ydocuzkxu"]} = "";
        ${$GLOBALS["nqjsaemylv"]} = "";
        ${$GLOBALS["kirtdfwlec"]} = 0;
        ${$GLOBALS["saojtnng"]} = 0;
        if (${$GLOBALS["esroousrw"]}["ativo"] == 1) {
            ${$GLOBALS["mwibjczyro"]} = "Ativo";
            ${$GLOBALS["fahqdnukuoo"]} = "info";
            $etlzkcf = "class";
            $class = "class='btn-sm btn-primary waves-effect waves-float waves-light'";
            $GLOBALS["wklqugipmy"] = "sts";
            $sts = "success";
        } else {
            $umjvtf = "status";
            $status = "Suspenso";
            $itoyrwjjpgm = "info";
            $GLOBALS["hizovflq"] = "sts";
            ${$GLOBALS["nqjsaemylv"]} = "bgcolor='#FF6347'";
            ${$itoyrwjjpgm} = "danger";
            ${$GLOBALS["hizovflq"]} = "danger";
        }
        $mkcwwvodose = "SQLAcessoSSH";
        $gigsou = "SQLServidores";
        ${$GLOBALS["cncjmkro"]} = "select * from conta_ssh WHERE id_usuario = '" . ${$GLOBALS["ftmnvs"]}["id_usuario"] . "'";
        ${$GLOBALS["ekivncy"]} = $conn->prepare(${$GLOBALS["indvuidcv"]});
        $nnudcxu = "row";
        $SQLContasSSH->execute();
        $johiduc = "info";
        $lrrkiueugt = "SQLServidores";
        ${$GLOBALS["kirtdfwlec"]} += $SQLContasSSH->rowCount();
        ${$lrrkiueugt} = "select * from acesso_servidor WHERE id_usuario = '" . ${$GLOBALS["esroousrw"]}["id_usuario"] . "' ORDER BY id_usuario desc";
        ${$GLOBALS["ipkrmywdzbw"]} = $conn->prepare(${$gigsou});
        $GLOBALS["cqlitcxo"] = "SQLAcessoSSH";
        $SQLServidores->execute();
        ${$GLOBALS["rxnkbnoj"]} += $SQLServidores->rowCount();
        ${$GLOBALS["ehykjgicjq"]} = 0;
        ${$mkcwwvodose} = "SELECT sum(acesso) AS quantidade  FROM conta_ssh where id_usuario='" . ${$GLOBALS["esroousrw"]}["id_usuario"] . "'";
        $GLOBALS["jiyxugupf"] = "subrev";
        ${$GLOBALS["cqlitcxo"]} = $conn->prepare(${$GLOBALS["mghnntkqbg"]});
        $SQLAcessoSSH->execute();
        ${$GLOBALS["uukqtpdid"]} = $SQLAcessoSSH->fetch();
        ${$GLOBALS["izdmdg"]} += ${$GLOBALS["mghnntkqbg"]}["quantidade"];
        ${$GLOBALS["pwpaefisl"]} = "select * from usuario WHERE id_mestre = '" . ${$GLOBALS["esroousrw"]}["id_usuario"] . "'";
        ${$nnveqf} = $conn->prepare(${$GLOBALS["pwpaefisl"]});
        $SQLUserSub->execute();
        if ($SQLUserSub->rowCount() > 0) {
            $fmwgsjplnbgb = "rowS";
            while (${$fmwgsjplnbgb} = $SQLUserSub->fetch()) {
                $zeqwqubhbv = "rowS";
                $dopstsvxol = "SQLContasSSH";
                $wxhhvcfuim = "SQLContasSSH";
                $wewwdpglh = "SQLAcessoSSH";
                $SQLContasSSH = "select * from conta_ssh WHERE id_usuario = '" . ${$GLOBALS["odouxmssoqdn"]}["id_usuario"] . "'";
                ${$GLOBALS["indvuidcv"]} = $conn->prepare($SQLContasSSH);
                $GLOBALS["awwbqydvr"] = "SQLAcessoSSH";
                $etfplxhfv = "SQLAcessoSSH";
                $SQLContasSSH->execute();
                $asgumdame = "SQLAcessoSSH";
                $bkbrmdhtqk = "total_acesso_ssh";
                ${$GLOBALS["kirtdfwlec"]} += $SQLContasSSH->rowCount();
                ${$GLOBALS["awwbqydvr"]} = "SELECT sum(acesso) AS quantidade  FROM conta_ssh where id_usuario='" . ${$zeqwqubhbv}["id_usuario"] . "'";
                ${$GLOBALS["mghnntkqbg"]} = $conn->prepare(${$wewwdpglh});
                $SQLAcessoSSH->execute();
                ${$etfplxhfv} = $SQLAcessoSSH->fetch();
                ${$bkbrmdhtqk} += ${$asgumdame}["quantidade"];
            }
        }
        if (${$GLOBALS["xajwgewp"]}["subrevenda"] == "sim") {
            $rjprrll = "subrev";
            $subrev = "Sim";
        } else {
            $inpyatjb = "subrev";
            $subrev = "N\xc3\xa3o";
        }
        ${$GLOBALS["stqfvhxhy"]} = "select * from usuario WHERE id_usuario = '" . ${$GLOBALS["esroousrw"]}["id_mestre"] . "'";
        ${$GLOBALS["stqfvhxhy"]} = $conn->prepare(${$GLOBALS["stqfvhxhy"]});
        $GLOBALS["vstispy"] = "revendedor";
        $SQLRevendedor->execute();
        $bduxpllth = "row";
        ${$GLOBALS["jdqsmmzjyh"]} = $SQLRevendedor->fetch();
        ${$opdihlmuykl} = ${$GLOBALS["vstispy"]}["login"];
        if ($SQLServidores->rowCount() > 0) {
            while (${$GLOBALS["cvlvrebglo"]} = $SQLServidores->fetch()) {
            }
        }
        echo "<tr>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-glow bg-";
        echo ${$GLOBALS["xmnpybnwmq"]};
        echo "\">\n";
        echo ${$GLOBALS["mwibjczyro"]};
        echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-light-warning\">\n";
        if (${$GLOBALS["dvygraib"]} != "") {
            $GLOBALS["lgxivhluk"] = "owner";
            echo $owner;
        } else {
            echo "Sistema\n";
        }
        echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-light-";
        echo ${$mwlholj};
        echo "\">\n";
        echo ${$bduxpllth}["nome"];
        $GLOBALS["kdnwvwfteu"] = "class";
        echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-light-";
        echo ${$GLOBALS["fahqdnukuoo"]};
        echo "\">\n";
        echo ${$nnudcxu}["login"];
        echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-light-";
        echo ${$GLOBALS["dgedkwqq"]};
        echo "\">\n";
        echo ${$xacaqu}["senha"];
        echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n";
        $zynyvjhfd = "info";
        if (${$GLOBALS["jiyxugupf"]} == "Sim") {
            echo "<span class=\"badge badge-light-success\">\n";
            $zmxdyjqpus = "subrev";
            echo $subrev;
        } else {
            echo "<span class=\"badge badge-light-danger\">\n";
            echo ${$GLOBALS["nnxperiko"]};
        }
        echo "</span>\n</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-light-";
        echo ${$zynyvjhfd};
        echo "\">\n";
        echo ${$GLOBALS["kirtdfwlec"]};
        echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 5px;\">\n";
        if (${$GLOBALS["pkkwbhccyg"]} > 1) {
            $GLOBALS["xzrobo"] = "dias_acesso";
            $GLOBALS["aikwdy"] = "stsd";
            echo "<span class=\"badge badge-light-";
            echo $stsd;
            echo "\">";
            echo $dias_acesso;
            echo "<b> dias</b></span>\n";
        } else {
            $zciwmdw = "stsd";
            $GLOBALS["lqgdxfc"] = "dias_acesso";
            echo "<span class=\"badge badge-light-";
            echo $stsd;
            echo "\">";
            echo $dias_acesso;
            echo "<b> dia</b></span>\n";
        }
        echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-light-";
        echo ${$johiduc};
        echo "\">\n";
        echo ${$GLOBALS["saojtnng"]};
        echo "</span>\n</span>\n</td>\n<td>\n<div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">\n<a href=\"home.php?page=usuario/perfil&id_usuario=";
        echo ${$GLOBALS["esroousrw"]}["id_usuario"];
        echo "\" ";
        echo ${$GLOBALS["kdnwvwfteu"]};
        echo "><i data-feather='edit'></i></a>\n</div>\n</td>\n</tr>\n";
    }
}
echo "</tbody>\n</table>\n</div>\n</div>\n</div>\n</div>\n</section>\n";
