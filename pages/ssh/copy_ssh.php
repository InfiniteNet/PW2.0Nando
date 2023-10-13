<?php

$GLOBALS["xfylkfyme"] = "diretorio";
$GLOBALS["diqoopryrfh"] = "ssh_srv";
$GLOBALS["fbqjftignpy"] = "conta_ssh";
$GLOBALS["vpeplunemybl"] = "dias_acesso";
$GLOBALS["fhyufchls"] = "diferenca";
$GLOBALS["dihojceemn"] = "data_validade";
$GLOBALS["supoafme"] = "data_atual";
$GLOBALS["uvrtoptugfc"] = "SQLServidor";
$GLOBALS["ywvxbdlqvs"] = "SQLUsuarioSSH";
$GLOBALS["juukkwopapzi"] = "SQLUsuarioSSH";
$GLOBALS["yywnehkkr"] = "SQLAdministrador";
$GLOBALS["nmytywfv"] = "usuario";
echo "<!DOCTYPE html>\n<html class=\"loading bordered-layout\" lang=\"pt\" data-layout=\"bordered-layout\" data-textdirection=\"ltr\">\n<!-- BEGIN: Head-->\n<head>\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\n<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\n<meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui\">\n</head>\n";
require_once "pages/system/seguranca.php";
$emlqjt = "conta_ssh";
$pgtlaak = "ssh_srv";
$efmagvhnvs = "data_validade";
require_once "pages/system/config.php";
require_once "pages/system/funcoes.php";
$sqhcubl = "SQLAdministrador";
$GLOBALS["mydljgmvsipm"] = "dominio";
$kfmexk = "diretorio";
require_once "pages/system/classe.ssh.php";
require_once "pages/system/funcoes.system.php";
$GLOBALS["euercfi"] = "administrador";
protegePagina("user");
$GLOBALS["orxmqddvtms"] = "conta_ssh";
if ($usuario["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
${$kfmexk} = "../../home.php?page=ssh/contas";
$llgcjvjl = "SQLServidor";
${$GLOBALS["mydljgmvsipm"]} = $_SERVER["HTTP_HOST"];
$fjkirydci = "SQLServidor";
$GLOBALS["tumekdcyjo"] = "SQLUsuarioSSH";
${$sqhcubl} = "SELECT * FROM admin";
${$GLOBALS["yywnehkkr"]} = $conn->prepare(${$GLOBALS["yywnehkkr"]});
$SQLAdministrador->execute();
${$GLOBALS["euercfi"]} = $SQLAdministrador->fetch();
${$GLOBALS["juukkwopapzi"]} = "select * from conta_ssh WHERE id_usuario_ssh = '" . $_GET["id_ssh"] . "' ";
${$GLOBALS["ywvxbdlqvs"]} = $conn->prepare(${$GLOBALS["tumekdcyjo"]});
$imlbkgrwq = "conta_ssh";
$dgwkjimfek = "data_atual";
$SQLUsuarioSSH->execute();
${$emlqjt} = $SQLUsuarioSSH->fetch();
${$GLOBALS["uvrtoptugfc"]} = "select * from servidor WHERE id_servidor = '" . ${$GLOBALS["orxmqddvtms"]}["id_servidor"] . "'  ";
${$llgcjvjl} = $conn->prepare(${$fjkirydci});
$SQLServidor->execute();
${$pgtlaak} = $SQLServidor->fetch();
${$GLOBALS["supoafme"]} = date("Y-m-d H:i:s");
${$efmagvhnvs} = ${$imlbkgrwq}["data_validade"];
if (${$GLOBALS["dihojceemn"]} > ${$dgwkjimfek}) {
    $hrezlku = "data_atual";
    ${$GLOBALS["fhyufchls"]} = strtotime(${$GLOBALS["dihojceemn"]}) - strtotime($data_atual);
    ${$GLOBALS["vpeplunemybl"]} = floor(${$GLOBALS["fhyufchls"]} / 86400);
} else {
    $GLOBALS["ustzskcxslzh"] = "dias_acesso";
    $dias_acesso = 0;
}
if (${$GLOBALS["fbqjftignpy"]}["uuid"] != "") {
    $bifvubwb = "conta_ssh";
    $bhxbsxhq = "conta_ssh";
    echo info_alertv2(${$GLOBALS["diqoopryrfh"]}["nome"] . "", ${$GLOBALS["fbqjftignpy"]}["login"] . "", $conta_ssh["senha"] . "", ${$GLOBALS["fbqjftignpy"]}["acesso"] . "", "{$dias_acesso} dias", $conta_ssh["uuid"] . "", ${$GLOBALS["xfylkfyme"]});
} else {
    $lycsplidkr = "conta_ssh";
    $GLOBALS["emdlobwm"] = "administrador";
    $eqctliuztotn = "ssh_srv";
    echo info_alert($ssh_srv["nome"] . "", ${$GLOBALS["fbqjftignpy"]}["login"] . "", $conta_ssh["senha"] . "", ${$GLOBALS["fbqjftignpy"]}["acesso"] . "", "{$dias_acesso} dias", $administrador["textocon"] . "", ${$GLOBALS["xfylkfyme"]});
}
