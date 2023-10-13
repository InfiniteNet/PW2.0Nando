<?php

$GLOBALS["ohobypzukwj"] = "link";
$GLOBALS["fzwmcnc"] = "insereinfo";
$GLOBALS["brrktb"] = "nome_final";
$GLOBALS["tlzskuj"] = "extensao";
$GLOBALS["cvcmcitdot"] = "_UP";
$GLOBALS["bpzfnwcnuc"] = "conta";
$GLOBALS["tepyqjx"] = "SQLUPinfo";
require_once "../../../pages/system/seguranca.php";
require_once "../../../pages/system/config.php";
require_once "../../../pages/system/classe.ssh.php";
protegePagina("donoadmin");
if (isset($_FILES["arquivo"])) {
    $GLOBALS["jjcjubxg"] = "_UP";
    $aelqkmsof = "link";
    $mukojkveve = "SQLUPinfo";
    $GLOBALS["hvhmroun"] = "conta";
    $link = $_POST["link"];
    $SQLUPinfo = "SELECT * FROM informativo";
    $cljwase = "_UP";
    $SQLUPinfo = $conn->prepare($SQLUPinfo);
    $SQLUPinfo->execute();
    $conta = $SQLUPinfo->rowCount();
    if ($conta > 0) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Existe um informativo ativo delete primeiro!\");";
        echo "window.location=\"home.php?page=apis/gerenciar\";";
        echo "</script>";
        exit;
    }
    ${$GLOBALS["cvcmcitdot"]}["pasta"] = "../noticias/";
    ${$GLOBALS["cvcmcitdot"]}["tamanho"] = 2097152;
    ${$GLOBALS["cvcmcitdot"]}["extensoes"] = array("jpg", "png", "gif");
    $kuuggpkemoc = "_UP";
    ${$cljwase}["renomeia"] = false;
    ${$kuuggpkemoc}["erros"][0] = "<script type=\"text/javascript\">alert(\"N\xc3\xa3o houve erro\");window.location=\"../../home.php?page=apis/gerenciar\";</script>";
    $GLOBALS["rlsexocbks"] = "_UP";
    ${$GLOBALS["cvcmcitdot"]}["erros"][1] = "<script type=\"text/javascript\">alert(\"O arquivo no upload \xc3\xa9 maior do que o limite do PHP\");window.location=\"../../home.php?page=apis/gerenciar\";</script>";
    ${$GLOBALS["rlsexocbks"]}["erros"][2] = "<script type=\"text/javascript\">alert(\"O arquivo ultrapassa o limite de tamanho especifiado no HTML\");window.location=\"../../home.php?apis/gerenciar\";</script>";
    ${$GLOBALS["jjcjubxg"]}["erros"][3] = "<script type=\"text/javascript\">alert(\"O upload do arquivo foi feito parcialmente\");window.location=\"../../home.php?page=apis/gerenciar\";</script>";
    $GLOBALS["qprmfjpwma"] = "_UP";
    ${$GLOBALS["cvcmcitdot"]}["erros"][4] = "<script type=\"text/javascript\">alert(\"N\xc3\xa3o foi feito o upload do arquivo\");window.location=\"../../home.php?page=apis/gerenciar\";</script>";
    if ($_FILES["arquivo"]["error"] != 0) {
        die("" . ${$GLOBALS["cvcmcitdot"]}["erros"][$_FILES["arquivo"]["error"]]);
    }
    ${$GLOBALS["tlzskuj"]} = strtolower(end(explode(".", $_FILES["arquivo"]["name"])));
    if (array_search(${$GLOBALS["tlzskuj"]}, ${$GLOBALS["cvcmcitdot"]}["extensoes"]) === false) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Por favor, envie arquivos com as seguintes extens\xc3\xb5es: jpg, png ou gif\");";
        echo "window.location=\"../../home.php?page=apis/gerenciar\";";
        echo "</script>";
        exit;
    }
    if (${$GLOBALS["cvcmcitdot"]}["tamanho"] < $_FILES["arquivo"]["size"]) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"O arquivo enviado \xc3\xa9 muito grande, envie arquivos de at\xc3\xa9 2Mb.\");";
        echo "window.location=\"../../home.php?page=apis/gerenciar\";";
        echo "</script>";
        exit;
    }
    if (${$GLOBALS["qprmfjpwma"]}["renomeia"] == true) {
        ${$GLOBALS["brrktb"]} = md5(time()) . ".jpg";
    } else {
        $tjerijsh = "nome_final";
        $nome_final = $_FILES["arquivo"]["name"];
    }
    if (move_uploaded_file($_FILES["arquivo"]["tmp_name"], ${$GLOBALS["cvcmcitdot"]}["pasta"] . ${$GLOBALS["brrktb"]})) {
        $sinrfzfdojq = "nome_final";
        $sxadusosy = "insereinfo";
        ${$GLOBALS["fzwmcnc"]} = "INSERT INTO informativo (data,imagem,link) values ('" . date("Y-m-d H:i:s") . "','" . $nome_final . "','" . ${$GLOBALS["ohobypzukwj"]} . "')";
        ${$GLOBALS["fzwmcnc"]} = $conn->prepare(${$sxadusosy});
        $insereinfo->execute();
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Enviado com sucesso! Informativo ativo\");";
        echo "window.location=\"../../home.php?page=apis/gerenciar\";";
        echo "</script>";
    } else {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"N\xc3\xa3o foi possivel enviar o arquivo tente novamente!\");";
        echo "window.location=\"../../home.php?page=apis/gerenciar\";";
        echo "</script>";
    }
}
