<?php

$GLOBALS["metdxvb"] = "datacriado";
$GLOBALS["rpvfunpt"] = "info";
$GLOBALS["rhjneqx"] = "class";
$GLOBALS["lpzhhkyy"] = "noti";
$GLOBALS["luwtmnt"] = "SQLUPUser";
$GLOBALS["grfiui"] = "tudo";
$vjipwlhsap = "tipo";
$GLOBALS["dhowimjrx"] = "SQLnotiler";
$GLOBALS["zqojmttvqp"] = "totalnoti";
$GLOBALS["rvvkndhsm"] = "SQLnoti";
$GLOBALS["tipdwproa"] = "tipo";
$GLOBALS["rnvshtjei"] = "ler";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/notificacoes.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
protegePagina("donoadmin");
if (isset($_GET["ler"])) {
    $GLOBALS["ksmywe"] = "tipo";
    $ksbqockll = "tipo";
    $GLOBALS["kucjfrjwxc"] = "ler";
    $GLOBALS["mhchmrycsk"] = "tipo";
    $lqneine = "ler";
    $phyaytwqrfew = "ler";
    $GLOBALS["phoxbiknduv"] = "ler";
    $fmjwgcyrq = "ler";
    $GLOBALS["zzoltc"] = "ler";
    switch ($_GET["ler"]) {
        case "all":
            ${$GLOBALS["zzoltc"]} = "tudo";
            ${$GLOBALS["ksmywe"]} = "tudo";
            break;
        case "others":
            ${$GLOBALS["rnvshtjei"]} = "others";
            ${$GLOBALS["mhchmrycsk"]} = "outros";
            break;
        case "fatu":
            ${$GLOBALS["rnvshtjei"]} = "fatu";
            ${$GLOBALS["tipdwproa"]} = "fatura";
            break;
        case "accs":
            ${$GLOBALS["rnvshtjei"]} = "contas";
            ${$GLOBALS["tipdwproa"]} = "conta";
            break;
        case "reve":
            ${$lqneine} = "revenda";
            ${$ksbqockll} = "revenda";
            break;
        case "chamados":
            ${$GLOBALS["kucjfrjwxc"]} = "chamados";
            ${$GLOBALS["tipdwproa"]} = "chamados";
            break;
        default:
            ${$GLOBALS["rnvshtjei"]} = "nada";
            break;
    }
    $GLOBALS["duuvepfvlo"] = "ler";
    if (${$GLOBALS["rnvshtjei"]} == "nada") {
    } elseif (${$phyaytwqrfew} == "tudo") {
        $GLOBALS["polniha"] = "SQLnoti";
        $SQLnoti = "select * from  notificacoes where lido='nao' and admin='sim'";
        $bcfybihxknh = "totalnoti";
        ${$GLOBALS["rvvkndhsm"]} = $conn->prepare(${$GLOBALS["rvvkndhsm"]});
        $SQLnoti->execute();
        ${$bcfybihxknh} = $SQLnoti->rowCount();
        if (${$GLOBALS["zqojmttvqp"]} > 0) {
            $GLOBALS["laoayycp"] = "tudo";
            while (${$GLOBALS["laoayycp"]} = $SQLnoti->fetch()) {
                $icnoxyb = "SQLnotiler";
                $GLOBALS["bddmyfljgr"] = "SQLnotiler";
                $cyemxnusu = "tudo";
                $SQLnotiler = "update notificacoes set lido='sim' where id='" . $tudo["id"] . "'";
                $SQLnotiler = $conn->prepare(${$GLOBALS["dhowimjrx"]});
                $SQLnotiler->execute();
            }
        }
    } elseif (${$GLOBALS["rnvshtjei"]} == "others") {
        $fwssspyah = "totalnoti";
        $GLOBALS["ckviqx"] = "SQLnoti";
        ${$GLOBALS["rvvkndhsm"]} = "select * from  notificacoes where lido='nao' and tipo='outros' and admin='sim'";
        ${$GLOBALS["rvvkndhsm"]} = $conn->prepare(${$GLOBALS["ckviqx"]});
        $jiyhedubeyfk = "totalnoti";
        $SQLnoti->execute();
        ${$fwssspyah} = $SQLnoti->rowCount();
        if (${$jiyhedubeyfk} > 0) {
            while (${$GLOBALS["grfiui"]} = $SQLnoti->fetch()) {
                $GLOBALS["kcwhxkbwybe"] = "SQLnotiler";
                $GLOBALS["gvfhfeo"] = "SQLnotiler";
                $SQLnotiler = "update notificacoes set lido='sim' where id='" . ${$GLOBALS["grfiui"]}["id"] . "'";
                $SQLnotiler = $conn->prepare(${$GLOBALS["dhowimjrx"]});
                $SQLnotiler->execute();
            }
        }
    } elseif (${$GLOBALS["phoxbiknduv"]} == "fatu") {
        ${$GLOBALS["rvvkndhsm"]} = "select * from  notificacoes where lido='nao' and tipo='fatura' and admin='sim'";
        $jvqpchxhh = "SQLnoti";
        $SQLnoti = $conn->prepare(${$GLOBALS["rvvkndhsm"]});
        $SQLnoti->execute();
        ${$GLOBALS["zqojmttvqp"]} = $SQLnoti->rowCount();
        if (${$GLOBALS["zqojmttvqp"]} > 0) {
            $GLOBALS["wknoucc"] = "tudo";
            while (${$GLOBALS["wknoucc"]} = $SQLnoti->fetch()) {
                $bkfuwsuusf = "SQLnotiler";
                $mfgcfumk = "SQLnotiler";
                $SQLnotiler = "update notificacoes set lido='sim' where id='" . ${$GLOBALS["grfiui"]}["id"] . "'";
                $SQLnotiler = $conn->prepare(${$GLOBALS["dhowimjrx"]});
                $SQLnotiler->execute();
            }
        }
    } elseif (${$GLOBALS["rnvshtjei"]} == "contas") {
        $zyuvarrcccbj = "SQLnoti";
        $GLOBALS["lblrhqv"] = "totalnoti";
        ${$GLOBALS["rvvkndhsm"]} = "select * from  notificacoes where lido='nao' and tipo='conta' and admin='sim'";
        ${$GLOBALS["rvvkndhsm"]} = $conn->prepare(${$zyuvarrcccbj});
        $SQLnoti->execute();
        ${$GLOBALS["lblrhqv"]} = $SQLnoti->rowCount();
        if (${$GLOBALS["zqojmttvqp"]} > 0) {
            $GLOBALS["rxtjhwjlxwf"] = "tudo";
            while (${$GLOBALS["rxtjhwjlxwf"]} = $SQLnoti->fetch()) {
                ${$GLOBALS["dhowimjrx"]} = "update notificacoes set lido='sim' where id='" . ${$GLOBALS["grfiui"]}["id"] . "'";
                ${$GLOBALS["dhowimjrx"]} = $conn->prepare(${$GLOBALS["dhowimjrx"]});
                $SQLnotiler->execute();
            }
        }
    } elseif (${$fmjwgcyrq} == "revenda") {
        $lxrzzhrke = "SQLnoti";
        $GLOBALS["vsahnxf"] = "SQLnoti";
        $SQLnoti = "select * from  notificacoes where lido='nao' and tipo='revenda' and admin='sim'";
        ${$GLOBALS["rvvkndhsm"]} = $conn->prepare($SQLnoti);
        $GLOBALS["hdpzyqxizm"] = "totalnoti";
        $SQLnoti->execute();
        $totalnoti = $SQLnoti->rowCount();
        if (${$GLOBALS["zqojmttvqp"]} > 0) {
            while (${$GLOBALS["grfiui"]} = $SQLnoti->fetch()) {
                $GLOBALS["yqywrc"] = "SQLnotiler";
                $bsjcutr = "SQLnotiler";
                $ksnlkuh = "tudo";
                ${$GLOBALS["dhowimjrx"]} = "update notificacoes set lido='sim' where id='" . $tudo["id"] . "'";
                ${$bsjcutr} = $conn->prepare(${$GLOBALS["yqywrc"]});
                $SQLnotiler->execute();
            }
        }
    } elseif (${$GLOBALS["duuvepfvlo"]} == "chamados") {
        $eelbxqeq = "SQLnoti";
        ${$GLOBALS["rvvkndhsm"]} = "select * from  notificacoes where lido='nao' and tipo='chamados' and admin='sim'";
        $GLOBALS["xihnetvqxjn"] = "SQLnoti";
        $SQLnoti = $conn->prepare(${$eelbxqeq});
        $pomsqomn = "totalnoti";
        $SQLnoti->execute();
        $totalnoti = $SQLnoti->rowCount();
        if (${$GLOBALS["zqojmttvqp"]} > 0) {
            while (${$GLOBALS["grfiui"]} = $SQLnoti->fetch()) {
                $GLOBALS["mhvhcyukoi"] = "SQLnotiler";
                $GLOBALS["dbytypbmhy"] = "SQLnotiler";
                $totrwhmkbeff = "SQLnotiler";
                $SQLnotiler = "update notificacoes set lido='sim' where id='" . ${$GLOBALS["grfiui"]}["id"] . "'";
                $SQLnotiler = $conn->prepare($SQLnotiler);
                $SQLnotiler->execute();
            }
        }
    }
} else {
    ${$GLOBALS["tipdwproa"]} = "tudo";
}
$bgkqqfqcgm = "SQLUPUser";
echo "<style>\n.card-datatable {\npadding-left: 5px;\npadding-right: 5px;\n}\n</style>\n<section id=\"complex-header-datatable\">\n<div class=\"row\">\n<div class=\"col-12\">\n<div class=\"card\">\n<div class=\"card-header border-bottom\">\n<h4 class=\"card-title\">Notifica\xc3\xa7\xc3\xb5es</h4>\n</div>\n<div class=\"card-datatable\">\n<table id=\"example\" class=\"table table-striped\">\n<thead>\n<tr>\n<th>ID</th>\n<th>TIPO</th>\n<th>DATA|HORA</th>\n<th>INFORMA\xc3\x87OES</th>\n<th>DETALHES</th>\n</tr>\n</thead>\n<tbody>\n";
$eyeagbpf = "SQLUPUser";
if (${$vjipwlhsap} == "tudo") {
    $GLOBALS["wqjepy"] = "SQLUPUser";
    $SQLUPUser = "SELECT * FROM notificacoes where admin='sim' ORDER BY id desc LIMIT 15";
} else {
    $tedqeqn = "tipo";
    ${$GLOBALS["luwtmnt"]} = "SELECT * FROM notificacoes where admin='sim' and tipo='" . $tipo . "' ORDER BY id desc LIMIT 15";
}
${$bgkqqfqcgm} = $conn->prepare(${$eyeagbpf});
$SQLUPUser->execute();
if ($SQLUPUser->rowCount() > 0) {
    while (${$GLOBALS["lpzhhkyy"]} = $SQLUPUser->fetch()) {
        $GLOBALS["wbssgatyu"] = "noti";
        $uuxrlls = "tipo";
        $qbxiofplv = "datacriado";
        $GLOBALS["fvfrbrq"] = "tipo";
        $GLOBALS["ryruqoiye"] = "class";
        $dcvjaahgwd = "info";
        $GLOBALS["djmokvdp"] = "noti";
        $GLOBALS["yuysrrr"] = "tipo";
        $yqdwvgawhhs = "noti";
        $GLOBALS["orbcwbjvdrr"] = "tipo";
        $gsactipmtb = "tipo";
        $GLOBALS["fvrkpry"] = "info";
        $GLOBALS["slmetxjygm"] = "class";
        $GLOBALS["mdimplvymhme"] = "info";
        $GLOBALS["lihswyxymyw"] = "info";
        switch ($noti["tipo"]) {
            case "fatura":
                ${$GLOBALS["tipdwproa"]} = "Fatura";
                ${$GLOBALS["rhjneqx"]} = "label label-success";
                ${$GLOBALS["rpvfunpt"]} = "Visualizar";
                break;
            case "conta":
                ${$GLOBALS["tipdwproa"]} = "Conta";
                ${$GLOBALS["rhjneqx"]} = "label label-warning";
                ${$GLOBALS["lihswyxymyw"]} = ${$yqdwvgawhhs}["info_outros"];
                break;
            case "revenda":
                ${$gsactipmtb} = "Revenda";
                ${$GLOBALS["slmetxjygm"]} = "label label-danger";
                ${$GLOBALS["mdimplvymhme"]} = ${$GLOBALS["lpzhhkyy"]}["info_outros"];
                break;
            case "outros":
                ${$uuxrlls} = "Info";
                ${$GLOBALS["rhjneqx"]} = "label label-primary";
                ${$dcvjaahgwd} = ${$GLOBALS["lpzhhkyy"]}["info_outros"];
                break;
            case "chamados":
                ${$GLOBALS["orbcwbjvdrr"]} = "Ticket";
                ${$GLOBALS["ryruqoiye"]} = "label label-primary";
                ${$GLOBALS["fvrkpry"]} = "Suporte";
                break;
            default:
                ${$GLOBALS["yuysrrr"]} = "erro";
                break;
        }
        ${$qbxiofplv} = ${$GLOBALS["lpzhhkyy"]}["data"];
        echo "<tr>\n<td>";
        $wehrchrq = "tipo";
        echo ${$GLOBALS["djmokvdp"]}["id"];
        echo "</td>\n<td>";
        echo $tipo;
        echo "</td>\n<td>";
        echo date("d/m/Y H:i:s", strtotime(${$GLOBALS["metdxvb"]}));
        echo "</td>\n";
        if (${$GLOBALS["fvfrbrq"]} == "Fatura") {
            $bsmdfpovcjuh = "class";
            echo "<td><a href=\"home.php?page=";
            echo ${$GLOBALS["lpzhhkyy"]}["linkfatura"];
            echo "\"><span class=\"";
            echo $class;
            echo "\">";
            echo ${$GLOBALS["rpvfunpt"]};
            echo "</span></a></td>\n";
        } else {
            $dbamjuxd = "info";
            $GLOBALS["qmzcmuhwnv"] = "class";
            echo "<td><span class=\"";
            echo $class;
            echo "\">";
            echo $info;
            echo "</span></td>\n";
        }
        echo "<td>";
        echo ${$GLOBALS["lpzhhkyy"]}["mensagem"];
        echo "</td>\n</tr>\n";
    }
} else {
    echo "<br>\n";
}
echo "</tbody>\n</table>\n</div>\n</div>\n</div>\n</div>\n</section>\n";
