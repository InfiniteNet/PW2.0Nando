<?php

$GLOBALS["zesstrnev"] = "ipdominio";
$GLOBALS["usbugjyohkgu"] = "accessKEY";
$GLOBALS["krbrzhbgcg"] = "quantidade_ssh_subs";
$GLOBALS["ffebtoxp"] = "sshsub";
$GLOBALS["cuywat"] = "quantidade_sub";
$GLOBALS["pzlflbjvpw"] = "subrow2";
$GLOBALS["ilimcxrifll"] = "SQLSubSSHsubs123";
$GLOBALS["ojbhfeltlwy"] = "quantidade_USUARIOS_subs";
$GLOBALS["uuzbkwlch"] = "SQLSubUSUARIOSsubs";
$GLOBALS["taxmldlhnp"] = "sshsubs";
$GLOBALS["hdrkkhtzwyw"] = "SQLSubSSHsubs";
$GLOBALS["eqxkrk"] = "subrow";
$GLOBALS["ostxdqsi"] = "usuario";
$GLOBALS["knixuprwwi"] = "todossubrevendedores";
$GLOBALS["ftsoftoal"] = "avatarusu";
$eybheppk = "usuario";
$GLOBALS["ohhlsifww"] = "SQLSubrevendedores";
$GLOBALS["etoiwbigsx"] = "tipousuario";
$GLOBALS["okjjrru"] = "SQLDelSSH";
$GLOBALS["xfcjurwb"] = "usuario";
$GLOBALS["bjyeasdqmc"] = "char";
$GLOBALS["unzdholad"] = "usuario";
$GLOBALS["vcqktnnog"] = "dirt";
$GLOBALS["oxubbpe"] = "total_acesso_ssh";
$mwbukjcjah = "usuario";
$GLOBALS["wtrlujk"] = "myalert";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"../../../app-assets/css/plugins/extensions/ext-component-sweet-alerts.css\">\n<script src=\"../../../app-assets/js/scripts/extensions/ext-component-sweet-alerts.js\"></script>\n<script src=\"../../../app-assets/vendors/js/extensions/sweetalert2.all.min.js\"></script>\n<script src=\"../../../app-assets/js/scripts/ui/ui-feather.js\"></script>\n<script src=\"../../../app-assets/vendors/js/vendors.min.js\"></script>\n<script src=\"../../../app-assets/js/core/app-menu.js\"></script>\n<script src=\"../../../app-assets/js/core/app.js\"></script>\n";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/dados.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
$cbdexv = "usuario";
$GLOBALS["agoprxnqpx"] = "quantidade_ssh";
$icxuqcnpsdm = "tipousuario";
protegePagina("user");
function myalertuser($status, $msgalert, $dirt)
{
    $GLOBALS["tjvxbce"] = "status";
    $GLOBALS["vefmmhcrroe"] = "msgalert";
    $GLOBALS["orwtomer"] = "dirt";
    $oliytrxqhg = "alert";
    $GLOBALS["tlpcaqoag"] = "alert";
    $ppuvqlmy = "myalert";
    ${$GLOBALS["wtrlujk"]} = "\nlet timerInterval\nSwal.fire({\nicon: '" . $status . "',\ntitle: '" . $msgalert . "',\ntimer: 2000,\ntimerProgressBar: true,\nwillClose: () => {\nclearInterval(timerInterval)\n}\n}).then((result) => {\nif (result.dismiss === Swal.DismissReason.timer) {\nwindow.location='" . ${$GLOBALS["vcqktnnog"]} . "';\n} else {\nwindow.location='" . $dirt . "';\n}\n})\n";
    $alert = "<script type=\"text/javascript\">" . ${$ppuvqlmy} . "</script>";
    return ${$oliytrxqhg};
}
$GLOBALS["fjwrekgxbio"] = "tipousuario";
if (isset($_GET["char"])) {
    $GLOBALS["wvvhxvwltbl"] = "usuario";
    $GLOBALS["ncdzpdhiu"] = "SQLDelSSH";
    $wxdxnwwoqjv = "novochar";
    $cwsndkoiq = "char";
    $GLOBALS["vqukqrmow"] = "char";
    $ujorzcbwp = "SQLDelSSH";
    $GLOBALS["azfwwyxd"] = "char";
    $GLOBALS["dwsfvny"] = "novochar";
    $novochar = $_GET["char"];
    $chvxluewpup = "char";
    switch ($novochar) {
        case 1:
            ${$GLOBALS["azfwwyxd"]} = 1;
            break;
        case 2:
            ${$GLOBALS["bjyeasdqmc"]} = 2;
            break;
        case 3:
            ${$GLOBALS["vqukqrmow"]} = 3;
            break;
        case 4:
            ${$chvxluewpup} = 4;
            break;
        case 5:
            ${$GLOBALS["bjyeasdqmc"]} = 5;
            break;
        default:
            ${$GLOBALS["bjyeasdqmc"]} = 0;
            break;
    }
    if (${$cwsndkoiq} == 0) {
        echo myalertuser("error", "Erro na selecao do avatar !", "../../home.php?page=admin/dados");
        exit;
    }
    if (${$GLOBALS["bjyeasdqmc"]} == 5 and ${$GLOBALS["xfcjurwb"]}["tipo"] != "revenda") {
        echo myalertuser("error", "Ocorreu um erro !", "../../home.php?page=admin/dados");
        exit;
    }
    ${$GLOBALS["okjjrru"]} = "update usuario set avatar='" . ${$GLOBALS["bjyeasdqmc"]} . "' WHERE id_usuario = '" . ${$GLOBALS["wvvhxvwltbl"]}["id_usuario"] . "'  ";
    ${$GLOBALS["ncdzpdhiu"]} = $conn->prepare(${$ujorzcbwp});
    $SQLDelSSH->execute();
    echo myalertuser("success", "Dados alterados com sucesso!", "../../home.php?page=admin/dados");
}
switch (${$GLOBALS["xfcjurwb"]}["tipo"]) {
    case "vpn":
        ${$GLOBALS["etoiwbigsx"]} = "Usu\xc3\xa1rio VPN";
        break;
    case "revenda":
        ${$icxuqcnpsdm} = "Revendedor";
        break;
    default:
        ${$GLOBALS["fjwrekgxbio"]} = "erro";
        break;
}
$GLOBALS["grlxao"] = "all_ssh_susp_qtd";
if (${$GLOBALS["xfcjurwb"]}["tipo"] == "revenda" && ${$GLOBALS["xfcjurwb"]}["subrevenda"] == "sim") {
    $GLOBALS["eovdrtnb"] = "tipousuario";
    $tipousuario = "Sub-Revendedor";
}
$GLOBALS["ltkrmyhygeo"] = "usuario";
if (${$GLOBALS["unzdholad"]}["tipo"] == "revenda") {
    $GLOBALS["yguheksmdkvp"] = "SQLSubrevendedores";
    $tvawfj = "SQLSubrevendedores";
    $SQLSubrevendedores = "select * from usuario WHERE id_mestre = '" . $_SESSION["usuarioID"] . "' and tipo='revenda'";
    ${$GLOBALS["ohhlsifww"]} = $conn->prepare($SQLSubrevendedores);
    $SQLSubrevendedores->execute();
    ${$GLOBALS["knixuprwwi"]} = $SQLSubrevendedores->rowCount();
    if ($SQLSubrevendedores->rowCount() > 0) {
        $GLOBALS["oejekmxmthf"] = "subrow";
        while (${$GLOBALS["oejekmxmthf"]} = $SQLSubrevendedores->fetch()) {
            $guprtxxr = "SQLSubSSHsubs";
            $GLOBALS["jsgnmtoh"] = "quantidade_ssh_subs";
            $goccncu = "SQLSubSSHsubs";
            $quantidade_ssh_subs = 0;
            $GLOBALS["wybppstxfk"] = "quantidade_ssh_subs";
            $GLOBALS["rmqrmddgi"] = "SQLSubUSUARIOSsubs";
            $SQLSubSSHsubs = "select * from conta_ssh WHERE id_usuario = '" . ${$GLOBALS["eqxkrk"]}["id_usuario"] . "'  ";
            ${$GLOBALS["hdrkkhtzwyw"]} = $conn->prepare($SQLSubSSHsubs);
            $SQLSubSSHsubs->execute();
            ${$GLOBALS["wybppstxfk"]} += $SQLSubSSHsubs->rowCount();
            ${$GLOBALS["taxmldlhnp"]} = $SQLSubSSHsubs->rowCount();
            $gzofrfekjjp = "sshsubs132";
            ${$GLOBALS["rmqrmddgi"]} = "select * from usuario WHERE id_mestre = '" . ${$GLOBALS["eqxkrk"]}["id_usuario"] . "'  ";
            ${$GLOBALS["uuzbkwlch"]} = $conn->prepare(${$GLOBALS["uuzbkwlch"]});
            $SQLSubUSUARIOSsubs->execute();
            ${$GLOBALS["ojbhfeltlwy"]} += $SQLSubUSUARIOSsubs->rowCount();
            ${$gzofrfekjjp} = $SQLSubUSUARIOSsubs->rowCount();
            if ($SQLSubUSUARIOSsubs->rowCount() > 0) {
                $GLOBALS["cuixmhup"] = "subrow2";
                while (${$GLOBALS["cuixmhup"]} = $SQLSubUSUARIOSsubs->fetch()) {
                    ${$GLOBALS["ilimcxrifll"]} = "select * from conta_ssh WHERE id_usuario = '" . ${$GLOBALS["pzlflbjvpw"]}["id_usuario"] . "'  ";
                    $GLOBALS["novdnrxr"] = "quantidade_ssh_subs";
                    $rpsjjsgyqxpm = "SQLSubSSHsubs123";
                    ${$GLOBALS["ilimcxrifll"]} = $conn->prepare($SQLSubSSHsubs123);
                    $SQLSubSSHsubs123->execute();
                    ${$GLOBALS["novdnrxr"]} += $SQLSubSSHsubs123->rowCount();
                }
            }
        }
    }
}
if (${$GLOBALS["ltkrmyhygeo"]}["atualiza_dados"] == 0) {
    echo "<div class=\"demo-spacing-0 text-center mb-2\">\n<div class=\"alert alert-primary alert-dismissible\" role=\"alert\">\n<h2 class=\"alert-heading text-warning\"><i data-feather='alert-octagon'></i>Aten\xc3\xa7\xc3\xa3o, preencha todos os campos e salve!</h2>\n<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>\n</div>\n</div>\n";
}
echo "<style>\n#container {\nwidth: 100%;\nborder-color: green;\ntext-align: center;\nvertical-align: middle;\n}\n.box {\ndisplay: inline-block;\n}\n#box-1 {\nbackground: rgba(255, 175, 75, 1);\nbackground: -moz-linear-gradient(left, rgba(255, 175, 75, 1) 0%, rgba(255, 146, 10, 1) 10%);\nbackground: -webkit-gradient(left top, right top, color-stop(0%, rgba(255, 175, 75, 1)), color-stop(100%, rgba(255, 146, 10, 1)));\nbackground: -webkit-linear-gradient(left, rgba(255, 175, 75, 1) 0%, rgba(255, 146, 10, 1) 100%);\nbackground: -o-linear-gradient(left, rgba(255, 175, 75, 1) 0%, rgba(255, 146, 10, 1) 100%);\nbackground: -ms-linear-gradient(left, rgba(255, 175, 75, 1) 0%, rgba(255, 146, 10, 1) 100%);\nbackground: linear-gradient(to right, rgba(255, 175, 75, 1) 0%, rgba(255, 146, 10, 1) 100%);\nfilter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffaf4b', endColorstr='#ff920a', GradientType=1);\n}\n#box-2 {\nbackground: rgba(98, 125, 77, 1);\nbackground: -moz-linear-gradient(left, rgba(98, 125, 77, 1) 0%, rgba(31, 59, 8, 1) 100%);\nbackground: -webkit-gradient(left top, right top, color-stop(0%, rgba(98, 125, 77, 1)), color-stop(100%, rgba(31, 59, 8, 1)));\nbackground: -webkit-linear-gradient(left, rgba(98, 125, 77, 1) 0%, rgba(31, 59, 8, 1) 100%);\nbackground: -o-linear-gradient(left, rgba(98, 125, 77, 1) 0%, rgba(31, 59, 8, 1) 100%);\nbackground: -ms-linear-gradient(left, rgba(98, 125, 77, 1) 0%, rgba(31, 59, 8, 1) 100%);\nbackground: linear-gradient(to right, rgba(98, 125, 77, 1) 0%, rgba(31, 59, 8, 1) 100%);\nfilter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#627d4d', endColorstr='#1f3b08', GradientType=1);\n}\n#box-3 {\nbackground: rgba(203, 96, 179, 1);\nbackground: -moz-linear-gradient(left, rgba(203, 96, 179, 1) 0%, rgba(193, 70, 161, 1) 43%, rgba(168, 0, 119, 1) 64%, rgba(219, 54, 164, 1) 100%);\nbackground: -webkit-gradient(left top, right top, color-stop(0%, rgba(203, 96, 179, 1)), color-stop(43%, rgba(193, 70, 161, 1)), color-stop(64%, rgba(168, 0, 119, 1)), color-stop(100%, rgba(219, 54, 164, 1)));\nbackground: -webkit-linear-gradient(left, rgba(203, 96, 179, 1) 0%, rgba(193, 70, 161, 1) 43%, rgba(168, 0, 119, 1) 64%, rgba(219, 54, 164, 1) 100%);\nbackground: -o-linear-gradient(left, rgba(203, 96, 179, 1) 0%, rgba(193, 70, 161, 1) 43%, rgba(168, 0, 119, 1) 64%, rgba(219, 54, 164, 1) 100%);\nbackground: -ms-linear-gradient(left, rgba(203, 96, 179, 1) 0%, rgba(193, 70, 161, 1) 43%, rgba(168, 0, 119, 1) 64%, rgba(219, 54, 164, 1) 100%);\nbackground: linear-gradient(to right, rgba(203, 96, 179, 1) 0%, rgba(193, 70, 161, 1) 43%, rgba(168, 0, 119, 1) 64%, rgba(219, 54, 164, 1) 100%);\nfilter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#cb60b3', endColorstr='#db36a4', GradientType=1);\n}\n#box-4 {\nbackground: rgba(252, 236, 252, 1);\nbackground: -moz-linear-gradient(left, rgba(252, 236, 252, 1) 0%, rgba(251, 166, 225, 1) 43%, rgba(253, 137, 215, 1) 62%, rgba(255, 124, 216, 1) 100%);\nbackground: -webkit-gradient(left top, right top, color-stop(0%, rgba(252, 236, 252, 1)), color-stop(43%, rgba(251, 166, 225, 1)), color-stop(62%, rgba(253, 137, 215, 1)), color-stop(100%, rgba(255, 124, 216, 1)));\nbackground: -webkit-linear-gradient(left, rgba(252, 236, 252, 1) 0%, rgba(251, 166, 225, 1) 43%, rgba(253, 137, 215, 1) 62%, rgba(255, 124, 216, 1) 100%);\nbackground: -o-linear-gradient(left, rgba(252, 236, 252, 1) 0%, rgba(251, 166, 225, 1) 43%, rgba(253, 137, 215, 1) 62%, rgba(255, 124, 216, 1) 100%);\nbackground: -ms-linear-gradient(left, rgba(252, 236, 252, 1) 0%, rgba(251, 166, 225, 1) 43%, rgba(253, 137, 215, 1) 62%, rgba(255, 124, 216, 1) 100%);\nbackground: linear-gradient(to right, rgba(252, 236, 252, 1) 0%, rgba(251, 166, 225, 1) 43%, rgba(253, 137, 215, 1) 62%, rgba(255, 124, 216, 1) 100%);\nfilter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fcecfc', endColorstr='#ff7cd8', GradientType=1);\n}\n#box-5 {\nbackground: rgba(183, 222, 237, 1);\nbackground: -moz-linear-gradient(left, rgba(183, 222, 237, 1) 0%, rgba(113, 206, 239, 1) 43%, rgba(33, 180, 226, 1) 59%, rgba(183, 222, 237, 1) 100%);\nbackground: -webkit-gradient(left top, right top, color-stop(0%, rgba(183, 222, 237, 1)), color-stop(43%, rgba(113, 206, 239, 1)), color-stop(59%, rgba(33, 180, 226, 1)), color-stop(100%, rgba(183, 222, 237, 1)));\nbackground: -webkit-linear-gradient(left, rgba(183, 222, 237, 1) 0%, rgba(113, 206, 239, 1) 43%, rgba(33, 180, 226, 1) 59%, rgba(183, 222, 237, 1) 100%);\nbackground: -o-linear-gradient(left, rgba(183, 222, 237, 1) 0%, rgba(113, 206, 239, 1) 43%, rgba(33, 180, 226, 1) 59%, rgba(183, 222, 237, 1) 100%);\nbackground: -ms-linear-gradient(left, rgba(183, 222, 237, 1) 0%, rgba(113, 206, 239, 1) 43%, rgba(33, 180, 226, 1) 59%, rgba(183, 222, 237, 1) 100%);\nbackground: linear-gradient(to right, rgba(183, 222, 237, 1) 0%, rgba(113, 206, 239, 1) 43%, rgba(33, 180, 226, 1) 59%, rgba(183, 222, 237, 1) 100%);\nfilter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#b7deed', endColorstr='#b7deed', GradientType=1);\n}\n#box-1:hover {\nbox-shadow: 2px 2px 20px rgba(0, 0, 0, .3);\n}\n#box-2:hover {\nbox-shadow: 5px 5px 25px rgba(0, 0, 0, .3);\n}\n#box-3:hover {\nbox-shadow: 5px 5px 25px rgba(0, 0, 0, .3);\n}\n#box-4:hover {\nbox-shadow: 5px 5px 25px rgba(0, 0, 0, .3);\n}\n#box-5:hover {\nbox-shadow: 5px 5px 25px rgba(0, 0, 0, .3);\n}\n</style>\n<script>\nfunction selecionachar(id) {\nSwal.fire({\ntitle: 'Definir o avatar?',\nicon: 'question',\nshowCancelButton: true,\nconfirmButtonColor: '#28c76f',\ncancelButtonColor: '#d33',\nconfirmButtonText: 'Sim',\ncancelButtonText: 'Nao'\n}).then((result) => {\nif (result.isConfirmed) {\nwindow.location.href = '../home.php?page=admin/dados&char=' + id;\n}\n})\n}\n</script>\n<!-- Modal -->\n<div class=\"col-md-4\">\n<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">\n<div class=\"modal-dialog\" role=\"document\">\n<div class=\"modal-content\">\n<div class=\"modal-header\">\n<h4 class=\"modal-title\" id=\"myModalLabel\">Avatares Dispon\xc3\xadveis:</h4>\n</div>\n<div class=\"modal-body\" id=\"container\">\n<div id=\"box-\" class=\"box\"><img onclick=\"selecionachar(1);\" style=\"width:100%;max-width:100px\" class=\"profile-user-img img-responsive img-circle\" src=\"../../../app-assets/images/avatars/avatar1.png\" alt=\"User profile picture\"></div>\n<div id=\"box-\" class=\"box\"><img onclick=\"selecionachar(2);\" style=\"width:100%;max-width:100px\" class=\"profile-user-img img-responsive img-circle\" src=\"../../../app-assets/images/avatars/avatar2.png\" alt=\"User profile picture\"></div>\n<div id=\"box-\" class=\"box\"><img onclick=\"selecionachar(3);\" style=\"width:100%;max-width:100px\" class=\"profile-user-img img-responsive img-circle\" src=\"../../../app-assets/images/avatars/avatar3.png\" alt=\"User profile picture\"></div>\n<div id=\"box-\" class=\"box\"><img onclick=\"selecionachar(4);\" style=\"width:100%;max-width:100px\" class=\"profile-user-img img-responsive img-circle\" src=\"../../../app-assets/images/avatars/avatar4.png\" alt=\"User profile picture\"></div>\n<div id=\"box-\" class=\"box\"><img onclick=\"selecionachar(5);\" style=\"width:100%;max-width:100px\" class=\"profile-user-img img-responsive img-circle\" src=\"../../../app-assets/images/avatars/avatar5.png\" alt=\"User profile picture\"></div>\n</div>\n<div class=\"modal-footer\">\n<button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\">Cancelar</button>\n</div>\n</div>\n</div>\n</div>\n</div>\n<div class=\"row\">\n<div class=\"col-md-6 col-12\">\n<!-- Profile Image -->\n<div class=\"card border-primary\">\n<div class=\"card-body little-profile text-center\">\n<div class=\"pro-img\"><img class=\"img-circle\" src=\"../../../app-assets/images/avatars/";
echo ${$GLOBALS["ftsoftoal"]};
echo "\" height=\"80\" width=\"80\" alt=\"user\" /></div>\n<br>\n<h3 class=\"profile-username text-center\">";
echo ${$GLOBALS["xfcjurwb"]}["nome"];
echo "</h3>\n<p class=\"text-muted text-center\"><span class=\"badge badge-light-primary profile-badge\">";
echo ${$GLOBALS["etoiwbigsx"]};
echo "</span></p>\n<br>\n<ul class=\"list-group list-group-unbordered\">\n<li class=\"list-group-item\">\n<b>Contas SSH</b> <a class=\"pull-right\"><span class=\"badge badge-light-info\">";
echo ${$GLOBALS["agoprxnqpx"]};
$GLOBALS["pjpkgqwz"] = "usuario";
echo "</span></a>\n</li>\n<li class=\"list-group-item\">\n<b>Contas SSH Susp</b> <a class=\"pull-right\"><span class=\"badge badge-light-warning\">";
echo ${$GLOBALS["grlxao"]};
echo "</span></a>\n</li>\n<!--<li class=\"list-group-item\">\n<b>Acessos SSH </b> <a class=\"pull-right\">";
echo ${$GLOBALS["oxubbpe"]};
$GLOBALS["aocgxib"] = "usuario";
echo "</a>\n</li>-->\n<!--";
$opqxgxlhb = "usuario";
if (${$cbdexv}["tipo"] == "revenda") {
    echo "<li class=\"list-group-item\">\n<b>Usu\xc3\xa1rios SSH</b> <a class=\"pull-right\">";
    echo ${$GLOBALS["cuywat"]};
    echo "</a>\n</li>\n<li class=\"list-group-item\">\n<b>Contas SSH Usu\xc3\xa1rios</b> <a class=\"pull-right\">";
    echo ${$GLOBALS["ffebtoxp"]};
    echo "</a>\n</li>\n";
}
echo "-->\n";
if (${$GLOBALS["xfcjurwb"]}["tipo"] == "revenda" and ${$GLOBALS["aocgxib"]}["subrevenda"] == "nao") {
    $cnilnkh = "todossubrevendedores";
    echo "<li class=\"list-group-item\">\n<b>Revendedores</b> <a class=\"pull-right\"><span class=\"badge badge-light-primary\">";
    echo $todossubrevendedores;
    echo "</span></a>\n</li>\n<!--<li class=\"list-group-item\">\n<b>Revendedores das revendas</b> <a class=\"pull-right\">";
    echo ${$GLOBALS["ojbhfeltlwy"]};
    echo "</a>\n</li>-->\n<li class=\"list-group-item\">\n<b>Contas SSH das revendas</b> <a class=\"pull-right\"><span class=\"badge badge-light-danger\">";
    echo ${$GLOBALS["krbrzhbgcg"]};
    echo "</span></a>\n</li>\n";
}
echo "</ul>\n<br><a data-bs-toggle=\"modal\" data-bs-target=\"#myModal\" class=\"btn btn-primary btn-block\"><b>Alterar Avatar</b></a>\n</div>\n</div>\n</div>\n<div class=\"col-md-6 col-12\">\n<div class=\"card\">\n<div class=\"card-body p-b-0\">\n<h4 class=\"card-title\"><i class=\"fa fa-edit\"></i>Editar</h4>\n<form class=\"form-horizontal\" role=\"form\" id=\"form\" name=\"form\" action=\"pages/admin/alterar.php\" method=\"post\">\n<input type=\"hidden\" class=\"form-control\" id=\"segmax\" name=\"segmax\" value=\"";
echo ${$GLOBALS["usbugjyohkgu"]};
echo "\">\n<input type=\"hidden\" class=\"form-control\" id=\"ipmax\" name=\"ipmax\" value=\"";
echo ${$GLOBALS["zesstrnev"]};
echo "\">\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"first-name-icon\">Usu\xc3\xa1rio</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather=\"user\"></i></span>\n<input type=\"text\" class=\"form-control\" minlength=\"5\" maxlength=\"30\" id=\"login\" name=\"login\" value=\"";
echo ${$eybheppk}["login"];
echo "\" placeholder=\"Usu\xc3\xa1rio\" required=\"\">\n</div>\n</div>\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"first-name-icon\">Data de cadastro</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather=\"calendar\"></i></span>\n<input disabled type=\"text\" class=\"form-control\" value=\"";
echo date("d/m/Y", strtotime(${$GLOBALS["xfcjurwb"]}["data_cadastro"]));
echo "\" placeholder=\"Data de Cadastro\" required=\"\">\n</div>\n</div>\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"first-name-icon\">Nome</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather=\"user\"></i></span>\n<input type=\"text\" class=\"form-control\" minlength=\"5\" maxlength=\"30\" id=\"nome\" name=\"nome\" value=\"";
echo ${$GLOBALS["pjpkgqwz"]}["nome"];
echo "\" placeholder=\"Nome\" required=\"required\">\n</div>\n</div>\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"first-name-icon\">E-MAIL</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather=\"mail\"></i></span>\n<input type=\"email\" class=\"form-control\" minlength=\"5\" maxlength=\"40\" id=\"email\" name=\"email\" value=\"";
echo ${$opqxgxlhb}["email"];
echo "\" placeholder=\"E-Mail\" required=\"required\">\n</div>\n</div>\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"first-name-icon\">Celular</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather=\"smartphone\"></i></span>\n<input type=\"text\" class=\"form-control\" minlength=\"10\" maxlength=\"11\" id=\"celular\" name=\"celular\" value=\"";
echo ${$GLOBALS["ostxdqsi"]}["celular"];
echo "\" placeholder=\"Celular\" required=\"required\">\n</div>\n</div>\n<div class=\"mb-1\">\n<label class=\"form-label\" for=\"first-name-icon\">Senha</label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather=\"key\"></i></span>\n<input type=\"password\" minlength=\"5\" maxlength=\"20\" class=\"form-control\" name=\"senha\" placeholder=\"Digite a Senha\" required=\"required\" value=\"";
echo ${$GLOBALS["xfcjurwb"]}["senha"];
echo "\">\n</div>\n</div>\n";
if (${$mwbukjcjah}["tipo"] == "revenda") {
    $dolsdwrvu = "usuario";
    echo "<div class=\"mb-1\">\n<label class=\"form-label\" for=\"first-name-icon\">Token MP </label>\n<div class=\"input-group input-group-merge\">\n<span class=\"input-group-text\"><i data-feather=\"shopping-cart\"></i></span>\n<input type=\"text\" class=\"form-control\" name=\"tokensecreto\" placeholder=\"Do Mercado Pago...\" value=\"";
    echo $usuario["accesstoken"];
    echo "\">\n</div>\n</div>\n";
}
echo "<div class=\"form-actions\">\n<button type=\"submit\" class=\"btn btn-success\">Salvar Dados</button>\n</div>\n</form>\n</div>\n</div>\n</div>\n</div>\n";
