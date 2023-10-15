<?php

$GLOBALS["xrovfrj"] = "senhaSSH";
$GLOBALS["umqurkfdrjp"] = "servidor_autenticado";
$GLOBALS["gjmrlvr"] = "data";
$GLOBALS["cnfxqnwul"] = "mensagem";
$GLOBALS["kslgsdvwuwh"] = "ip_servidor";
$GLOBALS["unddvmrzxq"] = "servidor_online";
$GLOBALS["cqxjurqig"] = "ssh";
$GLOBALS["tpnolwiouie"] = "loginSSH";
$GLOBALS["iejmlash"] = "row";
require_once "seguranca.php";
$uckcxnmxvusr = "data";
require_once "config.php";
$GLOBALS["epcccpwib"] = "SQLServidor";
require_once "classe.ssh.php";
$GLOBALS["zcbycltopme"] = "SQLServidor";
require_once "funcoes.php";
$data = date("Y-m-d H:i:s");
$SQLServidor = "SELECT * FROM servidor";
$ygbdduno = "SQLServidor";
$SQLServidor = $conn->prepare($SQLServidor);
$SQLServidor->execute();
if ($SQLServidor->rowCount() > 0) {
    while (${$GLOBALS["iejmlash"]} = $SQLServidor->fetch()) {
        $GLOBALS["yrndvsirgst"] = "ip_servidor";
        $GLOBALS["ggtibexnfkld"] = "row";
        $djrjdgsojfx = "ip_servidor";
        $GLOBALS["meeyeufhbv"] = "senhaSSH";
        $ip_servidor = ${$GLOBALS["iejmlash"]}["ip_servidor"];
        $ekbjtshjgin = "row";
        ${$GLOBALS["tpnolwiouie"]} = $row["login_server"];
        ${$GLOBALS["meeyeufhbv"]} = ${$GLOBALS["ggtibexnfkld"]}["senha"];
        ${$GLOBALS["cqxjurqig"]} = new SSH2(${$djrjdgsojfx});
        ${$GLOBALS["unddvmrzxq"]} = $ssh->online(${$GLOBALS["kslgsdvwuwh"]});
        if (!${$GLOBALS["unddvmrzxq"]}) {
            $GLOBALS["bqnyfzdg"] = "mensagem";
            $GLOBALS["xfqfvmy"] = "row";
            $GLOBALS["pvheeghw"] = "row";
            $dmgogglob = "row";
            $mensagem = "O Servidor " . $row["nome"] . " IP->" . $row["ip_servidor"] . " est\xc3\xa1 OFFLINE!";
            $conn->query("UPDATE servidor SET autenticado='0', online='0' WHERE id_servidor='" . $row["id_servidor"] . "'");
            $conn->query("INSERT INTO notificacoes SET tipo='outros', admin='sim', usuario_id='1', mensagem='" . ${$GLOBALS["cnfxqnwul"]} . "', data='" . ${$GLOBALS["gjmrlvr"]} . "', info_outros='Servidores'");
        } else {
            $yuomsrv = "row";
            $conn->query("UPDATE servidor SET online='1' WHERE id_servidor='" . $row["id_servidor"] . "'");
            ${$GLOBALS["umqurkfdrjp"]} = $ssh->auth(${$GLOBALS["tpnolwiouie"]}, ${$GLOBALS["xrovfrj"]});
            if (!${$GLOBALS["umqurkfdrjp"]}) {
                ${$GLOBALS["cnfxqnwul"]} = "O Servidor " . ${$GLOBALS["iejmlash"]}["nome"] . " IP->" . ${$GLOBALS["iejmlash"]}["ip_servidor"] . " n\xc3\xa3o est\xc3\xa1 autenticado!";
                $GLOBALS["enxixqezq"] = "row";
                $conn->query("UPDATE servidor SET autenticado='0' WHERE id_servidor='" . $row["id_servidor"] . "'");
                $conn->query("INSERT INTO notificacoes SET tipo='outros', admin='sim', usuario_id='1', mensagem='" . ${$GLOBALS["cnfxqnwul"]} . "', data='" . ${$GLOBALS["gjmrlvr"]} . "', info_outros='Servidores'");
            } else {
                $conn->query("UPDATE servidor SET autenticado='1', online='1' WHERE id_servidor='" . ${$GLOBALS["iejmlash"]}["id_servidor"] . "'");
            }
        }
    }
} else {
    echo "Nenhum Servidor!";
}
