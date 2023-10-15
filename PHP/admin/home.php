<?php

$GLOBALS["skajxfwgp"] = "isp";
$GLOBALS["epibogcmwccl"] = "page";
$GLOBALS["nxepnpvwnot"] = "all_usuarios_qtd";
$GLOBALS["vcsmfux"] = "administrador";
$GLOBALS["xoiucygx"] = "SQLchamadoscli";
$GLOBALS["gjtjulizk"] = "all_chamados";
$GLOBALS["dcmwsfa"] = "SQLchamadoscli2";
$GLOBALS["kwmajrwmdqo"] = "totalnoti_chamados";
$GLOBALS["hotsklthhk"] = "SQLnoti3";
$GLOBALS["xdyxyl"] = "servidor_qtd";
$GLOBALS["vvdabnj"] = "SQLnoti2";
$GLOBALS["erqyqlbctjvf"] = "totalnoti";
$GLOBALS["vnrihbykofpl"] = "SQLnoti";
$GLOBALS["xjtfdtqvr"] = "SQLchamadoscli2";
$GLOBALS["pjnxbthomhg"] = "faturas";
$GLOBALS["crvpzpvcx"] = "SQLfaturas";
$GLOBALS["dijdmuaccyr"] = "SQLArquivos";
$GLOBALS["ezxmotxxtsu"] = "servidor_qtd";
$GLOBALS["kxokqbgsi"] = "revenda_qtd_susp";
$GLOBALS["ilgojqvkpbc"] = "all_usuarios_revenda_qtd";
$hglbcgtlju = "SQLArquivos";
$GLOBALS["whrzfip"] = "totalnoti";
$GLOBALS["eegehjfkgcx"] = "SQLRevenda";
$GLOBALS["vpmplxvpmald"] = "all_usuarios_vpn_qtd_susp";
$GLOBALS["oydjamuk"] = "all_usuarios_vpn_qtd";
$GLOBALS["wuxdnmj"] = "SQLnoti2";
$GLOBALS["bdsugathp"] = "SQLnoti3";
$GLOBALS["denuugsrv"] = "SQLVPN";
$GLOBALS["fhgvbkspl"] = "SQLUsuarios";
$GLOBALS["vfbflixarms"] = "total_acesso_ssh_online";
$igidooteed = "SQLfaturas";
$GLOBALS["orbrdnp"] = "total_acesso_ssh";
$GLOBALS["jqehmvkdyc"] = "SQLAcessoSSH";
$GLOBALS["xtwxxydnbc"] = "SQLAcessoSSH";
$GLOBALS["nwjvayxib"] = "SQLnoti2";
$GLOBALS["tmmlxdvr"] = "contas_ssh";
$rvwavjdb = "SQLRevenda";
$GLOBALS["vnykmef"] = "linha";
$GLOBALS["lqmnlc"] = "SQLContasSSH";
$GLOBALS["dfsyvnmvetp"] = "ssh_susp_qtd";
$GLOBALS["yynyaf"] = "SQLUsuario_sshSUSP";
$GLOBALS["zteffx"] = "SQLAdministrador";
$GLOBALS["mpijfpw"] = "SQLVPN";
$GLOBALS["ioiqzqrp"] = "data_atual";
$kcgpwizchco = "SQLUsuarios";
require_once "../pages/system/funcoes.php";
$GLOBALS["lheqdd"] = "all_usuarios_qtd";
$iqreidqkvazd = "SQLServidor";
$idvvrktqpt = "administrador";
require_once "../pages/system/seguranca.php";
require_once "../pages/system/config.php";
$jfkwkius = "SQLVPN";
$npcplvuwv = "administrador";
$GLOBALS["zkrofiotf"] = "todosarquivos";
require_once "../pages/system/classe.ssh.php";
protegePagina("donoadmin");
$ncbboyhfajlm = "SQLUsuarios";
$lsewmdfnumxt = "SQLAcessoSSH";
$GLOBALS["oyixqnwq"] = "SQLAcessoSSH";
$mfqthgx = "administrador";
$dkxdsgorx = "SQLArquivos";
$GLOBALS["cuftjijtk"] = "SQLAdministrador";
$GLOBALS["wvtrjy"] = "contas_ssh";
$data_atual = date("Y-m-d H:i:s");
$SQLAdministrador = "SELECT * FROM admin WHERE id_administrador = '" . $_SESSION["usuarioID"] . "'";
$SQLAdministrador = $conn->prepare($SQLAdministrador);
$SQLAdministrador->execute();
$administrador = $SQLAdministrador->fetch();
$GLOBALS["koxtpycyr"] = "all_chamados";
$yadjbqcxxhm = "SQLContasSSH";
$SQLUsuario_sshSUSP = "select * from conta_ssh WHERE status='2' ";
$SQLUsuario_sshSUSP = $conn->prepare($SQLUsuario_sshSUSP);
$ptwugldcgaf = "SQLServidor";
$SQLUsuario_sshSUSP->execute();
$ssh_susp_qtd += $SQLUsuario_sshSUSP->rowCount();
$GLOBALS["rfjgtngcq"] = "SQLServidor";
$fcqfusuqz = "total_acesso_ssh";
$SQLContasSSH = "SELECT * FROM conta_ssh ";
$apqcxvdds = "SQLRevenda";
$GLOBALS["kyzmnjluyj"] = "SQLRevenda";
$dmvttsfnc = "SQLAcessoSSH";
$SQLContasSSH = $conn->prepare($SQLContasSSH);
$GLOBALS["hjsfowrrvg"] = "total_acesso_ssh_online";
$SQLContasSSH->execute();
$contas_ssh = $SQLContasSSH->rowCount();
$total_acesso_ssh = 0;
$SQLAcessoSSH = "SELECT sum(acesso) AS quantidade  FROM conta_ssh  ";
$SQLAcessoSSH = $conn->prepare($SQLAcessoSSH);
$SQLAcessoSSH->execute();
$SQLAcessoSSH = $SQLAcessoSSH->fetch();
$vuvqwgivkz = "SQLnoti";
$total_acesso_ssh += $SQLAcessoSSH["quantidade"];
$GLOBALS["ydtsjpm"] = "administrador";
$total_acesso_ssh_online = 0;
$SQLAcessoSSH = "SELECT sum(online) AS quantidade  FROM conta_ssh  ";
$SQLAcessoSSH = $conn->prepare($SQLAcessoSSH);
$GLOBALS["etqdoajempj"] = "SQLRevenda";
$SQLAcessoSSH->execute();
$SQLAcessoSSH = $SQLAcessoSSH->fetch();
$ipgjgtqq = "SQLRevenda";
$total_acesso_ssh_online += $SQLAcessoSSH["quantidade"];
$SQLUsuarios = "SELECT * FROM usuario ";
$GLOBALS["zdzusphjgo"] = "totalnoti_fatura";
$SQLUsuarios = $conn->prepare($SQLUsuarios);
$SQLUsuarios->execute();
$all_usuarios_qtd = $SQLUsuarios->rowCount();
$SQLVPN = "SELECT * FROM usuario  where tipo='vpn' ";
$SQLVPN = $conn->prepare($SQLVPN);
$GLOBALS["cqfkrjyhdi"] = "SQLfaturas";
$SQLVPN->execute();
$all_usuarios_vpn_qtd = $SQLVPN->rowCount();
$SQLVPN = "SELECT * FROM usuario  where tipo='vpn' and ativo='2' ";
$SQLVPN = $conn->prepare($SQLVPN);
$SQLVPN->execute();
$GLOBALS["autbmpi"] = "SQLchamadoscli";
$all_usuarios_vpn_qtd_susp = $SQLVPN->rowCount();
$SQLRevenda = "SELECT * FROM usuario  where tipo='revenda' ";
$SQLRevenda = $conn->prepare($SQLRevenda);
$SQLRevenda->execute();
$all_usuarios_revenda_qtd = $SQLRevenda->rowCount();
$SQLRevenda = "SELECT * FROM usuario  where tipo='revenda' and ativo='2'";
$SQLRevenda = $conn->prepare($SQLRevenda);
$SQLRevenda->execute();
$revenda_qtd_susp = $SQLRevenda->rowCount();
$SQLServidor = "SELECT * FROM servidor ";
$SQLServidor = $conn->prepare($SQLServidor);
$SQLServidor->execute();
$servidor_qtd = $SQLServidor->rowCount();
$SQLArquivos = "select * from  arquivo_download";
$GLOBALS["irjbuhllkl"] = "SQLchamadoscli";
$SQLArquivos = $conn->prepare($SQLArquivos);
$SQLArquivos->execute();
$todosarquivos = $SQLArquivos->rowCount();
$SQLfaturas = "select * from  fatura where status='pendente'";
$SQLfaturas = $conn->prepare($SQLfaturas);
$SQLfaturas->execute();
$faturas = $SQLfaturas->rowCount();
$SQLnoti = "select * from  notificacoes where lido='nao' and admin='sim'";
$SQLnoti = $conn->prepare($SQLnoti);
$SQLnoti->execute();
$totalnoti = $SQLnoti->rowCount();
$SQLnoti2 = "select * from  notificacoes where lido='nao' and tipo='fatura' and admin='sim'";
$ghtjbgfyzkxl = "SQLnoti3";
$SQLnoti2 = $conn->prepare($SQLnoti2);
$SQLnoti2->execute();
$totalnoti_fatura = $SQLnoti2->rowCount();
$SQLnoti3 = "select * from  notificacoes where lido='nao' and tipo='chamados' and admin='sim'";
$SQLnoti3 = $conn->prepare($SQLnoti3);
$GLOBALS["ctevxbilqwc"] = "total_acesso_ssh_online";
$SQLnoti3->execute();
$totalnoti_chamados = $SQLnoti3->rowCount();
$SQLchamadoscli2 = "select * from  chamados where status='resposta' and id_mestre=0";
$SQLchamadoscli2 = $conn->prepare($SQLchamadoscli2);
$SQLchamadoscli2->execute();
$all_chamados += $SQLchamadoscli2->rowCount();
$SQLchamadoscli = "select * from  chamados where status='aberto' and id_mestre=0";
$SQLchamadoscli = $conn->prepare($SQLchamadoscli);
$SQLchamadoscli->execute();
$all_chamados += $SQLchamadoscli->rowCount();
echo "<!DOCTYPE html>\n<html class=\"loading bordered-layout\" lang=\"pt\" data-layout=\"bordered-layout\" data-textdirection=\"ltr\">\n<!-- BEGIN: Head-->\n<head>\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\n<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\n<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">\n<meta name=\"description\" content=\"Gerenciador de conex\xc3\xb4es SSH\">\n<meta name=\"keywords\" content=\"VPN GESTOR-SSH \xf0\x9f\x9a\x80, VPN, SSH, Gratis, Registrar\">\n<meta name=\"author\" content=\"Crazy\">\n<meta name=\"msapplication-TileColor\" content=\"#FFFFFF\">\n<meta name=\"theme-color\" content=\"#FFFFFF\">\n<title>";
echo $administrador["site"];
echo "</title>\n<link rel=\"apple-touch-icon\" href=\"../app-assets/images/ico/favicon.ico\">\n<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"../app-assets/images/ico/favicon.ico\">\n<link href=\"https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600\" rel=\"stylesheet\">\n<!-- BEGIN: Vendor CSS-->\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../app-assets/vendors/css/vendors.min.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../app-assets/vendors/css/charts/apexcharts.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../app-assets/vendors/css/extensions/toastr.min.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css\">\n<!-- BEGIN: Vendor CSS-->\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../app-assets/vendors/css/vendors.min.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../app-assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../app-assets/vendors/css/tables/datatable/rowGroup.bootstrap5.min.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../app-assets/vendors/css/forms/select/select2.min.css\">\n<!-- END: Vendor CSS-->\n<!-- END: Vendor CSS-->\n<!-- BEGIN: Theme CSS-->\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../app-assets/css/bootstrap.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../app-assets/css/bootstrap-extended.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../app-assets/css/colors.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../app-assets/css/components.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../app-assets/css/themes/dark-layout.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../app-assets/css/themes/bordered-layout.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../app-assets/css/themes/semi-dark-layout.css\">\n<!-- BEGIN: Page CSS-->\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../app-assets/css/core/menu/menu-types/vertical-menu.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../app-assets/css/plugins/charts/chart-apex.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../app-assets/css/plugins/extensions/ext-component-toastr.css\">\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../app-assets/css/pages/app-invoice-list.css\">\n<!-- END: Page CSS-->\n<!-- BEGIN: Custom CSS-->\n<link rel=\"stylesheet\" type=\"text/css\" href=\"../assets/css/style.css\">\n<!-- END: Custom CSS-->\n<!--<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>-->\n<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js\"></script>\n<script src=\"http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js\"></script>\n</head>\n<!-- END: Head-->\n<!-- BEGIN: Body-->\n<body class=\"vertical-layout vertical-menu-modern  navbar-floating footer-static  \" data-open=\"click\" data-menu=\"vertical-menu-modern\" data-col=\"\">\n<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">\n<div class=\"modal-dialog\">\n<div class=\"modal-content\">\n<div class=\"modal-header\">\n<h3 class=\"modal-title\" id=\"lineModalLabel\">Notificar Geral!</h3>\n</div>\n<div class=\"modal-body\">\n<form name=\"editaserver\" action=\"pages/notificacoes/notificar_home.php\" method=\"post\">\n<div class=\"mb-1\">\n<input type=\"hidden\" class=\"form-control\" name=\"clientes\" value=\"1\">\n<label for=\"message-text\" class=\"col-form-label\">Mensagem:</label>\n<textarea class=\"form-control\" name=\"msg\" rows=\"5\" cols=\"20\" wrap=\"off\" placeholder=\"Digita sua mensagem...\"></textarea>\n</div>\n<div class=\"col-12 text-center mt-2 pt-50\">\n<button class=\"btn btn-success\" data-bs-dismiss=\"modal\">Confirmar</button>\n<button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\">Cancelar</button>\n</div>\n</form>\n</div>\n</div>\n</div>\n</div>\n<script>\nfunction usuariosonline() {\n// Requisi\xc3\xa7\xc3\xa3o\n\$.post('pages/ssh/online_home.php?requisicao=1',\nfunction(resposta) {\n//Adiciona Efeito Fade\n\$(\"#usuarioson\").fadeOut(\"slow\").fadeIn('slow');\n// Limpa\n\$('#usuarioson').empty();\n// Exibe\n\$('#usuarioson').append(resposta);\n});\n}\n// Intervalo para cada Chamada\nsetInterval(\"usuariosonline()\", 15002);\n// Ap\xc3\xb3s carregar a Pagina Primeiro Requisito\n\$(function() {\n// Requisita Fun\xc3\xa7\xc3\xa3o acima\nusuariosonline();\n});\n</script>\n<script>\nfunction atualizar() {\n// Fazendo requisi\xc3\xa7\xc3\xa3o AJAX\n\$.post('pages/ssh/online_home.php?requisicao=2',\nfunction(online) {\n// Exibindo frase\n\$('#online_nav').html(online);\n\$('#online').html(online);\n}, 'JSON');\n}\n// Definindo intervalo que a fun\xc3\xa7\xc3\xa3o ser\xc3\xa1 chamada\nsetInterval(\"atualizar()\", 4001);\n// Quando carregar a p\xc3\xa1gina\n\$(function() {\n// Faz a primeira atualiza\xc3\xa7\xc3\xa3o\natualizar();\n});\n</script>\n<script>\n\$(window).load(function() {\n\$(\".se-pre-con\").fadeOut('slow');\n});\n</script>\n<!-- BEGIN: Header-->\n<nav class=\"header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl\">\n<div class=\"navbar-container d-flex content\">\n<div class=\"bookmark-wrapper d-flex align-items-center\">\n<ul class=\"nav navbar-nav d-xl-none\">\n<li class=\"nav-item\"><a class=\"nav-link menu-toggle\" href=\"#\"><i class=\"ficon\" data-feather=\"menu\"></i></a></li>\n</ul>\n</div>\n<ul class=\"nav navbar-nav align-items-center ms-auto\">\n<li class=\"nav-item\"><a class=\"nav-link nav-link-style\"><i class=\"ficon\" data-feather=\"moon\"></i></a>\n</li>\n<li class=\"nav-item\"><a type=\"button\" class=\"nav-link\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\"><i class=\"ficon\" data-feather='message-square'></i></a></li>\n";
if ($total_acesso_ssh_online > 0) {
    $pknttnm = "total_acesso_ssh_online";
    $whfsuhgc = "total_acesso_ssh_online";
    $GLOBALS["xaqqlglm"] = "total_acesso_ssh_online";
    echo "<li class=\"nav-item dropdown dropdown-notification me-25\"><a class=\"nav-link\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"ficon\" data-feather=\"zap\"></i><span class=\"badge rounded-pill bg-success badge-up badge-glow cart-item-count\" id=\"online_nav\">";
    echo $total_acesso_ssh_online;
    echo "</span></a>\n<ul class=\"dropdown-menu dropdown-menu-media dropdown-menu-end\">\n<li class=\"dropdown-menu-header\">\n<div class=\"dropdown-header d-flex\">\n<h4 class=\"notification-title mb-0 me-auto\">Contas Online</h4>\n<div class=\"badge rounded-pill badge-light-success\" id=\"online\">\n";
    echo $total_acesso_ssh_online;
    echo "</div>\n</div>\n</li>\n";
    if ($total_acesso_ssh_online > 0) {
        echo "<li class=\"scrollable-container media-list\" id=\"usuarioson\">\n</li>\n";
    } else {
        echo "<li class=\"scrollable-container media-list\">\n<div class=\"list-item d-flex align-items-start\">\n<div class=\"me-1\">\n<div class=\"avatar bg-light-danger\">\n<div class=\"avatar-content\"><i data-feather='zap-off'></i>\n</div>\n</div>\n</div>\n<div class=\"list-item-body flex-grow-1\">\n<p class=\"media-heading\"><span class=\"fw-bolder\">Nenhuma conta SSH online!</span></p>\n<small class=\"notification-text\">Ningu\xc3\xa9m conectado no momento!</small>\n</div>\n</div>\n</li>\n";
    }
    echo "<li class=\"dropdown-menu-footer\">\n<div class=\"d-flex justify-content-between mb-0\">\n</div><a class=\"btn btn-primary w-100\" href=\"home.php?page=ssh/online\">Ver Todos</a>\n</li>\n</ul>\n</li>\n";
} else {
    $GLOBALS["qynrmmxbpr"] = "total_acesso_ssh_online";
    $ceagfn = "total_acesso_ssh_online";
    echo "<li class=\"nav-item dropdown dropdown-notification me-25\"><a class=\"nav-link\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"ficon\" data-feather=\"zap-off\"></i><span class=\"badge rounded-pill bg-danger badge-up badge-glow cart-item-count\" id=\"online_nav\">";
    echo $total_acesso_ssh_online;
    echo "</span></a>\n<ul class=\"dropdown-menu dropdown-menu-media dropdown-menu-end\">\n<li class=\"dropdown-menu-header\">\n<div class=\"dropdown-header d-flex\">\n<h4 class=\"notification-title mb-0 me-auto\">Contas Online</h4>\n<div class=\"badge rounded-pill badge-light-danger\" id=\"online\">\n";
    echo $total_acesso_ssh_online;
    echo "</div>\n</div>\n</li>\n";
    if (${$GLOBALS["vfbflixarms"]} > 0) {
        echo "<li class=\"scrollable-container media-list\" id=\"usuarioson\">\n</li>\n";
    } else {
        echo "<li class=\"scrollable-container media-list\">\n<div class=\"list-item d-flex align-items-start\">\n<div class=\"me-1\">\n<div class=\"avatar bg-light-danger\">\n<div class=\"avatar-content\"><i data-feather='zap-off'></i>\n</div>\n</div>\n</div>\n<div class=\"list-item-body flex-grow-1\">\n<p class=\"media-heading\"><span class=\"fw-bolder\">Nenhuma conta SSH online!</span></p>\n<small class=\"notification-text\">Ningu\xc3\xa9m conectado no momento!</small>\n</div>\n</div>\n</li>\n";
    }
    echo "<li class=\"dropdown-menu-footer\">\n<div class=\"d-flex justify-content-between mb-0\">\n</div><a class=\"btn btn-primary w-100\" href=\"home.php?page=ssh/online\">Ver Todos</a>\n</li>\n</ul>\n</li>\n";
}
if (${$GLOBALS["whrzfip"]} > 0) {
    echo "<li class=\"nav-item dropdown dropdown-notification me-25\"><a class=\"nav-link\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"ficon\" data-feather=\"bell\"></i><span class=\"badge rounded-pill bg-danger badge-up badge-glow\">";
    $letccxielis = "totalnoti";
    echo ${$GLOBALS["erqyqlbctjvf"]};
    echo "</span></a>\n<ul class=\"dropdown-menu dropdown-menu-media dropdown-menu-end\">\n<li class=\"dropdown-menu-header\">\n<div class=\"dropdown-header d-flex\">\n<h4 class=\"notification-title mb-0 me-auto\">Notifica\xc3\xa7\xc3\xb5es</h4>\n<div class=\"badge rounded-pill badge-light-danger\">";
    echo $totalnoti;
    echo "</div>\n</div>\n</li>\n";
} else {
    $konzdoix = "totalnoti";
    $GLOBALS["toscmtdype"] = "totalnoti";
    echo "<li class=\"nav-item dropdown dropdown-notification me-25\"><a class=\"nav-link\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"ficon\" data-feather=\"bell-off\"></i><span class=\"badge rounded-pill bg-success badge-up badge-glow\">";
    echo $totalnoti;
    echo "</span></a>\n<ul class=\"dropdown-menu dropdown-menu-media dropdown-menu-end\">\n<li class=\"dropdown-menu-header\">\n<div class=\"dropdown-header d-flex\">\n<h4 class=\"notification-title mb-0 me-auto\">Notifica\xc3\xa7\xc3\xa3o</h4>\n<div class=\"badge rounded-pill badge-light-success\">";
    echo $totalnoti;
    echo "</div>\n</div>\n</li>\n";
}
echo "<li class=\"scrollable-container media-list\"><a class=\"d-flex\" href=\"#\">\n";
if (${$GLOBALS["erqyqlbctjvf"]} == 0) {
    echo "</h2>\n<div class=\"list-item d-flex align-items-start\">\n<div class=\"me-1\">\n<div class=\"avatar bg-light-success\">\n<div class=\"avatar-content\"><i class=\"avatar-icon\" data-feather=\"bell-off\"></i>\n</div>\n</div>\n</div>\n<div class=\"list-item-body flex-grow-1\">\n<p class=\"media-heading\"><span class=\"fw-bolder\">nenhuma notifica\xc3\xa7\xc3\xa3o!</span></p>\n<small class=\"notification-text\">Voc\xc3\xaa n\xc3\xa3o possui notifica\xc3\xa7\xc3\xb5es</small>\n</div>\n</div>\n";
} else {
    echo "</a><a class=\"d-flex\" href=\"#\">\n<div class=\"list-item d-flex align-items-start\">\n<div class=\"me-1\">\n<div class=\"avatar bg-light-danger\">\n<div class=\"avatar-content\"><i class=\"avatar-icon\" data-feather=\"bell\"></i>\n</div>\n</div>\n</div>\n";
    if (${$GLOBALS["erqyqlbctjvf"]} == 1) {
        echo "<div class=\"list-item-body flex-grow-1\">\n<p class=\"media-heading\"><span class=\"fw-bolder\">";
        echo ${$GLOBALS["erqyqlbctjvf"]};
        echo " notifica\xc3\xa7\xc3\xa3o!</span></p><small class=\"notification-text\">Voc\xc3\xaa possui novas notifica\xc3\xa7\xc3\xb5es!</small>\n</div>\n";
    } else {
        $jcdmvnxc = "totalnoti";
        echo "<div class=\"list-item-body flex-grow-1\">\n<p class=\"media-heading\"><span class=\"fw-bolder\">";
        echo $totalnoti;
        echo " notifica\xc3\xa7\xc3\xb5es!</span></p><small class=\"notification-text\">Voc\xc3\xaa possui novas notifica\xc3\xa7\xc3\xb5es!</small>\n</div>\n";
    }
    echo "</div>\n";
}
echo "</a>\n</li>\n<li class=\"dropdown-menu-footer\"><a class=\"btn btn-primary w-100\" href=\"?page=notificacoes/notificacoes&ler=all\">Ver Notifica\xc3\xa7\xc3\xb5es</a></li>\n</ul>\n</li>\n<li class=\"nav-item dropdown dropdown-user\"><a class=\"nav-link dropdown-toggle dropdown-user-link\" id=\"dropdown-user\" href=\"#\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">\n<div class=\"user-nav d-sm-flex d-none\"><span class=\"user-name fw-bolder text-primary\">";
echo ucfirst(${$idvvrktqpt}["nome"]);
echo "</span><span class=\"user-status\">ADMINISTRADOR</span></div><span class=\"avatar\"><img class=\"round\" src=\"../app-assets/images/avatars/avatar6.png\" alt=\"avatar\" height=\"40\" width=\"40\"><span class=\"avatar-status-online\"></span></span>\n</a>\n<div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdown-user\"><a class=\"dropdown-item\" href=\"home.php?page=admin/dados\"><i class=\"me-50\" data-feather=\"user\"></i>Meus Dados</a>\n<a class=\"dropdown-item\" href=\"home.php?page=apis/gerenciar\"><i class=\"me-50\" data-feather=\"settings\"></i>Configura\xc3\xa7\xc3\xb5es</a>\n<a class=\"dropdown-item\" href=\"sair.php\"><i class=\"me-50\" data-feather=\"power\"></i>Sair</a>\n</div>\n</li>\n</ul>\n</div>\n</nav>\n<!-- END: Header-->\n<!-- BEGIN: Main Menu-->\n<div class=\"main-menu menu-fixed menu-light menu-accordion menu-shadow\" data-scroll-to-active=\"false\">\n<div class=\"navbar-header\">\n<ul class=\"nav navbar-nav flex-row\">\n<li class=\"nav-item me-auto\"><a class=\"navbar-brand\" href=\"/admin/home.php\"><span class=\"brand-logo\">\n<img class=\"round\" src=\"../app-assets/images/logo/logo.png\" alt=\"avatar\" height=\"35\" width=\"28\" />\n</span>\n<h2 class=\"brand-text\">";
echo ${$GLOBALS["vcsmfux"]}["site"];
echo "</h2>\n</a></li>\n<li class=\"nav-item nav-toggle\"><a class=\"nav-link modern-nav-toggle pe-0\" data-bs-toggle=\"collapse\"><i class=\"d-block d-xl-none text-primary toggle-icon font-medium-4\" data-feather=\"x\"></i><i class=\"d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary\" data-feather=\"disc\" data-ticon=\"disc\"></i></a></li>\n</ul>\n</div>\n<div class=\"shadow-bottom\"></div>\n<div class=\"main-menu-content\">\n<ul class=\"navigation navigation-main\" id=\"main-menu-navigation\" data-menu=\"menu-navigation\">\n<li class=\"active\"><a class=\"d-flex align-items-center\" href=\"home.php\"><i data-feather=\"home\"></i><span class=\"menu-title text-truncate\" data-i18n=\"Dashboards\">DASHBOARD</span></a></li>\n<li class=\" navigation-header\"><span>MENU</span>\n</li>\n<li class=\" nav-item\"><a class=\"d-flex align-items-center\" href=\"#\"><i class=\"text-success\" data-feather=\"shield\"></i><span class=\"menu-title text-truncate\" data-i18n=\"Area VPN\">CONTAS SSH</span><span class=\"badge badge-light-success rounded-pill ms-auto me-1\">";
echo ${$GLOBALS["wvtrjy"]};
echo "</span></a>\n<ul class=\"menu-content\">\n<li><a href=\"?page=ssh/online\"><i data-feather=\"zap\"></i><span class=\"menu-item\" data-i18n=\"SSH Online\">SSH Online</span></a></li>\n<li><a href=\"?page=ssh/contas\"><i data-feather='list'></i><span class=\"menu-item\" data-i18n=\"Listar VPN\">Contas SSH</span></a>\n<li><a href=\"?page=ssh/suspenso\"><i data-feather='user-x'></i><span class=\"menu-item\" data-i18n=\"Listar Susp\">SSH Suspensas</span></a></li>\n</ul>\n</li>\n<li class=\" nav-item\"><a class=\"d-flex align-items-center\" href=\"#\"><i class=\"text-info\" data-feather=\"users\"></i><span class=\"menu-title text-truncate\" data-i18n=\"Area de Cliente\">REVENDAS</span><span class=\"badge badge-light-info rounded-pill ms-auto me-1\">";
echo ${$GLOBALS["nxepnpvwnot"]};
echo "</span></a>\n<ul class=\"menu-content\">\n<li><a href=\"?page=usuario/1-etapa\"><i data-feather='user-plus'></i><span class=\"menu-item\" data-i18n=\"Novo Usu\xc3\xa1rio\">Novo Revendedor</span></a></li>\n<li><a href=\"?page=usuario/revenda\"><i data-feather='users'></i><span class=\"menu-item\" data-i18n=\"Revendedores\">Revendedores</span></a></li>\n<li><a href=\"?page=usuario/addservidor\"><i data-feather='user-check'></i><span class=\"menu-item\" data-i18n=\"Add. Sevidor\">Adicionar Servidor</span></a></li>\n<li><a href=\"?page=servidor/alocados\"><i data-feather='edit'></i><span class=\"menu-item\" data-i18n=\"Alterar\">Alterar Revenda</span></a></li>\n</ul>\n</li>\n<li class=\" nav-item\"><a class=\"d-flex align-items-center\" href=\"#\"><i class=\"text-warning\" data-feather=\"server\"></i><span class=\"menu-title text-truncate\" data-i18n=\"Alterar\">SERVIDORES</span><span class=\"badge badge-light-warning rounded-pill ms-auto me-1\">";
echo ${$GLOBALS["xdyxyl"]};
echo "</span></a>\n<ul class=\"menu-content\">\n<li><a href=\"?page=servidor/adicionar\"><i data-feather='hard-drive'></i><span class=\"menu-item\" data-i18n=\"Alterar\">Criar Servidor</span></a></li>\n<li><a href=\"?page=servidor/listar\"><i data-feather='list'></i><span class=\"menu-item\" data-i18n=\"Alterar\">Listar Servidores</span></a></li>\n</ul>\n</li>\n<li class=\" nav-item\"><a class=\"d-flex align-items-center\" href=\"#\"><i class=\"text-danger\" data-feather='life-buoy'></i></i><span class=\"menu-title text-truncate\" data-i18n=\"Chamados\">TICKETS</span><span class=\"badge badge-light-danger rounded-pill ms-auto me-1\">";
echo ${$GLOBALS["koxtpycyr"]};
echo "</span></a>\n<ul class=\"menu-content\">\n<li><a href=\"?page=chamados/abertas\"><i data-feather='bell'></i><span class=\"menu-item\" data-i18n=\"Abertos\">Abertos</span></a></li>\n<li><a href=\"?page=chamados/respondidos\"><i data-feather='bell-off'></i><span class=\"menu-item\" data-i18n=\"Respondidos\">Respondidos</span></a></li>\n<li><a href=\"?page=chamados/encerrados\"><i data-feather='slash'></i><span class=\"menu-item\" data-i18n=\"Encerrados\">Encerrados</span></a></li>\n</ul>\n</li>\n<li class=\" nav-item\"><a class=\"d-flex align-items-center\" href=\"#\"><i class=\"text-primary\" data-feather=\"settings\"></i><span class=\"menu-title text-truncate\" data-i18n=\"Configura\xc3\xa7\xc3\xb5es\">CONFIGURA\xc3\x87\xc3\x95ES</span></a>\n<ul class=\"menu-content\">\n<li><a href=\"../painel.php\"><i data-feather='github'></i><span class=\"menu-item\" data-i18n=\"Conecta\">Conecta4g</span></a></li>\n<li><a href=\"../gltunnel.php\"><i data-feather='aperture'></i><span class=\"menu-item\" data-i18n=\"GLtunnel\">GLtunnel</span></a></li>\n<li><a href=\"?page=download/downloads\"><i data-feather='file'></i><span class=\"menu-item\" data-i18n=\"Arquivos\">Arquivos</span></a></li>\n<li><a href=\"?page=admin/dados\"><i data-feather='edit'></i><span class=\"menu-item\" data-i18n=\"Minhas Informa\xc3\xa7\xc3\xb5es\">Meus Dados</span></a></li>\n<li><a href=\"?page=usuario/historico_login\"><i data-feather='users'></i><span class=\"menu-item\" data-i18n=\"Historico\">Logs</span></a></li>\n<li><a href=\"?page=apis/gerenciar\"><i data-feather='code'></i><span class=\"menu-item\" data-i18n=\"Gerenciar APIS\">Gerenciar API</span></a></li>\n<li><a href=\"?page=notificacoes/notificar\"><i data-feather='message-square'></i><span class=\"menu-item\" data-i18n=\"Notifica\xc3\xa7\xc3\xb5es\">Notifica\xc3\xa7\xc3\xb5es</span></a></li>\n<li><a href=\"?page=email/enviaremail\"><i data-feather='mail'></i><span class=\"menu-item\" data-i18n=\"Email\">Email</span></a></li>\n</ul>\n</li>\n<li class=\" nav-item\"><a href=\"sair.php\"><i class=\"text-danger\" data-feather='log-out'></i><span class=\"menu-title\" data-i18n=\"Raise Support\">SAIR</span></a>\n</li>\n</ul>\n</div>\n</div>\n<!-- END: Main Menu-->\n<!-- BEGIN: Content-->\n<div class=\"app-content content \">\n<div class=\"content-overlay\"></div>\n<div class=\"header-navbar-shadow\"></div>\n<div class=\"content-wrapper container-xxl p-0\">\n<div class=\"content-header row\">\n</div>\n<div class=\"content-body\">\n<!-- Dashboard Analytics Start -->\n<section id=\"dashboard-analytics\">\n<div class=\"row\">\n<div class=\"col-sm-12\">\n</div>\n</div>\n</section>\n<!-- Dashboard Analytics end -->\n";
if (isset($_GET["page"])) {
    $sjgisgxjd = "page";
    ${$GLOBALS["epibogcmwccl"]} = $_GET["page"];
    if (${$sjgisgxjd} and file_exists("pages/" . ${$GLOBALS["epibogcmwccl"]} . ".php")) {
        include "pages/" . ${$GLOBALS["epibogcmwccl"]} . ".php";
    } else {
        include "./pages/inicial.php";
    }
} else {
    include "./pages/inicial.php";
}
echo "</div>\n</div>\n</div>\n<!-- END: Content-->\n<div class=\"sidenav-overlay\"></div>\n<div class=\"drag-target\"></div>\n<!-- BEGIN: Footer-->\n<footer class=\"footer footer-static footer-light mt-5\">\n<div class=\"text-center\">\n<p class=\"clearfix blue-grey lighten-2 mb-0\">\n<span class=\"center\">\nVers\xc3\xa3o: ";
echo ${$GLOBALS["vnykmef"]};
echo "<br>\n<a class=\"text-bold-800 \" href=\"#\" target=\"_blank\">";
echo ${$npcplvuwv}["site"];
echo "&copy; <script>\ndocument.write(new Date().getFullYear())\n</script>.</a><br>Todos os direitos reservados.<br>Seu IP: ";
echo pega_ip();
echo "<br>ISP: ";
echo ${$GLOBALS["skajxfwgp"]};
echo "</span>\n</p>\n</div>\n</footer>\n<!-- END: Footer-->\n<!-- BEGIN: Vendor JS-->\n<script src=\"../app-assets/vendors/js/vendors.min.js\"></script>\n<!-- BEGIN Vendor JS-->\n<!-- BEGIN: Page Vendor JS-->\n<script src=\"../app-assets/vendors/js/charts/apexcharts.min.js\"></script>\n<!--<script src=\"../app-assets/vendors/js/extensions/toastr.min.js\"></script>-->\n<script src=\"../app-assets/vendors/js/extensions/moment.min.js\"></script>\n<script src=\"../app-assets/vendors/js/tables/datatable/jszip.min.js\"></script>\n<script src=\"../app-assets/vendors/js/tables/datatable/pdfmake.min.js\"></script>\n<script src=\"../app-assets/vendors/js/tables/datatable/vfs_fonts.js\"></script>\n<script src=\"../app-assets/vendors/js/tables/datatable/buttons.html5.min.js\"></script>\n<script src=\"../app-assets/vendors/js/tables/datatable/buttons.print.min.js\"></script>\n<script src=\"../app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js\"></script>\n<script src=\"../app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js\"></script>\n<script src=\"../app-assets/vendors/js/tables/datatable/datatables.buttons.min.js\"></script>\n<script src=\"../app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js\"></script>\n<script src=\"../app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js\"></script>\n<script src=\"../app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js\"></script>\n<script src=\"../app-assets/js/scripts/tables/table-datatables-basic.js\"></script>\n<!-- END: Page Vendor JS-->\n<!-- BEGIN: Theme JS-->\n<script src=\"../app-assets/js/core/app-menu.js\"></script>\n<script src=\"../app-assets/js/core/app.js\"></script>\n<!-- END: Theme JS-->\n<!-- BEGIN: Page JS-->\n<script src=\"../app-assets/js/scripts/pages/dashboard-analytics.js\"></script>\n<script src=\"../app-assets/js/scripts/pages/app-invoice-list.js\"></script>\n<script src=\"../app-assets/vendors/js/forms/select/select2.full.min.js\"></script>\n<script src=\"../app-assets/js/scripts/forms/form-select2.js\"></script>\n<script src=\"../app-assets/js/scripts/extensions/ext-component-blockui.js\"></script>\n<script>\n\$(window).on('load', function() {\nif (feather) {\nfeather.replace({\nwidth: 14,\nheight: 14\n});\n}\n});\n\$(document).ready(function() {\n\$('#example').DataTable({\n\"language\": {\n\"lengthMenu\": \"_MENU_ Registros por p\xc3\xa1gina\",\n\"zeroRecords\": \"Nada encontrado\",\n\"info\": \"P\xc3\xa1gina _PAGE_ de _PAGES_\",\n\"infoEmpty\": \"N\xc3\xa3o h\xc3\xa1 registros\",\n\"infoFiltered\": \"(filtrando em _MAX_ registros)\",\n\"loadingRecords\": \"Aguarde...\",\n\"processing\": \"Processando...\",\n\"search\": \"Pesquisar:\",\n\"zeroRecords\": \"Nenhum registro encontrado\",\n\"paginate\": {\n\"first\": \"Primeiro\",\n\"last\": \"\xc3\x9altimo\",\n\"next\": \"Pr\xc3\xb3ximo\",\n\"previous\": \"Anterior\"\n}\n},\n\"scrollX\": true,\norder: [\n]\n});\n});\n</script>\n<!-- END: Page JS-->\n</body>\n<!-- END: Body-->\n</html>\n";
