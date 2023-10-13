<?php

$GLOBALS["poigjlyql"] = "revendedor";
$GLOBALS["rblelotx"] = "limiteservidor";
$GLOBALS["vxrtwqdiws"] = "soma";
$GLOBALS["rholkqhua"] = "notins";
$GLOBALS["irfuxsknegf"] = "msg";
$GLOBALS["jypuzgoqp"] = "SQLrevendedo";
$GLOBALS["plwzkixab"] = "serverdor";
$GLOBALS["bopcvirwyb"] = "SQLserverdr";
$GLOBALS["disrbqnqmp"] = "SQLSucesso";
$GLOBALS["ptiwnqvyex"] = "limrem";
$GLOBALS["mtvdawmshl"] = "SQLSubSSH";
$GLOBALS["nehxudld"] = "contas_ssh_criadas";
$GLOBALS["imsearmjiuu"] = "SQLContasSSH";
$GLOBALS["hwkiudofknv"] = "servermestre";
$GLOBALS["qmqibvf"] = "SQLserver";
$GLOBALS["pkkofvqu"] = "SQLSucessodata";
$GLOBALS["gvddpmhprlx"] = "add";
$GLOBALS["yjxfidbswbrc"] = "data_atual";
$GLOBALS["xtzomtnogs"] = "acao";
$GLOBALS["oysvcnckq"] = "server";
$GLOBALS["gggpcocq"] = "servidor";
$GLOBALS["ylywyl"] = "SQLAcesso";
$GLOBALS["yurjwios"] = "user";
$GLOBALS["vooyzi"] = "SQLuser";
$GLOBALS["rjyxrywvxm"] = "mqtd";
$GLOBALS["mkfqecgeox"] = "ids";
$GLOBALS["vwrwfwhk"] = "limite";
$GLOBALS["hvibehg"] = "dias";
require_once "../../pages/system/seguranca.php";
$rnktrvafmhil = "usuario";
require_once "../../pages/system/config.php";
require_once "../../pages/system/funcoes.php";
require_once "../../pages/system/classe.ssh.php";
require_once "../../pages/system/funcoes.system.php";
protegePagina("user");
if ($usuario["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
if (isset($_POST["idservidoracesso"])) {
    $GLOBALS["fysypepuc"] = "SQLContasSSH";
    $GLOBALS["hxqrurbdinpf"] = "notins";
    $xmamvjwbj = "servidor";
    $GLOBALS["vowpgtvi"] = "servermestre";
    $ghcoees = "server";
    $servidor = $_POST["idservidoracesso"];
    ${$GLOBALS["hvibehg"]} = $_POST["dias"];
    $ewyuqlm = "server";
    $mwbtpfs = "SQLuser";
    ${$GLOBALS["vwrwfwhk"]} = $_POST["limite"];
    $GLOBALS["ssjvofnvzc"] = "SQLSucesso";
    $GLOBALS["fhlpwbgzl"] = "add";
    ${$GLOBALS["mkfqecgeox"]} = $_POST["ids"];
    $miqdlxni = "SQLAcesso";
    $GLOBALS["twnpwdy"] = "SQLSucessodata";
    $kwkquipir = "SQLSucessodata";
    $pjqpmjm = "SQLserver";
    $GLOBALS["ktbrbnckdnce"] = "resta";
    $fkygnyflz = "SQLserverdr";
    ${$GLOBALS["rjyxrywvxm"]} = $_POST["qtd"];
    ${$GLOBALS["ktbrbnckdnce"]} = $_POST["rest"];
    $xuukehrjpj = "limite";
    ${$mwbtpfs} = "select * from usuario where id_usuario = '" . ${$GLOBALS["mkfqecgeox"]} . "' and id_mestre='" . $_SESSION["usuarioID"] . "'";
    ${$GLOBALS["vooyzi"]} = $conn->prepare(${$GLOBALS["vooyzi"]});
    $SQLuser->execute();
    if ($SQLuser->rowCount() == 0) {
        echo myalertuser("error", "Usu\xc3\xa1rio n\xc3\xa3o encontrado!", "../../home.php?page=subrevenda/alocados");
        exit;
    }
    ${$GLOBALS["yurjwios"]} = $SQLuser->fetch();
    ${$GLOBALS["ylywyl"]} = "select * from acesso_servidor where id_acesso_servidor = '" . ${$GLOBALS["gggpcocq"]} . "' and id_mestre='" . $_SESSION["usuarioID"] . "'";
    $GLOBALS["vvpbckl"] = "server";
    ${$GLOBALS["ylywyl"]} = $conn->prepare(${$miqdlxni});
    $SQLAcesso->execute();
    $rhoflpay = "dias";
    $bdizxtsmx = "contas_ssh_criadas";
    if ($SQLAcesso->rowCount() == 0) {
        echo myalertuser("error", "Servidor n\xc3\xa3o encontrado!", "../../home.php?page=subrevenda/alocados");
        exit;
    }
    $GLOBALS["bblbbu"] = "SQLSucesso";
    $dfepzpsjtwhd = "dias";
    $jggqehpypha = "SQLContasSSH";
    $fdfiiylme = "SQLrevendedo";
    $GLOBALS["djicxfukph"] = "limite";
    ${$GLOBALS["oysvcnckq"]} = $SQLAcesso->fetch();
    if (!is_numeric(${$xuukehrjpj})) {
        echo myalertuser("error", "Informe um n\xc3\xbamero valido!", "../../home.php?page=subrevenda/alocados");
        exit;
    }
    if (!is_numeric(${$rhoflpay})) {
        echo myalertuser("error", "Informe um n\xc3\xbamero valido!", "../../home.php?page=subrevenda/alocados");
        exit;
    }
    if (${$GLOBALS["hvibehg"]} < 0) {
        if (mb_strpos(${$GLOBALS["hvibehg"]}, "-") !== false) {
            $GLOBALS["rsdjubqdj"] = "dias";
            ${$GLOBALS["hvibehg"]} = substr($dias, 1);
            ${$GLOBALS["xtzomtnogs"]} = "-";
        }
    } else {
        $oeecrtmgkfou = "acao";
        $acao = "+";
    }
    ${$GLOBALS["yjxfidbswbrc"]} = date("Y-m-d H:i:s");
    $txtgcuy = "server";
    ${$GLOBALS["gvddpmhprlx"]} = date("Y-m-d H:i:s", strtotime(${$GLOBALS["xtzomtnogs"]} . " " . ${$dfepzpsjtwhd} . " days", strtotime(${$GLOBALS["yurjwios"]}["validade"])));
    if (${$GLOBALS["fhlpwbgzl"]} < ${$GLOBALS["yjxfidbswbrc"]}) {
        $GLOBALS["bjjeetnbucy"] = "SQLSucessodata";
        $GLOBALS["mwettyj"] = "SQLSucessodata";
        $GLOBALS["mwbltyug"] = "ids";
        $SQLSucessodata = "update usuario set validade='" . ${$GLOBALS["yjxfidbswbrc"]} . "' where id_usuario='" . $ids . "'";
        ${$GLOBALS["pkkofvqu"]} = $conn->prepare($SQLSucessodata);
        $SQLSucessodata->execute();
        echo myalertuser("success", "Alterado com sucesso!", "../../home.php?page=subrevenda/alocados");
        exit;
    }
    ${$GLOBALS["qmqibvf"]} = "select * from acesso_servidor where id_acesso_servidor = '" . ${$ghcoees}["id_servidor_mestre"] . "'";
    ${$GLOBALS["qmqibvf"]} = $conn->prepare(${$pjqpmjm});
    $SQLserver->execute();
    ${$GLOBALS["hwkiudofknv"]} = $SQLserver->fetch();
    if (${$GLOBALS["hwkiudofknv"]}["id_usuario"] != $_SESSION["usuarioID"]) {
        echo myalertuser("error", "Sem acesso!", "../../home.php?page=subrevenda/alocados");
        exit;
    }
    $tubxjqypo = "servermestre";
    $lycnyros = "SQLrevendedo";
    ${$GLOBALS["imsearmjiuu"]} = "SELECT sum(acesso) AS quantidade FROM conta_ssh where id_servidor = '" . $servermestre["id_servidor"] . "' and id_usuario='" . $_SESSION["usuarioID"] . "' ";
    ${$GLOBALS["imsearmjiuu"]} = $conn->prepare(${$jggqehpypha});
    $GLOBALS["ytyhryvpvs"] = "SQLSubSSH";
    $SQLContasSSH->execute();
    ${$GLOBALS["fysypepuc"]} = $SQLContasSSH->fetch();
    ${$GLOBALS["nehxudld"]} += ${$GLOBALS["imsearmjiuu"]}["quantidade"];
    ${$GLOBALS["mtvdawmshl"]} = "select sum(qtd) as todosacessos FROM acesso_servidor where id_mestre = '" . $_SESSION["usuarioID"] . "' and id_servidor='" . ${$GLOBALS["vowpgtvi"]}["id_servidor"] . "' ";
    $exsdnrc = "notins";
    ${$GLOBALS["mtvdawmshl"]} = $conn->prepare(${$GLOBALS["mtvdawmshl"]});
    $SQLSubSSH->execute();
    ${$GLOBALS["ytyhryvpvs"]} = $SQLSubSSH->fetch();
    ${$bdizxtsmx} += ${$GLOBALS["mtvdawmshl"]}["todosacessos"];
    if (mb_strpos(${$GLOBALS["vwrwfwhk"]}, "-") !== false) {
        $ajwlcgmla = "limrem";
        $wrkfsplvi = "SQLSucesso";
        $GLOBALS["eaklghuyiwbg"] = "mqtd";
        $GLOBALS["uwjupfbdptxe"] = "servidor";
        $GLOBALS["slpxcvvnlllx"] = "SQLSucesso";
        $limrem = substr(${$GLOBALS["vwrwfwhk"]}, 1);
        $GLOBALS["ovlfxeo"] = "SQLrevendedo";
        $GLOBALS["rmpbjxmiz"] = "add";
        if ($mqtd < ${$GLOBALS["ptiwnqvyex"]}) {
            $GLOBALS["kplsyngosz"] = "mqtd";
            echo myalertuser("error", "Voc\xc3\xaa n\xc3\xa3o pode tirar isso tudo!\\n\\n Quantidade Permitida: " . $mqtd . "", "../../home.php?page=subrevenda/alocados");
            exit;
        }
        ${$GLOBALS["pkkofvqu"]} = "update usuario set validade='" . ${$GLOBALS["rmpbjxmiz"]} . "' where id_usuario='" . ${$GLOBALS["mkfqecgeox"]} . "'";
        ${$GLOBALS["pkkofvqu"]} = $conn->prepare(${$GLOBALS["pkkofvqu"]});
        $SQLSucessodata->execute();
        ${$GLOBALS["disrbqnqmp"]} = "update acesso_servidor set qtd=qtd-'" . ${$GLOBALS["ptiwnqvyex"]} . "' where id_acesso_servidor='" . ${$GLOBALS["uwjupfbdptxe"]} . "'";
        $GLOBALS["umbgrfb"] = "revendedor";
        ${$wrkfsplvi} = $conn->prepare(${$GLOBALS["slpxcvvnlllx"]});
        $SQLSucesso->execute();
        $rnepsbhsqjl = "notins";
        $hiucrj = "server";
        ${$GLOBALS["bopcvirwyb"]} = "select * from servidor WHERE id_servidor = '" . ${$GLOBALS["oysvcnckq"]}["id_servidor"] . "'";
        ${$GLOBALS["bopcvirwyb"]} = $conn->prepare(${$GLOBALS["bopcvirwyb"]});
        $GLOBALS["pmgpnhx"] = "serverdor";
        $SQLserverdr->execute();
        ${$GLOBALS["plwzkixab"]} = $SQLserverdr->fetch();
        $GLOBALS["lbfwsr"] = "server";
        ${$GLOBALS["ovlfxeo"]} = "select * from usuario where id_usuario = '" . $server["id_usuario"] . "'";
        ${$GLOBALS["jypuzgoqp"]} = $conn->prepare(${$GLOBALS["jypuzgoqp"]});
        $SQLrevendedo->execute();
        ${$GLOBALS["umbgrfb"]} = $SQLrevendedo->fetch();
        ${$GLOBALS["irfuxsknegf"]} = "O Revendedor editou o seu servidor de acesso <small><b>" . ${$GLOBALS["pmgpnhx"]}["nome"] . "</b></small>!";
        ${$GLOBALS["rholkqhua"]} = "INSERT INTO notificacoes (usuario_id,data,tipo,linkfatura,mensagem) values ('" . ${$hiucrj}["id_usuario"] . "','" . date("Y-m-d H:i:s") . "','revenda','Admin','" . ${$GLOBALS["irfuxsknegf"]} . "')";
        ${$rnepsbhsqjl} = $conn->prepare(${$GLOBALS["rholkqhua"]});
        $notins->execute();
        echo myalertuser("success", "Alterado com sucesso!", "../../home.php?page=subrevenda/alocados");
        exit;
    }
    if (${$GLOBALS["djicxfukph"]} != 0) {
        $GLOBALS["qqcilggvp"] = "limiteservidor";
        $GLOBALS["hhijqehx"] = "servermestre";
        $GLOBALS["axrqmbllinti"] = "contas_ssh_criadas";
        $estkqld = "soma";
        $limiteservidor = $servermestre["qtd"];
        ${$GLOBALS["rblelotx"]} -= $contas_ssh_criadas;
        if (${$estkqld} <= 0) {
            ${$GLOBALS["vxrtwqdiws"]} = 0;
        }
        if (${$GLOBALS["rblelotx"]} < ${$GLOBALS["nehxudld"]} + ${$GLOBALS["vwrwfwhk"]}) {
            echo myalertuser("warning", "Voc\xc3\xaa n\xc3\xa3o pode adicionar isso tudo!\\n\\n Quantidade Permitida: " . ${$GLOBALS["vxrtwqdiws"]} . "", "../../home.php?page=subrevenda/alocados");
            exit;
        }
    }
    ${$GLOBALS["twnpwdy"]} = "update usuario set validade='" . ${$GLOBALS["gvddpmhprlx"]} . "' where id_usuario='" . ${$GLOBALS["mkfqecgeox"]} . "'";
    ${$kwkquipir} = $conn->prepare(${$GLOBALS["pkkofvqu"]});
    $SQLSucessodata->execute();
    ${$GLOBALS["bblbbu"]} = "update acesso_servidor set qtd=qtd+'" . ${$GLOBALS["vwrwfwhk"]} . "' where id_acesso_servidor='" . ${$GLOBALS["gggpcocq"]} . "'";
    ${$GLOBALS["ssjvofnvzc"]} = $conn->prepare(${$GLOBALS["disrbqnqmp"]});
    $SQLSucesso->execute();
    ${$GLOBALS["bopcvirwyb"]} = "select * from servidor WHERE id_servidor = '" . ${$ewyuqlm}["id_servidor"] . "'";
    ${$GLOBALS["bopcvirwyb"]} = $conn->prepare(${$fkygnyflz});
    $SQLserverdr->execute();
    ${$GLOBALS["plwzkixab"]} = $SQLserverdr->fetch();
    ${$fdfiiylme} = "select * from usuario where id_usuario = '" . ${$GLOBALS["vvpbckl"]}["id_usuario"] . "'";
    $GLOBALS["rvdxghuhdna"] = "msg";
    ${$lycnyros} = $conn->prepare(${$GLOBALS["jypuzgoqp"]});
    $SQLrevendedo->execute();
    ${$GLOBALS["poigjlyql"]} = $SQLrevendedo->fetch();
    ${$GLOBALS["rvdxghuhdna"]} = "O Revendedor editou o seu servidor de acesso <small><b>" . ${$GLOBALS["plwzkixab"]}["nome"] . "</b></small>!";
    ${$GLOBALS["hxqrurbdinpf"]} = "INSERT INTO notificacoes (usuario_id,data,tipo,linkfatura,mensagem) values ('" . ${$txtgcuy}["id_usuario"] . "','" . date("Y-m-d H:i:s") . "','revenda','Admin','" . ${$GLOBALS["irfuxsknegf"]} . "')";
    ${$GLOBALS["rholkqhua"]} = $conn->prepare(${$exsdnrc});
    $notins->execute();
    echo myalertuser("success", "Alterado com sucesso!", "../../home.php?page=subrevenda/alocados");
    exit;
}
