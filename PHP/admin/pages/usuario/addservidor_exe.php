<?php

$GLOBALS["xzrnptlfm"] = "notins";
$GLOBALS["ltxxuxh"] = "SQLSucesso";
$GLOBALS["neuwtokufs"] = "buscaserver3";
$GLOBALS["tiqfkrdpk"] = "servidor";
$GLOBALS["pyxtpvbh"] = "served";
$GLOBALS["ogtcwn"] = "buscaserver2";
$GLOBALS["kjfgqzuvmco"] = "ele";
$GLOBALS["khjlkisi"] = "buscaeu";
$GLOBALS["dktajih"] = "revendedor";
$GLOBALS["tymmpeo"] = "limite";
require_once "../../../pages/system/seguranca.php";
require_once "../../../pages/system/config.php";
require_once "../../../pages/system/classe.ssh.php";
require_once "../../../pages/system/funcoes.system.php";
protegePagina("donoadmin");
if (isset($_POST["servidor"])) {
    $yvbeqwsa = "SQLSucesso";
    $dbkixrhhp = "servidor";
    $GLOBALS["xdibtmgmee"] = "buscaserver3";
    $GLOBALS["ycsffwqe"] = "msg";
    $GLOBALS["dgowtmetwhc"] = "buscaserver2";
    $servidor = sql_injector($_POST["servidor"]);
    $ggoqhyxtom = "served";
    $GLOBALS["unhhsj"] = "revendedor";
    $xpvtihfdg = "buscaserver2";
    $lwqlsguzggrg = "msg";
    $GLOBALS["mnxliaqlxh"] = "servidor";
    $revendedor = sql_injector($_POST["revendedor"]);
    $limite = sql_injector($_POST["limite"]);
    $shssxtxb = "ele";
    $mihjnd = "buscaeu";
    if (!is_numeric($limite)) {
        echo myalertuser("warning", "Digite um n\xc3\xbamero!", "../../home.php?page=usuario/addservidor");
        exit;
    }
    $GLOBALS["yhkziosjf"] = "buscaeu";
    ${$mihjnd} = "SELECT * FROM usuario where id_usuario= '" . ${$GLOBALS["dktajih"]} . "'";
    $GLOBALS["jsgwmfqcohew"] = "notins";
    $GLOBALS["ibniwtxdsbu"] = "revendedor";
    $qeipkoczw = "buscaserver3";
    ${$GLOBALS["khjlkisi"]} = $conn->prepare(${$GLOBALS["yhkziosjf"]});
    $buscaeu->execute();
    if ($buscaeu->rowCount() == 0) {
        echo myalertuser("error", "Revenda n\xc3\xa3o encontrada !", "../../home.php?page=usuario/addservidor");
        exit;
    }
    ${$shssxtxb} = $buscaeu->fetch();
    if (${$GLOBALS["kjfgqzuvmco"]}["subrevenda"] == "sim") {
        echo myalertuser("error", "Sem permiss\xc3\xa3o de edi\xc3\xa7\xc3\xa3o em subrevenda!", "../../home.php?page=usuario/addservidor");
        exit;
    }
    ${$GLOBALS["dgowtmetwhc"]} = "SELECT * FROM servidor where id_servidor='" . ${$GLOBALS["mnxliaqlxh"]} . "'";
    ${$xpvtihfdg} = $conn->prepare(${$GLOBALS["ogtcwn"]});
    $buscaserver2->execute();
    if ($buscaserver2->rowCount() == 0) {
        echo myalertuser("error", "Servidor n\xc3\xa3o encontrado!", "../../home.php?page=usuario/addservidor");
        exit;
    }
    ${$GLOBALS["pyxtpvbh"]} = $buscaserver2->fetch();
    ${$GLOBALS["xdibtmgmee"]} = "SELECT * FROM acesso_servidor where id_servidor='" . ${$GLOBALS["tiqfkrdpk"]} . "' and id_usuario='" . ${$GLOBALS["dktajih"]} . "'";
    ${$qeipkoczw} = $conn->prepare(${$GLOBALS["neuwtokufs"]});
    $buscaserver3->execute();
    if ($buscaserver3->rowCount() > 0) {
        echo myalertuser("warning", "Ele j\xc3\xa1 possui esse servidor, Voc\xc3\xaa pode adicionar um outro servidor para Ele!", "../../home.php?page=usuario/addservidor");
        exit;
    }
    $GLOBALS["ivtxexo"] = "notins";
    ${$GLOBALS["ltxxuxh"]} = "insert into acesso_servidor (id_servidor,id_usuario,qtd) values ('" . ${$GLOBALS["tiqfkrdpk"]} . "','" . ${$GLOBALS["dktajih"]} . "','" . ${$GLOBALS["tymmpeo"]} . "')";
    $GLOBALS["xtpgruoj"] = "SQLSucesso";
    ${$yvbeqwsa} = $conn->prepare($SQLSucesso);
    $SQLSucesso->execute();
    ${$lwqlsguzggrg} = "O Admin Adicionou um Servidor a sua conta <b>" . ${$ggoqhyxtom}["nome"] . "</b> Limite: " . ${$GLOBALS["tymmpeo"]} . "";
    ${$GLOBALS["xzrnptlfm"]} = "INSERT INTO notificacoes (usuario_id,data,tipo,linkfatura,mensagem) values ('" . ${$GLOBALS["ibniwtxdsbu"]} . "','" . date("Y-m-d H:i:s") . "','revenda','Admin','" . ${$GLOBALS["ycsffwqe"]} . "')";
    ${$GLOBALS["ivtxexo"]} = $conn->prepare(${$GLOBALS["jsgwmfqcohew"]});
    $notins->execute();
    echo myalertuser("success", "Adicionado com sucesso !", "../../home.php?page=usuario/addservidor");
}
