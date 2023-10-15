<?php

$GLOBALS["ebbrsdt"] = "isp";
$GLOBALS["uswxkvo"] = "usuario";
$GLOBALS["axuszvnwcz"] = "contato";
$GLOBALS["xumtwzgoc"] = "revenda";
$GLOBALS["wmyiknjovaf"] = "SQLU";
$GLOBALS["zoletkulonq"] = "administrador";
$kzpnehghdf = "SQLU";
$GLOBALS["tekhyitujkt"] = "administrador";
$GLOBALS["olrgmgyktqi"] = "SQLUsuario";
require_once "pages/system/seguranca.php";
$GLOBALS["qpfkrb"] = "usuario";
$dwxwra = "SQLAdministrador";
$ltbnxgcem = "SQLAdministrador";
require_once "pages/system/config.php";
require_once "pages/system/funcoes.system.php";
require_once "pages/system/classe.ssh.php";
$oarrfkg = "SQLUsuario";
$SQLUsuario = "SELECT * FROM conta_ssh WHERE id_usuario_ssh = '" . $_SESSION["usuarioID"] . "'";
$SQLUsuario = $conn->prepare($SQLUsuario);
$GLOBALS["mvmzfvhmx"] = "linha";
$SQLUsuario->execute();
$GLOBALS["wdfgbrobin"] = "SQLAdministrador";
$usuario = $SQLUsuario->fetch();
$SQLAdministrador = "SELECT * FROM admin WHERE id_administrador = '1'";
$SQLAdministrador = $conn->prepare($SQLAdministrador);
$GLOBALS["swmtyreneq"] = "usuario";
$SQLAdministrador->execute();
$administrador = $SQLAdministrador->fetch();
$SQLU = "SELECT * FROM usuario WHERE id_usuario = '" . $usuario["id_usuario"] . "'";
$volokxfqxip = "revenda";
$SQLU = $conn->prepare($SQLU);
$SQLU->execute();
$revenda = $SQLU->fetch();
if ($revenda["ativo"] == 1 and $revenda["tipo"] == "revenda") {
    echo myalertuser("error", "Sua conta n\xc3\xa3o est\xc3\xa1 suspensa!", "renovacaossh.php");
    exit;
}
if (${$GLOBALS["xumtwzgoc"]} == 0) {
    $GLOBALS["pxumevjapls"] = "contato";
    $contato = ${$GLOBALS["zoletkulonq"]}["celular"];
} else {
    $GLOBALS["ruuhnbs"] = "contato";
    $contato = ${$GLOBALS["xumtwzgoc"]}["celular"];
}
echo "<!DOCTYPE html>\n<html class=\"loading bordered-layout\" lang=\"pt-br\" data-layout=\"bordered-layout\" data-textdirection=\"ltr\">\n<!-- BEGIN: Head-->\n<head>\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\n<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\n<meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui\">\n<meta name=\"description\" content=\"Painel de gerenciamento vpn\">\n<meta name=\"keywords\" content=\"vpn, ssh, user, servidor\">\n<meta name=\"author\" content=\"crazy\">\n<title>";
echo ${$GLOBALS["zoletkulonq"]}["site"];
echo "</title>\n<link rel=\"apple-touch-icon\" href=\"/app-assets/images/ico/apple-icon-120.png\">\n<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"/app-assets/images/ico/favicon.ico\">\n<link href=\"https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600\" rel=\"stylesheet\">\n<!-- BEGIN: Vendor CSS-->\n<link rel=\"stylesheet\" type=\"text/css\" href=\"/app-assets/vendors/css/vendors.min.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"/app-assets/vendors/css/animate/animate.min.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"/app-assets/vendors/css/extensions/sweetalert2.min.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"/app-assets/css/plugins/extensions/ext-component-sweet-alerts.css\">\n<!-- BEGIN: Theme CSS-->\n<link rel=\"stylesheet\" type=\"text/css\" href=\"/app-assets/css/bootstrap.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"/app-assets/css/bootstrap-extended.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"/app-assets/css/colors.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"/app-assets/css/components.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"/app-assets/css/themes/dark-layout.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"/app-assets/css/themes/bordered-layout.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"/app-assets/css/themes/semi-dark-layout.css\">\n<!-- BEGIN: Page CSS-->\n<link rel=\"stylesheet\" type=\"text/css\" href=\"/app-assets/css/core/menu/menu-types/vertical-menu.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"/app-assets/css/plugins/forms/form-validation.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"/app-assets/css/pages/authentication.css\">\n<!-- END: Page CSS-->\n<!-- BEGIN: Custom CSS-->\n<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/css/style.css\">\n<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js\"></script>\n<!-- END: Custom CSS-->\n</head>\n<!-- BEGIN: Body-->\n<body class=\"vertical-layout 1-column navbar-floating footer-static blank-page blank-page pace-done menu-hide vertical-overlay-menu\" data-open=\"click\" data-menu=\"vertical-menu-modern\" data-col=\"1-column\">\n<div class=\"app-content content\">\n<div class=\"content-wrapper\">\n<div class=\"content-body\">\n<section class=\"row flexbox-container\">\n<div class=\"mb-5\">\n<div class=\"col-xl-12 col-12 d-flex justify-content-center\">\n<div class=\"row\">\n<div class=\"col-12\">\n<div class=\"card border-danger\">\n<div class=\"card-content\">\n<div class=\"card-body text-center\">\n<div class=\"mb-1 text-center\">\n<h3 class=\"text-danger\"><i class=\"font-medium-5\" data-feather='info'></i>Seu fornecedor VPN est\xc3\xa1 suspenso!<br></h3>\n</div>\n<div class=\"mb-2\">\n<div class=\"avatar avatar-xl bg-danger\">\n<div class=\"avatar-content\">\n<i data-feather='slash'></i>\n</div>\n</div>\n</div>\n<div class=\"text-center\">\n<div class=\"form-group text-center mb-2\">\n<div class=\"demo-spacing-0\">\n<div class=\"alert alert-danger\" role=\"alert\">\n<h4 class=\"alert-heading\"><i data-feather='dollar-sign'></i>Pagamento em atraso!</h4>\n<div class=\"alert-body\">\nEntre em contato com seu fornecedor e <br>resolva a sua situa\xc3\xa7\xc3\xa3o agora mesmo!\n</div>\n</div>\n</div>\n</div>\n<div class=\"mb-2\">\n<h5><i class=\"font-medium-2 text-primary\" data-feather='smartphone'></i>Whatsapp: <a class=\"text-bold-800 \" href=\"https://api.whatsapp.com/send?phone=55";
echo ${$GLOBALS["axuszvnwcz"]};
echo "&text=Oi,%20sou%20(";
echo strtoupper(${$GLOBALS["uswxkvo"]}["login"]);
echo ")%20cliente%20VPN,%20vi%20que%20seu%20painel%20est%C3%A1%20suspenso!%20Gostaria%20de%20renovar%20minha%20VPN!\" target=\"_blank\">CLICK AQUI \xf0\x9f\x9a\x80</a></h5>\n</div>\n<a href=\"sairssh.php\" class=\"btn btn-primary btn-danger\"><i data-feather='log-out'></i><b>SAIR</b></a>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</section>\n</div>\n</div>\n<footer class=\"footer footer-static footer-light mt-5\">\n<div class=\"text-center\">\n<p class=\"clearfix blue-grey lighten-2 mb-0\">\n<span class=\"center\">\nVers\xc3\xa3o: ";
echo ${$GLOBALS["mvmzfvhmx"]};
echo "<br>\n<a class=\"text-bold-800 \" href=\"https://api.whatsapp.com/send?phone=55";
echo ${$GLOBALS["axuszvnwcz"]};
echo "&text=Ol%C3%A1%2C%20sou%20revendedor%20e%20minha%20revenda%20se%20chama%20";
echo strtoupper(${$GLOBALS["uswxkvo"]}["nome"]);
echo "%20e%20estou%20precisando%20de%20suporte!\" target=\"_blank\">";
echo ${$GLOBALS["tekhyitujkt"]}["site"];
echo "&copy; <script>\ndocument.write(new Date().getFullYear())\n</script>.</a><br>Todos os direitos reservados.<br>Seu IP: ";
echo pega_ip();
echo "<br>ISP: ";
echo ${$GLOBALS["ebbrsdt"]};
echo "</span>\n</p>\n</div>\n</footer>\n</div>\n<!-- BEGIN: Footer-->\n<script src=\"../app-assets/vendors/js/vendors.min.js\"></script>\n<script src=\"../app-assets/vendors/js/charts/apexcharts.min.js\"></script>\n<script src=\"../app-assets/vendors/js/extensions/tether.min.js\"></script>\n<script src=\"../app-assets/js/core/app-menu.js\"></script>\n<script src=\"../app-assets/js/core/app.js\"></script>\n<script src=\"../app-assets/js/scripts/components.js\"></script>\n<script src=\"../app-assets/js/scripts/pages/dashboard-analytics.js\"></script>\n<!-- END: Page JS-->\n</body>\n<!-- END: Body-->\n</html>\n";
