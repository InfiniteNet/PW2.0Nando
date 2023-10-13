<?php

$GLOBALS["qwtmrc"] = "nome_final";
$GLOBALS["rgoofxlgkiq"] = "_UP";
require_once "../../../pages/system/seguranca.php";
require_once "../../../pages/system/config.php";
require_once "../../../pages/system/classe.ssh.php";
require_once "../../../pages/system/funcoes.system.php";
protegePagina("donoadmin");
if (isset($_POST["arquivo"]) and isset($_POST["id_servidor"])) {
    $_UP["pasta"] = "upload/";
    $_UP["tamanho"] = 268435456;
    $GLOBALS["yilqxvb"] = "_UP";
    $_UP["extensoes"] = array("apk", ".apk");
    $_UP["renomeia"] = true;
    $auwxepshb = "_UP";
    $ottmfluuj = "_UP";
    $_UP["erros"][0] = "N\xc3\xa3o houve erro";
    $_UP["erros"][1] = "O arquivo no upload \xc3\xa9 maior do que o limite do PHP";
    $_UP["erros"][2] = "O arquivo ultrapassa o limite de tamanho especifiado no HTML";
    $_UP["erros"][3] = "O upload do arquivo foi feito parcialmente";
    $_UP["erros"][4] = "N\xc3\xa3o foi feito o upload do arquivo";
    if ($_FILES["arquivo"]["error"] != 0) {
        die("N\xc3\xa3o foi poss\xc3\xadvel fazer o upload, erro:<br />" . $_UP["erros"][$_FILES["arquivo"]["error"]]);
    } else {
        if ($_UP["tamanho"] < $_FILES["arquivo"]["size"]) {
            echo "O arquivo enviado \xc3\xa9 muito grande, envie arquivos de at\xc3\xa9 256Mb.";
        } else {
            $bvdxsfuvs = "_UP";
            if ($_UP["renomeia"] == true) {
                $GLOBALS["vqokpfwhypr"] = "extensao";
                $nome_final = time() . "." . $extensao;
            } else {
                $ogswanfowov = "nome_final";
                $nome_final = $_FILES["arquivo"]["name"];
            }
            if (move_uploaded_file($_FILES["arquivo"]["tmp_name"], ${$bvdxsfuvs}["pasta"] . ${$GLOBALS["qwtmrc"]})) {
                $GLOBALS["jpgsxptg"] = "_UP";
                echo "Upload efetuado com sucesso!";
                echo "<br /><a href=\"" . $_UP["pasta"] . ${$GLOBALS["qwtmrc"]} . "\">Clique aqui para acessar o arquivo</a>";
            } else {
                echo "N\xc3\xa3o foi poss\xc3\xadvel enviar o arquivo, tente novamente";
            }
        }
    }
} else {
    echo "<script type=\"text/javascript\">";
    echo "alert(\"Preencha todos os campos!\");";
    echo "window.location=\"../../home.php?page=servidor/servidor&id_servidor=" . $_POST["id_servidor"] . " \";";
    echo "</script>";
    exit;
}
