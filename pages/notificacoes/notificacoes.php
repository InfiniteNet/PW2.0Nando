<?php

$GLOBALS["qpmvvf"] = "datacriado";
$GLOBALS["hhlajgvnvpd"] = "info";
$GLOBALS["qcgjsbrnf"] = "class";
$GLOBALS["nsnewrkx"] = "noti";
$GLOBALS["onfgzobd"] = "SQLUPUser";
$GLOBALS["gewhrwd"] = "SQLnotiler";
$GLOBALS["fjysumqmxrl"] = "tudo";
$GLOBALS["qlguyfbtyi"] = "totalnoti";
$GLOBALS["ljoumqicvd"] = "SQLnoti";
$GLOBALS["imwvfvkbhsv"] = "tipo";
$GLOBALS["marrbfuo"] = "ler";
$GLOBALS["nkwkmyedx"] = "usuario";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/notificacoes.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
protegePagina("user");
if (${$GLOBALS["nkwkmyedx"]}["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
if (isset($_GET["ler"])) {
    $GLOBALS["rmciwoic"] = "ler";
    $GLOBALS["dhlfml"] = "ler";
    $GLOBALS["xbkbgneyxve"] = "ler";
    $avlenkqchttp = "ler";
    $qdgteqfom = "tipo";
    $hhbieluap = "ler";
    $GLOBALS["kfbbxvgti"] = "ler";
    $GLOBALS["mcsqjlkr"] = "tipo";
    $GLOBALS["vprjugwvpxy"] = "ler";
    $blwemm = "tipo";
    $cjnxuetxmxxo = "ler";
    $GLOBALS["ejxkyruf"] = "ler";
    $GLOBALS["ozmxnnocijy"] = "tipo";
    $jjbgfjlkrm = "tipo";
    $wvujsbwekhb = "ler";
    $esqfljpvkvx = "ler";
    switch ($_GET["ler"]) {
        case "all":
            ${$GLOBALS["marrbfuo"]} = "tudo";
            ${$GLOBALS["imwvfvkbhsv"]} = "tudo";
            break;
        case "others":
            ${$wvujsbwekhb} = "others";
            ${$blwemm} = "outros";
            break;
        case "fatu":
            ${$esqfljpvkvx} = "fatu";
            ${$GLOBALS["imwvfvkbhsv"]} = "fatura";
            break;
        case "accs":
            ${$avlenkqchttp} = "contas";
            ${$qdgteqfom} = "conta";
            break;
        case "reve":
            ${$hhbieluap} = "revenda";
            ${$GLOBALS["imwvfvkbhsv"]} = "revenda";
            break;
        case "subreve":
            ${$GLOBALS["vprjugwvpxy"]} = "subrevenda";
            ${$jjbgfjlkrm} = "subrevenda";
            break;
        case "usuario":
            ${$GLOBALS["dhlfml"]} = "usuario";
            ${$GLOBALS["mcsqjlkr"]} = "usuario";
            break;
        case "chamados":
            ${$GLOBALS["kfbbxvgti"]} = "chamados";
            ${$GLOBALS["ozmxnnocijy"]} = "chamados";
            break;
        default:
            ${$GLOBALS["marrbfuo"]} = "nada";
            break;
    }
    if (${$GLOBALS["marrbfuo"]} == "nada") {
    } elseif (${$GLOBALS["marrbfuo"]} == "tudo") {
        $GLOBALS["tgzuykm"] = "SQLnoti";
        ${$GLOBALS["ljoumqicvd"]} = "select * from  notificacoes where lido='nao' and admin='nao' and usuario_id='" . $_SESSION["usuarioID"] . "'";
        $GLOBALS["qekugbtnjz"] = "totalnoti";
        ${$GLOBALS["ljoumqicvd"]} = $conn->prepare(${$GLOBALS["tgzuykm"]});
        $SQLnoti->execute();
        ${$GLOBALS["qekugbtnjz"]} = $SQLnoti->rowCount();
        if (${$GLOBALS["qlguyfbtyi"]} > 0) {
            while (${$GLOBALS["fjysumqmxrl"]} = $SQLnoti->fetch()) {
                $GLOBALS["tsmjdoviw"] = "tudo";
                $GLOBALS["enpdmsvksddl"] = "SQLnotiler";
                $clslyhepnp = "SQLnotiler";
                $SQLnotiler = "update notificacoes set lido='sim' where id='" . $tudo["id"] . "'";
                $SQLnotiler = $conn->prepare(${$GLOBALS["gewhrwd"]});
                $SQLnotiler->execute();
            }
        }
    } elseif (${$GLOBALS["xbkbgneyxve"]} == "others") {
        $snktdbqtsnn = "SQLnoti";
        $axpepvbjdh = "totalnoti";
        $GLOBALS["uqdjrmw"] = "SQLnoti";
        $GLOBALS["zomorbmw"] = "totalnoti";
        ${$GLOBALS["ljoumqicvd"]} = "select * from  notificacoes where lido='nao' and tipo='outros' and admin='nao' and usuario_id='" . $_SESSION["usuarioID"] . "'";
        ${$GLOBALS["uqdjrmw"]} = $conn->prepare(${$snktdbqtsnn});
        $SQLnoti->execute();
        ${$axpepvbjdh} = $SQLnoti->rowCount();
        if (${$GLOBALS["zomorbmw"]} > 0) {
            $GLOBALS["ubvwiwyy"] = "tudo";
            while (${$GLOBALS["ubvwiwyy"]} = $SQLnoti->fetch()) {
                $cckmnrdlhkl = "tudo";
                ${$GLOBALS["gewhrwd"]} = "update notificacoes set lido='sim' where id='" . $tudo["id"] . "'";
                $GLOBALS["gnotrk"] = "SQLnotiler";
                $SQLnotiler = $conn->prepare(${$GLOBALS["gewhrwd"]});
                $SQLnotiler->execute();
            }
        }
    } elseif (${$GLOBALS["marrbfuo"]} == "fatu") {
        $jnqquqbhhc = "SQLnoti";
        $omfdcsbt = "totalnoti";
        $GLOBALS["snvwpam"] = "SQLnoti";
        $SQLnoti = "select * from  notificacoes where lido='nao' and tipo='fatura' and admin='nao' and usuario_id='" . $_SESSION["usuarioID"] . "'";
        ${$GLOBALS["ljoumqicvd"]} = $conn->prepare($SQLnoti);
        $SQLnoti->execute();
        ${$omfdcsbt} = $SQLnoti->rowCount();
        if (${$GLOBALS["qlguyfbtyi"]} > 0) {
            while (${$GLOBALS["fjysumqmxrl"]} = $SQLnoti->fetch()) {
                $GLOBALS["bkdfgedyvfve"] = "SQLnotiler";
                $jcncrlrtrju = "SQLnotiler";
                $ybykmqn = "tudo";
                $SQLnotiler = "update notificacoes set lido='sim' where id='" . $tudo["id"] . "'";
                $SQLnotiler = $conn->prepare(${$GLOBALS["gewhrwd"]});
                $SQLnotiler->execute();
            }
        }
    } elseif (${$GLOBALS["marrbfuo"]} == "contas") {
        $GLOBALS["pemfirvkcx"] = "SQLnoti";
        ${$GLOBALS["ljoumqicvd"]} = "select * from  notificacoes where lido='nao' and tipo='conta' and admin='nao' and usuario_id='" . $_SESSION["usuarioID"] . "'";
        ${$GLOBALS["pemfirvkcx"]} = $conn->prepare(${$GLOBALS["ljoumqicvd"]});
        $enlksmu = "totalnoti";
        $SQLnoti->execute();
        ${$GLOBALS["qlguyfbtyi"]} = $SQLnoti->rowCount();
        if (${$enlksmu} > 0) {
            $ctapxsh = "tudo";
            while (${$ctapxsh} = $SQLnoti->fetch()) {
                $opijxwdt = "SQLnotiler";
                ${$GLOBALS["gewhrwd"]} = "update notificacoes set lido='sim' where id='" . ${$GLOBALS["fjysumqmxrl"]}["id"] . "'";
                $GLOBALS["kdqcvjci"] = "SQLnotiler";
                ${$opijxwdt} = $conn->prepare($SQLnotiler);
                $SQLnotiler->execute();
            }
        }
    } elseif (${$GLOBALS["marrbfuo"]} == "revenda") {
        $qkfibqsrtuel = "totalnoti";
        $GLOBALS["nhmksjrymae"] = "SQLnoti";
        ${$GLOBALS["ljoumqicvd"]} = "select * from  notificacoes where lido='nao' and tipo='revenda' and admin='nao' and usuario_id='" . $_SESSION["usuarioID"] . "'";
        ${$GLOBALS["nhmksjrymae"]} = $conn->prepare(${$GLOBALS["ljoumqicvd"]});
        $SQLnoti->execute();
        ${$qkfibqsrtuel} = $SQLnoti->rowCount();
        if (${$GLOBALS["qlguyfbtyi"]} > 0) {
            $ootuupfnd = "tudo";
            while (${$ootuupfnd} = $SQLnoti->fetch()) {
                $lffsksu = "SQLnotiler";
                $ngrvthvla = "SQLnotiler";
                $dmnldr = "tudo";
                $SQLnotiler = "update notificacoes set lido='sim' where id='" . $tudo["id"] . "'";
                $rkbebksygox = "SQLnotiler";
                $SQLnotiler = $conn->prepare($SQLnotiler);
                $SQLnotiler->execute();
            }
        }
    } elseif (${$GLOBALS["ejxkyruf"]} == "subrevenda") {
        $mosqvyiv = "totalnoti";
        $GLOBALS["uyvhkhusg"] = "SQLnoti";
        ${$GLOBALS["ljoumqicvd"]} = "select * from  notificacoes where lido='nao' and tipo='subrevenda' and admin='nao' and usuario_id='" . $_SESSION["usuarioID"] . "'";
        ${$GLOBALS["ljoumqicvd"]} = $conn->prepare(${$GLOBALS["uyvhkhusg"]});
        $SQLnoti->execute();
        ${$GLOBALS["qlguyfbtyi"]} = $SQLnoti->rowCount();
        if (${$mosqvyiv} > 0) {
            while (${$GLOBALS["fjysumqmxrl"]} = $SQLnoti->fetch()) {
                $lgdpzirlygh = "tudo";
                ${$GLOBALS["gewhrwd"]} = "update notificacoes set lido='sim' where id='" . $tudo["id"] . "'";
                $ojlpsd = "SQLnotiler";
                $SQLnotiler = $conn->prepare(${$GLOBALS["gewhrwd"]});
                $SQLnotiler->execute();
            }
        }
    } elseif (${$GLOBALS["rmciwoic"]} == "usuario") {
        $trbmcjd = "SQLnoti";
        $GLOBALS["qvmwyqoycnp"] = "totalnoti";
        $SQLnoti = "select * from  notificacoes where lido='nao' and tipo='subrevenda' and admin='nao' and usuario_id='" . $_SESSION["usuarioID"] . "'";
        ${$GLOBALS["ljoumqicvd"]} = $conn->prepare(${$GLOBALS["ljoumqicvd"]});
        $SQLnoti->execute();
        ${$GLOBALS["qvmwyqoycnp"]} = $SQLnoti->rowCount();
        if (${$GLOBALS["qlguyfbtyi"]} > 0) {
            $GLOBALS["rqiqlln"] = "tudo";
            while (${$GLOBALS["rqiqlln"]} = $SQLnoti->fetch()) {
                ${$GLOBALS["gewhrwd"]} = "update notificacoes set lido='sim' where id='" . ${$GLOBALS["fjysumqmxrl"]}["id"] . "'";
                $klbmvnu = "SQLnotiler";
                $SQLnotiler = $conn->prepare(${$GLOBALS["gewhrwd"]});
                $SQLnotiler->execute();
            }
        }
    } elseif (${$cjnxuetxmxxo} == "chamados") {
        ${$GLOBALS["ljoumqicvd"]} = "select * from  notificacoes where lido='nao' and tipo='chamados' and admin='nao' and usuario_id='" . $_SESSION["usuarioID"] . "'";
        $fbenjcphgbdf = "SQLnoti";
        $SQLnoti = $conn->prepare(${$GLOBALS["ljoumqicvd"]});
        $SQLnoti->execute();
        ${$GLOBALS["qlguyfbtyi"]} = $SQLnoti->rowCount();
        $qevqwrrl = "totalnoti";
        if ($totalnoti > 0) {
            $iqroeddpc = "tudo";
            while (${$iqroeddpc} = $SQLnoti->fetch()) {
                $hubgplgdndd = "tudo";
                $GLOBALS["pzmplj"] = "SQLnotiler";
                ${$GLOBALS["gewhrwd"]} = "update notificacoes set lido='sim' where id='" . $tudo["id"] . "'";
                ${$GLOBALS["gewhrwd"]} = $conn->prepare(${$GLOBALS["pzmplj"]});
                $SQLnotiler->execute();
            }
        }
    }
} else {
    ${$GLOBALS["imwvfvkbhsv"]} = "tudo";
}
echo "<script type=\"text/javascript\" src=\"../../app-assets/plugins/sort-table.js\"></script>\n<script>\n\$(document).ready(function() {\n\$(\"#myInput\").on(\"keyup\", function() {\nvar value = \$(this).val().toLowerCase();\n\$(\"#myTable tr\").filter(function() {\n\$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)\n});\n});\n});\n</script>\n<style>\n.card-datatable {\npadding-left: 5px;\npadding-right: 5px;\n}\n</style>\n<section id=\"complex-header-datatable\">\n<div class=\"row\">\n<div class=\"col-12\">\n<div class=\"card\">\n<div class=\"card-header border-bottom\">\n<h4 class=\"card-title\">\xc3\x9altimas Notifica\xc3\xa7\xc3\xb5es</h4>\n</div>\n<div class=\"card-datatable\">\n<table id=\"example\" class=\"table\">\n<thead>\n<tr>\n<th>ID</th>\n<th>TIPO</th>\n<th>DATA|HORA</th>\n<th>INFORMA\xc3\x87OES</th>\n<th>DETALHES</th>\n</tr>\n</thead>\n<tbody>\n";
if (${$GLOBALS["imwvfvkbhsv"]} == "tudo") {
    $pkcgjpnqse = "SQLUPUser";
    $lefitinf = "usuario";
    $SQLUPUser = "SELECT * FROM notificacoes where usuario_id =  '" . $usuario["id_usuario"] . "' and admin='nao' ORDER BY id desc LIMIT 15";
} else {
    $sccznjhtxes = "usuario";
    ${$GLOBALS["onfgzobd"]} = "SELECT * FROM notificacoes where usuario_id =  '" . $usuario["id_usuario"] . "' and tipo='" . ${$GLOBALS["imwvfvkbhsv"]} . "' and admin='nao' ORDER BY id desc LIMIT 15";
}
${$GLOBALS["onfgzobd"]} = $conn->prepare(${$GLOBALS["onfgzobd"]});
$SQLUPUser->execute();
if ($SQLUPUser->rowCount() > 0) {
    while (${$GLOBALS["nsnewrkx"]} = $SQLUPUser->fetch()) {
        $qzmdlrgtd = "info";
        $vlfpji = "tipo";
        $GLOBALS["xukigegjg"] = "tipo";
        $GLOBALS["dpwdbrp"] = "tipo";
        $GLOBALS["quqlkh"] = "tipo";
        $GLOBALS["pjodfjijf"] = "class";
        $GLOBALS["gobfvamo"] = "noti";
        $GLOBALS["ilnycvvp"] = "noti";
        $vapofvp = "class";
        $blucxqrejv = "info";
        $idnnrxylpj = "class";
        $GLOBALS["oizolrjqdc"] = "noti";
        $hbktqwuisjg = "info";
        $GLOBALS["bkedttm"] = "tipo";
        $jqobxcdterd = "class";
        switch (${$GLOBALS["nsnewrkx"]}["tipo"]) {
            case "fatura":
                ${$GLOBALS["bkedttm"]} = "Fatura";
                ${$GLOBALS["qcgjsbrnf"]} = "label label-success";
                ${$GLOBALS["hhlajgvnvpd"]} = "Visualizar";
                break;
            case "conta":
                ${$GLOBALS["imwvfvkbhsv"]} = "Conta";
                ${$idnnrxylpj} = "label label-warning";
                ${$qzmdlrgtd} = ${$GLOBALS["gobfvamo"]}["info_outros"];
                break;
            case "revenda":
                ${$GLOBALS["xukigegjg"]} = "Revenda";
                ${$GLOBALS["qcgjsbrnf"]} = "label label-danger";
                ${$GLOBALS["hhlajgvnvpd"]} = ${$GLOBALS["nsnewrkx"]}["info_outros"];
                break;
            case "subrevenda":
                ${$GLOBALS["dpwdbrp"]} = "Revenda-SUB";
                ${$vapofvp} = "label label-primary";
                ${$GLOBALS["hhlajgvnvpd"]} = "Sobre a Revenda";
                break;
            case "usuario":
                ${$GLOBALS["imwvfvkbhsv"]} = "Us\xc3\xbaario VPN";
                ${$GLOBALS["pjodfjijf"]} = "label label-primary";
                ${$GLOBALS["hhlajgvnvpd"]} = "Sobre Suas Contas";
                break;
            case "outros":
                ${$vlfpji} = "Outros";
                ${$jqobxcdterd} = "label label-primary";
                ${$hbktqwuisjg} = ${$GLOBALS["nsnewrkx"]}["info_outros"];
                break;
            case "chamados":
                ${$GLOBALS["imwvfvkbhsv"]} = "Chamado/Suporte";
                ${$GLOBALS["qcgjsbrnf"]} = "label label-primary";
                ${$blucxqrejv} = ${$GLOBALS["oizolrjqdc"]}["info_outros"];
                break;
            default:
                ${$GLOBALS["imwvfvkbhsv"]} = "erro";
                break;
        }
        ${$GLOBALS["qpmvvf"]} = ${$GLOBALS["ilnycvvp"]}["data"];
        echo "<tr>\n<td>";
        echo ${$GLOBALS["nsnewrkx"]}["id"];
        echo "</td>\n<td>";
        echo ${$GLOBALS["quqlkh"]};
        echo "</td>\n<td>";
        echo date("d/m/Y H:i:s", strtotime(${$GLOBALS["qpmvvf"]}));
        echo "</td>\n";
        if (${$GLOBALS["nsnewrkx"]}["linkfatura"] == "Admin") {
            echo "<td><span class=\"label label-warning bg-yellow-active color-palette\">Administra\xc3\xa7\xc3\xa3o</span></td>\n";
        } else {
            $bnkhyfdgqsg = "tipo";
            if ($tipo == "Fatura") {
                $GLOBALS["cddtbylteqd"] = "class";
                $GLOBALS["mvhcerzhgjw"] = "noti";
                echo "<td><a href=\"home.php?page=";
                echo $noti["linkfatura"];
                echo "\"><span class=\"";
                echo $class;
                echo "\">";
                echo ${$GLOBALS["hhlajgvnvpd"]};
                echo "</span></a></td>\n";
            } else {
                $dgucfmk = "info";
                $aepmqtbpedu = "class";
                echo "<td><span class=\"";
                echo $class;
                echo "\">";
                echo $info;
                echo "</span></td>\n";
            }
        }
        echo "<td>";
        echo ${$GLOBALS["nsnewrkx"]}["mensagem"];
        echo "</td>\n</tr>\n";
    }
} else {
    echo "<tr ><td valign=\"top\" colspan=\"5\">Nenhuma notifica\xc3\xa7\xc3\xa3o encontrada</td></tr>\n";
}
echo "</tbody>\n</table>\n</div>\n</div>\n</div>\n</div>\n</section>\n";
