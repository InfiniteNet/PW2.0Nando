<?php

$GLOBALS["fwjkdtcxky"] = "notins";
$GLOBALS["wrqvxbvesit"] = "row";
$GLOBALS["kssiemlnb"] = "SQLcli";
$GLOBALS["fcdnwfdetu"] = "cliente";
$GLOBALS["qeenpdzisag"] = "clientes";
$GLOBALS["wzbckdikn"] = "eu";
$GLOBALS["xulykeh"] = "SQLeu";
$GLOBALS["gdrxuvolmqrg"] = "msg";
$GLOBALS["jbjwhmlaucl"] = "usuario";
require_once "../../pages/system/seguranca.php";
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
if (isset($_POST["msg"])) {
    $lworjfou = "tipo";
    $GLOBALS["hunxqnkmh"] = "clientes";
    $clientes = sql_injector($_POST["clientes"]);
    $GLOBALS["gugyftyb"] = "SQLeu";
    $GLOBALS["oprdbro"] = "SQLeu";
    $horgdtioib = "cliente";
    $vpbwklhuclpn = "cliente";
    $ftssjmrd = "clientes";
    ${$GLOBALS["gdrxuvolmqrg"]} = sql_injector($_POST["msg"]);
    ${$GLOBALS["gugyftyb"]} = "SELECT * FROM usuario where id_usuario='" . $_SESSION["usuarioID"] . "'";
    ${$GLOBALS["oprdbro"]} = $conn->prepare(${$GLOBALS["xulykeh"]});
    $qpoopqkwzio = "eu";
    $SQLeu->execute();
    $eu = $SQLeu->fetch();
    if (${$GLOBALS["wzbckdikn"]}["tipo"] == "vpn") {
        echo myalertuser("error", "Sem autoriza\xc3\xa7\xc3\xa3o!", "../../home.php");
        exit;
    }
    $GLOBALS["kxrjqjeeqhzw"] = "cliente";
    if (${$GLOBALS["wzbckdikn"]}["subrevenda"] == "sim") {
        ${$GLOBALS["qeenpdzisag"]} = 3;
    }
    switch (${$ftssjmrd}) {
        case 1:
            ${$vpbwklhuclpn} = "todos";
            break;
        case 2:
            ${$GLOBALS["kxrjqjeeqhzw"]} = "revenda";
            break;
        case 3:
            ${$horgdtioib} = "vpn";
            break;
        default:
            ${$GLOBALS["fcdnwfdetu"]} = "erro";
            break;
    }
    ${$lworjfou} = "outros";
    if (${$GLOBALS["fcdnwfdetu"]} == "erro") {
        echo myalertuser("error", "Erro no tipo de cliente!", "../../home.php");
        exit;
    }
    if (${$GLOBALS["fcdnwfdetu"]} == "todos") {
        ${$GLOBALS["kssiemlnb"]} = "SELECT * FROM usuario where id_mestre='" . $_SESSION["usuarioID"] . "'";
    } else {
        $fqmhtkseor = "SQLcli";
        $SQLcli = "SELECT * FROM usuario where tipo='" . ${$GLOBALS["fcdnwfdetu"]} . "' and id_mestre='" . $_SESSION["usuarioID"] . "'";
    }
    ${$GLOBALS["kssiemlnb"]} = $conn->prepare(${$GLOBALS["kssiemlnb"]});
    $SQLcli->execute();
    if ($SQLcli->rowCount() > 0) {
        $GLOBALS["fknpcxc"] = "row";
        while (${$GLOBALS["fknpcxc"]} = $SQLcli->fetch()) {
            $smtqkse = "msg";
            $vnpzptxn = "tipo";
            $GLOBALS["inwkvphqrxkg"] = "notins";
            ${$GLOBALS["gdrxuvolmqrg"]} = $msg;
            ${$GLOBALS["inwkvphqrxkg"]} = "INSERT INTO notificacoes (usuario_id,data,tipo,linkfatura,mensagem) values ('" . ${$GLOBALS["wrqvxbvesit"]}["id_usuario"] . "','" . date("Y-m-d H:i:s") . "','" . ${$vnpzptxn} . "','Admin','" . ${$GLOBALS["gdrxuvolmqrg"]} . "')";
            ${$GLOBALS["fwjkdtcxky"]} = $conn->prepare(${$GLOBALS["fwjkdtcxky"]});
            $notins->execute();
        }
    }
    echo myalertuser("success", "Notificado com sucesso!", "../../home.php");
} else {
    echo "teste";
}
