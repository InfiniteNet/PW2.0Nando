<?php

$GLOBALS["pcxjirb"] = "total_subrev";
$GLOBALS["gotgnobvtzx"] = "mytotal";
$GLOBALS["ijnmcezymizn"] = "total_sub";
$GLOBALS["inmbekhlcnwf"] = "row_user";
$GLOBALS["fmghhqjdyqwm"] = "SQLUSSH";
$GLOBALS["kkgisdnebfv"] = "SQLSUB";
$GLOBALS["fnjifegl"] = "stsd";
$GLOBALS["whcumlpli"] = "dias_acesso";
$GLOBALS["ylvsngcjorl"] = "diferenca";
$GLOBALS["tefppaae"] = "user";
$GLOBALS["rixeptd"] = "data_atual";
$GLOBALS["vyfhutfm"] = "openvpn";
$GLOBALS["eqwlqdgndoi"] = "SQLopen";
$GLOBALS["jhksgkslpz"] = "SQLServidor";
$GLOBALS["sbsagjz"] = "totalacess4";
$GLOBALS["syvgnghlsnqk"] = "todosacessos3";
$GLOBALS["hewzhs"] = "SQLqtdserveracessos4";
$GLOBALS["yntdhietk"] = "totalacess3";
$GLOBALS["kviitbve"] = "SQLqtdserveracessos3";
$GLOBALS["afsndjvp"] = "rowS";
$GLOBALS["osqpmkaguems"] = "SQLUserSub";
$GLOBALS["naigldhbw"] = "SQLContasSSH";
$GLOBALS["cqsucj"] = "SQLAcessoSSH";
$GLOBALS["jvpwhewvejg"] = "total_acesso_ssh2";
$GLOBALS["dnvkteyqs"] = "contas";
$GLOBALS["awxgmzauzq"] = "row";
$GLOBALS["sevbcxxkq"] = "usuario";
$GLOBALS["epkkvfchzj"] = "bgbar";
$GLOBALS["etdjjphsm"] = "sucessobar";
$GLOBALS["fbgzniomv"] = "valor_porce";
$GLOBALS["kqdffcudzyjj"] = "porcent";
$GLOBALS["eijdhdfmmmie"] = "usados";
$GLOBALS["xwxtgk"] = "totalacess";
$GLOBALS["uowukksvvl"] = "totalacess2";
$biyydgiih = "disponiveis";
$GLOBALS["srhchgcpxi"] = "SQLqtdserveracessos2";
$pmuijjf = "SQLqtdserveracessos2";
$GLOBALS["wmtdeosh"] = "qtddoserverusado";
$GLOBALS["jryqpnnk"] = "SQLAcessoServidor";
$GLOBALS["xeqmufliop"] = "usados";
$GLOBALS["vivlkowuj"] = "qtdusados";
$GLOBALS["yadbvmkjmn"] = "todosacessos";
$GLOBALS["rojteqdvkz"] = "SQLcontaqtdsshusado";
$GLOBALS["nsumzk"] = "qtdusadosdele";
$azvuxgr = "SQLqtdserveracessos";
$GLOBALS["gkqqrqq"] = "SQLcontaqtdsshusadodele";
$GLOBALS["btsowzvz"] = "usuariosdele";
$cnvurfgz = "SQLqtdserveracessos";
$GLOBALS["grxrcdhb"] = "todosacessos";
$GLOBALS["meoaegpwvr"] = "SQLusuariosdele";
$GLOBALS["ynwmox"] = "SQLusuario";
$GLOBALS["qydyvzctf"] = "disponiveis";
$GLOBALS["flnffprlkh"] = "resultado";
$GLOBALS["tvyiifsv"] = "SQLusuariosdele";
$GLOBALS["yxfpiqmw"] = "qtdusados";
$GLOBALS["qtlfwri"] = "totalacess";
$GLOBALS["mqlseuez"] = "qtddoserverusado";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"../../../app-assets/vendors/css/charts/apexcharts.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../../../app-assets/css/plugins/charts/chart-apex.css\">\n<script src=\"../../../app-assets/vendors/js/charts/apexcharts.min.js\"></script>\n";
$ojjlkhrcfm = "totalacess";
$GLOBALS["fyirlvf"] = "resultado";
$GLOBALS["bbgxgwkviofh"] = "SQLAcessoServidor";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/listar.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
$wufkfhcvj = "SQLcontaqtdsshusado";
$GLOBALS["suygbnfsem"] = "valor_porce";
$GLOBALS["toqzznevkkok"] = "SQLqtdserveracessos2";
$xmvwqtuutd = "usuario";
protegePagina("user");
$nmoulpd = "SQLusuario";
$GLOBALS["bhrunugnvx"] = "user";
$GLOBALS["vtvbedjozn"] = "SQLqtdserveracessos";
$rqlnwql = "SQLusuariosdele";
if ($usuario["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
${$GLOBALS["mqlseuez"]} = 0;
${$GLOBALS["ynwmox"]} = "SELECT * FROM usuario where id_usuario='" . $_SESSION["usuarioID"] . "'";
${$GLOBALS["ynwmox"]} = $conn->prepare(${$nmoulpd});
$nutmceho = "valor_porce";
$GLOBALS["crawjvls"] = "qtdusados";
$SQLusuario->execute();
${$GLOBALS["bhrunugnvx"]} = $SQLusuario->fetch();
$GLOBALS["xpypxxogs"] = "SQLcontaqtdsshusado";
${$GLOBALS["tvyiifsv"]} = "SELECT * FROM usuario where id_mestre='" . $_SESSION["usuarioID"] . "'";
${$GLOBALS["meoaegpwvr"]} = $conn->prepare(${$rqlnwql});
$SQLusuariosdele->execute();
if ($SQLusuariosdele->rowCount() > 0) {
    while (${$GLOBALS["btsowzvz"]} = $SQLusuariosdele->fetch()) {
        $GLOBALS["uirfpyddi"] = "SQLcontaqtdsshusadodele";
        $irgwjei = "SQLcontaqtdsshusadodele";
        ${$GLOBALS["gkqqrqq"]} = "SELECT sum(acesso) as acessosdosserversusados2 FROM conta_ssh where id_usuario = '" . ${$GLOBALS["btsowzvz"]}["id_usuario"] . "'";
        ${$irgwjei} = $conn->prepare(${$GLOBALS["uirfpyddi"]});
        $SQLcontaqtdsshusadodele->execute();
        $GLOBALS["lwhcxb"] = "qtdusadosdele";
        $ohhhxudlnpkx = "qtddoserverusado";
        ${$GLOBALS["nsumzk"]} = $SQLcontaqtdsshusadodele->fetch();
        ${$ohhhxudlnpkx} += ${$GLOBALS["lwhcxb"]}["acessosdosserversusados2"];
    }
}
${$wufkfhcvj} = "SELECT sum(acesso) as acessosdosserversusados FROM conta_ssh where id_usuario = '" . $_SESSION["usuarioID"] . "'";
$GLOBALS["ugqpeydsqg"] = "usados";
${$GLOBALS["rojteqdvkz"]} = $conn->prepare(${$GLOBALS["xpypxxogs"]});
$SQLcontaqtdsshusado->execute();
${$GLOBALS["vivlkowuj"]} = $SQLcontaqtdsshusado->fetch();
${$GLOBALS["wmtdeosh"]} += ${$GLOBALS["yxfpiqmw"]}["acessosdosserversusados"];
${$GLOBALS["yadbvmkjmn"]} = 0;
${$GLOBALS["srhchgcpxi"]} = "SELECT sum(qtd) as todosacessos2 FROM acesso_servidor where id_mestre = '" . $_SESSION["usuarioID"] . "'";
${$pmuijjf} = $conn->prepare(${$GLOBALS["toqzznevkkok"]});
$GLOBALS["qqyvtof"] = "valor_porce";
$SQLqtdserveracessos2->execute();
${$GLOBALS["uowukksvvl"]} = $SQLqtdserveracessos2->fetch();
${$GLOBALS["grxrcdhb"]} += ${$GLOBALS["uowukksvvl"]}["todosacessos2"];
$GLOBALS["fppkvecfh"] = "valor_porce";
${$cnvurfgz} = "SELECT sum(qtd) as todosacessos FROM acesso_servidor where id_usuario = '" . $_SESSION["usuarioID"] . "'";
${$azvuxgr} = $conn->prepare(${$GLOBALS["vtvbedjozn"]});
$SQLqtdserveracessos->execute();
${$GLOBALS["qtlfwri"]} = $SQLqtdserveracessos->fetch();
${$GLOBALS["uowukksvvl"]}["todosacessos2"] += ${$GLOBALS["crawjvls"]}["acessosdosserversusados"];
$mmbqhdkqq = "disponiveis";
${$GLOBALS["xwxtgk"]}["todosacessos"] -= ${$GLOBALS["eijdhdfmmmie"]};
if (${$mmbqhdkqq} <= 0) {
    $GLOBALS["yqghevev"] = "disponiveis";
    $disponiveis = 0;
}
$GLOBALS["lmqxgfg"] = "SQLAcessoServidor";
${$GLOBALS["kqdffcudzyjj"]} = ${$GLOBALS["eijdhdfmmmie"]} / ${$GLOBALS["xwxtgk"]}["todosacessos"] * 100;
${$GLOBALS["fyirlvf"]} = ${$GLOBALS["kqdffcudzyjj"]};
${$GLOBALS["suygbnfsem"]} = round(${$GLOBALS["flnffprlkh"]});
if (${$GLOBALS["fbgzniomv"]} >= 100) {
    ${$GLOBALS["fbgzniomv"]} = 100;
}
if (${$GLOBALS["qqyvtof"]} <= 0) {
    $GLOBALS["xqpyjr"] = "valor_porce";
    $valor_porce = 0;
}
if (${$GLOBALS["fbgzniomv"]} >= 70 and ${$GLOBALS["fppkvecfh"]} < 90) {
    $GLOBALS["jigwhgfior"] = "bgbar";
    $qmfymesiws = "sucessobar";
    $sucessobar = "warning";
    $bgbar = "orange";
} elseif (${$nutmceho} >= 90) {
    $edmwyvgvm = "sucessobar";
    $sucessobar = "danger";
    $GLOBALS["iuujgi"] = "bgbar";
    $bgbar = "red";
} else {
    ${$GLOBALS["etdjjphsm"]} = "success";
    ${$GLOBALS["epkkvfchzj"]} = "green";
}
echo "<style>\n.card-datatable {\npadding-left: 5px;\npadding-right: 5px;\n}\n</style>\n<div class=\"row match-height\">\n<!-- Support Tracker Chart Card starts -->\n<div class=\"col-lg-12 col-12\">\n<div class=\"card text-center\">\n<div class=\"card-header d-flex justify-content-between pb-0\">\n<h4 class=\"card-title text-center\">Estat\xc3\xadsticas de uso dos servidores</h4>\n</div>\n<div class=\"card-body\">\n<div class=\"row\">\n<div class=\"col-sm-12 col-12 d-flex justify-content-center\">\n<div id=\"line-chart2\" value=\"10\"></div>\n</div>\n</div>\n<div class=\"d-flex justify-content-between mt-1\">\n<div class=\"text-center\">\n<p class=\"card-text mb-50\">Em uso</p>\n<span class=\"font-large-1 fw-bold\">";
echo ${$GLOBALS["xeqmufliop"]};
echo "</span>\n</div>\n<div class=\"text-center\">\n<p class=\"card-text mb-50\">Total liberado</p>\n<span class=\"font-large-1 fw-bold\">";
echo ${$ojjlkhrcfm}["todosacessos"];
echo "</span>\n</div>\n<div class=\"text-center\">\n<p class=\"card-text mb-50\">Dispon\xc3\xadvel</p>\n<span class=\"font-large-1 fw-bold\">";
echo ${$biyydgiih};
echo "</span>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n<section id=\"complex-header-datatable\">\n<div class=\"row\">\n<div class=\"col-12\">\n<div class=\"card\">\n<div class=\"card-header border-bottom \">\n<h4 class=\"card-title\">Servidores dispon\xc3\xadveis listados abaixo</h4>\n</div>\n<div class=\"card-datatable\">\n<table id=\"example\" class=\"table\">\n<thead>\n<tr>\n<th>NOME</th>\n<th>APLICATIVO</th>\n<th>LIMITE TOTAL</th>\n<th>USO EM CONTAS</th>\n";
if (${$GLOBALS["sevbcxxkq"]}["subrevenda"] != "sim") {
    echo "<th>USO EM REVENDAS</th>\n";
}
echo "<th>VALIDADE</th>\n</tr>\n</thead>\n<tbody id=\"myTable\">\n";
${$GLOBALS["jryqpnnk"]} = "SELECT * FROM acesso_servidor where id_usuario = '" . $_SESSION["usuarioID"] . "' ";
${$GLOBALS["lmqxgfg"]} = $conn->prepare(${$GLOBALS["bbgxgwkviofh"]});
$SQLAcessoServidor->execute();
if ($SQLAcessoServidor->rowCount() > 0) {
    while (${$GLOBALS["awxgmzauzq"]} = $SQLAcessoServidor->fetch()) {
        $GLOBALS["hztqtd"] = "texto";
        $arlpkkjmi = "row";
        $GLOBALS["qhioroofyl"] = "total_acesso_ssh";
        $GLOBALS["nftqnfzs"] = "todosacessos2";
        $jnzhctyn = "todosacessos2";
        $GLOBALS["ynufsehbn"] = "totalacess4";
        $GLOBALS["isfjvcvd"] = "total_acesso_ssh";
        $uudnbbut = "SQLAcessoSSH";
        $mivgwvnulm = "SQLAcessoSSH";
        $GLOBALS["rkzqwpmc"] = "SQLAcessoSSH";
        $yhmavxullmf = "row";
        $cxsuehsvsutr = "todosacessos2";
        $uprbllnf = "SQLAcessoSSH";
        ${$GLOBALS["dnvkteyqs"]} = 0;
        $eyrxiffoupqn = "totalacess4";
        $GLOBALS["vgcwcoo"] = "row";
        $wnesyygkpnn = "SQLServidor";
        $GLOBALS["gzqbrbvg"] = "row";
        ${$GLOBALS["isfjvcvd"]} = 0;
        $GLOBALS["bpddnaohdl"] = "todosacessos3";
        ${$GLOBALS["jvpwhewvejg"]} = 0;
        $GLOBALS["ulxjictpd"] = "SQLContasSSH";
        ${$GLOBALS["cqsucj"]} = "SELECT sum(acesso) AS quantidade FROM conta_ssh where id_usuario='" . $_SESSION["usuarioID"] . "' and id_servidor='" . ${$yhmavxullmf}["id_servidor"] . "'";
        ${$GLOBALS["rkzqwpmc"]} = $conn->prepare(${$uudnbbut});
        $SQLAcessoSSH->execute();
        $wlfohl = "servidor";
        ${$GLOBALS["cqsucj"]} = $SQLAcessoSSH->fetch();
        ${$GLOBALS["qhioroofyl"]} += ${$uprbllnf}["quantidade"];
        ${$GLOBALS["jvpwhewvejg"]} += ${$mivgwvnulm}["quantidade"];
        ${$GLOBALS["ulxjictpd"]} = "select * from conta_ssh WHERE id_usuario = '" . $_SESSION["usuarioID"] . "' and id_servidor='" . ${$GLOBALS["awxgmzauzq"]}["id_servidor"] . "'";
        ${$GLOBALS["naigldhbw"]} = $conn->prepare(${$GLOBALS["naigldhbw"]});
        $SQLContasSSH->execute();
        ${$GLOBALS["dnvkteyqs"]} += $SQLContasSSH->rowCount();
        ${$GLOBALS["osqpmkaguems"]} = "select * from usuario WHERE id_mestre = '" . $_SESSION["usuarioID"] . "'";
        ${$GLOBALS["osqpmkaguems"]} = $conn->prepare(${$GLOBALS["osqpmkaguems"]});
        $SQLUserSub->execute();
        $unlfyrpikj = "row";
        $yxsbgkob = "SQLqtdserveracessos3";
        $bovcqbvkrnwf = "dias_acesso";
        $ybvmfrfpvh = "data_validade";
        if ($SQLUserSub->rowCount() > 0) {
            $GLOBALS["wchiysuwa"] = "rowS";
            while (${$GLOBALS["wchiysuwa"]} = $SQLUserSub->fetch()) {
                $xefwwyrxisn = "row";
                ${$GLOBALS["naigldhbw"]} = "select * from conta_ssh WHERE id_usuario = '" . ${$GLOBALS["afsndjvp"]}["id_usuario"] . "'  and id_servidor='" . $row["id_servidor"] . "'";
                $ibmenxdfuml = "SQLContasSSH";
                $oexoetivwm = "contas";
                $SQLContasSSH = $conn->prepare(${$GLOBALS["naigldhbw"]});
                $cykfjpgzfm = "SQLAcessoSSH";
                $SQLContasSSH->execute();
                $contas += $SQLContasSSH->rowCount();
                $lcobynss = "SQLAcessoSSH";
                $GLOBALS["snchwfhg"] = "rowS";
                ${$GLOBALS["cqsucj"]} = "SELECT sum(acesso) AS quantidade FROM conta_ssh where id_usuario='" . $rowS["id_usuario"] . "' and id_servidor='" . ${$GLOBALS["awxgmzauzq"]}["id_servidor"] . "'";
                ${$lcobynss} = $conn->prepare(${$GLOBALS["cqsucj"]});
                $SQLAcessoSSH->execute();
                $GLOBALS["cgxglabg"] = "total_acesso_ssh";
                ${$cykfjpgzfm} = $SQLAcessoSSH->fetch();
                ${$GLOBALS["cgxglabg"]} += ${$GLOBALS["cqsucj"]}["quantidade"];
            }
        }
        $srnmvvfngwg = "SQLopen";
        ${$jnzhctyn} = 0;
        ${$GLOBALS["bpddnaohdl"]} = 0;
        $pxjhpqm = "total_acesso_ssh2";
        ${$yxsbgkob} = "SELECT sum(qtd) as todosacessos3 FROM acesso_servidor where id_usuario = '" . ${$arlpkkjmi}["id_usuario"] . "' and id_servidor='" . ${$GLOBALS["vgcwcoo"]}["id_servidor"] . "' ";
        $GLOBALS["sfdqmkrzlo"] = "SQLqtdserveracessos4";
        ${$GLOBALS["kviitbve"]} = $conn->prepare(${$GLOBALS["kviitbve"]});
        $GLOBALS["rnenvbf"] = "totalacess3";
        $SQLqtdserveracessos3->execute();
        $qrvvdj = "SQLServidor";
        $totalacess3 = $SQLqtdserveracessos3->fetch();
        $GLOBALS["alnlkueeqhp"] = "row";
        $hmjoyolbo = "data_atual";
        ${$GLOBALS["nftqnfzs"]} += ${$GLOBALS["yntdhietk"]}["todosacessos3"];
        ${$GLOBALS["hewzhs"]} = "SELECT sum(qtd) as todosacessos4 FROM acesso_servidor where id_mestre = '" . ${$GLOBALS["alnlkueeqhp"]}["id_usuario"] . "' and id_servidor='" . ${$GLOBALS["awxgmzauzq"]}["id_servidor"] . "' ";
        ${$GLOBALS["sfdqmkrzlo"]} = $conn->prepare(${$GLOBALS["hewzhs"]});
        $SQLqtdserveracessos4->execute();
        ${$eyrxiffoupqn} = $SQLqtdserveracessos4->fetch();
        ${$cxsuehsvsutr} += ${$GLOBALS["ynufsehbn"]}["todosacessos4"];
        ${$GLOBALS["syvgnghlsnqk"]} += ${$GLOBALS["sbsagjz"]}["todosacessos4"];
        ${$qrvvdj} = "select * from servidor WHERE id_servidor = '" . ${$unlfyrpikj}["id_servidor"] . "' ";
        ${$wnesyygkpnn} = $conn->prepare(${$GLOBALS["jhksgkslpz"]});
        $GLOBALS["wvuogcxnhj"] = "servidor";
        $SQLServidor->execute();
        $servidor = $SQLServidor->fetch();
        ${$GLOBALS["eqwlqdgndoi"]} = "select * from ovpn WHERE servidor_id = '" . ${$GLOBALS["awxgmzauzq"]}["id_servidor"] . "' ";
        ${$srnmvvfngwg} = $conn->prepare(${$GLOBALS["eqwlqdgndoi"]});
        $SQLopen->execute();
        $hbqqcmgem = "data_validade";
        if ($SQLopen->rowCount() > 0) {
            $GLOBALS["mbmtkm"] = "openvpn";
            $omlbonxcb = "texto";
            $openvpn = $SQLopen->fetch();
            $texto = "<a href='../admin/pages/servidor/baixar_ovpn.php?id=" . ${$GLOBALS["vyfhutfm"]}["id"] . "' class=\"label label-info\">Baixar</a>";
        } else {
            $fzketmmg = "texto";
            $texto = "<span class=\"label label-danger\">Indisponivel</span>";
        }
        ${$GLOBALS["rixeptd"]} = date("Y-m-d H:i:s");
        ${$hbqqcmgem} = ${$GLOBALS["tefppaae"]}["validade"];
        if (${$ybvmfrfpvh} > ${$hmjoyolbo}) {
            $GLOBALS["gvxyjteinpu"] = "data_validade";
            $GLOBALS["pykepgwxxf"] = "dias_acesso";
            ${$GLOBALS["ylvsngcjorl"]} = strtotime($data_validade) - strtotime(${$GLOBALS["rixeptd"]});
            ${$GLOBALS["pykepgwxxf"]} = floor(${$GLOBALS["ylvsngcjorl"]} / 86400);
        } else {
            $bpexyhigv = "dias_acesso";
            $dias_acesso = 0;
        }
        if (${$GLOBALS["whcumlpli"]} > 10) {
            $GLOBALS["tfmlxpir"] = "stsd";
            $stsd = "info";
        } elseif (${$bovcqbvkrnwf} == 0) {
            ${$GLOBALS["fnjifegl"]} = "danger";
        } else {
            ${$GLOBALS["fnjifegl"]} = "warning";
        }
        ${$GLOBALS["kkgisdnebfv"]} = "select * from acesso_servidor where id_mestre='" . ${$GLOBALS["awxgmzauzq"]}["id_usuario"] . "'";
        ${$GLOBALS["kkgisdnebfv"]} = $conn->prepare(${$GLOBALS["kkgisdnebfv"]});
        $SQLSUB->execute();
        $GLOBALS["zhtilcgo"] = "mytotal";
        $mytotal = 0;
        if ($SQLSUB->rowCount() > 0) {
            $GLOBALS["mbegwlh"] = "total_subrev";
            $fivrxfnlfru = "row_user";
            $total_subrev = 0;
            while (${$fivrxfnlfru} = $SQLSUB->fetch()) {
                $ybhuyxiqtd = "total_sub";
                $GLOBALS["ibldjbxau"] = "SQLUSSH";
                ${$GLOBALS["fmghhqjdyqwm"]} = "select sum(qtd) as soma from acesso_servidor where id_usuario = '" . ${$GLOBALS["inmbekhlcnwf"]}["id_usuario"] . "' ";
                ${$GLOBALS["ibldjbxau"]} = $conn->prepare(${$GLOBALS["fmghhqjdyqwm"]});
                $SQLUSSH->execute();
                ${$GLOBALS["ijnmcezymizn"]} = $SQLUSSH->fetch();
                ${$GLOBALS["gotgnobvtzx"]} = ${$GLOBALS["pcxjirb"]} += ${$ybhuyxiqtd}["soma"];
            }
        }
        $vlywatpim = "usuario";
        echo "<tr>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 5px;\">\n<span class=\"badge badge-light-info\">\n";
        echo ${$wlfohl}["nome"];
        echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 5px;\">\n<span class=\"badge badge-light-info\">\n";
        echo ${$GLOBALS["hztqtd"]};
        echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 5px;\">\n<span class=\"badge badge-light-info\">\n";
        echo ${$GLOBALS["gzqbrbvg"]}["qtd"];
        echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 5px;\">\n<span class=\"badge badge-light-info\">\n";
        echo ${$pxjhpqm};
        echo "</span>\n</span>\n</td>\n";
        if ($usuario["subrevenda"] != "sim") {
            echo "<td>\n<span class=\"pull-left-container\" style=\"margin-right: 5px;\">\n<span class=\"badge badge-light-info\">\n";
            echo ${$GLOBALS["syvgnghlsnqk"]};
            echo "</span>\n</span>\n</td>\n";
        }
        echo "<td>\n<span class=\"pull-left-container\" style=\"margin-right: 5px;\">\n";
        if (${$GLOBALS["whcumlpli"]} > 1) {
            $kxkyiiubhqgj = "dias_acesso";
            $GLOBALS["pcjmimhdnhwk"] = "stsd";
            echo "<span class=\"badge badge-light-";
            echo $stsd;
            echo "\">";
            echo $dias_acesso;
            echo "<b> dias</b></span>\n";
        } else {
            $GLOBALS["semfebeikha"] = "dias_acesso";
            echo "<span class=\"badge badge-light-";
            $GLOBALS["kpcidsyu"] = "stsd";
            echo $stsd;
            echo "\">";
            echo $dias_acesso;
            echo "<b> dia</b></span>\n";
        }
        echo "</span>\n</td>\n</tr>\n";
    }
}
echo "</tbody>\n</table>\n</div>\n</div>\n</div>\n</section>\n<script>\nvar \$avgSessionStrokeColor2 = '#ebf0f7';\nvar \$textHeadingColor = '#5e5873';\nvar \$white = '#fff';\nvar \$strokeColor = '#ebe9f1';\nvar chartOptions = {\nchart: {\nheight: 220,\ntype: 'radialBar'\n},\nplotOptions: {\nradialBar: {\nsize: 150,\noffsetY: 20,\nstartAngle: -150,\nendAngle: 150,\nhollow: {\nsize: '65%'\n},\ntrack: {\nbackground: \$white,\nstrokeWidth: '100%'\n},\ndataLabels: {\nname: {\noffsetY: -5,\ncolor: \$textHeadingColor,\nfontSize: '1rem'\n},\nvalue: {\noffsetY: 15,\ncolor: \$textHeadingColor,\nfontSize: '1.714rem'\n}\n}\n}\n},\ncolors: ['#ea5455'],\nfill: {\ntype: 'gradient',\ngradient: {\nshade: 'dark',\ntype: 'horizontal',\nshadeIntensity: 0.5,\ngradientToColors: ['#28c76f'],\ninverseColors: true,\nopacityFrom: 1,\nopacityTo: 1,\nstops: [0, 100]\n}\n},\nstroke: {\ndashArray: 5\n},\nseries: [";
echo ${$GLOBALS["fbgzniomv"]};
echo "],\nlabels: ['Utilizado'],\n};\nvar chart = new ApexCharts(document.querySelector(\"#line-chart2\"), chartOptions);\nchart.render();\n</script>\n";
