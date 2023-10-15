<?php

$GLOBALS["vyfpgmtv"] = "SQLDelSSH";
$GLOBALS["dosibckhoco"] = "SQLUsuarioSSH";
require_once "seguranca.php";
require_once "config.php";
$lhjvwvb = "id_login";
require_once "funcoes.php";
require_once "classe.ssh.php";
$vxlyotwtbui = "id_login";
$id_login = $argv[1];
if (!empty($id_login)) {
    $gwfiyqefvs = "id_login";
    $GLOBALS["fkfgqxb"] = "id_login";
    $nrysekerkg = "SQLUsuarioSSH";
    $dbwoltqn = "SQLUsuarioSSH";
    $SQLUsuarioSSH = "select * from conta_ssh WHERE id_usuario_ssh = '" . $id_login . "' and status='1' and apagar='0'";
    $SQLUsuarioSSH = $conn->prepare($SQLUsuarioSSH);
    $bxhbysfrs = "SQLDelSSH";
    $uelsvg = "SQLDelSSH";
    $GLOBALS["dnqwtor"] = "conta_ssh";
    $SQLUsuarioSSH->execute();
    $conta_ssh = $SQLUsuarioSSH->fetch();
    $SQLDelSSH = "update conta_ssh set status='3', apagar='3', id_usuario='0' WHERE id_usuario_ssh = '" . $id_login . "'";
    $SQLDelSSH = $conn->prepare($SQLDelSSH);
    $SQLDelSSH->execute();
}
