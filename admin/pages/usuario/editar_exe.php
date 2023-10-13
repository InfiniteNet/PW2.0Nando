<?php

$GLOBALS["iodybqh"] = "SQLUPUsuario";
$GLOBALS["sdxwlraw"] = "conta_ssh";
$GLOBALS["ivomrjl"] = "SQLUsuario";
$GLOBALS["ssoosrcf"] = "alert";
$GLOBALS["nynwqkv"] = "dirt";
$GLOBALS["nucghligpri"] = "status";
$GLOBALS["jwbpqtut"] = "myalert";
echo "<!DOCTYPE html>\n<html class=\"loading bordered-layout\" lang=\"pt\" data-layout=\"bordered-layout\" data-textdirection=\"ltr\">\n<!-- BEGIN: Head-->\n<head>\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\n<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\n<meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui\">\n<link href=\"https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600\" rel=\"stylesheet\">\n<!-- BEGIN: Vendor CSS-->\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../../../app-assets/vendors/css/vendors.min.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../../../app-assets/vendors/css/animate/animate.min.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../../../app-assets/vendors/css/extensions/sweetalert2.min.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../../../app-assets/css/bootstrap.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../../../app-assets/css/bootstrap-extended.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../../../app-assets/css/colors.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../../../app-assets/css/components.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../../../app-assets/css/themes/dark-layout.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../../../app-assets/css/themes/bordered-layout.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../../../app-assets/css/themes/semi-dark-layout.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../../../app-assets/css/bootstrap.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../../../app-assets/css/bootstrap-extended.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../../../app-assets/css/plugins/extensions/ext-component-sweet-alerts.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../../../app-assets/css/pages/ui-feather.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../../../assets/css/style.css\">\n<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>\n</head>\n<body class=\"vertical-layout vertical-menu-modern\">\n<script src=\"../../../app-assets/js/scripts/extensions/ext-component-sweet-alerts.js\"></script>\n<script src=\"../../../app-assets/vendors/js/extensions/sweetalert2.all.min.js\"></script>\n<script src=\"../../../app-assets/js/scripts/ui/ui-feather.js\"></script>\n<script src=\"../../../app-assets/vendors/js/vendors.min.js\"></script>\n<script src=\"../../../app-assets/js/core/app-menu.js\"></script>\n<script src=\"../../../app-assets/js/core/app.js\"></script>\n<script>\n\$(window).on('load', function() {\nif (feather) {\nfeather.replace({\nwidth: 14,\nheight: 14\n});\n}\n})\n</script>\n";
require_once "../../../pages/system/seguranca.php";
require_once "../../../pages/system/config.php";
protegePagina("donoadmin");
function alertinfo($status, $msgalert, $dirt)
{
    $pfxgbi = "msgalert";
    $bgbaxmvg = "myalert";
    $myalert = "\nlet timerInterval\nSwal.fire({\nicon: '" . $status . "',\ntitle: '" . $msgalert . "',\ntimer: 2000,\ntimerProgressBar: true,\nwillClose: () => {\nclearInterval(timerInterval)\n}\n}).then((result) => {\nif (result.dismiss === Swal.DismissReason.timer) {\nwindow.location='" . $dirt . "';\n} else {\nwindow.location='" . $dirt . "';\n}\n})\n";
    $alert = "<script type=\"text/javascript\">" . $myalert . "</script>";
    return $alert;
}
if (isset($_POST["idusuario"])) {
    $ttgfgjmowe = "SQLUsuario";
    if (strlen($_POST["senha"]) < 6) {
        echo alertinfo("warning", "Senha muito curta!", "../../home.php?page=usuario/perfil&id_usuario=" . $_POST["idusuario"] . "");
        exit;
    }
    ${$GLOBALS["ivomrjl"]} = "select * from usuario where id_usuario = '" . $_POST["idusuario"] . "' ";
    ${$ttgfgjmowe} = $conn->prepare(${$GLOBALS["ivomrjl"]});
    $SQLUsuario->execute();
    if ($SQLUsuario->rowCount() > 0) {
        ${$GLOBALS["sdxwlraw"]} = $SQLUsuario->fetch();
        $mpwkgc = "SQLUPUsuario";
        $SQLUPUsuario = "update usuario set nome='" . $_POST["nome"] . "', email='" . $_POST["email"] . "', senha='" . $_POST["senha"] . "', celular='" . $_POST["celular"] . "', permitir_demo='" . $_POST["acesso"] . "' WHERE id_usuario = '" . $_POST["idusuario"] . "'";
        ${$GLOBALS["iodybqh"]} = $conn->prepare(${$GLOBALS["iodybqh"]});
        $GLOBALS["ubghipwpoyc"] = "conta_ssh";
        $SQLUPUsuario->execute();
        echo alertinfo("success", "Alterado com sucesso!", "../../home.php?page=usuario/perfil&id_usuario=" . $conta_ssh["id_usuario"] . "");
    } else {
        echo alertinfo("error", "Invalido", "../../home.php?page=usuario/listar");
    }
} else {
    echo alertinfo("warning", "Preencha todos os campos!", "../../home.php?page=usuario/listar");
}
echo "</body>\n</html>\n";
