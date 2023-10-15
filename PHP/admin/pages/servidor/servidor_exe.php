<?php

$GLOBALS["mdgnftut"] = "tiramanu";
$GLOBALS["pyouwkdmnqi"] = "dias_acesso2";
$GLOBALS["vpepdvdl"] = "dia";
$GLOBALS["owdroqxrsq"] = "dias_acesso";
$GLOBALS["dxwpppdx"] = "validade";
$GLOBALS["nmggfktgylb"] = "data_atual";
$GLOBALS["hstwyxqseyoi"] = "row";
$GLOBALS["pjyjpgxh"] = "SQLUsuarioSSH";
$GLOBALS["ifhvjaoyd"] = "SQLSSHacess";
$GLOBALS["ljbxskfrntd"] = "SQLSSH";
$GLOBALS["mggxglid"] = "loginSSH";
$GLOBALS["zldmmro"] = "ssh";
$GLOBALS["intiwnhkddj"] = "senhaSSH";
$GLOBALS["chngxbopny"] = "ip_servidor";
$GLOBALS["jhvdghxgkd"] = "servidor";
$GLOBALS["bqwyylhkc"] = "SQLServidor";
$GLOBALS["wjioftr"] = "operacao";
require_once "../../../pages/system/seguranca.php";
require_once "../../../pages/system/config.php";
require_once "../../../pages/system/classe.ssh.php";
require_once "../../../pages/system/funcoes.system.php";
require_once "../../../pages/system/funcoes.php";
protegePagina("donoadmin");
if (isset($_GET["com"]) && isset($_GET["id_servidor"])) {
    $GLOBALS["ktcfhpdkxex"] = "loginSSH";
    $GLOBALS["kkiobqb"] = "operacao";
    $GLOBALS["inmwmlhrlm"] = "operacao";
    $GLOBALS["bsijyqznwugt"] = "servidor";
    $GLOBALS["vwkdesyng"] = "senhaSSH";
    $operacao = $_GET["com"];
    $bssmhybxyv = "SQLServidor";
    $SQLServidor = "select * from servidor WHERE id_servidor = '" . $_GET["id_servidor"] . "'  ";
    $SQLServidor = $conn->prepare($SQLServidor);
    $SQLServidor->execute();
    $GLOBALS["zmkqwhkpe"] = "ip_servidor";
    $GLOBALS["ohposjcl"] = "servidor";
    $servidor = $SQLServidor->fetch();
    $ip_servidor = $servidor["ip_servidor"];
    $cdjuukon = "operacao";
    $loginSSH = $servidor["login_server"];
    $senhaSSH = $servidor["senha"];
    $ssh = new SSH2($ip_servidor);
    $ssh->auth($loginSSH, $senhaSSH);
    $GLOBALS["vbtnpjqmxusv"] = "operacao";
    if ($operacao == "reiniciar") {
        $ssh->exec(" reboot ");
        $ssh->output();
        echo myalertuser("success", "Comando enviado !", "../../home.php?page=servidor/listar");
    } elseif ($operacao == "deletarGeral") {
        $GLOBALS["ttkkyumsvpo"] = "SQLSSHacess";
        $xgvpxlnqkwn = "SQLSSH";
        $yudwyd = "SQLUsuarioSSH";
        $repfsbadyf = "SQLSSHacess";
        $mfqgjrsepn = "SQLUsuarioSSH";
        $SQLUsuarioSSH = "select * from conta_ssh WHERE id_servidor = '" . $servidor["id_servidor"] . "' ";
        $GLOBALS["eqeklq"] = "SQLUsuarioSSH";
        $SQLUsuarioSSH = $conn->prepare($SQLUsuarioSSH);
        $jgrppeiyxhmn = "SQLSSH";
        $GLOBALS["blmwlvahsyq"] = "servidor";
        $SQLUsuarioSSH->execute();
        if ($SQLUsuarioSSH->rowCount() > 0) {
            $ewqgqohrqg = "row";
            while (${$ewqgqohrqg} = $SQLUsuarioSSH->fetch()) {
                $ghsmqkxuy = "row";
                $krauswxd = "mensagem";
                $GLOBALS["fyhwqpniehj"] = "row";
                $GLOBALS["dnpwphpuup"] = "SQLSSH";
                $ssh->exec("/opt/gestorsinc/remover " . $row["login"] . "");
                $GLOBALS["wtitorkx"] = "SQLSSH";
                $mensagem = (string) $ssh->output();
                ${$GLOBALS["ljbxskfrntd"]} = "delete from conta_ssh  WHERE id_usuario_ssh = '" . $row["id_usuario_ssh"] . "'  ";
                ${$GLOBALS["dnpwphpuup"]} = $conn->prepare(${$GLOBALS["wtitorkx"]});
                $SQLSSH->execute();
            }
        }
        ${$GLOBALS["ttkkyumsvpo"]} = "delete from acesso_servidor  WHERE id_servidor = '" . ${$GLOBALS["blmwlvahsyq"]}["id_servidor"] . "'  ";
        ${$GLOBALS["ifhvjaoyd"]} = $conn->prepare(${$repfsbadyf});
        $SQLSSHacess->execute();
        ${$GLOBALS["ljbxskfrntd"]} = "delete from servidor WHERE id_servidor = '" . ${$GLOBALS["jhvdghxgkd"]}["id_servidor"] . "'  ";
        ${$jgrppeiyxhmn} = $conn->prepare(${$xgvpxlnqkwn});
        $SQLSSH->execute();
        echo myalertuser("success", "Servidor deletado com sucesso!", "../../home.php?page=servidor/listar");
    } elseif (${$GLOBALS["kkiobqb"]} == "deletarContas") {
        $ejnrfhd = "SQLUsuarioSSH";
        $GLOBALS["kvnnbkdro"] = "SQLUsuarioSSH";
        $GLOBALS["fdjujjsnxez"] = "servidor";
        ${$GLOBALS["pjyjpgxh"]} = "select * from conta_ssh WHERE id_servidor = '" . $servidor["id_servidor"] . "' ";
        ${$ejnrfhd} = $conn->prepare(${$GLOBALS["kvnnbkdro"]});
        $SQLUsuarioSSH->execute();
        if ($SQLUsuarioSSH->rowCount() > 0) {
            while (${$GLOBALS["hstwyxqseyoi"]} = $SQLUsuarioSSH->fetch()) {
                $GLOBALS["mcvump"] = "row";
                $GLOBALS["lifcucvgd"] = "SQLSSH";
                $ssh->exec("/opt/gestorsinc/remover " . $row["login"] . "");
                $GLOBALS["dlnkjciq"] = "mensagem";
                $mensagem = (string) $ssh->output();
                ${$GLOBALS["ljbxskfrntd"]} = "delete from conta_ssh  WHERE id_usuario_ssh = '" . ${$GLOBALS["hstwyxqseyoi"]}["id_usuario_ssh"] . "'  ";
                ${$GLOBALS["ljbxskfrntd"]} = $conn->prepare(${$GLOBALS["lifcucvgd"]});
                $SQLSSH->execute();
            }
        }
        echo myalertuser("success", "Contas deletadas com sucesso no painel!", "../../home.php?page=servidor/listar");
    } elseif (${$GLOBALS["wjioftr"]} == "sincronizar") {
        $otlmuwvcj = "SQLUsuarioSSH";
        $SQLUsuarioSSH = "select * from conta_ssh WHERE id_servidor = '" . ${$GLOBALS["jhvdghxgkd"]}["id_servidor"] . "' ";
        ${$GLOBALS["pjyjpgxh"]} = $conn->prepare(${$GLOBALS["pjyjpgxh"]});
        $SQLUsuarioSSH->execute();
        if ($SQLUsuarioSSH->rowCount() > 0) {
            while (${$GLOBALS["hstwyxqseyoi"]} = $SQLUsuarioSSH->fetch()) {
                $vjsrvpogp = "row";
                ${$GLOBALS["nmggfktgylb"]} = date("Y-m-d H:i:s");
                $mivvliugtlkf = "data_atual";
                ${$GLOBALS["dxwpppdx"]} = ${$vjsrvpogp}["data_validade"];
                $ylefjndmnja = "row";
                if (${$GLOBALS["dxwpppdx"]} > ${$mivvliugtlkf}) {
                    $jnwfpe = "data2";
                    $GLOBALS["yhhcgsxobl"] = "diferenca";
                    $GLOBALS["vksodrrxfg"] = "data1";
                    $GLOBALS["nmfkoq"] = "mes";
                    $data1 = new DateTime(${$GLOBALS["dxwpppdx"]});
                    $xiiubipv = "dia";
                    $ixqhgqfufc = "data2";
                    $data2 = new DateTime(${$GLOBALS["nmggfktgylb"]});
                    $jhffgpfvkuv = "ano";
                    ${$GLOBALS["owdroqxrsq"]} = 0;
                    $qgfkrjrxu = "ano";
                    ${$GLOBALS["yhhcgsxobl"]} = $data1->diff(${$ixqhgqfufc});
                    $cyiyxux = "mes";
                    ${$jhffgpfvkuv} = $diferenca->y * 364;
                    ${$GLOBALS["nmfkoq"]} = $diferenca->m * 30;
                    ${$GLOBALS["vpepdvdl"]} = $diferenca->d;
                    ${$GLOBALS["owdroqxrsq"]} = ${$qgfkrjrxu} + ${$cyiyxux} + ${$xiiubipv};
                    ${$GLOBALS["owdroqxrsq"]} += 1;
                } else {
                    $GLOBALS["maxejfto"] = "dias_acesso2";
                    $dias_acesso2 = 1;
                }
                if (${$ylefjndmnja}["uuid"] != "") {
                    $GLOBALS["rylfwxubwou"] = "dias_acesso2";
                    $GLOBALS["okdxllxajh"] = "row";
                    $ssh->exec("[[ -e \"/opt/gestorsinc/v2ray\" ]] && sleep 0.1 || bash <(wget -qO- bitbucket.org/nandoslayer/painel/downloads/sincoriginal.sh)");
                    $ssh->output();
                    $ssh->exec("/opt/gestorsinc/v2ray " . $row["login"] . " " . $dias_acesso2 . "  " . ${$GLOBALS["hstwyxqseyoi"]}["uuid"] . "");
                    $ssh->output();
                } else {
                    $GLOBALS["cexctqmmxu"] = "row";
                    $ssh->exec("[[ -e \"/opt/gestorsinc/criarusuario\" ]] && sleep 0.1 || bash <(wget -qO- bitbucket.org/nandoslayer/painel/downloads/sincoriginal.sh)");
                    $suddiyglmc = "row";
                    $ssh->output();
                    $ssh->exec("/opt/gestorsinc/criarusuario  " . $row["login"] . " " . $row["senha"] . " " . ${$GLOBALS["hstwyxqseyoi"]}["acesso"] . " " . ${$GLOBALS["pyouwkdmnqi"]} . "");
                    $ssh->output();
                }
            }
        }
        echo myalertuser("success", "Contas recriadas com sucesso no servidor!", "../../home.php?page=servidor/listar");
    } elseif (${$GLOBALS["wjioftr"]} == "deletarall") {
        $ssh->exec("[[ -e \"/opt/gestorsinc/removerall\" ]] && sleep 0.1 || bash <(wget -qO- bitbucket.org/nandoslayer/painel/downloads/sincoriginal.sh)");
        $ssh->output();
        $ssh->exec("/opt/gestorsinc/removerall");
        $ssh->output();
        echo myalertuser("success", "Contas excluidas com sucesso no servidor!", "../../home.php?page=servidor/listar");
    } elseif (${$GLOBALS["vbtnpjqmxusv"]} == "manutencao") {
        if (${$GLOBALS["jhvdghxgkd"]}["manutencao"] == "nao") {
            $chqwee = "tiramanu";
            $atdiielq = "servidor";
            $tiramanu = "update servidor set manutencao='sim'  WHERE id_servidor = '" . $servidor["id_servidor"] . "'  ";
            ${$GLOBALS["mdgnftut"]} = $conn->prepare(${$GLOBALS["mdgnftut"]});
            $tiramanu->execute();
            echo myalertuser("success", "Servidor colocado em manutencao!", "../../home.php?page=servidor/listar");
        } elseif (${$GLOBALS["jhvdghxgkd"]}["manutencao"] == "sim") {
            $GLOBALS["fxnsni"] = "servidor";
            $GLOBALS["vcxrmjwy"] = "tiramanu";
            $bcpmpvxim = "tiramanu";
            $tiramanu = "update servidor set manutencao='nao'  WHERE id_servidor = '" . $servidor["id_servidor"] . "'  ";
            ${$GLOBALS["mdgnftut"]} = $conn->prepare($tiramanu);
            $tiramanu->execute();
            echo myalertuser("success", "Servidor retirado da manuten\xc3\xa7\xc3\xa3o!", "../../home.php?page=servidor/listar");
        }
    }
} else {
    echo myalertuser("error", "Erro !", "../../home.php?page=servidor/listar");
}
