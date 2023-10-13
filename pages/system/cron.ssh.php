<?php

$GLOBALS["hpujudpjxg"] = "ssh";
$GLOBALS["szhynklwrp"] = "row";
$GLOBALS["adwsxbeodpv"] = "senhaSSH";
$GLOBALS["ggsxllkzywf"] = "ip_servidor";
$GLOBALS["zvyfvmpyeic"] = "loginSSH";
$GLOBALS["bsiulyiwii"] = "SQLSSH";
$GLOBALS["swvxqkuc"] = "servidor";
$GLOBALS["ouuxjkgrhu"] = "SQLServidor";
$GLOBALS["bbbhrac"] = "SQLSSH";
require_once "seguranca.php";
require_once "config.php";
$hxwycozayi = "SQLSSH";
require_once "classe.ssh.php";
$csexqox = "data";
$data = date("Y-m-d H:i:s");
$SQLSSH = "SELECT * FROM conta_ssh where status='2' and apagar='2'";
$SQLSSH = $conn->prepare($SQLSSH);
$SQLSSH->execute();
$GLOBALS["vmgrqxk"] = "SQLSSH";
if ($SQLSSH->rowCount() > 0) {
    $rvrhdjvsdz = "row";
    while (${$rvrhdjvsdz} = $SQLSSH->fetch()) {
        $jpcemsmvp = "ip_servidor";
        $yfjpocr = "servidor";
        $orxstabo = "servidor";
        $frbyintcj = "row";
        $jvqbhjqaknn = "SQLSSH";
        ${$GLOBALS["ouuxjkgrhu"]} = "select * from servidor WHERE id_servidor = '" . $row["id_servidor"] . "'";
        $kwkvqsqcwdc = "SQLServidor";
        $GLOBALS["ttfugjdptp"] = "SQLServidor";
        $SQLServidor = $conn->prepare($SQLServidor);
        $GLOBALS["pklqpafrqof"] = "servidor";
        $yjndgomrygp = "row";
        $SQLServidor->execute();
        $GLOBALS["jsbjfleognw"] = "row";
        ${$orxstabo} = $SQLServidor->fetch();
        $xspleirj = "senhaSSH";
        ${$jpcemsmvp} = ${$GLOBALS["swvxqkuc"]}["ip_servidor"];
        $ldaqvrixipm = "ssh";
        $xuixlvs = "SQLSSH";
        ${$GLOBALS["zvyfvmpyeic"]} = ${$GLOBALS["pklqpafrqof"]}["login_server"];
        $smdqbmn = "data";
        ${$xspleirj} = ${$yfjpocr}["senha"];
        ${$ldaqvrixipm} = new SSH2(${$GLOBALS["ggsxllkzywf"]});
        $ssh->auth(${$GLOBALS["zvyfvmpyeic"]}, ${$GLOBALS["adwsxbeodpv"]});
        $ssh->exec("usermod -L " . ${$GLOBALS["szhynklwrp"]}["login"] . " && /opt/gestorsinc/KillUser " . ${$yjndgomrygp}["login"] . ")");
        $ssh->output();
        ${$GLOBALS["bbbhrac"]} = "update conta_ssh set status='2', apagar='0', online='0', data_suspensao='" . ${$smdqbmn} . "' WHERE id_usuario_ssh = '" . ${$GLOBALS["jsbjfleognw"]}["id_usuario_ssh"] . "' ";
        ${$jvqbhjqaknn} = $conn->prepare(${$xuixlvs});
        $SQLSSH->execute();
        echo "<br>Conta SSH suspensa com sucesso!<br>" . ${$GLOBALS["szhynklwrp"]}["login"];
    }
} else {
    echo "<br>Nenhuma Conta SSH suspensa no servidor!<br>";
}
${$GLOBALS["bbbhrac"]} = "SELECT * FROM conta_ssh where  status='1' and apagar='1'";
${$GLOBALS["vmgrqxk"]} = $conn->prepare(${$GLOBALS["bsiulyiwii"]});
$SQLSSH->execute();
if ($SQLSSH->rowCount() > 0) {
    while (${$GLOBALS["szhynklwrp"]} = $SQLSSH->fetch()) {
        $bntsxkya = "row";
        $GLOBALS["zkutkgegt"] = "SQLServidor";
        $GLOBALS["qlukmqhocd"] = "servidor";
        $rbhvpbuxnzzu = "row";
        $GLOBALS["gclxxqxu"] = "loginSSH";
        $eosfrylbgk = "SQLServidor";
        $jvdgwdw = "ip_servidor";
        $rsgntij = "SQLSSH";
        $lzunjtu = "row";
        $GLOBALS["tvrqqsxp"] = "ssh";
        $jituivmyctga = "ip_servidor";
        $GLOBALS["ugxejxey"] = "senhaSSH";
        ${$GLOBALS["ouuxjkgrhu"]} = "select * from servidor WHERE id_servidor = '" . $row["id_servidor"] . "'";
        ${$GLOBALS["zkutkgegt"]} = $conn->prepare(${$eosfrylbgk});
        $SQLServidor->execute();
        ${$GLOBALS["swvxqkuc"]} = $SQLServidor->fetch();
        ${$jvdgwdw} = ${$GLOBALS["qlukmqhocd"]}["ip_servidor"];
        ${$GLOBALS["gclxxqxu"]} = ${$GLOBALS["swvxqkuc"]}["login_server"];
        ${$GLOBALS["ugxejxey"]} = ${$GLOBALS["swvxqkuc"]}["senha"];
        ${$GLOBALS["tvrqqsxp"]} = new SSH2(${$jituivmyctga});
        $ssh->auth(${$GLOBALS["zvyfvmpyeic"]}, ${$GLOBALS["adwsxbeodpv"]});
        $ssh->exec("usermod -U " . ${$lzunjtu}["login"] . " && /opt/gestorsinc/KillUser " . ${$GLOBALS["szhynklwrp"]}["login"] . "");
        $ssh->output();
        ${$GLOBALS["bbbhrac"]} = "update conta_ssh set status='1', apagar='0' WHERE id_usuario_ssh = '" . ${$GLOBALS["szhynklwrp"]}["id_usuario_ssh"] . "'";
        ${$rsgntij} = $conn->prepare(${$GLOBALS["bbbhrac"]});
        $SQLSSH->execute();
        echo "<br>Conta SSH: " . ${$rbhvpbuxnzzu}["login"] . "liberada com sucesso!<br>";
    }
} else {
    echo "<br>Nenhuma Conta SSH liberada no servidor!<br>";
}
${$GLOBALS["bbbhrac"]} = "SELECT * FROM conta_ssh where  status='3' and apagar >='0'";
${$GLOBALS["bbbhrac"]} = $conn->prepare(${$GLOBALS["bbbhrac"]});
$SQLSSH->execute();
if ($SQLSSH->rowCount() > 0) {
    while (${$GLOBALS["szhynklwrp"]} = $SQLSSH->fetch()) {
        $aycivduqgi = "row";
        $vnxcifsjeqa = "row";
        $GLOBALS["zboovem"] = "SQLServidor";
        $SQLServidor = "select * from servidor WHERE id_servidor = '" . $row["id_servidor"] . "'";
        $GLOBALS["dhuntp"] = "senhaSSH";
        $sfgsynqs = "SQLSSH";
        $ucfwfmutm = "row";
        $GLOBALS["yhggkgedens"] = "servidor";
        ${$GLOBALS["ouuxjkgrhu"]} = $conn->prepare(${$GLOBALS["ouuxjkgrhu"]});
        $kfxpqnfvr = "servidor";
        $zpgcevoik = "row";
        $GLOBALS["jpxaogwuxz"] = "ip_servidor";
        $SQLServidor->execute();
        ${$GLOBALS["swvxqkuc"]} = $SQLServidor->fetch();
        $emjqnuynekmp = "servidor";
        $GLOBALS["bshgbih"] = "loginSSH";
        ${$GLOBALS["ggsxllkzywf"]} = ${$GLOBALS["yhggkgedens"]}["ip_servidor"];
        $rhleyje = "senhaSSH";
        $GLOBALS["xmoaxkdo"] = "SQLSSH";
        ${$GLOBALS["bshgbih"]} = ${$kfxpqnfvr}["login_server"];
        ${$rhleyje} = ${$emjqnuynekmp}["senha"];
        ${$GLOBALS["hpujudpjxg"]} = new SSH2(${$GLOBALS["jpxaogwuxz"]});
        $ssh->auth(${$GLOBALS["zvyfvmpyeic"]}, ${$GLOBALS["dhuntp"]});
        $ssh->exec("/opt/gestorsinc/remover " . ${$zpgcevoik}["login"] . "");
        $ssh->output();
        ${$GLOBALS["xmoaxkdo"]} = "delete from conta_ssh WHERE id_usuario_ssh = '" . ${$vnxcifsjeqa}["id_usuario_ssh"] . "'";
        ${$GLOBALS["bbbhrac"]} = $conn->prepare(${$sfgsynqs});
        $SQLSSH->execute();
        echo "<br>Conta SSH: " . ${$ucfwfmutm}["login"] . "deletada com sucesso!<br>";
    }
} else {
    echo "<br>Nenhuma Conta SSH excluida no servidor!<br>";
}
