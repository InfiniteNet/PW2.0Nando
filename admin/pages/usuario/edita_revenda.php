<?php

$GLOBALS["pwjeso"] = "revendedor";
$GLOBALS["jaehkuxqa"] = "notins";
$GLOBALS["lqedosoqmgv"] = "msg";
$GLOBALS["frmxqekqggs"] = "SQLrevendedo";
$GLOBALS["vypcihycvg"] = "SQLserverdr";
$GLOBALS["gjrxkjdkbfp"] = "SQLSucessodata";
$GLOBALS["crurxect"] = "limrem";
$GLOBALS["gufcjycwxc"] = "limite";
$GLOBALS["ippdqqelyv"] = "SQLSucesso";
$GLOBALS["dlobucwwmu"] = "data_atual";
$GLOBALS["nojhjgwkxcq"] = "add";
$GLOBALS["kcmemmaqbj"] = "dias";
$GLOBALS["vnpyxgcllyx"] = "server";
$GLOBALS["szykfoyqiahw"] = "SQLAcesso";
$GLOBALS["xzkpgjbhru"] = "user";
$GLOBALS["bwlbntqufg"] = "ids";
$GLOBALS["jabwzgvhdqc"] = "SQLuser";
$GLOBALS["doqgmgd"] = "servidor";
require_once "../../../pages/system/seguranca.php";
require_once "../../../pages/system/config.php";
require_once "../../../pages/system/funcoes.php";
require_once "../../../pages/system/classe.ssh.php";
require_once "../../../pages/system/funcoes.system.php";
protegePagina("donoadmin");
if (isset($_POST["idservidoracesso"])) {
    $upcqag = "ids";
    $ytrygrgknyq = "user";
    $ecdfcugopcvu = "SQLSucesso";
    $servidor = $_POST["idservidoracesso"];
    $jtxposrgehuy = "dias";
    $dias = $_POST["dias"];
    $GLOBALS["ieujmbtrd"] = "mqtd";
    $GLOBALS["xlbcuwbc"] = "limite";
    $dupbqugof = "resta";
    $limite = $_POST["limite"];
    $ids = $_POST["ids"];
    $GLOBALS["hbstpui"] = "SQLuser";
    $mqtd = $_POST["qtd"];
    $resta = $_POST["rest"];
    $SQLuser = "select * from usuario where id_usuario = '" . $ids . "'";
    $wqgibzizx = "acao";
    $GLOBALS["vvkyseyldv"] = "data_atual";
    $GLOBALS["xnpaooqmwne"] = "serverdor";
    $SQLuser = $conn->prepare($SQLuser);
    $GLOBALS["trcybfuub"] = "limite";
    $SQLuser->execute();
    if ($SQLuser->rowCount() == 0) {
        echo myalertuser("error", "Usu\xc3\xa1rio n\xc3\xa3o encontrado!", "../../home.php?page=servidor/alocados");
        exit;
    }
    $GLOBALS["rcjdntrpj"] = "data_atual";
    $roebpec = "SQLrevendedo";
    $qgaqxe = "SQLrevendedo";
    ${$GLOBALS["xzkpgjbhru"]} = $SQLuser->fetch();
    $GLOBALS["cqxxlqouuh"] = "add";
    ${$GLOBALS["szykfoyqiahw"]} = "select * from acesso_servidor where id_acesso_servidor = '" . ${$GLOBALS["doqgmgd"]} . "'";
    ${$GLOBALS["szykfoyqiahw"]} = $conn->prepare(${$GLOBALS["szykfoyqiahw"]});
    $cepoynh = "dias";
    $SQLAcesso->execute();
    if ($SQLAcesso->rowCount() == 0) {
        echo myalertuser("error", "Servidor n\xc3\xa3o encontrado!", "../../home.php?page=servidor/alocados");
        exit;
    }
    ${$GLOBALS["vnpyxgcllyx"]} = $SQLAcesso->fetch();
    if (!is_numeric(${$GLOBALS["trcybfuub"]})) {
        echo myalertuser("error", "Informe um n\xc3\xbamero valido!", "../../home.php?page=servidor/alocados");
        exit;
    }
    if (!is_numeric(${$cepoynh})) {
        echo myalertuser("error", "Informe um n\xc3\xbamero valido!", "../../home.php?page=servidor/alocados");
        exit;
    }
    $GLOBALS["pzyqyf"] = "SQLserverdr";
    if (${$GLOBALS["kcmemmaqbj"]} < 0) {
        $mdefaik = "dias";
        if (mb_strpos($dias, "-") !== false) {
            $qjkeqfmmdr = "acao";
            ${$GLOBALS["kcmemmaqbj"]} = substr(${$GLOBALS["kcmemmaqbj"]}, 1);
            ${$qjkeqfmmdr} = "-";
        }
    } else {
        $GLOBALS["gvfmcqxthz"] = "acao";
        $acao = "+";
    }
    ${$GLOBALS["vvkyseyldv"]} = date("Y-m-d H:i:s");
    ${$GLOBALS["nojhjgwkxcq"]} = date("Y-m-d H:i:s", strtotime(${$wqgibzizx} . " " . ${$GLOBALS["kcmemmaqbj"]} . " days", strtotime(${$ytrygrgknyq}["validade"])));
    $pcovidq = "msg";
    if (${$GLOBALS["nojhjgwkxcq"]} < ${$GLOBALS["rcjdntrpj"]}) {
        $GLOBALS["nfiqdnlxvv"] = "add";
        $add = date("Y-m-d H:i:s");
    }
    if (${$GLOBALS["cqxxlqouuh"]} < ${$GLOBALS["dlobucwwmu"]}) {
        $GLOBALS["sevvqxoxpku"] = "ids";
        $vytidojrkse = "add";
        $moitybj = "SQLSucesso";
        ${$GLOBALS["ippdqqelyv"]} = "update usuario set validade='" . $add . "' where id_usuario='" . $ids . "'";
        ${$moitybj} = $conn->prepare(${$GLOBALS["ippdqqelyv"]});
        $SQLSucesso->execute();
        echo myalertuser("success", "Alterado com sucesso!", "../../home.php?page=servidor/alocados");
        exit;
    }
    $oqnnexkdjpv = "serverdor";
    if (mb_strpos(${$GLOBALS["gufcjycwxc"]}, "-") !== false) {
        $GLOBALS["fixytgbg"] = "msg";
        $GLOBALS["mbbtov"] = "mqtd";
        $GLOBALS["vqvyppaaoco"] = "SQLserverdr";
        $welnyhy = "serverdor";
        $xmyjzuep = "SQLSucesso";
        $chduwtwtpng = "revendedor";
        $jfyuuohvry = "limrem";
        ${$GLOBALS["crurxect"]} = substr(${$GLOBALS["gufcjycwxc"]}, 1);
        $cyqemhoptmq = "SQLSucessodata";
        $GLOBALS["oxygpcqmnklt"] = "add";
        $reukvpzu = "SQLrevendedo";
        $GLOBALS["qmpaprryq"] = "server";
        $GLOBALS["meqwpgj"] = "SQLserverdr";
        $hnwdgdru = "notins";
        $syrbmuno = "SQLrevendedo";
        $GLOBALS["lnibtqfunxn"] = "SQLSucesso";
        if (${$GLOBALS["mbbtov"]} < ${$jfyuuohvry}) {
            $GLOBALS["wdhzuri"] = "mqtd";
            echo myalertuser("error", "Voc\xc3\xaa n\xc3\xa3o pode tirar isso tudo!\\n\\n Quantidade Permitida: " . $mqtd . "", "../../home.php?page=servidor/alocados");
            exit;
        }
        $GLOBALS["fihobybv"] = "serverdor";
        ${$GLOBALS["gjrxkjdkbfp"]} = "update usuario set validade='" . ${$GLOBALS["oxygpcqmnklt"]} . "' where id_usuario='" . ${$GLOBALS["bwlbntqufg"]} . "'";
        $GLOBALS["mogrpuwo"] = "limrem";
        ${$GLOBALS["gjrxkjdkbfp"]} = $conn->prepare(${$cyqemhoptmq});
        $alvqftlkqq = "servidor";
        $uwvdqeece = "notins";
        $SQLSucessodata->execute();
        ${$GLOBALS["ippdqqelyv"]} = "update acesso_servidor set qtd=qtd-'" . ${$GLOBALS["mogrpuwo"]} . "' where id_acesso_servidor='" . $servidor . "'";
        ${$xmyjzuep} = $conn->prepare(${$GLOBALS["lnibtqfunxn"]});
        $SQLSucesso->execute();
        ${$GLOBALS["vqvyppaaoco"]} = "select * from servidor WHERE id_servidor = '" . ${$GLOBALS["qmpaprryq"]}["id_servidor"] . "'";
        ${$GLOBALS["vypcihycvg"]} = $conn->prepare(${$GLOBALS["meqwpgj"]});
        $SQLserverdr->execute();
        ${$GLOBALS["fihobybv"]} = $SQLserverdr->fetch();
        ${$GLOBALS["frmxqekqggs"]} = "select * from usuario where id_usuario = '" . ${$GLOBALS["vnpyxgcllyx"]}["id_usuario"] . "'";
        ${$reukvpzu} = $conn->prepare(${$syrbmuno});
        $SQLrevendedo->execute();
        ${$chduwtwtpng} = $SQLrevendedo->fetch();
        ${$GLOBALS["fixytgbg"]} = "O Admin Editou o Seu Servidor de Acesso <small><b>" . ${$welnyhy}["nome"] . "</b></small>!";
        ${$uwvdqeece} = "INSERT INTO notificacoes (usuario_id,data,tipo,linkfatura,mensagem) values ('" . ${$GLOBALS["vnpyxgcllyx"]}["id_usuario"] . "','" . date("Y-m-d H:i:s") . "','revenda','Admin','" . ${$GLOBALS["lqedosoqmgv"]} . "')";
        ${$hnwdgdru} = $conn->prepare(${$GLOBALS["jaehkuxqa"]});
        $notins->execute();
        echo myalertuser("success", "Alterado com sucesso!", "../../home.php?page=servidor/alocados");
        exit;
    }
    ${$GLOBALS["gjrxkjdkbfp"]} = "update usuario set validade='" . ${$GLOBALS["nojhjgwkxcq"]} . "' where id_usuario='" . ${$GLOBALS["bwlbntqufg"]} . "'";
    ${$GLOBALS["gjrxkjdkbfp"]} = $conn->prepare(${$GLOBALS["gjrxkjdkbfp"]});
    $inrykbotysw = "SQLserverdr";
    $GLOBALS["cefmplv"] = "servidor";
    $SQLSucessodata->execute();
    $jmooujhrq = "SQLSucesso";
    $SQLSucesso = "update acesso_servidor set qtd=qtd+'" . ${$GLOBALS["gufcjycwxc"]} . "' where id_acesso_servidor='" . $servidor . "'";
    $GLOBALS["jmkeumlomqm"] = "server";
    ${$ecdfcugopcvu} = $conn->prepare(${$GLOBALS["ippdqqelyv"]});
    $SQLSucesso->execute();
    ${$GLOBALS["pzyqyf"]} = "select * from servidor WHERE id_servidor = '" . ${$GLOBALS["vnpyxgcllyx"]}["id_servidor"] . "'";
    ${$GLOBALS["vypcihycvg"]} = $conn->prepare(${$inrykbotysw});
    $SQLserverdr->execute();
    ${$oqnnexkdjpv} = $SQLserverdr->fetch();
    ${$GLOBALS["frmxqekqggs"]} = "select * from usuario where id_usuario = '" . ${$GLOBALS["vnpyxgcllyx"]}["id_usuario"] . "'";
    ${$qgaqxe} = $conn->prepare(${$roebpec});
    $SQLrevendedo->execute();
    ${$GLOBALS["pwjeso"]} = $SQLrevendedo->fetch();
    ${$pcovidq} = "O Admin Editou o Seu Servidor de Acesso <small><b>" . ${$GLOBALS["xnpaooqmwne"]}["nome"] . "</b></small>!";
    ${$GLOBALS["jaehkuxqa"]} = "INSERT INTO notificacoes (usuario_id,data,tipo,linkfatura,mensagem) values ('" . ${$GLOBALS["jmkeumlomqm"]}["id_usuario"] . "','" . date("Y-m-d H:i:s") . "','revenda','Admin','" . ${$GLOBALS["lqedosoqmgv"]} . "')";
    ${$GLOBALS["jaehkuxqa"]} = $conn->prepare(${$GLOBALS["jaehkuxqa"]});
    $notins->execute();
    echo myalertuser("success", "Alterado com sucesso!", "../../home.php?page=servidor/alocados");
    exit;
}
