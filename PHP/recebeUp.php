<?php

$GLOBALS["yzytuxeqg"] = "destino";
$GLOBALS["gdqehbeqfu"] = "novoNome";
$GLOBALS["lzrpqnol"] = "nome";
$GLOBALS["dvlbmjrwppuz"] = "arquivo_tmp";
echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\n<html>\n<head>\n    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\n    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">\n    <meta name=\"description\" content=\"Gerenciador de conex\xc3\xb4es SSH\">\n    <meta name=\"keywords\" content=\"VIP-VPS, VPS, SSH, VPN\">\n    <meta name=\"author\" content=\"Adeilsonfi\">\n    <meta name=\"msapplication-TileColor\" content=\"#1e88e5\">\n    <meta name=\"theme-color\" content=\"#1e88e5\">\n    <title> GL-GESTOR - ERRO! </title>\n</head>\n\n<body>\n<center></br>\n";
if (isset($_FILES["arquivo"]["name"]) && $_FILES["arquivo"]["error"] == 0) {
    echo "Voc\xc3\xaa enviou o arquivo: <strong>" . $_FILES["arquivo"]["name"] . "</strong><br />";
    $GLOBALS["lcopgqvbqg"] = "extensao";
    echo "Este arquivo \xc3\xa9 do tipo: <strong>" . $_FILES["arquivo"]["type"] . "</strong><br />";
    echo "Tempor\xc3\xa1riamente foi salvo em: <strong>" . $_FILES["arquivo"]["tmp_name"] . "</strong><br />";
    $GLOBALS["ocugughq"] = "extensao";
    $bxjiszvwbc = "extensao";
    echo "Seu tamanho \xc3\xa9: <strong>" . $_FILES["arquivo"]["size"] . "</strong> Bytes<br /><br />";
    header("Location: profile.php");
    $skdlrxlci = "extensao";
    $arquivo_tmp = $_FILES["arquivo"]["tmp_name"];
    $nome = $_FILES["arquivo"]["name"];
    $extensao = strrchr($nome, ".");
    $extensao = strtolower($extensao);
    if (strstr(".apk", $extensao)) {
        $lrrozwrxfvq = "destino";
        $GLOBALS["musqaqni"] = "destino";
        $GLOBALS["skjvbevtyuk"] = "novoNome";
        $novoNome = "basegl.apk";
        $destino = "base_app/basegl.apk";
        if (@move_uploaded_file($arquivo_tmp, $destino)) {
            echo "Upload feito com sucesso em : <strong>base_app/basegl.apk</strong><br />";
        } else {
            echo "Erro ao fazer upload. Aparentemente voc\xc3\xaa n\xc3\xa3o tem permiss\xc3\xa3o de escrita.<br />";
        }
    } else {
        echo "Voc\xc3\xaa poder\xc3\xa1 enviar apenas arquivos \"*.apk\"<br />";
    }
} else {
    echo "<b>Voc\xc3\xaa n\xc3\xa3o enviou nenhum arquivo!</b>";
}
echo "</center></br>\n<center><button></b><a href=\"profile.php\" class=\"text-info m-l-5\"><b> VOLTAR</b></button> </center>\n</body>\n</html>\n";
