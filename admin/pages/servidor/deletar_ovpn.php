<?php

$GLOBALS["weonxjpknjk"] = "arquivo";
$GLOBALS["gibgcen"] = "SQLSubSSH";
$GLOBALS["nmppgtvrqohy"] = "SQLservidor";
$GLOBALS["lyogfknl"] = "id";
require_once "../../../pages/system/seguranca.php";
require_once "../../../pages/system/config.php";
require_once "../../../pages/system/classe.ssh.php";
require_once "../../../pages/system/funcoes.system.php";
protegePagina("donoadmin");
if (isset($_GET["id_servidor"])) {
    $gdehecfyqiv = "SQLservidor";
    $GLOBALS["xggxkxkjpiq"] = "SQLservidor";
    $id = sql_injector($_GET["id_servidor"]);
    $GLOBALS["xgbetonxof"] = "SQLSubSSH";
    $SQLservidor = "SELECT * FROM servidor where id_servidor='" . $id . "'";
    $SQLservidor = $conn->prepare($SQLservidor);
    $SQLservidor->execute();
    if ($SQLservidor->rowCount() == 0) {
        echo myalertuser("error", "Servidor n\xc3\xa3o foi encontrado", "../../home.php?page=servidor/listar");
    }
    ${$GLOBALS["xgbetonxof"]} = "SELECT * FROM ovpn where servidor_id='" . ${$GLOBALS["lyogfknl"]} . "'";
    ${$GLOBALS["gibgcen"]} = $conn->prepare(${$GLOBALS["gibgcen"]});
    $SQLSubSSH->execute();
    if ($SQLSubSSH->rowCount() > 0) {
        ${$GLOBALS["weonxjpknjk"]} = $SQLSubSSH->fetch();
        $ywnqhrgjypdr = "arquivo";
        ${$GLOBALS["weonxjpknjk"]} = "../servidor/ovpn/" . $arquivo["arquivo"] . "";
        if (!unlink(${$GLOBALS["weonxjpknjk"]})) {
            $nivpdrikqys = "id";
            $GLOBALS["pcmdkxrka"] = "deletando";
            $srilumxrbng = "id";
            $GLOBALS["wxrpwzpnvpp"] = "deletando";
            echo myalertuser("error", "Arquivo APK n\xc3\xa3o foi encontrado", "../../home.php?page=servidor/servidor&id_servidor=" . $id . " ");
            $deletando = "DELETE FROM ovpn where servidor_id='" . $id . "'";
            $yedqyudjjwy = "deletando";
            $deletando = $conn->prepare($deletando);
            $deletando->execute();
        } else {
            $GLOBALS["opjwipmy"] = "deletando";
            echo myalertuser("success", "O Arquivo APK foi Removido", "../../home.php?page=servidor/servidor&id_servidor=" . ${$GLOBALS["lyogfknl"]} . " ");
            $GLOBALS["vgmbwxqzt"] = "deletando";
            $deletando = "DELETE FROM ovpn where servidor_id='" . ${$GLOBALS["lyogfknl"]} . "'";
            $GLOBALS["tyebmdogcri"] = "deletando";
            $deletando = $conn->prepare($deletando);
            $deletando->execute();
        }
    } else {
        echo myalertuser("error", "Nenhum Arquivo APK encontrado neste Servidor", "../../home.php?page=servidor/servidor&id_servidor=" . ${$GLOBALS["lyogfknl"]} . "");
    }
}
