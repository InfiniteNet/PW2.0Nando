<?php

$GLOBALS["jpngbbgnxtk"] = "separa";
$GLOBALS["vpasvjl"] = "novoNome";
$GLOBALS["hovpdr"] = "file";
$GLOBALS["khfgtceryc"] = "arquivo";
$GLOBALS["ermtgzigykrw"] = "conta";
$GLOBALS["aefvjodmpf"] = "SQLSubSSH";
$GLOBALS["muoieonewv"] = "id";
$tonpmyeyg = "usuario";
require_once "../../pages/system/seguranca.php";
require_once "../../pages/system/config.php";
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
    $GLOBALS["xzqoakyh"] = "SQLSubSSH";
    ${$GLOBALS["muoieonewv"]} = sql_injector($_GET["id"]);
    $jgnobm = "id";
    $qpcyednnry = "SQLSubSSH";
    ${$GLOBALS["aefvjodmpf"]} = "SELECT * FROM arquivo_download where id='" . $id . "'";
    ${$qpcyednnry} = $conn->prepare(${$GLOBALS["xzqoakyh"]});
    $SQLSubSSH->execute();
    ${$GLOBALS["ermtgzigykrw"]} = $SQLSubSSH->rowCount();
    if (${$GLOBALS["ermtgzigykrw"]} > 0) {
        $GLOBALS["fyxcswcwappi"] = "arquivo";
        $GLOBALS["gmrvoctxpl"] = "file";
        $zlywppbv = "file";
        $arquivo = $SQLSubSSH->fetch();
        $file = ${$GLOBALS["khfgtceryc"]}["nome_arquivo"];
        if (file_exists("../../admin/pages/download/" . $file . "")) {
            $GLOBALS["vqdtbyqzco"] = "local_arquivo";
            $lpvndi = "separa";
            $hciuwzrcjs = "local";
            $GLOBALS["vhfdnrdiv"] = "local";
            $separa = explode(".", ${$GLOBALS["hovpdr"]});
            $GLOBALS["kxlkinrfyh"] = "local";
            $GLOBALS["vgkcilsd"] = "file";
            ${$GLOBALS["vpasvjl"]} = ${$GLOBALS["jpngbbgnxtk"]}[0];
            ${$GLOBALS["vhfdnrdiv"]} = "../../admin/pages/download/" . ${$GLOBALS["vgkcilsd"]};
            header("Content-Length: " . filesize(${$GLOBALS["vqdtbyqzco"]}));
            header("Content-Disposition: filename=" . ${$GLOBALS["vpasvjl"]}[0]);
            header("Content-Disposition: attachment; filename=" . basename(${$GLOBALS["kxlkinrfyh"]}));
            readfile(${$hciuwzrcjs});
        } else {
            $nsjsuweudfq = "file";
            echo "<script type=\"text/javascript\">";
            echo "alert(\"Arquivo " . $file . " n\xc3\xa3o foi encontrado na pasta do servidor\");";
            echo "window.location=\"../../home.php?page=downloads/downloads\";";
            echo "</script>";
            exit;
        }
    } else {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Arquivo n\xc3\xa3o foi encontrado no servidor\");";
        echo "window.location=\"../../home.php?page=downloads/downloads\";";
        echo "</script>";
        exit;
    }
}
