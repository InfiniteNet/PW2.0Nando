<?php

$GLOBALS["kbzyqbfm"] = "notins";
$GLOBALS["wccvhiysoux"] = "usuarion";
$GLOBALS["zxbimlmrhik"] = "row";
$GLOBALS["ksmodegcwln"] = "SQLcli";
$GLOBALS["chlqhmak"] = "tipo";
$GLOBALS["fbldykkf"] = "cliente";
$GLOBALS["ildnqcqgpmd"] = "SQLrev";
$GLOBALS["tkwojge"] = "msg";
require_once "../../../pages/system/seguranca.php";
require_once "../../../pages/system/config.php";
require_once "../../../pages/system/funcoes.system.php";
protegePagina("donoadmin");
if (isset($_POST["clientes"])) {
    $GLOBALS["bqwrkvhlgv"] = "SQLrev";
    $pkgcgqtlrp = "cliente";
    $hjhsocixhlx = "clientes";
    $qiotkdlvo = "tipo";
    $clientes = sql_injector($_POST["clientes"]);
    $GLOBALS["xyxsnxl"] = "cliente";
    $tipo = sql_injector($_POST["tipo"]);
    $usxfab = "cliente";
    $GLOBALS["mwxwvkd"] = "tipo";
    $nwhpyvrymb = "clientes";
    $GLOBALS["jrsmoxun"] = "SQLcli";
    $msg = sql_injector($_POST["msg"]);
    $GLOBALS["rfazlbrysdqi"] = "tipo";
    $SQLrev = "SELECT * FROM usuario where id_usuario='" . $cliente . "'";
    $SQLrev = $conn->prepare($SQLrev);
    $jsfaxovrjj = "cliente";
    $SQLrev->execute();
    switch ($clientes) {
        case 1:
            ${$GLOBALS["fbldykkf"]} = "todos";
            break;
        case 2:
            ${$pkgcgqtlrp} = "revenda";
            break;
        case 3:
            ${$usxfab} = "vpn";
            break;
        default:
            ${$GLOBALS["fbldykkf"]} = "erro";
            break;
    }
    $GLOBALS["kcbjujhjuzv"] = "cliente";
    switch (${$GLOBALS["chlqhmak"]}) {
        case 1:
            ${$GLOBALS["rfazlbrysdqi"]} = "fatura";
            break;
        case 2:
            ${$GLOBALS["mwxwvkd"]} = "outros";
            break;
        default:
            ${$GLOBALS["chlqhmak"]} = "erro";
            break;
    }
    if (${$GLOBALS["chlqhmak"]} == "erro") {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Erro no tipo escolha outro!\");";
        echo "window.location=\"../../home.php?page=notificacoes/notificar\";";
        echo "</script>";
        exit;
    }
    if (${$GLOBALS["kcbjujhjuzv"]} == "erro") {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Erro no tipo de cliente!\");";
        echo "window.location=\"../../home.php?page=notificacoes/notificar\";";
        echo "</script>";
        exit;
    }
    if (${$jsfaxovrjj} == "todos") {
        ${$GLOBALS["ksmodegcwln"]} = "SELECT * FROM usuario";
    } else {
        $yxdpwu = "SQLcli";
        $SQLcli = "SELECT * FROM usuario where tipo='" . ${$GLOBALS["fbldykkf"]} . "'";
    }
    ${$GLOBALS["ksmodegcwln"]} = $conn->prepare(${$GLOBALS["jrsmoxun"]});
    $SQLcli->execute();
    if ($SQLcli->rowCount() > 0) {
        while (${$GLOBALS["zxbimlmrhik"]} = $SQLcli->fetch()) {
            $GLOBALS["nxcqth"] = "msg";
            $bpyjqmcpl = "msg";
            $lloljx = "notins";
            ${$GLOBALS["wccvhiysoux"]} = ${$GLOBALS["zxbimlmrhik"]}["id_usuario"];
            ${$bpyjqmcpl} = ${$GLOBALS["nxcqth"]};
            ${$GLOBALS["kbzyqbfm"]} = "INSERT INTO notificacoes (usuario_id,data,tipo,linkfatura,mensagem) values ('" . ${$GLOBALS["wccvhiysoux"]} . "','" . date("Y-m-d H:i:s") . "','" . ${$GLOBALS["chlqhmak"]} . "','Admin','" . ${$GLOBALS["tkwojge"]} . "')";
            ${$lloljx} = $conn->prepare(${$GLOBALS["kbzyqbfm"]});
            $notins->execute();
        }
    }
    echo myalertuser("success", "Notificado !", "../../home.php?page=notificacoes/notificar");
}
