<?php

$GLOBALS["vgqdwlur"] = "destinodoarq";
$GLOBALS["rfchlqu"] = "bckarq";
$GLOBALS["hperdue"] = "data";
$GLOBALS["zifxcpfcdw"] = "mensagem";
$GLOBALS["vtgbnoks"] = "ip_servidor";
$GLOBALS["wwrgrfirr"] = "ssh";
$GLOBALS["qregkej"] = "senhaSSH";
$GLOBALS["cdcndecit"] = "row";
$GLOBALS["mmkncixr"] = "SQLSservidor";
$GLOBALS["imogwizrttw"] = "data2";
require "../../vendor/autoload.php";
$kwfhjpgl = "SQLSservidor";
use\phpseclib\Net\SFTP;
use\phpseclib\Net\SSH2;
$GLOBALS["dttgmmn"] = "data";
$sgnghpvc = "SQLSservidor";
require_once "seguranca.php";
require_once "config.php";
require_once "funcoes.php";
$data = date("Y-m-d h:i:s");
$data2 = date("d-m-Y");
set_time_limit(0);
$SQLSservidor = "SELECT * FROM `servidor` LIMIT 500";
$SQLSservidor = $conn->prepare($SQLSservidor);
$SQLSservidor->execute();
if ($SQLSservidor->rowCount() > 0) {
    $GLOBALS["zckisqxeii"] = "row";
    while (${$GLOBALS["zckisqxeii"]} = $SQLSservidor->fetch()) {
        $GLOBALS["vsngkadbynhc"] = "row";
        $GLOBALS["glaeotwixo"] = "ip_servidor";
        $ihcifokkrvtg = "ip_servidor";
        $qxjjvskolhg = "loginSSH";
        $ip_servidor = ${$GLOBALS["cdcndecit"]}["ip_servidor"];
        $wfxsefsbyf = "loginSSH";
        $loginSSH = $row["login_server"];
        $lvfwpuczc = "servidor_online";
        ${$GLOBALS["qregkej"]} = ${$GLOBALS["cdcndecit"]}["senha"];
        ${$GLOBALS["wwrgrfirr"]} = new SSH2(${$GLOBALS["vtgbnoks"]});
        $ojeeuoognhvq = "servidor_online";
        $ssh->login(${$wfxsefsbyf}, ${$GLOBALS["qregkej"]});
        $servidor_online = $ssh->isConnected(${$GLOBALS["glaeotwixo"]});
        if (!${$lvfwpuczc}) {
            $GLOBALS["dlmfngpb"] = "row";
            $GLOBALS["vtfbgvpb"] = "SQLNotfc";
            $GLOBALS["vibjyqgljo"] = "SQLNotfc";
            $GLOBALS["supojzrt"] = "row";
            $ffizfuncp = "SQLNotfc";
            $GLOBALS["wfyskpsyt"] = "mensagem";
            $mensagem = "O servidor " . ${$GLOBALS["cdcndecit"]}["nome"] . " IP->" . $row["ip_servidor"] . " n\xc3\xa3o respondeu! N\xc3\xa3o foi poss\xc3\xadvel criar o backup.";
            $SQLNotfc = "insert into notificacoes (tipo, admin, usuario_id, mensagem, data)\nVALUES ('servidores', 'sim', '1', '" . ${$GLOBALS["zifxcpfcdw"]} . "', '" . ${$GLOBALS["hperdue"]} . "')  ";
            $SQLNotfc = $conn->prepare($SQLNotfc);
            $SQLNotfc->execute();
            echo "O servidor " . $row["nome"] . " est\xc3\xa1 offline! N\xc3\xa3o foi poss\xc3\xadvel tirar o backup.";
        } else {
            $clplgtklf = "row";
            $GLOBALS["kxydiymi"] = "senhaSSH";
            echo "Conex\xc3\xa3o com: " . $row["nome"] . "";
            $GLOBALS["drjmbfttzxof"] = "loginSSH";
            $ugcnxisbr = "ip_servidor";
            $GLOBALS["ighnkxmugd"] = "loginSSH";
            $GLOBALS["gexnoeirv"] = "sftp";
            echo "Iniciando download do script de backup.";
            $dgqtexif = "ssh";
            echo "Iniciando execu\xc3\xa7\xc3\xa3o do script...";
            $ssh->exec("/opt/gestorsinc/backup");
            echo "Iniciando conex\xc3\xa3o SFTP com a m\xc3\xa1quina...";
            $abobmbbrbqi = "sftp";
            $sftp = new SFTP($ip_servidor);
            if (!$sftp->login($loginSSH, $senhaSSH)) {
                $rjrisms = "row";
                echo "O Login falhou... N\xc3\xa3o foi poss\xc3\xadvel concluir o backup no servidor " . $row["nome"] . "";
            } else {
                echo "Conectado no servidor! Iniciando download...";
                $wevhtiw = "bckarq";
                ${$GLOBALS["rfchlqu"]} = "/opt/gestorsinc/backup.vps";
                if (${$wevhtiw}) {
                    $xmxfspvnd = "row";
                    $GLOBALS["xduqwvtorgr"] = "bckarq";
                    $GLOBALS["qtowesdlnk"] = "row";
                    mkdir("/root/backupvps/", 0777, true);
                    ${$GLOBALS["vgqdwlur"]} = "/root/backupvps/" . $row["nome"] . " - " . ${$GLOBALS["imogwizrttw"]} . ".vps";
                    $sftp->get(${$GLOBALS["xduqwvtorgr"]}, ${$GLOBALS["vgqdwlur"]});
                    echo "\nO servidor " . ${$xmxfspvnd}["nome"] . " teve o backup feito!\n";
                } else {
                    echo $sftp->getSFTPLog();
                    $xqhobhlss = "row";
                    echo "Erro baixando o arquivo do servidor " . $row["nome"] . "...";
                }
            }
            unset(${$dgqtexif}, ${$abobmbbrbqi}, ${$GLOBALS["ighnkxmugd"]}, ${$GLOBALS["qregkej"]}, ${$GLOBALS["vtgbnoks"]});
        }
    }
}
