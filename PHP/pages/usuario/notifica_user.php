<?php

$GLOBALS["iqmphkk"] = "notins";
$GLOBALS["kkamlhzqxo"] = "usuarion";
$GLOBALS["iyfcedbebr"] = "msg";
$GLOBALS["uqdfasbhizc"] = "tipo";
$GLOBALS["pwqpfmsalb"] = "revendedor";
require_once "../../pages/system/seguranca.php";
require_once "../../pages/system/config.php";
require_once "../../pages/system/funcoes.php";
require_once "../../pages/system/classe.ssh.php";
protegePagina("user");
$incnbwfhdw = "usuario";
if ($usuario["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
if (isset($_POST["iduser"])) {
    $GLOBALS["qtqojpglu"] = "msg";
    $GLOBALS["tgmtlebqp"] = "msg";
    $GLOBALS["fnungwjwad"] = "usuarion";
    $GLOBALS["orrrjqlzkkwr"] = "notins";
    $utqzlmqeiq = "SQLrev";
    $hrdbjcq = "SQLrev";
    $koaikq = "tipo";
    $GLOBALS["ioegnmixe"] = "SQLrev";
    $GLOBALS["thvidjdui"] = "msg";
    ${$GLOBALS["pwqpfmsalb"]} = sql_injector($_POST["iduser"]);
    $lzbrgbqdnlwp = "revenda";
    ${$GLOBALS["uqdfasbhizc"]} = sql_injector($_POST["tipo"]);
    ${$GLOBALS["iyfcedbebr"]} = sql_injector($_POST["msg"]);
    ${$utqzlmqeiq} = "SELECT * FROM usuario where id_usuario='" . ${$GLOBALS["pwqpfmsalb"]} . "' and subrevenda='nao' and id_mestre='" . $_SESSION["usuarioID"] . "'";
    ${$hrdbjcq} = $conn->prepare(${$GLOBALS["ioegnmixe"]});
    $SQLrev->execute();
    $sjznqhyn = "tipo";
    if ($SQLrev->rowCount() <= 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Usuario VPN N\xc3\xa3o encontrado!\");";
        echo "window.location=\"../../home.php?page=usuario/listar\";";
        echo "</script>";
        exit;
    }
    ${$lzbrgbqdnlwp} = $SQLrev->fetch();
    $monsim = "revenda";
    switch (${$sjznqhyn}) {
        case 1:
            ${$GLOBALS["uqdfasbhizc"]} = "usuario";
            break;
        case 2:
            ${$koaikq} = "outros";
            break;
        default:
            ${$GLOBALS["uqdfasbhizc"]} = "erro";
            break;
    }
    if (${$GLOBALS["uqdfasbhizc"]} == "erro") {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Erro no tipo escolha outro!\");";
        echo "window.location=\"../../home.php?page=usuario/listar\";";
        echo "</script>";
        exit;
    }
    ${$GLOBALS["fnungwjwad"]} = ${$monsim}["id_usuario"];
    ${$GLOBALS["thvidjdui"]} = ${$GLOBALS["qtqojpglu"]};
    ${$GLOBALS["orrrjqlzkkwr"]} = "INSERT INTO notificacoes (usuario_id,data,tipo,mensagem) values ('" . ${$GLOBALS["kkamlhzqxo"]} . "','" . date("Y-m-d H:i:s") . "','" . ${$GLOBALS["uqdfasbhizc"]} . "','" . ${$GLOBALS["tgmtlebqp"]} . "')";
    ${$GLOBALS["iqmphkk"]} = $conn->prepare(${$GLOBALS["iqmphkk"]});
    $notins->execute();
    echo "<script type=\"text/javascript\">";
    echo "alert(\"Usu\xc3\xa1rio Reportado com Sucesso!\");";
    echo "window.location=\"../../home.php?page=usuario/listar\";";
    echo "</script>";
}
