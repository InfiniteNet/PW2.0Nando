<?php

$GLOBALS["ywiuhdkztuae"] = "destino";
$GLOBALS["nnlferwf"] = "send";
$GLOBALS["hnpayutsjgv"] = "SQLUPSMS";
$GLOBALS["lhccqowl"] = "status";
$GLOBALS["przcffxnyvj"] = "PassLocaSMS";
$GLOBALS["mtypgesqyk"] = "UserLocaSMS";
$GLOBALS["rfpcep"] = "destinatario";
$GLOBALS["fegntjxge"] = "row";
$GLOBALS["hoxdorq"] = "SQLDestinatario";
$GLOBALS["lnuvyflpkj"] = "SQLSMS";
$GLOBALS["gmcwhwyxnw"] = "LocaSMSEnabled";
$GLOBALS["kbaxcaqanp"] = "ClickAtellEnabled";
$GLOBALS["hnotmqmgfhr"] = "servidor_sms";
$GLOBALS["govpfol"] = "data";
$klppffspqpe = "SQLSMS";
require_once "seguranca.php";
require_once "config.php";
$yrkgynbket = "ClickAtellEnabled";
require_once "funcoes.php";
$data = date("Y-m-d H:i:s");
$servidor_sms = "";
if ($ClickAtellEnabled == 0 && $LocaSMSEnabled == 1) {
    $srugblgrzxr = "servidor_sms";
    $servidor_sms = "locasms";
} else {
    if ($ClickAtellEnabled == 1 && $LocaSMSEnabled == 0) {
        $servidor_sms = "clickatell";
    } else {
        $GLOBALS["kbxrfrwhz"] = "servidor_sms";
        $servidor_sms = "erro";
    }
}
${$GLOBALS["lnuvyflpkj"]} = "select * from sms WHERE status = 'Aguardando' ";
${$GLOBALS["lnuvyflpkj"]} = $conn->prepare(${$klppffspqpe});
$SQLSMS->execute();
if ($SQLSMS->rowCount() > 0) {
    $GLOBALS["mmablbnnbmxh"] = "row";
    while (${$GLOBALS["mmablbnnbmxh"]} = $SQLSMS->fetch()) {
        $ebngiptfsdil = "SQLDestinatario";
        $GLOBALS["krukgsppopw"] = "SQLDestinatario";
        ${$GLOBALS["hoxdorq"]} = "select * from usuario WHERE id_usuario = '" . ${$GLOBALS["fegntjxge"]}["id_destinatario"] . "' ";
        ${$ebngiptfsdil} = $conn->prepare(${$GLOBALS["krukgsppopw"]});
        $SQLDestinatario->execute();
        $maurgvjodynr = "servidor_sms";
        ${$GLOBALS["rfpcep"]} = $SQLDestinatario->fetch();
        if (${$maurgvjodynr} == "locasms") {
            $GLOBALS["ekmsihhddm"] = "row";
            $uljjvboqe = "destinatario";
            $zptksttne = "send";
            $GLOBALS["fngdoufhhdf"] = "send";
            $elnnyyqt = "status";
            $send = enviarLocaSMS($destinatario["celular"], $row["mensagem"], ${$GLOBALS["mtypgesqyk"]}, ${$GLOBALS["przcffxnyvj"]});
            $status = (string) (strpos($send, "SUCESSO") > 0) ? true : false;
            if (${$GLOBALS["lhccqowl"]} == "1") {
                $vwhnlkd = "SQLUPSMS";
                $GLOBALS["rlnhsonybsp"] = "data";
                $SQLUPSMS = "update sms set status='Enviado', hora_envio='" . $data . "' WHERE id_sms = '" . ${$GLOBALS["fegntjxge"]}["id_sms"] . "'  ";
                ${$GLOBALS["hnpayutsjgv"]} = $conn->prepare(${$GLOBALS["hnpayutsjgv"]});
                $GLOBALS["fxytniuxwr"] = "row";
                $SQLUPSMS->execute();
                echo "SMS ID " . $row["id_sms"] . " enviado!<br>";
            }
        }
    }
} else {
    echo "Nenhuma SMS Disparado!<br>";
}
function enviarLocaSMS($destino, $mensagem, $UserLocaSMS, $PassLocaSMS)
{
    $eeixgc = "mensagem";
    ${$GLOBALS["nnlferwf"]} = file_get_contents("http://54.173.24.177/shortcode/api.ashx?action=sendsms&lgn={$UserLocaSMS}&pwd={$PassLocaSMS}&msg=" . urlencode($mensagem) . "&numbers=" . urlencode(${$GLOBALS["ywiuhdkztuae"]}) . " ");
    return ${$GLOBALS["nnlferwf"]};
}
