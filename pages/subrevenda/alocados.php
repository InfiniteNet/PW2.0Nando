<?php

$GLOBALS["xaypdrwlzol"] = "stsd";
$GLOBALS["oxtxqiosqwbv"] = "servidor";
$GLOBALS["xwqqgh"] = "SQLSubSSH_minhas";
$GLOBALS["sflbsfp"] = "acessservidor";
$GLOBALS["khzrybquguk"] = "contas_ssh_criadas_minhas";
$GLOBALS["djusfukqus"] = "SQLContasminha";
$GLOBALS["ylqwmzlc"] = "SQLAcessoServidor2";
$GLOBALS["klhsgq"] = "dias_acesso";
$GLOBALS["mccxryoksfd"] = "data_atual";
$GLOBALS["rgrfhwp"] = "openvpn";
$GLOBALS["ibbtjx"] = "texto";
$GLOBALS["iihoflv"] = "SQLopen";
$GLOBALS["ukallxibbp"] = "bgbar2";
$GLOBALS["srhwddog"] = "valor_porcetage";
$GLOBALS["cuxacf"] = "somapode";
$GLOBALS["esvkxvp"] = "SQLqtdserveracessos2";
$GLOBALS["pnmlrotmmb"] = "cliente";
$GLOBALS["hpwnkhqrhbo"] = "SQLcliennte";
$GLOBALS["brkicrnnt"] = "rowservidor";
$GLOBALS["rbhjigx"] = "Servidor";
$GLOBALS["onqnvq"] = "rowS";
$GLOBALS["gopjwnsgewcl"] = "SQLUserSub";
$GLOBALS["bgxzftapye"] = "SQLAcessoSSH";
$GLOBALS["ubbdihpymjt"] = "row";
$GLOBALS["aoqokmmh"] = "SQLContasSSH";
$GLOBALS["yxpfpcolqb"] = "total_acesso_ssh";
$GLOBALS["ssyocxlquus"] = "contas";
$GLOBALS["yypsmre"] = "SQLusuario";
$GLOBALS["ifsdwtqi"] = "SQLAcessoServidor";
$GLOBALS["oypncyku"] = "sucessobar";
$GLOBALS["yrcxnifb"] = "valor_porce";
$GLOBALS["dciulwkvi"] = "resultado";
$GLOBALS["ceekucmkunp"] = "porcent";
$GLOBALS["wjacwpqdqh"] = "disponiveis";
$GLOBALS["cfhkbcrzkot"] = "todosacessos";
$GLOBALS["atvghwdhzqnt"] = "SQLqtdserveracessos";
$GLOBALS["ufivfzkviup"] = "qtdusados";
$GLOBALS["sulqhi"] = "SQLAcesso";
$GLOBALS["wnlcbtlzlopi"] = "valor_porce";
$GLOBALS["gnivvdiyqrbq"] = "qtdmaxmeu";
$GLOBALS["bnqlwqyuzoqy"] = "owner";
$dcivcbqim = "SQLcontaqtdsshusado";
$ynfuhrq = "SQLAcesso";
$GLOBALS["bqfcswqncmfl"] = "usuario";
$bmeqpi = "qtdmaxmeu";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"../../../app-assets/vendors/css/charts/apexcharts.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../../../app-assets/css/plugins/charts/chart-apex.css\">\n<script src=\"../../../app-assets/vendors/js/charts/apexcharts.min.js\"></script>\n";
$hytsrycxg = "todosacessos";
$GLOBALS["rktfpsultv"] = "SQLcontaqtdsshusado";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/alocados.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
$GLOBALS["riphls"] = "qtdusados";
protegePagina("user");
$jhkvbjgge = "SQLAcessoServidor";
if (${$GLOBALS["bqfcswqncmfl"]}["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
${$GLOBALS["bnqlwqyuzoqy"]} = $_SESSION["usuarioID"];
$euiogdpve = "SQLcontaqtdsshusado";
$GLOBALS["lpyfpri"] = "SQLAcesso";
${$GLOBALS["gnivvdiyqrbq"]} = 0;
${$GLOBALS["sulqhi"]} = "SELECT sum(qtd) AS limtotal FROM acesso_servidor where id_usuario = '" . $_SESSION["usuarioID"] . "'";
${$ynfuhrq} = $conn->prepare(${$GLOBALS["sulqhi"]});
$eshrbuohjeu = "todosacessos";
$SQLAcesso->execute();
${$GLOBALS["lpyfpri"]} = $SQLAcesso->fetch();
$GLOBALS["phvdxtgirak"] = "qtdmaxmeu";
${$bmeqpi} += ${$GLOBALS["sulqhi"]}["limtotal"];
${$eshrbuohjeu} = 0;
${$dcivcbqim} = "SELECT sum(acesso) as acessosdosserversusados FROM conta_ssh where id_usuario = '" . $_SESSION["usuarioID"] . "'";
$GLOBALS["dykexjmkkg"] = "SQLAcessoServidor";
${$GLOBALS["rktfpsultv"]} = $conn->prepare(${$euiogdpve});
$GLOBALS["mprbpdicvlg"] = "valor_porce";
$SQLcontaqtdsshusado->execute();
${$GLOBALS["riphls"]} = $SQLcontaqtdsshusado->fetch();
$GLOBALS["eztjswbtogl"] = "todosacessos";
${$hytsrycxg} += ${$GLOBALS["ufivfzkviup"]}["acessosdosserversusados"];
${$GLOBALS["atvghwdhzqnt"]} = "SELECT sum(qtd) AS limites FROM acesso_servidor where id_mestre = '" . $_SESSION["usuarioID"] . "'";
${$GLOBALS["atvghwdhzqnt"]} = $conn->prepare(${$GLOBALS["atvghwdhzqnt"]});
$SQLqtdserveracessos->execute();
$GLOBALS["rqktekpgt"] = "todosacessos";
$GLOBALS["ylqucgrrhin"] = "qtdmaxmeu";
${$GLOBALS["atvghwdhzqnt"]} = $SQLqtdserveracessos->fetch();
${$GLOBALS["cfhkbcrzkot"]} += ${$GLOBALS["atvghwdhzqnt"]}["limites"];
${$GLOBALS["phvdxtgirak"]} -= ${$GLOBALS["rqktekpgt"]};
if (${$GLOBALS["wjacwpqdqh"]} <= 0) {
    ${$GLOBALS["wjacwpqdqh"]} = 0;
}
${$GLOBALS["ceekucmkunp"]} = ${$GLOBALS["cfhkbcrzkot"]} / ${$GLOBALS["ylqucgrrhin"]} * 100;
${$GLOBALS["dciulwkvi"]} = ${$GLOBALS["ceekucmkunp"]};
${$GLOBALS["yrcxnifb"]} = round(${$GLOBALS["dciulwkvi"]});
if (${$GLOBALS["mprbpdicvlg"]} >= 100) {
    $GLOBALS["wbbkfowmu"] = "valor_porce";
    $valor_porce = 100;
}
if (${$GLOBALS["yrcxnifb"]} <= 0) {
    $GLOBALS["xgcrmizpthw"] = "valor_porce";
    $valor_porce = 0;
}
if (${$GLOBALS["wnlcbtlzlopi"]} >= 70 and ${$GLOBALS["yrcxnifb"]} < 90) {
    $cvuvosivwb = "bgbar";
    ${$GLOBALS["oypncyku"]} = "warning";
    ${$cvuvosivwb} = "orange";
} elseif (${$GLOBALS["yrcxnifb"]} >= 90) {
    $GLOBALS["xlsdfejagkpu"] = "bgbar";
    ${$GLOBALS["oypncyku"]} = "danger";
    ${$GLOBALS["xlsdfejagkpu"]} = "red";
} else {
    $nuyqerzfcis = "bgbar";
    $envtfkapfk = "sucessobar";
    $sucessobar = "success";
    $bgbar = "green";
}
echo "<style>\n    .card-datatable {\n        padding-left: 5px;\n        padding-right: 5px;\n    }\n</style>\n<div class=\"row match-height\">\n    <!-- Support Tracker Chart Card starts -->\n    <div class=\"col-lg-12 col-12\">\n        <div class=\"card text-center\">\n            <div class=\"card-header d-flex justify-content-between pb-0\">\n                <h4 class=\"card-title text-center\">Acessos liberados para revendas</h4>\n            </div>\n            <div class=\"card-body\">\n                <div class=\"row\">\n                    <div class=\"col-sm-12 col-12 d-flex justify-content-center\">\n                        <div id=\"line-chart2\" value=\"10\"></div>\n                    </div>\n                </div>\n                <div class=\"d-flex justify-content-between mt-1\">\n                    <div class=\"text-center\">\n                        <p class=\"card-text mb-50\">Em uso</p>\n                        <span class=\"font-large-1 fw-bold\">";
echo ${$GLOBALS["eztjswbtogl"]};
echo "</span>\n                    </div>\n                    <div class=\"text-center\">\n                        <p class=\"card-text mb-50\">Total liberado</p>\n                        <span class=\"font-large-1 fw-bold\">";
echo ${$GLOBALS["gnivvdiyqrbq"]};
echo "</span>\n                    </div>\n                    <div class=\"text-center\">\n                        <p class=\"card-text mb-50\">Dispon\xc3\xadvel</p>\n                        <span class=\"font-large-1 fw-bold\">";
echo ${$GLOBALS["wjacwpqdqh"]};
echo "</span>\n                    </div>\n                </div>\n            </div>\n        </div>\n    </div>\n</div>\n<!-- Support Tracker Chart Card ends -->\n<div class=\"col-12 mb-1\">\n<div class=\"alert alert-info\" role=\"alert\">\n<div class=\"alert-body d-flex align-items-center\">\n<i data-feather=\"star\" class=\"me-50 text-center\"></i>\n<span>Logo Abaixo voc\xc3\xaa pode editar dias de acesso e limite de suas revendas! \xf0\x9f\x91\x87</span>\n</div>\n</div>\n</div>\n<section id=\"complex-header-datatable\">\n<div class=\"row\">\n<div class=\"col-12\">\n<div class=\"card\">\n<div class=\"card-header border-bottom \">\n<h4 class=\"card-title\">Revendedores</h4>\n</div>\n<div class=\"card-datatable\">\n<table id=\"example\" class=\"table\">\n<thead>\n<tr>\n<th>SERVIDOR</th>\n<th>TIPO</th>\n<th>REVENDA</th>\n<th>USO(%)</th>\n<th>RESTANTE</th>\n<th>USADO</th>\n<th>TOTAL</th>\n<th>VALIDADE</th>\n<th>OP\xc3\x87\xc3\x95ES</th>\n</tr>\n</thead>\n<tbody id=\"MeuServidor\">\n";
${$GLOBALS["dykexjmkkg"]} = "SELECT * FROM acesso_servidor where id_mestre = '" . $_SESSION["usuarioID"] . "' ";
${$GLOBALS["ifsdwtqi"]} = $conn->prepare(${$jhkvbjgge});
$SQLAcessoServidor->execute();
if ($SQLAcessoServidor->rowCount() > 0) {
    $vcbeiafdtq = "row";
    while (${$vcbeiafdtq} = $SQLAcessoServidor->fetch()) {
        $GLOBALS["pdtxuo"] = "row";
        $GLOBALS["ldsfrhjqhck"] = "SQLUserSub";
        $vpcuzduiwwh = "cliente";
        $kdnkvinmrjm = "SQLServidor";
        $GLOBALS["tkwdvxsyxx"] = "SQLcliennte";
        ${$GLOBALS["yypsmre"]} = "SELECT * FROM usuario where id_usuario = '" . $row["id_usuario"] . "' ";
        $GLOBALS["dswpbpd"] = "usuario";
        $eylorefy = "data_atual";
        $mzfkixlbb = "contas";
        $fvcafmuhy = "valor_porcetage";
        $GLOBALS["nwjwpjxg"] = "usuario";
        ${$GLOBALS["yypsmre"]} = $conn->prepare(${$GLOBALS["yypsmre"]});
        $GLOBALS["bstuctslrh"] = "row";
        $GLOBALS["vhwgbstp"] = "porcentagem";
        $SQLusuario->execute();
        $jcrebbvoxoc = "row";
        ${$GLOBALS["dswpbpd"]} = $SQLusuario->fetch();
        ${$GLOBALS["ssyocxlquus"]} = 0;
        ${$GLOBALS["yxpfpcolqb"]} = 0;
        $ogdhkqsas = "SQLopen";
        ${$GLOBALS["aoqokmmh"]} = "select * from conta_ssh WHERE id_usuario = '" . ${$GLOBALS["ubbdihpymjt"]}["id_usuario"] . "' and id_servidor='" . ${$GLOBALS["ubbdihpymjt"]}["id_servidor"] . "'";
        ${$GLOBALS["aoqokmmh"]} = $conn->prepare(${$GLOBALS["aoqokmmh"]});
        $SQLContasSSH->execute();
        $pjfdxrv = "row";
        ${$mzfkixlbb} += $SQLContasSSH->rowCount();
        ${$GLOBALS["bgxzftapye"]} = "SELECT sum(acesso) AS quantidade FROM conta_ssh where id_usuario='" . ${$GLOBALS["ubbdihpymjt"]}["id_usuario"] . "' and id_servidor='" . ${$GLOBALS["ubbdihpymjt"]}["id_servidor"] . "'";
        ${$GLOBALS["bgxzftapye"]} = $conn->prepare(${$GLOBALS["bgxzftapye"]});
        $tjfwrhq = "dias_acesso";
        $SQLAcessoSSH->execute();
        $GLOBALS["bwuunkt"] = "total_acesso_ssh";
        $GLOBALS["pudtghxtu"] = "SQLSubSSH_minhas";
        $GLOBALS["nwltneq"] = "servidor";
        ${$GLOBALS["bgxzftapye"]} = $SQLAcessoSSH->fetch();
        $GLOBALS["deekrwy"] = "porcentagem";
        ${$GLOBALS["yxpfpcolqb"]} += ${$GLOBALS["bgxzftapye"]}["quantidade"];
        $GLOBALS["dtnrxqswgep"] = "SQLContasminha";
        $hqoxskpy = "valor_porcetage";
        $vxnjvwc = "cliente";
        $corsce = "resultado2";
        $GLOBALS["itvhnjrcuxb"] = "SQLContasminha";
        $ujlebefnw = "valor_porcetage";
        $oyzvtwwunyu = "SQLSubSSH_minhas";
        $eoylen = "row";
        $hwnmkvbukso = "row";
        ${$GLOBALS["gopjwnsgewcl"]} = "select * from usuario WHERE id_mestre = '" . ${$GLOBALS["ubbdihpymjt"]}["id_usuario"] . "'";
        ${$GLOBALS["ldsfrhjqhck"]} = $conn->prepare(${$GLOBALS["gopjwnsgewcl"]});
        $GLOBALS["boldwxtmrs"] = "contas_ssh_criadas_minhas";
        $SQLUserSub->execute();
        $GLOBALS["rflyncfz"] = "SQLServidor";
        $GLOBALS["vkycwphub"] = "SQLqtdserveracessos2";
        $GLOBALS["fdkeyvgmdz"] = "valor_porcetage";
        $ypewwamohvd = "SQLqtdserveracessos2";
        if ($SQLUserSub->rowCount() > 0) {
            while (${$GLOBALS["onqnvq"]} = $SQLUserSub->fetch()) {
                $GLOBALS["eurlht"] = "rowS";
                $GLOBALS["fkerwf"] = "SQLContasSSH";
                $GLOBALS["ufwmrphxrpp"] = "row";
                ${$GLOBALS["aoqokmmh"]} = "select * from conta_ssh WHERE id_usuario = '" . $rowS["id_usuario"] . "'  and id_servidor='" . $row["id_servidor"] . "'";
                ${$GLOBALS["fkerwf"]} = $conn->prepare(${$GLOBALS["aoqokmmh"]});
                $SQLContasSSH->execute();
                ${$GLOBALS["ssyocxlquus"]} += $SQLContasSSH->rowCount();
            }
        }
        $GLOBALS["xqdymioy"] = "SQLServidor";
        ${$GLOBALS["rbhjigx"]} = "select * from servidor where id_servidor='" . ${$GLOBALS["ubbdihpymjt"]}["id_servidor"] . "'";
        ${$GLOBALS["rbhjigx"]} = $conn->prepare(${$GLOBALS["rbhjigx"]});
        $Servidor->execute();
        $GLOBALS["vgqvhithg"] = "SQLAcessoServidor2";
        $nweerceudnu = "SQLcliennte";
        $ohckuubgtb = "row";
        $gnplvcwom = "resultado2";
        ${$GLOBALS["brkicrnnt"]} = $Servidor->fetch();
        ${$GLOBALS["hpwnkhqrhbo"]} = "select * from usuario WHERE id_usuario='" . ${$ohckuubgtb}["id_usuario"] . "' ";
        $buevfjxt = "total_acesso_ssh";
        $qxmlwdcced = "dias_acesso";
        ${$nweerceudnu} = $conn->prepare(${$GLOBALS["tkwdvxsyxx"]});
        $SQLcliennte->execute();
        $pawdheldi = "SQLContasminha";
        $GLOBALS["nqtvkiqr"] = "row";
        $GLOBALS["vzmynststfqi"] = "valor_porcetage";
        ${$GLOBALS["pnmlrotmmb"]} = $SQLcliennte->fetch();
        ${$GLOBALS["esvkxvp"]} = "SELECT sum(qtd) as todosacessos FROM acesso_servidor where id_mestre = '" . ${$hwnmkvbukso}["id_usuario"] . "' and id_servidor='" . ${$GLOBALS["ubbdihpymjt"]}["id_servidor"] . "' ";
        ${$GLOBALS["esvkxvp"]} = $conn->prepare(${$GLOBALS["esvkxvp"]});
        $SQLqtdserveracessos2->execute();
        ${$ypewwamohvd} = $SQLqtdserveracessos2->fetch();
        ${$GLOBALS["bwuunkt"]} += ${$GLOBALS["vkycwphub"]}["todosacessos"];
        ${$GLOBALS["ubbdihpymjt"]}["qtd"] -= ${$GLOBALS["yxpfpcolqb"]};
        $GLOBALS["ngwiigg"] = "row";
        ${$GLOBALS["vhwgbstp"]} = ${$GLOBALS["yxpfpcolqb"]} / $row["qtd"] * 100;
        $gwpzbicft = "acessservidor";
        ${$corsce} = ${$GLOBALS["deekrwy"]};
        $olgsjx = "rowservidor";
        ${$GLOBALS["fdkeyvgmdz"]} = round(${$gnplvcwom});
        if (${$GLOBALS["srhwddog"]} >= 100) {
            ${$GLOBALS["srhwddog"]} = 100;
        }
        if (${$GLOBALS["srhwddog"]} <= 0) {
            $hkrsodrgre = "valor_porcetage";
            $valor_porcetage = 0;
        }
        $GLOBALS["spaikgegfcp"] = "cliente";
        $nqwpbdlrk = "data_validade";
        $bfolsplada = "data_validade";
        $xxntdesfvq = "SQLAcessoServidor2";
        if (${$hqoxskpy} >= 70 and ${$GLOBALS["vzmynststfqi"]} < 90) {
            ${$GLOBALS["oypncyku"]} = "warning";
            ${$GLOBALS["ukallxibbp"]} = "warning";
        } elseif (${$fvcafmuhy} >= 90) {
            ${$GLOBALS["oypncyku"]} = "danger";
            ${$GLOBALS["ukallxibbp"]} = "danger";
        } else {
            $GLOBALS["uqkrtrli"] = "bgbar2";
            ${$GLOBALS["oypncyku"]} = "success";
            ${$GLOBALS["uqkrtrli"]} = "success";
        }
        ${$GLOBALS["rflyncfz"]} = "select * from servidor WHERE id_servidor = '" . ${$GLOBALS["nqtvkiqr"]}["id_servidor"] . "' ";
        ${$GLOBALS["xqdymioy"]} = $conn->prepare(${$kdnkvinmrjm});
        $SQLServidor->execute();
        $tskmkjb = "contas_ssh_criadas_minhas";
        ${$GLOBALS["nwltneq"]} = $SQLServidor->fetch();
        ${$ogdhkqsas} = "select * from ovpn WHERE servidor_id = '" . ${$GLOBALS["bstuctslrh"]}["id_servidor"] . "' ";
        ${$GLOBALS["iihoflv"]} = $conn->prepare(${$GLOBALS["iihoflv"]});
        $SQLopen->execute();
        $hzhwdiqviv = "somameusatuais";
        if ($SQLopen->rowCount() > 0) {
            $GLOBALS["tcknkmuxte"] = "openvpn";
            $openvpn = $SQLopen->fetch();
            ${$GLOBALS["ibbtjx"]} = "<a href='../admin/pages/servidor/baixar_ovpn.php?id=" . ${$GLOBALS["rgrfhwp"]}["id"] . "' class=\"label label-info\">Baixar</a>";
        } else {
            $GLOBALS["prmbwyhxj"] = "texto";
            $texto = "<span class=\"label label-danger\">Indisponivel</span>";
        }
        $mqgsumu = "acessservidor";
        ${$eylorefy} = date("Y-m-d H:i:s");
        ${$nqwpbdlrk} = ${$GLOBALS["bqfcswqncmfl"]}["validade"];
        if (${$bfolsplada} > ${$GLOBALS["mccxryoksfd"]}) {
            $GLOBALS["mshnzdzwqtp"] = "diferenca";
            $GLOBALS["mvufayp"] = "data_atual";
            $moxhzpcpajc = "data_validade";
            $inkswvht = "diferenca";
            $diferenca = strtotime($data_validade) - strtotime($data_atual);
            ${$GLOBALS["klhsgq"]} = floor($diferenca / 86400);
        } else {
            ${$GLOBALS["klhsgq"]} = 0;
        }
        if (${$GLOBALS["klhsgq"]} > 10) {
            $GLOBALS["iurguiqewg"] = "stsd";
            $stsd = "info";
        } elseif (${$tjfwrhq} == 0) {
            $theshitj = "stsd";
            $stsd = "danger";
        } else {
            $yyvmfft = "stsd";
            $stsd = "warning";
        }
        $xpyostjp = "SQLSubSSH_minhas";
        ${$GLOBALS["vgqvhithg"]} = "SELECT * FROM acesso_servidor where id_servidor = '" . ${$GLOBALS["brkicrnnt"]}["id_servidor"] . "' ";
        ${$GLOBALS["ylqwmzlc"]} = $conn->prepare(${$xxntdesfvq});
        $SQLAcessoServidor2->execute();
        ${$gwpzbicft} = $SQLAcessoServidor2->fetch();
        ${$GLOBALS["itvhnjrcuxb"]} = "SELECT sum(acesso) AS quantidade FROM conta_ssh where id_servidor = '" . ${$mqgsumu}["id_servidor"] . "' and id_usuario='" . $_SESSION["usuarioID"] . "' ";
        ${$GLOBALS["djusfukqus"]} = $conn->prepare(${$pawdheldi});
        $SQLContasminha->execute();
        ${$GLOBALS["dtnrxqswgep"]} = $SQLContasminha->fetch();
        ${$GLOBALS["khzrybquguk"]} = ${$GLOBALS["djusfukqus"]}["quantidade"];
        ${$xpyostjp} = "SELECT sum(qtd) AS limites from acesso_servidor WHERE id_mestre ='" . $_SESSION["usuarioID"] . "' and id_servidor='" . ${$GLOBALS["sflbsfp"]}["id_servidor"] . "' ";
        $ccditprc = "SQLSubSSH_minhas";
        $rrittqtqgm = "somameusatuais";
        ${$GLOBALS["pudtghxtu"]} = $conn->prepare(${$oyzvtwwunyu});
        $SQLSubSSH_minhas->execute();
        ${$ccditprc} = $SQLSubSSH_minhas->fetch();
        $bcrjoap = "row";
        ${$GLOBALS["boldwxtmrs"]} += ${$GLOBALS["xwqqgh"]}["limites"];
        $GLOBALS["kfcmsylxosp"] = "row";
        $suslhjorj = "row";
        ${$GLOBALS["sflbsfp"]}["qtd"] -= ${$tskmkjb};
        echo "<div id=\"myModal";
        echo ${$GLOBALS["kfcmsylxosp"]}["id_acesso_servidor"];
        echo "\" data-bs-backdrop=\"false\" class=\"modal fade in\">\n<div class=\"modal-dialog\">\n<div class=\"modal-content\">\n<form name=\"deletarserver\" action=\"pages/subrevenda/deletarservidor_exe.php\" method=\"post\">\n<input name=\"servidor\" type=\"hidden\" value=\"";
        echo ${$jcrebbvoxoc}["id_acesso_servidor"];
        echo "\">\n<input name=\"cliente\" type=\"hidden\" value=\"";
        echo ${$vpcuzduiwwh}["id_usuario"];
        echo "\">\n<div class=\"modal-header\">\n<a class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove\"></span></a>\n<h4 class=\"modal-title\">Apagar tudo do ";
        echo ${$GLOBALS["pnmlrotmmb"]}["nome"];
        echo "</h4>\n</div>\n<div class=\"modal-body text-center\">\n<h4>Tem certeza?</h4>\n<p>Todos os clientes dele ir\xc3\xa3o ter a conta SSH deletada.</p>\n</div>\n<div class=\"modal-footer mb-2\">\n<div class=\"col-12 text-center\">\n<button name=\"deletandoserver\" class=\"btn btn-success\">Confirmar</button>\n<button onclick=\"reload();\" type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\" aria-label=\"Close\">Cancelar</button>\n</div>\n</div>\n</form>\n</div><!-- /.modal-content -->\n</div><!-- /.modal-dalog -->\n</div><!-- /.modal -->\n<div class=\"modal fade text-start\" data-bs-backdrop=\"false\" id=\"squarespaceModal";
        echo ${$suslhjorj}["id_acesso_servidor"];
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalLabel\" aria-hidden=\"true\">\n<div class=\"modal-dialog\">\n<div class=\"modal-content\">\n<div class=\"modal-header\">\n<h3 class=\"modal-title\" id=\"lineModalLabel\"><i class=\"fa fa-pencil-square-o\"></i>Editar Servidor de Acesso</h3>\n<button type=\"button\" onclick=\"reload();\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>\n</div>\n<div class=\"modal-body\">\n<!-- content goes here -->\n<form name=\"editaserver\" action=\"pages/subrevenda/editar_acesso.php\" method=\"post\">\n<input name=\"idservidoracesso\" type=\"hidden\" value=\"";
        echo ${$GLOBALS["ubbdihpymjt"]}["id_acesso_servidor"];
        echo "\">\n<div class=\"mb-1\">\n<div class=\"form-group\">\n<label class=\"form-label\" for=\"first-name-icon\">Servidor</label>\n<select size=\"1\" class=\"form-control select2\" name=\"fazer\" disabled>\n<option value=\"";
        echo ${$olgsjx}["id_servidor"];
        echo "\" selected=selected> ";
        echo ${$GLOBALS["brkicrnnt"]}["nome"];
        echo " - Resta: ";
        echo ${$rrittqtqgm};
        echo "</option>\n</select>\n</div>\n</div>\n<div class=\"mb-1\">\n<div class=\"form-group\">\n<label class=\"form-label\" for=\"first-name-icon\">Revendedor</label>\n<input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" value=\"";
        echo ${$GLOBALS["pnmlrotmmb"]}["login"];
        echo "\" disabled>\n</div>\n</div>\n<div class=\"col-sm-12 col-md-12\">\n<div class=\"demo-spacing-0 mb-2\">\n<div class=\"alert alert-warning\" role=\"alert\">\n<div class=\"alert-body d-flex align-items-center\">\n<i data-feather=\"info\" class=\"me-50\"></i>\n<span>Para altera dias ou limite use + ou - Ex: -1</span>\n</div>\n</div>\n</div>\n<div class=\"d-flex justify-content-center mb-2\">\n<label class=\"form-control-label\" for=\"control-label\">Dias </label>\n<div class=\"input-group\">\n<input type=\"number\" class=\"touchspin-min-max position-left-50\" name=\"dias\" value=\"0\" />\n</div>\n<label class=\"form-control-label\" for=\"control-label\">Limite</label>\n<div class=\"input-group\">\n<input type=\"number\" class=\"touchspin-min-max\" name=\"limite\" value=\"0\" />\n</div>\n</div>\n</div>\n<input type=\"hidden\" class=\"form-control\" id=\"ids\" name=\"ids\" value=\"";
        echo ${$GLOBALS["spaikgegfcp"]}["id_usuario"];
        echo "\">\n<input type=\"hidden\" class=\"form-control\" id=\"qtd\" name=\"qtd\" value=\"";
        echo ${$GLOBALS["cuxacf"]};
        echo "\">\n<input type=\"hidden\" class=\"form-control\" id=\"rest\" name=\"rest\" value=\"";
        echo ${$GLOBALS["klhsgq"]};
        echo "\">\n<div class=\"modal-footer\">\n<div class=\"col-12 text-center\">\n<button class=\"btn btn-success\">Confirmar</button>\n<button type=\"button\" onclick=\"reload();\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\" aria-label=\"Close\">Cancelar</button>\n</div>\n</div>\n</form>\n</div>\n</div>\n</div>\n</div>\n<tr>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-light-info\">\n";
        echo ${$GLOBALS["oxtxqiosqwbv"]}["nome"];
        echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 5px;\">\n";
        if (${$GLOBALS["nwjwpjxg"]}["subrevenda"] == "nao") {
            echo "<span class=\"badge badge-light-primary\">Revenda</span>";
        } else {
            echo "<span class=\"badge badge-light-warning\">Sub-Revenda</span>";
        }
        echo "</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-light-info\">\n";
        echo ${$GLOBALS["bqfcswqncmfl"]}["nome"];
        echo "</span>\n</span>\n</td>\n<td>\n<span class=\"badge badge-light-";
        echo ${$GLOBALS["ukallxibbp"]};
        echo "\">";
        $feptghd = "row";
        echo ${$ujlebefnw};
        echo "%</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-light-info\">\n";
        echo ${$GLOBALS["cuxacf"]};
        echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-light-info\">\n";
        echo ${$buevfjxt};
        echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-light-info\">\n";
        echo ${$bcrjoap}["qtd"];
        echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n";
        if (${$qxmlwdcced} > 1) {
            echo "<span class=\"badge badge-light-";
            echo ${$GLOBALS["xaypdrwlzol"]};
            echo "\">";
            echo ${$GLOBALS["klhsgq"]};
            echo "<b> dias</b></span>\n";
        } else {
            echo "<span class=\"badge badge-light-";
            echo ${$GLOBALS["xaypdrwlzol"]};
            $GLOBALS["mfsksck"] = "dias_acesso";
            echo "\">";
            echo $dias_acesso;
            echo "<b> dia</b></span>\n";
        }
        echo "</span>\n</td>\n<td>\n<div class=\"modal-size-xs d-inline-block\">\n<!-- Modal -->\n<div class=\"modal fade text-start\" id=\"xSmall";
        echo ${$pjfdxrv}["id_acesso_servidor"];
        echo "\" tabindex=\"-1\" aria-labelledby=\"myModalLabel20\" aria-hidden=\"true\">\n<div class=\"modal-dialog modal-dialog-centered modal-xs\">\n<div class=\"modal-content\">\n<div class=\"modal-header\">\n<h4 class=\"modal-title\" id=\"myModalLabel20\">Escolha uma op\xc3\xa7\xc3\xa3o!</h4>\n<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>\n</div>\n<div class=\"modal-body\">\n<ul class=\"list-group\">\n<li class=\"list-group mb-1\">\n<a href=\"home.php?page=usuario/perfil&id_usuario=";
        echo ${$vxnjvwc}["id_usuario"];
        echo "\" class=\"btn btn-sm btn-primary\"><i data-feather=\"eye\"></i> VER PERFIL <i data-feather=\"eye\"></i></a>\n</li>\n<li class=\"list-group mb-1\">\n<button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#squarespaceModal";
        echo ${$GLOBALS["ubbdihpymjt"]}["id_acesso_servidor"];
        echo "\" data-bs-dismiss=\"modal\" class=\"btn btn-sm btn-warning\"><i data-feather=\"edit\"></i> EDITAR LIMITE OU DATA <i data-feather=\"edit\"></i></button>\n</li>\n<li class=\"list-group mb-1\">\n";
        if (${$GLOBALS["pnmlrotmmb"]}["ativo"] != 1) {
            $GLOBALS["pfjkemaup"] = "dias_acesso";
            if ($dias_acesso == 0) {
                $GLOBALS["dqksjjtpfty"] = "owner";
                echo "<a type=\"button\" href=\"pages/system/funcoes.usuario.php?&id_usuario=";
                echo ${$GLOBALS["pnmlrotmmb"]}["id_usuario"];
                echo "&diretorio=../../home.php?page=subrevenda/alocados&owner=";
                $thnmsrph = "cliente";
                echo $owner;
                echo "&op=ususpender&renovar=";
                echo $cliente["id_usuario"];
                echo "\" class=\"btn btn-sm btn-success\"><i data-feather='refresh-ccw'></i> RENOVAR +30 DIAS <i data-feather='refresh-ccw'></i></a>\n";
            } else {
                $qxhbcntogtje = "cliente";
                echo "<a type=\"button\" href=\"pages/system/funcoes.usuario.php?&id_usuario=";
                echo $cliente["id_usuario"];
                echo "&diretorio=../../home.php?page=subrevenda/alocados&owner=";
                echo ${$GLOBALS["bnqlwqyuzoqy"]};
                echo "&op=ususpender\" class=\"btn btn-sm btn-success\"><i data-feather='user-check'></i> REATIVAR REVENDA <i data-feather='user-check'></i></a>\n";
            }
        } else {
            $GLOBALS["qthyuduswpc"] = "cliente";
            $xwzckqoyn = "owner";
            echo "<a type=\"button\" href=\"pages/system/funcoes.usuario.php?&id_usuario=";
            echo $cliente["id_usuario"];
            echo "&diretorio=../../home.php?page=subrevenda/alocados&owner=";
            echo $owner;
            echo "&op=suspender\" class=\"btn btn-sm btn-danger\"><i data-feather='user-x'></i> SUSPENDER REVENDA <i data-feather='user-x'></i></a>\n";
        }
        echo "</li>\n<li class=\"list-group mb-1\">\n<a type=\"button\" data-bs-dismiss=\"modal\" data-bs-toggle=\"modal\" data-bs-target=\"#myModal";
        echo ${$feptghd}["id_acesso_servidor"];
        echo "\" class=\"btn btn-sm btn-danger\"><i data-feather='trash'></i> DELETAR SERVIDOR <i data-feather='trash'></i></a>\n</li>\n</ul>\n</div>\n</div>\n</div>\n</div>\n</div>\n<button type=\"button\" class=\"btn btn-sm btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#xSmall";
        echo ${$eoylen}["id_acesso_servidor"];
        echo "\"><i data-feather='grid'></i></button>\n</td>\n</tr>\n";
    }
}
echo "</tbody>\n</table>\n</div>\n</div>\n</div>\n</div>\n</section>\n<style>\n.modal .modal-header {\nborder-bottom: none;\nposition: relative;\n}\n.modal .modal-header .btn {\nposition: absolute;\ntop: 0;\nright: 0;\nmargin-top: 0;\nborder-top-left-radius: 0;\nborder-bottom-right-radius: 0;\n}\n.modal .modal-footer {\nborder-top: none;\npadding: 0;\n}\n.modal .modal-footer .btn-group>.btn:first-child {\nborder-bottom-left-radius: 0;\n}\n.modal .modal-footer .btn-group>.btn:last-child {\nborder-top-right-radius: 0;\n}\n</style>\n<script>\nvar \$avgSessionStrokeColor2 = '#ebf0f7';\nvar \$textHeadingColor = '#5e5873';\nvar \$white = '#fff';\nvar \$strokeColor = '#ebe9f1';\nvar chartOptions = {\nchart: {\nheight: 220,\ntype: 'radialBar'\n},\nplotOptions: {\nradialBar: {\nsize: 150,\noffsetY: 20,\nstartAngle: -150,\nendAngle: 150,\nhollow: {\nsize: '65%'\n},\ntrack: {\nbackground: \$white,\nstrokeWidth: '100%'\n},\ndataLabels: {\nname: {\noffsetY: -5,\ncolor: \$textHeadingColor,\nfontSize: '1rem'\n},\nvalue: {\noffsetY: 15,\ncolor: \$textHeadingColor,\nfontSize: '1.714rem'\n}\n}\n}\n},\ncolors: ['#ea5455'],\nfill: {\ntype: 'gradient',\ngradient: {\nshade: 'dark',\ntype: 'horizontal',\nshadeIntensity: 0.5,\ngradientToColors: ['#28c76f'],\ninverseColors: true,\nopacityFrom: 1,\nopacityTo: 1,\nstops: [0, 100]\n}\n},\nstroke: {\ndashArray: 5\n},\nseries: [";
echo ${$GLOBALS["yrcxnifb"]};
echo "],\nlabels: ['Utilizado'],\n};\nvar chart = new ApexCharts(document.querySelector(\"#line-chart2\"), chartOptions);\nchart.render();\n</script>\n<script src=\"../../../app-assets/vendors/js/vendors.min.js\"></script>\n<script src=\"../../../app-assets/js/scripts/forms/form-number-input.js\"></script>\n<script type=\"text/javascript\">\n\$(\"button[data-bs-dismiss=modal]\").click(function(){\n\$(\".modal\").modal('hide');\n});\nfunction reload() {\ndocument.location.reload(true);\n}\n</script>\n";
