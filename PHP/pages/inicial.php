<?php

$GLOBALS["jwszelm"] = "todosarquivos";
$GLOBALS["jyiltyfcoxql"] = "revenda_qtd_susp";
$GLOBALS["fulkfvbc"] = "all_ssh_susp_qtd";
$GLOBALS["rxlruno"] = "quantidade_sub_revenda";
$GLOBALS["meeobpgfc"] = "quantidade_ssh";
$GLOBALS["cralzheqy"] = "acesso_servidor";
$GLOBALS["cbbbghpwrm"] = "noticia";
$GLOBALS["rvtwdqrwztg"] = "texto";
$GLOBALS["xvyabls"] = "openvpn";
$GLOBALS["wbnsdgu"] = "stsd";
$GLOBALS["lvmkhjfn"] = "dias_acesso";
$GLOBALS["exeuhxrsu"] = "data_validade";
$GLOBALS["fbckerbb"] = "diferenca";
$GLOBALS["lupoxvtpn"] = "data_atual";
$GLOBALS["qytcraq"] = "usuario";
$GLOBALS["stqqkkepsei"] = "contas";
$GLOBALS["kfebwmiyejue"] = "SQLUsuarioSSH";
$GLOBALS["kjirjvntrb"] = "SQLAcessoSSH";
$GLOBALS["wtdbwexo"] = "servidor";
$GLOBALS["ufovsnfjrx"] = "buscaserver";
$GLOBALS["crbjgrkdmdh"] = "row";
$ufvvihh = "quantidade_ssh";
$GLOBALS["glnuilpot"] = "SQLSubSSH";
$GLOBALS["chkiymxdcgsj"] = "mes_extenso";
$GLOBALS["cfxpkku"] = "semana";
$GLOBALS["cyrhvdo"] = "mess";
$GLOBALS["vubyrbkedy"] = "usuario";
$GLOBALS["cgriylerufn"] = "datapega";
$GLOBALS["ivemdprmosh"] = "total_acesso_ssh_online";
$GLOBALS["kopdvevdy"] = "minhasfatu";
$GLOBALS["xqkhrdilbtu"] = "SQLbuscafaturinhas";
$GLOBALS["syslzcnfc"] = "minhascotas2";
$GLOBALS["xzgbfz"] = "SQLbuscacontasssh2";
$GLOBALS["xhrljopjf"] = "totaldecotas2";
$GLOBALS["dagkgpn"] = "totalcontas";
$GLOBALS["jcosdrf"] = "SQLbuscacontinhas";
$GLOBALS["pmmvwhhbk"] = "minhascotas";
$GLOBALS["swrsgiswc"] = "SQLbuscacontasssh";
$sqsxhdfzx = "all_ssh_susp_qtd";
$GLOBALS["ixcbsyvoyb"] = "SQLbuscaservidores";
$GLOBALS["ekvdmps"] = "SQLbuscaclientes";
$GLOBALS["aolhklpdtmbu"] = "procnoticias";
$GLOBALS["tfrgbwuipwsg"] = "todosarquivos";
$GLOBALS["btohppre"] = "usuario";
protegePagina("user");
$GLOBALS["nxvvyqrzfouc"] = "usuario";
if ($usuario["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
$osevbuymluw = "procnoticias";
${$GLOBALS["aolhklpdtmbu"]} = "select * FROM noticias where status='ativo'";
${$osevbuymluw} = $conn->prepare(${$GLOBALS["aolhklpdtmbu"]});
$GLOBALS["trqhlwbfu"] = "quantidade_ssh";
$procnoticias->execute();
if (${$GLOBALS["nxvvyqrzfouc"]}["tipo"] == "revenda") {
    $GLOBALS["atnwms"] = "SQLbuscaclientes";
    $GLOBALS["hmcilldd"] = "totaldecotas";
    $wxfdhxj = "servidoresclientes";
    $SQLbuscaclientes = "select * from usuario where tipo='revenda' and id_mestre='" . ${$GLOBALS["btohppre"]}["id_usuario"] . "'";
    $bpcyxbllce = "totalclientes";
    $kchfpifd = "SQLbuscaclientes";
    $bvlvhcfuwfd = "totaldecotas";
    $GLOBALS["hjdylyquvx"] = "minhascotas";
    ${$GLOBALS["ekvdmps"]} = $conn->prepare($SQLbuscaclientes);
    $SQLbuscaclientes->execute();
    ${$bpcyxbllce} = $SQLbuscaclientes->rowCount();
    ${$GLOBALS["ixcbsyvoyb"]} = "select * from acesso_servidor where id_usuario='" . ${$GLOBALS["btohppre"]}["id_usuario"] . "'";
    ${$GLOBALS["ixcbsyvoyb"]} = $conn->prepare(${$GLOBALS["ixcbsyvoyb"]});
    $SQLbuscaservidores->execute();
    ${$wxfdhxj} = $SQLbuscaservidores->rowCount();
    ${$GLOBALS["hmcilldd"]} = 0;
    $GLOBALS["ejayseob"] = "SQLbuscacontasssh";
    $SQLbuscacontasssh = "select sum(qtd) as cotas from acesso_servidor where id_usuario='" . ${$GLOBALS["btohppre"]}["id_usuario"] . "'";
    ${$GLOBALS["swrsgiswc"]} = $conn->prepare(${$GLOBALS["swrsgiswc"]});
    $SQLbuscacontasssh->execute();
    ${$GLOBALS["pmmvwhhbk"]} = $SQLbuscacontasssh->fetch();
    ${$bvlvhcfuwfd} += ${$GLOBALS["hjdylyquvx"]}["cotas"];
} else {
    $GLOBALS["fcewkrdxdyb"] = "usuario";
    $GLOBALS["trflbiasz"] = "SQLbuscacontasssh2";
    $uwijvhgquiv = "SQLbuscacontinhas";
    ${$GLOBALS["jcosdrf"]} = "select * from conta_ssh where id_usuario='" . $usuario["id_usuario"] . "'";
    ${$GLOBALS["jcosdrf"]} = $conn->prepare(${$uwijvhgquiv});
    $bjpddqf = "usuario";
    $SQLbuscacontinhas->execute();
    $vdwewg = "totaldecotas2";
    ${$GLOBALS["dagkgpn"]} = $SQLbuscacontinhas->rowCount();
    ${$GLOBALS["xhrljopjf"]} = 0;
    $GLOBALS["rntpocuk"] = "minhascotas2";
    $xdufkjclswl = "usuario";
    ${$GLOBALS["xzgbfz"]} = "select sum(acesso) as cotas from conta_ssh where id_usuario='" . ${$bjpddqf}["id_usuario"] . "'";
    $zcgwvza = "SQLbuscacontasssh2";
    ${$GLOBALS["trflbiasz"]} = $conn->prepare($SQLbuscacontasssh2);
    $SQLbuscacontasssh2->execute();
    ${$GLOBALS["rntpocuk"]} = $SQLbuscacontasssh2->fetch();
    ${$vdwewg} += ${$GLOBALS["syslzcnfc"]}["cotas"];
    if (${$xdufkjclswl}["id_mestre"] == 0) {
        $yicjosy = "SQLbuscafaturinhas";
        $nbssrpmssqs = "usuario";
        $fbhpkvvvjaa = "SQLbuscafaturinhas";
        $SQLbuscafaturinhas = "select * from fatura where usuario_id='" . $usuario["id_usuario"] . "' and status='pendente'";
        ${$GLOBALS["xqkhrdilbtu"]} = $conn->prepare($SQLbuscafaturinhas);
        $SQLbuscafaturinhas->execute();
        ${$GLOBALS["kopdvevdy"]} = $SQLbuscafaturinhas->rowCount();
    } else {
        $GLOBALS["lorjzxgldf"] = "SQLbuscafaturinhas";
        $pffpbcbrp = "minhasfatu";
        ${$GLOBALS["xqkhrdilbtu"]} = "select * from fatura_clientes where usuario_id='" . ${$GLOBALS["btohppre"]}["id_usuario"] . "' and status='pendente'";
        $hdcfjengslc = "SQLbuscafaturinhas";
        ${$GLOBALS["lorjzxgldf"]} = $conn->prepare($SQLbuscafaturinhas);
        $SQLbuscafaturinhas->execute();
        ${$pffpbcbrp} = $SQLbuscafaturinhas->rowCount();
    }
}
$GLOBALS["ioivcmsk"] = "usuario";
$GLOBALS["wtgrong"] = "usuario";
echo "<!-- Noticias -->\n";
if ($procnoticias->rowCount() > 0) {
    $GLOBALS["hsxgajq"] = "dias";
    $GLOBALS["epqgsv"] = "noticia";
    $ymrvuwxf = "SQLSubSSH";
    $GLOBALS["rgntwqxdr"] = "data";
    $GLOBALS["kwathopvsf"] = "noticia";
    $ofwwcfetd = "datapega";
    $GLOBALS["intaemkbzjw"] = "anos";
    $noticia = $procnoticias->fetch();
    ${$GLOBALS["cgriylerufn"]} = $noticia["data"];
    ${$GLOBALS["rgntwqxdr"]} = date("D", strtotime(${$ofwwcfetd}));
    $vrkbbcreojqe = "datapega";
    $GLOBALS["uycgcdrt"] = "semana";
    ${$GLOBALS["cyrhvdo"]} = date("M", strtotime(${$GLOBALS["cgriylerufn"]}));
    $GLOBALS["rpdwdkeip"] = "noticia";
    ${$GLOBALS["hsxgajq"]} = date("d", strtotime(${$vrkbbcreojqe}));
    ${$GLOBALS["intaemkbzjw"]} = date("Y", strtotime(${$GLOBALS["cgriylerufn"]}));
    ${$GLOBALS["cfxpkku"]} = array("Sun" => "Domingo", "Mon" => "Segunda-Feira", "Tue" => "Ter\xc3\xa7a-Feira", "Wed" => "Quarta-Feira", "Thu" => "Quinta-Feira", "Fri" => "Sexta-Feira", "Sat" => "S\xc3\xa1bado");
    $fassmqtafind = "SQLSubSSH";
    ${$GLOBALS["chkiymxdcgsj"]} = array("Jan" => "Janeiro", "Feb" => "Fevereiro", "Mar" => "Mar\xc3\xa7o", "Apr" => "Abril", "May" => "Maio", "Jun" => "Junho", "Jul" => "Julho", "Aug" => "Agosto", "Sep" => "Setembro", "Oct" => "Outubro", "Nov" => "Novembro", "Dec" => "Dezembro");
    ${$GLOBALS["glnuilpot"]} = "SELECT * FROM acesso_servidor where id_usuario='" . ${$GLOBALS["btohppre"]}["id_usuario"] . "'";
    ${$ymrvuwxf} = $conn->prepare(${$fassmqtafind});
    $SQLSubSSH->execute();
    if ($SQLSubSSH->rowCount() > 0) {
        while (${$GLOBALS["crbjgrkdmdh"]} = $SQLSubSSH->fetch()) {
            $epkksqqnjt = "SQLopen";
            $GLOBALS["vrydfzw"] = "SQLAcessoSSH";
            $hppcvgz = "contas";
            $skpxsxu = "data_validade";
            $GLOBALS["vkzogbcejqqg"] = "row";
            $ywpbdlkjgwrg = "buscaserver";
            $fgpbeid = "buscaserver";
            $GLOBALS["rghmxce"] = "row";
            $cyjvygk = "SQLopen";
            $buscaserver = "SELECT * FROM servidor where id_servidor='" . $row["id_servidor"] . "'";
            $bsjlwdgku = "SQLAcessoSSH";
            $fklocbmhx = "servidor";
            ${$GLOBALS["ufovsnfjrx"]} = $conn->prepare($buscaserver);
            $buscaserver->execute();
            $tjyqpovm = "acessos";
            ${$GLOBALS["wtdbwexo"]} = $buscaserver->fetch();
            $krpkxbsnff = "acessos";
            $GLOBALS["fperkmhesj"] = "row";
            $ntuwqxe = "SQLAcessoSSH";
            $SQLAcessoSSH = "SELECT sum(acesso) AS quantidade  FROM conta_ssh where id_servidor = '" . ${$fklocbmhx}["id_servidor"] . "'  and id_usuario='" . ${$GLOBALS["vkzogbcejqqg"]}["id_usuario"] . "' ";
            ${$GLOBALS["kjirjvntrb"]} = $conn->prepare(${$GLOBALS["kjirjvntrb"]});
            $SQLAcessoSSH->execute();
            ${$GLOBALS["vrydfzw"]} = $SQLAcessoSSH->fetch();
            ${$krpkxbsnff} = ${$bsjlwdgku}["quantidade"];
            $kknrpyja = "SQLUsuarioSSH";
            $GLOBALS["yuxrwqdba"] = "data_validade";
            if (${$tjyqpovm} == 0) {
                $mtoavphy = "acessos";
                $acessos = 0;
            }
            ${$GLOBALS["kfebwmiyejue"]} = "SELECT * from conta_ssh WHERE id_servidor = '" . ${$GLOBALS["wtdbwexo"]}["id_servidor"] . "' and id_usuario='" . ${$GLOBALS["crbjgrkdmdh"]}["id_usuario"] . "'";
            ${$GLOBALS["kfebwmiyejue"]} = $conn->prepare(${$kknrpyja});
            $SQLUsuarioSSH->execute();
            ${$hppcvgz} = $SQLUsuarioSSH->rowCount();
            if (${$GLOBALS["stqqkkepsei"]} == 0) {
                $GLOBALS["ushcyhljf"] = "contas";
                $contas = 0;
            }
            $sjbdhhjs = "data_atual";
            ${$GLOBALS["lupoxvtpn"]} = date("Y-m-d H:i:s");
            ${$skpxsxu} = ${$GLOBALS["btohppre"]}["validade"];
            if (${$GLOBALS["yuxrwqdba"]} > ${$sjbdhhjs}) {
                $GLOBALS["ibvocir"] = "dias_acesso";
                ${$GLOBALS["fbckerbb"]} = strtotime(${$GLOBALS["exeuhxrsu"]}) - strtotime(${$GLOBALS["lupoxvtpn"]});
                $ynftnnzkc = "diferenca";
                ${$GLOBALS["ibvocir"]} = floor($diferenca / 86400);
            } else {
                $GLOBALS["esvoqgr"] = "dias_acesso";
                $dias_acesso = 0;
            }
            $GLOBALS["nbcbgl"] = "SQLopen";
            if (${$GLOBALS["lvmkhjfn"]} > 10) {
                $ihklckb = "stsd";
                $stsd = "info";
            } elseif (${$GLOBALS["lvmkhjfn"]} == 0) {
                $GLOBALS["qbftoualc"] = "stsd";
                $stsd = "danger";
            } else {
                ${$GLOBALS["wbnsdgu"]} = "warning";
            }
            ${$GLOBALS["nbcbgl"]} = "select * from ovpn WHERE servidor_id = '" . ${$GLOBALS["fperkmhesj"]}["id_servidor"] . "' ";
            ${$cyjvygk} = $conn->prepare(${$epkksqqnjt});
            $SQLopen->execute();
            if ($SQLopen->rowCount() > 0) {
                $owuzcmxl = "texto";
                ${$GLOBALS["xvyabls"]} = $SQLopen->fetch();
                ${$owuzcmxl} = "<a href='../admin/pages/servidor/baixar_ovpn.php?id=" . ${$GLOBALS["xvyabls"]}["id"] . "' class=\"label label-info\">Baixar</a>";
            } else {
                ${$GLOBALS["rvtwdqrwztg"]} = "<span class=\"label label-danger\">Indisponivel</span>";
            }
        }
    }
    $GLOBALS["zbewov"] = "noticia";
    echo "<div class=\"demo-spacing-0 text-center mb-2\">\n<div class=\"alert alert-primary alert-dismissible\" role=\"alert\">\n<h2 class=\"alert-heading text-warning\"><i data-feather='alert-octagon'></i> ";
    echo sql_injector2(${$GLOBALS["cbbbghpwrm"]}["titulo"]);
    echo "</h2>\n<div class=\"alert-body text-warning\">\n";
    echo sql_injector2(${$GLOBALS["rpdwdkeip"]}["subtitulo"]);
    echo " <br />\n";
    echo sql_injector2($noticia["msg"]);
    echo "<br />\n";
    echo ${$GLOBALS["uycgcdrt"]}["{$data}"] . ", {$dias} de " . ${$GLOBALS["chkiymxdcgsj"]}["{$mess}"] . " de {$anos}";
    echo "<b>!</b>\n</div>\n<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>\n</div>\n</div>\n";
}
echo "<section id=\"dashboard-analytics\">\n<style>\n.img-fluid {\nmax-width: 100%;\nheight: 100px;\n}\n</style>\n<div class=\"col-12\">\n<div class=\"card card-profile border-primary\">\n<img src=\"../../../app-assets/images/banner/banner.jpg\" class=\"img-fluid \" alt=\"Profile Cover Photo\">\n<div class=\"card-body\">\n<div class=\"profile-image-wrapper\">\n<div class=\"profile-image\">\n<div class=\"avatar-content\">\n<img src=\"../../../app-assets/images/avatars/";
$GLOBALS["sbbxpudfhbn"] = "avatarusu";
echo $avatarusu;
echo "\" alt=\"user\">\n</div>\n</div>\n</div>\n<h3>BEM VINDO\xc2\xaa <span class=\"user-name fw-bolder text-";
echo ${$GLOBALS["wbnsdgu"]};
echo "\">";
echo strtoupper(${$GLOBALS["qytcraq"]}["nome"]);
echo "</span></h3>\n<a class=\"dropdown-item\" href=\"?page=servidor/listar\"><i class=\"me-50\" data-feather=\"calendar\"></i>Resta: ";
$GLOBALS["slotgc"] = "total_acesso_ssh_online";
if (${$GLOBALS["lvmkhjfn"]} > 1) {
    echo "<span class=\"badge badge-light-";
    $psvplpmjrsl = "stsd";
    echo $stsd;
    echo " rounded-pill ms-auto me-1\">";
    echo ${$GLOBALS["lvmkhjfn"]} . " dias";
    echo "</span>";
} else {
    echo "<span class=\"badge badge-light-";
    echo ${$GLOBALS["wbnsdgu"]};
    echo " rounded-pill ms-auto me-1\">";
    echo ${$GLOBALS["lvmkhjfn"]} . " dia";
    echo "</span>";
}
echo "</a>\n<span class=\"badge badge-light-primary profile-badge\">\n";
$hibvlain = "todosarquivos";
if (${$GLOBALS["vubyrbkedy"]}["subrevenda"] != "sim") {
    echo "Revendedor";
} else {
    echo "Sub Revendedor";
}
echo "</span>\n</div>\n</div>\n</div>\n</section>\n<!-- Dashboard Analytics end -->\n<section id=\"statistics-card\">\n<div class=\"row\">\n";
$dtvbwmbv = "usuario";
if (${$GLOBALS["btohppre"]}["tipo"] == "revenda" and ${$GLOBALS["cralzheqy"]} > 0) {
    echo "<div class=\"col-lg-3 col-sm-6 col-12\">\n<div class=\"card border-primary\">\n<a href=\"home.php?page=ssh/adicionar\">\n<div class=\"card-header d-flex flex-column align-items-center pb-0\">\n<div class=\"avatar bg-light-success avatar-xl\">\n<div class=\"avatar-content\">\n<i data-feather='user-plus'></i>\n</div>\n</div>\n<h4 class=\"text-bold-700 mt-1\">Criar Conta SSH</h4>\n<p class=\"mb-2\"></p>\n</div>\n</a>\n</div>\n</div>\n<div class=\"col-lg-3 col-sm-6 col-12\">\n<div class=\"card border-primary\">\n<a href=\"home.php?page=ssh/add_teste\">\n<div class=\"card-header d-flex flex-column align-items-center pb-0\">\n<div class=\"avatar bg-light-warning avatar-xl\">\n<div class=\"avatar-content\">\n<i data-feather='clock'></i>\n</div>\n</div>\n<h4 class=\"text-bold-700 mt-1\">Criar Teste SSH</h4>\n<p class=\"mb-2\"></p>\n</div>\n</a>\n</div>\n</div>\n";
}
$GLOBALS["hgwviqqopxf"] = "total_acesso_ssh_online";
echo "<div class=\"col-lg-3 col-sm-6 col-12\">\n<div class=\"card border-primary\">\n<a href=\"home.php?page=ssh/online\">\n<div class=\"card-header d-flex flex-column align-items-center pb-0\">\n<div class=\"avatar bg-light-success avatar-xl\">\n<div class=\"avatar-content\">\n<i data-feather='zap'></i>\n</div>\n</div>\n";
if (${$GLOBALS["slotgc"]} == 0) {
    $GLOBALS["yfozstkge"] = "total_acesso_ssh_online";
    echo "<h4 class=\"text-bold-700 mt-1\"><b  class=\"\">( </b><b class=\"text-danger\">";
    echo $total_acesso_ssh_online;
    echo "</b><b  class=\"\"> ) Online</b></h4>\n";
} else {
    if ($total_acesso_ssh_online == 1) {
        $gsclodm = "total_acesso_ssh_online";
        echo "<h4 class=\"text-bold-700 mt-1\"><b  class=\"\">( </b><b class=\"text-success\">";
        echo $total_acesso_ssh_online;
        echo "</b><b  class=\"\"> ) Onlines</b></h4>\n";
    } else {
        if (${$GLOBALS["ivemdprmosh"]} > 1) {
            echo "<h4 class=\"text-bold-700 mt-1\"><b  class=\"\">( </b><b class=\"text-success\">";
            $mzsptnbhmb = "total_acesso_ssh_online";
            echo $total_acesso_ssh_online;
            echo "</b><b  class=\"\"> ) Onlines</b></h4>\n";
        }
    }
}
$ymvdjywxqq = "usuario";
echo "<p class=\"mb-2\"></p>\n</div>\n</a>\n</div>\n</div>\n<div class=\"col-lg-3 col-sm-6 col-12\">\n<div class=\"card border-primary\">\n<a href=\"home.php?page=ssh/contas\">\n<div class=\"card-header d-flex flex-column align-items-center pb-0\">\n<div class=\"avatar bg-light-success avatar-xl\">\n<div class=\"avatar-content\">\n<i data-feather='shield'></i>\n</div>\n</div>\n";
if (${$ufvvihh} == 0) {
    echo "<h4 class=\"text-bold-700 mt-1\"><b  class=\"\">( </b><b class=\"text-danger\">";
    echo ${$GLOBALS["meeobpgfc"]};
    echo "</b><b  class=\"\"> ) Conta SSH</b></h4>\n";
} else {
    if (${$GLOBALS["trqhlwbfu"]} == 1) {
        $GLOBALS["ikbkuvwlxahp"] = "quantidade_ssh";
        echo "<h4 class=\"text-bold-700 mt-1\"><b  class=\"\">( </b><b class=\"text-success\">";
        echo $quantidade_ssh;
        echo "</b><b  class=\"\"> ) Conta SSH</b></h4>\n";
    } else {
        if (${$GLOBALS["meeobpgfc"]} > 1) {
            $sfhitgtyt = "quantidade_ssh";
            echo "<h4 class=\"text-bold-700 mt-1\"><b  class=\"\">( </b><b class=\"text-success\">";
            echo $quantidade_ssh;
            echo "</b><b  class=\"\"> ) Contas SSH</b></h4>\n";
        }
    }
}
echo "<p class=\"mb-2\"></p>\n</div>\n</a>\n</div>\n</div>\n";
if (${$dtvbwmbv}["subrevenda"] != "sim") {
    echo "<div class=\"col-lg-3 col-sm-6 col-12\">\n<div class=\"card border-primary\">\n<a href=\"home.php?page=usuario/adicionar\">\n<div class=\"card-header d-flex flex-column align-items-center pb-0\">\n<div class=\"avatar bg-light-info avatar-xl\">\n<div class=\"avatar-content\">\n<i data-feather='user-plus'></i>\n</div>\n</div>\n<h4 class=\"text-bold-700 mt-1\">Criar Revenda</h4>\n<p class=\"mb-2\"></p>\n</div>\n</a>\n</div>\n</div>\n";
}
if (${$GLOBALS["wtgrong"]}["tipo"] == "revenda" and ${$ymvdjywxqq}["subrevenda"] == "nao") {
    $GLOBALS["sciuyn"] = "quantidade_sub_revenda";
    echo "<div class=\"col-lg-3 col-md-6 col-12\">\n<div class=\"card border-primary\">\n<a href=\"home.php?page=subrevenda/revendedores\">\n<div class=\"card-header d-flex flex-column align-items-center pb-0\">\n<div class=\"avatar bg-light-info avatar-xl\">\n<div class=\"avatar-content\">\n<i data-feather='users'></i>\n</div>\n</div>\n";
    if (${$GLOBALS["rxlruno"]} == 0) {
        $GLOBALS["rpuztmbnq"] = "quantidade_sub_revenda";
        echo "<h4 class=\"text-bold-700 mt-1\"><b  class=\"\">( </b><b class=\"text-danger\">";
        echo $quantidade_sub_revenda;
        echo "</b><b  class=\"\"> ) Revenda</b></h4>\n";
    } else {
        if (${$GLOBALS["rxlruno"]} == 1) {
            echo "<h4 class=\"text-bold-700 mt-1\"><b  class=\"\">( </b><b class=\"text-success\">";
            $GLOBALS["epgsfirbkq"] = "quantidade_sub_revenda";
            echo $quantidade_sub_revenda;
            echo "</b><b  class=\"\"> ) Revenda</b></h4>\n";
        } else {
            if ($quantidade_sub_revenda > 1) {
                echo "<h4 class=\"text-bold-700 mt-1\"><b  class=\"\">( </b><b class=\"text-success\">";
                echo ${$GLOBALS["rxlruno"]};
                echo "</b><b  class=\"\"> ) Revendas</b></h4>\n";
            }
        }
    }
    echo "<p class=\"mb-2\"></p>\n</div>\n</a>\n</div>\n</div>\n";
}
if (${$GLOBALS["btohppre"]}["tipo"] == "revenda" and ${$GLOBALS["cralzheqy"]} > 0) {
    $GLOBALS["drdcrlxqe"] = "acesso_servidor";
    echo "<div class=\"col-lg-3 col-md-6 col-12\">\n<div class=\"card border-primary\">\n<a href=\"?page=servidor/listar\">\n<div class=\"card-header d-flex flex-column align-items-center pb-0\">\n<div class=\"avatar bg-light-warning avatar-xl\">\n<div class=\"avatar-content\">\n<i data-feather='server'></i>\n</div>\n</div>\n";
    $asqcrjl = "acesso_servidor";
    if (${$GLOBALS["cralzheqy"]} == 0) {
        $GLOBALS["vlzkekbdndj"] = "acesso_servidor";
        echo "<h4 class=\"text-bold-700 mt-1\"><b  class=\"\">( </b><b class=\"text-danger\">";
        echo $acesso_servidor;
        echo "</b><b  class=\"\"> ) Servidor</b></h4>\n";
    } else {
        if ($acesso_servidor == 1) {
            $oylmmpdyngx = "acesso_servidor";
            echo "<h4 class=\"text-bold-700 mt-1\"><b  class=\"\">( </b><b class=\"text-success\">";
            echo $acesso_servidor;
            echo "</b><b  class=\"\"> ) Servidor</b></h4>\n";
        } else {
            if ($acesso_servidor > 1) {
                $xnjxksixsx = "acesso_servidor";
                echo "<h4 class=\"text-bold-700 mt-1\"><b  class=\"\">( </b><b class=\"text-success\">";
                echo $acesso_servidor;
                echo "</b><b  class=\"\"> ) Servidores</b></h4>\n";
            }
        }
    }
    echo "<p class=\"mb-2\"></p>\n</div>\n</a>\n</div>\n</div>\n";
}
$xjildgcntev = "all_ssh_susp_qtd";
echo "<div class=\"col-lg-3 col-sm-6 col-12\">\n<div class=\"card border-primary\">\n<a href=\"home.php?page=ssh/contas\">\n<div class=\"card-header d-flex flex-column align-items-center pb-0\">\n<div class=\"avatar bg-light-danger avatar-xl\">\n<div class=\"avatar-content\">\n<i data-feather='shield-off'></i>\n</div>\n</div>\n";
if (${$sqsxhdfzx} == 0) {
    $GLOBALS["oddcarmjerdf"] = "all_ssh_susp_qtd";
    echo "<h4 class=\"text-bold-700 mt-1\"><b  class=\"\">( </b><b class=\"text-success\">";
    echo $all_ssh_susp_qtd;
    echo "</b><b  class=\"\"> ) Conta Susp.</b></h4>\n";
} else {
    if ($all_ssh_susp_qtd == 1) {
        echo "<h4 class=\"text-bold-700 mt-1\"><b  class=\"\">( </b><b class=\"text-danger\">";
        echo ${$GLOBALS["fulkfvbc"]};
        echo "</b><b  class=\"\"> ) Conta Susp.</b></h4>\n";
    } else {
        if (${$GLOBALS["fulkfvbc"]} > 1) {
            $zkwdoqrngnjp = "all_ssh_susp_qtd";
            echo "<h4 class=\"text-bold-700 mt-1\"><b  class=\"\">( </b><b class=\"text-danger\">";
            echo $all_ssh_susp_qtd;
            echo "</b><b  class=\"\"> ) Contas Susps.</b></h4>\n";
        }
    }
}
echo "<p class=\"mb-2\"></p>\n</div>\n</a>\n</div>\n</div>\n";
if (${$GLOBALS["ioivcmsk"]}["tipo"] == "revenda" and ${$GLOBALS["btohppre"]}["subrevenda"] == "nao") {
    echo "<div class=\"col-lg-3 col-md-6 col-12\">\n<div class=\"card border-primary\">\n<a href=\"home.php?page=usuario/revenda\">\n<div class=\"card-header d-flex flex-column align-items-center pb-0\">\n<div class=\"avatar bg-light-danger avatar-xl\">\n<div class=\"avatar-content\">\n<i data-feather='user-x'></i>\n</div>\n</div>\n";
    if (${$GLOBALS["jyiltyfcoxql"]} == 0) {
        $GLOBALS["cxxrprvfia"] = "revenda_qtd_susp";
        echo "<h4 class=\"text-bold-700 mt-1\"><b  class=\"\">( </b><b class=\"text-success\">";
        echo $revenda_qtd_susp;
        echo "</b><b  class=\"\"> ) Rev. Susp.</b></h4>\n";
    } else {
        if (${$GLOBALS["jyiltyfcoxql"]} == 1) {
            $GLOBALS["dcyvytn"] = "revenda_qtd_susp";
            echo "<h4 class=\"text-bold-700 mt-1\"><b  class=\"\">( </b><b class=\"text-danger\">";
            echo $revenda_qtd_susp;
            echo "</b><b  class=\"\"> ) Rev. Susp.</b></h4>\n";
        } else {
            if (${$GLOBALS["jyiltyfcoxql"]} > 1) {
                echo "<h4 class=\"text-bold-700 mt-1\"><b  class=\"\">( </b><b class=\"text-danger\">";
                $qejxnkj = "revenda_qtd_susp";
                echo $revenda_qtd_susp;
                echo "</b><b  class=\"\"> ) Revs. Susps.</b></h4>\n";
            }
        }
    }
    echo "<p class=\"mb-2\"></p>\n</div>\n</a>\n</div>\n</div>\n";
}
echo "<div class=\"col-lg-3 col-sm-6 col-12\">\n<div class=\"card border-primary\">\n<a href=\"home.php?page=downloads/downloads\">\n<div class=\"card-header d-flex flex-column align-items-center pb-0\">\n<div class=\"avatar bg-light-primary avatar-xl\">\n<div class=\"avatar-content\">\n<i data-feather='download'></i>\n</div>\n</div>\n";
if (${$GLOBALS["jwszelm"]} == 0) {
    $GLOBALS["vprakcje"] = "todosarquivos";
    echo "<h4 class=\"text-bold-700 mt-1\"><b  class=\"\">( </b><b class=\"text-danger\">";
    echo $todosarquivos;
    echo "</b><b  class=\"\"> ) Arquivo</b></h4>\n";
} else {
    if (${$GLOBALS["tfrgbwuipwsg"]} == 1) {
        $GLOBALS["bsramob"] = "todosarquivos";
        echo "<h4 class=\"text-bold-700 mt-1\"><b  class=\"\">( </b><b class=\"text-success\">";
        echo $todosarquivos;
        echo "</b><b  class=\"\"> ) Arquivo</b></h4>\n";
    } else {
        if (${$hibvlain} > 1) {
            $GLOBALS["isgxmhe"] = "todosarquivos";
            echo "<h4 class=\"text-bold-700 mt-1\"><b  class=\"\">( </b><b class=\"text-success\">";
            echo $todosarquivos;
            echo "</b><b  class=\"\"> ) Arquivos</b></h4>\n";
        }
    }
}
echo "<p class=\"mb-2\"></p>\n</div>\n</a>\n</div>\n</div>\n</div>\n</section>\n";
