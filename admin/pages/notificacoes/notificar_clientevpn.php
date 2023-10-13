<?php

$GLOBALS["xvfbtr"] = "notins";
$GLOBALS["ltxlklcrwrf"] = "usuarion";
$GLOBALS["kdrfrhoxtj"] = "tipo";
$GLOBALS["oflbzahwbd"] = "revenda";
$GLOBALS["dhlywlpsxk"] = "SQLrev";
$GLOBALS["gflylpc"] = "msg";
$GLOBALS["wlembfyfnom"] = "cliente";
require_once "../../../pages/system/seguranca.php";
require_once "../../../pages/system/config.php";
protegePagina("donoadmin");
if (isset($_POST["clientevpn"])) {
    $GLOBALS["gkmgulj"] = "tipo";
    $drqxodo = "revenda";
    $GLOBALS["xkwkhyoxqhm"] = "tipo";
    $GLOBALS["rnrgyltnvcn"] = "notins";
    $cliente = sql_injector($_POST["clientevpn"]);
    $GLOBALS["stfecrd"] = "SQLrev";
    $yclgsvd = "revenda";
    $amjizgje = "tipo";
    $esirrlum = "cliente";
    $ofclwceem = "msg";
    $tipo = sql_injector($_POST["tipo"]);
    $GLOBALS["dsedhxbe"] = "SQLrev";
    $msg = sql_injector($_POST["msg"]);
    $SQLrev = "SELECT * FROM usuario where id_usuario='" . $cliente . "'";
    $SQLrev = $conn->prepare($SQLrev);
    $GLOBALS["jqjrtktv"] = "revenda";
    $SQLrev->execute();
    if ($SQLrev->rowCount() <= 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Revendedor N\xc3\xa3o encontrado!\");";
        echo "window.location=\"../../home.php?page=notificacoes/notificar\";";
        echo "</script>";
        exit;
    }
    ${$GLOBALS["oflbzahwbd"]} = $SQLrev->fetch();
    if (${$yclgsvd}["tipo"] != "vpn") {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Este usuario n\xc3\xa3o \xc3\xa9 uma VPN!\");";
        echo "window.location=\"../../home.php?page=notificacoes/notificar\";";
        echo "</script>";
        exit;
    }
    if (${$GLOBALS["jqjrtktv"]}["id_mestre"] != 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Este usuario \xc3\xa9 de um Revendedor!\");";
        echo "window.location=\"../../home.php?page=notificacoes/notificar\";";
        echo "</script>";
        exit;
    }
    switch (${$GLOBALS["kdrfrhoxtj"]}) {
        case 1:
            ${$GLOBALS["xkwkhyoxqhm"]} = "fatura";
            break;
        case 2:
            ${$amjizgje} = "outros";
            break;
        default:
            ${$GLOBALS["kdrfrhoxtj"]} = "erro";
            break;
    }
    if (${$GLOBALS["kdrfrhoxtj"]} == "erro") {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Erro no tipo escolha outro!\");";
        echo "window.location=\"../../home.php?page=notificacoes/notificar\";";
        echo "</script>";
        exit;
    }
    ${$GLOBALS["ltxlklcrwrf"]} = ${$drqxodo}["id_usuario"];
    ${$GLOBALS["gflylpc"]} = ${$ofclwceem};
    ${$GLOBALS["rnrgyltnvcn"]} = "INSERT INTO notificacoes (usuario_id,data,tipo,linkfatura,mensagem) values ('" . ${$GLOBALS["ltxlklcrwrf"]} . "','" . date("Y-m-d H:i:s") . "','" . ${$GLOBALS["kdrfrhoxtj"]} . "','Admin','" . ${$GLOBALS["gflylpc"]} . "')";
    ${$GLOBALS["xvfbtr"]} = $conn->prepare(${$GLOBALS["xvfbtr"]});
    $notins->execute();
    echo "<script type=\"text/javascript\">";
    echo "alert(\"ClienteVpn Notificado!\");";
    echo "window.location=\"../../home.php?page=notificacoes/notificar\";";
    echo "</script>";
}
