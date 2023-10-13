<?php

$GLOBALS["vsrbwc"] = "local";
$GLOBALS["jskrvh"] = "file";
$GLOBALS["dxmkoloo"] = "arquivo";
$GLOBALS["nkdunhysqqub"] = "conta";
$GLOBALS["iyeekaafo"] = "SQLSubSSH";
$GLOBALS["xwhpolkml"] = "id";
require_once "../pages/system/seguranca.php";
require_once "../pages/system/config.php";
require_once "../pages/system/funcoes.php";
require_once "../pages/system/classe.ssh.php";
require_once "../pages/system/funcoesscript.php";
if (isset($_GET["id"])) {
    $psxdcm = "SQLSubSSH";
    $id = $_GET["id"];
    $GLOBALS["xifexerpm"] = "conta";
    $SQLSubSSH = "SELECT * FROM arquivo_download where id='" . $id . "'";
    $SQLSubSSH = $conn->prepare($SQLSubSSH);
    $SQLSubSSH->execute();
    $conta = $SQLSubSSH->rowCount();
    if ($conta > 0) {
        $arquivo = $SQLSubSSH->fetch();
        $file = $arquivo["nome_arquivo"];
        $eboksskh = "file";
        if (file_exists("../admin/pages/download/" . $file . "")) {
            $local = "../admin/pages/download/" . $file;
            header("Content-Type: application/force-download");
            $ongqau = "local";
            $flwbsejhutt = "local";
            header("Content-Type: application/octet-stream;");
            header("Content-Length:" . filesize($local));
            header("Content-disposition: attachment; filename=" . basename($local));
            header("Pragma: no-cache");
            header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");
            header("Expires: 0");
            ob_clean();
            flush();
            readfile($local);
            exit(0);
        } else {
            $GLOBALS["tryuhjs"] = "file";
            echo alertinfo("warning", "Arquivo " . $file . " n\xc3\xa3o foi encontrado na pasta do servidor!", "/apps");
        }
    } else {
        echo alertinfo("warning", "Arquivo n\xc3\xa3o foi encontrado no servidor!", "/apps");
    }
}
