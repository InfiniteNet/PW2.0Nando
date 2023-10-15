<?php

$GLOBALS["vvdotvt"] = "msg";
$GLOBALS["taskkh"] = "tipo";
$GLOBALS["owoljcp"] = "notins";
$GLOBALS["jhnyqvq"] = "row";
$GLOBALS["mmlpzgeqtp"] = "SQLcli";
$GLOBALS["zyrprfxk"] = "cliente";
$GLOBALS["skgxeqchfpt"] = "clientes";
require_once "../../../pages/system/seguranca.php";
require_once "../../../pages/system/config.php";
require_once "../../../pages/system/funcoes.system.php";
protegePagina("donoadmin");
if (isset($_POST["clientes"])) {
    $GLOBALS["qftxkjaogr"] = "cliente";
    $pirttuycn = "cliente";
    $xorlpsrvmlen = "cliente";
    $GLOBALS["zimivfyxrcr"] = "clientes";
    $GLOBALS["mmrspor"] = "msg";
    $clientes = sql_injector($_POST["clientes"]);
    $msg = sql_injector($_POST["msg"]);
    $GLOBALS["monoqxsjwm"] = "tipo";
    echo $clientes;
    $qylxcdy = "SQLcli";
    switch ($clientes) {
        case 1:
            ${$GLOBALS["zyrprfxk"]} = "todos";
            break;
        case 2:
            ${$GLOBALS["zyrprfxk"]} = "revenda";
            break;
        case 3:
            ${$GLOBALS["zyrprfxk"]} = "vpn";
            break;
        default:
            ${$GLOBALS["qftxkjaogr"]} = "erro";
            break;
    }
    ${$GLOBALS["monoqxsjwm"]} = "outros";
    $GLOBALS["wsnmkl"] = "SQLcli";
    if (${$xorlpsrvmlen} == "erro") {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Erro no tipo de cliente!\");";
        echo "window.location=\"../../home.php\";";
        echo "</script>";
        exit;
    }
    if (${$pirttuycn} == "todos") {
        $keoomm = "SQLcli";
        $SQLcli = "SELECT * FROM usuario";
    } else {
        $GLOBALS["lidhjlkojghf"] = "cliente";
        ${$GLOBALS["mmlpzgeqtp"]} = "SELECT * FROM usuario where tipo='" . $cliente . "'";
    }
    ${$qylxcdy} = $conn->prepare(${$GLOBALS["wsnmkl"]});
    $SQLcli->execute();
    if ($SQLcli->rowCount() > 0) {
        while (${$GLOBALS["jhnyqvq"]} = $SQLcli->fetch()) {
            $GLOBALS["tbftah"] = "msg";
            $cqxktdh = "msg";
            $wdaicgq = "notins";
            $xtziwrefflp = "notins";
            $msg = $msg;
            ${$GLOBALS["owoljcp"]} = "INSERT INTO notificacoes (usuario_id,data,tipo,linkfatura,mensagem) values ('" . ${$GLOBALS["jhnyqvq"]}["id_usuario"] . "','" . date("Y-m-d H:i:s") . "','" . ${$GLOBALS["taskkh"]} . "','Admin','" . ${$GLOBALS["vvdotvt"]} . "')";
            ${$wdaicgq} = $conn->prepare(${$xtziwrefflp});
            $notins->execute();
        }
    }
    echo myalertuser("success", "Notificado com sucesso !", "../../home.php");
}
