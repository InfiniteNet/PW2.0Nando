<?php

$GLOBALS["sieymmexg"] = "SQLDelSSH";
$GLOBALS["etewskhkekkh"] = "SQLSelecthist";
$nmwmdmhrwta = "SQLDelSSH";
$GLOBALS["vrqqespwlen"] = "SQLSelectSSH";
$GLOBALS["fvpnfsmuw"] = "SQLSelectnoti";
require_once "seguranca.php";
require_once "config.php";
$luxycyauzs = "SQLSelectSSH";
require_once "classe.ssh.php";
require_once "funcoes.php";
$GLOBALS["vrrkxhsqewe"] = "SQLSelectnoti";
$SQLSelectSSH = "delete from hist_usuario_ssh_online where hora_conexao < NOW() - INTERVAL 20 DAY";
$SQLSelectSSH = $conn->prepare($SQLSelectSSH);
$GLOBALS["tttzbkpyxqo"] = "SQLSelecthist";
$SQLSelectSSH->execute();
$SQLSelecthist = "delete from historico_login where data_login < NOW() - INTERVAL 20 DAY";
$SQLSelecthist = $conn->prepare($SQLSelecthist);
$GLOBALS["lrdthkniwnbl"] = "SQLDelSSH";
$SQLSelecthist->execute();
$tubvjftfcg = "SQLSelectnoti";
$SQLSelectnoti = "delete from notificacoes where data < NOW() - INTERVAL 15 DAY";
$SQLSelectnoti = $conn->prepare($SQLSelectnoti);
$SQLSelectnoti->execute();
$SQLDelSSH = "update conta_ssh set status='3', apagar='3', id_usuario='0' WHERE  data_validade < NOW() - INTERVAL 1 DAY and data_suspensao < NOW() - INTERVAL 15 DAY and status >= '2'";
$SQLDelSSH = $conn->prepare($SQLDelSSH);
$SQLDelSSH->execute();
