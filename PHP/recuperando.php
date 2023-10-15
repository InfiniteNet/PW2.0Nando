<?php

$GLOBALS["bwqvcuipbts"] = "sucesso";
$GLOBALS["jxuavim"] = "destinatario";
$GLOBALS["ojfuywjpgw"] = "destino";
$GLOBALS["jsyxeecqm"] = "arquivo";
$GLOBALS["bbklhxmfgu"] = "nome";
$GLOBALS["tixmply"] = "data_envio";
$GLOBALS["imsvaitldq"] = "senha";
$GLOBALS["riytjlg"] = "login";
$GLOBALS["hyiaksii"] = "recebe";
$GLOBALS["siuejucqlte"] = "email";
$GLOBALS["vhcpqriemyea"] = "SQLverifica";
require_once "pages/system/seguranca.php";
require_once "pages/system/funcoes.php";
if (isset($_POST["email"])) {
    $GLOBALS["qjqjtj"] = "email";
    $dmbsbnqy = "email";
    $GLOBALS["qfwvesupnxwe"] = "achou";
    $qepjkgegjxhp = "achou";
    $email = sql_injector($_POST["email"]);
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $GLOBALS["dgcvodjugmq"] = "email";
        $GLOBALS["odjygyro"] = "email";
        $email = $email;
    } else {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Email invalido!\");";
        echo "window.location=\"index.php\";";
        echo "</script>";
        exit;
    }
    $GLOBALS["nwyqwp"] = "SQLverifica";
    ${$GLOBALS["vhcpqriemyea"]} = "select * from usuario where email='" . ${$GLOBALS["siuejucqlte"]} . "'";
    ${$GLOBALS["vhcpqriemyea"]} = $conn->prepare(${$GLOBALS["nwyqwp"]});
    $SQLverifica->execute();
    ${$qepjkgegjxhp} = $SQLverifica->rowCount();
    if (${$GLOBALS["qfwvesupnxwe"]} > 0) {
        $aixkedvwedz = "hora_envio";
        $GLOBALS["rifkqbs"] = "nome";
        $xnhavkd = "recebe";
        $gmygbqs = "email";
        $mgekivqjfbvo = "arquivo";
        ${$GLOBALS["hyiaksii"]} = $SQLverifica->fetch();
        $ilnmeeruqcy = "corpo";
        $GLOBALS["lnfmodklihr"] = "assunto";
        ${$GLOBALS["riytjlg"]} = ${$xnhavkd}["login"];
        ${$GLOBALS["imsvaitldq"]} = ${$GLOBALS["hyiaksii"]}["senha"];
        ${$GLOBALS["tixmply"]} = date("d/m/Y");
        ${$aixkedvwedz} = date("H:i:s");
        ${$GLOBALS["bbklhxmfgu"]} = ucfirst(${$GLOBALS["rifkqbs"]});
        ${$mgekivqjfbvo} = "\n\n    <br /><b>Recupera\xc3\xa7\xc3\xa3o de Acesso</b>.<br />\n\t<b>Seus Dados de Login</b>:\n\t<br /><br />\n    <b>Email</b>: {$email} <br />\n    <b>Login</b>: {$login} <br />\n    <b>Senha</b>: {$senha} <br />\n\n    <br /><br />\n    <b>1.</b>Caso n\xc3\xa3o tenha Feito esta solicita\xc3\xa7\xc3\xa3o entre em contato Imediatamente com nosso suporte<br />\n\n    <hr><br />\n    Este e-mail foi enviado em <b>{$data_envio}</b> &agrave;s <b>{$hora_envio}\n\t";
        ${$GLOBALS["lnfmodklihr"]} = "Recupera\xc3\xa7\xc3\xa3o de Dados";
        ${$ilnmeeruqcy} = ${$GLOBALS["jsyxeecqm"]};
        ${$GLOBALS["ojfuywjpgw"]} = ${$gmygbqs};
        ${$GLOBALS["jxuavim"]} = "Suporte - Tecnico";
        ${$GLOBALS["bwqvcuipbts"]} = "Os dados foram encaminhados para o seu email com sucesso!";
        require_once "recuperandoclasse.php";
    } else {
        echo "<script type=\"text/javascript\">";
        echo "alert(\"Nenhuma conta encontrada com o email informado!\");";
        echo "window.location=\"index.php\";";
        echo "</script>";
    }
}
