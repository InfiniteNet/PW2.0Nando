<?php

$GLOBALS["cotaleg"] = "revenda_qtd_susp";
$GLOBALS["jftpzsspj"] = "ssh_susp_qtd";
$GLOBALS["dtwhjtpeh"] = "todosarquivos";
$GLOBALS["mrhnfoxinyi"] = "servidor_qtd";
$GLOBALS["sukenomkbq"] = "ssh_susp_qtd";
$GLOBALS["uhuyjglzybl"] = "all_usuarios_revenda_qtd";
$GLOBALS["yhyeyvb"] = "contas_ssh";
$GLOBALS["mokagd"] = "total_acesso_ssh_online";
$vugfyvfe = "total_acesso_ssh_online";
$GLOBALS["lgifmia"] = "mes";
$GLOBALS["iswoctgvdhdf"] = "datapega";
$GLOBALS["vxnivqrmhk"] = "noticia";
$GLOBALS["vmbptknddci"] = "SQLbuscaservidores";
$GLOBALS["fptwccuh"] = "totalservidores";
$GLOBALS["vohkoekttene"] = "SQLbuscarevendedores";
$axxrhspifqo = "totalrevendedores";
$GLOBALS["itblgelhdvse"] = "SQLbuscaclientes";
$GLOBALS["rqmvrkcgcc"] = "procnoticias";
protegePagina("donoadmin");
$procnoticias = "select * FROM noticias where status='ativo'";
$pnnxmvq = "totalclientes";
$procnoticias = $conn->prepare($procnoticias);
$bmrthoypa = "administrador";
$vviuuxizdu = "contas_ssh";
$sthnyslcbky = "SQLbuscaservidores";
$procnoticias->execute();
$SQLbuscaclientes = "select * from usuario where tipo='vpn'";
$SQLbuscaclientes = $conn->prepare($SQLbuscaclientes);
$SQLbuscaclientes->execute();
$totalclientes = $SQLbuscaclientes->rowCount();
$SQLbuscarevendedores = "select * from  usuario where tipo='revenda'";
$SQLbuscarevendedores = $conn->prepare($SQLbuscarevendedores);
$SQLbuscarevendedores->execute();
$totalrevendedores = $SQLbuscarevendedores->rowCount();
$opyqumszfmf = "total_acesso_ssh_online";
$SQLbuscaservidores = "select * from  servidor";
$SQLbuscaservidores = $conn->prepare($SQLbuscaservidores);
$SQLbuscaservidores->execute();
$omhnzqehdd = "contas_ssh";
$totalservidores = $SQLbuscaservidores->rowCount();
echo "<!-- Noticias -->\n";
if ($procnoticias->rowCount() > 0) {
    $sxuyabonkna = "data";
    $GLOBALS["ppmxoyvrhehn"] = "dia";
    $noticia = $procnoticias->fetch();
    $hthqsgc = "datapega";
    $GLOBALS["gimtnhpqkj"] = "datapega";
    $ctooxiuissh = "noticia";
    $GLOBALS["iccvcvcuv"] = "ano";
    $datapega = $noticia["data"];
    $obpxkly = "noticia";
    $GLOBALS["oqxykbp"] = "noticia";
    $ehvdeymdmo = "datapega";
    $qymghgygmu = "mes_extenso";
    $data = date("D", strtotime($datapega));
    $mes = date("M", strtotime($datapega));
    $sqqbkmoadle = "semana";
    $xeaxcqkqe = "mes_extenso";
    $uqmrczmhcm = "semana";
    $dia = date("d", strtotime($datapega));
    $ano = date("Y", strtotime($datapega));
    $semana = array("Sun" => "Domingo", "Mon" => "Segunda-Feira", "Tue" => "Ter\xc3\xa7a-Feira", "Wed" => "Quarta-Feira", "Thu" => "Quinta-Feira", "Fri" => "Sexta-Feira", "Sat" => "S\xc3\xa1bado");
    $mes_extenso = array("Jan" => "Janeiro", "Feb" => "Fevereiro", "Mar" => "Mar\xc3\xa7o", "Apr" => "Abril", "May" => "Maio", "Jun" => "Junho", "Jul" => "Julho", "Aug" => "Agosto", "Sep" => "Setembro", "Oct" => "Outubro", "Nov" => "Novembro", "Dec" => "Dezembro");
    echo "<div class=\"demo-spacing-0 text-center mb-2\">\n<div class=\"alert alert-primary alert-dismissible\" role=\"alert\">\n<h2 class=\"alert-heading text-warning\"><i data-feather='alert-octagon'></i> ";
    echo sql_injector2($noticia["titulo"]);
    echo "</h2>\n<div class=\"alert-body text-warning\">\n";
    echo sql_injector2($noticia["subtitulo"]);
    echo " <br />\n";
    echo sql_injector2($noticia["msg"]);
    echo "<br />\n";
    echo $semana["{$data}"] . ", {$dia} de " . $mes_extenso["{$mes}"] . " de {$ano}";
    echo "<b>!</b>\n</div>\n<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>\n</div>\n</div>\n";
}
echo "<!-- Dashboard Analytics Start -->\n<section id=\"dashboard-analytics\">\n<style>\n.img-fluid {\nmax-width: 100%;\nheight: 100px;\n}\n</style>\n<div class=\"col-12\">\n<div class=\"card card-profile border-primary\">\n<img src=\"../../../app-assets/images/banner/banner.jpg\" class=\"img-fluid \" alt=\"Profile Cover Photo\">\n<div class=\"card-body\">\n<div class=\"profile-image-wrapper\">\n<div class=\"profile-image\">\n<div class=\"avatar-content\">\n<img src=\"../../../app-assets/images/avatars/avatar6.png\" alt=\"user\">\n</div>\n</div>\n</div>\n<h3>BEM VINDO\xc2\xaa ";
echo strtoupper(${$bmrthoypa}["nome"]);
$wvrkht = "all_usuarios_revenda_qtd";
echo "</h3>\n<span class=\"badge badge-light-primary profile-badge\">Administrador</span>\n</div>\n</div>\n</div>\n</section>\n<!-- Dashboard Analytics end -->\n<section id=\"statistics-card\">\n<div class=\"row\">\n<div class=\"col-lg-3 col-sm-6 col-12\">\n<div class=\"card border-primary\">\n<a href=\"home.php?page=ssh/online\">\n<div class=\"card-header d-flex flex-column align-items-center pb-0\">\n<div class=\"avatar bg-light-success avatar-xl\">\n<div class=\"avatar-content\">\n<i data-feather='zap'></i>\n</div>\n</div>\n";
$bynzfgqodk = "contas_ssh";
if (${$GLOBALS["mokagd"]} == 0) {
    $lbsovmbge = "total_acesso_ssh_online";
    echo "<h4 class=\"text-bold-700 mt-1\"><b  class=\"\">( </b><b class=\"text-danger\">";
    echo $total_acesso_ssh_online;
    echo "</b><b  class=\"\"> ) Online</b></h4>\n";
} else {
    if (${$vugfyvfe} == 1) {
        $GLOBALS["engoqbd"] = "total_acesso_ssh_online";
        echo "<h4 class=\"text-bold-700 mt-1\"><b  class=\"\">( </b><b class=\"text-success\">";
        echo $total_acesso_ssh_online;
        echo "</b><b  class=\"\"> ) Onlines</b></h4>\n";
    } else {
        if (${$opyqumszfmf} > 1) {
            echo "<h4 class=\"text-bold-700 mt-1\"><b  class=\"\">( </b><b class=\"text-success\">";
            echo ${$GLOBALS["mokagd"]};
            echo "</b><b  class=\"\"> ) Onlines</b></h4>\n";
        }
    }
}
$kfanpaltl = "servidor_qtd";
echo "<p class=\"mb-2\"></p>\n</div>\n</a>\n</div>\n</div>\n<div class=\"col-lg-3 col-sm-6 col-12\">\n<div class=\"card border-primary\">\n<a href=\"home.php?page=ssh/contas\">\n<div class=\"card-header d-flex flex-column align-items-center pb-0\">\n<div class=\"avatar bg-light-success avatar-xl\">\n<div class=\"avatar-content\">\n<i data-feather='shield'></i>\n</div>\n</div>\n";
if (${$omhnzqehdd} == 0) {
    echo "<h4 class=\"text-bold-700 mt-1\"><b  class=\"\">( </b><b class=\"text-danger\">";
    echo ${$GLOBALS["yhyeyvb"]};
    echo "</b><b  class=\"\"> ) Conta SSH</b></h4>\n";
} else {
    if (${$bynzfgqodk} == 1) {
        echo "<h4 class=\"text-bold-700 mt-1\"><b  class=\"\">( </b><b class=\"text-success\">";
        echo ${$GLOBALS["yhyeyvb"]};
        echo "</b><b  class=\"\"> ) Conta SSH</b></h4>\n";
    } else {
        if (${$vviuuxizdu} > 1) {
            echo "<h4 class=\"text-bold-700 mt-1\"><b  class=\"\">( </b><b class=\"text-success\">";
            echo ${$GLOBALS["yhyeyvb"]};
            echo "</b><b  class=\"\"> ) Contas SSH</b></h4>\n";
        }
    }
}
echo "<p class=\"mb-2\"></p>\n</div>\n</a>\n</div>\n</div>\n<div class=\"col-lg-3 col-sm-6 col-12\">\n<div class=\"card border-primary\">\n<a href=\"home.php?page=usuario/1-etapa\">\n<div class=\"card-header d-flex flex-column align-items-center pb-0\">\n<div class=\"avatar bg-light-info avatar-xl\">\n<div class=\"avatar-content\">\n<i data-feather='user-plus'></i>\n</div>\n</div>\n<h4 class=\"text-bold-700 mt-1\"><b  class=\"\">Criar revenda</b></h4>\n<p class=\"mb-2\"></p>\n</div>\n</a>\n</div>\n</div>\n<div class=\"col-lg-3 col-md-6 col-12\">\n<div class=\"card border-primary\">\n<a href=\"home.php?page=usuario/revenda\">\n<div class=\"card-header d-flex flex-column align-items-center pb-0\">\n<div class=\"avatar bg-light-info avatar-xl\">\n<div class=\"avatar-content\">\n<i data-feather='users'></i>\n</div>\n</div>\n";
if (${$wvrkht} == 0) {
    echo "<h4 class=\"text-bold-700 mt-1\"><b  class=\"\">( </b><b class=\"text-danger\">";
    $GLOBALS["oupxastuhuw"] = "all_usuarios_revenda_qtd";
    echo $all_usuarios_revenda_qtd;
    echo "</b><b  class=\"\"> ) Revenda</b></h4>\n";
} else {
    if (${$GLOBALS["uhuyjglzybl"]} == 1) {
        $fqcmqjeygf = "all_usuarios_revenda_qtd";
        echo "<h4 class=\"text-bold-700 mt-1\"><b  class=\"\">( </b><b class=\"text-success\">";
        echo $all_usuarios_revenda_qtd;
        echo "</b><b  class=\"\"> ) Revenda</b></h4>\n";
    } else {
        if (${$GLOBALS["uhuyjglzybl"]} > 1) {
            echo "<h4 class=\"text-bold-700 mt-1\"><b  class=\"\">( </b><b class=\"text-success\">";
            echo ${$GLOBALS["uhuyjglzybl"]};
            echo "</b><b  class=\"\"> ) Revendas</b></h4>\n";
        }
    }
}
echo "<p class=\"mb-2\"></p>\n</div>\n</a>\n</div>\n</div>\n<div class=\"col-lg-3 col-md-6 col-12\">\n<div class=\"card border-primary\">\n<a href=\"home.php?page=servidor/listar\">\n<div class=\"card-header d-flex flex-column align-items-center pb-0\">\n<div class=\"avatar bg-light-warning avatar-xl\">\n<div class=\"avatar-content\">\n<i data-feather='server'></i>\n</div>\n</div>\n";
$GLOBALS["nnyypcrfn"] = "revenda_qtd_susp";
if (${$GLOBALS["mrhnfoxinyi"]} == 0) {
    $ukmdzumjmx = "servidor_qtd";
    echo "<h4 class=\"text-bold-700 mt-1\"><b  class=\"\">( </b><b class=\"text-danger\">";
    echo $servidor_qtd;
    echo "</b><b  class=\"\"> ) Servidor</b></h4>\n";
} else {
    if (${$GLOBALS["mrhnfoxinyi"]} == 1) {
        echo "<h4 class=\"text-bold-700 mt-1\"><b  class=\"\">( </b><b class=\"text-success\">";
        echo ${$GLOBALS["mrhnfoxinyi"]};
        echo "</b><b  class=\"\"> ) Servidor</b></h4>\n";
    } else {
        if (${$kfanpaltl} > 1) {
            $lyvpkfo = "servidor_qtd";
            echo "<h4 class=\"text-bold-700 mt-1\"><b  class=\"\">( </b><b class=\"text-success\">";
            echo $servidor_qtd;
            echo "</b><b  class=\"\"> ) Servidores</b></h4>\n";
        }
    }
}
echo "<p class=\"mb-2\"></p>\n</div>\n</a>\n</div>\n</div>\n<div class=\"col-lg-3 col-sm-6 col-12\">\n<div class=\"card border-primary\">\n<a href=\"home.php?page=download/downloads\">\n<div class=\"card-header d-flex flex-column align-items-center pb-0\">\n<div class=\"avatar bg-light-primary avatar-xl\">\n<div class=\"avatar-content\">\n<i data-feather='download'></i>\n</div>\n</div>\n";
if (${$GLOBALS["dtwhjtpeh"]} == 0) {
    $GLOBALS["bwvqkpxoeva"] = "todosarquivos";
    echo "<h4 class=\"text-bold-700 mt-1\"><b  class=\"\">( </b><b class=\"text-danger\">";
    echo $todosarquivos;
    echo "</b><b  class=\"\"> ) Arquivo</b></h4>\n";
} else {
    if (${$GLOBALS["dtwhjtpeh"]} == 1) {
        echo "<h4 class=\"text-bold-700 mt-1\"><b  class=\"\">( </b><b class=\"text-success\">";
        echo ${$GLOBALS["dtwhjtpeh"]};
        echo "</b><b  class=\"\"> ) Arquivo</b></h4>\n";
    } else {
        if (${$GLOBALS["dtwhjtpeh"]} > 1) {
            echo "<h4 class=\"text-bold-700 mt-1\"><b  class=\"\">( </b><b class=\"text-success\">";
            echo ${$GLOBALS["dtwhjtpeh"]};
            echo "</b><b  class=\"\"> ) Arquivos</b></h4>\n";
        }
    }
}
echo "<p class=\"mb-2\"></p>\n</div>\n</a>\n</div>\n</div>\n<div class=\"col-lg-3 col-sm-6 col-12\">\n<div class=\"card border-primary\">\n<a href=\"home.php?page=ssh/suspenso\">\n<div class=\"card-header d-flex flex-column align-items-center pb-0\">\n<div class=\"avatar bg-light-danger avatar-xl\">\n<div class=\"avatar-content\">\n<i data-feather='shield-off'></i>\n</div>\n</div>\n";
if (${$GLOBALS["sukenomkbq"]} == 0) {
    echo "<h4 class=\"text-bold-700 mt-1\"><b  class=\"\">( </b><b class=\"text-success\">";
    echo ${$GLOBALS["jftpzsspj"]};
    echo "</b><b  class=\"\"> ) Conta Susp.</b></h4>\n";
} else {
    if (${$GLOBALS["jftpzsspj"]} == 1) {
        echo "<h4 class=\"text-bold-700 mt-1\"><b  class=\"\">( </b><b class=\"text-danger\">";
        echo ${$GLOBALS["jftpzsspj"]};
        echo "</b><b  class=\"\"> ) Conta Susp.</b></h4>\n";
    } else {
        if (${$GLOBALS["jftpzsspj"]} > 1) {
            echo "<h4 class=\"text-bold-700 mt-1\"><b  class=\"\">( </b><b class=\"text-danger\">";
            echo ${$GLOBALS["jftpzsspj"]};
            echo "</b><b  class=\"\"> ) Contas Susps.</b></h4>\n";
        }
    }
}
echo "<p class=\"mb-2\"></p>\n</div>\n</a>\n</div>\n</div>\n<div class=\"col-lg-3 col-md-6 col-12\">\n<div class=\"card border-primary\">\n<a href=\"home.php?page=usuario/revenda\">\n<div class=\"card-header d-flex flex-column align-items-center pb-0\">\n<div class=\"avatar bg-light-danger avatar-xl\">\n<div class=\"avatar-content\">\n<i data-feather='user-x'></i>\n</div>\n</div>\n";
if (${$GLOBALS["nnyypcrfn"]} == 0) {
    echo "<h4 class=\"text-bold-700 mt-1\"><b  class=\"\">( </b><b class=\"text-success\">";
    echo ${$GLOBALS["cotaleg"]};
    echo "</b><b  class=\"\"> ) Rev. Susp.</b></h4>\n";
} else {
    if (${$GLOBALS["cotaleg"]} == 1) {
        echo "<h4 class=\"text-bold-700 mt-1\"><b  class=\"\">( </b><b class=\"text-danger\">";
        echo ${$GLOBALS["cotaleg"]};
        echo "</b><b  class=\"\"> ) Rev. Susp.</b></h4>\n";
    } else {
        if (${$GLOBALS["cotaleg"]} > 1) {
            echo "<h4 class=\"text-bold-700 mt-1\"><b  class=\"\">( </b><b class=\"text-danger\">";
            echo ${$GLOBALS["cotaleg"]};
            echo "</b><b  class=\"\"> ) Revs. Susps.</b></h4>\n";
        }
    }
}
echo "<p class=\"mb-2\"></p>\n</div>\n</a>\n</div>\n</div>\n</section>\n";
