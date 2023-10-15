<?php

$GLOBALS["dsyqus"] = "notins";
$GLOBALS["xnpmxfna"] = "usuarion";
$GLOBALS["yspckoeckwv"] = "revenda";
$GLOBALS["tynntoxgthvs"] = "SQLrev";
$GLOBALS["iqsrjsjzfbd"] = "msg";
$GLOBALS["jismfozyov"] = "tipo";
$GLOBALS["mwiqtvoa"] = "revendedor";
require_once "../../../pages/system/seguranca.php";
require_once "../../../pages/system/config.php";
require_once "../../../pages/system/funcoes.system.php";
protegePagina("donoadmin");
if (isset($_POST["revendedor"])) {
    $revendedor = sql_injector($_POST["revendedor"]);
    $GLOBALS["kcbuwmpypvi"] = "revenda";
    $yfosqnb = "tipo";
    $tipo = sql_injector($_POST["tipo"]);
    $mepaktvc = "usuarion";
    $msg = sql_injector($_POST["msg"]);
    $SQLrev = "SELECT * FROM usuario where id_usuario='" . $revendedor . "'";
    $SQLrev = $conn->prepare($SQLrev);
    $GLOBALS["njsakf"] = "tipo";
    $SQLrev->execute();
    $GLOBALS["negxlfkj"] = "msg";
    if ($SQLrev->rowCount() <= 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Revendedor N\xc3\xa3o encontrado!\");";
        echo "window.location=\"../../home.php?page=notificacoes/notificar\";";
        echo "</script>";
        exit;
    }
    $bbfdmbh = "info";
    $GLOBALS["lxmuppxci"] = "tipo";
    ${$GLOBALS["kcbuwmpypvi"]} = $SQLrev->fetch();
    $GLOBALS["bxilcqifonv"] = "notins";
    if (${$GLOBALS["yspckoeckwv"]}["tipo"] != "revenda") {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Este usuario n\xc3\xa3o \xc3\xa9 uma revenda!\");";
        echo "window.location=\"../../home.php?page=notificacoes/notificar\";";
        echo "</script>";
        exit;
    }
    $GLOBALS["ifaiokjkggkp"] = "revenda";
    switch (${$GLOBALS["jismfozyov"]}) {
        case 1:
            ${$yfosqnb} = "fatura";
            break;
        case 2:
            ${$GLOBALS["jismfozyov"]} = "outros";
            ${$bbfdmbh} = "Administra\xc3\xa7\xc3\xa3o";
            break;
        default:
            ${$GLOBALS["jismfozyov"]} = "erro";
            break;
    }
    if (${$GLOBALS["lxmuppxci"]} == "erro") {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Erro no tipo escolha outro!\");";
        echo "window.location=\"../../home.php?page=notificacoes/notificar\";";
        echo "</script>";
        exit;
    }
    ${$GLOBALS["xnpmxfna"]} = ${$GLOBALS["ifaiokjkggkp"]}["id_usuario"];
    ${$GLOBALS["iqsrjsjzfbd"]} = ${$GLOBALS["negxlfkj"]};
    ${$GLOBALS["bxilcqifonv"]} = "INSERT INTO notificacoes (usuario_id,data,tipo,linkfatura,mensagem) values ('" . ${$mepaktvc} . "','" . date("Y-m-d H:i:s") . "','" . ${$GLOBALS["njsakf"]} . "','Admin','" . ${$GLOBALS["iqsrjsjzfbd"]} . "')";
    ${$GLOBALS["dsyqus"]} = $conn->prepare(${$GLOBALS["dsyqus"]});
    $notins->execute();
    echo myalertuser("success", "Notificado !", "../../home.php?page=notificacoes/notificar");
}
