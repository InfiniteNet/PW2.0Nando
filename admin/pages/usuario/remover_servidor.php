<?php

$GLOBALS["jwbdsrjmw"] = "SQLExcluiAcesso";
$GLOBALS["xsmefmsnh"] = "row";
$GLOBALS["ychywhmastnb"] = "SQLUserSub";
$GLOBALS["wlvhgyiib"] = "SQLUpdateSSH";
$GLOBALS["zvtsselx"] = "acesso";
$GLOBALS["yulhkxs"] = "SQLAcesso";
require_once "../../../pages/system/seguranca.php";
require_once "../../../pages/system/config.php";
require_once "../../../pages/system/funcoes.system.php";
protegePagina("donoadmin");
if (isset($_GET["id_acesso"])) {
    $GLOBALS["qfkmftup"] = "SQLAcesso";
    $SQLAcesso = "select * from acesso_servidor where id_acesso_servidor = '" . $_GET["id_acesso"] . "'";
    $SQLAcesso = $conn->prepare($SQLAcesso);
    $SQLAcesso->execute();
    if ($SQLAcesso->rowCount() > 0) {
        $qjwoxvlnrly = "acesso";
        $GLOBALS["mviwgsp"] = "acesso";
        $GLOBALS["exdkkffq"] = "SQLUpdateSSH";
        $uvgvajqrcts = "SQLUserSub";
        $acesso = $SQLAcesso->fetch();
        $ocekdf = "SQLExcluiAcesso";
        $SQLUpdateSSH = "update conta_ssh set status='3', apagar='3', id_usuario='0' where id_servidor='" . $acesso["id_servidor"] . "' and id_usuario='" . $acesso["id_usuario"] . "'";
        $GLOBALS["ouelryrvdsx"] = "acesso";
        $xjnusejctrh = "SQLUserSub";
        $SQLUpdateSSH = $conn->prepare($SQLUpdateSSH);
        $SQLUpdateSSH->execute();
        $ungjpnx = "acesso";
        $SQLUserSub = "SELECT * from usuario where id_mestre = '" . $acesso["id_usuario"] . "'";
        $SQLUserSub = $conn->prepare($SQLUserSub);
        $SQLUserSub->execute();
        if ($SQLUserSub->rowCount() > 0) {
            while (${$GLOBALS["xsmefmsnh"]} = $SQLUserSub->fetch()) {
                $GLOBALS["xwmtgfxkflnu"] = "acesso";
                $ogsiigld = "SQLUpdateSSH";
                ${$GLOBALS["wlvhgyiib"]} = "update conta_ssh set id_usuario='0', status='3', apagar='3' WHERE id_servidor='" . ${$GLOBALS["zvtsselx"]}["id_servidor"] . "' and id_usuario = '" . $acesso["id_usuario"] . "'";
                ${$GLOBALS["wlvhgyiib"]} = $conn->prepare(${$ogsiigld});
                $SQLUpdateSSH->execute();
            }
        }
        ${$GLOBALS["jwbdsrjmw"]} = "delete from acesso_servidor WHERE id_servidor = '" . ${$GLOBALS["mviwgsp"]}["id_servidor"] . "' and id_usuario = '" . ${$GLOBALS["ouelryrvdsx"]}["id_usuario"] . "'";
        ${$ocekdf} = $conn->prepare(${$GLOBALS["jwbdsrjmw"]});
        $SQLExcluiAcesso->execute();
        echo myalertuser("success", "Removido com sucesso!", "../../home.php?page=usuario/perfil&id_usuario=" . ${$ungjpnx}["id_usuario"] . "");
    } else {
        echo myalertuser("warning", "Acesso n\xc3\xa3o encontrado!", "../../home.php?page=usuario/listar");
    }
} else {
    echo myalertuser("error", "Erro !", "../../home.php?page=usuario/listar");
}
