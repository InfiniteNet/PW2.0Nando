<?php

$GLOBALS["qdbbcpjkymb"] = "info";
$GLOBALS["rzeprbrquux"] = "openvpn";
$GLOBALS["psjmdnoyenc"] = "texto";
$GLOBALS["zxkjflriyw"] = "SQLopen";
$GLOBALS["pdhkavb"] = "pegasenha";
$GLOBALS["nvwqhnlwtfyx"] = "pegando";
$GLOBALS["lsuyweuu"] = "stsd";
$GLOBALS["rsqlrsy"] = "dias_acesso";
$GLOBALS["wfhtpirjds"] = "diferenca";
$GLOBALS["pednlpyvz"] = "data_validade";
$GLOBALS["jlfsrfd"] = "revendedor";
$GLOBALS["jcmojox"] = "SQLRevendedor";
$GLOBALS["eukdjwsst"] = "color";
$GLOBALS["xyuaqsjcme"] = "sts";
$GLOBALS["virhynbmw"] = "status";
$GLOBALS["xvuswacgtcoi"] = "owner";
$GLOBALS["cpwlpqv"] = "row";
$GLOBALS["uyencykvs"] = "SQLSSH";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/contas.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
$GLOBALS["rudltoy"] = "SQLSSH";
protegePagina("donoadmin");
echo "<style>\n.card-datatable {\npadding-left: 5px;\npadding-right: 5px;\n}\n</style>\n<div class=\"active\"><a class=\"d-flex align-items-center\" href=\"home.php\"><i data-feather=\"home\"></i><span class=\"menu-title text-truncate\" data-i18n=\"Dashboards\">DASHBOARD</span></a>\n</div>\n<section id=\"complex-header-datatable\">\n<div class=\"row\">\n<div class=\"col-12\">\n<div class=\"card\">\n<div class=\"card-header border-bottom\">\n<h4 class=\"card-title\">Contas SSH</h4>\n</div>\n<div class=\"card-datatable\">\n<table id=\"example\" class=\"table\">\n<thead>\n<tr>\n<th>SERVIDOR</th>\n<th>DONO</th>\n<th>LOGIN</th>\n<th>VALIDADE</th>\n<th>STATUS</th>\n<th>ACESSOS</th>\n<th>OP\xc3\x87\xc3\x95ES</th>\n</tr>\n</thead>\n<tbody id=\"myTable\">\n";
$SQLSSH = "SELECT * FROM conta_ssh , servidor  where conta_ssh.id_servidor = servidor.id_servidor and  conta_ssh.status <= '2' ORDER BY  conta_ssh.status  ";
${$GLOBALS["uyencykvs"]} = $conn->prepare(${$GLOBALS["uyencykvs"]});
$SQLSSH->execute();
if ($SQLSSH->rowCount() > 0) {
    while (${$GLOBALS["cpwlpqv"]} = $SQLSSH->fetch()) {
        $GLOBALS["zjjqhxfeyqe"] = "info";
        $GLOBALS["ybxoqry"] = "class";
        $kaggilhdkcb = "status";
        $fticzfwu = "row";
        $yfdjgs = "row";
        $class = "class='btn-sm btn-primary waves-effect waves-float waves-light'";
        $svdichwav = "color";
        $info = "info";
        $status = "";
        $bononim = "sts";
        $kdjrriiub = "data_atual";
        ${$GLOBALS["xvuswacgtcoi"]} = "";
        $wlridoohxivs = "row";
        ${$svdichwav} = "";
        $jtnkuyd = "row";
        $GLOBALS["ppmsscl"] = "row";
        if (${$yfdjgs}["status"] == 1) {
            $GLOBALS["xepcskwqpic"] = "sts";
            ${$GLOBALS["virhynbmw"]} = "Ativo";
            ${$GLOBALS["xepcskwqpic"]} = "success";
        } else {
            if (${$jtnkuyd}["status"] == 2) {
                ${$GLOBALS["virhynbmw"]} = "Suspenso";
                ${$GLOBALS["xyuaqsjcme"]} = "danger";
                ${$GLOBALS["eukdjwsst"]} = "bgcolor=''";
            }
        }
        $ooztnylg = "data_atual";
        if (${$GLOBALS["cpwlpqv"]}["id_usuario"] == 0) {
            ${$GLOBALS["xvuswacgtcoi"]} = "Sistema";
        } else {
            ${$GLOBALS["jcmojox"]} = "select * from usuario WHERE id_usuario = '" . ${$GLOBALS["cpwlpqv"]}["id_usuario"] . "'";
            ${$GLOBALS["jcmojox"]} = $conn->prepare(${$GLOBALS["jcmojox"]});
            $SQLRevendedor->execute();
            ${$GLOBALS["jlfsrfd"]} = $SQLRevendedor->fetch();
            ${$GLOBALS["xvuswacgtcoi"]} = ${$GLOBALS["jlfsrfd"]}["login"];
        }
        $GLOBALS["eoionld"] = "pegando";
        ${$ooztnylg} = date("Y-m-d ");
        $xsjrgensg = "dias_acesso";
        ${$GLOBALS["pednlpyvz"]} = ${$fticzfwu}["data_validade"];
        if (${$GLOBALS["pednlpyvz"]} > ${$kdjrriiub}) {
            $GLOBALS["msmkeukne"] = "data_atual";
            ${$GLOBALS["wfhtpirjds"]} = strtotime(${$GLOBALS["pednlpyvz"]}) - strtotime($data_atual);
            ${$GLOBALS["rsqlrsy"]} = floor(${$GLOBALS["wfhtpirjds"]} / 86400);
        } else {
            ${$GLOBALS["rsqlrsy"]} = 0;
        }
        if (${$GLOBALS["rsqlrsy"]} > 10) {
            ${$GLOBALS["lsuyweuu"]} = "info";
        } elseif (${$xsjrgensg} == 0) {
            ${$GLOBALS["lsuyweuu"]} = "danger";
        } else {
            ${$GLOBALS["lsuyweuu"]} = "warning";
        }
        ${$GLOBALS["eoionld"]} = "SELECT * FROM conta_ssh  where id_usuario_ssh='" . ${$wlridoohxivs}["id_usuario_ssh"] . "'";
        ${$GLOBALS["nvwqhnlwtfyx"]} = $conn->prepare(${$GLOBALS["nvwqhnlwtfyx"]});
        $pegando->execute();
        $GLOBALS["pwwqmbfqw"] = "SQLopen";
        ${$GLOBALS["pdhkavb"]} = $pegando->fetch();
        ${$GLOBALS["zxkjflriyw"]} = "select * from ovpn WHERE servidor_id = '" . ${$GLOBALS["cpwlpqv"]}["id_servidor"] . "' ";
        ${$GLOBALS["zxkjflriyw"]} = $conn->prepare(${$GLOBALS["pwwqmbfqw"]});
        $SQLopen->execute();
        if ($SQLopen->rowCount() > 0) {
            $GLOBALS["gwuhvgquyll"] = "openvpn";
            $openvpn = $SQLopen->fetch();
            ${$GLOBALS["psjmdnoyenc"]} = "<a href='../pages/servidor/baixar_ovpn.php?id=" . ${$GLOBALS["rzeprbrquux"]}["id"] . "' class=\"label label-info\">Baixar</a>";
        } else {
            $GLOBALS["xhmlugp"] = "texto";
            $texto = "<span class=\"label label-danger\">Indisponivel</span>";
        }
        echo "<tr>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-light-";
        echo ${$GLOBALS["qdbbcpjkymb"]};
        echo "\">\n";
        echo ${$GLOBALS["cpwlpqv"]}["nome"];
        echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-light-warning\">\n";
        echo ${$GLOBALS["xvuswacgtcoi"]};
        $iyfgohtwg = "class";
        echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-light-";
        echo ${$GLOBALS["qdbbcpjkymb"]};
        echo "\">\n";
        echo ${$GLOBALS["ppmsscl"]}["login"];
        echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n";
        if (${$GLOBALS["rsqlrsy"]} > 1) {
            echo "<span class=\"badge badge-light-";
            echo ${$GLOBALS["lsuyweuu"]};
            echo "\">";
            echo ${$GLOBALS["rsqlrsy"]};
            echo "<b> dias</b></span>\n";
        } else {
            $vncvmsoi = "stsd";
            echo "<span class=\"badge badge-light-";
            echo $stsd;
            echo "\">";
            echo ${$GLOBALS["rsqlrsy"]};
            echo "<b> dia</b></span>\n";
        }
        echo "</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-glow bg-";
        echo ${$bononim};
        echo "\">\n";
        echo ${$GLOBALS["virhynbmw"]};
        echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-light-";
        echo ${$GLOBALS["qdbbcpjkymb"]};
        echo "\">\n";
        echo ${$GLOBALS["cpwlpqv"]}["acesso"];
        echo "</span>\n</span>\n</td>\n<td>\n<div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">\n<a href=\"home.php?page=ssh/editar&id_ssh=";
        echo ${$GLOBALS["cpwlpqv"]}["id_usuario_ssh"];
        echo "\" ";
        echo ${$iyfgohtwg};
        echo "><i data-feather='edit'></i></a>\n</div>\n</td>\n</tr>\n";
    }
}
echo "</tbody>\n</table>\n</div>\n</div>\n</div>\n</div>\n</section>\n";
