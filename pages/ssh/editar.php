<?php

$GLOBALS["jpnoxeoli"] = "fim_conexao2";
$GLOBALS["eoikusnest"] = "tempo_conectado";
$GLOBALS["baeoiecz"] = "row_user";
$GLOBALS["xjnemoena"] = "SQLHistSSH";
$GLOBALS["mvwqpb"] = "owner";
$GLOBALS["ucyjxmj"] = "diretorio";
$GLOBALS["gkxgwmd"] = "row";
$GLOBALS["ppdhpdqzf"] = "usuario";
$GLOBALS["fpbwpsbhtmt"] = "ssh_srv";
$GLOBALS["imimoxpbn"] = "status";
$GLOBALS["qljrvdsmbnr"] = "sts";
$GLOBALS["nkopqbq"] = "usuario_sistema";
$GLOBALS["tqcwokf"] = "SQLUsuario";
$GLOBALS["wfxlof"] = "diretorio";
$GLOBALS["fctdumhleqn"] = "ssh_srv";
$GLOBALS["xunvkfupfge"] = "explo";
$vcrufpyxck = "sts";
$GLOBALS["osknkldxwb"] = "conta_ssh";
$GLOBALS["bicyesa"] = "stsd";
$GLOBALS["pvlblgppg"] = "dias_acesso";
$GLOBALS["ywgxfbh"] = "data_validade";
$GLOBALS["vyexbxszii"] = "data_atual";
$wkgxwrnr = "conta_ssh";
$GLOBALS["vlujvrlu"] = "conta_ssh";
$GLOBALS["sxsrntqfn"] = "SQLServidor";
$GLOBALS["ukayknbgglsl"] = "SQLUsuarioSSH";
$fvioti = "usuario";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"../../../app-assets/css/plugins/extensions/ext-component-sweet-alerts.css\">\n<script src=\"../../../app-assets/js/scripts/extensions/ext-component-sweet-alerts.js\"></script>\n<script src=\"../../../app-assets/vendors/js/extensions/sweetalert2.all.min.js\"></script>\n";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/editar.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
protegePagina("user");
if (${$fvioti}["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
if (isset($_GET["id_ssh"])) {
    $xxcqkkzne = "conta_ssh";
    $jbnujxswaxq = "diretorio";
    $GLOBALS["lxdwyfiu"] = "SQLUsuarioSSH";
    $diretorio = "../../home.php?page=ssh/editar&id_ssh=" . $_GET["id_ssh"];
    ${$GLOBALS["ukayknbgglsl"]} = "select * from conta_ssh WHERE id_usuario_ssh = '" . $_GET["id_ssh"] . "' ";
    ${$GLOBALS["ukayknbgglsl"]} = $conn->prepare(${$GLOBALS["lxdwyfiu"]});
    $SQLUsuarioSSH->execute();
    ${$xxcqkkzne} = $SQLUsuarioSSH->fetch();
    if ($SQLUsuarioSSH->rowCount() > 0) {
        $GLOBALS["afkzjpqpztx"] = "owner";
        $GLOBALS["srolvxu"] = "dia";
        $GLOBALS["jwxqyrmekwfx"] = "dias_acesso";
        $euxtesuefkdf = "SQLServidor";
        $ghwrfrp = "data_atual";
        ${$GLOBALS["sxsrntqfn"]} = "select * from servidor WHERE id_servidor = '" . ${$GLOBALS["vlujvrlu"]}["id_servidor"] . "'  ";
        $GLOBALS["rijftnmej"] = "ssh_srv";
        $iuphrwewrq = "data_validade";
        ${$euxtesuefkdf} = $conn->prepare(${$GLOBALS["sxsrntqfn"]});
        $SQLServidor->execute();
        ${$GLOBALS["rijftnmej"]} = $SQLServidor->fetch();
        $GLOBALS["jhsrpee"] = "explo";
        $GLOBALS["jqmqofkadfo"] = "explo";
        ${$GLOBALS["vyexbxszii"]} = date("Y-m-d H:i:s");
        ${$GLOBALS["ywgxfbh"]} = ${$GLOBALS["vlujvrlu"]}["data_validade"];
        $GLOBALS["emmashvmsdb"] = "mes";
        $rtgxpyoneyq = "SQLUsuario";
        if (${$iuphrwewrq} > ${$ghwrfrp}) {
            $GLOBALS["yjtjycpss"] = "diferenca";
            $qkbulwjqltbf = "diferenca";
            $nhdmcfkxcz = "data_atual";
            $GLOBALS["uckiujs"] = "data_validade";
            $diferenca = strtotime($data_validade) - strtotime($data_atual);
            $GLOBALS["zvjtwrxl"] = "dias_acesso";
            $dias_acesso = floor($diferenca / 86400);
        } else {
            $GLOBALS["xpwazps"] = "dias_acesso";
            $dias_acesso = 0;
        }
        if (${$GLOBALS["pvlblgppg"]} > 10) {
            ${$GLOBALS["bicyesa"]} = "info";
        } elseif (${$GLOBALS["jwxqyrmekwfx"]} == 0) {
            $mwmbeoeqe = "stsd";
            $stsd = "danger";
        } else {
            ${$GLOBALS["bicyesa"]} = "warning";
        }
        ${$GLOBALS["jqmqofkadfo"]} = explode("-", ${$GLOBALS["ywgxfbh"]});
        $fnmbshqhev = "ano";
        $ano = ${$GLOBALS["jhsrpee"]}[0];
        $GLOBALS["obtysybv"] = "conta_ssh";
        ${$GLOBALS["emmashvmsdb"]} = ${$GLOBALS["xunvkfupfge"]}[1];
        ${$GLOBALS["srolvxu"]} = ${$GLOBALS["xunvkfupfge"]}[2];
        ${$GLOBALS["tqcwokf"]} = "select * from usuario WHERE id_usuario = '" . ${$GLOBALS["obtysybv"]}["id_usuario"] . "'  ";
        ${$rtgxpyoneyq} = $conn->prepare(${$GLOBALS["tqcwokf"]});
        $SQLUsuario->execute();
        ${$GLOBALS["nkopqbq"]} = $SQLUsuario->fetch();
        ${$GLOBALS["afkzjpqpztx"]};
        if ($SQLUsuario->rowCount() > 0) {
            $uvvsskrwum = "conta_ssh";
            if ($conta_ssh["id_usuario"] != $_SESSION["usuarioID"]) {
                $vcmcjqmdbh = "usuario_sistema";
                if ($usuario_sistema["id_mestre"] != $_SESSION["usuarioID"]) {
                    echo "<script type=\"text/javascript\">";
                    echo "alert(\"N\xc3\xa3o permitido!\");";
                    echo "window.location=\"home.php?page=ssh/contas\";";
                    echo "</script>";
                }
            }
        } else {
            echo "<script type=\"text/javascript\">";
            echo "alert(\"N\xc3\xa3o encontrado!\");";
            echo "window.location=\"home.php?page=ssh/contas\";";
            echo "</script>";
        }
    } else {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"N\xc3\xa3o encontrado!\");";
        echo "window.location=\"home.php?page=ssh/contas\";";
        echo "</script>";
    }
} else {
    echo "<script type=\"text/javascript\">";
    echo "alert(\"Preencha todos os campos!\");";
    echo "window.location=\"home.php?page=ssh/contas\";";
    echo "</script>";
}
if (${$GLOBALS["vlujvrlu"]}["online"] >= 1) {
    $GLOBALS["bnjshuj"] = "status";
    ${$GLOBALS["qljrvdsmbnr"]} = "success";
    $mffijgfmdom = "conta_ssh";
    ${$GLOBALS["bnjshuj"]} = "<center><div class='alert alert-success col-6 col-md-6' role='alert'>\n<div class='alert-body d-center align-items-center'>\n<span>" . $conta_ssh["online"] . " conex\xc3\xa3o de " . ${$GLOBALS["vlujvrlu"]}["acesso"] . "</span>\n</div>\n</div></center>";
} else {
    $GLOBALS["cceefxw"] = "status";
    ${$GLOBALS["qljrvdsmbnr"]} = "danger";
    ${$GLOBALS["cceefxw"]} = "<center><div class='alert alert-danger col-6 col-md-6' role='alert'>\n<div class='alert-body d-center align-items-center'>\n<span>OFFLINE</span>\n</div>\n</div></center>";
}
$tkkdhtt = "conta_ssh";
$GLOBALS["yziqrj"] = "conta_ssh";
echo "<div class=\"active\"><a class=\"d-flex align-items-center\" href=\"home.php\"><i data-feather=\"home\"></i><span class=\"menu-title text-truncate\" data-i18n=\"Dashboards\">DASHBOARD</span></a>\n</div>\n<!-- Input with Icons start -->\n<section id=\"input-with-icons\">\n<div class=\"row match-height\">\n<div class=\"col-12\">\n";
if (${$wkgxwrnr}["status"] == 2) {
    echo "<center>\n<div class='alert alert-danger col-12 col-md-12' role='alert'>\n<div class='alert-body d-center align-items-center'>\n<span>CONTA SUSPENSA</span>\n</div>\n</div>\n</center>\n";
}
echo "<div class=\"row match-height\">\n<div class=\"col-md-6\">\n<div class=\"card card-transaction card border-";
echo ${$vcrufpyxck};
echo "\">\n<div class=\"demo-spacing-\">\n<br>\n";
echo ${$GLOBALS["imimoxpbn"]};
echo "</div>\n<div class=\"card-body\">\n<ul class=\"list-group list-group-unbordered\">\n<li class=\"list-group-item\">\n<div class=\"transaction-item\">\n<div class=\"d-flex\">\n<div class=\"avatar bg-light-primary rounded float-start\">\n<div class=\"avatar-content\">\n<i data-feather='shield' class=\"avatar-icon font-medium-3\"></i>\n</div>\n</div>\n<div class=\"my-auto\">\n<h6 class=\"mb-0 text-primary\">Login SSH</h6>\n</div>\n</div>\n<div class=\"fw-bolder text-warning\">";
echo ${$GLOBALS["vlujvrlu"]}["login"];
$cdfmdbbsqob = "diretorio";
echo "</div>\n</div>\n</li>\n<li class=\"list-group-item\">\n<div class=\"transaction-item\">\n<div class=\"d-flex\">\n<div class=\"avatar bg-light-primary rounded float-start\">\n<div class=\"avatar-content\">\n<i data-feather='key' class=\"avatar-icon font-medium-3\"></i>\n</div>\n</div>\n<div class=\"my-auto\">\n<h6 class=\"mb-0 text-primary\">Senha</h6>\n</div>\n</div>\n<div class=\"fw-bolder text-warning\">";
echo ${$GLOBALS["vlujvrlu"]}["senha"];
echo "</div>\n</div>\n</li>\n<li class=\"list-group-item\">\n<div class=\"transaction-item\">\n<div class=\"d-flex\">\n<div class=\"avatar bg-light-primary rounded float-start\">\n<div class=\"avatar-content\">\n<i data-feather='calendar' class=\"avatar-icon font-medium-3\"></i>\n</div>\n</div>\n<div class=\"my-auto\">\n<h6 class=\"mb-0 text-primary\">Vencimento</h6>\n</div>\n</div>\n";
if (${$GLOBALS["pvlblgppg"]} > 1) {
    echo "<div class=\"fw-bolder text-";
    echo ${$GLOBALS["bicyesa"]};
    echo "\">";
    echo date("d/m/Y H:i:s", strtotime(${$GLOBALS["vlujvrlu"]}["data_validade"]));
    echo "</div>\n";
} else {
    $pvqfrch = "stsd";
    $GLOBALS["lryjwkm"] = "conta_ssh";
    echo "<div class=\"fw-bolder text-";
    echo $stsd;
    echo "\">";
    echo date("d/m/Y H:i:s", strtotime($conta_ssh["data_validade"]));
    echo "</div>\n";
}
$zsrwvpjf = "conta_ssh";
echo "</div>\n</li>\n<li class=\"list-group-item\">\n<div class=\"transaction-item\">\n<div class=\"d-flex\">\n<div class=\"avatar bg-light-primary rounded float-start\">\n<div class=\"avatar-content\">\n<i data-feather='clock' class=\"avatar-icon font-medium-3\"></i>\n</div>\n</div>\n<div class=\"my-auto\">\n<h6 class=\"mb-0 text-primary\">Dias Restantes</h6>\n</div>\n</div>\n";
if (${$GLOBALS["pvlblgppg"]} > 1) {
    echo "<div class=\"fw-bolder text-";
    echo ${$GLOBALS["bicyesa"]};
    echo "\">";
    echo ${$GLOBALS["pvlblgppg"]} . " dias";
    echo "</div>\n";
} else {
    echo "<div class=\"fw-bolder text-";
    $mekrxjkbrxle = "dias_acesso";
    echo ${$GLOBALS["bicyesa"]};
    echo "\">";
    echo $dias_acesso . " dia";
    echo "</div>\n";
}
echo "</div>\n</li>\n<li class=\"list-group-item\">\n<div class=\"transaction-item\">\n<div class=\"d-flex\">\n<div class=\"avatar bg-light-primary rounded float-start\">\n<div class=\"avatar-content\">\n<i data-feather='server' class=\"avatar-icon font-medium-3\"></i>\n</div>\n</div>\n<div class=\"my-auto\">\n<h6 class=\"mb-0 text-primary\">Servidor</h6>\n</div>\n</div>\n<div class=\"fw-bolder text-warning\">";
echo ${$GLOBALS["fpbwpsbhtmt"]}["nome"];
echo "</div>\n</div>\n</li>\n<li class=\"list-group-item\">\n<div class=\"transaction-item\">\n<div class=\"d-flex\">\n<div class=\"avatar bg-light-primary rounded float-start\">\n<div class=\"avatar-content\">\n<i data-feather='users' class=\"avatar-icon font-medium-3\"></i>\n</div>\n</div>\n<div class=\"my-auto\">\n<h6 class=\"mb-0 text-primary\">Dono</h6>\n</div>\n</div>\n<div class=\"fw-bolder text-warning\">";
echo ${$GLOBALS["nkopqbq"]}["login"];
echo "</div>\n</div>\n</li>\n<form role=\"form2\" action=\"pages/system/funcoes.conta.ssh.php\" method=\"post\" class=\"form-horizontal\">\n<div class=\"box-footer\">\n<input type=\"hidden\" id=\"diretorio\" name=\"diretorio\" value=\"../../home.php?page=ssh/contas\">\n<input type=\"hidden\" id=\"id_usuario_ssh\" name=\"id_usuario_ssh\" value=\"";
echo ${$GLOBALS["osknkldxwb"]}["id_usuario_ssh"];
echo "\">\n<input type=\"hidden\" id=\"owner\" name=\"owner\" value=\"";
$GLOBALS["mukkgpsro"] = "usuario";
$GLOBALS["gkrttymfnib"] = "usuario";
echo $_SESSION["usuarioID"];
echo "\">\n<br>\n<ul class=\"list-group\">\n<li class=\"list-group mb-1\">\n<button type=\"submit\" data-toggle=\"tooltip\" title=\"Remove do Servidor\" class=\"btn btn-danger\" id=\"op\" name=\"op\" value=\"deletar\">DELETAR CONTA SSH</button>\n</li>\n<li class=\"list-group mb-1\">\n";
if (${$zsrwvpjf}["status"] == 2) {
    $GLOBALS["xqfjrkfylrnf"] = "dias_acesso";
    if ($dias_acesso == 0) {
        echo "<button type=\"submit\" class=\"btn btn-success\" id=\"op\" name=\"op\" value=\"ususpenderrenov\">RENOVAR +30 DIAS</button>\n";
    } else {
        echo "<button type=\"submit\" class=\"btn btn-success\" id=\"op\" name=\"op\" value=\"ususpender\">REATIVAR CONTA</button>\n";
    }
} else {
    echo "<button type=\"submit\" class=\"btn btn-warning\" id=\"op\" name=\"op\" value=\"suspender\">SUSPENDER CONTA</button>\n";
}
if (${$tkkdhtt}["status"] == 2) {
    if (${$GLOBALS["pvlblgppg"]} == 0) {
        echo "<li class=\"list-group mb-1\">\n<button type=\"submit\" class=\"btn btn-success\" id=\"op\" name=\"op\" value=\"ususpenderconfi\">DESB. DE CONFIAN\xc3\x87A</button>\n</li>\n";
    }
}
echo "</li>\n<li class=\"list-group mb-1\">\n<button type=\"submit\" class=\"btn btn-primary\" id=\"op\" name=\"op\" value=\"kill2\">DERRUBAR CONTA SSH</button>\n</li>\n</ul>\n</div>\n</form>\n</ul>\n</div>\n</div>\n</div>\n<div class=\"col-md-6\">\n<div class=\"card border-primary\">\n<div class=\"card-body p-b-0\">\n<h4 class=\"card-title\"><i class=\"fa fa-edit\"></i>Editar conta SSH</h4>\n<!-- Nav tabs -->\n<ul class=\"nav nav-tabs customtab\" role=\"tablist\">\n";
if (${$GLOBALS["mukkgpsro"]}["tipo"] == "revenda") {
    $GLOBALS["stoaomnrmzq"] = "usuario";
    echo "<li class=\"nav-item\"> <a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#hist\" role=\"tab\"><span class=\"hidden-sm-up\"><i data-feather=\"bar-chart-2\"></i></span> <span class=\"hidden-xs-down\">Hist\xc3\xb3rico</span></a> </li>\n<li class=\"nav-item\"> <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#valor\" role=\"tab\"><span class=\"hidden-sm-up\"><i data-feather=\"dollar-sign\"></i></span> <span class=\"hidden-xs-down\">Valor</span></a> </li>\n<li class=\"nav-item\"> <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#senha\" role=\"tab\"><span class=\"hidden-sm-up\"><i data-feather=\"key\"></i></span> <span class=\"hidden-xs-down\">Senha</span></a> </li>\n<li class=\"nav-item\"> <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#vencimento\" role=\"tab\"><span class=\"hidden-sm-up\"><i data-feather=\"calendar\"></i></span> <span class=\"hidden-xs-down\">Vencimento</span></a> </li>\n<li class=\"nav-item\"> <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#acesso\" role=\"tab\"><span class=\"hidden-sm-up\"><i data-feather=\"smartphone\"></i></span> <span class=\"hidden-xs-down\">Acesso</span></a> </li>\n<!-- ";
    if ($usuario["subrevenda"] != "sim") {
        echo "<li class=\"nav-item\"> <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#dono\" role=\"tab\"><span class=\"hidden-sm-up\"><i data-feather=\"users\"></i></span> <span class=\"hidden-xs-down\">Alterar Dono</span></a> </li>\n";
    }
    echo "-->\n";
}
echo "</ul>\n<div class=\"tab-content\">\n<div class=\"tab-pane\" id=\"dono\">\n";
if (${$GLOBALS["ppdhpdqzf"]}["tipo"] == "revenda") {
    echo "<!-- Horizontal Form -->\n<div class=\"box box-primary\">\n</div>\n<!-- /.box-header -->\n<!-- form start -->\n<form role=\"form2\" action=\"pages/system/funcoes.conta.ssh.php\" method=\"post\" class=\"form-horizontal\">\n<div class=\"form-group\">\n<select class=\"form-select\" style=\"width: 100%;\" name=\"n_owner\" id=\"n_owner\">\n";
    if (${$GLOBALS["nkopqbq"]}["id_usuario"] == $_SESSION["usuarioID"]) {
        $okuqlmpj = "owner";
        $GLOBALS["uslonfqpft"] = "usuario";
        $owner = $_SESSION["usuarioID"];
        echo "<option selected=\"selected\" value=\"";
        echo $_SESSION["usuarioID"];
        echo "\">";
        echo $usuario["login"];
        echo "</option>\n";
    } else {
        $onctnbznss = "owner";
        $dzmeaevho = "usuario_sistema";
        $GLOBALS["jtjmebiwx"] = "usuario";
        $owner = ${$GLOBALS["nkopqbq"]}["id_usuario"];
        echo "<option selected=\"selected\" value=\"";
        $iujirv = "usuario_sistema";
        echo $usuario_sistema["id_usuario"];
        echo "\">";
        echo $usuario_sistema["login"];
        echo "</option>\n<option value=\"";
        echo $_SESSION["usuarioID"];
        echo "\">";
        echo $usuario["login"];
        echo "</option>\n";
    }
    $GLOBALS["dpybgfpct"] = "SQLUsuario";
    ${$GLOBALS["tqcwokf"]} = "SELECT * FROM usuario where id_mestre = '" . $_SESSION["usuarioID"] . "'";
    ${$GLOBALS["dpybgfpct"]} = $conn->prepare(${$GLOBALS["tqcwokf"]});
    $SQLUsuario->execute();
    if ($SQLUsuario->rowCount() > 0) {
        $GLOBALS["iqjqnmx"] = "row";
        while (${$GLOBALS["iqjqnmx"]} = $SQLUsuario->fetch()) {
            $qtbslscvrr = "row";
            if ($row["id_usuario"] != ${$GLOBALS["nkopqbq"]}["id_usuario"]) {
                echo "<option value=\"";
                echo ${$GLOBALS["gkxgwmd"]}["id_usuario"];
                echo "\">";
                echo ${$GLOBALS["gkxgwmd"]}["login"];
                echo "</option>\n";
            }
        }
    }
    echo "</select>\n</div>\n<!-- /.box-body -->\n<div class=\"box-footer\">\n<input type=\"hidden\" id=\"op\" name=\"op\" value=\"owner\">\n<input type=\"hidden\" id=\"diretorio\" name=\"diretorio\" value=\"";
    echo ${$GLOBALS["ucyjxmj"]};
    echo "\">\n<input type=\"hidden\" id=\"id_usuario_ssh\" name=\"id_usuario_ssh\" value=\"";
    echo ${$GLOBALS["vlujvrlu"]}["id_usuario_ssh"];
    echo "\">\n<input type=\"hidden\" id=\"owner\" name=\"owner\" value=\"";
    $ofefwvn = "owner";
    echo $owner;
    echo "\">\n<br>\n<center><button type=\"submit\" class=\"btn btn-primary\">Alterar dono da conta SSH</button> </center><br>\n</div>\n<!-- /.box-footer -->\n</form>\n<!-- /.box -->\n";
} else {
    ${$GLOBALS["mvwqpb"]} = $_SESSION["usuarioID"];
}
echo "</div>\n<div class=\"tab-pane\" id=\"valor\">\n<!-- Horizontal Form  -->\n<div class=\"box box-primary\">\n<div class=\"box-header with-border\">\n</div>\n<!-- /.box-header -->\n<!-- form start -->\n<form role=\"valor\" id=\"valor\" name=\"valor\" action=\"pages/system/funcoes.conta.ssh.php\" method=\"post\" class=\"form-horizontal\">\n<div class=\"box-body\">\n<div class=\"form-group\">\n<div class=\"col-sm-12\">\n<input type=\"number\" pattern=\"[0-9]+([,\\.][0-9]+)?\" step=\"0.01\" min=\"0\" name=\"valorssh\" id=\"valorssh\" class=\"form-control\" placeholder=\"Digite o novo valor\" value=\"";
echo ${$GLOBALS["vlujvrlu"]}["valorconta"];
echo "\">\n</div>\n<input type=\"hidden\" id=\"op\" name=\"op\" value=\"valor\">\n<input type=\"hidden\" id=\"id_ssh\" name=\"id_ssh\" value=\"";
echo $_GET["id_ssh"];
echo "\">\n<input type=\"hidden\" id=\"diretorio\" name=\"diretorio\" value=\"";
echo ${$cdfmdbbsqob};
echo "\">\n<input type=\"hidden\" id=\"id_servidor\" name=\"id_servidor\" value=\"";
echo ${$GLOBALS["fctdumhleqn"]}["id_servidor"];
echo "\">\n<input type=\"hidden\" id=\"id_usuario_ssh\" name=\"id_usuario_ssh\" value=\"";
echo ${$GLOBALS["vlujvrlu"]}["id_usuario_ssh"];
echo "\">\n<input type=\"hidden\" id=\"owner\" name=\"owner\" value=\"";
echo $_SESSION["usuarioID"];
echo "\">\n</div>\n</div>\n<!-- /.box-body -->\n<div class=\"box-footer\">\n<br>\n<center> <button type=\"submit\" class=\"btn btn-primary\">Alterar Valor</button> </center>\n</div>\n</div>\n<!-- /.box-footer -->\n</form>\n</div>\n<div class=\"tab-pane\" id=\"senha\">\n<!-- Horizontal Form  -->\n<div class=\"box box-primary\">\n<div class=\"box-header with-border\">\n</div>\n<!-- /.box-header -->\n<!-- form start -->\n<form role=\"senha\" id=\"senha\" name=\"senha\" action=\"pages/system/funcoes.conta.ssh.php\" method=\"post\" class=\"form-horizontal\">\n<div class=\"box-body\">\n<div class=\"form-group\">\n<div class=\"col-sm-12\">\n<input required=\"required\" type=\"text\" minlength=\"4\" maxlength=\"10\" class=\"form-control\" id=\"senha_ssh\" name=\"senha_ssh\" placeholder=\"Digite a nova senha\" value=\"";
echo ${$GLOBALS["vlujvrlu"]}["senha"];
echo "\">\n</div>\n<input type=\"hidden\" id=\"op\" name=\"op\" value=\"senha\">\n<input type=\"hidden\" id=\"id_ssh\" name=\"id_ssh\" value=\"";
echo $_GET["id_ssh"];
echo "\">\n<input type=\"hidden\" id=\"diretorio\" name=\"diretorio\" value=\"";
echo ${$GLOBALS["wfxlof"]};
echo "\">\n<input type=\"hidden\" id=\"id_servidor\" name=\"id_servidor\" value=\"";
echo ${$GLOBALS["fpbwpsbhtmt"]}["id_servidor"];
echo "\">\n<input type=\"hidden\" id=\"id_usuario_ssh\" name=\"id_usuario_ssh\" value=\"";
echo ${$GLOBALS["yziqrj"]}["id_usuario_ssh"];
echo "\">\n<input type=\"hidden\" id=\"owner\" name=\"owner\" value=\"";
echo $_SESSION["usuarioID"];
echo "\">\n</div>\n</div>\n<!-- /.box-body -->\n<div class=\"box-footer\">\n<br>\n<center> <button type=\"submit\" class=\"btn btn-primary\">Alterar Senha</button> </center>\n</div>\n</div>\n<!-- /.box-footer -->\n</form>\n</div>\n<div class=\"active tab-pane\" id=\"hist\">\n";
if (${$GLOBALS["gkrttymfnib"]}["tipo"] == "revenda") {
    $meuxun = "SQLServidor";
    echo "<div class=\"box-body table-responsive no-padding\">\n<table id=\"example\" class=\"table table-hover\">\n<tr>\n<th>Servidor</th>\n<th>In\xc3\xadcio</th>\n<th>Fim</th>\n<th>Dura\xc3\xa7\xc3\xa3o</th>\n</tr>\n<tbody id=\"myTable\">\n";
    $bgkpnyvnlidq = "servidor";
    ${$GLOBALS["xjnemoena"]} = "select * from hist_usuario_ssh_online where id_usuario='" . ${$GLOBALS["vlujvrlu"]}["id_usuario_ssh"] . "' ORDER BY hora_conexao desc";
    $kcgteu = "SQLServidor";
    ${$GLOBALS["xjnemoena"]} = $conn->prepare(${$GLOBALS["xjnemoena"]});
    $SQLHistSSH->execute();
    ${$meuxun} = "select * from servidor WHERE id_servidor = '" . ${$GLOBALS["vlujvrlu"]}["id_servidor"] . "'  ";
    ${$GLOBALS["sxsrntqfn"]} = $conn->prepare(${$kcgteu});
    $SQLServidor->execute();
    ${$bgkpnyvnlidq} = $SQLServidor->fetch();
    if ($SQLHistSSH->rowCount() > 0) {
        $furrrvmh = "row_user";
        while (${$furrrvmh} = $SQLHistSSH->fetch()) {
            $GLOBALS["artzjzjcrr"] = "fim_conexao";
            $fim_conexao = "Online agora";
            $GLOBALS["qdwmqesm"] = "servidor";
            $GLOBALS["fwldwxmpfesw"] = "tempo_conectado";
            $onmtuylm = "row_user";
            $ylixmccw = "tempo_conectado";
            $GLOBALS["yvxmzhivw"] = "fim_conexao";
            $tempo_conectado = " ";
            if (${$GLOBALS["baeoiecz"]}["status"] == 1) {
                $GLOBALS["yoqjownte"] = "row_user";
                ${$GLOBALS["eoikusnest"]} = tempo_corrido($row_user["hora_conexao"]);
            } else {
                if (${$onmtuylm}["status"] != 1) {
                    $idmciwgqg = "row_user";
                    $GLOBALS["cvdkisigk"] = "fim_conexao2";
                    $khzbitrw = "fim_conexao";
                    $fim_conexao = date("d/m/Y H:i:s", strtotime(${$GLOBALS["baeoiecz"]}["hora_desconexao"]));
                    $fim_conexao2 = $row_user["hora_desconexao"];
                    ${$GLOBALS["eoikusnest"]} = tempo_final(${$GLOBALS["baeoiecz"]}["hora_conexao"], ${$GLOBALS["jpnoxeoli"]});
                }
            }
            echo "<tr >\n<td>";
            echo ${$GLOBALS["qdwmqesm"]}["nome"];
            echo "</td>\n<td>";
            echo date("d/m/Y H:i:s", strtotime(${$GLOBALS["baeoiecz"]}["hora_conexao"]));
            echo "</td>\n<td>";
            echo ${$GLOBALS["yvxmzhivw"]};
            echo "</td>\n<td>";
            echo ${$ylixmccw};
            echo "</td>\n</tr>\n";
        }
    }
    echo "</tbody>\n</table>\n</div>\n";
}
echo "</div>\n<div class=\"tab-pane\" id=\"vencimento\">\n";
if (${$GLOBALS["ppdhpdqzf"]}["tipo"] == "revenda") {
    echo "<div class=\"box box-primary\">\n<div class=\"box-header with-border\">\n</div>\n<!-- /.box-header -->\n<!-- form start -->\n<form role=\"form2\" action=\"pages/system/funcoes.conta.ssh.php\" method=\"post\" class=\"form-horizontal\">\n<div class=\"box-body\">\n<div class=\"form-group\">\n<div class=\"col-sm-12\">\n<input required=\"required\" type=\"number\" min=\"1\" max=\"366\" class=\"form-control\" id=\"dias\" name=\"dias\" placeholder=\"Digite a quantidade dias restantes\" value=\"";
    echo ${$GLOBALS["pvlblgppg"]};
    echo "\">\n</div>\n<input type=\"hidden\" id=\"op\" name=\"op\" value=\"dias\">\n<input type=\"hidden\" id=\"id_usuarioSSH\" name=\"id_usuarioSSH\" value=\"";
    echo $_GET["id_ssh"];
    echo "\">\n<input type=\"hidden\" id=\"diretorio\" name=\"diretorio\" value=\"";
    echo ${$GLOBALS["ucyjxmj"]};
    echo "\">\n<input type=\"hidden\" id=\"owner\" name=\"owner\" value=\"";
    echo $_SESSION["usuarioID"];
    echo "\">\n</div>\n</div>\n<!-- /.box-body -->\n<div class=\"box-footer\">\n<br>\n<center><button type=\"submit\" class=\"btn btn-primary\">Alterar dias restantes</button> </center>\n</div>\n<!-- /.box-footer -->\n</form>\n</div>\n<!-- /.box -->\n";
}
echo "</div>\n<div class=\"tab-pane\" id=\"acesso\">\n";
if (${$GLOBALS["ppdhpdqzf"]}["tipo"] == "revenda") {
    $rkxsszyesl = "conta_ssh";
    $GLOBALS["tcevpth"] = "diretorio";
    echo "<!-- Horizontal Form -->\n<div class=\"box box-primary\">\n<div class=\"box-header with-border\">\n</div>\n<!-- /.box-header -->\n<!-- form start -->\n<form role=\"form2\" action=\"pages/system/funcoes.conta.ssh.php\" method=\"post\" class=\"form-horizontal\">\n<div class=\"box-body\">\n<div class=\"form-group\">\n<div class=\"col-sm-12\">\n<input required=\"required\" type=\"number\" min=\"1\" max=\"500\" class=\"form-control\" id=\"acesso\" name=\"acesso\" placeholder=\"Digite a quantidade de acesso\" value=\"";
    echo $conta_ssh["acesso"];
    echo "\">\n</div>\n<input type=\"hidden\" id=\"op\" name=\"op\" value=\"acesso\">\n<input type=\"hidden\" id=\"diretorio\" name=\"diretorio\" value=\"";
    echo $diretorio;
    echo "\">\n<input type=\"hidden\" id=\"id_usuario_ssh\" name=\"id_usuario_ssh\" value=\"";
    $GLOBALS["ddltrwqhc"] = "owner";
    echo ${$GLOBALS["vlujvrlu"]}["id_usuario_ssh"];
    echo "\">\n<input type=\"hidden\" id=\"owner\" name=\"owner\" value=\"";
    echo $owner;
    echo "\">\n<input type=\"hidden\" id=\"sistema\" name=\"sistema\" value=\"";
    echo ${$GLOBALS["nkopqbq"]}["id_usuario"];
    echo "\">\n</div>\n</div>\n<!-- /.box-body -->\n<div class=\"box-footer\">\n<br>\n<center><button type=\"submit\" class=\"btn btn-primary\">Alterar limite simult\xc3\xa2neo</button> </center>\n</div>\n<!-- /.box-footer -->\n</form>\n</div>\n";
}
echo "<!-- /.box -->\n<div>\n</div>\n<!-- /.tab-content -->\n</div>\n<!-- /.nav-tabs-custom -->\n</div>\n<!-- /.col -->\n</div>\n</div>\n</div>\n</div>\n</section>\n<!-- Input with Icons end -->\n";
