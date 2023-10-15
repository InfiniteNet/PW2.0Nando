<?php

$GLOBALS["zoqesfhdmxu"] = "SQLExcluiAcesso";
$GLOBALS["ctfcrrjkky"] = "notins";
$GLOBALS["juvkqjgmnmg"] = "usuario";
$GLOBALS["nwkpairy"] = "server";
$GLOBALS["vrluiwyv"] = "acesso3";
$GLOBALS["xtqcmk"] = "acesso";
$GLOBALS["hwomgok"] = "SQLAcesso";
require_once "../../pages/system/seguranca.php";
require_once "../../pages/system/config.php";
require_once "../../pages/system/funcoes.php";
$GLOBALS["ylvioe"] = "usuario";
require_once "../../pages/system/classe.ssh.php";
require_once "../../pages/system/funcoes.system.php";
protegePagina("user");
if ($usuario["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
if (isset($_POST["servidor"])) {
    $GLOBALS["qhbesdu"] = "SQLAcesso";
    $GLOBALS["tybptraygbpi"] = "servidor";
    $fsowkwrrzgds = "subrevendedor";
    $hiobnxtvoy = "servidor";
    $servidor = sql_injector($_POST["servidor"]);
    $subrevendedor = sql_injector($_POST["cliente"]);
    ${$GLOBALS["hwomgok"]} = "select * from acesso_servidor where id_acesso_servidor = '" . $servidor . "' and id_mestre='" . $_SESSION["usuarioID"] . "'";
    ${$GLOBALS["hwomgok"]} = $conn->prepare(${$GLOBALS["qhbesdu"]});
    $SQLAcesso->execute();
    if ($SQLAcesso->rowCount() == 0) {
        echo myalertuser("success", "Servidor n\xc3\xa3o encontrado!", "../../home.php?page=subrevenda/alocados");
        exit;
    } else {
        $GLOBALS["jibbkeo"] = "SQLreset";
        $sehgllabwjh = "server";
        $GLOBALS["zwycfpnuubkd"] = "acesso";
        $acesso = $SQLAcesso->fetch();
        $GLOBALS["clhqpywxn"] = "SQLserver";
        $wkfiomgvp = "SQLserver";
        $GLOBALS["vutqsvzdqlb"] = "SQLreset";
        $xibjpdns = "SQLreset";
        $SQLreset = "select * from usuario where id_mestre='" . ${$GLOBALS["xtqcmk"]}["id_usuario"] . "'";
        $GLOBALS["fdnweyaerby"] = "acesso";
        $pupwfiys = "msg";
        $SQLreset = $conn->prepare($SQLreset);
        $SQLreset->execute();
        if ($SQLreset->rowCount() > 0) {
            $GLOBALS["quuuhcoommq"] = "acesso3";
            while (${$GLOBALS["quuuhcoommq"]} = $SQLreset->fetch()) {
                $GLOBALS["lwfhjvucos"] = "SQLUpdateSSH3";
                $GLOBALS["cdvybrca"] = "SQLUpdateSSH3";
                $SQLUpdateSSH3 = "update conta_ssh set status='3', apagar='3', id_usuario='0' where id_servidor='" . ${$GLOBALS["xtqcmk"]}["id_servidor"] . "' and id_usuario='" . ${$GLOBALS["vrluiwyv"]}["id_usuario"] . "'";
                $GLOBALS["ynstfxangbe"] = "SQLUpdateSSH3";
                $SQLUpdateSSH3 = $conn->prepare($SQLUpdateSSH3);
                $SQLUpdateSSH3->execute();
            }
        }
        $GLOBALS["prwgveg"] = "acesso";
        $zzdvbw = "SQLserver";
        $SQLserver = "select * from servidor WHERE id_servidor = '" . ${$GLOBALS["fdnweyaerby"]}["id_servidor"] . "'";
        ${$wkfiomgvp} = $conn->prepare(${$GLOBALS["clhqpywxn"]});
        $evpllcq = "SQLExcluiAcesso";
        $jhbqvvc = "msg";
        $SQLserver->execute();
        ${$GLOBALS["nwkpairy"]} = $SQLserver->fetch();
        ${$jhbqvvc} = "O Revendedor <b>" . ${$GLOBALS["juvkqjgmnmg"]}["nome"] . "</b> deletou seu(s) acesso(s) ao servidor <small><b>" . ${$sehgllabwjh}["nome"] . "</b></small>!";
        $vrkdhbb = "notins";
        ${$GLOBALS["ctfcrrjkky"]} = "INSERT INTO notificacoes (usuario_id,data,tipo,linkfatura,mensagem) values ('" . ${$GLOBALS["prwgveg"]}["id_usuario"] . "','" . date("Y-m-d H:i:s") . "','revenda','Admin','" . ${$pupwfiys} . "')";
        ${$GLOBALS["ctfcrrjkky"]} = $conn->prepare(${$vrkdhbb});
        $notins->execute();
        ${$evpllcq} = "delete from acesso_servidor WHERE id_acesso_servidor = '" . ${$GLOBALS["xtqcmk"]}["id_acesso_servidor"] . "' and id_usuario='" . ${$GLOBALS["xtqcmk"]}["id_usuario"] . "'";
        ${$GLOBALS["zoqesfhdmxu"]} = $conn->prepare(${$GLOBALS["zoqesfhdmxu"]});
        $pffvmrby = "acesso";
        $SQLExcluiAcesso->execute();
        echo myalertuser("success", "Deletado com sucesso!", "../../home.php?page=usuario/perfil&id_usuario=" . $acesso["id_usuario"] . "");
    }
}
