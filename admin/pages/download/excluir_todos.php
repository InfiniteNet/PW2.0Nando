<?php

$GLOBALS["ddjlklwojs"] = "deletando";
$GLOBALS["acvsfrphoz"] = "arquivo";
$GLOBALS["iiuyryio"] = "arquivo2";
require_once "../../../pages/system/seguranca.php";
require_once "../../../pages/system/config.php";
require_once "../../../pages/system/funcoes.system.php";
protegePagina("donoadmin");
if (isset($_GET["id"])) {
    $adihqxf = "SQLSubSSH";
    $ydujtbkbvj = "SQLSubSSH";
    $SQLSubSSH = "SELECT * FROM arquivo_download";
    $GLOBALS["tuyxog"] = "SQLSubSSH";
    $SQLSubSSH = $conn->prepare($SQLSubSSH);
    $SQLSubSSH->execute();
    if ($SQLSubSSH->rowCount() > 0) {
        $GLOBALS["vmtkyk"] = "arquivo";
        while (${$GLOBALS["vmtkyk"]} = $SQLSubSSH->fetch()) {
            $GLOBALS["meoakht"] = "arquivo2";
            ${$GLOBALS["iiuyryio"]} = "" . ${$GLOBALS["acvsfrphoz"]}["nome_arquivo"] . "";
            unlink(${$GLOBALS["meoakht"]});
            ${$GLOBALS["ddjlklwojs"]} = "DELETE FROM arquivo_download";
            ${$GLOBALS["ddjlklwojs"]} = $conn->prepare(${$GLOBALS["ddjlklwojs"]});
            $deletando->execute();
            echo myalertuser("success", "Arquivos Removidos !", "../../home.php?page=download/downloads");
        }
    } else {
        echo myalertuser("error", "Nao foi encontrado arquivos para download !", "../../home.php?page=download/downloads");
        exit;
    }
}
