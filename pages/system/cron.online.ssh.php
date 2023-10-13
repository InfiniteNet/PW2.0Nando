<?php

$GLOBALS["tdzhjgibg"] = "SQLContasSSH";
$GLOBALS["xeebekj"] = "contas_ssh";
$GLOBALS["wwuwcoo"] = "SQLAcessoSSH";
$GLOBALS["lolcwuim"] = "acesso_ssh";
$GLOBALS["tynnssbjk"] = "SQLOlineSSH";
$GLOBALS["wrosilfcwv"] = "ssh_online";
$GLOBALS["lluosjqkse"] = "acessos";
$GLOBALS["wievpdhtgo"] = "onlines";
$GLOBALS["hllblmbo"] = "contas";
$GLOBALS["uqkkgqpyhu"] = "sssh";
$GLOBALS["xtsjgccfo"] = "SQLHistSSH";
$GLOBALS["fsrxsqpfcqg"] = "SQLSSHServidor";
$GLOBALS["sbdlhcld"] = "Array";
$GLOBALS["nqdnowqqhdwy"] = "user";
$GLOBALS["mbqoktjpjegw"] = "user2";
$GLOBALS["pvpadhwsth"] = "i";
$GLOBALS["odicfkkro"] = "partes";
$GLOBALS["okpptdtgq"] = "mensagem";
$GLOBALS["cjvkxhboy"] = "senhaSSH";
$GLOBALS["qjmtedfqke"] = "row";
$GLOBALS["dhwkzsvn"] = "loginSSH";
$GLOBALS["vsfbwbrb"] = "ip_servidor";
$GLOBALS["xnityehpuy"] = "SQLServidor";
$GLOBALS["mjaqdadwtu"] = "SQLUPSSH";
$GLOBALS["riwcxljj"] = "ssh";
$GLOBALS["stjoimxrcda"] = "SQLUPSSH";
$GLOBALS["mtejetz"] = "data_hora_atual";
$GLOBALS["noqtdbpnkmk"] = "data";
require_once "seguranca.php";
require_once "config.php";
$posgrsxg = "SQLSelectSSH";
require_once "classe.ssh.php";
$GLOBALS["vnmovcjm"] = "SQLSelectSSH";
require_once "funcoes.php";
$data = date("Y-m-d H:i:s");
$data_hora_atual = date("Y-m-d H:i:s");
$bevhiki = "SQLSelectSSH";
$GLOBALS["ncbrvpowr"] = "SQLServidor";
$SQLSelectSSH = "SELECT * FROM conta_ssh WHERE online = '0'";
$SQLSelectSSH = $conn->prepare($SQLSelectSSH);
$iogfhpjcdeh = "SQLUPSSH";
$SQLSelectSSH->execute();
if ($SQLSelectSSH->rowCount() > 0) {
    while (${$GLOBALS["riwcxljj"]} = $SQLSelectSSH->fetch()) {
        $GLOBALS["zlfykjj"] = "SQLHistSSH";
        $GLOBALS["hxsirzg"] = "SQLHistSSH";
        $SQLHistSSH = "update hist_usuario_ssh_online set hora_desconexao='" . ${$GLOBALS["noqtdbpnkmk"]} . "', status='0' WHERE status='1' and id_usuario='" . ${$GLOBALS["riwcxljj"]}["id_usuario_ssh"] . "'";
        $GLOBALS["uqdiodgdhb"] = "SQLHistSSH";
        $SQLHistSSH = $conn->prepare($SQLHistSSH);
        $SQLHistSSH->execute();
    }
}
${$GLOBALS["mjaqdadwtu"]} = "update conta_ssh set online_hist='0' WHERE online = '0'";
${$iogfhpjcdeh} = $conn->prepare(${$GLOBALS["stjoimxrcda"]});
$SQLUPSSH->execute();
${$GLOBALS["ncbrvpowr"]} = "SELECT * FROM servidor";
${$GLOBALS["xnityehpuy"]} = $conn->prepare(${$GLOBALS["xnityehpuy"]});
$SQLServidor->execute();
if ($SQLServidor->rowCount() > 0) {
    $GLOBALS["wwygmgl"] = "row";
    while (${$GLOBALS["wwygmgl"]} = $SQLServidor->fetch()) {
        $hdjkroo = "ip_servidor";
        $jctrzaphepzy = "row";
        ${$GLOBALS["vsfbwbrb"]} = $row["ip_servidor"];
        ${$GLOBALS["dhwkzsvn"]} = ${$GLOBALS["qjmtedfqke"]}["login_server"];
        ${$GLOBALS["cjvkxhboy"]} = ${$GLOBALS["qjmtedfqke"]}["senha"];
        ${$GLOBALS["riwcxljj"]} = new SSH2(${$hdjkroo});
        $ssh->auth(${$GLOBALS["dhwkzsvn"]}, ${$GLOBALS["cjvkxhboy"]});
        $GLOBALS["zeuyqyehflp"] = "Array";
        $GLOBALS["myfyorqki"] = "i";
        $ssh->exec("/opt/gestorsinc/sshmonitor");
        ${$GLOBALS["okpptdtgq"]} = (string) $ssh->output();
        ${$GLOBALS["odicfkkro"]} = explode(",", ${$GLOBALS["okpptdtgq"]});
        $evebsnw = "SQLUPSSH";
        ${$GLOBALS["zeuyqyehflp"]} = array();
        $yjtygnqh = "SQLUPSSH";
        for (${$GLOBALS["pvpadhwsth"]} = 0; ${$GLOBALS["pvpadhwsth"]} <= count(${$GLOBALS["odicfkkro"]}); ${$GLOBALS["pvpadhwsth"]}++) {
            $GLOBALS["mejlcjocrb"] = "i";
            $mpvwpujdjs = "partes";
            $GLOBALS["rhfkfm"] = "user";
            $user = trim($partes[$i], " ");
            $GLOBALS["ffbsmn"] = "user2";
            $GLOBALS["roqogyh"] = "Array";
            ${$GLOBALS["mbqoktjpjegw"]} = trim(${$GLOBALS["nqdnowqqhdwy"]}, ",");
            ${$GLOBALS["roqogyh"]}[${$GLOBALS["pvpadhwsth"]}] = (string) ${$GLOBALS["ffbsmn"]};
        }
        ${$evebsnw} = "update conta_ssh set online='0' WHERE id_servidor = '" . ${$GLOBALS["qjmtedfqke"]}["id_servidor"] . "'";
        ${$GLOBALS["mjaqdadwtu"]} = $conn->prepare(${$yjtygnqh});
        $SQLUPSSH->execute();
        for (${$GLOBALS["pvpadhwsth"]} = 0; ${$GLOBALS["myfyorqki"]} < count(${$GLOBALS["sbdlhcld"]}); ${$GLOBALS["pvpadhwsth"]}++) {
            ${$GLOBALS["nqdnowqqhdwy"]} = trim(${$GLOBALS["sbdlhcld"]}[${$GLOBALS["pvpadhwsth"]}]);
            ${$GLOBALS["fsrxsqpfcqg"]} = "SELECT * FROM conta_ssh where login='{$user}'";
            ${$GLOBALS["fsrxsqpfcqg"]} = $conn->prepare(${$GLOBALS["fsrxsqpfcqg"]});
            $SQLSSHServidor->execute();
            if ($SQLSSHServidor->rowCount() > 0) {
                $GLOBALS["xkktoeeffrmb"] = "sssh";
                $gszkbwcskus = "sssh";
                $sssh = $SQLSSHServidor->fetch();
                if ($sssh["online_hist"] == 0) {
                    $GLOBALS["lqvhpfgwodc"] = "SQLHistSSH";
                    $lxyigyowce = "SQLAcessoSSH";
                    $qqoouhtj = "SQLOlineSSH";
                    $jsilfbyx = "data";
                    $laxwvld = "Array";
                    $hsqjtidjdw = "SQLOlineSSH";
                    ${$GLOBALS["mjaqdadwtu"]} = "update conta_ssh set online='" . $Array[${$GLOBALS["pvpadhwsth"]} + 1] . "', online_hist='1', online_start = '" . ${$GLOBALS["mtejetz"]} . "' WHERE login = '{$user}'";
                    $kvikerol = "SQLUPSSH";
                    $wguqqs = "SQLUPSSH";
                    $mwymxwrfz = "SQLOlineSSH";
                    $ujvucgx = "acessos";
                    $GLOBALS["nhaiujhg"] = "SQLOlineSSH";
                    $SQLUPSSH = $conn->prepare($SQLUPSSH);
                    $jheaddwwymbp = "contas";
                    $SQLUPSSH->execute();
                    ${$GLOBALS["xtsjgccfo"]} = "INSERT INTO hist_usuario_ssh_online (status, id_usuario, hora_conexao) VALUES ('1', '" . ${$GLOBALS["uqkkgqpyhu"]}["id_usuario_ssh"] . "', '" . ${$jsilfbyx} . "')";
                    $rbnjijwxycl = "onlines";
                    ${$GLOBALS["xtsjgccfo"]} = $conn->prepare(${$GLOBALS["lqvhpfgwodc"]});
                    $SQLHistSSH->execute();
                    $oydleze = "contas_ssh";
                    ${$rbnjijwxycl} = 0;
                    ${$ujvucgx} = 0;
                    $nemddvau = "SQLAcessoSSH";
                    $GLOBALS["dturemgp"] = "contas";
                    ${$GLOBALS["hllblmbo"]} = 0;
                    ${$GLOBALS["wievpdhtgo"]} = file_get_contents("/etc/kernel/recweb/ssh.online");
                    $GLOBALS["tgbcsmt"] = "SQLContasSSH";
                    ${$GLOBALS["lluosjqkse"]} = file_get_contents("/etc/kernel/recweb/ssh.acesso");
                    ${$jheaddwwymbp} = file_get_contents("/etc/kernel/recweb/ssh.conta");
                    ${$GLOBALS["wrosilfcwv"]} = 0;
                    ${$hsqjtidjdw} = "SELECT sum(online) AS quantidade FROM conta_ssh";
                    ${$mwymxwrfz} = $conn->prepare(${$GLOBALS["tynnssbjk"]});
                    $SQLOlineSSH->execute();
                    ${$GLOBALS["nhaiujhg"]} = $SQLOlineSSH->fetch();
                    ${$GLOBALS["wrosilfcwv"]} += ${$qqoouhtj}["quantidade"];
                    if (${$GLOBALS["wrosilfcwv"]} !== ${$GLOBALS["wievpdhtgo"]}) {
                        exec("echo {$ssh_online} > /etc/kernel/recweb/ssh.online");
                    }
                    ${$GLOBALS["lolcwuim"]} = 0;
                    ${$GLOBALS["wwuwcoo"]} = "SELECT sum(acesso) AS quantidade  FROM conta_ssh  ";
                    ${$lxyigyowce} = $conn->prepare(${$nemddvau});
                    $SQLAcessoSSH->execute();
                    ${$GLOBALS["wwuwcoo"]} = $SQLAcessoSSH->fetch();
                    ${$GLOBALS["lolcwuim"]} += ${$GLOBALS["wwuwcoo"]}["quantidade"];
                    if (${$GLOBALS["lolcwuim"]} !== ${$GLOBALS["lluosjqkse"]}) {
                        exec("echo {$acesso_ssh} > /etc/kernel/recweb/ssh.acesso");
                    }
                    ${$GLOBALS["xeebekj"]} = 0;
                    ${$GLOBALS["tgbcsmt"]} = "SELECT * FROM conta_ssh ";
                    $GLOBALS["xdnruixs"] = "contas_ssh";
                    ${$GLOBALS["tdzhjgibg"]} = $conn->prepare(${$GLOBALS["tdzhjgibg"]});
                    $SQLContasSSH->execute();
                    ${$oydleze} = $SQLContasSSH->rowCount();
                    if (${$GLOBALS["xdnruixs"]} !== ${$GLOBALS["dturemgp"]}) {
                        exec("echo {$contas_ssh} > /etc/kernel/recweb/ssh.conta");
                    }
                } else {
                    $lovmjqfrcrv = "Array";
                    $caujmnq = "SQLContasSSH";
                    $ougvmisbm = "SQLUPSSH";
                    $GLOBALS["xsqygv"] = "acessos";
                    $ipwukdytle = "SQLAcessoSSH";
                    $hixxrgj = "acesso_ssh";
                    $SQLUPSSH = "update conta_ssh set online='" . $Array[${$GLOBALS["pvpadhwsth"]} + 1] . "', online_hist='1' WHERE login = '{$user}'";
                    $GLOBALS["dhxbolrx"] = "SQLOlineSSH";
                    $GLOBALS["ebkfwqv"] = "onlines";
                    $GLOBALS["womuxu"] = "contas";
                    ${$GLOBALS["mjaqdadwtu"]} = $conn->prepare(${$GLOBALS["mjaqdadwtu"]});
                    $GLOBALS["qghjosgcc"] = "SQLOlineSSH";
                    $SQLUPSSH->execute();
                    $wdwyfmealn = "onlines";
                    $onlines = 0;
                    ${$GLOBALS["lluosjqkse"]} = 0;
                    ${$GLOBALS["womuxu"]} = 0;
                    ${$GLOBALS["wievpdhtgo"]} = file_get_contents("/etc/kernel/recweb/ssh.online");
                    ${$GLOBALS["xsqygv"]} = file_get_contents("/etc/kernel/recweb/ssh.acesso");
                    ${$GLOBALS["hllblmbo"]} = file_get_contents("/etc/kernel/recweb/ssh.conta");
                    $jrfmbsk = "SQLOlineSSH";
                    $qkosvkjlcc = "SQLAcessoSSH";
                    ${$GLOBALS["wrosilfcwv"]} = 0;
                    ${$GLOBALS["tynnssbjk"]} = "SELECT sum(online) AS quantidade FROM conta_ssh";
                    $GLOBALS["bnpmakbvwal"] = "ssh_online";
                    $GLOBALS["ktisjit"] = "SQLAcessoSSH";
                    ${$GLOBALS["qghjosgcc"]} = $conn->prepare(${$jrfmbsk});
                    $SQLOlineSSH->execute();
                    ${$GLOBALS["dhxbolrx"]} = $SQLOlineSSH->fetch();
                    ${$GLOBALS["wrosilfcwv"]} += ${$GLOBALS["tynnssbjk"]}["quantidade"];
                    if (${$GLOBALS["bnpmakbvwal"]} !== ${$GLOBALS["ebkfwqv"]}) {
                        exec("echo {$ssh_online} > /etc/kernel/recweb/ssh.online");
                    }
                    $GLOBALS["glacpiaexdt"] = "acessos";
                    ${$GLOBALS["lolcwuim"]} = 0;
                    $bbyntuvcpoy = "contas_ssh";
                    ${$ipwukdytle} = "SELECT sum(acesso) AS quantidade  FROM conta_ssh  ";
                    ${$GLOBALS["ktisjit"]} = $conn->prepare(${$qkosvkjlcc});
                    $SQLAcessoSSH->execute();
                    ${$GLOBALS["wwuwcoo"]} = $SQLAcessoSSH->fetch();
                    ${$GLOBALS["lolcwuim"]} += ${$GLOBALS["wwuwcoo"]}["quantidade"];
                    if (${$hixxrgj} !== ${$GLOBALS["glacpiaexdt"]}) {
                        exec("echo {$acesso_ssh} > /etc/kernel/recweb/ssh.acesso");
                    }
                    ${$GLOBALS["xeebekj"]} = 0;
                    ${$GLOBALS["tdzhjgibg"]} = "SELECT * FROM conta_ssh ";
                    ${$caujmnq} = $conn->prepare(${$GLOBALS["tdzhjgibg"]});
                    $SQLContasSSH->execute();
                    ${$GLOBALS["xeebekj"]} = $SQLContasSSH->rowCount();
                    if (${$bbyntuvcpoy} !== ${$GLOBALS["hllblmbo"]}) {
                        exec("echo {$contas_ssh} > /etc/kernel/recweb/ssh.conta");
                    }
                }
            }
        }
    }
} else {
    echo "<br>Nenhum Servidor!<br>";
}
