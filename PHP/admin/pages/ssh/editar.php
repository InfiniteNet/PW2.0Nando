<?php

$GLOBALS["nlrupx"] = "servidor";
$GLOBALS["brbreklzgjhj"] = "contas_ssh_criadas";
$GLOBALS["cpsjcdknldyo"] = "row_srv";
$GLOBALS["aessel"] = "SQLAcesso";
$GLOBALS["nuyaigpiypg"] = "SQLContasSSH";
$GLOBALS["egnbslsquucf"] = "fim_conexao";
$GLOBALS["duxsguj"] = "fim_conexao2";
$GLOBALS["ptytwwkr"] = "row_user";
$GLOBALS["qyozjufldec"] = "tempo_conectado";
$GLOBALS["tpmlezqor"] = "diretorio";
$GLOBALS["jldpiwcrav"] = "accessKEY";
$GLOBALS["qutmqced"] = "ssh_srv";
$GLOBALS["chfdsp"] = "usuario_sistema";
$GLOBALS["ihhksd"] = "status";
$GLOBALS["zkjboulvq"] = "owner";
$brpnzfegejg = "accessKEY";
$GLOBALS["myjbaxmd"] = "SQLUsuario";
$zerbhciubds = "SQLServidor";
$jcgcsevl = "status";
$GLOBALS["udghhdvweit"] = "stsd";
$dcyctxbcomya = "dias_acesso";
$GLOBALS["bmjsik"] = "dias_acesso";
$GLOBALS["jfxfkxwpfx"] = "data_atual";
$GLOBALS["bxonpocdqywp"] = "diferenca";
$aptkbtudn = "sts";
$GLOBALS["srbfspe"] = "data_validade";
$GLOBALS["hfjwgwkjr"] = "ssh_srv";
$obujlq = "ssh_srv";
$GLOBALS["ispqqxh"] = "SQLServidor";
$GLOBALS["iycbxhofi"] = "conta_ssh";
$GLOBALS["cywagwl"] = "SQLHistSSH";
$GLOBALS["fhfxtwdwiyma"] = "ssh_srv";
$GLOBALS["lxzrrbebwcn"] = "conta_ssh";
$GLOBALS["uqlicidb"] = "SQLContasSSH";
$GLOBALS["qbzekxs"] = "conta_ssh";
$yexjdohtgm = "diretorio";
$GLOBALS["yrjroeuy"] = "SQLUsuarioSSH";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"../../../app-assets/css/plugins/extensions/ext-component-sweet-alerts.css\">\n<script src=\"../../../app-assets/js/scripts/extensions/ext-component-sweet-alerts.js\"></script>\n<script src=\"../../../app-assets/vendors/js/extensions/sweetalert2.all.min.js\"></script>\n";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/editar.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
$plyvfmlfcv = "SQLServidor";
protegePagina("donoadmin");
echo "<style>\n.card-datatable {\npadding-left: 5px;\npadding-right: 5px;\n}\n</style>\n";
if (isset($_GET["id_ssh"])) {
    $ledquegjs = "diretorio";
    $diretorio = "../../admin/home.php?page=ssh/editar&id_ssh=" . $_GET["id_ssh"];
    ${$GLOBALS["yrjroeuy"]} = "select * from conta_ssh WHERE id_usuario_ssh = '" . $_GET["id_ssh"] . "' ";
    ${$GLOBALS["yrjroeuy"]} = $conn->prepare(${$GLOBALS["yrjroeuy"]});
    $SQLUsuarioSSH->execute();
    ${$GLOBALS["iycbxhofi"]} = $SQLUsuarioSSH->fetch();
    if ($SQLUsuarioSSH->rowCount() > 0) {
        $gkfirveurdd = "data_atual";
        $GLOBALS["lrivsvf"] = "SQLUsuario";
        $GLOBALS["ckdjyxxpl"] = "conta_ssh";
        $GLOBALS["behephozbi"] = "data_validade";
        $GLOBALS["cmmkcso"] = "SQLServidor";
        $dwlzfzsr = "conta_ssh";
        $GLOBALS["hodnpehwk"] = "SQLServidor";
        ${$GLOBALS["ispqqxh"]} = "select * from servidor WHERE id_servidor = '" . $conta_ssh["id_servidor"] . "'  ";
        $GLOBALS["dakkum"] = "dias_acesso";
        $wjaixsuc = "usuario_sistema";
        ${$GLOBALS["cmmkcso"]} = $conn->prepare(${$GLOBALS["hodnpehwk"]});
        $SQLServidor->execute();
        $bitpbg = "data_atual";
        $lmnqjkj = "conta_ssh";
        ${$GLOBALS["hfjwgwkjr"]} = $SQLServidor->fetch();
        ${$bitpbg} = date("Y-m-d H:i:s");
        ${$GLOBALS["behephozbi"]} = ${$lmnqjkj}["data_validade"];
        if (${$GLOBALS["srbfspe"]} > ${$gkfirveurdd}) {
            $GLOBALS["kbpzczj"] = "diferenca";
            ${$GLOBALS["bxonpocdqywp"]} = strtotime(${$GLOBALS["srbfspe"]}) - strtotime(${$GLOBALS["jfxfkxwpfx"]});
            ${$GLOBALS["bmjsik"]} = floor(${$GLOBALS["kbpzczj"]} / 86400);
        } else {
            $GLOBALS["qdfawgifd"] = "dias_acesso";
            $dias_acesso = 0;
        }
        if (${$GLOBALS["dakkum"]} > 10) {
            ${$GLOBALS["udghhdvweit"]} = "info";
        } elseif (${$GLOBALS["bmjsik"]} == 0) {
            ${$GLOBALS["udghhdvweit"]} = "danger";
        } else {
            $pxcqdm = "stsd";
            $stsd = "warning";
        }
        ${$GLOBALS["lrivsvf"]} = "select * from usuario WHERE id_usuario = '" . ${$dwlzfzsr}["id_usuario"] . "'  ";
        ${$GLOBALS["myjbaxmd"]} = $conn->prepare(${$GLOBALS["myjbaxmd"]});
        $SQLUsuario->execute();
        ${$wjaixsuc} = $SQLUsuario->fetch();
        ${$GLOBALS["zkjboulvq"]};
        if (!($SQLUsuario->rowCount() > 0)) {
            echo "<script type=\"text/javascript\">";
            echo "alert(\"Nao encontrado!\");";
            echo "window.location=\"home.php?page=ssh/contas\";";
            echo "</script>";
            exit;
        }
    } else {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Nao encontrado!\");";
        echo "window.location=\"home.php?page=ssh/contas\";";
        echo "</script>";
        exit;
    }
} else {
    echo "<script type=\"text/javascript\">";
    echo "alert(\"Preencha todos os campos!\");";
    echo "window.location=\"home.php?page=ssh/contas\";";
    echo "</script>";
    exit;
}
$jbnptfqqdl = "SQLHistSSH";
$hjwobn = "usuario_sistema";
if (${$GLOBALS["iycbxhofi"]}["online"] >= 1) {
    $GLOBALS["ybsmxpxgbk"] = "conta_ssh";
    $GLOBALS["uqvudtth"] = "sts";
    $sts = "success";
    ${$GLOBALS["ihhksd"]} = "<center><div class='alert alert-success col-6 col-md-6' role='alert'>\n<div class='alert-body d-center align-items-center'>\n<span>" . ${$GLOBALS["iycbxhofi"]}["online"] . " conex\xc3\xa3o de " . $conta_ssh["acesso"] . "</span>\n</div>\n</div></center>";
} else {
    $GLOBALS["qrjukvqcqho"] = "sts";
    $sts = "danger";
    ${$GLOBALS["ihhksd"]} = "<center><div class='alert alert-danger col-6 col-md-6' role='alert'>\n<div class='alert-body d-center align-items-center'>\n<span>OFFLINE</span>\n</div>\n</div></center>";
}
$GLOBALS["ukqobvq"] = "conta_ssh";
echo "<div class=\"active\"><a class=\"d-flex align-items-center\" href=\"home.php\"><i data-feather=\"home\"></i><span class=\"menu-title text-truncate\" data-i18n=\"Dashboards\">DASHBOARD</span></a>\n</div>\n<!-- Input with Icons start -->\n<section id=\"input-with-icons\">\n<div class=\"row match-height\">\n<div class=\"col-12\">\n";
if (${$GLOBALS["lxzrrbebwcn"]}["status"] == 2) {
    echo "<center>\n<div class='alert alert-danger col-12 col-md-12' role='alert'>\n<div class='alert-body d-center align-items-center'>\n<span>CONTA SUSPENSA</span>\n</div>\n</div>\n</center>\n";
}
echo "<div class=\"row match-height\">\n<div class=\"col-md-6\">\n<div class=\"card card-transaction card border-";
echo ${$aptkbtudn};
$dhijkdr = "SQLServidor";
echo "\">\n<div class=\"demo-spacing-\">\n<br>\n";
echo ${$jcgcsevl};
echo "</div>\n<div class=\"card-body\">\n<ul class=\"list-group list-group-unbordered\">\n<li class=\"list-group-item\">\n<div class=\"transaction-item\">\n<div class=\"d-flex\">\n<div class=\"avatar bg-light-primary rounded float-start\">\n<div class=\"avatar-content\">\n<i data-feather='shield' class=\"avatar-icon font-medium-3\"></i>\n</div>\n</div>\n<div class=\"my-auto\">\n<h6 class=\"mb-0 text-primary\">Login SSH</h6>\n</div>\n</div>\n<div class=\"fw-bolder text-warning\">";
echo ${$GLOBALS["ukqobvq"]}["login"];
echo "</div>\n</div>\n</li>\n<li class=\"list-group-item\">\n<div class=\"transaction-item\">\n<div class=\"d-flex\">\n<div class=\"avatar bg-light-primary rounded float-start\">\n<div class=\"avatar-content\">\n<i data-feather='key' class=\"avatar-icon font-medium-3\"></i>\n</div>\n</div>\n<div class=\"my-auto\">\n<h6 class=\"mb-0 text-primary\">Senha</h6>\n</div>\n</div>\n<div class=\"fw-bolder text-warning\">";
echo ${$GLOBALS["iycbxhofi"]}["senha"];
$GLOBALS["cuxlaave"] = "SQLHistSSH";
echo "</div>\n</div>\n</li>\n<li class=\"list-group-item\">\n<div class=\"transaction-item\">\n<div class=\"d-flex\">\n<div class=\"avatar bg-light-primary rounded float-start\">\n<div class=\"avatar-content\">\n<i data-feather='calendar' class=\"avatar-icon font-medium-3\"></i>\n</div>\n</div>\n<div class=\"my-auto\">\n<h6 class=\"mb-0 text-primary\">Vencimento</h6>\n</div>\n</div>\n";
if (${$dcyctxbcomya} > 1) {
    echo "<div class=\"fw-bolder text-";
    $onikoasw = "conta_ssh";
    echo ${$GLOBALS["udghhdvweit"]};
    echo "\">";
    echo date("d/m/Y H:i:s", strtotime($conta_ssh["data_validade"]));
    echo "</div>\n";
} else {
    echo "<div class=\"fw-bolder text-";
    echo ${$GLOBALS["udghhdvweit"]};
    echo "\">";
    echo date("d/m/Y H:i:s", strtotime(${$GLOBALS["iycbxhofi"]}["data_validade"]));
    echo "</div>\n";
}
echo "</div>\n</li>\n<li class=\"list-group-item\">\n<div class=\"transaction-item\">\n<div class=\"d-flex\">\n<div class=\"avatar bg-light-primary rounded float-start\">\n<div class=\"avatar-content\">\n<i data-feather='clock' class=\"avatar-icon font-medium-3\"></i>\n</div>\n</div>\n<div class=\"my-auto\">\n<h6 class=\"mb-0 text-primary\">Dias Restantes</h6>\n</div>\n</div>\n";
$qnzuowxuo = "SQLServidor";
$wmkrto = "contas_ssh_criadas";
$ioanpslemf = "servidor";
if (${$GLOBALS["bmjsik"]} > 1) {
    $GLOBALS["jjbbvfwvjz"] = "stsd";
    $GLOBALS["zpyjxirrq"] = "dias_acesso";
    echo "<div class=\"fw-bolder text-";
    echo $stsd;
    echo "\">";
    echo $dias_acesso . " dias";
    echo "</div>\n";
} else {
    $GLOBALS["rvgeffi"] = "stsd";
    echo "<div class=\"fw-bolder text-";
    echo $stsd;
    echo "\">";
    echo ${$GLOBALS["bmjsik"]} . " dia";
    echo "</div>\n";
}
$envoxdyknns = "conta_ssh";
$GLOBALS["qedfrptr"] = "conta_ssh";
echo "</div>\n</li>\n<li class=\"list-group-item\">\n<div class=\"transaction-item\">\n<div class=\"d-flex\">\n<div class=\"avatar bg-light-primary rounded float-start\">\n<div class=\"avatar-content\">\n<i data-feather='server' class=\"avatar-icon font-medium-3\"></i>\n</div>\n</div>\n<div class=\"my-auto\">\n<h6 class=\"mb-0 text-primary\">Servidor</h6>\n</div>\n</div>\n<div class=\"fw-bolder text-warning\">";
echo ${$GLOBALS["hfjwgwkjr"]}["nome"];
$GLOBALS["pjtbvlejoxy"] = "servidor";
echo "</div>\n</div>\n</li>\n<li class=\"list-group-item\">\n<div class=\"transaction-item\">\n<div class=\"d-flex\">\n<div class=\"avatar bg-light-primary rounded float-start\">\n<div class=\"avatar-content\">\n<i data-feather='users' class=\"avatar-icon font-medium-3\"></i>\n</div>\n</div>\n<div class=\"my-auto\">\n<h6 class=\"mb-0 text-primary\">Dono</h6>\n</div>\n</div>\n<div class=\"fw-bolder\"><a href=\"home.php?page=usuario/perfil&id_usuario=";
$GLOBALS["wqrrbctfkwa"] = "conta_ssh";
echo ${$GLOBALS["chfdsp"]}["id_usuario"];
echo "\" class=\"pull-right\">";
echo ${$GLOBALS["chfdsp"]}["nome"];
echo "</a></div>\n</div>\n</li>\n<form role=\"form2\" action=\"../pages/system/funcoes.conta.ssh.php\" method=\"post\" class=\"form-horizontal\">\n<div class=\"box-footer\">\n<input type=\"hidden\" id=\"diretorio\" name=\"diretorio\" value=\"../../admin/home.php?page=ssh/contas\">\n<input type=\"hidden\" id=\"id_usuario_ssh\" name=\"id_usuario_ssh\" value=\"";
echo ${$GLOBALS["iycbxhofi"]}["id_usuario_ssh"];
echo "\">\n<input type=\"hidden\" id=\"owner\" name=\"owner\" value=\"";
$GLOBALS["yqzgqqln"] = "ssh_srv";
echo ${$brpnzfegejg};
echo "\">\n<br>\n<ul class=\"list-group\">\n<li class=\"list-group mb-1\">\n<button type=\"submit\" class=\"btn btn-danger\" id=\"op\" name=\"op\" value=\"deletar\">DELETAR CONTA SSH</button>\n</li>\n<li class=\"list-group mb-1\">\n";
if ($conta_ssh["status"] == 2) {
    $spsqxtaug = "dias_acesso";
    if ($dias_acesso == 0) {
        echo "<button type=\"submit\" class=\"btn btn-success\" id=\"op\" name=\"op\" value=\"ususpenderrenov\">RENOVAR +30 DIAS</button>\n";
    } else {
        echo "<button type=\"submit\" class=\"btn btn-success\" id=\"op\" name=\"op\" value=\"ususpender\">REATIVAR CONTA</button>\n";
    }
} else {
    echo "<button type=\"submit\" class=\"btn btn-warning\" id=\"op\" name=\"op\" value=\"suspender\">SUSPENDER CONTA</button>\n";
}
$vllnddcdk = "dias_acesso";
echo "</li>\n<li class=\"list-group mb-1\">\n<button type=\"submit\" class=\"btn btn-primary\" id=\"op\" name=\"op\" value=\"kill\">DERRUBAR CONTA SSH</button>\n</li>\n</ul>\n</div>\n</form>\n</ul>\n</div>\n</div>\n</div>\n<div class=\"col-md-6\">\n<div class=\"card card border-primary\">\n<div class=\"card-body p-b-0\">\n<h4 class=\"card-title\"><i class=\"fa fa-edit\"></i> Editar conta SSH</h4>\n<!-- Nav tabs -->\n<ul class=\"nav nav-tabs customtab\" role=\"tablist\">\n<li class=\"nav-item\"> <a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#hist\" role=\"tab\" aria-selected=\"false\"><i data-feather=\"bar-chart-2\"></i>Hist\xc3\xb3rico</span></a> </li>\n<li class=\"nav-item\"> <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#senha\" role=\"tab\" aria-selected=\"true\"><i data-feather=\"key\"></i>Senha</span></a> </li>\n<li class=\"nav-item\"> <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#vencimento\" role=\"tab\" aria-selected=\"false\"><i data-feather=\"clock\"></i>Vencimento</span></a> </li>\n<li class=\"nav-item\"> <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#acesso\" role=\"tab\" aria-selected=\"false\"><i data-feather=\"smartphone\"></i>Acesso</span></a> </li>\n<li class=\"nav-item\"> <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#migrar\" role=\"tab\" aria-selected=\"false\"><i data-feather='repeat'></i>Migrar Conta</span></a> </li>\n</ul>\n<!-- Tab panes -->\n<div class=\"tab-content\">\n<div class=\"tab-pane\" id=\"senha\">\n<div>\n<form role=\"senha\" id=\"senha\" name=\"senha\" action=\"../pages/system/funcoes.conta.ssh.php\" method=\"post\" class=\"form-horizontal\">\n<div class=\"box-body\">\n<div class=\"col-md-12\">\n<input required=\"required\" type=\"text\" class=\"form-control\" id=\"senha_ssh\" minlength=\"4\" maxlength=\"10\" name=\"senha_ssh\" placeholder=\"Digite a nova senha\" value=\"";
echo ${$GLOBALS["qbzekxs"]}["senha"];
echo "\">\n</div>\n<input type=\"hidden\" id=\"op\" name=\"op\" value=\"senha\">\n<input type=\"hidden\" id=\"id_ssh\" name=\"id_ssh\" value=\"";
echo $_GET["id_ssh"];
echo "\">\n<input type=\"hidden\" id=\"diretorio\" name=\"diretorio\" value=\"";
echo ${$yexjdohtgm};
echo "\">\n<input type=\"hidden\" id=\"id_servidor\" name=\"id_servidor\" value=\"";
echo ${$obujlq}["id_servidor"];
echo "\">\n<input type=\"hidden\" id=\"id_usuario_ssh\" name=\"id_usuario_ssh\" value=\"";
echo ${$GLOBALS["iycbxhofi"]}["id_usuario_ssh"];
echo "\">\n<input type=\"hidden\" id=\"owner\" name=\"owner\" value=\"";
echo ${$GLOBALS["jldpiwcrav"]};
$GLOBALS["nitpwhwbej"] = "accessKEY";
echo "\">\n</div>\n<div class=\"text-center\">\n<br><button type=\"submit\" class=\"btn btn-primary\">Alterar Senha</button><br>\n</div>\n</form>\n</div>\n</div>\n<div class=\"tab-pane\" id=\"vencimento\">\n<div class=\"box-header with-border\">\n<div class=\"box-header with-border\">\n</div>\n<form role=\"form2\" action=\"../pages/system/funcoes.conta.ssh.php\" method=\"post\" class=\"form-horizontal\">\n<div class=\"box-body\">\n<div class=\"col-md-12\">\n<input required=\"required\" type=\"number\" min=\"2\" max=\"366\" class=\"form-control\" id=\"dias\" name=\"dias\" placeholder=\"Digite a quantidade dias restantes\" value=\"";
$uvdrqbef = "SQLAcesso";
echo $dias_acesso;
echo "\">\n</div>\n<input type=\"hidden\" id=\"op\" name=\"op\" value=\"dias\">\n<input type=\"hidden\" id=\"id_usuarioSSH\" name=\"id_usuarioSSH\" value=\"";
echo $_GET["id_ssh"];
echo "\">\n<input type=\"hidden\" id=\"diretorio\" name=\"diretorio\" value=\"";
echo ${$GLOBALS["tpmlezqor"]};
echo "\">\n<input type=\"hidden\" id=\"owner\" name=\"owner\" value=\"";
echo $accessKEY;
echo "\">\n</div>\n<div class=\"text-center\">\n<br><button type=\"submit\" class=\"btn btn-primary\">Alterar dias restantes</button> </center><br>\n</div>\n</form>\n</div>\n</div>\n<div class=\"active tab-pane\" id=\"hist\">\n<div class=\"box-body table-responsive no-padding\">\n<table id=\"example\" class=\"table table-hover\">\n<tr>\n<th>Servidor</th>\n<th>In\xc3\xadcio</th>\n<th>Fim</th>\n<th>Dura\xc3\xa7\xc3\xa3o</th>\n</tr>\n<tbody id=\"myTable\">\n";
${$GLOBALS["cuxlaave"]} = "select * from hist_usuario_ssh_online where id_usuario='" . ${$GLOBALS["iycbxhofi"]}["id_usuario_ssh"] . "' ORDER BY hora_conexao desc LIMIT 100";
${$GLOBALS["cywagwl"]} = $conn->prepare(${$jbnptfqqdl});
$SQLHistSSH->execute();
${$dhijkdr} = "select * from servidor WHERE id_servidor = '" . ${$GLOBALS["qedfrptr"]}["id_servidor"] . "'  ";
${$zerbhciubds} = $conn->prepare(${$plyvfmlfcv});
$SQLServidor->execute();
${$ioanpslemf} = $SQLServidor->fetch();
if ($SQLHistSSH->rowCount() > 0) {
    $GLOBALS["jbucndg"] = "row_user";
    while (${$GLOBALS["jbucndg"]} = $SQLHistSSH->fetch()) {
        $wbtosbr = "fim_conexao";
        $GLOBALS["vdnqhx"] = "servidor";
        $fim_conexao = " Online agora ";
        ${$GLOBALS["qyozjufldec"]} = " ";
        $ubqpefresxp = "row_user";
        if (${$GLOBALS["ptytwwkr"]}["status"] == 1) {
            $gheqgght = "tempo_conectado";
            $tempo_conectado = tempo_corrido(${$GLOBALS["ptytwwkr"]}["hora_conexao"]);
        } else {
            if ($row_user["status"] != 1) {
                $GLOBALS["ywuxzu"] = "row_user";
                $bqqjjd = "fim_conexao2";
                $GLOBALS["ncwshjfolt"] = "fim_conexao";
                $fim_conexao = date("d/m/Y H:i:s", strtotime(${$GLOBALS["ptytwwkr"]}["hora_desconexao"]));
                $fim_conexao2 = ${$GLOBALS["ptytwwkr"]}["hora_desconexao"];
                ${$GLOBALS["qyozjufldec"]} = tempo_final($row_user["hora_conexao"], ${$GLOBALS["duxsguj"]});
            }
        }
        $hhqpplidjo = "row_user";
        echo "<tr >\n<td>";
        echo ${$GLOBALS["vdnqhx"]}["nome"];
        echo "</td>\n<td>";
        echo date("d/m/Y H:i:s", strtotime($row_user["hora_conexao"]));
        echo "</td>\n<td>";
        echo ${$GLOBALS["egnbslsquucf"]};
        echo "</td>\n<td>";
        echo ${$GLOBALS["qyozjufldec"]};
        echo "</td>\n</tr>\n";
    }
}
echo "</tbody>\n</table>\n</div>\n</div>\n<div class=\"tab-pane\" id=\"acesso\">\n<div>\n<div class=\"box-header with-border\">\n<form role=\"form2\" action=\"../pages/system/funcoes.conta.ssh.php\" method=\"post\" class=\"form-horizontal\">\n<div class=\"box-body\">\n<div class=\"col-md-12\">\n<input required=\"required\" type=\"number\" min=\"1\" max=\"500\" class=\"form-control\" id=\"acesso\" name=\"acesso\" placeholder=\"Digite a quantidade de acesso\" value=\"";
echo ${$envoxdyknns}["acesso"];
$yvjhch = "SQLAcesso";
echo "\">\n</div>\n<input type=\"hidden\" id=\"op\" name=\"op\" value=\"acesso\">\n<input type=\"hidden\" id=\"diretorio\" name=\"diretorio\" value=\"";
$cjtkiivm = "SQLContasSSH";
echo ${$GLOBALS["tpmlezqor"]};
echo "\">\n<input type=\"hidden\" id=\"id_usuario_ssh\" name=\"id_usuario_ssh\" value=\"";
echo ${$GLOBALS["iycbxhofi"]}["id_usuario_ssh"];
echo "\">\n<input type=\"hidden\" id=\"sistema\" name=\"sistema\" value=\"";
echo ${$hjwobn}["id_usuario"];
echo "\">\n<input type=\"hidden\" id=\"owner\" name=\"owner\" value=\"";
$GLOBALS["payxzyymsml"] = "contas_ssh_criadas";
echo ${$GLOBALS["jldpiwcrav"]};
echo "\">\n</div>\n<div class=\"text-center\">\n<br><button type=\"submit\" class=\"btn btn-primary\">Alterar limite simult\xc3\xa2neo</button><br>\n</div>\n</form>\n</div>\n</div>\n</div>\n<div class=\"tab-pane\" id=\"migrar\">\n<div class=\"box-header with-border\">\n<form role=\"migrar\" action=\"../pages/system/funcoes.conta.ssh.php\" method=\"post\" class=\"form-horizontal\">\n<div class=\"form-group mb-1\">\n<label>Servidor Atual</label>\n";
${$qnzuowxuo} = "select * from servidor WHERE id_servidor = '" . ${$GLOBALS["yqzgqqln"]}["id_servidor"] . "' ";
${$GLOBALS["ispqqxh"]} = $conn->prepare(${$GLOBALS["ispqqxh"]});
$SQLServidor->execute();
${$GLOBALS["pjtbvlejoxy"]} = $SQLServidor->fetch();
${$GLOBALS["nuyaigpiypg"]} = "SELECT sum(acesso) AS quantidade  FROM conta_ssh where id_servidor = '" . ${$GLOBALS["hfjwgwkjr"]}["id_servidor"] . "'  ";
${$GLOBALS["uqlicidb"]} = $conn->prepare(${$GLOBALS["nuyaigpiypg"]});
$SQLContasSSH->execute();
${$GLOBALS["nuyaigpiypg"]} = $SQLContasSSH->fetch();
${$wmkrto} += ${$cjtkiivm}["quantidade"];
echo "<input required=\"required\" type=\"text\" class=\"form-control\" value=\" ";
echo ${$GLOBALS["qutmqced"]}["nome"];
echo " - ";
echo ${$GLOBALS["hfjwgwkjr"]}["ip_servidor"];
echo " -  ";
echo ${$GLOBALS["payxzyymsml"]};
echo " Conex\xc3\xb5es\">\n</div>\n<div class=\"form-group\">\n<label>Selecione um servidor destino</label>\n<select class=\"form-select\" style=\"width: 100%;\" name=\"id_new_servidor\" id=\"id_new_servidor\">\n";
${$uvdrqbef} = "select * from servidor where id_servidor != '" . ${$GLOBALS["fhfxtwdwiyma"]}["id_servidor"] . "' ";
${$GLOBALS["aessel"]} = $conn->prepare(${$yvjhch});
$SQLAcesso->execute();
if ($SQLAcesso->rowCount() > 0) {
    while (${$GLOBALS["cpsjcdknldyo"]} = $SQLAcesso->fetch()) {
        $GLOBALS["rxrxaqp"] = "SQLContasSSH";
        ${$GLOBALS["brbreklzgjhj"]} = 0;
        $GLOBALS["ofmociagfbeg"] = "servidor";
        $GLOBALS["tcevgs"] = "SQLServidor";
        $uwnmjdjc = "SQLContasSSH";
        ${$GLOBALS["ispqqxh"]} = "select * from servidor WHERE id_servidor = '" . ${$GLOBALS["cpsjcdknldyo"]}["id_servidor"] . "' ";
        ${$GLOBALS["tcevgs"]} = $conn->prepare(${$GLOBALS["ispqqxh"]});
        $yxwidaeukc = "row_srv";
        $SQLServidor->execute();
        ${$GLOBALS["nlrupx"]} = $SQLServidor->fetch();
        $eeeuiwq = "row_srv";
        ${$GLOBALS["nuyaigpiypg"]} = "SELECT sum(acesso) AS quantidade  FROM conta_ssh where id_servidor = '" . ${$yxwidaeukc}["id_servidor"] . "'  ";
        ${$GLOBALS["nuyaigpiypg"]} = $conn->prepare(${$uwnmjdjc});
        $SQLContasSSH->execute();
        $GLOBALS["lmqqgxgd"] = "servidor";
        $rhjiut = "contas_ssh_criadas";
        ${$GLOBALS["nuyaigpiypg"]} = $SQLContasSSH->fetch();
        ${$GLOBALS["brbreklzgjhj"]} += ${$GLOBALS["rxrxaqp"]}["quantidade"];
        echo "<option value=\"";
        echo ${$eeeuiwq}["id_servidor"];
        echo "\"> ";
        echo ${$GLOBALS["lmqqgxgd"]}["nome"];
        echo " - ";
        echo ${$GLOBALS["ofmociagfbeg"]}["ip_servidor"];
        echo " - ";
        echo ${$rhjiut};
        echo " Conex\xc3\xb5es </option>\n";
    }
}
echo "</select>\n</div>\n<!-- /.box-body -->\n<div class=\"text-center\">\n<input type=\"hidden\" id=\"op\" name=\"op\" value=\"migrar\">\n<input type=\"hidden\" id=\"diretorio\" name=\"diretorio\" value=\"";
echo ${$GLOBALS["tpmlezqor"]};
echo "\">\n<input type=\"hidden\" id=\"id_ssh\" name=\"id_ssh\" value=\"";
echo ${$GLOBALS["iycbxhofi"]}["id_usuario_ssh"];
echo "\">\n<input type=\"hidden\" id=\"owner\" name=\"owner\" value=\"";
echo ${$GLOBALS["jldpiwcrav"]};
echo "\">\n<br><button type=\"submit\" class=\"btn btn-primary\">Mudar de Servidor</button><br>\n</div>\n</form>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n";
