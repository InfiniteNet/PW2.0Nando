<?php

$GLOBALS["kwmunkep"] = "pegasenha2";
$GLOBALS["paxqnzcjlk"] = "diferenca";
$GLOBALS["sgbokjbmtb"] = "SQLSSH";
$GLOBALS["gvwytbyxpe"] = "info";
$GLOBALS["txihdh"] = "texto";
$GLOBALS["nktuux"] = "openvpn";
$GLOBALS["qpoosuyaj"] = "SQLopen";
$GLOBALS["phaomumqo"] = "usuario";
$GLOBALS["jpbywcius"] = "pegando";
$GLOBALS["phrwwlc"] = "stsd";
$GLOBALS["clowqe"] = "dias_acesso";
$GLOBALS["bfvrlsn"] = "data_validade";
$GLOBALS["ukkoxpvcl"] = "data_atual";
$GLOBALS["jxpibqnink"] = "color";
$GLOBALS["olxxqqyn"] = "sts";
$GLOBALS["mcdrkfxdn"] = "status";
$GLOBALS["qlxwjmpwr"] = "row";
$GLOBALS["jdmwytlbmnrw"] = "SQLSubSSH";
$GLOBALS["exlcjlmp"] = "rowSub";
$GLOBALS["urlscjreugz"] = "SQLSub";
$GLOBALS["bvvbxwsnt"] = "usuario";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/contas.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
protegePagina("user");
if (${$GLOBALS["bvvbxwsnt"]}["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
echo "<style>\n.card-datatable {\npadding-left: 5px;\npadding-right: 5px;\n}\n</style>\n<div class=\"active\"><a class=\"d-flex align-items-center\" href=\"home.php\"><i data-feather=\"home\"></i><span class=\"menu-title text-truncate\" data-i18n=\"Dashboards\">DASHBOARD</span></a>\n</div>\n<section id=\"complex-header-datatable\">\n<div class=\"row\">\n<div class=\"col-12\">\n<div class=\"card\">\n<div class=\"card-header border-bottom\">\n<h4 class=\"card-title\">Contas SSH</h4>\n</div>\n<div class=\"card-datatable\">\n<table id=\"example\" class=\"table\">\n<thead>\n<tr>\n<th>SERVIDOR</th>\n<th>DONO</th>\n<th>LOGIN</th>\n<th>VALIDADE</th>\n<th>STATUS</th>\n<th>ACESSOS</th>\n<th>EDITAR</th>\n<th>COPIAR</th>\n</tr>\n</thead>\n<tbody id=\"myTable\">\n";
${$GLOBALS["urlscjreugz"]} = "SELECT * FROM usuario where id_usuario= '" . $_SESSION["usuarioID"] . "'";
${$GLOBALS["urlscjreugz"]} = $conn->prepare(${$GLOBALS["urlscjreugz"]});
$SQLSub->execute();
if ($SQLSub->rowCount() > 0) {
    while (${$GLOBALS["exlcjlmp"]} = $SQLSub->fetch()) {
        $wsmjykbrb = "info";
        ${$GLOBALS["jdmwytlbmnrw"]} = "SELECT * FROM conta_ssh, servidor where conta_ssh.id_servidor = servidor.id_servidor and conta_ssh.id_usuario = '" . $_SESSION["usuarioID"] . "' and status<='2'";
        ${$GLOBALS["jdmwytlbmnrw"]} = $conn->prepare(${$GLOBALS["jdmwytlbmnrw"]});
        $SQLSubSSH->execute();
        ${$wsmjykbrb} = "info";
        if ($SQLSubSSH->rowCount() > 0) {
            while (${$GLOBALS["qlxwjmpwr"]} = $SQLSubSSH->fetch()) {
                $bhajknffzzb = "row";
                $kjxhozokncy = "SQLopen";
                $GLOBALS["ioimxxmtl"] = "row";
                $GLOBALS["kefcvie"] = "data_validade";
                $GLOBALS["ukwthegdno"] = "row";
                $hejucgcgmq = "pegasenha";
                ${$GLOBALS["mcdrkfxdn"]} = "";
                $hiwwhos = "dias_acesso";
                $GLOBALS["grjdnns"] = "row";
                $GLOBALS["fymvjrbf"] = "row";
                if ($row["status"] == 1) {
                    $GLOBALS["ngaccpwden"] = "sts";
                    ${$GLOBALS["mcdrkfxdn"]} = "Ativo";
                    ${$GLOBALS["ngaccpwden"]} = "success";
                } else {
                    $wnyrhqc = "status";
                    $status = "Suspenso";
                    ${$GLOBALS["olxxqqyn"]} = "danger";
                }
                ${$GLOBALS["jxpibqnink"]} = "";
                if (${$bhajknffzzb}["status"] == 2) {
                    ${$GLOBALS["jxpibqnink"]} = "bgcolor='#FF6347'";
                }
                ${$GLOBALS["ukkoxpvcl"]} = date("Y-m-d H:i:s");
                ${$GLOBALS["bfvrlsn"]} = ${$GLOBALS["fymvjrbf"]}["data_validade"];
                if (${$GLOBALS["kefcvie"]} > ${$GLOBALS["ukkoxpvcl"]}) {
                    $yobyvyt = "diferenca";
                    $obzdyfhk = "data_atual";
                    $GLOBALS["ibmpxroafu"] = "diferenca";
                    $diferenca = strtotime(${$GLOBALS["bfvrlsn"]}) - strtotime($data_atual);
                    ${$GLOBALS["clowqe"]} = floor($diferenca / 86400);
                } else {
                    ${$GLOBALS["clowqe"]} = 0;
                }
                $GLOBALS["dzgexkumi"] = "SQLopen";
                $GLOBALS["bfjqro"] = "info";
                if (${$hiwwhos} > 10) {
                    $GLOBALS["lpimphrzw"] = "stsd";
                    $stsd = "info";
                } elseif (${$GLOBALS["clowqe"]} == 0) {
                    ${$GLOBALS["phrwwlc"]} = "danger";
                } else {
                    ${$GLOBALS["phrwwlc"]} = "warning";
                }
                ${$GLOBALS["jpbywcius"]} = "SELECT * FROM conta_ssh where id_usuario_ssh='" . ${$GLOBALS["ukwthegdno"]}["id_usuario_ssh"] . "'";
                ${$GLOBALS["jpbywcius"]} = $conn->prepare(${$GLOBALS["jpbywcius"]});
                $pegando->execute();
                ${$hejucgcgmq} = $pegando->fetch();
                ${$GLOBALS["qpoosuyaj"]} = "select * from ovpn WHERE servidor_id = '" . ${$GLOBALS["ioimxxmtl"]}["id_servidor"] . "' ";
                ${$GLOBALS["dzgexkumi"]} = $conn->prepare(${$kjxhozokncy});
                $bvvxyc = "row";
                $SQLopen->execute();
                if ($SQLopen->rowCount() > 0) {
                    ${$GLOBALS["nktuux"]} = $SQLopen->fetch();
                    ${$GLOBALS["txihdh"]} = "<a href='../pages/servidor/baixar_ovpn.php?id=" . ${$GLOBALS["nktuux"]}["id"] . "' class=\"label label-info\">Baixar</a>";
                } else {
                    ${$GLOBALS["txihdh"]} = "<span class=\"label label-danger\">Indisponivel</span>";
                }
                echo "<tr>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-light-";
                $igqckehmwqu = "rowSub";
                echo ${$GLOBALS["gvwytbyxpe"]};
                echo "\">\n";
                echo ${$GLOBALS["qlxwjmpwr"]}["nome"];
                echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-light-warning\">\n";
                echo $rowSub["login"];
                echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-light-";
                echo ${$GLOBALS["gvwytbyxpe"]};
                $GLOBALS["eyksclglb"] = "row";
                echo "\">\n";
                echo ${$GLOBALS["qlxwjmpwr"]}["login"];
                echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n";
                if (${$GLOBALS["clowqe"]} > 1) {
                    $GLOBALS["cmtehvpdatk"] = "dias_acesso";
                    echo "<span class=\"badge badge-light-";
                    echo ${$GLOBALS["phrwwlc"]};
                    echo "\">\n";
                    echo $dias_acesso;
                    echo "<b> dias</b>\n</span>\n";
                } else {
                    echo "<span class=\"badge badge-light-";
                    echo ${$GLOBALS["phrwwlc"]};
                    echo "\">\n";
                    echo ${$GLOBALS["clowqe"]};
                    echo "<b> dia</b>\n</span>\n";
                }
                echo "</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-light-";
                echo ${$GLOBALS["olxxqqyn"]};
                echo "\">\n";
                echo ${$GLOBALS["mcdrkfxdn"]};
                echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-light-";
                echo ${$GLOBALS["bfjqro"]};
                echo "\">\n";
                echo ${$GLOBALS["eyksclglb"]}["acesso"];
                echo "</span>\n</span>\n</td>\n<td>\n<a href=\"home.php?page=ssh/editar&id_ssh=";
                echo ${$bvvxyc}["id_usuario_ssh"];
                echo "\" class=\"btn-sm btn-primary\"><i data-feather='edit'></i></a>\n</td>\n<td>\n<a href=\"home.php?page=ssh/copy_ssh&id_ssh=";
                echo ${$GLOBALS["qlxwjmpwr"]}["id_usuario_ssh"];
                echo "\" class=\"btn-sm btn-success\"><i data-feather='copy'></i></a>\n</td>\n</tr>\n";
            }
        }
    }
}
if (${$GLOBALS["phaomumqo"]}["tipo"] == "revenda") {
    $cjqgfqd = "SQLSub";
    $ivdydfvswbdd = "SQLSub";
    $SQLSub = "SELECT * FROM usuario where id_mestre= '" . $_SESSION["usuarioID"] . "'";
    $SQLSub = $conn->prepare(${$GLOBALS["urlscjreugz"]});
    $SQLSub->execute();
    if ($SQLSub->rowCount() > 0) {
        $ctplxxboausd = "rowSub";
        while (${$ctplxxboausd} = $SQLSub->fetch()) {
            $GLOBALS["lhjhfhchky"] = "SQLSSH";
            ${$GLOBALS["sgbokjbmtb"]} = "SELECT * FROM conta_ssh, servidor where conta_ssh.id_servidor = servidor.id_servidor and conta_ssh.id_usuario = '" . ${$GLOBALS["exlcjlmp"]}["id_usuario"] . "' and status<='2'";
            ${$GLOBALS["sgbokjbmtb"]} = $conn->prepare(${$GLOBALS["lhjhfhchky"]});
            $SQLSSH->execute();
            if ($SQLSSH->rowCount() > 0) {
                while (${$GLOBALS["qlxwjmpwr"]} = $SQLSSH->fetch()) {
                    $dfjbuajmoc = "dias_acesso";
                    $GLOBALS["tpxmbwxn"] = "row";
                    $wvmcezflkfr = "data_validade";
                    $lrlvscqi = "status";
                    $yshhflkvpmah = "pegando2";
                    $gdwtdbwhiaho = "row";
                    $GLOBALS["ncrztoq"] = "row";
                    $GLOBALS["ppkgulu"] = "row";
                    $status = "";
                    $gbulvfuef = "dias_acesso";
                    $GLOBALS["zjvvntplt"] = "pegando2";
                    if ($row["status"] == 1) {
                        $fucsbitewwb = "sts";
                        ${$GLOBALS["mcdrkfxdn"]} = "Ativo";
                        ${$fucsbitewwb} = "success";
                    } else {
                        $vkibbwofbv = "status";
                        $GLOBALS["sgpqtyx"] = "sts";
                        $status = "Suspenso";
                        $sts = "danger";
                    }
                    $GLOBALS["gzsdjlf"] = "SQLopen";
                    ${$GLOBALS["jxpibqnink"]} = "";
                    $GLOBALS["bzctvvvijqjp"] = "pegando2";
                    $GLOBALS["chuurjmftpz"] = "row";
                    if (${$GLOBALS["qlxwjmpwr"]}["status"] == 2) {
                        $GLOBALS["xuneyvzuu"] = "color";
                        $color = "bgcolor=''";
                    }
                    $GLOBALS["qicgsykmwo"] = "status";
                    ${$GLOBALS["ukkoxpvcl"]} = date("Y-m-d H:i:s");
                    ${$GLOBALS["bfvrlsn"]} = ${$GLOBALS["tpxmbwxn"]}["data_validade"];
                    if (${$wvmcezflkfr} > ${$GLOBALS["ukkoxpvcl"]}) {
                        $yimlknwltr = "dias_acesso";
                        $GLOBALS["cebbqdqok"] = "diferenca";
                        ${$GLOBALS["paxqnzcjlk"]} = strtotime(${$GLOBALS["bfvrlsn"]}) - strtotime(${$GLOBALS["ukkoxpvcl"]});
                        ${$yimlknwltr} = floor(${$GLOBALS["cebbqdqok"]} / 86400);
                    } else {
                        $GLOBALS["ubrqludcw"] = "dias_acesso";
                        $dias_acesso = 0;
                    }
                    if (${$gbulvfuef} > 10) {
                        $oqeirqy = "stsd";
                        $stsd = "info";
                    } elseif (${$dfjbuajmoc} == 0) {
                        ${$GLOBALS["phrwwlc"]} = "danger";
                    } else {
                        ${$GLOBALS["phrwwlc"]} = "warning";
                    }
                    ${$yshhflkvpmah} = "SELECT * FROM conta_ssh where id_usuario_ssh='" . ${$GLOBALS["qlxwjmpwr"]}["id_usuario_ssh"] . "'";
                    $ykpvwyyukk = "row";
                    ${$GLOBALS["bzctvvvijqjp"]} = $conn->prepare(${$GLOBALS["zjvvntplt"]});
                    $pegando2->execute();
                    $GLOBALS["nyskvi"] = "rowSub";
                    ${$GLOBALS["kwmunkep"]} = $pegando->fetch();
                    ${$GLOBALS["qpoosuyaj"]} = "select * from ovpn WHERE servidor_id = '" . ${$GLOBALS["ncrztoq"]}["id_servidor"] . "'";
                    ${$GLOBALS["qpoosuyaj"]} = $conn->prepare(${$GLOBALS["gzsdjlf"]});
                    $SQLopen->execute();
                    if ($SQLopen->rowCount() > 0) {
                        $GLOBALS["gnposnxsde"] = "texto";
                        $GLOBALS["ryhbzmdwtms"] = "openvpn";
                        $cngctum = "openvpn";
                        $openvpn = $SQLopen->fetch();
                        $texto = "<a href='../pages/servidor/baixar_ovpn.php?id=" . $openvpn["id"] . "' class=\"label label-info\">Baixar</a>";
                    } else {
                        ${$GLOBALS["txihdh"]} = "<span class=\"label label-danger\">Indisponivel</span>";
                    }
                    echo "<div class=\"modal fade\" id=\"criarfatura";
                    echo ${$gdwtdbwhiaho}["id_usuario_ssh"];
                    $rloxtuq = "row";
                    $GLOBALS["deogfwdwb"] = "info";
                    echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalLabel\" aria-hidden=\"true\" style=\"display: none;\">\n<div class=\"modal-dialog\">\n<div class=\"modal-content\">\n<div class=\"modal-header\">\n<h3 class=\"modal-title\" id=\"lineModalLabel\"><i class=\"fa fa-money\"></i> Cria uma Fatura</h3>\n</div>\n<div class=\"modal-body\">\n<!-- content goes here -->\n<form name=\"editaserver\" action=\"pages/ssh/criafatura_ssh.php\" method=\"post\">\n<input name=\"idcontausuario\" type=\"hidden\" value=\"";
                    $GLOBALS["tdkdivbg"] = "row";
                    echo $row["id_usuario"];
                    echo "\">\n<input name=\"contassh\" type=\"hidden\" value=\"";
                    echo ${$ykpvwyyukk}["id_usuario_ssh"];
                    echo "\">\n<div class=\"form-group\">\n<label for=\"exampleInputEmail1\">Conta SSH</label>\n<input type=\"text\" class=\"form-control\" value=\"";
                    echo $row["login"];
                    echo "\" disabled=\"\">\n</div>\n<div class=\"form-group\">\n<label for=\"exampleInputEmail1\">Cliente</label>\n<input type=\"text\" class=\"form-control\" disabled value=\"";
                    echo ${$GLOBALS["exlcjlmp"]}["login"];
                    echo "\">\n</div>\n<div class=\"form-group\">\n<label for=\"exampleInputEmail1\">Tipo</label>\n<select size=\"1\" class=\"form-control\" disabled>\n<option value=\"1\" selected=selected>Acesso VPN</option>\n</select>\n</div>\n<div class=\"form-group\">\n<label for=\"exampleInputEmail1\">Valor</label>\n<input type=\"number\" class=\"form-control\" name=\"valor\" value=\"15\">\n</div>\n<div class=\"form-group\">\n<label for=\"exampleInputPassword1\">Desconto</label>\n<input type=\"number\" class=\"form-control\" name=\"desconto\" value=\"0\">\n</div>\n<div class=\"form-group\">\n<label for=\"exampleInputEmail1\">Prazo</label>\n<input type=\"number\" class=\"form-control\" name=\"prazo\" value=\"1\">\n</div>\n<div class=\"form-group\">\n<label for=\"exampleInputPassword1\">Descri\xc3\xa7\xc3\xa3o</label>\n<textarea class=\"form-control\" name=\"msg\" rows=\"3\" cols=\"20\" wrap=\"off\" placeholder=\"Digite...\"></textarea>\n</div>\n</div>\n<div class=\"modal-footer\">\n<button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\" role=\"button\">Cancelar </button>\n<button type=\"button\" class=\"btn btn-success\">Confirmar</button>\n</div>\n</form>\n</div>\n</div>\n</div>\n<tr>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-light-";
                    echo $info;
                    echo "\">\n";
                    echo ${$GLOBALS["qlxwjmpwr"]}["nome"];
                    echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-light-warning\">\n";
                    $cecxelmq = "dias_acesso";
                    echo ${$GLOBALS["nyskvi"]}["login"];
                    echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-light-";
                    $zwpsebnhcav = "info";
                    echo ${$GLOBALS["gvwytbyxpe"]};
                    echo "\">\n";
                    echo ${$GLOBALS["chuurjmftpz"]}["login"];
                    $cvwilbjzt = "sts";
                    echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n";
                    if ($dias_acesso > 1) {
                        $GLOBALS["fxexdoq"] = "stsd";
                        echo "<span class=\"badge badge-light-";
                        echo $stsd;
                        echo "\">\n";
                        echo ${$GLOBALS["clowqe"]};
                        echo "<b> dias</b>\n</span>\n";
                    } else {
                        $kjxvrainmr = "stsd";
                        echo "<span class=\"badge badge-light-";
                        echo $stsd;
                        echo "\">\n";
                        echo ${$GLOBALS["clowqe"]};
                        echo "<b> dia</b>\n</span>\n";
                    }
                    echo "</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-light-";
                    echo ${$cvwilbjzt};
                    echo "\">\n";
                    echo ${$GLOBALS["qicgsykmwo"]};
                    echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-light-";
                    echo ${$zwpsebnhcav};
                    $GLOBALS["mqnreaiblt"] = "row";
                    echo "\">\n";
                    echo ${$GLOBALS["qlxwjmpwr"]}["acesso"];
                    echo "</span>\n</span>\n</td>\n<td>\n<a href=\"home.php?page=ssh/editar&id_ssh=";
                    echo ${$GLOBALS["qlxwjmpwr"]}["id_usuario_ssh"];
                    echo "\" class=\"btn-sm btn-primary\"><i data-feather='edit'></i></a>\n</td>\n<td>\n<a href=\"home.php?page=ssh/copy_ssh&id_ssh=";
                    echo $row["id_usuario_ssh"];
                    echo "\" class=\"btn-sm btn-success\"><i data-feather='copy'></i></a>\n</td>\n</tr>\n";
                }
            }
        }
    }
}
echo "</tbody>\n</table>\n</div>\n</div>\n</div>\n</div>\n</section>\n";
