<?php

$GLOBALS["suioaofbgknb"] = "local";
$GLOBALS["gdeauksif"] = "novoNome";
$GLOBALS["dshonung"] = "arquivo";
$GLOBALS["kfsjdtsfgu"] = "file";
$GLOBALS["xgendcic"] = "conta";
$GLOBALS["sfsmondb"] = "SQLSubSSH";
$GLOBALS["pvympoi"] = "id";
require_once "../../pages/system/seguranca.php";
require_once "../../pages/system/config.php";
$GLOBALS["obacmslnlf"] = "usuario";
require_once "../../pages/system/funcoes.php";
require_once "../../pages/system/classe.ssh.php";
protegePagina("user");
if ($usuario["ativo"] == 2) {
    echo "<script type=\"text/javascript\">";
    echo "window.location=\"home.php?page=suspenso\";";
    echo "</script>";
    exit;
}
if (isset($_GET["id"])) {
    $feqnybchmwr = "SQLSubSSH";
    $GLOBALS["hdzrsjbmxq"] = "id";
    $pmxqpr = "SQLSubSSH";
    $ovunfwhyomd = "conta";
    ${$GLOBALS["pvympoi"]} = sql_injector($_GET["id"]);
    ${$feqnybchmwr} = "SELECT * FROM ovpn where id='" . ${$GLOBALS["hdzrsjbmxq"]} . "'";
    ${$GLOBALS["sfsmondb"]} = $conn->prepare(${$pmxqpr});
    $SQLSubSSH->execute();
    ${$GLOBALS["xgendcic"]} = $SQLSubSSH->rowCount();
    if (${$ovunfwhyomd} > 0) {
        $GLOBALS["lcygkml"] = "file";
        $mlwzoqa = "arquivo";
        $arquivo = $SQLSubSSH->fetch();
        ${$GLOBALS["kfsjdtsfgu"]} = ${$GLOBALS["dshonung"]}["arquivo"];
        if (file_exists("../../admin/pages/servidor/ovpn/" . ${$GLOBALS["lcygkml"]} . "")) {
            $GLOBALS["tjekpzelmi"] = "local";
            $hwkvbqhbblt = "separa";
            $jikirqfaviu = "separa";
            $separa = explode(".", ${$GLOBALS["kfsjdtsfgu"]});
            ${$GLOBALS["gdeauksif"]} = $separa[0];
            ${$GLOBALS["suioaofbgknb"]} = "../../admin/pages/servidor/ovpn/" . ${$GLOBALS["kfsjdtsfgu"]};
            $kmlrdctttjm = "local_arquivo";
            header("Cache-control: private");
            header("Content-Type: application/octet-stream");
            $nlroppxox = "local";
            header("Content-Length: " . filesize($local_arquivo));
            header("Content-Disposition: filename=" . ${$GLOBALS["gdeauksif"]}[0]);
            header("Content-Disposition: attachment; filename=" . basename($local));
            readfile(${$GLOBALS["tjekpzelmi"]});
        } else {
            echo "<script type=\"text/javascript\">";
            echo "alert(\"Arquivo n\xc3\xa3o foi encontrado na pasta do servidor\");";
            echo "window.location=\"../../home.php?page=servidor/listar\";";
            echo "</script>";
            exit;
        }
    } else {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Arquivo n\xc3\xa3o foi encontrado no servidor\");";
        echo "window.location=\"../../home.php?page=servidor/listar\";";
        echo "</script>";
        exit;
    }
}
