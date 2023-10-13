<?php

$GLOBALS["otoyczjysxey"] = "addnoticias";
$GLOBALS["xeycwlhfo"] = "buscnoticias";
$GLOBALS["ypmoux"] = "subtitulo";
$GLOBALS["wvkwyoty"] = "procnoticias";
$GLOBALS["hpbpcqrij"] = "msg";
$GLOBALS["cjtfhlpy"] = "titulo";
require_once "../../../pages/system/seguranca.php";
require_once "../../../pages/system/config.php";
require_once "../../../pages/system/classe.ssh.php";
require_once "../../../pages/system/funcoes.system.php";
$fqokxct = "accessKEY";
protegePagina("donoadmin");
$GLOBALS["tqndpnwdbj"] = "ipdominio";
if ($_POST["segmax"] !== $accessKEY) {
    expulsaVisitante();
    exit;
}
if ($_POST["ipmax"] !== ${$GLOBALS["tqndpnwdbj"]}) {
    expulsaVisitante();
    exit;
}
if (isset($_POST["adicionanoticia"]) && isset($_POST["owner"])) {
    $GLOBALS["hyvgtgsc"] = "msg";
    ${$GLOBALS["cjtfhlpy"]} = sql_injector2($_POST["titu"]);
    $zonykgled = "procnoticias";
    $knpgoyq = "subtitulo";
    $subtitulo = sql_injector2($_POST["subtitu"]);
    $nicwqctmhrp = "procnoticias";
    ${$GLOBALS["hpbpcqrij"]} = sql_injector2($_POST["msg"]);
    ${$zonykgled} = "select * FROM noticias where status='ativo'";
    ${$nicwqctmhrp} = $conn->prepare(${$GLOBALS["wvkwyoty"]});
    $procnoticias->execute();
    if ($procnoticias->rowCount() > 0) {
        echo myalertuser("error", "Existe uma notifica\xc3\xa7\xc3\xa3o ativa!", "../../home.php?page=apis/gerenciar");
        exit;
    }
    $nzkosmxkiw = "buscnoticias";
    if (${$GLOBALS["cjtfhlpy"]} == "") {
        echo myalertuser("warning", "T\xc3\xadtulo em branco!", "../../home.php?page=apis/gerenciar");
        exit;
    }
    if (${$GLOBALS["ypmoux"]} == "") {
        echo myalertuser("warning", "Subt\xc3\xadtulo em branco!", "../../home.php?page=apis/gerenciar");
        exit;
    }
    if (${$GLOBALS["hyvgtgsc"]} == "") {
        echo myalertuser("warning", "Mensagem em branco!", "../../home.php?page=apis/gerenciar");
        exit;
    }
    ${$GLOBALS["xeycwlhfo"]} = "select * FROM noticias";
    ${$GLOBALS["xeycwlhfo"]} = $conn->prepare(${$nzkosmxkiw});
    $buscnoticias->execute();
    if ($buscnoticias->rowCount() > 0) {
        $icrltogxw = "addnoticias";
        $ynrsqh = "msg";
        $GLOBALS["mpqoqnvi"] = "addnoticias";
        $GLOBALS["qfkchne"] = "addnoticias";
        $addnoticias = "update noticias set status='ativo', titulo='" . ${$GLOBALS["cjtfhlpy"]} . "', subtitulo='" . ${$GLOBALS["ypmoux"]} . "', msg='" . $msg . "', data='" . date("Y-m-d H:i:s") . "' where status='desativado' LIMIT 1";
        $addnoticias = $conn->prepare($addnoticias);
        $addnoticias->execute();
        echo myalertuser("success", "Notificado com sucesso!", "../../home.php?page=apis/gerenciar");
    } else {
        $smrrgyh = "subtitulo";
        $GLOBALS["hceuruulev"] = "titulo";
        $ggxkrlqhw = "addnoticias";
        $addnoticias = "insert into noticias (status,titulo,subtitulo,msg,data) values ('ativo','" . $titulo . "','" . $subtitulo . "','" . ${$GLOBALS["hpbpcqrij"]} . "','" . date("Y-m-d H:i:s") . "')";
        ${$GLOBALS["otoyczjysxey"]} = $conn->prepare(${$GLOBALS["otoyczjysxey"]});
        $addnoticias->execute();
        echo myalertuser("success", "Notificado com sucesso!", "../../home.php?page=apis/gerenciar");
    }
}
