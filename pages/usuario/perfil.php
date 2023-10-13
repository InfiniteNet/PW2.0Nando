<?php

$GLOBALS["cazuhrc"] = "criados";
$GLOBALS["svgtgixzpjm"] = "dia";
$GLOBALS["jigevfi"] = "mes";
$GLOBALS["xhscwttxtfc"] = "ano";
$GLOBALS["fupfigljv"] = "partes";
$GLOBALS["shklhg"] = "datacriado";
$GLOBALS["pxfvlhiowoe"] = "data";
$GLOBALS["jrickzail"] = "acc";
$GLOBALS["ycagsttmtb"] = "SQLAcessoServidor";
$GLOBALS["uqybicev"] = "row22";
$GLOBALS["yoqibam"] = "SQLServidor2";
$GLOBALS["ktiflmtha"] = "servidor";
$GLOBALS["hjfntywhyldt"] = "row_ssh_sub";
$GLOBALS["phxdmkklml"] = "SQLSubSSH";
$GLOBALS["msuscpwahgm"] = "row_user_sub";
$GLOBALS["ixdjrcfyd"] = "SQLUserSub";
$GLOBALS["dehlfuwq"] = "SQLServidor";
$GLOBALS["qakkntfpmboi"] = "row_user";
$GLOBALS["tfuvlzufy"] = "color";
$GLOBALS["oemhdik"] = "row3";
$GLOBALS["gomyvwexu"] = "stsd";
$GLOBALS["crllrw"] = "dias_acesso";
$GLOBALS["flvmctnd"] = "diferenca";
$GLOBALS["rhwnhblkxvnt"] = "data_validade";
$GLOBALS["exjwyomsk"] = "data_atual";
$GLOBALS["joogvmp"] = "SQLUsuarioSub";
$GLOBALS["ntgotbdmobc"] = "acessos";
$GLOBALS["viynxvtpkl"] = "SQLAcessoSSH";
$ettenlutuxm = "SQLUsuarioSSH";
$GLOBALS["cqichchge"] = "contas";
$GLOBALS["bpgqwfmsq"] = "total_subservers";
$GLOBALS["guepumo"] = "row2";
$GLOBALS["kqjmqxcow"] = "SQLsubservidores";
$GLOBALS["kmcnyhg"] = "total_user";
$GLOBALS["encpbuppcigo"] = "user";
$GLOBALS["ljemmhpmla"] = "perm_v2";
$GLOBALS["ocfdsix"] = "checkv2";
$GLOBALS["fapvlqj"] = "checknao";
$GLOBALS["xwtpocgn"] = "quantidade_USUARIOS_subs";
$GLOBALS["whsfmhc"] = "total_ssh_sub";
$GLOBALS["cmpykhannln"] = "sts";
$GLOBALS["epbpjiz"] = "total_ssh";
$yhndwwsgb = "usuarioGET";
$GLOBALS["zcnsmbllusos"] = "row_sub";
$GLOBALS["dmpbffxu"] = "SQLUsuarioSUB";
$GLOBALS["fvikps"] = "sshsubs132";
$GLOBALS["jkyyfy"] = "subrow";
$GLOBALS["cmxlbfixh"] = "SQLSubUSUARIOSsubs";
$GLOBALS["riippqe"] = "SQLSubSSHsubs";
$GLOBALS["uoujjhqllpn"] = "quantidade_ssh_subs";
$GLOBALS["rdepjmdvnv"] = "todossubrevendedores";
$GLOBALS["lsqkttok"] = "usuarioGET";
$GLOBALS["coybicdgmur"] = "SQLSubrevendedores";
$GLOBALS["jqwekficxk"] = "SQLUsuarioSSH";
$GLOBALS["jkprjcckch"] = "avatarusu";
$GLOBALS["vbheuz"] = "total_servers_add";
$dhpigvzsj = "sts";
$GLOBALS["mjecnbgsu"] = "usuarioGET";
$zxpvvtmjzmr = "owner";
$GLOBALS["ribggvy"] = "totalserversadd";
$GLOBALS["yfordofcv"] = "SQLUsuario";
$GLOBALS["wpxrdifl"] = "usuarioGET";
$lyarrrkayqlt = "usuarioGET";
$GLOBALS["qatkjweb"] = "owner";
$GLOBALS["gwpelgk"] = "id_usuario";
$GLOBALS["xutinmuqu"] = "usuario";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"../../../app-assets/css/plugins/extensions/ext-component-sweet-alerts.css\">\n<script src=\"../../../app-assets/js/scripts/extensions/ext-component-sweet-alerts.js\"></script>\n<script src=\"../../../app-assets/vendors/js/extensions/sweetalert2.all.min.js\"></script>\n<script src=\"../../../app-assets/vendors/js/vendors.min.js\"></script>\n<script src=\"../../../app-assets/vendors/js/charts/apexcharts.min.js\"></script>\n<script src=\"../../../app-assets/vendors/js/extensions/tether.min.js\"></script>\n<script src=\"../../../app-assets/js/core/app-menu.js\"></script>\n<script src=\"../../../app-assets/js/core/app.js\"></script>\n<script src=\"../../../app-assets/js/scripts/components.js\"></script>\n<script src=\"../../../app-assets/js/scripts/pages/dashboard-analytics.js\"></script>\n";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/input.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
$ryqceckxrr = "total_servers_add";
protegePagina("user");
if (${$GLOBALS["xutinmuqu"]}["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
if (isset($_GET["id_usuario"])) {
    $fpeskiimz = "avatarusu";
    $nlyovldzn = "SQLUsuario";
    ${$GLOBALS["gwpelgk"]} = $_GET["id_usuario"];
    ${$GLOBALS["qatkjweb"]} = $_SESSION["usuarioID"];
    ${$GLOBALS["yfordofcv"]} = "SELECT * FROM usuario where id_usuario='" . ${$GLOBALS["gwpelgk"]} . "' and id_mestre =  '" . $_SESSION["usuarioID"] . "' ";
    $kkgdxgjyevv = "todossubrevendedores";
    $lqcghjxwb = "total_ssh_sub";
    ${$GLOBALS["yfordofcv"]} = $conn->prepare(${$nlyovldzn});
    $xunnrxb = "usuarioGET";
    $GLOBALS["whkmia"] = "usuarioGET";
    $GLOBALS["xarvlvoc"] = "SQLUsuarioSSH";
    $GLOBALS["mlhidol"] = "avatarusu";
    $GLOBALS["kpavgyktft"] = "id_usuario";
    $SQLUsuario->execute();
    $usuarioGET = $SQLUsuario->fetch();
    if ($SQLUsuario->rowCount() <= 0) {
        echo myalertuser("error", "O usu\xc3\xa1rio n\xc3\xa3o existe!", "home.php?page=subrevenda/revendedores");
        exit;
    }
    $nrjwwnoid = "totalserversadd";
    $GLOBALS["jmjqdsq"] = "avatarusu";
    ${$GLOBALS["ribggvy"]} = "select * from acesso_servidor WHERE id_usuario = '" . ${$GLOBALS["mjecnbgsu"]}["id_usuario"] . "' ";
    $nkhuhqwwqii = "SQLSubrevendedores";
    $ndsybvjt = "avatarusu";
    ${$GLOBALS["ribggvy"]} = $conn->prepare(${$nrjwwnoid});
    $ddvrkcddyt = "total_ssh";
    $totalserversadd->execute();
    ${$GLOBALS["vbheuz"]} = $totalserversadd->rowCount();
    switch (${$GLOBALS["mjecnbgsu"]}["avatar"]) {
        case 1:
            ${$GLOBALS["jkprjcckch"]} = "avatar1.png";
            break;
        case 2:
            ${$ndsybvjt} = "avatar2.png";
            break;
        case 3:
            ${$GLOBALS["jmjqdsq"]} = "avatar3.png";
            break;
        case 4:
            ${$fpeskiimz} = "avatar4.png";
            break;
        case 5:
            ${$GLOBALS["mlhidol"]} = "avatar5.png";
            break;
        default:
            ${$GLOBALS["jkprjcckch"]} = "boxed-bg.png";
            break;
    }
    ${$GLOBALS["jqwekficxk"]} = "select * from conta_ssh WHERE id_usuario = '" . ${$GLOBALS["kpavgyktft"]} . "' ";
    ${$GLOBALS["xarvlvoc"]} = $conn->prepare(${$GLOBALS["jqwekficxk"]});
    $GLOBALS["llmxfsokxuif"] = "SQLSubrevendedores";
    $SQLUsuarioSSH->execute();
    ${$ddvrkcddyt} = $SQLUsuarioSSH->rowCount();
    ${$kkgdxgjyevv} = 0;
    ${$nkhuhqwwqii} = "select * from usuario WHERE id_mestre = '" . ${$GLOBALS["gwpelgk"]} . "' and tipo='revenda'";
    ${$GLOBALS["llmxfsokxuif"]} = $conn->prepare(${$GLOBALS["coybicdgmur"]});
    $SQLSubrevendedores->execute();
    ${$GLOBALS["rdepjmdvnv"]} = $SQLSubrevendedores->rowCount();
    if ($SQLSubrevendedores->rowCount() > 0) {
        $GLOBALS["wslgivw"] = "subrow";
        while (${$GLOBALS["wslgivw"]} = $SQLSubrevendedores->fetch()) {
            $rgljgjwgr = "subrow";
            $cpjjclezoq = "SQLSubUSUARIOSsubs";
            ${$GLOBALS["uoujjhqllpn"]} = 0;
            $symsjegbx = "SQLSubSSHsubs";
            ${$GLOBALS["riippqe"]} = "select * from conta_ssh WHERE id_usuario = '" . ${$rgljgjwgr}["id_usuario"] . "'  ";
            ${$GLOBALS["riippqe"]} = $conn->prepare(${$symsjegbx});
            $dwplji = "sshsubs";
            $GLOBALS["qveujetvfh"] = "quantidade_USUARIOS_subs";
            $SQLSubSSHsubs->execute();
            $sshsubs = $SQLSubSSHsubs->rowCount();
            ${$GLOBALS["cmxlbfixh"]} = "select * from usuario WHERE id_mestre = '" . ${$GLOBALS["jkyyfy"]}["id_usuario"] . "' ";
            ${$cpjjclezoq} = $conn->prepare(${$GLOBALS["cmxlbfixh"]});
            $SQLSubUSUARIOSsubs->execute();
            ${$GLOBALS["qveujetvfh"]} += $SQLSubUSUARIOSsubs->rowCount();
            ${$GLOBALS["fvikps"]} = $SQLSubUSUARIOSsubs->rowCount();
        }
    }
    ${$lqcghjxwb} = 0;
    if (${$GLOBALS["xutinmuqu"]}["tipo"] == "revenda") {
        $GLOBALS["jnqrambgfc"] = "SQLUsuarioSUB";
        $wvqsopaetkw = "SQLUsuarioSUB";
        $obgoyxtmk = "total_user";
        $SQLUsuarioSUB = "select * from usuario WHERE id_mestre = '" . $_GET["id_usuario"] . "'";
        ${$GLOBALS["dmpbffxu"]} = $conn->prepare($SQLUsuarioSUB);
        $SQLUsuarioSUB->execute();
        ${$obgoyxtmk} = $SQLUsuarioSUB->rowCount();
        if ($SQLUsuarioSUB->rowCount() > 0) {
            $GLOBALS["yhqmousooc"] = "total_ssh_sub";
            $GLOBALS["smttqzgfnxxp"] = "total";
            while (${$GLOBALS["zcnsmbllusos"]} = $SQLUsuarioSUB->fetch()) {
                $GLOBALS["ayziohabk"] = "SQLUsuarioSSH";
                $ihcpcndaylbx = "SQLUsuarioSSH";
                $GLOBALS["shxrpmetlusd"] = "SQLUsuarioSSH";
                $tcrswdo = "row_sub";
                $nbrsbhyft = "total_ssh_sub";
                $SQLUsuarioSSH = "select * from conta_ssh WHERE id_usuario = '" . $row_sub["id_usuario"] . "' ";
                $SQLUsuarioSSH = $conn->prepare($SQLUsuarioSSH);
                $SQLUsuarioSSH->execute();
                $total_ssh_sub += $SQLUsuarioSSH->rowCount();
            }
            ${$GLOBALS["epbpjiz"]} += ${$GLOBALS["yhqmousooc"]};
        }
    }
    if (${$xunnrxb}["id_mestre"] != 0) {
        $xnqgimpar = "SQLUsuario";
        $GLOBALS["uwtuwdfvd"] = "SQLUsuario";
        ${$GLOBALS["yfordofcv"]} = "select * from usuario WHERE id_usuario = '" . ${$GLOBALS["mjecnbgsu"]}["id_mestre"] . "'  ";
        ${$xnqgimpar} = $conn->prepare(${$GLOBALS["uwtuwdfvd"]});
        $wbzjyob = "usuario_mestre";
        $SQLUsuario->execute();
        $usuario_mestre = $SQLUsuario->fetch();
    }
} else {
    echo myalertuser("error", "Preencha todos os campos!", "home.php?page=subrevenda/revendedores");
    exit;
}
if (${$GLOBALS["xutinmuqu"]}["ativo"] == 2) {
    $GLOBALS["yqtiehdykvc"] = "sts";
    $sts = "danger";
} else {
    ${$GLOBALS["cmpykhannln"]} = "info";
}
$GLOBALS["xfbqpxmgkduk"] = "usuarioGET";
echo "<!-- Alerta de usuario suspenso -->\n";
if (${$GLOBALS["mjecnbgsu"]}["ativo"] == 2) {
    echo "<center>\n<div class='alert alert-danger col-12 col-md-12' role='alert'>\n<div class='alert-body d-center align-items-center'>\n<span>CONTA SUSPENSA</span>\n</div>\n</div>\n</center>\n";
}
echo "<div class=\"row\">\n<div class=\"col-lg-6 col-xlg-6 col-md-6\">\n<div class=\"card border-";
echo ${$dhpigvzsj};
echo "\">\n<div class=\"card-body little-profile text-center\">\n<div class=\"pro-img\"><img class=\"img-circle\" src=\"../app-assets/images/avatars/";
echo ${$GLOBALS["jkprjcckch"]};
echo "\" height=\"60\" width=\"60\" alt=\"user\" /></div>\n<h3 class=\"profile-username text-center\">";
echo ${$GLOBALS["mjecnbgsu"]}["nome"];
echo "</h3>\n";
if (${$GLOBALS["mjecnbgsu"]}["tipo"] == "vpn") {
    echo "<p class=\"text-primary text-center\">USU\xc3\x81RIO SSH</p>\n";
} elseif (${$GLOBALS["mjecnbgsu"]}["tipo"] == "revenda") {
    $GLOBALS["ghjxlq"] = "usuarioGET";
    if ($usuarioGET["subrevenda"] == "sim") {
        echo "<p class=\"text-primary text-center\">SUB-REVENDEDOR [<a class=\"text-info\">MEU</a>]</p>\n";
    } else {
        echo "<p class=\"text-primary text-center\">REVENDEDOR [<a class=\"text-info\">MEU</a>]</p>\n";
    }
}
echo "<ul class=\"list-group list-group-unbordered\">\n";
if (${$GLOBALS["mjecnbgsu"]}["tipo"] == "revenda" and ${$GLOBALS["vbheuz"]} > 0) {
    $GLOBALS["trnaynydtrx"] = "usuarioGET";
    echo "<li class=\"list-group-item\">\n<b>CONTAS SSH</b> <a class=\"badge badge-pill bg-info float-right text-white\">";
    echo ${$GLOBALS["epbpjiz"]};
    echo "</a>\n</li>\n";
    if ($usuarioGET["subrevenda"] == "nao") {
        echo "<li class=\"list-group-item\">\n<b>CONTAS SSH DAS REVENDAS</b> <a class=\"badge badge-pill bg-danger float-right text-white\">";
        echo ${$GLOBALS["whsfmhc"]};
        echo "</a>\n</li>\n";
    }
    echo "<li class=\"list-group-item\">\n<b>SERVIDORES</b>\n<a class=\"badge badge-pill bg-warning float-right text-white\">";
    $GLOBALS["pfmejt"] = "usuarioGET";
    echo ${$GLOBALS["vbheuz"]};
    echo "</a>\n</li>\n";
    if ($usuarioGET["subrevenda"] == "nao") {
        echo "<li class=\"list-group-item\">\n<b>REVENDAS</b> <a class=\"badge badge-pill bg-warning float-right text-white\">";
        echo ${$GLOBALS["rdepjmdvnv"]};
        echo "</a>\n</li>\n<!--<li class=\"list-group-item\">\n";
        if (${$GLOBALS["xwtpocgn"]} > 0) {
            echo "<b>Usu\xc3\xa1rios dos Sub</b> <a class=\"badge badge-pill bg-info float-right text-white\">";
            echo ${$GLOBALS["xwtpocgn"]};
            echo "</a>\n";
        } else {
            echo "<b>Usu\xc3\xa1rios dos Sub</b> <a class=\"badge badge-pill bg-info float-right text-white\">0</a>\n";
        }
        echo "</li>-->\n";
    }
}
$ofysmqny = "usuarioGET";
echo "</ul>\n<br>\n<ul class=\"list-group\">\n";
$dqnkku = "owner";
$GLOBALS["jxdhckond"] = "usuarioGET";
if (${$GLOBALS["mjecnbgsu"]}["tipo"] == "revenda" and ${$ryqceckxrr} == 0) {
    echo "<li class=\"list-group mb-1\">\n<div class=\"d-grid col-lg-12 col-md-12 mb-1 mb-lg-0\">\n<a href=\"?page=subrevenda/adicionar\" class=\"btn btn-success waves-effect waves-float waves-light\"><i data-feather='server'></i> ADICIONAR SERVIDOR <i data-feather='server'></i></a>\n</div>\n</li>\n";
}
echo "<li class=\"list-group mb-1\">\n<div class=\"d-grid col-lg-12 col-md-12 mb-1 mb-lg-0\">\n";
$tslbfierkln = "total_servers_add";
if (${$GLOBALS["jxdhckond"]}["ativo"] == 1) {
    echo "<a onclick=\"suspende_usuario()\" class=\"btn btn-warning text-white\"><i data-feather='user-x'></i> <b>SUSPENDER TUDO</b> <i data-feather='user-x'></i></a>\n";
} else {
    $mmzuydcvpon = "owner";
    $GLOBALS["sphwbovlq"] = "usuarioGET";
    echo "<a href=\"pages/system/funcoes.usuario.php?&id_usuario=";
    echo $usuarioGET["id_usuario"];
    echo "&diretorio=../../home.php?page=subrevenda/revendedores&owner=";
    echo $owner;
    echo "&op=ususpender\" class=\"btn btn-success text-white\"><i data-feather='user-check'></i><b> REATIVAR TUDO</b> <i data-feather='user-check'></i></a>\n";
}
echo "</div>\n</li>\n<li class=\"list-group mb-1\">\n<div class=\"d-grid col-lg-12 col-md-12 mb-1 mb-lg-0\">\n<a onclick=\"excluir_usuario()\" class=\"btn btn-danger waves-effect waves-float waves-light\"><i data-feather='trash'></i> <b>DELETAR TUDO</b> <i data-feather='trash'></i></a>\n</div>\n</li>\n</ul>\n<script type=\"text/javascript\">\nfunction excluir_usuario() {\nSwal.fire({\ntitle: 'Excluir',\ntext: \"Realmente deseja excluir?\",\nicon: 'warning',\nshowCancelButton: true,\nconfirmButtonColor: '#28c76f',\ncancelButtonColor: '#d33',\nconfirmButtonText: 'Sim',\ncancelButtonText: 'Nao'\n}).then((result) => {\nif (result.isConfirmed) {\nwindow.location.href = 'pages/system/funcoes.usuario.php?&id_usuario=";
echo ${$GLOBALS["wpxrdifl"]}["id_usuario"];
$vccqdxmez = "usuarioGET";
echo "&diretorio=../../home.php?page=subrevenda/revendedores&owner=";
$uxraztdsz = "usuarioGET";
echo ${$dqnkku};
echo "&op=deletar'\n}\n})\n}\nfunction suspende_usuario() {\nSwal.fire({\ntitle: 'Suspender',\ntext: \"Realmente deseja suspender?\",\nicon: 'warning',\nshowCancelButton: true,\nconfirmButtonColor: '#28c76f',\ncancelButtonColor: '#d33',\nconfirmButtonText: 'Sim',\ncancelButtonText: 'Nao'\n}).then((result) => {\nif (result.isConfirmed) {\nwindow.location.href = 'pages/system/funcoes.usuario.php?&id_usuario=";
echo ${$GLOBALS["gwpelgk"]};
echo "&diretorio=../../home.php?page=subrevenda/revendedores&owner=";
echo ${$zxpvvtmjzmr};
echo "&op=suspender'\n}\n})\n}\n</script>\n</div>\n<!-- /.box-body -->\n</div>\n<!-- /.box -->\n</div>\n<!-- /.col -->\n<div class=\"col-md-6\">\n<div class=\"card border-primary\">\n<div class=\"card-body p-b-0\">\n<h4 class=\"card-title\">Gerenciar Revenda</i></h4>\n<!-- Nav tabs -->\n<ul class=\"nav nav-tabs customtab\" role=\"tablist\">\n<li class=\"nav-item\"> <a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#activity\" role=\"tab\"><span class=\"hidden-sm-up\"><i data-feather=\"info\"></i></span> <span class=\"hidden-xs-down\">Editar</span></a> </li>\n";
if (${$GLOBALS["mjecnbgsu"]}["tipo"] == "revenda" and ${$tslbfierkln} > 0) {
    $dcdtsjp = "usuarioGET";
    echo "<li class=\"nav-item\"> <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#timeline\" role=\"tab\" aria-selected=\"true\"><i data-feather=\"server\"></i>Servidores</span></a> </li>\n";
    if ($usuarioGET["subrevenda"] == "nao") {
        echo "<li class=\"nav-item\"> <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#users\" role=\"tab\" aria-selected=\"true\"><i data-feather=\"users\"></i>Revendas</span></a> </li>\n";
    }
    echo "<li class=\"nav-item\"> <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#ssh\" role=\"tab\" aria-selected=\"true\"><i data-feather=\"shield\"></i>Contas SSH</span></a> </li>\n";
}
$GLOBALS["xclfxnhx"] = "usuarioGET";
if (${$GLOBALS["mjecnbgsu"]}["subrevenda"] == "nao") {
    echo "<!--<li class=\"nav-item\"> <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#fatura\" role=\"tab\" aria-selected=\"true\"><i data-feather=\"money\"></i>Gerar Fatura</span></a> </li>-->\n";
}
echo "</ul>\n<div class=\"tab-content\">\n<div class=\"active tab-pane\" id=\"activity\">\n<form class=\"form-horizontal\" role=\"perfil\" name=\"perfil\" id=\"perfil\" action=\"pages/usuario/editarusuario.php\" method=\"post\">\n";
if (${$GLOBALS["mjecnbgsu"]}["subrevenda"] == nao) {
    ${$GLOBALS["fapvlqj"]} = "checked";
}
if (${$lyarrrkayqlt}["subrevenda"] == sim) {
    $jtjbehdiqxk = "checksim";
    $checksim = "checked";
}
if ($_SESSION["subrevenda"] != "sim") {
    $GLOBALS["wmcqgrx"] = "checknao";
    $hrbtmvvqrppy = "checksim";
    echo "<label class=\"form-label\" for=\"first-name-icon\">N\xc3\xadvel da Revenda</label>\n<div class=\"input-group input-group-merge\">\n<ul class=\"list-unstyled mb-0\">\n<li class=\"d-inline-block mr-2\">\n<fieldset>\n<div class=\"vs-radio-con\">\n<input id=\"radio1\" type=\"radio\" name=\"subrevenda\" value=\"nao\" ";
    echo $checknao;
    echo " >\n<span class=\"vs-radio\">\n<span class=\"vs-radio--border\"></span>\n<span class=\"vs-radio--circle\"></span>\n</span>\n<span class=\"\">Revendedor</span>\n</div>\n</fieldset>\n</li>\n<li class=\"d-inline-block mr-2\">\n<fieldset>\n<div class=\"vs-radio-con vs-radio-success\">\n<input id=\"radio2\" type=\"radio\" name=\"subrevenda\" value=\"sim\" ";
    echo $checksim;
    echo " >\n<span class=\"vs-radio\">\n<span class=\"vs-radio--border\"></span>\n<span class=\"vs-radio--circle\"></span>\n</span>\n<span class=\"\">Sub-Revendedor</span>\n</div>\n</fieldset>\n</li>\n</ul>\n</div>\n";
}
echo "<div class=\"mb-1\">\n<label class=\"form-label\" for=\"first-name-icon\">Valor</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather=\"dollar-sign\"></i></span>\n<input type=\"number\" pattern=\"[0-9]+([,\\.][0-9]+)?\" step=\"0.01\" min=\"0.01\" name=\"valorrev\" id=\"valorrev\" class=\"form-control\" value=\"";
echo ${$GLOBALS["mjecnbgsu"]}["valorrevenda"];
echo "\">\n</div>\n</div>\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"first-name-icon\">Nome</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather=\"user\"></i></span>\n<input type=\"text\" class=\"form-control\" id=\"nome\" name=\"nome\" minlength=\"4\" maxlength=\"20\" value=\"";
echo ${$GLOBALS["mjecnbgsu"]}["nome"];
echo "\">\n</div>\n</div>\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"first-name-icon\">Usu\xc3\xa1rio</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather=\"user\"></i></span>\n<input type=\"text\" class=\"form-control\" disabled value=\"";
echo ${$GLOBALS["mjecnbgsu"]}["login"];
echo "\" required=\"\">\n<input type=\"hidden\" class=\"form-control\" id=\"id_usuario\" name=\"id_usuario\" value=\"";
echo ${$GLOBALS["mjecnbgsu"]}["id_usuario"];
echo "\">\n<input type=\"hidden\" class=\"form-control\" id=\"diretorio\" name=\"diretorio\" value=\"../../home.php?page=usuario/perfil&id_usuario=";
echo ${$yhndwwsgb}["id_usuario"];
echo "\">\n</div>\n</div>\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"first-name-icon\">Senha</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather=\"key\"></i></span>\n<input type=\"text\" name=\"senha\" id=\"senha\" class=\"form-control\" minlength=\"4\" maxlength=\"10\" value=\"";
echo ${$ofysmqny}["senha"];
echo "\" required=\"\">\n</div>\n</div>\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"first-name-icon\">Email</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather=\"mail\"></i></span>\n<input type=\"text\" name=\"email\" id=\"email\" class=\"form-control\" minlength=\"4\" maxlength=\"40\" value=\"";
echo ${$uxraztdsz}["email"];
echo "\" required=\"\">\n</div>\n</div>\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"first-name-icon\">Celular</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather=\"smartphone\"></i></span>\n<input type=\"text\" name=\"celular\" id=\"celular\" class=\"form-control\" minlength=\"10\" maxlength=\"11\"  value=\"";
echo ${$GLOBALS["mjecnbgsu"]}["celular"];
echo "\" required=\"\">\n</div>\n</div>\n<div class=\"mb-2\">\n<label class=\"form-label\" for=\"first-name-icon\">Data de cadastro</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather=\"calendar\"></i></span>\n<input type=\"text\" class=\"form-control\" disabled value=\"";
echo ${$GLOBALS["xfbqpxmgkduk"]}["data_cadastro"];
echo "\">\n</div>\n</div>\n";
if (${$GLOBALS["mjecnbgsu"]}["permitir_demo"] == 0) {
    $bdntuisy = "checkssh";
    $checkssh = "checked";
}
if (${$GLOBALS["mjecnbgsu"]}["permitir_demo"] == 1) {
    ${$GLOBALS["ocfdsix"]} = "checked";
}
if (${$GLOBALS["rdepjmdvnv"]} >= 1) {
    $ohkajxgqz = "todossubrevendedores";
    echo "<input id=\"blockrev\" type=\"hidden\" class=\"form-control\" name=\"blockrev\" value=\"";
    echo $todossubrevendedores;
    echo "\">\n";
}
if (${$GLOBALS["ljemmhpmla"]} == 1) {
    $GLOBALS["jntrmngwbb"] = "checkv2";
    $pqfxtjwkun = "checkssh";
    echo "<div class=\"mb-2\">\n<div class=\"row custom-options-checkable g-2\">\n<div class=\"col-md-6\">\n<input class=\"custom-option-item-check\" type=\"radio\" name=\"acesso\" id=\"customOptionsCheckableRadiosWithIcon2\" value=\"0\" ";
    echo $checkssh;
    echo " />\n<label class=\"custom-option-item text-center text-center p-1\" for=\"customOptionsCheckableRadiosWithIcon2\">\n<i data-feather=\"shield\" class=\"font-large-1 mb-75\"></i>\n<span class=\"custom-option-item-title h4 d-block\">ACESSO SSH</span>\n<small>Ele e os revendedores poder\xc3\xa1 criar apenas contas ssh</small>\n</label>\n</div>\n<div class=\"col-md-6\">\n<input class=\"custom-option-item-check\" type=\"radio\" name=\"acesso\" id=\"customOptionsCheckableRadiosWithIcon3\" value=\"1\" ";
    echo $checkv2;
    echo " />\n<label class=\"custom-option-item text-center p-1\" for=\"customOptionsCheckableRadiosWithIcon3\">\n<i data-feather=\"link\" class=\"font-large-1 mb-75\"></i>\n<span class=\"custom-option-item-title h4 d-block\">ACESSO SSH E V2RAY</span>\n<small>Ele e os revendedores poder\xc3\xa1 criar contas ssh e v2ray</small>\n</label>\n</div>\n</div>\n</div>\n";
} else {
    echo "<input type=\"hidden\" class=\"form-control\" name=\"acesso\" id=\"acesso\" value=\"0\">\n";
}
echo "<div class=\"form-group text-center\">\n<button type=\"submit\" class=\"btn btn-success\">Alterar Dados</button>\n</div>\n</form>\n</div>\n<!-- /.tab-pane -->\n";
if (${$GLOBALS["mjecnbgsu"]}["tipo"] == "revenda") {
    $hkigkclplmwm = "usuarioGET";
    echo "<div class=\" tab-pane\" id=\"timeline\">\n<div class=\"row\">\n<div class=\"col-lg-12\">\n<div class=\"box box-primary\">\n<!-- /.box-header -->\n<div class=\"box-body table-responsive no-padding\">\n<table id=\"example\" class=\"table table-hover\">\n<tr>\n<th>SERVIDOR</th>\n<th>LOGIN</th>\n<th>LIMITE</th>\n<th>VALIDADE</th>\n";
    $crjlihkq = "usuarioGET";
    $pqllwov = "SQLAcessoServidor";
    $yyouidunx = "SQLUsuarioSUB";
    $ijnxomn = "SQLAcessoServidor";
    $epiopcwhpgtg = "SQLAcessoServidor";
    if ($usuarioGET["subrevenda"] == "nao") {
        echo "<th>REVENDAS</th>\n";
    }
    echo "<th>SSH</th>\n</tr>\n";
    ${$ijnxomn} = "select * from acesso_servidor where id_usuario='" . $_GET["id_usuario"] . "'  ";
    ${$epiopcwhpgtg} = $conn->prepare(${$pqllwov});
    $idxiygu = "SQLUsuarioSUB";
    $SQLAcessoServidor->execute();
    if ($SQLAcessoServidor->rowCount() > 0) {
        $leucbt = "row2";
        while (${$leucbt} = $SQLAcessoServidor->fetch()) {
            $GLOBALS["fsqjwst"] = "SQLServidor";
            $GLOBALS["ezilpsl"] = "SQLTotalUser";
            $GLOBALS["wqyylgxg"] = "SQLTotalUser";
            $SQLTotalUser = "select * from usuario WHERE id_usuario = '" . $_GET["id_usuario"] . "' ";
            $aiphccg = "row2";
            $vdfulxqi = "SQLAcessoSSH";
            $GLOBALS["qoaiieiltbce"] = "SQLTotalUser";
            $hmvozgxfhm = "SQLServidor";
            $SQLTotalUser = $conn->prepare($SQLTotalUser);
            $SQLTotalUser->execute();
            $lmckvdboaiy = "SQLUsuarioSSH";
            $GLOBALS["gqujjjwie"] = "SQLServidor";
            $GLOBALS["srirsqb"] = "acessos";
            ${$GLOBALS["encpbuppcigo"]} = $SQLTotalUser->fetch();
            ${$GLOBALS["kmcnyhg"]} = $SQLTotalUser->rowCount();
            ${$hmvozgxfhm} = "select * from servidor where id_servidor = '" . ${$aiphccg}["id_servidor"] . "'";
            ${$GLOBALS["gqujjjwie"]} = $conn->prepare(${$GLOBALS["fsqjwst"]});
            $SQLServidor->execute();
            $GLOBALS["uqwsbn"] = "row2";
            ${$GLOBALS["kqjmqxcow"]} = "select * from acesso_servidor WHERE id_servidor_mestre = '" . ${$GLOBALS["guepumo"]}["id_acesso_servidor"] . "'";
            ${$GLOBALS["kqjmqxcow"]} = $conn->prepare(${$GLOBALS["kqjmqxcow"]});
            $SQLsubservidores->execute();
            ${$GLOBALS["bpgqwfmsq"]} = $SQLsubservidores->rowCount();
            $eodjlgttfl = "row2";
            ${$GLOBALS["cqichchge"]} = 0;
            ${$GLOBALS["srirsqb"]} = 0;
            ${$GLOBALS["jqwekficxk"]} = "select * from conta_ssh WHERE id_servidor = '" . ${$GLOBALS["uqwsbn"]}["id_servidor"] . "' and id_usuario='" . $_GET["id_usuario"] . "'  ";
            ${$GLOBALS["jqwekficxk"]} = $conn->prepare(${$lmckvdboaiy});
            $SQLUsuarioSSH->execute();
            ${$GLOBALS["cqichchge"]} += $SQLUsuarioSSH->rowCount();
            $GLOBALS["phvvawjvu"] = "SQLUsuarioSub";
            ${$vdfulxqi} = "SELECT sum(acesso) AS quantidade  FROM conta_ssh where id_servidor = '" . ${$eodjlgttfl}["id_servidor"] . "'  and id_usuario='" . $_GET["id_usuario"] . "' ";
            $GLOBALS["gxqqliws"] = "SQLUsuarioSub";
            ${$GLOBALS["viynxvtpkl"]} = $conn->prepare(${$GLOBALS["viynxvtpkl"]});
            $SQLAcessoSSH->execute();
            ${$GLOBALS["viynxvtpkl"]} = $SQLAcessoSSH->fetch();
            ${$GLOBALS["ntgotbdmobc"]} += ${$GLOBALS["viynxvtpkl"]}["quantidade"];
            ${$GLOBALS["gxqqliws"]} = "select * from usuario WHERE id_mestre = '" . $_GET["id_usuario"] . "'";
            ${$GLOBALS["phvvawjvu"]} = $conn->prepare(${$GLOBALS["joogvmp"]});
            $SQLUsuarioSub->execute();
            if ($SQLUsuarioSub->rowCount() > 0) {
                $mbyswtfpe = "row3";
                while (${$mbyswtfpe} = $SQLUsuarioSub->fetch()) {
                    $GLOBALS["itbbtfsfqe"] = "row2";
                    $GLOBALS["mtdvxky"] = "SQLUsuarioSSH";
                    $hczrdtf = "row2";
                    $inonxfhpsj = "row3";
                    $GLOBALS["nwxrvjdfzeb"] = "contas";
                    $GLOBALS["fkfjinhj"] = "row3";
                    $SQLUsuarioSSH = "select * from conta_ssh WHERE id_servidor = '" . $row2["id_servidor"] . "'\nand id_usuario='" . $row3["id_usuario"] . "'  ";
                    $aoinytltnm = "acessos";
                    ${$GLOBALS["jqwekficxk"]} = $conn->prepare(${$GLOBALS["jqwekficxk"]});
                    $SQLUsuarioSSH->execute();
                    $qfzupivvq = "SQLAcessoSSH";
                    ${$GLOBALS["nwxrvjdfzeb"]} += $SQLUsuarioSSH->rowCount();
                    ${$qfzupivvq} = "SELECT sum(acesso) AS quantidade  FROM conta_ssh where id_servidor = '" . ${$hczrdtf}["id_servidor"] . "'  and id_usuario='" . ${$inonxfhpsj}["id_usuario"] . "' ";
                    ${$GLOBALS["viynxvtpkl"]} = $conn->prepare(${$GLOBALS["viynxvtpkl"]});
                    $SQLAcessoSSH->execute();
                    $GLOBALS["vmgchwtwb"] = "SQLAcessoSSH";
                    $SQLAcessoSSH = $SQLAcessoSSH->fetch();
                    ${$aoinytltnm} += ${$GLOBALS["viynxvtpkl"]}["quantidade"];
                }
            }
            if ($SQLServidor->rowCount() > 0) {
                $GLOBALS["tlyrteljlz"] = "row3";
                while (${$GLOBALS["tlyrteljlz"]} = $SQLServidor->fetch()) {
                    $GLOBALS["vbuwtdljrf"] = "qtd_srv";
                    $GLOBALS["yrfskdjo"] = "data_atual";
                    $qtd_srv = 0;
                    $GLOBALS["aihkvicdho"] = "dias_acesso";
                    $pwtpguk = "usuarioGET";
                    ${$GLOBALS["exjwyomsk"]} = date("Y-m-d H:i:s");
                    ${$GLOBALS["rhwnhblkxvnt"]} = ${$GLOBALS["encpbuppcigo"]}["validade"];
                    $dyhefok = "data_validade";
                    $kxqszrerjw = "row2";
                    if ($data_validade > ${$GLOBALS["yrfskdjo"]}) {
                        $GLOBALS["kearfulhs"] = "diferenca";
                        ${$GLOBALS["flvmctnd"]} = strtotime(${$GLOBALS["rhwnhblkxvnt"]}) - strtotime(${$GLOBALS["exjwyomsk"]});
                        ${$GLOBALS["crllrw"]} = floor(${$GLOBALS["kearfulhs"]} / 86400);
                    } else {
                        $jpttdji = "dias_acesso";
                        $dias_acesso = 0;
                    }
                    $slvrynozjlpd = "row2";
                    if (${$GLOBALS["crllrw"]} > 10) {
                        $GLOBALS["zpwbodffi"] = "stsd";
                        $stsd = "info";
                    } elseif (${$GLOBALS["crllrw"]} == 0) {
                        ${$GLOBALS["gomyvwexu"]} = "danger";
                    } else {
                        $yoxbew = "stsd";
                        $stsd = "warning";
                    }
                    $GLOBALS["ghwuvofbrj"] = "acessos";
                    echo "<tr>\n<td>";
                    echo ${$GLOBALS["oemhdik"]}["nome"];
                    $xscqtfpl = "row2";
                    echo "</td>\n<td>";
                    echo ${$GLOBALS["encpbuppcigo"]}["login"];
                    echo "</td>\n<td>";
                    echo ${$slvrynozjlpd}["qtd"];
                    echo "</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 5px;\">\n<span class=\"label label-primary pull-left\">\n";
                    if (${$GLOBALS["aihkvicdho"]} > 1) {
                        $enghtjuocge = "stsd";
                        echo "<span class=\"badge badge-light-";
                        echo $stsd;
                        echo "\">";
                        echo ${$GLOBALS["crllrw"]};
                        echo "<b> dias</b></span>\n";
                    } else {
                        $htbyuguxncv = "stsd";
                        echo "<span class=\"badge badge-light-";
                        $GLOBALS["sqksgxx"] = "dias_acesso";
                        echo $stsd;
                        echo "\">";
                        echo $dias_acesso;
                        echo "<b> dia</b></span>\n";
                    }
                    echo "</span>\n</span>\n</td>\n";
                    if (${$GLOBALS["mjecnbgsu"]}["subrevenda"] == "nao") {
                        echo "<td>";
                        echo ${$GLOBALS["rdepjmdvnv"]};
                        echo "</td>\n";
                    }
                    echo "<td>";
                    echo ${$GLOBALS["cqichchge"]};
                    echo "</td>\n<!--<td>";
                    echo ${$GLOBALS["ghwuvofbrj"]};
                    echo "</td>-->\n<td>\n<script>\nfunction apaga_tudo";
                    $GLOBALS["sibcgyxyhbq"] = "row2";
                    echo ${$kxqszrerjw}["id_acesso_servidor"];
                    echo "() {\nSwal.fire({\ntitle: 'Remover Servidor',\ntext: \"Tamb\xc3\xa9m sera removido o servidor dos revendedores dele, realmente deseja remover?\",\nicon: 'warning',\nshowCancelButton: true,\nconfirmButtonColor: '#28c76f',\ncancelButtonColor: '#d33',\nconfirmButtonText: 'Sim',\ncancelButtonText: 'Nao'\n}).then((result) => {\nif (result.isConfirmed) {\nwindow.location.href = 'pages/subrevenda/deletarservidor_exe.php?&servidor=";
                    echo ${$xscqtfpl}["id_acesso_servidor"];
                    echo "&cliente=";
                    echo ${$pwtpguk}["id_usuario"];
                    echo "'\n}\n})\n}\n</script>\n<!-- <a href=\"#\" class=\"btn btn-warning\">Editar Acesso</a> -->\n<!-- <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">\n<a onclick=\"apaga_tudo";
                    echo $row2["id_acesso_servidor"];
                    echo "()\" class=\"btn-sm btn-danger waves-effect waves-float waves-light\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-trash\">\n<polyline points=\"3 6 5 6 21 6\"></polyline>\n<path d=\"M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2\"></path>\n</svg></a>\n</div> -->\n</td>\n</tr>\n";
                }
            }
        }
    }
    $GLOBALS["fbxryylxk"] = "SQLUsuarioSUB";
    echo "</table>\n</div>\n<!-- /.box-body -->\n</div>\n<!-- /.box -->\n</div>\n</div>\n</div>\n<!-- /.tab-pane -->\n<div class=\"tab-pane\" id=\"users\">\n<div class=\"row\">\n<div class=\"col-lg-12\">\n<div class=\"box box-primary\">\n<!-- /.box-header -->\n<div class=\"table-responsive\">\n<table class=\"table table-hover\">\n<tr>\n<th>Login</th>\n<th>Nome</th>\n<th>Contas SSH</th>\n</tr>\n";
    ${$idxiygu} = "select * from usuario where id_mestre='" . ${$crjlihkq}["id_usuario"] . "'  ";
    ${$yyouidunx} = $conn->prepare(${$GLOBALS["fbxryylxk"]});
    $SQLUsuarioSUB->execute();
    if ($SQLUsuarioSUB->rowCount() > 0) {
        $ifvjqlbydy = "row_user";
        while (${$ifvjqlbydy} = $SQLUsuarioSUB->fetch()) {
            $GLOBALS["ewdphnob"] = "total_ssh";
            $GLOBALS["ytydxnjwrbse"] = "row_user";
            $total_ssh = 0;
            $awnviue = "row_user";
            $GLOBALS["zqnkcrxgp"] = "SQLUsuarioSSH";
            ${$GLOBALS["jqwekficxk"]} = "select * from conta_ssh where id_usuario = '" . $row_user["id_usuario"] . "' ";
            $GLOBALS["rgutpdsmq"] = "total_ssh";
            ${$GLOBALS["jqwekficxk"]} = $conn->prepare(${$GLOBALS["zqnkcrxgp"]});
            $GLOBALS["vazufsnde"] = "total_ssh";
            $SQLUsuarioSSH->execute();
            $total_ssh += $SQLUsuarioSSH->rowCount();
            ${$GLOBALS["tfuvlzufy"]} = "";
            $cxlolmuqrv = "row_user";
            if (${$GLOBALS["ytydxnjwrbse"]}["ativo"] == 2) {
                ${$GLOBALS["tfuvlzufy"]} = "bgcolor='#FF6347'";
            }
            $uxftilz = "color";
            echo "<tr ";
            echo $color;
            echo ">\n<td>";
            echo ${$GLOBALS["qakkntfpmboi"]}["login"];
            echo "</td>\n<td>";
            echo ${$cxlolmuqrv}["nome"];
            echo "</td>\n<td>";
            echo ${$GLOBALS["rgutpdsmq"]};
            echo "</td>\n</tr>\n";
        }
    }
    echo "</table>\n</div>\n<!-- /.box-body -->\n</div>\n<!-- /.box -->\n</div>\n</div>\n</div>\n";
}
echo "<!-- /.tab-pane -->\n<div class=\" tab-pane\" id=\"ssh\">\n<div class=\"row\">\n<div class=\"col-lg-12\">\n<div class=\"box box-primary\">\n<!-- /.box-header -->\n<div class=\"table-responsive\">\n<table class=\"table table-hover\">\n<tr>\n<th>Login</th>\n<th>Servidor</th>\n<th>Acessos</th>\n<th>Dono</th>\n</tr>\n";
$GLOBALS["qppmvvmqpez"] = "SQLUsuarioSSH";
${$GLOBALS["jqwekficxk"]} = "select * from conta_ssh where id_usuario='" . ${$GLOBALS["mjecnbgsu"]}["id_usuario"] . "'";
${$ettenlutuxm} = $conn->prepare(${$GLOBALS["qppmvvmqpez"]});
$SQLUsuarioSSH->execute();
if ($SQLUsuarioSSH->rowCount() > 0) {
    $GLOBALS["srepube"] = "row_user";
    while (${$GLOBALS["srepube"]} = $SQLUsuarioSSH->fetch()) {
        $slpplk = "SQLServidor";
        $frgcmkwjpp = "SQLServidor";
        $svyretwygo = "SQLAcessoSSH";
        $szjuubpqqcts = "servidor";
        $GLOBALS["tljptcl"] = "row_user";
        $SQLServidor = "select * from servidor where id_servidor='" . $row_user["id_servidor"] . "'  ";
        $kpirnaw = "color";
        $GLOBALS["cmmhkt"] = "servidor";
        ${$GLOBALS["dehlfuwq"]} = $conn->prepare($SQLServidor);
        $GLOBALS["wyrxzkw"] = "acessos";
        $SQLServidor->execute();
        ${$GLOBALS["cmmhkt"]} = $SQLServidor->fetch();
        $vyqwhvuxsjy = "row_user";
        $GLOBALS["gnmvbeq"] = "SQLAcessoSSH";
        ${$kpirnaw} = "";
        ${$GLOBALS["wyrxzkw"]} = 0;
        $mfglyoucxoo = "row_user";
        ${$GLOBALS["gnmvbeq"]} = "SELECT sum(acesso) AS quantidade  FROM conta_ssh where id_usuario_ssh='" . ${$GLOBALS["qakkntfpmboi"]}["id_usuario_ssh"] . "' ";
        $iryaybhwtlq = "SQLAcessoSSH";
        ${$svyretwygo} = $conn->prepare(${$GLOBALS["viynxvtpkl"]});
        $SQLAcessoSSH->execute();
        ${$GLOBALS["viynxvtpkl"]} = $SQLAcessoSSH->fetch();
        ${$GLOBALS["ntgotbdmobc"]} += ${$iryaybhwtlq}["quantidade"];
        if (${$mfglyoucxoo}["status"] == 2) {
            $wlcglbpbdm = "color";
            $color = "bgcolor='#FF6347'";
        }
        echo "<tr ";
        echo ${$GLOBALS["tfuvlzufy"]};
        echo ">\n<td>";
        echo ${$vyqwhvuxsjy}["login"];
        echo "</td>\n<td>";
        echo ${$szjuubpqqcts}["nome"];
        echo "</td>\n<td>";
        echo ${$GLOBALS["ntgotbdmobc"]};
        echo "</td>\n<td>";
        echo ${$GLOBALS["encpbuppcigo"]}["login"];
        echo "</td>\n</tr>\n";
    }
}
if (${$GLOBALS["mjecnbgsu"]}["tipo"] == "revenda") {
    $GLOBALS["arphbtqyf"] = "SQLUserSub";
    $GLOBALS["qkxqyphj"] = "SQLUserSub";
    $SQLUserSub = "select * from usuario where id_mestre = '" . ${$GLOBALS["mjecnbgsu"]}["id_usuario"] . "'  ";
    $SQLUserSub = $conn->prepare(${$GLOBALS["ixdjrcfyd"]});
    $SQLUserSub->execute();
    if ($SQLUserSub->rowCount() > 0) {
        while (${$GLOBALS["msuscpwahgm"]} = $SQLUserSub->fetch()) {
            $fcfghkfy = "SQLSubSSH";
            ${$GLOBALS["phxdmkklml"]} = "select * from conta_ssh where id_usuario='" . ${$GLOBALS["msuscpwahgm"]}["id_usuario"] . "'  ";
            ${$GLOBALS["phxdmkklml"]} = $conn->prepare(${$fcfghkfy});
            $SQLSubSSH->execute();
            if ($SQLSubSSH->rowCount() > 0) {
                while (${$GLOBALS["hjfntywhyldt"]} = $SQLSubSSH->fetch()) {
                    $GLOBALS["sbcvzrsecu"] = "SQLServidor";
                    $GLOBALS["fjegylizrapa"] = "SQLServidor";
                    $gxuuwshu = "row_ssh_sub";
                    $SQLServidor = "select * from servidor where id_servidor='" . ${$GLOBALS["hjfntywhyldt"]}["id_servidor"] . "'  ";
                    $GLOBALS["ovidaef"] = "SQLAcessoSSH";
                    $GLOBALS["nfhtvlowvngl"] = "row_user_sub";
                    $SQLServidor = $conn->prepare(${$GLOBALS["dehlfuwq"]});
                    $GLOBALS["xhmxsypooqe"] = "SQLAcessoSSH";
                    $SQLServidor->execute();
                    ${$GLOBALS["ktiflmtha"]} = $SQLServidor->fetch();
                    ${$GLOBALS["tfuvlzufy"]} = "";
                    ${$GLOBALS["ntgotbdmobc"]} = 0;
                    $vmmnhsaix = "SQLAcessoSSH";
                    $GLOBALS["lgxecefft"] = "row_ssh_sub";
                    if (${$GLOBALS["hjfntywhyldt"]}["status"] == 2) {
                        $GLOBALS["rydmbiijsx"] = "color";
                        $color = "bgcolor='#FF6347'";
                    }
                    $ndvfam = "servidor";
                    ${$GLOBALS["ovidaef"]} = "SELECT sum(acesso) AS quantidade  FROM conta_ssh where id_usuario_ssh='" . ${$gxuuwshu}["id_usuario_ssh"] . "'  ";
                    ${$GLOBALS["viynxvtpkl"]} = $conn->prepare(${$GLOBALS["viynxvtpkl"]});
                    $SQLAcessoSSH->execute();
                    ${$vmmnhsaix} = $SQLAcessoSSH->fetch();
                    ${$GLOBALS["ntgotbdmobc"]} += ${$GLOBALS["xhmxsypooqe"]}["quantidade"];
                    echo "<tr ";
                    echo ${$GLOBALS["tfuvlzufy"]};
                    echo ">\n<td>";
                    echo ${$GLOBALS["lgxecefft"]}["login"];
                    echo "</td>\n<td>";
                    echo ${$ndvfam}["nome"];
                    echo "</td>\n<td>";
                    echo ${$GLOBALS["ntgotbdmobc"]};
                    echo "</td>\n<td>";
                    echo ${$GLOBALS["nfhtvlowvngl"]}["login"];
                    echo "</td>\n</tr>\n";
                }
            }
        }
    }
}
echo "</table>\n</div>\n<!-- /.box-body -->\n</div>\n<!-- /.box -->\n</div>\n</div>\n</div>\n<!-- /.tab-pane -->\n<!-- /.tab-fatura -->\n<!--<div class=\"tab-pane\" id=\"fatura\">\n<div class=\"row\">\n<div class=\"col-lg-12\">\n<form class=\"form-horizontal\" role=\"perfil\" name=\"gerandofatura\" id=\"gerandofatura\" action=\"pages/usuario/gerarfatura_exe.php\" method=\"post\">\n<div class=\"form-group\"><br>\n<input type=\"hidden\" class=\"form-control\" id=\"usuarioid\" name=\"usuarioid\" value=\"";
echo $_GET["id_usuario"];
echo "\">\n<label for=\"exampleInputPassword1\">Tipo da Fatura</label>\n<select class=\"form-control\" name=\"tipofat\">\n";
if (${$GLOBALS["xclfxnhx"]}["tipo"] == "vpn") {
    echo "<option value='1'> Acesso VPN</option>";
}
echo "<option value='2'>Outros</option>\n";
if (${$GLOBALS["mjecnbgsu"]}["tipo"] == "revenda") {
    echo "<option value='1' selected=selected>Revenda</option>";
}
echo "</select>\n</div>\n<div class=\"form-group\">\n<label for=\"exampleInputPassword1\">Quantidade</label>\n<input type=\"number\" class=\"form-control\" id=\"qtd\" name=\"qtd\" value=\"1\" required>\n</div>\n<div class=\"form-group\">\n<label for=\"exampleInputPassword1\">Valor</label>\n<input type=\"number\" class=\"form-control\" id=\"valor\" name=\"valor\" value=\"5\" required>\n</div>\n<div class=\"form-group\">\n<label for=\"exampleInputPassword1\">Desconto</label>\n<input type=\"number\" class=\"form-control\" id=\"desconto\" name=\"desconto\" value=\"0\" required>\n</div>\n<div class=\"form-group\">\n<label for=\"exampleInputPassword1\">Vencimento</label>\n<input type=\"number\" class=\"form-control\" id=\"venc\" name=\"venc\" value=\"5\" required>\n</div>\n<div class=\"form-group\">\n<label for=\"exampleInputPassword1\">Descri\xc3\xa7\xc3\xa3o</label>\n<textarea class=\"form-control\" name=\"msg\" id=\"msg\" rows=\"3\" placeholder=\"Digite ...\" required></textarea>\n</div>\n";
if (${$GLOBALS["lsqkttok"]}["tipo"] == "revenda") {
    $ljepfejelnu = "SQLServidor2";
    echo "<div class=\"form-group\">\n<label for=\"exampleInputPassword1\">Servidor</label>\n<select class=\"form-control\" name=\"servidorid\">\n<option selected=selected>Servidores</option>\n";
    ${$GLOBALS["yoqibam"]} = "select * from servidor";
    ${$ljepfejelnu} = $conn->prepare(${$GLOBALS["yoqibam"]});
    $SQLServidor2->execute();
    if ($SQLServidor2->rowCount() > 0) {
        while (${$GLOBALS["uqybicev"]} = $SQLServidor2->fetch()) {
            $frefllttyb = "row22";
            $kfybekhfuvvj = "SQLAcessoServidor";
            $GLOBALS["kvcppypktr"] = "SQLAcessoServidor";
            ${$GLOBALS["ycagsttmtb"]} = "select * from acesso_servidor where id_servidor='" . $row22["id_servidor"] . "'  and  id_usuario = '" . $_GET["id_usuario"] . "'";
            ${$kfybekhfuvvj} = $conn->prepare(${$GLOBALS["kvcppypktr"]});
            $GLOBALS["tnjpgmqxb"] = "acc";
            $SQLAcessoServidor->execute();
            $acc = $SQLAcessoServidor->fetch();
            if ($SQLAcessoServidor->rowCount() > 0) {
                echo "<option value=\"";
                echo ${$GLOBALS["uqybicev"]}["id_servidor"];
                echo "\"> ";
                echo ${$GLOBALS["uqybicev"]}["ip_servidor"];
                $GLOBALS["nwwybndp"] = "acc";
                echo " - Acessos: ";
                echo $acc["qtd"];
                echo " - VAL: ";
                echo ${$GLOBALS["jrickzail"]}["validade"];
                echo " </option>\n";
            } else {
                echo "<option value=\"";
                $jcgcguki = "row22";
                echo $row22["id_servidor"];
                $cjpclvkk = "row22";
                echo "\"> ";
                echo ${$GLOBALS["uqybicev"]}["nome"];
                echo " - ";
                echo $row22["ip_servidor"];
                echo " - N\xc3\xa3o tem acesso </option>\n";
            }
        }
    }
    echo "</select>\n</div>\n";
} elseif (${$vccqdxmez}["tipo"] == "vpn") {
    $GLOBALS["drdpvmdx"] = "SQLServidor2";
    echo "<div class=\"form-group\">\n<label for=\"inputName\" for=\"exampleInputPassword1\">Contas SSH</label>\n<select class=\"form-control\" name=\"account\">\n<option value=\"outros\" selected=selected>Gerar em Outros</option>\n";
    $SQLServidor2 = "select * from conta_ssh where id_usuario='" . $_GET["id_usuario"] . "'";
    ${$GLOBALS["yoqibam"]} = $conn->prepare(${$GLOBALS["yoqibam"]});
    $SQLServidor2->execute();
    if ($SQLServidor2->rowCount() > 0) {
        $GLOBALS["qtvjninfjcu"] = "row22";
        while (${$GLOBALS["qtvjninfjcu"]} = $SQLServidor2->fetch()) {
            $GLOBALS["ozceztu"] = "dataconvcriado";
            $GLOBALS["iznhegab"] = "dia";
            $GLOBALS["wvhnxniyk"] = "dataconvcriado";
            $rgctmbc = "datacriado";
            ${$GLOBALS["pxfvlhiowoe"]} = ${$GLOBALS["uqybicev"]}["data_validade"];
            ${$rgctmbc} = ${$GLOBALS["pxfvlhiowoe"]};
            $GLOBALS["chklhohykj"] = "partes";
            $wibxsrjnell = "mes";
            ${$GLOBALS["ozceztu"]} = substr(${$GLOBALS["shklhg"]}, 0, 10);
            $wwvukbfi = "row22";
            ${$GLOBALS["fupfigljv"]} = explode("-", ${$GLOBALS["wvhnxniyk"]});
            ${$GLOBALS["xhscwttxtfc"]} = ${$GLOBALS["fupfigljv"]}[0];
            ${$GLOBALS["jigevfi"]} = ${$GLOBALS["fupfigljv"]}[1];
            ${$GLOBALS["iznhegab"]} = ${$GLOBALS["chklhohykj"]}[2];
            echo "<option value=\"";
            echo ${$GLOBALS["uqybicev"]}["id_usuario_ssh"];
            echo "\"> ";
            echo ${$wwvukbfi}["login"];
            echo " - Acessos: ";
            echo ${$GLOBALS["uqybicev"]}["acesso"];
            echo " - VAL: ";
            echo ${$GLOBALS["svgtgixzpjm"]};
            echo "/";
            echo ${$wibxsrjnell};
            echo " - ";
            echo ${$GLOBALS["xhscwttxtfc"]};
            echo " </option>\n";
        }
    }
    echo "</select>\n</div>\n<div class=\"form-group\">\n<label for=\"inputName\" for=\"exampleInputPassword1\">Servidor</label>\n<select class=\"form-control\" name=\"servidorid\">\n<option value=\"outros\" selected=selected>Outros (Tipo em outros Tbm)</option>\n";
    $GLOBALS["tpgqoxztepn"] = "SQLServidor2";
    ${$GLOBALS["yoqibam"]} = "select * from servidor";
    ${$GLOBALS["tpgqoxztepn"]} = $conn->prepare(${$GLOBALS["yoqibam"]});
    $SQLServidor2->execute();
    if ($SQLServidor2->rowCount() > 0) {
        $GLOBALS["gbyiyibow"] = "row22";
        while (${$GLOBALS["gbyiyibow"]} = $SQLServidor2->fetch()) {
            $GLOBALS["ymqwnp"] = "SQLcriados";
            $vdvrdrdggn = "SQLcriados";
            $xbhlhyqdh = "SQLcriados";
            $SQLcriados = "select * from conta_ssh where id_servidor='" . ${$GLOBALS["uqybicev"]}["id_servidor"] . "'";
            $GLOBALS["yhkssf"] = "criados";
            $SQLcriados = $conn->prepare($SQLcriados);
            $SQLcriados->execute();
            ${$GLOBALS["cazuhrc"]} = $SQLcriados->rowCount();
            echo "<option value=\"";
            echo ${$GLOBALS["uqybicev"]}["id_servidor"];
            echo "\"> ";
            echo ${$GLOBALS["uqybicev"]}["nome"];
            echo " - ";
            echo ${$GLOBALS["uqybicev"]}["ip_servidor"];
            echo " - Contas: ";
            echo ${$GLOBALS["yhkssf"]};
            echo "</option>\n";
        }
    }
    echo "</select>\n</div>\n";
}
echo "<div class=\"form-group\">\n<div class=\"col-sm-offset-2 col-sm-10\">\n<button type=\"submit\" class=\"btn btn-primary\">Gerar Fatura</button>\n</div>\n</div>\n</form>\n</div>\n</div>\n</div>-->\n</div>\n</div>\n<!-- /.tab-content -->\n</div>\n<!-- /.nav-tabs-custom -->\n</div>\n<!-- /.col -->\n</div>\n<!-- /.row -->\n</section>\n<!-- /.content -->\n";
