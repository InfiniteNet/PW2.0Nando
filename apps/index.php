<?php

$GLOBALS["evnmokpb"] = "page";
$GLOBALS["qetbymghkoja"] = "administrador";
$GLOBALS["npjuvwe"] = "SQLAdministrador";
$GLOBALS["qewgiwtb"] = "SQLAdministrador";
require_once "../pages/system/funcoes.php";
$pbkroro = "SQLAdministrador";
require_once "../pages/system/seguranca.php";
$qgxwbnkpaq = "administrador";
$GLOBALS["vrldgxqxdt"] = "administrador";
require_once "../pages/system/config.php";
require_once "../pages/system/classe.ssh.php";
$SQLAdministrador = "SELECT * FROM admin WHERE id_administrador = '1'";
$SQLAdministrador = $conn->prepare($SQLAdministrador);
$SQLAdministrador->execute();
$administrador = $SQLAdministrador->fetch();
echo "<!doctype html>\n<html lang=\"pt-br\">\n<head>\n<!-- META SECTION -->\n<title>Apps ";
$jzjulxe = "administrador";
$GLOBALS["xnbadwgsk"] = "administrador";
echo $administrador["site"];
echo "</title>\n<meta name=\"title\" content=\"";
echo $administrador["site"];
echo " - Internet Ilimitada 5G\">\n<meta name=\"description\" content=\"";
echo $administrador["site"];
echo " - Internet ilimitada de alta qualidade.\">\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\n<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />\n<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />\n<!-- END META SECTION -->\n<!-- Bootstrap Css -->\n<link href=\"./css/bootstrap.min.css\" id=\"bootstrap-style\" rel=\"stylesheet\" type=\"text/css\" />\n<!-- Icons Css -->\n<link href=\"./css/icons.min.css\" rel=\"stylesheet\" type=\"text/css\" />\n<!-- App Css-->\n<link href=\"./css/app.min.css\" id=\"app-style\" rel=\"stylesheet\" type=\"text/css\" />\n<!-- Noty CSS -->\n<link rel=\"stylesheet\" href=\"../../cdn.jsdelivr.net/gh/needim/noty%4077268c46/lib/noty.html\">\n<link rel=\"stylesheet\" href=\"../../cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.html\">\n<!-- SCRIPT -->\n</head>\n<body data-layout=\"horizontal\" data-topbar=\"colored\">\n<!-- Begin page -->\n<header id=\"page-topbar\" style=\"background-image: url(../../scdn.x2br.co/images/hori-nav-bg.html)\" >\n<div class=\"navbar-header\" style=\"height: 150px;\">\n<input type=\"hidden\" id=\"url_downs\" value=\"release/index.html\">\n<input type=\"hidden\" id=\"apps\" value=\"release/index.html\">\n<div class=\"row text-center\" style=\"display:contents;\">\n<div class=\"col-12\">\n<h1 class=\"display-4 text-white\"><b>Apps ";
echo $administrador["site"];
echo "</h1>\n</div>\n</div>\n</div>\n</header>\n<!-- BEGIN: Content-->\n<div class=\"main-content mt-5\">\n<div class=\"page-content\">\n<div class=\"container-fluid\">\n<!-- start page title -->\n<div class=\"row\">\n<div class=\"col-12\">\n<div class=\"page-title-box text-center\">\n<h2 class=\"mb-0\">NOSSOS APLICATIVOS</h2>\n</div>\n</div>\n</div>\n<div class=\"col-md-3 col-xl-12\">\n<!-- Dashboard Analytics end -->\n";
if (isset($_GET["page"])) {
    $GLOBALS["kdwjisxfmjh"] = "page";
    $page = $_GET["page"];
    if ($page and file_exists("apps/" . $page . ".php")) {
        $bcsnufw = "page";
        include "apps/" . $page . ".php";
    } else {
        include "../apps/downloads.php";
    }
} else {
    include "../apps/downloads.php";
}
echo "<!-- END: Content-->\n</div>\n</body>\n<!-- RODAPE -->\n<footer class=\"footer\">\n<div class=\"container-fluid\">\n<div class=\"row\">\n<div class=\"col-sm-6\">\n2021 - <script> document.write(new Date().getFullYear())</script> ";
echo ${$GLOBALS["xnbadwgsk"]}["site"];
echo "\xc2\xa9 <b><a href=\"termos.php\" target=\"_self\"></i>Termos de uso</b></a>\n</div>\n<div class=\"col-sm-6\">\n<div class=\"text-sm-right\">\nDesenvolvido por <b><a href=\"https://t.me/paineis\" target=\"_blank\"></i>NTECH SYSTEM</b></a>\n</div>\n</div>\n</div>\n</div>\n</footer>\n<!-- FIM RODAPE -->\n</html>\n";
