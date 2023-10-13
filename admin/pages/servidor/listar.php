<?php

$GLOBALS["mcgtiglsb"] = "texto";
$GLOBALS["mpvwqahmjlnb"] = "openvpn";
$GLOBALS["losqejoctuc"] = "SQLopen";
$GLOBALS["viiyvryrsdm"] = "tipo";
$GLOBALS["uxuleyc"] = "SQLContasSSH";
$GLOBALS["ylmpzbnjwx"] = "SQLUsuarioSSH";
$GLOBALS["rjrzcgvrpck"] = "SQLAcessoSSH";
$GLOBALS["iexdscdoab"] = "usuarios_online";
$GLOBALS["cwgprse"] = "acessos";
$GLOBALS["dbnscwxsh"] = "row";
$GLOBALS["ypgrtjmepb"] = "SQLServidor";
if (basename($_SERVER["REQUEST_URI"]) === basename("/var/www/html/listar.php")) {
    exit("<h1>ERROR 404</h1>Entre em contato conosco e envie detalhes.");
}
$hgihqxibwiyg = "SQLServidor";
protegePagina("donoadmin");
echo "<style>\n.card-datatable {\npadding-left: 5px;\npadding-right: 5px;\n}\n</style>\n<section id=\"complex-header-datatable\">\n<div class=\"row\">\n<div class=\"col-12\">\n<div class=\"card\">\n<div class=\"card-header border-bottom\">\n<h4 class=\"card-title\">Servidores</h4>\n</div>\n<div class=\"card-datatable\">\n<table id=\"example\" class=\"table\">\n<thead>\n<tr>\n<th>NOME</th>\n<th>REGI\xc3\x83O</th>\n<th>ENDERE\xc3\x87O IP</th>\n<th>ONLINES AGORA</th>\n<th>APLICATIVO</th>\n<th>SSH CRIADAS</th>\n<th>ACESSOS</th>\n<th>EDITAR</th>\n<th>REC. CONTAS</th>\n<th>DEL. CONTAS</th>\n</thead>\n<tbody id=\"myTable\">\n";
$SQLServidor = "select * from servidor";
${$GLOBALS["ypgrtjmepb"]} = $conn->prepare(${$GLOBALS["ypgrtjmepb"]});
$SQLServidor->execute();
if ($SQLServidor->rowCount() > 0) {
    while (${$GLOBALS["dbnscwxsh"]} = $SQLServidor->fetch()) {
        $GLOBALS["tnwsolckw"] = "row";
        $ebvhxzvhgn = "SQLopen";
        $tmsonflfqj = "qtd_ssh";
        ${$GLOBALS["cwgprse"]} = 0;
        $GLOBALS["qppczsq"] = "row";
        $GLOBALS["usgovtkuvo"] = "row";
        $GLOBALS["utxrvgkibl"] = "SQLopen";
        $GLOBALS["vuwavhwovby"] = "row";
        ${$GLOBALS["iexdscdoab"]} = 0;
        $mecjejnusn = "tipo";
        if (${$GLOBALS["usgovtkuvo"]}["tipo"] == "premium") {
            $GLOBALS["txampjgty"] = "SQLAcessoSSH";
            $emjryjfr = "SQLContasSSH";
            $GLOBALS["njptvkjq"] = "row";
            $GLOBALS["oxzddcu"] = "SQLContasSSH";
            $GLOBALS["vadkjm"] = "row";
            ${$GLOBALS["rjrzcgvrpck"]} = "SELECT sum(acesso) AS quantidade  FROM conta_ssh where id_servidor='" . ${$GLOBALS["dbnscwxsh"]}["id_servidor"] . "' ";
            $GLOBALS["etxligk"] = "SQLAcessoSSH";
            ${$GLOBALS["txampjgty"]} = $conn->prepare($SQLAcessoSSH);
            $SQLAcessoSSH->execute();
            $GLOBALS["mkczmoqig"] = "acessos";
            ${$GLOBALS["rjrzcgvrpck"]} = $SQLAcessoSSH->fetch();
            ${$GLOBALS["mkczmoqig"]} += ${$GLOBALS["rjrzcgvrpck"]}["quantidade"];
            ${$GLOBALS["ylmpzbnjwx"]} = "select * from conta_ssh WHERE id_servidor = '" . ${$GLOBALS["njptvkjq"]}["id_servidor"] . "' ";
            ${$GLOBALS["ylmpzbnjwx"]} = $conn->prepare(${$GLOBALS["ylmpzbnjwx"]});
            $SQLUsuarioSSH->execute();
            ${$GLOBALS["uxuleyc"]} = "SELECT sum(online) AS soma  FROM conta_ssh where id_servidor = '" . ${$GLOBALS["vadkjm"]}["id_servidor"] . "'   ";
            ${$emjryjfr} = $conn->prepare(${$GLOBALS["uxuleyc"]});
            $SQLContasSSH->execute();
            ${$GLOBALS["uxuleyc"]} = $SQLContasSSH->fetch();
            ${$GLOBALS["iexdscdoab"]} += ${$GLOBALS["oxzddcu"]}["soma"];
        } else {
            $GLOBALS["obqrwt"] = "SQLUsuarioSSH";
            $cnictktv = "row";
            $GLOBALS["drffxqr"] = "SQLUsuarioSSH";
            $SQLUsuarioSSH = "select * from usuario_ssh_free WHERE servidor = '" . $row["id_servidor"] . "' ";
            $SQLUsuarioSSH = $conn->prepare(${$GLOBALS["ylmpzbnjwx"]});
            $SQLUsuarioSSH->execute();
        }
        $jblkdb = "row";
        ${$tmsonflfqj} = $SQLUsuarioSSH->rowCount();
        switch (${$GLOBALS["dbnscwxsh"]}["tipo"]) {
            case "premium":
                ${$GLOBALS["viiyvryrsdm"]} = "Premium";
                break;
            case "free":
                ${$GLOBALS["viiyvryrsdm"]} = "Free";
                break;
            default:
                ${$mecjejnusn} = "erro";
                break;
        }
        ${$GLOBALS["losqejoctuc"]} = "select * from ovpn WHERE servidor_id = '" . ${$GLOBALS["vuwavhwovby"]}["id_servidor"] . "' ";
        ${$ebvhxzvhgn} = $conn->prepare(${$GLOBALS["utxrvgkibl"]});
        $SQLopen->execute();
        if ($SQLopen->rowCount() > 0) {
            $wtqafug = "openvpn";
            ${$GLOBALS["mpvwqahmjlnb"]} = $SQLopen->fetch();
            ${$GLOBALS["mcgtiglsb"]} = "<a href='../admin/pages/servidor/baixar_ovpn.php?id=" . ${$wtqafug}["id"] . "' class=\"label label-info\">Baixar</a>";
        } else {
            $GLOBALS["ewfdreq"] = "texto";
            $texto = "<span class=\"label label-danger\">Indisponivel</span>";
        }
        $lvacdn = "usuarios_online";
        echo "<tr>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-light-info\">\n";
        echo ${$GLOBALS["dbnscwxsh"]}["nome"];
        $jxzmhacbq = "texto";
        $GLOBALS["yfblzaxygcdw"] = "row";
        echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-light-info\">\n";
        echo ucfirst(${$jblkdb}["regiao"]);
        echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-light-info\">\n";
        echo ${$GLOBALS["dbnscwxsh"]}["ip_servidor"];
        echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-light-info\">\n";
        echo $usuarios_online;
        echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-light-info\">\n";
        $GLOBALS["pngdbrt"] = "qtd_ssh";
        echo $texto;
        echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-light-info\">\n";
        echo $qtd_ssh;
        echo "</span>\n</span>\n</td>\n<td>\n<span class=\"pull-left-container\" style=\"margin-right: 3px;\">\n<span class=\"badge badge-light-info\">\n";
        echo ${$GLOBALS["cwgprse"]};
        echo "</span>\n</span>\n</td>\n<td>\n<a href=\"home.php?page=servidor/servidor&id_servidor=";
        echo ${$GLOBALS["qppczsq"]}["id_servidor"];
        echo "\" class=\"btn-sm btn-primary\"><i data-feather='edit'></i></a>\n</td>\n<td>\n<a href=\"../admin/pages/servidor/servidor_exe.php?id_servidor=";
        echo $row["id_servidor"];
        echo "&com=sincronizar\" class=\"btn-sm btn-success\"><i data-feather='repeat'></i></a>\n</td>\n<td>\n<a href=\"../admin/pages/servidor/servidor_exe.php?id_servidor=";
        echo ${$GLOBALS["tnwsolckw"]}["id_servidor"];
        echo "&com=deletarall\" class=\"btn-sm btn-danger\"><i data-feather='trash'></i></a>\n</td>\n<!-- <td>\n<a href=\"../admin/pages/servidor/servidor_exe.php?id_servidor=";
        echo ${$GLOBALS["dbnscwxsh"]}["id_servidor"];
        echo "&com=deletarGeral\" class=\"btn-sm btn-danger\"><i data-feather='trash-2'></i></a>\n</td> -->\n";
    }
}
echo "</tbody>\n</table>\n</div>\n</div>\n</div>\n</div>\n</section>\n";
