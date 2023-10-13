<?php

$GLOBALS["xffstwnljvtf"] = "senha";
$GLOBALS["cnpzowq"] = "porta";
$GLOBALS["htkueog"] = "updatesmtp";
$GLOBALS["crneikbihqf"] = "smtp";
$GLOBALS["kqudrxukd"] = "conta";
$GLOBALS["nfqxjbrjcrl"] = "buscasmtp";
$GLOBALS["lcpehqgisqt"] = "ssl";
$GLOBALS["tvirxyesk"] = "email";
require_once "../../../pages/system/seguranca.php";
require_once "../../../pages/system/config.php";
protegePagina("donoadmin");
if (isset($_POST["servidor"])) {
    $GLOBALS["botnevlvx"] = "senha";
    $qzkiuyfym = "email";
    $lnphzvmmprsh = "servidor";
    $wtjopwgewtct = "porta";
    $owbwnsfu = "buscasmtp";
    $GLOBALS["psqctkviy"] = "buscasmtp";
    $yfyqdnuha = "porta";
    $servidor = sql_injector($_POST["servidor"]);
    $porta = sql_injector($_POST["porta"]);
    $email = sql_injector($_POST["email"]);
    $senha = sql_injector($_POST["senha"]);
    $ssl = sql_injector($_POST["ssl"]);
    if (!is_numeric($porta)) {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Defina a porta corretamente!\");";
        echo "window.location=\"../../home.php?page=email/1etapasmtp\";";
        echo "</script>";
        exit;
    }
    if (filter_var(${$qzkiuyfym}, FILTER_VALIDATE_EMAIL)) {
        $GLOBALS["ccllmpsehwo"] = "email";
        ${$GLOBALS["tvirxyesk"]} = $email;
    } else {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Email invalido!\");";
        echo "window.location=\"../../home.php?page=email/1etapasmtp\";";
        echo "</script>";
        exit;
    }
    ${$GLOBALS["nfqxjbrjcrl"]} = "SELECT * FROM smtp WHERE usuario_id='" . $_SESSION["usuarioID"] . "'";
    ${$GLOBALS["psqctkviy"]} = $conn->prepare(${$owbwnsfu});
    $buscasmtp->execute();
    ${$GLOBALS["kqudrxukd"]} = $buscasmtp->rowCount();
    if (${$GLOBALS["kqudrxukd"]} > 0) {
        $ehceeemozx = "email";
        $GLOBALS["yaigpsnov"] = "servidor";
        ${$GLOBALS["crneikbihqf"]} = $buscasmtp->fetch();
        $fzyyvgyy = "ssl";
        ${$GLOBALS["htkueog"]} = "update smtp set servidor='" . ${$GLOBALS["yaigpsnov"]} . "', porta='" . ${$GLOBALS["cnpzowq"]} . "', email='" . ${$ehceeemozx} . "', senha='" . ${$GLOBALS["xffstwnljvtf"]} . "', ssl_secure='" . $ssl . "' WHERE usuario_id='" . ${$GLOBALS["crneikbihqf"]}["usuario_id"] . "'";
        ${$GLOBALS["htkueog"]} = $conn->prepare(${$GLOBALS["htkueog"]});
        $updatesmtp->execute();
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Sucesso SMTP Atualizado!\");";
        echo "window.location=\"../../home.php?page=email/enviaremail\";";
        echo "</script>";
    } else {
        $qfxxky = "email";
        $ewsncdj = "servidor";
        ${$GLOBALS["htkueog"]} = "insert into smtp (usuario_id,servidor,porta,email,senha) values ('" . $_SESSION["usuarioID"] . "','" . $servidor . "','" . ${$GLOBALS["cnpzowq"]} . "','" . $email . "','" . ${$GLOBALS["xffstwnljvtf"]} . "')";
        ${$GLOBALS["htkueog"]} = $conn->prepare(${$GLOBALS["htkueog"]});
        $updatesmtp->execute();
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Sucesso SMTP Configurado!\");";
        echo "window.location=\"../../home.php?page=email/enviaremail\";";
        echo "</script>";
    }
}
