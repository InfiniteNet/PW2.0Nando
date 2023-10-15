<?php

$GLOBALS["firtqaghf"] = "administrador";
$GLOBALS["ufeplyii"] = "contato";
$GLOBALS["mheejqcnst"] = "info";
$GLOBALS["whbbfwju"] = "SQLU";
$GLOBALS["eelmkvpg"] = "SQLAdministrador";
$GLOBALS["qakzicchlvj"] = "SQLAdministrador";
$GLOBALS["xvcyhrfowke"] = "idmestre";
$GLOBALS["yoxrcf"] = "administrador";
$GLOBALS["ylhavxxjncm"] = "usuario";
$laxnqmln = "SQLU";
$GLOBALS["fcaglrc"] = "SQLUsuario";
$GLOBALS["iwridyzbdhqe"] = "usuario";
require_once "system/seguranca.php";
require_once "system/config.php";
$dglphmmn = "SQLUsuario";
$GLOBALS["efymqmh"] = "SQLAdministrador";
require_once "system/funcoes.system.php";
require_once "system/classe.ssh.php";
protegePagina("user");
$SQLUsuario = "SELECT * FROM usuario WHERE id_usuario = '" . $_SESSION["usuarioID"] . "'";
$SQLUsuario = $conn->prepare($SQLUsuario);
$SQLUsuario->execute();
$usuario = $SQLUsuario->fetch();
$fvvqshqq = "idmestre";
if ($usuario["ativo"] == 1 and $usuario["tipo"] == "revenda") {
    echo myalertuser("error", "Sua conta n\xc3\xa3o est\xc3\xa1 suspensa!", "../home.php");
    exit;
}
${$GLOBALS["xvcyhrfowke"]} = ${$GLOBALS["ylhavxxjncm"]}["id_mestre"];
${$GLOBALS["efymqmh"]} = "SELECT * FROM admin WHERE id_administrador = '1'";
${$GLOBALS["eelmkvpg"]} = $conn->prepare(${$GLOBALS["qakzicchlvj"]});
$SQLAdministrador->execute();
${$GLOBALS["yoxrcf"]} = $SQLAdministrador->fetch();
$ljsbidbmsil = "usuario";
${$GLOBALS["whbbfwju"]} = "SELECT * FROM usuario WHERE id_usuario = '" . ${$fvvqshqq} . "'";
${$laxnqmln} = $conn->prepare(${$GLOBALS["whbbfwju"]});
$SQLU->execute();
${$GLOBALS["mheejqcnst"]} = $SQLU->fetch();
if (${$GLOBALS["mheejqcnst"]} == 0) {
    ${$GLOBALS["ufeplyii"]} = ${$GLOBALS["firtqaghf"]}["celular"];
} else {
    $GLOBALS["anxwoosi"] = "info";
    ${$GLOBALS["ufeplyii"]} = $info["celular"];
}
echo "<body class=\"vertical-layout 1-column navbar-floating footer-static blank-page blank-page pace-done menu-hide vertical-overlay-menu\" data-open=\"click\" data-menu=\"vertical-menu-modern\" data-col=\"1-column\">\n<div class=\"app-content content\">\n<div class=\"content-wrapper\">\n<div class=\"content-body\">\n<section class=\"row flexbox-container\">\n<div class=\"mb-5\">\n<div class=\"col-xl-12 col-12 d-flex center-content-center\">\n<div class=\"row\">\n<div class=\"col-12\">\n<div class=\"card border-danger\">\n<div class=\"card-content\">\n<div class=\"card-body text-center\">\n<div class=\"mb-1 text-center\">\n<h3 class=\"text-danger\"><i class=\"font-medium-5\" data-feather='info'></i>Seu acesso est\xc3\xa1 suspenso!<br></h3>\n</div>\n<div class=\"mb-2\">\n<div class=\"avatar avatar-xl bg-danger\">\n<div class=\"avatar-content\">\n<i data-feather='slash'></i>\n</div>\n</div>\n</div>\n<div class=\"text-center\">\n<div class=\"form-group text-center mb-2\">\n<div class=\"demo-spacing-0\">\n<div class=\"alert alert-danger\" role=\"alert\">\n<h4 class=\"alert-heading\"><i data-feather='dollar-sign'></i>Pagamento em atraso!</h4>\n<div class=\"alert-body\">\nEntre em contato com seu MASTER e <br>resolva a sua situa\xc3\xa7\xc3\xa3o agora mesmo!\n</div>\n</div>\n</div>\n</div>\n<div class=\"mb-2\">\n<h5><i class=\"font-medium-2 text-primary\" data-feather='smartphone'></i>Whatsapp: <a class=\"text-bold-800 \" href=\"https://api.whatsapp.com/send?phone=55";
echo ${$GLOBALS["ufeplyii"]};
echo "&text=Oi,%20sou%20(";
echo strtoupper(${$ljsbidbmsil}["nome"]);
echo ")%20revendedor%20VPN,%20vi%20que%20meu%20painel%20est%C3%A1%20suspenso!%20Gostaria%20de%20renovar%20minha%20revenda!\" target=\"_blank\">CLICK AQUI \xf0\x9f\x9a\x80</a></h5>\n</div>\n<a href=\"home.php?page=renovacao\" class=\"btn btn-primary btn-block\"><i data-feather='shopping-cart'></i><b>RENOVAR</b></a>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</section>\n</div>\n</div>\n</div>\n<!-- BEGIN: Footer-->\n<script src=\"../app-assets/vendors/js/vendors.min.js\"></script>\n<script src=\"../app-assets/vendors/js/charts/apexcharts.min.js\"></script>\n<script src=\"../app-assets/vendors/js/extensions/tether.min.js\"></script>\n<script src=\"../app-assets/js/core/app-menu.js\"></script>\n<script src=\"../app-assets/js/core/app.js\"></script>\n<script src=\"../app-assets/js/scripts/components.js\"></script>\n<script src=\"../app-assets/js/scripts/pages/dashboard-analytics.js\"></script>\n<!-- END: Page JS-->\n</body>\n<!-- END: Body-->\n</html>\n";
