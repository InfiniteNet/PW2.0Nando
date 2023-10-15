<?php

$GLOBALS["twwekdprluz"] = "notins";
$GLOBALS["qpewfmctvgae"] = "msg";
$GLOBALS["kbnnav"] = "updatechamado";
$GLOBALS["wgigpiuhx"] = "verificausuario";
$GLOBALS["rlgqtxuq"] = "diretorio";
$GLOBALS["xkxjurnny"] = "chama";
$GLOBALS["iohrxp"] = "buscachamado";
$GLOBALS["nmfivftjhxa"] = "chamado";
require_once "../../../pages/system/seguranca.php";
require_once "../../../pages/system/config.php";
require_once "../../../pages/system/funcoes.system.php";
protegePagina("donoadmin");
if (isset($_POST["chamado"])) {
    $amqthmpqq = "chamado";
    $GLOBALS["jmopdstu"] = "msg";
    $chamado = $_POST["chamado"];
    $GLOBALS["rbqgtmwupmw"] = "verificausuario";
    $msg = sql_injector($_POST["msg"]);
    $GLOBALS["lcagmcs"] = "verificausuario";
    $GLOBALS["lbewtefcq"] = "chama";
    $hlbrpycgnt = "msg";
    $GLOBALS["cpnvvpnvpjjf"] = "buscachamado";
    $mckdbhvlz = "diretorio";
    $GLOBALS["qrcphysob"] = "buscachamado";
    $diretorio = $_POST["diretorio"];
    $buscachamado = "SELECT * FROM chamados where id='" . $chamado . "'";
    $jpsrmq = "updatechamado";
    $buscachamado = $conn->prepare($buscachamado);
    $buscachamado->execute();
    if ($buscachamado->rowCount() == 0) {
        $GLOBALS["xumtnkexoc"] = "diretorio";
        echo myalertuser("error", "Nao encontrado !", $diretorio);
        exit;
    }
    ${$GLOBALS["xkxjurnny"]} = $buscachamado->fetch();
    if (${$GLOBALS["xkxjurnny"]}["status"] == "encerrado") {
        echo myalertuser("warning", "Ja resolvido !", ${$GLOBALS["rlgqtxuq"]});
        exit;
    }
    ${$GLOBALS["lcagmcs"]} = "SELECT * FROM usuario where id_usuario= '" . ${$GLOBALS["xkxjurnny"]}["usuario_id"] . "'";
    ${$GLOBALS["rbqgtmwupmw"]} = $conn->prepare(${$GLOBALS["wgigpiuhx"]});
    $verificausuario->execute();
    $GLOBALS["kyjelqxj"] = "chama";
    if ($buscachamado->rowCount() == 0) {
        $GLOBALS["kfzoovfet"] = "diretorio";
        echo myalertuser("error", "Nao encontrado !", $diretorio);
        exit;
    }
    ${$jpsrmq} = "UPDATE chamados set status='resposta', resposta='" . ${$hlbrpycgnt} . "', data='" . date("Y-m-d H:i:s") . "' where id= '" . ${$GLOBALS["kyjelqxj"]}["id"] . "'";
    ${$GLOBALS["kbnnav"]} = $conn->prepare(${$GLOBALS["kbnnav"]});
    $updatechamado->execute();
    ${$GLOBALS["qpewfmctvgae"]} = "O Seu Chamado de <b><small>N\xc2\xb0" . ${$GLOBALS["xkxjurnny"]}["id"] . "</small></b> Foi Respondido pelo Administrador";
    ${$GLOBALS["twwekdprluz"]} = "INSERT INTO notificacoes (usuario_id,data,tipo,linkfatura,mensagem) values ('" . ${$GLOBALS["lbewtefcq"]}["usuario_id"] . "','" . date("Y-m-d H:i:s") . "','chamados','Admin','" . ${$GLOBALS["qpewfmctvgae"]} . "')";
    ${$GLOBALS["twwekdprluz"]} = $conn->prepare(${$GLOBALS["twwekdprluz"]});
    $notins->execute();
    echo myalertuser("success", "Respondido com sucesso !", ${$GLOBALS["rlgqtxuq"]});
}
