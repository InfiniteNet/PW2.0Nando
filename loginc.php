<?php

$GLOBALS["bykprxp"] = "gerar";
$GLOBALS["lxrynvhs"] = "uid";
$GLOBALS["ootnyhhgtbh"] = "tdid";
$GLOBALS["bcxvxdr"] = "did";
$GLOBALS["xuxsezevo"] = "xtm";
$GLOBALS["izsmdzmcj"] = "senha";
$GLOBALS["oxwllst"] = "login";
require_once $_SERVER["DOCUMENT_ROOT"] . "/config/funcoes.php";
if (isset($_POST["btn_login"])) {
    $login = $_POST["login"];
    $tgfbrlow = "senha";
    $senha = $_POST["senha"];
    $tsctreeljd = "sql";
    $senha = md5($senha);
    $sql = $conn->query("SELECT * FROM usuarios WHERE login = '{$login}' AND senha = '{$senha}'");
    if ($sql->fetchColumn() > 0) {
        $GLOBALS["swsslwdmsp"] = "login";
        $fjlrrwrg = "uid";
        $rnneudsunify = "gerar";
        $conn->query("DELETE FROM sessao WHERE uid='" . getIdByNick($login) . "'");
        $uid = getIdByNick($login);
        $xtm = time() + 2000;
        $oishgxd = "uid";
        $did = $uid;
        $GLOBALS["jcnoejhtv"] = "tdid";
        $tdid = $uid . $xtm . $did;
        $gerar = md5($tdid);
        $_SESSION["logado"] = $gerar;
        $_SESSION["ipusuario"] = ipusuario();
        $conn->query("INSERT INTO sessao SET id = '" . $_SESSION["logado"] . "', uid = '{$uid}', expira = '{$xtm}' ");
        header("location: homec.php");
    } else {
        $_SESSION["erro"] = "<center><div style='padding: 1px; margin: 1px' class='alert alert-danger'>Usu\xc3\xa1rio ou senha incorretos</div></center>";
    }
}
echo "\n";
