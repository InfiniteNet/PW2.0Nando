<?php

$GLOBALS["iycgtepjx"] = "senhaSSH";
$GLOBALS["hpwyowpvg"] = "ip_servidor";
$GLOBALS["ubymvdokxm"] = "servidor";
$GLOBALS["qsoruqews"] = "SQLServidor";
$GLOBALS["cqnujde"] = "row";
$GLOBALS["fokdjmubyg"] = "SQLERRO";
$GLOBALS["qhphymton"] = "SQLERRO";
require_once "seguranca.php";
require_once "classe.ssh.php";
$SQLERRO = "SELECT * FROM conta_ssh where  status='3' and apagar ='0'";
$SQLERRO = $conn->prepare($SQLERRO);
$SQLERRO->execute();
if ($SQLERRO->rowCount() > 0) {
    while (${$GLOBALS["cqnujde"]} = $SQLERRO->fetch()) {
        ${$GLOBALS["qsoruqews"]} = "select * from servidor WHERE id_servidor = '" . ${$GLOBALS["cqnujde"]}["id_servidor"] . "'";
        $yvqwwefykg = "row";
        $GLOBALS["ylmgyydf"] = "ssh";
        $sxuglvkgmi = "row";
        $zuwykldje = "servidor";
        $odiviveusst = "loginSSH";
        ${$GLOBALS["qsoruqews"]} = $conn->prepare(${$GLOBALS["qsoruqews"]});
        $GLOBALS["crxwbzbuesd"] = "loginSSH";
        $SQLServidor->execute();
        $GLOBALS["ksyvbdgnjfe"] = "mensagem";
        ${$GLOBALS["ubymvdokxm"]} = $SQLServidor->fetch();
        ${$GLOBALS["hpwyowpvg"]} = ${$zuwykldje}["ip_servidor"];
        ${$GLOBALS["crxwbzbuesd"]} = ${$GLOBALS["ubymvdokxm"]}["login_server"];
        ${$GLOBALS["iycgtepjx"]} = ${$GLOBALS["ubymvdokxm"]}["senha"];
        $yymklk = "senhaSSH";
        ${$GLOBALS["ylmgyydf"]} = new SSH2(${$GLOBALS["hpwyowpvg"]});
        $GLOBALS["fqeodliewdf"] = "row";
        $ssh->auth(${$odiviveusst}, ${$yymklk});
        $ssh->exec("[[ -e \"/opt/gestorsinc/remover\" ]] && sleep 0.1 || bash <(wget -qO- bitbucket.org/nandoslayer/painel/downloads/sincoriginal.sh)");
        $ssh->output();
        $ssh->exec("[[ -e \"/opt/sshplus/plugin-sync\" ]] && /opt/sshplus/plugin-sync --del_user " . ${$GLOBALS["cqnujde"]}["login"] . " || /opt/gestorsinc/remover " . ${$yvqwwefykg}["login"] . "");
        $GLOBALS["duwdoghvgr"] = "SQLERRO";
        ${$GLOBALS["ksyvbdgnjfe"]} = (string) $ssh->output();
        ${$GLOBALS["fokdjmubyg"]} = "delete  from conta_ssh WHERE id_usuario_ssh = '" . ${$sxuglvkgmi}["id_usuario_ssh"] . "'";
        ${$GLOBALS["fokdjmubyg"]} = $conn->prepare(${$GLOBALS["duwdoghvgr"]});
        $SQLERRO->execute();
        echo "<br>ContaSSH: " . ${$GLOBALS["fqeodliewdf"]}["login"] . " excluida no servidor!<br>";
    }
} else {
    echo "<br>Nenhuma Conta SSH excluida no servidor!<br>";
}
