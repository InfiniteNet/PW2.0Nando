<?php

$GLOBALS["vvvnkphw"] = "criados";
$GLOBALS["rlwryq"] = "SQLcriados";
$GLOBALS["mofqtf"] = "ano";
$GLOBALS["pltmqfg"] = "dia";
$GLOBALS["lehrqewio"] = "mes";
$GLOBALS["cuovvycthz"] = "dataconvcriado";
$GLOBALS["szdgepkvsavk"] = "partes";
$GLOBALS["iprqweeu"] = "datacriado";
$GLOBALS["tfvomgvra"] = "data";
$GLOBALS["dzxcntfdwe"] = "acc";
$GLOBALS["sgyjjlyrb"] = "row22";
$GLOBALS["fheouvfrldse"] = "SQLServidor2";
$GLOBALS["bcutyvbtbgb"] = "row_ssh_sub";
$GLOBALS["mpsieuxbhjh"] = "SQLSubSSH";
$GLOBALS["tsqxpwv"] = "row_user_sub";
$GLOBALS["mvjwiab"] = "SQLUserSub";
$GLOBALS["vojxuwigj"] = "servidor";
$GLOBALS["jbsbmg"] = "color";
$GLOBALS["brwusphmzgw"] = "row_user";
$GLOBALS["hibforow"] = "stsd";
$GLOBALS["qivbqaos"] = "SQLUsuarioSSH";
$GLOBALS["qdjxqcnlhjta"] = "dias_acesso";
$GLOBALS["chxybbgbc"] = "diferenca";
$GLOBALS["ncdirljno"] = "data_validade";
$GLOBALS["ckqnjyq"] = "data_atual";
$GLOBALS["mrsokmegf"] = "acessos";
$GLOBALS["uvuuld"] = "row3";
$GLOBALS["tdqsxgw"] = "SQLUsuarioSub";
$GLOBALS["ziyopvwteo"] = "SQLAcessoSSH";
$GLOBALS["syqsvfehbcb"] = "contas";
$GLOBALS["peygxmpavb"] = "SQLsubservidores";
$GLOBALS["ymukphvqvwy"] = "SQLServidor";
$GLOBALS["sczgfyf"] = "SQLTotalUser";
$GLOBALS["xnbreceqdyjk"] = "row2";
$GLOBALS["ttycqtwpppn"] = "SQLAcessoServidor";
$GLOBALS["tjurjkiwhk"] = "checkv2";
$GLOBALS["jscfdmanp"] = "checkssh";
$GLOBALS["jrjigfe"] = "accessKEY";
$GLOBALS["kjveuoyhdxcn"] = "todossubrevendedores";
$GLOBALS["xugkbvvs"] = "total_servers_add";
$ukunba = "usuario";
$GLOBALS["vudkkgik"] = "sts";
$GLOBALS["qsspsbdnhbm"] = "usuario";
$GLOBALS["xvmtvcr"] = "total_ssh";
$GLOBALS["sfssqixkar"] = "total";
$GLOBALS["lqywuevabm"] = "SQLUsuarioSUB";
$GLOBALS["uumnrodwal"] = "total_ssh_sub";
$GLOBALS["tdcdxppqwqp"] = "quantidade_USUARIOS_subs";
$GLOBALS["bymbfynbmsl"] = "usuario";
$GLOBALS["prxzbtdvv"] = "SQLSubUSUARIOSsubs";
$GLOBALS["uxmmglexcm"] = "sshsubs";
$GLOBALS["omuykbtvgsc"] = "subrow";
$GLOBALS["lgbyhcztvdc"] = "SQLSubSSHsubs";
$GLOBALS["tijjcczeud"] = "SQLSubrevendedores";
$GLOBALS["opzypkwtffk"] = "SQLUsuarioSSH";
$GLOBALS["hqmcvjmgkptx"] = "avatarusu";
$ncpqcqwi = "usuario";
$GLOBALS["bjgoumoy"] = "SQLUsuario";
$GLOBALS["quqmydtud"] = "diretorio";
$GLOBALS["qvpdeh"] = "id_usuario";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"../../../app-assets/css/plugins/extensions/ext-component-sweet-alerts.css\">\n<script src=\"../../../app-assets/js/scripts/extensions/ext-component-sweet-alerts.js\"></script>\n<script src=\"../../../app-assets/vendors/js/extensions/sweetalert2.all.min.js\"></script>\n";
$GLOBALS["drhzhxypmwp"] = "usuario";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/perfil.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
protegePagina("donoadmin");
$GLOBALS["aopyzaj"] = "usuario";
$GLOBALS["ufjhuwf"] = "usuario";
if (isset($_GET["id_usuario"])) {
    $GLOBALS["bgkuvgvdmwu"] = "SQLUsuarioSSH";
    $GLOBALS["vscebewhuli"] = "avatarusu";
    $lefhoxofwbei = "avatarusu";
    $GLOBALS["gtqfofdbp"] = "avatarusu";
    $sqqmxw = "id_usuario";
    $GLOBALS["expjpdn"] = "usuario";
    $GLOBALS["ygbwohd"] = "totalserversadd";
    $GLOBALS["fxnvkojjyq"] = "avatarusu";
    ${$GLOBALS["qvpdeh"]} = $_GET["id_usuario"];
    $GLOBALS["ifylbgg"] = "avatarusu";
    ${$GLOBALS["quqmydtud"]} = "../../admin/home.php?page=usuario/perfil&id_usuario=" . ${$sqqmxw};
    $yugqzkcn = "usuario";
    $GLOBALS["rrplswvgs"] = "SQLUsuarioSSH";
    $bxkdivk = "id_usuario";
    ${$GLOBALS["bjgoumoy"]} = "select * from usuario WHERE id_usuario = '" . $id_usuario . "'  ";
    $GLOBALS["smlqrinnns"] = "id_usuario";
    $njsebxbni = "totalserversadd";
    $afmsknua = "SQLUsuario";
    $SQLUsuario = $conn->prepare(${$GLOBALS["bjgoumoy"]});
    $iguxxewntios = "SQLSubrevendedores";
    $GLOBALS["ujclkvgqfrf"] = "todossubrevendedores";
    $bwwusvuo = "usuario";
    $SQLUsuario->execute();
    $usuario = $SQLUsuario->fetch();
    if ($SQLUsuario->rowCount() <= 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"O usu\xc3\xa1rio n\xc3\xa3o existe!\");";
        echo "window.location=\"home.php?page=usuario/listar\";";
        echo "</script>";
        exit;
    }
    $GLOBALS["kqcnmx"] = "totalserversadd";
    $yfswqfomdj = "total_ssh";
    $GLOBALS["gdnpgtm"] = "total_servers_add";
    $totalserversadd = "select * from acesso_servidor WHERE id_usuario = '" . ${$yugqzkcn}["id_usuario"] . "' ";
    ${$GLOBALS["ygbwohd"]} = $conn->prepare(${$njsebxbni});
    $GLOBALS["ubxwiyembt"] = "usuario";
    $totalserversadd->execute();
    ${$GLOBALS["gdnpgtm"]} = $totalserversadd->rowCount();
    switch (${$GLOBALS["expjpdn"]}["avatar"]) {
        case 1:
            ${$GLOBALS["hqmcvjmgkptx"]} = "avatar1.png";
            break;
        case 2:
            ${$GLOBALS["ifylbgg"]} = "avatar2.png";
            break;
        case 3:
            ${$GLOBALS["gtqfofdbp"]} = "avatar3.png";
            break;
        case 4:
            ${$GLOBALS["vscebewhuli"]} = "avatar4.png";
            break;
        case 5:
            ${$lefhoxofwbei} = "avatar5.png";
            break;
        default:
            ${$GLOBALS["fxnvkojjyq"]} = "boxed-bg.png";
            break;
    }
    ${$GLOBALS["rrplswvgs"]} = "select * from conta_ssh WHERE id_usuario = '" . ${$GLOBALS["qvpdeh"]} . "' ";
    ${$GLOBALS["bgkuvgvdmwu"]} = $conn->prepare(${$GLOBALS["opzypkwtffk"]});
    $SQLUsuarioSSH->execute();
    ${$yfswqfomdj} = $SQLUsuarioSSH->rowCount();
    ${$iguxxewntios} = "select * from usuario WHERE id_mestre = '" . ${$GLOBALS["smlqrinnns"]} . "' and tipo='revenda'";
    ${$GLOBALS["tijjcczeud"]} = $conn->prepare(${$GLOBALS["tijjcczeud"]});
    $SQLSubrevendedores->execute();
    $GLOBALS["hhwycoz"] = "usuario";
    ${$GLOBALS["ujclkvgqfrf"]} = $SQLSubrevendedores->rowCount();
    if ($SQLSubrevendedores->rowCount() > 0) {
        $GLOBALS["ubsatebopp"] = "subrow";
        while (${$GLOBALS["ubsatebopp"]} = $SQLSubrevendedores->fetch()) {
            $GLOBALS["zonncycfex"] = "SQLSubSSHsubs";
            $GLOBALS["vqllnjkhvgyo"] = "quantidade_ssh_subs";
            $quantidade_ssh_subs = 0;
            ${$GLOBALS["lgbyhcztvdc"]} = "select * from conta_ssh WHERE id_usuario = '" . ${$GLOBALS["omuykbtvgsc"]}["id_usuario"] . "'  ";
            ${$GLOBALS["zonncycfex"]} = $conn->prepare(${$GLOBALS["lgbyhcztvdc"]});
            $SQLSubSSHsubs->execute();
            ${$GLOBALS["uxmmglexcm"]} = $SQLSubSSHsubs->rowCount();
            $lwqrvmsv = "sshsubs132";
            $mlelwblz = "SQLSubUSUARIOSsubs";
            ${$GLOBALS["prxzbtdvv"]} = "select * from usuario WHERE id_mestre = '" . ${$GLOBALS["omuykbtvgsc"]}["id_usuario"] . "' ";
            ${$mlelwblz} = $conn->prepare(${$GLOBALS["prxzbtdvv"]});
            $SQLSubUSUARIOSsubs->execute();
            ${$GLOBALS["tdcdxppqwqp"]} += $SQLSubUSUARIOSsubs->rowCount();
            ${$lwqrvmsv} = $SQLSubUSUARIOSsubs->rowCount();
        }
    }
    ${$GLOBALS["uumnrodwal"]} = 0;
    if (${$GLOBALS["ubxwiyembt"]}["tipo"] == "revenda") {
        $GLOBALS["grttmmquw"] = "total_user";
        $GLOBALS["uvjbpswy"] = "SQLUsuarioSUB";
        ${$GLOBALS["lqywuevabm"]} = "select * from usuario WHERE id_mestre = '" . $_GET["id_usuario"] . "'";
        ${$GLOBALS["uvjbpswy"]} = $conn->prepare(${$GLOBALS["lqywuevabm"]});
        $SQLUsuarioSUB->execute();
        ${$GLOBALS["grttmmquw"]} = $SQLUsuarioSUB->rowCount();
        if ($SQLUsuarioSUB->rowCount() > 0) {
            $tomncz = "total_ssh_sub";
            $GLOBALS["nptdhn"] = "row_sub";
            while (${$GLOBALS["nptdhn"]} = $SQLUsuarioSUB->fetch()) {
                $pszlblb = "row_sub";
                ${$GLOBALS["opzypkwtffk"]} = "select * from conta_ssh WHERE id_usuario = '" . $row_sub["id_usuario"] . "' ";
                ${$GLOBALS["opzypkwtffk"]} = $conn->prepare(${$GLOBALS["opzypkwtffk"]});
                $SQLUsuarioSSH->execute();
                ${$GLOBALS["uumnrodwal"]} += $SQLUsuarioSSH->rowCount();
            }
            ${$GLOBALS["xvmtvcr"]} += ${$tomncz};
        }
    }
    if (${$GLOBALS["hhwycoz"]}["id_mestre"] != 0) {
        ${$GLOBALS["bjgoumoy"]} = "select * from usuario WHERE id_usuario = '" . ${$GLOBALS["qsspsbdnhbm"]}["id_mestre"] . "'  ";
        $nrsiqtnklst = "usuario_mestre";
        ${$GLOBALS["bjgoumoy"]} = $conn->prepare(${$GLOBALS["bjgoumoy"]});
        $SQLUsuario->execute();
        ${$nrsiqtnklst} = $SQLUsuario->fetch();
    }
} else {
    echo "<script type=\"text/javascript\">";
    echo "alert(\"Preencha todos os campos!\");";
    echo "window.location=\"home.php?page=usuario/listar\";";
    echo "</script>";
}
$kncwdrvdkjef = "usuario";
$zywyqsna = "checkssh";
if (${$GLOBALS["aopyzaj"]}["ativo"] == 2) {
    ${$GLOBALS["vudkkgik"]} = "danger";
} else {
    $GLOBALS["mpqjqukwdym"] = "sts";
    $sts = "info";
}
if (${$ncpqcqwi}["ativo"] == 2) {
    echo "<center>\n<div class='alert alert-danger col-12 col-md-12' role='alert'>\n<div class='alert-body d-center align-items-center'>\n<span>CONTA SUSPENSA</span>\n</div>\n</div>\n</center>\n";
}
echo "<div class=\"row\">\n<div class=\"col-lg-6 col-xlg-6 col-md-6\">\n<div class=\"card border-";
echo ${$GLOBALS["vudkkgik"]};
echo "\">\n<div class=\"card-body little-profile text-center\">\n<div class=\"pro-img\">\n<img class=\"img-circle\" src=\"../app-assets/images/avatars/";
echo ${$GLOBALS["hqmcvjmgkptx"]};
echo "\" height=\"60\" width=\"60\" alt=\"user\" />\n</div>\n<h3 class=\"profile-username text-center\">";
echo ${$GLOBALS["qsspsbdnhbm"]}["nome"];
echo "</h3>\n";
if (${$GLOBALS["ufjhuwf"]}["tipo"] == "vpn") {
    echo "<p class=\"text-muted text-center\">Usu\xc3\xa1rio SSH</p>\n";
} elseif (${$GLOBALS["qsspsbdnhbm"]}["tipo"] == "revenda") {
    $smlxwh = "usuario";
    if ($usuario["subrevenda"] == "sim") {
        $GLOBALS["qrisuwf"] = "usuario";
        echo "<p class=\"text-primary text-center\">Sub-Revendedor [";
        if ($usuario["id_mestre"] != 0) {
            $GLOBALS["ofwgqxdmwb"] = "usuario_mestre";
            $GLOBALS["puttkvjjlyrk"] = "usuario_mestre";
            echo "<a class=\"text-warning\" href=\"home.php?page=usuario/perfil&id_usuario=\n";
            echo $usuario_mestre["id_usuario"];
            echo "\">";
            echo $usuario_mestre["nome"];
            echo "</a>]</p>\n";
        } else {
            echo "<a class=\"text-warning\">Sistema</a>]</p>\n";
        }
    } else {
        echo "<p class=\"text-primary text-center\">Revendedor [";
        if (${$GLOBALS["qsspsbdnhbm"]}["id_mestre"] != 0) {
            $GLOBALS["ihidglu"] = "usuario_mestre";
            echo "<a class=\"text-warning\" href=\"home.php?page=usuario/perfil&id_usuario=\n";
            echo $usuario_mestre["id_usuario"];
            $GLOBALS["ybwpaojugir"] = "usuario_mestre";
            echo "\">";
            echo $usuario_mestre["nome"];
            echo "</a>]</p>\n";
        } else {
            echo "<a class=\"text-warning\">Sistema</a>]</p>\n";
        }
    }
}
echo "<ul class=\"list-group list-group-unbordered\">\n";
$GLOBALS["uhsjenbql"] = "total_servers_add";
if (${$GLOBALS["qsspsbdnhbm"]}["tipo"] == "revenda" and ${$GLOBALS["xugkbvvs"]} > 0) {
    echo "<li class=\"list-group-item\">\n<b>Contas SSH</b> <a class=\"badge badge-pill bg-info float-right text-white\">";
    echo ${$GLOBALS["xvmtvcr"]};
    $rpbkoy = "usuario";
    echo "</a>\n</li>\n";
    if ($usuario["subrevenda"] == "nao") {
        echo "<li class=\"list-group-item\">\n<b>Contas SSH das revendas</b> <a class=\"badge badge-pill bg-danger float-right text-white\">";
        echo ${$GLOBALS["uumnrodwal"]};
        echo "</a>\n</li>\n";
    }
    echo "<li class=\"list-group-item\">\n<b>Servidores adicionados</b>\n<a class=\"badge badge-pill bg-warning float-right text-white\">";
    $wogkcdopvjt = "total_servers_add";
    echo $total_servers_add;
    echo "</a>\n</li>\n";
    if (${$GLOBALS["qsspsbdnhbm"]}["subrevenda"] == "nao") {
        echo "<li class=\"list-group-item\">\n<b>Revendas</b> <a class=\"badge badge-pill bg-warning float-right text-white\">";
        echo ${$GLOBALS["kjveuoyhdxcn"]};
        echo "</a>\n</li>\n<!--<li class=\"list-group-item\">\n";
        if (${$GLOBALS["tdcdxppqwqp"]} > 0) {
            $ugzkfkmpypl = "quantidade_USUARIOS_subs";
            echo "<b>Usu\xc3\xa1rios dos Sub</b> <a class=\"badge badge-pill bg-info float-right text-white\">";
            echo $quantidade_USUARIOS_subs;
            echo "</a>\n";
        } else {
            echo "<b>Usu\xc3\xa1rios dos Sub</b> <a class=\"badge badge-pill bg-info float-right text-white\">0</a>\n";
        }
        echo "</li>-->\n";
    }
}
echo "</ul>\n<script type=\"text/javascript\">\nfunction excluir_usuario() {\nSwal.fire({\ntitle: 'Excluir',\ntext: \"Realmente deseja excluir?\",\nicon: 'warning',\nshowCancelButton: true,\nconfirmButtonColor: '#28c76f',\ncancelButtonColor: '#d33',\nconfirmButtonText: 'Sim',\ncancelButtonText: 'Nao'\n}).then((result) => {\nif (result.isConfirmed) {\nwindow.location.href = '../pages/system/funcoes.usuario.php?&op=deletar&id_usuario=";
echo ${$GLOBALS["qsspsbdnhbm"]}["id_usuario"];
echo "&diretorio=../../admin/home.php?page=usuario/revenda&owner=";
echo ${$GLOBALS["jrjigfe"]};
echo "'\n}\n})\n}\nfunction suspende_usuario() {\nSwal.fire({\ntitle: 'Suspender',\ntext: \"Realmente deseja suspender?\",\nicon: 'warning',\nshowCancelButton: true,\nconfirmButtonColor: '#28c76f',\ncancelButtonColor: '#d33',\nconfirmButtonText: 'Sim',\ncancelButtonText: 'Nao'\n}).then((result) => {\nif (result.isConfirmed) {\nwindow.location.href = '../pages/system/funcoes.usuario.php?&id_usuario=";
echo ${$kncwdrvdkjef}["id_usuario"];
echo "&diretorio=../../admin/home.php?page=usuario/listar&owner=";
echo ${$GLOBALS["jrjigfe"]};
$gvoqtbjmyly = "SQLUsuarioSSH";
echo "&op=suspender'\n}\n})\n}\n</script>\n<br>\n<ul class=\"list-group\">\n";
if (${$GLOBALS["qsspsbdnhbm"]}["tipo"] == "revenda" and ${$GLOBALS["uhsjenbql"]} == 0) {
    echo "<li class=\"list-group mb-1\">\n<div class=\"d-grid col-lg-12 col-md-12 mb-1 mb-lg-0\">\n<a href=\"?page=usuario/addservidor\" class=\"btn btn-success waves-effect waves-float waves-light\"><i data-feather='server'></i>ADICIONAR SERVIDOR</a>\n</div>\n</li>\n";
}
echo "<!-- <li class=\"list-group mb-1\">\n<div class=\"d-grid col-lg-12 col-md-12 mb-1 mb-lg-0\">\n<a href=\"../pages/system/funcoes.usuario.php?&id_usuario=";
$GLOBALS["dprupuecosj"] = "usuario";
echo ${$GLOBALS["bymbfynbmsl"]}["id_usuario"];
echo "&diretorio=../../admin/home.php?page=usuario/listar&owner=";
echo ${$GLOBALS["jrjigfe"]};
echo "&op=senha\" class=\"btn btn-primary waves-effect waves-float waves-light\"><i data-feather='key'></i>REENVIAR SENHA</a>\n</div>\n</li> -->\n<li class=\"list-group mb-1\">\n";
if ($usuario["ativo"] == 1) {
    echo "<div class=\"d-grid col-lg-12 col-md-12 mb-1 mb-lg-0\">\n<a onclick=\"suspende_usuario()\" class=\"btn btn-warning waves-effect waves-float waves-light\"><i data-feather='user-x'></i>SUSPENDER TUDO</a>\n</div>\n";
} else {
    echo "<div class=\"d-grid col-lg-12 col-md-12 mb-1 mb-lg-0\">\n<a href=\"../pages/system/funcoes.usuario.php?&id_usuario=";
    echo ${$GLOBALS["qsspsbdnhbm"]}["id_usuario"];
    echo "&diretorio=../../admin/home.php?page=usuario/listar&owner=";
    echo ${$GLOBALS["jrjigfe"]};
    echo "&op=ususpender\" class=\"btn btn-success waves-effect waves-float waves-light\"><i data-feather='user-check'></i>REATIVAR TUDO</a>\n</div>\n";
}
$vuggbvoriij = "total_servers_add";
echo "</li>\n<li class=\"list-group mb-1\">\n<div class=\"d-grid col-lg-12 col-md-12 mb-1 mb-lg-0\">\n<a onclick=\"excluir_usuario()\" class=\"btn btn-danger waves-effect waves-float waves-light\"><i data-feather='trash'></i>DELETAR TUDO</a>\n</div>\n</li>\n</ul>\n</div>\n</div>\n</div>\n<!-- /.col -->\n<div class=\"col-md-6\">\n<div class=\"card border-primary\">\n<div class=\"card-body p-b-0\">\n<h4 class=\"card-title\"><i class=\"fa fa-edit\"></i>Gerenciar Revenda</i></h4>\n<!-- Nav tabs -->\n<ul class=\"nav nav-tabs customtab\" role=\"tablist\">\n<li class=\"nav-item\"> <a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#activity\" role=\"tab\" aria-selected=\"true\"><i data-feather=\"info\"></i>Editar</span></a> </li>\n";
$moszglxdho = "usuario";
if (${$GLOBALS["drhzhxypmwp"]}["tipo"] == "revenda" and $total_servers_add > 0) {
    echo "<li class=\"nav-item\"> <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#timeline\" role=\"tab\" aria-selected=\"true\"><i data-feather=\"server\"></i>Servidores</span></a> </li>\n";
    if (${$GLOBALS["qsspsbdnhbm"]}["subrevenda"] == "nao") {
        echo "<li class=\"nav-item\"> <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#users\" role=\"tab\" aria-selected=\"true\"><i data-feather=\"users\"></i>Revendas</span></a> </li>\n";
    }
    echo "<li class=\"nav-item\"> <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#ssh\" role=\"tab\" aria-selected=\"true\"><i data-feather=\"shield\"></i>Contas SSH</span></a> </li>\n";
}
if (${$GLOBALS["qsspsbdnhbm"]}["subrevenda"] == "nao") {
    echo "<!--<li class=\"nav-item\"> <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#fatura\" role=\"tab\" aria-selected=\"true\"><i data-feather=\"money\"></i>Gerar Fatura</span></a> </li>-->\n";
}
echo "</ul>\n<div class=\"tab-content\">\n<div class=\"active tab-pane\" id=\"activity\">\n<form class=\"form-horizontal\" role=\"perfil\" name=\"perfil\" id=\"perfil\" action=\"pages/usuario/editar_exe.php\" method=\"post\">\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"first-name-icon\">Nome</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather=\"user\"></i></span>\n<input type=\"text\" class=\"form-control\" minlength=\"4\" maxlength=\"20\" id=\"nome\" name=\"nome\" value=\"";
echo ${$GLOBALS["qsspsbdnhbm"]}["nome"];
echo "\">\n</div>\n</div>\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"first-name-icon\">Usu\xc3\xa1rio</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather=\"user\"></i></span>\n<input type=\"text\" class=\"form-control\" disabled value=\"";
echo ${$GLOBALS["qsspsbdnhbm"]}["login"];
$jviddvbn = "usuario";
echo "\">\n<input type=\"hidden\" class=\"form-control\" id=\"idusuario\" name=\"idusuario\" value=\"";
echo ${$ukunba}["id_usuario"];
echo "\">\n</div>\n</div>\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"first-name-icon\">Senha</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather=\"key\"></i></span>\n<input type=\"password\" class=\"form-control\" minlength=\"4\" maxlength=\"10\" id=\"senha\" name=\"senha\" value=\"";
echo $usuario["senha"];
echo "\">\n</div>\n</div>\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"first-name-icon\">Email</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather=\"mail\"></i></span>\n<input type=\"email\" class=\"form-control\" minlength=\"4\" maxlength=\"40\" id=\"email\" name=\"email\" value=\"";
echo ${$moszglxdho}["email"];
echo "\">\n</div>\n</div>\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"first-name-icon\">Celular</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather=\"smartphone\"></i></span>\n<input type=\"text\" class=\"form-control\" id=\"celular\" minlength=\"10\" maxlength=\"11\" name=\"celular\" value=\"";
echo ${$GLOBALS["qsspsbdnhbm"]}["celular"];
echo "\">\n</div>\n</div>\n<div class=\"mb-2\">\n<label class=\"form-label\" for=\"first-name-icon\">Data do cadastro</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather=\"calendar\"></i></span>\n<input type=\"text\" class=\"form-control\" disabled value=\"";
$qewcffk = "usuario";
echo ${$GLOBALS["qsspsbdnhbm"]}["data_cadastro"];
echo "\">\n</div>\n</div>\n";
if (${$GLOBALS["qsspsbdnhbm"]}["permitir_demo"] == 0) {
    ${$GLOBALS["jscfdmanp"]} = "checked";
}
if (${$qewcffk}["permitir_demo"] == 1) {
    ${$GLOBALS["tjurjkiwhk"]} = "checked";
}
echo "<div class=\"mb-2\">\n<div class=\"row custom-options-checkable g-2\">\n<div class=\"col-md-6\">\n<input class=\"custom-option-item-check\" type=\"radio\" name=\"acesso\" id=\"customOptionsCheckableRadiosWithIcon2\" value=\"0\" ";
echo ${$zywyqsna};
echo " />\n<label class=\"custom-option-item text-center text-center p-1\" for=\"customOptionsCheckableRadiosWithIcon2\">\n<i data-feather=\"shield\" class=\"font-large-1 mb-75\"></i>\n<span class=\"custom-option-item-title h4 d-block\">ACESSO SSH</span>\n<small>Ele e os revendedores poder\xc3\xa1 criar apenas contas ssh</small>\n</label>\n</div>\n<div class=\"col-md-6\">\n<input class=\"custom-option-item-check\" type=\"radio\" name=\"acesso\" id=\"customOptionsCheckableRadiosWithIcon3\" value=\"1\" ";
echo ${$GLOBALS["tjurjkiwhk"]};
echo " />\n<label class=\"custom-option-item text-center p-1\" for=\"customOptionsCheckableRadiosWithIcon3\">\n<i data-feather=\"link\" class=\"font-large-1 mb-75\"></i>\n<span class=\"custom-option-item-title h4 d-block\">ACESSO SSH E V2RAY</span>\n<small>Ele e os revendedores poder\xc3\xa1 criar contas ssh e v2ray</small>\n</label>\n</div>\n</div>\n</div>\n<div class=\"text-center mb-1\">\n<button type=\"submit\" class=\"btn btn-success\">Alterar Dados</button>\n</div>\n</form>\n</div>\n<!-- /.tab-pane -->\n";
if (${$GLOBALS["qsspsbdnhbm"]}["tipo"] == "revenda") {
    $GLOBALS["ypivaef"] = "SQLUsuarioSUB";
    $lbsmbws = "SQLAcessoServidor";
    echo "<div class=\" tab-pane\" id=\"timeline\">\n<div class=\"row\">\n<div class=\"col-lg-12\">\n<div class=\"box box-primary\">\n<!-- /.box-header -->\n<div class=\"box-body table-responsive no-padding\">\n<table id=\"example\" class=\"table table-hover\">\n<tr>\n<th>Servidor</th>\n";
    if (${$GLOBALS["qsspsbdnhbm"]}["subrevenda"] == "nao") {
        echo "<th>Limite (fora revenda)</th>\n";
    } else {
        echo "<th>Limite</th>\n";
    }
    echo "<th>Validade</th>\n";
    if (${$GLOBALS["qsspsbdnhbm"]}["subrevenda"] == "nao") {
        echo "<th>Revendas</th>\n";
    }
    $mjyuzwbgh = "SQLAcessoServidor";
    $GLOBALS["eodbmtokd"] = "SQLUsuarioSUB";
    echo "<th>Contas SSH</th>\n<th>Op\xc3\xa7\xc3\xb5es</th>\n</tr>\n";
    $SQLAcessoServidor = "select * from acesso_servidor where id_usuario='" . $_GET["id_usuario"] . "'  ";
    ${$lbsmbws} = $conn->prepare(${$GLOBALS["ttycqtwpppn"]});
    $SQLAcessoServidor->execute();
    if ($SQLAcessoServidor->rowCount() > 0) {
        while (${$GLOBALS["xnbreceqdyjk"]} = $SQLAcessoServidor->fetch()) {
            $wjuoxqivnw = "SQLTotalUser";
            $GLOBALS["rpnjdrpdm"] = "SQLAcessoSSH";
            $doxdklncv = "total_user";
            $GLOBALS["tycupjqpg"] = "total_subservers";
            $klsmsyxvgcyk = "SQLTotalUser";
            $GLOBALS["dkguywult"] = "SQLServidor";
            $GLOBALS["ogiqfejgf"] = "SQLsubservidores";
            $SQLTotalUser = "select * from usuario WHERE id_usuario = '" . $_GET["id_usuario"] . "' ";
            $SQLTotalUser = $conn->prepare(${$GLOBALS["sczgfyf"]});
            $fgpfwriji = "SQLServidor";
            $SQLTotalUser->execute();
            $GLOBALS["ljlqvm"] = "contas";
            $total_user = $SQLTotalUser->rowCount();
            $SQLServidor = "select * from servidor where id_servidor = '" . ${$GLOBALS["xnbreceqdyjk"]}["id_servidor"] . "'";
            $GLOBALS["ciascqzr"] = "SQLUsuarioSSH";
            ${$GLOBALS["ymukphvqvwy"]} = $conn->prepare($SQLServidor);
            $SQLServidor->execute();
            $GLOBALS["qjbizf"] = "acessos";
            $GLOBALS["yrdyktnnqz"] = "row2";
            ${$GLOBALS["peygxmpavb"]} = "select * from acesso_servidor WHERE id_servidor_mestre = '" . ${$GLOBALS["xnbreceqdyjk"]}["id_acesso_servidor"] . "'";
            ${$GLOBALS["ogiqfejgf"]} = $conn->prepare(${$GLOBALS["peygxmpavb"]});
            $ucsdirfbc = "acessos";
            $GLOBALS["wkbcckke"] = "row2";
            $SQLsubservidores->execute();
            $GLOBALS["kfoesp"] = "SQLAcessoSSH";
            ${$GLOBALS["tycupjqpg"]} = $SQLsubservidores->rowCount();
            ${$GLOBALS["syqsvfehbcb"]} = 0;
            ${$GLOBALS["qjbizf"]} = 0;
            ${$GLOBALS["opzypkwtffk"]} = "select * from conta_ssh WHERE id_servidor = '" . ${$GLOBALS["yrdyktnnqz"]}["id_servidor"] . "'\nand id_usuario='" . $_GET["id_usuario"] . "'  ";
            ${$GLOBALS["ciascqzr"]} = $conn->prepare(${$GLOBALS["opzypkwtffk"]});
            $SQLUsuarioSSH->execute();
            ${$GLOBALS["ljlqvm"]} += $SQLUsuarioSSH->rowCount();
            ${$GLOBALS["ziyopvwteo"]} = "SELECT sum(acesso) AS quantidade  FROM conta_ssh where id_servidor = '" . ${$GLOBALS["wkbcckke"]}["id_servidor"] . "'  and id_usuario='" . $_GET["id_usuario"] . "' ";
            ${$GLOBALS["kfoesp"]} = $conn->prepare(${$GLOBALS["rpnjdrpdm"]});
            $SQLAcessoSSH->execute();
            ${$GLOBALS["ziyopvwteo"]} = $SQLAcessoSSH->fetch();
            ${$ucsdirfbc} += ${$GLOBALS["ziyopvwteo"]}["quantidade"];
            ${$GLOBALS["tdqsxgw"]} = "select * from usuario WHERE id_mestre = '" . $_GET["id_usuario"] . "'";
            ${$GLOBALS["tdqsxgw"]} = $conn->prepare(${$GLOBALS["tdqsxgw"]});
            $SQLUsuarioSub->execute();
            if ($SQLUsuarioSub->rowCount() > 0) {
                $GLOBALS["bxkrbhw"] = "row3";
                while (${$GLOBALS["bxkrbhw"]} = $SQLUsuarioSub->fetch()) {
                    $ytnsmymexc = "contas";
                    $GLOBALS["ronkjw"] = "SQLAcessoSSH";
                    ${$GLOBALS["opzypkwtffk"]} = "select * from conta_ssh WHERE id_servidor = '" . ${$GLOBALS["xnbreceqdyjk"]}["id_servidor"] . "'\nand id_usuario='" . ${$GLOBALS["uvuuld"]}["id_usuario"] . "'  ";
                    ${$GLOBALS["opzypkwtffk"]} = $conn->prepare(${$GLOBALS["opzypkwtffk"]});
                    $SQLUsuarioSSH->execute();
                    $ksggdll = "SQLAcessoSSH";
                    $GLOBALS["irbskktg"] = "SQLAcessoSSH";
                    $hrqoiuoqou = "row2";
                    ${$ytnsmymexc} += $SQLUsuarioSSH->rowCount();
                    ${$GLOBALS["ziyopvwteo"]} = "SELECT sum(acesso) AS quantidade  FROM conta_ssh where id_servidor = '" . ${$hrqoiuoqou}["id_servidor"] . "'  and id_usuario='" . ${$GLOBALS["uvuuld"]}["id_usuario"] . "' ";
                    ${$GLOBALS["ronkjw"]} = $conn->prepare(${$GLOBALS["ziyopvwteo"]});
                    $SQLAcessoSSH->execute();
                    ${$ksggdll} = $SQLAcessoSSH->fetch();
                    ${$GLOBALS["mrsokmegf"]} += ${$GLOBALS["irbskktg"]}["quantidade"];
                }
            }
            if ($SQLServidor->rowCount() > 0) {
                $GLOBALS["qxouosdsmg"] = "row3";
                while (${$GLOBALS["qxouosdsmg"]} = $SQLServidor->fetch()) {
                    $aecmwxnuc = "row3";
                    $hqfnupztjcn = "qtd_srv";
                    $qtd_srv = 0;
                    $GLOBALS["bqjgsuhdhrkv"] = "data_validade";
                    ${$GLOBALS["ckqnjyq"]} = date("Y-m-d H:i:s");
                    $GLOBALS["pmlpkluo"] = "dias_acesso";
                    ${$GLOBALS["bqjgsuhdhrkv"]} = ${$GLOBALS["qsspsbdnhbm"]}["validade"];
                    if (${$GLOBALS["ncdirljno"]} > ${$GLOBALS["ckqnjyq"]}) {
                        $rpdxtyr = "data_atual";
                        ${$GLOBALS["chxybbgbc"]} = strtotime(${$GLOBALS["ncdirljno"]}) - strtotime($data_atual);
                        ${$GLOBALS["qdjxqcnlhjta"]} = floor(${$GLOBALS["chxybbgbc"]} / 86400);
                    } else {
                        $tyuxvcnwn = "dias_acesso";
                        $dias_acesso = 0;
                    }
                    if (${$GLOBALS["qdjxqcnlhjta"]} > 10) {
                        $zegdfkoa = "stsd";
                        $stsd = "info";
                    } elseif (${$GLOBALS["pmlpkluo"]} == 0) {
                        ${$GLOBALS["hibforow"]} = "danger";
                    } else {
                        ${$GLOBALS["hibforow"]} = "warning";
                    }
                    $otgnwprw = "acessos";
                    echo "<tr>\n<td>";
                    echo ${$aecmwxnuc}["nome"];
                    $GLOBALS["nhvmlrw"] = "row2";
                    echo "</td>\n<td>";
                    echo $row2["qtd"];
                    echo "</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 5px;\">\n<span class=\"label label-primary pull-left\">\n";
                    if (${$GLOBALS["qdjxqcnlhjta"]} > 1) {
                        echo "<span class=\"badge badge-light-";
                        $GLOBALS["qashihdcty"] = "stsd";
                        echo $stsd;
                        echo "\">";
                        $ofdjsvmhqohu = "dias_acesso";
                        echo $dias_acesso;
                        echo "<b> dias</b></span>\n";
                    } else {
                        $GLOBALS["xkwqlsut"] = "stsd";
                        echo "<span class=\"badge badge-light-";
                        echo $stsd;
                        $GLOBALS["jjjdmfpvoby"] = "dias_acesso";
                        echo "\">";
                        echo $dias_acesso;
                        echo "<b> dia</b></span>\n";
                    }
                    echo "</span>\n</span>\n</td>\n";
                    if (${$GLOBALS["qsspsbdnhbm"]}["subrevenda"] == "nao") {
                        echo "<td>";
                        echo ${$GLOBALS["kjveuoyhdxcn"]};
                        echo "</td>\n";
                    }
                    echo "<td>";
                    echo ${$GLOBALS["syqsvfehbcb"]};
                    echo "</td>\n<!--<td>";
                    echo ${$otgnwprw};
                    $GLOBALS["lmebcutqmct"] = "row2";
                    echo "</td>-->\n<td>\n<script>\nfunction apaga_tudo";
                    echo $row2["id_acesso_servidor"];
                    echo "() {\nSwal.fire({\ntitle: 'Remover Servidor',\ntext: \"Tamb\xc3\xa9m sera removido o servidor dos revendedores dele, Realmente deseja remover ?\",\nicon: 'warning',\nshowCancelButton: true,\nconfirmButtonColor: '#28c76f',\ncancelButtonColor: '#d33',\nconfirmButtonText: 'Sim',\ncancelButtonText: 'Nao'\n}).then((result) => {\nif (result.isConfirmed) {\nwindow.location.href = 'pages/usuario/remover_servidor.php?&id_acesso=";
                    echo ${$GLOBALS["xnbreceqdyjk"]}["id_acesso_servidor"];
                    echo "'\n}\n})\n}\n</script>\n<!-- <a href=\"#\" class=\"btn btn-warning\">Editar Acesso</a> -->\n<div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">\n<a onclick=\"apaga_tudo";
                    echo ${$GLOBALS["xnbreceqdyjk"]}["id_acesso_servidor"];
                    echo "()\" class=\"btn-sm btn-danger waves-effect waves-float waves-light\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14\" height=\"14\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-trash\">\n<polyline points=\"3 6 5 6 21 6\"></polyline>\n<path d=\"M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2\"></path>\n</svg></a>\n</div>\n</td>\n</tr>\n";
                }
            }
        }
    }
    echo "</table>\n</div>\n<!-- /.box-body -->\n</div>\n<!-- /.box -->\n</div>\n</div>\n</div>\n<!-- /.tab-pane -->\n<div class=\"tab-pane\" id=\"users\">\n<div class=\"row\">\n<div class=\"col-lg-12\">\n<div class=\"box box-primary\">\n<!-- /.box-header -->\n<div class=\"table-responsive\">\n<table class=\"table table-hover\">\n<tr>\n<th>Login</th>\n<th>Nome</th>\n<th>Contas SSH</th>\n</tr>\n";
    ${$GLOBALS["ypivaef"]} = "select * from usuario where id_mestre='" . ${$GLOBALS["qsspsbdnhbm"]}["id_usuario"] . "'  ";
    ${$GLOBALS["lqywuevabm"]} = $conn->prepare(${$GLOBALS["eodbmtokd"]});
    $SQLUsuarioSUB->execute();
    if ($SQLUsuarioSUB->rowCount() > 0) {
        while (${$GLOBALS["brwusphmzgw"]} = $SQLUsuarioSUB->fetch()) {
            $GLOBALS["pcbzxuacafg"] = "total_ssh";
            $GLOBALS["dfnicahdux"] = "row_user";
            $hmvzdtaudcd = "total_ssh";
            $GLOBALS["bbajygfd"] = "row_user";
            $total_ssh = 0;
            $qxtmwjljm = "total_ssh";
            $GLOBALS["hptbjdvrkhm"] = "SQLUsuarioSSH";
            ${$GLOBALS["opzypkwtffk"]} = "select * from conta_ssh where id_usuario = '" . $row_user["id_usuario"] . "' ";
            ${$GLOBALS["hptbjdvrkhm"]} = $conn->prepare(${$GLOBALS["opzypkwtffk"]});
            $SQLUsuarioSSH->execute();
            ${$qxtmwjljm} += $SQLUsuarioSSH->rowCount();
            ${$GLOBALS["jbsbmg"]} = "";
            if (${$GLOBALS["bbajygfd"]}["ativo"] == 2) {
                $tpcxsaogl = "color";
                $color = "bgcolor='#FF6347'";
            }
            echo "<tr ";
            $GLOBALS["tsguhizqqxj"] = "row_user";
            echo ${$GLOBALS["jbsbmg"]};
            echo ">\n<td>";
            echo $row_user["login"];
            $yxisodldnyh = "row_user";
            echo "</td>\n<td>";
            echo $row_user["nome"];
            echo "</td>\n<td>";
            echo ${$hmvzdtaudcd};
            echo "</td>\n</tr>\n";
        }
    }
    echo "</table>\n</div>\n<!-- /.box-body -->\n</div>\n<!-- /.box -->\n</div>\n</div>\n</div>\n";
}
echo "<!-- /.tab-pane -->\n<div class=\" tab-pane\" id=\"ssh\">\n<div class=\"row\">\n<div class=\"col-lg-12\">\n<div class=\"box box-primary\">\n<!-- /.box-header -->\n<div class=\"table-responsive\">\n<table class=\"table table-hover\">\n<tr>\n<th>Login</th>\n<th>Servidor</th>\n<th>Acessos</th>\n<th>Dono</th>\n</tr>\n";
${$GLOBALS["qivbqaos"]} = "select * from conta_ssh where id_usuario='" . ${$GLOBALS["qsspsbdnhbm"]}["id_usuario"] . "'";
${$gvoqtbjmyly} = $conn->prepare(${$GLOBALS["opzypkwtffk"]});
$SQLUsuarioSSH->execute();
if ($SQLUsuarioSSH->rowCount() > 0) {
    $GLOBALS["ocfhmprtitn"] = "row_user";
    while (${$GLOBALS["ocfhmprtitn"]} = $SQLUsuarioSSH->fetch()) {
        $GLOBALS["luirulgiovc"] = "SQLAcessoSSH";
        $baplerv = "row_user";
        $fjwprbsv = "row_user";
        $eyculws = "SQLServidor";
        $SQLServidor = "select * from servidor where id_servidor='" . $row_user["id_servidor"] . "'  ";
        $GLOBALS["lgypdnrmr"] = "SQLServidor";
        ${$GLOBALS["ymukphvqvwy"]} = $conn->prepare($SQLServidor);
        $ndfhuuclg = "row_user";
        $mqzirufhwo = "acessos";
        $SQLServidor->execute();
        ${$GLOBALS["vojxuwigj"]} = $SQLServidor->fetch();
        ${$GLOBALS["jbsbmg"]} = "";
        ${$mqzirufhwo} = 0;
        ${$GLOBALS["ziyopvwteo"]} = "SELECT sum(acesso) AS quantidade  FROM conta_ssh where id_usuario_ssh='" . ${$ndfhuuclg}["id_usuario_ssh"] . "' ";
        ${$GLOBALS["luirulgiovc"]} = $conn->prepare(${$GLOBALS["ziyopvwteo"]});
        $SQLAcessoSSH->execute();
        $GLOBALS["cjqstcmtg"] = "SQLAcessoSSH";
        ${$GLOBALS["ziyopvwteo"]} = $SQLAcessoSSH->fetch();
        ${$GLOBALS["mrsokmegf"]} += ${$GLOBALS["cjqstcmtg"]}["quantidade"];
        if (${$baplerv}["status"] == 2) {
            $qiecphwabrbx = "color";
            $color = "bgcolor='#FF6347'";
        }
        $GLOBALS["vzivgi"] = "row_user";
        echo "<tr ";
        echo ${$GLOBALS["jbsbmg"]};
        echo ">\n<td>";
        $ihakmmdjlv = "servidor";
        echo $row_user["login"];
        echo "</td>\n<td>";
        echo $servidor["nome"];
        echo "</td>\n<td>";
        echo ${$GLOBALS["mrsokmegf"]};
        echo "</td>\n<td>Usu\xc3\xa1rio Atual</td>\n</tr>\n";
    }
}
if (${$GLOBALS["qsspsbdnhbm"]}["tipo"] == "revenda") {
    $GLOBALS["rmwxxgaumkf"] = "SQLUserSub";
    $utjoorfy = "usuario";
    $SQLUserSub = "select * from usuario where id_mestre = '" . $usuario["id_usuario"] . "'  ";
    ${$GLOBALS["mvjwiab"]} = $conn->prepare(${$GLOBALS["mvjwiab"]});
    $SQLUserSub->execute();
    if ($SQLUserSub->rowCount() > 0) {
        while (${$GLOBALS["tsqxpwv"]} = $SQLUserSub->fetch()) {
            $ngmxbhuow = "SQLSubSSH";
            $SQLSubSSH = "select * from conta_ssh where id_usuario='" . ${$GLOBALS["tsqxpwv"]}["id_usuario"] . "'  ";
            $tcpgqgewxdig = "SQLSubSSH";
            $SQLSubSSH = $conn->prepare(${$GLOBALS["mpsieuxbhjh"]});
            $SQLSubSSH->execute();
            if ($SQLSubSSH->rowCount() > 0) {
                $GLOBALS["rwjuhfsys"] = "row_ssh_sub";
                while (${$GLOBALS["rwjuhfsys"]} = $SQLSubSSH->fetch()) {
                    $GLOBALS["xjpjrqfquxx"] = "SQLAcessoSSH";
                    $ylhsdeu = "SQLServidor";
                    $nwcesftr = "SQLAcessoSSH";
                    $snmbvbwrpe = "servidor";
                    ${$GLOBALS["ymukphvqvwy"]} = "select * from servidor where id_servidor='" . ${$GLOBALS["bcutyvbtbgb"]}["id_servidor"] . "'  ";
                    ${$GLOBALS["ymukphvqvwy"]} = $conn->prepare(${$ylhsdeu});
                    $SQLServidor->execute();
                    ${$snmbvbwrpe} = $SQLServidor->fetch();
                    $GLOBALS["eylipvae"] = "row_ssh_sub";
                    ${$GLOBALS["jbsbmg"]} = "";
                    ${$GLOBALS["mrsokmegf"]} = 0;
                    if (${$GLOBALS["eylipvae"]}["status"] == 2) {
                        ${$GLOBALS["jbsbmg"]} = "bgcolor='#FF6347'";
                    }
                    ${$nwcesftr} = "SELECT sum(acesso) AS quantidade  FROM conta_ssh where id_usuario_ssh='" . ${$GLOBALS["bcutyvbtbgb"]}["id_usuario_ssh"] . "'  ";
                    ${$GLOBALS["ziyopvwteo"]} = $conn->prepare(${$GLOBALS["ziyopvwteo"]});
                    $SQLAcessoSSH->execute();
                    ${$GLOBALS["xjpjrqfquxx"]} = $SQLAcessoSSH->fetch();
                    ${$GLOBALS["mrsokmegf"]} += ${$GLOBALS["ziyopvwteo"]}["quantidade"];
                    echo "<tr ";
                    echo ${$GLOBALS["jbsbmg"]};
                    echo ">\n<td>";
                    echo ${$GLOBALS["bcutyvbtbgb"]}["login"];
                    $GLOBALS["mehwreoj"] = "acessos";
                    echo "</td>\n<td>";
                    echo ${$GLOBALS["vojxuwigj"]}["nome"];
                    echo "</td>\n<td>";
                    echo $acessos;
                    echo "</td>\n<td>";
                    echo ${$GLOBALS["tsqxpwv"]}["login"];
                    echo "</td>\n</tr>\n";
                }
            }
        }
    }
}
echo "</table>\n</div>\n<!-- /.box-body -->\n</div>\n<!-- /.box -->\n</div>\n</div>\n</div>\n<!-- /.tab-pane -->\n<!-- /.tab-fatura -->\n<!--<div class=\"tab-pane\" id=\"fatura\">\n<div class=\"row\">\n<div class=\"col-lg-12\">\n<form class=\"form-horizontal\" role=\"perfil\" name=\"gerandofatura\" id=\"gerandofatura\" action=\"pages/usuario/gerarfatura_exe.php\" method=\"post\">\n<div class=\"form-group\"><br>\n<input type=\"hidden\" class=\"form-control\" id=\"usuarioid\" name=\"usuarioid\" value=\"";
echo $_GET["id_usuario"];
echo "\">\n<label for=\"exampleInputPassword1\">Tipo da Fatura</label>\n<select class=\"form-control\" name=\"tipofat\">\n";
if (${$GLOBALS["qsspsbdnhbm"]}["tipo"] == "vpn") {
    echo "<option value='1'> Acesso VPN</option>";
}
echo "<option value='2'>Outros</option>\n";
if (${$GLOBALS["qsspsbdnhbm"]}["tipo"] == "revenda") {
    echo "<option value='1' selected=selected>Revenda</option>";
}
echo "</select>\n</div>\n<div class=\"form-group\">\n<label for=\"exampleInputPassword1\">Quantidade</label>\n<input type=\"number\" class=\"form-control\" id=\"qtd\" name=\"qtd\" value=\"1\" required>\n</div>\n<div class=\"form-group\">\n<label for=\"exampleInputPassword1\">Valor</label>\n<input type=\"number\" class=\"form-control\" id=\"valor\" name=\"valor\" value=\"5\" required>\n</div>\n<div class=\"form-group\">\n<label for=\"exampleInputPassword1\">Desconto</label>\n<input type=\"number\" class=\"form-control\" id=\"desconto\" name=\"desconto\" value=\"0\" required>\n</div>\n<div class=\"form-group\">\n<label for=\"exampleInputPassword1\">Vencimento</label>\n<input type=\"number\" class=\"form-control\" id=\"venc\" name=\"venc\" value=\"5\" required>\n</div>\n<div class=\"form-group\">\n<label for=\"exampleInputPassword1\">Descri\xc3\xa7\xc3\xa3o</label>\n<textarea class=\"form-control\" name=\"msg\" id=\"msg\" rows=\"3\" placeholder=\"Digite ...\" required></textarea>\n</div>\n";
if (${$GLOBALS["qsspsbdnhbm"]}["tipo"] == "revenda") {
    $qdlvduc = "SQLServidor2";
    echo "<div class=\"form-group\">\n<label for=\"exampleInputPassword1\">Servidor</label>\n<select class=\"form-control\" name=\"servidorid\">\n<option selected=selected>Servidores</option>\n";
    $SQLServidor2 = "select * from servidor";
    ${$GLOBALS["fheouvfrldse"]} = $conn->prepare(${$GLOBALS["fheouvfrldse"]});
    $SQLServidor2->execute();
    if ($SQLServidor2->rowCount() > 0) {
        while (${$GLOBALS["sgyjjlyrb"]} = $SQLServidor2->fetch()) {
            $cetoyagcw = "row22";
            ${$GLOBALS["ttycqtwpppn"]} = "select * from acesso_servidor where id_servidor='" . $row22["id_servidor"] . "'  and  id_usuario = '" . $_GET["id_usuario"] . "'";
            ${$GLOBALS["ttycqtwpppn"]} = $conn->prepare(${$GLOBALS["ttycqtwpppn"]});
            $oiphlddjpp = "acc";
            $SQLAcessoServidor->execute();
            $acc = $SQLAcessoServidor->fetch();
            if ($SQLAcessoServidor->rowCount() > 0) {
                echo "<option value=\"";
                echo ${$GLOBALS["sgyjjlyrb"]}["id_servidor"];
                $GLOBALS["xwslplst"] = "acc";
                echo "\"> ";
                echo ${$GLOBALS["sgyjjlyrb"]}["ip_servidor"];
                echo " - Acessos: ";
                echo ${$GLOBALS["dzxcntfdwe"]}["qtd"];
                echo " - VAL: ";
                echo $acc["validade"];
                echo " </option>\n";
            } else {
                $edxjct = "row22";
                $nktehrvqehg = "row22";
                echo "<option value=\"";
                echo $row22["id_servidor"];
                echo "\"> ";
                $inyvczg = "row22";
                echo $row22["nome"];
                echo " - ";
                echo $row22["ip_servidor"];
                echo " - N\xc3\xa3o tem acesso </option>\n";
            }
        }
    }
    echo "</select>\n</div>\n";
} elseif (${$GLOBALS["qsspsbdnhbm"]}["tipo"] == "vpn") {
    echo "<div class=\"form-group\">\n<label for=\"inputName\" for=\"exampleInputPassword1\">Contas SSH</label>\n<select class=\"form-control\" name=\"account\">\n<option value=\"outros\" selected=selected>Gerar em Outros</option>\n";
    ${$GLOBALS["fheouvfrldse"]} = "select * from conta_ssh where id_usuario='" . $_GET["id_usuario"] . "'";
    ${$GLOBALS["fheouvfrldse"]} = $conn->prepare(${$GLOBALS["fheouvfrldse"]});
    $SQLServidor2->execute();
    if ($SQLServidor2->rowCount() > 0) {
        while (${$GLOBALS["sgyjjlyrb"]} = $SQLServidor2->fetch()) {
            $vkfutzy = "ano";
            $lbacnrf = "dataconvcriado";
            $GLOBALS["xnnztzd"] = "partes";
            ${$GLOBALS["tfvomgvra"]} = ${$GLOBALS["sgyjjlyrb"]}["data_validade"];
            $GLOBALS["otajjglcot"] = "partes";
            ${$GLOBALS["iprqweeu"]} = ${$GLOBALS["tfvomgvra"]};
            ${$lbacnrf} = substr(${$GLOBALS["iprqweeu"]}, 0, 10);
            $kjiuflhoqynp = "row22";
            $GLOBALS["jrdmqvmbfxz"] = "partes";
            ${$GLOBALS["szdgepkvsavk"]} = explode("-", ${$GLOBALS["cuovvycthz"]});
            $GLOBALS["naefldsomle"] = "mes";
            $GLOBALS["kuigoqeefhv"] = "row22";
            ${$vkfutzy} = ${$GLOBALS["jrdmqvmbfxz"]}[0];
            ${$GLOBALS["lehrqewio"]} = ${$GLOBALS["otajjglcot"]}[1];
            ${$GLOBALS["pltmqfg"]} = ${$GLOBALS["xnnztzd"]}[2];
            echo "<option value=\"";
            echo ${$kjiuflhoqynp}["id_usuario_ssh"];
            $GLOBALS["jrynosby"] = "row22";
            echo "\"> ";
            echo ${$GLOBALS["kuigoqeefhv"]}["login"];
            echo " - Acessos: ";
            echo $row22["acesso"];
            $GLOBALS["slvbfurwolsp"] = "dia";
            echo " - VAL: ";
            echo $dia;
            echo "/";
            echo ${$GLOBALS["naefldsomle"]};
            echo " - ";
            echo ${$GLOBALS["mofqtf"]};
            echo " </option>\n";
        }
    }
    echo "</select>\n</div>\n<div class=\"form-group\">\n<label for=\"inputName\" for=\"exampleInputPassword1\">Servidor</label>\n<select class=\"form-control\" name=\"servidorid\">\n<option value=\"outros\" selected=selected>Outros (Tipo em outros Tbm)</option>\n";
    ${$GLOBALS["fheouvfrldse"]} = "select * from servidor";
    ${$GLOBALS["fheouvfrldse"]} = $conn->prepare(${$GLOBALS["fheouvfrldse"]});
    $SQLServidor2->execute();
    if ($SQLServidor2->rowCount() > 0) {
        $GLOBALS["twkepwgklad"] = "row22";
        while (${$GLOBALS["twkepwgklad"]} = $SQLServidor2->fetch()) {
            $GLOBALS["ylzmesxgcvm"] = "SQLcriados";
            $xoveeydgy = "row22";
            ${$GLOBALS["rlwryq"]} = "select * from conta_ssh where id_servidor='" . ${$GLOBALS["sgyjjlyrb"]}["id_servidor"] . "'";
            ${$GLOBALS["rlwryq"]} = $conn->prepare(${$GLOBALS["ylzmesxgcvm"]});
            $GLOBALS["cexohqpy"] = "row22";
            $SQLcriados->execute();
            ${$GLOBALS["vvvnkphw"]} = $SQLcriados->rowCount();
            echo "<option value=\"";
            echo ${$GLOBALS["cexohqpy"]}["id_servidor"];
            echo "\"> ";
            echo ${$xoveeydgy}["nome"];
            echo " - ";
            echo ${$GLOBALS["sgyjjlyrb"]}["ip_servidor"];
            echo " - Contas: ";
            echo ${$GLOBALS["vvvnkphw"]};
            echo "</option>\n";
        }
    }
    echo "</select>\n</div>\n";
}
echo "<div class=\"form-group\">\n<div class=\"col-sm-offset-2 col-sm-10\">\n<button type=\"submit\" class=\"btn btn-primary\">Gerar Fatura</button>\n</div>\n</div>\n</form>\n</div>\n</div>\n</div>-->\n</div>\n</div>\n<!-- /.tab-content -->\n</div>\n<!-- /.nav-tabs-custom -->\n</div>\n<!-- /.col -->\n</div>\n<!-- /.row -->\n</section>\n<!-- /.content -->\n";
