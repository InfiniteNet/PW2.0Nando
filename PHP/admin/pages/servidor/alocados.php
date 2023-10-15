<?php

$GLOBALS["fpyhwuxold"] = "accessKEY";
$GLOBALS["vfkukplvbs"] = "btcolor";
$GLOBALS["nesjhtz"] = "color";
$GLOBALS["vsjmjywsrwu"] = "somapode";
$GLOBALS["iynyfm"] = "row";
$GLOBALS["pvczcuf"] = "stsd";
$GLOBALS["becwqdrkulwe"] = "dias_acesso";
$GLOBALS["pkfgrvw"] = "diferenca";
$GLOBALS["jfdeitlkpkuo"] = "cliente";
$GLOBALS["obztsdhmuoa"] = "data_validade";
$GLOBALS["xlhmuth"] = "data_atual";
$GLOBALS["ruyhelwhqwx"] = "bgbar2";
$GLOBALS["dhvimhr"] = "valor_porcetage";
$GLOBALS["exhbybwsvdt"] = "total_sub";
$GLOBALS["nsjwqlvyxp"] = "SQLSUB";
$GLOBALS["gbhqhhcgv"] = "rowS";
$GLOBALS["thawksgwxc"] = "SQLUserSub";
$GLOBALS["xscdphl"] = "SQLAcessoSSH";
$GLOBALS["xspezorbwgk"] = "SQLContasSSH";
$GLOBALS["fgwnnlumdv"] = "total_acesso_ssh";
$GLOBALS["dlnjwzpdiy"] = "contas";
$GLOBALS["kigeenuzxww"] = "SQLcliennte";
$GLOBALS["yamesxm"] = "Servidor";
$GLOBALS["ugnfgvxn"] = "serveacesso";
$GLOBALS["lepfpedw"] = "SQLServidorac";
$GLOBALS["hzscyu"] = "bgbar";
$GLOBALS["sqjtrspu"] = "sucessobar";
$GLOBALS["ffpwdxnnxl"] = "valor_porce";
$GLOBALS["czrbrujhy"] = "totalacess";
$GLOBALS["vjvwxsl"] = "SQLqtdserveracessos2";
$uugdjvvnjl = "valor_porce";
$GLOBALS["pfgpwy"] = "qtddoserverusado";
$GLOBALS["pjffiwaj"] = "qtdusadosdele";
$GLOBALS["eiuxosgeuprk"] = "valor_porce";
$blmnrd = "totalacess";
$GLOBALS["ersbcom"] = "SQLcontaqtdsshusadodele";
$GLOBALS["ycgpnzu"] = "usuariosdele";
$GLOBALS["ytxwbkzc"] = "SQLusuariosdele";
$GLOBALS["wacusb"] = "SQLusuariosdele";
$pbfppbsem = "valor_porce";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"../../../app-assets/vendors/css/charts/apexcharts.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../../../app-assets/css/plugins/charts/chart-apex.css\">\n<script src=\"../../../app-assets/vendors/js/charts/apexcharts.min.js\"></script>\n";
$fqdnydps = "qtddoserverusado";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/alocados.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
$qcpfolxkuk = "totalacess";
protegePagina("donoadmin");
$GLOBALS["yarxnpzy"] = "resultado";
${$fqdnydps} = 0;
$txozgvfe = "disponiveis";
$GLOBALS["bqgnxok"] = "resultado";
${$GLOBALS["ytxwbkzc"]} = "SELECT * FROM acesso_servidor";
$hxmeow = "porcent";
$umvfmqorbt = "SQLusuariosdele";
$GLOBALS["bsimrc"] = "qtddoserverusado";
$hwknyofngu = "valor_porce";
$SQLusuariosdele = $conn->prepare(${$GLOBALS["wacusb"]});
$GLOBALS["vwhrdscry"] = "disponiveis";
$SQLusuariosdele->execute();
$xaqcdcmb = "todosacessos";
$GLOBALS["icqrxfytoqmw"] = "SQLqtdserveracessos2";
if ($SQLusuariosdele->rowCount() > 0) {
    $anfqmlkgbuxo = "usuariosdele";
    while (${$anfqmlkgbuxo} = $SQLusuariosdele->fetch()) {
        $ojlmlzqi = "SQLcontaqtdsshusadodele";
        $lljrll = "qtdusadosdele";
        $SQLcontaqtdsshusadodele = "SELECT sum(acesso) as acessosdosserversusados FROM conta_ssh where id_usuario = '" . ${$GLOBALS["ycgpnzu"]}["id_usuario"] . "'";
        ${$GLOBALS["ersbcom"]} = $conn->prepare(${$GLOBALS["ersbcom"]});
        $SQLcontaqtdsshusadodele->execute();
        ${$GLOBALS["pjffiwaj"]} = $SQLcontaqtdsshusadodele->fetch();
        ${$GLOBALS["pfgpwy"]} += ${$lljrll}["acessosdosserversusados"];
    }
}
${$xaqcdcmb} = 0;
${$GLOBALS["icqrxfytoqmw"]} = "SELECT sum(qtd) as tudo FROM acesso_servidor WHERE id_mestre ='0'";
${$GLOBALS["vjvwxsl"]} = $conn->prepare(${$GLOBALS["vjvwxsl"]});
$SQLqtdserveracessos2->execute();
$GLOBALS["obsaqob"] = "qtddoserverusado";
$ryfedkxb = "porcent";
${$blmnrd} = $SQLqtdserveracessos2->fetch();
${$GLOBALS["czrbrujhy"]}["tudo"] -= ${$GLOBALS["bsimrc"]};
${$hxmeow} = ${$GLOBALS["obsaqob"]} / ${$qcpfolxkuk}["tudo"] * 100;
$qiskfsibj = "SQLServidorac";
${$GLOBALS["bqgnxok"]} = ${$ryfedkxb};
${$GLOBALS["ffpwdxnnxl"]} = round(${$GLOBALS["yarxnpzy"]});
$wltnbwi = "SQLServidorac";
if (${$GLOBALS["eiuxosgeuprk"]} >= 70 and ${$hwknyofngu} < 90) {
    ${$GLOBALS["sqjtrspu"]} = "warning";
    ${$GLOBALS["hzscyu"]} = "warning";
} elseif (${$pbfppbsem} >= 90) {
    $GLOBALS["blgwreteu"] = "sucessobar";
    $GLOBALS["uukdfgcbx"] = "bgbar";
    $sucessobar = "danger";
    $bgbar = "danger";
} else {
    ${$GLOBALS["sqjtrspu"]} = "success";
    $lkrzdnshuos = "bgbar";
    $bgbar = "success";
}
$ebpzwevyt = "totalacess";
echo "<style>\n.card-datatable {\npadding-left: 5px;\npadding-right: 5px;\n}\n</style>\n<div class=\"row match-height\">\n    <!-- Support Tracker Chart Card starts -->\n    <div class=\"col-lg-12 col-12\">\n        <div class=\"card text-center\">\n            <div class=\"card-header d-flex justify-content-between pb-0\">\n                <h4 class=\"card-title text-center\">Acessos liberados para revendas</h4>\n            </div>\n            <div class=\"card-body\">\n                <div class=\"row\">\n                    <div class=\"col-sm-12 col-12 d-flex justify-content-center\">\n                        <div id=\"line-chart2\" value=\"10\"></div>\n                    </div>\n                </div>\n                <div class=\"d-flex justify-content-between mt-1\">\n                    <div class=\"text-center\">\n                        <p class=\"card-text mb-50\">Em uso</p>\n                        <span class=\"font-large-1 fw-bold\">";
echo ${$GLOBALS["pfgpwy"]};
echo "</span>\n                    </div>\n                    <div class=\"text-center\">\n                        <p class=\"card-text mb-50\">Total liberado</p>\n                        <span class=\"font-large-1 fw-bold\">";
echo $totalacess["tudo"];
echo "</span>\n                    </div>\n                    <div class=\"text-center\">\n                        <p class=\"card-text mb-50\">Dispon\xc3\xadvel</p>\n                        <span class=\"font-large-1 fw-bold\">";
echo ${$txozgvfe};
echo "</span>\n                    </div>\n                </div>\n            </div>\n        </div>\n    </div>\n</div>\n<!-- Support Tracker Chart Card ends -->\n<div class=\"col-12 mb-1\">\n<div class=\"alert alert-info\" role=\"alert\">\n<div class=\"alert-body d-flex align-items-center\">\n<i data-feather=\"star\" class=\"me-50 text-center\"></i>\n<span>Logo Abaixo voc\xc3\xaa pode editar dias de acesso e limite de suas revendas! \xf0\x9f\x91\x87</span>\n</div>\n</div>\n</div>\n<section id=\"complex-header-datatable\">\n<div class=\"row\">\n<div class=\"col-12\">\n<div class=\"card\">\n<div class=\"card-header border-bottom \">\n<h4 class=\"card-title\">Revendedores</h4>\n</div>\n<div class=\"card-datatable\">\n<table id=\"example\" class=\"table\">\n<thead>\n<tr>\n<th>SERVIDOR</th>\n<th>ENDERE\xc3\x87O IP</th>\n<th>TIPO</th>\n<th>REVENDA</th>\n<th>USO(%)</th>\n<th>RESTANTE</th>\n<th>USADO</th>\n<th>TOTAL</th>\n<th>VALIDADE</th>\n<th>OP\xc3\x87\xc3\x95ES</th>\n</tr>\n</thead>\n<tbody id=\"myTable\">\n";
${$wltnbwi} = "select * from acesso_servidor";
${$qiskfsibj} = $conn->prepare(${$GLOBALS["lepfpedw"]});
$SQLServidorac->execute();
if ($SQLServidorac->rowCount() > 0) {
    while (${$GLOBALS["ugnfgvxn"]} = $SQLServidorac->fetch()) {
        $nxrtxgnvrjs = "serveacesso";
        $pktmsxw = "Servidor";
        $GLOBALS["pqcofvylggp"] = "Servidor";
        $GLOBALS["lfyvduitnp"] = "serveacesso";
        $frawvrdhahb = "valor_porcetage";
        $GLOBALS["ogplkuznen"] = "SQLAcessoSSH";
        $xdpphurnv = "cliente";
        $bomfmvjysgdj = "somapode";
        $GLOBALS["bgdipljlx"] = "row";
        ${$GLOBALS["yamesxm"]} = "select * from servidor where id_servidor='" . ${$GLOBALS["ugnfgvxn"]}["id_servidor"] . "'";
        ${$pktmsxw} = $conn->prepare(${$GLOBALS["pqcofvylggp"]});
        $ewbsbkdiyftp = "contas";
        $vkyrtoxpji = "porcentagem";
        $GLOBALS["wezdmwmi"] = "porcentagem";
        $GLOBALS["fmawhgnyvpir"] = "serveacesso";
        $Servidor->execute();
        ${$GLOBALS["bgdipljlx"]} = $Servidor->fetch();
        $GLOBALS["ntwgqnh"] = "SQLContasSSH";
        ${$GLOBALS["kigeenuzxww"]} = "select * from usuario WHERE id_usuario='" . ${$nxrtxgnvrjs}["id_usuario"] . "' ";
        ${$GLOBALS["kigeenuzxww"]} = $conn->prepare(${$GLOBALS["kigeenuzxww"]});
        $SQLcliennte->execute();
        $GLOBALS["ddffkqgqlw"] = "cliente";
        ${$xdpphurnv} = $SQLcliennte->fetch();
        ${$GLOBALS["dlnjwzpdiy"]} = 0;
        ${$GLOBALS["fgwnnlumdv"]} = 0;
        $dpgpir = "contas";
        ${$GLOBALS["xspezorbwgk"]} = "select * from conta_ssh WHERE id_usuario = '" . ${$GLOBALS["fmawhgnyvpir"]}["id_usuario"] . "' and id_servidor='" . ${$GLOBALS["ugnfgvxn"]}["id_servidor"] . "'";
        $GLOBALS["jlyxwe"] = "total_acesso_ssh";
        ${$GLOBALS["xspezorbwgk"]} = $conn->prepare(${$GLOBALS["ntwgqnh"]});
        $SQLContasSSH->execute();
        $yqvwnhwk = "total_acesso_ssh";
        ${$dpgpir} += $SQLContasSSH->rowCount();
        $kfrktcxfkb = "SQLAcessoSSH";
        $lisbydygnie = "serveacesso";
        $GLOBALS["zpjqydmnm"] = "serveacesso";
        ${$GLOBALS["ogplkuznen"]} = "SELECT sum(acesso) AS quantidade  FROM conta_ssh where id_usuario='" . ${$GLOBALS["lfyvduitnp"]}["id_usuario"] . "' and id_servidor='" . ${$GLOBALS["ugnfgvxn"]}["id_servidor"] . "'";
        ${$GLOBALS["xscdphl"]} = $conn->prepare(${$kfrktcxfkb});
        $SQLAcessoSSH->execute();
        ${$GLOBALS["xscdphl"]} = $SQLAcessoSSH->fetch();
        $GLOBALS["ittxhpwkdd"] = "valor_porcetage";
        $GLOBALS["bqnzdbudljp"] = "SQLSUB";
        $GLOBALS["cdhnqefhqbw"] = "SQLUserSub";
        ${$GLOBALS["jlyxwe"]} += ${$GLOBALS["xscdphl"]}["quantidade"];
        ${$GLOBALS["thawksgwxc"]} = "select * from usuario WHERE id_mestre = '" . ${$GLOBALS["ugnfgvxn"]}["id_usuario"] . "' and subrevenda='nao'";
        ${$GLOBALS["cdhnqefhqbw"]} = $conn->prepare(${$GLOBALS["thawksgwxc"]});
        $SQLUserSub->execute();
        if ($SQLUserSub->rowCount() > 0) {
            $mupzrhpveny = "rowS";
            while (${$mupzrhpveny} = $SQLUserSub->fetch()) {
                $osaxmop = "SQLContasSSH";
                $ahjwrplo = "SQLAcessoSSH";
                $GLOBALS["ojqlpvijvs"] = "contas";
                $SQLContasSSH = "select * from conta_ssh WHERE id_usuario = '" . ${$GLOBALS["gbhqhhcgv"]}["id_usuario"] . "'  and id_servidor='" . ${$GLOBALS["ugnfgvxn"]}["id_servidor"] . "'";
                $GLOBALS["etuxycfxxtw"] = "SQLContasSSH";
                $evoqst = "SQLContasSSH";
                $SQLContasSSH = $conn->prepare($SQLContasSSH);
                $SQLContasSSH->execute();
                $contas += $SQLContasSSH->rowCount();
                $SQLAcessoSSH = "SELECT sum(acesso) AS quantidade  FROM conta_ssh where id_usuario='" . ${$GLOBALS["gbhqhhcgv"]}["id_usuario"] . "'  and id_servidor='" . ${$GLOBALS["ugnfgvxn"]}["id_servidor"] . "'";
                $GLOBALS["kgmbbcwnhcx"] = "SQLAcessoSSH";
                ${$GLOBALS["xscdphl"]} = $conn->prepare(${$GLOBALS["xscdphl"]});
                $SQLAcessoSSH->execute();
                ${$GLOBALS["kgmbbcwnhcx"]} = $SQLAcessoSSH->fetch();
                ${$GLOBALS["fgwnnlumdv"]} += ${$GLOBALS["xscdphl"]}["quantidade"];
            }
        }
        ${$GLOBALS["nsjwqlvyxp"]} = "select * from acesso_servidor where id_mestre='" . ${$GLOBALS["ugnfgvxn"]}["id_usuario"] . "'  ";
        ${$GLOBALS["nsjwqlvyxp"]} = $conn->prepare(${$GLOBALS["bqnzdbudljp"]});
        $GLOBALS["exxpbef"] = "row";
        $GLOBALS["osdheeyj"] = "data_validade";
        $lqcqse = "dias_acesso";
        $vktwumnz = "resultado2";
        $SQLSUB->execute();
        if ($SQLSUB->rowCount() > 0) {
            $efyffo = "row_user";
            while (${$efyffo} = $SQLSUB->fetch()) {
                $GLOBALS["tguexmdj"] = "total_acesso_ssh";
                $GLOBALS["jfnrwwm"] = "row_user";
                $GLOBALS["onxqedvdm"] = "SQLUSSH";
                $eknbzhc = "SQLUSSH";
                $hsgqobt = "SQLUSSH";
                $SQLUSSH = "select sum(qtd) as soma from acesso_servidor where id_usuario = '" . $row_user["id_usuario"] . "' ";
                $SQLUSSH = $conn->prepare($SQLUSSH);
                $SQLUSSH->execute();
                ${$GLOBALS["exhbybwsvdt"]} = $SQLUSSH->fetch();
                ${$GLOBALS["tguexmdj"]} += ${$GLOBALS["exhbybwsvdt"]}["soma"];
            }
        }
        $GLOBALS["okbtxdh"] = "resultado2";
        ${$vkyrtoxpji} = ${$yqvwnhwk} / ${$GLOBALS["ugnfgvxn"]}["qtd"] * 100;
        ${$GLOBALS["okbtxdh"]} = ${$GLOBALS["wezdmwmi"]};
        ${$GLOBALS["ittxhpwkdd"]} = round(${$vktwumnz});
        if (${$GLOBALS["dhvimhr"]} >= 100) {
            ${$GLOBALS["dhvimhr"]} = 100;
        }
        if (${$GLOBALS["dhvimhr"]} >= 70 and ${$GLOBALS["dhvimhr"]} < 90) {
            $hmnpbcxsdo = "bgbar2";
            ${$GLOBALS["sqjtrspu"]} = "warning";
            ${$hmnpbcxsdo} = "warning";
        } elseif (${$frawvrdhahb} >= 90) {
            $rnpgqci = "sucessobar";
            $hevdfixm = "bgbar2";
            $sucessobar = "danger";
            $bgbar2 = "danger";
        } else {
            $GLOBALS["pwosivc"] = "sucessobar";
            $sucessobar = "success";
            ${$GLOBALS["ruyhelwhqwx"]} = "success";
        }
        ${$GLOBALS["xlhmuth"]} = date("Y-m-d H:i:s");
        ${$GLOBALS["obztsdhmuoa"]} = ${$GLOBALS["jfdeitlkpkuo"]}["validade"];
        if (${$GLOBALS["osdheeyj"]} > ${$GLOBALS["xlhmuth"]}) {
            $xthbip = "data_atual";
            $GLOBALS["nroymfm"] = "diferenca";
            $uwvuio = "dias_acesso";
            ${$GLOBALS["pkfgrvw"]} = strtotime(${$GLOBALS["obztsdhmuoa"]}) - strtotime($data_atual);
            ${$uwvuio} = floor(${$GLOBALS["nroymfm"]} / 86400);
        } else {
            $GLOBALS["xjixzd"] = "dias_acesso";
            $dias_acesso = 0;
        }
        if (${$GLOBALS["becwqdrkulwe"]} > 10) {
            ${$GLOBALS["pvczcuf"]} = "info";
        } elseif (${$lqcqse} == 0) {
            $nuktaievtu = "stsd";
            $stsd = "danger";
        } else {
            $hvbtduszs = "stsd";
            $stsd = "warning";
        }
        ${$lisbydygnie}["qtd"] -= ${$GLOBALS["fgwnnlumdv"]};
        if (${$GLOBALS["ddffkqgqlw"]}["subrevenda"] == "nao") {
            $GLOBALS["emarnlk"] = "cliente";
            $GLOBALS["cxhulrpdyk"] = "serveacesso";
            $pikxxhnr = "serveacesso";
            $GLOBALS["rmvrqrp"] = "cliente";
            $GLOBALS["uslpcqcrpbi"] = "serveacesso";
            $hydyvgva = "cliente";
            echo "<div class=\"modal fade text-start\" data-bs-backdrop=\"false\" id=\"squarespaceModal";
            $oxostrmww = "serveacesso";
            echo $serveacesso["id_acesso_servidor"];
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalLabel\" aria-hidden=\"true\">\n<div class=\"modal-dialog\">\n<div class=\"modal-content\">\n<div class=\"modal-header\">\n<h3 class=\"modal-title\" id=\"lineModalLabel\"><i class=\"fa fa-pencil-square-o\"></i>Editar Servidor de Acesso</h3>\n<button type=\"button\" onclick=\"reload();\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>\n</div>\n<div class=\"modal-body\">\n<!-- content goes here -->\n<form name=\"editaserver\" action=\"pages/usuario/edita_revenda.php\" method=\"post\">\n<input name=\"idservidoracesso\" type=\"hidden\" value=\"";
            echo $serveacesso["id_acesso_servidor"];
            echo "\">\n<div class=\"mb-1\">\n<div class=\"form-group\">\n<label class=\"form-label\" for=\"first-name-icon\">Servidor</label>\n<select size=\"1\" class=\"form-control select2\" name=\"fazer\" disabled>\n<option value=\"";
            echo ${$GLOBALS["iynyfm"]}["id_servidor"];
            $burmexjc = "row";
            echo "\" selected=selected> ";
            echo $row["nome"];
            $vsxiudgbx = "dias_acesso";
            echo "</option>\n</select>\n</div>\n</div>\n<div class=\"mb-1\">\n<div class=\"form-group\">\n<label class=\"form-label\" for=\"first-name-icon\">Revendedor</label>\n<input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" value=\"";
            echo $cliente["login"];
            echo "\" disabled>\n</div>\n</div>\n<div class=\"col-sm-12 col-md-12\">\n<div class=\"demo-spacing-0 mb-2\">\n<div class=\"alert alert-warning\" role=\"alert\">\n<div class=\"alert-body d-flex align-items-center\">\n<i data-feather=\"info\" class=\"me-50\"></i>\n<span>Para altera dias ou limite use + ou - Ex: -1</span>\n</div>\n</div>\n</div>\n<div class=\"d-flex justify-content-center mb-2\">\n<label class=\"form-control-label\" for=\"control-label\">Dias </label>\n<div class=\"input-group\">\n<input type=\"number\" class=\"touchspin-min-max position-left-50\" name=\"dias\" value=\"0\" />\n</div>\n<label class=\"form-control-label\" for=\"control-label\">Limite</label>\n<div class=\"input-group\">\n<input type=\"number\" class=\"touchspin-min-max\" name=\"limite\" value=\"0\" />\n</div>\n</div>\n</div>\n<input type=\"hidden\" class=\"form-control\" id=\"ids\" name=\"ids\" value=\"";
            echo $cliente["id_usuario"];
            echo "\">\n<input type=\"hidden\" class=\"form-control\" id=\"qtd\" name=\"qtd\" value=\"";
            echo ${$GLOBALS["vsjmjywsrwu"]};
            echo "\">\n<input type=\"hidden\" class=\"form-control\" id=\"rest\" name=\"rest\" value=\"";
            echo $dias_acesso;
            echo "\">\n<div class=\"modal-footer\">\n<div class=\"col-12 text-center\">\n<button class=\"btn btn-success\">Confirmar</button>\n<button type=\"button\" onclick=\"reload();\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\" aria-label=\"Close\">Cancelar</button>\n</div>\n</div>\n</form>\n</div>\n</div>\n</div>\n</div>\n<!--<div class=\"modal fade text-start\" id=\"squarespaceModal";
            echo $serveacesso["id_acesso_servidor"];
            echo "\" aria-hidden=\"true\" aria-labelledby=\"modalToggleLabel2\" tabindex=\"-1\">\n<div class=\"modal-dialog modal-dialog-centered\">\n<div class=\"modal-content\">\n<div class=\"modal-header\">\n<h3 class=\"modal-title\" id=\"lineModalLabel\"><i data-feather=\"edit\" class=\"font-medium-5\"></i> Alterar Servidor de Acesso</h3>\n</div>\n<form name=\"editaserver\" action=\"pages/usuario/edita_revenda.php\" method=\"post\">\n<div class=\"modal-body\">\n<input class=\"form-control\" name=\"idservidoracesso\" type=\"hidden\" value=\"";
            $GLOBALS["vlgbforumpyv"] = "somapode";
            echo $serveacesso["id_acesso_servidor"];
            echo "\">\n<div class=\"col-md-12 col-12\">\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"basicSelect\">Servidor</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather=\"server\"></i></span>\n<select size=\"1\" class=\"form-select\" name=\"fazer\" disabled>\n<option class=\"form-control\" value=\"";
            echo ${$GLOBALS["iynyfm"]}["id_servidor"];
            echo "\" selected=selected> ";
            echo ${$GLOBALS["iynyfm"]}["nome"];
            echo " - Pode Remover: ";
            echo $somapode;
            echo "</option>\n</select>\n</div>\n</div>\n</div>\n<div class=\"col-md-12 col-12\">\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"first-name-icon\">Revendedor</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather=\"users\"></i></span>\n<input type=\"text\" class=\"form-control text-left\" id=\"exampleInputEmail1\" value=\"    ";
            echo $cliente["nome"];
            echo "\" disabled>\n</div>\n</div>\n</div>\n<div class=\"col-md-12 col-12\">\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"basicSelect\">Oque deseja fazer?</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather='edit-3'></i></span>\n<select size=\"1\" name=\"addremove\" class=\"form-select\">\n<option value=\"1\" selected=selected> adicionar Dias e Limite</option>\n<option value=\"2\">Apenas Remover Limite</option>\n<option value=\"3\">Apenas Remover Dias</option>\n</select>\n</div>\n</div>\n</div>\n<div class=\"col-md-12 col-12\">\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"first-name-icon\">Dias</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather=\"calendar\"></i></span>\n<input type=\"number\" class=\"form-control\" name=\"dias\" value=\"0\" require=\"\">\n</div>\n</div>\n</div>\n<div class=\"col-md-12 col-12\">\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"first-name-icon\">Limite</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather=\"smartphone\"></i></span>\n<input type=\"number\" class=\"form-control\" name=\"limite\" value=\"0\" require=\"\">\n</div>\n</div>\n</div>\n</div>\n<div class=\"modal-footer\">\n<div class=\"col-12 text-center\">\n<button class=\"btn btn-success\">Confirmar</button>\n<button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\" aria-label=\"Close\">Cancelar</button>\n</div>\n</div>\n</form>\n</div>\n</div>\n</div>\n</div>\n</div>-->\n";
        }
        echo "<tr>\n";
        if (${$GLOBALS["jfdeitlkpkuo"]}["subrevenda"] == "nao") {
            ${$GLOBALS["nesjhtz"]} = "info";
            ${$GLOBALS["vfkukplvbs"]} = "primary";
        } else {
            $ftnjemynpfo = "color";
            ${$GLOBALS["vfkukplvbs"]} = "warning";
            ${$ftnjemynpfo} = "warning";
        }
        $gnbdcjb = "cliente";
        echo "<td>\n<span class=\"pull-left-container\" style=\"margin-right: 5px;\">\n<span class=\"badge badge-light-info\">\n";
        echo ${$GLOBALS["iynyfm"]}["nome"];
        echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 5px;\">\n<span class=\"badge badge-light-info\">\n";
        $GLOBALS["rlqauowkkdz"] = "cliente";
        echo ${$GLOBALS["exxpbef"]}["ip_servidor"];
        echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 5px;\">\n";
        if (${$GLOBALS["jfdeitlkpkuo"]}["subrevenda"] == "nao") {
            echo "<span class=\"badge badge-light-primary\">Revenda</span>";
        } else {
            echo "<span class=\"badge badge-light-warning\">Sub-Revenda</span>";
        }
        echo "</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 5px;\">\n<span class=\"badge badge-light-info\">\n";
        echo ${$GLOBALS["jfdeitlkpkuo"]}["nome"];
        echo "</span>\n</span>\n</td>\n<td><span class=\"badge badge-light-";
        echo ${$GLOBALS["ruyhelwhqwx"]};
        echo "\">";
        echo ${$GLOBALS["dhvimhr"]};
        echo "%</span></td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 5px;\">\n<span class=\"badge badge-light-info\">\n";
        echo ${$GLOBALS["vsjmjywsrwu"]};
        echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 5px;\">\n<span class=\"badge badge-light-info\">\n";
        echo ${$GLOBALS["fgwnnlumdv"]};
        echo "</span>\n</span>\n</td>\n<!--<td>\n<span class=\"pull-left-container\" style=\"margin-right: 5px;\">\n<span class=\"badge badge-light-info\">\n";
        echo ${$ewbsbkdiyftp};
        echo "</span>\n</span>\n</td>-->\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 5px;\">\n<span class=\"badge badge-light-info\">\n";
        echo ${$GLOBALS["ugnfgvxn"]}["qtd"];
        echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 5px;\">\n";
        if (${$GLOBALS["becwqdrkulwe"]} > 1) {
            echo "<span class=\"badge badge-light-";
            echo ${$GLOBALS["pvczcuf"]};
            echo "\">";
            echo ${$GLOBALS["becwqdrkulwe"]};
            echo "<b> dias</b></span>\n";
        } else {
            $GLOBALS["jhhhbmokhef"] = "stsd";
            echo "<span class=\"badge badge-light-";
            echo $stsd;
            $scinfycgmfd = "dias_acesso";
            echo "\">";
            echo $dias_acesso;
            echo "<b> dia</b></span>\n";
        }
        echo "</span>\n</span>\n</td>\n<td>\n<div class=\"modal-size-xs d-inline-block\">\n<!-- Modal -->\n<div class=\"modal fade text-start\" id=\"xSmall";
        echo ${$GLOBALS["zpjqydmnm"]}["id_acesso_servidor"];
        echo "\" tabindex=\"-1\" aria-labelledby=\"myModalLabel20\" aria-hidden=\"true\">\n<div class=\"modal-dialog modal-dialog-centered modal-xs\">\n<div class=\"modal-content\">\n<div class=\"modal-header\">\n<h4 class=\"modal-title\" id=\"myModalLabel20\">Escolha uma op\xc3\xa7\xc3\xa3o!</h4>\n<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>\n</div>\n<div class=\"modal-body\">\n<ul class=\"list-group\">\n<li class=\"list-group mb-1\">\n<a href=\"home.php?page=usuario/perfil&id_usuario=";
        echo ${$GLOBALS["ugnfgvxn"]}["id_usuario"];
        echo "\" class=\"btn btn-sm btn-primary\"><i data-feather=\"eye\"></i> VER PERFIL <i data-feather=\"eye\"></i></a>\n</li>\n<li class=\"list-group mb-1\">\n<button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#squarespaceModal";
        echo ${$GLOBALS["ugnfgvxn"]}["id_acesso_servidor"];
        echo "\" data-bs-dismiss=\"modal\" class=\"btn btn-sm btn-warning\"><i data-feather=\"edit\"></i> EDITAR LIMITE OU DATA <i data-feather=\"edit\"></i></button>\n</li>\n<li class=\"list-group mb-1\">\n";
        if (${$GLOBALS["jfdeitlkpkuo"]}["ativo"] != 1) {
            $qhdtrwsd = "dias_acesso";
            if ($dias_acesso == 0) {
                $daoqkymf = "cliente";
                echo "<a type=\"button\" href=\"../pages/system/funcoes.usuario.php?&id_usuario=";
                echo ${$GLOBALS["jfdeitlkpkuo"]}["id_usuario"];
                echo "&diretorio=../../admin/home.php?page=servidor/alocados&owner=";
                echo ${$GLOBALS["fpyhwuxold"]};
                echo "&op=ususpender&renovar=";
                echo $cliente["id_usuario"];
                echo "\" class=\"btn btn-sm btn-success\"><i data-feather='refresh-ccw'></i> RENOVAR +30 DIAS <i data-feather='refresh-ccw'></i></a>\n";
            } else {
                $mrtewower = "cliente";
                $xlgowblcgrq = "accessKEY";
                echo "<a type=\"button\" href=\"../pages/system/funcoes.usuario.php?&id_usuario=";
                echo $cliente["id_usuario"];
                echo "&diretorio=../../admin/home.php?page=servidor/alocados&owner=";
                echo $accessKEY;
                echo "&op=ususpender\" class=\"btn btn-sm btn-success\"><i data-feather='user-check'></i> REATIVAR REVENDA <i data-feather='user-check'></i></a>\n";
            }
        } else {
            echo "<a type=\"button\" href=\"../pages/system/funcoes.usuario.php?&id_usuario=";
            echo ${$GLOBALS["jfdeitlkpkuo"]}["id_usuario"];
            $moslpult = "accessKEY";
            echo "&diretorio=../../admin/home.php?page=servidor/alocados&owner=";
            echo $accessKEY;
            echo "&op=suspender\" class=\"btn btn-sm btn-danger\"><i data-feather='user-x'></i> SUSPENDER REVENDA <i data-feather='user-x'></i></a>\n";
        }
        echo "</li>\n</ul>\n</div>\n</div>\n</div>\n</div>\n</div>\n";
        if (${$GLOBALS["rlqauowkkdz"]}["subrevenda"] == "nao" and ${$gnbdcjb}["id_mestre"] == "0") {
            $jhcavtqdfkf = "serveacesso";
            echo "<button type=\"button\" class=\"btn btn-sm btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#xSmall";
            echo $serveacesso["id_acesso_servidor"];
            echo "\"><i data-feather='grid'></i></button>\n";
        } else {
            echo "<a href=\"home.php?page=usuario/perfil&id_usuario=";
            echo ${$GLOBALS["ugnfgvxn"]}["id_usuario"];
            echo "\" class=\"btn btn-sm btn-warning\"><i data-feather=\"eye\"></i></a>\n";
        }
        echo "</td>\n</tr>\n";
    }
}
echo "</tbody>\n</table>\n</div>\n</div>\n</section>\n<style>\n.modal .modal-header {\nborder-bottom: none;\nposition: relative;\n}\n.modal .modal-header .btn {\nposition: absolute;\ntop: 0;\nright: 0;\nmargin-top: 0;\nborder-top-left-radius: 0;\nborder-bottom-right-radius: 0;\n}\n.modal .modal-footer {\nborder-top: none;\npadding: 0;\n}\n.modal .modal-footer .btn-group>.btn:first-child {\nborder-bottom-left-radius: 0;\n}\n.modal .modal-footer .btn-group>.btn:last-child {\nborder-top-right-radius: 0;\n}\n</style>\n<script>\nvar \$avgSessionStrokeColor2 = '#ebf0f7';\nvar \$textHeadingColor = '#5e5873';\nvar \$white = '#fff';\nvar \$strokeColor = '#ebe9f1';\nvar chartOptions = {\nchart: {\nheight: 220,\ntype: 'radialBar'\n},\nplotOptions: {\nradialBar: {\nsize: 150,\noffsetY: 20,\nstartAngle: -150,\nendAngle: 150,\nhollow: {\nsize: '65%'\n},\ntrack: {\nbackground: \$white,\nstrokeWidth: '100%'\n},\ndataLabels: {\nname: {\noffsetY: -5,\ncolor: \$textHeadingColor,\nfontSize: '1rem'\n},\nvalue: {\noffsetY: 15,\ncolor: \$textHeadingColor,\nfontSize: '1.714rem'\n}\n}\n}\n},\ncolors: ['#ea5455'],\nfill: {\ntype: 'gradient',\ngradient: {\nshade: 'dark',\ntype: 'horizontal',\nshadeIntensity: 0.5,\ngradientToColors: ['#28c76f'],\ninverseColors: true,\nopacityFrom: 1,\nopacityTo: 1,\nstops: [0, 100]\n}\n},\nstroke: {\ndashArray: 5\n},\nseries: [";
echo ${$uugdjvvnjl};
echo "],\nlabels: ['Utilizado'],\n};\nvar chart = new ApexCharts(document.querySelector(\"#line-chart2\"), chartOptions);\nchart.render();\n\$(\"button[data-bs-dismiss=modal]\").click(function(){\n\$(\".modal\").modal('hide');\n});\n</script>\n<script src=\"../../../app-assets/vendors/js/vendors.min.js\"></script>\n<script src=\"../../../app-assets/js/scripts/forms/form-number-input.js\"></script>\n<script type=\"text/javascript\">\n\$(\"button[data-bs-dismiss=modal]\").click(function(){\n\$(\".modal\").modal('hide');\n});\nfunction reload() {\ndocument.location.reload(true);\n}\n</script>\n";
