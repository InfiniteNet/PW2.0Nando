<?php

$GLOBALS["lzvxcgyc"] = "SQLovpn";
$GLOBALS["ydtydlpzo"] = "dias_acesso";
$GLOBALS["trdoch"] = "ano";
$GLOBALS["tydfvhd"] = "mes";
$GLOBALS["qkmaacxihi"] = "diferenca";
$GLOBALS["nydcqc"] = "data2";
$GLOBALS["pvrpoxlu"] = "data_validade";
$GLOBALS["cgzbvmci"] = "SQLAcessoSSH";
$GLOBALS["fpfoxiunl"] = "SQLTotalUser";
$GLOBALS["lvtgggo"] = "row2";
$GLOBALS["aqfrehbcgu"] = "SQLUsuarioSSH";
$GLOBALS["vibdtubyei"] = "SQLContasSSH";
$GLOBALS["ryytobajp"] = "mensagem_uram";
$GLOBALS["bxciprj"] = "uram";
$GLOBALS["qgsvhkawpdw"] = "nome_processador";
$GLOBALS["cvwcwsf"] = "partes";
$GLOBALS["ntxsfwius"] = "mensagem_p";
$GLOBALS["vuvjrn"] = "mensagem_v2";
$dsqubj = "SQLovpn";
$GLOBALS["jkkofqsgh"] = "utilproc";
$GLOBALS["ylsrepzpqcy"] = "SQLUsuarioSSH";
$GLOBALS["anybvuxbqmt"] = "servidor";
$GLOBALS["tmgyigmxtgm"] = "cpu_fisico";
$GLOBALS["etkqfwr"] = "mensagem_f";
$GLOBALS["cduhfmnc"] = "words";
$emcjfzahd = "servidor";
$GLOBALS["sqijihi"] = "senhaSSH";
$GLOBALS["cmezqheahsf"] = "loginSSH";
$GLOBALS["opqdrsoocmk"] = "utilproc";
$GLOBALS["ybxmjiufa"] = "ip_servidor";
$GLOBALS["cpblgx"] = "status";
$skivyrrsrs = "servidor";
$GLOBALS["rqtehnvj"] = "servidor";
$GLOBALS["rrihccvsnv"] = "servidor";
$GLOBALS["zkoslk"] = "SQLServidor";
$kwujemr = "servidor";
$GLOBALS["vclkaayfh"] = "SQLUsuarioSSH";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/servidor.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
$yvqjjvm = "servidor";
$ydwphxxqbnic = "servidor";
protegePagina("donoadmin");
if (isset($_GET["id_servidor"])) {
    $foyhot = "SQLServidor";
    $pcwqggwtlcbn = "SQLServidor";
    $SQLServidor = "select * from servidor WHERE id_servidor = '" . $_GET["id_servidor"] . "'";
    $SQLServidor = $conn->prepare(${$GLOBALS["zkoslk"]});
    $SQLServidor->execute();
    ${$GLOBALS["rqtehnvj"]} = $SQLServidor->fetch();
    if ($SQLServidor->rowCount() == 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"N\xc3\xa3o encontrado!\");";
        echo "window.location=\"home.php?page=servidor/listar\";";
        echo "</script>";
        exit;
    }
} else {
    echo "<script type=\"text/javascript\">";
    echo "alert(\"Preencha todos os campos!\");";
    echo "window.location=\"home.php?page=servidor/listar\";";
    echo "</script>";
    exit;
}
if (${$GLOBALS["rrihccvsnv"]}["online"] == 0) {
    ${$GLOBALS["cpblgx"]} = "<div class='alert alert-danger col-12 col-md-12' role='alert'><div class='alert-body d-center align-items-center text-center'><span>OFFLINE</span></div></div>";
} else {
    $GLOBALS["ilqorknrh"] = "servidor";
    if ($servidor["autenticado"] == 0) {
        $GLOBALS["ajiyuuvko"] = "status";
        $status = "<div class='alert alert-warning col-12 col-md-12' role='alert'><div class='alert-body d-center align-items-center text-center'><span>N\xc3\x83O AUTENTICADO</span></div></div>";
    } else {
        $GLOBALS["suafpxpxfkc"] = "mensagem";
        $GLOBALS["qgnxtqssds"] = "mensagem_uram";
        $tcifxxhqwqdr = "servidor";
        $GLOBALS["oqfgutyik"] = "usuarios_online";
        $clwzhxxyk = "mensagem_v2";
        $GLOBALS["ewqesd"] = "senhaSSH";
        ${$GLOBALS["ybxmjiufa"]} = $servidor["ip_servidor"];
        $onksjcm = "servidor";
        $ibnbxcmkrij = "ssh";
        ${$GLOBALS["cmezqheahsf"]} = ${$GLOBALS["rqtehnvj"]}["login_server"];
        ${$GLOBALS["ewqesd"]} = ${$onksjcm}["senha"];
        ${$ibnbxcmkrij} = new SSH2(${$GLOBALS["ybxmjiufa"]});
        $GLOBALS["huppozqeyu"] = "mensagem";
        $ssh->auth(${$GLOBALS["cmezqheahsf"]}, ${$GLOBALS["sqijihi"]});
        $GLOBALS["hdloucc"] = "SQLContasSSH";
        $GLOBALS["rtsusedsc"] = "mensagem_u";
        $ssh->exec("free -m");
        $GLOBALS["eoducyunf"] = "usuarios_online";
        $mensagem = (string) $ssh->output();
        ${$GLOBALS["cduhfmnc"]} = preg_split("/[\\s,]*\\\"([^\\\"]+)\\\"[\\s,]*|[\\s,]*'([^']+)'[\\s,]*|[\\s,]+/", ${$GLOBALS["suafpxpxfkc"]}, 0, "PREG_SPLIT_NO_MM_WYPTURE");
        $tegxchl = "SQLContasSSH";
        $GLOBALS["urhlvjis"] = "SQLContasSSH";
        $ssh->exec("echo \$(grep -c cpu[0-9] /proc/stat)");
        $qzurfx = "partes";
        ${$GLOBALS["etkqfwr"]} = (string) $ssh->output();
        ${$GLOBALS["tmgyigmxtgm"]} = ${$GLOBALS["etkqfwr"]};
        $ssh->exec("echo \"\$[100-\$(vmstat 1 2|tail -1|awk '{print \$15}')]\"%");
        ${$clwzhxxyk} = (string) $ssh->output();
        ${$GLOBALS["jkkofqsgh"]} = ${$GLOBALS["vuvjrn"]};
        $ssh->exec("cat /proc/cpuinfo | egrep ' model name|model name'");
        ${$GLOBALS["ntxsfwius"]} = (string) $ssh->output();
        $GLOBALS["maqkshjy"] = "mensagem_u";
        ${$GLOBALS["cvwcwsf"]} = explode(":", ${$GLOBALS["ntxsfwius"]});
        ${$GLOBALS["qgsvhkawpdw"]} = ${$qzurfx}[1];
        $ssh->exec("printf '%-8s' \"\$(free -m | awk 'NR==2{printf \"%.2f%%\", \$3*100/\$2 }')\"");
        ${$GLOBALS["qgnxtqssds"]} = (string) $ssh->output();
        ${$GLOBALS["bxciprj"]} = ${$GLOBALS["ryytobajp"]};
        $vnxkbo = "uptime";
        $ssh->exec("uptime");
        ${$GLOBALS["maqkshjy"]} = (string) $ssh->output();
        ${$vnxkbo} = ${$GLOBALS["rtsusedsc"]};
        ${$GLOBALS["eoducyunf"]} = 0;
        ${$GLOBALS["vibdtubyei"]} = "SELECT sum(online) AS soma  FROM conta_ssh where id_servidor = '" . $_GET["id_servidor"] . "'   ";
        $GLOBALS["xjtykrgdamwr"] = "status";
        ${$GLOBALS["vibdtubyei"]} = $conn->prepare(${$tegxchl});
        $SQLContasSSH->execute();
        ${$GLOBALS["urhlvjis"]} = $SQLContasSSH->fetch();
        ${$GLOBALS["oqfgutyik"]} += ${$GLOBALS["hdloucc"]}["soma"];
        ${$GLOBALS["xjtykrgdamwr"]} = "<div class='alert alert-success col-12 col-md-12' role='alert'><div class='alert-body d-center align-items-center text-center'><span>AUTENTICADO</span></div></div>";
    }
}
$dmxrhundd = "nome_processador";
echo "<div class=\"modal-size-xs d-inline-block\">\n<!-- Modal -->\n<div class=\"modal fade text-start\" id=\"xSmall\" tabindex=\"-1\" aria-labelledby=\"myModalLabel20\" aria-hidden=\"true\">\n<div class=\"modal-dialog modal-dialog-centered modal-xs\">\n<div class=\"modal-content\">\n<div class=\"modal-header\">\n<h4 class=\"modal-title\" id=\"myModalLabel20\">Fun\xc3\xa7\xc3\xb5es do servidor</h4>\n<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>\n</div>\n<div class=\"modal-body\">\n<ul class=\"list-group\">\n<li class=\"list-group mb-1\">\n<a href=\"../admin/pages/servidor/servidor_exe.php?id_servidor=";
echo ${$GLOBALS["rqtehnvj"]}["id_servidor"];
echo "&com=sincronizar\" class=\"btn btn-success\"><i data-feather='repeat'></i>RECRIAR CONTAS SSH</a>\n</li>\n<li class=\"list-group mb-1\">\n<a href=\"../admin/pages/servidor/servidor_exe.php?id_servidor=";
echo ${$ydwphxxqbnic}["id_servidor"];
$GLOBALS["rihnxmon"] = "servidor";
$avefjmeyjifg = "usuarios_online";
echo "&com=deletarall\" class=\"btn btn-danger\"><i data-feather='trash'></i>EXCLUIR CONTAS SSH</a>\n</li>\n<li class=\"list-group mb-1\">\n<a href=\"../admin/pages/servidor/servidor_exe.php?id_servidor=";
echo ${$emcjfzahd}["id_servidor"];
echo "&com=reiniciar\" class=\"btn btn-warning\"><i data-feather='refresh-cw'></i>REINICIAR SERVIDOR</a>\n</li>\n<li class=\"list-group mb-1\">\n";
if (${$GLOBALS["anybvuxbqmt"]}["manutencao"] == "nao") {
    $nciqwnjsvip = "servidor";
    echo "<a href=\"../admin/pages/servidor/servidor_exe.php?id_servidor=";
    echo $servidor["id_servidor"];
    echo "&com=manutencao\" class=\"btn btn-warning\"><i data-feather='tool'></i>POR EM MANUTEN\xc3\x87\xc3\x83O</a>\n";
} else {
    echo "<a href=\"../admin/pages/servidor/servidor_exe.php?id_servidor=";
    echo ${$GLOBALS["rqtehnvj"]}["id_servidor"];
    echo "&com=manutencao\" class=\"btn btn-success\"><i data-feather='tool'></i>TIRAR DA MANUTEN\xc3\x87\xc3\x83O</a>\n";
}
echo "</li>\n<li class=\"list-group mb-1\">\n<a href=\"../admin/pages/servidor/servidor_exe.php?id_servidor=";
echo ${$GLOBALS["rqtehnvj"]}["id_servidor"];
echo "&com=deletarContas\" class=\"btn btn-danger\"><i data-feather='trash'></i>DELETAR CONTAS SSH</a>\n</li>\n<li class=\"list-group mb-1\">\n<a href=\"../admin/pages/servidor/servidor_exe.php?id_servidor=";
$briuevkyd = "servidor";
echo $servidor["id_servidor"];
echo "&com=deletarGeral\" class=\"btn btn-danger\"><i data-feather='trash-2'></i>DELETAR GERAL</a>\n</li>\n</ul>\n</div>\n</div>\n</div>\n</div>\n</div>\n<!-- Input with Icons start -->\n<section id=\"collapsible1\">\n<div class=\"row\">\n<div class=\"col-sm-12\">\n<div class=\"row\">\n<div class=\"col-sm-6\">\n<div class=\"card card-transaction\">\n<div class=\"card-body little-profile text-center\">\n<p class=\"card-text\">";
$fbicmlaskfx = "servidor";
echo ${$GLOBALS["cpblgx"]};
echo "</p>\n";
$ffohdndeazk = "servidor";
if (${$GLOBALS["rihnxmon"]}["manutencao"] != "nao") {
    echo "<div class='alert alert-warning col-12 col-md-12' role='alert'>\n<div class='alert-body d-center align-items-center text-center'>\n<span>Em Manuten\xc3\xa7\xc3\xa3o!</span>\n</div>\n</div>\n";
}
echo "<ul class=\"list-group list-group-unbordered\">\n<li class=\"list-group-item\">\n<span class=\"badge badge-pill bg-primary float-right\"></span>\n<b class=\"text-primary\"><i data-feather='hard-drive' class=\"avatar-icon font-medium-3\"></i> ";
echo ${$dmxrhundd};
echo "</b>\n</li>\n<li class=\"list-group-item\">\n<div class=\"transaction-item\">\n<div class=\"d-flex\">\n<div class=\"avatar bg-light-info rounded float-start\">\n<div class=\"avatar-content\">\n<i data-feather='cpu' class=\"avatar-icon font-medium-3\"></i>\n</div>\n</div>\n<div class=\"my-auto\">\n<h6 class=\"mb-0 text-info\">N\xc3\xbacleos do Processador</h6>\n</div>\n</div>\n<div class=\"fw-bolder\">";
echo ${$GLOBALS["tmgyigmxtgm"]};
echo "</div>\n</div>\n</li>\n<li class=\"list-group-item\">\n<div class=\"transaction-item\">\n<div class=\"d-flex\">\n<div class=\"avatar bg-light-info rounded float-start\">\n<div class=\"avatar-content\">\n<i data-feather='cpu' class=\"avatar-icon font-medium-3\"></i>\n</div>\n</div>\n<div class=\"my-auto\">\n<h6 class=\"mb-0 text-info\">Utiliza\xc3\xa7ao Processador</h6>\n</div>\n</div>\n<div class=\"fw-bolder\">";
$ouqekbydbex = "uram";
echo ${$GLOBALS["opqdrsoocmk"]};
echo "</div>\n</div>\n</li>\n<li class=\"list-group-item\">\n<div class=\"transaction-item\">\n<div class=\"d-flex\">\n<div class=\"avatar bg-light-warning rounded float-start\">\n<div class=\"avatar-content\">\n<i data-feather='sliders' class=\"avatar-icon font-medium-3\"></i>\n</div>\n</div>\n<div class=\"my-auto\">\n<h6 class=\"mb-0 text-warning\">Total Mem\xc3\xb3ria Ram</h6>\n</div>\n</div>\n<div class=\"fw-bolder\">";
echo ${$GLOBALS["cduhfmnc"]}[7];
echo " Mb</div>\n</div>\n</li>\n<li class=\"list-group-item\">\n<div class=\"transaction-item\">\n<div class=\"d-flex\">\n<div class=\"avatar bg-light-warning rounded float-start\">\n<div class=\"avatar-content\">\n<i data-feather='sliders' class=\"avatar-icon font-medium-3\"></i>\n</div>\n</div>\n<div class=\"my-auto\">\n<h6 class=\"mb-0 text-warning\">Utiliza\xc3\xa7\xc3\xa3o da Mem\xc3\xb3ria Ram</h6>\n</div>\n</div>\n<div class=\"fw-bolder\">";
echo $uram;
echo "</div>\n</div>\n</li>\n<li class=\"list-group-item\">\n<div class=\"transaction-item\">\n<div class=\"d-flex\">\n<div class=\"avatar bg-light-success rounded float-start\">\n<div class=\"avatar-content\">\n<i data-feather='zap' class=\"avatar-icon font-medium-3\"></i>\n</div>\n</div>\n<div class=\"my-auto\">\n<h6 class=\"mb-0 text-success\">Contas Online</h6>\n</div>\n</div>\n<div class=\"fw-bolder\">";
echo ${$avefjmeyjifg};
echo "</div>\n</div>\n</li>\n</ul>\n<br>\n<ul class=\"list-group\">\n<li class=\"list-group mb-1\">\n<button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#xSmall\">Fun\xc3\xa7\xc3\xb5es do servidor</button>\n</li>\n</ul>\n</div>\n</div>\n</div>\n<!-- /.col -->\n<div class=\"col-sm-6\">\n<div class=\"card\">\n<div class=\"card-body p-b-0\">\n<h4 class=\"card-title\"><i class=\"fa fa-edit\"></i> Editar Servidor</i></h4>\n<!-- Nav tabs -->\n<ul class=\"nav nav-tabs customtab\" role=\"tablist\">\n<li class=\"nav-item\"> <a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#activity\" role=\"tab\"><span class=\"hidden-sm-up\"><i class=\"ti-pencil\"></i></span> <span class=\"hidden-xs-down\">Informa\xc3\xa7\xc3\xb5es</span></a> </li>\n<li class=\"nav-item\"> <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#timeline\" role=\"tab\"><span class=\"hidden-sm-up\"><i class=\"ti-align-center\"></i></span> <span class=\"hidden-xs-down\">Contas SSH</span></a> </li>\n<li class=\"nav-item\"> <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#ovpn\" role=\"tab\"><span class=\"hidden-sm-up\"><i class=\"ti-export\"></i></span> <span class=\"hidden-xs-down\">Arquivo APK</span></a> </li>\n</ul>\n<div class=\"tab-content\">\n<div class=\"active tab-pane\" id=\"activity\">\n<form role=\"form\" action=\"pages/servidor/editar_exe.php\" method=\"post\" enctype=\"multipart/form-data\">\n<div class=\"form-body\">\n<input type=\"hidden\" class=\"form-control\" id=\"id_servidor\" name=\"id_servidor\" value=\"";
echo ${$GLOBALS["rqtehnvj"]}["id_servidor"];
echo "\"><br>\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"country-floating\">Nome para o servidor</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather='server'></i></span>\n<input required=\"required\" type=\"text\" class=\"form-control\" id=\"nomesrv\" name=\"nomesrv\" value=\"";
echo ${$GLOBALS["rqtehnvj"]}["nome"];
echo "\">\n</div>\n</div>\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"country-floating\">Endere\xc3\xa7o de IP</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather='radio'></i></span>\n<input required=\"required\" type=\"text\" class=\"form-control\" id=\"ip\" name=\"ip\" value=\"";
echo ${$yvqjjvm}["ip_servidor"];
echo "\">\n</div>\n</div>\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"country-floating\">Usu\xc3\xa1rio com acesso root</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather='user'></i></span>\n<input disabled type=\"text\" class=\"form-control\" value=\"";
echo ${$skivyrrsrs}["login_server"];
echo "\" required=\"\">\n<input type=\"hidden\" class=\"form-control\" id=\"login\" name=\"login\" value=\"";
echo ${$GLOBALS["rqtehnvj"]}["login_server"];
echo "\">\n</div>\n</div>\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"country-floating\">Senha root</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather='key'></i></span>\n<input required=\"required\" type=\"password\" minlength=\"6\" maxlength=\"64\" class=\"form-control\" id=\"senha\" name=\"senha\" value=\"";
echo ${$kwujemr}["senha"];
echo "\">\n</div>\n</div>\n<div class=\"mb-2\">\n<label class=\"form-label\" for=\"country-floating\">Link do Painel</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather='link-2'></i></span>\n<input required=\"required\" type=\"text\" minlength=\"6\" maxlength=\"64\" class=\"form-control\" id=\"siteserver\" name=\"siteserver\" value=\"";
echo ${$GLOBALS["rqtehnvj"]}["site_servidor"];
echo "\" placeholder=\"seu-link.com\">\n</div>\n</div>\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"country-floating\">Localiza\xc3\xa7\xc3\xa3o</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather='map-pin'></i></span>\n<input required=\"required\" type=\"text\" minlength=\"6\" maxlength=\"32\" class=\"form-control\" id=\"localiza\" name=\"localiza\" value=\"";
echo ${$ffohdndeazk}["localizacao"];
echo "\" placeholder=\"sao paulo\">\n</div>\n</div>\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"country-floating\">Validade</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather='calendar'></i></span>\n<input required=\"required\" type=\"number\" min=\"1\" max=\"5000\" class=\"form-control\" id=\"validade\" name=\"validade\" value=\"";
echo ${$GLOBALS["rqtehnvj"]}["validade"];
echo "\" placeholder=\"Ex: 5000\">\n</div>\n</div>\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"country-floating\">Limite</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather='smartphone'></i></span>\n<input required=\"required\" type=\"number\" min=\"1\" max=\"5000\" class=\"form-control\" id=\"limite\" name=\"limite\" value=\"";
echo ${$fbicmlaskfx}["limite"];
echo "\" placeholder=\"Ex: 5000\">\n</div>\n</div>\n<div class=\"col-12 text-center\">\n<button type=\"submit\" class=\"btn btn-success\">Alterar Servidor</button>\n<button type=\"reset\" class=\"btn btn-danger\">Limpar</button>\n</div>\n</div>\n</form>\n</div>\n<!-- /.tab-panel -->\n<div class=\"tab-pane\" id=\"timeline\">\n<div class=\"table-responsive\">\n<table class=\"table table-striped\">\n<tr>\n<th>Login SSH</th>\n<th>Vencimento</th>\n<th>Online</th>\n<th>Acesso</th>\n</tr>\n";
${$GLOBALS["vclkaayfh"]} = "select * from conta_ssh where id_servidor='" . ${$GLOBALS["rqtehnvj"]}["id_servidor"] . "'";
${$GLOBALS["ylsrepzpqcy"]} = $conn->prepare(${$GLOBALS["aqfrehbcgu"]});
$SQLUsuarioSSH->execute();
if ($SQLUsuarioSSH->rowCount() > 0) {
    while (${$GLOBALS["lvtgggo"]} = $SQLUsuarioSSH->fetch()) {
        $GLOBALS["vflqypur"] = "servidor";
        $seliahpetf = "data_validade";
        $GLOBALS["noqnkxmfoo"] = "data_atual";
        if ($servidor["tipo"] != "free") {
            $xprrkhki = "SQLAcessoSSH";
            $phwpgslfyn = "SQLTotalUser";
            $GLOBALS["nqnjhe"] = "SQLAcessoSSH";
            $SQLTotalUser = "select * from conta_ssh WHERE id_servidor='" . ${$GLOBALS["rqtehnvj"]}["id_servidor"] . "' ";
            $kfligjrnrop = "SQLAcessoSSH";
            $GLOBALS["gcryedfwmjg"] = "total_user";
            ${$GLOBALS["fpfoxiunl"]} = $conn->prepare(${$GLOBALS["fpfoxiunl"]});
            $SQLTotalUser->execute();
            ${$GLOBALS["gcryedfwmjg"]} = $SQLTotalUser->rowCount();
            ${$GLOBALS["cgzbvmci"]} = "SELECT sum(acesso) AS quantidade  FROM conta_ssh where id_servidor = '" . ${$GLOBALS["lvtgggo"]}["id_servidor"] . "'  and id_usuario='" . $_GET["id_usuario"] . "' ";
            ${$kfligjrnrop} = $conn->prepare(${$GLOBALS["cgzbvmci"]});
            $GLOBALS["agmqshf"] = "acessos";
            $SQLAcessoSSH->execute();
            ${$GLOBALS["nqnjhe"]} = $SQLAcessoSSH->fetch();
            ${$GLOBALS["agmqshf"]} += ${$xprrkhki}["quantidade"];
        }
        $nfhwbqldd = "data_atual";
        ${$GLOBALS["noqnkxmfoo"]} = date("Y-m-d ");
        $GLOBALS["uzrukoucj"] = "row2";
        ${$seliahpetf} = ${$GLOBALS["lvtgggo"]}["data_validade"];
        if (${$GLOBALS["pvrpoxlu"]} > ${$nfhwbqldd}) {
            $GLOBALS["mmcshanj"] = "dias_acesso";
            $GLOBALS["djvagfpcon"] = "data2";
            $GLOBALS["hkttuyxjub"] = "dias_acesso";
            $GLOBALS["uafdjxccxklk"] = "data_validade";
            $oapmdy = "data1";
            $drpgwjjjfo = "data_atual";
            $yfmwsrwh = "dia";
            $data1 = new DateTime($data_validade);
            ${$GLOBALS["nydcqc"]} = new DateTime($data_atual);
            ${$GLOBALS["mmcshanj"]} = 0;
            $GLOBALS["schnblvbd"] = "dia";
            ${$GLOBALS["qkmaacxihi"]} = $data1->diff(${$GLOBALS["djvagfpcon"]});
            $dndgypmjrflj = "ano";
            $ano = $diferenca->y * 364;
            ${$GLOBALS["tydfvhd"]} = $diferenca->m * 30;
            ${$yfmwsrwh} = $diferenca->d;
            ${$GLOBALS["hkttuyxjub"]} = ${$GLOBALS["trdoch"]} + ${$GLOBALS["tydfvhd"]} + ${$GLOBALS["schnblvbd"]};
        } else {
            ${$GLOBALS["ydtydlpzo"]} = 0;
        }
        echo "<tr>\n<td>";
        $GLOBALS["lurittnnibnd"] = "servidor";
        echo ${$GLOBALS["uzrukoucj"]}["login"];
        echo "</td>\n<td><span class=\"pull-left-container\" style=\"margin-right: 5px;\">\n<span class=\"label label-primary pull-left\">\n";
        $GLOBALS["furteikelyle"] = "servidor";
        echo ${$GLOBALS["ydtydlpzo"]} . "  dias   ";
        echo "</span>\n</span>\n</td>\n<td>";
        if ($servidor["tipo"] == "premium") {
            $wgtsveqiexdc = "row2";
            echo $row2["online"];
        } else {
            echo "<small>null</small>";
        }
        echo "</td>\n<td>";
        if (${$GLOBALS["furteikelyle"]}["tipo"] == "premium") {
            echo ${$GLOBALS["lvtgggo"]}["acesso"];
        } else {
            echo "<small>null</small>";
        }
        echo "</td>\n</tr>\n";
    }
}
echo "</table>\n</div>\n</div>\n";
${$GLOBALS["lzvxcgyc"]} = "select * from ovpn WHERE servidor_id = '" . $_GET["id_servidor"] . "' ";
${$dsqubj} = $conn->prepare(${$GLOBALS["lzvxcgyc"]});
$SQLovpn->execute();
echo "<div class=\"tab-pane\" id=\"ovpn\">\n<div class=\"box-body\">\n";
if ($SQLovpn->rowCount() == 0) {
    echo "<form role=\"form\" action=\"pages/servidor/enviar_ovpn.php\" method=\"post\" enctype=\"multipart/form-data\">\n<input name=\"servidorid\" type=\"hidden\" value=\"";
    $GLOBALS["ltebxjnxc"] = "servidor";
    echo $servidor["id_servidor"];
    echo "\">\n<div class=\"form-group\">\n<br><label for=\"exampleInputFile\">Selecione o Arquivo APK</label>\n<input type=\"file\" id=\"arquivo\" class=\"form-control\" name=\"arquivo\" required=required>\n<p class=\"help-block\"><small>Arquivo APK Tamanho M\xc3\xa1ximo 256MB.</small></p>\n";
} else {
    $zbgebb = "servidor";
    echo "<div class=\"box box-solid box-success\">\n<div class=\"text-center\">J\xc3\xa1 existe um <b>Arquivo APK</b> neste Servidor!</div><br>\n<div class=\"col-12 text-center\">\n<a href=\"../admin/pages/servidor/deletar_ovpn.php?id_servidor=";
    echo $servidor["id_servidor"];
    echo "\" class=\"btn btn-danger\">Deletar</a>\n</div>\n</div>\n";
}
echo "<div class=\"box-footer box-primary\">\n<div class=\"col-12 text-center\">\n";
if ($SQLovpn->rowCount() == 0) {
    echo " <button type=\"submit\" class=\"btn btn-success\">Enviar</button>\n</div>\n</div>\n</form>\n";
}
echo "</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</section>\n";
