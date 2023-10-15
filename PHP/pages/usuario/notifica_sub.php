<?php

$GLOBALS["mihnrxusih"] = "msg";
$GLOBALS["ohskiwilru"] = "usuarion";
$GLOBALS["efxxxcohyvq"] = "notins";
$GLOBALS["idznxhacyka"] = "revenda";
$GLOBALS["ynmvbsmny"] = "SQLrev";
$GLOBALS["nykyhdhp"] = "tipo";
$GLOBALS["ghxssllqcnr"] = "revendedor";
require_once "../../pages/system/seguranca.php";
require_once "../../pages/system/config.php";
require_once "../../pages/system/funcoes.php";
require_once "../../pages/system/classe.ssh.php";
$nvlrjlowlkkj = "usuario";
require_once "../../pages/system/funcoes.system.php";
protegePagina("user");
if ($usuario["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
if (isset($_POST["idsubrev"])) {
    $GLOBALS["itdigwowlu"] = "msg";
    $GLOBALS["bmblwko"] = "SQLrev";
    ${$GLOBALS["ghxssllqcnr"]} = sql_injector($_POST["idsubrev"]);
    $myujuys = "msg";
    $GLOBALS["gbbjuopskl"] = "usuarion";
    $GLOBALS["rubakdno"] = "msg";
    $GLOBALS["bffzehmiy"] = "notins";
    ${$GLOBALS["nykyhdhp"]} = sql_injector($_POST["tipo"]);
    ${$GLOBALS["itdigwowlu"]} = sql_injector($_POST["msg"]);
    $plthfhbeh = "tipo";
    ${$GLOBALS["ynmvbsmny"]} = "SELECT * FROM usuario where id_usuario='" . ${$GLOBALS["ghxssllqcnr"]} . "' and subrevenda='sim' and id_mestre='" . $_SESSION["usuarioID"] . "'";
    $pwiojda = "tipo";
    ${$GLOBALS["bmblwko"]} = $conn->prepare(${$GLOBALS["ynmvbsmny"]});
    $SQLrev->execute();
    if ($SQLrev->rowCount() <= 0) {
        echo myalertuser("error", "Nao encontrado!", "../../home.php?page=subrevenda/revendedores");
        exit;
    }
    $GLOBALS["iivcdyukwr"] = "revenda";
    $revenda = $SQLrev->fetch();
    $fcyeijwcykhg = "tipo";
    if (${$GLOBALS["idznxhacyka"]}["tipo"] != "revenda") {
        echo myalertuser("error", "Usu\xc3\xa1rio invalido!", "../../home.php?page=subrevenda/revendedores");
        exit;
    }
    switch (${$fcyeijwcykhg}) {
        case 1:
            ${$pwiojda} = "subrevenda";
            break;
        case 2:
            ${$GLOBALS["nykyhdhp"]} = "outros";
            break;
        default:
            ${$plthfhbeh} = "erro";
            break;
    }
    if (${$GLOBALS["nykyhdhp"]} == "erro") {
        echo myalertuser("error", "Selecione o tipo!", "../../home.php?page=subrevenda/revendedores");
        exit;
    }
    ${$GLOBALS["gbbjuopskl"]} = ${$GLOBALS["idznxhacyka"]}["id_usuario"];
    ${$GLOBALS["rubakdno"]} = ${$myujuys};
    ${$GLOBALS["efxxxcohyvq"]} = "INSERT INTO notificacoes (usuario_id,data,tipo,mensagem) values ('" . ${$GLOBALS["ohskiwilru"]} . "','" . date("Y-m-d H:i:s") . "','" . ${$GLOBALS["nykyhdhp"]} . "','" . ${$GLOBALS["mihnrxusih"]} . "')";
    ${$GLOBALS["efxxxcohyvq"]} = $conn->prepare(${$GLOBALS["bffzehmiy"]});
    $notins->execute();
    echo myalertuser("success", "Notificado com sucesso !", "../../home.php?page=subrevenda/revendedores");
}
