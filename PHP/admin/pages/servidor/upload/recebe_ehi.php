<?php

$GLOBALS["cmwqhjo"] = "extensao";
$GLOBALS["dqegnudkiq"] = "nome_final";
$GLOBALS["wzfkrrdxgp"] = "_UP";
require_once "../../../pages/system/seguranca.php";
require_once "../../../pages/system/config.php";
if ($_SESSION["IPsession"] !== pega_ip()) {
    expulsaVisitante();
    exit;
}
protegePagina("donoadmin");
if ($_SESSION["tipo"] !== "donoadmin") {
    expulsaVisitante();
    exit;
}
if (isset($_POST["arquivo"]) and isset($_POST["id_servidor"])) {
    $auinpnbl = "_UP";
    ${$GLOBALS["wzfkrrdxgp"]}["pasta"] = "upload/";
    ${$auinpnbl}["tamanho"] = 268435456;
    ${$GLOBALS["wzfkrrdxgp"]}["extensoes"] = array("apk", ".apk");
    ${$GLOBALS["wzfkrrdxgp"]}["renomeia"] = true;
    ${$GLOBALS["wzfkrrdxgp"]}["erros"][0] = "N\xc3\xa3o houve erro";
    $ijtgzk = "_UP";
    $sbhzrlwbmk = "_UP";
    ${$GLOBALS["wzfkrrdxgp"]}["erros"][1] = "O arquivo no upload \xc3\xa9 maior do que o limite do PHP";
    ${$sbhzrlwbmk}["erros"][2] = "O arquivo ultrapassa o limite de tamanho especifiado no HTML";
    ${$ijtgzk}["erros"][3] = "O upload do arquivo foi feito parcialmente";
    ${$GLOBALS["wzfkrrdxgp"]}["erros"][4] = "N\xc3\xa3o foi feito o upload do arquivo";
    if ($_FILES["arquivo"]["error"] != 0) {
        die("N\xc3\xa3o foi poss\xc3\xadvel fazer o upload, erro:<br />" . ${$GLOBALS["wzfkrrdxgp"]}["erros"][$_FILES["arquivo"]["error"]]);
    } else {
        if (${$GLOBALS["wzfkrrdxgp"]}["tamanho"] < $_FILES["arquivo"]["size"]) {
            echo "O arquivo enviado \xc3\xa9 muito grande, envie arquivos de at\xc3\xa9 256Mb.";
        } else {
            $GLOBALS["vixsugrjj"] = "_UP";
            if (${$GLOBALS["wzfkrrdxgp"]}["renomeia"] == true) {
                ${$GLOBALS["dqegnudkiq"]} = time() . "." . ${$GLOBALS["cmwqhjo"]};
            } else {
                $jsjuyt = "nome_final";
                $nome_final = $_FILES["arquivo"]["name"];
            }
            if (move_uploaded_file($_FILES["arquivo"]["tmp_name"], ${$GLOBALS["vixsugrjj"]}["pasta"] . ${$GLOBALS["dqegnudkiq"]})) {
                $yqsmwc = "_UP";
                echo "Upload efetuado com sucesso!";
                echo "<br /><a href=\"" . $_UP["pasta"] . ${$GLOBALS["dqegnudkiq"]} . "\">Clique aqui para acessar o arquivo</a>";
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
